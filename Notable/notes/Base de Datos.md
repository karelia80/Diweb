---
title: Base de Datos
created: '2024-01-08T15:20:00.111Z'
modified: '2024-01-12T10:52:56.508Z'
---

# Base de Datos

### msql -u root -p (contraseña root)
=========================================================================


cd ~ (carpeta raiz)
cd Vídeos/ (o carpeta donde este el archivo)
sl (para ver el listado de archivos)
msql -u rppt -p 
SOURCE world.sql

## Puertas logicas

*mirar los dibujos en wikipedia*

/* Inciso/ Puertas Lógicas*/ 
1 AND - Se tiene que cumplir que las dos entradas sean TRUE
SELECT COUNT(name) AS "NumCuidadesGrandes"
FROM city
WHERE CountryCode ="ESP" # entrada 1 = TRUE
AND Population > 500000; # entrada 2 = TRUE

2 OR -  Basta con que se cumpla 1 de las entradas correcta y te lo saca todo.
SELECT COUNT(name) AS "NumCuidadesGrandes"
FROM city
WHERE CountryCode ="ESP" # entrada 1
OR Population > 500000;  # entrada 2

3 NOT - Se tiene que cumplir 1 entrada falsa

SELECT COUNT(name) AS "NumCuidadesGrandes"
FROM city					#puerta Not
WHERE CountryCode       
NOT In ("ESP")     			#entrada False

4 XORT - Es un OR exclusivo, es cuando una de las entradas es diferente es TRUE

## EJERCICIO
1
SELECT DISTINCT Region
FROM country;
2
SELECT Name 
FROM country
limit 3;
3
SELECT Name FROM country
WHERE Region = "Baltic Countries";
4
SELECT name, LifeExpectancy
FROM country
WHERE LifeExpectancy > 79;
5
SELECT Population, Name
FROM city
ORDER BY Population DESC
Limit 5;
6
SELECT CountryCode, Name, Population
FROM city
WHERE Population > 7000000;

7
SELECT GovernmentForm, COUNT(*) as cantidad_paises
FROM country
GROUP BY GovernmentForm
ORDER BY cantidad_paises DESC
LIMIT 5;
8
SELECT Continent, GROUP_CONCAT(Name) AS paises, AVG(SurfaceArea) AS superficie_promedio
FROM country
GROUP BY Continent
ORDER BY Continent;
#9 
SELECT Continent, AVG(Population*LifeExpectancy) AS mortalidad
FROM country 
GROUP BY Continent;
#10
SELECT city.Population, city.Name
FROM country, city
WHERE country.Code = city.CountryCode
AND SurfaceArea = 10000
LIMIT 5;
#11 =1k
#12
SELECT Language, COUNT(DISTINCT CountryCode) AS Cantidad_Paises
FROM CountryLanguage
GROUP BY Language
HAVING Cantidad_Paises > 10;




## Ejemplos de base de datos:

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

/*9. GROUP By para agrupar los registros de una tabale agrupar por un campo*/
SELECT CountryCode, COUNT(Name), SUM(Population)
FROM city
GROUP BY CountryCode;

SELECT Language, COUNT(CountryCode)
FROM countrylanguage
GROUP BY Language;

/*10. GROUP_CONCAT encadena en el grupo */
SELECT GovernmentForm,
GROUP_CONCAT(Name) As Paises
FROM country
WHERE Continent = "Europe"
GROUP BY GovernmentForm; # Se puede añadir LIMIT 5 para solo sacar las 5 primeras

/*11. ROOLUP (sumatorio) */ 
SELECT Continent, COUNT(Name), SUM(GNP) AS "PIB"
FROM country
GROUP BY Continent
WITH ROLLUP
ORDER BY PIB DESC;

/*12. La Clausale HAVING, va asociado a una agrupacion, filtrar de una funcion agregada */ 
SELECT Continent, COUNT(Name), SUM(GNP) AS SumaPIB
FROM country
GROUP BY Continent
HAVING SumaPIB > 9000000;

/*13. UNION (junta varias consultas en una)*/
select Name, Population
from city
where CountryCode = "ESP"
UNION
select Name, Population
from city
where CountryCode = "FRA";
/*Se puede hacer lo mismo con OR 
select Name, Population
from city
where CountryCode = "ESP"
or CountryCode = "FRA"  y tarda menos la busqueda */ 

/*14. JOINS*/
SELECT country.Name, LocalName, city.Name, city.Population
FROM country, city
WHERE country.Code = city.CountryCode
AND CountryCode = "ESP"
AND country.Capital = city.ID;







