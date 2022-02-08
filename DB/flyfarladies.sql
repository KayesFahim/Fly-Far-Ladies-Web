-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 07:37 AM
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
-- Database: `flyfarladies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `password`) VALUES
(1, 'fahim@flyfarint.com', 'Kayes Fahim', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pkId` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdOn` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `PKG-Id` varchar(100) NOT NULL,
  `shortTitle` varchar(100) NOT NULL,
  `longTitle` varchar(240) NOT NULL,
  `description` mediumtext NOT NULL,
  `packageInclusion` mediumtext NOT NULL,
  `duration` varchar(500) NOT NULL,
  `destination` varchar(500) NOT NULL,
  `tourType` varchar(500) NOT NULL,
  `tripPlan` varchar(500) NOT NULL,
  `groupsize` int(250) NOT NULL,
  `packageCode` varchar(500) NOT NULL,
  `tripTheme` varchar(500) NOT NULL,
  `coverimage` varchar(500) NOT NULL,
  `sightImg1` varchar(500) NOT NULL,
  `sightImg2` varchar(500) NOT NULL,
  `sightImg3` varchar(500) NOT NULL,
  `sightImg4` varchar(500) NOT NULL,
  `cost` int(100) NOT NULL,
  `exclusion` mediumtext NOT NULL,
  `bookclosedate` varchar(100) NOT NULL,
  `tourInclusion` mediumtext NOT NULL,
  `terms` mediumtext NOT NULL,
  `policy` mediumtext NOT NULL,
  `operation` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `PKG-Id`, `shortTitle`, `longTitle`, `description`, `packageInclusion`, `duration`, `destination`, `tourType`, `tripPlan`, `groupsize`, `packageCode`, `tripTheme`, `coverimage`, `sightImg1`, `sightImg2`, `sightImg3`, `sightImg4`, `cost`, `exclusion`, `bookclosedate`, `tourInclusion`, `terms`, `policy`, `operation`) VALUES
(2, 'PKG-1001', 'Sitakunda Tour', 'Sitakunda Adventures Trip (Hills, Waterfall , Sea ', 'Sitakunda is a famous place in Chittagong that is experiencing a surge in tourism activity for the ravishing nature and beauty it beholds. The beauty of Sitakunda includes Chandranath Hill, Mahamaya Lake, Guliyakhali Beach, Kumira Ghat, Banshbaria Beach, Jharjhari Jharna Trail, komoldoho Jharna Trail and as well as Sitakunda Ecopark. \r\n\r\nThe exhilarating solitude and sensation from the calmness of the waterfalls, the tranquility of mountains as well as the temples will surely soothe your mind as you visit Sitakunda. Streams of fountains and the silence of nature will surely provide peace of mind once you dive into the serenity of this place', ' Everything that is included in our package:\r\n1. Reserve AC car to come and go.\r\n2. Hotel accommodation.\r\n3. 5 meals in 2 days.\r\n4. Local transportation costs.\r\n\r\n \r\n\r\n   Please we  will visit\r\n1. Chandranath Hills,\r\n2. Sahasradhara Jharna\r\n3. Guliyakhali Sea Beach.', '2 Days', 'Chittagong , Bangladesh', 'Night Out Tour', 'Inbound', 19, 'Sitakundhu - 6', 'Relax Tour', 'images/Sitakunda Tour/Suptadhara-Waterfall-Sitakunda.jpg', ' ', ' ', ' ', ' ', 5500, '1. The cost of any food other than the 5 meals given to us.\r\n2. The cost of medicine\r\n3. Any kind of personal expense.\r\n4. Any entry ticket (if any)', '2022-02-27', 'Accommodation\r\nStandard room facilities\r\n\r\nMeals\r\nMeals\r\n2 breakfast, 2 lunch, 1 dinner\r\n\r\nOrientation Walk\r\nOrientation Walk\r\nOrientation walks in Shoroshodhara waterfall, chondronath hill, sea beaches , Kalkan and Fethiye\r\n\r\nTour Guiding\r\nTour Guiding\r\nTour Guiding Services of experienced Fly Far Ladies local tour leaders.\r\n\r\nTransportation\r\nTransportation\r\nreserve vehicle', 'Note: -\r\n*** There is no good quality hotel in Sitakunda, so our accommodation and food will be arranged in a very ordinary hotel.\r\nThis tour requires trekking to climb the hill, so those who are ill or do not have the experience of trekking are requested not to climb the hill, but can go to Guliyakhali and Sahasradhara.\r\n* Everyone should keep their belongings at their own risk.\r\n\r\nThings to keep in mind when traveling-\r\n1. Since it is a group tour, you must get along with everyone in the group. Any problem should be reported to the admin.\r\n2. We eat and drink, and the hotel will be local, but the standard and clean must be neat and tidy.\r\n3. Must have a travel thirsty mind.\r\n4. No one can be mistreated by a local.\r\n5. The tour plan may change slightly due to any situation or natural disaster, but it must take into account the views of all members and the decision of the admin will be final.', 'Booking Money -  4000 BDT\r\nLast date to cancel the tour - 3 October 2021.\r\nLast date to pay the rest - October 5, 2021.\r\n\r\nPayment Process-\r\nDevelopment- 01755582111 (Merchant Account- Payment Option)\r\nBank-\r\n(BRAC Bank)\r\nFLY FAR LADIES\r\n1521204396911001\r\nBRAC BANK LTD\r\n(BASUNDHARA BRANCH)\r\n(Eastern Bank Ltd.)\r\nFLY FAR LADIES\r\n1151070198176\r\nEASTERN BANK LTD (EBL)\r\n(BASHUNDHARA BRANCH)\r\n\r\nOur office address-\r\nA, 11/2-A, Jagannath Pur, Bashundhara Residential Area, Dhaka.\r\nCall for any need contact-\r\n01755533260,\r\n01755582111,\r\n01755582112\r\nJoin our group to get all the pictures and updates of our tour (girls only)\r\nGroup link-\r\nhttps://www.facebook.com/groups/955931901214069/', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `CSR_Id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
