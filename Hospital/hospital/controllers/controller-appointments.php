<?php
require "../models/appointments.php";

$appointments_errors = [];
$appointmentSuccess = false;


//------------------------------------------------------------
// Loops
$listPatientsObj = new Patients();
$listPatientsArray = $listPatientsObj->listPatients();

$listAppointmentsObj = new Appointments();
$listAppointmentsObj = $listAppointmentsObj->listAppointments();

//------------------------------------------------------------

// Affichage des données du patients pour lequel on prend rendez-vous
if (isset($_GET['patientID'])) {
    $infosPatientObj = new Patients();
    $infosPatientObjArray = $infosPatientObj->infosPatient($_GET['patientID']);
}

// Condition d'enregistrement du rendez-vous

// Conditions de test d'input à mettre ici //

if (isset($_POST['appointment_btn']) && count($appointments_errors) == 0) {
    $dateHour = strftime('%Y-%m-%d', strtotime($_POST['appointmentDate'])) . " " . strftime('%T', strtotime($_POST['appointmentTime']));
    $dateHourObj = new Appointments();
    $idPatient = $_POST['listedPatient'];
    $dateHourObj->addOneAppointment($dateHour, $idPatient);
    $appointmentSuccess = true;
}

if (isset($_GET['appointmentID'])) {
    $appointmentObj = new Appointments();
    $infosOneAppointment = $appointmentObj->infosOneAppointment($_GET['appointmentID']);
}

if(isset($_POST['saveUpdate'])) {
    $appointmentObj = new Appointments();
    $dateHour = strftime('%Y-%m-%d', strtotime($_POST['appointmentDate'])) . " " . strftime('%T', strtotime($_POST['appointmentTime']));
    $dateHourObj = new Appointments();
    $idPatient = $_GET['patientID'];
    $dateHourObj->updateAppointment($dateHour, $idPatient);
    $appointmentSuccess = true;
}