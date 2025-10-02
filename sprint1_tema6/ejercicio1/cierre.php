<?php
session_start();
session_unset();   
session_destroy(); 
echo "Sesión cerrada.";
echo '<br><a href="form.php">Volver al formulario</a>';
