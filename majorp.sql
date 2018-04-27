-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 10:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majorp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmlogin`
--

CREATE TABLE `bmlogin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmlogin`
--

INSERT INTO `bmlogin` (`id`, `username`, `password`) VALUES
(1, 'bom', 'bom@123');

-- --------------------------------------------------------

--
-- Table structure for table `bomlogin`
--

CREATE TABLE `bomlogin` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bomlogin`
--

INSERT INTO `bomlogin` (`id`, `username`, `password`) VALUES
(1, 'bom', 'bom@123');

-- --------------------------------------------------------

--
-- Table structure for table `cglogin`
--

CREATE TABLE `cglogin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cglogin`
--

INSERT INTO `cglogin` (`id`, `username`, `password`) VALUES
(1, 'cg', 'cg@123');

-- --------------------------------------------------------

--
-- Table structure for table `classlogin`
--

CREATE TABLE `classlogin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classlogin`
--

INSERT INTO `classlogin` (`id`, `username`, `password`) VALUES
(1, 'class', 'class@123');

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `rollno` int(11) NOT NULL,
  `n` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `rollno` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `cg` varchar(250) NOT NULL,
  `oss` varchar(250) NOT NULL,
  `bom` varchar(250) NOT NULL,
  `elective` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL,
  `pcs` int(11) NOT NULL,
  `sca` int(11) NOT NULL,
  `total` varchar(250) NOT NULL,
  `page` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`rollno`, `name`, `cg`, `oss`, `bom`, `elective`, `major`, `pcs`, `sca`, `total`, `page`) VALUES
