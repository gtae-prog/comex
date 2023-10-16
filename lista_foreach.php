<?php

include_once 'functions.php';

$lista_frutas = [
    'Maca' => [
        'preco' => 1.99,
        'estoque' => 250
    ],
    'Pera' => [
        'preco' => 5.99,
        'estoque' => 100
    ],
    'Uva' => [
        'preco' => 0.99,
        'estoque' => 90
    ]
];

foreach ($lista_frutas as $fruta => $atributo) {
    echo $fruta . " - Preço=" . $atributo['preco'] . " " .ConsultaEstoque($atributo) . PHP_EOL;
}

$lista_frutas['Maca'] = addQuantidade($lista_frutas['Maca'], 50);

$lista_frutas['Uva'] = removeFruta($lista_frutas['Uva'], 10);

echo PHP_EOL;

foreach ($lista_frutas as $fruta => $atributo) {
    echo $fruta . " - Preço=" . $atributo['preco'] . " " .ConsultaEstoque($atributo) . PHP_EOL;
}





