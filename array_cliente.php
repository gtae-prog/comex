<?php

$clientes['Fulano de tal'] = [
    'e-mail' => 'fulano.tal@gmail.com',
    'celuar' => '(11) 9999-1234',
    'endereco'=> 'Rua sem nome, 181'
];

foreach ($clientes as $cliente => $nome) {
    echo $cliente;
}