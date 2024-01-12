/* Script create base de datos*/

CREATE DATABASE IF NOT EXISTS laliga
CHARACTER SET utf8mb4
COLLATE utf8mb4_spanish_ci;

USE laliga;

CREATE TABLE IF NOT EXISTS Clubes
(
cif CHAR(9) unique not null,
nombre VARCHAR(45) unique not null,
fundacion YEAR Not null,
num_socios MEDIUMINT,
estacio VARCHAR(45) not null,
PRIMARY KEY PK_Clubes (cif),
INDEX IDX_Clubes_nombre (nombre)
)ENGINE InnoDB
COMMENT "Tabla Principal Clubes";

CREATE TABLE IF NOT EXISTS Posiciones
(
idposicion TINYINT NOT NULL AUTO_INCREMENT,
posicion VARCHAR(45) NOT NULL,
PRIMARY KEY PK_Posiciones (idposcion)
)ENGINE INNODB
COMMENT "Tabla Principal Posiciones";


CREATE TABLE IF NOT EXISTS Jugadores
(
nif_nie CHAR(9) unique not null,
nombre VARCHAR(45) unique not null,
edad TINYINT NOT Null,
cedido BOOLEAN NULL DEFAULT 0,
ficha DECIMAL (8,2),
cif CHAR(9)not null,
PRIMARY KEY PK_Jugadores (nif_nie),
INDEX IDX_Jugadores_nombre (nombre),
FOREIGN KEY FK_Jugadores_idposiciones (idposiciones)
  REFERENCES Posiones (idposiciones),
Foreign key FK_Jugadores_cif (cif)
	references clubes (cif)
    ON UPDATE CASCADE
)ENGINE INNDB
COMMENT "Tabla Secundaria Jugadores";

CREATE TABLE IF NOT EXISTS Entrenadores
(
nif_nie CHAR(9) unique not null,
nombre VARCHAR(45) unique not null,
edad TINYINT NOT Null,
destituido BOOLEAN NULL DEFAULT 0,
ficha DECIMAL (8,2),
cif CHAR(9)not null,
PRIMARY KEY PK_Entrenadores (nif_nie),
INDEX IDX_Entrenadores_nombre (nombre),
Foreign key FK_Entrenadores_cif (cif)
	references clubes (cif)
    ON UPDATE CASCADE
)ENGINE InnoDB
COMMENT "Tabla Secundaria Entrenadores";

CREATE TABLE IF NOT EXISTS Partidos
(
clubes_cif_local CHAR(9)  not null,
clubes_cif_Visitante CHAR(9)  not null,
fecha DATE NOT NULL,
arbitro VARCHAR(45)NOT NULL,
goles_local TINYINT  NOT NULL,
goles_visitante TINYINT NOT NULL,
Primary key PK_Partidos (clubes_cif_local, clubes_cif_visitante),
FOREIGN KEY FK_Partidos_cif_local (Clubes_cif_local)
	REFERENCES Clubes (cif)
    ON UPDATE CASCADE,
FOREIGN KEY FK_Partidos_cif_visitante (Clubes_cif_local)
	REFERENCES Clubes (cif)
    ON UPDATE CASCADE
)ENGINE InnoDB
Comment "Tabla Secundaria Partidos";



