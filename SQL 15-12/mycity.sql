-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 19 2021 г., 14:53
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mycity`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hobbies2`
--

CREATE TABLE `hobbies2` (
  `ID_hobbies` int NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `hobbies2`
--

INSERT INTO `hobbies2` (`ID_hobbies`, `Name`, `Description`) VALUES
(1, 'Golf', 'Golf Golf Golf Golf Golf Golf'),
(2, 'Football', 'Football Football Football Football Football'),
(3, 'Books', 'Books Books Books Books Books Books Books Books'),
(4, 'Music', 'Music Music Music Music Music Music'),
(5, 'Dance', 'Dance Dance Dance Dance Dance Dance');

-- --------------------------------------------------------

--
-- Структура таблицы `people2`
--

CREATE TABLE `people2` (
  `ID_person` int NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Age` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `people2`
--

INSERT INTO `people2` (`ID_person`, `Name`, `Surname`, `Age`) VALUES
(1, 'Bob', 'Ivanov', 10),
(2, 'Sam', 'Petrov', 15),
(3, 'Alex', 'Sidorov', 20),
(4, 'Jack', 'Sovetov', 25),
(5, 'Tom', 'Samsonov', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `people_hobbies`
--

CREATE TABLE `people_hobbies` (
  `ID_record` int NOT NULL,
  `ID_person` int DEFAULT NULL,
  `ID_hobbies` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `people_hobbies`
--

INSERT INTO `people_hobbies` (`ID_record`, `ID_person`, `ID_hobbies`) VALUES
(13, 1, 1),
(14, 2, 2),
(16, 3, 3),
(17, 4, 1),
(18, 2, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hobbies2`
--
ALTER TABLE `hobbies2`
  ADD PRIMARY KEY (`ID_hobbies`);

--
-- Индексы таблицы `people2`
--
ALTER TABLE `people2`
  ADD PRIMARY KEY (`ID_person`);

--
-- Индексы таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  ADD PRIMARY KEY (`ID_record`),
  ADD KEY `ID_person` (`ID_person`),
  ADD KEY `ID_hobbies` (`ID_hobbies`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hobbies2`
--
ALTER TABLE `hobbies2`
  MODIFY `ID_hobbies` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `people2`
--
ALTER TABLE `people2`
  MODIFY `ID_person` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  MODIFY `ID_record` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  ADD CONSTRAINT `people_hobbies_ibfk_1` FOREIGN KEY (`ID_person`) REFERENCES `people2` (`ID_person`),
  ADD CONSTRAINT `people_hobbies_ibfk_2` FOREIGN KEY (`ID_hobbies`) REFERENCES `hobbies2` (`ID_hobbies`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
