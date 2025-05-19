<?php 

    $salario = 1500;
    $quilowatts = readline();
    
    $kw = ($salario / 7) / 100;
    echo "R$" . number_format($kw, 2) . "\n";
 
    $vTotal = $kw * $quilowatts;
    echo "R$" . number_format($vTotal, 2) . "\n";

 
    $vDesconto = $vTotal * 0.9 . "\n";
    echo "R$" . number_format($vDesconto, 2) . "\n";