-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2024 at 07:50 AM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u205983108_dreamcloud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `wish` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `comment`, `wish`, `created_at`, `updated_at`) VALUES
(22, 'Fireny', 'Its all about smiling', 'wishes', '2022-08-25 08:54:46', '2022-08-25 08:54:46'),
(23, 'millita', '\"I will never leave this universe, so I am home forever\"', 'dreams', '2022-08-26 12:24:34', '2022-08-26 12:24:34'),
(59, 'Chris', 'lets save the world', 'wishes', '2022-08-31 14:14:25', '2022-08-31 14:14:25'),
(64, 'Florencia', 'Mi deseo es poder iniciar una nueva vida, con nuevos proyectos, nuevos conocieminetos y sobre todo nuevos desafios, los cuales nos van guiar a un gran comienzo.', 'dreams', '2022-09-02 12:51:40', '2022-09-02 12:51:40'),
(65, 'Juanchis', 'Messi y copas', 'wishes', '2022-09-04 06:44:56', '2022-09-04 06:44:56'),
(66, 'Ajoub', 'i want a audi rs7 abt', 'wishes', '2022-09-05 07:02:57', '2022-09-05 07:02:57'),
(67, 'Ami', 'Everything that comes from the heart make it real 💜', 'wishes', '2022-09-05 13:40:44', '2022-09-05 13:40:44'),
(68, 'Saleh', 'New car', 'wishes', '2022-09-05 13:44:32', '2022-09-05 13:44:32'),
(70, 'Ariana', 'Viajar a ver a mis hijos', 'dreams', '2022-09-05 14:09:26', '2022-09-05 14:09:26'),
(73, 'Romi', 'Terminar mi estudio de barwoman, y con esa meta proyectar las siguientes ! \r\nPor qué todas metas se renuevan cuando vamos cumpliendo las que teníamos :)', 'goals', '2022-09-05 18:21:25', '2022-09-05 18:21:25'),
(74, 'Sebastian king', 'Deseo poder vivir de mis cultivos y toda la gente igual, para revelarse al sistema y que no exista el dinero sino que todos vivamos comunidad compartiendo de nuestras cosechas. Vivir libre realmente y conectado con la pacha mama', 'dreams', '2022-09-05 18:59:03', '2022-09-05 18:59:03'),
(75, 'Juan', 'QUE HAGAMOS REALIDAD LOS SUEÑOS Y PROYECTOS. SIN IMPORTAR EL RESULTADO DESEADO', 'goals', '2022-09-05 20:19:04', '2022-09-05 20:19:04'),
(76, 'Fernando', 'Que mis hijos sean felices en su vida.\r\nI wish a life  plenty of happiness for Augusto and Julian.❤️❤️😊', 'wishes', '2022-09-05 21:53:22', '2022-09-05 21:53:22'),
(77, 'Meri', 'One of my biggest dreams is to live traveling💜', 'dreams', '2022-09-05 22:56:32', '2022-09-05 22:56:32'),
(78, 'Zoe', 'Un tren que conecte tooodos los países :)', 'wishes', '2022-09-06 10:45:49', '2022-09-06 10:45:49'),
(79, 'Chantal', 'A world full of connections instead of bias.', 'wishes', '2022-09-06 14:43:20', '2022-09-06 14:43:20'),
(80, 'Saleh', '100 countries visited!', 'dreams', '2022-09-06 14:43:23', '2022-09-06 14:43:23'),
(81, 'Kyle', 'Very proud of you 💪', 'ideas', '2022-09-06 14:49:45', '2022-09-06 14:49:45'),
(82, 'ckue.opportunity@gmail.com', 'When I enter dreamcloud it would be great to be greeted with the \"dream of the day\" :-)', 'ideas', '2022-09-07 07:09:44', '2022-09-07 07:09:44'),
(83, 'ckue.opportunity@gmail.com', 'Instead of printing a wish or so onto a card, it would be fancy to send a friend the card via email :-)', 'ideas', '2022-09-07 07:13:44', '2022-09-07 07:13:44'),
(84, 'Fran', 'Quiero 3000 dolares mensuales !', 'goals', '2022-09-07 13:45:55', '2022-09-07 13:45:55'),
(85, 'Bambina', 'Happiness', 'wishes', '2022-09-08 19:08:43', '2022-09-08 19:08:43'),
(88, 'Flor safons', 'Seguir viajando y conociendo lugares hermosos, poder vivir de mi arte!!', 'dreams', '2022-09-23 20:56:37', '2022-09-23 20:56:37'),
(89, 'Ingo Forrer Nuila', 'I Wish My Mother can recover from all her health issues, with God\'s Help and people\'s good vibes, those who love my mom, my friends, and my Loved Ones!\r\n\r\nI congratulate you, Julian! You are THE MASISO SUPREME! Beautiful Website! <3', 'wishes', '2022-10-13 11:56:29', '2022-10-13 11:56:29'),
(90, 'You', 'To be laughing and loving', 'wishes', '2022-10-15 21:34:37', '2022-10-15 21:34:37'),
(91, 'Julio', 'Get a nice job', 'goals', '2022-11-10 07:21:39', '2022-11-10 07:21:39'),
(92, 'Chris', 'Merry Christmas and a happy new year!', 'wishes', '2022-12-23 16:25:47', '2022-12-23 16:25:47'),
(93, 'Ana', 'Conocer gente nueva <3', 'dreams', '2023-03-25 12:36:19', '2023-03-25 12:36:19'),
(94, 'Laute', 'To excel in my relationship', 'wishes', '2023-03-27 08:16:02', '2023-03-27 08:16:02'),
(95, 'Roland', 'I do want to make big project with my friend! And succeed!', 'wishes', '2023-03-27 11:00:32', '2023-03-27 11:00:32'),
(96, 'Beeny', 'I wish to go to holidays soon with my boyfriend ☺️', 'dreams', '2023-03-27 19:06:11', '2023-03-27 19:06:11'),
(97, 'Pancho', 'Sueño con que mi hija crezca en un mundo sin violencia, donde sea abrazada por la naturaleza, donde los rios y mares esten limpios, la comida nutra y fructifique, la vibracion se eleve y las personas comprendan la verdadera razon de su paso por la tierra.', 'dreams', '2023-03-29 15:27:50', '2023-03-29 15:27:50'),
(98, 'Julian', 'Mein Ziel ist es, eine Stelle zu finden, in der ich mich weiterentwickeln kann, zum Team beitragen und meiner Familie helfen kann.', 'goals', '2023-05-17 13:58:45', '2023-05-17 13:58:45'),
(99, 'bambi', 'whoever reads this message, i wish you get to make your dreams come true♥', 'wishes', '2023-06-29 08:27:07', '2023-06-29 08:27:07'),
(100, 'Max', 'Help each other with our knowledge', 'ideas', '2023-07-31 12:14:38', '2023-07-31 12:14:38'),
(101, 'Santiago', 'It would be amazing to have a beautiful relationship. Respect, listen and love ❤️', 'wishes', '2024-04-14 09:36:41', '2024-04-14 09:36:41'),
(102, 'Julian', 'The classic Porsche is coming!', 'goals', '2024-07-12 09:04:56', '2024-07-12 09:04:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
