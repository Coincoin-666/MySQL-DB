#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: clients
#------------------------------------------------------------

CREATE TABLE clients(
        id                Int  Auto_increment  NOT NULL ,
        nom_client        Varchar (50) ,
        prenom_client     Varchar (50) ,
        date_de_naissance Datetime ,
        courriel          Varchar (50)
	,CONSTRAINT clients_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: registre
#------------------------------------------------------------

CREATE TABLE registre(
        id             Int  Auto_increment  NOT NULL ,
        titre          Varchar (50) ,
        date_d_emprunt Datetime ,
        date_de_retour Datetime
	,CONSTRAINT registre_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: livres
#------------------------------------------------------------

CREATE TABLE livres(
        id            Int  Auto_increment  NOT NULL ,
        titre         Varchar (50) ,
        nom_auteur    Varchar (50) ,
        prenom_auteur Varchar (50)
	,CONSTRAINT livres_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: genres
#------------------------------------------------------------

CREATE TABLE genres(
        id              Int  Auto_increment  NOT NULL ,
        horreur         Bool ,
        science_fiction Bool ,
        jeunesse        Bool ,
        roman           Bool
	,CONSTRAINT genres_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: emprunte_un_livre
#------------------------------------------------------------

CREATE TABLE emprunte_un_livre(
        id         Int NOT NULL ,
        id_clients Int NOT NULL
	,CONSTRAINT emprunte_un_livre_PK PRIMARY KEY (id,id_clients)

	,CONSTRAINT emprunte_un_livre_registre_FK FOREIGN KEY (id) REFERENCES registre(id)
	,CONSTRAINT emprunte_un_livre_clients0_FK FOREIGN KEY (id_clients) REFERENCES clients(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: s'apparente_à
#------------------------------------------------------------

CREATE TABLE s_apparente_a(
        id        Int NOT NULL ,
        id_livres Int NOT NULL
	,CONSTRAINT s_apparente_a_PK PRIMARY KEY (id,id_livres)

	,CONSTRAINT s_apparente_a_genres_FK FOREIGN KEY (id) REFERENCES genres(id)
	,CONSTRAINT s_apparente_a_livres0_FK FOREIGN KEY (id_livres) REFERENCES livres(id)
)ENGINE=InnoDB;

