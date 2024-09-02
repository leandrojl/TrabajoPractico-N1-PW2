<?php

class Saludar{

    private $nombre;
    private $apellido;

    function __construct($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    function saludoFormal($horario){
       $horario= intval($horario);
        if ($horario >= 5 && $horario <= 13) {
            echo "Buenos dias {$this->nombre} {$this->apellido}";
        } elseif($horario >= 13 && $horario <= 21){
            echo "Buenos tardes {$this->nombre} {$this->apellido}";
        }elseif ($horario > 21 && $horario < 5){
            echo "Buenos noches {$this->nombre} {$this->apellido}";
        }else{
            echo "Ese no es un horario valido!";
        }
    }
    function saludoInformal($horario){
        $horario= intval($horario);
        if ($horario >= 5 && $horario <= 13) {
            echo "Hola {$this->nombre}, que tengas un buen dia!";
        } elseif($horario >= 13 && $horario <= 21){
            echo "Hola {$this->nombre}, que tengas una buena tarde!";
        }elseif ($horario > 21 && $horario < 5){
            echo "Hola {$this->nombre}, que tengas una buena noche!";
        }else{
            echo "Ese no es un horario valido!";
        }
    }

}

$objetoSaludador = new Saludar ("Martin", "Gomez");
$objetoSaludador->saludoFormal("15hs");
echo '</br>';
$objetoSaludador->saludoInformal("15hs");
