<?php


function incrementar(&$valor){
    $valor++;
}
?>

<div class="w3-container w3-padding-32 w3-round-large">

    <div class="w3-card-4 w3-margin-bottom w3-padding">
        <header class="w3-container w3-teal">
            <h2>Ejercicio 4: Incrementar</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>

                Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
                la función, el valor del parámetro haya sido incrementado en 1
                (Ver pasaje de parámetros por referencia)

            </p>
        </div>
        <header class="w3-container w3-light-green">
            <h2>Resultado ejercicio 4:</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
            </p>
            <p>
                En la funcion incrementar(&$valor) pasamos un valor por referencia y este incrementara el valor del mismo en +1.
                <br>

                <?php
                $valor = 10;
                echo incrementar($valor);
                echo "El resultado de pasarle 10 a incrementar es: " . $valor;
                ?>
            </p>
        </div>
    </div>

</div>
