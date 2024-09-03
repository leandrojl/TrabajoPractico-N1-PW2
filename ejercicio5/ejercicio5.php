<?php
function sumatoria_a($array){
    $resultado=0;
    for($i=0;$i<count($array);$i++){
        $resultado = $resultado + $array[$i];
    }
    echo $resultado;
}

function sumatoria_b($arrayDeNumeros){
    $resultado=0;
    foreach($arrayDeNumeros as $numero){
        $resultado= $resultado + $numero;
    }
    echo $resultado;
}
function sumatoria_c($arrayDeNumeros){
    $resultado=0;
    $i=0;
    while($i<count($arrayDeNumeros)){
        $resultado = $resultado + $arrayDeNumeros[$i];
        $i++; //condicion de salida
    }
    echo $resultado;
}

