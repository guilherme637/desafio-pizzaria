<?php

namespace Pizzaria;

use Pizzaria\Domain\SaborInterface;

class PizzaGrande implements Domain\Tipo\PizzaGrandeInterface
{
    private array $sabor;

    public function primeiroSabor(SaborInterface $sabor)
    {
        $this->sabor[] = $sabor;
    }

    public function segundoSabor(SaborInterface $sabor)
    {
        $this->sabor[] = $sabor;
    }

    public function terceiroSabor(SaborInterface $sabor)
    {
        $this->sabor[] = $sabor;
    }
}