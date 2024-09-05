<?php

echo json_encode($_FILES);
echo '</br>';
echo json_encode($_POST);

//$_FILES["imagen"]["type"] == "image\/png" -> es una validacion para la imagen
//$_FILES["imagen"]["error"] != 0 &&
//$_FILES["imagen"]["size"] > 0
if(isset($_FILES["imagen"])&& isset($_POST["name"])){

    $nombreDeArchivo = $_POST["name"].'.jpg';

    echo '</br>';

    var_dump($nombreDeArchivo);

    echo '</br>';

    var_dump('SOY EL $_FILES["imagen"]["name"]= '.$_FILES["imagen"]["name"]);

    echo '</br>';
    //Verificar desde que DISCO se encuentra XAMPP para poder guardar las imagenes en la ruta correcta, sino, no funciona.
    // $checkSiSeMovioElArchivo= move_uploaded_file($_FILES["imagen"]["tmp_name"], "C:\\xampp\\htdocs\\trabajoPracticoNumero1_pw2_tn\\ejercicio10\\imagenes\\" . $nombreDeArchivo); //con esta funcion muevo el archivo temporal a una ruta local

    $checkSiSeMovioElArchivo= move_uploaded_file($_FILES["imagen"]["tmp_name"], "D:\\xampp\\htdocs\\trabajoPracticoNumero1_pw2_tn\\ejercicio10\\imagenes\\" . $nombreDeArchivo); //con esta funcion muevo el archivo temporal a una ruta local

    var_dump($checkSiSeMovioElArchivo);

    if($checkSiSeMovioElArchivo){
        header("Location: index.php");
        exit(); // Detiene la ejecución del script después de redirigir
    }else{
        echo "No se subio correctamente";
    }
    echo '</br>';

}
?>