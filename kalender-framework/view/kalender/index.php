<?php

//all months
$months = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");

//last used month
$lastMonth = "empty";
//last used day
$lastDay = "empty";

/*birthdays displayed*/
foreach ($data as $row) {
    //multiple person's under 1 month
    $month = $months[$row["month"] - 1];
    if ($lastMonth === $month) {
    } else {
        echo "<h1>" . $month . "</h1>";
        $lastMonth = $month;
    }

    //multiple person's under 1 month
    $day = $row["day"];
    if ($lastDay === $day) {
    } else {
        echo "<h2>" . $day . "</h2>";
        $lastDay = $day;
    }

    //for every person
    echo "<p>";
    //person and year with edit link
    echo "<a href=\"".URL."kalender/editForm/" . $row["id"] . "\">" . $row["person"] . "(" . $row["year"] . ")" . "</a>";
    //remove link
    echo "<a href=\"".URL."kalender/delete/" . $row["id"] . "\">x</a>";
    echo "</p>";
}

?>
<!--add person-->
<p><a href="<?= URL ?>kalender/create">Toevoegen+</a></p>