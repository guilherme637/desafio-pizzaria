<?php

namespace Pizzaria\Entity;

use Cassandra\Date;
use Ds\Vector;
use Pizzaria\Build\ComandaBuild;
use Pizzaria\Domain\ComandaBuildInterface;
use Pizzaria\Domain\ItemInterface;
use Pizzaria\Domain\ComandaInterface;

class Comanda implements ComandaInterface
{
    private Vector $pedido;
    private ComandaBuildInterface $comandaBuild;

    public function __construct()
    {
        $this->pedido = new Vector();
        $this->comandaBuild =  new ComandaBuild();
    }

    public function addPedido(ItemInterface $item): void
    {
        $this->pedido->push($item);
    }

    public function comanda(): void
    {
        $arrayIngredientes = $this->pedido->get(0)
            ->visualizarItem()
            ->visualizarSabor();

        $this->comandaBuild->visualizarComanda($arrayIngredientes);
    }
}