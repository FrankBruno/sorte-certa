<?php

namespace App\Loteria;

/**
 * Class GeradorLoteria
 * @package App\Loterias
 */
class GeradorLoteria
{
    /**
     * @param string $nomeLoteria
     * @return Loteria
     */
    public static function gerar($nomeLoteria = '')
    {
        $classe = 'App\Loteria\\Origem\\' . ucfirst($nomeLoteria);

        return new Loteria(new $classe());
    }
}