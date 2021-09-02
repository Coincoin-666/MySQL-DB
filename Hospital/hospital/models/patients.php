<?php
//------------------------------------------------------------
// 5 – CINQUIÈME ÉTAPE:
// Création de la classe Patients, fille de Database.
// Cette classe contiendra toutes les fonctions qui seront réutilisées par les objets.
//------------------------------------------------------------
require "database.php";

class Patients extends Database
{
    //------------------------------------------------------------
    public function addPatient($firstname, $lastname, $deathdate, $phone, $email) {
        /**
         * On se connecte à la base de données grâce à la fonction créée à l'étape 1,
         * On formule la requête qui nous intéresse, stockée dans une variable sous forme de string.
         */
        $database = $this->connectDatabase();
        $query = "INSERT INTO `patients` (`firstname`, `lastname`, `deathdate`, `phone`, `email`) VALUES (:firstname, :lastname, :deathdate, :phone, :email)";
        $addOnePatientQuery = $database->prepare($query);
        $addOnePatientQuery->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $addOnePatientQuery->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $addOnePatientQuery->bindValue(':deathdate', $deathdate,  PDO::PARAM_STR);
        $addOnePatientQuery->bindValue(':phone', $phone, PDO::PARAM_STR);
        $addOnePatientQuery->bindValue(':email', $email, PDO::PARAM_STR);
        /**
         * On prépare la requête,
         * On lie les valeurs que l'on récupère à des variables,
         * On execute la requête. -> SUITE DANS LE CONTROLLER.PHP
         */
        $addOnePatientQuery->execute();
    }
    //------------------------------------------------------------


    //------------------------------------------------------------
    // Fonction pour lister les patients présents dans la db.
    // Ici, on n'a pas besoin de prepare()/execute() car on veut récupérer toutes les données du tableau Patient.
    public function listPatients() {
        $database = $this->connectDatabase();
        $query = "SELECT * FROM `patients`";
        // On se connecte à la db,
        // On "fetch all" (data)
        $queryAllPatients = $database->query($query);
        $allPatientsArray = $queryAllPatients->fetchAll();
        return $allPatientsArray;
    }
    //------------------------------------------------------------


    //------------------------------------------------------------
    // Fonction qui permettra l'affichage des données. 
    // On récupère d'abord l'id et on lui assigne un marqueur nominatif ":patientID"
    // La methode fetch() permet la récupération des données d'UNE SEULE ligne du tableau,
    // (par opposition à fetchAll() qui va chercher toutes les infos du tableau). 
     public function infosPatient($patientID) {
        $database = $this->connectDatabase();
        $query = "SELECT * FROM `patients` WHERE `id` = :patientID";

        $queryOnePatient = $database->prepare($query);
        $queryOnePatient->bindValue(':patientID', $patientID, PDO::PARAM_STR);
        $queryOnePatient->execute();
        $infosPatient = $queryOnePatient->fetch();
        return $infosPatient;
    }
    //------------------------------------------------------------


    //------------------------------------------------------------
    // Fonction de modification de patient
    public function updatePatient($id, $lastname, $firstname, $deathdate, $phone, $email) {
        $database = $this->connectDatabase();
        $query = "UPDATE `patients`
        SET `firstname` = :firstname, `lastname` = :lastname, `deathdate` = :deathdate, `phone` = :phone, `email` = :email
        WHERE `id` = :patientID";

        $queryUpdatePatient = $database->prepare($query);
        $queryUpdatePatient->bindValue(':patientID', $id, PDO::PARAM_STR);
        $queryUpdatePatient->bindValue(':lastname', $firstname, PDO::PARAM_STR);
        $queryUpdatePatient->bindValue(':firstname', $lastname, PDO::PARAM_STR);
        $queryUpdatePatient->bindValue(':deathdate', $deathdate, PDO::PARAM_STR);
        $queryUpdatePatient->bindValue(':phone', $phone, PDO::PARAM_STR);
        $queryUpdatePatient->bindValue(':email', $email, PDO::PARAM_STR);
        $queryUpdatePatient->execute();
        return $queryUpdatePatient;
    }
    //------------------------------------------------------------


    //------------------------------------------------------------
    // Fonction de suppression de patient.
    // Sur le modèle des infos (?)
    public function deletePatient($patientID) {
        $database = $this->connectDatabase();
        $query = "DELETE FROM `patients` WHERE `id` = :patientID";

        $queryDeletePatient = $database->prepare($query);
        $queryDeletePatient->bindValue(':patientID', $patientID, PDO::PARAM_STR);
        $queryDeletePatient->execute();
    }
}
