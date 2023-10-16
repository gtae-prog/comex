<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[4]. PHP_EOL;

echo $umaIdade;

$idadeList = [21, 23, 19, 25, 30, 41, 18];

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

$nomes = array("João","Maria","Pedro","Ana");

for($indice=0; $indice<count($nomes) ;$indice++){
    echo $nomes[$indice].PHP_EOL;
}