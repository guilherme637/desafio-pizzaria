<?php

namespace Pizzaria;

class Pedido
{
    private array $comanda;

    public function pedidos(string $nome, Comanda $comandaCliente)
    {
        $this->comanda[$nome] = $comandaCliente;
    }

    public function verificarPedido(): array
    {
        return $this->comanda;
    }
}