<?php
include '../ejercicio8/getRutaYDireccionamiento.php'
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
<?php
include "../ejercicio8/header.php";
?>

<div class="w3-container  w3-padding-16">
    <h2 class="w3-center w3-xxlarge">Los dados tiraron fueron:</h2>
</div>

<div class="w3-row-padding w3-margin-top">

    <?php
    if(isset($_GET["cantidad_dados_a_tirar"])){

        $cantidadDeLanzamientosDeDado = intval($_GET["cantidad_dados_a_tirar"]);

        echo "<br>";

        $dir_name = "./imagenes/";

        $images = glob($dir_name . "*.png");


        echo "<br>";
        $resultadoFinal = 0;
        for($i=1; $i<=$cantidadDeLanzamientosDeDado; $i++){

            $dadoRandom = rand(0,5);

            echo '<div class="w3-third">
              <img src="' . $images[$dadoRandom] . '" alt="Imagen" class="w3-image w3-border" style="width: 100%; height: 300px; object-fit: contain; background-color: #f0f0f0;">
              
                </div>';

            $resultadoFinal = $resultadoFinal + ($dadoRandom+1);

        }

        echo '<div class="w3-row-padding w3-margin-top">
                <div class="w3-third">
                <p>El resultado de la tirada de dados es: ' . $resultadoFinal . '</p>
              </div>
                </div>';





    }

    ?>


</div>









<?php
include "../ejercicio8/footer.php";
?>

</body>
</html>
