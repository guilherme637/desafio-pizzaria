<?php

namespace Pizzaria\Entity;

use DomainException;
use Ds\Vector;
use Pizzaria\Domain\ItemInterface;
use Pizzaria\Domain\PizzaInterface;

class Item implements ItemInterface
{
    private Vector $item;
    private Vector $quantidade;

    public function __construct()
    {
        $this->item = new Vector();
        $this->quantidade = new Vector();
    }

    /**
     * @param PizzaInterface $pizza
     * @param int $quantidade
     */
    public function addItem(PizzaInterface $pizza, int $quantidade): void
    {
        if ($quantidade === 0) {
            throw new DomainException('Informe a quantidade das pizzas.');
        }

        $this->quantidade->push($quantidade);

        $this->item->allocate($this->quantidade->count());
        $this->item->push($pizza);
    }

    public function visualizarItem(): PizzaInterface
    {
        return $this->item->copy()->get(0);
    }
}