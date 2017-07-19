<?php
/*Importamos el modelo Movie */

require_once 'model/Movie.php';
require_once 'model/Category.php';

/*CRUD => Create Read Update Delete*/

class MovieController{
	function __construct()
	{
		
	}
	public function index(){ 
		$movies = Movie::all();
		require_once 'views/header.php';
		require_once 'views/movie/index.php';
		require_once 'views/footer.php';
	}
	public function new()
	{
		$categories = Category::all();
		require_once 'views/header.php';
		require_once 'views/movie/new.php';
		require_once 'views/footer.php';
	}
	public function create()
	{ 
		$movie =  new Movie();
		$movie->name($_REQUEST['name']);  
		$movie->description($_REQUEST['description']);  
		$movie->year($_REQUEST['year']);  
		$movie->image($_REQUEST['image']);  
		$movie->category_id($_REQUEST['category_id']);  
		$movie->save();
		header('Location: index.php');
	}
	public function edit()
	{
		$id = $_REQUEST['id']; // obtenemos el id de la url
		$categories = Category::all();
		$movie =  Movie::find($id);  
		require_once 'views/header.php';
		require_once 'views/movie/edit.php';
		require_once 'views/footer.php';
	}
	public function update()
	{
		$id = $_REQUEST['id'];
		$movie =  Movie::find($id);  
		$movie->name($_REQUEST['name']);  
		$movie->description($_REQUEST['description']);  
		$movie->year($_REQUEST['year']);  
		$movie->image($_REQUEST['image']);  
		$movie->category_id($_REQUEST['category_id']);  
		$movie->save();
		header('Location: index.php');
	}
	public function delete()
	{
		$id = $_REQUEST['id']; // obtenemos el id de la url 
		$movie =  Movie::find($id);  
		$movie->delete();
		header('Location: index.php');
	}
}