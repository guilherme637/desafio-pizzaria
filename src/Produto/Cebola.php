<?php

namespace Pizzaria\Produto;

use Pizzaria\Abstrato\ProdutoAbstract;

class Cebola extends ProdutoAbstract
{
    protected float $valor = 2.50;

    public function __construct(int $qtd)
    {
        parent::__construct($qtd);
    }
}