# Creación de un CRUD

## Creación en ecosistema

```bash
php artisan make:model <nombre_del_modelo> --all
```

Esto comando crea:
* Una migración (Crea las tablas en la DB)
* Una fábrica (Crea valores para una fila de la tabla)
* Un "seeder" (invoca la fábrica de un model e insertar los valores en la tabla)
* El controlador (Métodos que voy a ejecutar ante solicitudes del cliente)
* El modelo (Clase que equivale al esquema de datos de la correspondiente tabla de la DB y realizar peticiones básicas como insertar, borrar, consultar, actualizar)
* El "request" (Autoriza, valida los datos del formulario)
* La "política" (La normativa que determina las normas del modelo)
* Las rutas (Redirigen la página a las distintas vistas que se le ofrece)

## Ajuste de los valores por defecto

El comando make:model utiliza como idioma por defecto el inglés, por lo que el plural de aquellas palabras que terminen en consonante no tendrá sentido semánticamente 
(por ejemplo: Camion -> Camions), por lo que debemos ajustar el nombre con el que se crea la tabla en la base de datos durante las migraciones.
Por ello, debemos hacer cambios en el modelo:
1. Añadimos una variable al modelo llamada $table
    ```php
    protected $table = "";
    ```
2. Le atribuimos al valor $table el nombre que queremos darle a la tabla
   ```php
   protected $table = "nombre_de_tabla";
   ```


## Creación las rutas

Para que nuestra página pueda llegar al CRUD que hemos creado, debemos establecer las rutas que queremos 
que nuestra página siga para poder alcanzar nuestro objetivo. 

En la carpeta Routes, existe un archivo llamado web.php, el cual contiene todas las rutas de nuestra página. En él,
debemos escribir la ruta a nuestro CRUD. Además, el web.php también nos permite definir los recursos que
queremos que la página utilice. Un ejemplo de recurso sería el siguiente:

```php
Route::resource("profesores", ProfesorController::class);
```

## Definición de tablas

A la hora de definir las tablas, es importante asegurarse de que todas las columnas tienen definido un tipo de valor y un nombre de columna. 
Para ello, hacemos empleo de la función up() de las migraciones. Dentro de esta misma, se nos tiene que haber creado una línea de código similar
a la siguiente:
```php
Schema::create('nombre_de_tabla', function (Blueprint $table) {
    $table->id();
    $table->timestamps();
});
```
A este bloque de código debemos añadirle los parámetros que queramos utilizar. Como ejemplo, utilizaré una tabla llamada "profesores" con los parámetros que creo pertinentes:
```php
Schema::create('profesores', function (Blueprint $table) {
    $table->id();
    $table->string("nombre");
    $table->string("apellidos");
    $table->string("email");
    $table->string("departamento");
    $table->timestamps();
});
```

## Migración de tabla

Para crear y llenar las tablas, debemos recurrir a las migraciones.

Para empezar, en el caso de que queramos llenar una tabla con datos generados aleatoriamente, Laravel nos ofrece una serie de funciones para generar datos con ciertas condiciones.
Retomando el ejemplo del apartado anterior

```bash
php artisan migrate --seed
```
Si en lugar de llenar la tabla queremos actualizar la estructura de las tablas, podemos usar el siguiente comando:
```bash
php artisan migrate:fresh
```
