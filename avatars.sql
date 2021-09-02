#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: avatar
#------------------------------------------------------------

CREATE TABLE avatar(
        avatar_id   Int  Auto_increment  NOT NULL ,
        avatar_name Varchar (50) NOT NULL ,
        avatar_src  Varchar (500) NOT NULL
	,CONSTRAINT avatar_PK PRIMARY KEY (avatar_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        user_id    Int  Auto_increment  NOT NULL ,
        user_fname Varchar (50) NOT NULL ,
        user_lname Varchar (50) NOT NULL ,
        user_job   Varchar (50) NOT NULL ,
        user_desc  Longtext NOT NULL ,
        avatar_id  Int NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (user_id)

	,CONSTRAINT user_avatar_FK FOREIGN KEY (avatar_id) REFERENCES avatar(avatar_id)
)ENGINE=InnoDB;

