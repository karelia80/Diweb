---
tags: [Import-2682]
title: JCRM-manual-C-sharp
created: '2024-01-23T17:56:50.939Z'
modified: '2024-05-20T15:05:28.333Z'
---

---
tags: [Import-93df]
title: JCRM-manual-C-sharp
created: '2023-11-23T10:26:53.853Z'
modified: '2023-12-23T18:30:25.530Z'
---

# JCRM-manual-C-sharp

---

[//]: # "version: 1.0"
[//]: # "Autor: Juan Carlos Romero Martos"
[//]: # "Fecha: 2023-10-10"

## [Índice](#índice)

- [Introducción](#introducción)
- [Instalación](#instalación)
  - [MonoDevelop](#monodevelop)
- [C-Sharp](#c-sharp)
  - [Sintáxsis](#sintáxsis)
  - [Variables](#variables)
  - [Tipos de datos](#tipos-de-datos)
  - [Conversor de tipos](#conversor-de-tipos)
  - [Entradas del usuario](#entradas-del-usuario)
  - [Operadores](#operadores)
  - [Math](#math)
  - [String](#string)
  - [If Else](#if-else)
  - [Switch](#switch)
- [Bucles](#bucles)
  - [While](#while)
  - [For](#for)
  - [Foreach](#foreach)
- [Arrays](#arrays)
  - [Bucles entre arrays](#bucles-entre-arrays)
  - [Ordenar arrays](#ordenar-arrays)
  - [Arrays multidimensionales](#arrays-multidimensionales)
- [Métodos](#métodos)
  - [Parámetros de métodos](#parámetros-de-métodos)
  - [Sobrecarga de método](#sobrecarga-de-método)
- [Clases](#clases)
  - [POO](#poo)
  - [Clases y objetos](#clases-y-objetos)
  - [Miembros de clase](#miembros-de-clase)
  - [Constructores](#constructores)
  - [Modificadores de acceso](#modificadores-de-acceso)
  - [Propiedades](#propiedades)
  - [Heredar](#heredar)
  - [Polimorfismo](#polimorfismo)
  - [Abstracto](#abstracto)
  - [Interfaces](#interfaces)
  - [Enums](#enums)
  - [Archivos](#archivos)
  - [Excepciones](#excepciones)
- [CRUD](#crud)

---

## [Introducción](#introducción)

### ¿Qué es C#?

**C#** es un lenguaje de programación orientado a objetos creado por Microsoft que se usa en el framework **.NET**.

Proviene de **C**, al igual que **C++** y se usa para aplicaciones de móvil, aplicaciones de escritorio, aplicaciones web, juegos, aplicaciones de base de datos y mucho más.

Es uno de los lenguajes más famosos debido al fácil aprendizaje, versatilidad y su extensa documentación.

---

## [Instalación](#instalación)

[Índice](#índice)
Recursos:

- https://www.monodevelop.com/download/
- ChatGPT

Para poder programar con C# en linux necesitaremos un IDE(Integrated Development Environment o Entorno de Desarrollo Integrado). Tienes la opción de usar VSC(Visual Studio Code) con su respectiva extensión, .NET core o en este caso, MonoDevelop. No hay motivo especial por el cuál me haya decantado por este último.

Para instalar MonoDevelop en linux, usaremos la terminal.

Primero que nada hacemos un `sudo apt update` y un `sudo apt upgrade`.

Ahora vamos a necesitar descargarnos los repositorios de Mono, en este caso vamos a descargarnos la versión para Ubuntu 18.04(i386, amd64, armhf):

```consola
sudo apt install apt-transport-https dirmngr
sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys 3FA7E0328081BFF6A14DA29AA6A19B38D3D831EF
echo "deb https://download.mono-project.com/repo/ubuntu vs-bionic main" | sudo tee /etc/apt/sources.list.d/mono-official-vs.list
sudo apt update
```

Una vez hecho esto, solo queda instalar MonoDevelop:

```consola
sudo apt-get install monodevelop
```

### [MonoDevelop](#monodevelop)

[Índice](#índice)
Recursos:

- https://www.monodevelop.com/

Una vez instalado, lo abrimos desde el menú de aplicaciones o el escritorio.

Para poder empezar a trabajar y probar los códigos que haremos durante el manual, lo primero es crearnos un proyecto o solución.

Dentro de MonoDevelop veremos un apartado llamado "soluciones", ahí le daremos a Nuevo..., o arriba a la izquierda le das a Archivo>Nueva solución..., se abrirá una nueva ventana que nos dará varias opciones:

- Multiplataforma
  - Biblioteca
    - Proyecto compartido
    - Biblioteca portable
    - Biblioteca multiplataforma
    - Biblioteca de .NET Standard
- Otro
  - .NET
    - Proyecto de consola
    - Proyecto vacío
    - Proyecto de gtk# 2.0
    - Biblioteca
    - Proyecto de biblioteca NUnit
    - Paquete NuGet
    - F# Tutorial
  - ASP.NET
    - Proyecto ASP.NET vacío
    - Proyecto ASP.NET MVC
    - Proyecto de Web Forms ASP.NET
  - Varios
    - Solución en blanco
    - Área de trabajo
    - Proyecto genérico
    - Empaquetando proyecto

Nosotros escogeremos el proyecto de consola, OJO, elegimos el lenguaje C#.

Nos pasará a otra ventana donde le daremos nombre al proyecto y a la solución, por defecto te pondrá el mismo nombre en ambos, pero no es necesario y de hecho para evitar confusiones, puedes ponerle un distintivo.

En ubicación elegimos el directorio: /home/usuario/nombreProyecto, por defecto te creará un directorio dentro del directorio de la solución, puedes elegir que no, al igual que abajo, puedes deciddir si tratar con git para controlar las versiones.

Terminamos de rellenar los campos y le damos a crear. Para eliminar una solución simplemente borra la carpeta. Te abrirá automáticamente tu solución.

Si queremos tener más archivos para tener los ejemplos separados, podemos añadir más archivos dándole click derecho al segundo "Proyecto">Agregar>Nuevo archivo>Archivo vacío>Nuevo:

Proyecto

- Proyecto (este)
  - Referencias
  - Paquetes
  - Archivo.cs

Para probar el código le daremos al botón en forma de flecha de la esquina superior izquierda.

### [Xterm](#xterm)

[Índice](#índice)
Si estás en un linux que tiene una terminal de gnome, lo más probable es que no te funcione la depuración, eso es debido a que tiene conflictos la IDE con gnome pero no es problema, instalaremos y configuraremos una terminal distinta para utilizarla.

Para instalar la terminal de Xterm es tan sencillo como ir a la terminal y:

```consola
sudo apt update
sudo apt install xterm
```

Ahora hay que configurar desde la consola a MonoDevelop para que no tenga por defecto la terminal de gnome:

```consola
sudo gedit  /usr/bin/monodevelop
```

Si no tienes el paquete gedit instalalo:

```consola
sudo apt install gedit
```

Nos abrirá un archivo y en lo más alto del archivo, debjo de "#!/usr/bin/env bash", ponemos "unset GNOME_DESKTOP_SESSION_ID", guardamos y cerramos. Con eso ya debería funcionar.

---

## [C-Sharp](#c-sharp)

[Índice](#índice)
Recursos:

- https://www.w3schools.com/
- ChatGPT

C# es un lenguaje orientado a objetos que te da una estructura limpia para los programas y te permite reutilizar código, reduciendo el trabajo.

<mark>¡¡¡IMPORTANTE!!!</mark>

- **C#** tiene en cuenta las MAYÚSCULAS y las minúsculas en el código.
- Un espacio en blanco en el código, no afecta en nada, pero hace el código más legible.
- Recuerda cerrar con ";".
- No es necesario que el nombre del archivo sea igual al de la clase. Al guardar el archivo pon "nombreArchivo.cs".

### [Sintáxsis](#sintáxsis)

```C#
using System;

// Comentario en Línea

namespace MiAplicacion
{
    class Programa
    {
        public static void Main(string[] args)
        {
            Console.WriteLine("Hola Mundo");
        }
    }
}

/*
Comentario
Multi-línea
*/
```

- `using System` -> Puedes usar las clases de System en namespace
- `namespace` -> Se usa para organizar tu código y es un contenedor de clases y otros namespaces
- { } -> Las llaves marcan el inicio y final de un bloque de código
- `class` -> Es un contenedor de datos y métodos (funciones). Toda línea de código en C# debe estar dentro de una clase
- // -> Comentario en línea
- /\* \*/ -> Comentario multi-línea

Los demás elementos los veremos y explicaremos más tarde.

---

### [Variables](#variables)

[Índice](#índice)

Las variables son contenedores que guardan datos de valores.

En C#, hay distintos tipos de variables (Definidas con palabras clave):

- `int` -> Números enteros (Desde el -2,147,483,648 a 2,147,483,647)
- `long` -> Números enteros más grandes. OJO!!! Al final del valor deberás poner "L" (Desde -9,223,372,036,854,775,808 a 9,223,372,036,854,775,807)
- `float` -> Números decimales. OJO!!! Al final del valor deberás poner "F" (De entre 6 y 7 decimales)
- `double` -> Números decimales OJO!!! Al final del valor deberás poner "D" (Hasta 15 decimales)
- `char` -> Una letra dentro de comillas simples ('A','b','C')
- `string` -> Cadena de caractéres dentro de comillas dobles ("Hola mundo")
- `bool` -> true - false

<br>

Para crear una variable sería tal que así:

```C#
// tipo nombreVariable = valor;


using System;

namespace MiAplicacion
{
    class Programa
    {
        public static void Main(string[] args)
        {
            int num = 14;                           // Número entero
            long num_Grande = 1000000000L;          // Número entero grande
            float decim = 14.6298361F;              // Decimal
            double decGrande = 20.017392874519274D; // Decimal grande
            char _letra = 'A';                      // Letra
            string nombre = "Pedro";                // Cadena de caracteres
            bool b = true;                          // Booleano

            Console.WriteLine(num);
            Console.WriteLine(num_Grande);
            Console.WriteLine(decim);
            Console.WriteLine(decGrande);
            Console.WriteLine(_letra);
            Console.WriteLine(nombre);
            Console.WriteLine(b);
        }
    }
}
```

1. Declaras el tipo de variable, (string).
2. Le asignas un nombre a tu variable (nombre).
3. Le das un valor ("Pedro").

Las variables tienen **identificadores** únicos de cada uno, que sirven para diferenciar unos de otros. (nombre, num).
Para poner estos nombres hay unas pautas a seguir:

- Están permitidos: letras, números y barra baja ( \_ )
- Deben de empezar con una letra o con barra baja ( \_ )
- Deben empezar en minúscula y no puede tener espacios
- Los nombres diferencian entre MAYÚSCULAS y minúsculas
- Palabras reservadas no pueden usarse como nombres (string, class, const)

#### Constantes

Si no quieres que otros (o tu mismo) sobreescriban los valores existentes, puedes añadir la palabra clave `const` delante del tipo de variable.
Esto declarará la variable como "constante", que significa que es incambiable y es solo de lectura:

```C#
const int num = 15;
num = 20; // error
```

#### Mostrar variables

El método `WriteLine( )` se usa para mostrar los valores de las variables en la ventana de la consola.

Para combinar ambos texto y variable, usa `+`;

```C#
string nombre = "Pedro";
Console.WriteLine("Hola " + nombre);
```

También puedes usar el `+`, para añadir una variable a otra:

```C#
string nombre = "Pedro ";
string apellido = "Jiménez";
string nombreCompleto = nombre + apellido;
Console.WriteLine(nombreCompleto);
```

Para valores numéricos, el `+` sirve como operador matemático:

```C#
int x = 5;
int y = 6;
Console.WriteLine(x + y); // Muestra el valor de x + y
```

#### Declarar varias variables

Para declarar más de una variable del mismo tipo, usa una lista separada por comas:

```C#
int x = 5, y = 6, z = 50;
Console.WriteLine(x + y + z);
```

También puedes asignar el mismo valor a múltiples variables en una línea:

```C#
int x, y, z;
x = y = z = 50;
Console.WriteLine(x + y + z);
```

---

### [Tipos de datos](#tipos-de-datos)

[Índice](#índice)
Como ya hemos dicho, una variable debe tener el tipo de dato especificado.
El tipo de dato especifíca el tamaño y el tipo del valor de la variable.

- Tipos de datos -> Un tipo de dato tiene su propio tamaño

  - `int` -> 4 bytes
  - `long` -> 8 bytes
  - `float` -> 4 bytes
  - `double` -> 8 bytes
  - `bool` -> 1 bit
  - `char` -> 2 bytes
  - `string` -> 2 bytes por caracter

- Números científicos -> En `float` y `double` puedes añadir una `e` para indicar que se multiplica por 10

```C#
float f1 = 35e3F;
double d1 = 12E4D;
Console.WriteLine(f1);  // Muestra 35000
Console.WriteLine(d1);  // Muestra 120000
```

---

### [Conversor de tipos](#conversor-de-tipos)

[Índice](#índice)
Es cuándo asignas un valor de un tipo de dato a otro:

- Conversor Implícito (Automáticamente) -> Convierto un tipo pequeño a uno mayor (char -> int -> long -> float -> double)

```C#
int num = 9;
double decim = num;       // Automáticamente conversiona int en double

Console.WriteLine(num);   // Muestra 9
Console.WriteLine(decim); // Muestra 9
```

- Conversor Explícito (Manualmente) -> Convierto un tipo mayor a uno menor (double -> float -> long -> int -> char)
  Debes hacerlo manualmente, poniendo entre paréntesis el tipo y delante del valor:

```C#
double decim = 9.87;
int num = (int) decim;      // Conversión manual, double a int

Console.WriteLine(decim);   // Muestra 9.78
Console.WriteLine(num);       // Muestra 9
```

#### Métodos de conversión de tipos

Es posible cambiar los tipos de dato explícitamente utilizando métodos propios:

```C#
int num = 10;
double decim = 5.25;
bool booleano = true;

Console.WriteLine(Convert.ToString(num));       // Convierte int en string
Console.WriteLine(Convert.ToDouble(num));       // Convierte int en double
Console.WriteLine(Convert.ToInt32(decim));      // Convierte double en int
Console.WriteLine(Convert.ToString(booleano));  // Convierte bool en string
```

- Convert.ToBoolean -> Convierte a booleano
- Convert.ToDouble -> Convierte a decimal
- Convert.ToString -> Convierte a cadena de caracteres
- Convert.ToInt32 (int) -> Convierte en número entero
- Convert.ToInt64 (long) -> Convierte en número entero grande

---

### [Entradas del usuario](#entradas-del-usuario)

[Índice](#índice)
Ya sabemos poner nosotros los valores y mostrarlos con **Console.WriteLine( )**. Ahora vamos a usar **Console.ReadLine( )** para obtener una entrada del usuario.

```C#
// Escribe tu nombre y presiona intro
Console.WriteLine("Nombre de usuario:");

// Crea una variable tipo string para recoger el dato enviado y guardarlo en una variable
string usuario = Console.ReadLine();

// Muestra el valor de la variable (usuario), la cuál mostrará el valor de la entrada
Console.WriteLine("El usuario es: " + usuario);
```

#### Números en las entradas del usuario

El método Console.ReadLine( ) devuelve un string, por lo que no podrás obtener otro tipo de dato como por ejemplo int.

```C#
Console.WriteLine("Escribe tu edad:");
int edad = Console.ReadLine();
Console.WriteLine("Tu edad es: " + edad);
```

Esto causará un error:

```console
No puedes convertir de forma implicita un tipo "string" a un "int"
```

Tendríamos que usar el método **Convert.To**:

```C#
Console.WriteLine("Escribe tu edad:");
int edad = Convert.ToInt32(Console.ReadLine());
Console.WriteLine("Tu edad es: " + edad);
```

---

### [Operadores](#operadores)

[Índice](#índice)
Los operadores se usan para hacer operaciones en variables y valores.

```C#
int x = 5;
int y = 3;
Console.WriteLine(x + y);   // 8
Console.WriteLine(x - y);   // 2
Console.WriteLine(x * y);   // 15

int a = 4;
int b = 2;
Console.WriteLine(a / b);   // 2
Console.WriteLine(a % b);   // 0
x++;
Console.WriteLine(x);       // 6
y--;
Console.WriteLine(y);       // 2
```

- `+` -> Suma dos valores
- `-` -> Resta un valor de otro
- `*` -> Multiplica dos valores
- `/` -> Divide un valor por otro y da el cociente
- `%` -> Devuelve el resto
- `++` -> Incrementa el valor de la variable en 1
- `--` -> Disminuye el valor de la variable en 1

#### Operadores Asignados

Se usan para asignar valores a las variables.
Esta es una lista de todos ellos:

```C#
int x = 5;
Console.WriteLine(x);   // 5

x += 3;
Console.WriteLine(x);   // 8

x -= 3;
Console.WriteLine(x);   // 5

x *= 3;
Console.WriteLine(x);   // 15

x /= 3;
Console.WriteLine(x);   // 5

x %= 3;
Console.WriteLine(x);   // 2

x &= 3;
Console.WriteLine(x);   // 2

x |= 3;
Console.WriteLine(x);   // 3

x ^= 3;
Console.WriteLine(x);   // 0

x >>= 3;
Console.WriteLine(x);   // 0

x <<= 3;
Console.WriteLine(x);   // 0
```

#### Operadores de comparación

Se usan para comparar dos valores, el valor que da de vuelta es o True o False.

```C#
int x = 5;
int y = 3;

Console.WriteLine(x == y);    // False

Console.WriteLine(x != y);    // True

Console.WriteLine(x > y);     // True

Console.WriteLine(x < y);     // False

Console.WriteLine(x >= y);    // True

Console.WriteLine(x <= y);    // False
```

- `==` -> Igual que
- `!=` -> No es igual
- `>` -> Mayor que
- `<` -> Menor que
- `>=` -> Mayor que o igual
- `<=` -> Menos que o igual

#### Operadores lógicos

Para saber si algo es True o False no solo tenemos los operadores de comparación, si no que también tenemos los operadores lógicos.

```C#
int x = 5;
Console.WriteLine(x > 3 && x < 10);     // Devuelve True porque 5 es mayor que 3 y menor que 10

Console.WriteLine(x > 3 || x < 4);      // Devuelve True porque 5 es mayor que 3 pero no es menor que 4

Console.WriteLine(!(x > 3 && x < 10));  // Devuelve False porque ! (not) se usa para invertir el resultado
```

- `&&` -> Puerta lógica and, devuelve True si ambos son true
- `||` -> Puerta lógica or, devuelve True si uno es true
- `!` -> Puerta lógica not, devuelve False si el resultado es true

---

### [Math](#math)

[Índice](#índice)
La clase Math tiene varios métodos que te permiten hacer tareas matemáticas en números.

```C#
Console.WriteLine(Math.Max(5, 10)); 

Console.WriteLine(Math.Min(5, 10));

Console.WriteLine(Math.Sqrt(64));

Console.WriteLine(Math.Abs(-4.7));

Console.WriteLine(Math.Round(9.99));
```

- `Math.Max` -> Para encontrar el valor más alto
- `Math.Min` -> Para encontrar el valor más pequeño
- `Math.Sqrt` -> Devuelve la raíz cuadrada
- `Math.Abs` -> Devuelve el valor en positivo
- `Math.Round` -> Redondea un número para ser entero

### [String](#string)

[Índice](#índice)
Los strings se usan para contener texto.
La variable `string` contiene una colección de caracteres alrededor de comillas dobles.

#### Largo de los string

Un string en C# es un objeto, que contiene propiedades y métodos que pueden hacer ciertas operaciones en los strings. Por ejemplo, el largo de um string se puede saber con la propiedad `Length`:

```C#
string txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
Console.WriteLine("El largo del string txt es: " + txt.Length);
```

#### Otros métodos

Hay varios métodos de string disponibles, por ejemplo `ToUpper()` y `ToLower()`, que devuelven una copia del string convertida en mayúsculas o minúsculas:

```C#
string txt = "Hola Mundo";
Console.WriteLine(txt.ToUpper());   // Muestra "HOLA MUNDO"
Console.WriteLine(txt.ToLower());   // Muestra "hola mundo"
```

#### Concatenación de string

El operador `+` puede usarse entre strings para combinarlos. Esto se llama **Concatenación**:

```C#
string nombre = "Juan";
string apellido = "Hidalgo";
string nombreCompleto = nombre + apellido;
Console.WriteLine(nombreCompleto);
```

También puedes usar el método `string.Concat()` para concatenar dos strings:

```C#
string nombre = "Juan ";
string apellido = "Hidalgo";
string nombreCompleto = string.Concat(nombre, apellido);
Console.WriteLine(nombreCompleto);
```

OJO!!!
C# usa el operador `+` tanto para sumar como para concatenar.

Recuerda: Los números se suman. Los strings se concatenan.

```C#
int x = 10;
int y = 20;
int z = x + y;    // z será 30 (un número entero)
```
```C#
string x = "10";
string y = "20";
string z = x + y; // z será 1020 (un string)
```

#### Interpolación de string

Otra forma de concatenar string, es la interpolación de string, que sustituye los valores de las variables en contenedores en un string. Fíjate que no te tienes que preocupar de los espacios como enla concatenación:

```C#
string nombre = "Juan";
string apellido = "Hidalgo";
string nombreCompleto = $"Mi nombre completo es: {nombre} {apellido}";
Console.WriteLine(nombreCompleto);
```

Importante, date cuenta que deberás usar `$`(símbolo del dolar) cuándo usas el método de interpolación.

#### Acceso a strings

Puedes acceder a un caracter en concreto de un string refiriéndote a él por su número de posición dentro de corchetes `[ ]` .

```C#
// En este ejemplo se muestra el primer caracter en saludo

string saludo = "Hola";
Console.WriteLine(saludo[0]);  // Muestra "H"
```

OJO!!!
El posicionamiento de los trings empiezan en 0:[0] es el primer caracter. [1] es el segundo caracter, etc.

También puedes buscar a que posición pertenece usando `IndexOf()`:

```C#
string saludo = "Hola";
Console.WriteLine(saludo.IndexOf("o"));   // Saca "1"
```

Otro método muy útil es `Substring( )`, que saca caractéres de un string empezando por la posición de ese caracter. Suele usarse con `IndexOf( )`:

```C#
// Nombre completo
string nombre = "Pedro Mañas";

// Localizamos la letra M
int caracPos = nombre.IndexOf("M");

// Sacamos el apellido
string apellido = nombre.Substring(caracPos);

// Muestra el resultado
Console.WriteLine(apellido);
```

#### Caracteres especiales

Los strings deben escribirse dentro de comillas, pero algo así daría error:

```C#
string texto = "Te mueves menos que los ojos de "Espinete" niño";
```

Para evitar este tipo de problemas podemos usar la barra lateral `\`:

- `\'` -> '

```C#
string texto = "I\'m Juan";
```

- `\"` -> "

```C#
string texto = "Te mueves menos que los ojos de \"Espinete\" niño";
```

- `\\` -> \

```C#
string texto = "28\\10\\1991";
```

Otros caractéres bastante útiles son:

```C#
string txt = "¡Hola\nMundo!";
/*
¡Hola
Mundo!
*/

string txt = "¡Hola\tMundo!";   // ¡Hola  Mundo!

string txt = "¡Hola Mun\bdo!";  // ¡Hola Mudo!
```

- \n -> Salto de línea
- \t -> Tabula
- \b ->

---

### [If Else](#if-else)

[Índice](#índice)
A parte de usar las condicionees lógicas matemáticas, en C# también usamos los **condicionales**:

- "if" -> Para ejecutar un bloque del código si la condición es True

```C#
if (condicion)
{
  // El bloque codigo que se ejecutara si la condicion es True
}

// Ejemplos

if (20 > 10)
{
Console.WriteLine("20 es mayor que 10");
}

// Con variables tambien se puede
int x = 20;
int y = 10;
if (x > y)
{
Console.WriteLine("x es mayor que y");
}
```

- "else" -> Para ejecutar un bloque de código si la condición es false

```C#
if (condicion)
{
  // El bloque codigo que se ejecutara si la condicion es True
}
else
{
  // El bloque codigo que se ejecutara si la condicion es False
}

// Ejemplo

int hora = 20;
if (hora < 18)
{
  Console.WriteLine("Buenos tardes");
}
else
{
  Console.WriteLine("Buenas noches");
}
// Muestra "Buenas tardes"
```

- "else if" -> Para especificar una nueva condición que valorar, si la primera condición es falsa

```C#
if (condicion1)
{
  // El bloque codigo que se ejecutara si la condicion es True
}
else if (condicion2)
{
  // El bloque de código que se ejecutará si la condicion1 es false y condicion2 es true
}
else
{
  // El bloque de código que se ejecutará si la condicion1 es false y condicion2 es false
}

// Ejemplo

int hora = 22;
if (hora < 10)
{
  Console.WriteLine("Buenos días");
}
else if (hora < 20)
{
  Console.WriteLine("Buenas tardes");
}
else
{
  Console.WriteLine("Buenas noches");
}
// Muestra "Buenas noches"
```

- Operador ternario -> Consiste en tres operadores que reducen todo el código en una línea, por lo general usado para cosas simples. OJO, Por lo general evitaremos su uso.

```C#
variable = (condicion) ? opcionTrue :  opcionFalse;

// Ejemplo

int hora = 20;
string resultado = (hora < 18) ? "Buenas tardes" : "Buenas noches";
Console.WriteLine(resultado);
```

---

### [Switch](#switch)

[Índice](#índice)
Usaremos `switch` para seleccionar uno de varios bloques de código para ser ejecutado:

```C#
  switch(menu)
{
  case x:
    // Bloque de código
    break;
  case y:
    // Bloque de código
    break;
  default:
    // Bloque de código
    break;
}
```

- El valor de switch se evalúa una vez
- Ese valor se compara con cada valor de cada caso
- Si es igual que uno de ellos, ese bloque de código se ejecuta
- break -> Detiene el bloque de código en el que se encuentre, es decir que si ejecuta uno, que se detenga y no entre en los demás.
- default -> El valor por defecto que se ejecutará si no hay ninguna coincidencia

```C#
int dia = 4;
switch (dia)
{
  case 1:
    Console.WriteLine("Lunes");
    break;
  case 2:
    Console.WriteLine("Martes");
    break;
  case 3:
    Console.WriteLine("Miércoles");
    break;
  case 4:
    Console.WriteLine("Jueves");
    break;
  case 5:
    Console.WriteLine("Viernes");
    break;
  case 6:
    Console.WriteLine("Sábado");
    break;
  case 7:
    Console.WriteLine("Domingo");
    break;
}
// Muestra "Jueves" (day 4)
```

---

### [Bucles](#bucles)

[Índice](#índice)
Los bucles pueden ejecutar bloques de código siempre y cuándo se de la condición delcarada.
Los bucles son bastante útiles ya que te ahorran tiempo, reducen errores y pueden hacer el código más legible.

### [While](#while)

[Índice](#índice)
Los bucles while se mantienen haciendo el bucle en un bloque de código siempre y cuándo la condición se cumpla.

```C#
while (condicion)
{
  // Bloque de código a ejecutar
}

// Ejemplo:
// En este ejemplo el bucle se mantendrá siempre y cuándo la variable (i) sea menor que 5

int i = 0;
while (i <= 5)
{
  Console.WriteLine(i);
  i++;
}

// Anotación: No te olvides de incrementar la variable en la condicion, si no el bucle nunca se detendrá
```

#### Do/While

Es una variante de while, este bucle se ejecutará una vez antes de verificar si la condición es correcta, luego repetirá el bucle siempre y cuándo la condición se cumpla.

```C#
do
{
  // Bloque de código a ejecutar
}
while (condicion);

// Ejemplo:
/*
Con do/while el bucle se ejecutará siempre una vez,
aunque la condición sea falsa,
porque el bloque de código se ejecuta antes de que la condición se pruebe
*/

int i = 0;
do
{
  Console.WriteLine(i);
  i++;
}
while (i <= 5);
```

### [For](#for)

[Índice](#índice)
Cuándo sabes exactamente cuántas veces quieres tener en bucle un bloque de código, usamos for en vez de while.

```C#
for (valor 1; valor 2; valor 3)
{
  // Bloque de código a ejecutar
}
```

- El valor 1 se ejecuta (una vez) antes de ejecutar el bloque de código
- El valor 2 define la condición para que se ejecute el bloque de código
- El valor 3 es ejecutado (cada vez) después de que el bloque de código sea ejecutado

```C#
// Ejemplo

for (int i = 0; i <= 5; i++)
{
  Console.WriteLine(i);
}
```

Explicación:
El valor 1 declara una variable antes de que el bucle empiece (int i = 0).

El valor 2 define la condición para que se ejecute el bucle (i debe ser menor que 5). Si la condición se cumple, el bucle se repetirá, si no se cumple, el bucle se detendrá.

El valor 3 aumenta el valor (i++) cada vez que el bloque de código se ejecuta en el bucle.

#### Bucles anidados

Es posible tener un bucle dentro de otro bucle.
El bucle interior se ejecutará cada vez que se ejecute el bucle exterior.

```C#
// Bucle exterior
for (int i = 1; i <= 2; ++i)
{
  Console.WriteLine("Exterior: " + i);  // Se ejecuta 2 veces

  // Bucle interior
  for (int j = 1; j <= 3; j++)
  {
    Console.WriteLine(" Interior: " + j); // Se ejecuta 6 veces (2 * 3)
  }
}
```

### [Foreach](#foreach)

[Índice](#índice)
Es un bucle que se usa exclusivamente para elementos de un array:

```C#
foreach (type nombreVariable in nombreArrat)
{
  // Bloque de código a ejecutar
}

// En el siguiente ejemplo mostrará todos los elementos del array de coche

string[] coche = {"Volvo", "BMW", "Ford", "Mazda"};
foreach (string i in coche)
{
  Console.WriteLine(i);
}
```

#### Break

Anteriormente lo hemos usado para saltarnos un valor de `switch`.
Pero también lo podemos usar para saltarnos un valor de un bucle.

```C#
// En este ejemplo se detiene el bucle cuándo (i) es igual a 4

for (int i = 0; i < 10; i++)
{
  if (i == 4)
  {
    break;
  }
  Console.WriteLine(i);
}
```

#### Continue

Con continue podemos ignorar un valor si la condición declarada ocurre:

```C#
// Este ejemplo termina ignorando el valor cuándo llega a 4

for (int i = 0; i < 10; i++)
{
  if (i == 4)
  {
    continue;
  }
  Console.WriteLine(i);
}
```

##### Break y Continue en un bucle While

```C#
// Ejemplo con break

int i = 0;
while (i < 10)
{
  Console.WriteLine(i);
  i++;
  if (i == 4)
  {
    break;
  }
}

// Ejemplo con continue

int i = 0;
while (i < 10)
{
  if (i == 4)
  {
    i++;
    continue;
  }
  Console.WriteLine(i);
  i++;
}
```

### [Arrays](#arrays)

[Índice](#índice)
Los arrays se usan para almacenar múltiples valores en una sola variable, en vez de declarar por separado las variables con y sus valores.
Para declarar un array, define primero el tipo de variable con corchetes [ ]:

```C#
string[] coches;
```

Para meterle los valores que queramos, los ponemos dentro de llaves { } y con comas:

```C#
string[] coches = {"Volvo", "BMW", "Ford", "Mazda"};

// Con números también se puede

int[] num = {10, 20, 30, 40};
```

#### Acceso a Elementos de un Array

Accedes a un elemento del array refiriéndote a su número de lugar:

```C#
string[] coches = {"Volvo", "BMW", "Ford", "Mazda"};
Console.WritLine(coches[0]);
// Muestra "Volvo"
```

#### Cambiar un elemento de array

Para cambiar un valor de un elemento específico, tienes que referirte a su posición:

```C#
coches[0] = "Opel";

// Ejemplo

string[] coches = {"Volvo", "BMW", "Ford", "Mazda"};
coches[0] = "Opel";
Console.WriteLine(coches[0]);
// Ahora muestra Opel en vez de Volvo
```

#### Tamaño de array

Para saber cuántos elementos tiene un array, usamos `Length`:

```C#
string[] coches = {"Volvo", "BMW", "Ford", "Mazda"};
Console.WriteLine(coches.Length);
// Saca 4
```

#### Otras formas de crear un array

Si estás familiarizado con C#, habrás visto arrays creados con la palabra clave `new`, y también es posible que hayas visto arrays con un tamaño específico.

```C#
// Creamos un array de 4 elementos, y añadimos los valores más tarde
string[] coches = new string[4];

coches[0] = "Volvo";
coches[1] = "BMW";
coches[2] = "Ford";
coches[3] = "Mazda";

Console.WriteLine(coches[0]);
Console.WriteLine(coches[1]);
Console.WriteLine(coches[2]);
Console.WriteLine(coches[3]);
```
```C#
// Creamos un array de 4 elementos, y añadimos los valores en el momento
string[] coches = new string[4] {"Volvo", "BMW", "Ford", "Mazda"};

Console.WriteLine(coches[1]);
```
```C#
// Creamos un array de 4 elementos sin especificar el tamaño
string[] coches = new string[] {"Volvo", "BMW", "Ford", "Mazda"};

Console.WriteLine(coches[3]);
```
```C#
// Creamos un array de 4 elementos, omitimos la palabra clave "new", y sin especificar el tamaño
string[] coches = {"Volvo", "BMW", "Ford", "Mazda"};

Console.WriteLine(coches[2]);
```

### [Bucles entre arrays](#bucles-entre-arrays)

[Índice](#índice)
Puedes hacer un bucle entre elementos de array con el bucle `for`, y usar `Length` para especificar cuántas veces el bucle se debe ejecutar.

```C#
string[] coches = {"Volvo", "BMW", "Ford", "Mazda"};
for (int i = 0; i < coches.Length; i++)
{
  Console.WriteLine(coches[i]);
}
```

#### Bucle ForEach

También está el bucle `foreach`, que se usa exclusivamente para hacer bucles entre elementos de arrays:

```C#
foreach (type variableName in arrayName)
{
  // Bloque de código a ejecutar
}

// El siguiente ejemplo saca todos los elementos del array coches

string[] coches = {"Volvo", "BMW", "Ford", "Mazda"};
foreach (string i in coches)
{
  Console.WriteLine(i);
}
```

El ejemplo de arriba sería: por cada elemento de string (llamado "i") en coches, nuestra el valor de "i".

Si comparas los bucles `for` y `foreach`, verás que el método de `foreach` es más sencillo de escribir, no necesita una contraparte, y es más legible.

### [Ordenar arrays](#ordenar-arrays)

[Índice](#índice)
Hay muchos métodos de arrays disponibles, por ejemplo `Sort()`, que te permite ordenar alfabéticamente o de forma ascendente los arrays:

```C#
// Ordenar un string

string[] coches = {"Volvo", "BMW", "Ford", "Mazda"};
Array.Sort(coches);
foreach (string i in coches)
{
  Console.WriteLine(i);
}

// Sort an int

int[] num = {5, 1, 8, 9};
Array.Sort(num);
foreach (int i in num)
{
  Console.WriteLine(i);
}
```

#### System.Linq Namespace

Otros métodos de arrays útiles, como Min, Max, y Sum, pueden encontrarse en `System.Linq` namespace:

```C#
using System;
using System.Linq;

namespace MiAplicacion
{
  class Programa
  {
    static void Main(string[] args)
    {
      int[] num = {5, 1, 8, 9};
      Console.WriteLine(num.Max());  // Devuelve el valor más grande
      Console.WriteLine(num.Min());  // Devuelve el valor más pequeño
      Console.WriteLine(num.Sum());  // Devuelve la suma de los elementos
    }
  }
}
```

### [Arrays Multidimensionales](#arrays-multidimensionales)

[Índice](#índice)
Los arrays multidimensionales son arrays que contienen arrays, los arrays pueden tener cualquier número de dimensiones. Los arrays más comunes son los de dos dimensiones (20).

#### Arrays de dos dimensiones

Para crear un array 2D, añade cada array con sus respectivas llaves, e inserta una coma dentro de las llaves:

```C#
int[,] numeros = { {1, 4, 2}, {3, 6, 8} };
```

Anotación:
La coma simple especifíca que el array es 2D. Un array tridimensional (3D) tendría dos comas [ , , ].

`numeros` Es ahora un array con dos arrays como elementos. El primer elmento de array contiene 3 elementos: 1, 4 y 2, mientras que el segundo elemento de array contiene 3, 6 y 8. Para visualizarlo piensa en el array como una tabla con filas y columnas:

|        | Columna 0 | Columna 1 | Columna 2 |
| :----: | :-------: | :-------: | :-------: |
| Fila 0 |     1     |     4     |     2     |
| Fila 1 |     3     |     6     |     8     |

#### Acceso a elementos de arrays 2D

Para acceder a un elemento de un array 2D, debes especificar dos posiciones: una para el array, y otro para el elemento dentro del array. O mejor aún, con la visualización de la tabla en mente; una por la fila y otra por la columna (Ejemplo de arriba).

```C#
// En este ejemplo sacamos el valor del elemento de la primera fila(0) y la tercera columna(2) del array num

int[,] num = { {1, 4, 2}, {3, 6, 8} };
Console.WriteLine(num[o, 2]); // Muestra 2
```

#### Cambiar elementos de un array 2D

También puedes cambiar el valor de un elemento.

```C#
int[,] num = { {1, 4, 2}, {3, 6, 8} };
num[0, 0] = 5;  // Cambia el valor a 5
Console.WriteLine(num[0, 0]); // Muestra 5 en vez de 1
```

#### Bucles a través de arrays 2D

Puedes hacer bucles a través de elementos de arrays 2D con foreach:

```C#
int[,] num = { {1, 4, 2}, {3, 6, 8} };

foreach (int i in num)
{
  Console.WriteLine(i);
}
```

También puedes usar el bucle for. Para arrays multidimensionales, necesitas un bucle por cada dimensión de array.

```C#
int[,] num = { {1, 4, 2}, {3, 6, 8} };

for (int i = 0; i < num.GetLength(0); i++)
{
  for (int j = 0; j < num.GetLength(1); j++)
  {
    Console.WriteLine(num[i, j]);
  }
}

// OJO, date cuenta que usamos GetLength() en vez de Length para especificar cuantas veces se debe ejecutar el bucle
```

---

### [Métodos](#métodos)

[Índice](#índice)
Un método es un bloque de código que solo se ejecuta cuándo se le llama.

Puedes pasar información, conocidos como parámetros, en el método.

Los métodos se usan para ciertas acciones, y también son conocidos como **funciones**.

#### Crear un método

Un método es definido por su nombre, seguido de unos paréntesis(). C# ofrece métodos predefinidos, como por ejemplo `Main()`, pero también puedes crear tus propios métodos:

```C#
using System;

namespace MiAplicacion
{
    class Programa
    {
        static void MiMetodo()
        {
            Console.WriteLine("¡Hola mundo!");
        }

        static void Main(string[] args)
        {
            MiMetodo();
        }
    }
}
```

- `MiMetodo()` es el nombre del método.
- `static` significa que el método pertenece a la clase **Programa**.
- `void` significa que el método no devuelve ningún valor.

#### Llamar a un método

Para llamar(ejecutar) a un método, escribe su nombre seguido de paréntesis() y un cierre ";".

```C#
static void MiMetodo()
{
  Console.WriteLine("Esternocleidomastoideo");
}

static void Main(string[] args)
{
  MiMetodo();
}

// Muestra "Esternocleidomastoideo"
```

### [Parámetros de métodos](#parámetros-de-métodos)

[Índice](#índice)
La información puede pasar por los métodos como prámetros.

Se especifican después del nombre del método, dentro de paréntesis. Puedes añadir tantos prámetros como quieras, pero sepáralos con una coma.

```C#
static void MiMetodo(string nombreCompleto)
{
  Console.WriteLine(nombreCompleto + "Hidalgo");
}

static void Main(string[] args)
{
  MiMetodo("Marcos ");
  MiMetodo("Alba ");
  MiMetodo("Manuel ");
}

// Marcos Hidalgo
// Alba Hidalgo
// Manuel Hidalgo
```

OJO!!!
Cuándo un parámetro pasa por un método, se llama **argumento**. Así que el ejemplo de arriba sería:
`nombreCompleto` es un parámetro, mientras que Marcos, Alba y Manuel son **argumentos**.

#### Múltiples parámetros

```C#
static void MiMetodo(string nombre, int edad)
{
  Console.WriteLine(nombre + " tiene " + edad);
}

static void Main(string[] args)
{
  MiMetodo("Marcos", 15);
  MiMetodo("Alba", 42);
  MiMetodo("Manuel", 36);
}

// Marcos tiene 15
// Alba tiene 42
// Manuel tiene 36
```

OJO!!!
Date cuenta que estás trabajando con múltiples parámetros, la llamada del método debe tener la misma cantidad de argumentos como de parámetros, y los argumentos deben pasar por el mismo orden.

#### Valores por defecto de los parámetros

También puedes usar valores por defecto, usando `=`.

Si llamamos a un método sin argumento, usará el valor por defecto ("Portugal"):

```C#
static void MiMetodo(string pais = "Portugal")
{
  Console.WriteLine(pais);
}

static void Main(string[] args)
{
  MiMetodo("España");
  MiMetodo("Italia");
  MiMetodo();
  MiMetodo("Alemania");
}

// España
// Italia
// Portugal
// Alemania
```

OJO!!!
Un parámetro con valor por defecto, se conoce comúnmente como **"parámetro opcional"**.

#### Devolver valores

En anteriores ejemplos hemos usado la palabra clave `void`, esto indica que el método no debería devolver ningún valor.

Si quieres que un método te devuelva un valor, puedes usar un tipo de dato primitivo (como `int` o `double`) en vez de `void`, y usar la palabra clave `return` dentro del método:

```C#
static int Metodo(int x)
{
  return 5 + x;
}

static void Main(string[] args)
{
  Console.WriteLine(Metodo(3));
}

// Muestra 8 (5 + 3)
```

En este otro ejemplo devuelve la suma de dos parámetros de un método:

```C#
static int Metodo(int x, int y)
{
  return x + y;
}

static void Main(string[] args)
{
  Console.WriteLine(Metodo(5, 3));
}

// Muestra 8 (5 + 3)
```

También puedes guardar el resultado de una variable (es más recomendable, porque es más fácil de leer y mantener):

```C#
static int Metodo(int x, int y)
{
  return x + y;
}

static void Main(string[] args)
{
  int z = Metodo(5, 3);
  Console.WriteLine(z);
}

// Muestra 8 (5 + 3)
```

#### Argumentos nombrados

Es posible mandar argumentos con la sintáxsis `key: value`.

De esta manera, el ordn de los argumentos da igual:

```C#
static void Metodo(string niño1, string niño2, string niño3)
{
  Console.WriteLine("El niño más joven es: " + niño3);
}

static void Main(string[] args)
{
  Metodo(niño3: "Manuel", niño1: "Javi", niño2: "Alberto");
}

// El niño más joven es : Manuel
```

### [Sobrecarga de método](#sobrecarga-de-método)

[Índice](#índice)
Con una sobrecarga de método, múltiples métodos pueden tener el mismo nombre pero con diferentes parámetros:

```C#
int metodo(int x)
float metodo(float x)
double metodo(double x, double y)
```

Fíjate en el siguiente ejemplo, que tiene dos métodos que añaden números de diferente tipo:

```C#
static int MetodoInt(int x, int y)
{
  return x + y;
}

static double MetodoDouble(double x, double y)
{
  return x + y;
}

static void Main(string[] args)
{
  int num1 = MetodoInt(8, 5);
  double num2 = MetodoDouble(4.3, 6.26);
  Console.WriteLine("Int: " + num1);
  Console.WriteLine("Double: " + num2);
}
```

En vez de definir dos métodos puedes hacer eso, es mejor sobrecargar a uno.

En el ejemplo de abajo, vamos a sobrecargar al método `metodoPlus` para que trabaje para `int` y `double`:

```C#
static int metodoPlus(int x, int y)
{
  return x + y;
}

static double metodoPlus(double x, double y)
{
  return x + y;
}

static void Main(string[] args)
{
  int num1 = metodoPlus(8, 5);
  double num2 = metodoPlus(4.3, 6.26);
  Console.WriteLine("Int: " + num1);
  Console.WriteLine("Double: " + num2);
}
```

OJO!!!
Múltiples métodos pueden tener el mismo nombre siempre y cuándo el número y/o el tipo de parámetros sean diferentes.

---

### [Clases](#clases)

[Índice](#índice)

### [POO](#poo)

POO es por Programación Orientada a Objetos.

La programación procedural es sobre escribir procedimientos o métodos que hacen operaciones en los datos, mientras que la programación orientada a objetos es sobre crear objetos que contienen ambos, datos y métodos.

La programación orientada a objetos tiene ventajas por encima de la programación procedural:

- POO es más rápido y fácil de ejecutar
- POO tiene una estructura lmipia para los programas
- POO ayuda a mantener el código de C# DRY (Don't Repeat Yourself o No Te Repitas), y hace más sencillo de mantener el código, modificar y arreglar.
- POO hace posible crear aplicaciones completamente reusables con menos código y un corto período de desarrollo.

### [Clases y objetos](#clases-y-objetos)

[Índice](#índice)
Las clases y objetos son los dos principales aspectos de la programación orientada a objetos.

Básicamente una clase sería fruta, coche, mamífero; Y los objetos serían manzana, Volvo, perro.

Todo en C# está asociado con clases y objetos, junto con sus atributos y métodos. Por ejemplo: en la vida real, un coche es un objeto. El coche tiene atributos, como el peso o el color, y métodos, como acelerar y parar.

#### Crear una clase

Para hacerlo tendremos que usar la palabra clave `class`:

```C#
class Coche
{
  string color = "naranja";
}
```

OJO!!!
Cuándo una variable se declara directamente en una clase, se suelen referir a ellas como campos (o atributos).

No es necesario, pero sería de buenas prácticas empezar con mayúscula la primera letra de los nombres de las clases. Además, es común que los nombres de los archivos de C# y las clases sean iguales, para tener el código organizado. Pero no es necesario (como en Java).

#### Crear objetos

Un objeto se crea a partir de una clase. Ya hemos creado una clase llamada `Coche`, ahora podemos usarlo para crear objetos.

Para crear un objeto de `Coche`, especifíca el nombre de la clase, seguido del nombre del objeto, y usando la palabra clave `new`:

```C#
// Creamos un objeto llamado "objeto" y lo usamos para mostrar el valor de "color"
class Coche
{
  string color = "naranja";

  static void Main(string[] args)
  {
    Coche miObjeto = new Coche();
    Console.WriteLine(miObjeto.color);
  }
}
```

OJO!!!
Fíjate que usamos el punto (.) para acceder a variables/campos dentro de una clase (objeto.color).

#### Múltiples objetos y clases

Puedes crear múltiples objetos de una clase:

```C#
class Coche
{
  string color = "naranja";

  static void Main(string[] args)
  {
    Coche miObjeto1 = new Coche();
    Coche miObjeto2 = new Coche();
    Console.WriteLine(miObjeto1.color);
    Console.WriteLine(miObjeto2.color);
  }
}
```

#### Usar múltiples clases

También puedes crear un objeto de una clase y acceder por otra clase. Esto usualmente se usa para una mejor organización (una clase tiene todos los campos y métodos, mientras que otra clase tiene el método `Main( )`).
En un archivo tendremos la clase Coche y en el otro lo llamaremos y usaremos:

- prog2.cs
- prog.cs

Este archivo solo será para la clase, no será necesario poner nada más
```C#
// prog2.cs

class Coche
{
  public string color = "naranja";
}
```

```C#
// prog.cs

using System;

namespace MiAplicacion
{
    class Programa
    {
        static void Main(string[] args)
        {
            Coche miObjeto = new Coche();
            Console.WriteLine(miObjeto.color);
        }
    }
}
```

Puedes tener archivos dónde solo hagas clases y luego los llamas y usas en el archivo principal que será donde se ejecute todo.

OJO!!!
La palabra clave `public`, es un modificador de acceso, que especifíca que la variable/campo `color` de `Coche` es accesible por otras clases, como por ejemplo `Programa`.

### [Miembros de clase](#miembros-de-clase)

[Índice](#índice)
Los campos y métodos de dentro de las clases normalmente se determinan como "Miembros de clase":

```C#
// Ejemplo

class MiClase
{
  // Miembros de clase
  string color = "naranja";   // campo
  int velMax = 200;           // campo
  public void aTodoGas()      // método
  {
    Console.WriteLine("¡El coche va todo lo rápido que puede!");
  }
}
```

#### Campos

Ya hemos aprendido que las variables dentro de una clase se llaman campos, y que puedes acceder a ellos creando un objeto de la clase y usando el punto (.).

En el siguiente ejemplo vamos a crear un objeto de la clase `Coche`, con el nombre `miObjeto`. Entonces mostramos el valor de los campos de `color` y `velMax`:

```C#
class Coche
{
  string color = "naranja";
  int velMax = 200;

  static void Main(string[] args)
  {
    Coche miObjeto = new Coche();
    Console.WriteLine(miObjeto.color);
    Console.WriteLine(miObjeto.velMax);
  }
}
```

También puedes dejar campos en blanco, y modificarlos cuándo estés creando objetos:

```C#
class Coche
{
  string color;
  int velMax;

  static void Main(string[] args)
  {
    Coche miObjeto = new Coche();
    miObjeto.color = "naranja";
    miObjeto.velMax = 200;
    Console.WriteLine(miObjeto.color);
    Console.WriteLine(miObjeto.velMax);
  }
}
```

De esa manera es muy útil para crear múltiples objetos en una clase:

```C#
class Coche
{
  string modelo;
  string color;
  int año;

  static void Main(string[] args)
  {
    Coche Ford = new Coche();
    Ford.modelo = "Mustang";
    Ford.color = "red";
    Ford.año = 1969;

    Coche Opel = new Coche();
    Opel.modelo = "Astra";
    Opel.color = "white";
    Opel.año = 2005;

    Console.WriteLine(Ford.modelo);
    Console.WriteLine(Ford.color);
    Console.WriteLine(Ford.año);

    Console.WriteLine(Opel.modelo);
    Console.WriteLine(Opel.color);
    Console.WriteLine(Opel.año);
  }
}
```

#### Objetos de métodos

Los métodos normalmente pertenecen a una clase, y ellos definen como un objeto de la clase se comporta.

Tal y como con los campos, puedes acceder a los métodos con el punto. Pero cuidado, el método debe ser `public`. Y recuerda que usamos el nombre del método seguido por dos paréntesis "( )" y un punto y coma ";" para llamar (ejecutar) al método:

```C#
class Coche
{
  string color;             // campo
  int velMax;               // campo
  public void aTodoGas()    // método
  {
    Console.WriteLine("¡El coche va lo más rápido que puede!");
  }

  static void Main(string[] args)
  {
    Coche miObjeto = new Coche();
    miObjeto.aTodoGas();  // Llama al método
  }
}
```

OJO!!!
¿Porqué declaramos el método como `public`, y no como `static`, como ejemplos anteriores?

La razón es sencilla: a un método `static` se puede acceder sin crear un objeto de la clase, mientras que a un método `public` solo se podrá acceder por objetos.

#### Usar múltiples clases

Podemos usar múltiples clases para una mejor organización (uno por campos y métodos, y otro para la ejecución). Lo siguiente es recomendable:

```C#
// prog2.cs

class Coche
{
  public string modelo;
  public string color;
  public int año;
  public void aTodoGas()
  {
    Console.WriteLine("¡El coche va lo más rápido que puede!");
  }
}
```

```C#
// prog.cs

class Programa
{
  static void Main(string[] args)
  {
    Coche Ford = new Coche();
    Ford.modelo = "Mustang";
    Ford.color = "naranja";
    Ford.año = 1969;

    Coche Opel = new Coche();
    Opel.modelo = "Astra";
    Opel.color = "verde";
    Opel.año = 2005;

    Console.WriteLine(Ford.modelo);
    Console.WriteLine(Ford.color);
    Console.WriteLine(Ford.año);

    Console.WriteLine(Opel.modelo);
    Console.WriteLine(Opel.color);
    Console.WriteLine(Opel.año);
  }
}
```

### [Constructores](#constructores)

[Índice](#índice)
Un constructor es un método especial que se usa para inicializar objetos. La ventaja de un constructor, es que se le llama cuándo un objeto de una clase es creado. Se puede usar para darle valores iniciales a los campos:

```C#
// Crea la clase coche
class Coche
{
  public string modelo;  // Crea un campo

  // Crea una clase constructora para la clase Coche
  public Coche()
  {
    modelo = "Mustang"; // Le da el valor inicial a modelo
  }

  static void Main(string[] args)
  {
    Coche Ford = new Coche();  // Creas un objeto de la clase Coche (esto llamará al constructor)
    Console.WriteLine(Ford.modelo);  // Muestra el valor de modelo
  }
}

// Muestra "Mustang"
```

Fíjate que el nombre del constructor debe ser igual al nombre de la clase, y no puede tener un tipo de retorno (como `void` o `int`).

También fíjate que el constructor es llamado cuándo el objeto es creado.

Todas las clases tienen un constructor por defecto: si tú no creas una clase constructora por tu cuenta, C# crea una por ti. Pero cuidado, que entonces no podrás ponerle los valores iniciales para los campos.

#### Parámetros de constructores

Los constructores pueden recibir parámetros, que se usan para inicializar campos.

En el siguiente ejemplo añadimos el parámetro `nombreModelo` al constructor. Dentro del cosntructor le asignamos `modelo` a `nombreModelo` (`modelo=nombreModelo`). Cuándo llamamos al constructor, pasámos un parámetro al constructor ("Mustang"), el cuál se le asignará el valor de `modelo` a `"Mustang"`:

```C#
class Coche
{
  public string modelo;

  // Crea una clase constructora con un parámetro
  public Coche(string nombreModelo)
  {
    modelo = nombreModelo;
  }

  static void Main(string[] args)
  {
    Coche Ford = new Coche("Mustang");
    Console.WriteLine(Ford.modelo);
  }
}

// Muestra "Mustang"
```

Puedes tener tantos parámetros como quieras:

```C#
class Coche
{
  public string modelo;
  public string color;
  public int año;

  // Crea una clase constructora con múltiples parámetros
  public Coche(string nombreModelo, string colorModelo, int añoModelo)
  {
    modelo = nombreModelo;
    color = colorModelo;
    año = añoModel;
  }

  static void Main(string[] args)
  {
    Coche Ford = new Coche("Mustang", "Blanco", 1969);
    Console.WriteLine(Ford.color + " " + Ford.año + " " + Ford.modelo);
  }
}


// Muestra Blanco 1969 Mustang
```

OJO!!!
Como otros métodos, los constructores pueden ser sobrecargados usando diferentes números de parámetros.

### [Modificadores de acceso](#modificadores-de-acceso)

[Índice](#índice)
La palabra clave `public` es un modificador de acceso, que se usa para asignar el nivel de visibilidad para clases, campos, métodos y propiedades.

C# tiene los siguientes modificadores de acceso:

- `public` (público) -> El código es accesible para todas las clases
- `private` (privado) -> El código es solo accesible por la misma clase
- `protected` (protegido) -> El código es accesible por la misma clase, o por una clase heredada de esa clase.
- `internal` (interno) -> El código es únicamente accesible por su propio grupo, pero no por otro.

Hay dos combinaciones: `protected internal` y `private protected`.

Pero por ahora nos vamos a centrar en los modificadores `public` y `private`.

#### Modificador private

Si declaras un campo como privado, solo se podrá acceder por su propia clase:

```C#
class Coche
{
  private string modelo = "Mustang";

  static void Main(string[] args)
  {
    Coche miObjeto = new Coche();
    Console.WriteLine(miObjeto.modelo);
  }
}

// Muestra "Mustang"
```

Si quieres acceder desde fuera de la clase, te dará un error:

```C#
class Coche
{
  private string modelo = "Mustang";
}

class Programa
{
  static void Main(string[] args)
  {
    Coche miObjeto = new Coche();
    Console.WriteLine(miObjeto.modelo);
  }
}

// Te saldrá un mensaje de error, por el nivel de protección
```

#### Modificador public

Si declaras un campo público, será accesible por todas las clases:

```C#
class Coche
{
  public string modelo = "Mustang";
}

class Programa
{
  static void Main(string[] args)
  {
    Coche miObjeto = new Coche();
    Console.WriteLine(miObjeto.modelo);
  }
}

// Mostrará "Mustang"
```

¿Porqué usamos los modificadores de acceso?

Para controlar la visibilidad de los miembros de las clases.

Para conseguir el "Encapsulamiento" - que es el proceso para asegurar que la información "sensible" esté oculta para los usuarios. Esto se consigue declarando los campos como privados.

OJO!!!
Por defecto, todos los miembros de una clase son `private` si no especifícas un modificador de acceso.

### [Propiedades](#propiedades)(Get y Set)

[Índice](#índice)
Antes de empezar con las propiedades debes tener un entendimiento básico sobre los encapsulamientos.

El propósito de encapsular es para asegurarnos de que la información "sensible" esté oculta por los usuarios. Para conseguirlo debes:

- Declarar campos o variables como `private`
- Utiliza los métodos `public` `get` y `set`, a través de las propiedades, para acceder y actualizar los valores de campos privados.

#### Propiedades

Una propiedad es una combinación entre una variable y un método, y tiene dos métodos: los métodos `get` y `set`:

```C#
class Persona
{
  private string nombre; // campo

  public string Nombre   // propiedad
  {
    get { return nombre; }   // método get
    set { nombre = value; }  // método set
  }
}
```

Explicación:

La propiedad `Nombre` está asociada al campo `nombre`. Es de buenas prácticas usar el mismo nombre para la variable como para el campo privado, pero con la primera letra en mayúscula.

El método `get` devuelve el valor de la variable `nombre`.

El método `set` asigna un `value` a la variable `nombre`. La palabra clave `value` representa el valor que le asignaremos a la propiedad.
<br>
Ahora podemos usar la propiedad `Nombre` para acceder y actualizar el campo privado de la clase `Persona`:

```C#
class Persona
{
  private string nombre; // campo
  public string Nombre   // propiedad
  {
    get { return nombre; }
    set { nombre = value; }
  }
}

class Programa
{
  static void Main(string[] args)
  {
    Persona miObjeto = new Persona();
    miObjeto.Nombre = "Paco";
    Console.WriteLine(miObjeto.Nombre);
  }
}

// Mostrará "Paco"
```

#### Propiedades automáticas

C# también proporciona una forma de usar atajos o propiedades automáticas, donde no tendrás que definir el campo para la propiedad, y solo tienes que escribir `get;` y `set;` dentro de la propiedad.

```C#
class Persona
{
  public string Nombre  // propiedad
  { get; set; }
}

class Programa
{
  static void Main(string[] args)
  {
    Persona miObjeto = new Persona();
    miObjeto.Nombre = "Paco";
    Console.WriteLine(miObjeto.Nombre);
  }
}

// Mostrará "Paco"
```

La única diferencia de código es que es más corto.

¿Porque encapsular?

- Tienes un mejor control de los miembros de las clases (reduce la posibilidad de que tú (u otros) la líen en el código)
- Los campos pueden ser solo de lectura (si únicamente usas el método `get`), o solo de escritura (si únicamente usas el método `set`)
- Mayor flexibilidad: el programador puede cambiar una parte sin tener que afectar al código entero
- Aumenta la seguridad de la información

### [Heredar](#heredar)

[Índice](#índice)
En C# es posible heredar campos y métodos de otra clase. El concepto de heredar lo agrupamos en dos categorías:

- Clases derivadas(hijo) -> La clase hereda de otra clase
- Clase base (padre) -> La clase de la que se hereda

Para heredar de una clase hay que usar el símbolo `:`.

En el ejemplo de abajo, la clase `Coche`(hijo) hereda los campos y métodos de la clase `Vehiculo`(padre):

```C#
class Vehiculo  // Clase base (padre)
{
  public string marca = "Ford";  // Campo de Vehiculo
  public void Bocina()             // Método de Vehiculo
  {
    Console.WriteLine("Piii, piii!");
  }
}

class Coche : Vehiculo  // Clase derivada (hijo)
{
  public string nombreModelo = "Mustang";  // Campo de coche
}

class Programa
{
  static void Main(string[] args)
  {
    // Creas el objeto miCoche
    Coche miCoche = new Coche();

    // Llamas al método bocina() (De la clase Vehiculo) en el objeto miCoche
    miCoche.Bocina();

    // Muestra el valor del campo marca (De la clase Vehiculo) y el valor de nombreModelo de la clase Coche
    Console.WriteLine(miCoche.marca + " " + miCoche.nombreModelo);
  }
}
```

¿Porqué y cuándo usar la heredación?

- Es útil para reutilizar código: reutilizas campos y métodos de una clase existente cuándo vas a crear una nueva clase.

#### La palabra clave sealed

Si no quieres que otras clases hereden de una clase, usa la palabra clave `sealed`:

```C#
sealed class Vehiculo
{
  ...
}

class Coche : Vehiculo
{
  ...
}
```

Te saltará un mensaje de error comunicando que al estar sealed(sellado), no puede heredar de Vehiculo.

### [Polimorfismo](#polimorfismo)

[Índice](#índice)
Polimorfismo significa quer tiene muchas formas, y ocurre cuándo tenemos muchas clases que están relacionadas por heredar.

Heredar nos permite precisamente, heredar campos y métodos de otra clase. El polimorfismo usa esos métodos para hacer tareas distintas. Esto permite hacer una acción de diferentes formas.

Por ejemplo, piensa en la clase base `Animal` que tiene el método llamado `sonidoAnimal()`. Las clases derivadas de animal pueden ser cerdos, gatos, loros, caballos - Y ellos también pueden tener su propia interpretación de un sonido animal.

```C#
class Animal  // Clase base (Padre)
{
  public void sonidoAnimal()
  {
    Console.WriteLine("El animal ha hecho un sonido");
  }
}

class Cerdo : Animal  // Clase derivada (hijo)
{
  public void sonidoAnimal()
  {
    Console.WriteLine("El cerdo dice: oink, oink");
  }
}

class Gato : Animal  // Clase derivada (hijo)
{
  public void sonidoAnimal()
  {
    Console.WriteLine("El gato dice: meow, meow");
  }
}
```

Ahora podemos crear los objetos `Cerdo` y `Gato` y llamar al método `sonidoAnimal()` en ambos:

```C#
class Animal  // Clase base (Padre)
{
  public void sonidoAnimal()
  {
    Console.WriteLine("El animal hace un sonido");
  }
}

class Cerdo : Animal  // Clase derivada (hijo)
{
  public void sonidoAnimal()
  {
    Console.WriteLine("El cerdo dice: oink, oink");
  }
}

class Gato : Animal  // Clase derivada (hijo)
{
  public void sonidoAnimal()
  {
    Console.WriteLine("El gato dice: meow, meow");
  }
}

class Programa
{
  static void Main(string[] args)
  {
    Animal miAnimal = new Animal();  // Crear un objeto Animal
    Animal miCerdo = new Cerdo();  // Crear un objeto Cerdo
    Animal miGato = new Gato();  // Crear un objeto Gato

    miAnimal.sonidoAnimal();
    miCerdo.sonidoAnimal();
    miGato.sonidoAnimal();
  }
}
```

OJO!!!
Te habrás dado cuenta que lo que te muestra no es precisamente lo que esperabas y eso es debido a que la clase padre sobreescribe a las clases hijo cuándo comparten el mismo nombre.

Pero C# te da una opción de sobreescribir la clase padre, añadiendo la palabra clave `virtual` al método dentro de la clase hija y usando la palabra clave `override` por cada clase hija:

```C#
    class Animal  
    {
        public virtual void SonidoAnimal()
        {
            Console.WriteLine("El animal hace un sonido");
        }
    }

    class Cerdo : Animal  
    {
        public override void SonidoAnimal()
        {
            Console.WriteLine("El cerdo dice: oink, oink");
        }
    }

    class Gato : Animal  
    {
        public override void SonidoAnimal()
        {
            Console.WriteLine("El gato dice: meow, meow");
        }
    }

    class Programa
    {
        static void Main(string[] args)
        {
            Animal miAnimal = new Animal();  
            Animal miCerdo = new Cerdo();  
            Animal miGato = new Gato();  

            miAnimal.SonidoAnimal();
            miCerdo.SonidoAnimal();
            miGato.SonidoAnimal();
        }
    }
```

### [Abstracto](#abstracto)

[Índice](#índice)
Los datos abstractos son los procesos que ocultan ciertos detalles y muestran solo la información esencial al usuario.
Conseguir que algo sea abstracto es mediante clases abstractas o interfaces.

La palabra clave `abstract` se usa para clases y métodos:

- Clases abstractas: es una clase restringida que no puede ser usada para crear objetos (para acceder, debe ser eheredado de otra clase).

- Métodos abstractos: solo se puede usar en una clase abstracta, y no tiene cuerpo. El cuerpo es proporcionado por la clase derivada (heredada).

Una clase abstracta puede tener ambos métodos abstractos y normales:

```C#
abstract class Animal
{
  public abstract void sonidoAnimal();
  public void dormir()
  {
    Console.WriteLine("Zzz");
  }
}
```

En el ejemplo de arriba, no es posible crear un objeto de la clase Animal:

Para acceder a una clase abstracta, debe de ser de otra clase heredada. Vamos a convertir la clase Animal del capitulo de polimorfismo a una clase abstracta.

```C#
// Clase abstracta
abstract class Animal
{
  // Método abstracto (no tiene un cuerpo)
  public abstract void sonidoAnimal();
  // Método normal
  public void dormir()
  {
    Console.WriteLine("Zzz");
  }
}

// Clases derivadas (heredadas de animal)
class Cerdo : Animal
{
  public override void sonidoAnimal()
  {
    // El cuerpo de sonidoAnimal() se le proporciona aquí
    Console.WriteLine("El cerdo dice: Oink, oink");
  }
}

class Programa
{
  static void Main(string[] args)
  {
    Cerdo miCerdo = new Cerdo(); // Creas un objeto Cerdo
    miCerdo.sonidoAnimal();  // Llama al método abstracto
    miCerdo.dormir();  // Llama al método normal
  }
}
```

¿Porqué y cuándo usar clases y métodos abstractos?

Para obtener seguridad - esconder ciertos detalles y solo mostrar los detalles importantes de un objeto.

Los abstractos también se pueden hacer con interfaces.

### [Interfaces](#interfaces)

[Índice](#índice)
Otra forma de hacer abstractos en C#, es con interfaces.

Una `interface` es completamente una "clase abstracta", el cuál solo contiene métodos abstractos y propiedades (con cuerpos vacíos):

```C#
// interfaz
interface Animal
{
  void sonidoAnimal(); // método de interfaz (no tiene cuerpo)
  void correr(); // método de interfaz (no tiene cuerpo)
}
```

Se considera de buenas prácticas el empezar con la letra "I" al principio de una interfaz, esto hará más fácil para ti y para otros recordar que eso es una interfaz y no una clase.

Por defecto, los miembros de una interfaz son abstractos y públicos.

Las interfaces pueden contener propiedades y métodos, pero no campos.

Para acceder a los métodos de las interfaces, la interfaz debe ser implementada (como heredada) por otra clase. Para implementar una interfaz, usa el símbolo `:` (como si fuera a heredar). El cuerpo del método de la interfaz es proporcionado por el implemento de la clase. Date cuenta que no tienes que usar la palabra clave `override` cuándo implementas una interfaz.

```C#
// Interfaz
interface IAnimal
{
  void sonidoAnimal(); // método de interfaz (no tiene cuerpo)
}

// Cerdo implementa la interfaz de IAnimal
class Cerdo : IAnimal
{
  public void sonidoAnimal()
  {
    // El cuerpo de sonidoAnimal se le proporciona aquí
    Console.WriteLine("El cerdo dice: Oink, oink");
  }
}

class Programa
{
  static void Main(string[] args)
  {
    Cerdo miCerdo = new Cerdo();  // Crea un objeto de cerdo
    miCerdo.sonidoAnimal();
  }
}
```

OJO!!!

- Como en clases abstractas, las interfaces no se pueden usar para crear objetos.
- Los métodos de la interfaz no tienen cuerpo - el cuerpo es proporcionado por el implemento de la clase
- En la implementación de una interfaz, debes anular(override) todos sus métodos
- Las interfaces pueden contener propiedades y métodos, pero no campos ni variables
- Los miembros de una interfaz por defecto son `abstract` y `public`
- Una interfaz no puede contener un constructor

¿Porqué y cuándo usar interfaces?

- Para obtener seguridad - esconder ciertos detalles y solo mostrar los detalles importantes de un objeto.

- C# no soporta "múltiples heredaciones" (una clase solo puede heredar de una clase base). De todas formas, se puede conseguir con las interfaces, porque la clase puede implementar múltiples interfaces.

#### Múltiples interfaces

Para implementar múltiples interfaces, separalos con una coma:

```C#
    interface IPrimeraInterfaz
    {
        void miMetodo(); // metodo de la interfaz
    }

    interface ISegundaInterfaz
    {
        void miOtroMetodo(); // metodo de la interfaz
    }

    // Implementa múltiples interfaces
    class ClaseDemo : IPrimeraInterfaz, ISegundaInterfaz
    {
        public void miMetodo()
        {
            Console.WriteLine("Algo de texto...");
        }
        public void miOtroMetodo()
        {
            Console.WriteLine("Algo de texto...");
        }
    }

    class Programa
    {
        static void Main(string[] args)
        {
            ClaseDemo miObjeto = new ClaseDemo();
            miObjeto.miMetodo();
            miObjeto.miOtroMetodo();
        }
    }
```

### [Enums](#enums)

[Índice](#índice)
Un `enum` es una clase especial que representa un grupo de constantes.

Para crear un `enum`, usa la palabra clave `enum` (en vez de `class` o `interface`), y separa los elementos con una coma:

```C#
enum Nivel
{
  Bajo,
  Medio,
  Alto
}

// Puedes acceder a los elementos de enum con un punto

Nivel miVariable = Nivel.Medio;
Console.WriteLine(miVariable);
```

Enum es una abreviación para enumeración, que significa "específicamente listado".

#### Enum dentro de una clase

También puedes tener un `enum` dentro de una clase:

```C#
class Programa
{
  enum Nivel
  {
    Bajo,
    Medio,
    Alto
  }
  static void Main(string[] args)
  {
    Nivel miVariable = Nivel.Medio;
    Console.WriteLine(miVariable);
  }
}

// Muestra medio
```

#### Valores de enum

Por defecto, el primer elemento de un enum tiene el valor de cero. el segundo tiene el valor de 1, y así sucesivamente.

Para obtener el valor íntegro de un elemento, debes hacer una conversión explícita del elemento a `int`:

```C#
    class Programa
    {
        enum Meses
        {
            Enero,    // 0
            Febrero,  // 1
            Marzo,    // 2
            Abril,    // 3
            Mayo,     // 4
            Junio,    // 5
            Julio     // 6
        }

        static void Main(string[] args)
        {
            int miNumero = (int)Meses.Abril;
            Console.WriteLine(miNumero);
        }

        // Muestra 3
    }
```

También puedes asignar tus propios valores para enum, y los siguientes elementos actualizarán sus números acuerdo al cambio:

```C#
    class Programa
    {
        enum Meses
        {
            Enero,    // 0
            Febrero,  // 1
            Marzo = 6,  // 6
            Abril,    // 7
            Mayo,     // 8
            Junio,    // 9
            Julio     // 10
        }

        static void Main(string[] args)
        {
            int miNumero = (int)Meses.Abril;
            Console.WriteLine(miNumero);
        }

        // Mostrará 7
    }
```

#### Enum en un switch

Los enums usualmente se usan en `switch` para comprobar que los valores se corresponden:

```C#
    class Programa
    {
        enum Nivel
        {
            Bajo,
            Medio,
            Alto
        }

        static void Main(string[] args)
        {
            Nivel miVariable = Nivel.Medio;
            switch (miVariable)
            {
                case Nivel.Bajo:
                    Console.WriteLine("Nivel Bajo");
                    break;
                case Nivel.Medio:
                    Console.WriteLine("Nivel Medio");
                    break;
                case Nivel.Alto:
                    Console.WriteLine("Nivel Alto");
                    break;
            }
        }

        // Mostrará Nivel Medio
    }
```

¿Porqué y cuándo usar los enums?

Usa los enums cuándo tengas valores que sepas que no van a cambiar, como meses, días, colores. cartas, etc.

### [Archivos](#archivos)

[Índice](#índice)
La clase `File` del namespace `System.IO`, nos permite trabajar con archivos:

```C#
using System.IO;  // Incluye el namespace de System.IO

File.ArchivoMetodos();  // Usa la clase File con métodos
```

La clase `File` tiene muchos métodos útiles para crear y obtener información de los archivos. Por ejemplo:

- `AppendText()` -> Añade un texto al final de un archivo existente
- `Copy()` -> Copia un archivo
- `Create()` -> Crea o sobreescribe un archivo
- `Delete()` -> Elimina un archivo
- `Exists()` -> Comprueba si el archivo existe
- `ReadAllText()` -> Lee el contenido de un archivo
- `Replace()` -> Reemplaza el contenido de un archivo por el de otro
- `WriteAllText()` -> Crea un nuevo archivo y escribe el contenido. Si ya existe, se sobreescribirá

```C#
// Ejemplo

using System.IO;  // Incluye el namespace de System.IO

string textoEscrito = "¡Hola mundo!";  // Creas un string de texto
File.WriteAllText("nombreArchivo.txt", textoEscrito);  // Creas un archivo y escribes el contenido de textoEscrito en él

string textoLeido = File.ReadAllText("nombreArchivo.txt");  // Leé el contenido del archivo
Console.WriteLine(textoLeido);  // Muestra el contenido: ¡Hola mundo!
```

### [Excepciones](#excepciones)

[Índice](#índice)
Cuándo ejecutamos un código de C#, diferentes errores pueden ocurrir: errores de código hechos por el programador, errores por una mala entrada, u otros motivos.

Cuándo ocurre un error, C# normalmente se detiene y un mensaje de error aparecerá. El término técnico para esto sería: C# suelta una excepción (suelta un error).

#### Try y Catch

La declaración `try` te permite definir un bloque de código para comprobar si hay errores al ser ejecutado.

La declaración `catch` te permite definir un bloque de código ejecutado, si ha ocurrido un error wn wl bloque de `try`.

Las palabras clave `try` y `catch` vienen en pares:

```C#
try
{
  //  Bloque de código a probar
}
catch (Exception e)
{
  //  Bloque de código que se ocupa del error
}
```

Vamos a hacer un array con tres integrales:

```C#
int[] num = {1, 2, 3};
Console.WriteLine(num[10]); // error!
```

Esto evidentemente dará un error, pues no hay una posición 10.

Si ocurre un error, podemos usar `try...catch` para pillar el error y ejecutar algo de código para manejarlo.

En el siguiente ejemplo usaremos la variable dentro de bloque de catch (`e`) juntos para construir la propiedad `Message`, la cuál muestra un mensaje que explica la excepción:

```C#
try
{
  int[] num = {1, 2, 3};
  Console.WriteLine(num[10]);
}
catch (Exception e)
{
  Console.WriteLine(e.Message);
}
```

Lo que mostrará será: La posición está fuera de los límites del array.

También puedes poner tu propio mensaje de error:

```C#
try
{
  int[] num = {1, 2, 3};
  Console.WriteLine(num[10]);
}
catch (Exception e)
{
  Console.WriteLine("Algo has hecho mal");
}
```

#### Finally

La declaración `finally` te permite ejecutar código, después `try...catch`, independientemente del resultado:

```C#
try
{
  int[] num = {1, 2, 3};
  Console.WriteLine(num[10]);
}
catch (Exception e)
{
  Console.WriteLine("Algo has hecho mal");
}
finally
{
  Console.WriteLine("El proceso de 'try catch' ha finalizado.");
}
```

#### La palabra clave throw

La delcaración `throw` te permite crear un error personalizado.

`throw` se usa junto con clases de excepción. Hay varias clases de excepción en C#:
`ArithmeticException`, `FileNotFoundException`, `IndexOutOfRangeException`, `TimeOutException`, etc:

```C#
static void comprobarEdad(int age)
{
  if (age < 18)
  {
    throw new ArithmeticException("Acceso denegado - Debes tener por lo menos 18 años.");
  }
  else
  {
    Console.WriteLine("Acceso concedido - ¡Eres lo suficientemente mayor!");
  }
}

static void Main(string[] args)
{
  comprobarEdad(15);
}
```
---

## [CRUD](#crud)

[Índice](#índice)

¿Qué es un CRUD?

El CRUD es un acrónimo que representa precisamente su función, son unas operaciones básicas que se pueden realizar en base de datos.

Estas operaciones aunque sean básicas son cruciales para el desarrollo de aplicaciones que interactúan con bases de datos o cualquier otro sistema de almacenamiento de información:

  - Create (Crear) -> Agregar nuevos datos o registros a una base de datos
  - Read (Leer) -> Consultar y obtener datos de la base de datos
  - Update (Actualizar) -> Modificar o actualizar datos existentes en la base de datos
  - Delete (Eliminar) -> Eliminar datos o registros de la base datos

Antes de hacer nuestro CRUD debemos hacernos una base de datos. Abriremos la terminal y haremos lo siguiente:

```consola
mysql -u root -p
```

```MySQL
-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS Pokedex;

-- Seleccionar la base de datos
USE Pokedex;

-- Crear la tabla de Pokemon
CREATE TABLE IF NOT EXISTS Pokemon (
    Id INT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Tipo1 VARCHAR(20) NOT NULL,
    Tipo2 VARCHAR(20),
    Evolucion BOOLEAN
);

-- Insertamos 6 Pokemon
INSERT INTO Pokemon (Id, Nombre, Tipo1, Tipo2, Evolucion) VALUES
(1, 'Bulbasaur', 'Planta', 'Veneno', TRUE),
(2, 'Ivysaur', 'Planta', 'Veneno', TRUE),
(3, 'Venusaur', 'Planta', 'Veneno', FALSE),
(4, 'Charmander','Fuego', NULL, TRUE),
(5, 'Charmeleon', 'Fuego', NULL, TRUE),
(6, 'Charizard', 'Fuego', 'Volador', FALSE);

-- Verificar que los datos se han insertado correctamente
SELECT * FROM Pokemon;
```

Ahora nos vamos a crear una solución de consola, Archivo>Nueva solución>Otro>.NET>Proyecto consola.

Para trabajar con la base de datos tendremos que agregar el paquete por NuGet, con nuestra solución abierta te metes en Proyecto>Agregar paquetes NuGet y buscamos Mysql.Data, te permitirá elegir la versión antes de añadir el paquete, en mi caso he cogido el 6.10.9.

Ya lo tenemos todo listo para empezar a trabajar. En un archivo haremos la conexion y manejo con la base de datos:

```C#
// El archivo ManejoBBDD.cs

using System;
using MySql.Data.MySqlClient; // Usamos los paquetes que hemos agregado de MySQL

namespace CRUD
{
    public class ManejoBBDD
    {
        private string connectionString;
        private MySqlConnection connection;

        public ManejoBBDD(string server, string database, string uid, string password)
        {
            connectionString = $"SERVER={server};DATABASE={database};UID={uid};PASSWORD={password};";
            connection = new MySqlConnection(connectionString);
        }

        // Método Insertar
        public void Insert(string query)
        {
            if (OpenConnection())
            {
                MySqlCommand cmd = new MySqlCommand(query, connection);
                cmd.ExecuteNonQuery();
                CloseConnection();
            }
        }

        // Método Actualizar
        public void Update(string query)
        {
            if (OpenConnection())
            {
                MySqlCommand cmd = new MySqlCommand(query, connection);
                cmd.ExecuteNonQuery();
                CloseConnection();
            }
        }

        // Método Borrar
        public void Delete(string query)
        {
            if (OpenConnection())
            {
                MySqlCommand cmd = new MySqlCommand(query, connection);
                cmd.ExecuteNonQuery();
                CloseConnection();
            }
        }

        // Método Mostrar la tabla Pokemon
        public void Select(string query)
        {
            if (OpenConnection())
            {
                MySqlCommand cmd = new MySqlCommand(query, connection);
                MySqlDataReader dataReader = cmd.ExecuteReader();

                while (dataReader.Read())
                {
                    Console.WriteLine($"ID: {dataReader["Id"]}, Nombre: {dataReader["Nombre"]}, Tipo1: {dataReader["Tipo1"]}, Tipo2: {dataReader["Tipo2"]}, Evolucion: {dataReader["Evolucion"]}");
                }

                dataReader.Close();
                CloseConnection();
            }
        }

        private bool OpenConnection()
        {
            try
            {
                connection.Open();
                return true;
            }
            catch (MySqlException ex)
            {
                Console.WriteLine($"Error: {ex.Message}");
                return false;
            }
        }

        private bool CloseConnection()
        {
            try
            {
                connection.Close();
                return true;
            }
            catch (MySqlException ex)
            {
                Console.WriteLine($"Error: {ex.Message}");
                return false;
            }
        }
    }
}
```

Ahora haremos lo que sería la "interfaz de usuario", que estando en consola estamos algo limitados, pero aún así se pueden hacer cositas:

```C#
// El archivo Pokedex.cs

using System;

namespace CRUD
{
    class Program
    {
        static void Main(string[] args)
        {
            /* 
            Recuerda cambiar localhost por el nombre de tu servidor,
            Pokedex por el nombre de tu base de datos,
            root por el nombre de usuario de mysql
            y root por la contraseña de tu usuario de mysql
            */
            ManejoBBDD manejoBBDD = new ManejoBBDD("localhost", "Pokedex", "root", "root");

            // Menú de elección que vé el usuario
            while (true)
            {
                Console.WriteLine("Seleccione una opción:");
                Console.WriteLine("1. Insertar Pokémon");
                Console.WriteLine("2. Actualizar Pokémon");
                Console.WriteLine("3. Eliminar Pokémon");
                Console.WriteLine("4. Mostrar todos los Pokémon");
                Console.WriteLine("5. Salir");
                Console.Write("Opción: ");

                string option = Console.ReadLine();

                switch (option)
                {
                    // Aquí sería la opción de insertar un Pokemon
                    case "1":
                        Console.Write("Ingrese ID del Pokémon: ");
                        int id = int.Parse(Console.ReadLine());
                        Console.Write("Ingrese nombre del Pokémon: ");
                        string nombre = Console.ReadLine();
                        Console.Write("Ingrese tipo 1: ");
                        string tipo1 = Console.ReadLine();
                        Console.Write("Ingrese tipo 2 (opcional, presione Enter para omitir): ");
                        string tipo2 = Console.ReadLine();
                        Console.Write("Ingrese evolución (opcional, presione Enter para omitir): ");
                        string evolucion = Console.ReadLine();

                        // Construir la consulta INSERT basada en la presencia de tipo2 y evolucion
                        string insertQuery;
                        if (string.IsNullOrEmpty(tipo2) && string.IsNullOrEmpty(evolucion))
                        {
                            insertQuery = $"INSERT INTO Pokemon (Id, Nombre, Tipo1) VALUES ({id}, '{nombre}', '{tipo1}')";
                        }
                        else if (string.IsNullOrEmpty(evolucion))
                        {
                            insertQuery = $"INSERT INTO Pokemon (Id, Nombre, Tipo1, Tipo2) VALUES ({id}, '{nombre}', '{tipo1}', '{tipo2}')";
                        }
                        else
                        {
                            insertQuery = $"INSERT INTO Pokemon (Id, Nombre, Tipo1, Tipo2, Evolucion) VALUES ({id}, '{nombre}', '{tipo1}', '{tipo2}', '{evolucion}')";
                        }
                        manejoBBDD.Insert(insertQuery);
                        break;

                    // Opción de modificar una entrada
                    case "2":
                        Console.Write("Ingrese ID del Pokémon a actualizar: ");
                        int idToUpdate = int.Parse(Console.ReadLine());
                        Console.Write("Ingrese nuevo nombre del Pokémon: ");
                        string nuevoNombre = Console.ReadLine();
                        Console.Write("Ingrese nuevo tipo 1: ");
                        string nuevoTipo1 = Console.ReadLine();
                        Console.Write("¿Nuevo tipo 2 (opcional)? (Deje en blanco si no hay nuevo tipo 2): ");
                        string nuevoTipo2 = Console.ReadLine();
                        Console.Write("Ingrese nueva evolución: ");
                        string nuevaEvolucion = Console.ReadLine();

                        string updateQuery;
                        if (string.IsNullOrEmpty(nuevoTipo2))
                        {
                            updateQuery = $"UPDATE Pokemon SET Nombre = '{nuevoNombre}', Tipo1 = '{nuevoTipo1}', Evolucion = '{nuevaEvolucion}' WHERE Id = {idToUpdate}";
                        }
                        else
                        {
                            updateQuery = $"UPDATE Pokemon SET Nombre = '{nuevoNombre}', Tipo1 = '{nuevoTipo1}', Tipo2 = '{nuevoTipo2}', Evolucion = '{nuevaEvolucion}' WHERE Id = {idToUpdate}";
                        }

                        manejoBBDD.Update(updateQuery);
                        break;
                    
                    // Opción de eliminar una entrada
                    case "3":
                        Console.Write("Ingrese ID del Pokémon a eliminar: ");
                        int idToDelete = int.Parse(Console.ReadLine());

                        string deleteQuery = $"DELETE FROM Pokemon WHERE Id = {idToDelete}";
                        manejoBBDD.Delete(deleteQuery);
                        break;
                    
                    // Opción que muestra la tabla Pokemon
                    case "4":
                        string selectQuery = "SELECT * FROM Pokemon";
                        manejoBBDD.Select(selectQuery);
                        break;

                    // Opción de salida
                    case "5":
                        Console.WriteLine("Saliendo...");
                        Environment.Exit(0);
                        break;
                    default:
                        Console.WriteLine("Opción no válida.");
                        break;
                }
            }
        }
    }
}
```
