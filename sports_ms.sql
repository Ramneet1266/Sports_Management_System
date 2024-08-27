-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 06:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `Email`) VALUES
('Ramneet', 'waheguru997@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `User_ID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`User_ID`, `Password`, `Confirm_pass`) VALUES
('wy00', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `players_section`
--

CREATE TABLE `players_section` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(233) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Identity` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Joining` date NOT NULL,
  `Blood` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Sports_type` varchar(255) NOT NULL DEFAULT 'Football',
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Pyr_Code` varchar(255) NOT NULL,
  `Team` varchar(255) NOT NULL DEFAULT 'N.A.',
  `Address` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Block_number` varchar(255) NOT NULL,
  `Bank_Name` varchar(255) NOT NULL,
  `Account_Name` varchar(255) NOT NULL,
  `Ifsc_Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players_section`
--

INSERT INTO `players_section` (`ID`, `Image`, `Name`, `Contact`, `Identity`, `DOB`, `Joining`, `Blood`, `Age`, `Sports_type`, `Email`, `Gender`, `Pyr_Code`, `Team`, `Address`, `Nationality`, `State`, `District`, `Block_number`, `Bank_Name`, `Account_Name`, `Ifsc_Code`) VALUES
(12, 'vikas.jfif', 'Vikas ', '7973908460', 'Voter ID Card', '2023-10-15', '2023-10-17', 'b+', '21', '', 'waheguru997@gmail.com', 'Male', 'WY01', 'Black Clover', 'h no 126 model gram', 'indian', 'Punjab', 'ludhiana', '342', '324', '324', '432'),
(14, 'dharm.png', 'Dharm', '7973908460', 'Driving License', '2023-10-13', '2023-10-27', '0+', '21', 'Badminton', 'zyx@gmail.com', 'Male', 'WY02', '', 'h no 126 model gram', 'indian', 'Punjab', 'ludhiana', '3212', 'UCO', '213123', '234324'),
(15, 'sukhpreet.jpg', 'Sukhpreet', '7340917533', 'Passport', '2023-10-13', '0000-00-00', 'a+', '21', '', 'Abc@gmail.com', 'Male', 'WY03', 'Titans', 'h no 126 model gram', 'indian', 'Punjab', 'ludhiana', '213123', 'UC', '12321', '2134234'),
(16, 'harshdeep.jfif', 'Harshdeep', '7340917533', 'Aadhar Card', '2023-10-14', '2023-11-03', 'b+', '21', 'Badminton', 'rgcreation598@gmail.com', 'Male', 'WY04', '', 'h no 126 model gram', 'indian', 'Punjab', 'ludhiana', '3214324', 'UC', '32423', '23423');

-- --------------------------------------------------------

--
-- Table structure for table `player_schedule`
--

CREATE TABLE `player_schedule` (
  `ID` int(11) NOT NULL,
  `Pyr_code` varchar(255) NOT NULL,
  `Sport` varchar(255) NOT NULL,
  `Dates` date NOT NULL,
  `League` varchar(255) NOT NULL,
  `Team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player_schedule`
--

INSERT INTO `player_schedule` (`ID`, `Pyr_code`, `Sport`, `Dates`, `League`, `Team`) VALUES
(1, 'wy00', 'cricket', '2023-10-13', 'asian cup', 'titans/clover');

-- --------------------------------------------------------

--
-- Table structure for table `salary_slips`
--

CREATE TABLE `salary_slips` (
  `ID` int(11) NOT NULL,
  `Pyr_code` varchar(255) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `Bank_name` varchar(255) NOT NULL,
  `bank_account` varchar(255) NOT NULL,
  `Ifsc_code` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Salary_month` varchar(255) NOT NULL,
  `Earnings` varchar(255) NOT NULL,
  `Deductions` varchar(255) NOT NULL,
  `Net_salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_slips`
--

INSERT INTO `salary_slips` (`ID`, `Pyr_code`, `Names`, `Bank_name`, `bank_account`, `Ifsc_code`, `Gender`, `Salary_month`, `Earnings`, `Deductions`, `Net_salary`) VALUES
(14, 'wy00', 'Ramneet', 'UCO', '243234', '23423', 'female', 'may,2022', '60000', '5000', '55000');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `ID` int(11) NOT NULL,
  `Teams` varchar(255) NOT NULL,
  `Venue` varchar(255) NOT NULL,
  `Match_date` date NOT NULL,
  `Win_Loss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`ID`, `Teams`, `Venue`, `Match_date`, `Win_Loss`) VALUES
(6, 'Titans/Black clover', 'GNE', '2023-10-14', 'Win');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players_section`
--
ALTER TABLE `players_section`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `player_schedule`
--
ALTER TABLE `player_schedule`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `salary_slips`
--
ALTER TABLE `salary_slips`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players_section`
--
ALTER TABLE `players_section`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `player_schedule`
--
ALTER TABLE `player_schedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salary_slips`
--
ALTER TABLE `salary_slips`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
