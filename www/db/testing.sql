-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
--         : 127.0.0.1
--                            :        12 2014   ., 17:44
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
--                                      `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES
(6, 3, '          ', 0),
(7, 3, '              ', 0),
(8, 3, '        ', 1),
(9, 3, '          ', 0),
(21, 2, '              ', 1),
(22, 2, '                ', 0),
(29, 6, '    ', 0),
(30, 6, '      ', 1),
(31, 7, '                    ', 0),
(32, 7, '                  ', 1),
(33, 7, '            ', 0);

-- --------------------------------------------------------

--
--                                   `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
--                                      `questions`
--

INSERT INTO `questions` (`id`, `title`) VALUES
(2, '                                               ?'),
(3, '                                                                  ?'),
(6, '                                             ?'),
(7, '                                                           ?');

-- --------------------------------------------------------

--
--                                   `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `sex` text NOT NULL,
  `about` text NOT NULL,
  `age` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
--                                      `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `email`, `sex`, `about`, `age`) VALUES
(0, 'login', 'password', '-', '-', '', '-', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
