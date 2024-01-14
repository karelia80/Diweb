/*LaLiga.sql*/
/* Creacion de BBDD*/ 
 /*1 borrar la BBDD*/
 DROP DATABASE IF EXISTS LaLiga;
 /*2 crear la BBDD*/
 CREATE DATABASE IF NOT EXISTS LaLiga
 CHARACTER SET utf8mb4
 COLLATE utf8mb4_spanish_ci;
 
 USE LaLiga;
 /*3 crear table Clubes*/
 CREATE TABLE IF NOT EXISTS Clubes
 (
 cif CHAR(9) UNIQUE NOT NULL,
 nombre VARCHAR(45) NOT NULL,
 fundacion YEAR NOT NULL,
 num_socio MEDIUMINT,
 estadio VARCHAR(45) NOT NULL,
 activo BOOLEAN DEFAULT 1,  /*borrado logico, los datos se mantienen y ponemos un campo boleano que cambia de true a false*/
 PRIMARY KEY PK_Clubes (cif),
 INDEX IDX_clubes_nombre (nombre)
 )ENGINE InnoDB
 COMMENT "Tabla_Principal_Clubes";
 
 CREATE TABLE IF NOT EXISTS Posiciones
 (
 idPosciones TINYINT NOT NULL AUTO_INCREMENT,
 posiciones VARCHAR(45) NOT NULL,
 PRIMARY KEY PK_Pociones (idPosiciones)
 )ENGINE InnoDB
 COMMENT "Tabla Princial Posiciones";
 
 CREATE TABLE IF NOT EXISTS Jugadores
 (
 nif_nie CHAR(9) UNIQUE NOT NULL,
 nombre VARCHAR(45) NOT NULL,
 edad TINYINT NOT NULL,
 ficha DECIMAL (8,2),
 cedido BOOLEAN NOT NULL DEFAULT 0,
 Clubes_cif CHAR(9) NOT NULL,
 PRIMARY KEY PK_Jugadores (nif_nie),
 INDEX IDX_Jugadores_nombre (nombre),
 FOREIGN KEY FK_Jugadores_cif (idPosiciones_cif)
	REFERENCES Posiciones (cif),
 FOREIGN KEY FK_Jugadores_cif (Clubes_cif)
	REFERENCES Clubes (cif)
    ON UPDATE CASCADE 
 )ENGINE InnoDB
 COMMENT "Tabla Secundaria Jugadores"
 
 CREATE TABLE IF NOT EXISTS Entrenadores
 (
 nif_nie CHAR(9) UNIQUE NOT NULL,
 nombre VARCHAR(45) NOT NULL,
 edad TINYINT NOT NULL,
 ficha DECIMAL (8,2),
 destituido BOOLEAN NOT NULL DEFAULT 0,
 Clubes_cif CHAR(9) NOT NULL,
 PRIMARY KEY PK_Entrenadores (nif_nie),
 INDEX IDX_Entrenadores_nombre (nombre),
 
 FOREIGN KEY FK_Jugadores_cif (Clubes_cif)
	REFERENCES Clubes (cif)
    ON UPDATE CASCADE 
 )ENGINE InnoDB
 COMMENT "Tabla Secundaria Entrenadores"
 
 
 
 
