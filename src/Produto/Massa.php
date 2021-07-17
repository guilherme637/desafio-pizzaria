<?php

namespace Pizzaria\Produto;

use Pizzaria\Abstrato\ProdutoAbstract;

class Massa extends ProdutoAbstract
{
    protected float $valor = 13.00;

    public function __construct(int $qtd)
    {
        parent::__construct($qtd);
    }
}