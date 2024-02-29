<?php
    function somar($a, $b) {
        return $a + $b;
    }

    function subtrair($a, $b) {
        return $a - $b;
    }

    function multiplicar($a, $b) {
        return $a * $b;
    }

    function dividir($a, $b) {
        if ($b == 0) {
            return "Divisão por zero não é permitida.";
        } else {
            return $a / $b;
        }
    }

    echo "Soma: " . somar(10, 8) . "<br>";
    echo "Subtração: " . subtrair(10, 8) . "<br>";
    echo "Multiplicação: " . multiplicar(10, 3) . "<br>";
    echo "Divisão: " . dividir(10, 5) . "<br>";

?>