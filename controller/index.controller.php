<?php
/*Importamos el modelo Movie */

require_once 'model/Movie.php';
require_once 'model/Category.php';

/**/

class IndexController{
	function __construct()
	{
		
	}
	public function index(){ 
		$movies = Movie::all();
		require_once 'views/header.php';
		require_once 'views/welcome.php';
		require_once 'views/footer.php';
	} 
}