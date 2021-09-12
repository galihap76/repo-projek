-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 11:43 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien_rumah_sakit`
--

CREATE TABLE `pasien_rumah_sakit` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `tinggal` varchar(100) NOT NULL,
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL,
  `kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien_rumah_sakit`
--

INSERT INTO `pasien_rumah_sakit` (`id`, `nama`, `umur`, `gender`, `tinggal`, `check_in`, `check_out`, `kamar`) VALUES
(1, 'Galih Anggoro Prasetya', '17', 'Pria', 'Slawi', 'Rabu', 'Kamis', 'Mawar'),
(2, 'tidak di ketahui', '20', 'pria', 'slawi', '2022-04-11', '2050-02-27', 'Melati'),
(3, 'Airi Satou', '37', 'Pria', 'Jepang', '2020-30-11', '2810-20-33', 'mawar'),
(4, 'Angelica', '40', 'wanita', 'canada', '4000', '500', 'melati'),
(5, 'aston cox', '50', 'pria', 'indonesia', '10000', '76', 'anggreani'),
(6, 'caesar vance', '70', 'wanita', 'canada', '90', '80', 'melati'),
(7, 'darton', '20', 'pria', 'australia', '10', '20', 'jasmine'),
(8, 'nando', '40', 'pria', 'malaysia', '10', '50', 'anggrek'),
(9, 'dai rios', '60', 'pria', 'finlandia', '10', '70', 'melati'),
(10, 'david', '10', 'pria', 'finlandia', '10', '50', 'melati'),
(11, 'nasha', '90', 'wanita', 'cina', '10', '40', 'mawar'),
(12, 'gerald', '30', 'pria', 'inggris', '2020', '1010', 'anggrek'),
(13, 'berald', '33', 'pria', 'inggris', '10', '20', 'melati'),
(14, 'rul', '20', 'wanita', 'jakarta', '30', '90', 'melati'),
(15, 'nami', '40', 'wanita', 'jepang', '40', '50', 'anggrek'),
(16, 'dedi', '70', 'pria', 'bandung', '90', '50', 'kaktus'),
(17, 'gadi', '37', 'pria', 'arabia', '80', '30', 'kaktus'),
(18, 'gaduu', '30', 'pria', 'arabia', '40', '20', 'melati'),
(19, 'fafa', '30', 'pria', 'taiwan', '20', '40', 'melati'),
(20, 'hari', '30', 'pria', 'canada', '30', '40', 'mawar'),
(21, 'ribet', '30', 'pria', 'malaysia', '20', '40', 'mawar'),
(22, 'hacker', '17', 'pria', '&lt;script&gt;document.document.innerHTML=&#039;&#039;&lt;/script&gt;', 'hacked by MR.G4P', 'pentesting', 'Kamar Pasien');

-- --------------------------------------------------------

--
-- Table structure for table `user_rumah_sakit`
--

CREATE TABLE `user_rumah_sakit` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rumah_sakit`
--

INSERT INTO `user_rumah_sakit` (`id`, `username`, `password`) VALUES
(32, 'admin', '$2y$10$iIA4wfutdZORzoocu5y15O5myGm1l/DOmKJJhLF46ZwJOiKzv4oei');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visitor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitor`) VALUES
(61);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien_rumah_sakit`
--
ALTER TABLE `pasien_rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rumah_sakit`
--
ALTER TABLE `user_rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien_rumah_sakit`
--
ALTER TABLE `pasien_rumah_sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user_rumah_sakit`
--
ALTER TABLE `user_rumah_sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
