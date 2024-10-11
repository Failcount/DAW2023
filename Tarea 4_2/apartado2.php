<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVAS Lunch</title>
</head>

<body>
    <h1>RESERVAS Lunch</h1>

    <form action="form.php" method="POST">
        <p>
            <label for="alergias-id">Introduzca si es alergico a alguno de los siguientes elementos:</label>
            <select name="alergias[]" id="alergias-id" multiple>
                <option value="vacio">--</option>
                <option value="Leche">Leche</option>
                <option value="Huevo">Huevo</option>
                <option value="Gluten">Gluten</option>

                
            </select>
            <br>
            <label for="radio-id">Ubicacion:</label>
            <input type="radio" name="Interior" value="Interior">Interior
            <input type="radio" name="Interior" value="Interior"checked="checked">Terraza <br>
            <br>
            <label for="time-id">Introduzca la fecha comida:</label>
            <input type="date" name="time" id="time-id" value=<?php echo date('Y-m-d\TH:i:s'); ?> min=<?php echo date('Y-m-d\TH:i:s'); ?> required><br>

            <br>
            <label for="hour-id">Introduzca la hora comida:</label>
            <input type="time" name="hour" id="hour-id" default= "13:00" Min="13:00" Max="15:00"></label>

            </select>

        </p>

       <input type="submit" value="Reservar">
      

    </form>



    

</body>

</html>