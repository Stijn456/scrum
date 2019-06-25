<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BSN_Check</title>
</head>
<body>
<h3>VUL JE BSN IN!: </h3>


<form name="bsn123" action="" method="post">
    <input name="bsn" type="text" placeholder="BSN">
    <input name="verzenden" type="submit" value="Verstuur">


</form>
</body>
</html>

<?php
        /**Php word aangeroepen wanneer verzenden word getriggered */

        if (isset($_POST["verzenden"])){

            /**bsn die je hebt ingevoerd word omgezet in een variabelen*/

        $BSN = ($_POST["bsn"]);



    /**Hier word de bsn bij elkaar opgeteld*/
    $BSNint = strlen($BSN);

    /**Hier word gekeken of er andere tekens gebruikt word in de bsn*/
    $BSNnumeric = is_numeric($BSN);


    echo "Jou BSN: " . $BSN;


    /**Hier word de BSN gezuiverd door gebruik van een if statement */
    if ($BSNint == 9 && $BSNnumeric){
        echo "<br>";
        echo "Jou gegeven bsn heeft $BSNint nummers.";
        echo "<br>";
        echo "BSN goedgekeurd.";
    }

    /**Als de bsn niet gelijk is aan 9 of hij heeft tekens word die niet goedgekeurd*/
    elseif($BSNint <> 9 || $BSNnumeric){
        echo "<br>Jou gegeven BSN heeft $BSNint tekens, kijk of je gebruik maakt van tekens.";
        echo "<br>BSN niet juist ingevoerd";
    }
    else{
        echo "<br>bsn niet juist ingevoerd";
    }

}