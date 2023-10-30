<?php

namespace comex\semana7;

use InvalidArgumentException;

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
        
    public function addProdutos(int $codigo, int $estoque) : Void
    {
        try {
            if ($this->codigo === $codigo) {
                if ($estoque <= 0) {
                    throw new InvalidArgumentException("Estoque insuficiente");
                }

                $this->qtdeEstoque += $estoque;

            } else {
                throw new InvalidArgumentException("Produto não encontrado.");
            }
        } catch (InvalidArgumentException $error) {
            echo "Erro ao adicionar produto: " . $error->getMessage();
        }
    }

    public function removerProduto(int $codigo, int $estoque): void {
        try {
            if ($this->codigo === $codigo) {
             
                if ($estoque > $this->qtdeEstoque) {
                    throw new InvalidArgumentException("Quantidade informada é maior que a quantidade em estoque.");
                }

                $this->qtdeEstoque -= $estoque;
               
            } else {
                throw new InvalidArgumentException("Produto não encontrado.");
            }
        } catch (InvalidArgumentException $error) {
            echo "Erro ao remover produto: " . $error->getMessage();
        }
    }


}