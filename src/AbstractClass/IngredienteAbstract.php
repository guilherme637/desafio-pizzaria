<?php

namespace Pizzaria\AbstractClass;

abstract class IngredienteAbstract
{
    protected string $nomeIngrediente;
    protected float $valor;
    protected int $quantidadeUsado;

    public function __construct(int $qtdUsado)
    {
        $this->quantidadeUsado = $qtdUsado;
    }

    abstract function valorTotalGasto(): string;
    abstract function nomeIngrediente(): string;
    abstract function recuperaValor(): float;
    abstract function recuperaQuantidade(): int;

    protected function valorGasto(): string
    {
        $valorGasto = $this->valor * $this->quantidadeUsado;

//        return number_format($valorGasto, 2, ',');
        return $valorGasto;
    }

}