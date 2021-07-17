<?php

namespace Pizzaria;

use Pizzaria\Domain\Tipo\PizzaMediaInterface;
use Pizzaria\Domain\PizzaInterface;
use Pizzaria\Domain\SaborInterface;

class PizzaMedia implements PizzaMediaInterface, PizzaInterface
{
    private array $sabor;

    public function primeiroSabor(SaborInterface $sabor): SaborInterface
    {
        return $this->sabor[] = $sabor;
    }

    public function segundoSabor(SaborInterface $sabor): SaborInterface
    {
        return $this->sabor[] = $sabor;
    }
}