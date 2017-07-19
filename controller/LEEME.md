Esta carpeta contienes los controllers, en el patron MVC los controladores son los encargados de recibir peticiones, como listar videos, editar videos o crear videos, etc , etc.
En cada metodo de los controladores, ellos llaman al modelo en este caso Video, y acceden a los datos de la BD,
despues llaman a la vista y le pasan esos datos, veamos el siguiente ejemplo :

```
class MovieController{
	
	public function index(){ 
		$movies = Movie::all();
		require_once 'views/header.php';
		require_once 'views/movie/index.php';
		require_once 'views/footer.php';
	}
	
```

En el código anterior podemos observar que tenemos al controlador llamado movie y que este tiene una acción llamado index, en este metodo llamamos al modelo Movie y le pedimos todos las peliculas almacenadas en la Base de datos, despues llamamos a las vistas, el `require_once` nos sirve para llamar a los archivos de las vistas(lo he separado en header, footer y la vista que interactuará con nuestros datos, fácil verdad), es muy sencillo entender el MVC. 




