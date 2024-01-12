SHOW DATABASEs; /*Entrar en la BBDD*/
USE world;
SHOW TABLES;
/* 1. consulta toda la tabla. SELECT * FROM city, saca toda la tabla de city*/
/*2. Consulta simple de campos*/
SELECT 	Name, Population
FROM city;

/*3. uso de DISTINCT, sirve para quitar los campos repetidos*/
SELECT DISTINCT Continent
FROM country;

/*4a. uso del WHERE (filtro de filas) SOLO PARA TABLAS*/

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

SELECT * FROM city
WHERE CountryCode ="ESP"
AND Population > 500000
ORDER BY District ASC, Population DESC; /* orden por distrito y por mayor poblacion*/


/*6. uso de LIMIT (limita la salida)*/
SELECT * FROM city
ORDER BY Population DESC
LIMIT 5;

/*7. uso de IN (es como el OR)*/
SELECT Name, District
FROM city
WHERE Name IN ("Madrid", "New York", "Roma");

/*8. funciones de agregacion COUNT pagina 30 (AS) alias para cambiar el titulo de campo en la busqueda*/
SELECT COUNT(name) AS "NumCuidadesGrandes"
FROM city
WHERE CountryCode ="ESP"
AND Population > 500000;

/* Inciso/ Puertas Lógicas*/ 
# AND - Se tiene que cumplir que las dos entradas sean TRUE
SELECT COUNT(name) AS "NumCuidadesGrandes"
FROM city
WHERE CountryCode ="ESP" # entrada 1 = TRUE
AND Population > 500000; # entrada 2 = TRUE

# OR -  Basta con que se cumpla 1 de las entradas correcta y te lo saca todo.
SELECT COUNT(name) AS "NumCuidadesGrandes"
FROM city
WHERE CountryCode ="ESP" # entrada 1
OR Population > 500000;  # entrada 2

# NOT - Se tiene que cumplir 1 entrada falsa

SELECT COUNT(name) AS "NumCuidadesGrandes"
FROM city					#puerta Not
WHERE CountryCode       
NOT In ("ESP");   			#entrada False

#XORT - Es un OR exclusivo, es cuando una de las entradas es diferente es TRUE

/*9. GROUP By para agrupar los registros de una tablas agrupar por un campo*/
SELECT CountryCode, COUNT(Name), SUM(Population)
FROM city
GROUP BY CountryCode;

SELECT Language, COUNT(CountryCode)
FROM countrylanguage
GROUP BY Language;

/*10. GROUP_CONCAT encadena en el grupo siempre va con un GROUP BY */
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

/*12. La Clausale HAVING, va asociado a una agrupacion, filtrar de una funcion agregada, SUSTITUYE AL WHERE*/ 
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

SELECT Name AS Cuidad, city.countrycode AS Codpais, Language AS Lengua
FROM city, countrylanguage
WHERE city.countrycode = countrylanguage.CountryCode
AND Language = "Spanish"
AND Name = "Toledo";






















