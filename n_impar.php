<?php

$numero = 1;

for ($numero = 1; $numero <= 100; $numero++) {
        
    if ($numero % 2 == 0 ){
        echo "O número  $numero é par." ;
    }else{
        echo "O número  $numero é ímpar." ;
    }
    
    echo PHP_EOL;
};

