<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de moda</title>
</head>

<body>
    <h1></h1>

    <form action="form.php" method="POST">
        <p>
            <label for="alergias-id">Introduzca si es alergico a alguno de los siguientes elementos:</label>
            <select name="alergias[]" id="alergias-id" multiple>
                <option value="vacio">--</option>
                <option value="Leche">Leche</option>
                <option value="Huevo">Huevo</option>
                <option value="Gluten">Gluten</option>

            </select>

            <label for="reservas-id">Seleccione tipo de prenda:</label>
            <select name="prendas[]" id="prendas-id" multiple>
                <option date="date">Introduzca fecha:</option>
                <option time="time">Introduzca hora comida:</option>
            </select>
            <!! TO DO UBICACION -->
        </p>
        <p>
            <label for="color-id">Color</label>
            <input type="color" name="color" id="color-id">
        </p>

        <input type="submit" value="Reservar">
      

    </form>

</body>

</html>