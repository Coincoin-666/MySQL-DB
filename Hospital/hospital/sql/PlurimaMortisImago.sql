#------------------------------------------------------------

-- 1 – PREMIÈRE ÉTAPE

#------------------------------------------------------------
-- L'exercice de base consistait en une prise de rdv à l'hopital.
-- C'est d'actualité. Et ça me gonfle. Donc je fais une morgue.
-- Ce qui a été changé:
-- HopitalE2N => PlurimaMortisImago
-- birthdate => deathdate
-- idPatients => idPatient
#------------------------------------------------------------
#        Script MySQL.
-- Création de la base de donnée, définition des caractères utilisés
-- Instruction d'utilisation de la base de donnée -> returns "Database changed"
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `PlurimaMortisImago` CHARACTER SET 'utf8';
USE `PlurimaMortisImago`;

#------------------------------------------------------------
# Table: patients
-- Création du premier tableau (s'il n'existe pas): les patients.
-- Définis selon un id unique, leur nom, prénom, date de mort, n° de tel, mail
-- -> returns "Query OK..."
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `patients`(
        `id`        INT (11) AUTO_INCREMENT  NOT NULL ,
        `lastname`  VARCHAR (25) NOT NULL ,
        `firstname` VARCHAR (25) NOT NULL ,
        `deathdate` DATE NOT NULL ,
        `phone`     VARCHAR (25) ,
        `email`      VARCHAR (100) NOT NULL ,
        PRIMARY KEY (`id`)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: appointments
-- Création du deuxième tableau (s'il n'existe pas): les patients.
-- Définis selon un id unique, la date du rdv et l'id du patient -> nécessitera une jointure sur idPatient = `patients`[`id`]
-- -> returns "Query OK..."
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `appointments`(
        `id`         INT (11) AUTO_INCREMENT  NOT NULL ,
        `dateHour`   DATETIME NOT NULL ,
        `idPatient` INT (11) NOT NULL ,
        PRIMARY KEY (`id`)
)ENGINE=InnoDB;

-- Ajout de la contrainte: on indique à la colonne `idPatient` du tableau 'appointments' qu'elle correspondra à la colonne `id` du tableau 'patients'

ALTER TABLE `appointments` ADD CONSTRAINT FK_appointments_id_patients FOREIGN KEY (`idPatient`) REFERENCES `patients`(`id`);

#------------------------------------------------------------
-- À partir de là, la base de données est prête pour recevoir les valeurs.
-- Prochaine étape: créer la classe $database qui permettra la connexion.
#------------------------------------------------------------

-- Exemple de requête fonctionnelle pour ajout d'un patient
-- -> à intégrer dans une fonction qui se déclenchera après l'envoi des données
INSERT INTO `patients` (`lastname`, `firstname`, `deathdate`, `phone`, `mail`)
VALUES ('Jojo', 'Juju', '25/01/14', '09867675879', 'ajhjfe@fjfldj.fr');