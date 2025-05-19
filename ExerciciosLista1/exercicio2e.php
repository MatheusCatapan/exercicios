<?php 

    $base = readline();
    $altura = readline();

    $perimetro = 2 * ($base + $altura);
    $area = $base * $altura;
    $diagonal = sqrt(($altura ** 2) + ($base **2));

    echo "O perímetro é: " . $perimetro . "\n";
    echo "A área é: " . $area . "\n";
    echo "A diagonal é: " . $diagonal . "\n";

