#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE `BibliothèqueLaManu`;
USE `BibliothèqueLaManu`;

#------------------------------------------------------------
# Table: livres
#------------------------------------------------------------

CREATE TABLE livres(
        id                 Int  Auto_increment  NOT NULL ,
        titre              Varchar (50) NOT NULL ,
        nom_de_l_auteur    Varchar (50) NOT NULL ,
        prenom_de_l_auteur Varchar (50) NOT NULL
	,CONSTRAINT livres_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: clients
#------------------------------------------------------------

CREATE TABLE clients(
        id                Int  Auto_increment  NOT NULL ,
        nom_du_client     Varchar (50) NOT NULL ,
        prenom_du_client  Varchar (50) NOT NULL ,
        date_de_naissance Datetime NOT NULL
	,CONSTRAINT clients_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: registre
#------------------------------------------------------------

CREATE TABLE registre(
        id             Int  Auto_increment  NOT NULL ,
        date_d_emprunt Datetime NOT NULL ,
        date_de_retour Datetime NOT NULL ,
        id_clients     Int NOT NULL ,
        id_livres      Int NOT NULL
	,CONSTRAINT registre_PK PRIMARY KEY (id)

	,CONSTRAINT registre_clients_FK FOREIGN KEY (id_clients) REFERENCES clients(id)
	,CONSTRAINT registre_livres0_FK FOREIGN KEY (id_livres) REFERENCES livres(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: genres
#------------------------------------------------------------

CREATE TABLE genres(
        id    Int  Auto_increment  NOT NULL ,
        genre Varchar (50) NOT NULL
	,CONSTRAINT genres_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: se classe
#------------------------------------------------------------

CREATE TABLE se_classe(
        id        Int NOT NULL ,
        id_livres Int NOT NULL
	,CONSTRAINT se_classe_PK PRIMARY KEY (id,id_livres)

	,CONSTRAINT se_classe_genres_FK FOREIGN KEY (id) REFERENCES genres(id)
	,CONSTRAINT se_classe_livres0_FK FOREIGN KEY (id_livres) REFERENCES livres(id)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Définition des genres
#------------------------------------------------------------

INSERT INTO `genres`(`genre`) VALUES ('horreur'),('science-fiction'),('jeunesse'),('roman');

#------------------------------------------------------------
# Insertion des données du tableau `livres` avec generatedata.com
#------------------------------------------------------------

-- 10
INSERT INTO `livres` (`id`,`titre`,`nom_de_l_auteur`,`prenom_de_l_auteur`) VALUES (1,"ac mattis velit","Schmitt","Catherine"),(2,"posuere at, velit.","Bouvier","Justine"),(3,"in aliquet","Royer","Robin"),(4,"magna sed dui. Fusce","Simon","Éloïse"),(5,"tempor lorem, eget mollis","Girard","Ethan"),(6,"egestas, urna justo faucibus","Leclerc","Kimberley"),(7,"Mauris vestibulum, neque sed","Andre","Anaëlle"),(8,"erat, in","Noel","Pierre"),(9,"volutpat. Nulla dignissim. Maecenas","Laurent","Mathis"),(10,"adipiscing ligula. Aenean","Roger","Jasmine");
-- 20
INSERT INTO `livres` (`id`,`titre`,`nom_de_l_auteur`,`prenom_de_l_auteur`) VALUES (11,"mus. Donec dignissim magna","Blanchard","Inès"),(12,"ornare","Michel","Romane"),(13,"congue. In scelerisque scelerisque","David","Corentin"),(14,"Nullam","Cousin","Lucas"),(15,"consectetuer,","Mathieu","Jules"),(16,"velit.","Martin","Mohamed"),(17,"Quisque ac libero nec","Picard","Lola"),(18,"risus. Duis a","Philippe","Maxime"),(19,"nisi.","Marie","Renaud"),(20,"quis","Pereira","Chloé");
-- 30
INSERT INTO `livres` (`id`,`titre`,`nom_de_l_auteur`,`prenom_de_l_auteur`) VALUES (21,"Nulla tempor augue","Benoit","Renaud"),(22,"et libero. Proin","Perrin","Bastien"),(23,"dui, semper et,","Bertrand","Charlotte"),(24,"bibendum fermentum","Renard","Kimberley"),(25,"quis diam. Pellentesque habitant","Vincent","Robin"),(26,"taciti sociosqu ad litora","Rolland","Maëlle"),(27,"rutrum, justo.","Menard","Anna"),(28,"et","Collet","Nicolas"),(29,"felis orci, adipiscing non,","Fleury","Noémie"),(30,"arcu","Dumont","Lena");
-- 40
INSERT INTO `livres` (`id`,`titre`,`nom_de_l_auteur`,`prenom_de_l_auteur`) VALUES (31,"magna. Phasellus dolor elit,","Berger","Jade"),(32,"scelerisque","Perrot","Guillemette"),(33,"lobortis mauris. Suspendisse aliquet","Moreau","Maxime"),(34,"Mauris quis turpis","Duval","Loane"),(35,"id","Huet","Jeanne"),(36,"pede, malesuada","Jean","Émilie"),(37,"nisl arcu","Lambert","Hugo"),(38,"elit fermentum risus, at","Gomez","Bastien"),(39,"ut mi. Duis risus","Le goff","Jules"),(40,"Mauris eu","Boulanger","Martin");
-- 50
INSERT INTO `livres` (`id`,`titre`,`nom_de_l_auteur`,`prenom_de_l_auteur`) VALUES (41,"arcu imperdiet ullamcorper.","Dupont","Ambre"),(42,"cursus","Maillard","Françoise"),(43,"quis diam.","Arnaud","Margaux"),(44,"pellentesque","Martinez","Océane"),(45,"posuere vulputate,","Gonzalez","Dorian"),(46,"ut","Dupuis","Anaïs"),(47,"a, magna.","Lambert","Alexia"),(48,"est mauris,","Dubois","Jérémy"),(49,"a, auctor","Riviere","Zacharis"),(50,"et malesuada","Rousseau","Pierre");
-- 60
INSERT INTO `livres` (`id`,`titre`,`nom_de_l_auteur`,`prenom_de_l_auteur`) VALUES (51,"ultrices. Vivamus rhoncus.","Meunier","Mathieu"),(52,"urna. Vivamus molestie dapibus","Perez","Carla"),(53,"erat nonummy ultricies","Michel","Elsa"),(54,"lobortis tellus justo sit","Gonzalez","Maéva"),(55,"ultricies adipiscing, enim mi","Le gall","Pauline"),(56,"Vestibulum ante","Brun","Bienvenue"),(57,"posuere cubilia Curae;","Petit","Yasmine"),(58,"ultrices, mauris ipsum porta","Collet","Pierre"),(59,"tempus mauris","Henry","Alice"),(60,"Aliquam ornare, libero at","Perrin","Samuel");
-- 70
INSERT INTO `livres` (`id`,`titre`,`nom_de_l_auteur`,`prenom_de_l_auteur`) VALUES (61,"consectetuer","Bourgeois","Lucas"),(62,"cursus, diam","Michel","Léonard"),(63,"Curae; Phasellus","Pasquier","Samuel"),(64,"sodales at,","Guillaume","Renaud"),(65,"cursus vestibulum. Mauris","Fabre","Louna"),(66,"a nunc. In","Marchal","Gabin"),(67,"luctus. Curabitur egestas","Adam","Lilou"),(68,"id, libero. Donec consectetuer","Klein","Guillaume"),(69,"nec","Benoit","Capucine"),(70,"sit amet, consectetuer adipiscing","Picard","Marwane");

#------------------------------------------------------------
# Insertion des données du tableau `clients` avec generatedata.com
#------------------------------------------------------------

ALTER TABLE `clients` ADD `courriel` VARCHAR(50);

-- 10
INSERT INTO `clients` (`id`,`nom_du_client`,`prenom_du_client`,`date_de_naissance`,`courriel`) VALUES (1,"Robin","Yanis","1929-06-23 09:15:24","pharetra.nibh@CurabiturmassaVestibulum.co.uk"),(2,"Marchand","Anna","2001-09-07 18:04:44","Nunc.laoreet.lectus@justofaucibuslectus.co.uk"),(3,"Lefebvre","Nathan","1964-04-05 01:49:37","cursus.luctus@pretiumet.com"),(4,"Rousseau","Marie","1934-12-05 21:49:18","libero.mauris@Duis.com"),(5,"Lebrun","Nathan","1966-08-21 13:01:37","magna.sed@inmolestietortor.edu"),(6,"Chevalier","Tatiana","1962-07-01 02:48:27","eget@eu.ca"),(7,"Pereira","Edwige","1976-07-06 14:05:09","consequat@ante.com"),(8,"Rousseau","Mehdi","1955-05-07 21:33:59","Curabitur.sed.tortor@natoquepenatibus.org"),(9,"Mathieu","Hugo","1965-08-12 14:43:29","libero.lacus@auctornon.ca"),(10,"Leclerc","Zoé","1992-04-05 22:00:11","Quisque.purus.sapien@Class.net");
-- 20
INSERT INTO `clients` (`id`,`nom_du_client`,`prenom_du_client`,`date_de_naissance`,`courriel`) VALUES (11,"Mallet","Laura","1922-05-01 15:15:45","arcu.Sed@Mauris.ca"),(12,"Guillaume","Clémence","1975-03-10 01:37:30","lacinia.at.iaculis@rutrum.co.uk"),(13,"Richard","Kylian","1917-06-06 10:42:04","mus.Donec.dignissim@euligula.ca"),(14,"Poirier","Benjamin","1970-01-05 10:12:51","auctor.velit.Aliquam@nislMaecenasmalesuada.net"),(15,"Roy","Candice","1991-07-11 02:42:40","Cras.dolor@semper.edu"),(16,"Albert","Léo","1944-08-17 19:15:09","aliquet@Maurisvelturpis.com"),(17,"Pasquier","Loane","1962-04-26 14:25:49","sed.dolor@sagittis.com"),(18,"Adam","Maëlle","1947-06-12 06:58:23","accumsan.sed@tellusNunc.com"),(19,"Gay","Pauline","1923-11-30 12:38:59","Mauris.vel.turpis@velitAliquamnisl.ca"),(20,"Michel","Elsa","1997-05-17 11:36:36","egestas.ligula.Nullam@magnaUttincidunt.org");
-- 25
INSERT INTO `clients` (`id`,`nom_du_client`,`prenom_du_client`,`date_de_naissance`,`courriel`) VALUES (21,"Francois","Timothée","1979-07-09 16:50:30","adipiscing.elit.Curabitur@Nullamvelitdui.co.uk"),(22,"Cordier","Margot","1985-09-10 21:01:19","ornare.placerat.orci@orciadipiscingnon.net"),(23,"Rodriguez","Zacharis","1961-03-25 01:28:41","In.condimentum.Donec@cursusa.co.uk"),(24,"Schmitt","Léon","1966-01-09 07:38:23","risus@ultriciesdignissimlacus.org"),(25,"Poirier","Alicia","1951-05-02 12:26:02","vitae.aliquam.eros@ametnulla.net");

#------------------------------------------------------------
# Maintenant, pour le reste, le mystère reste entier.
#------------------------------------------------------------

