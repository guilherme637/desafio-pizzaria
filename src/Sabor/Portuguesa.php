<?php

namespace Pizzaria\Sabor;

use Ds\Vector;
use Pizzaria\Domain\SaborPizzaInterface;
use Pizzaria\Entity\Sabor;
use Pizzaria\Ingredientes\Azeitona,
    Pizzaria\Ingredientes\Calabresa,
    Pizzaria\Ingredientes\Cebola,
    Pizzaria\Ingredientes\Massa,
    Pizzaria\Ingredientes\Mussarela,
    Pizzaria\Ingredientes\Ovo,
    Pizzaria\Ingredientes\Palmito,
    Pizzaria\Ingredientes\Tomate;

class Portuguesa implements SaborPizzaInterface
{
    private string $nomePizza = 'Portuguesa';
    private Vector $ingredientes;

    public function __construct()
    {
        $this->ingredientes = new Vector();
        $this->addIngredientes();
    }

    private function addIngredientes()
    {
        $this->ingredientes->push(new Tomate(2));
        $this->ingredientes->push(new Palmito(5));
        $this->ingredientes->push(new Ovo(3));
        $this->ingredientes->push(new Mussarela(10));
        $this->ingredientes->push(new Massa(1));
        $this->ingredientes->push(new Cebola(2));
        $this->ingredientes->push(new Calabresa(5));
        $this->ingredientes->push(new Azeitona(10));
    }

    public function nomePizza(): string
    {
        return $this->nomePizza;
    }

    public function visualizarIngredientesPizza(): object
    {
        return $this->ingredientes->copy();
    }
}