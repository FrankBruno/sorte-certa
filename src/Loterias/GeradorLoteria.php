<?php

namespace App\Loterias;

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
    public static function gerar(LoteriaInterface $loteria)
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