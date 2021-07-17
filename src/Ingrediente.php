<?php

namespace Pizzaria;

use Pizzaria\Abstrato\ProdutoAbstract;
use Pizzaria\Domain\IngredienteInterface;

class Ingrediente implements IngredienteInterface
{
    private array $ingredientes;

    public function novoIngrediente(ProdutoAbstract $ingrediente)
    {
        $this->ingredientes[] = $ingrediente;
    }

    public function valor(): string
    {
        $valoresIngredientes = [];

        foreach ($this->ingredientes as $value => $ingrediente) {
            $valoresIngredientes[] = $ingrediente->getValor() * $ingrediente->getQuantidade();
        }

        return 'Valor gasto para fazer a pizza R$' . array_sum($valoresIngredientes);
    }
}