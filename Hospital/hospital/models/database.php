<?php
//------------------------------------------------------------
// 2 – DEUXIÈME ÉTAPE:
// Création de la classe $database qui permet la connexion à la base de données sur le serveur.
// PDO = Php Data Object
//------------------------------------------------------------

class Database {
    /**
     * La db est définie par son nom ($dbname) et les id de connexion ($username + $password).
     * On créé ensuite une fonction de connexion qui s'initialise avec un nouvel objet PDO.
     * On lui passe en paramètre les éléments qui autorisent la connexion.
     */
    private $dbname = 'PlurimaMortisImago';
    private $username = 'root';
    private $password = 'root';

    protected function connectDatabase() {
        // On essaye de se connecter à la base de données,
       try {
           $database = new PDO("mysql:host=localhost;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
           return $database;
           // Si ça marche pas, on 'attrape' l'exception est on affiche l'erreur.
       } catch(PDOException $error) {
           die('error: ' . $error->getMessage());
       }
    }
}
/**
 * try et catch c'est un peu comme if/else mais pour les classes.
 * 
 * Fin de la 2ème étape qui ne correspond même pas à la fin de l'exercice 1.
 */