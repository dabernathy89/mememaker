-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2015 at 02:00 PM
-- Server version: 5.6.13
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mememaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `mememaker`
--

CREATE TABLE IF NOT EXISTS `mememaker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `top_text` varchar(255) NOT NULL,
  `bottom_text` varchar(255) NOT NULL,
  `meme_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
