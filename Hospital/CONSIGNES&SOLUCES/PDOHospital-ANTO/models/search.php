<?php

class Search extends Database
{

    public function searchPatient($search)
    {
        $bdd = $this->connectDatabase($search);
        $req = $bdd->prepare("SELECT * FROM `patients` WHERE (`firstname` LIKE :search) OR (`lastname` LIKE :search)");
        $req->bindValue(':search', $search . '%', PDO::PARAM_STR);
        $req->execute();
        $result = $req->fetchAll();
        return $result;
    }
}
