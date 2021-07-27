<?php

namespace Pizzaria\Entity;

use Ds\Vector;
use Pizzaria\Domain\SaborInterface;
use Pizzaria\Domain\SaborPizzaInterface;

class Sabor implements SaborInterface
{
    private Vector $ingredientes;

    public function __construct()
    {
        $this->ingredientes = new Vector();
    }

    public function addIngrediente(SaborPizzaInterface $ingrediente): void
    {
        $this->ingredientes->push($ingrediente);
    }

    public function visualizarIngredientes(): Vector
    {
        return $this->ingredientes->copy();
    }
}