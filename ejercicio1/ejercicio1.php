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
                echo 'Frene';
                break;

                case "amarillo":
                    echo 'Precaucion';
                    break;

                    case "verde":
                        echo 'Avance';
                        break;

            default:
                echo 'Estado desconocido';
        }
    }


    echo semaforo_a('rojo') . ' - SOY LA FUNCION SEMAFORO A';
    echo '</br>';
    echo semaforo_b('rojo') . '- SOY LA FUNCION SEMAFORO B' ;
    echo '</br>';
    echo semaforo_c('rojo') . ' - SOY LA FUNCION SEMAFORO C';