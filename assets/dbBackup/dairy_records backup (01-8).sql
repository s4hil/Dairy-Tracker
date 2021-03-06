-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 01, 2021 at 01:56 PM
-- Server version: 10.4.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u883347914_dairy_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `dairy_records`
--

CREATE TABLE `dairy_records` (
  `id` int(11) NOT NULL,
  `date` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `month` int(5) NOT NULL,
  `quantity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `dairy_records`
--

INSERT INTO `dairy_records` (`id`, `date`, `month`, `quantity`) VALUES
(29, '1/6/2021', 6, 3),
(30, '2/6/2021', 6, 0),
(31, '3/6/2021', 6, 6),
(32, '4/6/2021', 6, 4),
(33, '5/6/2021', 6, 3.5),
(34, '6/6/2021', 6, 2),
(35, '7/6/2021', 6, 2),
(36, '8/6/2021', 6, 2.5),
(37, '9/6/2021', 6, 1.5),
(38, '10/6/2021', 6, 4),
(39, '11/6/2021', 6, 2),
(40, '12/6/2021', 6, 2),
(41, '13/6/2021', 6, 2),
(42, '14/6/2021', 6, 2),
(43, '15/6/2021', 6, 2),
(44, '16/6/2021', 6, 3.5),
(45, '17/6/2021', 6, 4),
(46, '18/6/2021', 6, 4.5),
(47, '19/6/2021', 6, 4.5),
(48, '20/6/2021', 6, 3.5),
(49, '21/6/2021', 6, 4.5),
(50, '22/6/2021', 6, 5),
(51, '23/6/2021', 6, 4.5),
(52, '24/6/2021', 6, 4.5),
(53, '25/6/2021', 6, 4.5),
(54, '26/6/2021', 6, 4),
(55, '27/6/2021', 6, 4),
(59, '28/6/2021', 6, 4),
(60, '29/6/2021', 6, 3),
(61, '1/5/2021', 5, 3),
(62, '2/5/2021', 5, 2),
(63, '3/5/2021', 5, 2.5),
(64, '4/5/2021', 5, 2.5),
(65, '5/5/2021', 5, 2),
(66, '6/5/2021', 5, 2),
(67, '7/5/2021', 5, 3),
(68, '8/5/2021', 5, 3),
(69, '9/5/2021', 5, 3),
(70, '10/5/2021', 5, 3.5),
(71, '11/5/2021', 5, 3.5),
(72, '12/5/2021', 5, 0),
(73, '13/5/2021', 5, 0),
(74, '14/5/2021', 5, 7),
(75, '15/5/2021', 5, 3),
(76, '16/5/2021', 5, 3.5),
(77, '17/5/2021', 5, 3),
(78, '18/5/2021', 5, 4.5),
(79, '19/5/2021', 5, 3.5),
(80, '20/5/2021', 5, 3.5),
(81, '21/5/2021', 5, 3.5),
(82, '22/5/2021', 5, 4),
(83, '23/5/2021', 5, 3.5),
(84, '24/5/2021', 5, 3.5),
(85, '25/5/2021', 5, 4),
(86, '26/5/2021', 5, 4),
(87, '27/5/2021', 5, 3),
(88, '28/5/2021', 5, 3),
(89, '29/5/2021', 5, 2.5),
(90, '30/5/2021', 5, 1.5),
(91, '31/5/2021', 5, 3),
(92, '30/6/2021', 6, 3),
(93, '1/7/2021', 7, 3),
(94, '2/7/2021', 7, 2),
(96, '3/7/2021', 7, 2),
(97, '4/7/2021', 7, 2.5),
(98, '5/7/2021', 7, 1.5),
(99, '6/7/2021', 7, 3.5),
(100, '7/7/2021', 7, 2.5),
(102, '8/7/2021', 7, 2.5),
(103, '9/7/2021', 7, 2.5),
(104, '10/7/2021', 7, 2.5),
(105, '11/7/2021', 7, 3.5),
(106, '12/7/2021', 7, 3),
(107, '13/7/2021', 7, 3.5),
(108, '14/7/2021', 7, 3.5),
(109, '15/7/2021', 7, 3),
(110, '16/7/2021', 7, 3),
(111, '17/7/2021', 7, 3),
(112, '18/7/2021', 7, 3),
(113, '19/7/2021', 7, 4),
(115, '20/7/2021', 7, 0),
(116, '21/7/2021', 7, 0),
(117, '22/7/2021', 7, 5.5),
(118, '24/7/2021', 7, 4.5),
(119, '23/7/2021', 7, 4),
(120, '25/7/2021', 7, 3.5),
(121, '28/7/2021', 7, 3.5),
(122, '27/7/2021', 7, 3.5),
(123, '26/7/2021', 7, 4),
(124, '29/7/2021', 7, 4.5),
(125, '30/7/2021', 7, 5),
(126, '31/7/2021', 7, 3),
(127, '1/8/2021', 8, 3.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dairy_records`
--
ALTER TABLE `dairy_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dairy_records`
--
ALTER TABLE `dairy_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
