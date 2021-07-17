<?php

namespace Pizzaria\Domain\Tipo;

use Pizzaria\Domain\SaborInterface;

interface PizzaGrandeInterface
{
    public function primeiroSabor(SaborInterface $sabor);
    public function segundoSabor(SaborInterface $sabor);
    public function terceiroSabor(SaborInterface $sabor);
}