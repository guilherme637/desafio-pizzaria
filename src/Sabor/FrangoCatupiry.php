<?php

namespace Pizzaria\Sabor;

use Pizzaria\Domain\IngredienteInterface;
use Pizzaria\Domain\SaborInterface;
use Pizzaria\Ingrediente;

class FrangoCatupiry implements SaborInterface
{
    private IngredienteInterface $ingrediente;

    public function __construct()
    {
        $this->ingrediente = new Ingrediente();
    }

    public function ingrediente(IngredienteInterface $ingrediente)
    {

    }
}