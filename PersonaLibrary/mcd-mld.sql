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

-- Adding an isbn_id column so we can use NATURAL JOIN later
ALTER TABLE `books_series` ADD `isbn_id` VARCHAR(17);
-- Adding a have column to track how many we miss
ALTER TABLE `books_series` ADD `how_many` VARCHAR(100);

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
('978-0-141-03614-4'),            --1
('978-2-13-060871-4'),           --2
('978-2-7071-8680-5'),           --3
('978-2-84950-891-6'),          --4
('978-2-264-05789-1'),           --5
('978-2-0807-0036-0'),          --6
('2-264-00840-7'),                   --7
('979-10-209-0699-1'),           --8
('978-2-36106-5096'),            --9
('978-2-35522-122-4'),          --10
('979-10-329-0609-5'),          --11
('978-2-7381-4567-3'),          --12
('978-2-84734-525-4'),          --14
('none'),
('978-23730908-0-2'),           --15
('978-2-7029-1122-8'),          --16
('2-7441-7081-X');                   --17

--------------------------------------------------------------
-- Insert: Genres
--------------------------------------------------------------

INSERT INTO `genres`(`genres_name`) VALUES
('Philosophia'),
('Dystopia'),
('Science-Fiction'),
('History'),
('Novel'),
('Political'),
('Sciences'),
('Sociology'),
('HowToBooks');

--------------------------------------------------------------
-- Insert: Books
--------------------------------------------------------------

INSERT INTO `books`(`books_title`,`books_author`,`books_year`,`genres_id`, `isbn_id`) VALUES
('1984', 'George Orwell', 1949, 2, 1),
('Critique de la raison pure', 'Emmanuel Kant', 1944, 1, 2),
('La Commune', 'Louise Michel', 1898, 4, 3),
('La Commune Au Jour Le Jour', 'various', 1871, 4, 4),
('IQ84-Livre 2', 'Haruki Murakami', 2009, 5, 5),
('Éloge de la Folie', 'Érasme', 1508, 1, 6),
('Le Manifeste du Parti Communiste', 'Karl Marx', 1847, 6, 7),
("L'Art d'Être Libre", 'Tom Hodkinson', 2006, 1, 8),
('Psychologie De La Connerie', 'various', 2018, 1, 9),
('Développement (im)personnel', 'Julia De Funès', 2019, 1, 11),
('Brèves Réponses Aux Grandes Questions', 'Stephen Hawking', 2018, 7, 12),
("Souvenirs d'un Insurgé–La Commune 1871", 'Paul Martine', 1971, 4), --No isbn – Librairie Académique Nantaise
("Mémoires de Prison d'un Anarchiste", 'Alexandre Berkman', 1912, 4, 14),
('Guide du Dépannage et des Réparations Domestiques', "The Reader's Digest", 1974, 9);  --No isbn – Reader's Digest Selection
('3MPC 50 Plus Grandes Théories de la Physique Quantique', 'Brian Clegg', 2014, 9, 15)

--------------------------------------------------------------
-- JOIN
--------------------------------------------------------------

SELECT `books_title`,`books_author`,`books_year`,`isbn_number`, `genres_name`
FROM `books`
NATURAL JOIN `isbn`
NATURAL JOIN `genres`;

-- So NATURAL JOIN is definitely the easiest but you need to smartly think your database from the start.

