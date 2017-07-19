Primero importa la base de datos, no necitas crearla, solo dale importar :).

El archivo index.php es dondé sucederá toda la acción, el es el encargado de llamar a los controladores.

```
<?php 
	require_once 'model/Conexion.php';
	$controller = 'index';
```

En el codigo de arriba llamamos a la clase Conexion.php en el index, para no estár llamandola a cada momento en los modelos, :'), 
y además definimos un controlador por defecto llamado index, el cual será el que se cargue cuando accedes por primera vez a la aplicación.


```
if(!isset($_REQUEST['controller']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'Controller'; // ucword convierte en mayuscula la primera letra
    $controller = new $controller; // Instanciamos una clase del controlador;
    $controller->index();    
}
```

En el código de arriba comprobamos si existe la variable controller en nuestra ruta,por ejemplo sí tenemos está ruta `localhost/cine/?controller=movie&action=index`, para acceder a la varíable controller bástara con hacer esto
 `$_REQUEST['controller']` 
Y para saber si existe `isset($_REQUEST['controller'])` si devuelve false significa que no exíste entonces entrará al primer `if` y cargara al controlador por defecto, si la variable controlador existe entrara en el `else` y llamara al controlador de la url.

```
  if(!isset($_REQUEST['controller'])){
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'Controller'; // ucword convierte en mayuscula la primera letra
    $controller = new $controller; // Instanciamos una clase del controlador;
    $controller->index();    
	} 
```
En el código de arriba primero importamos al controlador, si la variable controller es `$controller = 'index'` entonces se llamara al archivo => `"controller/index.controller.php";` y si `$controller = 'movie'` se llamará al archivo => `"controller/movie.controller.php";` estó la hacemos de forma dinámica, bonito no, pero Laravel lo hace de una forma mucho más elegante, así que eso vendrá mas adelante,.

En esta parte  creamos un controlador :
	`$controller = new $controller; `
Y lo que haremos será ejecutar una acción , si es por defecto
	`$controller->index();    `
Y si la acción se declara en la url, la obtenemos de la variable $_REQUEST['action'] 
	`$accion = $_REQUEST['action']`   
Y ahora solo nos queda llamar a la función, hacemos uso del método call_user_func(), el cual acepta como parametro un array(objeto_de_clase,metodo) : 
	`call_user_func( array( $controller, $accion ) ); `

Y eso es todo amigos, si quieres experimetar algo más genial, en tu terminal ejecuta:
 php faker.php 
Y averigua tu mismo que es lo que hace. 


