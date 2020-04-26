-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 26 2020 г., 22:49
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `setra_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'Waiting for start',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `start_at` timestamp NULL DEFAULT NULL,
  `complete_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `type`, `description`, `status`, `created_at`, `start_at`, `complete_at`) VALUES
(91, 'The first task', 'The first task The first task The first task', 'Closed', '2020-04-26 19:45:10', '2020-04-26 20:48:05', '2020-04-26 20:48:17'),
(92, 'The second task', 'The second task The second task The second task', 'Open', '2020-04-26 19:45:49', '2020-04-26 20:48:12', NULL),
(93, 'The thirdtask', 'The thirdtask The thirdtask The thirdtask', 'Waiting for start', '2020-04-26 19:46:04', NULL, NULL),
(94, 'The fourth task', 'The fourth task The fourth task The fourth task', 'Waiting for start', '2020-04-26 19:46:26', NULL, NULL),
(95, 'The fifth task', 'The fifth task The fifth task The fifth task', 'Waiting for start', '2020-04-26 19:47:04', NULL, NULL),
(96, 'The sixth task', 'The sixth task The sixth task The sixth task', 'Waiting for start', '2020-04-26 19:47:56', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
