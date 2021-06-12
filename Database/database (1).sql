-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2021 at 10:37 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `album_title` varchar(255) NOT NULL,
  `album_desc` varchar(255) NOT NULL,
  `album_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `album_title`, `album_desc`, `album_img`) VALUES
(1, 'Remedy for insomnia', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image/264x264 (1).jpg'),
(2, 'Night regeneration', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image/264x264 (2).jpg'),
(3, 'Night rest', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image/264x264.jpg'),
(4, 'Easy sleep Chillout sounds', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image/41A3PLbq88L._SY445_SX342_QL70_ML2_ .jpg');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `music_author` varchar(255) NOT NULL,
  `music_title` varchar(255) NOT NULL,
  `music_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `music_author`, `music_title`, `music_source`) VALUES
(1, 'Alexandra Streliski', 'Changing Winds', 'music/Alexandra Streliski - Changing Winds (2mz.me).mp3'),
(2, 'Alexandra Streliski', 'Le depart', 'music/Alexandra Streliski - Le depart.mp3'),
(3, 'Anna Markland, Eric Saty', 'Satie Gnossienne No.5', 'music/Anna Markland, Эрик Сати - Satie Gnossienne No.5 (2mz.me).mp3'),
(4, 'Annalise Emerick', 'Twinkling Lights', 'music/Annalise Emerick Twinkling Lights_(holidaymp3.ru).mp3'),
(5, 'Sufjan Stevens', 'Mystery of Love', 'music/call_me_by_your_name_13. Sufjan Stevens - Mystery of Love.mp3'),
(6, 'Diana Krall', 'wonderful', 'music/diana-krall-s-wonderful(mp3zvon.info).mp3'),
(7, 'Don Mclean', 'vincent', 'music/don-mclean_vincent.mp3'),
(8, 'Eels i', 'Need-some-sleep', 'music/eels_i-need-some-sleep.mp3'),
(9, 'Frank Sinatra', 'Moon river', 'music/frank-sinatra-moon-river.mp3'),
(10, 'Isaac Gracie', 'Reverie', 'music/Isaac-Gracie-Reverie.mp3'),
(11, 'Low Roar', 'Poznan', 'music/Low Roar - Poznan (2mz.me).mp3'),
(12, 'Simon Garfunkel', 'Sparrow', 'music/Simon-Garfunkel-Sparrow.mp3'),
(13, 'Eric Saade', 'Gnossienne No.1', 'music/Eric Saade - Gnossienne No.1.mp3'),
(14, 'Rain Sound', 'Effect 01', 'music/rain-01.mp3'),
(15, 'Rain Sound', 'Effect 02', 'music/rain-02.mp3'),
(16, 'Rain Sound', 'Effect 03', 'music/rain-03.mp3'),
(17, 'Rain Sound', 'Effect 04', 'music/rain-04.mp3'),
(18, 'Rain Sound', 'Effect 05', 'music/rain-05.mp3'),
(19, 'Rain Sound', 'Effect 06', 'music/rain-06.mp3'),
(20, 'Rain Sound', 'Effect 07', 'music/rain-07.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `phone_number`, `password`, `profile_picture`) VALUES
(129, 'Kazhymurat Khammet', 'kajohny', 'kazh@mail.ru', '87079006078', 'qwerty123', 'avatarka/10046db9055457981f30523cd4cc01e4wallpaper.jpg'),
(130, 'Example Example', 'example', 'example@mail.ru', '88005553535', '123', 'avatarka_standard/avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
