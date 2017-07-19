<?php 
require_once 'model/Conexion.php';
require_once 'model/Movie.php';

$movie = new Movie(null,'El aro','Es una pelicula horrible horrible','2003','https://i.ytimg.com/vi/AiDcL8xWSqI/maxresdefault.jpg','1');
$movie->save();

$movie = new Movie(null,'El origen','Un poco extraña la pelicula, pero que más da','2001','http://nerdcast.net/wordpress/wp-content/uploads/2012/08/inception1.jpg','3');
$movie->save();

$movie = new Movie(null,'Cowboys Bepop','Amazing movie, es una obra maestra creada en tiempos útopicos, es una joya del anime contemporaneo','1996','http://www.animezar.net/wp-content/uploads/2017/04/Cowboy-Bebop-Pelicula-Captura-7.jpeg','7');
$movie->save();

$movie = new Movie(null,'La chica que saltaba a traves del tiempo','Sin descripcion','2007','https://www.koi-nya.net/img/subidos_posts/2016/05/La-chica-que-saltaba-a-traves-del-tiempo-001.jpg','7');
$movie->save();

echo "Guardado";