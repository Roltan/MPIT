-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 19 2023 г., 00:29
-- Версия сервера: 8.0.30
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
-- Структура таблицы `eat`
--

CREATE TABLE `eat` (
  `id` int NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolg` float NOT NULL,
  `shir` float NOT NULL,
  `img` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reiting` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `eat`
--

INSERT INTO `eat` (`id`, `name`, `dolg`, `shir`, `img`, `decription`, `reiting`) VALUES
(1, 'Ташкент', 53.968, 58.424, 'http://MPIT/images/eat.png', 'Кафе', 4),
(2, 'Харчевня', 53.97, 58.423, 'http://MPIT/images/eat.png', 'Кафе', 4.4),
(3, '7 Вкусов', 53.973, 58.418, 'http://MPIT/images/eat.png', 'Кафе', 4.4),
(4, 'Дофамин', 53.972, 58.42, 'http://MPIT/images/eat.png', 'Кофейня,Кафе', 4.8),
(5, 'Шеф Шаверма', 53.97, 58.425, 'http://MPIT/images/eat.png', 'Кафе,Быстрое питание', 4.2),
(6, 'Пробка', 53.971, 58.422, 'http://MPIT/images/eat.png', 'Бар, паб,Ресторан', 4.1),
(7, 'Башкирские Чебуреки', 53.97, 58.422, 'http://MPIT/images/eat.png', 'Доставка еды и обедов, Кафе, Быстрое питание', 4.3),
(8, 'ПончиК', 53.971, 58.416, 'http://MPIT/images/eat.png', 'Кафе,Быстрое питание', 4.1),
(9, 'Жиши Суши', 53.97, 58.414, 'http://MPIT/images/eat.png', 'Суши-бар, доставка еды и обедов', 5),
(10, 'Ваши Суши', 53.97, 58.41, 'http://MPIT/images/eat.png', 'Суши-бар, Доставка еды и обедов, Пиццерия', 4.1),
(11, 'Брусника', 53.968, 58.41, 'http://MPIT/images/eat.png', 'Кафе', 4.3),
(12, 'Sushi Moji', 53.968, 58.408, 'http://MPIT/images/eat.png', 'Кафе, Доставка еды и обедов', 4.4),
(13, 'Ресторан при кинотеатре Металлург', 53.968, 58.409, 'http://MPIT/images/eat.png', 'Кафе, Ресторан', 4.3),
(14, 'Бульвар', 53.967, 58.41, 'http://MPIT/images/eat.png', 'Ресторан', 4.3),
(15, 'Verres', 53.966, 58.409, 'http://MPIT/images/eat.png', 'Пиццерия, Магазин суши и азиатских продуктов,Быстрое питание', 4),
(16, 'Суши на Рахате с Кайфом', 53.965, 58.412, 'http://MPIT/images/eat.png', 'Суши-бар,Игровые приставкикафе', 4.1),
(17, 'Sushi mix', 53.964, 58.408, 'http://MPIT/images/eat.png', 'Суши-бар, Доставка еды и обедов, Пиццерия', 4.1),
(18, 'Шеф бургер', 53.968, 58.415, 'http://MPIT/images/eat.png', 'Шеф бургер', 4),
(19, 'Самовар', 53.97, 58.405, 'http://MPIT/images/eat.png', 'Быстрое питание, Кафе', 4.3),
(20, 'Шаурма Халяль', 53.971, 58.406, 'http://MPIT/images/eat.png', 'Магазин продуктов, Кондитерская', 4.1),
(21, 'Просто', 53.971, 58.409, 'http://MPIT/images/eat.png', 'Ресторан, Кофейня', 4.4),
(22, 'Бикшат', 53.969, 58.406, 'http://MPIT/images/eat.png', 'Кафе, Пиццерия, Быстрое питание', 4.2),
(23, 'Инь-Янь', 53.971, 58.409, 'http://MPIT/images/eat.png', 'Суши-бар, Доставка еды и обедов', 3.6),
(24, 'Семейная трапеза', 53.966, 58.405, 'http://MPIT/images/eat.png', 'Кафема, Магазин кулинарии', 4.1),
(25, 'Узбечка', 53.967, 58.406, 'http://MPIT/images/eat.png', 'Кафе', 3.4),
(26, 'Подсолнух', 53.967, 58.4, 'http://MPIT/images/eat.png', 'Кафе, Быстрое питание', 3.9),
(27, 'Чайхана', 53.965, 58.406, 'http://MPIT/images/eat.png', 'Кафе', 4.2),
(28, 'Beerлога', 53.963, 58.409, 'http://MPIT/images/eat.png', 'Бар, паб', 0),
(29, 'Тайна', 53.963, 58.409, 'http://MPIT/images/eat.png', 'Кафе', 3.8),
(30, 'Бикшат', 53.958, 58.404, 'http://MPIT/images/eat.png', 'Быстрое питание', 4.3),
(31, 'Кафе', 53.958, 58.404, 'http://MPIT/images/eat.png', 'Кафе', 0),
(32, 'Кафе', 53.949, 58.42, 'http://MPIT/images/eat.png', 'Кафе', 3.7),
(33, 'Гиви', 53.958, 58.444, 'http://MPIT/images/eat.png', 'Кафе', 4.3);

-- --------------------------------------------------------

--
-- Структура таблицы `hotel`
--

CREATE TABLE `hotel` (
  `id` int NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolg` float NOT NULL,
  `shir` float NOT NULL,
  `adress` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `dolg`, `shir`, `adress`, `time`) VALUES
(1, 'Рябиновый', 53.948, 58.42, 'Тенистая ул., 21, Белорецк', 'открыто до 23:00'),
(2, 'Апартаменты в Белорецке', 53.973, 58.411, 'ул. В. Ленина, 38, Белорецк', 'круглосуточно'),
(3, 'Шале Sunset', 53.954, 58.451, 'Тенистая ул., 21, Белорецк', 'круглосуточно'),
(4, 'Мраткино.ру', 53.976, 58.424, 'ул. Карла Маркса, 122', 'круглосуточно'),
(5, 'Country Hope', 53.947, 58.421, 'Черёмуховая ул., 4', 'График работы не указан'),
(6, 'Белорецк', 53.967, 58.4, 'ул. В. Ленина, 39', 'круглосуточно'),
(7, 'Guesthouse on Kirova', 53.949, 58.421, 'ул. С. Кирова, 219', 'График работы не указан'),
(8, 'Гранд', 53.957, 58.392, 'ул. С. Тюленина, 1', '08:00 – 21:00'),
(9, 'Банкир', 53.956, 58.396, 'ул. В. Маяковского, 84', 'График работы не указан'),
(10, 'Спорт', 53.979, 58.424, 'ул. В. Ленина, 70', 'круглосуточно'),
(11, 'Высота 806', 53.992, 58.444, '126, Белорецк', 'круглосуточно'),
(12, 'Гостевой дом на Мраткино', 53.992, 58.445, '156, Белорецк', '09:00 – 22:00'),
(13, 'Cottage in Beloretsk', 53.993, 58.445, '148, Белорецк', 'График работы не указан'),
(14, 'Горы по колено', 53.991, 58.444, '115, Белорецк', 'круглосуточно'),
(15, 'Сугроб', 53.992, 58.447, '169, Белорецк, коллективный сад № 7 Белорецкого металлургического комбината', 'круглосуточно'),
(16, 'Дачная сказка', 53.992, 58.448, '308, Белорецк, коллективный сад № 6 Белорецкого металлургического комбината', 'круглосуточно'),
(17, 'Шале Мраткино', 53.99, 58.454, 'ул. Е. Губина, 43, Белорецк', 'круглосуточно'),
(18, 'Гостевой дом Сосновый', 53.998, 58.463, 'Республика Башкортостан, городское поселение Белорецк', 'круглосуточно'),
(19, 'ЯраТау', 53.991, 58.44, '25, Белорецк, СНТ Ветеран-2', 'круглосуточно'),
(20, 'Ветеран 55', 53.99, 58.443, '36, Белорецк, СНТ Ветеран-2', 'График работы не указан'),
(21, 'Усадьба', 53.957, 58.36, 'ул. В. Блюхера, 145, Белорецк', 'круглосуточно');

-- --------------------------------------------------------

--
-- Структура таблицы `monuments`
--

CREATE TABLE `monuments` (
  `id` int NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolg` float NOT NULL,
  `shir` float NOT NULL,
  `reiting` float NOT NULL,
  `img` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `monuments`
--

INSERT INTO `monuments` (`id`, `name`, `dolg`, `shir`, `reiting`, `img`, `decription`) VALUES
(1, 'В.И. Ленин', 53.971, 58.407, 3.4, 'http://MPIT/images/monument.png', ''),
(2, 'Павел Варфоломеевич Точисский', 53.969, 58.407, 4.1, 'http://MPIT/images/monument.png', ''),
(3, 'Учителям и учащимся школы № 1, павшим в годы Великой Отечественной войны', 53.97, 58.412, 0, 'http://MPIT/images/monument.png', ''),
(4, 'Узникам концлагерей', 53.972, 58.409, 0, 'http://MPIT/images/monument.png', ''),
(5, 'Вечный огонь', 53.967, 58.398, 3.9, 'http://MPIT/images/monument.png', ''),
(6, 'Памятник', 53.969, 58.406, 0, 'http://MPIT/images/monument.png', ''),
(7, 'Лётчикам-белоречанам, участвовавшим в Великой Отечественной войне', 53.967, 58.42, 4, 'http://MPIT/images/monument.png', ''),
(8, 'Мемориал воинам, погибшим в локальных конфликтах при исполнении служебного долга', 53.964, 58.414, 0, 'http://MPIT/images/monument.png', ''),
(9, 'Василий Константинович Блюхер', 53.96, 58.42, 4.1, 'http://MPIT/images/monument.png', ''),
(10, 'Воинам-афганцам', 53.965, 58.406, 0, 'http://MPIT/images/monument.png', ''),
(11, 'Воинам-пограничникам', 53.964, 58.403, 0, 'http://MPIT/images/monument.png', ''),
(12, 'Бюст героя СССР А.Г. Серебренникова', 53.963, 58.401, 0, 'http://MPIT/images/monument.png', ''),
(13, 'Знамя трудовой доблести', 53.962, 58.4, 0, 'http://MPIT/images/monument.png', ''),
(14, 'Аллея героев', 53.967, 58.398, 0, 'http://MPIT/images/monument.png', ''),
(15, 'Обелиск воинам белоречанам 298 стрелкового полка', 53.967, 58.399, 0, 'http://MPIT/images/monument.png', ''),
(16, 'Памятник Скорбящей матери', 53.967, 58.4, 0, 'http://MPIT/images/monument.png', ''),
(17, 'Памяти жертв политических репрессий и погибших воинов спецпоселений Белорецкого района в годы Великой Отечественной войны', 53.968, 58.4, 0, 'http://MPIT/images/monument.png', ''),
(18, 'Белоречанам-железнодорожникам', 53.98, 58.394, 0, 'http://MPIT/images/monument.png', ''),
(19, 'Учителям и учащимся школы № 15, погибшим в годы Великой Отечественной войны', 53.953, 58.34, 4.1, 'http://MPIT/images/monument.png', ''),
(20, 'Памятный знак участникам всех войн', 53.928, 58.321, 0, 'http://MPIT/images/monument.png', ''),
(21, 'Основатель Белорецкого железоделательного завода Иван Борисович Твёрдышев', 53.971, 58.398, 3.6, 'http://MPIT/images/monument.png', ''),
(22, 'Белоречанам - ликвидаторам аварии на Чернобыльской АЭС', 53.968, 58.4, 0, 'http://MPIT/images/monument.png', ''),
(23, 'В память о храме Святителя и Чудотворца Николая в городе Белорецке 1879-1929', 53.968, 58.401, 0, 'http://MPIT/images/monument.png', ''),
(24, 'Воинам-пограничникам', 53.964, 58.403, 0, 'http://MPIT/images/monument.png', ''),
(25, 'Памятник Воинам разведчикам', 53.962, 58.401, 0, 'http://MPIT/images/monument.png', ''),
(26, 'Воинам-афганцам', 53.965, 58.406, 0, 'http://MPIT/images/monument.png', ''),
(27, 'Мемориал в честь 60-летия Победы', 53.978, 58.428, 0, 'http://MPIT/images/monument.png', ''),
(28, 'Мемориал в честь 60-летия Победы', 53.978, 58.428, 0, 'http://MPIT/images/monument.png', ''),
(29, 'М.И. Калинин', 53.971, 58.4, 0, 'http://MPIT/images/monument.png', ''),
(29, 'Мемориальный комплекс, посвящённый металлургам Белорецка, павшим в боях за Родину в годы Великой Отечественной войны и участникам Трудового фронта 1941-1945 годов', 53.971, 58.4, 0, 'http://MPIT/images/monument.png', '');

-- --------------------------------------------------------

--
-- Структура таблицы `museums`
--

CREATE TABLE `museums` (
  `id` int NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolg` float NOT NULL,
  `shir` float NOT NULL,
  `img` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reiting` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `museums`
--

INSERT INTO `museums` (`id`, `name`, `dolg`, `shir`, `img`, `description`, `reiting`) VALUES
(1, 'Белорецкий историко-краеведческий музей', 53.972, 58.408, 'http://MPIT/images/museums.png', 'Хороший краеведческий музей с экспозициями о природе, нации и быте, заводах и их истории развития', 4.3),
(2, 'Музей Белорецкого металлургического комбината', 53.983, 58.393, 'http://MPIT/images/museums.png', 'Очень интересный. Можно заглянуть в историю создания завода, кто был основателем, как он видоизменялся и расширялся', 4.2),
(3, 'Муниципальное автономное учреждение Белорецкая картинная галерея', 53.973, 58.411, 'http://MPIT/images/museums.png', 'Картинная галерея очень необычная, выставки оригинальные Персонал очень добрый и отзывчивый', 4.1),
(4, 'Музей ДОСААФ', 53.974, 58.428, 'http://MPIT/images/museums.png', 'Музей очень хороший ,интересный и познавательный', 3.3),
(5, 'Музей боевой и спортивной техники под открытым небом', 53.978, 58.429, 'http://MPIT/images/museums.png', '', 4),
(5, 'Белорецкий музей связи', 53.967, 58.401, 'http://MPIT/images/museums.png', 'Классно и уютно', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `park`
--

CREATE TABLE `park` (
  `id` int NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolg` float NOT NULL,
  `shir` float NOT NULL,
  `reiting` float NOT NULL,
  `img` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `park`
--

INSERT INTO `park` (`id`, `name`, `dolg`, `shir`, `reiting`, `img`, `decription`) VALUES
(1, 'Городской парк культуры и отдыха', 53.969, 58.399, 4.4, 'http://MPIT/images/park.png', 'Городской парк культуры и отдыха в городе Белорецке празднует свое новое возрождение. Прекрасное место отдыха для взрослых и детей, радует своими чистыми тропинками, наличием большого количества игровых площадок, дорожками для бега, детских площадок'),
(2, 'Сквер имени В.И. Ленина', 53.971, 58.406, 4.1, 'http://MPIT/images/park.png', 'В данный момент сквер является наиболее посещаемым местом для туристом. Сквер обустроен большим количеством лавочек для отдыха, качественными тропинками и чистым газон. Часто над сквером проводят работы по его уборке от мусора и почитают имя, кому он построен'),
(3, 'аллея Героев', 53.967, 58.399, 4.4, 'http://MPIT/images/park.png', 'Аллея Героев - уже только это название приводит в трепет, что, то внутри. Поистине святое место, красиво растут деревья, среди которых портреты героев ВОВ. Памятник неизвестному солдату с вечным горящим огнём. Захватывающая атмосфера гордости, благодарности и скорби солдатам и воинам'),
(4, 'сквер Дружбы', 53.97, 58.406, 4.2, 'http://MPIT/images/park.png', 'Благоустронный сквер с зелеными клумбами, красивой подсветкой в вечернее и ночное время, со звучанием приятной тихой музыкой. Подходит для вечерних и ночных прогулок'),
(5, 'сквер 40 лет Победы', 53.964, 58.403, 4.2, 'http://MPIT/images/park.png', 'В данном сквере заключено патриотизм людей защищавших и защищающих свою Родину. В сквере имеется вечный огонь и аллея героем Великой Отечестенной Войны.'),
(6, 'сквер Учителя', 53.969, 58.409, 3.6, 'http://MPIT/images/park.png', 'Сквер, недавно вышедший из ремонта. Имеется достаточное количество лавочек, мест для посиделок, места для прогулок с большой компанией. В летнее время парк насыщается яркими листьями растущих деревьев и клумбами цветов'),
(7, 'сквер 70 лет Победы', 53.966, 58.396, 3.4, 'http://MPIT/images/park.png', 'Небольшой, но очень просторный для прогулок с большой компанией сквер с достаточным количествым лавочек для отдыха и красивым освещением в вечернее время. Отлично подходит для спокойных вечерных и ночных прогулок');

-- --------------------------------------------------------

--
-- Структура таблицы `religion`
--

CREATE TABLE `religion` (
  `id` int NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolg` float NOT NULL,
  `shir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `religion`
--

INSERT INTO `religion` (`id`, `name`, `dolg`, `shir`) VALUES
(1, 'Михаило-Архангельский молитвенный дом', 53.92, 58.365),
(2, 'Церковь Троицы Живоначальной в городе Белорецк', 53.968, 58.427),
(3, 'Церковь Николая Чудотворца', 53.968, 58.398),
(4, 'Церковь Архангела Михаила', 53.918, 58.358),
(5, 'Часовня', 53.969, 58.404),
(6, 'Часовня в Белорецке', 53.968, 58.398);

-- --------------------------------------------------------

--
-- Структура таблицы `torg_centr`
--

CREATE TABLE `torg_centr` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `dolg` float NOT NULL,
  `shir` float NOT NULL,
  `img` varchar(256) NOT NULL,
  `decription` text NOT NULL,
  `reiting` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `torg_centr`
--

INSERT INTO `torg_centr` (`id`, `name`, `dolg`, `shir`, `img`, `decription`, `reiting`) VALUES
(1, '8 Марта', 53.972, 58.426, 'http://MPIT/images/torg_centr.png', 'Практически все можно купить в одном месте , аптека , бытовая техника , золото, серебро , электро товары , мясо, бытовая химия , трикотажные вещи , короче все есть', 4.6),
(2, 'Торговый центр XL', 53.972, 58.417, 'http://MPIT/images/torg_centr.png', 'В этом торговом центре есть магазин Магнит, и семейный магазин. В семейном магазине очень большой ассортимент товаров: одежда, посуда, батарейки, фонарики, электрошокеры, рамки для фотографий и многое другое', 4.4),
(3, 'Универмаг', 53.97, 58.404, 'http://MPIT/images/torg_centr.png', '', 4.3),
(4, 'Проспект', 53.97, 58.424, 'http://MPIT/images/torg_centr.png', 'В Проспекте имеется ,Детский мир,Офисмаг,семейный магазин.Очень удобно детская,взрослая одежда,а также канцелярия для всей семьи.', 4.4),
(5, 'Арбат', 53.972, 58.409, 'http://MPIT/images/torg_centr.png', '', 4.1),
(6, 'Сезам', 53.969, 58.403, 'http://MPIT/images/torg_centr.png', 'В цокольном этаже ТЦ СЕЗАМ очень большой ассортимент товара:одежда детская,взрослая,широкий размерный ряд,качественный', 4),
(7, 'Детский игровой комплекс 5-й океан', 53.971, 58.409, 'http://MPIT/images/torg_centr.png', 'для детей это отличное времяпровождение,нравится', 4.2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
