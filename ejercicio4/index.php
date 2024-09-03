<?php

//pasaje de parametros por referencia utilizando "&"
function incrementar(&$valor){
    $valor++;
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
                En la funcion incrementar(&$valor) pasamos un valor por referencia y este incrementara el valor del mismo en +1.
                <br>
                <!-- Resultado por pantalla -->
                <?php
                $valor = 10;
                echo incrementar($valor);
                echo "El resultado de pasarle 10 a incrementar es: " . $valor;
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


