<?php

namespace Pizzaria\Domain;

use Pizzaria\Entity\Sabor;

interface ComandaBuildInterface
{
    public function visualizarComanda(Sabor $pedido): void;
}