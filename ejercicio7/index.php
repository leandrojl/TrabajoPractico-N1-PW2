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

<div class="iframe-container">
    <iframe src="../ejercicio8/assets/trabajoPracticoN1_pw2.pdf">
        Tu navegador no soporta iframes.
    </iframe>
</div>
<div class="w3-container w3-padding-32 w3-round-large">

    <?php
    include("../ejercicio1/resolucionEjercicio1.php");
    include("../ejercicio2/resolucionEjercicio2.php");
    include("../ejercicio3/resolucionEjercicio3.php");
    include("../ejercicio4/resolucionEjercicio4.php");
    include("../ejercicio5/resolucionEjercicio5.php");
    include("../ejercicio6/resolucionEjercicio6.php");
    ?>


</div>

<?php
include "../ejercicio8/footer.php";
?>
</body>
</html>
