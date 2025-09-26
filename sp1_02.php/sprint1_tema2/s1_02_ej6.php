<?php

function isBetween(): bool {
    $random = rand(0,1);
    return $random === 1;
}

if(isBetween()){
    echo "Charlie te mordi el dedo!!";
}else {
    echo "Charlie no te mordio el dedo";
}   

?>