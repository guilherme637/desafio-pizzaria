<?php

namespace Pizzaria\Domain\Tipo;

use Pizzaria\Domain\SaborInterface;

interface PizzaMediaInterface
{
    public function primeiroSabor(SaborInterface $sabor): SaborInterface;

    public function segundoSabor(SaborInterface $sabor): SaborInterface;
}