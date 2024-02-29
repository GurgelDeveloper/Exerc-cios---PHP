<?php
    $string = 'subi no onibus';
    $stringreverse = strrev($string);
    if($string == $stringreverse){
        echo $string . " É um palíndromo";
    }else{
        echo $string . " Não é um palíndromo";
    }
?>