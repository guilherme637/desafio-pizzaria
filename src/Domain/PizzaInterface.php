<?php

namespace Pizzaria\Domain;

use Pizzaria\Entity\Sabor;

interface PizzaInterface
{
    public function visualizarSabor(): object;

}