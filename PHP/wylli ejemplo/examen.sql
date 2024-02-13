/* 1. Borrar la BBDD*/
drop database if exists Trabajadores;

/* 2. crear la base de datos */
create database if not exists Trabajadores
character set utf8mb4
collate utf8mb4_spanish_ci;

use Trabajadores;

/* Tabla Trabajadores */

DROP TABLE IF EXISTS Trabajadores;

CREATE TABLE IF NOT EXISTS Trabajadores
(
	id TINYINT UNIQUE NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    departamento VARCHAR(30) NOT NULL,
    edad TINYINT NOT NULL,
    alta DATE,
    activo BOOLEAN,
    PRIMARY KEY PK_Trabajadores (id)    
) ENGINE InnoDB
COMMENT "Tabla Trabajadores";

INSERT INTO Trabajadores
VALUES
(1,"Pepe Perez","RRHH",32,"2010-01-01",1),
(2,"Fulanito Detal","Dirección",43,"2008-03-02",1);

