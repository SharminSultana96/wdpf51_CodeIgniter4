-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 02:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(30) NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_code`, `street`, `city`, `state`, `zip_code`, `country`, `contact`, `date_created`) VALUES
(1, 'vzTL0PqMogyOWhF', 'Branch-2, Halishahar', 'Chittagong', 'Chittagong', '6000', 'Bangladesh', '+01756545343', '2020-11-26 11:21:41'),
(3, 'KyIab3mYBgAX71t', 'Branch-3, Chandpur Sadar', 'Chandpur', 'Chandpur', '3600', 'Bangladesh', '+01879321765', '2020-11-26 16:45:05'),
(4, 'dIbUK5mEh96f0Zc', 'Branch-4, Hobigonj', 'Sylhet', 'Sylhet', '4500', 'Bangladesh', '+01777565564', '2020-11-27 13:31:49'),
(5, '53adnAHuh9IKO07', 'Branch-1, New Circular Road', 'Dhaka', 'Dhaka', '1000', 'Bangladesh', '+01983561810', '2022-12-20 19:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(30) NOT NULL,
  `reference_number` varchar(100) NOT NULL,
  `sender_name` text NOT NULL,
  `sender_address` text NOT NULL,
  `sender_contact` text NOT NULL,
  `recipient_name` text NOT NULL,
  `recipient_address` text NOT NULL,
  `recipient_contact` text NOT NULL,
  `type` int(1) NOT NULL COMMENT '1 = Deliver, 2=Pickup',
  `from_branch_id` varchar(30) NOT NULL,
  `to_branch_id` varchar(30) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `width` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `reference_number`, `sender_name`, `sender_address`, `sender_contact`, `recipient_name`, `recipient_address`, `recipient_contact`, `type`, `from_branch_id`, `to_branch_id`, `weight`, `height`, `width`, `length`, `price`, `status`, `date_created`) VALUES
(1, '201406231415', 'Sababa', 'Chandpur', '+12345654666', 'Mashfi', 'Chittagong', '+01678687485', 1, '1', '', '30kg', '12in', '12in', '15in', 2500, 7, '2020-11-26 16:15:46'),
(2, '117967400213', 'cvbcvhhg', 'chittagong', '+123456', 'jhgjfghf', 'Dhaka', 'Sample', 2, '1', '5', '30kg', '12in', '12in', '15in', 2500, 1, '2020-11-26 16:46:03'),
(3, '983186540795', 'dsdgfhgf', 'Dhaka', '+1234563546', 'sddgfhvn', 'Chittagong', '+0973675465', 2, '5', '1', '20Kg', '10in', '10in', '10in', 1500, 9, '2020-11-26 16:46:03'),
(4, '514912669061', 'Jannatul Alam', 'Chandpur', '+01919754656', 'Sharmin', 'Dhaka', '+01867556343', 2, '3', '5', '23kg', '12in', '12in', '15in', 1900, 0, '2020-11-27 13:52:14'),
(5, '897856905844', 'dhfghjgfhd', 'Chittagonj', '+124354546', 'fdhjhjghgdf', 'Chandpur', '+12345356453', 2, '1', '3', '30kg', '10in', '10in', '10in', 1450, 5, '2020-11-27 13:52:14'),
(6, '505604168988', 'Shakib Hossain', 'Sylhet', '+01987656755', 'Samir', 'Dhaka', '+0188776654', 1, '1', '', '23kg', '12in', '12in', '15in', 2500, 1, '2020-11-27 14:06:42'),
(7, '310750578350', 'Sultana', 'Dhaka', '+01786245654', 'Shakib', 'Chandpur', '+017647566436', 2, '5', '3', '25', '12', '10', '14', 3000, 7, '2022-12-21 02:39:29'),
(8, '804993685255', 'Aklima', 'Dhaka', '+0167235654', 'Sharmin', 'Chandpur', '+017654654562', 2, '5', '3', '10', '5', '6', '8', 4000, 5, '2022-12-21 02:48:41'),
(9, '315814665107', 'Aklima', 'Dhaka', '+0167235654', 'Sharmin', 'Chandpur', '+017654654562', 2, '5', '3', '6', '4', '5', '6', 3700, 2, '2022-12-21 02:48:42'),
(10, '049457866182', 'Shakib Hossain', 'Chandpur', '+0173865766', 'Sharmin', 'Dhaka', '+017764756474', 2, '3', '5', '13', '10', '6', '8', 3300, 0, '2022-12-21 02:51:27'),
(11, '038877132710', 'Shakib Hossain', 'Chandpur', '+0173865766', 'Sharmin', 'Dhaka', '+017764756474', 2, '3', '5', '10', '7', '8', '9', 1600, 6, '2022-12-21 02:51:28'),
(12, '051293814992', 'Tasnim', 'Dhaka', '+017463567543', 'Tanju', 'Sylhet', '+0173873678564', 2, '5', '4', '35', '15', '12', '18', 5000, 4, '2022-12-21 02:53:08'),
(13, '792661195729', 'Soniya', 'chittagong', '+016545435243', 'Tania', 'Dhaka', '+018765664543', 2, '1', '5', '25', '8', '9', '10', 2200, 7, '2022-12-21 11:01:52'),
(14, '834200757724', 'xzzx', 'Sylhet', '+01653436634', 'nbnbmn', 'Chandpur', '+0184678645', 2, '4', '3', '10', '9', '8', '10', 1200, 3, '2022-12-21 11:06:44'),
(15, '941364488759', 'rytfgyh', 'gfhh', '007686666', 'bvcbvbn', 'vnbn', '07865543', 2, '1', '4', '25', '15', '10', '14', 3000, 1, '2023-01-16 02:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_tracks`
--

