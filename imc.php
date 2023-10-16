<?php

$Altura = 1.80;
$Peso = 80;

// IMC (kg/m²)
$resultado  = $Peso / ($Altura ** 2);

if ($resultado < 8.5) {
    echo 'Seu IMC está abaixo do peso';
}elseif ($resultado > 18.5 and $resultado < 24.9) {
    echo 'Peso normal';
}elseif ($resultado > 25 and $resultado < 29.9) {
    echo 'Você está com sobre peso';
}elseif ($resultado > 30 and $resultado < 34.9) {
    echo 'Obesidade grau 1';
}elseif ($resultado > 35 and $resultado < 39.9) {
    echo 'Obesidade grau 2';
}else{
    echo 'Obesidade grau 3';
}