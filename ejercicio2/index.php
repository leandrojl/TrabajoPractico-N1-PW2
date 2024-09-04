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


<div class="iframe-container">
    <iframe src="../ejercicio8/assets/trabajoPracticoN1_pw2.pdf">
        Tu navegador no soporta iframes.
    </iframe>
</div>

<?php
include "./resolucionEjercicio2.php";
?>



<div>
    <?php
    // Verifica si hay un parámetro 'page' en la URL
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        // Determina a qué página redirigir basado en el valor del parámetro
        switch ($page) {
            case 'ejercicio1':
                header('Location: ../ejercicio1/index.php');
                exit(); // Asegúrate de usar exit después de header para detener la ejecución del script
            case 'ejercicio2':
                header('Location: ../ejercicio2/index.php');
                exit();
            case 'ejercicio3':
                header('Location: ../ejercicio3/index.php');
                exit();
            case 'ejercicio4':
                header('Location: ../ejercicio4/index.php');
                exit();
            case 'ejercicio5':
                header('Location: ../ejercicio5/index.php');
                exit();
            case 'ejercicio6':
                header('Location: ../ejercicio6/index.php');
                exit();
            case 'ejercicio7':
                header('Location: ../ejercicio7/index.php');
                exit();
            default:
                echo "<h2>Página no encontrada</h2>";
                break;
        }
    }
    ?>
</div>


<?php
include "../ejercicio8/footer.php";
?>
</body>
</html>
