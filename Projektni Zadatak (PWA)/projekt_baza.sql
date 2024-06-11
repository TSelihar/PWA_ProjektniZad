-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 12:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt_baza`
--
CREATE DATABASE IF NOT EXISTS `projekt_baza` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projekt_baza`;

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `kratki_sadrzaj` varchar(255) NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(255) NOT NULL,
  `kategorija` varchar(50) NOT NULL,
  `arhiva` tinyint(1) NOT NULL DEFAULT 0,
  `sadrzaj` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `naslov`, `kratki_sadrzaj`, `tekst`, `slika`, `kategorija`, `arhiva`, `sadrzaj`) VALUES
(8, 'Everything revealed in the May 2024 State of Play  ', 'Trailers and reveals of Astro Bot, Concord, Until Dawn, Monster Hunter Wilds, and much more. ', '', 'v2Slikevijest1.webp', 'NewReleases', 0, 'Cijeli sadržaj vijesti'),
(9, 'PlayStation Stars Campaigns and Digital Collectibles for June 2024', 'Listing all of the new digital collectibles', '', 'Slika', 'Playstation', 0, 'Cijeli sadržaj vijesti'),
(10, ' Share of the Week: Leap Share of the Week: Leap ', 'Sharing your best pictures this week', '', 'Slika', 'Shareoftheweek', 0, 'Cijeli sadržaj vijesti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
