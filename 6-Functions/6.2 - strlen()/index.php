<?php
function mijnNaamIsGroot(){
    $voornaam = " Ayoub ";
    $achternaam = " el Abdellaoui ";
    $helemaal = " Mijn naam is " . $voornaam . $achternaam;
    strtoupper($voornaam . $achternaam);
    echo $helemaal;
}

mijnNaamIsGroot();

?>