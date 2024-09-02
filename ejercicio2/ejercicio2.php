<?php

function binomioCuadradoPerfecto_a($a,$b){
  $resultado = pow(($a+$b),2);


  return $resultado;
}

function binomioCuadradoPerfecto_b($a,$b){
    $primerNumeroAlCuadrado = pow($a,2);
    //print_r($primerNumeroAlCuadrado);
    $segundoNumeroAlCuadrado = pow($b,2);
    $DosPorElPrimerParametroPorSegundoElParametro = 2*$a*$b;


    return $primerNumeroAlCuadrado + $segundoNumeroAlCuadrado + $DosPorElPrimerParametroPorSegundoElParametro;
}

echo 'El Resultado del binomio cuadrado perfecto tipo A es:'.binomioCuadradoPerfecto_a(2,2);
echo '</br>';
echo 'El Resultado del binomio cuadrado perfecto tipo B es:'.binomioCuadradoPerfecto_b(2,2);