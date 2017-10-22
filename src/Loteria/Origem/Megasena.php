<?php

namespace App\Loteria\Origem;

use App\Loteria\Origem;

/**
 * Class Megasena
 * @package App\Loterias\Origem
 */
class Megasena extends Origem
{
    const NOME = 'megasena';
    const QUANTIDADE_NUMEROS = 60;
    const QUANTIDADE_NUMEROS_SORTEADOS = 6;
    const QUANTIDADE_MINIMA_NUMEROS_ESCOLHER = 6;
    const QUANTIDADE_MAXIMA_NUMEROS_ESCOLHER = 15;
}