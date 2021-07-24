CREATE DATABASE `PetitesAnnonces`;

USE `PetitesAnnonces`;

--------------------------------------------------------------
-- Table: category
--------------------------------------------------------------

CREATE TABLE category(
        cat_id   Int  Auto_increment  NOT NULL ,
        cat_name Varchar (50) NOT NULL
	,CONSTRAINT category_PK PRIMARY KEY (cat_id)
)ENGINE=InnoDB;

--"cat_id is ambiguous"
ALTER TABLE `category` CHANGE `cat_id` `cat_catID` INT AUTO_INCREMENT;
--and again...
ALTER TABLE `category` CHANGE `cat_catID` `catID` INT AUTO_INCREMENT;

--------------------------------------------------------------
-- Table: card
--------------------------------------------------------------

CREATE TABLE card(
        card_id      Int  Auto_increment  NOT NULL ,
        card_title   Varchar (50) NOT NULL ,
        card_price   Int NOT NULL ,
        card_text    Varchar (50) NOT NULL ,
        card_contact Varchar (50) NOT NULL ,
        cat_id       Int NOT NULL
	,CONSTRAINT card_PK PRIMARY KEY (card_id)

	,CONSTRAINT card_category_FK FOREIGN KEY (cat_id) REFERENCES category(cat_id)
)ENGINE=InnoDB;

-- Modification du nombre du card_text => 'data too long for column card_text'
ALTER TABLE `card` MODIFY `card_text` LONGTEXT;
--"cat_id is ambiguous"
ALTER TABLE `card` CHANGE `cat_id` `card_catID` INT;
--and again...
ALTER TABLE `card` CHANGE `card_catID` `catID` INT;
-- Ajout d'une colonne category
ALTER TABLE `card` ADD `category` VARCHAR(50) NOT NULL;


--------------------------------------------------------------
-- Table: img
--------------------------------------------------------------

CREATE TABLE img(
        img_id   Int  Auto_increment  NOT NULL ,
        img_name Varchar (50) NOT NULL ,
        card_id  Int NOT NULL
	,CONSTRAINT img_PK PRIMARY KEY (img_id)

	,CONSTRAINT img_card_FK FOREIGN KEY (card_id) REFERENCES card(card_id)
)ENGINE=InnoDB;

-- Ajout d'une colonne source
ALTER TABLE `img` ADD `img_src` VARCHAR(100);


--------------------------------------------------------------
-- Insertions
--------------------------------------------------------------
--Categories
INSERT INTO `category` (`cat_name`) VALUES ('voiture'),('immobilier'),('jeux videos'),('sono'),('ordinateurs'),('pièces détachées'),('nourriture'),('chaussures'),('ministre');

-- Cards
INSERT INTO `card` (`card_title`,`card_price`,`card_text`,`card_contact`, `cat_id`) VALUES ('bugatti', '15000000', 'Vends Bugatti Veyron, 4km, très bon état, à saisir.', 'voiturespascheres@dubai.dub', 1);
INSERT INTO `card` (`card_title`,`card_price`,`card_text`,`card_contact`, `cat_id`) VALUES ('macbook', '9999', 'Il est un peu cher mais il est en platine.', 'shutupand@takemymoney.org', 5);
INSERT INTO `card` (`card_title`,`card_price`,`card_text`,`card_contact`, `cat_id`) VALUES ('voie lactee', '999999999', "EXCLUETOTALE Vous POUVEZ acheter la galaxie pour être le chef de l'univers", 'god@stairwaytoheaven.ch', 6);
INSERT INTO `card` (`card_title`,`card_price`,`card_text`,`card_contact`, `cat_id`) VALUES ('table de mixage', '2', "C'est juste une photo en fait.", 'wish@wishisascam.cn', 4);
INSERT INTO `card` (`card_title`,`card_price`,`card_text`,`card_contact`, `cat_id`) VALUES ('N54-787I8JFK80', '750000', 'À saisir! Planète inhabitable de 3 mètres de diamètre', 'hello@dumbasses.com', 6);
INSERT INTO `card` (`card_title`,`card_price`,`card_text`,`card_contact`, `cat_id`) VALUES ('AlienSimulator 17', '444', "C'est un simulateur d'aliénation. Occasion 5ème main. Risque de décompensation.", 'psychogaming@hahaha.co.uk', 3);


-- Images
INSERT INTO `img` (`img_name`, `img_src`, `card_id`) VALUES ('bugatti', 'img/car-49278_1280.jpg', 1),('mbp', 'img/laptop-336373_1280.jpg', 2),('galaxy', 'img/milky-way-1030765_1280.jpg', 3),('mixer', 'img/mixer-1284507_1280.jpg', 4),('planet', 'img/planet-3149121_1280.jpg', 5),('spaceship', 'img/ufo-1668223_1280.jpg', 6);


--------------------------------------------------------------
-- Jointures
--------------------------------------------------------------

SELECT `card_title`, `card_price`, `card_text`, `card_contact`, `cat_name`, `img_name`, `img_src`
FROM `card`
NATURAL JOIN `category`
LEFT JOIN `img` ON `card`.`card_id`=`img`.`card_id`;
--Bien. Ça m'a pris 3h.