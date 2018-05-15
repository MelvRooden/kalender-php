<?php

require_once('model.php');


$delete_id = $_GET["id"];

deletePerson($delete_id);
         
echo "<a href=\"index.php\">Terug</a>";

