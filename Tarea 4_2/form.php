<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST != null) {

        $fecha = $_POST["time"];
        $hora = $_POST["hour"];
    

        if (in_array("Leche" , $_POST["alergias"])) {

            echo "<h1>☝El cliente es alergico a la Leche</h1>";
            echo "<h1>☝El cliente tiene reserva para el día:.$fecha.</h1>";
            echo "<h1>☝El cliente tiene reserva para la hora:.$hora.</h1>";
        } elseif (in_array("Huevos" , $_POST["alergias"])) {
            echo "<h1>☝El cliente es alergico al Huevo</h1>";
            echo "<h1>☝El cliente tiene reserva para el día:.$fecha.</h1>";
            echo "<h1>☝El cliente tiene reserva para la hora:.$hora.</h1>";
        } elseif (in_array("Gluten" , $_POST["alergias"])) {
            echo "<h1>☝El cliente es alergico al Gluten</h1>";
            echo "<h1>☝El cliente tiene reserva para el día:.$fecha.</h1>";
            echo "<h1>☝El cliente tiene reserva para la hora:.$hora.</h1>";
        }
    }
}
