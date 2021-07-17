<?php

namespace Pizzaria\Produto;

use Pizzaria\Abstrato\ProdutoAbstract;

class Tomate extends ProdutoAbstract
{
    protected float $valor = 1.00;

    public function __construct(int $qtd)
    {
        parent::__construct($qtd);
    }
}