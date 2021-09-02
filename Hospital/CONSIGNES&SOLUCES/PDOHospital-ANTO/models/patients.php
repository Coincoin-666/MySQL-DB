<?php
require './models/database.php';

class Patients extends Database
{
    public function addPatient($lastname, $firstname, $birthdate, $phoneNumber, $email)
    {
        $bdd = $this->connectDatabase();
        $req = $bdd->prepare("INSERT INTO `patients`(lastname, firstname, birthdate, phone, mail) VALUES(:lastname, :firstname, :birthdate, :phone, :mail)");
        $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $req->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
        $req->bindValue(':phone', $phoneNumber, PDO::PARAM_STR);
        $req->bindValue(':mail', $email, PDO::PARAM_STR);
        $req->execute();
    }

    public function getAllPatients()
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `patients`";
        $queryAllPatients = $bdd->query($query);
        $allPatientsArray = $queryAllPatients->fetchAll();
        return $allPatientsArray;
    }

    public function getOnePatient($idPatient) {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `patients` WHERE `id` = :idPatient";
        $queryOnePatient = $bdd->prepare($query);
        $queryOnePatient->bindValue(':idPatient', $idPatient, PDO::PARAM_STR);
        $queryOnePatient->execute();
        $onePatientArray = $queryOnePatient->fetch();
        return $onePatientArray;
    }

    public function modifyPatient($lastname, $firstname, $birthdate, $phoneNumber, $email, $id)
    {
        $bdd = $this->connectDatabase();
        $req = $bdd->prepare("UPDATE `patients` SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone = :phone, mail = :mail WHERE id = :id");
        $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $req->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
        $req->bindValue(':phone', $phoneNumber, PDO::PARAM_STR);
        $req->bindValue(':mail', $email, PDO::PARAM_STR);
        $req->bindvalue(':id', $id, PDO::PARAM_STR);
        $req->execute();
    }

    public function deletePatient($idPatient) {
        $bdd = $this->connectDatabase();
        $query = "DELETE FROM `patients` WHERE `id` = :idPatient";
        $queryOnePatient = $bdd->prepare($query);
        $queryOnePatient->bindValue(':idPatient', $idPatient, PDO::PARAM_STR);
        $queryOnePatient->execute();
    } 

    public function getPatients($offset, $results_per_page)
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `patients` LIMIT :offset, :results_per_page";
        $query = $bdd->prepare($query);
        $query->bindValue(':offset', $offset, PDO::PARAM_INT);
        $query->bindValue(':results_per_page', $results_per_page, PDO::PARAM_INT);
        $query->execute();
        $patients = $query->fetchAll();
        return $patients;
    }
}
