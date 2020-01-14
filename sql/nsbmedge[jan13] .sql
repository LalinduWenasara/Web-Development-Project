-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 09:15 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsbmedge`
--
CREATE DATABASE IF NOT EXISTS `nsbmedge` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nsbmedge`;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `fid` int(4) NOT NULL,
  `fname` text NOT NULL,
  `fdescription` varchar(300) NOT NULL,
  `fimage` longblob NOT NULL,
  `favailability` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`fid`, `fname`, `fdescription`, `fimage`, `favailability`, `price`) VALUES
(47, 'Chicken Fried Rice', 'Moist and fluffy chickenfried rice  with a ginger garlic vegetable stir-fry.', 0x636869636b656e2d66726965645f34335f312e312e3134365f333236583538302e4a706567, 'lunch,dinner', 200),
(48, 'Biriyani', 'Experience the aromatic pull of a homemade chicken biriyani ', 0x796f74397a666f63786971786567687573786e792e6a7067, 'breakfast,lunch', 300),
(49, 'rice and curry', ' rice, mildly spiced beetroot curry,  pumpkin curry cooked in coconut milk,  a few slices of Cucumber in a bed of lettuce leaves', 0x3134313031373135303233332d7372692d6c616e6b612d666f6f642d342e6a7067, 'breakfast,lunch', 150),
(50, 'Cheese Lover[Regular]', 'Ricotta, fresh mozzarella, provolone,  classic shredded cheese blend, garlic and olive oil', 0x6368656573652e6a7067, 'lunch,dinner', 975),
(51, 'Chicken Bacon[Regular]', 'Ricotta, fresh mozzarella, provolone,  classic shredded cheese blend, garlic and olive oil', 0x63686b62612e6a7067, 'breakfast,lunch', 975),
(52, 'Pancake', 'The homey goodness of plain golden pancakes served with whipped butter', 0x70616e2e6a706567, 'breakfast', 50),
(53, 'test', 'test test test test test', 0x742d6d63646f6e616c64732d46696c65742d4f2d466973682e706e672e6a7067, 'breakfast,lunch', 123),
(54, 'test2 test2', 'test test test', 0x742d6d63646f6e616c64732d46696c65742d4f2d466973682e706e672e6a7067, 'breakfast,lunch', 123),
(55, 'test3 test3', 'test test test', 0x742d6d63646f6e616c64732d46696c65742d4f2d466973682e706e672e6a7067, 'breakfast,lunch', 123),
(57, 'test4', 'test test4 test4 ', 0x3130323631352d73732d686f742d646f672d74797065732d30342d696d672e6a7067, 'breakfast', 0),
(64, 'lllll', 'wwww', 0x666f6f6473322e6a7067, 'breakfast', 0),
(65, 'lllll', 'wwww', 0x666f6f6473322e6a7067, 'breakfast', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `userid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `fid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `logininfo`
--
ALTER TABLE `logininfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
