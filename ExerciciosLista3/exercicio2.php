<?php 

    $soma = 0;

    for ($i = 1; $i <= 10; $i++) {
        $valor = readline("Informe o $i º valor: ");
        $soma += $valor;
    }

    $media = $soma / 10;
    echo "A soma desses valores é: " . $soma . "\n";
    echo "A média desses valores é: " . $media;
