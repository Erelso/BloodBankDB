-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 09:51 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `BANK_ID` int(11) NOT NULL,
  `BANK_NAME` varchar(45) DEFAULT NULL,
  `BANK_ADDRESS` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`BANK_ID`, `BANK_NAME`, `BANK_ADDRESS`) VALUES
(1, 'Bloomfield Red Cross ', '4190 Telegraph Rd.'),
(2, 'Warren Red Cross', '13260 East Eleven Mile Rd.');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `BLOOD_ID` int(11) NOT NULL,
  `BLOOD_TYPE` char(3) DEFAULT NULL,
  `BLOODquantity` int(11) DEFAULT NULL,
  `DONOR_ID` int(11) NOT NULL,
  `BANK_ID` int(11) NOT NULL,
  `ORDER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`BLOOD_ID`, `BLOOD_TYPE`, `BLOODquantity`, `DONOR_ID`, `BANK_ID`, `ORDER_ID`) VALUES
(1, 'B', 1000, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `DONOR_ID` int(11) NOT NULL,
  `DONOR_NAME` varchar(45) DEFAULT NULL,
  `DONOR_AGE` int(11) DEFAULT NULL,
  `DONOR_SEX` char(1) DEFAULT NULL,
  `DONOR_PHONE` varchar(12) DEFAULT NULL,
  `DONOR_ADDRESS` varchar(120) DEFAULT NULL,
  `DONOR_EMAIL` varchar(45) DEFAULT NULL,
  `EMPLOYEE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`DONOR_ID`, `DONOR_NAME`, `DONOR_AGE`, `DONOR_SEX`, `DONOR_PHONE`, `DONOR_ADDRESS`, `DONOR_EMAIL`, `EMPLOYEE_ID`) VALUES
(1, 'Bob Evans', 23, 'M', '712-821-7509', '3613  Summit Street', 'pzk78jd75m@temporary-mail.net', 1),
(9, 'Clint K. Kier', 56, 'M', ' 914-474-399', '3354 Mount Tabor', 'ClintKKier@rhyta.com', 1),
(10, 'David P. Hernandez', 69, 'M', ' 217-432-612', '2165 Isaacs Creek Road', 'DavidPHernandez@rhyta.com', 1),
(11, 'Edmond B. Lucas', 29, 'M', '248-830-6194', '1988 Hayhurst Lane', ' EdmondBLucas@dayrep.com', 1),
(12, 'Daryl J. Davis', 33, 'M', '651-204-6099', '4898 Haul Road', 'CarolynJDavis@jourrapide.com', 1),
(13, 'Heather A. Peterson', 78, 'F', ' 757-399-940', '1104 Pinchelone Street', 'HeatherAPeterson@armyspy.com', 1),
(14, 'Melanie E. Brown', 27, 'F', ' 313-963-143', '4562 State Street', 'MelanieEBrown@armyspy.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMPLOYEE_ID` int(11) NOT NULL,
  `EMPLOYEE_NAME` varchar(45) DEFAULT NULL,
  `EMPLOYEE_PASSWORD` varchar(20) DEFAULT NULL,
  `EMPLOYEE_PHONE` varchar(12) DEFAULT NULL,
  `EMPLOYEE_EMAIL` varchar(45) DEFAULT NULL,
  `EMPLOYEE_TYPE` char(1) DEFAULT NULL,
  `BANK_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EMPLOYEE_ID`, `EMPLOYEE_NAME`, `EMPLOYEE_PASSWORD`, `EMPLOYEE_PHONE`, `EMPLOYEE_EMAIL`, `EMPLOYEE_TYPE`, `BANK_ID`) VALUES
(1, 'Erich Elshoff', 'password', '248-464-2482', 'erichelshoff@gmail.com', 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `HOSTOPITAL_ID` int(11) NOT NULL,
  `HOSTOPITAL_NAME` varchar(45) DEFAULT NULL,
  `HOSTOPITAL_ADDRESS` varchar(120) DEFAULT NULL,
  `HOSTOPITAL_PHONE` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`HOSTOPITAL_ID`, `HOSTOPITAL_NAME`, `HOSTOPITAL_ADDRESS`, `HOSTOPITAL_PHONE`) VALUES
(1, 'Crittenton', '2251 N Squirrel Rd', '248-377-1812'),
(2, 'Havenwyck', '1525 University Dr', '248-373-9200');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ORDER_ID` int(11) NOT NULL,
  `ORDER_QUANTITY` int(11) DEFAULT NULL,
  `ORDER_DATE` date DEFAULT NULL,
  `HOSPITAL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ORDER_ID`, `ORDER_QUANTITY`, `ORDER_DATE`, `HOSPITAL_ID`) VALUES
(1, 1000, '2020-11-23', 1),
(2, 3000, '2020-11-10', 1),
(3, 4000, '2020-11-11', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`BANK_ID`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`BLOOD_ID`),
  ADD KEY `fk_BLOOD_DONOR_idx` (`DONOR_ID`),
  ADD KEY `fk_BLOOD_BLOOD BANK1_idx` (`BANK_ID`),
  ADD KEY `fk_BLOOD_ORDER1_idx` (`ORDER_ID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`DONOR_ID`),
  ADD KEY `fk_DONOR_EMPLOYEE1_idx` (`EMPLOYEE_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMPLOYEE_ID`),
  ADD KEY `fk_EMPLOYEE_BANK1_idx` (`BANK_ID`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`HOSTOPITAL_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ORDER_ID`),
  ADD KEY `fk_ORDER_HOSPITAL1_idx` (`HOSPITAL_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `BANK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `BLOOD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `DONOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EMPLOYEE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `HOSTOPITAL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood`
--
ALTER TABLE `blood`
  ADD CONSTRAINT `fk_BLOOD_BLOOD BANK1` FOREIGN KEY (`BANK_ID`) REFERENCES `bank` (`BANK_ID`),
  ADD CONSTRAINT `fk_BLOOD_DONOR` FOREIGN KEY (`DONOR_ID`) REFERENCES `donor` (`DONOR_ID`),
  ADD CONSTRAINT `fk_BLOOD_ORDER1` FOREIGN KEY (`ORDER_ID`) REFERENCES `order` (`ORDER_ID`);

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `fk_DONOR_RECEPTIONIST1` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_EMPLOYEE_BANK` FOREIGN KEY (`BANK_ID`) REFERENCES `bank` (`BANK_ID`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_ORDER_HOSPITAL1` FOREIGN KEY (`HOSPITAL_ID`) REFERENCES `hospital` (`HOSTOPITAL_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
