<?php

class Pedido
{
    private array $comanda;

    public function pedidos(string $nome, Comanda $comanda)
    {
        $this->comanda[$nome] = $comanda;
    }

    public function verificarPedido(): array
    {
        return $this->comanda;
    }
}