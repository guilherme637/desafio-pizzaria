<?php

namespace Pizzaria\Domain\Tipo;

use Pizzaria\Domain\SaborInterface;

interface PizzaPequenaInterface
{
    public function unicoSabor(SaborInterface $sabor);
}