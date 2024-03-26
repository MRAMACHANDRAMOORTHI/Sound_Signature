-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2016 at 02:33 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sound`
--
CREATE DATABASE IF NOT EXISTS `sound` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sound`;

-- --------------------------------------------------------

--
-- Table structure for table `soundreg`
--

CREATE TABLE IF NOT EXISTS `soundreg` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `x3` int(11) DEFAULT NULL,
  `y3` int(11) DEFAULT NULL,
  `x4` int(11) DEFAULT NULL,
  `y4` int(11) DEFAULT NULL,
  `x5` int(11) DEFAULT NULL,
  `y5` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `field` varchar(20) DEFAULT NULL,
  `secqn` varchar(100) NOT NULL,
  `secans` varchar(100) NOT NULL,
  `ques1` varchar(500) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ques2` varchar(500) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ques3` varchar(300) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ques4` varchar(300) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `ques5` varchar(300) NOT NULL,
  `ans5` varchar(100) NOT NULL,
  UNIQUE KEY `sid` (`sid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `soundreg`
--

INSERT INTO `soundreg` (`sid`, `name`, `x1`, `y1`, `x2`, `y2`, `x3`, `y3`, `x4`, `y4`, `x5`, `y5`, `dob`, `time`, `sex`, `address`, `city`, `email`, `field`, `secqn`, `secans`, `ques1`, `ans1`, `ques2`, `ans2`, `ques3`, `ans3`, `ques4`, `ans4`, `ques5`, `ans5`) VALUES
(3, 'Anand', 17, 57, 42, 52, 67, 32, 25, 26, 25, 33, '1975-01-12', '3', 'Male', '23,Brigadier st,', 'Mumbai', 'anand@gmail.com', 'AirForce', 'Favourite Color', 'green', 'First school', 'abc', 'First college', 'xyz', 'House name', 'villa', 'Vacation place', 'Manali', 'Friend name', 'Ram'),
(7, 'Ram', 85, 27, 43, 18, 58, 20, 36, 29, 93, 27, '1978-02-03', '2', 'Male', '34,North st,', 'Chennai', 'ram@gmail.com', 'Defence', 'Favourite Color', 'green', 'City name', 'Arcot', 'Country name', 'India', 'First School', 'Middle school', 'Second school', 'High school', 'College', 'Acb'),
(12, 'Hari', 130, 31, 42, 122, 186, 114, 187, 106, 186, 47, '1977-03-10', '5', 'Male', '32,South street,', 'Chennai', 'hari@gmail.com', 'AirForce', 'Favourite Color', 'green', 'City name', 'Arcot', 'First School', 'Pre school', 'Sec School', 'Middle school', 'First college', 'Xyz', 'Vacation', 'Manali'),
(13, 'Shankar', 160, 53, 61, 135, 84, 125, 24, 107, 53, 51, '1977-05-10', '1', 'Male', '2343,South Street,', 'Chennai', 'sundar@gmail.com', 'Defence', 'Favourite Color', 'green', 'First city', 'abc', 'Second city', 'veb', 'First school', 'Sun', 'Second school', 'sec', 'College', 'coll'),
(14, 'Kumar', 165, 149, 146, 118, 131, 110, 166, 142, 29, 143, '1979-04-03', '2', 'Male', '85,South Arcade', 'Gujrat', 'kumar@gmail.com', 'Navy', 'Favourite Color', 'green', 'First school', 'Abc', 'First city', 'xyz', 'First pre school', 'ps', 'First College', 'Nyc', 'Vacation', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `field` varchar(50) DEFAULT NULL,
  `fname` varchar(1000) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `fpath` varchar(1000) DEFAULT NULL,
  `atype` varchar(50) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `name`, `field`, `fname`, `type`, `size`, `fpath`, `atype`) VALUES
(13, 'Anand', 'AirForce', 'ºÏüßb²1áÅ´qþue¢', 'image/jpeg', '620888', '¢Ë@€âHB\nÑ˜»âEYî2³?]£¦Ã–´^áœo5', 'private'),
(15, 'Anand', 'AirForce', 'ª½2_Á»AæÃ€ûp', 'text/plain', '43', '¢Ë@€âHB\nÑ˜»âEYî²â Ýê¿ñ÷Ø~¦ƒ', 'public'),
(18, 'Ram', 'Defence', 'Â„§¿š-YÍ‰nå–fk+', 'java/*', '834', '×bþQ:d–¼~~qÛ‰§&Ùù—c\rSn-Ì%H[¤', 'private'),
(24, 'Hari', 'AirForce', '£îlï÷NuáSí)–u', 'image/jpeg', '595284', '\r\rIë©ÂÓªaÁÀ4ð’T‘ûF|µrk\Za¯BM(Ò>ušåèá`6ñ¨)-ó\r$', 'private'),
(25, 'Kumar', 'Navy', 'óÑí~5æÇ–B–Á	â»', 'image/jpeg', '561276', '¬ÙVÆm]™b BîxÜ¢rèÞQëåsð#âx:TÝ\n¤L>ušåèá`6ñ¨)-ó\r$', 'private');

-- --------------------------------------------------------

--
-- Table structure for table `userlock`
--

CREATE TABLE IF NOT EXISTS `userlock` (
  `name` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlock`
--

INSERT INTO `userlock` (`name`, `status`) VALUES
('Anand', 'Released'),
('Sundar', 'Released'),
('Samuel', 'Released'),
('Ganesh', 'Released'),
('Hari', 'Released');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
