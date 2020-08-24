-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2020 at 07:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `image`, `password`) VALUES
(1, 'kaniz', 'elsa.jpg', '11');

-- --------------------------------------------------------

--
-- Table structure for table `admincontact`
--

CREATE TABLE `admincontact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admincontact`
--

INSERT INTO `admincontact` (`id`, `name`, `email`, `department`, `subject`, `message`, `time`) VALUES
(1, 'jjj', 'jj@gmail.com', 'billing', 'reset pass', 'hello', '2020-03-06 03:43:23'),
(3, 'Ashfaq', 'ashfaq@gmail.com', 'marketing', 'For leave', 'hello i am ashfaq', '2020-03-06 03:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`id`, `username`, `type`, `photo`, `description`) VALUES
(10, 'ashfaq', 'Certificate', 'certi2.jpg', 'Arrangement & Description (A&D) Certificate Program. Need more in-depth training, a refresher, or want to expand into a new niche    '),
(12, 'ashfaq', 'Award', 'employeemonth.jpg', 'This digital certificate establishes the identity and authenticity of the company or merchant so that online shoppers can trust that the website is secure and reliable.'),
(13, 'ashfaq', 'Certificate', 'certificate.png', 'I authorize Kwantlen Polytechnic Universityâ€™s Student Awards and Financial\r\nAssistance office to verify all of the submitted information and statements.'),
(14, 'ashfaq', 'Certificate', 'certi.jpg', 'asdasdasdrte et ert');

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE `employeeinfo` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `bday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `joindate` date NOT NULL,
  `employeeid` int(11) NOT NULL,
  `roomno` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `officeemail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`id`, `username`, `fullname`, `department`, `bday`, `address`, `phone`, `email`, `joindate`, `employeeid`, `roomno`, `designation`, `branch`, `officeemail`, `image`) VALUES
(9, '', 'Shourab Rahman', 'Marketing', '1991-12-02', 'Tejgaon', 413123, 'sr@gmail.com', '2017-05-23', 0, '', '', '', '', 'inner-bg.jpg'),
(11, '', 'Shourab Mia', 'Marketing', '1992-02-21', 'Sector-3', 12312312, 'shou@gmail.com', '2020-03-01', 0, '', '', '', '', 'buriganga.jpg'),
(13, '', 'Remon tele', 'Production', '1994-12-02', 'Nikunju', 84221231, 'remontele@gmail.com', '2083-05-02', 0, '', '', '', '', 'dd.jpg'),
(14, '', 'Uthsho', 'HR', '1996-12-09', 'Nikunju', 7923231, 'jes@gmail.com', '1992-05-12', 0, '', '', '', '', 'launch.jpg'),
(15, '', 'Atik bhai', 'techno', '1994-05-09', 'Pollobi', 52123123, 'jjsd@gmail.com', '2019-07-31', 0, '', '', '', '', 'de.jpg'),
(16, '', 'Montu', 'erp', '2001-02-20', 'Nikunju', 1722222, 'montu@gmail.com', '2020-02-01', 0, '', '', '', '', 'dd.jpg'),
(17, '', 'Khoka', 'erp', '2001-06-05', 'khilkhet', 18222222, 'khoka@gmail.com', '2020-06-03', 0, '', '', '', '', 'kokha.jpg'),
(18, '', 'Shourab Chy', 'Management', '1994-05-20', 'Shuritola', 181122334, 'shourabchy@gmail.com', '0000-00-00', 1024, '4A04', '', 'Banani', 'shourabchy@lizfashion.com', 'dd.png'),
(20, '', 'Shuvo Khan', 'Marketing', '1996-01-04', 'Arambag', 160011223, 'shuvokhan@gmail.com', '2020-03-01', 1431, '1C02', 'Junior Manager', 'Airport', 'shuvokhanjunior@lizfashion.com', 'hellos.png'),
(21, 'ashfaq', 'Ashfaqur Rahman Shourab', 'IT', '1992-02-21', 'Airport', 1811111112, 'ashfaq@gmail.com', '2020-02-02', 12312, '3B01', 'Manager', 'Banani', 'ashfaq@lizfashion.com', 'dds.png');

-- --------------------------------------------------------

--
-- Table structure for table `employeerating`
--

CREATE TABLE `employeerating` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeerating`
--

INSERT INTO `employeerating` (`id`, `email`, `day`, `rating`) VALUES
(5, 'jes@gmail.c', '2002-01-01', 1),
(6, 'remontele@gmail.com', '2005-02-02', 2),
(7, 'shou@gmail.com', '2020-04-01', 4),
(8, 'shou@gmail.com', '2020-02-04', 5),
(9, 'shou@gmail.com', '2020-04-04', 2),
(10, 'jjsd@gmail.com', '2020-02-01', 4),
(11, 'jjsd@gmail.com', '2020-02-02', 5),
(12, 'jjsd@gmail.com', '2020-02-03', 1),
(13, 'jjsd@gmail.com', '2020-02-04', 3),
(14, 'jjsd@gmail.com', '2020-02-05', 2),
(15, 'jjsd@gmail.com', '2020-02-06', 2),
(16, 'montu@gmail.com', '2020-03-01', 4),
(17, 'montu@gmail.com', '2020-03-02', 4),
(18, 'montu@gmail.com', '2020-03-03', 4),
(19, 'jes@gmail.com', '2020-01-01', 1),
(20, 'jes@gmail.com', '2020-01-02', 1),
(21, 'sr@gmail.com', '2020-02-08', 3),
(22, 'sr@gmail.com', '2020-02-09', 3),
(23, 'sr@gmail.com', '2020-02-03', 5);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `username`, `company`, `position`, `duration`) VALUES
(1, 'ashfaq', 'NZ garment', 'Senior Executive', '8 months'),
(2, 'ashfaq', 'AB Garnents', 'Executive', '2 months');

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileup`
--

