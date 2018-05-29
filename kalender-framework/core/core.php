<?php

//create database connection
function createDBconnection()
{
    $conn = mysqli_connect(localhost, root, mysql, calendar);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function openDatabaseConnection() 
{
	$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
	
	$db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);

	return $db;
}


function render($filename, $data = null)
{
	if ($data) {

		foreach($data as $key => $value) {
			$$key = $value;
		}
	} 

	require(ROOT . 'view/templates/header.php');
	require(ROOT . 'view/' . $filename . '.php');
	require(ROOT . 'view/templates/footer.php');
}