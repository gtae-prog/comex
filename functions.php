<?php

function addQuantidade(array $fruta, int $qtde) : array
{
    $fruta['estoque'] += $qtde;
    return $fruta;
}

function removeFruta(array $fruta, int $qtde) : array
{
    $fruta['estoque'] -= $qtde;
    return $fruta;
}

function ConsultaEstoque(array $fruta)
{
   return "A quantidade atual no estoque da fruta é: {$fruta['estoque']}";
}



