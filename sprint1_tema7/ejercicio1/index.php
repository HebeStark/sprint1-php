<?php
function division(int $num1, int $num2){
    if (!$num2){
    throw new Exception("No puedes dividir por cero");
    }
    return $num1 / $num2;
}
try{
    echo division(8,0);
}catch (Exception $ex){
    echo "Excepcion capturada: " . $ex -> getMessage();
}

?>