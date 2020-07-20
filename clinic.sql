-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 20 2020 г., 16:07
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `clinic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tanimal`
--

CREATE TABLE `tanimal` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_type_animal` int(11) NOT NULL,
  `old` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tanimal`
--

INSERT INTO `tanimal` (`id`, `id_user`, `id_type_animal`, `old`, `name`) VALUES
(1, 1, 5, 2, 'Кеша');

-- --------------------------------------------------------

--
-- Структура таблицы `tnews`
--

CREATE TABLE `tnews` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tprice`
--

CREATE TABLE `tprice` (
  `id` int(11) NOT NULL,
  `name_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tprice`
--

INSERT INTO `tprice` (`id`, `name_service`, `price`) VALUES
(1, 'Осмотр ветеринара, диагностика', 1000);

-- --------------------------------------------------------

--
-- Структура таблицы `ttreatment`
--

CREATE TABLE `ttreatment` (
  `id` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ttreatment`
--

INSERT INTO `ttreatment` (`id`, `id_animal`, `id_service`, `date`) VALUES
(1, 1, 1, '2020-07-14');

-- --------------------------------------------------------

--
-- Структура таблицы `ttypeanimal`
--

CREATE TABLE `ttypeanimal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ttypeanimal`
--

INSERT INTO `ttypeanimal` (`id`, `name`) VALUES
(1, 'кошка'),
(2, 'собака'),
(5, 'попугай'),
(6, 'ёж'),
(7, 'змея'),
(8, 'кролик'),
(9, 'черепаха'),
(10, 'лиса');

-- --------------------------------------------------------

--
-- Структура таблицы `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `family` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_nubmber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tuser`
--

INSERT INTO `tuser` (`id`, `family`, `name`, `second_name`, `login`, `password`, `phone_nubmber`, `adress`) VALUES
(1, 'Васильев', 'Прокоп', 'Никифорович', 'procopNIK', '12345', '0711100011', 'ул. Раздольная, 38Б');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tanimal`
--
ALTER TABLE `tanimal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_animal` (`id_type_animal`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `tnews`
--
ALTER TABLE `tnews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tprice`
--
ALTER TABLE `tprice`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ttreatment`
--
ALTER TABLE `ttreatment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `id_animal` (`id_animal`);

--
-- Индексы таблицы `ttypeanimal`
--
ALTER TABLE `ttypeanimal`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tanimal`
--
ALTER TABLE `tanimal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tnews`
--
ALTER TABLE `tnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tprice`
--
ALTER TABLE `tprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `ttreatment`
--
ALTER TABLE `ttreatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `ttypeanimal`
--
ALTER TABLE `ttypeanimal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tanimal`
--
ALTER TABLE `tanimal`
  ADD CONSTRAINT `tanimal_ibfk_1` FOREIGN KEY (`id_type_animal`) REFERENCES `ttypeanimal` (`id`),
  ADD CONSTRAINT `tanimal_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tuser` (`id`);

--
-- Ограничения внешнего ключа таблицы `ttreatment`
--
ALTER TABLE `ttreatment`
  ADD CONSTRAINT `ttreatment_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `tprice` (`id`),
  ADD CONSTRAINT `ttreatment_ibfk_2` FOREIGN KEY (`id_animal`) REFERENCES `tanimal` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
