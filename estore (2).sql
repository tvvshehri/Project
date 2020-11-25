-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 03:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Brand`, `Description`, `Price`, `Image`) VALUES
(5, 'Gucci', 'Ace GG Superme canvas trainers', 2000, 'R00048985_GOLD_ALT10.jpg'),
(7, 'Anastasia Beverly Hills', 'Eyeshadow Pallette', 100, '61LcYNNM4vL._AC_SX425_.jpg'),
(8, 'CH Carolina Herrera', 'Navy Initials Insignia suede pumps', 800, 'AACZP31R16047_01.jpg'),
(9, 'MAKE UP FOR EVER', 'Artist Liquid Matte Lipstick', 120, 'lipstick.jpg'),
(18, 'Nike', 'Nike Training SuperRep Go trainers in white', 300, '85649f82d6498695b15388912d97d39f.jpg'),
(19, 'DIOR', 'Sunglasses', 1200, '30MNTGN2_Y3RU1_TU.jpg'),
(23, 'Pretty little things', 'Light blue off shoulder dress', 750, 'dress (2).jpg'),
(24, 'Adidas', 'Navy sport shoes', 200, 'shoes2.jpg'),
(26, 'Pretty little things', 'Maxi yellow dress', 150, 'clothes1.jpg'),
(27, 'Adidas', 'Black running shoes', 200, 'shoe1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Password`) VALUES
(1, 'taif', '1234'),
(2, 'taif2', '2345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
