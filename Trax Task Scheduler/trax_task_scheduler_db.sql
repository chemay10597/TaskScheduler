-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2017 at 09:24 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trax_task_scheduler_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customize_task`
--

CREATE TABLE `customize_task` (
  `cust_id` int(11) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `task_duration` text NOT NULL,
  `task_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customize_task`
--

INSERT INTO `customize_task` (`cust_id`, `start_datetime`, `end_datetime`, `task_duration`, `task_id`) VALUES
(1, '2017-10-26 08:00:00', '2017-10-31 17:00:00', '129', 3);

-- --------------------------------------------------------

--
-- Table structure for table `daily_task`
--

CREATE TABLE `daily_task` (
  `daily_id` int(11) NOT NULL,
  `day` text NOT NULL,
  `dtime_start` time NOT NULL,
  `dtime_end` time NOT NULL,
  `dtask_duration` text NOT NULL,
  `task_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_task`
--

INSERT INTO `daily_task` (`daily_id`, `day`, `dtime_start`, `dtime_end`, `dtask_duration`, `task_id`) VALUES
(1, 'Monday, Wednesday, Friday', '10:00:00', '11:00:00', '1:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_task`
--

CREATE TABLE `monthly_task` (
  `monthly_id` int(11) NOT NULL,
  `date_ofthe_month` date NOT NULL,
  `mtime_start` time NOT NULL,
  `mtime_end` time NOT NULL,
  `mtask_duration` text NOT NULL,
  `task_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly_task`
--

INSERT INTO `monthly_task` (`monthly_id`, `date_ofthe_month`, `mtime_start`, `mtime_end`, `mtask_duration`, `task_id`) VALUES
(1, '2017-10-25', '08:00:00', '10:00:00', '02:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `task_description` varchar(250) NOT NULL,
  `task_recursion` varchar(50) NOT NULL,
  `assign_to` int(11) DEFAULT NULL,
  `assign_by` int(11) NOT NULL,
  `task_priority` varchar(50) NOT NULL,
  `task_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `task_name`, `task_description`, `task_recursion`, `assign_to`, `assign_by`, `task_priority`, `task_status`) VALUES
(1, 'qwert', 'qwert', 'daily', NULL, 1, 'high priority', 'unassigned'),
(2, 'asdf', 'asdf', 'weekly', 3, 1, 'medium priority', 'assigned'),
(3, 'zxcv', 'zxcv', 'monthly', NULL, 1, 'high priority', 'unassigned'),
(4, 'mnbv', 'mnbv', 'customize', 3, 1, 'medium priority', 'assigned');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `user_name`, `email`, `account_type`, `team`) VALUES
(1, 'Cherry Mae', 'Estrera', 'estrera.cherrymae', 'estrera.cherrymae@gmail.com', 'admin', 'platformops'),
(2, 'Via', 'Villar', 'villar.via', 'villar.via@gmail.com', 'user', 'techsupport'),
(3, 'Juan', 'Pedro', 'qwert.asdf', 'qwert.asdf@gmail.com', 'user', 'platformops');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weekly_task`
--

CREATE TABLE `weekly_task` (
  `weekly_id` int(11) NOT NULL,
  `task_day` text NOT NULL,
  `wtime_start` time NOT NULL,
  `wtime_end` time NOT NULL,
  `wtask_duration` text NOT NULL,
  `task_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly_task`
--

INSERT INTO `weekly_task` (`weekly_id`, `task_day`, `wtime_start`, `wtime_end`, `wtask_duration`, `task_id`) VALUES
(1, 'Friday', '16:00:00', '17:00:00', '01:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customize_task`
--
ALTER TABLE `customize_task`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `FK_custtask` (`task_id`);

--
-- Indexes for table `daily_task`
--
ALTER TABLE `daily_task`
  ADD PRIMARY KEY (`daily_id`),
  ADD KEY `FK_dailytask` (`task_id`);

--
-- Indexes for table `monthly_task`
--
ALTER TABLE `monthly_task`
  ADD PRIMARY KEY (`monthly_id`),
  ADD KEY `FK_monthlytask` (`task_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `FK_usertask` (`assign_to`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `FK_user` (`user_id`);

--
-- Indexes for table `weekly_task`
--
ALTER TABLE `weekly_task`
  ADD PRIMARY KEY (`weekly_id`) USING BTREE,
  ADD UNIQUE KEY `FK_weeklytask` (`task_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customize_task`
--
ALTER TABLE `customize_task`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `daily_task`
--
ALTER TABLE `daily_task`
  MODIFY `daily_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `monthly_task`
--
ALTER TABLE `monthly_task`
  MODIFY `monthly_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `weekly_task`
--
ALTER TABLE `weekly_task`
  MODIFY `weekly_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customize_task`
--
ALTER TABLE `customize_task`
  ADD CONSTRAINT `FK_custtask` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`);

--
-- Constraints for table `daily_task`
--
ALTER TABLE `daily_task`
  ADD CONSTRAINT `FK_dailytask` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`);

--
-- Constraints for table `monthly_task`
--
ALTER TABLE `monthly_task`
  ADD CONSTRAINT `FK_monthlytask` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `FK_usertask` FOREIGN KEY (`assign_to`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_group`
--
ALTER TABLE `user_group`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `weekly_task`
--
ALTER TABLE `weekly_task`
  ADD CONSTRAINT `FK_weeklytask` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
