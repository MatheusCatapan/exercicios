<?php 

    $nota1 = readline();
    $nota2 = readline();
    $media = ($nota1 + $nota2) / 2;

    if ($media >= 6) {
        echo "Aprovado!";
    } else {
        echo "Reprovado!";
    }
