-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 10:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnement`
--


-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-01-24 16:21:18', '21-06-2018 08:27:55 PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(11, 'cat', '', '2020-04-26 17:32:20', NULL),
(12, 'ABC', '', '2020-04-26 17:32:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `personnel` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nomcour` varchar(255) CHARACTER SET latin1 NOT NULL,
  `jour` varchar(255) CHARACTER SET latin1 NOT NULL,
  `start` varchar(6) NOT NULL,
  `end` varchar(6) NOT NULL,
  `description` longtext CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `personnel`, `nomcour`, `jour`, `start`, `end`, `description`) VALUES
(12, 'fedi  Ghourabi', 'boxing', 'Friday', '6 AM', '2', 'asc'),
(13, 'fedi  Ghourabi', 'boxing', 'Tuesday', '6 AM', '12 PM', ''),
(14, 'fedi  Ghourabi', 'boxing', 'Tuesday', '6 AM', '12 PM', ''),
(15, 'fedi  Ghourabi', 'boxing', 'Tuesday', '6 AM', '12 PM', ''),
(16, 'Yasmine  Chelbi', 'boxing', 'Wednesday', '6 AM', '12 PM', 'asas'),
(17, 'fedi  Ghourabi', 'boxing', 'Tuesday', '6 AM', '12 PM', ''),
(18, 'Mohamed Aziz  Ghorbel', 'boxing', 'Tuesday', '6 AM', '12 PM', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `cour`
--

CREATE TABLE `cour` (
  `id` int(11) NOT NULL,
  `personnel` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nomcour` varchar(255) NOT NULL,
  `jour` varchar(25) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `perso_fk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cour`
--

INSERT INTO `cour` (`id`, `personnel`, `nomcour`, `jour`, `start`, `end`, `description`, `perso_fk`) VALUES
(6, '<br />\r\n<b>Notice</b>:  Undefined index: id in <b>C:UsersFedyDesktopxampphtdocsdublingymadminclasses.php</b> on line <b>86</b><br />\r\n', 'boxing', 'Monday', 6, 12, 'sa', 0),
(7, '<br />\r\n<b>Notice</b>:  Undefined index: id in <b>C:UsersFedyDesktopxampphtdocsdublingymadminclasses.php</b> on line <b>86</b><br />\r\n', 'boxing', 'Monday', 6, 12, 'sa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(2) NOT NULL,
  `video` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `video`) VALUES
(0, 'photos/photo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(10, 18, '223', 1, '2020-04-21 09:59:24', 'Home Delivery', 'Delivered'),
(11, 18, '223', 2, '2020-04-21 09:59:43', 'Home Delivery', NULL),
(12, 18, '223', 100, '2020-04-21 13:04:21', 'Paypal / Credit card', 'Delivered'),
(13, 1, '223', 10, '2020-04-21 13:22:01', 'Paypal / Credit card', NULL),
(14, 18, '223', 111, '2020-04-21 13:23:32', 'Paypal / Credit card', NULL),
(15, 19, '223', 1, '2020-04-22 16:33:31', 'Home Delivery', NULL),
(16, 19, '223', 1, '2020-04-22 16:38:42', 'Home Delivery', NULL),
(17, 19, '223', 2, '2020-04-22 16:38:54', 'Home Delivery', NULL),
(18, 19, '223', 2, '2020-04-22 16:40:24', 'Home Delivery', NULL),
(19, 19, '223', 2, '2020-04-22 16:40:34', 'Home Delivery', NULL),
(20, 19, '223', 1, '2020-04-22 16:41:12', 'Home Delivery', NULL),
(21, 19, '223', 1, '2020-04-22 16:44:12', 'Home Delivery', NULL),
(22, 19, '223', 1, '2020-04-22 16:46:17', 'Home Delivery', NULL),
(23, 19, '223', 1, '2020-04-22 16:46:24', 'Home Delivery', NULL),
(24, 19, '223', 1, '2020-04-22 16:47:00', 'Home Delivery', NULL),
(25, 19, '223', 1, '2020-04-22 16:48:09', 'Home Delivery', NULL),
(26, 19, '223', 2, '2020-04-22 16:48:36', 'Home Delivery', NULL),
(27, 19, '223', 3, '2020-04-22 16:49:22', 'Home Delivery', NULL),
(28, 19, '223', 1, '2020-04-22 16:49:57', 'Home Delivery', NULL),
(29, 19, '223', 2, '2020-04-22 16:50:20', 'Home Delivery', NULL),
(30, 19, '223', 3, '2020-04-22 16:50:53', 'Home Delivery', NULL),
(31, 19, '223', 3, '2020-04-22 16:51:38', 'Home Delivery', NULL),
(32, 19, '223', 3, '2020-04-22 16:52:10', 'Home Delivery', NULL),
(33, 19, '223', 3, '2020-04-22 16:54:53', 'Home Delivery', NULL),
(34, 19, '223', 3, '2020-04-22 16:54:59', 'Home Delivery', NULL),
(35, 1, '223', 1, '2020-04-24 12:48:14', 'Home Delivery', NULL),
(36, 18, '223', 1, '2020-04-24 12:59:42', 'Paypal / Credit card', NULL),
(37, 18, '223', 1, '2020-04-24 13:01:00', 'Paypal / Credit card', 'Delivered'),
(38, 18, '223', 1, '2020-04-24 13:05:05', 'Home Delivery', 'in Process'),
(39, 18, '223', 1, '2020-04-24 13:35:36', 'Paypal / Credit card', 'in Process'),
(40, 18, '223', 1, '2020-04-24 13:47:31', 'Home Delivery', NULL),
(41, 18, '223', 1, '2020-04-24 13:48:47', 'Home Delivery', NULL),
(42, 18, '223', 1, '2020-04-24 13:55:09', 'Home Delivery', NULL),
(43, 18, '223', 1, '2020-04-24 14:05:40', 'Home Delivery', NULL),
(44, 18, '223', 1, '2020-04-24 14:11:53', 'Paypal / Credit card', NULL),
(45, 18, '223', 1, '2020-04-24 14:13:49', 'Home Delivery', NULL),
(46, 18, '223', 10, '2020-04-24 14:20:24', 'Home Delivery', NULL),
(47, 18, '223', 1, '2020-04-24 14:21:59', 'Home Delivery', 'Delivered'),
(48, 1, '223', 1, '2020-04-24 14:46:41', 'Home Delivery', NULL),
(49, 1, '223', 2, '2020-04-24 14:47:58', 'Home Delivery', NULL),
(50, 1, '223', 10, '2020-04-24 20:57:15', 'Paypal / Credit card', NULL),
(51, 1, '223', 1, '2020-04-24 21:21:13', 'Paypal / Credit card', NULL),
(52, 18, '223', 1, '2020-04-26 14:57:55', 'Paypal / Credit card', NULL),
(53, 18, '27', 1, '2020-04-26 21:15:58', 'Home Delivery', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 3, 'in Process', 'Order has been Shipped.', '2017-03-10 19:36:45'),
(2, 1, 'Delivered', 'Order Has been delivered', '2017-03-10 19:37:31'),
(3, 3, 'Delivered', 'Product delivered successfully', '2017-03-10 19:43:04'),
(4, 4, 'in Process', 'Product ready for Shipping', '2017-03-10 19:50:36'),
(5, 7, 'Delivered', '.', '2020-04-07 12:24:03'),
(6, 9, 'Delivered', 'Delivered Successfully', '2020-04-16 09:20:31'),
(7, 10, 'Delivered', 'delivered successfully', '2020-04-21 10:02:46'),
(8, 12, 'in Process', 'You will receive your product within 3 days, thanks for your patience', '2020-04-21 13:12:39'),
(9, 12, 'Delivered', 'Delivered successfully , thanks for you for shopping :)', '2020-04-21 13:17:21'),
(10, 37, 'Delivered', 'ok', '2020-04-24 13:01:43'),
(11, 38, 'in Process', '\r\nlk', '2020-04-24 13:31:45'),
(12, 39, 'in Process', '1', '2020-04-24 13:44:10'),
(13, 47, 'Delivered', 'delivered successfully', '2020-04-24 21:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `idpers` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `specialite` varchar(25) NOT NULL,
  `emailpers` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`idpers`, `nom`, `prenom`, `specialite`, `emailpers`, `numero`, `photo`) VALUES
(6, 'Mohamed Aziz', 'Ghorbel', 'B', 'Mohamedaziz.ghorbel@esprit.tn', 56565321, 'Uploads/ Alpha team.png'),
(7, 'Yasmine', 'Chelbi', 'Ksou7eyet rass', 'yasmine.chelbi@esprit.tn', 0, 'Uploads/ '),
(8, 'fedi', 'Ghourabi', 'swimming', 'aadadadad@afa', 35, 'Uploads/ '),
(9, 'nnn', 'v ', 'bbb', 'aadadadad@afa', 35, 'Uploads/ photo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `praticipant`
--

CREATE TABLE `praticipant` (
  `user_fk` int(8) NOT NULL,
  `cour_fk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(27, 12, 'kaskrout', 'sad', 1000, 1000, '<br>', '3W72119s5BjWMGm4Xa2MvD5AT2bJsSA8F9WeC71v1s1fKfGkK9mMKuc3LcvF4KigbWg9UsrpEPGLDboeaedjWL1h36feVesNvjAqqRq8BcQzFFsH7uNMBC.png', 0, 'In Stock', '2020-04-26 17:32:43', NULL),
(28, 11, 'Product 0', 'sad', 1000, 222, '<br>', 'logo 1.png', 0, 'In Stock', '2020-04-26 17:33:04', NULL),
(29, 12, 't-shirt', 'nike', 1000, 222, '<br>', 'transparent-e-12.png', 0, 'In Stock', '2020-04-26 17:36:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 'mohamedkarim.oueslati@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-16 13:28:04', '16-04-2020 03:28:27 PM', 1),
(2, 'mohamedkarim.oueslati@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-16 13:28:45', NULL, 1),
(3, 'fedisaid.ghourabi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-17 09:33:28', NULL, 0),
(4, 'fedisaid.ghourabi@esprit.com', 0x3a3a3100000000000000000000000000, '2020-04-17 09:34:20', NULL, 0),
(5, 'fedisaid.ghourabi@esprit.com', 0x3a3a3100000000000000000000000000, '2020-04-17 09:34:30', NULL, 0),
(6, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-17 09:34:44', NULL, 0),
(7, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-17 09:34:57', NULL, 0),
(8, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-17 09:35:03', NULL, 0),
(9, 'adsasd@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-17 09:35:27', '17-04-2020 03:16:43 PM', 1),
(10, 'adsasd@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-17 09:49:56', NULL, 1),
(11, 'fedisaid.ghourabi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-17 10:14:22', NULL, 0),
(12, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-17 10:15:19', NULL, 0),
(13, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-17 10:15:26', NULL, 1),
(14, 'fedisaid.ghourabi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-17 17:57:46', NULL, 0),
(15, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-17 17:57:53', NULL, 0),
(16, 'fedisaid.ghourabi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-17 17:58:01', NULL, 0),
(17, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-17 17:58:07', '17-04-2020 08:23:46 PM', 1),
(18, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-17 18:24:03', NULL, 0),
(19, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-19 15:28:55', '19-04-2020 06:18:02 PM', 1),
(20, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-19 16:18:09', NULL, 1),
(21, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-19 18:45:47', NULL, 0),
(22, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-19 18:45:57', '19-04-2020 08:47:25 PM', 1),
(23, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-19 18:47:35', '19-04-2020 08:48:49 PM', 1),
(24, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-19 19:17:08', '19-04-2020 09:17:56 PM', 1),
(25, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-19 19:18:09', '19-04-2020 09:18:51 PM', 1),
(26, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-19 19:55:42', '20-04-2020 03:01:40 PM', 1),
(27, 'fedisaid.ghourabi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-20 13:55:29', NULL, 0),
(28, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-20 13:55:36', NULL, 1),
(29, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-21 09:30:30', '21-04-2020 11:34:30 AM', 1),
(30, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-21 09:37:55', '21-04-2020 11:39:00 AM', 1),
(31, 'fedisaid.esprit@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-21 09:56:50', NULL, 0),
(32, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-21 09:57:08', '21-04-2020 12:03:50 PM', 1),
(33, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-21 12:59:53', '21-04-2020 03:22:48 PM', 1),
(34, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-21 13:23:05', NULL, 1),
(35, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-22 16:31:48', '22-04-2020 07:03:57 PM', 1),
(36, 'fedisaid.ghourabi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-22 17:04:04', '22-04-2020 07:04:16 PM', 1),
(37, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-22 17:04:28', '22-04-2020 07:06:05 PM', 1),
(38, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-22 17:13:50', '22-04-2020 07:16:07 PM', 1),
(39, 'da.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-22 17:16:18', '22-04-2020 07:17:58 PM', 1),
(40, 'fedisaid.ghourabi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-22 17:18:36', NULL, 0),
(41, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-22 17:18:44', '22-04-2020 07:19:35 PM', 1),
(42, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-22 17:21:43', '22-04-2020 07:22:03 PM', 1),
(43, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-22 17:23:04', '22-04-2020 07:25:13 PM', 1),
(44, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-22 17:26:31', '22-04-2020 07:31:12 PM', 1),
(45, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-23 14:43:52', '23-04-2020 07:34:52 PM', 1),
(46, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-23 17:35:06', '24-04-2020 01:31:09 PM', 1),
(47, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 11:31:16', '24-04-2020 01:34:38 PM', 1),
(48, 'rani.ghourabi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-24 11:35:11', '24-04-2020 01:55:21 PM', 1),
(49, 'rani.ghourabi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-04-24 11:55:31', '24-04-2020 02:05:55 PM', 1),
(50, 'fedisaid.ghourabi@esprit.com', 0x3a3a3100000000000000000000000000, '2020-04-24 12:06:01', NULL, 0),
(51, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 12:06:09', NULL, 1),
(52, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 12:57:52', NULL, 1),
(53, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 13:34:42', NULL, 0),
(54, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 13:34:47', NULL, 1),
(55, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 13:45:49', NULL, 0),
(56, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 13:45:58', '24-04-2020 04:16:03 PM', 1),
(57, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 14:17:52', '24-04-2020 04:48:23 PM', 1),
(58, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 14:48:28', '24-04-2020 04:49:39 PM', 1),
(59, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 14:49:47', NULL, 0),
(60, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-24 14:49:53', '24-04-2020 11:25:19 PM', 1),
(61, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-26 14:46:07', NULL, 1),
(62, 'fedisaid.ghourabi@esprit.tn', 0x3a3a3100000000000000000000000000, '2020-04-26 21:15:34', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `billingpincode` int(11) DEFAULT NULL,
  `shippingAddress` longtext CHARACTER SET latin1 DEFAULT NULL,
  `shippingState` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `shippingCity` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext CHARACTER SET latin1 DEFAULT NULL,
  `billingState` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `billingCity` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `billingpincode`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `regDate`, `updationDate`) VALUES
(15, 'oueslati karim', 'mohamedkarim.oueslati@esprit.tn', 55125083, 'e14debd5518457feb6d7bb5569e7d42a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-16 13:27:33', NULL),
(16, 'Fedy Ghourabi', 'fedisaid.hjourabi@esprit.tn', 55969235, 'ab4f63f9ac65152575886860dde480a1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-17 09:34:05', NULL),
(17, 'aa', 'adsasd@gmail.com', 97183103, 'ab4f63f9ac65152575886860dde480a1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-17 09:35:22', NULL),
(18, 'Fedy Ghourabi', 'fedisaid.ghourabi@esprit.tn', 55969235, 'ab4f63f9ac65152575886860dde480a1', 54136132, 'Tunis, Tunisie', 'Tunis', 'Tunis', 54136132, 'ariana', 'Tunis', 'Tunis', '2020-04-17 09:49:03', NULL),
(19, 'Fedy Ghourabi', 'da.ghourabi@esprit.tn', 55969235, '8fabdde44e47cb16a9d6f298c3223b4e', 2010, 'Manouba centre', 'Manouba', 'Manouba', 2010, 'Manouba centre', 'Manouba', 'Manouba', '2020-04-17 10:15:00', NULL),
(20, 'Fedi', 'fedisaid.ghourabi@gmail.com', 85265962, 'ab4f63f9ac65152575886860dde480a1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 09:37:25', NULL),
(21, 'Rani Ghourabi', 'rani.ghourabi@gmail.com', 123, 'b9f81618db3b0d7a8be8fd904cca8b6a', 0, 'aaf', 'adad', 'afadf', 12233, 'ad', 'ad', 'ad', '2020-04-24 11:34:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(1, 1, 0, '2017-02-27 18:53:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id_abon`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`idpers`);

--
-- Indexes for table `praticipant`
--
ALTER TABLE `praticipant`
  ADD KEY `user_fk` (`user_fk`),
  ADD KEY `cour_fk` (`cour_fk`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id_abon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cour`
--
ALTER TABLE `cour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `idpers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `cour_ibfk_1` FOREIGN KEY (`perso_fk`) REFERENCES `personnel` (`idpers`) ON UPDATE CASCADE;

--
-- Constraints for table `praticipant`
--
ALTER TABLE `praticipant`
  ADD CONSTRAINT `praticipant_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `praticipant_ibfk_2` FOREIGN KEY (`cour_fk`) REFERENCES `cour` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
