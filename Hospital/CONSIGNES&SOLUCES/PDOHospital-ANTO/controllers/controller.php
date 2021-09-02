<?php

require './models/patients.php';
require './models/search.php';
$errors = [];
$addSuccess = false;

if (isset($_POST["deletePatient"])) {
    $patientProfilObj = new Patients();
    $patientProfilObj->deletePatient($_POST["deletePatient"]);
}

if (isset($_GET["searchPatient"])) {
    $searchObj = new Search();
    $listeResultArray = $searchObj->searchPatient($_GET["searchPatient"]);
    
}

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

$total_results = count($listPatientsArray);
$results_per_page = 10;
$number_of_pages = ceil($total_results/$results_per_page);

if(!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$offset = ($page - 1) * $results_per_page;

$listPatientsPerPageObj = new Patients();
$listPatientsPerPageArray = $listPatientsPerPageObj->getPatients($offset, $results_per_page);
