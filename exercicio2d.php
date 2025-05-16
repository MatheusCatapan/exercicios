<?php 

    $salario = 1500;
    $quilowatts = readline();
    //100kw = 1/7 de 1500 = 214, 1kw = 2.14.
    
    //Valor em reais de cada quilowatt
    $kw = ($salario / 7) / 100;
    $kw = $kw * $quilowatts;

    //Valor em reais a ser pago
    $vTotal = $kw * $quilowatts;
    echo $vTotal;