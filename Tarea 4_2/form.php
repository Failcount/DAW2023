<?php




if($_SERVER["REQUEST_METHOD"] == "POST"){
    

    //En $_SERVER se guardan las variables del servidor
    var_dump($_SERVER) ;
    //En $_POST se guardan los detalles del formulario que se han enviado por el metodo post.
    //En este caso tenemos dos array , uno de prendas y otro de color.

    var_dump($_POST) ;
    var_dump($_POST['prendas']) ;

    foreach ($_POST as $key => $value){

        echo $key . " " . $value. "\n";

    }
     
}


?>