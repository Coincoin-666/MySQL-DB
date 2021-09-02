<?php

class Database {


    private $dbname = 'colyseum';
    private $username = 'root';
    private $password = '';

    protected function connectDatabase() {
        try {
            $database = new PDO("mysql:host=localhost;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            return $database;
        } catch(PDOException $error) {
            die('error : ' . $error->getMessage());
        }
    }
}

?>