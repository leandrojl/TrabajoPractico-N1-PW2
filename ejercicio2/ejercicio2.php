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

?>
<div class="w3-container w3-padding-32 w3-round-large">
    <div class="w3-card-4 w3-margin-bottom w3-padding">
        <header class="w3-container w3-teal w3-round-large">
            <h2>Ejercicio 2: Binomio cuadrado perfecto</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
                Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
                recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
                2
                a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
                potencia
                b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
                desarrollada del binomio: a
                2^2 + 2*a*b + b^2

            </p>
        </div>
        <header class="w3-container w3-light-green w3-round-large">
            <h2>Resultado ejercicio 2:</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
                Para resolver este ejercicio se llama a la funcion binomioCuadradoPerfecto_a($valor1, $valor2) o a la funcion binomioCuadradoPerfecto_b($valor1, $valor2), se le pasan dos valores por parametro que devolveran el resultado del binomio cuadrado perfecto.
            </p>
            <p>
                <!-- Resultado por pantalla -->
                <?php
                echo 'El Resultado del binomio cuadrado perfecto tipo A es:'.binomioCuadradoPerfecto_a(2,2);
                echo '</br>';
                echo 'El Resultado del binomio cuadrado perfecto tipo B es:'.binomioCuadradoPerfecto_b(2,2);
                ?>
            </p>
        </div>
    </div>
</div>