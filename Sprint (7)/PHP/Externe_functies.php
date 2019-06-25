<?php
function korting(){
    $korting = 0;
    if (isset($_POST['student'])) $korting = $korting + 15;
    if (isset($_POST['klant'])) $korting  = $korting + 10;
    return($korting);


}

function servicekosten($betalingswijze){
$servicekosten = 0;
    switch ($betalingswijze){
        case "visa" :
            $servicekosten = 2;
            break;
        case "mc" :
            $servicekosten = 2.5;
            break;
        case "paypal" :
            $servicekosten = 1.5;
            break;
        case "ideal" :
            $servicekosten = 1;
            break;
        default :
            break;

    }
    return $servicekosten;
}


function facturing(){
    for ($x= 0; $x < sizeof($_POST["albumcode"]); $x++){}
}