<?php

namespace App\Loterias;

use App\LoteriaInterface;

/**
 * Class Quina
 * @package App\Loterias
 */
class Quina implements LoteriaInterface
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
        return 80;
    }

    /**
     * @return int
     */
    public function getQuantidadeNumerosSorteados(): int
    {
        return 5;
    }

    /**
     * @return int
     */
    public function getQuantidadeMinimaNumerosEscolher(): int
    {
        return 5;
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
        range(1, 80);
    }
}