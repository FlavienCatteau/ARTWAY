#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: service
#------------------------------------------------------------

CREATE TABLE service(
        idService   Int  Auto_increment  NOT NULL ,
        name        Varchar (50) NOT NULL ,
        description Varchar (100) NOT NULL
	,CONSTRAINT service_PK PRIMARY KEY (idService)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id          Int  Auto_increment  NOT NULL ,
        lastName    Varchar (50) NOT NULL ,
        firstName   Varchar (50) NOT NULL ,
        birthDate   Date NOT NULL ,
        adress      Text NOT NULL ,
        zipCode     Varchar (5) NOT NULL ,
        phoneNumber Varchar (10) NOT NULL ,
        idService   Int NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id)

	,CONSTRAINT users_service_FK FOREIGN KEY (idService) REFERENCES service(idService)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: article
#------------------------------------------------------------

CREATE TABLE article(
        id      Int  Auto_increment  NOT NULL ,
        title   Varchar (50) NOT NULL ,
        text    Text NOT NULL ,
        picture Varchar (50) NOT NULL
	,CONSTRAINT article_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

