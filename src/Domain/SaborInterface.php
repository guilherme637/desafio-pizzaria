<?php

namespace Pizzaria\Domain;

use Ds\Vector;

interface SaborInterface
{
    public function addIngrediente(SaborPizzaInterface $ingrediente): void;
    public function visualizarIngredientes(): Vector;

}