<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <h1>Registro de datos</h1>

    <form action="procesar.php" method="post">
        <label for="user">Nombre:</label>
        <input type="text" id="user" name="user" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
