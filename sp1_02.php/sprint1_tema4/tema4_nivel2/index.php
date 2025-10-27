<?php
declare(strict_types = 1);
require_once "PockerDice.php";

$dados = [];

for ($i = 0; $i < 5; $i++) {
    $dados[$i] = new PockerDice();
     echo "Dado " . ($i + 1) . ": " . $dados[$i]->echar_dado() . "\n";

}
    
echo "Total de tiradas: " . PockerDice::ver_tirada() . "\n";

?>