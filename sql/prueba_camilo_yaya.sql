-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2025 a las 08:10:35
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_camilo_yaya`
--

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre`, `descripcion`, `estado`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Empodera arquitecturas escalables', 'Fugit iste rerum cum. Distinctio eaque vel officia non cupiditate.', 'done', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(2, 'Crece usuarios b2c', 'Quibusdam quisquam excepturi eos culpa a quam. Voluptas quis magni autem numquam.', 'to_do', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(3, 'Evoluciona communidades intuitivas', 'Officiis molestiae accusamus. Unde sed cumque laborum.', 'to_do', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(4, 'Reinventa nichos granulares', 'Neque molestiae quibusdam animi. Labore ullam minus animi magni sed architecto architecto.', 'done', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(5, 'Escala comercio electrónico personalizado', 'Itaque voluptatum voluptatum. Modi magni consequatur expedita.', 'in_progress', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00');

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `email`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Alberto Laureano Guevara', 'benjamintrejo@villanueva-pichardo.com', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(2, 'Aurelio Gamez Gonzales', 'violetatrejo@garay.com', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(3, 'Cristobal Pichardo Molina', 'esmeraldamiramontes@gmail.com', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(4, 'Juan Calderón Muñoz', 'alvaro78@gmail.com', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(5, 'Arcelia Urías', 'reynaldo31@gmail.com', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00');

--
-- Volcado de datos para la tabla `usuario_proyecto`
--

INSERT INTO `usuario_proyecto` (`id`, `usuario_id`, `proyecto_id`, `tarifa`, `activo`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '11899.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(2, 1, 5, '47270.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(3, 1, 3, '30655.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(4, 2, 5, '41463.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(5, 2, 4, '25353.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(6, 3, 2, '32377.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(7, 3, 5, '35823.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(8, 4, 5, '31988.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(9, 4, 2, '42468.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(10, 5, 2, '26380.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(11, 5, 4, '34494.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(12, 5, 3, '43331.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(13, 5, 5, '23176.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(14, 5, 1, '15885.00', 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(15, 2, 2, '39899.00', 1, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(16, 4, 1, '21839.00', 1, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(17, 3, 1, '19499.00', 1, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(18, 4, 3, '21979.00', 1, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(19, 3, 3, '41400.00', 1, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(20, 1, 3, '11062.00', 0, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(21, 4, 2, '41112.00', 0, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(22, 4, 4, '42376.00', 1, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(23, 1, 2, '38541.00', 0, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(24, 4, 5, '15579.00', 0, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(25, 1, 1, '32274.00', 1, '2025-05-26 23:55:34', '2025-05-26 23:55:34'),
(26, 2, 3, '29130.00', 1, '2025-05-27 00:20:35', '2025-05-27 00:20:35'),
(27, 3, 4, '36452.00', 1, '2025-05-27 00:20:35', '2025-05-27 00:20:35');

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`id`, `usuario_id`, `proyecto_id`, `descripcion`, `estado`, `fecha`, `duracion`, `activo`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Quia culpa eligendi distinctio.', 'review', '2025-05-24 04:21:23', 53, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(2, 4, 1, 'Dignissimos odio eaque laborum temporibus sapiente.', 'review', '2025-04-30 04:21:23', 118, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(3, 5, 3, 'Odio repudiandae aliquid ex.', 'to_do', '2025-05-04 04:21:23', 147, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(4, 5, 1, 'Odio ea qui mollitia.', 'waiting_deploy', '2025-05-25 04:21:23', 171, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(5, 3, 5, 'Natus beatae velit porro corrupti alias.', 'review', '2025-05-09 04:21:23', 79, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(6, 1, 1, 'Nesciunt corporis consectetur est tempore recusandae.', 'in_progress', '2025-05-03 04:21:23', 104, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(7, 1, 2, 'Tempore distinctio dolorum.', 'to_do', '2025-05-15 04:21:23', 101, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(8, 4, 3, 'Explicabo nam soluta voluptate.', 'in_progress', '2025-05-16 04:21:23', 120, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(9, 2, 3, 'Unde dolores cum reiciendis.', 'to_do', '2025-05-08 04:21:23', 192, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(10, 2, 5, 'Sunt ad qui ex.', 'in_progress', '2025-05-22 04:21:23', 148, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(11, 4, 3, 'Rem sint repellat eaque ratione autem.', 'done', '2025-05-20 04:21:23', 205, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(12, 3, 1, 'Similique dolore repellendus.', 'in_progress', '2025-05-01 04:21:23', 38, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(13, 3, 4, 'Expedita reprehenderit sit dolore optio id eius.', 'review', '2025-05-25 04:21:23', 84, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(14, 5, 3, 'Vitae eius odit id.', 'in_progress', '2025-05-07 04:21:23', 157, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(15, 4, 4, 'Ex adipisci soluta ea neque voluptates alias.', 'in_progress', '2025-05-19 04:21:23', 65, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(16, 2, 5, 'Ipsa quas et non maiores harum nemo ducimus.', 'done', '2025-05-19 04:21:23', 221, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(17, 5, 4, 'A unde modi quaerat quia perferendis.', 'done', '2025-05-15 04:21:23', 122, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(18, 2, 2, 'Inventore veniam ullam numquam optio commodi.', 'done', '2025-05-12 04:21:23', 53, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(19, 1, 1, 'Magni pariatur eveniet possimus mollitia.', 'in_progress', '2025-05-07 04:21:23', 70, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00'),
(20, 4, 5, 'In velit perspiciatis temporibus nulla.', 'to_do', '2025-05-15 04:21:23', 127, 1, '2025-05-27 04:21:23', '0000-00-00 00:00:00');

COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
