<?php

class Ingrediente
{
    private array $ingredientes;

    public function __construct(string $ingredientes)
    {
        $this->ingredientes[] = $ingredientes;
    }

}