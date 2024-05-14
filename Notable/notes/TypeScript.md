---
title: TypeScript
created: '2024-02-24T09:55:01.289Z'
modified: '2024-02-26T13:57:08.621Z'
---

# TypeScript
--------------

[//]: # (version: 1.0)
[//]: # (author: Iván Rodríguez)
[//]: # (date: 2024-02-24)


# Tabla de contenidos
- [Tabla de contenidos](#tabla-de-contenidos)
  - [Introducción](#introducción)
  - [Instalación](#instalación)
    - [Seccion1](#seccion1)
  - [Capitulo 2](#capitulo-2)
    - [Subapartado 2.1](#subapartado-21)
  - [Capitulo 3](#capitulo-3)
    - [Seccion1](#seccion1-1)
    - [Seccion2](#seccion2)
      - [Seccion2.1](#seccion21)
  - [Clases](#clases)
  - [Clase 01 - 24/10](#clase-01---2410)
  - [4. Arrays](#4-arrays)
    - [4.1. Arrays multidimensionales](#41-arrays-multidimensionales)
    - [Citas Coloreadas](#citas-coloreadas)

<div style="page-break-after: always;"></div>


## Introducción
[Tabla de contenidos](#tabla-de-contenidos)


- URL
  - 
  - 


```console

```

## Instalación
[Tabla de contenidos](#tabla-de-contenidos)

> [!IMPORTANT]  
> No hace falta poner los proyectos de JavaScript en el servidor Apache. Lo hacemos así para centralizarlo todo en el mismo sitio.

> [!WARNING]  
> Debemos tener instalado npm. Si no es el caso, ver el manual de ElementaryOS.

- 1. Nos metemos en la raiz del proyecto
```console
mkdir /var/www/html/typescript
cd /var/www/html/typescript
sudo npm install -g typescript 
```

<div style="page-break-after: always;"></div>

### HolaMundo
[Tabla de contenidos](#tabla-de-contenidos)

Procedimiento para TypeScript:
1. Creamos el archivo HTML: Ejemplo-01.html
2. Cambiar valor atributo src: Ejemplo-01.js
3. Cambiar nombre archivo TS: Ejemplo-01.ts
4. Modificar código archivo TS
5. Compilar TS: tsc Ejemplo-01.ts
6. Probar en el navegador: Ejemplo-01.html

El procedimiento anterior se puede automatizar
> [!IMPORTANT]  
> Seria recomendable desactivar el autoguardado de VSCode.
1. Creamos el archivo de configuración de TypeScript
```json
# En la raiz del proyecto 
{
    "compilerOptions": {
        "module": "commonjs",
        "target": "ES5",
        "outDir": "ts-built",
        "rootDir": "."
    }
}
```
2. Ejecutar el siguiente archivo generar el script de TS
```console
# En la raiz del proyecto 
tsc -w
```
3. En el HTML debemos apuntar en el scr del script a ts-built/nombre_archivo

<div style="page-break-after: always;"></div>

## Capitulo 2
[Tabla de contenidos](#tabla-de-contenidos)

### Subapartado 2.1
[Tabla de contenidos](#tabla-de-contenidos)

<div style="page-break-after: always;"></div>


## Capitulo 3
[Tabla de contenidos](#tabla-de-contenidos)

- Recursos: 
  - 

```php
echo "Hola Mundo";
```

### Seccion1
[Tabla de contenidos](#tabla-de-contenidos)

```console
#...
```



### Seccion2
[Tabla de contenidos](#tabla-de-contenidos)

```console
#...
```


#### Seccion2.1
[Tabla de contenidos](#tabla-de-contenidos)

1. **negrita**

```console
sudo apt update
sudo apt upgrade
```

2. Hm^3^
    - H~2~O

- dfgdlfkgdlfkj
- dflgjdlfkj

- [X] Hm^3^
    - H~2~O


## Clases 
[Tabla de contenidos](#tabla-de-contenidos)


## Clase 01 - 24/10
[Tabla de contenidos](#tabla-de-contenidos)

- [Web Notable](https://notable.app/)
  - https://notable.app/static/pdfs/cheatsheet.pdf
- [ ] https://github.com/twbs/bootstrap
- [ ] https://github.com/mermaid-js/mermaid

---

- [Apuntes de Docker](Docker.md "Introducción")

> IMPORTANTE: Para hacer una captura de pantalla simplemente hazla y pegala!!

![](@attachment/Clipboard_2023-10-24-14-10-11.png)
:angel::angel::angel::angel:
```python
user = "fulano"
```


## 4. Arrays
[Tabla de contenidos](#tabla-de-contenidos)

```console
#
```

### 4.1. Arrays multidimensionales
[Tabla de contenidos](#tabla-de-contenidos)

```console
#
```


### Citas Coloreadas
[Tabla de contenidos](#tabla-de-contenidos)

> [!NOTE]  
> Highlights information that users should take into account, even when skimming.

> [!TIP]
> Optional information to help a user be more successful.

> [!IMPORTANT]  
> Crucial information necessary for users to succeed.

> [!WARNING]  
> Critical content demanding immediate user attention due to potential risks.

> [!CAUTION]
> Negative potential consequences of an action.
