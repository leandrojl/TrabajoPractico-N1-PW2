<?php

function concatenar($texto1, $texto2){
    return $texto1." ".$texto2;
}


?>

<div class="w3-container w3-padding-32 w3-round-large">

    <div class="w3-card-4 w3-margin-bottom w3-padding">
        <header class="w3-container w3-teal">
            <h2>Ejercicio 3: Concatenar textos</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>

                Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
                ambos textos concatenados como uno solo.

            </p>
        </div>
        <header class="w3-container w3-light-green">
            <h2>Resultado ejercicio 3:</h2>
        </header>
        <div class="w3-container w3-padding">
            <p>
            </p>
            <p>
                En la funcion concatenar($texto1, $texto2) paso dos textos por parametro los cuales van a ser concatenados.
                <br>

                <?php
                echo concatenar("Alejandro", "es amigo de Popeye");
                ?>
            </p>
        </div>
    </div>
</div>
