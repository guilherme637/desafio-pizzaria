<?php

namespace Pizzaria\Domain;

interface ComandaInterface
{
    public function addPedido(ItemInterface $item): void;
    public function comanda(): void;
}