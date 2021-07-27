<?php

namespace Pizzaria\Domain;

use Pizzaria\Entity\Sabor;

interface PizzaPequenaInterface
{
    public function addSabor(Sabor $sabor): void;
}