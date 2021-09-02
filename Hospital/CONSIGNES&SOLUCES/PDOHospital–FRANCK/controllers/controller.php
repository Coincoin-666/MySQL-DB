<?php

require './models/patients.php';

$errors = [];
$addSuccess = false;

if (isset($_POST["submit"]) && count($errors) == 0) {
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $birthdate = $_POST["birthdate"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];

    $patientsObj = new Patients();
    $patientsObj->addPatient($lastname, $firstname, $birthdate, $phoneNumber, $email);
    $addSuccess = true;
}

$listPatientsObj = new Patients();
$listPatientsArray = $listPatientsObj->getAllPatients();

if (isset($_GET["idPatient"])) {
    $patientProfilObj = new Patients();
    $patientProfilArray = $patientProfilObj->getOnePatient($_GET["idPatient"]);
}

if (isset($_POST["modify"]) && count($errors) == 0) {
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $birthdate = $_POST["birthdate"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $id = $_POST["id"];

    $modifyPatientObj = new Patients();
    $modifyPatientObj->modifyPatient($lastname, $firstname, $birthdate, $phoneNumber, $email, $id);
    $addSuccess = true;
    $patientProfilArray = $patientProfilObj->getOnePatient($id);
}