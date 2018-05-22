-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Server: 127.0.0.1
-- Generation time: 22-05-2018 at 02:58:31
-- Server version: 10.1.19-MariaDB
-- PHP version: 7.0.13
--
-- Database: `db`
--
CREATE DATABASE `db`;

use `db`;
-- --------------------------------------------------------

--
-- Table structure for `users` table
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data for the `users` table
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'johndoe', '123456'),
(2, 'marydoe', '123456');

--
-- Table indexes `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
--
-- `users` table AUTO_INCREMENT
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
