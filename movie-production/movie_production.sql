-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 04, 2022 at 01:13 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_production`
--

-- --------------------------------------------------------

--
-- Table structure for table `comapny`
--

CREATE TABLE `comapny` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `website` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `number_of_movies` smallint(11) NOT NULL,
  `total_box_office` int(11) NOT NULL,
  `date_founded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comapny`
--

INSERT INTO `comapny` (`id`, `name`, `address`, `phone_number`, `website`, `description`, `number_of_movies`, `total_box_office`, `date_founded`) VALUES
(1, 'Warped Productions', '11 Donald Place, Midletown, Co. Cork', '(021) 551861', 'https://www.warped-productions.com/', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3, 120000, '2022-03-01'),
(2, 'Interstellar Studios', '11 Adelaide Road, Glenageary, Co. Dublin', '(01) 8796790', 'https://interstellar-studios.ie/', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', 5, 150000, '2022-03-01'),
(3, 'Enclave Animations', '9 Bridge Street, Tuam, Co. Galway', '(051) 27409775', 'https://enclave-animations.ie/', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. ', 7, 200000, '2022-03-02'),
(4, 'Hemlock Studios', '20 The White House, Castlebar, Co. Mayo', '(095) 625472', 'ttps://hemlock-studios.com/', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 2, 300000, '2022-03-07'),
(5, 'Bald Eagle Pictures', '49 Main St, Cappamore, Co. Limerick', '(051) 0365970', 'https://bald-eagle-pictures.ie/', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 10, 10000000, '2022-03-03'),
(6, 'Mutual Title Productions', '34 Moore Street, Athlone, Co Westmeath', '(041) 915156', 'http://mutual-title-productions.com/', 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. ', 1, 20000, '2022-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `director` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `company` int(11) NOT NULL,
  `synopsis` varchar(250) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `rating` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `director`, `release_date`, `company`, `synopsis`, `genre`, `rating`) VALUES
(2, 'Recruit Of The Moon', 'Bridgette Fitzpatrick', '2022-03-01', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Action, Romance', 2),
(3, 'Visiting The Shadows', 'Sam Crawford', '2022-03-01', 2, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'Horror, Romance', 1),
(4, 'Chasing Time', 'Ruthie Palmer', '2022-03-01', 3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', 'Action, Romance', 3),
(5, 'Challenge Of The Elements', 'Salvador Flynn', '2022-03-01', 4, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. ', 'Action, Romance', 4),
(6, 'Taste Of The Mountains', 'Ginger Hobbs', '2022-03-02', 5, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. ', 'Horror, Romance', 5),
(7, 'Traces In The Sea', 'Rick Turner', '2022-03-02', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Horror, Romance', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comapny`
--
ALTER TABLE `comapny`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comapny`
--
ALTER TABLE `comapny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
