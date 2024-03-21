<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Opdracht 5C</h1>";

    $producten = array (
        array("Potlood", 0.50, 20, 100),
        array("Pen", 1, 10, 30),
        array("Gum", 0.2, 2, 10)
    );

    echo "<h3>Producten</h3>";
    echo $producten[0][0] . ", " . $producten[1][0] . ", " . $producten[2][0];

    echo "<h3>Producten + Prijzen</h3>";
    echo "<strong>Product: </strong>" . $producten[0][0] . ", " . "<strong>Prijs: </strong>" . "€" . $producten[0][1] . ", " . "Verkocht: " . $producten[0][2] . ", " . "<strong>Voorraad: </strong>" . $producten[0][3];
    echo "<br>";
    echo "<strong>Product: </strong>" . $producten[1][0] . ", " . "<strong>Prijs: </strong>" . "€" . $producten[1][1] . ", " . "Verkocht: " . $producten[1][2] . ", " . "<strong>Voorraad: </strong>" . $producten[1][3];
    echo "<br>";
    echo "<strong>Product: </strong>" . $producten[2][0] . ", " . "<strong>Prijs: </strong>" . "€" . $producten[2][1] . ", " . "Verkocht: " . $producten[2][2] . ", " . "<strong>Voorraad: </strong>" . $producten[2][3];

    echo "<h3>Bereken voor hoeveel geld er verkocht is</h3>";

    $totaal = 0;

    foreach($producten as $product){
        $totaal += $product[1] * $product[2];
    }

    echo "<strong>Totaal van wat verkocht is: </strong>" . "€" . $totaal;

    echo "<h3>Bereken voor hoeveel geld er nog verkocht kan worden</h3>";

    $totaal2 = 0;

    foreach($producten as $product){
        $afgetrokken = $product[3] - $product[2];
        $totaal2 += $product[1] * $afgetrokken;
    }

    echo "<strong>Totaal van wat nog verkocht kan worden: </strong>" . "€" . $totaal2;

    echo "<h3>Druk de productnamen af in een ordered list</h3>";

    echo "<ul>";
    foreach($producten as $product){
        echo "<li>" . $product[0] . "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>