<?php

namespace App\Controller;

use App\Loterias\GeradorLoteria;
use App\GeradorCombinacoes\Gerador;
use App\GeradorCombinacoes\ModeloFactory;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class LoteriaController
 * @package App\Controller
 * @Route("/gerador-combinacoes")
 */
class GeradorCombinacoesController
{
    /**
     * @Route("/gerar/{nomeLoteria}", name="gerar-combinacoes", methods={"POST"})
     * @param $nomeLoteria
     * @return Response
     */
    public function geradorAction($nomeLoteria)
    {

        ini_set('memory_limit', -1);
        ini_set('max_execution_time', 0);

        $response = new Response();
        $response->headers->set('Content-Type', 'text/html');

        try {

            $nomeLoteria = 'App\Loterias\\' . ucfirst($nomeLoteria);
            $objetoLoteria = new $nomeLoteria();

            $loteria = GeradorLoteria::gerar($objetoLoteria);

            $modelo = ModeloFactory::criar(
                1,
                $loteria->getQuantidadeNumeros(),
                $loteria->getQuantidadeNumerosSorteados()
            );

            $gerador = new Gerador($modelo);

            $nomeArquivo = __DIR__ . "/../Arquivos/{$loteria->getNome()}/combinacoes.txt";
            file_put_contents($nomeArquivo, $gerador->gerarConteudo());

            $mensagem = "Combinações da {$loteria->getNome()} do 1 ao {$loteria->getQuantidadeNumeros()}, em grupos de {$loteria->getQuantidadeNumerosSorteados()} foram geradas e salva no arquivo: {$nomeArquivo} .";

            $response->setContent($mensagem);
            $response->setStatusCode(Response::HTTP_CREATED);

        } catch (\Exception $e) {
            $response->setContent($e->getMessage());
            $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return $response;
    }
}