---
title: Apuntes-MySQL
tags: [Import-0f97]
created: '2024-01-15T19:21:55.941Z'
modified: '2024-01-15T19:22:39.751Z'
---

---
title: Apuntes-MySQL
created: '2024-01-11T09:16:01.842Z'
modified: '2024-01-12T18:16:38.513Z'
---

# Apuntes-MySQL

## [Tabla de contenidos](#tabla-de-contenidos)


## [Comandos](#comandos)
  - SELECT -> Para consultas
  - INSERT -> Para insertar registros
  - UPDATE -> Para actualizar un registro
  - DELETE -> Para eliminar un registro
  - SOURCE -> Para implementar una base de datos
  - FROM -> De dónde se extraerán los datos
  - GROUP BY -> Agrupa filas
  - WITH ROLLUP -> Suma los valores de todas las consultas

Filtros:
  - DISTINCT -> Para que los datos no se repitan en la consulta
  - WHERE -> Filtra las consultas
    - IN -> Indica varios valores por los que se tienen que filtrar
  - ORDER BY -> Ordena la consulta en base a lo que pidas
  - LIMIT -> Limita el número de consultas
  - HAVING -> Te quita las filas en base a lo que le pidas

Funciones de agregación:
  - MAX() → Devuelve el valor máximo
  - MIN() → Devuelve el valor mínimo
  - SUM() → Devuelve el sumatorio
  - COUNT() → Cuenta Filas, Valores No Nulos o valores distintos.
  - AVG() → Media Aritmética
  - STD () → Desviación Estándar
  - GROUP_CONCAT() → Concatenar cadenas de caracteres


## [BBDD](#bbdd)
Normas:
No usar caracteres especiales en las bases de datos.
Es de buenas prácticas emppezar con mayúsculas el nombre de las entidades y todo en minúsculas para los campos.

  - Dominios -> Definen el tipo de valor que tndrá el campo en cuestión.
  - Clave única -> Define a un campo como único, es decir, en la tabla donde se encuentra el campo los valores que tenga dentro el campo no se repetirán.
  - Clave primaria -> Es la clave única principal
  - Clave foránea -> Es una referencia a una clave en otra tabla.
  - 

## [Modelo](#modelo)
Las entidades deben emepezar con mayúsculas.
Los campos de las entidades deben estar en minúsculas.

Tipos de relaciones:
  - 1:1 -> Relación 1 a 1
  - 1:n -> Relación 1 a muchos
  - n:m -> Relación muchos a muchos

  - Línea descontinua -> La relación se hace con un campo
  - Línea continua -> La relación se hace con otra clave

Tipos de campos:
  - PK -> Primary Key, Clave principal
  - NN -> Not Null, Que no esté vacío
  - UQ -> Unique, Valor único que no se puede repetir
  - BIN -> Binario, 
  - UN -> Unsigned, Se dobla el valor al positivo
  - ZF -> Zero Fill, Se quita el espacio sobrante
  - AI -> Auto Increment, Se incrementa automáticamente
  - G -> Generated, Es un campo generado
  - Default

Tipos de datos:
Numéricos ->  Enteros, flotantes, punto fijo y campo bit
  - TINYINT -> Bytes 1 -> -128 a 128
  - SMALLINT -> Bytes 2 -> -32768 a 32768
  - MEDIUMINT -> Bytes 3 -> -8388608 a 8388608
  - INT -> Bytes 4 -> -2147483648 a 2147483648
  - BIGINT -> Bytes 8 -> -9223372036854775808 a 9223372036854775808
  - FLOAT -> -3.402823466E+38 a -1.175494351E-38
  - DOUBLE -> -1.7976931348623157E+308 a -2.2250738585072014E-308
  - DECIMAL -> Un decimal fijo
    - P es la precisión o número máximo de digitos siginificativos (hasta 65)
    - S es la escala, digitos que siguen al punto decimal (hasta 30).
    - S nunca puede ser mayor a P.
    - El valor por defecto es NULL (si lo permite la columna) o 0 si es NOT NULL.
    - Si se omite P y/o el valor predeterminado es DECIMAL(10,0)

Carácter -> Cadenas de texto
  - CHAR -> La longitud de la cadena es fija
  - VARCHAR -> Tiene longitud variable y el almacenamiento varía según el tamaño real de la cadena
  - TEXT -> 

Binario -> Cadenas de datos binarios


Temporal -> Fechas y horas
