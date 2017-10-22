<?php

namespace App\GeradorCombinacoes;

/**
 * Class Gerador
 * @package App\GeradorCombinacoes
 */
class Gerador
{
    /**
     * @var
     */
    private $conteudo;

    /**
     * @var int
     */
    private $quantidadeCombinacoes = 0;

    /**
     * @return int
     */
    public function getQuantidadeCombinacoes(): int
    {
        return $this->quantidadeCombinacoes;
    }

    /**
     * @param Modelo $modelo
     * @return string
     */
    public function gerar(Modelo $modelo)
    {
        return $this->gerarCombinacoes(
            $modelo->getInicio(),
            $modelo->getFim(),
            $modelo->getAgrupamento()
        );
    }

    /**
     * @param $valorInicial
     * @param $valorLimite
     * @param int $limiteIncrementado
     * @param int $indiceIncrementado
     * @param array $arrau
     * @return string
     */
    private function gerarCombinacoes($valorInicial, $valorLimite, $limiteIncrementado = 0, $indiceIncrementado= 1, $arrau = [])
    {
        for ($i = $valorInicial; $i <= $valorLimite; $i++) {
            $novoArray = array_merge($arrau, [$i]);
            if ($indiceIncrementado < $limiteIncrementado) {
                $this->gerarCombinacoes($i + 1, $valorLimite, $limiteIncrementado, $indiceIncrementado + 1, $novoArray);
            } else {
                $this->quantidadeCombinacoes++;
                $this->conteudo .= implode(',', $novoArray) . PHP_EOL;
            }
        }

        return $this->conteudo;
    }
}