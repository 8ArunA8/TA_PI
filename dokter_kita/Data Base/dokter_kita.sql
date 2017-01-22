-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2017 at 12:52 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysqli_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `nama`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_dokter` int(200) NOT NULL,
  `h_chat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `bidang` varchar(200) NOT NULL,
  `rumah_sakit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tinggi_badan` int(200) NOT NULL,
  `berat_badan` int(200) NOT NULL,
  `umur` int(200) NOT NULL,
  `no_telepon` char(14) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `tinggi_badan`, `berat_badan`, `umur`, `no_telepon`, `password`) VALUES
(1, 'Riky Aruna Rafi', 'kaka@kaka.com', 170, 55, 19, '088806765006', '$2y$10$83rTkGHB5LGnwufC/cJthOGZ8JjqPe9LCbUh32bGHVuxV7HGwG6O2'),
(2, 'Aruna', 'aruna@aruna.co', 169, 54, 20, '089918481712', '$2y$10$NJnrY3LFHTWSGdeGKsGEJOZ9Z4Nc.59HgeV2m23jafQaR4jdrthlG'),
(3, 'yuni', 'yuni@yuni.com', 168, 51, 20, '088102948192', '$2y$10$odQwSl8j2AbHxKB2UjKyRelKpPXI9dS6zq6mnlrnOwazlAt.B2Blq'),
(4, 'Rafi Aruna Riky', 'rafi@rafi.com', 172, 55, 19, '01728471946', '$2y$10$X6fnG3.16f2tznsrkolVVO26qHjoCV4N7jb0M93vWd9Yx8N3hDYRm'),
(5, 'awang', 'awang@gmail.com', 170, 56, 23, '0881517451736', '$2y$10$1HrAe7ShLWA4wilQBR2q9.e/aFOpRHGiuYS4nfdy4HygUsg9Kb0Y6'),
(8, 'Uvuvewvew Osas', 'osas@osas.com', 167, 50, 22, '018918721981', '$2y$10$bPdxO4nLVdEMyJBAV4u4yusrY0VhecBfs9nSvclXVp/VPah5SbXz.'),
(15, 'Tenryuu', 'tenryuu@jp.com', 180, 60, 20, '088806765006', 'f32a1ebe7551b78063ed38bb5b19e62c'),
(16, 'Ricardo Kaka', 'realkaka@kaka.com', 186, 88, 33, '081317417118', '$2y$10$34smcrGXv8jwMmJDQsMuEO8YW69FmydQtFlTYsqdSYWTagM6cg68a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
