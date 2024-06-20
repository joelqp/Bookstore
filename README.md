# BOOKSTORE

### Tienda de libros desarrollada con el stack tecnológico: Laravel, Bootstrap y MySQL.

---

### Algunas aclaraciones:
- Me decanté por no usar ningun kit de Laravel para mostrar más solidez en el aprendizaje de este framework.

- He decidido no hacer en cascada la relacion autores-libros para que, en el caso de eliminar un autor, los libros pertenecientes a él puedan cambiar a otro autor al seleccionar el boton de editar el libro.

- El proyecto, ademas de lo que se pide, incluye algunas implementaciones mas como ...


### Problemas encontrados:

- ...
---
## Resultados

#link video

#imagenes


---

## Instrucciones sobre la instalación
### Versiones
- PHP: 8.2

- Laravel: 10.x

- Bootstrap: 5.3

### Configuración

Asegurate de tener un archivo *.env* que sea una copia de *.env.example* donde solo cambies la configures la conexión a tu base de datos:

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_basedatos
DB_USERNAME=nombre_de_tu_usuario
DB_PASSWORD=contraseña_de_tu_base_de_datos
```

### Comandos para ejecutar

Para generar la clave del a aplicación.
```sh
php artisan key:generate
```

Para ejecutar las migraciones.
```sh
php artisan migrate
```


Para acceder a la web de desarrollo a traves de la URL .`localhost:800`
```sh
php artisan serve
```
Tambien se puede acceder directamente a la web a traves de la URL `bookstore.test` si se ejecuta en un entorno Laragon.


