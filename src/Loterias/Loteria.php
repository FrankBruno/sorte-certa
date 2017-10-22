<?php

namespace App\Loterias;

/**
 * Interface Loteria
 * @package App
 */
class Loteria
{
    /**
     * @var string
     */
    protected $nome = '';
    /**
     * @var int
     */
    protected $quantidadeNumeros = 0;
    /**
     * @var int
     */
    protected $quantidadeNumerosSorteados = 0;
    /**
     * @var int
     */
    protected $quantidadeMinimaNumerosEscolher = 0;
    /**
     * @var int
     */
    protected $quantidadeMaximaNumerosEscolher = 0;
    /**
     * @var array
     */
    protected $numeracao = [];

    /**
     * Loteria constructor.
     * @param string $nome
     * @param int $quantidadeNumeros
     * @param int $quantidadeNumerosSorteados
     * @param int $quantidadeMinimaNumerosEscolher
     * @param int $quantidadeMaximaNumerosEscolher
     * @param array $numeracao
     */
    public function __construct($nome, $quantidadeNumeros, $quantidadeNumerosSorteados, $quantidadeMinimaNumerosEscolher, $quantidadeMaximaNumerosEscolher, array $numeracao)
    {
        $this->nome = $nome;
        $this->quantidadeNumeros = $quantidadeNumeros;
        $this->quantidadeNumerosSorteados = $quantidadeNumerosSorteados;
        $this->quantidadeMinimaNumerosEscolher = $quantidadeMinimaNumerosEscolher;
        $this->quantidadeMaximaNumerosEscolher = $quantidadeMaximaNumerosEscolher;
        $this->numeracao = $numeracao;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return int
     */
    public function getQuantidadeNumeros(): int
    {
        return $this->quantidadeNumeros;
    }

    /**
     * @return int
     */
    public function getQuantidadeNumerosSorteados(): int
    {
        return $this->quantidadeNumerosSorteados;
    }

    /**
     * @return int
     */
    public function getQuantidadeMinimaNumerosEscolher(): int
    {
        return $this->quantidadeMinimaNumerosEscolher;
    }

    /**
     * @return int
     */
    public function getQuantidadeMaximaNumerosEscolher(): int
    {
        return $this->quantidadeMaximaNumerosEscolher;
    }

    /**
     * @return array
     */
    public function getNumeracao(): array
    {
        return $this->numeracao;
    }
}
