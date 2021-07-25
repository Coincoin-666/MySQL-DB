--------------------------------------------------------------
--        Script MySQL.
--------------------------------------------------------------

CREATE DATABASE PersonaLibrary;

USE PersonaLibrary;

--------------------------------------------------------------
-- Table: ISBN
--------------------------------------------------------------

CREATE TABLE isbn(
        isbn_id     Int  Auto_increment  NOT NULL ,
        isbn_number Varchar (17) NOT NULL
	,CONSTRAINT isbn_PK PRIMARY KEY (isbn_id)
)ENGINE=InnoDB;

--------------------------------------------------------------
-- Table: genres
--------------------------------------------------------------

CREATE TABLE genres(
        genres_id   Int  Auto_increment  NOT NULL ,
        genres_name Varchar (100) NOT NULL
	,CONSTRAINT genres_PK PRIMARY KEY (genres_id)
)ENGINE=InnoDB;

--------------------------------------------------------------
-- Table: books
--------------------------------------------------------------

CREATE TABLE books(
        books_id     Int  Auto_increment  NOT NULL ,
        books_title  Varchar (100) NOT NULL ,
        books_author Varchar (100) NOT NULL ,
        books_year   Date NOT NULL ,
        genres_id    Int NOT NULL
	,CONSTRAINT books_PK PRIMARY KEY (books_id)

	,CONSTRAINT books_genres_FK FOREIGN KEY (genres_id) REFERENCES genres(genres_id)
)ENGINE=InnoDB;

-- Adding an isbn_id column so we can use NATURAL JOIN later
ALTER TABLE `books` ADD `isbn_id` VARCHAR(17);
-- Modify the 'year' column type DATE -> INT
ALTER TABLE `books` MODIFY `books_year` INT;

--------------------------------------------------------------
-- Table: books_series
--------------------------------------------------------------

CREATE TABLE books_series(
        books_series_id            Int  Auto_increment  NOT NULL ,
        books_series_title         Varchar (100) NOT NULL ,
        books_series_authors       Varchar (500) NOT NULL ,
        books_series_release_years Varchar (150) NOT NULL ,
        books_series_over          Bool NOT NULL ,
        genres_id                  Int NOT NULL
	,CONSTRAINT books_series_PK PRIMARY KEY (books_series_id)

	,CONSTRAINT books_series_genres_FK FOREIGN KEY (genres_id) REFERENCES genres(genres_id)
)ENGINE=InnoDB;

-- Adding columns to track how many we miss
ALTER TABLE `books_series` ADD `how_many` VARCHAR(100);
ALTER TABLE `books_series` ADD `total` INT;

--------------------------------------------------------------
-- Table: has_number
--------------------------------------------------------------

CREATE TABLE has_number(
        isbn_id         Int NOT NULL ,
        books_id        Int NOT NULL ,
        books_series_id Int NOT NULL
	,CONSTRAINT has_number_PK PRIMARY KEY (isbn_id,books_id,books_series_id)

	,CONSTRAINT has_number_isbn_FK FOREIGN KEY (isbn_id) REFERENCES isbn(isbn_id)
	,CONSTRAINT has_number_books0_FK FOREIGN KEY (books_id) REFERENCES books(books_id)
	,CONSTRAINT has_number_books_series1_FK FOREIGN KEY (books_series_id) REFERENCES books_series(books_series_id)
)ENGINE=InnoDB;

--------------------------------------------------------------
-- Insert: ISBN
--------------------------------------------------------------

