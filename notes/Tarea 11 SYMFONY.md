---
title: Tarea 11 SYMFONY
created: '2024-06-04T16:48:42.609Z'
modified: '2024-06-05T19:19:02.549Z'
---

# Tarea 11 SYMFONY 

1. Ir al documentacion de Symfony https://symfony.com/doc/current/setup.html

```console
/var/www/html
symfony new tarea-11 --version="7.1.*" --webapp
```
Luego entrar en el proyecto
```console
 cd tarea-11/
```
Despues agregar el proyecto en el VSC y crear el README.md.

Para crear las dependencias entrar https://symfony.com/doc/current/page_creation.html
### Dependencias
```console
composer require --dev symfony/maker-bundle
composer require twig 
composer require symfony/form 
composer require symfony/orm-pack
```
***
2. Abrir el archivo .env y cambiar la linea de mysql por esto -> DATABASE_URL="mysql://root:root@127.0.0.1:5432/tarea11-symfony?serverVersion=16&charset=utf8"
***
3. Primero crear la BBDD antes de crear las entidades.
```console
php bin/console doctrine:database:create
```
Luego crear las entidades segun el UML, la principal es Tipo.

```console
php bin/console make:entity 
```
Seguir los pasos y hacer con las dos tablas.(RECUERDA: las id no se ponen porque se genera solo.)

Luego hacer la migracion

```console
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```
***
4. Hay que crear dos controladores
```console
php bin/console make:controller
```
Tambien se puede hacer del tiron poniendo el nombre
```console
php bin/console make:controller Tipos
```
***
5. Hacer el README.md para poner los endpoints
***
6. La ruta es: #[Route('/tipos', name: 'app_tipos_')] **se pone encima de la clase**
***
7. La ruta es: #[Route('/coches', name: 'app_coches')] **se pone encima de la clase**
***
8.  Se crea una ruta con inserccion /insertar/{nombre}
- http://localhost:8000/tipos/insertar/electrico
- http://localhost:8000/tipos/insertar/hibrido-enchufable
- http://localhost:8000/tipos/insertar/hibrido

```console
#[Route('/tipos', name: 'app_tipos_')]
class TiposController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(): Response
    {
        return $this->render('tipos/index.html.twig', [
            'controller_name' => 'TiposController',
        ]);
    }

    #[Route('/insertar/{nombre}', name: 'insertarnombre')]
    public function insertarnombre(ManagerRegistry $doctrine, string $nombre): Response
    {   $gestorEntidades = $doctrine -> getManager();
        $tipo = new Tipos();
        $tipo-> setNombre($nombre);

        $gestorEntidades->persist($tipo);
        $gestorEntidades->flush();

        return new Response ("tipo insertado");
    }
    
}
```
Antes de probar las url en mysql:
```console
 SELECT * FROM tipos;
```
Y despues de probar las rutas volemos a mysql para comprobar que se han insertado

```console
mysql>  SELECT * FROM tipos;
+----+--------------------+
| id | nombre             |
+----+--------------------+
|  1 | electrico          |
|  2 | hibrido-enchufable |
|  3 | hibrido            |
+----+--------------------+
3 rows in set (0,00 sec)

```
***
9. 
```console
#[Route('/insertar-coches', name: 'insertarcoches')]
    public function InsetarCoches(ManagerRegistry $doctrine): Response
    {
        $gestorEntidades = $doctrine->getManager();
        //definimos coche
        $coches = [
            ["modelo"=> "Kona", "potencia"=>156,"precio"=>39650.45, "stock"=>true, "tipo"=>1],
            ["modelo"=> "Kona", "potencia"=>214,"precio"=>44850.45, "stock"=>false, "tipo"=>2],
            ["modelo"=> "Kona", "potencia"=>125,"precio"=>29650.45, "stock"=>true, "tipo"=>3],
        ];

        foreach ($coches as $coche){
            $nuevoCoche= new Coches();
            $nuevoCoche->setModelo($coche['modelo']);
            $nuevoCoche->setPotencia($coche['potencia']);
            $nuevoCoche->setPrecio($coche['precio']);
            $nuevoCoche->setStock($coche['stock']);

            //Introducimos la clave foranea FK

            $tipo= new Tipos();
            $repoTipo= $gestorEntidades->getRepository(Tipos::class);
            $tipo = $repoTipo->find($coche['tipo']);
            $nuevoCoche->setIdTipo($tipo);

            $gestorEntidades->persist($nuevoCoche);
            $gestorEntidades->flush();
        }

        return new Response("Coches insertados");
    }
}
```
Y luego comprobarlo en Mysql

