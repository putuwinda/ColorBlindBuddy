-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 03:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colorbuddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `colorblindtest`
--

CREATE TABLE `colorblindtest` (
  `id` int(11) NOT NULL,
  `answer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colorblindtest`
--

INSERT INTO `colorblindtest` (`id`, `answer`) VALUES
(1, '12'),
(2, '8'),
(3, '6'),
(4, '29'),
(5, '57'),
(6, '5'),
(7, '3'),
(8, '15'),
(9, '74'),
(10, '2'),
(11, '6'),
(12, '97'),
(13, '45'),
(14, '5'),
(15, '7'),
(16, '16'),
(17, '73'),
(18, '26'),
(19, '42'),
(20, '35'),
(21, '96'),
(22, '15'),
(23, '7'),
(24, 'nothing'),
(25, 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `correctanswer` varchar(100) NOT NULL,
  `explanation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `choice1`, `choice2`, `choice3`, `correctanswer`, `explanation`) VALUES
(1, 'Which one is not the cause of colorblindness?', 'Aging', 'Eye diseases', 'Radiation from computers', 'Radiation from computers', 'The cause of color blindness is genetic (passed from mother to son on the 23rd chromosome), eye diseases, aging or retina damage.'),
(2, 'Animal which has stronger color vision from these options below is', 'Butterflies', 'Cats', 'Rabbits', 'Butterflies', 'Butterflies have superior vision and can see colors humans can’t even see.'),
(3, 'Which one is not the type of colorblind?', 'Presbyopia', 'Protanopia', 'Achromatopsia', 'Presbyopia', 'Presbyopia is one of types of refractive error, not the type of colorblind.'),
(4, 'These country bans colorblind people from having driving license, except', 'Romania', 'Brazil', 'Turkey', 'Brazil', 'It is illegal for color blind people who live in Romania and Turkey to have a driver’s since they fear that color blind drivers couldnt read traffic signs.'),
(5, 'What is the creator of colorblind test method which used in one of our features?', 'Jean-Marie Jouannic', 'Shinobu Ishihara', 'John Dalton', 'Shinobu Ishihara', 'Ishihara plates was created by Shinobu Ishihara,a professor at the University of Tokyo at 1917.'),
(6, 'How many people in the US who suffered from colorblind?', '50 percent of total people', '1 percent of total people', '8 percent of total people', '8 percent of total people', 'There are 8% of people with colorblindness in US.'),
(7, 'Who is the first person who write scientific paper about colorblind?', 'Jean-Marie Jouannic', 'Shinobu Ishihara', 'John Dalton', 'John Dalton', 'John Dalton wrote the first known scientific paper about color blindness. It is the reason why colorblind sometimes called as Daltonism.'),
(8, 'Which one cant be use to check if someone is colorblinded or not?', 'Anomalscope', 'Ishihara Plates', 'Snellen Chart', 'Snellen Chart', 'Anomalscope test is done by matching the color with the one beside it. When using Ishihara plates, people need to tell what number on an image. Snellen Chart is used to check eye vision.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colorblindtest`
--
ALTER TABLE `colorblindtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colorblindtest`
--
ALTER TABLE `colorblindtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
