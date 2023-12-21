-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 12:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Password` varchar(100) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Token` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Password`, `Name`, `Mobile`, `Email`, `Token`) VALUES
('$2y$10$hMvj7nmYavKDMh4pavZIoO9ml8oMzHp68RKL.GacLUBX/NmVFb.Au', 'Akash Harale ', 8291394598, 'akash@gmail.com', 'XtDw6MmjcR');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `Clinic_Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Reg_No` varchar(40) NOT NULL,
  `Token` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Licence_No` varchar(40) NOT NULL,
  `Token` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_Id` varchar(40) NOT NULL,
  `Company_Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Head` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deputy_director`
--

CREATE TABLE `deputy_director` (
  `Deputy_Id` varchar(40) NOT NULL,
  `Ministry_Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Token` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `Director_Id` varchar(40) NOT NULL,
  `Ministry_Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Token` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_Id` varchar(40) NOT NULL,
  `Clinic_Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Education` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Specialization` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Reg_No` varchar(40) NOT NULL,
  `Finger` varchar(100) NOT NULL,
  `Token` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_Id` varchar(40) NOT NULL,
  `Company_Id` varchar(40) NOT NULL,
  `Dept_Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Date_of_Joining` date NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Date_of_Leave` date NOT NULL,
  `Designation` varchar(40) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Blood_Group` varchar(5) NOT NULL,
  `Finger` varchar(100) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Token` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health_ministry`
--

CREATE TABLE `health_ministry` (
  `Ministry_Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `State` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Token` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `Lab_Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Reg_No` varchar(40) NOT NULL,
  `Finger` varchar(40) NOT NULL,
  `Token` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pathologist`
--

CREATE TABLE `pathologist` (
  `Path_Id` varchar(40) NOT NULL,
  `Lab_Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Education` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Token` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`Clinic_Id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_Id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_Id`),
  ADD KEY `Company_Id` (`Company_Id`);

--
-- Indexes for table `deputy_director`
--
ALTER TABLE `deputy_director`
  ADD PRIMARY KEY (`Deputy_Id`),
  ADD KEY `Ministry_Id` (`Ministry_Id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`Director_Id`),
  ADD KEY `Ministry_Id` (`Ministry_Id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_Id`),
  ADD KEY `Clinic_Id` (`Clinic_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_Id`),
  ADD KEY `Company_Id` (`Company_Id`),
  ADD KEY `Dept_Id` (`Dept_Id`);

--
-- Indexes for table `health_ministry`
--
ALTER TABLE `health_ministry`
  ADD PRIMARY KEY (`Ministry_Id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`Lab_Id`);

--
-- Indexes for table `pathologist`
--
ALTER TABLE `pathologist`
  ADD PRIMARY KEY (`Path_Id`),
  ADD KEY `Lab_Id` (`Lab_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`Company_Id`) REFERENCES `company` (`Company_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deputy_director`
--
ALTER TABLE `deputy_director`
  ADD CONSTRAINT `deputy_director_ibfk_1` FOREIGN KEY (`Ministry_Id`) REFERENCES `health_ministry` (`Ministry_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `director`
--
ALTER TABLE `director`
  ADD CONSTRAINT `director_ibfk_1` FOREIGN KEY (`Ministry_Id`) REFERENCES `health_ministry` (`Ministry_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`Clinic_Id`) REFERENCES `clinic` (`Clinic_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`Company_Id`) REFERENCES `company` (`Company_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`Dept_Id`) REFERENCES `department` (`Dept_Id`);

--
-- Constraints for table `pathologist`
--
ALTER TABLE `pathologist`
  ADD CONSTRAINT `pathologist_ibfk_1` FOREIGN KEY (`Lab_Id`) REFERENCES `lab` (`Lab_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
