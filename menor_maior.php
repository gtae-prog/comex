<?php

include_once 'functions.php';

$lista_produtos = [
    'Mouse' => [
        'preco' => 30.00,
        'estoque' => 15
    ],
    'Teclado' => [
        'preco' => 45.99,
        'estoque' => 8
    ],
    'Monitor' => [
        'preco' => 790.99,
        'estoque' => 5
    ]
];

$resultado = MaiorMenor($lista_produtos);

echo 'Maior valor: ' . $resultado['maior'] . PHP_EOL;
echo 'Menor valor: ' . $resultado['menor'] . PHP_EOL;