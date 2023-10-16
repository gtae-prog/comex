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

function MaiorMenor($produtos)
{
    $maior = $produtos['preco'];
    $menor = $produtos['preco'];

    foreach ($produtos as $produto) {
        
        $preco = $produto['preco'];

        if ($preco > $maior) {
            $maior = $preco;
        }

        if ($preco < $menor) {
            $menor = $preco;
        }
    }

    return array('maior' => $maior, 'menor' => $menor);

}