(1, 'Anchal Bhardwaj', '45', '34', '35', '45', '67', 45, 22, '303', '80.8'),
(2, 'Amit Rana', '34', '56', '56', '56', '56', 56, 22, '336', '57'),
(3, 'Arti Devi', '23', '33', '44', '55', '44', 0, 0, '55', '55'),
(4, 'Arun Kumar', '50', '50', '50', '50', '100', 50, 25, '375', '100'),
(5, 'Arun Kumar', '44', '56', '67', '78', '89', 0, 0, '89', '77'),
(6, 'Ashima', '78', '94', '95', '98', '66', 0, 0, '345', '67'),
(7, 'Atul Kumar', '56', '67', '76', '67', '76', 0, 0, '445', '67'),
(8, 'Deepakshi ', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(9, 'Deeksha Devi', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(10, 'Diksha Katoch', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(11, 'Garima Sharma', '56', '67', '76', '86', '78', 0, 0, '445', '56'),
(12, 'Harshita', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(13, 'Himanshu Chandel', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(14, 'Kumari Payal', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(15, 'Neha', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(16, 'Nikita Gupta', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(17, 'Nikitsha Sharma', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(18, 'Rahul Chaudhary', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(19, 'Rampal', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(20, 'Rishav', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(21, 'Ritik Saini', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(22, 'Sachin Bharmoria', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(23, 'Shakshi', '50', '50', '50', '50', '100', 50, 25, '375', '100'),
(24, 'Shivani', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(25, 'Shubam Dogra', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(26, 'Sumit Kumar', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(27, 'Sunil Kumar', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(28, 'Swati Dogra', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(29, 'Tanu', '45', '45', '45', '45', '95', 24, 22, '321', '85.6'),
(30, 'Vikas Choudhary', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(31, 'Pallivi', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(32, 'Abhilash Sharma', '34', '34', '45', '56', '67', 0, 0, '67', '78'),
(33, 'Ajay Kanwar', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(34, 'Aman Kumar', '33', '33', '33', '33', '33', 33, 33, '333', '33'),
(35, 'Anuj', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(36, 'Arpita Thakur', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(37, 'Diwanshu', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(38, 'Madan Lal', '67', '67', '67', '67', '67', 67, 67, '467', '67'),
(39, 'Mohit Kumar', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(40, 'Neeraj Thakur', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(41, 'Nikhil', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(42, 'Nitish', '45', '56', '45', '55', '66', 0, 0, '345', '67'),
(43, 'Prince Syal', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(44, 'Sachin Dogra', '49', '50', '50', '50', '90', 49, 23, '361', '96'),
(45, 'Sandeep Kumar', '45', '45', '45', '45', '45', 0, 0, '445', '45'),
(46, 'Shilpa Kumari', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(47, 'Shivay Mankotia', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(48, 'Vikalp Thakur', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(49, 'Sachin Korla', '45', '45', '45', '45', '88', 39, 24, '331', '88.26666666666667'),
(50, 'Aman Sharma', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(51, 'Neelanshi Kapoor', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(52, 'Akshay Chandel', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(54, 'Nishant', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(55, 'Himanshu', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(56, 'Vivek Swaroop', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(57, 'Sukhwinder', '-', '-', '-', '-', '-', 0, 0, '-', '-'),
(58, 'Shivam Sharma', '-', '-', '-', '-', '-', 0, 0, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `computerat`
--

CREATE TABLE `computerat` (
  `rollno` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `cgt` int(250) NOT NULL,
  `osst` int(250) NOT NULL,
  `bomt` int(250) NOT NULL,
  `electivet` int(250) NOT NULL,
  `totalt` int(250) NOT NULL,
  `paget` varchar(250) NOT NULL,
  `cgp` int(250) NOT NULL,
  `ossp` int(250) NOT NULL,
  `electivep` int(250) NOT NULL,
  `majorp` int(250) NOT NULL,
  `pcsp` int(250) NOT NULL,
  `scap` int(250) NOT NULL,
  `totalp` int(250) NOT NULL,
  `pagep` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computerat`
--

INSERT INTO `computerat` (`rollno`, `name`, `cgt`, `osst`, `bomt`, `electivet`, `totalt`, `paget`, `cgp`, `ossp`, `electivep`, `majorp`, `pcsp`, `scap`, `totalp`, `pagep`) VALUES
(1, 'Anchal Bhardwaj', 23, 23, 23, 34, 89, '78', 22, 21, 21, 23, 22, 23, 89, '78'),
(2, 'Amit Rana', 23, 23, 23, 23, 89, '78', 23, 23, 34, 34, 34, 34, 89, '78'),
(3, 'Arti Devi', 34, 34, 40, 23, 131, '81.875', 45, 45, 43, 40, 43, 48, 264, '88'),
(4, 'Arun Kumar', 38, 38, 38, 38, 152, '95', 44, 45, 45, 45, 45, 30, 254, '84.66666666666667'),
(5, 'Arun Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(6, 'Ashima', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(7, 'Atul Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(8, 'Deepakshi', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(9, 'Deeksha Devi', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(10, 'Diksha Katoch', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(11, 'Garima Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(12, 'Harshita ', 32, 33, 32, 32, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(13, 'Himanshu Chandel', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(14, 'Kumari Payal', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(15, 'Neha', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(16, 'Nikita Gupta', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(17, 'Nikitsha Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(18, 'Rahul Choudhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(19, 'Ram Pal', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(20, 'Rishav', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(21, 'Ritik Saini', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(22, 'Sachin Bharmoria', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(23, 'Shakshi ', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(24, 'Shivani ', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(25, 'Shubam Dogra', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(26, 'Sumit Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(27, 'Sunil Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(28, 'Swati Dogra', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(29, 'Tanu', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(30, 'Vikas Choudhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(31, 'Pallvi', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(32, 'Abhilash Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(33, 'Ajay Kanwar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(34, 'Aman Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(35, 'Anuj', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(36, 'Arpita Thakur', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(37, 'Diwanshu', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(38, 'Madan Lal', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(39, 'Mohit Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(40, 'Neeraj Thakur', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(41, 'Nikhil', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(42, 'Nitish Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(43, 'Prince Syal', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(44, 'Sachin Dogra', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(45, 'Sandeep Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(46, 'Shilpa Kumari', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(47, 'Shivay Mankotia', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(48, 'Vikalp Thakur', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(49, 'Sachin Korla', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(50, 'Aman Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(51, 'Neelanshi Kapoor', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(52, 'Akshay Chandel ', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(53, 'Shivani ', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(54, 'Nishant ', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(55, 'Himanshu', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(56, 'Vivek Swaroop', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(57, 'Sukhwinder', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(58, 'Shivam Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `electivelogin`
--

CREATE TABLE `electivelogin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electivelogin`
--

INSERT INTO `electivelogin` (`id`, `username`, `password`) VALUES
(1, 'elective', 'elective@123');

-- --------------------------------------------------------

--
-- Table structure for table `electrical`
--

CREATE TABLE `electrical` (
  `rollno` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `bom` int(250) NOT NULL,
  `em` int(250) NOT NULL,
  `uee` int(250) NOT NULL,
  `elective` int(250) NOT NULL,
  `major` int(250) NOT NULL,
  `pcs` int(250) NOT NULL,
  `sca` int(250) NOT NULL,
  `total` int(250) NOT NULL,
  `page` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electrical`
--

INSERT INTO `electrical` (`rollno`, `name`, `bom`, `em`, `uee`, `elective`, `major`, `pcs`, `sca`, `total`, `page`) VALUES
(1, 'Abhishek Dharwal', 34, 45, 34, 34, 67, 45, 23, 248, '66.13333333333334'),
(2, 'Ajay Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(3, 'Aman Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(4, 'Anchal', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(5, 'Aniket Thakur', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(6, 'Anil Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(7, 'Anil Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(8, 'Ankush Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(9, 'Arpit Soni', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(10, 'Kamal Chauhan', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(11, 'Manoj Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(12, 'Pankaj Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(13, 'Prikshit', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(14, 'Rahul', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(15, 'Rahul', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(16, 'Raj Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(17, 'Reshav', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(18, 'Ritesh K. Tiwari', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(19, 'Rohan kaundal', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(20, 'Sahil Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(21, 'Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(22, 'Santosh Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(23, 'Satish kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(24, 'Shubham Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(25, 'Sourav Patial', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(26, 'Sunil Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(27, 'Vishal Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(28, 'Vishal kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(29, 'Neelaksh Sharma', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(30, 'Sourabh Chuhan', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(31, 'Abhishek Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(32, 'Ankit Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(33, 'Anshul', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(34, 'Kartik', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(35, 'Sahil Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(36, 'Anish Kumar', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(37, 'Rishav', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(38, 'Abhishek', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(39, 'Gurdeep Singh', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(40, 'Harsh Kamal', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(41, 'Karan Sharma', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(42, 'Kartik Bisht', 0, 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `electricalat`
--

CREATE TABLE `electricalat` (
  `rollno` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `bomt` int(200) NOT NULL,
  `emt` int(200) NOT NULL,
  `ueet` int(200) NOT NULL,
  `electivet` int(200) NOT NULL,
  `totalt` int(200) NOT NULL,
  `paget` varchar(200) NOT NULL,
  `emp` int(200) NOT NULL,
  `ueep` int(200) NOT NULL,
  `electivep` int(200) NOT NULL,
  `majorp` int(200) NOT NULL,
  `pcsp` int(200) NOT NULL,
  `scap` int(200) NOT NULL,
  `totalp` int(200) NOT NULL,
  `pagep` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electricalat`
--

INSERT INTO `electricalat` (`rollno`, `name`, `bomt`, `emt`, `ueet`, `electivet`, `totalt`, `paget`, `emp`, `ueep`, `electivep`, `majorp`, `pcsp`, `scap`, `totalp`, `pagep`) VALUES
(1, 'Abhishek Dharwal', 33, 32, 31, 32, 128, '80', 43, 42, 42, 41, 44, 41, 253, '84.33333333333333'),
(2, 'Ajay Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(3, 'Aman Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(4, 'Anchal', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(5, 'Aniket Thakur', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(6, 'Anil Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(7, 'Anil Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(8, 'Ankush Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(9, 'Arpit Soni', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(10, 'Kamal Chauhan', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(11, 'manoj Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(12, 'Pankaj Chuodhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(13, 'Prikshit', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(14, 'Rahul', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(15, 'Rahul', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(16, 'Raj Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(17, 'Reshav', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(18, 'Ritesh k Tiwari', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(19, 'Rohan Kaundal', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(20, 'Sahil Choudhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(21, 'Sahil choudhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(22, 'Santosh Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(23, 'Satish Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(24, 'Shubam Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(25, 'Sourav Patial', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(26, 'Sunil Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(27, 'Vishal Choudhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(28, 'Vishal Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(29, 'Neelaksh Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(30, 'Sourabh Chuhan', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(31, 'Abhishek Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(32, 'Ankit Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(33, 'Anshul', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(34, 'Kartik', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(35, 'Sahil Choudhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(36, 'Anish Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(37, 'Rishav', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(38, 'Abhishek', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(39, 'Gurdeep Singh', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(40, 'Harsh kamal', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(41, 'Karan Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(42, 'Kartik Bisht', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `rollno` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `bom` int(250) NOT NULL,
  `ofc` int(250) NOT NULL,
  `wmc` int(250) NOT NULL,
  `iplc` int(250) NOT NULL,
  `cn` int(250) NOT NULL,
  `major` int(11) NOT NULL,
  `pcs` int(11) NOT NULL,
  `sca` int(250) NOT NULL,
  `total` int(250) NOT NULL,
  `page` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`rollno`, `name`, `bom`, `ofc`, `wmc`, `iplc`, `cn`, `major`, `pcs`, `sca`, `total`, `page`) VALUES
(1, 'Abhishek Dogra', 56, 56, 67, 67, 78, 78, 0, 24, 667, '67'),
(2, 'Anizya', 45, 45, 45, 45, 45, 45, 0, 45, 315, '45'),
(3, 'Anshul Rana', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(4, 'Ashutosh Soni', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(5, 'Ayushi', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(6, 'Damini Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(7, 'Diksha', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(8, 'Disha', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(9, 'Divya Raj', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(10, 'Hansa Devi', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(11, 'Harsh Kaundal', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(12, 'Hitesh Sharma', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(13, 'Kanchna Kumari', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(14, 'Kapil Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(15, 'Manish Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(16, 'Monika', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(17, 'Nandika Sharma', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(18, 'Nikhil Koundal', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(19, 'Parshant Singh', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(20, 'Rahul verma', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(21, 'Ravi Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(22, 'Rohit Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(23, 'Sakshi Sood', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(24, 'Sanyam Sharma', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(25, 'Sapna Kaushal', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(26, 'Shabnam Kumari', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(27, 'Shivam', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(28, 'Shubam Thakur', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(29, 'Sumit Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(30, 'Suraj Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(31, 'Sushma Thakur', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(32, 'vaishali', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(33, 'Vinay keshav', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(34, 'Vishal Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(35, 'Vishavjeet ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(36, 'Yogesh Raina', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(37, 'Abhishek', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(38, 'Akshay Kumar', 45, 45, 45, 45, 45, 87, 0, 24, 336, '79.05882352941177'),
(39, 'Gourav Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(40, 'kashish', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(41, 'Munish Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(42, 'Rajat Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(43, 'Rohit Chandel', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(44, 'Sahil', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(45, 'Shivam Mathur', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(46, 'Vikas Balouria', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(47, 'Omang Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(48, 'Swati Tank', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(49, 'Abhishek Dhiman', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(50, 'Vijay', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(51, 'Abhishek Katoch', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(52, 'Ravi Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(53, 'Navdeep Katoch', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(54, 'Anshul Sharma', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(55, 'Aatish Padhiar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(56, 'Neeraj', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(57, 'Piyush', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(58, 'Sawan', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(59, 'Vikas', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(60, 'Vishal', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(61, 'Aman Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(62, 'Sunny Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `electronicsat`
--

CREATE TABLE `electronicsat` (
  `rollno` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `bomt` int(200) NOT NULL,
  `ofct` int(200) NOT NULL,
  `wmct` int(200) NOT NULL,
  `iplct` int(200) NOT NULL,
  `cnt` int(200) NOT NULL,
  `totalt` int(200) NOT NULL,
  `paget` varchar(200) NOT NULL,
  `ofcp` int(200) NOT NULL,
  `wmcp` int(200) NOT NULL,
  `iplcp` int(200) NOT NULL,
  `pcsp` int(200) NOT NULL,
  `majorp` int(200) NOT NULL,
  `scap` int(200) NOT NULL,
  `totalp` int(200) NOT NULL,
  `pagep` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronicsat`
--

INSERT INTO `electronicsat` (`rollno`, `name`, `bomt`, `ofct`, `wmct`, `iplct`, `cnt`, `totalt`, `paget`, `ofcp`, `wmcp`, `iplcp`, `pcsp`, `majorp`, `scap`, `totalp`, `pagep`) VALUES
(1, 'Abhishek Dogra', 32, 33, 34, 32, 29, 160, '80', 34, 33, 43, 43, 42, 33, 228, '76'),
(2, 'Anizya', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(3, 'Anshul Rana', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(4, 'Ashutosh Soni', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(5, 'Ayushi', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(6, 'Damini Choudhary', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(7, 'Diksha', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(8, 'Disha', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(9, 'Divya Raj', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(10, 'Hansa Devi', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(11, 'Hrash Kaundal', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(12, 'Hitesh Sharma', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(13, 'Kanchna Kumari', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(14, 'Kapil Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(15, 'Manish Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(16, 'Monika', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(17, 'Nandika Sharma', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(18, 'Nikhil Koundal', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(19, 'Parshant Singh', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(20, 'Rahul Verma', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(21, 'Ravi Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(22, 'Rohit Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(23, 'Sakshi Sood', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(24, 'Sanyam Sharma', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(25, 'Sapna Kaushal', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(26, 'Shubnam Kumari', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(27, 'Shivam', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(28, 'Shubham Thakur', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(29, 'Sumit Choudhary', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(30, 'Suraj Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(31, 'Sushma Thakur', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(32, 'Vishali ', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(33, 'Vinay Keshav', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(34, 'Vishal Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(35, 'Vishavjeet Singh', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(36, 'Yogesh Raina', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(37, 'Abhishek', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(38, 'Akshay Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(39, 'Gourav Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(40, 'Kashish', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(41, 'Munish Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(42, 'Rajat Choudhary', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(43, 'Rohit chandel', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(44, 'Sahil', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(45, 'Shivam Mathur', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(46, 'Vikas Balouria', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(47, 'Omang Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(48, 'Swati Tank', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(49, 'Abhishek Dhiman', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(50, 'Vijay', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(51, 'Abhishek Katoch', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(52, 'Ravi Kumar ', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(53, 'Navdeep Katoch', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(54, 'Anshul Sharma', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(55, 'Aatisg Padhiar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(56, 'Neeraj', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(57, 'Piyush', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(58, 'Sawan', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(59, 'Vikas', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(60, 'Vishal', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(61, 'Aman Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-'),
(62, 'Sunny Kumar', 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `instrument`
--

CREATE TABLE `instrument` (
  `rollno` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `bom` varchar(250) NOT NULL,
  `abi` varchar(250) NOT NULL,
  `acs` varchar(250) NOT NULL,
  `pce` varchar(250) NOT NULL,
  `elective` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL,
  `sca` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `page` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instrument`
--

INSERT INTO `instrument` (`rollno`, `name`, `bom`, `abi`, `acs`, `pce`, `elective`, `major`, `sca`, `total`, `page`) VALUES
('1', 'Ayushi', '23', '34', '45', '4', '44', '33', '45', '45', '56'),
('2', 'Abhishek', '55', '45', '45', '25', '34', '34', '25', '263', '70.13333333333334'),
('3', 'Amandeep Saini', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('4', 'Anil Kumar', '50', '50', '50', '50', '50', '100', '25', '375', '100'),
('5', 'Arun Kumar', '67', '67', '67', '67', '67', '67', '67', '67', '67'),
('6', 'Ashish Sharma', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('7', 'Chander Sharma', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('8', 'Jatin Parkash', '45', '45', '45', '45', '45', '55', '54', '55', '44'),
('9', 'Nitin Pal', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('10', 'Pankaj Kumar', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('11', 'Prince Dhiman', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('12', 'Rajat Kumar', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('13', 'Rishav', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('14', 'Sourabh Choudhary', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('15', 'Sorabh Kumar', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('16', 'Sourabh Choudhary', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('17', 'Vikram Singh', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('18', 'Yomesh Kumar', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('19', 'Anmol Sood', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('20', 'Ashish Sharma', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('21', 'Neeraj Sharma', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('22', 'Prince Thakur', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('23', 'Rahul Choudhary', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('24', 'Rahul Dhiman', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('25', 'Rohit Kumar', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('26', 'Shubham Dhiman', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('27', 'Vikas', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('28', 'Vishal', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('29', 'Yogesh Kumar', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('30', 'Amit Sharma', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('31', 'Jaspreet Kumari', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('32', 'Rajat Choudhary', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('33', 'Raman Kashyap', '0', '0', '0', '0', '0', '0', '0', '0', '-'),
('34', 'Sanjay Thakur', '0', '0', '0', '0', '0', '0', '0', '0', '-');

-- --------------------------------------------------------

--
-- Table structure for table `instrumentat`
--

CREATE TABLE `instrumentat` (
  `rollno` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `bomt` int(200) NOT NULL,
  `abit` int(200) NOT NULL,
  `acst` int(200) NOT NULL,
  `pcct` int(200) NOT NULL,
  `iet` int(200) NOT NULL,
  `mtst` int(200) NOT NULL,
  `totalt` int(200) NOT NULL,
  `paget` varchar(200) NOT NULL,
  `abip` int(200) NOT NULL,
  `acsp` int(200) NOT NULL,
  `pccp` int(200) NOT NULL,
  `iep` int(200) NOT NULL,
  `mtsp` int(200) NOT NULL,
  `majorp` int(200) NOT NULL,
  `scap` int(200) NOT NULL,
  `totalp` int(200) NOT NULL,
  `pagep` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instrumentat`
--

INSERT INTO `instrumentat` (`rollno`, `name`, `bomt`, `abit`, `acst`, `pcct`, `iet`, `mtst`, `totalt`, `paget`, `abip`, `acsp`, `pccp`, `iep`, `mtsp`, `majorp`, `scap`, `totalp`, `pagep`) VALUES
(1, 'Aayushi', 34, 23, 34, 32, 22, 33, 178, '74.16666666666667', 45, 44, 42, 34, 33, 45, 34, 277, '79.14285714285714'),
(2, 'Abhishek', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(3, 'Amandeep Saini', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(4, 'Anil Kumar', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(5, 'Arun Kumar', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(6, 'Ashish Sharma', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(7, 'Chander Sharma', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(8, 'Jatin Parkash', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(9, 'Nitin Pal', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(10, 'Pankaj Kumar', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(11, 'Prince Dhiman', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(12, 'Rajat Kumar', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(13, 'Rishav', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(14, 'Sourabh Choudhary', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(15, 'Sorabh Choudhary', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(16, 'Sourbh', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(17, 'Vikram Singh', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(18, 'Yomesh Kumar', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(19, 'Anmol Sood', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(20, 'Ashish Sharma', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(21, 'Neeraj Sharma', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(22, 'Prince Thakur', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(23, 'Rahul Choudhary', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(24, 'Rahul Dhiman', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(25, 'Rohit Kumar', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(26, 'Shubham Dhiman', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(27, 'Vikas', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(28, 'Vishal', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(29, 'Yogesh Kumar', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(30, 'Amit Sharma', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(31, 'Jaspreet Kumari', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(32, 'Rajat Choudhary', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(33, 'Raman Kashyap', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(34, 'Sanjay Thakur', 0, 0, 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(250) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'teacher', 'teacher@123');

-- --------------------------------------------------------

--
-- Table structure for table `majorlogin`
--

CREATE TABLE `majorlogin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majorlogin`
--

INSERT INTO `majorlogin` (`id`, `username`, `password`) VALUES
(1, 'major', 'major@123');

-- --------------------------------------------------------

--
-- Table structure for table `mechanical`
--

CREATE TABLE `mechanical` (
  `rollno` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `bom` int(250) NOT NULL,
  `rac` int(250) NOT NULL,
  `mt` int(250) NOT NULL,
  `cnc` int(250) NOT NULL,
  `cad` int(250) NOT NULL,
  `pw` int(250) NOT NULL,
  `pcs` int(250) NOT NULL,
  `sca` int(250) NOT NULL,
  `total` int(250) NOT NULL,
  `page` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanical`
--

INSERT INTO `mechanical` (`rollno`, `name`, `bom`, `rac`, `mt`, `cnc`, `cad`, `pw`, `pcs`, `sca`, `total`, `page`) VALUES
(1, 'Aditya Sharma', 45, 44, 43, 45, 44, 78, 45, 23, 322, '75.76470588235294'),
(2, 'Akash Sharma', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(3, 'Akshit Chang', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(4, 'Aman Saini', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(5, 'Amit Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(6, 'Amit Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(7, 'Aniket kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(8, 'Ashish Thakur', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(9, 'Atul', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(10, 'Ayush Sharma', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(11, 'Jyotsan', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(12, 'Manish Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(13, 'Nikhil Sharma', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(14, 'Nitin Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(15, 'Rahul Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(16, 'Rajat Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(17, 'Rajat Thakur', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(18, 'Rajesh Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(19, 'Ricky Mehta', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(20, 'Rohit Awasthi', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(21, 'Sachin Saini', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(22, 'Sahil', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(23, 'Saurabh', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(24, 'Shekhar Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(25, 'Sunny Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(26, 'Shushant Sharma', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(27, 'Vineet Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(28, 'Vishal ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(29, 'Vivek Bhardwaj', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(30, 'Vivek Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(31, 'Akshay Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(32, 'Aman Prashar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(33, 'Deepanshu', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(34, 'Kapil Dev', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(35, 'Kartik Kapoor', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(36, 'Naveen Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(37, 'Nikhil Rana', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(38, 'Nirmal Singh', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(39, 'Rajat Katoch', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(40, 'Sourabh Choudhary', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(41, 'Vijay Kumar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(42, 'Pranay Garg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(43, 'Ashish Sharma', 0, 0, 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `mechanicalat`
--

CREATE TABLE `mechanicalat` (
  `rollno` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `bomt` int(200) NOT NULL,
  `ract` int(200) NOT NULL,
  `mtt` int(200) NOT NULL,
  `cnct` int(200) NOT NULL,
  `totalt` int(200) NOT NULL,
  `paget` varchar(200) NOT NULL,
  `racp` int(200) NOT NULL,
  `mtp` int(200) NOT NULL,
  `cadp` int(200) NOT NULL,
  `cncp` int(200) NOT NULL,
  `pwp` int(200) NOT NULL,
  `pcsp` int(200) NOT NULL,
  `scap` int(200) NOT NULL,
  `totalp` int(200) NOT NULL,
  `pagep` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanicalat`
--

INSERT INTO `mechanicalat` (`rollno`, `name`, `bomt`, `ract`, `mtt`, `cnct`, `totalt`, `paget`, `racp`, `mtp`, `cadp`, `cncp`, `pwp`, `pcsp`, `scap`, `totalp`, `pagep`) VALUES
(1, 'Aditya sharma', 34, 40, 37, 33, 144, '90', 45, 40, 43, 42, 45, 41, 48, 304, '86.85714285714286'),
(2, 'Akash Thakur', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(3, 'Akshit Chanag', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(4, 'Aman Saini', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(5, 'Amit Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(6, 'Amit Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(7, 'Aniket Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(8, 'Ashish Thakur', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(9, 'Atul', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(10, 'Ayush Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(11, 'Jyotsan', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(12, 'Manish Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(13, 'Nikhil Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(14, 'Nitin Choudhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(15, 'Rahul Choudhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(16, 'Rajat Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(17, 'Rajat Thakur', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(18, 'Rajesh Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(19, 'Ricky Mehta', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(20, 'Rohit Awashti', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(21, 'Sachin Saini', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(22, 'Sahil ', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(23, 'Saurabh', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(24, 'Shekhar Choudhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(25, 'Sunny Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(26, 'Shushant Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(27, 'Vineet Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(28, 'Vishal ', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(29, 'Vivek Bhardwaj', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(30, 'vivek Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(31, 'Akshay Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(32, 'Aman Prashar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(33, 'Deepanshu', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(34, 'Kapil Dev', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(35, 'Kartik Kapoor', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(36, 'Naveen Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(37, 'Nihil Rana', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(38, 'Nirmal Singh', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(39, 'Rajat Katoch', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(40, 'Sourabh Choudhary', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(41, 'Vijay Kumar', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(42, 'Pranay Garg', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(43, 'Ashish Sharma', 0, 0, 0, 0, 0, '-', 0, 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `oslogin`
--

CREATE TABLE `oslogin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oslogin`
--

INSERT INTO `oslogin` (`id`, `username`, `password`) VALUES
(1, 'oss', 'oss@123');

-- --------------------------------------------------------

--
-- Table structure for table `osslogin`
--

CREATE TABLE `osslogin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pcslogin`
--

CREATE TABLE `pcslogin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcslogin`
--

INSERT INTO `pcslogin` (`id`, `username`, `password`) VALUES
(1, 'pcs', 'pcs@123');

-- --------------------------------------------------------

--
-- Table structure for table `scalogin`
--

CREATE TABLE `scalogin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scalogin`
--

INSERT INTO `scalogin` (`id`, `username`, `password`) VALUES
(1, 'sca', 'sca@123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
