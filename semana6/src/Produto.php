<?php

namespace comex\semana6;

class Produto
{

    public function __construct
    (
        private int $codigo,
        private string $nome, 
        private float $preco, 
        private int $qtdeEstoque,

    ){}
    
    //getters
    
    public function getCodigo(): string {
        return $this->codigo;
    }

    public function getNome(): string {
        return $this->nome;
    }
   
    public function getPreco(): float {
        return $this->preco;
    }

    public function getQuantidadeEstoque(): int {
        return $this->qtdeEstoque;
    }

    public function getValorEmEstoque() : float
    {
        return $this->qtdeEstoque * $this->preco;
    }

    //setters

    public function setCodigo($valor): void {
        $this->codigo = $valor;
    }

    public function setNome(string $valor): void {
        $this->nome = $valor;
    }

    public function setPreco(float $valor): void {
        $this->preco = $valor;
    }
   

    public function setQuantidadeEstoque(int $valor): void {
        $this->qtdeEstoque = $valor;
    }


}