INSERT INTO `isbn`(`isbn_number`) VALUES
('978-0-141-03614-4'),          --#1984
('978-2-13-060871-4'),          --#CritiqueDeLaRaisonPure
('978-2-7071-8680-5'),          --#LaCommune
('978-2-84950-891-6'),          --#LaCommuneAuJourLeJour
('978-2-264-05789-1'),          --#1Q84vol2
('978-2-0807-0036-0'),          --#ElogeDeLaFolie
('2-264-00840-7'),                   --#LeManifesteDuPartiCommuniste
('979-10-209-0699-1'),           --#LArtDEtreLibre
('978-2-36106-5096'),            --#PsychologieDeLaConnerie
('978-2-35522-122-4'),          --#Sorcieres
('979-10-329-0609-5'),          --#DeveloppementImPersonnel
('978-2-7381-4567-3'),          --#BrevesReponsesAuxGrandesQuestions
('none'),                                       --#SouvenirsDunInsurge
('978-2-84734-525-4'),          --#LesJaponais
('978-23730908-0-2'),           --#MemoiresDePrisonDunAnarchiste
('none'),                                       --#GuideDuDepannage                          
('978-2-7029-1122-8'),           --#PhysiqueQuantique   
('2-7441-7081-X'),                   --#LaCiteDeDieu
('978-2-266-22410-9'),          --#PourquoiJaiMangeMonPère
('978-2-264-04685-7'),         --#LePassageDeLaNuit
('978-2-07-041358-4'),          --#NouvellesSousEcstasy
('978-2-07-043735-1'),          --#LasVegasParano
('2-290-05366-X'),                  --#Starplex
('978-2-253-08250-7'),          --#CrimeEtChatiment
('978-2-7427-3703-1'),          --#LesFreresKaramazovVol1
('978-2-264-05788-4'),          --#1Q84vol1
('978-2-35432-071-3'),          --#ParolesBouddha
('978-2-37415-000-0'),          --#ZenEtKarma
('978-2-501-08484-0'),          --#MediterQuotidien
('978-2-226-18313-2'),          --#Shoninki
('978-2-7427-9309-9'),          --#Millenium1
('none'),                                       --#TeachingOfBuddha
('978-2-01-703845-0'),          --#Parvana
('978-1-905379-51-4'),          --#BangkokBoy
('0-14-012934-0'),                   --#HomeEndWorld
('0-575-40094-3'),                 --#BlameHitler
('978-0-14-139790-0'),          --#NietzscheAphorism
('978-2-266-20526-9'),          --#LivreDesMorts
('978-2-84111-370-5'),          --#NestPasBouddhisteQuiVeut
('978-2-7381-3123-2'),          --#Borderlines
('978-2-87730-953-0'),          --#MemoiresYakuza
('978-2-226-01852-6'),          --#Traite5Roues
('978-2-8097-1027-4'),          --#MasqueSamourai
('978-2-87730-922-6'),          --#ImportanceVivre
('978-2-290-16652-9'),          --#TroisAmisSagesse
('978-2-87730-572-3');          --#Yakuza

-- I made a mistake at some point, and thought that deleting the row would reset the incrementation. But no. Now my indexes start at 24 --"
-- I finally decided to DELETE all the rows, and start over the INSERT.
-- But now, I have to UPDATE all my books data, since the indexes are not corresponding any more.
-- See script in the `books` section.

--------------------------------------------------------------
-- Insert: Genres
--------------------------------------------------------------

INSERT INTO `genres`(`genres_name`) VALUES
('Philosophy'),
('Dystopia'),
('Science-Fiction'),
('History'),
('Novel'),
('Political'),
('Sciences'),
('Sociology'),
('HowToBooks'),
('Surrealism'),
('Meditate'),
('Adventure'),
('Fantastique'),
('Martial Arts');

--------------------------------------------------------------
-- Insert: Books
--------------------------------------------------------------

