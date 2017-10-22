<?php

namespace App\GeradorCombinacoes;

/**
 * Class Gerador
 * @package App\GeradorCombinacoes
 */
class Gerador
{
    /**
     * @var Modelo
     */
    private $modelo;

    /**
     * @var
     */
    private $conteudo;

    /**
     * @var int
     */
    private $quantidadeCombinacoes = 0;


    /**
     * Gerador constructor.
     * @param Modelo $modelo
     */
    public function __construct(Modelo $modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return int
     */
    public function getQuantidadeCombinacoes(): int
    {
        return $this->quantidadeCombinacoes;
    }

    /**
     * @return string
     */
    public function gerarConteudo()
    {
        return $this->gerar(
            $this->modelo->getInicio(),
            $this->modelo->getFim(),
            $this->modelo->getAgrupamento()
        );
    }

    /**
     * @param $valorInicial
     * @param $valorLimite
     * @param int $limiteIncrementado
     * @param int $indiceIncrementado
     * @param array $arrau
     * @return mixed
     */
    public function gerar($valorInicial, $valorLimite, $limiteIncrementado = 0, $indiceIncrementado= 1, $arrau = [])
    {
        for ($i = $valorInicial; $i <= $valorLimite; $i++) {
            $novoArray = array_merge($arrau, [$i]);
            if ($indiceIncrementado < $limiteIncrementado) {
                $this->gerar($i + 1, $valorLimite, $limiteIncrementado, $indiceIncrementado + 1, $novoArray);
            } else {
                $this->quantidadeCombinacoes++;
                $this->conteudo .= implode(',', $novoArray) . PHP_EOL;
            }
        }

        return $this->conteudo;
    }
}