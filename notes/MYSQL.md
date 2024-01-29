---
title: MYSQL
created: '2024-01-29T10:01:06.163Z'
modified: '2024-01-29T12:53:49.247Z'
---

# MYSQL
***
Es un sistema de gestion de bases de datos relacional, multihilo y multiusuario.
- Relacional:las tablas se relacionan entre si
- Multihilo: permite realizar varias acciones a la vez
- Multiusuario: puede tener varios usuarios diferentes en el sistema al mismo tiempo.

Las bases de datos tienen estas caracteristicas:
1. Una bbdd relacional se compone de varias tablas o relaciones.
2. No pueden existir dos tablas con el mismo nombre ni registro.
3. Cada tabla es a su vez un conjunto de registros (filas y columnas).
4. La relacion entre una tabla padre y un hijo se lleva a cabo por medio de las claves primarias y foraneas.
5. Las claves primarias son la clave principal de un registro dentro de una tabla y éstas deben cumplir con la integridad de datos.
6. Las claves foraneas se colocan en la tabla hija con tienen el mismo valor que la clave primaria del registro padre; por medio de éstasse hacen las relaciones.
***
### Consultas en BBSS:

1. La sentencia SELECT (usos básicos):
- FROM: Especifica las tablas de donde se extraen datos.
  - la froma basica : FROM "nombretabla"
  - de manera cualificada, indicando la BBDD: 
  FROM "nombrebbdd.nombretabla";
- DISTINCT: Elimina filas duplicadas. 
SELECT DISTINCT "campo" FROM "nombretabla" ;

- WHERE: Muestra solo los campos que cumplan una condicion particular como numericos (4), literales (New York), fererencias a colunmas, constantes incorporadas (TRUE, FALSE; NULL), funciones, etc.
SELECT campo, campo
FROM tabla
WHERE condicion='literal';

- ORDER BY: Ordena las tabla en funcion ASC/DESC.
SELECT campo, campo
FROM tabla
WHERE condicion='literal'
ORDER BY campo ASC/DESC;

- LIMIT: Sirve para limitar el numero de filas que devuelve el resultado de la consulta.
SELECT columnas 
FROM tabla
LIMIT cantidad;

2. Funciones de Agregacion.

Son funciones que realizan un cálculo sobre un conjunto de valores y devuelven un único resultado.
  - MAX(): devuelve el valor maximo.
  - MIN(): devuelve el valor minimo.
  - SUM(): devuelve la suma.
  - COUNT(): cuenta filas, valores No Nulos o valores distintos
  - AVG(): media aritmetica.
  - STD(): desviacion estandar
  - GROUP_CONCAT(): concatenar cadenas de caracteres.
<u>ojo, no puede haber espacio entre la funcion y ()*</u>

Tambien se puede agrupar por GROUP BY. Esta clausala se aplica despues del WHERE pero antes que ORDER BY, util si quieres resumir o realizar calculos de grupos especificos.
SELECT campo, campo
FROM tabla
WHERE condicion='literal'
GROUP BY campo
ORDER BY campo ASC/DESC;

Tambien podemos utilizar el GROUP_CONCAT que genera un resultado concatenado para cada grupo de cadenas
SELECT campo, GROUP CONCAT(campo)
FROM tabla
WHERE condicion
GROUP BY campo;

Otra clausula es WITH ROLLUP, es un sumatorio, donde la ordenacion (ORDER BY) va al final.
SELEC SUM(campo),campo
FROM tabla
WHERE condicion
GROUP UP campo
WITH ROLLUP;

Y para terminar esta la clausula HAVING, se aplica cuando hay agrupaciones y es un filtro (sustituye al WHERE) y la ordenacion (ORDER BY) va al final. Se usa para las funciones agregadas ya que WHERE no lo permite.
SELECT categoria, nombre_producto, SUM(cantidad_stock) as total_stock
FROM productos
WHERE categoria = 'Electrónicos'
GROUP BY categoria, nombre_producto
HAVING total_stock > 50;

Los Operadores que permiten Mysql son:
+ Operadores aritmeticos:
  + suma +
  + resta -
  + multiplicacion *
  + division /
  + division entera DIV "el cociente entero"
  + Resto de la division % (el cociente entero por el divisor)
+ Operadores Comparacion:
  + igual a x=Y
  + igual a incluyendo nulos x <=> y
  + x<y, menor que
  + <= menor igual
  + mayor igual>= 
  + <> distinto
  + != distinto

3. Uso de UNION
La sentencion UNION permite la concatenacion de los resultados obtenidos de dos o mas consultas con SELECT. Deben ser iguales.

SELECT campo1, campo2 FROM tabla_A
UNION
SELECT campo1, campo2 FROM tabla_B;
***
### JOINS

`Un Join es una operacion entre dos tablas.` Podemos prescindir el uso de la condicion JOIN, lo que se denomina producto cartesiano. Lo que sustituimos el JOIN ON por el WHERE.

SELECT * FROM empleados, departamentos
WHERE empleados.dept_id = departamentos.dept_id;

|Empleados        |        | Proyectos      |
|-----------------|--------|--------------  |
| empleado_id     |        | proyecto_id    |
| nombre_empleado |        | nombre_proyecto|
| departamento_id |  -->   | departamento_id|


SELECT Empleados.nombre_empleado, Empleados.departamento_id, Proyectos.nombre_proyecto

FROM Empleados, Proyectos

WHERE Empleados.departamento_id = Proyectos.departamento_id AND Empleados.empleado_id = 1;





