CREATE TABLE `parcel_tracks` (
  `id` int(30) NOT NULL,
  `parcel_id` int(30) NOT NULL,
  `status` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel_tracks`
--

INSERT INTO `parcel_tracks` (`id`, `parcel_id`, `status`, `date_created`) VALUES
(1, 2, 1, '2020-11-27 09:53:27'),
(2, 3, 1, '2020-11-27 09:55:17'),
(3, 1, 1, '2020-11-27 10:28:01'),
(4, 1, 2, '2020-11-27 10:28:10'),
(5, 1, 3, '2020-11-27 10:28:16'),
(6, 1, 4, '2020-11-27 11:05:03'),
(7, 1, 5, '2020-11-27 11:05:17'),
(8, 1, 7, '2020-11-27 11:05:26'),
(9, 3, 2, '2020-11-27 11:05:41'),
(10, 6, 1, '2020-11-27 14:06:57'),
(11, 7, 7, '2022-12-21 02:40:15'),
(12, 5, 6, '2022-12-21 02:41:05'),
(13, 5, 8, '2022-12-21 02:41:27'),
(14, 3, 9, '2022-12-21 02:42:11'),
(15, 9, 2, '2022-12-21 02:49:03'),
(16, 8, 5, '2022-12-21 02:49:20'),
(17, 12, 4, '2022-12-21 02:53:27'),
(18, 11, 6, '2022-12-21 02:53:59'),
(19, 14, 3, '2022-12-21 11:07:10'),
(20, 14, 0, '2022-12-21 11:07:45'),
(21, 14, 3, '2022-12-21 11:08:02'),
(22, 13, 7, '2022-12-21 11:38:05'),
(23, 5, 5, '2022-12-21 11:38:23'),
(24, 15, 1, '2023-01-16 02:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Courier Management System', 'info@sample.comm', '+6948 8542 623', '2102  Caldwell Road, Rochester, New York, 14608', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff',
  `branch_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `branch_id`, `date_created`) VALUES
(1, 'Sharmin', 'Sultana', 'sharmin123@gmail.com', '27bac70f192f873895a85cb489061d31', 1, 0, '2020-11-26 10:57:04'),
(2, 'John', 'Smith', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 2, 1, '2020-11-26 11:52:04'),
(3, 'George', 'Wilson', 'gwilson@sample.com', 'd40242fb23c45206fadee4e2418f274f', 2, 4, '2020-11-27 13:32:12'),
(5, 'dfgghfgh', 'dfggf', 'admin@gmail.com', 'e99bbbb78e71ed8cdb1b9c57ceed64ff', 2, 4, '2022-12-20 18:14:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
