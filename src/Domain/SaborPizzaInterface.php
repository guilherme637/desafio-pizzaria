<?php

namespace Pizzaria\Domain;

interface SaborPizzaInterface
{
    public function nomePizza(): string;
    public function visualizarIngredientesPizza(): object;

}