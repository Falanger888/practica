-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 08 2023 г., 11:02
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
-- База данных: `basi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `id_line` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `rol`, `id_line`) VALUES
(1, 'Name', '123', 'admin', NULL),
(2, 'Vasya', '1q2w3', 'wizard', 1),
(3, 'Nasty', '1234', 'wizard', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Склад_готового`
--

CREATE TABLE `Склад_готового` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `1_Сорт` varchar(255) NOT NULL,
  `2_Сорт` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Склад_готового`
--

INSERT INTO `Склад_готового` (`id`, `title`, `1_Сорт`, `2_Сорт`) VALUES
(1, 'Плита (облицовочная)', '10', '15');

-- --------------------------------------------------------

--
-- Структура таблицы `материалы`
--

CREATE TABLE `материалы` (
  `ID` int NOT NULL,
  `Наименование` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Количество_кг` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `материалы`
--

INSERT INTO `материалы` (`ID`, `Наименование`, `Количество_кг`) VALUES
(1, 'Песок', 21),
(2, 'Глина', 21),
(3, 'Примесь', 19);

-- --------------------------------------------------------

--
-- Структура таблицы `линии_производства`
--

CREATE TABLE `линии_производства` (
  `ID` int NOT NULL,
  `ID_Цеха` int DEFAULT NULL,
  `ID_Статуса` int DEFAULT NULL,
  `Песок` float NOT NULL,
  `Глина` float NOT NULL,
  `Примесь` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `линии_производства`
--

INSERT INTO `линии_производства` (`ID`, `ID_Цеха`, `ID_Статуса`, `Песок`, `Глина`, `Примесь`) VALUES
(1, 1, 1, 0, 0, 0),
(2, 2, 1, 7.973, 7.973, 7.973),
(3, 2, 1, 0, 0, 0),
(4, 2, 1, 0, 0, 0),
(5, 2, 1, 0, 0, 0),
(6, 2, 1, 0, 0, 0),
(7, 2, 1, 0, 0, 0),
(8, 3, 1, 0, 0, 0),
(9, 3, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `статистика`
--

CREATE TABLE `статистика` (
  `ID` int NOT NULL,
  `ID_Линии` int DEFAULT NULL,
  `Дата` date DEFAULT NULL,
  `Брак` int DEFAULT NULL,
  `1_Сорт` int DEFAULT NULL,
  `2_Сорт` int DEFAULT NULL,
  `Статус_заказа` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `статусы`
--

CREATE TABLE `статусы` (
  `ID` int NOT NULL,
  `Наименование` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `статусы`
--

INSERT INTO `статусы` (`ID`, `Наименование`) VALUES
(1, 'Активен'),
(2, 'Не активен'),
(3, 'Ремонт');

-- --------------------------------------------------------

--
-- Структура таблицы `цеха`
--

CREATE TABLE `цеха` (
  `ID` int NOT NULL,
  `Наименование` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ID_Статуса` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `цеха`
--

INSERT INTO `цеха` (`ID`, `Наименование`, `ID_Статуса`) VALUES
(1, 'Цех 1', 1),
(2, 'Цех 2', 1),
(3, 'Цех 3', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `этапы_производства`
--

CREATE TABLE `этапы_производства` (
  `ID` int NOT NULL,
  `Наименование_этапа` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ID_Линии` int DEFAULT NULL,
  `Брак` int DEFAULT NULL,
  `1_Сорт` int DEFAULT NULL,
  `2_Сорт` int DEFAULT NULL,
  `ID_Статуса` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `этапы_производства`
--

INSERT INTO `этапы_производства` (`ID`, `Наименование_этапа`, `ID_Линии`, `Брак`, `1_Сорт`, `2_Сорт`, `ID_Статуса`) VALUES
(1, 'Сушка БРС', 1, NULL, NULL, NULL, 3),
(2, 'Пресс', 1, NULL, NULL, NULL, 1),
(3, 'Сушка Плитки', 1, NULL, NULL, NULL, 1),
(4, 'Глазировачная', 1, NULL, NULL, NULL, 1),
(5, 'Печь', 1, NULL, NULL, NULL, 2),
(6, 'Фрезер', 1, NULL, NULL, NULL, 1),
(7, 'Сортировка', 1, NULL, NULL, NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_line` (`id_line`);

--
-- Индексы таблицы `Склад_готового`
--
ALTER TABLE `Склад_готового`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `материалы`
--
ALTER TABLE `материалы`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `линии_производства`
--
ALTER TABLE `линии_производства`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Цеха` (`ID_Цеха`),
  ADD KEY `ID_Статуса` (`ID_Статуса`);

--
-- Индексы таблицы `статистика`
--
ALTER TABLE `статистика`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Этапа` (`ID_Линии`);

--
-- Индексы таблицы `статусы`
--
ALTER TABLE `статусы`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `цеха`
--
ALTER TABLE `цеха`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Статуса` (`ID_Статуса`);

--
-- Индексы таблицы `этапы_производства`
--
ALTER TABLE `этапы_производства`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Линии` (`ID_Линии`),
  ADD KEY `ID_Статуса` (`ID_Статуса`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Склад_готового`
--
ALTER TABLE `Склад_готового`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `материалы`
--
ALTER TABLE `материалы`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `линии_производства`
--
ALTER TABLE `линии_производства`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `статистика`
--
ALTER TABLE `статистика`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `статусы`
--
ALTER TABLE `статусы`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `цеха`
--
ALTER TABLE `цеха`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `этапы_производства`
--
ALTER TABLE `этапы_производства`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_line`) REFERENCES `линии_производства` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `линии_производства`
--
ALTER TABLE `линии_производства`
  ADD CONSTRAINT `линии_производства_ibfk_1` FOREIGN KEY (`ID_Цеха`) REFERENCES `цеха` (`ID`),
  ADD CONSTRAINT `линии_производства_ibfk_2` FOREIGN KEY (`ID_Статуса`) REFERENCES `статусы` (`ID`);

--
-- Ограничения внешнего ключа таблицы `статистика`
--
ALTER TABLE `статистика`
  ADD CONSTRAINT `статистика_ibfk_1` FOREIGN KEY (`ID_Линии`) REFERENCES `линии_производства` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `цеха`
--
ALTER TABLE `цеха`
  ADD CONSTRAINT `цеха_ibfk_1` FOREIGN KEY (`ID_Статуса`) REFERENCES `статусы` (`ID`);

--
-- Ограничения внешнего ключа таблицы `этапы_производства`
--
ALTER TABLE `этапы_производства`
  ADD CONSTRAINT `этапы_производства_ibfk_1` FOREIGN KEY (`ID_Линии`) REFERENCES `линии_производства` (`ID`),
  ADD CONSTRAINT `этапы_производства_ibfk_2` FOREIGN KEY (`ID_Статуса`) REFERENCES `статусы` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
