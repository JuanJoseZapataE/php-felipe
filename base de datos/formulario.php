<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="POST">
        <label>nombre:</label>
            <input type="text" name="nombre">
        <label>Documento:</label>
            <input type="number" name="documento">
        <label>Correo:</label>
            <input type="email" name="email">
        <label>Telefono:</label>
            <input type="number" name="telefono">
        <label>Edad:</label>
            <input type="number" name="edad">
        <label>Direccion:</label>
            <input type="text" name="direccion">
        <label>Genero:</label>
        <select name="genero">
            <option value="Masculino">Hombre</option>
            <option value="Femenino">Mujer</option>
        </select>



        <input type="submit" value="Enviar">

    </form>
</body>
</html>