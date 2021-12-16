-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2018 at 07:17 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitaabwala`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_cat_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `book_price` int(11) DEFAULT NULL,
  `book_description` text,
  `book_author` varchar(255) DEFAULT NULL,
  `book_publication` varchar(255) DEFAULT NULL,
  `book_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`book_id`),
  KEY `sub_cat_id` (`sub_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `sub_cat_id`, `cat_id`, `book_name`, `book_price`, `book_description`, `book_author`, `book_publication`, `book_image`) VALUES
(4, 1, 1, 'Computer Orgnisation', 828, 'Language: English, Edition: 2011', 'Carl Hamacher, Safwat Zaky, Zvonko Vranesic', 'Mcgraw Higher Ed', '4.jpeg'),
(5, 1, 1, 'Programming In Ansi', 440, 'Language: English, Edition: 6th Edition, 2012', 'E. Balagurusamy', 'Mcgraw Hill Education', '5.jpeg'),
(6, 1, 1, 'Introduction To Automata', 499, 'Language: English, Edition: 3rd Edition, 2008', 'Rajeev Motwani, Jeffrey D Ullman, John E. Hopcroft', 'Pearson', '6.jpeg'),
(7, 1, 1, 'Operating System Concept', 650, 'Language: English, Edition: 8, 2009', 'Gagne, Galvin, Silberschatz', 'Wiley', '7.jpeg'),
(8, 2, 1, 'Building Materials', 250, 'Language: English, Edition: 2nd Edition, 2015', 'P. C. Varghese', 'Phi Learning', '8.jpeg'),
(9, 2, 1, 'Strength Of Material', 670, 'Language: English, Edition: 3, 2016', 'S S Rattan', 'Mcgraw Higher Ed', '9.jpeg'),
(10, 2, 1, 'FLUID MECHANICS', 670, 'LANGUAGE: ENGLISH, â€¢	GENRE: ACADEMIC AND PROFESSIONAL', 'BISWAS', 'MCGRAW HIGHER ED', '10.jpeg'),
(11, 2, 1, 'DESIGN OF STEEL STRUCTURE', 625, 'LANGUAGE: ENGLISH', 'PASALA DAYARATNAM', 'PUBLISHER: SCHAND', '11.jpeg'),
(17, 13, 4, 'Java Book', 8000, 'LANGUAGE: ENGLISH', 'Durgesh Sir', 'TechSoft INDIA.', '17.jpeg'),
(18, 1, 1, 'H K Das', 400, 'Language:English', 'H K Das', 'TechSoft INDIA.', '18.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `book_id`) VALUES
(13, 1, 11),
(7, 3, 12),
(17, 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Engineering'),
(2, 'Medical'),
(3, 'Novels'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sub_cat_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `cat_id`, `sub_cat_name`) VALUES
(1, 1, 'CS/IT'),
(2, 1, 'Civil'),
(3, 2, 'MBBS'),
(4, 2, 'BDS'),
(5, 1, 'Mechanical'),
(6, 1, 'Electrical'),
(7, 2, 'B.Pharma'),
(8, 3, 'ScienceFiction'),
(9, 3, 'Horror'),
(10, 3, 'Romance'),
(11, 4, 'Business'),
(12, 4, 'Biography'),
(13, 4, 'KidSection'),
(14, 4, 'Philosophy');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_lname` varchar(100) DEFAULT NULL,
  `user_gender` varchar(10) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_image` varchar(100) DEFAULT 'default.jpg',
  `user_password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_mobile` (`user_mobile`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_email`, `user_mobile`, `user_fname`, `user_lname`, `user_gender`, `user_address`, `user_image`, `user_password`) VALUES
(1, 'amit@gmail.com', 9651704432, 'Amit', 'Shah', 'male', 'New Delhi', 'default.jpg', '1234'),
(2, 'rupendra@gmail.com', 9651704433, 'Rupendra', 'Sargam', NULL, NULL, 'default.jpg', '1234'),
(3, 'shivam.shubham1998@gmail.com', 6394679495, 'Shivam', 'Singh', NULL, NULL, 'default.jpg', '1234'),
(4, 'shubham@gmail.com', 7800815600, 'Shubham', 'Singh', NULL, NULL, 'default.jpg', '1234'),
(5, 'shivendra@gmail.com', 8917871669, 'Shivendra', 'Singh', NULL, NULL, 'default.jpg', '1234');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_category` (`sub_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
