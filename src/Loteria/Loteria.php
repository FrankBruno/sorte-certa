<?php

namespace App\Loteria;

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
     * @param Origem $loteriaOrigem
     */
    public function __construct(Origem $loteriaOrigem)
    {
        $this->nome = $loteriaOrigem::NOME;
        $this->quantidadeNumeros = $loteriaOrigem::QUANTIDADE_NUMEROS;
        $this->quantidadeNumerosSorteados = $loteriaOrigem::QUANTIDADE_NUMEROS_SORTEADOS;
        $this->quantidadeMinimaNumerosEscolher = $loteriaOrigem::QUANTIDADE_MINIMA_NUMEROS_ESCOLHER;
        $this->quantidadeMaximaNumerosEscolher = $loteriaOrigem::QUANTIDADE_MAXIMA_NUMEROS_ESCOLHER;
        $this->numeracao = range(1, $loteriaOrigem::QUANTIDADE_NUMEROS);
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
