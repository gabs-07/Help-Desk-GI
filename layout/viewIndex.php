<?php

    //* Prototipo de la funcion:
    function llamandoRecursos(){
        echo '<link rel="stylesheet" href="public/css/paleta.css">';
        echo '<link rel="stylesheet" href="public/css/index.css">';
        echo '<link rel="stylesheet" href="public/css/barraDeNavegacion.css">';

        include ('lib/barraDeNavegacion.php');
        include ('lib/presentacion.php');
    }

    // Llamando a la funcion:
    llamandoRecursos();

?>