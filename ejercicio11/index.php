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
    <h2 class="w3-center">Lanzar dados</h2>
    <div class="w3-section w3-third">

    </div>
    <form action="recibirTiradaDeDados.php"
          method="get"
          enctype="application/x-www-form-urlencoded"
          class="w3-container w3-card-4  w3-text-blue w3-margin w3-third">

        <div class="w3-container  w3-padding-16">
            <div class="w3-col s12 m12 l12">
                <label for="cantidad_dados_a_tirar">Seleccione cuantos dados tirar:
                    <select name="cantidad_dados_a_tirar" id="cantidad_dados_a_tirar" class="w3-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="w3-col s12 m12 l12">
            <button class="w3-button w3-blue w3-margin-top w3-margin-bottom" type="submit">Tirar dados</button>
        </div>

    </form>

    <div class="w3-section w3-third">

    </div>

</div>

<?php
include "../ejercicio8/footer.php";
?>

</body>
</html>
