<?php

namespace comex\semana7;

class Cliente
{

    public function __construct
    (
        private int $id,
        private string $nome, 
        private string $email, 
        private string $celular, 
        private string $endereco,
        private array $pedidos
    ){
    }

//getters

    public function getID(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCelular(): string
    {
        return $this->celular;
    }
    
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function getpedidos(): array{
        return $this->pedidos;
    }

// setters

    public function setId($valor) : void
    {
       $this->id = $valor;
    }
    
    public function setNome($valor) : void
    {
       $this->nome = $valor;
    }

    public function setEmail($valor) : void
    {
      $this->email = $valor;
    }

    public function setCelular($valor) : void
    {
        $this->celular = $valor;
    }

    public function setEndereco($valor) : void
    {
        $this->endereco = $valor;
    }

    public function addPedido(Pedido $pedido) : void
    {
        //$this->pedidos[] = $pedido;
        array_push($this->pedidos, $pedido);
    }

// formats regex

    public function celularFormatado(): string
    {
        // 11988580848 -> 11 9 8858 0848 \d [0-9]
        return preg_replace("/(\d{2})(\d{1})(\d{4})(\d{4})/","($1) $2 $3 $4", $this->celular);
    }

}
