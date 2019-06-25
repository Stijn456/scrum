<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
          content="text/html;
            charset=utf-8" />
    <style>
        html, body {
            font-size: 16pt !important;
        }

        .album{: left; width: 100%;}
        .omslag{float: left;}
        .gegevens{float: left; padding-left: 20px;}
        .korting{clear: left;}
        .aantal{background-color: #f8ce6c}
    </style>
    <title>Mijn winkelmandje</title>
</head>
<body style="font-family: Verdana; font-size: 9px;">
<h3> Mijn winkelmandje</h3>
<form name="albums" action="" method="post">
    <div class="album">
        <div class="omslag">
            <img src="../img/evora.jpg" width="125px" alt="X"/>
        </div>
        <div class="gegevens">
            Cesaria Evora "Em Um Concerto"  Prijs: $9
            <input type="hidden" name="albumcode[0]" value="001" >
            <input type="hidden" name="artiest[0]" value="Cesaria Evora ">
            <input type="hidden" name="album[0]" value="Em Um Concerto" >
            <input type="hidden" name="prijs[0]" value="9" >
            <input type="hidden" name="genre[0]" value="World" >
            <br />Aantal:
            <input type="text" size=2 maxlength=3
                   name="getal" class="aantal" value="0">
        </div>
    </div>
    <div class="korting">
        <br><hr />Korting:<br />
        <input type="checkbox" name="student" value="15" />
        student: 15%<br />
        <input type="checkbox" name="klant" value="10" />
        Klant: 10%<br />
    </div>
    <p>Selecteer een betalingswijze: </p>
    <select name="betaling" value="true">
        <option value=" "></option>
        <option value="visa">Visa</option>
        <option value="mc">Mastercard</option>
        <option value="paypal">Paypal</option>
        <option value="ideal">Ideal</option>
    </select>
    <input type="submit" width="300px" name="verzenden"
           value=" Bestellen " />
</form>
</body>
</html>
<?php
if (isset($_POST["verzenden"]))
{
    $aantal = ($_POST["getal"]);
    echo "<br>Bestelde albums: " . $aantal . "<br>";

    if (isset($_POST["student"]) && (isset ($_POST["klant"])))
    {
        echo "Korting is 25%";
    }
    elseif (isset($_POST["student"]))
    {
        echo "Korting is 15%";
    }
    elseif (isset($_POST["klant"]))
    {
        echo "Korting is 10%";
    }
    else
    {
        echo "Geen korting";
    }

    switch ($_POST["betaling"])
    {
        case "visa" :
            echo "<br>Betalingswijze: Visa";
        break;
        case "mc" :
            echo "<br>Betalingswijze: Mastercard";
        break;
        case "paypal" :
            echo "<br>Betalingswijze: Paypal";
        break;
        case "ideal" :
            echo "<br>Betalingswijze: ideal";
        break;
        default:
            echo "<br>Vul een betalingswijze in";
    }
}

?>