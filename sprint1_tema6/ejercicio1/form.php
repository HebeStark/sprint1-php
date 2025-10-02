<?php
session_start();
$errores = $_SESSION['errores'] ?? [];
$datos = $_SESSION['datos'] ?? [];
unset($_SESSION['errores'], $_SESSION['datos']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <h1>Registro de datos</h1>
    <?php if (!empty($errores)){?>
        <ul style="color:red;">
            <?php foreach ($errores as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php } ?>

    <form action="procesar.php" method="post">
        <label for="user">Nombre:</label>
        <input type="text" id="user" name="user" value="<?= htmlspecialchars($datos['user'] ?? '') ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($datos['email'] ?? '') ?>"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
