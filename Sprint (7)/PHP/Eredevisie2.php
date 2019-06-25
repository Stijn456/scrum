<?php
/** Opdracht: Eredivisie  */
function printArray($item, $key){

    echo "<br>$key" . ": " . "<i> $item </i>";

    $image = "<html> <img src='../img/sukkel.png'/>";


}

$clubs = array(
    array("Positie"=> "1e", "Club" => "Ajax",
        "stad" => "Amsterdam", "gespeeld" => "28",
        "gewonnen" => "28", "gelijk" => "2", "verloren" => "4",
        "" => "<html> <img src='../img/Ajax.png' width='100px'/>"),
    array("positie "=> "7e", "Club" => "Heracles",
        "Stad" => "Almelo", "gespeeld" => "34",
        "gewonnen" => "15", "gelijk" => "3", "verloren" => "16",
        "" => "<html> <img src='../img/heracles.png' width='85px'/>"),
);
echo "<br>----- Club Informatie";
array_walk_recursive($clubs, "printArray");