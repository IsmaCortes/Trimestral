-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 13:58:32
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

CREATE DATABASE IF NOT EXISTS pagina;
USE pagina;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `productos` varchar(250) NOT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `npedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `idproducto`, `productos`, `precio`, `fecha`, `npedido`) VALUES
(1, 31, 'Mario Odyssey', '55.23', '2021-11-18 19:45:46', 1),
(2, 27, 'Mario 64', '28.80', '2021-11-18 19:45:46', 1),
(3, 28, 'Mario Sunshine', '28.99', '2021-11-18 19:45:46', 1),
(4, 27, 'Mario 64', '0.00', '2021-11-18 20:50:44', 2),
(5, 28, 'Mario Sunshine', '0.00', '2021-11-18 20:50:44', 2),
(6, 28, 'Mario Sunshine', '0.00', '2021-11-18 20:54:43', 3),
(7, 29, 'Mario Galaxy', '0.00', '2021-11-18 20:54:43', 3),
(8, 28, 'Mario Sunshine', '0.00', '2021-11-18 20:55:21', 4),
(9, 29, 'Mario Galaxy', '0.00', '2021-11-18 20:55:22', 4),
(10, 27, 'Mario 64', '28.80', '2021-11-18 20:56:36', 5),
(11, 28, 'Mario Sunshine', '28.99', '2021-11-18 20:56:36', 5),
(12, 30, 'Mario Galaxy 2', '16.95', '2021-11-18 20:56:36', 5),
(13, 27, 'Mario 64', '28.80', '2021-11-19 08:46:14', 6),
(14, 28, 'Mario Sunshine', '28.99', '2021-11-19 08:46:14', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `texto` varchar(556) NOT NULL,
  `nombreimg` varchar(50) NOT NULL,
  `precio` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `texto`, `nombreimg`, `precio`) VALUES
(27, 'Mario 64', 'El juego que salió con Nintendo 64 e inventó el modelo que muchos otros seguirían. Mario 64 nos plantea el reto de conseguir 120 estrellas a lo largo de 15 mundos abiertos del castillo de la Princesa Peach, para lograr acabar con Bowser y liberar una vez más a la princesa.', '../images/Mario64.jpg', '28.80'),
(28, 'Mario Sunshine', 'Mario está de vacaciones, pero algo va mal. La isla paradisíaca donde iba a pasar unos días ha sido infectada de suciedad, y usando sus habilidades y una bomba de agua llamada Acuac tendrá que limpiar la isla de porquería para poder disfrutar de sus vacaciones.', '../images/MarioSunshine.jpg', '28.99'),
(29, 'Mario Galaxy', 'La primera aventura 3D de Mario en Wii nos reta a viajar de planetoide en planetoide superando todo tipo de retos en una galaxia llena de imaginación, con mundos inspirados en el pasado de la saga, para volver a salvar a la princesa, una vez más de las garras de Bowser.', '../images/MarioGalaxy.jpg', '14.95'),
(30, 'Mario Galaxy 2', 'Super Mario Galaxy regresa en una aventura que ha logrado superar a su predecesor. Sigue contando con mundos de plataformas excelentemente diseñados donde tendremos que usar nuestra habilidad para que Mario los supere, pero incluye más variedad de retos y a Yoshi, el dinosaurio que sirve de montura a Mario, como gran novedad. ', '../images/MarioGalaxxy2.png', '16.95'),
(31, 'Mario Odyssey', 'Mario regresa a los videojuegos con su primer gran título para Nintendo Switch. En esta ocasión lo hace con un juego en 3D de mundo abierto e interesantes mecánicas jugables como la gorra, la cual tendrá un gran protagonismo y ofrecerá diversas funcionalidades como ayudarnos a recorrer el escenario o la capacidad de controlar a los enemigos, obteniendo así increíbles y variadas habilidades.', '../images/MarioOdyssey.jpg', '55.23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
