<?php

echo json_encode($_FILES);
echo '</br>';
echo json_encode($_POST);


if(isset($_FILES["imagen"])&& isset($_POST["name"])){
    $nombreDeArchivo = $_POST["name"].'.jpg';

    echo '</br>';

    var_dump($nombreDeArchivo);

    echo '</br>';

    var_dump("D:/xampp/htdocs/trabajoPracticoNumero1_pw2_tn/ejercicio9/imagenes/" . $_FILES["imagen"]["name"]);

    echo '</br>';

    $checkSiSeMovioElArchivo= move_uploaded_file($_FILES["imagen"]["tmp_name"], "D:\\xampp\\htdocs\\trabajoPracticoNumero1_pw2_tn\\ejercicio9\\imagenes\\" . $nombreDeArchivo); //con esta funcion muevo el archivo temporal a una ruta local
    var_dump($checkSiSeMovioElArchivo);
    if($checkSiSeMovioElArchivo){
        header("Location: index.php");
        exit();
    }else{
        echo "No se subio correctamente";
    }
    echo '</br>';

}
?>