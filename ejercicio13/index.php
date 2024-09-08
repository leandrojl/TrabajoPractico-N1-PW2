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
    <h2 class="w3-center">ConociendINIs con el Menú no saludable</h2>
    <div class="w3-section w3-third">

    </div>
    <div class="w3-section w3-third">
        <div class="w3-container w3-padding-16">
            <h2>Selecciona tu menú</h2>
            <form action="procesarMenu.php" method="POST" class="w3-container w3-card-4 w3-light-grey w3-padding-16">
                <label><b>Entrada:</b></label>
                <input class="w3-check" type="checkbox" name="menu[]" value="entrada">
                <label for="entrada">Entrada</label><br>

                <label><b>Plato Principal:</b></label>
                <input class="w3-check" type="checkbox" name="menu[]" value="plato_principal">
                <label for="plato_principal">Plato Principal</label><br>

                <label><b>Acompañamiento:</b></label>
                <input class="w3-check" type="checkbox" name="menu[]" value="acompanamiento">
                <label for="acompanamiento">Acompañamiento</label><br>

                <label><b>Postre:</b></label>
                <input class="w3-check" type="checkbox" name="menu[]" value="postre">
                <label for="postre">Postre</label><br>

                <button type="submit" class="w3-button w3-blue w3-margin-top">Enviar</button>
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
