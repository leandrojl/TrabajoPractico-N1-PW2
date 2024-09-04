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
    <h2 class="w3-center w3-xxlarge">Insta-gramo</h2>
</div>

<div class="w3-row-padding w3-margin-top">
    <?php

    include './procesarImagen.php'

    ?>
    <div class="w3-third">
        <img src="./imagenes/meme1.jpg" alt="Imagen 1" class="w3-image w3-border">
    </div>
    <div class="w3-third">
        <img src="./imagenes/meme2.jpg" alt="Imagen 2" class="w3-image w3-border">
    </div>
    <div class="w3-third">
        <img src="./imagenes/meme3.jpg" alt="Imagen 3" class="w3-image w3-border">
    </div>
</div>

<div class="w3-container w3-padding-32">
    <h2 class="w3-center">Subir Imagen</h2>
    <div class="w3-section w3-third">

    </div>
    <form action="procesarImagen.php"
          method="post"
          enctype="multipart/form-data" class="w3-container w3-card-4  w3-text-blue w3-margin w3-third">

        <div class="w3-section ">
            <label class="w3-text-blue"><b>Seleccionar Imagen</b></label>
            <input class="w3-input w3-border" type="file" name="imagen" accept="image/*" required>
        </div>

        <button class="w3-button w3-blue w3-margin-top w3-margin-bottom" type="submit">Subir</button>
    </form>
    <div class="w3-section w3-third">

    </div>
</div>

<?php
include "../ejercicio8/footer.php";
?>





</body>
</html>
