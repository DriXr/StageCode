<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Opdracht 6A</h1>
    <?php

    $lid = ["naam" => "Piet", "loon" => 1000];
    $adres = ["straat" => "Steeg", "nr" => 12, "plaats" => "Arnhem"];

    echo "<p>" . "Hieronder staan de gegevens van " . $lid["naam"] . "</p>";

    echo "<ul>";
    echo "<li>" . "Loon: " . "€" . $lid["loon"] . "</li>";
    echo "<li>" . "Straat: " . $adres["straat"] . "</li>";
    echo "<li>" . "Nr: " . $adres["nr"] . "</li>";
    echo "<li>" . "Plaats: " .$adres["plaats"] . "</li>";
    echo "</ul>";

    ?>
</body>
</html>