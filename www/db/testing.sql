-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
--         : 127.0.0.1
--                            :        05 2014   ., 12:36
--                            : 5.5.25
--              PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
--                      : `testing`
--

-- --------------------------------------------------------

--
--                                   `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `correct` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
--                                      `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES
(1, 1, '                    ', 0),
(2, 1, '                  ', 1),
(3, 1, '            ', 0),
(6, 3, '          ', 0),
(7, 3, '              ', 0),
(8, 3, '        ', 1),
(9, 3, '          ', 0),
(21, 2, '              ', 1),
(22, 2, '                ', 0),
(28, 2, '                    ', 0),
(29, 6, '    ', 0),
(30, 6, '      ', 1);

-- --------------------------------------------------------

--
--                                   `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
--                                      `questions`
--

INSERT INTO `questions` (`id`, `title`) VALUES
(1, '                                                           ?'),
(2, '                                               ?'),
(3, '                                                                  ?'),
(6, '                                             ?');

-- --------------------------------------------------------

--
--                                   `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
--                                      `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'login', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
