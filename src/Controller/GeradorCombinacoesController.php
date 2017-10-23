<?php

namespace App\Controller;

use App\Loteria\GeradorLoteria;
use App\Gerador\Combinacao;
use App\Gerador\ModeloFactory;
use App\Gerador\Arquivo;
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
        ini_set('display_errors', 0);

        $response = new Response();
        $response->headers->set('Content-Type', 'text/html');

        try {

            $geradorArquivo = new Arquivo(
                GeradorLoteria::gerar($nomeLoteria),
                new ModeloFactory(),
                new Combinacao()
            );

            $geradorArquivo->gerar();

            $response->setContent($geradorArquivo->getMensagensGeracaoParaExibicao());
            $response->setStatusCode(Response::HTTP_CREATED);

        } catch (\Exception $e) {
            $response->setContent($e->getMessage());
            $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return $response;
    }
}