<?php

namespace Pizzaria;

class Refrigerante
{
    private string $sabor;
    private float $litros;

    public function __construct(string $sabor, float $litros)
    {
        $this->sabor = $sabor;
        $this->litros = $litros;
    }

    public function getSabor(): string
    {
        return $this->sabor;
    }

    public function getLitros(): float
    {
        return $this->litros;
    }
}