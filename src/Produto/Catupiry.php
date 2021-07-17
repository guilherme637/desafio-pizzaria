<?php

namespace Pizzaria\Produto;

class Catupiry extends \Pizzaria\Abstrato\ProdutoAbstract
{
    protected float $valor = 9.00;

    public function __construct(int $qtd)
    {
        parent::__construct($qtd);
    }

}