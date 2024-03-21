<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo "<h1>Opdracht 6B</h1>";

    $namen = [["naam" => "Jan", "uurloon" => 10, "uren" => 12],["naam" => "Fred", "uurloon" => 89, "uren" => 26],["naam" => "Anna", "uurloon" => 129, "uren" => 21]];

    echo "<ul>";
    foreach($namen as $naam)
    {
        echo "<li>" . $naam["naam"];
        echo "<ul>";
        echo "<li>" . "Per uur: " . $naam["uurloon"] . "</li>";
        echo "<li>" . "Uren: " . $naam["uren"] . "</li>";
        $uitkomst = $naam["uren"] * $naam["uurloon"];
        echo "<li>" . "Totaal: " . $uitkomst;
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>