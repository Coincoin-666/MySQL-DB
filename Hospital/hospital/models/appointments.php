<?php
require "patients.php";

//------------------------------------------------------------
// Création de la classe Appointments, fille de Database, qui contiendra les fonctions dédiées aux rendez-vous
class Appointments extends Database
{
    // On procède de la même manière que pour les ajouts de patients,
    // On se connecte à la base de données puis on formule la requête
    public function addOneAppointment($dateHour, $idPatient)
    {
        $database = $this->connectDatabase();
        $query = "INSERT INTO `appointments` (`dateHour`, `idPatient`) VALUES (:dateHour, :idPatient)";
        $addOneAppointment = $database->prepare($query);
        $addOneAppointment->bindValue(':dateHour', $dateHour, PDO::PARAM_STR);
        $addOneAppointment->bindValue(':idPatient', $idPatient, PDO::PARAM_INT);
        // Une fois que la requête est formulée et les valeurs liées, on execute
        $addOneAppointment->execute();
    }
    //------------------------------------------------------------
    public function infosPatient($patientID)
    {
        $database = $this->connectDatabase();
        $query = "SELECT * FROM `appointments` INNER JOIN `patients` ON `patients`.`id`=`appointments`.`idPatient`";

        $queryOnePatient = $database->prepare($query);
        $queryOnePatient->bindValue(':patientID', $patientID, PDO::PARAM_STR);
        $queryOnePatient->execute();
        $infosPatient = $queryOnePatient->fetch();
        return $infosPatient;
    }
    //------------------------------------------------------------
    public function listAppointments()
    {
        $database = $this->connectDatabase();
        $query = "SELECT `appointments`.`id` AS `appointmentID`, `appointments`.`idPatient`, `dateHour`, `firstname`, `lastname`, `phone`  FROM `appointments` INNER JOIN `patients` ON `patients`.`id`=`appointments`.`idPatient`";
        $queryAllAppointments = $database->query($query);
        $listAppointments = $queryAllAppointments->fetchAll();
        return $listAppointments;
    }

    public function infosAppointment($patientID, $dateHour) {
        $database = $this->connectDatabase();
        $query = "SELECT * FROM `appointments` INNER JOIN `patients` ON `patients`.`id` = `appointments`.`idPatient` WHERE `id` = :patientID";
        $queryOneAppointment = $database->prepare($query);
        $queryOneAppointment->bindValue(':patientID', $patientID, PDO::PARAM_STR);
        $queryOneAppointment->bindValue(':dateHour', $dateHour, PDO::PARAM_STR);
        $queryOneAppointment->execute();
        $infosAppointment = $queryOneAppointment->fetch();
        return $infosAppointment;
    }

    public function infosOneAppointment($appointmentID) {
        $database = $this->connectDatabase();
        $query = "SELECT `appointments`.`id` AS `appointmentID`, `appointments`.`idPatient`, `dateHour`, `firstname`, `lastname` FROM `appointments` INNER JOIN `patients` ON `patients`.`id` = `appointments`.`idPatient` WHERE `appointments`.`id` = :appointmentID";
        $queryOneAppointment = $database->prepare($query);
        $queryOneAppointment->bindValue(':appointmentID', $appointmentID, PDO::PARAM_STR);
        $queryOneAppointment->execute();
        $infosOneAppointment = $queryOneAppointment->fetch();
        return $infosOneAppointment;
    }

    public function updateAppointement($appointmentID, $dateHour) {
        $database = $this->connectDatabase();
        $query = "UPDATE `appointments`
        SET `dateHour` = :dateHour 
        WHERE `appointments`.`id` AS `appointmentID` = $appointmentID";
        $updateAppointment = $database->prepare($query);
        $updateAppointment->bindValue(':appointmentID', $appointmentID, PDO::PARAM_STR);
        $updateAppointment->bindValue(':dateHour', $dateHour, PDO::PARAM_STR);
        $updateAppointment->execute();       
    }
}