<?php

namespace Pizzaria\Entity;

use Ds\Vector;
use Pizzaria\Domain\PizzaInterface;
use Pizzaria\Domain\PizzaMediaInterface;
use Pizzaria\Domain\SaborInterface;
use Pizzaria\Domain\SaborPizzaInterface;

class PizzaMedia implements PizzaInterface, PizzaMediaInterface
{
    private Vector $sabor;

    public function __construct()
    {
        $this->sabor = new Vector();
    }

    public function addPrimeiroSabor(SaborInterface $sabor)
    {
        $this->sabor->push($sabor);
    }

    public function addaSegundoSabor(SaborInterface $sabor)
    {
        $this->sabor->push($sabor);
    }

    /**
     * @return Sabor
     */
    public function visualizarSabor(): object
    {
        return $this->sabor->copy()->get(0);
    }
}