-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2026 at 11:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comp1841`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `EmailFrom` text NOT NULL,
  `Content` text NOT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `EmailFrom`, `Content`, `Date`) VALUES
(8, 'user@fpt.edu.vn', 'Fix bug', '26/04/16');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `Id` int(11) NOT NULL,
  `NameFilm` text NOT NULL,
  `DateFilm` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`Id`, `NameFilm`, `DateFilm`, `image`) VALUES
(61, 'Tranformer 2', '2004', '1775382638_download 2.jpeg'),
(62, 'Spiderman 3', '2001', '1775382655_download (2).jpeg'),
(63, 'IronMan 3', '2001', '1775554105'),
(64, 'Ironman 2', '2001', '1775382794_download (4).jpeg'),
(65, 'Jack Vs Gaint', '2001', '1775382824_download (6).jpeg'),
(66, 'Harry Poster 1', '2001', '1775554119'),
(70, 'Spiderman 3', '2001', '1776358174_download (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reviewfilm`
--

CREATE TABLE `reviewfilm` (
  `id` int(11) NOT NULL,
  `Content` text NOT NULL,
  `Date` text NOT NULL,
  `UserId` int(11) NOT NULL,
  `FilmId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `Pass` text NOT NULL,
  `Role` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `UserName`, `Pass`, `Role`) VALUES
(11, 'Admin', '123', 1),
(19, 'Pham Huu Loi', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `filmId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `filmId`) VALUES
(9, 61),
(6, 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reviewfilm`
--
ALTER TABLE `reviewfilm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `FilmId` (`FilmId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filmId` (`filmId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `reviewfilm`
--
ALTER TABLE `reviewfilm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviewfilm`
--
ALTER TABLE `reviewfilm`
  ADD CONSTRAINT `reviewfilm_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviewfilm_ibfk_2` FOREIGN KEY (`FilmId`) REFERENCES `film` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`filmId`) REFERENCES `film` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
