<?php


function current_season() {
       // Locate the icons
       /* $icons = array(
               "spring" => "images/spring.png",
               "summer" => "images/summer.png",
               "autumn" => "images/autumn.png",
               "winter" => "images/winter.png"
       );
       */



       // What is today's date - number
       $day = date("z");

       //  Days of spring
       $spring_starts = date("z", strtotime("March 21"));
       $spring_ends   = date("z", strtotime("June 20"));

       //  Days of summer
       $summer_starts = date("z", strtotime("June 21"));
       $summer_ends   = date("z", strtotime("September 22"));

       //  Days of autumn
       $autumn_starts = date("z", strtotime("September 23"));
       $autumn_ends   = date("z", strtotime("December 20"));

       //  If $day is between the days of spring, summer, autumn, and winter
       if( $day >= $spring_starts && $day <= $spring_ends ) :
               $season = "spring";
               echo "Estamos en primavera";
       elseif( $day >= $summer_starts && $day <= $summer_ends ) :
               $season = "summer";
               echo "Estamos en verano";
       elseif( $day >= $autumn_starts && $day <= $autumn_ends ) :
               $season = "autumn";
               echo "Estamos en otoño";
       else :
               $season = "winter";
               echo "Estamos en invierno";
       endif;

      // $image_path = $icons[$season];

      // echo $image_path;
}

?>



<?php
$date = $_POST["time"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST != null) {

        $date = $_POST["time"];
        var_dump($date);


        /*
        $veranoI = "XXXX-06-21";
        $veranoF = "XXXX-09-21";

        $inviernoI = "XXXX-12-21";
        $inviernoF = "XXXX-02-21";


        $fecha_objeto = new DateTime($fecha);

            $mes = $fecha_objeto -> format(format: "m");
            $dia = $fecha_objeto -> format("d");    
            echo "dia:.$dia";
            echo "mes:.$mes";


        */
     
        current_season($date);



           
    }
}

?>



