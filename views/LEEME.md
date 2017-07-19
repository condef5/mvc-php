Esta carpeta contienes las vistas, es muy intuitivo, he separado los archivos en tres 

=> header => donde llamos a mis hojas css y archivos js, y agrego mi navegación
=> vista_dinamica => está vista será la que cambíara en cada llamada en nuestro controlador, la vista por defecto es welcome.php 
=> footer => donde agrego el footer puedes editar esa parte

Para llamar a cualquier vista basta con usar esta función require_once 'ruta_de_la_vista'

``` 
require_once 'views/header.php';
require_once 'views/welcome.php';
require_once 'views/footer.php';
``` 
Nota: Para saber la ruta de una vista, tienes que situarte en tu carpeta principal donde está el index y hacer las llamdas a las vistas desde ahí.

Para pasar datos a una vista, solo necesitas declarar una variable antes de llamar a dicha vista y usar la variable en la vista :) :

```  
	$movies = Movie::all();
	require_once 'views/header.php';
	require_once 'views/welcome.php';
	require_once 'views/footer.php';
``` 
Declaro una variable `$movies` y la uso en la vista `welcome.php`, facíl no xd.



