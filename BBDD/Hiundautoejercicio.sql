DROP DATABASE IF EXISTS Hyundauto;

CREATE DATABASE Hyundauto
CHARACTER SET utf8mb4 /*el conjunto de caracteres*/
COLLATE utf8mb4_spanish_ci;
 
 USE Hyundauto;
 
 CREATE TABLE IF NOT EXISTS Clientes
 (
 nif CHAR(9) UNIQUE NOT NULL,
 nombre VARCHAR(45),
 correo VARCHAR(45),
 telefono INT NOT NULL,
 PRIMARY KEY PK_nif_cliente (nif),
 INDEX IDX_cliente_nif (nif)
 )ENGINE InnoDB
 COMMENT "Tabla primaria Clientes";

 CREATE TABLE IF NOT EXISTS Tipos
 (
 idTipo TINYINT auto_increment,
 tipo VARCHAR(45),
 PRIMARY KEY PK_idTipo (idTipo)
 )ENGINE InnoDB
 COMMENT "Tabla primaria Tipos";
 
 CREATE TABLE IF NOT EXISTS Modelos
 (
 idModelo INT UNIQUE NOT NULL auto_increment,
 modelo VARCHAR(45) NOT NULL,
 potencia TINYINT,
 autonomia MEDIUMINT,
 Tipos_idTipo TINYINT,
 PRIMARY KEY PK_modelo (idModelo),
 FOREIGN KEY FK_Modelo_Tipos_idTipo (Tipos_idTipo)
 REFERENCES Tipos(idTipo)
 ON UPDATE CASCADE,
 INDEX IDX_modelos_idModelo (idModelo)
 )ENGINE InnoDB
 COMMENT "Tabla secundaria Modelos";
 
 CREATE TABLE IF NOT EXISTS Vendedores
 (
 nif CHAR(9) UNIQUE NOT NULL,
 nombre VARCHAR (45) NOT NULL,
 correo VARCHAR(45) NOT NULL,
 PRIMARY KEY PK_nif_vendedores (nif)
 )ENGINE InnoDB
 COMMENT "Tabla secundaria Vendedores";
 
 CREATE TABLE IF NOT EXISTS Ventas
 (
 matricula CHAR(7) UNIQUE NOT NULL,
 fecha DATE UNIQUE NOT NULL,
 precio DECIMAL (7,2),
 financiado BOOLEAN DEFAULT 1,
 Modelos_idModelo INT NOT NULL,
 Clientes_nif CHAR(9) NOT NULL,
 Vendedores_nif CHAR(9) NOT NULL,
 PRIMARY KEY PK_matricula_fecha (matricula, fecha),
 
 FOREIGN KEY FK_Ventas_Modelos_idModelo (Modelos_idModelo)
 REFERENCES Modelos (idModelo),
 
 FOREIGN KEY FK_Ventas_Clientes_nif (Clientes_nif)
 REFERENCES Clientes (nif),

 FOREIGN KEY FK_Ventas_Vendedores_nif (Vendedores_nif)
 REFERENCES Vendedores (nif)
ON UPDATE CASCADE
 )ENGINE InnoDB
 COMMENT "tabla secundaria Ventas";
 
 /*insertar datos*/
 
 INSERT INTO Clientes 
 VALUES
 ("12345678a", "Pijus Magnificus", "aaa@hotmail.com", 654654654),
 ("12345678b", "Incontinentia Summa", "aaab@hotmail.com", 654963963),
 ("12345678c", "Mr Papadopoulos", "aaabc@hotmail.com", 654753357),
 ("12345678d", "Mandy Cohen", "aaabcd@hotmail.com", 654123321);
 
 INSERT INTO Tipos (tipo)
 VALUES
 ("electrico"),
 ("hibrido"),
 ("gasolina"),
 ("diesel");
 
 INSERT INTO Modelos (modelo, potencia, autonomia, Tipos_idTipo)
 VALUES
 ("i30", 110, 100, 3),
 ("Santa Fe", 120, 100, 3),
 ("TUCSON", 127, 62, 2),
 ("KONA Electrico", 120, 484, 1);
 
 INSERT INTO Vendedores
 VALUES
 ("12365498a", "Terco Justo", "bbb@gmail.com"),
 ("12365498b", "Ausente Candido", "bbba@gmail.com"),
 ("12365498c", "Domingo Seduerme", "bbbc@gmail.com"),
 ("12365498d", "Loven Dotodo", "bbbd@gmail.com");
 
 INSERT INTO Ventas (matricula, fecha, precio, Modelos_idModelo, Clientes_nif, Vendedores_nif)
 VALUES 
 ("4444SQL", '2024-01-27', 22420, 1, "12345678c", "12365498b"),
 ("9575PHP", '2023-05-05', 47820, 2, "12345678d", "12365498c"),
 ("8426CSS", '2023-12-15', 123695, 3, "12345678a", "12365498d"),
 ("1578GIT", '2023-08-20', 65150, 1, "12345678b", "12365498d");
 
 SELECT  Modelos_idModelo, precio, Clientes_nif, Vendedores_nif 
 FROM Ventas
 ORDER BY precio;
 
 SELECT * FROM Modelos;
 
SELECT modelo, potencia, tipo
FROM Modelos, Tipos
WHERE Modelos.Tipos_idTipo = Tipos.idTipo; 



 
 
 
 
 
 
  
 
 
 


 
 
 