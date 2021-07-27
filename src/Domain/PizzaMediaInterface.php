<?php

namespace Pizzaria\Domain;

interface PizzaMediaInterface
{
    public function addPrimeiroSabor(SaborInterface $sabor);
    public function addaSegundoSabor(SaborInterface $sabor);
}