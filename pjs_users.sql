-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Nov 2016 pada 09.11
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pjs_users`
--

CREATE TABLE `pjs_users` (
  `id_users` bigint(12) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(32) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pjs_users`
--

INSERT INTO `pjs_users` (`id_users`, `user_name`, `user_pass`, `first_name`, `last_name`, `user_email`) VALUES
(1283746201, 'admin00', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Kaizen', 'fatankaizen@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pjs_users`
--
ALTER TABLE `pjs_users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pjs_users`
--
ALTER TABLE `pjs_users`
  MODIFY `id_users` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1283746202;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
