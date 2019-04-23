-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 02:59 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mha`
--

-- --------------------------------------------------------

--
-- Table structure for table `test_result`
--

CREATE TABLE `test_result` (
  `result_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Test_name` varchar(50) NOT NULL,
  `Completion_date` date NOT NULL,
  `Remark` varchar(100) NOT NULL,
  `Score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_result`
--

INSERT INTO `test_result` (`result_id`, `user_id`, `Test_name`, `Completion_date`, `Remark`, `Score`) VALUES
(1, 1, 'Anxiety', '2019-04-18', 'Minimal Severity of Anxiety', 4),
(2, 9, 'Anxiety', '2019-04-18', 'Minimal Severity of Anxiety', 1),
(4, 1, 'Depression', '2019-04-18', 'Minimal Severity of Depression', 3),
(5, 1, 'Depression', '2019-04-18', 'Minimal Severity of Depression', 3),
(6, 1, 'Depression', '2019-04-18', 'Minimal Severity of Depression', 3),
(7, 1, 'Depression', '2019-04-18', 'Minimal Severity of Depression', 3),
(8, 1, 'Depression', '2019-04-18', 'Minimal Severity of Depression', 3),
(9, 1, 'Depression', '2019-04-18', 'Minimal Severity of Depression', 3),
(10, 1, 'Anxiety', '2019-04-22', 'Minimal Severity of Anxiety', 3),
(11, 0, 'Anxiety', '2019-04-22', 'Moderate Severity of Anxiety', 13),
(12, 0, 'Anxiety', '2019-04-22', 'High Severity of Anxiety', 21),
(13, 0, 'Depression', '2019-04-22', 'Very Hign Severity of Depression', 21);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Middle_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `DoB` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Con_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `First_Name`, `Middle_Name`, `Last_Name`, `DoB`, `Gender`, `Email`, `Mobile_no`, `Password`, `Con_Password`) VALUES
(1, 'rahul', 'Trilochan', 'Sar', '1997-04-05', 'Male', 'rahul@gmail.com', 2147483647, 'rahul123', 'rahul123'),
(2, 'Mukesh', 'Sajan', 'Goshla', '2019-02-28', 'others', 'goshla@gmail.com', 123456789, 'mukesh123', 'mukesh123'),
(5, 'Hosla', 'Ka', 'Goshla', '2019-02-27', 'Male', 'hosla@gmail.com', 987654321, 'hosla123', 'hosla123'),
(6, 'Me', 'Tera baap', 'Tera Baap ka Baap', '1817-02-13', 'others', 'anonymous@gmail.com', 132798456, '123456', '123456'),
(7, 'vinni', 'ginni', 'weasley', '1997-11-05', 'others', 'vinni.weasley69@gmail.com', 2147483647, 'vinniginniskinni', 'vinniginniskinni'),
(8, 'gafla', 'Corruption', 'lenedane', '1916-07-28', 'Female', 'gaflabas@gmail.com', 696969699, '69', '69'),
(9, 'Tanmay', 'Tanmay', 'Maitre', '1997-07-18', 'Male', 'tanmay@gmail.com', 785423691, 'tanmay123', 'tanmay123'),
(10, 'test1', 'test1', 'test1', '2019-04-16', 'Male', 'test123@gmail.com', 0, 'test123', 'test123'),
(11, '548', '548', '89465', '2019-04-09', 'Male', '564856@gmail.com', 98758858, 'rahul1234', 'rahul1234'),
(12, 'wiki', 's', 'san', '1997-06-21', 'Male', 'wikisan21697@gmail.com', 2147483647, 'wikisan', 'wikisan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_result`
--
ALTER TABLE `test_result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_result`
--
ALTER TABLE `test_result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
