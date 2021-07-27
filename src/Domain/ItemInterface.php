<?php

namespace Pizzaria\Domain;

interface ItemInterface
{
    public function addItem(PizzaInterface $pizza, int $quantidade): void;
    public function visualizarItem(): PizzaInterface;
}