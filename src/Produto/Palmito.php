<?php

namespace Pizzaria\Produto;

class Palmito extends \Pizzaria\Abstrato\ProdutoAbstract
{
    protected float $valor = 10.00;

    public function __construct(int $qtd)
    {
        parent::__construct($qtd);
    }
}