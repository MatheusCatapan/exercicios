<?php 

    $anoNascimento = readline();

    $idade = 2025 - $anoNascimento;
    echo "Você tem $idade anos" . "\n";
    
    if ($idade >=16 && $idade < 18) {
        echo "Você pode votar!";
    }   elseif ($idade >= 18) {
            echo "Você pode votar e dirigir!";
    }   else {
        echo "Você não pode votar nem dirigir!";
    }




    
