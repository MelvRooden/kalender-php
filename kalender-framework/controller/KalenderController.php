<?php

require(ROOT . "model/KalenderModel.php");


/*index*/
function index()
{
    $data = getAllBirthdays();
    render("kalender/index", $data);
}


/*delete person*/
function delete($id)
{
    deletePerson($id);
    header("refresh:0; url=http://" . URL ."kalender");
}


/*create person*/
function create()
{
    render("kalender/createForm");
}

function createSave()
{
    createPerson($_POST);
    header("refresh:0; url=http://" . URL ."kalender");
}


/*edit person*/
function editForm($id)
{
    $data["rawData"] = getBirthday($id);
    render("kalender/editForm", $data);
}

function editSave()
{
    editPerson($_POST);
    header("refresh:0; url=http://" . URL ."kalender");
}