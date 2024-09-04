<?php
//a
function semaforo_a($color){
    if($color == 'rojo'){
        return 'Frene';
    }else if($color == 'amarillo'){
        return 'Precaucion';
    }else if($color == 'verde'){
        return 'Avance';
    }else{
        return 'Estado desconocido';
    }}

//b
function semaforo_b($color){
    return $color == 'rojo'? 'Frene' :( $color == 'amarillo'? 'Precaucion' :'Avance' );
}

function semaforo_c($color){
    switch($color){

        case "rojo":
            return 'Frene';


        case "amarillo":
            return 'Precaucion';


        case "verde":
            return 'Avance';


        default:
            echo 'Estado desconocido';
    }
}

?>
<div class="w3-container w3-padding-32">
    <div class="w3-card-4 w3-margin-bottom w3-padding w3-round-large">
        <header class="w3-container w3-teal w3-round-large">
            <h2>Ejercicio 1: Semaforo</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
                <!-- Descripción del ejercicio -->
                Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
                “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
                “avance” o “estado desconocido” ante un caso no esperado.
                a) función semaforo_a($color): Resuelva la solución utilizando if else
                b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
                c) función semaforo_c($color): Resuelva la solución utilizando switch

            </p>
        </div>
        <header class="w3-container w3-light-green w3-round-large">
            <h2>Resultado ejercicio 1:</h2>
        </header>
        <div class="w3-container w3-padding">

            <p>
                En la funcion semaforo_a($colorSemaforo) debo pasarle el parametro 'rojo', 'amarillo' o verde para obtener una respuesta.
                <br>
                <?php
                echo "Cuando ingreso por parametro el valor 'rojo' la funcion A devuelve: " . semaforo_a('rojo') . " - SOY LA FUNCION SEMAFORO A" . "<br>";
                echo "Cuando ingreso por parametro el valor 'amarillo' la funcion A devuelve: " . semaforo_a('amarillo') . " - SOY LA FUNCION SEMAFORO A" . "<br>";
                echo "Cuando ingreso por parametro el valor 'verde' la funcion A devuelve: " . semaforo_a('verde') . " - SOY LA FUNCION SEMAFORO A" . "<br>";
                ?>
            </p>
            <br>
            <p>
                En la funcion semaforo_b($colorSemaforo) debo pasarle el parametro 'rojo', 'amarillo' o verde para obtener una respuesta.
                <br>
                <?php
                echo "Cuando ingreso por parametro el valor 'rojo' la funcion B devuelve: " . semaforo_b('rojo') . " - SOY LA FUNCION SEMAFORO B" . "<br>";
                echo "Cuando ingreso por parametro el valor 'amarillo' la funcion B devuelve: " . semaforo_b('amarillo') . " - SOY LA FUNCION SEMAFORO B" . "<br>";
                echo "Cuando ingreso por parametro el valor 'verde' la funcion B devuelve: " . semaforo_b('verde') . " - SOY LA FUNCION SEMAFORO B" . "<br>";

                ?>
            </p>
            <br>
            <p>
                En la funcion semaforo_c($colorSemaforo) debo pasarle el parametro 'rojo', 'amarillo' o verde para obtener una respuesta.
                <br>
                <?php
                echo "Cuando ingreso por parametro el valor 'rojo' la funcion C devuelve: " . semaforo_c('rojo') . " - SOY LA FUNCION SEMAFORO C" . "<br>";
                echo "Cuando ingreso por parametro el valor 'amarillo' la funcion C devuelve: " . semaforo_c('amarillo') . " - SOY LA FUNCION SEMAFORO C" . "<br>";
                echo "Cuando ingreso por parametro el valor 'verde' la funcion C devuelve: " . semaforo_c('verde') . " - SOY LA FUNCION SEMAFORO C" . "<br>";

                ?>
            </p>

        </div>
    </div>

</div>

<div>