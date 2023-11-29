-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 28, 2023 at 10:53 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rezerwacje`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `movie_time` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'reserved',
  `tytul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `seat_id`, `movie_time`, `status`, `tytul`) VALUES
(315, 27, 1710, 'reserved', 'Napoleon'),
(316, 72, 1710, 'reserved', 'Napoleon'),
(317, 57, 1710, 'reserved', 'Napoleon'),
(318, 51, 1710, 'reserved', 'Napoleon'),
(319, 43, 1710, 'reserved', 'Napoleon'),
(320, 42, 1710, 'reserved', 'Napoleon'),
(321, 9, 1710, 'reserved', 'Napoleon'),
(322, 11, 1710, 'reserved', 'Napoleon'),
(323, 44, 1710, 'reserved', 'Napoleon'),
(324, 4, 1810, 'reserved', 'Fnaf'),
(325, 43, 1810, 'reserved', 'Fnaf'),
(326, 28, 1810, 'reserved', 'Fnaf'),
(327, 6, 1450, 'reserved', 'Napoleon'),
(328, 22, 1450, 'reserved', 'Napoleon'),
(329, 20, 1940, 'reserved', 'Dziekcz'),
(330, 42, 1940, 'reserved', 'Dziekcz'),
(331, 26, 1940, 'reserved', 'Dziekcz');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
