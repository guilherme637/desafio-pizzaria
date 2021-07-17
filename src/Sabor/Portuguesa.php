<?php

namespace Pizzaria\Sabor;

use Pizzaria\Domain\IngredienteInterface;
use Pizzaria\Domain\SaborInterface;

class Portuguesa implements SaborInterface
{
    private array $ingrediente;

    public function addIngrediente(IngredienteInterface $ingrediente)
    {
        $this->ingrediente[] = $ingrediente;
    }

}