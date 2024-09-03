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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Resolución</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-bar {
            display: flex;
            justify-content: space-between;
            margin: 0 auto; /* Centra el menú horizontalmente */
        }
        .iframe-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%; /* Ajusta este valor para cambiar los márgenes */
            max-width: 1200px; /* Puedes establecer un máximo de ancho si lo deseas */
            margin: 0 auto; /* Centra el contenedor horizontalmente */
            height: 70vh; /* Ocupa toda la altura de la ventana */
            padding: 0;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

    </style>
</head>
<body>
<div class="w3-container w3-teal w3-padding-16">
    <h1 class="w3-center w3-xxlarge">Leandro Javier Loureiro</h1>
</div>

<div class="w3-bar w3-light-grey">
    <a href="index.php?" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="index.php?page=ejercicio1" class="w3-bar-item w3-button w3-mobile">Ejercicio 1</a>
    <a href="index.php?page=ejercicio2" class="w3-bar-item w3-button w3-mobile">Ejercicio 2</a>
    <a href="index.php?page=ejercicio3" class="w3-bar-item w3-button w3-mobile">Ejercicio 3</a>
    <a href="index.php?page=ejercicio4" class="w3-bar-item w3-button w3-mobile">Ejercicio 4</a>
    <a href="index.php?page=ejercicio5" class="w3-bar-item w3-button w3-mobile">Ejercicio 5</a>
    <a href="index.php?page=ejercicio6" class="w3-bar-item w3-button w3-mobile">Ejercicio 6</a>
    <a href="index.php?page=ejercicio7" class="w3-bar-item w3-button w3-mobile">Ejercicio 7</a>

</div>


<div class="iframe-container">
    <iframe src="../ejercicio8/assets/trabajoPracticoN1_pw2.pdf">
        Tu navegador no soporta iframes.
    </iframe>
</div>

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

<div>
    <?php
    // Verifica si hay un parámetro 'page' en la URL
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        // Determina qué archivo incluir basado en el valor del parámetro
        switch ($page) {
            case 'ejercicio1':
                include '../ejercicio1/index.php';
                break;
            case 'ejercicio2':
                include '../ejercicio2/index.php';
                break;
            case 'ejercicio3':
                include '../ejercicio3/index.php';
                break;
            case 'ejercicio4':
                include '../ejercicio4/index.php';
                break;
            case 'ejercicio5':
                include '../ejercicio5/index.php';
                break;
            case 'ejercicio6':
                include '../ejercicio6/index.php';
                break;
            case 'ejercicio7':
                include '../ejercicio7/index.php';
                break;
            default:
                echo "<h2>Página no encontrada</h2>";
                break;
        }
    }
    ?>
</div>



</body>
</html>
