<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $user  = $_POST['user'];
      $edad = $_POST['edad'];
      $email = $_POST['email'];

      $errores = [];

      if (empty($_POST["user"])) { 
            $errores[] = "Se requiere el nombre de usuario"; 
      } elseif (!preg_match("/^[a-zA-Z0-9_]*$/", $user)) { 
            $errores[] = "Solo se permiten letras, números y guiones bajos para el nombre de usuario"; 
      } 
      
      if (empty($_POST["edad"])){
            $errores[] = "Desbes ingresar tu edad";
      }elseif(!preg_match("/^[0-9]*$/", $edad)) { 
            $errores[] = "¡Solo se permiten valores numéricos!!";  
      }

      if (empty($_POST["email"])){            
            $errores[] = "El campo email es obligatorio";
       } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {   
        $errores[] = "Correo electrónico no válido."; 
       }

      if(empty($errores)){
            echo "Datos recibidos correctamente" . "<br>";
            echo "Usuario:" . htmlspecialchars($user) . "<br>";
            echo "Edad: " . htmlspecialchars($edad) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
      }else {
            foreach($errores as $error){
                  echo $error . "<br>";
            }
      }
    
}
?>