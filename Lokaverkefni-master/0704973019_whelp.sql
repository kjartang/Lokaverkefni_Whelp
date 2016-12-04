-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2016 at 10:29 PM
-- Server version: 5.7.14-log
-- PHP Version: 5.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `0704973019_whelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `location` varchar(80) DEFAULT NULL,
  `open` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `location`, `open`) VALUES
(1, 'KFC', 'Faxafen 2', '11:00 - 22:00'),
(2, 'Roadhouse', 'Snorrabraut 56', '11:30 - 22:00'),
(10, 'Taco Bell', 'Hjallahraun', '11:00 - 10:00'),
(13, 'HamborgaraFabrikkan', 'Reykjavík', '11:30 - 21:30'),
(14, 'Subway', 'Kringlan', '11:00-18:30');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_info`
--

CREATE TABLE IF NOT EXISTS `restaurant_info` (
  `id_restaurant_info` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(45) NOT NULL,
  `open` varchar(45) NOT NULL,
  PRIMARY KEY (`id_restaurant_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `restaurant_info`
--

INSERT INTO `restaurant_info` (`id_restaurant_info`, `location`, `open`) VALUES
(1, 'Höfðatorg', '11:30 - 21:30'),
(2, 'Kringlan', '11:30 - 21:30'),
(3, 'Akureyri', '11:30 - 21:00');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `reviewID` int(10) NOT NULL AUTO_INCREMENT,
  `review` varchar(300) NOT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reviewName` varchar(30) NOT NULL,
  PRIMARY KEY (`reviewID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewID`, `review`, `reviewDate`, `reviewName`) VALUES
(5, 'HæHóJíbbí Yay', '2016-12-03 17:32:56', 'petursh'),
(10, 'Já mér fannst þessi veitingstaður rosalega gópður 10/10', '2016-12-03 18:11:53', 'guffik');

-- --------------------------------------------------------

--
-- Table structure for table `storedimages`
--

CREATE TABLE IF NOT EXISTS `storedimages` (
  `id_images` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id_images`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `storedimages`
--

INSERT INTO `storedimages` (`id_images`, `image_path`) VALUES
(1, 'Upload Image'),
(2, '/images/Fabrikkan_logo_black.png'),
(3, '/images/random_image.jpg'),
(4, '/images/hehexdxd.png'),
(5, '/images/Kfc_logo.png'),
(6, '/images/Hlöllabátar.png'),
(7, '/images/Hlollabatar.png'),
(8, '/images/Hlollabatar.png'),
(10, '/images/002.png');

-- --------------------------------------------------------

--
-- Table structure for table `upload_img`
--

CREATE TABLE IF NOT EXISTS `upload_img` (
  `Img_id` int(255) NOT NULL AUTO_INCREMENT,
  `Img_name` varchar(500) DEFAULT NULL,
  `Img_path` varchar(500) DEFAULT NULL,
  `Img_type` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `username`, `email`, `password`, `reg_date`) VALUES
(1, 'Pétur Snær Hauksson', 'petursh', 'petursh97@gmail.com', 'mypassword', '2016-12-02 12:32:23'),
(8, 'In´golfur Árni Laufsson', 'laufmeister', 'ingoarni@hotmail.com', 'mypassword', '2016-12-03 17:56:06'),
(9, 'Guðvarður Kjartanson', 'guffik', 'guffik1@simnet.is', 'mypassword', '2016-12-03 18:10:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
