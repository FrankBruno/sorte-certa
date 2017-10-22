<?php

namespace App\Loterias;

use App\LoteriaInterface;

/**
 * Class Megasena
 * @package App\Loterias
 */
class Megasena implements LoteriaInterface
{
    /**
     * @return string
     */
    public function getNome(): string
    {
        return self::class;
    }

    /**
     * @return int
     */
    public function getQuantidadeNumeros(): int
    {
        return 60;
    }

    /**
     * @return int
     */
    public function getQuantidadeNumerosSorteados(): int
    {
        return 6;
    }

    /**
     * @return int
     */
    public function getQuantidadeMinimaNumerosEscolher(): int
    {
        return 6;
    }

    /**
     * @return int
     */
    public function getQuantidadeMaximaNumerosEscolher(): int
    {
        return 15;
    }

    /**
     * @return array
     */
    public function getNumeracao(): array
    {
        return rand(1, 60);
    }
}