```console
mysql> SELECT * FROM coches;
+----+------------+--------+----------+----------+-------+
| id | id_tipo_id | modelo | potencia | precio   | stock |
+----+------------+--------+----------+----------+-------+
|  1 |          1 | Kona   |      156 | 39650.45 |     1 |
|  2 |          2 | Kona   |      214 | 44850.45 |     0 |
|  3 |          3 | Kona   |      125 | 29650.45 |     1 |
+----+------------+--------+----------+----------+-------+
3 rows in set (0,00 sec)
```
***
10. 
```console
#[Route('/verCochesJSON', name: 'ver-cochesJSON')]
    public function verCochesJSON(CochesRepository $repoCoches): Response
    {

        $coches = $repoCoches->findAll();
        $datos = [];
        foreach
         ($coches as $coche) {
            $datos[] = [
                "id" => $coche->getid(),
                "modelo" => $coche->getModelo(),
                "Potencia" => $coche->getPotencia(),
                "precio" => $coche->getPrecio(),
                "stock" => $coche->isStock()?"SI":"NO",
                "tipo" => $coche->getIdTipo()->getNombre(),
            ];
        }

        return new JsonResponse($datos);
    }
}

```
***
11. 
```console
#[Route('/ver-coches', name: 'ver-coches')]
    public function verCoches(CochesRepository $repoCoches): Response
    {
        $coches = $repoCoches->findAll();
        $datos = [];
        foreach ($coches as $coche) {
            $datos[] = [
                "id" => $coche->getid(),
                "modelo" => $coche->getModelo(),
                "Potencia" => $coche->getPotencia(),
                "precio" => $coche->getPrecio(),
                "stock" => $coche->isStock() ? "SI" : "NO",
                "tipo" => $coche->getIdTipo()->getNombre(),
            ];
        }

        return $this->render('coches/index.html.twig', [
            'controller_name' => 'CochesController',
            'Coches'=>$datos,
        ]);
    }
  
```
```console
   <section class="container mt-4">
			<h1>Coches</h1>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Modelo</th>
						<th>Potencia</th>
						<th>Precio</th>
						<th>Stock</th>
						<th>Tipo</th>
					</tr>
				</thead>
				<tbody>
					{% for coche in Coches %}
						<tr>
							<td>{{coche.id}}</td>
							<td>{{coche.modelo}}</td>
							<td>{{coche.Potencia}}</td>
							<td>{{coche.precio}}</td>
							<td>{{coche.stock}}</td>
							<td>{{coche.tipo}}</td>
						</tr>
					{% endfor %}
				</tbody>

			</table>

		</section>
```
***
12.
```console
#[Route('/cambia-coche/{id}/{potencia}/{precio}', name: 'cambiaCoche')]
    public function cambiaCoche(int $id, int $potencia, float $precio, EntityManagerInterface $gestorEntidades, CochesRepository $repoCoches): Response

    {
        $coche = $repoCoches->find($id);
        $coche->setPotencia($potencia);
        $coche->setPrecio($precio);

        $gestorEntidades->flush();
        
        return $this->redirectToRoute("app_coches_ver-coches");
    }
```
***
13.
```console
 #[Route('/elimina-coche/{id}/{potencia}/{precio}', name: 'eliminaCoche')]
    public function eliminaCoche(int $id, EntityManagerInterface $gestorEntidades, CochesRepository $repoCoches): Response

    {
        $coche = $repoCoches->find($id);
        
        $gestorEntidades->remove($coche);
        
        return $this->redirectToRoute("app_coches_ver-coches");

        }
```


