-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 02:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddoc`
--

CREATE TABLE `adddoc` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `doctor_add` varchar(200) NOT NULL,
  `doctor_no` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `doctor_spl` varchar(50) NOT NULL,
  `userid` int(30) NOT NULL,
  `fees` int(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adddoc`
--

INSERT INTO `adddoc` (`doctor_id`, `doctor_name`, `doctor_add`, `doctor_no`, `email`, `doctor_spl`, `userid`, `fees`, `pass`) VALUES
(6, 'Dr.Pankaj Mistry', 'Chembur', '9967507642', 'pankaj642@gmail.com', 'Family Physicians', 1001, 1500, '123'),
(7, 'Dr. Rajanshu Tiwari', 'Chembur', '7642556177', 'rajanshutiwari77@gmail.com', 'Family Physicians', 1002, 1000, '123'),
(8, 'Dr.Monica Goel', 'Dadar', '8899632167', 'goelmonica167@gmail.com', 'Family Physicians', 1003, 1500, '123'),
(9, 'Dr. Shubhashree Patil', 'Dadar', '92357852688', '688shubpatil@gmail.com', 'Family Physicians', 1004, 1000, '123'),
(10, 'Dr.Jeenam Shah', 'Gamdevi', '7896543696', 'jeenam696@gmail.com', 'Immunologists', 1005, 800, '123'),
(11, 'Dr.Shilpa Nayak', 'Andheri West', '9453277644', '644nayakshilpa@gmail.com', 'Immunologists', 1006, 1200, '123'),
(12, 'Dr.Uday Bapat', 'Mulund', '8769878787', 'uday87@gmail.com', 'Anesthesiologists', 1007, 900, '123'),
(13, 'Dr.Vaishali Badge', 'Dadar West', '7766199645', 'badgev45@gmail.com', 'Anesthesiologists', 1008, 700, '123'),
(14, 'Dr.Sanjesh Jain', 'Mumbai Central', '8899632167', 'sanjeshjain167@gmail.com', 'Anesthesiologists', 1009, 1100, '123'),
(15, 'Dr.Prasanna Salvi', 'Mumbai Central', '9029100887', 'prasannas@gmail.com', 'Anesthesiologists', 1010, 700, '123'),
(16, 'Dr.Sambit Patnaik', 'Chembur', '8356807382', 'sambitp82@gmail.com', 'colon and Rectal Surgeon', 1011, 500, '123'),
(17, 'Dr.Laxman Salve', 'Chembur', '8928549028', 'laxmansal28@gmail.com', 'colon and Rectal Surgeon', 1012, 1000, '123'),
(18, 'Dr.Balkrishna Inamdar', 'Goregaon West', '9028687102', 'inamdarkrishna@gmail.com', 'colon and Rectal Surgeon', 1013, 1000, '123'),
(19, 'Dr.Suriner Hansra', 'Kandivali East', '8899632167', 'surinerh@gmail.com', 'Cardiologist', 1014, 800, '123'),
(20, 'Dr. Manoj Gerela', 'Mulund East', '9956779667', 'manoj677@gmail.com', 'Cardiologist', 1015, 900, '123'),
(21, 'Dr.KamalesKumar Shah', 'Mulund East', '9235785268', 'shahkamlesh68@gmail.com', 'Cardiologist', 1016, 2300, '123'),
(22, 'Dr.Ramesh Kawar', 'Mulund West', '9892264813', 'rameshkawar13@gmail.com', 'Cardiologist', 1017, 1200, '123'),
(23, 'Dr.M Viswanathan', 'Mulund West', '91925646694', 'vishwanathanm@gmail.com', 'Cardiologist', 1018, 1550, '123'),
(24, 'Dr.Ajit Borkar', 'Chembur', '7896543696', 'ajitborkar96@gmail.com', 'Plastic Surgeon', 1019, 600, '123'),
(25, 'Dr.Samir Warty', 'Chembur', '7766199645', 'wartysam45@gmail.com', 'Plastic Surgeon', 1020, 900, '123'),
(26, 'Dr.Venkateshwaran', 'Thane', '9598072094', 'venkateshwaran094@gmail.com', 'Plastic Surgeon', 1021, 1400, '123'),
(27, 'Dr. Sankalp Mohan', 'Kandivali East', '8899632168', 'sankalpm88@gmail.com', 'Neurologist', 2022, 1200, '123'),
(28, 'Dr. Neeraj Jain', 'Kandivali East', '9967507642', 'Neeraj642@gmail.com', 'Neurologist', 2023, 1500, '123'),
(29, 'Dr.Girish Nair', 'Kandivali East', '8942775596', 'nairgirish@gmail.com', 'Neurologist', 2024, 1150, '123'),
(30, 'Dr. Jamshed Sunavala', 'Andheri East', '8641467754', 'jamshed7754@gmail.com', 'Critical Care', 2025, 2000, '123'),
(31, 'Dr. Preetha Joshi', 'Andheri East', '7896543696', 'preethajoshi96@gmail.com', 'Critical Care', 2026, 600, '123'),
(32, 'Dr.Prashant Borade', 'Andheri East', '9698247344', 'boradeprashant44@gmail.com', 'Critical Care', 2027, 1400, '123'),
(33, 'Dr. Shiva Shankar', 'Thane West', '8899632168', 'shivashankar66@gmail.com', 'Dermotologists', 2028, 550, '123'),
(34, 'Dr.Sirisha Yanegalla', 'Thane West', '7766199645', 'siriyanegalla645@gmail.com', 'Dermotologists', 2029, 400, '123'),
(35, 'Dr. Nitin Shah', 'Kalyan West', '9873456721', '21nitinshah@gmail.com', 'Hematologists', 2030, 600, '123'),
(36, 'Dr. Dipanjan Halder', 'Kalyan West', '8899632168', 'dipanjanhlader168@gmail.com', 'Hematologists', 2031, 700, '123'),
(37, 'Dr.Ekta Dhawale', 'Gamdevi', '7658902543', 'ektadhawale@gmail.com', 'Gynecologists', 2032, 300, '123'),
(38, 'Dr. Parmila  Pandit', 'Gamdevi', '8080705461', 'ppandit22@gmail.com', 'Gynecologists', 2033, 350, '123');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `pass`) VALUES
(1, 'admin@admin.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `doctor_contact` varchar(100) NOT NULL,
  `doctor_category` varchar(100) NOT NULL,
  `doctor_fees` varchar(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pcontact` varchar(102) NOT NULL,
  `pemail` varchar(111) NOT NULL,
  `paddress` varchar(111) NOT NULL,
  `pdate` date NOT NULL,
  `ptime` time NOT NULL,
  `user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `doctor_name`, `doctor_contact`, `doctor_category`, `doctor_fees`, `pname`, `pcontact`, `pemail`, `paddress`, `pdate`, `ptime`, `user`) VALUES
(2, 'Dr.Shilpa Nayak', '9453277644', 'Immunologists', '1200', 'Rajkumar', '8356807382', 'sumitmourya12345@gmail.com', 'gj', '2021-04-22', '16:22:00', 'manasi'),
(4, 'Dr. Rajanshu Tiwari', '7642556177', 'Family Physicians', '1000', 'Rajkumar Maurya', '8356807382', 'ajayyadav59165916@gmail.com', 'Thane', '2021-04-20', '18:54:00', 'Rajkumar Maurya'),
(5, 'Dr.Sambit Patnaik', '8356807382', 'colon and Rectal Surgeon', '500', 'Ajay', '565532153', 'ajayyadav59165916@gmail.com', 'tane', '2021-04-20', '20:05:00', 'Ajay'),
(6, 'Dr.Pankaj Mistry', '9967507642', 'Family Physicians', '1500', 'Rajkumar Maurya', '835687382', 'mauryarajkumar1008@gmail.com', 'Thane West', '2021-04-19', '15:00:00', 'Rajkumar Maurya');

-- --------------------------------------------------------

--
-- Table structure for table `docdescription`
--

CREATE TABLE `docdescription` (
  `des_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `bgroup` varchar(10) NOT NULL,
  `treatfor` varchar(50) NOT NULL,
  `treatment` varchar(50) NOT NULL,
  `note` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docdescription`
--

INSERT INTO `docdescription` (`des_id`, `fname`, `bgroup`, `treatfor`, `treatment`, `note`, `username`) VALUES
(4, 'Sumit Maurya', 'A+', 'fever', 'cold water', 'note1', 'Dr.Monica Goel'),
(5, 'Rajkumar Maurya', 'B+', 'weekness', 'abc', 'note2', 'Dr.Monica Goel'),
(8, 'shubham vikas kadam', 'A+', 'fever', 'cold water', 'rftg', 'Dr.Uday Bapat');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `user_add` varchar(200) NOT NULL,
  `bgroup` varchar(20) NOT NULL,
  `donateorgan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `fname`, `age`, `mobile`, `user_add`, `bgroup`, `donateorgan`) VALUES
(1, 'Rajkumar Maurya', 21, '8356807382', 'Thane West', 'B+', 'Eyes'),
(3, 'Jhon joe', 40, '7865236786', 'Mulund West', 'A+', 'Lungs'),
(4, 'Sanjay Rai', 35, '8975938284', 'Kalyan', 'O+', 'Eyes'),
(5, 'Ankit ', 30, '7865236786', 'Dadar', 'A-', 'Kidney'),
(6, 'Ajay', 22, '8855447766', 'Thane', 'A-', 'Liver'),
(7, 'Rajkumar Maurya', 21, '8356807382', 'Thane West', 'B+', 'Select Organ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `uname`, `comment`) VALUES
(1, 'Rajkumar', 'Experience is good ..');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `user_add` text NOT NULL,
  `bgroup` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`id`, `fname`, `age`, `gender`, `mobile`, `user_add`, `bgroup`, `email`, `pass`) VALUES
(24, 'Rajkumar Maurya', 21, 'Male', '8356807382', 'Thane West', 'B+', 'mauryarajkumar1008@gmail.com', 'raj123'),
(26, 'Ajay', 22, 'Male', '8855447766', 'Thane', 'A-', 'ajayyadav519519@gmail.com', '123456'),
(27, 'sunil vishwakarma', 21, 'Male', '9076299654', 'Indira Nagar Rupa devi pada no 2 Road no 33 near vibhuti school thane west', 'O+', 'sunilvishwakarma1299@gmail.com', '9076299654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddoc`
--
ALTER TABLE `adddoc`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `docdescription`
--
ALTER TABLE `docdescription`
  ADD PRIMARY KEY (`des_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adddoc`
--
ALTER TABLE `adddoc`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `docdescription`
--
ALTER TABLE `docdescription`
  MODIFY `des_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
