

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

<div class="w3-container w3-padding-32">
    <h2 class="w3-center">ConociendINIs con el Menú no saludable</h2>
    <?php



    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (!empty($_POST['menu'])) {

            $menu = parse_ini_file('menu.ini');


            echo "<h2>Tu menú seleccionado:</h2><ul>";


            foreach ($_POST['menu'] as $paso) {
                if (isset($menu[$paso])) {
                    echo "<li>" . ucfirst(str_replace('_', ' ', $paso)) . ": " . $menu[$paso] . "</li>";
                }
            }
            echo "</ul>";
        } else {
            echo "<p>No seleccionaste ningún paso del menú.</p>";
        }
    } else {
        echo "<p>Formulario no enviado correctamente.</p>";
    }





    ?>

</div>

<?php
include "../ejercicio8/footer.php";
?>

</body>
</html>

