<?php
include '../ejercicio8/getRutaYDireccionamiento.php';



            if (isset($_GET['nombre']) && isset($_GET['planeta'])) {


                $data = ['nombre'=>$_GET['nombre'],'planeta'=>$_GET['planeta']];
                $archivo = 'datos_formulario.json';


                $inp = file_get_contents($archivo);
                $tempArray = json_decode($inp);
                array_push($tempArray, $data);
                $jsonData = json_encode($tempArray, JSON_PRETTY_PRINT);
                file_put_contents($archivo , $jsonData);

                echo "Datos guardados exitosamente en el archivo JSON.";
            } else {
                echo "Por favor, complete todos los campos.";
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
    <h2 class="w3-center">Visitantes que cruzaron el Control Interplanetario:</h2>
    <div class="w3-section w3-third">

    </div>
    <div class="w3-section w3-third">
        <?php
        $path = 'datos_formulario.json';
        $jsonString = file_get_contents($path);
        $tempArray = json_decode($jsonString, true);

        foreach ($tempArray as $visitante) {
            echo '<div class="w3-container w3-card-4  w3-text-blue w3-margin">
                <div class="w3-col s12 m12 l12">
                    <p class="w3-text-blue"><b>Nombre: '.$visitante['nombre'].'</b></p>
    
                    <p class="w3-text-blue"><b>Planeta origen: '.$visitante['planeta'].'</b></p>
    
                </div>
              </div>';
        }




        ?>
    </div>

    <div class="w3-section w3-third">
        <h2 class="w3-center">Visitantes que no son del planeta tierra:</h2>
        <?php
        $archivo = 'datos_formulario.json';
        $obtengoLosDatosDelJson = file_get_contents($archivo);
        $tempArray = json_decode($obtengoLosDatosDelJson,true);
        $resultadoDeVisitantesQueNoSonDeLaTierra=0;
        $resultadoDeVisitantesQueSonDeLaTierra=0;
        if ($tempArray) {


            foreach ($tempArray as $visitante) {
                if(strcasecmp($visitante['planeta'], "tierra") ==0){
                    $resultadoDeVisitantesQueSonDeLaTierra= $resultadoDeVisitantesQueSonDeLaTierra +1;

                }else{
                    $resultadoDeVisitantesQueNoSonDeLaTierra= $resultadoDeVisitantesQueNoSonDeLaTierra +1;
                }
            }

            echo '<div class="w3-container w3-card-4  w3-text-blue w3-margin">
                <div class="w3-col s12 m12 l12">
                    <p class="w3-text-blue">Los visitantes que no son de la tierra son: '.$resultadoDeVisitantesQueNoSonDeLaTierra.' </b></p>
    
                    <p class="w3-text-blue">Los visitantes que son de la tierra son: '.$resultadoDeVisitantesQueSonDeLaTierra.' </b></p>
    
                </div>
              </div>';

        } else {
            echo "No hay datos para mostrar";
        }
        ?>
    </div>

</div>

<?php
include "../ejercicio8/footer.php";
?>

</body>
</html>
