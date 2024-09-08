
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
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $n = intval($_POST['dimension']);

            if ($n > 0) {

                $matriz = [];
                $valor = 1;
                for ($i = 0; $i < $n; $i++) {
                    for ($j = 0; $j < $n; $j++) {
                        $matriz[$i][$j] = $valor++;
                    }
                }

                echo "<h2>Matriz de {$n}x{$n}</h2>";

                echo "<table border='1' cellpadding='10'>";

                for ($i = 0; $i < $n; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $n; $j++) {
                        echo "<td>" . $matriz[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";


                echo "<h3>a) Diagonal principal:</h3>";
                echo "<p>";
                for ($i = 0; $i < $n; $i++) {
                    echo $matriz[$i][$i] . " ";
                }
                echo "</p>";

                $suma = 0;
                for ($i = 0; $i < $n; $i++) {
                    for ($j = 0; $j < $n; $j++) {
                        $suma += $matriz[$i][$j];
                    }
                }

                echo "<h3>c) Suma de todos los valores de la matriz:</h3>";
                echo "<p>Suma total: " . $suma . "</p>";

            } else {
                echo "<p>La dimensión debe ser mayor que 0.</p>";
            }
        } else {
            echo "<p>Formulario no enviado correctamente.</p>";
        }
        ?>

        <?php
        include '../ejercicio8/getRutaYDireccionamiento.php'
        ?>

    </div>


    <div class="w3-section w3-third">

    </div>

</div>

<?php
include "../ejercicio8/footer.php";
?>

</body>
</html>

