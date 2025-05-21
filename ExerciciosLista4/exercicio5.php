<?php 

    $vetor = [];

    for ($i = 0; $i < 10; $i++) {
        $vetor[] = (int)readline("Número $i: ");
} 
    
$vetorInverso = array_reverse($vetor);

print_r($vetorInverso);