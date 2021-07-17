<?php

namespace Pizzaria\Domain;

use Pizzaria\Abstrato\ProdutoAbstract;

interface IngredienteInterface
{
    public function novoIngrediente(ProdutoAbstract $ingrediente);
}