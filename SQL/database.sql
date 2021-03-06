-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 12:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `E_ID` bigint(20) DEFAULT NULL,
  `APP_ID` bigint(10) NOT NULL,
  `APP_DATE` date DEFAULT NULL,
  `APP_TIME` bigint(2) DEFAULT NULL,
  `SER_NAME` varchar(20) DEFAULT NULL,
  `AC_ID` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`E_ID`, `APP_ID`, `APP_DATE`, `APP_TIME`, `SER_NAME`, `AC_ID`) VALUES
(1112212, 111122245, '2021-05-09', 11, 'hair cut', 12332),
(1112212, 111122246, '2021-05-09', 11, 'hair cut', 12332),
(1112212, 111122247, '2021-05-09', 11, 'hair cut', 12332),
(1112212, 1111222211, '2021-05-09', 9, 'hair cut', 12332),
(4567890123, 2001012345, '2021-09-05', 14, 'HAIR CUT', 12345),
(4567890123, 2001101234, '2021-09-05', 12, 'HAIR COLOURING', 1234),
(9012345678, 2001290123, '2021-09-05', 13, 'HAIR STRAIGHTENING', 90123),
(9012345678, 2002067890, '2021-09-05', 16, 'FACIAL-GOLD', 67890),
(8901234567, 2002078901, '2021-09-05', 15, 'FACIAL-PLATINUM', 78901),
(9012345678, 2002089012, '2021-09-05', 14, 'THREADING', 89012),
(5678901234, 2003045678, '2021-09-05', 18, 'WAXING', 45678),
(6789012345, 2003056789, '2021-09-05', 17, 'FACIAL-SILVER', 56789),
(7890123456, 2003089312, '2021-09-05', 11, 'PEDICURE', 89312),
(7890123456, 2004045640, '2021-09-05', 19, 'SAREE DRAPE', 45640),
(7890123456, 2004045654, '2021-09-05', 9, 'MAKEUP & STYLING', 45654),
(9012345678, 2004056766, '2021-09-05', 10, 'MANICURE', 56766),
(5678901234, 2005001234, '2021-09-05', 11, 'FACIAL-SILVER', 1234),
(9012345678, 2005012345, '2021-09-05', 8, 'EYE REJUVINATION', 12345),
(6789012345, 2005090123, '2021-09-05', 13, 'HAIR CUT', 90123),
(7890123456, 2010089012, '2021-09-05', 3, 'EYE REJUVINATION', 90123),
(88888888, 2221554654, '2021-05-09', 8, 'hair cut', 111),
(8970226511, 9141161514, '2021-05-09', 8, 'HAIR  CUT', 99999);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `INV_NUM` bigint(20) NOT NULL,
  `APP_ID` bigint(20) DEFAULT NULL,
  `INV_DATE` date DEFAULT NULL,
  `AMT_PAYABLE` bigint(7) DEFAULT NULL,
  `PAID_DATE` date DEFAULT NULL,
  `PAID_STATUS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`INV_NUM`, `APP_ID`, `INV_DATE`, `AMT_PAYABLE`, `PAID_DATE`, `PAID_STATUS`) VALUES
(455, 1111222211, '2021-05-09', 5564, '2021-09-05', 'success'),
(456, 1111222211, '2021-05-09', 5564, '2021-09-05', 'success'),
(568, 2001101234, '2021-05-09', 5564, '2021-09-05', '0'),
(1001, 2001012345, '2020-06-24', 250, '2020-06-23', '0'),
(1002, 2001101234, '2020-06-24', 1000, '2020-06-23', '0'),
(1003, 2001290123, '2020-06-24', 150, '2020-06-23', '0'),
(1004, 2002089012, '2020-06-24', 1000, '2020-06-23', '0'),
(1005, 2002078901, '2020-06-24', 850, '2020-06-23', '0'),
(1006, 2002067890, '2020-06-24', 650, '2020-06-23', '0'),
(1007, 2003056789, '2020-06-24', 800, '2020-06-23', '0'),
(1008, 2003045678, '2020-06-24', 400, '2020-06-23', '0'),
(1009, 2003089312, '2020-06-24', 300, '2020-06-23', '0'),
(1010, 2004056766, '2020-06-24', 3000, '2020-06-23', '0'),
(1011, 2004045654, '2020-06-24', 1000, '2020-06-23', '0'),
(1012, 2004045640, '2020-06-24', 2000, '2020-06-23', '0'),
(1013, 2005012345, '2020-06-24', 150, '2020-06-23', '0'),
(1014, 2005001234, '2020-06-24', 650, '2020-06-23', '0'),
(1015, 2005090123, '2020-06-24', 400, '2020-06-23', '0'),
(1016, 2010089012, '2020-06-24', 250, '2020-06-23', '0'),
(2552, 1111222211, '2021-05-09', NULL, '2021-09-05', '0');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` bigint(20) NOT NULL,
  `C_FNAME` varchar(20) DEFAULT NULL,
  `C_LNAME` varchar(20) DEFAULT NULL,
  `C_GENDER` char(1) DEFAULT NULL,
  `C_DOB` date DEFAULT NULL,
  `C_ADD` varchar(100) DEFAULT NULL,
  `C_PINCODE` bigint(6) DEFAULT NULL,
  `C_PHONE` bigint(20) DEFAULT NULL,
  `C_EMAIL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_FNAME`, `C_LNAME`, `C_GENDER`, `C_DOB`, `C_ADD`, `C_PINCODE`, `C_PHONE`, `C_EMAIL`) VALUES
