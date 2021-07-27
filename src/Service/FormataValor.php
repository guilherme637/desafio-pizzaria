<?php

namespace Pizzaria\Service;

use Pizzaria\Domain\FormataValorInterface;

class FormataValor implements FormataValorInterface
{
    public function valorFormatadoReal(float $valor): string
    {
        return number_format($valor, '2', ',', '.');
    }
}