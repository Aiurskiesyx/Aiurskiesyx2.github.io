-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 02:53 PM
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
-- Database: `posttest5`
--

-- --------------------------------------------------------

--
-- Table structure for table `kucing`
--

CREATE TABLE `kucing` (
  `id` int(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kucing`
--

INSERT INTO `kucing` (`id`, `nama`, `umur`, `deskripsi`, `picture`) VALUES
(1, 'Neo', 2, 'Male and not yet sterilized\r\nLikes to eat and sleep\r\na little shy and fierce but very cute', '2023-10-23 Neo.jpeg'),
(2, 'Wonu', 6, 'Male and sterilized\r\nBecause of his black fur he is often considered a bad luck charm and is chased off the road.\r\nActually, he is shy and sweet', '2023-10-23 Wonu.jpg'),
(8, 'Nako', 3, 'Female and sterilized\r\nVery spoiled and loves to cuddle\r\nRescued from a restaurant that eats cat meat', '2023-10-23 Nako.jpeg'),
(9, 'Mino', 4, 'Mino and sterilized\r\nBorn with one blind eye, \r\neven so he is still very active \r\nHe also loves to eat.', '2023-10-23 Mino.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kucing`
--
ALTER TABLE `kucing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kucing`
--
ALTER TABLE `kucing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
