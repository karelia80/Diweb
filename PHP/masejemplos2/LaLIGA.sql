/*LaLiga.sql*/
/* Creacion de BBDD*/ 
 /*1 borrar la BBDD*/
 DROP DATABASE IF EXISTS LaLiga;
 /*2 crear la BBDD*/
 CREATE DATABASE IF NOT EXISTS LaLiga
 CHARACTER SET utf8mb4 /*el conjunto de caracteres*/
 COLLATE utf8mb4_spanish_ci;    /*el subconjunto de caracteres español*/

 USE LaLiga;
 /*3 crear table Clubes*/
 
 
 /*DROP TABLE IF EXISTS Clubes*/
 
 /*clubes*/
 CREATE TABLE IF NOT EXISTS Clubes
 (
 cif CHAR(9) UNIQUE NOT NULL,
 nombre VARCHAR(45) NOT NULL UNIQUE,
 fundacion YEAR NOT NULL,
 num_socio MEDIUMINT NOT NULL,
 estadio VARCHAR(45) NOT NULL,
 PRIMARY KEY PK_Clubes (cif),
 INDEX IDX_clubes_nombre (nombre)
 )ENGINE InnoDB
 COMMENT "Tabla_Principal_Clubes";
 
 /*DROP TABLE IF EXISTS Posiciones*/
 CREATE TABLE IF NOT EXISTS Posiciones
 (
 idPosiciones TINYINT NOT NULL AUTO_INCREMENT,
 posiciones VARCHAR(45) NOT NULL,
 PRIMARY KEY PK_Posiciones (idPosiciones)
 )ENGINE InnoDB
 COMMENT "Tabla Princial Posiciones";
 

 /*DROP TABLE IF EXISTS Jugadores*/
 CREATE TABLE IF NOT EXISTS Jugadores
 (
 nif_nie CHAR(9) UNIQUE NOT NULL,
 nombre VARCHAR(45) NOT NULL,
 edad TINYINT NOT NULL,
 cedido BOOLEAN NOT NULL DEFAULT 0,
 ficha DECIMAL (8,2),
 Clubes_cif CHAR(9) NOT NULL,
 Posiciones_idPosiciones TINYINT NOT NULL,
 PRIMARY KEY PK_Jugadores (nif_nie),
 INDEX IDX_Jugadores_nombre (nombre),
 FOREIGN KEY FK_Jugadores_idPosiciones (Posiciones_idPosiciones)
REFERENCES Posiciones (idPosiciones),
FOREIGN KEY FK_Jugadores_cif (Clubes_cif)
REFERENCES Clubes (cif)
ON UPDATE CASCADE 
 )ENGINE InnoDB
 COMMENT "Tabla Secundaria Jugadores";

 /*DROP TABLE IF EXISTS Entrenadores*/
 CREATE TABLE IF NOT EXISTS Entrenadores
 (
 nif_nie CHAR(9) UNIQUE NOT NULL,
 nombre VARCHAR(45) NOT NULL,
 edad TINYINT NOT NULL,
 ficha DECIMAL (8,2),
 destituido BOOLEAN NOT NULL DEFAULT 0, /*default es TRUE 1 o FALSE 0*/
 Clubes_cif CHAR(9) NOT NULL,
 PRIMARY KEY PK_Entrenadores (nif_nie),
 INDEX IDX_Entrenadores_nombre (nombre),
 FOREIGN KEY FK_Entrenadores_cif (Clubes_cif)
REFERENCES Clubes (cif)
ON UPDATE CASCADE /*actualizacion en cascada solo en las tablas relacionadas*/
 )ENGINE InnoDB
 COMMENT "Tabla Secundaria Entrenadores";
 
