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

?>

<div class="w3-container w3-padding-32 w3-round-large">

    <div class="w3-card-4 w3-margin-bottom w3-padding">
        <header class="w3-container w3-teal">
            <h2>Ejercicio 6: Nombre completo</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>

                Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
                persona.
                Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
                concatenado al nombre un prefijo dependiendo del horario:
                05hs a 13hs “Buenos días”
                13hs a 21hs “Buenas tardes”
                21hs a 05hs “Buenas noches”
                Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
                Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
                sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
                perteneciente al horario .
                Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
                “¡Hola Ezequiel! Que tengas un buen día”


            </p>
        </div>
        <header class="w3-container w3-light-green">
            <h2>Resultado ejercicio 6:</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
            </p>
            <p>
                Tendremos una clase Saludar($nombre,$apellido) la cual el pasaremos el nombre y apellido para construir el objeto. Mediante el metodo saludoFormal($horario) devolvera un saludo cordial y
                con el metodo saludoInformal($horario) devolvera un saludo no formal:
                <!-- Resultado por pantalla -->
                <br>
                <?php
                $objetoSaludador = new Saludar ("Martin", "Gomez");
                $objetoSaludador->saludoFormal("15hs");
                echo '</br>';
                $objetoSaludador->saludoInformal("15hs");
                ?>
            </p>
        </div>
    </div>
</div>
