<body>

    <?php

    //Imprimir numero aleatorio cada vez que se carga la página.
    echo '<h1>  1.Imprimir numero aleatorio cada vez que se carga la página.</h1><br>';

    $aleatorio = (random_int(100, 999));

    echo "El numero aleatorio generado es: $aleatorio \n";





    //2. Crea un script que, dado un valor numérico que estará almacenado en una variable llamada $valor devuelva ese valor multiplicado por 2.
    echo '<h1> 2. Crea un script que, dado un valor numérico que estará almacenado en una variable llamada $valor devuelva ese valor multiplicado por 2. </h1><br>';

    $valor = (random_int(100, 999));
    print "El valor numerico es " . $valor . " y si lo multiplicamos x2 es : " . $valor * 2;





    //3. Crea un script que tenga una constante (variable que no puede 
    // cambiar de valor a lo largo del tiempo) muestra por pantalla el siguiente mensaje: "El valor de la constante es: <valor>"
    echo '<h1> 3. Crea un script que tenga una constante (variable que no puede cambiar de valor a lo largo del tiempo) muestra por pantalla el siguiente mensaje: "El valor de la constante es:  </h1><br>';
    echo '<h1>    </h1><br>';


    // Definimos una constante
    define("VALOR_CONSTANTE", 42);
    echo 'Creamos el script : define("VALOR_CONSTANTE", 42); <br>';

    // Mostramos el mensaje por pantalla
    echo "El valor de la constante es: " . VALOR_CONSTANTE;

    // 4. Devuelve por pantalla el numero de elementos  que contiene el array.
    echo '<h1> 4. Devuelve por pantalla el numero de elementos  que contiene el array: </h1><br>';
    echo '<h1<> Recordemos el array en cuestión $nums = array(5, 3, 8, 1, 10, 2, 3)</h1><br>';
    // Crea el siguiente array en php.
    // $nums = array(5,3,8,1,10,2,3);
    $nums = array(5, 3, 8, 1, 10, 2, 3);

    echo 'El array tiene:' . (count($nums)) . 'elementos.<br>';


    // 5. Recorre el array y multiplica cada elemento por 3
    echo '<h1> 5. Recorre el array y multiplica cada elemento por 3: </h1><br>';
    echo 'Recordemos el array en cuestión $nums = array(5, 3, 8, 1, 10, 2, 3)<br>';
    $array = array(5, 3, 8, 1, 10, 2, 3);
    foreach ($array as &$valor) {
        $valor = $valor * 3;
        echo'El valor del array multiplicado por 3 es:'.($valor).'<br>';
    }
    unset($valor);

    // 6. Recorre el array y devuelve por pantalla unicamente los elementos múltiplos de 2
    echo '<h1> 6. Recorre el array y devuelve por pantalla unicamente los elementos múltiplos de 2: </h1><br>';
    echo '<h1<> Recordemos el array en cuestión $nums = array(15, 9, 24, 3, 30, 6, 3)</h1><br>';
    $array = array(5, 3, 8, 1, 10, 2, 3);
    foreach ($array as &$valor) {
        $valor = $valor * 3;
        if (($valor % 2) == 0)
        echo'El valor del array multiplo de 2 es :'.($valor).'<br>';;
    }
    unset($valor);


    // 7. Recorre el array y devuelve la suma de todos los elementos
    echo '<h1> 7. Recorre el array y devuelve la suma de todos los elementos: </h1><br>';
    $resultado = 0;

    $array = array(5, 3, 8, 1, 10, 2, 3);
    foreach ($array as &$valor) {


        $resultado = $resultado += $valor;
    }
    echo '<h3> La suma del array es:' . $resultado . '</h3><br>';


    //8. Ahora recorre el array mostrado su clave y valor. ¿Que claves tienen?
    echo '<h1> 8. Ahora recorre el array mostrado su clave y valor. ¿Que claves tienen?: </h1><br>';
    $array = array(5, 3, 8, 1, 10, 2, 3);
    foreach ($array as $key => &$valor) {
        //print ("Clave:" . $key) . "\n";
        echo '<h3> Clave nº' . $key . ' -- Valor: ' . $valor . '</h3><br>';
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

    }

    h1 {

        font-family: Georgia, serif;
        color: white;
    }
</style>