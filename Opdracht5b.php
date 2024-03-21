<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numbers = [8, 23, 15, 42, 16, 4];

    echo "<h1>Opdracht 5B</h1>";;
    echo "<h3>Aantal elementen in de array</h3>";

    echo "<ul>";
    echo "<li>" . count($numbers) . "</li>";
    echo "</ul>";

    echo "<h3>Hoogste waarde in de array</h3>";

    echo "<ul>";
    echo "<li>" . max($numbers) . "</li>";
    echo "</ul>";

    echo "<h3>Laagste waarde in de array</h3>";

    echo "<ul>";
    echo "<li>" . min($numbers) . "</li>";
    echo "</ul>";
    ?>
</body>
</html>