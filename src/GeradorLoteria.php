<?php

namespace App;

/**
 * Class GeradorLoteria
 * @package App
 */
class GeradorLoteria
{
    /**
     * @param LoteriaInterface $loteria
     * @return Loteria
     */
    public function gerar(LoteriaInterface $loteria)
    {
        return new Loteria(
            $loteria->getNome(),
            $loteria->getQuantidadeNumeros(),
            $loteria->getQuantidadeNumerosSorteados(),
            $loteria->getQuantidadeMinimaNumerosEscolher(),
            $loteria->getQuantidadeMaximaNumerosEscolher(),
            $loteria->getNumeracao()
        );
    }
}