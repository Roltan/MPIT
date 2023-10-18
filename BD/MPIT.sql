-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2023 г., 13:25
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `MPIT`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hotel`
--

CREATE TABLE `hotel` (
  `id` int(255) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolg` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shir` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `monuments`
--

CREATE TABLE `monuments` (
  `id` int(255) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolg` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shir` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reiting` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `monuments`
--

INSERT INTO `monuments` (`id`, `name`, `dolg`, `shir`, `reiting`) VALUES
(1, 'В.И. Ленин', '53.971', '58.407', '3.4'),
(2, 'Павел Варфоломеевич Точисский', '53.969', '58.407', '4.1'),
(3, 'Учителям и учащимся школы № 1, павшим в годы Великой Отечественной войны', '53.970', '58.412', '0'),
(4, 'Узникам концлагерей', '53.972', '58.409', '0'),
(5, 'Вечный огонь', '53.967', '58.398', '3.9'),
(6, 'Памятник', '53.969', '58.406', '0'),
(7, 'Лётчикам-белоречанам, участвовавшим в Великой Отечественной войне', '53.967', '58.420', '4.0'),
(8, 'Мемориал воинам, погибшим в локальных конфликтах при исполнении служебного долга', '53.964', '58.414', '0'),
(9, 'Василий Константинович Блюхер', '53.960', '58.420', '4.1'),
(10, 'Воинам-афганцам', '53.965', '58.406', '0'),
(11, 'Воинам-пограничникам', '53.964', '58.403', '0'),
(12, 'Бюст героя СССР А.Г. Серебренникова', '53.963', '58.401', '0'),
(13, 'Знамя трудовой доблести', '53.962', '58.400', '0'),
(14, 'Аллея героев', '53.967', '58.398', '0'),
(15, 'Обелиск воинам белоречанам 298 стрелкового полка', '53.967', '58.399', '0'),
(16, 'Памятник Скорбящей матери', '53.967', '58.400', '0'),
(17, 'Памяти жертв политических репрессий и погибших воинов спецпоселений Белорецкого района в годы Великой Отечественной войны', '53.968', '58.400', '0'),
(18, 'Белоречанам-железнодорожникам', '53.980', '58.394', '0'),
(19, 'Учителям и учащимся школы № 15, погибшим в годы Великой Отечественной войны', '53.953', '58.340', '4.1'),
(20, 'Памятный знак участникам всех войн', '53.928', '58.321', '0'),
(21, 'Основатель Белорецкого железоделательного завода Иван Борисович Твёрдышев', '53.971', '58.398', '3.6'),
(22, 'Белоречанам - ликвидаторам аварии на Чернобыльской АЭС', '53.968', '58.400', '0'),
(23, 'В память о храме Святителя и Чудотворца Николая в городе Белорецке 1879-1929', '53.968', '58.401', '0'),
(24, 'Воинам-пограничникам', '53.964', '58.403', '0'),
(25, 'Памятник Воинам разведчикам', '53.962', '58.401', '0'),
(26, 'Воинам-афганцам', '53.965', '58.406', '0'),
(27, 'Мемориал в честь 60-летия Победы', '53.978', '58.428', '0'),
(28, 'Мемориал в честь 60-летия Победы', '53.978', '58.428', '0'),
(29, 'М.И. Калинин', '53.971', '58.400', '0'),
(29, 'Мемориальный комплекс, посвящённый металлургам Белорецка, павшим в боях за Родину в годы Великой Отечественной войны и участникам Трудового фронта 1941-1945 годов', '53.971', '58.400', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `park`
--

CREATE TABLE `park` (
  `id` int(255) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolg` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shir` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reiting` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `park`
--

INSERT INTO `park` (`id`, `name`, `dolg`, `shir`, `reiting`) VALUES
(1, 'Городской парк культуры и отдыха', '53.969', '58.399', '4.4'),
(2, 'Сквер имени В.И. Ленина', '53.971', '58.406', '4.1'),
(3, 'аллея Героев', '53.967', '58.399', '4.4'),
(4, 'сквер Дружбы', '53.970', '58.406 ', '4.2'),
(5, 'сквер 40 лет Победы', '53.964', '58.403', '4.2'),
(6, 'сквер Учителя', '53.969', '58.409', '3.6'),
(7, 'сквер 70 лет Победы', '53.966', '58.396', '3.4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
