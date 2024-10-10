<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de moda</title>
</head>

<body>
    <h1>Tienda de moda</h1>
    /** Definimos el tipo de post */
    <form action="form.php" method="POST">
        <p>
            <label for="prendas-id">Seleccione tipo de prenda:</label>
            <select name="prendas[]" id="prendas-id" multiple>
                <option value="abrigos">Abrigos</option>
                <option value="tops">Tops</option>
                <option value="camisas">Camisas</option>
            </select>
        </p>
        <p>
            <label for="color-id">Color</label>
            <input type="color" name="color" id="color-id">
        </p>

        <input type="submit" value="Enviar">
      

    </form>

</body>

</html>