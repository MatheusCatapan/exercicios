<?php 

    $vetorA = [];
    $vetorB = [];

    for ($i = 0; $i <= 10; $i++) {
        $vetorA[] = readline("Insira o número de " . $i . "º posição: ");
    }

    for ($i = 0; $i <= 10; $i++) {
        $vetorB[] = readline("Insira o núemro de " . $i . "º posição: ");

        $resultado[] = $vetorA [$i] * $vetorB [$i];
    }

    print_r($resultado);