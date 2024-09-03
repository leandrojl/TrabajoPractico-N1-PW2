<?php
require_once("../ejercicio1/ejercicio1.php");
require_once("../ejercicio2/ejercicio2.php");
require_once("../ejercicio3/ejercicio3.php");
require_once("../ejercicio4/ejercicio4.php");
require_once("../ejercicio5/ejercicio5.php");
require_once("../ejercicio6/ejercicio6.php");
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
            <h2>Resultado ejercicio 1:</h2>
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
    <div class="w3-card-4 w3-margin-bottom w3-padding">
        <header class="w3-container w3-teal">
            <h2>Ejercicio 3: Concatenar textos</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>

                Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
                ambos textos concatenados como uno solo.

            </p>
        </div>
        <header class="w3-container w3-light-green">
            <h2>Resultado ejercicio 3:</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
            </p>
            <p>
                <!-- Resultado por pantalla -->
                <?php
                echo concatenar("Alejandro", "es amigo de Popeye");
                ?>
            </p>
        </div>
    </div>

    <div class="w3-card-4 w3-margin-bottom w3-padding">
        <header class="w3-container w3-teal">
            <h2>Ejercicio 4: Incrementar</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>

                Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
                la función, el valor del parámetro haya sido incrementado en 1
                (Ver pasaje de parámetros por referencia)

            </p>
        </div>
        <header class="w3-container w3-light-green">
            <h2>Resultado ejercicio 4:</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
            </p>
            <p>
                <!-- Resultado por pantalla -->
                <?php
                $valor = 10;
                echo incrementar($valor);
                echo $valor;
                ?>
            </p>
        </div>
    </div>

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
                <!-- Resultado por pantalla -->
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
    <div class="w3-card-4 w3-margin-bottom w3-padding">
        <header class="w3-container w3-teal">
            <h2>Ejercicio 6: Nombre completo</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>

                Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
                persona.
                Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
                concatenado al nombre un prefijo dependiendo del horario:
                05hs a 13hs “Buenos días”
                13hs a 21hs “Buenas tardes”
                21hs a 05hs “Buenas noches”
                Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
                Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
                sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
                perteneciente al horario .
                Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
                “¡Hola Ezequiel! Que tengas un buen día”


            </p>
        </div>
        <header class="w3-container w3-light-green">
            <h2>Resultado ejercicio 6:</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
            </p>
            <p>
                <!-- Resultado por pantalla -->
                <?php
                $objetoSaludador = new Saludar ("Martin", "Gomez");
                $objetoSaludador->saludoFormal("15hs");
                echo '</br>';
                $objetoSaludador->saludoInformal("15hs");
                ?>
            </p>
        </div>
    </div>

</div>

</body>
</html>
