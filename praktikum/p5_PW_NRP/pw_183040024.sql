-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 10:07 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_183040024`
--

-- --------------------------------------------------------

--
-- Table structure for table `handphone`
--

CREATE TABLE `handphone` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `brand` varchar(64) NOT NULL,
  `storage` varchar(64) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handphone`
--

INSERT INTO `handphone` (`id`, `name`, `brand`, `storage`, `price`, `stock`, `picture`) VALUES
(1, 'Apple iPhone XS', 'Apple', '128 GB', 14300000, 1000, '1.png'),
(2, 'Asus ROG Phone', 'Asus', '512 GB', 13600000, 200, '2.png'),
(3, 'Huawei Mate 20', 'Huawei', '128 GB', 8900000, 3000, '3.png'),
(4, 'Samsung Galaxy M 20', 'Samsung', '32 GB', 2799000, 1000, '4.png'),
(5, 'Nokia 6.1 Plus', 'Nokia', '256 GB', 14300000, 300, '5.png'),
(6, 'Asus Zenfone Max m2', 'Asus', '64 GB', 2199000, 2000, '6.png'),
(7, 'Oppo F11 Pro', 'Oppo', '64 GB', 2999999, 900, '7.png'),
(8, 'Vivo V15 Pro', 'Vivo', '64 GB', 4949000, 200, '8.png'),
(9, 'Samsung Galaxy Note 9', 'Samsung', '1 TB', 14300000, 100, '9.png'),
(10, 'Xiaomi Mi 8 Lite', 'Xiaomi', '64 GB', 3999000, 1000, '10.png'),
(11, 'apple', 'apple', '64 GB', 12330190, 121212, 'png'),
(12, 'apple', 'apple', '64 GB', 12330190, 121212, '5cb7f9c72f947.png'),
(13, 'apple', 'apple', '64 GB', 12330190, 121212, '5cb7fa4f739d5.png'),
(14, 'galaxy 10', 'samsung', 'd', 12330190, 121212, '5cc2f88d1a97e.png');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'avip.png', '183040024', 'Avip Syaifulloh', 'syaifulloh.183040024@mail.unpas.ac.id', 'Teknik Informatika'),
(2, 'bakhtiar.png', '183040004', 'Bakhtiar', 'bakhtiar.183040004@mail.unpas.ac.id', 'Teknik Informatika'),
(3, 'rizky.png', '183040008', 'Rizky Ramadhan', 'ramadhan.183040008@mail.unpas.ac.id', 'Teknik Informatika'),
(4, 'hadi.png', '183040035', 'Hadi Sutarma', 'sutarma.183040035@mail.unpas.ac.id', 'Teknik Informatika'),
(5, 'fadhlan.png', '183040015', 'Fadhlanrashif Ibrahim Supriana', 'supriana.183040015@mail.unpas.ac.id', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$PA1zphERWiJ2.XC5MsPHCOl2YKv8aVfjrPTCz6UF8yrlakepS7xyO', '2019-04-18 03:27:51'),
(3, 'uiquwiquw', '$2y$10$4kAt6tiOesl8mXfcivKJ5.SHq0IvRFIiU0VCu4nmKj.75WxvwZY2S', '0000-00-00 00:00:00'),
(4, 'rizky', '$2y$10$p6MBM6hPVqvToM.kdKHa4OEnrzDRom21lru9v0eTblqIAkReE6Joa', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `handphone`
--
ALTER TABLE `handphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `handphone`
--
ALTER TABLE `handphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