/*DROP TABLE IF EXISTS Partidos;*/
CREATE TABLE IF NOT EXISTS Partidos
(
Clubes_cif_local CHAR(9) NOT NULL,
Clubes_cif_visitante CHAR(9) NOT NULL,
fecha DATE UNIQUE NOT NULL,
arbitro VARCHAR(45) NOT NULL,
goles_locales TINYINT NOT NULL,
goles_visitantes TINYINT NOT NULL,
PRIMARY KEY PK_Partidos (Clubes_cif_local, Clubes_cif_visitante),
FOREIGN KEY FK_Partidos_cif_local (Clubes_cif_local)
REFERENCES Clubes (cif),
FOREIGN KEY FK_Partidos_cif_visitante (Clubes_cif_visitante)
REFERENCES Clubes (cif)
)ENGINE InnoDB
 COMMENT "tabla secundaria Partidos";

 
 /* Insertar datos (INSERT)*/
 /*Clubles*/
 INSERT INTO Clubes /*aqui se pone los campos entre () pero si los pones todos pones solo el nombre de la tabla solo*/ 
 VALUES 
 ("1111111z", "Real betis", 1907, 61000, "Benito Villamarin"),
 ("ASEGUNDA2", "Sevilla Fc", 1905, 41000, "Ramon Sanchez Pizjuan"),
 ("ASEGUND03", "Real Madrid", 1903, 80000, "Santiago Bernabeu");
 /*los valores que son cadenas de caracteres o fechas se ponen entre comillas ""/ Si es un numero entero, decimales no se pone entre comillas*/
 
 /*posiciones*/
 INSERT INTO Posiciones (posiciones)
 VALUES
 ("Portero"), /*1*/
 ("Defensa"),
 ("Centrocampista"),
 ("Delantero");
 
 /*Jugadores*/
 INSERT INTO Jugadores 
 VALUES
 ("12345678a", "Borja Iglesias", 31, 0, 200000, "1111111z", 4),
 ("12345678b", "Jesus Navas", 37, 0, 200000, "ASEGUNDA2", 2);
 
 /*Entrenadores*/
 INSERT INTO Entrenadores (nif_nie, nombre, edad, ficha, clubes_cif)
 VALUES
 ("12345678c", "Torero Ficher", 50, 150000, "1111111z"),
 ("12345678d", "Anthon Brivers", 43, 100000, "ASEGUNDA2");
 
 /*Partidos*/
 INSERT INTO Partidos
 VALUES
 ("ASEGUNDA2", "1111111z", "2023-11-12", "Jesus Gil", 1, 1);

 /*CONSULTAR DATOS (SELECT)*/
 SELECT * FROM Clubes; /*Consulta General*/
 
 SELECT nombre, edad, ficha FROM Jugadores; /*consulta simple, por campos*/
 
 SELECT nombre, edad /*Consulta con FILTROS*/
 FROM Entrenadores
 WHERE edad > 30;
 
 SELECT * FROM Jugadores   /*Consulta con FILTROS MULTIPLES (AND)*/
 WHERE edad > 30
 AND ficha > 50000;
 
 SELECT niF_nie, nombre, edad /*Consulta con FILTROS MULTIPLES (OR)*/
 FROM Entrenadores
 WHERE edad > 30
 OR destituido = 1;
 
 /*Actualizar datos UPDATES*/
 
 UPDATE Entrenadores
 SET destituido = 1
 WHERE nombre = "Torero Ficher"; /*En esta sentencia WHERE es muy importante porque vas a cambiar un dato de un campo*/ 
 /*Update de campos multiples*/
 UPDATE Jugadores
 SET edad = 32,
 ficha = 200000
 WHERE nombre ="Borja Iglesias";
 
 /*Borrado DELETE*/
 
 /*Borrado Logico hay un cambio boleado que cambia de estado*/
 
UPDATE Clubes
SET Activo = 0
WHERE nombre = "Sevilla FC";

/*Borrado Físico, se borrado todo, no olvidar el WHERE porque si no borras TODO*/

DELETE FROM Jugadores
WHERE nombre = "Borja Iglesias";

/*JOINS (Consultas multitablas)*/

/*Te saca los elementos comunes de 2 tablas*/

SELECT nombre, edad, posicion
FROM Jugadores, Posiciones
WHERE posiciones_idPosicion = idPosicion;

SELECT nombre, edad, posicion
FROM Jugadores JOIN Posiciones
ON posiciones_idPosicion = idPosicion;

SELECT nombre, edad, posicion
FROM Jugadores INNER JOIN Posiciones
ON posiciones_idPosicion = idPosicion;



 
 
 
 
