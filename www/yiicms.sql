-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 09 2017 г., 18:12
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yiicms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cms_category`
--

CREATE TABLE IF NOT EXISTS `cms_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `position` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `cms_category`
--

INSERT INTO `cms_category` (`id`, `title`, `position`) VALUES
(1, 'Новости', 'top'),
(2, 'Общая', 'top'),
(3, 'Животные', 'left'),
(4, 'Авто', 'top'),
(5, 'Рынок', 'left'),
(6, 'Продукты', 'left');

-- --------------------------------------------------------

--
-- Структура таблицы `cms_comment`
--

CREATE TABLE IF NOT EXISTS `cms_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `page_id` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `guest` varchar(15) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `cms_page`
--

CREATE TABLE IF NOT EXISTS `cms_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `cms_setting`
--

CREATE TABLE IF NOT EXISTS `cms_setting` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `defaultStatusComment` tinyint(1) DEFAULT NULL,
  `defaultStatusUser` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `cms_setting`
--

INSERT INTO `cms_setting` (`id`, `defaultStatusComment`, `defaultStatusUser`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `cms_user`
--

CREATE TABLE IF NOT EXISTS `cms_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `ban` tinyint(1) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `cms_user`
--

INSERT INTO `cms_user` (`id`, `username`, `password`, `created`, `ban`, `role`, `email`) VALUES
(1, 'admin', '20f6b389eb10670d6e1943d0f69dda55', 1442953755, 0, 1, '123'),
(2, 'demo', 'bdfa14f89855835615c8687952b90193', 1442953360, 0, 2, 'demo@demo.ru');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
