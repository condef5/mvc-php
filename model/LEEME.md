Esta carpeta contienes los models, en el patron MVC los modelos son los encargados de hacer llamadas a la base de datos, para despues enviar esos datos al controlador.
En cada metodo de los controladores, ellos llaman al modelo en este caso Video, y acceden a los datos de la BD,
despues llaman a la vista y le pasan esos datos, veamos el siguiente ejemplo :

```
class Conexion extends PDO {
	private $dbtype = 'mysql';
    private $host = 'localhost';
    private $dbname = 'cine';
    private $user = 'root';
    private $password = '';	 

}	
```

En el código anterior está nuestra clase conexión la cual extiende de PDO, una solución super cool xd, es lo mismo que con `mysql` o mysqli, como puedes necesita ciertos parametros como el tipo de gestor de base de datos => `$dbtype`, el host que por defecto es => `$host='localhost'`, el nombre de la base de datos => `$dbname='cine'`, el usuario y el passsword.

```
class Movie {
    private $id;
    private $name;
    private $description;
    private $year;
    private $image;
    private $category_id;
    const TABLE = 'movie';
	
}
```

El codigo de arriba es nuestro modelo `Movie` el cual se encargará de interactuar con las peliculas en la base de datos, es una clase con propiedades las cuales nos ayudarán a interactuar con nuestra lógica en la aplicación, tambien está la constante `TABLE` la cual debe llevar el nombre de la tabla, 

Si queremos usar un objeto del modelos lo hacemos así 
	`$movie = Model.new()`
Si queremos usar un objeto del modelos con datos desde un inicio lo hacemos así 
	`$movie = new Movie(null,'El aro','Es una pelicula horrible horrible','2003','https://i.ytimg.com/vi/AiDcL8xWSqI/maxresdefault.jpg','1');` 

```
 public function name($name=null) {
        if($name)
            $this->name = $name; 
        return $this->name;
}
```

El código de arriba es una función de la clase Movie el cual actua como un GET y un SET a la vez, lo que significa que si queremos consultar la propiedad `name` bastara con llamar al metodo name =>  `$movie->name()`, 
y si queremos pasar un nombre a nuestra clase lo haremos así =>  `$movie->name('el origen - nombre de pelicula')`




Para finalizar exiten los métodos de interación con la BD:

=> Para guardar listar todas las peliculas basta con llamar a la función `Movie::all()`, es un método estático no necesita instancíar nigun objeto para usarlo
=> Para guardar basta con llamar a la función `$movie->save()`
=> Para buscar una pelicula basta con llamar a la función `Movie::find('id_de_la_pelicula')` , esto es porque el metódo find es un metodo estático y no necesita instarcíar  ninguna variable
=> Para eliminar, primero encontramos la película y depues la eliminamos
 `$movie = Movie:find('id_de_pelicula')`
 `$movie->delete()` 