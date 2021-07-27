<?php


namespace Pizzaria\Sabor;


use Ds\Vector;
use Pizzaria\Domain\SaborPizzaInterface;
use Pizzaria\Ingredientes\Cebola;
use Pizzaria\Ingredientes\Massa;
use Pizzaria\Ingredientes\Mussarela as MussarelaAlias;
use Pizzaria\Ingredientes\Tomate;

class Mussarela implements SaborPizzaInterface
{
    private string $nomePizza = 'Mussarela';
    private Vector $ingredientes;

    public function __construct()
    {
        $this->ingredientes = new Vector();
        $this->addIngredientes();
    }

    public function addIngredientes()
    {
        $this->ingredientes->push(new Tomate(2));
        $this->ingredientes->push(new MussarelaAlias(10));
        $this->ingredientes->push(new Massa(1));
        $this->ingredientes->push(new Cebola(2));
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