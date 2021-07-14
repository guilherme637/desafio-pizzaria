<?php

class Comanda
{
    private Pizza $pizza;
    private ?Refrigerante $refrigerante;

    public function __construct(Pizza $pizza, Refrigerante $refrigerante = null)
    {
        if (is_null($pizza)) {
            throw new DomainException('Informe o sabor da pizza');
        }

        $this->pizza = $pizza;
        $this->refrigerante = $refrigerante;
    }

    public function getPizza(): Pizza
    {
        return $this->pizza;
    }

    public function getRefrigerante(): ?Refrigerante
    {
        return $this->refrigerante;
    }


}