INSERT INTO `books`(`books_title`,`books_author`,`books_year`,`genres_id`, `isbn_id`) VALUES
('1984', 'George Orwell', 1949, 2, 1),
('Critique de la raison pure', 'Emmanuel Kant', 1944, 1, 2),
('La Commune', 'Louise Michel', 1898, 4, 3),
('La Commune Au Jour Le Jour', 'various', 1871, 4, 4),
('1Q84 – Livre 2', 'Haruki Murakami', 2009, 10, 5),
('Éloge de la Folie', 'Érasme', 1508, 1, 6),
('Le Manifeste du Parti Communiste', 'Karl Marx', 1847, 6, 7),
("L'Art d'Être Libre", 'Tom Hodkinson', 2006, 1, 8),
('Psychologie De La Connerie', 'various', 2018, 1, 9),
('Développement (im)personnel', 'Julia De Funès', 2019, 1, 10),
('Brèves Réponses Aux Grandes Questions', 'Stephen Hawking', 2018, 7, 11),
("Souvenirs d'un Insurgé–La Commune 1871", 'Paul Martine', 1971, 4, 12), --No isbn – Librairie Académique Nantaise
("Mémoires de Prison d'un Anarchiste", 'Alexandre Berkman', 1912, 4, 13),
('Les Japonais', 'Karyn Poupée', 2008, 8, 14),
('Guide du Dépannage et des Réparations Domestiques', "The Reader's Digest", 1974, 15),  --No isbn – Reader's Digest Selection
('3MPC 50 Plus Grandes Théories de la Physique Quantique', 'Brian Clegg', 2014, 9, 16);

-- Mistake Correction:
UPDATE `books` SET `isbn_id`=24 WHERE `books_id`=1;
-- I don't want to mess up the whole thing again, so I'm going 1 by 1. Fortunately I only have 20 rows for now.
UPDATE `books` SET `isbn_id`=25 WHERE `books_id`=2;
UPDATE `books` SET `isbn_id`=26 WHERE `books_id`=3;
UPDATE `books` SET `isbn_id`=27 WHERE `books_id`=4;
UPDATE `books` SET `isbn_id`=28 WHERE `books_id`=5;
UPDATE `books` SET `isbn_id`=29 WHERE `books_id`=6;
UPDATE `books` SET `isbn_id`=30 WHERE `books_id`=7;
UPDATE `books` SET `isbn_id`=31 WHERE `books_id`=8;
UPDATE `books` SET `isbn_id`=32 WHERE `books_id`=9;
UPDATE `books` SET `isbn_id`=33 WHERE `books_id`=10;
UPDATE `books` SET `isbn_id`=34 WHERE `books_id`=11;
UPDATE `books` SET `isbn_id`=35 WHERE `books_id`=12;
UPDATE `books` SET `isbn_id`=36 WHERE `books_id`=13;
UPDATE `books` SET `isbn_id`=37 WHERE `books_id`=14;
UPDATE `books` SET `isbn_id`=38 WHERE `books_id`=15;
UPDATE `books` SET `isbn_id`=39 WHERE `books_id`=16;
UPDATE `books` SET `isbn_id`=40 WHERE `books_id`=17;
UPDATE `books` SET `isbn_id`=41 WHERE `books_id`=18;
UPDATE `books` SET `isbn_id`=42 WHERE `books_id`=19;
-- All right! It worked!

