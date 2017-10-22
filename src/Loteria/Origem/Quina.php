<?php

namespace App\Loteria\Origem;

use App\Loteria\Origem;

/**
 * Class Quina
 * @package App\Loterias\Origem
 */
class Quina extends Origem
{
    const NOME = 'quina';
    const QUANTIDADE_NUMEROS = 80;
    const QUANTIDADE_NUMEROS_SORTEADOS = 5;
    const QUANTIDADE_MINIMA_NUMEROS_ESCOLHER = 5;
    const QUANTIDADE_MAXIMA_NUMEROS_ESCOLHER = 15;
}