<!DOCTYPE html>

<head>

    <h1>OFERTA DE TRABAJO</h1>

</head>

<body>
    <?php

    //Crea el siguiente array en php.

    $array = array(
        "Titulo" => "Desarrollador backend php",
        "Descripcion" => "Desarrollo de API y páginas web en php con Laravel",
        "Sector" => "informatica",
        "Salario" => "35000",
        "Experiencia" => "2 años",
        "Modalidad" => "Teletrabajo",
        "Incorporación" => "Inmediata",

    );


    /*Crea una página web con html donde aparezca ("Oferta de trabajo" como H1)
    Y crear los H3 necesarios para cada elemento del array tal que:

    OFERTA DE TRABAJO

    Titulo: Desarrollador backend php
    Descripción: Desarrollo ...*/



    foreach ($array as $key => &$valor) {


        echo '<h3>' . $key . ' : ' . $valor . '</h3><br>';
    }

    unset($valor);


    ?>
</body>

<style>


    body {
        background-color: black;
        font-family: Verdana, sans-serif;
        font-size: 16px;
        color: aquamarine;
        display: grid;
        place-content: center;
    }

    h1 {
        font-family: Georgia, serif;
        font-size: 60px;
        color: white;
    }
    
</style>