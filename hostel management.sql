-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 07:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(3) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `Id` int(3) NOT NULL,
  `Registration_Number` int(20) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Middle_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Contact_Number` text NOT NULL,
  `Email_Id` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Confirm_Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `residentbook`
--

CREATE TABLE `residentbook` (
  `Id` int(3) NOT NULL,
  `Resident_Name` varchar(30) NOT NULL,
  `Resident_RegisterNumber` int(20) NOT NULL,
  `Resident_EmailId` varchar(40) NOT NULL,
  `Resident_PhoneNumber` text NOT NULL,
  `Resident_FoodType` varchar(10) NOT NULL,
  `Resident_College` varchar(40) NOT NULL,
  `Resident_Course` varchar(20) NOT NULL,
  `Resident_Semester` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `residentdetails`
--

CREATE TABLE `residentdetails` (
  `Id` int(4) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `RegisterNumber` int(30) NOT NULL,
  `EmailId` varchar(40) NOT NULL,
  `ContactNumber` text NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `College` varchar(30) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Semester` int(10) NOT NULL,
  `Hostel` varchar(30) NOT NULL,
  `Room` int(10) NOT NULL,
  `FoodType` varchar(10) NOT NULL,
  `Fees` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `residenthostel`
--

CREATE TABLE `residenthostel` (
  `Id` int(3) NOT NULL,
  `Resident_EmailId` varchar(40) NOT NULL,
  `Resident_Hostel` varchar(20) NOT NULL,
  `Resident_Room` varchar(10) NOT NULL,
  `Resident_Fees` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `residentlogin`
--

CREATE TABLE `residentlogin` (
  `Id` int(3) NOT NULL,
  `Registration_Number` varchar(20) NOT NULL,
  `Email_Id` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `residentvacate`
--

CREATE TABLE `residentvacate` (
  `VacateId` int(3) NOT NULL,
  `EmailId` varchar(40) NOT NULL,
  `Reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `residentbook`
--
ALTER TABLE `residentbook`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `residentdetails`
--
ALTER TABLE `residentdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `residenthostel`
--
ALTER TABLE `residenthostel`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `residentlogin`
--
ALTER TABLE `residentlogin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `residentvacate`
--
ALTER TABLE `residentvacate`
  ADD PRIMARY KEY (`VacateId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `residentbook`
--
ALTER TABLE `residentbook`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `residentdetails`
--
ALTER TABLE `residentdetails`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `residenthostel`
--
ALTER TABLE `residenthostel`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `residentlogin`
--
ALTER TABLE `residentlogin`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `residentvacate`
--
ALTER TABLE `residentvacate`
  MODIFY `VacateId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
