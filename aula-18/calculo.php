<?php 
    $a = 34;
    $b = 3.4;

    $soma = $a + $b;
    $subtracao = $a - $b;
    $divisao = $a / $b;
    $multiplicacao = $a * $b;

    echo $soma."<br/>";
    echo $subtracao."<br/>";
    echo $divisao."<br/>";
    echo $multiplicacao."<br/>";

    if($soma < 10){
        echo "soma menor que 10 <br/>";
    }else{
        echo "soma maior ou igual a 10 <br/>";
    }

    if($subtracao > 20){
        echo "subtração maior que 20 <br/>";
    }elseif($subtracao == 20){
        echo "subtração igual a 20 <br/>";
    }else{
        echo "subtração menor que 20 <br/>";
    }

    $v = 0;

    switch($v){
        case 12:
        case 11:
        case 10:
            echo "oi";
            break;
        case 9:
            echo "olá";
            break;
        case 8:
            echo "Olá";
            break;
        default:
            echo "Oi";
    }
    
?>