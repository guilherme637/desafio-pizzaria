<?php

namespace Pizzaria\Domain;

interface FormataValorInterface
{
    public function valorFormatadoReal(float $valor): string;
}