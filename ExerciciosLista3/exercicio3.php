<?php 

    $soma = (int) readline();

    do {
        $valor = (int) readline();
        $soma += $valor;
    } while ($valor != 0);

    echo "A soma dos números digitados é: " . $soma . "\n";