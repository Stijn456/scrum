<?php

echo "<H2>// Kaarten //</H2>";

/**
 * Created by PhpStorm.
 * User: Stijn
 * Date: 02/04/2019
 * Time: 15:17
 */

$kaarten = array("schoppen", "ruiten", "harten", "klaveren");
$nummer = array("boer", "heer", "vrouw", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10");


for ($x = 0; $x <= 4; $x++) {
    $getkaart = ($kaarten[rand(0, 3)]) . "_" . ($nummer[rand(0, 12)]);
    echo "<html> <img src='../img/kaarten/$getkaart.svg'/>";

}
