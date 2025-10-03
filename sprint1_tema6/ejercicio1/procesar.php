<?php 
session_start();
 $user  =$_POST['user'];
 $email =$_POST['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
       if (!empty($_POST['user']) && (!empty($_POST['email']))){

        $_SESSION['user'] = $user;
        $_SESSION['email'] = $email;

        echo  "Datos recibidos correctamente!" . "<br>";
        echo "Bienvenido/a: ". htmlspecialchars($_SESSION['user']) ."<br>";
        echo "Email: ". htmlspecialchars($_SESSION['email']) ."<br>";
     
    }else{
        echo "Debes introducir los campos requeridos";
    }
 }

?>