<?php

if ($rawData->num_rows > 0) {
    while ($data = $rawData->fetch_assoc()) {

        $id = $data["id"];
        $person = $data["person"];
        $day = $data["day"];
        $month = $data["month"];
        $year = $data["year"];

        echo "<form action='".URL."kalender/editSave' method=\"post\">";
        echo "<p>";
        echo "<input name=\"id\" value='$id' type=\"hidden\">";
        echo "<br>";
        echo "<br>";
        echo "Naam: " . "<input name=\"person\" value='$person' type=\"text\" max=\"12\" required>";
        echo "<br>";
        echo "<br>";
        echo "Verjaardag: " . "<input name=\"day\" value='$day' type=\"number\" min=\"1\" max=\"31\" required>" . "<input name=\"month\" value='$month' type=\"number\" min=\"1\" max=\"12\" required>" . "<input name=\"year\" value='$year' type=\"number\" min=\"1900\" max=\"2018\" required>";
        echo "</p>";
        echo "<input type=\"submit\">";
        echo "</form>";
    }
}

?>