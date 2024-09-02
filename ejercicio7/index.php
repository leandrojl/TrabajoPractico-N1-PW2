<?php
require_once("../ejercicio1/ejercicio1.php");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Resolución</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container w3-teal w3-padding-16">
    <h1 class="w3-center w3-xxlarge">Leandro Javier Loureiro</h1>
</div>

<div class="w3-container w3-padding-32">
    <div class="w3-card-4 w3-margin-bottom w3-padding">
        <header class="w3-container w3-teal">
            <h2>Ejercicio 1: Semaforo</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
                <!-- Descripción del ejercicio -->
                Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
                “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
                “avance” o “estado desconocido” ante un caso no esperado.
                a) función semaforo_a($color): Resuelva la solución utilizando if else
                b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
                c) función semaforo_c($color): Resuelva la solución utilizando switch

            </p>
        </div>
        <header class="w3-container w3-light-green">
            <h2>Resultado:</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
                <!-- Resultado por pantalla -->
                <?php
                echo "FUNCION SEMAFORO A:" . "</br>";
                echo "Cuando ingreso por parametro el valor 'rojo' la funcion A devuelve: " . semaforo_a('rojo') . " - SOY LA FUNCION SEMAFORO A" . "<br>";
                echo "Cuando ingreso por parametro el valor 'amarillo' la funcion A devuelve: " . semaforo_a('amarillo') . " - SOY LA FUNCION SEMAFORO A" . "<br>";
                echo "Cuando ingreso por parametro el valor 'verde' la funcion A devuelve: " . semaforo_a('verde') . " - SOY LA FUNCION SEMAFORO A" . "<br>";
                echo "FUNCION SEMAFORO B:" . "</br>";
                echo "Cuando ingreso por parametro el valor 'rojo' la funcion B devuelve: " . semaforo_b('rojo') . " - SOY LA FUNCION SEMAFORO B" . "<br>";
                echo "Cuando ingreso por parametro el valor 'amarillo' la funcion B devuelve: " . semaforo_b('amarillo') . " - SOY LA FUNCION SEMAFORO B" . "<br>";
                echo "Cuando ingreso por parametro el valor 'verde' la funcion B devuelve: " . semaforo_b('verde') . " - SOY LA FUNCION SEMAFORO B" . "<br>";
                echo "FUNCION SEMAFORO C:" . "</br>";
                echo "Cuando ingreso por parametro el valor 'rojo' la funcion C devuelve: " . semaforo_c('rojo') . " - SOY LA FUNCION SEMAFORO C" . "<br>";
                echo "Cuando ingreso por parametro el valor 'amarillo' la funcion C devuelve: " . semaforo_c('amarillo') . " - SOY LA FUNCION SEMAFORO C" . "<br>";
                echo "Cuando ingreso por parametro el valor 'verde' la funcion C devuelve: " . semaforo_c('verde') . " - SOY LA FUNCION SEMAFORO C" . "<br>";

                ?>
            </p>
        </div>
    </div>
    <div class="w3-card-4 w3-margin-bottom w3-padding">
        <header class="w3-container w3-teal">
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
        <header class="w3-container w3-light-green">
            <h2>Resultado:</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
                <!-- Resultado por pantalla -->
                <?php
                
                ?>
            </p>
        </div>
    </div>


</div>

</body>
</html>
