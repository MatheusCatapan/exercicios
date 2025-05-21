<?php 

    $vetorA = [];
    $vetorB = [];
    $vetorC = [];

    echo "Insira os números que serão multiplicados: ";
    for ($i = 0; $i < 10; $i++) {
        $vetorA [] = (int)readline("Número: $i:");
    }
    
    
    echo "Insira o multiplicador: ";
    $vetorB [] = readline();

    for ($i = 0; $i < 10; $i++) {
        $vetorC []= $vetorA[$i] * $vetorB[0];
    }

    print_r($vetorC);