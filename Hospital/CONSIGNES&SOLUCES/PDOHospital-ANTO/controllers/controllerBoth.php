<?php

require './models/Database.php';
require './models/both.php';

$errors = [];
$addSuccess = false;

if (isset($_POST["submit"]) && count($errors) == 0) {
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $birthdate = $_POST["birthdate"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $dateHour = $_POST["dateHour"] . " " . $_POST["time"] . ":00";

    $bothObj = new Both();
    $bothObj->addBoth($lastname, $firstname, $birthdate, $phoneNumber, $email, $dateHour);
    $addSuccess = true;
}  