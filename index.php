<?php

require_once('model.php');

$jaar = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
$data = getAllBirthdays();

$lastMonth = "empty";
$lastDay = "empty";

echo "<br>";
if ($data->num_rows > 0) {
    while ($row = $data->fetch_assoc()) {

        $month = $jaar[$row["month"] - 1];
        if ($lastMonth === $month) {
        } else {
            echo "<h1>" . $month . "</h1>";
            $lastMonth = $month;
        }

        $day = $row["day"];
        if ($lastDay === $day) {
        } else {
            echo "<h2>" . $day . "</h2>";
            $lastDay = $day;
        }

        //voor alle personen

        echo "<p>";
        echo "<a href=\"edit.php?id=" . $row["id"]. "&person=" . $row["person"] . "&day=" . $row["day"] . "&month=" . $row["month"] . "&year=" . $row["year"] . "\">" . $row["person"] . "(" . $row["year"] . ")" . "</a>";
        echo "<a href=\"delete.php?id=" . $row["id"] . "\">x</a>";
        echo "</p>";
    }
}
?>
<html>
<head>
    <title>Verjaardagskalender</title>
    <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p><a href="create.php">+ Toevoegen</a></p>
</body>
</html>