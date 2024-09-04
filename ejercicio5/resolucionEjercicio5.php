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

?>

<div class="w3-container w3-padding-32 w3-round-large">

    <div class="w3-card-4 w3-margin-bottom w3-padding">
        <header class="w3-container w3-teal">
            <h2>Ejercicio 5: Sumatoria</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>

                Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
                valores.
                a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
                b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
                c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while

            </p>
        </div>
        <header class="w3-container w3-light-green">
            <h2>Resultado ejercicio 5:</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
            </p>
            <p>
                En los tres casos de la funcion sumatoria_a($arrayDeNumeros),sumatoria_b($arrayDeNumeros),sumatoria_c($arrayDeNumeros) se le pasa un array de numeros por parametro y esta devolvera la suma de los numeros dentro del array.
                <!-- Resultado por pantalla -->
                <br>
                <?php
                echo sumatoria_a([1,2,3,4]);
                echo '</br>';
                echo sumatoria_b([1,2,3,4]);
                echo '</br>';
                echo sumatoria_c([1,2,3,4]);
                ?>
            </p>
        </div>
    </div>

</div>
