<?php

namespace App\GeradorCombinacoes;

/**
 * Class ModeloFactory
 * @package App\GeradorCombinacoes
 */
class ModeloFactory
{
    /**
     * @param int $inicio
     * @param int $fim
     * @param int $agrupamento
     * @return Modelo
     */
    public static function criar($inicio, $fim, $agrupamento)
    {
        return new Modelo($inicio, $fim, $agrupamento);
    }
}