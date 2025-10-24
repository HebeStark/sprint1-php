<?php
$mis_invitados = array("Amalia", "Lucas", "Carlos", "Maria", "Sofía", "Javier");
$tus_invitados = array("Pau", "Lucía", "Miguel","Javier" ,"Marta", "Sofía");
$lista_invitados_comun = array_intersect($mis_invitados, $tus_invitados); 
$todos_invitados = array_unique(array_merge($mis_invitados, $tus_invitados));

echo "Invitados en comun:\n";
foreach ($lista_invitados_comun as $invitado) {
    echo "- " . $invitado . "\n";
}
echo "Nombres de invitados sin duplicados:\n";
foreach ($todos_invitados as $invitado) {
    echo "- " . $invitado . "\n";
}
echo "Mi lista de invitados:\n";
foreach ($mis_invitados as $invitado) {
    echo "- " . $invitado . "\n";
}
echo "Tu lista de invitados:\n";
foreach ($tus_invitados as $invitado) {
    echo "- " . $invitado . "\n";
}
?>