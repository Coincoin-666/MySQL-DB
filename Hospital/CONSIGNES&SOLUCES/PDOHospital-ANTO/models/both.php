<?php

class Both extends Database {
    public function addBoth($lastname, $firstname, $birthdate, $phoneNumber, $email, $dateHour)
    {
        $bdd = $this->connectDatabase();
        $patient = $bdd->prepare("INSERT INTO `patients`(lastname, firstname, birthdate, phone, mail) VALUES(:lastname, :firstname, :birthdate, :phone, :mail)");
        $patient->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $patient->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $patient->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
        $patient->bindValue(':phone', $phoneNumber, PDO::PARAM_STR);
        $patient->bindValue(':mail', $email, PDO::PARAM_STR);
        $patient->execute();
        $currentID = $bdd->lastInsertId();

        $appointment = $bdd->prepare("INSERT INTO `appointments`(dateHour, idPatients) VALUES(:dateHour, :idPatients)");
        $appointment->bindValue(':dateHour', $dateHour, PDO::PARAM_STR);
        $appointment->bindValue(':idPatients', $currentID, PDO::PARAM_STR);
        $appointment->execute();

    }
}
