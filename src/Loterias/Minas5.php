<?php

namespace App\Loterias;

/**
 * Class Minas5
 * @package App\Loterias
 */
class Minas5 implements LoteriaInterface
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
        return 34;
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
        return 5;
    }

    /**
     * @return array
     */
    public function getNumeracao(): array
    {
        range(1, 34);
    }
}