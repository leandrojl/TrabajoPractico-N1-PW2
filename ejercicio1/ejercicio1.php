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


