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
('978-0-141-03614-4'),
('978-2-13-060871-4');

--------------------------------------------------------------
-- Insert: Genres
--------------------------------------------------------------

INSERT INTO `genres`(`genres_name`) VALUES
('Philosophia'),
('Dystopia'),
('Science-Fiction')
('Pirate Life');

--------------------------------------------------------------
-- Insert: Books
--------------------------------------------------------------

INSERT INTO `books`(`books_title`,`books_author`,`books_year`,`genres_id`, `isbn_id`) VALUES
('1984', 'George Orwell', 1949, 2, 1),
('Critique de la raison pure', 'Emmanuel Kant', 1944, 1, 2);

--------------------------------------------------------------
-- JOIN
--------------------------------------------------------------

SELECT `books_title`,`books_author`,`books_year`,`isbn_number`, `genres_name`
FROM `books`
NATURAL JOIN `isbn`
NATURAL JOIN `genres`;

-- So NATURAL JOIN is definitely the easiest but you need to smartly think your database from the start.

