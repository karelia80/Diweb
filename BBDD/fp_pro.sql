DROP DATABASE IF EXISTS fp_pro;

CREATE DATABASE IF NOT EXISTS fp_pro
 CHARACTER SET utf8mb4 /*el conjunto de caracteres*/
 COLLATE utf8mb4_spanish_ci;
 
  USE fp_pro;
  
  CREATE TABLE IF NOT EXISTS docentes
  (
  nif CHAR (9) UNIQUE NOT NULL,
  nombre VARCHAR (50) NOT NULL,
  edad TINYINT,
  PRIMARY KEY PK_nif_docentes (nif)
  )ENGINE InnoDB;
  
 CREATE TABLE IF NOT EXISTS alumnos
 (
 nif CHAR(9) UNIQUE NOT NULL,
 nombre VARCHAR(50) NOT NULL,
 fechanac DATE,
 pagado BOOLEAN,
 importe DECIMAL (5,2),
 docentes_nif CHAR (9) NOT NULL,
 PRIMARY KEY PK_nif_alumnos (nif),
 FOREIGN KEY FK_nif_docentes (docentes_nif)
 REFERENCES docentes (nif)
 )ENGINE InnoDB;
 
 INSERT INTO docentes
 VALUES
 ("12345678B", "Ivan Rodriguez", 47);
 
 INSERT INTO alumnos
 VALUES
 ("22334455G", "Juan Jose Mata", "2000-02-10", 1, 325.55, "12345678B"),
("44556677G", "Javier Nievas", "2002-05-10", 0, 305.45, "12345678B"),
("77889911A", "Francisco Jose Rebollo", "1998-06-15", 1, 225.55, "12345678B");

