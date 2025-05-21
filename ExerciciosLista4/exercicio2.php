<?php 

    $numeros = array();
    $quantidadePares = 0;
    $quantidadeImpares = 0;

    for ($i = 1; $i < 11; $i++) {
        echo "Digite o " . $i . "º " . "valor";
        $entrada = readline();
        $numero = intval($entrada);
        $numeros [] = $numero;
    }
    
    function impar($numero) {
        return $numero % 2 != 0;
    }

    function par($numero) {
        return $numero % 2 == 0;
    }

    foreach ($numeros as $numero){
        if ($numero % 2 == 0) {
            $quantidadePares++;
        }
    }
    foreach ($numeros as $numero) {
        if ($numero % 2 != 0) {
            $quantidadeImpares++;
        }
    }

    $numerosImpares = array_filter($numeros, 'impar');
    $numerosPares = array_filter($numeros, 'par');
    
    print_r($numerosPares);
    print_r($numerosImpares);
    echo "Quantidade de números pares: $quantidadePares \n";
    echo "Quantidade de números ímpares: $quantidadeImpares"; 