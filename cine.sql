-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2017 a las 10:24:24
-- Versión del servidor: 10.0.29-MariaDB-0ubuntu0.16.04.1
-- Versión de PHP: 7.1.7-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine`
--
CREATE DATABASE IF NOT EXISTS `cine` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cine`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Comedia'),
(2, 'Acción'),
(3, 'Drama'),
(4, 'Suspenso'),
(5, 'Thriller'),
(6, 'Terror'),
(7, 'Anime');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `year` varchar(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `movie`
--

INSERT INTO `movie` (`id`, `name`, `description`, `year`, `image`, `category_id`) VALUES
(62, 'El aro llll', 'Es una pelicula horrible horrible', '2003', 'https://i.ytimg.com/vi/AiDcL8xWSqI/maxresdefault.jpg', 3),
(63, 'El origen', 'Un poco extraña la pelicula, pero que más da', '2001', 'http://nerdcast.net/wordpress/wp-content/uploads/2012/08/inception1.jpg', 3),
(64, 'Cowboys Bepop', 'Amazing movie, es una obra maestra creada en tiempos útopicos, es una joya del anime contemporaneo', '1996', 'http://www.animezar.net/wp-content/uploads/2017/04/Cowboy-Bebop-Pelicula-Captura-7.jpeg', 7),
(65, 'La chica que saltaba a traves del tiempo', 'Sin descripcion', '2007', 'https://www.koi-nya.net/img/subidos_posts/2016/05/La-chica-que-saltaba-a-traves-del-tiempo-001.jpg', 7),
(67, 'Lucas ', '123', '123', 'https://www.w3schools.com/css/img_fjords.jpg', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
