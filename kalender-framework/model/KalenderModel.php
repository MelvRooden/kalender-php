<?php
//get all from birthdays
function getAllBirthdays()
{
    $db = createDBconnection();
    $sql = "SELECT * FROM birthdays ORDER BY month ASC, day ASC";
    $result = $db->query($sql);
    $db->close();

    return $result;
}

//delete selected person
function deletePerson($id)
{
    $connection = createDBconnection();
    $sql = "DELETE FROM birthdays WHERE id=$id";
    $connection->query($sql);
    $connection->close();
}

//create new person
function createPerson($data)
{
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

//get id from selected person
//id for person edit
function getBirthday($id)
{
    $connection = createDBconnection();
    $sql = "SELECT * FROM birthdays WHERE id=$id";
    $result = $connection->query($sql);
    $connection->close();

    return $result;
}

/*edit selected person*/
function editPerson($data)
{
    $id = $data['id'];
    $person = $data['person'];
    $day = $data['day'];
    $month = $data['month'];
    $year = $data['year'];

    $connection = createDBconnection();

    $sql = "UPDATE birthdays SET person=?, day=?, month=?, year=? WHERE id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("siiii", $person, $day, $month, $year, $id);

    $stmt->execute();
    $stmt->close();
    $connection->close();
}