<?php

namespace Pizzaria\Produto;

use Pizzaria\Abstrato\ProdutoAbstract;

class Mussarela extends ProdutoAbstract
{
    protected float $valor = 5.25;

    public function __construct(int $qtd)
    {
        parent::__construct($qtd);
    }
}