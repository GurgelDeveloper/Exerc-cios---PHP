<?php
    $list = array(4,4,4);
    $indice = count($list);
    for($i = 0;$i < $indice; $i++){
        $soma = $soma + $list[$i];
    }
    $media = $soma/$indice;

    echo $media;
?>