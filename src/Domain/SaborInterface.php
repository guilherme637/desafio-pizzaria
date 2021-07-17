<?php

namespace Pizzaria\Domain;

interface SaborInterface
{
    public function addIngrediente(IngredienteInterface $ingrediente);
}