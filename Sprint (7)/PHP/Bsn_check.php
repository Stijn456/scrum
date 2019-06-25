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

/**Het bsn nummer die je hebt ingevoerd word een variable*/

$BSN = ($_POST["bsn"]);

/**hier kijk je hoeveel nummers erin de gegeven bsn zitten */
    $BSNint = strlen($BSN);

/**Hier word de bsn gecontroleerd of er tekens worden gebruikt*/

    $BSNnumeric = is_numeric($BSN);

    echo "Jou BSN: " . $BSN;

    /**Hier word de BSN gezuiverd om te kijken of die klopt door gebruik van if-statements*/

    if ($BSNint <> 9 ){
        echo "<br>";
        echo "Jou gegeven bsn heeft $BSNint nummers.";
        echo "<br>";
        echo "Uw BSN moet gelijk zijn aan negen cijfers.";
    }

    elseif($BSNnumeric)
    {
        echo "<br>";
        echo "BSN goedgekeurd.";
    }else{
        echo "<br>";
        echo "Uw gegeven BSN maakt gebruik van tekens / letters.";
    }

}