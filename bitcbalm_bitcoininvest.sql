-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2020 at 07:01 PM
-- Server version: 10.3.24-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitcbalm_bitcoininvest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `rule` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `rule`) VALUES
(1, 'admin', '12345', 'supperAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `adminBitcoinAddress`
--

CREATE TABLE `adminBitcoinAddress` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `address_name` varchar(225) NOT NULL,
  `bitcoin_address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminBitcoinAddress`
--

INSERT INTO `adminBitcoinAddress` (`id`, `admin_id`, `address_name`, `bitcoin_address`) VALUES
(1, 1, 'eueue', '1FfmbHfnpaZjKFvyi1okTjJJusN455paPH');

-- --------------------------------------------------------

--
-- Table structure for table `adminTotal`
--

CREATE TABLE `adminTotal` (
  `id` bigint(20) NOT NULL,
  `total_investments` double NOT NULL,
  `total_withdrawal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminTotal`
--

INSERT INTO `adminTotal` (`id`, `total_investments`, `total_withdrawal`) VALUES
(1, 2400, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `bitcoin_address`
--

CREATE TABLE `bitcoin_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_name` varchar(225) NOT NULL,
  `bitcoin_address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bitcoin_address`
--

INSERT INTO `bitcoin_address` (`id`, `user_id`, `address_name`, `bitcoin_address`) VALUES
(1, 1, 'address1', '1FfmbHfnpaZjKFvyi1okTjJJusN455paPH');

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `id` int(11) NOT NULL,
  `package_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `amount_invested` varchar(225) NOT NULL,
  `amount_to_earn` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`id`, `package_id`, `user_id`, `amount_invested`, `amount_to_earn`, `status`) VALUES
(1, 2, 1, '2400', '3200', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `packageName` varchar(225) NOT NULL,
  `investmentAmout` double NOT NULL,
  `earningAmount` double NOT NULL,
  `bitcoin_address` varchar(225) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `packageName`, `investmentAmout`, `earningAmount`, `bitcoin_address`, `details`) VALUES
(2, 'bitcoin-invest', 2400, 3200, '1FfmbHfnpaZjKFvyi1okTjJJusN455paPH', 'there is no detail for now, try again later');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(512) NOT NULL,
  `status` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `status`, `created_at`) VALUES
(1, 'robeka success', 'ozioma', 'panyuxuan14@gmail.com', '$2y$10$/f85ehzWNwMcbzCDBPlwc.6ldvjXmPZXY.Ovitp6Zm0uN4SURGX2.', 'Activated', '2020-09-14 00:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `userTotal`
--

CREATE TABLE `userTotal` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT 0,
  `Total_amount_earned` double NOT NULL DEFAULT 0,
  `total_amount_invested` double NOT NULL DEFAULT 0,
  `total_amount_withdrawn` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userTotal`
--

INSERT INTO `userTotal` (`id`, `user_id`, `Total_amount_earned`, `total_amount_invested`, `total_amount_withdrawn`) VALUES
(1, 1, 3200, 2400, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `widthdraw`
--

CREATE TABLE `widthdraw` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `bitcoin_address` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widthdraw`
--

INSERT INTO `widthdraw` (`id`, `user_id`, `amount`, `bitcoin_address`, `status`, `date`) VALUES
(1, 1, 2000, '1FfmbHfnpaZjKFvyi1okTjJJusN455paPH', 'Paid', '2020-09-14 00:50:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
