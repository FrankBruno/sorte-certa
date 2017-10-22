<?php

namespace App\Loterias;

/**
 * Class Lotofacil
 * @package App\Loterias
 */
class Lotofacil implements LoteriaInterface
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
        return 25;
    }

    /**
     * @return int
     */
    public function getQuantidadeNumerosSorteados(): int
    {
        return 15;
    }

    /**
     * @return int
     */
    public function getQuantidadeMinimaNumerosEscolher(): int
    {
        return 15;
    }

    /**
     * @return int
     */
    public function getQuantidadeMaximaNumerosEscolher(): int
    {
        return 18;
    }

    /**
     * @return array
     */
    public function getNumeracao(): array
    {
        return range(1, 25);
    }
}