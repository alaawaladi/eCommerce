-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2021 at 01:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL COMMENT 'to identify user',
  `UserName` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT 'username to login',
  `Password` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT 'password to login',
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `FullName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `GroupId` int(11) NOT NULL DEFAULT 0 COMMENT 'Identify user group',
  `TrustStatus` int(11) NOT NULL DEFAULT 0 COMMENT 'trust seller',
  `Regstatus` int(11) NOT NULL DEFAULT 0 COMMENT 'user approvet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `Password`, `email`, `FullName`, `GroupId`, `TrustStatus`, `Regstatus`) VALUES
(1, 'alaa', '8b8406810f8a840eb2e32c87d5cbbad9313d48d4', 'alaa@gmail.com', 'alaa waladi', 0, 0, 0),
(2, 'ahmad', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'ahmad@hotmail.com', 'ahmad ahmad', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'to identify user', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
