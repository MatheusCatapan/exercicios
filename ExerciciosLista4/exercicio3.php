<?php 

    $numeros = array();

    for ($i = 0; $i <=10; $i++) {
        do {
            echo "Digite o " . $i . "º número ";
            $input = readline();

            if (is_numeric($input) && $input >= 0) {
                $numeros[] = (int)$input;
                break;
            } else {
                echo "Insira um número POSITIVO.\n";
            }

        }
        while (true);
    }  


    $maior = max($numeros);
    $posicao = array_search ($maior, $numeros);

    echo "Maior valor: $maior " . "\n";
    echo "Posição: " .  $posicao;