<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {

   $conta['saldo'] -= 500;

    if ($conta['saldo'] > 0){
        echo $cpf . " " . $conta['titular']. " " . $conta['saldo'] .  PHP_EOL;
    } else {
        echo $conta['titular'] ." não pode sacar por falta de saldo na conta" .  PHP_EOL;
    }
} 