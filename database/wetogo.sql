-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 10:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wetogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fdbk_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `cntno` text NOT NULL,
  `subj` text NOT NULL,
  `sdate` text NOT NULL,
  `reply` text NOT NULL,
  `rdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fdbk_id`, `Log_Id`, `name`, `cntno`, `subj`, `sdate`, `reply`, `rdate`) VALUES
(6, 'LOG5924134312', 'prashob', '8129895738', 'good application', '2022-04-26', 'thanku', '2022-04-26'),
(7, 'LOG8346004974', 'abhijith k j', '8129895738', 'nice app', '2022-04-26', 'thank u', '2022-04-26'),
(8, 'LOG2463580801', 'ajith', '8129895738', 'good', '2022-04-26', '', ''),
(9, 'LOG8346864509', 'user1', '8129895738', 'excellent', '2022-04-26', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feulrest`
--

CREATE TABLE `feulrest` (
  `wrkid` int(11) NOT NULL,
  `CLog_Id` varchar(200) NOT NULL,
  `WLog_Id` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `wname` varchar(200) NOT NULL,
  `ccntno` varchar(200) NOT NULL,
  `wcntno` varchar(200) NOT NULL,
  `prblm` text NOT NULL,
  `date` date NOT NULL,
  `stats` varchar(200) NOT NULL,
  `tme` varchar(200) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feulrest`
--

INSERT INTO `feulrest` (`wrkid`, `CLog_Id`, `WLog_Id`, `cname`, `wname`, `ccntno`, `wcntno`, `prblm`, `date`, `stats`, `tme`, `photo`) VALUES
(5, 'LOG8346864509', 'LOG5924134312', 'user1', 'indian oil', '8129895738', '8129895738', 'low fuel', '2022-04-26', 'Pending', '02:44', '8f628e2545ed33f66204b0435cc8a938 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fltrack`
--

CREATE TABLE `fltrack` (
  `ftrk_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `kmeter` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `amt` double NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `fuel_id` int(11) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `cntno1` text NOT NULL,
  `cntno2` text NOT NULL,
  `location` text NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`fuel_id`, `Log_Id`, `name`, `cntno1`, `cntno2`, `location`, `desp`, `date`, `photo`) VALUES
(4, 'LOG5924134312', 'indian oil', '8129895738', '8129895738', 'kozhikode', 'good fuel', '2022-04-26', 'medicine-transparent-background-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insr_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `ndate` date NOT NULL,
  `fname` varchar(200) NOT NULL,
  `amt` double NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prd_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `qty` double NOT NULL,
  `price` double NOT NULL,
  `tax` double NOT NULL,
  `location` text NOT NULL,
  `photo` text NOT NULL,
  `desp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prd_id`, `Log_Id`, `name`, `qty`, `price`, `tax`, `location`, `photo`, `desp`) VALUES
(5, 'LOG2463580801', 'egg', -7, 9, 1, 'palakkad', '8f628e2545ed33f66204b0435cc8a938 (1).jpg', 'nice mutta');

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE `productorder` (
  `ord_id` int(11) NOT NULL,
  `BLog_Id` text DEFAULT NULL,
  `SLog_Id` text DEFAULT NULL,
  `cname` text DEFAULT NULL,
  `ccontact_no` text DEFAULT NULL,
  `clocation` text DEFAULT NULL,
  `pname` text DEFAULT NULL,
  `qty` text DEFAULT NULL,
  `price` double DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `tot` double DEFAULT NULL,
  `stat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productorder`
--

INSERT INTO `productorder` (`ord_id`, `BLog_Id`, `SLog_Id`, `cname`, `ccontact_no`, `clocation`, `pname`, `qty`, `price`, `dat`, `photo`, `tot`, `stat`) VALUES
(3, 'LOG8346864509', 'LOG2463580801', 'user1', '8129895738', 'palakkad', 'egg', '2', 9, '2022-04-26', '8f628e2545ed33f66204b0435cc8a938 (1).jpg', 18, 'Accept'),
(4, 'LOG8346864509', 'LOG2463580801', 'user1', '8129895738', 'palakkad', 'egg', '4', 9, '2022-04-26', '8f628e2545ed33f66204b0435cc8a938 (1).jpg', 36, 'Pending'),
(5, 'LOG8346864509', 'LOG2463580801', 'user1', '8129895738', 'palakkad', 'egg', '2', 9, '2022-04-26', '8f628e2545ed33f66204b0435cc8a938 (1).jpg', 18, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `taxtest`
--

CREATE TABLE `taxtest` (
  `txtst_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `ndate` date NOT NULL,
  `fname` varchar(200) NOT NULL,
  `txtst` varchar(200) NOT NULL,
  `amt` double NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `trkid` int(11) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vhno` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `bdaye` date NOT NULL,
  `amt` double NOT NULL,
  `date` date NOT NULL,
  `st` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `vtrack_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `vehicle_no` text NOT NULL,
  `vehicle_type` text NOT NULL,
  `subject` text NOT NULL,
  `amount` double NOT NULL,
  `next_date` date NOT NULL,
  `vdescription` text NOT NULL,
  `vdate` date NOT NULL,
  `klmt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `contact_no` text NOT NULL,
  `email` text NOT NULL,
  `location` text NOT NULL,
  `password` text NOT NULL,
  `utype` text NOT NULL,
  `stat` text NOT NULL,
  `liceno` text DEFAULT NULL,
  `adharno` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Log_Id`, `name`, `contact_no`, `email`, `location`, `password`, `utype`, `stat`, `liceno`, `adharno`, `photo`, `date`) VALUES
(10, 'LOG1216724293', 'WeToGo', '9847169014', 'admin@gmail.com', 'PALAKKAD', 'wetogo', 'Admin', 'Active', 'olkkk', '67464641464', 'Lighthouse.jpg', '2022-03-19'),
(19, 'LOG8346004974', 'abhijith k j', '8129895738', 'workshop@gmail.com', 'palakkad', 'workshop', 'Workshop', 'Active', 'lc123z456', NULL, 'medicine-transparent-background-5 (1).png', '2022-04-18'),
(20, 'LOG5924134312', 'prashob', '8129895738', 'fuelstation@gmail.com', 'palakkad', 'fuelstation', 'Fuel', 'Active', 'lc123z456', NULL, '8f628e2545ed33f66204b0435cc8a938 (1).jpg', '2022-04-18'),
(21, 'LOG2463580801', 'ajith', '8129895738', 'restaurant@gmail.com', 'palakkad', 'restaurant', 'Restaurant', 'Active', 'lc123z456', NULL, '8f628e2545ed33f66204b0435cc8a938 (1).jpg', '2022-04-18'),
(22, 'LOG8346864509', 'user1', '8129895738', 'user1@gmail.com', 'palakkad', 'user1', 'User', 'Active', 'lc123z456', '8527496315', '8f628e2545ed33f66204b0435cc8a938 (1).jpg', '2022-04-18'),
(24, 'LOG6060222468', 'user', '8129895738', 'user2@gmail.com', 'palakkad', 'user2', 'User', 'Active', 'lc123z456', '124578', '8f628e2545ed33f66204b0435cc8a938.jpg', '2022-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehi_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `oname` text NOT NULL,
  `ocnto` text NOT NULL,
  `vname` text NOT NULL,
  `vno` text NOT NULL,
  `brnd` varchar(200) NOT NULL,
  `vmodel` text NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `vcolor` varchar(200) NOT NULL,
  `vengno` text NOT NULL,
  `vbdate` text NOT NULL,
  `vtdate` text NOT NULL,
  `amt` double NOT NULL,
  `photo` text NOT NULL,
  `vdescrpt` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehi_id`, `Log_Id`, `aadharno`, `oname`, `ocnto`, `vname`, `vno`, `brnd`, `vmodel`, `vtype`, `vcolor`, `vengno`, `vbdate`, `vtdate`, `amt`, `photo`, `vdescrpt`, `date`) VALUES
(6, 'LOG8346864509', '8527496315', 'user1', '8129895738', 'maruthi 800', 'KL 09 AL 6642', 'SUZUKI', '2006', 'Four Wheeler', 'RED', '258963', '2006-07-07', '2023-04-25', 800, 'medicine-transparent-background-5.png', 'NEAT VEHICLE', '2022-04-26'),
(8, 'LOG6060222468', '124578', 'user', '8129895738', 'unicorn', 'KL 55 A 3990', 'suzuki', '2007', 'Two Wheeler', 'red', '254136', '2007-07-07', '2022-02-22', 1000, '8f628e2545ed33f66204b0435cc8a938 (1).jpg', 'nice bike', '2022-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `vrequest`
--

CREATE TABLE `vrequest` (
  `vreq_id` int(11) NOT NULL,
  `VLog_Id` text NOT NULL,
  `ULog_Id` varchar(200) NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `oname` varchar(200) NOT NULL,
  `ocnto` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `brnd` text NOT NULL,
  `vmodel` text NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `tno` double NOT NULL,
  `tdate` date NOT NULL,
  `amt` double NOT NULL,
  `vdescrpt` text NOT NULL,
  `vostat` varchar(200) NOT NULL,
  `rostat` varchar(200) NOT NULL,
  `tostat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vrequest`
--

INSERT INTO `vrequest` (`vreq_id`, `VLog_Id`, `ULog_Id`, `aadharno`, `photo`, `oname`, `ocnto`, `vname`, `vno`, `brnd`, `vmodel`, `vtype`, `cname`, `contact_no`, `tno`, `tdate`, `amt`, `vdescrpt`, `vostat`, `rostat`, `tostat`) VALUES
(9, 'LOG8346864509', 'LOG6060222468', '8527496315', '8f628e2545ed33f66204b0435cc8a938.jpg', 'user1', '8129895738', 'maruthi 800', 'KL 09 AL 6642', 'SUZUKI', '2006', 'Four Wheeler', 'user', '8129895738', 5, '2022-02-02', 800, 'palani trip', 'Accept', 'Accept', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `vservice`
--

CREATE TABLE `vservice` (
  `ftrk_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `wrk_id` int(11) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `cntno` text NOT NULL,
  `wtype` text NOT NULL,
  `location` text NOT NULL,
  `srvce` text NOT NULL,
  `date` date NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`wrk_id`, `Log_Id`, `name`, `cntno`, `wtype`, `location`, `srvce`, `date`, `photo`) VALUES
(3, 'LOG8346004974', 'knk automobiles', '8129895739', 'maruthi service center', 'palakkad', 'car repair, service, painting', '2022-04-26', 'medicine-transparent-background-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `workshoprest`
--

CREATE TABLE `workshoprest` (
  `wrkid` int(11) NOT NULL,
  `CLog_Id` varchar(200) NOT NULL,
  `WLog_Id` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `wname` varchar(200) NOT NULL,
  `ccntno` varchar(200) NOT NULL,
  `wcntno` varchar(200) NOT NULL,
  `prblm` text NOT NULL,
  `date` date NOT NULL,
  `stats` varchar(200) NOT NULL,
  `tme` varchar(200) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshoprest`
--

INSERT INTO `workshoprest` (`wrkid`, `CLog_Id`, `WLog_Id`, `cname`, `wname`, `ccntno`, `wcntno`, `prblm`, `date`, `stats`, `tme`, `photo`) VALUES
(3, 'LOG8346864509', 'LOG8346004974', 'user1', 'knk automobiles', '8129895738', '8129895739', 'engine prob', '2022-04-26', 'Accept', '06:00', '8f628e2545ed33f66204b0435cc8a938.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wtrack`
--

CREATE TABLE `wtrack` (
  `wtrk_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `kmeter` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `amt` double NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fdbk_id`);

--
-- Indexes for table `feulrest`
--
ALTER TABLE `feulrest`
  ADD PRIMARY KEY (`wrkid`);

--
-- Indexes for table `fltrack`
--
ALTER TABLE `fltrack`
  ADD PRIMARY KEY (`ftrk_id`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`fuel_id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insr_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indexes for table `productorder`
--
ALTER TABLE `productorder`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `taxtest`
--
ALTER TABLE `taxtest`
  ADD PRIMARY KEY (`txtst_id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`trkid`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`vtrack_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehi_id`);

--
-- Indexes for table `vrequest`
--
ALTER TABLE `vrequest`
  ADD PRIMARY KEY (`vreq_id`);

--
-- Indexes for table `vservice`
--
ALTER TABLE `vservice`
  ADD PRIMARY KEY (`ftrk_id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`wrk_id`);

--
-- Indexes for table `workshoprest`
--
ALTER TABLE `workshoprest`
  ADD PRIMARY KEY (`wrkid`);

--
-- Indexes for table `wtrack`
--
ALTER TABLE `wtrack`
  ADD PRIMARY KEY (`wtrk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fdbk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feulrest`
--
ALTER TABLE `feulrest`
  MODIFY `wrkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fltrack`
--
ALTER TABLE `fltrack`
  MODIFY `ftrk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `fuel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `insr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `productorder`
--
ALTER TABLE `productorder`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `taxtest`
--
ALTER TABLE `taxtest`
  MODIFY `txtst_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `trkid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `vtrack_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vrequest`
--
ALTER TABLE `vrequest`
  MODIFY `vreq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vservice`
--
ALTER TABLE `vservice`
  MODIFY `ftrk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `wrk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workshoprest`
--
ALTER TABLE `workshoprest`
  MODIFY `wrkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wtrack`
--
ALTER TABLE `wtrack`
  MODIFY `wtrk_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