INSERT INTO `fileup` (`id`, `title`, `image`) VALUES
(1, 'hello', '7389-516010.jpg'),
(2, 'hello2', '6799-3d-illustration-cloud-server_1302-14965.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `phone`, `position`, `file`, `time`) VALUES
(12, 'Ashfaq', 12312312, '', '1.jpg', '2020-03-06 06:09:05'),
(14, 'Khan', 123123, 'IT Engineer', 'page1.pdf', '2020-03-06 06:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `department`) VALUES
(1, 'shourab', '123', ''),
(2, 'ss', '11', ''),
(3, 'ashfaq', '1234', ''),
(4, 'Pintu', '123', ''),
(5, 'jes', '123', 'erp'),
(6, 'ashfaqnew', '123', 'IT'),
(7, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinbox`
--

CREATE TABLE `userinbox` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `messagereply` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinbox`
--

INSERT INTO `userinbox` (`id`, `username`, `message`, `messagereply`, `time`) VALUES
(1, 'shourab', 'hello', '', '2020-03-08 08:38:49'),
(2, 'ashfaq', 'hello bro', '', '2020-03-08 09:11:20'),
(3, 'ashfaq', 'how are you', 'i am fine', '2020-03-08 09:11:26'),
(4, 'ashfaq', 'i am fine\r\n', 'what !!', '2020-03-08 09:13:37'),
(5, 'ashfaq', 'hello again', '', '2020-03-08 09:14:31'),
(6, 'ashfaq', 'i need some email', 'how much', '2020-03-08 09:42:02'),
(7, 'pintu', 'hello bhai\r\n', 'ki khobor pintu', '2020-03-08 11:55:03'),
(8, 'pintu', 'hello', '', '2020-03-08 11:56:44'),
(9, 'pintu', 'eito bhai vlo', 'hmm', '2020-03-08 11:57:18'),
(10, 'jes', 'hello', '', '2020-03-08 14:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `userrequest`
--

CREATE TABLE `userrequest` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrequest`
--

INSERT INTO `userrequest` (`id`, `user`, `reason`, `datetime`, `message`, `room`, `time`, `status`) VALUES
(1, 'ss', 'billing', '3121-02-02', 'hello', '7A05', '2020-03-07 11:31:11', 'approve'),
(2, 'ss', 'marketing', '2020-03-04T14:00', 'book conference room', '', '2020-03-07 11:34:51', 'decline'),
(3, 'shourab', 'Meeting date', '2020-04-21T16:00', 'meeting room needed', '', '2020-03-07 11:51:22', 'approve'),
(6, 'shourab', 'Work list', '2020-03-12T14:02', 'send work list please', '103', '2020-03-07 13:25:21', 'approve'),
(7, 'ashfaq', 'Meeting date', '2020-03-09T17:00', 'need a meeting room', '', '2020-03-08 02:17:32', ''),
(8, 'ashfaq', 'Meeting date', '2020-03-15T13:00', 'conference room needed', '', '2020-03-08 02:20:19', ''),
(9, 'ashfaq', 'Work list', '2020-04-02T14:00', 'work list', '', '2020-03-08 02:22:07', ''),
(10, 'ss', 'Meeting date', '2020-03-20T10:00', 'Room needed', '', '2020-03-08 02:52:50', ''),
(11, 'shourab', 'Work list', '2020-04-02T13:05', 'hello hello', '', '2020-03-08 11:34:05', ''),
(12, 'shourab', 'Meeting date', '2020-02-02T16:00', 'meeting room needed', '101A', '2020-03-08 11:44:59', 'approve'),
(13, 'shourab', 'Work list', '2020-04-02T14:00', 'work list please', '', '2020-03-08 11:45:20', 'decline');

-- --------------------------------------------------------

--
-- Table structure for table `workingstatus`
--

CREATE TABLE `workingstatus` (
  `id` int(11) NOT NULL,
  `Day` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workingstatus`
--

INSERT INTO `workingstatus` (`id`, `Day`, `Subject`, `Details`, `dept`) VALUES
(1, '2020-03-02T17:00', 'Boss meeting', '', ''),
(2, '2020-02-05T17:00', 'hello', '', ''),
(3, '213123-03-21T02:13', 'asdasd', '', ''),
(4, '123123-03-12T12:13', 'fdsfsdf', '', ''),
(5, '53453-04-23T04:54', 'gggggggg', 'ggggggggggggg', ''),
(6, '2020-02-02T01:59', 'Client Meeting', '        hello everyone', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admincontact`
--
ALTER TABLE `admincontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeerating`
--
ALTER TABLE `employeerating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileup`
--
ALTER TABLE `fileup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinbox`
--
ALTER TABLE `userinbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userrequest`
--
ALTER TABLE `userrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workingstatus`
--
ALTER TABLE `workingstatus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admincontact`
--
ALTER TABLE `admincontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employeerating`
--
ALTER TABLE `employeerating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fileup`
--
ALTER TABLE `fileup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userinbox`
--
ALTER TABLE `userinbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userrequest`
--
ALTER TABLE `userrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `workingstatus`
--
ALTER TABLE `workingstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
