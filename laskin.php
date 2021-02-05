<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laskin</title>
</head>
<body>

<form action="laskin.php" method="get">
    Luku1: <input type="text" name="num1"><br>
    Laskutoimitus:
    <select name="operation">
        <option value="add">Yhteenlasku</option>
        <option value="sub">Erotus</option>
        <option value="times">Kertolasku</option>
        <option value="divided">Jakolasku</option>
    </select><br>
    Luku2: <input type="text" name="num2"><br><br>
    <input type="submit" value="Laske">
</form>

<br>

<?php

$n1 = $_GET["num1"];
$n2 = $_GET["num2"];
$op = $_GET["operation"];

if (is_numeric($n1) && is_numeric($n2)) {
    if ($op == "add") {
        echo $n1 + $n2;
    } elseif ($op == "sub") {
        echo $n1 - $n2;
    } elseif ($op == "times") {
        echo $n1 * $n2;
    } elseif ($op == "divided") {
        echo $n1 / $n2;
    }
} else {
    echo "Käytä vain numeroita";
}

?>

</body>
</html>


