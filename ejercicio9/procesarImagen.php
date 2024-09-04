<?php

echo json_encode($_FILES);



//$_FILES["imagen"]["type"] == "image\/png" -> es una validacion para la imagen
//$_FILES["imagen"]["error"] != 0 &&
//$_FILES["imagen"]["size"] > 0
if(isset($_FILES["imagen"])){
    move_uploaded_file($_FILES["imagen"]["tmp_name"], "D:/xampp/htdocs/trabajoPracticoNumero1_pw2_tn/ejercicio9/imagenes/" . $_FILES["imagen"]["name"]); //con esta funcion muevo el archivo temporal a una ruta local
    echo '</br>';
    var_dump($_FILES["imagen"]["tmp_name"]);
    echo '</br>';
    var_dump("D:/xampp/htdocs/trabajoPracticoNumero1_pw2_tn/ejercicio9/imagenes/" . $_FILES["imagen"]["name"]);

    $nombreRuta = random_int(0,10000000) .  $_FILES["imagen"]["name"]; //le asigno un valor random al archivo para no pisarlo
    echo '</br>';
    var_dump('soy el nombreRuta= '. $nombreRuta);
    //arreglar el path dependiendo el directorio -IMPORTANTE-
    $rutaImagen = "imagenes/" . $nombreRuta; //defino la ruta donde va a estar el archivo que subi mediante post
    echo '</br>';
    var_dump('soy el rutaImagen= '. $rutaImagen);
    echo '</br>';
    echo "imagen subida correctamente";
}
?>