<?php

namespace App\Loterias;

/**
 * Class Duplasena
 * @package App\Loterias
 */
class Duplasena implements LoteriaInterface
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
        return 50;
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
        return range(1, 50);
    }
}