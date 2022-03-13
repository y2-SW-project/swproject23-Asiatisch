-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2022 at 07:37 PM
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
-- Database: `medical_centre`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical_centre`
--

CREATE TABLE `medical_centre` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `website_url` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `rating` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_centre`
--

INSERT INTO `medical_centre` (`id`, `title`, `address`, `phone`, `type`, `website_url`, `description`, `rating`) VALUES
(1, 'Talbot St Medical Centre', 'Unit 27, Irish Life Mall 1, Talbot St, Dublin, D01 P620', '(01) 872 7087', 'Medical centre', 'https://talbotstmedicalcentre.ie/', 'Aliquam dui metus, efficitur a molestie ac, finibus nec nisl. Donec sagittis a augue id gravida. Sed hendrerit tempus sapien. Phasellus nec mi in enim scelerisque cursus et quis diam. Mauris in gravida nulla. Nunc luctus risus eu nunc finibus bibendum. Proin porta posuere venenatis. Donec sed finibus purus, quis tempus nunc.', 4),
(2, 'Highfield Alzheimer’s Care Centre', '9 Swords Rd, Whitehall, Dublin, D09 H343', '(01) 837 4444', 'Hospital', 'https://talbotstmedicalcentre.ie/', 'Aliquam dui metus, efficitur a molestie ac, finibus nec nisl. Donec sagittis a augue id gravida. Sed hendrerit tempus sapien. Phasellus nec mi in enim scelerisque cursus et quis diam. Mauris in gravida nulla. Nunc luctus risus eu nunc finibus bibendum. Proin porta posuere venenatis. Donec sed finibus purus, quis tempus nunc.', 2),
(3, 'Swords Health Center', 'Bridge St, Townparks, Swords, Co. Dublin, K67 X765', '(01) 921 2100', 'Community health centre', 'https://talbotstmedicalcentre.ie/', 'Aliquam dui metus, efficitur a molestie ac, finibus nec nisl. Donec sagittis a augue id gravida. Sed hendrerit tempus sapien. Phasellus nec mi in enim scelerisque cursus et quis diam. Mauris in gravida nulla. Nunc luctus risus eu nunc finibus bibendum. Proin porta posuere venenatis. Donec sed finibus purus, quis tempus nunc.', 3),
(4, 'Greystones Medical Centre', 'Mill Rd, Killincarrig, Greystones, Co. Wicklow, A63 YE86', '(01) 287 4275', 'Medical centre', 'https://talbotstmedicalcentre.ie/', 'Aliquam dui metus, efficitur a molestie ac, finibus nec nisl. Donec sagittis a augue id gravida. Sed hendrerit tempus sapien. Phasellus nec mi in enim scelerisque cursus et quis diam. Mauris in gravida nulla. Nunc luctus risus eu nunc finibus bibendum. Proin porta posuere venenatis. Donec sed finibus purus, quis tempus nunc.', 1),
(5, 'Bray Medical Centre', 'Herbert Rd, Bray, Co. Wicklow, A98 K1K0', '(01) 286 2035', 'General practitioner', 'https://talbotstmedicalcentre.ie/', 'Aliquam dui metus, efficitur a molestie ac, finibus nec nisl. Donec sagittis a augue id gravida. Sed hendrerit tempus sapien. Phasellus nec mi in enim scelerisque cursus et quis diam. Mauris in gravida nulla. Nunc luctus risus eu nunc finibus bibendum. Proin porta posuere venenatis. Donec sed finibus purus, quis tempus nunc.', 5),
(6, 'Merrion Fertility Clinic', '60 Lower Mount Street, Dublin 2, Dublin, D02 NH93', '(01) 663 5000', 'Fertility clinic', 'https://talbotstmedicalcentre.ie/', 'Aliquam dui metus, efficitur a molestie ac, finibus nec nisl. Donec sagittis a augue id gravida. Sed hendrerit tempus sapien. Phasellus nec mi in enim scelerisque cursus et quis diam. Mauris in gravida nulla. Nunc luctus risus eu nunc finibus bibendum. Proin porta posuere venenatis. Donec sed finibus purus, quis tempus nunc.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `centre_id` tinyint(4) NOT NULL,
  `insurance` varchar(10) NOT NULL,
  `preferences` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `address`, `phone`, `email`, `dob`, `centre_id`, `insurance`, `preferences`) VALUES
(12, 'Alan McFadden', '38 Liam McGearailt Pl, Duntahane Rd Fermoy Co Cork', '(025) 340776', 'alan18550@boranora.com', '2022-02-10', 1, 'VHI', 'Email'),
(13, 'Sanjay Charles', 'The Old Road Stud Tullow Co Waterford', '(058) 656344', 'sanjay.charles@nevadaibm.com', '2022-02-10', 2, 'Laya', 'Phone'),
(14, 'Victoria Keith', 'Main Street Urlingford Co Kilkenny', '(0504) 21734', 'vivky@tednbe.com', '2022-02-10', 3, 'Aviva', 'Email'),
(15, 'Sama Wells', '14 Lower Main St Buncrana Co Donegal', '(090) 650758', 'sama39@tigo.tk', '2022-02-10', 4, 'VHI', 'Post'),
(16, 'Arham Mata', '3 Ballysimon Road Limerick', '(061) 418133', 'arham.mata@ermtia.com', '2022-02-10', 5, 'Laya', 'Email'),
(17, 'Nayla Bateman', 'Windmill Park Saintfield Co Down', '(048) 97511402', 'nyla@cuenmex.com', '2022-02-10', 6, 'Irish Life', 'Phone,Post');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_centre`
--
ALTER TABLE `medical_centre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical_centre`
--
ALTER TABLE `medical_centre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;