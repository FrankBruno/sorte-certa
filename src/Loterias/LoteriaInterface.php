<?php

namespace App\Loterias;

/**
 * Interface LoteriaInterface
 * @package App
 */
interface LoteriaInterface
{
    public function getNome(): string;

    public function getQuantidadeNumeros(): int;

    public function getQuantidadeNumerosSorteados(): int;

    public function getQuantidadeMinimaNumerosEscolher(): int;

    public function getQuantidadeMaximaNumerosEscolher(): int;

    public function getNumeracao(): array;
}