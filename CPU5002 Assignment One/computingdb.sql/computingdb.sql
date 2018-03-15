--
-- Database: `computingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ModuleID` int(11) NOT NULL,
  `ModuleCode` varchar(8) NOT NULL,
  `ModuleTitle` text,
  `Hours` int(1) DEFAULT NULL,
  `Year` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ModuleID`, `ModuleCode`, `ModuleTitle`, `Hours`, `Year`) VALUES
(1, 'CPU4000', 'Core Skills', 5, 1),
(2, 'CPU4001', 'Website Production', 4, 1),
(3, 'CPU4002', 'Information Systems & Databases', 5, 1),
(4, 'CPU4003', 'Introduction to Programming', 6, 1),
(5, 'CPU4004', 'Computer Platforms', 3, 1),
(6, 'CPU4005', 'Networking Fundamentals', 4, 1),
(7, 'CPU5000', 'Level 2 Project', 6, 2),
(8, 'CPU5001', 'Web Programming', 4, 2),
(9, 'CPU5002', 'Database Theory and Practice', 3, 2),
(10, 'CPU5003', 'UNIX', 5, 2),
(11, 'CPU5004', 'Mobile Application Design', 5, 2),
(12, 'CPU5005', 'Internet Applications', 4, 2),
(13, 'CPU5006', 'System Analysis and Design', 5, 2),
(14, 'CPU5007', 'Object Oriented Methods', 4, 2),
(15, 'CPU5008', 'Data Structure and Algorithms', 5, 2),
(16, 'CPU5009', 'Wireless Networks and Security', 3, 2),
(17, 'CPU5010', 'Routing Fundamentals', 5, 2),
(18, 'CPU5011', 'Network Architecture', 6, 2),
(19, 'CPU5012', 'Wide Area Network', 4, 2),
(20, 'CPU6001', 'Major Project', 6, 3),
(21, 'CPU6004', 'Network Security', 4, 3),
(22, 'CPU6005', 'Facilating E-Commerce', 4, 3),
(23, 'CPU6008', 'Software Engineering', 5, 3),
(24, 'CPU6009', 'Network Management', 5, 3),
(25, 'CPU7000', 'Software Development', 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `LectureID` int(11) NOT NULL,
  `LectureCode` text NOT NULL,
  `ModuleID` int(11) NOT NULL,
  `StaffID` varchar(6) NOT NULL,
  `Room` varchar(10) DEFAULT NULL,
  `Occurance` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`LectureID`, `LectureCode`, `ModuleID`, `StaffID`, `Room`, `Occurance`) VALUES
(1, 'CPU4000-LA1CRT', 1, 'LA1CRT', 'C2-07A', 'A'),
(2, 'CPU4001-MA1CRT', 2, 'MA1CRT', 'C2-07', 'A'),
(3, 'CPU4001-AD1CRT', 2, 'AD1CRT', 'C2-07A', 'B'),
(4, 'CPU4001-MS1CRT', 2, 'MS1CRT', 'C2-07', 'C'),
(5, 'CPU4002-AP1CRT', 3, 'AP1CRT', 'C2-04', 'C'),
(6, 'CPU4002-AP1CRT', 3, 'AP1CRT', 'C2-04', 'B'),
(7, 'CPU4003-AR1CRT', 4, 'AR1CRT', 'C2-06', 'A'),
(8, 'CPU4003-BT1CRT', 4, 'BT1CRT', 'C2-09', 'B'),
(9, 'CPU4003-AP1CRT', 4, 'AP1CRT', 'C2-04', 'C'),
(10, 'CPU4004-AR1CRT', 5, 'AR1CRT', 'C2-06', 'A'),
(11, 'CPU4005-TG1CRT', 6, 'TG1CRT', 'C2-04', 'A'),
(12, 'CPU5000-SW1CRT', 7, 'SW1CRT', 'C2-10', 'A'),
(13, 'CPU5000-LA1CRT', 7, 'LA1CRT', 'C2-07A', 'B'),
(14, 'CPU5001-MS1CRT', 8, 'MS1CRT', 'C2-07', 'A'),
(15, 'CPU5001-MA1CRT', 8, 'MA1CRT', 'C2-07', 'B'),
(16, 'CPU5002-MS1CRT', 9, 'MS1CRT', 'C2-07', 'A'),
(17, 'CPU5002-MA1CRT', 9, 'MA1CRT', 'C2-07', 'B'),
(18, 'CPU5003-RC1CRT', 10, 'RC1CRT', 'C2-07A', 'A'),
(19, 'CPU5004-AI1CRT', 11, 'AI1CRT', 'C2-06', 'A'),
(20, 'CPU5005-MS1CRT', 12, 'MS1CRT', 'C2-07', 'A'),
(21, 'CPU5005-BT1CRT', 12, 'BT1CRT', 'C2-09', 'B'),
(22, 'CPU5006-AP1CRT', 13, 'AP1CRT', 'C2-04', 'A'),
(23, 'CPU5007-MA1CRT', 14, 'MA1CRT', 'C2-07', 'A'),
(24, 'CPU5008-AR1CRT', 15, 'AR1CRT', 'C2-06', 'A'),
(25, 'CPU5009-TG1CRT', 16, 'TG1CRT', 'C2-04', 'A'),
(26, 'CPU5009-CN1CRT', 16, 'CN1CRT', 'C2-06', 'B'),
(27, 'CPU5010-TG1CRT', 17, 'TG1CRT', 'C2-04', 'A'),
(28, 'CPU5010-TG1CRT', 17, 'TG1CRT', 'C2-04', 'B'),
(29, 'CPU5011-CN1CRT', 18, 'CN1CRT', 'C2-06', 'A'),
(30, 'CPU5012-MS1CRT', 19, 'MS1CRT', 'C2-07', 'A'),
(31, 'CPU6001-AD1CRT', 20, 'AD1CRT', 'C2-07A', 'A'),
(32, 'CPU6004-BT1CRT', 21, 'BT1CRT', 'C2-09', 'A'),
(33, 'CPU6004-CN1CRT', 21, 'CN1CRT', 'C2-06', 'B'),
(34, 'CPU6005-MA1CRT', 22, 'MA1CRT', 'C2-07', 'A'),
(35, 'CPU6005-MS1CRT', 22, 'MS1CRT', 'C2-07', 'B'),
(36, 'CPU6008-AP1CRT', 23, 'AP1CRT', 'C2-04', 'A'),
(37, 'CPU6009-CN1CRT', 24, 'CN1CRT', 'C2-06', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `StaffID` varchar(6) NOT NULL,
  `FirstName` text,
  `LastName` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`StaffID`, `FirstName`, `LastName`) VALUES
('AD1CRT', 'Amanda', 'Dewhurst'),
('AI1CRT', 'Adam', 'Isherwood'),
('AP1CRT', 'Andrew', 'Parker'),
('AR1CRT', 'Abdul', 'Razak'),
('BT1CRT', 'Brennen', 'Tighe'),
('CN1CRT', 'Colin', 'Noon'),
('GW2CRT', 'Gareth', 'Weston'),
('LA1CRT', 'Louise', 'Ashby'),
('MA1CRT', 'Muhammad', 'Asim'),
('MS1CRT', 'Martin', 'Stanhope'),
('RC1CRT', 'Rob', 'Cambell'),
('SW1CRT', 'Scott', 'Wilson'),
('TG1CRT', 'Tim', 'Goddard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ModuleID`),
  ADD UNIQUE KEY `ModuleCode` (`ModuleCode`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`LectureID`),
  ADD KEY `ModuleID` (`ModuleID`),
  ADD KEY `StaffID` (`StaffID`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `LectureID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecture`
--
ALTER TABLE `lecture`
  ADD CONSTRAINT `lecture_ibfk_1` FOREIGN KEY (`ModuleID`) REFERENCES `course` (`ModuleID`),
  ADD CONSTRAINT `lecture_ibfk_2` FOREIGN KEY (`StaffID`) REFERENCES `tutor` (`StaffID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
