<?php 

    $soma = 0;
    $quantidade = 0;
    
    for ($i = 50; $i <= 70; $i++) {
        if ($i % 2 == 0){
            $soma += $i;
            $quantidade++;
        }
    }
$media = $soma / $quantidade;
echo "A média dos pares de 50 a 70 é: " . $media . "\n";
echo "A soma dos pares de 50 a 70 é: " . $soma;
