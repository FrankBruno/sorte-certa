<?php

namespace App\Gerador;

use App\Loteria\Loteria;
use Symfony\Component\Config\Definition\Exception\Exception;

/**
 * Class Arquivo
 * @package App\GeradorCombinacoes
 */
class Arquivo
{
    const DIRETORIO_ARQUIVOS = __DIR__ . '/../../var/arquivos/';

    /**
     * @var Loteria
     */
    private $loteria;

    /**
     * @var ModeloFactory
     */
    private $modeloFactory;

    /**
     * @var Combinacao
     */
    private $gerador;

    /**
     * @var Modelo
     */
    private $modelo;

    /**
     * @var string
     */
    private $nomeArquivo;

    /**
     * @var array
     */
    private $mensagensGeracao = [];

    /**
     * Arquivo constructor.
     * @param Loteria $loteria
     * @param ModeloFactory $modeloFactory
     * @param Combinacao $gerador
     */
    public function __construct(Loteria $loteria, ModeloFactory $modeloFactory, Combinacao $gerador)
    {
        $this->loteria = $loteria;
        $this->modeloFactory = $modeloFactory;
        $this->gerador = $gerador;

        $this->modelo = $this->modeloFactory->criar(
            1,
            $this->loteria->getQuantidadeNumeros(),
            $this->loteria->getQuantidadeNumerosSorteados()
        );

        $this->nomeArquivo = self::DIRETORIO_ARQUIVOS . $this->loteria->getNome() . '/combinacoes.txt';
    }

    /**
     * @return array
     */
    public function getMensagensGeracao(): array
    {
        return $this->mensagensGeracao;
    }

    /**
     * @param string $mensagensGeracao
     */
    public function adicionarMensagemGeracao(string $mensagensGeracao)
    {
        $this->mensagensGeracao[] = $mensagensGeracao;
    }

    public function gerar() : void
    {
        try {
            $this->adicionarMensagemGeracao('Iniciando geração do arquivo.');

            $this->criarArquivo($this->nomeArquivo, $this->getConteudo($this->modelo));

            $this->adicionarMensagemGeracao("Geração realizada com suscesso.");
        } catch (Exception $e) {
            $this->adicionarMensagemGeracao('Não foi possível gerar arquivo: ' . $e->getMessage());
        }
    }

    /**
     * @param Modelo $modelo
     * @return string
     */
    private function getConteudo(Modelo $modelo): string
    {
        return $this->gerador->gerar($modelo);
    }

    /**
     * @param string $nome
     * @param string $conteudo
     */
    private function criarArquivo($nome = '', $conteudo = ''): void
    {
        $this->adicionarMensagemGeracao("Criando arquivo em disco.");

        file_put_contents($nome, $conteudo);

        $this->adicionarMensagemGeracao("Combinações da loteria {$this->loteria->getNome()} do 1 ao {$this->loteria->getQuantidadeNumeros()}, em grupos de {$this->loteria->getQuantidadeNumerosSorteados()} foram geradas e salva no arquivo: {$this->nomeArquivo}.");
    }

    /**
     * @return string
     */
    public function getMensagensGeracaoParaExibicao(): string
    {
        $mensagem = '';

        array_map(function ($msg) use (&$mensagem) {
            $mensagem .= $msg . PHP_EOL;
        }, $this->mensagensGeracao);

        return trim($mensagem, PHP_EOL);
    }

}