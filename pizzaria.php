<?php

use Pizzaria\Ingrediente;
use Pizzaria\Pizza;
use Pizzaria\PizzaMedia;
use Pizzaria\Produto\Cebola;
use Pizzaria\Produto\Massa;
use Pizzaria\Produto\Mussarela;
use Pizzaria\Produto\Tomate;
use Pizzaria\Sabor\Portuguesa;

require_once 'vendor/autoload.php';

$pizza = new Pizza();
$tipoPizza = new PizzaMedia();
$sabor = new Portuguesa();
$ingrediente = new Ingrediente();

$tipoPizza->primeiroSabor(new Portuguesa());
$tipoPizza->segundoSabor(new Portuguesa());

$ingrediente->novoIngrediente(new Tomate(1));
$ingrediente->novoIngrediente(new Massa(1));
$ingrediente->novoIngrediente(new Cebola(2));
$ingrediente->novoIngrediente(new Mussarela(10));

$sabor->addIngrediente($ingrediente);

$pizza->addTipoPizza($tipoPizza);
$pizza->addSabor($sabor);
echo $ingrediente->valor();
exit();

