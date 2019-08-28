-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 07:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `name` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `logs` datetime NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` longblob NOT NULL,
  `product_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`name`, `comment`, `logs`, `title`, `image`, `product_description`) VALUES
('Eswar', 'We are fortunate to have an opportunity to serve over 230 corporates, travel agencies', '2019-08-27 20:37:17', 'Travel agency automation', '', 'useful'),
('gopi', 'we are providing good product.and across the world.', '2019-08-27 20:34:40', 'Airline Forecasting', '', 'good'),
('gopinath', 'hai infiniti', '2019-08-25 12:06:39', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `multi_user`
--

CREATE TABLE `multi_user` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roll` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multi_user`
--

INSERT INTO `multi_user` (`id`, `name`, `user_name`, `password`, `roll`) VALUES
('', 'aravind', 'aravind', 'aravind', 'General_user'),
('', 'gopi', 'gopi', 'infiniti', 'admin'),
('', 'gopinath', 'gopinath', 'gopinath', 'admin'),
('', 'vikash_varun', 'vikash', 'vikash', 'General_user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `multi_user`
--
ALTER TABLE `multi_user`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
