<?php

namespace Pizzaria\Abstrato;

abstract class ProdutoAbstract
{
    protected int $quantidade;
    protected float $valor;

    public function __construct(int $qtd)
    {
        if ($qtd === 0) {
            throw new \DomainException('Informe a quantidade');
        }
        $this->quantidade = $qtd;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
}