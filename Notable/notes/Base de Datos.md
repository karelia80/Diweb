---
title: Base de Datos
created: '2024-01-08T15:20:00.111Z'
modified: '2024-01-08T19:47:39.188Z'
---

# Base de Datos

msql -u root -p (contraseña root)
=========================================================================


cd ~ (carpeta raiz)
cd Vídeos/ (o carpeta donde este el archivo)
sl (para ver el listado de archivos)
msql -u rppt -p 
SOURCE world.sql

Ejemplos de base de datos:

SHOW DATABASEs; /*Entrar en la BBDD*/
USE world;
/* 1. consulta toda la tabla. SELECT * FROM city, saca toda la tabla de city*/
/*2. Consulta simple de campos*/
SELECT 	Name, Population
FROM city;

/*3. uso de DISTINCT, sirve para quitar los campos repetidos*/
SELECT DISTINCT Continent
FROM country;

/*4a. uso del WHERE (filtro de filas)*/

SELECT * FROM countrylanguage
WHERE CountryCode = "ESP"; 

/*4b. filtros con operadores*/
SELECT * FROM city
WHERE CountryCode ="ESP"
AND Population > 500000;

/*5. uso ORDER BY (ORDENAR POR ASC/DESC)*/
SELECT * FROM city
WHERE CountryCode ="ESP"
AND Population > 500000
ORDER BY Name;

/*6. uso de LIMIT (limita la salida)*/
SELECT * FROM city
ORDER BY Population DESC
LIMIT 5;

/*7. uso de IN*/
SELECT Name, District
FROM city
WHERE Name IN ("Madrid", "New York", "Roma");

/*8. funciones de agregacion COUNT pagina 30 (AS) alias para cambiar el titulo de campo en la busqueda*/
SELECT COUNT(name) AS "NumCuidadesGrandes"
FROM city
WHERE CountryCode ="ESP"
AND Population > 500000;



