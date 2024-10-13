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
            <label for="time-id"">DIME SI ES VERANO😎 O INVIERNO 🎅:</label>
            <input type="date" name="time" id="time-id" value=<?php echo date('Y-m-d\TH:i:s'); ?> min=<?php echo date('Y-m-d\TH:i:s'); ?> required><br>
            </select>

        </p>

        <input type="submit" value="Estacionizame">
      

    </form>

</body>

</html>