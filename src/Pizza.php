<?php

namespace Pizzaria;

use Pizzaria\Domain\PizzaInterface;
use Pizzaria\Domain\SaborInterface;

class Pizza
{
    private array $arreySabor;
    private array $pizza;
    private array $sabor;

    public function addTipoPizza(PizzaInterface $tipoPizza)
    {
        $this->pizza[] = $tipoPizza;
    }

    public function addSabor(SaborInterface $sabor): void
    {
        $this->arreySabor[] = $sabor;
    }

    public function test()
    {
        var_dump($this->pizza);
    }
}