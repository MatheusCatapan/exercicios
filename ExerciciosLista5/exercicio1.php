<?php 

    function multiplo4($a, $b) {
        if ($b % 4 == 0) {
            return true;
        } else {
            return false;
        }
    }
   $resultado1 = multiplo4(2, 3);
    if ($resultado1) {
        echo "O número é multiplo de 4 \n";
    } else {
        echo "O número não é múltiplo de 4 \n";
    }
   
    function parImpar($a) {
        if ($a % 2 == 0) {
            return true;
        } else
            return false;
    }
    $resultado2 = parImpar(3);
    if ($resultado2) {
        echo "O número é par\n";
    } else {
        echo "O número é impar\n";
    }

    function somaEntre($a, $b) {
    $soma = 0;

    $menor = min($a, $b);
    $maior = max($a, $b);
    
    for ($i = $menor + 1; $i < $maior; $i++) {
        $soma += $i;
    }    
    
    return $soma;
    }

    $a = (int) readline("Digite o primeiro número inteiro positivo: ");
    $b = readline("Diite o segundo número inteiro positivo: ");

    if ($a <= 0 || $b <= 0) {
        echo "Os dois números devem ser positivos\n";
    }else {
        $resultado3 = somaEntre($a, $b);
        echo "A some dos números entre $a e $b é: $resultado3\n";
    }

    $valorA = (int) readline("Digite o valor a (a >= 1): ");
    $valorB = (int) readline("Digite o valor de b: ");
    $valorC = (int) readline("Digite o valor de c: ");

    if ($valorA < 1) {
        echo "O valor deve ser maior que 0";
    } else {
        $soma = 0;
    }
        for ($i = $valorB; $i <= $valorC; $i++) {
            if ($i % $valorA == 0) {
            $soma += $i;
        }    
        }
        
echo "A soma dos números divisíveis por $valorA entre $valorB e $valorC é: $soma\n";  


function homem($altura) {
        return 72.7 * $altura - 58;
 }

    function mulher($altura) {
        return 62.1 * $altura - 44.7;
    }

    $genero = readline("Digite seu gênero (m para masculino, f para feminino) ");
    $altura = (float) readline("Digite sua altura (em metros, ex 1.80) ");

    if ($genero === "m") {
        $pesoIdeal = homem($altura);
        echo "Seu peso ideal é: " . number_format($pesoIdeal, 2) . " kg\n";
    }elseif ($genero === "f") {
        $pesoIdeal = mulher($altura);
        echo "Seu peso ideal é: " . number_format($pesoIdeal, 2) . " kg\n";
    }else {
        echo "Gênero inválido.";
    }
    
    function m($altura) {
        return 72.7 * $altura - 58;
 }

    function f($altura) {
        return 62.1 * $altura - 44.7;
    }

    $genero = readline("Digite seu gênero (m para masculino, f para feminino) ");
    $altura = (float) readline("Digite sua altura (em metros, ex 1.80) ");

    if ($genero === "m") {
        $pesoIdeal = m($altura);
        echo "Seu peso ideal é: " . number_format($pesoIdeal, 2) . " kg\n";
    }elseif ($genero === "f") {
        $pesoIdeal = f($altura);
        echo "Seu peso ideal é: " . number_format($pesoIdeal, 2) . " kg\n";
    }else {
        echo "Gênero inválido.";
    }
        
    

  