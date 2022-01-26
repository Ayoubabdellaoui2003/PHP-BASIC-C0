<?php
function mijnNaamIsGroot(){
    $voornaam = " BART ";
    $achternaam = " SIMPSON ";
    $helemaal = " Mijn naam is " . $voornaam . $achternaam;
    strtoupper($voornaam . $achternaam);
    echo $helemaal;
}

mijnNaamIsGroot();

?>