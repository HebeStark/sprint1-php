<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = trim($_POST['user']);
    $email = trim($_POST['email']);
    $errores = [];

    if (empty($name)) {
        $errores[] = "El nombre es obligatorio.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errores[] = "El nombre solo puede contener letras y espacios.";
    }
    if (empty($email)) {
        $errores[] = "El correo electrónico es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del correo no es válido.";
    }

    if (!empty($errores)) {
        $_SESSION['errores'] = $errores;
        $_SESSION['datos']   = $_POST;
        header("Location: form.html");
        exit();
    } else {
        $_SESSION['nombre'] = $name;
        $_SESSION['email']  = $email;

        echo "¡Registro exitoso!<br>";
        echo "Nombre: " . htmlspecialchars($_POST['user']) . "<br>";
        echo "Email: "  . htmlspecialchars($_POST['email']) . "<br>";

        echo '<a href="cierre.php">Cerrar sesión</a>';
    }
}
?>