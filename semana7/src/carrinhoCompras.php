<?php

namespace comex\semana7;

class carrinhoCompras
{

    public function __construct
    (
        private array $produtos
    ){
    }

    public function getProdutos(Produto $produto) : void
    {
        array_push($this->produtos,$produto);
    }

    public function removeProduto(string $produto) : void
    {
       foreach ($this->produtos as $produto){
         
          if ($produto->getProduto() == $produto){
                    $produto->getProduto()->removeElement($produto);
                    break;

            }
        }

    }

    public function getValorTotal() : float
    {
        $total = 0;
        
        foreach ($this->produtos as $produto){
            $total += $produto->getPreco();
        }

        return $total;
    }

    public function calculaDesconto() : Float
    {
        $valor = $this->getValorTotal();
        return $valor >= 100 ? $valor * 0.9 : $valor;
    }

}