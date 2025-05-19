<?php 

    $valorUm = (float)readline();
    $valorDois = (float) readline();

    if($valorUm == $valorDois) {
        echo "Erro!";
    }   elseif($valorUm > $valorDois) {
        echo "$valorUm é maior que $valorDois!"; 
    } else {
        echo "$valorDois é maior que $valorUm!";
    }