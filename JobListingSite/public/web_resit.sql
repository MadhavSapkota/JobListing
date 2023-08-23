-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2018 at 05:33 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_resit`
--

-- --------------------------------------------------------

--
-- Table structure for table `addjob`
--

CREATE TABLE IF NOT EXISTS `addjob` (
`job_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `deadLine` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addjob`
--

INSERT INTO `addjob` (`job_id`, `category_name`, `type_name`, `location`, `deadLine`, `description`) VALUES
(18, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(19, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(20, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(22, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(35, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(36, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(37, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(38, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(39, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(40, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(41, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(42, 'jdsdns', '', '', '0000-00-00', ''),
(43, 'jdsdns', '', '', '0000-00-00', ''),
(45, 'Programmer', 'FullTime', '', '0000-00-00', ''),
(46, 'Chaudahari', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE IF NOT EXISTS `contactform` (
`contact_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `jobcategory` varchar(255) NOT NULL,
  `jobType` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `resume` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`contact_id`, `firstname`, `surname`, `jobcategory`, `jobType`, `date_of_birth`, `email`, `phonenumber`, `resume`) VALUES
(1, '', '', 'Programmer', 'FullTime', '0000-00-00', '', '', ''),
(2, 'Madhav', 'Sapkota', 'Programmer', 'FullTime', '1998-09-10', 'sapkotamadhav500@gmail.com', '9863849382', 0x636974697a656e736869702e6a70672e706466),
(3, '', '', 'Programmer', 'FullTime', '0000-00-00', '', '', ''),
(4, '', '', 'Programmer', 'FullTime', '0000-00-00', '', '', 0x636974697a656e736869702e6a70672e706466),
(5, 'Maheshwor', 'Yadav', 'Database Administrator', 'FullTime', '0000-00-00', '', '', ''),
(6, '', '', 'Programmer', 'FullTime', '0000-00-00', '', '', ''),
(7, '', '', 'Programmer', 'FullTime', '0000-00-00', '', '', ''),
(8, '', '', 'Programmer', 'FullTime', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'madhav', '$2y$10$BE/dVIDclEC3movygddd7es4KXjMK0PUwZvDVRh0EsHcpetiTPs7y'),
(3, 'user', '$2y$10$7CzJlOVuO2VtQjMoNCibDeTfofxHCJzLuLHC803X2qzf4M6OYi2ri'),
(4, 'Jank', '$2y$10$Ut6F0jLM/xYFgaP1DSGuAu7E5yw41nBz8LPFNeDrld8lIbFzJshh.');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
`user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`user_id`, `username`, `password`) VALUES
(3, 'Hello', '$2y$10$jcU861xFTL/noNvJZEQmXunXW/xHVT.lebf2JOhPkjN3bmPJ3uTNa'),
(4, 'Madhav', '$2y$10$S6TvSj865FDAwpGYQxC2PO7USBDCHXyomSgz9Ny7OqEk8hR6JzwTu'),
(5, 'user', 'user'),
(6, 'Madhav', '$2y$10$BSkWxKb0v5Ay5i2SVc6Dl.lrvUST87oYn8Ws1KoMdLYiqVL44fOrO'),
(7, 'Hari', '$2y$10$USApobZNhZVDor1GXJXEbusnLFGppa.MpWiaqh0Hjdhrnt/uR7rfm'),
(8, 'Passang', '$2y$10$7gYlBzSKzKc11QVxB3nwe.J4hUZHK.XoUgPoV/mo/oZpD38gYOO/e'),
(9, 'Madhav', 'Madhav'),
(10, 'Hari', 'Ram'),
(11, 'ABC', 'Sapkota'),
(12, 'Madhav', 'Sapkota'),
(13, 'Madhav', 'Sapkota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addjob`
--
ALTER TABLE `addjob`
 ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addjob`
--
ALTER TABLE `addjob`
MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
