-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 10 2019 г., 16:02
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `form`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `browser` varchar(200) NOT NULL,
  `tvchannel` text NOT NULL,
  `data_open` datetime NOT NULL,
  `data_close` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`, `browser`, `tvchannel`, `data_open`, `data_close`) VALUES
(79, 'Заголовок', 'Текст письма', 'Internet Explorer', 'Культура', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Заголовок', 'Текст письма', 'Internet Explorer', 'Культура', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Заголовок', 'Текст письма', 'Internet Explorer', 'Культура', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Заголовок', 'Текст письма', 'Internet Explorer', 'Матч ТВ,Культура', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Заголовок', 'Текст письма', 'Internet Explorer', 'Матч ТВ', '2019-03-10 14:16:18', '0000-00-00 00:00:00'),
(84, 'Заголовок', 'Текст письма', 'Internet Explorer', 'Матч ТВ', '2019-03-10 14:16:18', '0000-00-00 00:00:00'),
(85, 'Форма', 'Форма текс', 'Opera', 'Первый канал,СТС,РЕН ТВ', '2019-03-10 14:22:59', '2019-03-10 00:00:00'),
(86, 'Форма', 'Форма текс', 'Opera', 'Первый канал,СТС,THT,РЕН ТВ', '2019-03-10 14:24:31', '2019-03-10 00:00:00'),
(87, 'Name', 'Форма текста', 'Opera', 'Первый канал,СТС,THT', '2019-03-10 14:27:21', '2019-03-10 14:27:40'),
(88, '', 'Форма текста', 'Opera', 'Первый канал,СТС,THT', '2019-03-10 14:27:21', '2019-03-10 14:40:27'),
(89, 'Работает!', 'Форма текста', 'Opera', 'Первый канал,СТС,THT', '2019-03-10 14:27:21', '2019-03-10 14:55:59'),
(90, '', 'Форма текста', 'Opera', 'Первый канал,СТС,THT', '2019-03-10 14:27:21', '2019-03-10 14:56:08'),
(91, '', 'Форма текста', 'Opera', 'Первый канал,СТС,THT', '2019-03-10 14:58:13', '2019-03-10 14:58:15'),
(92, 'Заголовок', 'Форма текста', 'Opera', 'Первый канал,СТС,THT,Культура', '2019-03-10 14:58:13', '2019-03-10 14:58:44'),
(93, 'Заголовок', 'Форма текста', 'Opera', 'Первый канал,СТС,THT,Культура', '2019-03-10 15:03:14', '2019-03-10 15:04:04'),
(94, '', 'Форма текста', 'Opera', 'Первый канал,СТС,THT,Культура', '2019-03-10 15:03:14', '2019-03-10 15:04:23'),
(95, '', 'Форма текста', 'Opera', 'Первый канал,СТС,THT,Культура', '2019-03-10 15:03:14', '2019-03-10 15:07:24'),
(96, 'Имя', 'ываыва', 'Firefox', 'Первый канал,THT', '2019-03-10 15:03:14', '2019-03-10 15:11:34'),
(97, '', 'ываыва', 'Firefox', 'Первый канал,THT', '2019-03-10 15:03:14', '2019-03-10 15:11:44'),
(98, '', 'ываыва', 'Firefox', 'Первый канал,THT', '2019-03-10 15:03:14', '2019-03-10 15:13:59'),
(99, 'Заголовок', 'ываыва', 'Firefox', 'Первый канал,THT', '2019-03-10 15:03:14', '2019-03-10 15:14:05'),
(100, '', 'ываыва', 'Firefox', 'Первый канал,THT', '2019-03-10 15:03:14', '2019-03-10 15:20:53');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
