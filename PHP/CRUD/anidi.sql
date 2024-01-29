DROP DATABASE IF EXISTS  anidi;
CREATE DATABASE IF NOT EXISTS anidi
CHARACTER SET utf8mb4
COLLATE utf8mb4_spanish_ci;

USE anidi;
#tabla principal
CREATE TABLE Aulas  
(
numAula TINYINT NOT NULL UNIQUE,
capacidad TINYINT NOT NULL,
docente VARCHAR(45) NOT NULL,
hardware BOOLEAN NOT NULL,
PRIMARY KEY PK_Aulas(numAula)
)ENGINE InnoDB;

 /*DROP TABLE IF EXISTS Alumnos*/
#tabla relacionada
CREATE TABLE Alumnos 
(
nombre VARCHAR (45) NOT NULL UNIQUE,
edad TINYINT NOT NULL,
sexo boolean NOT NULL,
fechanac DATE NOT NULL,
numAula TINYINT NOT NULL,
PRIMARY KEY PK_Alumnos (nombre),
FOREIGN KEY FK_Alumnos_numAula (numAula)
REFERENCES Aulas (numAula)
)ENGINE InnoDB;

#Hacemos el insert

INSERT INTO Aulas
VALUES
(23, 15, "Ivan Rodriguez", 1);
INSERT INTO Alumnos
VALUES
("Blanca Soler", 43, 1, "1980-08-23", 23);











