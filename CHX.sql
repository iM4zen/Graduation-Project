-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2023 at 01:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CHX`
--

-- --------------------------------------------------------

--
-- Table structure for table `faslmodares`
--

CREATE TABLE `faslmodares` (
  `id` int(11) NOT NULL,
  `rqm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fasl` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faslmodares`
--

INSERT INTO `faslmodares` (`id`, `rqm`, `fasl`) VALUES
(4, '70', '52'),
(6, '21', '42'),
(8, '112', '754');

-- --------------------------------------------------------

--
-- Table structure for table `gadwaal2ltoolab`
--

CREATE TABLE `gadwaal2ltoolab` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `deen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `rqmfasl` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ghyab` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mstwa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nshaat` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gadwaal2ltoolab`
--

INSERT INTO `gadwaal2ltoolab` (`id`, `name`, `phone`, `deen`, `rqmfasl`, `ghyab`, `mstwa`, `nshaat`) VALUES
(1, 'مازن محمد', '24124223', 'مسلم', '1', '7', 'فاجر', 'علمي رياضة'),
(4, 'حمادة علي', '23121321', 'مسلم', '5', '20', 'فاجر', 'العاب البحر');

-- --------------------------------------------------------

--
-- Table structure for table `gadwaalsfoof2ldrasa`
--

CREATE TABLE `gadwaalsfoof2ldrasa` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `human` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gadwaalsfoof2ldrasa`
--

INSERT INTO `gadwaalsfoof2ldrasa` (`id`, `name`, `human`) VALUES
(1, 'الصف الخامس', 'عبد الله احمد'),
(4, 'الصف التاني الأعدادي', 'عبد الله احمد سعيد'),
(6, 'الخامس', 'مازن');

-- --------------------------------------------------------

--
-- Table structure for table `gadwal2lfasl`
--

CREATE TABLE `gadwal2lfasl` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mkan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ameen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ra2ed` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `numbers` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rqm` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gadwal2lfasl`
--

INSERT INTO `gadwal2lfasl` (`id`, `name`, `mkan`, `ameen`, `ra2ed`, `numbers`, `rqm`) VALUES
(1, '1/1', 'الدور الأول', 'صبحي كابر', 'عادل شكل', '12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nateega2ltolab`
--

CREATE TABLE `nateega2ltolab` (
  `id` int(11) NOT NULL,
  `id2lmada` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aldrga` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nateega2ltolab`
--

INSERT INTO `nateega2ltolab` (`id`, `id2lmada`, `aldrga`) VALUES
(1, '5', '45'),
(3, '23', '25212');

-- --------------------------------------------------------

--
-- Table structure for table `subjectdata`
--

CREATE TABLE `subjectdata` (
  `id` int(11) NOT NULL,
  `madaname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `also8ra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aldrga2lkobra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modaresawal` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjectdata`
--

INSERT INTO `subjectdata` (`id`, `madaname`, `also8ra`, `aldrga2lkobra`, `modaresawal`) VALUES
(1, 'اللغة العربية', '50', '100', 'عادل شكل'),
(2, 'انجليزي', '20', '50', 'حموكشا'),
(5, 'انجليزي', '20', '100', 'شسيشسسشيشسي');

-- --------------------------------------------------------

--
-- Table structure for table `teachersdata`
--

CREATE TABLE `teachersdata` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ta3yeen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `salary` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `codemada` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachersdata`
--

INSERT INTO `teachersdata` (`id`, `name`, `address`, `phone`, `ta3yeen`, `salary`, `codemada`) VALUES
(1, 'صبحي كابر', 'كفر ابو حسيبة', '2412412', '2/2/2000', '7000 جنيه', '1'),
(5, 'حمادة علي', 'كفر ابو حسيبة', '23131232100', '1/2/1999', '4542 جنيه', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faslmodares`
--
ALTER TABLE `faslmodares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gadwaal2ltoolab`
--
ALTER TABLE `gadwaal2ltoolab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gadwaalsfoof2ldrasa`
--
ALTER TABLE `gadwaalsfoof2ldrasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gadwal2lfasl`
--
ALTER TABLE `gadwal2lfasl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nateega2ltolab`
--
ALTER TABLE `nateega2ltolab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectdata`
--
ALTER TABLE `subjectdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachersdata`
--
ALTER TABLE `teachersdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faslmodares`
--
ALTER TABLE `faslmodares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gadwaal2ltoolab`
--
ALTER TABLE `gadwaal2ltoolab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gadwaalsfoof2ldrasa`
--
ALTER TABLE `gadwaalsfoof2ldrasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gadwal2lfasl`
--
ALTER TABLE `gadwal2lfasl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nateega2ltolab`
--
ALTER TABLE `nateega2ltolab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjectdata`
--
ALTER TABLE `subjectdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachersdata`
--
ALTER TABLE `teachersdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
