<?php

namespace Pizzaria\Build;

use Ds\Vector;
use Pizzaria\AbstractClass\IngredienteAbstract;
use Pizzaria\Entity\Sabor;
use Pizzaria\Service\FormataValor;
use Pizzaria\Domain\ComandaBuildInterface;
use Pizzaria\Domain\FormataValorInterface;

class ComandaBuild implements ComandaBuildInterface
{
    private Vector $valorTotal;
    private FormataValorInterface $formataValor;

    public function __construct()
    {
        $this->valorTotal = new Vector();
        $this->formataValor = new FormataValor();
    }

    /**
     * @param Sabor $pedido
     */
    public function visualizarComanda(Sabor $pedido): void
    {
        foreach ($pedido->visualizarIngredientes() as $keySabor => $sabor ) {
            echo "\n\n";
            echo " \t\t\t Ingredientes da pizza " . $sabor->nomePizza() . PHP_EOL;
            echo "\n\n";

            foreach ($sabor->visualizarIngredientesPizza() as $ingrediente) {
                echo 'Nome do Ingrediente: ' . $ingrediente->nomeIngrediente() . PHP_EOL;
                echo 'Quantidade Gasta: ' . $ingrediente->recuperaQuantidade() . PHP_EOL;
                echo 'Valor unidade: R$ ' . $this->formataValor
                        ->valorFormatadoReal($ingrediente->recuperaValor()) . PHP_EOL;
                echo 'Valor gasto: R$ ' . $this->formataValor
                        ->valorFormatadoReal($ingrediente->valorTotalGasto()) . PHP_EOL;
                echo '--------------------------' . PHP_EOL;
                $this->valorTotal->push($ingrediente->valorTotalGasto());
            }
        }


        $valorPizza = $this->valorTotalPizza();

        echo  'Valor: R$ ' . $this->formataValor->valorFormatadoReal($valorPizza) . PHP_EOL;
    }

    private function valorTotalPizza(): int
    {
        return $this->valorTotal->reduce(
                fn(): int => $this->valorTotal->sum(),
                0
        );
    }
}