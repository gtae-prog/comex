<?php

namespace comex\semana7;

class Pedido
{

    public function __construct
    (
        private int $id,
        private string $cliente, 
        private array $produtos, 
           
     ){}
    

    //getters

    public function getID() : int 
    {
        return $this->id;
    }

    public function getCliente() : string
    {
        return $this->cliente;
    }

    public function getProduto() : array
    {
        return $this->produtos;
    }
    
    //setters

    public function setID(int $id) : Void
    {
        $this->id = $id;
    }

    public function setCliente(string $cliente) : Void
    {
        $this->cliente = $cliente;
    }

    public function getValorTotal()
    {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total;
    }
}
