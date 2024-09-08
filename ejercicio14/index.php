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
            margin: 0 auto;
        }
        .iframe-container {
            display: flex;
            justify-content: center;

            align-items: center;
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            height: 70vh;
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

<div class="w3-container w3-padding-32">
    <h2 class="w3-center">La Matrix… digo, Matriz</h2>
    <div class="w3-section w3-third">

    </div>
    <div class="w3-section w3-third">
        <div class="w3-container w3-padding-16">
            <h2>Ingrese la dimensión de la matriz NxN</h2>
            <form action="procesarMatriz.php" method="POST" class="w3-container w3-card-4 w3-light-grey w3-padding-16">
                <label for="dimension"><b>Dimensión (N)</b></label>
                <input class="w3-input w3-border" type="number" name="dimension" id="dimension" required>
                <button type="submit" class="w3-button w3-blue w3-margin-top">Generar Matriz</button>
            </form>
        </div>

    </div>


    <div class="w3-section w3-third">

    </div>

</div>

<?php
include "../ejercicio8/footer.php";
?>

</body>
</html>
