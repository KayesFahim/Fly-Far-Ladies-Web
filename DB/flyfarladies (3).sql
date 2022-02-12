-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 06:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `coverimage` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `name`, `coverimage`, `created`) VALUES
(1, 'Turkey Tour', 'images/Turkey Tour/turkey-travel-guide-best-time-to-visit-turkey-balloons-cappadocia.jpg', '2022-02-09 19:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `album` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `uploadAt` varchar(250) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `album`, `title`, `url`, `description`, `uploadAt`) VALUES
(1, 'Butan Tour', 'Butan Tour Sea View', 'images//maldives_13.jpg', '', '2022-02-09 18:41:01'),
(2, 'Dusai Resort', 'Dusai Resort Group Photo', 'images//61537863.jpg', 'Dusai Resort Group Photo', '2022-02-09 18:59:53'),
(3, 'Butan Tour', 'Butan Tour Forest', 'images//download.jpg', 'Butan Tour', '2022-02-09 19:00:56'),
(4, '', 'Sea View', 'images//maldives_13.jpg', 'kayes', '2022-02-09 19:55:24'),
(5, 'Turkey Tour', 'dfbd', 'images//61537863.jpg', 'gzdfgzdfgdfg', '2022-02-09 19:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(10) NOT NULL,
  `JobId` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `JobId`, `category`, `title`, `description`, `created`) VALUES
(1, 'Job-1000', 'Accountant', 'Need Experience Accounrtant', '<h2>Admin Officer (Finance) - Intern</h2>\r\n\r\n<h3>Ezy Hub Limited</h3>\r\n\r\n<p>Vacancy : 2</p>\r\n\r\n<p>Not specific</p>\r\n\r\n<p>Job Responsibilities</p>\r\n\r\n<ul>\r\n	<li>Internship - Based on Performance you will be offered a Full-Time position</li>\r\n	<li>Please note, you will be dealing with foreign clients so English communication skill is MUST</li>\r\n	<li>In-depth knowledge of various social media platforms, best practices, and website analytics.</li>\r\n	<li>Basic Accounting, Banking knowledge.</li>\r\n	<li>Proficient in MS Word, Excel, Email, PowerPoint, and social media tools.</li>\r\n	<li>A highly energetic, motivated, and sincere person.</li>\r\n	<li>Collaborative team member with a positive attitude.</li>\r\n	<li>Sense of discipline and punctuality.</li>\r\n	<li>Basic Knowledge on Information Technology.</li>\r\n	<li>Excellent interpersonal, communication, and convincing skill.</li>\r\n	<li>Track progress, priorities, and deadlines of various projects</li>\r\n	<li>Working on day-to-day assignments and reporting to supervisor.</li>\r\n</ul>\r\n\r\n<p>Employment Status</p>\r\n\r\n<p>Internship</p>\r\n\r\n<p>Workplace</p>\r\n\r\n<ul>\r\n	<li>Work at office</li>\r\n</ul>\r\n\r\n<p>Educational Requirements</p>\r\n\r\n<ul>\r\n	<li>Masters degree in any discipline, Bachelor degree in any discipline</li>\r\n	<li>North South University,American International University Bangladesh students will get preference</li>\r\n</ul>\r\n\r\n<p>Additional Requirements</p>\r\n\r\n<ul>\r\n	<li>Both males and females are allowed to apply</li>\r\n</ul>\r\n\r\n<p>Job Location</p>\r\n\r\n<p>Dhaka</p>\r\n\r\n<p>Salary</p>\r\n\r\n<ul>\r\n	<li>Tk. 8000 - 12000 (Monthly)</li>\r\n	<li>Working Hours: Sunday to Thursday 8:00am - 5.00pm Friday 7.30am-12pm</li>\r\n</ul>\r\n\r\n<p>Compensation &amp; Other Benefits</p>\r\n\r\n<ul>\r\n	<li>Performance bonus, Provident fund</li>\r\n	<li>Festival Bonus: 2</li>\r\n</ul>\r\n\r\n<p>Job Source</p>\r\n\r\n<p>Bdjobs.com Online Job Posting.</p>\r\n\r\n<p>Job Summary</p>\r\n\r\n<p><strong>Published on:</strong>&nbsp;9 Feb 2022</p>\r\n\r\n<p><strong>Vacancy:</strong>&nbsp; Not specific</p>\r\n\r\n<p><strong>Employment Status:</strong>&nbsp;Internship</p>\r\n\r\n<p><strong>Gender:</strong>&nbsp;Both males and females are allowed to apply</p>\r\n\r\n<p><strong>Job Location:</strong>&nbsp;Dhaka</p>\r\n\r\n<p><strong>Salary:</strong>&nbsp;Tk. 8000 - 12000 (Monthly)</p>\r\n\r\n<p><strong>Application Deadline:</strong>&nbsp;9 Mar 2022</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Classes/ Sessions:</strong>&nbsp;2 Sessions</p>\r\n\r\n<p><strong>Course Duration:</strong>&nbsp;18 - 19 February 2022</p>\r\n\r\n<p><strong>Total Hours:</strong>&nbsp;6</p>\r\n\r\n<p><strong>Class Schedule:</strong>Friday &amp; Saturday</p>\r\n\r\n<p><a href=\"https://elearning.bdjobs.com/trainingdetails.asp?TrainingId=96899&amp;upcoming=0\" target=\"_blank\">&nbsp;Detail of this course</a></p>\r\n\r\n<h2>Apply Procedure</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Send your CV to&nbsp;<strong>hr@mortgagebrokerassist.com.au&nbsp;</strong>or to&nbsp;<a href=\"https://mybdjobs.bdjobs.com/mybdjobs/signin.asp?3^4[2b1_d`?_s].`rf_l[a/Zb_j]bamm`csao_d].bbbj]bam]/^e[a[n_u[e[&amp;^iamc=`0[9]0=[Ibpba`moc_ai]msodby^/`o_.^b_j^b]sbocd^y/_=_gbp^r	]r^l]a_E[p8\">Email your CV from&nbsp;<strong>MY BDJOBS</strong>&nbsp;account</a>.</p>\r\n\r\n<p>Application Deadline :&nbsp;<strong>9 Mar 2022</strong></p>\r\n\r\n<h2>Published On</h2>\r\n\r\n<p>9 Feb 2022</p>\r\n\r\n<h2>Company Information</h2>\r\n\r\n<p>Ezy Hub LimitedAddress : Baridhara DOHS, Dhaka.Web :&nbsp;<a href=\"http://www.mortgageaustralia.com.au/\" target=\"_blank\">www.mortgageaustralia.com.au</a></p>\r\n', '2022-02-09');

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `pkId`, `transaction_id`, `currency`, `createdOn`) VALUES
(1, 'Kayes Fahim', 'fahim@flyfarint.com', '1785696341', 500, 'Dhaka', 'Pending', 'PKG-1001', 'SSLCZ_TEST_620373726b44c', 'BDT', '2022-02-09 13:55:30'),
(2, 'Kayes Fahim', 'fahim@flyfarint.com', '1785696341', 500, 'Dhaka', 'Pending', 'PKG-1001', 'SSLCZ_TEST_620374635e105', 'BDT', '2022-02-09 13:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `PkId` varchar(100) NOT NULL,
  `shortTitle` varchar(100) NOT NULL,
  `longTitle` varchar(240) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `tourInclusion` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` mediumtext NOT NULL,
  `policy` mediumtext NOT NULL,
  `operation` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `PkId`, `shortTitle`, `longTitle`, `description`, `packageInclusion`, `duration`, `destination`, `tourType`, `tripPlan`, `groupsize`, `packageCode`, `tripTheme`, `coverimage`, `sightImg1`, `sightImg2`, `sightImg3`, `sightImg4`, `cost`, `exclusion`, `bookclosedate`, `tourInclusion`, `terms`, `policy`, `operation`) VALUES
(2, 'PKG-1001', 'Sitakunda Tour', 'Sitakunda Adventures Trip (Hills, Waterfall , Sea ', 'Sitakunda is a famous place in Chittagong that is experiencing a surge in tourism activity for the ravishing nature and beauty it beholds. The beauty of Sitakunda includes Chandranath Hill, Mahamaya Lake, Guliyakhali Beach, Kumira Ghat, Banshbaria Beach, Jharjhari Jharna Trail, komoldoho Jharna Trail and as well as Sitakunda Ecopark. \r\n\r\nThe exhilarating solitude and sensation from the calmness of the waterfalls, the tranquility of mountains as well as the temples will surely soothe your mind as you visit Sitakunda. Streams of fountains and the silence of nature will surely provide peace of mind once you dive into the serenity of this place', ' Everything that is included in our package:\r\n1. Reserve AC car to come and go.\r\n2. Hotel accommodation.\r\n3. 5 meals in 2 days.\r\n4. Local transportation costs.\r\n\r\n \r\n\r\n   Please we  will visit\r\n1. Chandranath Hills,\r\n2. Sahasradhara Jharna\r\n3. Guliyakhali Sea Beach.', '2 Days', 'Chittagong , Bangladesh', 'Night Out Tour', 'Inbound', 19, 'Sitakundhu - 6', 'Relax Tour', 'images/Sitakunda Tour/Suptadhara-Waterfall-Sitakunda.jpg', ' ', ' ', ' ', ' ', 5500, '1. The cost of any food other than the 5 meals given to us.\r\n2. The cost of medicine\r\n3. Any kind of personal expense.\r\n4. Any entry ticket (if any)', '2022-02-27', 'Accommodation\r\nStandard room facilities\r\n\r\nMeals\r\nMeals\r\n2 breakfast, 2 lunch, 1 dinner\r\n\r\nOrientation Walk\r\nOrientation Walk\r\nOrientation walks in Shoroshodhara waterfall, chondronath hill, sea beaches , Kalkan and Fethiye\r\n\r\nTour Guiding\r\nTour Guiding\r\nTour Guiding Services of experienced Fly Far Ladies local tour leaders.\r\n\r\nTransportation\r\nTransportation\r\nreserve vehicle', 'Note: -\r\n*** There is no good quality hotel in Sitakunda, so our accommodation and food will be arranged in a very ordinary hotel.\r\nThis tour requires trekking to climb the hill, so those who are ill or do not have the experience of trekking are requested not to climb the hill, but can go to Guliyakhali and Sahasradhara.\r\n* Everyone should keep their belongings at their own risk.\r\n\r\nThings to keep in mind when traveling-\r\n1. Since it is a group tour, you must get along with everyone in the group. Any problem should be reported to the admin.\r\n2. We eat and drink, and the hotel will be local, but the standard and clean must be neat and tidy.\r\n3. Must have a travel thirsty mind.\r\n4. No one can be mistreated by a local.\r\n5. The tour plan may change slightly due to any situation or natural disaster, but it must take into account the views of all members and the decision of the admin will be final.', 'Booking Money -  4000 BDT\r\nLast date to cancel the tour - 3 October 2021.\r\nLast date to pay the rest - October 5, 2021.\r\n\r\nPayment Process-\r\nDevelopment- 01755582111 (Merchant Account- Payment Option)\r\nBank-\r\n(BRAC Bank)\r\nFLY FAR LADIES\r\n1521204396911001\r\nBRAC BANK LTD\r\n(BASUNDHARA BRANCH)\r\n(Eastern Bank Ltd.)\r\nFLY FAR LADIES\r\n1151070198176\r\nEASTERN BANK LTD (EBL)\r\n(BASHUNDHARA BRANCH)\r\n\r\nOur office address-\r\nA, 11/2-A, Jagannath Pur, Bashundhara Residential Area, Dhaka.\r\nCall for any need contact-\r\n01755533260,\r\n01755582111,\r\n01755582112\r\nJoin our group to get all the pictures and updates of our tour (girls only)\r\nGroup link-\r\nhttps://www.facebook.com/groups/955931901214069/', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `Pkid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `created` varchar(100) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `Pkid`, `name`, `email`, `price`, `quality`, `comment`, `created`) VALUES
(1, 0, '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]'),
(2, 2, 'vbxv', 'dssd@gmail.com', 'Low', 'Good', 'gdfbhbdh', NULL),
(3, 2, 'Mukarram Billah', 'mukarram@gmail.com', 'Superb', 'Superb', 'Nice Tour', NULL),
(4, 2, 'Kayes', 'fahim@gmail.com', 'Excellent', 'Excellent', 'Nice', NULL),
(5, 2, 'Kayes', 'dssd@gmail.com', 'Excellent', 'Excellent', 'I appreciate you.\r\nYou are perfect just the way you are.\r\nYou are enough.', NULL),
(6, 2, 'abc', 'dssd@gmail.com', 'Excellent', 'Excellent', 'was good', '2022-02-09 13:52:57'),
(7, 2, 'abc', 'dssd@gmail.com', 'Excellent', 'Excellent', 'was good', '2022-02-09 13:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `stockphoto`
--

CREATE TABLE `stockphoto` (
  `id` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `uploadAt` varchar(250) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `CSR_Id`, `username`, `email`, `phone`, `password`) VALUES
(1, 'CSR-1000', 'Fahim1', 'fahim@flyfarint.com', '0125693258', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
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
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockphoto`
--
ALTER TABLE `stockphoto`
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
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stockphoto`
--
ALTER TABLE `stockphoto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
