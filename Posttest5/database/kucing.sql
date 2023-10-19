-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 11:01 AM
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
(1, 'Neo', 2, 'Male and not yet sterilized likes to eat and sleep a bit of a loner and doesn&#039;t like to cuddle but he is very sweet', '0cbfb5f7-e8d1-4f99-ab12-3267aa49f1d5.jpeg'),
(17, 'Ponyo', 3, 'Male and sterilized Rescued from a restaurant that eats cat meat. A timid and fierce but very sweet cat', '332575f6-29a8-48da-a42a-af9dcce448d1.jpeg'),
(18, 'Nako', 1, 'female and not yet sterilized Rescued from street abuse. Afraid of loud noises and very spoiled', 'Premium Photo _ Maine coon kitten.jpeg'),
(19, 'Wonu', 6, 'Male and sterilized Because it has black fur wonu is often considered a jinx and beaten on the street. Actually wonu is very sweet and cute', 'Po! Meow [MileApo] .jpeg');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
