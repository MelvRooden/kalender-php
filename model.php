<?php

function createDBconnection() {
    $conn = mysqli_connect(localhost, root, mysql, calendar);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function getAllBirthdays() {
    $connection = createDBconnection();
    $sql = "SELECT * FROM birthdays ORDER BY month ASC, day ASC";
    $result = $connection->query($sql);
    $connection->close();
    return $result;
}

function getEditBirthday($id) {
    $connection = createDBconnection();
    $sql = "SELECT * FROM birthdays WHERE id=$id";
    $result = $connection->query($sql);
    $connection->close();
    return $result;
}

function createPerson($data) {
    $person = $data['person'];
    $day = $data['day'];
    $month = $data['month'];
    $year = $data['year'];

    $connection = createDBconnection();

    $sql = "INSERT INTO birthdays (person, day, month, year) VALUES (?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("siii", $person, $day, $month, $year);

    $stmt->execute();
    $stmt->close();
    $connection->close();
}

function editPerson ($data) {
    $id = $data['id'];
    $person = $data['person'];
    $day = $data['day'];
    $month = $data['month'];
    $year = $data['year'];

    $connection = createDBconnection();

    $sql = "UPDATE birthdays SET person=$person, day=$day, month=$month, year=$year  WHERE id=$id";
    $update = $connection->query($sql);

    $update->execute();
    $connection->close();
}

function deletePerson($delete_id) {
    $connection = createDBconnection();
    $sql = "DELETE FROM birthdays WHERE id=$delete_id";
    $connection->query($sql);
    $connection->close();
}