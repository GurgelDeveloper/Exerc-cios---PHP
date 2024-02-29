<?php
    function calcularArea($raio){
        return pi() * ($raio**2);
    }
    $raio = 5;
    echo "A área do círculo é: " . calcularArea($raio);
?>