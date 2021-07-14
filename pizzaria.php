<?php

require_once 'Pedido.php';
require_once 'Pizza.php';
require_once 'Refrigerante.php';
require_once 'Comanda.php';

$pedido = new Pedido();
$ingredientePortugues = new Pizza();

$ingredientePortugues->addIngrediente('massa');
$ingredientePortugues->addIngrediente('palmito');
$ingredientePortugues->addIngrediente('queijo');

$portugues = new Comanda($ingredientePortugues, new Refrigerante('coca-cola', 2));

$pedido->pedidos('Guilherme', $portugues);

var_dump($ingredientePortugues->relatorioIngrediente(), $pedido->verificarPedido());