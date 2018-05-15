<?php

require_once('model.php');

$id = $_GET["id"];
$person = $_GET["person"];
$day = $_GET["day"];
$month = $_GET["month"];
$year = $_GET["year"];

echo "<p>" . "ID=" . $id . "</p>";
echo "<p>" . "Naam: " . $person . "</p>";
echo "<p>" . "Verjaardag: " . $day . "-" . $month . "-" . $year . "</p>";

?>

<html>
<head>
    <title>Verjaardagskalender</title>
    <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="editAction.php" method="post">
    <p>Naam:<input name="person" type="text" max="12" required></p>
    <p>Geboortedatum:<input placeholder="Dag" name="day" type="number" min="1" max="31" required> <input placeholder="month" name="month" type="number" min="1" max="12" required> <input placeholder="Jaar" name="year" type="number" min="1900" max="2018" required></p>
    <?php
    "<input name='id' value='$id'>"
    ?>
    <input type="submit">
</form>
</body>
</html>