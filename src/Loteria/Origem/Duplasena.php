<?php

namespace App\Loteria\Origem;

use App\Loteria\Origem;

/**
 * Class Duplasena
 * @package App\Loterias\Origem
 */
class Duplasena extends Origem
{
    const NOME = 'duplasena';
    const QUANTIDADE_NUMEROS = 50;
    const QUANTIDADE_NUMEROS_SORTEADOS = 6;
    const QUANTIDADE_MINIMA_NUMEROS_ESCOLHER = 6;
    const QUANTIDADE_MAXIMA_NUMEROS_ESCOLHER = 15;
}