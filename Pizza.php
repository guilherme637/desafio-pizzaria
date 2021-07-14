<?php

require_once 'Ingrediente.php';

class Pizza
{
    private array $sabor;

    public function addIngrediente(
        string $novoIngrediente
    ) {
        $this->sabor[] = new Ingrediente($novoIngrediente);
    }

    public function relatorioIngrediente(): array
    {
        return $this->sabor;
    }
}