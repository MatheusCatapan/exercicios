<?php 

    $salario = 1500;
    $quilowatts = readline();
    //100kw = 1/7 de 1500 = 214, 1kw = 2.14.
    
    //Valor em reais de cada quilowatt
    $kw = ($salario / 7) / 100;
    echo "R$" . number_format($kw, 2) . "\n";
    //Valor em reais a ser pago
    $vTotal = $kw * $quilowatts;
    echo "R$" . number_format($vTotal, 2) . "\n";

    //Valor a ser pago com desconto
    $vDesconto = $vTotal * 0.9 . "\n";
    echo "R$" . number_format($vDesconto, 2) . "\n";