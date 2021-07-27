<?php

namespace Pizzaria\Entity;

use Ds\Vector;
use Pizzaria\Domain\PizzaInterface;
use Pizzaria\Domain\PizzaPequenaInterface;

class PizzaPequena implements PizzaInterface, PizzaPequenaInterface
{
    private Vector $sabor;

    public function __construct()
    {
        $this->sabor = new Vector();
    }

    public function addSabor(Sabor $sabor): void
    {
        $this->sabor->push($sabor);
    }

    /**
     * @return Sabor
     */
    public function visualizarSabor(): Sabor
    {
        return $this->sabor->copy()->get(0);
    }

}