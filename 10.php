<?php
$numero1 = 0;
$numero2 = 1;
for ($i = 0; $i < 10; $i++) {
    $proximo = $numero1 + $numero2;
    echo $proximo . " ";
    $numero1 = $numero2;
    $numero2 = $proximo;
}
?>