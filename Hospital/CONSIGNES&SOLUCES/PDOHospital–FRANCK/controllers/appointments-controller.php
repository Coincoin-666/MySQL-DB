<?php
require './models/patients.php';
require './models/appointments.php';

$errors = [];
$addSuccess = false;

$listPatientsObj = new Patients();
$listPatientsArray = $listPatientsObj->getAllPatients();

if (isset($_POST["dateBtn"]) && count($errors) == 0) {
    $dateHour = $_POST["dateHour"] . " " . $_POST["time"] . ":00";
    $idPatients = $_POST["id"];

    $appointmentObj = new Appointments();
    $appointmentObj->addAppointment($dateHour, $idPatients);
    $addSuccess = true;
}

$listAppointmentsObj = new Appointments();
$listAppointmentsArray = $listAppointmentsObj->getAllAppointments();

if (isset($_GET["idAppointment"])) {
    $patientAppointmentObj = new Appointments();
    $patientAppointmentArray = $patientAppointmentObj->getOneAppointment($_GET["idAppointment"]);
    var_dump($patientAppointmentArray);
}

if (isset($_POST["idAppointment"]) && count($errors) == 0) {
    $dateHour = $_POST["dateHour"] . " " . $_POST["time"] . ":00";
    $idPatients = $_POST["idPatients"];
    $idAppointment = $_POST["idAppointment"];

    $modifyAppointmentsObj = new Appointments();
    $modifyAppointmentsObj->modifyAppointment($idPatients, $dateHour, $idAppointment);
    $addSuccess = true;
    $patientAppointmentArray = $patientAppointmentObj->getOneAppointment($idAppointment);
}
