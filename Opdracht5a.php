<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Opdracht 5A</h1>";
    echo "<h3>Toon de 3e dag van de week</h3>";

    $dagen = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"];

    echo $dagen[2];
    echo "<br>";

    echo "<h3>Toon de dagen op alfabetische volgorde (oplopend)</h3>";

    sort($dagen);
    foreach($dagen as $dag)
    {
        echo $dag . "<br>";
    }
    echo "<br>";

    echo "<h3>Toon de maanden op alfabetische volgorde (aflopend) gescheiden door punt komma's</h3>";

    $maanden = ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"];

    rsort($maanden);
    foreach($maanden as $maand)
    {
        echo $maand . "; ";
    }

    echo "<h3>Toon de strings: fox, pig en abc</h3>";

    $var = [8, 9, "fox", [8, "pig", [1, "abc"]]];

    echo $var[2] . ", ";
    echo $var[3][1] . ", ";
    echo $var[3][2][1];
    ?>
</body>
</html>