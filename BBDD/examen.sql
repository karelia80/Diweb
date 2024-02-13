DROP DATABASE IF EXISTS Trabajadores;
CREATE DATABASE IF NOT EXISTS Trabajadores
 CHARACTER SET utf8mb4 
 COLLATE utf8mb4_spanish_ci;   
 USE Trabajadores;
 /*DROP TABLE IF EXISTS Trabajadores*/
 CREATE TABLE IF NOT EXISTS Trabajadores
(
id TINYINT UNIQUE NOT NULL,
nombre VARCHAR(50) NOT NULL,
departamento VARCHAR(30)NOT NULL,
edad TINYINT NOT NULL,
alta DATE,
activo BOOLEAN,
PRIMARY KEY PK_trabajadores_id (id),
INDEX IDX_trabajadores_nombre (nombre)
)ENGINE InnoDB;

INSERT INTO Trabajadores
VALUES 
(1,"Betty White", "Recursos humanos", 50, "2023-11-12", 1),
(2,"Bruno Mars", "Logística", 46, "2020-11-10", 1);

SELECT * FROM Trabajadores;