INSERT INTO `books`(`books_title`,`books_author`,`books_year`,`genres_id`, `isbn_id`) VALUES
('Le Passage de la Nuit', 'Haruki Murakami', 2004, 10, 43),
('Nouvelles Sous Ecstasy', 'Frédéric Beigbeder', 2000, 5, 44),
('Las Vegas Parano', 'Hunter S. Thompson', 1971, 5, 45),
('Starplex', 'Robert J. Sawyer', 1996, 3, 46),
('Crime et Châtiment', 'Fedor Mikhaïlovitch Dostoïevski', 1866, 5, 47),
('Les Frères Karamazov – Tome 1', 'Fedor Mikhaïlovitch Dostoïevski', 1880, 5, 48),
('1Q84 – Livre 1', 'Haruki Murakami', 2009, 10, 49),
('Les plus belles paroles du Bouddha', '(from the) Dhammapada', 2011, 11, 50),
('Zen et Karma', 'Taisen Deshimaru', 1979, 11, 51),
('Méditer au Quotidien', 'Vénérable Henepola Gunaratana', 1991, 11, 52),
('Shôninki', 'Natori Masazumi', 1743, 4, 53),
('Millénium 1', 'Stieg Larsson', 2005, 5, 54),
('The Teaching of Buddha', 'Bukkyô Dendô Kyôkai', 1966, 11, 55),
('Parvana', 'Deborah Ellis', 2000, 5, 56),
('Bangkok Boy', 'Chai Pinit', 2008, 5, 57),
('A Home at the End of the World', 'Michael Cunningham', 1990, 5, 58),
('Blame Hitler', 'Julian Rathbone', 1997, 5, 59),
('Aphorisms on Love and Hate', 'Friedrich Nietzsche', 1878, 1, 60),
('Le Livre Des Morts Tibétain', 'Padmasambhava', NULL, 11, 61),
("N'est pas Bouddhiste qui veut", 'Dzongsar Jamyang Khyentse', 2007, 1, 62),
('Les Borderlines', 'Pr. Bernard Granger & Daria Karaklic', 2012, 7, 63),
("Mémoires d'un Yakuza", 'SAGA Junichi', 1991, 4, 64),
('Le Traité des Cinq Roues', 'Miyamoto Musashi', 1643, 1, 65),
('Le Masque Du Samouraï', 'Aude Fieschi', 2006, 4, 66),
("L'Importance De Vivre", 'LIN Yutang', 1937, 1, 67),
('Trois Amis en Quête de Sagesse', 'Christophe André, Alexandre Jollien, Matthieu Ricard', 2018, 11),
('Yakuza', 'David Kaplan & Alec Dubro', 2001, 8, 69);

--------------------------------------------------------------
-- Insert: Books_series
--------------------------------------------------------------

INSERT INTO `books_series`(`books_series_title`,`books_series_authors`,`books_series_release_years`,`books_series_over`, `genres_id`, `how_many`, `total`) VALUES
('BLAME!', 'Tsutomu Nihei', '1997 – 2003', TRUE, 2, 7, 10),
--TRUE returns 1, 1 also returns 1. Guessing FALSE will be 0.
('Abara', 'Tsutomu Nihei', '2006', 1, 2, 2, 2),
('The Arms Peddler', 'Kyoichi Nanatsuki & Night Owl', '2010 – [...]', FALSE, 3, 4, 7),
('Gunnm', 'Yukito Kishiro', '1990 – 1995', TRUE, 3, 1, 9),
('One Piece', 'Eichiro Oda', '1997 – [...]', FALSE, 12, 4, 99),
('Dusk Maiden of Amnesia', 'Maybe', '2009 – 2013', TRUE, 13, 2, 10),
('Blood Lad', 'Yuuki Kodama', '2009 – 2016', TRUE, 13, 3, 17),
('Black Lagoon', 'Rei Hiroe', '2002 – [...]', FALSE, 12, 3, 11),
('Dragon Ball', 'Akira Toriyama', '1984 – 1995', TRUE, 14, 5, 42),
('Tenjho Tenge', 'Oh!Great', '1997 – 2010', TRUE, 14, 11, 22),
('Hunter x Hunter', 'Yoshihiro Togashi', '1998 – [...]', FALSE, 12, 10, 36);


--------------------------------------------------------------
-- JOIN
--------------------------------------------------------------

--books
SELECT `books_title`,`books_author`,`books_year`,`isbn_number`, `genres_name`
FROM `books`
NATURAL JOIN `isbn`
NATURAL JOIN `genres`;

-- So NATURAL JOIN is definitely the easiest but you need to smartly think your database from the start.

--books_series
SELECT `books_series_title`,`books_series_authors`,`books_series_release_years`,`books_series_over`, `genres_name`
FROM `books_series`
NATURAL JOIN `genres`;