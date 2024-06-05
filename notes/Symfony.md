---
pinned: true
title: Symfony
created: '2024-05-17T15:15:41.313Z'
modified: '2024-06-04T17:25:05.602Z'
---

# Symfony

[Symfony](https://symfony.com/doc/current/index.html)

+ modelo - trabaja con las entidades, msql. Doctrine
+ vista - Twig/angular
+ controlador - php que es el nucleo de symfony

***

Para actualizar symfony ir a [Bajar Symfony](https://symfony.com/download) 
usar en descargas `wget https://get.symfony.com/cli/installer -O - | bash` (el mas actuarl, el primero de la lista)

Para crear proyecto de symfony se puede hacer en cualquier carpeta de tu pc, pero lo ideal es hacerla en apache. Entonces para crearlo entrar en la consola
 - `cd /var/www/html`
y luego poner el comando 
 - `symfony new 'nombre proyecgto' --webapp`
  `symfony new 'nombre proyecgto' --version="7.0.*" --webapp`
  esta ultima para hacer un proyecto en una version en concreta.

 - Para borrarlo hay que poner `sudo rm -r "nombredelproyecto/"`
Es mas rápido hacerlo por consola.
 ***

 Para abrir symfony nos metemos en la teminal donde esta el proyecto. Una vez dentro poner `symfony server:start` para abrir el servidor , luego abrimo en la terminal otra 2 ventana tb con el proyecto,  en 1  esa ventana intalamos todo lo que necesitamos del proyecto y en la otra con el MySQL `mysql -u root -p`. Para salir escribimos `exit`
***
### ¿? Pregunta examen - *¿hace falta que Symfony este instalado en apache? No. Tiene su propio servidor.* 
### ¿que es un microservicio? *una miniaplicacion funcionalidad nueva/unica que se añade a una aplicacion web completa*
### cuales son la version lts de symfony? *la 5.4 y la 6.4 la version LST son las que tienen soporte, mantenimiento y actualizacion.*
### que son las migraciones = convertir las entidades (tablas) en un archivo sql.
### cual es el gestor del BBDD que viene por defecto en symfony?? Postgresql, el msql, el mariadb y el sqlite
***
La principal novedad de Symfony 7 es que el **tipado**. Ahora todo esta tipado, de esta forma hay menos errores.

El ciclo de vida es http Solicitud y respuesta (request y response).

## Dependencias que instalar en Symfony.

Las dependencias se instala en cada proyecto.

- `composer require --dev symfony/maker-bundle` -> Para crear controladores, formularios, etc.
- `composer require twig` -> Es el lenguanje de Front
- `composer require symfony/form` -> Formularios
- `composer require symfony/orm-pack` -> Doctrine

 Para crear controlador  php bin/console make:controller (luego poner el nombre del controlador)   
*ATENCIÓN* 
------------------
Annotations y extra-bundle ya no se instalan...

composer require annotations
    -> Anotaciones
composer require sensio/framework-extra-bundle

Para borrarlos:
composer remove sensio/framework-extra-bundle
composer remove annotations
***
Hay dos formas de crear una ruta:
  1. Con anotaciones. 
  2. Crear rutas (ir al archivo routes.yaml). Hay varias rutas por ejemplo:  /aleatorio-> ale /inicio->ini /formulario-> form

  Desarrollo ENRUTAMIENTO: 
  a. Controladores + rutas:
  b. php bin/console -> para ver todos los comandos
  c. router php
  d. router xml

  php bin/console make:controller - y despues elegir el nombre del controlador.

> php bin/console make:controller
Choose a name for your controller class (e.g. GrumpyElephantController):
-> Aleatorio
created: src/Controller/AleatorioController.php
created: templates/aleatorio/index.html.twig
Success


Añadimos el proyecto a VSC. Las carpetas que mas vamos a utilizar son: pag 8 manual symfony 6.

```
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route; //los uses son los librerias

class AleatoriosController extends AbstractController
{
    #[Route('/aleatorios', name: 'app_aleatorios')]
    public function index(): Response
    {
        return $this->render('aleatorios/index.html.twig', [
            'controller_name' => 'AleatoriosController',
        ]);
    }
}
```

*para hacer una pre-ruta hay que poner la ruta encima de la clase.
*no puede haber dos rutas con el mismo nombre, pero si una con distinto nombre.No se pueden repetir el nombre de la ruta, ni se pueden repetir las rutas

Para ver la lista de rutas poner en la consola `php bin/console debug:router`

A las nombres de las rutas les puedes quitar el app_aleatorios y dejarlos asi:
#[Route('/ej1', name: **'aleatorios'**)]
    public function index(): Response
    {
        return $this->render('aleatorios/index.html.twig', [
            'controller_name' => 'Mis Aleatorios',
        ]);
    }
    Para hacer una routar para el YAML esta en la carpeta confing y elugo el archivo router.yaml. En el archivo del yaml es muy importante las tabulaciones, ademas parecido al python, variable: valor.

## Metodos para los enrutamientos PERMITIDOS:
Consultar-> POST|GET
Insertar-> POST
Actualizar-> PUT
Borrar-> DELETE

***
A las rutas las denominamos "endpoints". Es una ruta que apunta a una base de datos.
***

Que es una API? Una API (del inglés, application programming interface, en español, interfaz de programación de aplicaciones)​ es una pieza de código que permite a diferentes aplicaciones comunicarse entre sí y compartir información y funcionalidades. Una API es un intermediario entre dos sistemas, que permite que una aplicación se comunique con otra y pida datos o acciones específicas.

Por ejemplo, si se tiene una app para móviles acerca de recetas y se hace una búsqueda de una determinada receta, se puede utilizar una API para que esta aplicación se comunique con el sitio web de recetas y pida las recetas que cumplen con los criterios de búsqueda. La API entonces se encarga de recibir la solicitud, buscar las recetas apropiadas y regresar los resultados a la aplicación. Una API es una forma de conectar diferentes aplicaciones y hacer que trabajen juntas de manera más eficiente y efectiva.​ Son usadas generalmente en las bibliotecas de programación.
Es el intermediario entre la vista y el modelo.
***
    
## Instalar boostrap en Symfony
INSTALAR BOOSTRAP5 EN SYMFONY7
1. Entrar en el proyecto, ejemplo:
cd /var/www/html/Pokedex
2. Instalar NPM en el proyecto y compilar
npm install
3. Instalamos Boostrap5
`npm install bootstrap@5`
NOTA: Si pide actualizar, hacerlo con sudo
`sudo npm -version 10.8.0`
4. Copiar el archivo de bootstrap a public
`mkdir public/css/`
`cp node_modules/bootstrap/dist/css/bootstrap.css public/css/`
5. En base.html.twig poner lo siguiente (en el head):
 <link rel="stylesheet" href="/css/bootstrap.css">

## Twig 3.9
https://twig.symfony.com/doc/3.x/
Los comentarios se escriben {# #}


## Doctrine
Symfony proporciona todas las herramientas necesarias para usar bases de datos en las aplicaciones gracias a Doctrine , el mejor conjunto de bibliotecas PHP para trabajar con bases de datos.
Estas herramientas admiten bases de datos relacionales como MySQL y PostgreSQL (o SQLite, que será el que usemos) y también bases de datos NoSQL como MongoDB.
En el archivo .env hay que cambiar:
DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=10.11.2-MariaDB&charset=utf8mb4" 
por 
DATABASE_URL="mysql://root:root@127.0.0.1:3306/Pokedex?serverVersion=8.0.32&charset=utf8mb4"

Y ahora nos creamos la base de datos
En MySQL->show databases;
Para borrar una data base es->drop databases "nombre";
En la segunda pestaña de symfony creamos la base de datos
```console
php bin/console doctrine:database:create
```
Para borrarla desde symfony 
```console
php bin/console doctrine:database:drop --force
```
Luego creamos la primera tabla, por consola.
Ahora vamos a crearnos una tabla. En Doctrine se le llama Entity (entidad) y no es mas que una clase que incluye atributos (campos) y sus correspondientes métodos setter y getter. Por convencion, las entidades empiezan por mayúsculas y los campos van en minúsculas
Para borrar si hago algo mal es ir a VSC en la carpeta SRC e ir a entidades y reporsitory y borrar desde ahi los archivos y volver a empezar.
```console
php bin/console make:entity

 Class name of the entity to create or update (e.g. DeliciousChef):
 > Categorias

 Add the ability to broadcast entity updates using Symfony UX Turbo? (yes/no) [no]:
 > 

 created: src/Entity/Categorias.php
 created: src/Repository/CategoriasRepository.php
 
 Entity generated! Now let's add some fields!
 You can always add more fields later manually or by re-running this command.

 New property name (press <return> to stop adding fields):
 > 


           
  Success! 
           

 Next: When you're ready, create a migration with php bin/console make:migration

```
pg30
***
Cada entidad tiene 4metodos para hacer busquedas por defecto. son:


- find ID(solo para la id, $id) y findOneBy(busca por una array de parametro) da una categoria

- el tercero da un array de categoria findAll(), equivale a un SELECT * FROM "TABLE"
y el cuarto metodo findBy(como el findOneBY pero te saca un conjunto)
***
### 3 opciones para la salida:
- respuesta directa, un Response
- JSON
- Renderizado, twig
- Redireccion
***
PARA MySQL ponemos USE "nombre tabla"; y luego Describe "nombre de las tablas";
### Carpetas Básicas
Tabla de contenidos
bin -> Ejecutables principales del sistema
console -> php/bin console...
conﬁg -> Archivos de conﬁguración
routes -> Listado de rutas
services -> Listado de Servicios creados
migrations -> creación de migraciones de BBDD
public -> Páginas publicas
src -> Recursos del sistema
Controller -> Controladores (MVC)
Entity -> Entidades (objetos)
Repository -> Gestión de consultas
templates -> plantillas (twig)
var -> caché de la aplicación y registros (logs)
vendor -> Dependencias
bin -> Ejecutables de dependencias
doctrine -> BBDD
var-dump-server -> Backup BBDD
phpunit -> Test Unitarios
Symfony -> núcleo de la aplicación
sension -> Maker bundle


### como se llama esto #[Route('/pokemons', name: 'app_pokemons_')] class PokemonsController extends AbstractController

???

Se llama ruta de clase, porque todas las demas rutas empiezan por ella.

### que son la entidades? las tablas

### que metodos se usaban para insertar en la BBDD? el flush y el persist

### Archivos a enviar (examen)

1. .env
-> Donde se define conexión BBDD
2. Entidad1 (clase) -> Tabla1
3. Entidad2 (clase) -> Tabla2

4. Controlador Entidad1 
-> Endpoints (CRUD) y Formularios
5. Controlador Entidad2 
-> Endpoints (CRUD) y Formularios
6. OJO! Mandar también:
config/routes.yaml

7. Twig entidad1: 
/templates/entidad1/index.html.twig
8. Twig entidad2: 
/templates/entidad2/index.html.twig
9. README.md

crear las entidades
Insertar por array
insetar por paramentro
consultar ->json
consultar-> twig
actualizar
eliminar
formulario


# FORMULARIOS

Hay dos formas de crar formularios, nosotros vamos a dar 1.

a. crear formularios en los controladores (la que vamos a hacer). Es la mas sencilla.
b. crear el formulario por clase, se añade como un objeto

Hay que instalar las dependecias del formulario porque no vienen instaladas.
```console 
composer require --dev symfony/maker-bundle
composer require twig
composer require symfony/orm-pack
composer require symfony/form

```
Los formularios va en la tabla relacionada porque es donde estan la mayoria de los datos.

















