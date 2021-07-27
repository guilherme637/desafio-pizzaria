<?php

use Pizzaria\Entity\Item;
use Pizzaria\Entity\Comanda;
use Pizzaria\Entity\Pedido;
use Pizzaria\Entity\PizzaMedia;
use Pizzaria\QuantidadeEnum;
use Pizzaria\Entity\Sabor;
use Pizzaria\Sabor\Mussarela;
use Pizzaria\Sabor\Portuguesa;

require_once 'vendor/autoload.php';

$filaPedido =  new Pedido();
$pedidoGuilherme = new Comanda();
$item = new Item();
$pizza = new PizzaMedia();
$sabor = new Sabor();

$sabor->addIngrediente(new Portuguesa());
$sabor->addIngrediente(new Mussarela());
$pizza->addPrimeiroSabor($sabor);
$pizza->addPrimeiroSabor($sabor);
$item->addItem($pizza, QuantidadeEnum::UM);
$pedidoGuilherme->addPedido($item);

$pedidoGuilherme->comanda();