(111, 'rajlakshmi', 'n n', 'f', '2002-12-01', 'jjr nagar', 560018, 85538506147, 'sumanthsumee0@gmail.com'),
(1234, 'ASHA', 'KN', 'F', '1990-11-07', 'MARATHALLI BANGALORE', 520025, 9239222311, 'ASHAKN@gmail.com'),
(12332, 'rajlakshmi', 'n n', 'f', '2002-12-01', 'jjr nagar', 560018, 85538506147, 'sumanthsumee0@gmail.com'),
(12345, 'ASHA', 'RANI', 'F', '1992-11-07', 'JNANABHARATHI BANGALORE', 560056, 821234579, 'ASHARANI@gmail.com'),
(45640, 'VINUTHA', 'H', 'F', '1992-11-07', 'KENGERI BANGALORE', 560701, 9127578700, 'VINUTHAH@gmail.com'),
(45654, 'ARATHI', 'P', 'F', '1991-11-07', 'DVG ROAD BANGALORE', 560008, 9197568900, 'ARATHI@gmail.com'),
(45678, 'VEENA', 'A', 'F', '1996-11-07', 'RT NAGAR BANGALORE', 560071, 9123568700, 'VEENA@gmail.com'),
(56766, 'ASHA', 'RAMESH', 'F', '1988-11-07', 'MG ROAD BANGALORE', 560006, 9127876087, 'ASHARAMESH@gmail.com'),
(56789, 'SMITHA', 'SHEKAR B', 'F', '1991-11-07', 'JAYA PRAKASH NAGAR BANGALORE', 560006, 9897060700, 'SMITHASHEKARB@gmail.com'),
(67890, 'MADHU???', 'B', 'F', '1995-11-07', 'MYSORE ROAD BANGALORE', 560056, 9946006670, 'MADHU@gmail.com'),
(78901, 'VEENA', 'POTDAR', 'F', '1992-11-07', 'MAGADI MAIN ROAD BANGALORE', 560055, 9927007700, 'DURGA@gmail.com'),
(89012, 'SHALINI???', 'N', 'F', '1993-11-07', 'BIDADI BANGALORE', 560065, 9988127720, 'SANDEEP@gmail.com'),
(89312, 'MARY', 'CHERIAN', 'F', '1984-11-07', 'HEBBAL BANGALORE', 560896, 2993408700, 'MARYCHERIAN@gmail.com'),
(90123, 'LAVANYA', 'SANTHOSH', 'F', '1995-11-07', 'SUNKADAKATTE BANGALORE', 560025, 9945245711, 'LAVANYA@gmail.com'),
(99999, 'rajlakshmi', 'n n', 'f', '2002-12-01', 'jjr nagar', 560023, 85538506147, 'sumanthsumee0@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_ID` bigint(20) NOT NULL,
  `E_FNAME` varchar(20) DEFAULT NULL,
  `E_LNAME` varchar(20) DEFAULT NULL,
  `E_GENDER` char(1) DEFAULT NULL,
  `E_DOB` date DEFAULT NULL,
  `E_ADDRESS` varchar(100) DEFAULT NULL,
  `E_PINCODE` bigint(6) DEFAULT NULL,
  `E_PHONE` bigint(20) DEFAULT NULL,
  `E_EMAIL` varchar(50) DEFAULT NULL,
  `E_SALARY` bigint(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_ID`, `E_FNAME`, `E_LNAME`, `E_GENDER`, `E_DOB`, `E_ADDRESS`, `E_PINCODE`, `E_PHONE`, `E_EMAIL`, `E_SALARY`) VALUES
(1112212, 'hello', 'hi', 'm', '2002-12-01', 'JJR nagar', 560018, 8553850615, '1da19cs@drait.edu.in', 50000),
(88888888, 'gkghsd', 'ee', 'g', '2002-12-01', 'JJR nagar', 560018, 8553850615, '1da19cs@drait.edu.in', 50000),
(123456789, 'SAKSHI', 'SINGH', 'F', '1997-11-07', 'VIJYNAGAR BANGALORE', 524125, 9999222211, 'SRISHTI@gmail.com', 10000),
(1234567890, 'SRISHTI', 'SINGH', 'F', '1994-11-07', 'RAJAJINAGAR BANGALORE', 524125, 8216548791, 'SRISHTI@gmail.com', 7000),
(4567890123, 'ANUPAMA???', 'SHAH', 'F', '1998-11-07', 'INDIRA NAGAR BANGALORE', 560001, 9127566700, 'ANUPAMA@gmail.com', 12000),
(5678901234, 'SANVI???', 'JOSEPH', 'F', '1997-11-07', 'JAYA PRAKASH NAGAR BANGALORE', 560006, 9127066700, 'SANVI@gmail.com', 15000),
(6789012345, 'AMRUTHA???', 'SASTRY', 'F', '1995-11-07', 'KOTTIGEPALYA BANGALORE', 560056, 9927006700, 'AMRUTHA@gmail.com', 12000),
(7890123456, 'DURGA???', 'SHREE', 'F', '2021-11-07', 'MAGADI MAIN ROAD BANGALORE', 560055, 9927007700, 'DURGA@gmail.com', 8000),
(8901234567, 'SANDEEP???', 'MS', 'M', '1993-11-07', 'JP NAGAR BANGALORE', 560005, 9988007700, 'SANDEEP@gmail.com', 19000),
(8970226511, 'sdjfsf', 'fsdf', 'F', '2002-12-01', 'JJR nagar', 560018, 8553850615, '1da19cs@drait.edu.in', 50000),
(9012345678, 'Vineeth???', 'Awasthi', 'M', '1995-11-07', 'RR NAGAR BANGALORE', 520025, 9988227711, 'Vineeth@gmail.com', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `service_rendered`
--

CREATE TABLE `service_rendered` (
  `APP_ID` bigint(10) DEFAULT NULL,
  `SER_ID` bigint(10) NOT NULL,
  `E_ID` bigint(20) DEFAULT NULL,
  `SER_NAME` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_rendered`
--

INSERT INTO `service_rendered` (`APP_ID`, `SER_ID`, `E_ID`, `SER_NAME`) VALUES
(2001012345, 1, 4567890123, 'HAIR CUT'),
(2001101234, 2, 4567890123, 'HAIR COLOURING'),
(2001290123, 3, 9012345678, 'HAIR STRAIGHTENING'),
(2002089012, 4, 9012345678, 'THREADING'),
(2002078901, 5, 8901234567, 'FACIAL-PLATINUM'),
(2002067890, 6, 9012345678, 'FACIAL-GOLD'),
(2003056789, 7, 6789012345, 'FACIAL-SILVER'),
(2003045678, 8, 5678901234, 'WAXING'),
(2003089312, 9, 7890123456, 'PEDICURE'),
(2004056766, 10, 9012345678, 'MANICURE'),
(2004045654, 11, 7890123456, 'MAKEUP & STYLING'),
(2004045640, 12, 7890123456, 'SAREE DRAPE'),
(2005012345, 13, 9012345678, 'EYE REJUVINATION'),
(2005001234, 14, 5678901234, 'FACIAL-SILVER'),
(2005090123, 15, 9012345678, 'HAIR CUT'),
(2010089012, 16, 7890123456, 'EYE REJUVINATION'),
(1111222211, 19, 123456789, 'hair cut'),
(1111222211, 21, 123456789, 'hair cut'),
(1111222211, 22, 88888888, 'hair cut'),
(1111222211, 25, 88888888, 'hair cut'),
(1111222211, 26, 88888888, 'hair cut');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`APP_ID`),
  ADD KEY `AC_ID` (`AC_ID`),
  ADD KEY `E_ID` (`E_ID`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`INV_NUM`),
  ADD KEY `APP_ID` (`APP_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indexes for table `service_rendered`
--
ALTER TABLE `service_rendered`
  ADD PRIMARY KEY (`SER_ID`),
  ADD KEY `APP_ID` (`APP_ID`),
  ADD KEY `E_ID` (`E_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`AC_ID`) REFERENCES `customer` (`C_ID`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`E_ID`) REFERENCES `employee` (`E_ID`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`APP_ID`) REFERENCES `appointment` (`APP_ID`);

--
-- Constraints for table `service_rendered`
--
ALTER TABLE `service_rendered`
  ADD CONSTRAINT `service_rendered_ibfk_1` FOREIGN KEY (`APP_ID`) REFERENCES `appointment` (`APP_ID`),
  ADD CONSTRAINT `service_rendered_ibfk_2` FOREIGN KEY (`E_ID`) REFERENCES `employee` (`E_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
