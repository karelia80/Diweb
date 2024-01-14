USE world;
SHOW tables;
SHOW DATABASES;

#1
SELECT DISTINCT Region
FROM country;
#2
SELECT Name
FROM country
limit 3;
#3
SELECT Name FROM country
WHERE Region = "Baltic Countries";
#4
SELECT name, LifeExpectancy
FROM country
WHERE LifeExpectancy > 79;
#5
SELECT Population, Name
FROM city
ORDER BY Population DESC
Limit 5;
#6
SELECT CountryCode, Name, Population
FROM city
WHERE Population > 7000000;
#7
SELECT GovernmentForm, COUNT(*) as cantidad_paises
FROM country
GROUP BY GovernmentForm
ORDER BY cantidad_paises DESC
LIMIT 5;
#8
SELECT Continent, GROUP_CONCAT(Name) AS paises, AVG(SurfaceArea) AS superficie_promedio
FROM country
GROUP BY Continent
ORDER BY Continent;
#9 
SELECT Continent, AVG(Population*LifeExpectancy) AS mortalidad
FROM country 
GROUP BY Continent;
#1367
SELECT city.Population, city.Name
FROM country, city
WHERE country.Code = city.CountryCode
AND SurfaceArea = 10000
LIMIT 5;
#11 =1367
SELECT  COUNT(DISTINCT District) 
FROM city;
#12 
SELECT Language, COUNT(DISTINCT CountryCode) AS Cantidad_Paises
FROM countrylanguage
GROUP BY Language
HAVING Cantidad_Paises > 10;


