<?php

namespace Pizzaria\Ingredientes;

use Pizzaria\AbstractClass\IngredienteAbstract;

class Tomate extends IngredienteAbstract
{
    protected string $nomeIngrediente = 'Tomate';
    protected float $valor = 0.90;

    public function __construct(int $qtdUsado)
    {
        parent::__construct($qtdUsado);
    }

    public function valorTotalGasto(): string
    {
        return $this->valorGasto();
    }

    public function nomeIngrediente(): string
    {
        return $this->nomeIngrediente;
    }

    public function recuperaValor(): float
    {
        return $this->valor;
    }

    public function recuperaQuantidade(): int
    {
        return $this->quantidadeUsado;
    }
}