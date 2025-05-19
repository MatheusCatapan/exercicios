<?php 

    $quantidadeMacas = readline();

    if($quantidadeMacas >= 12) {
        $valor = 1.00;
    } else {
        $valor = 1.30;
    }

    $totalCompra = $valor * $quantidadeMacas;
    echo $totalCompra;