-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 09:19 PM
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
(2, 'Butan Tour', 'images/Butan Tour/cover.jpg', '2022-02-11 12:28:59'),
(3, 'Maldives Tour', 'images/Maldives Tour/cover.jpg', '2022-02-11 12:32:24');

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
(6, 'Butan Tour', 'Butan temple', 'images/Butan Tour/butan.jpg', 'My Name Is Kaka', '2022-02-11 12:30:03'),
(7, 'Maldives Tour', 'Maldives See', 'images/Maldives Tour/maldives.jpg', '', '2022-02-11 12:33:22'),
(8, 'Butan Tour', 'River Side View', 'images/Butan Tour/221817.jpg', '', '2022-02-11 13:25:02');

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

INSERT INTO `packages` (`id`, `PkId`, `shortTitle`, `longTitle`, `description`, `packageInclusion`, `duration`, `destination`, `tourType`, `tripPlan`, `groupsize`, `packageCode`, `tripTheme`, `coverimage`, `sightImg1`, `sightImg2`, `sightImg3`, `sightImg4`, `cost`, `exclusion`, `bookclosedate`, `tourInclusion`, `terms`, `policy`, `operation`) VALUES
(1, 'PKG-1000', 'Sitakunda Tour', 'Sitakunda Adventures Trip (Hills, Waterfall , Sea ', 'Sitakunda is a famous place in Chittagong that is experiencing a surge in tourism activity for the ravishing nature and beauty it beholds. The beauty of Sitakunda includes Chandranath Hill, Mahamaya Lake, Guliyakhali Beach, Kumira Ghat, Banshbaria Beach, Jharjhari Jharna Trail, komoldoho Jharna Trail and as well as Sitakunda Ecopark. \r\n\r\nThe exhilarating solitude and sensation from the calmness of the waterfalls, the tranquility of mountains as well as the temples will surely soothe your mind as you visit Sitakunda. Streams of fountains and the silence of nature will surely provide peace of mind once you dive into the serenity of this place', ' Everything that is included in our package:\r\n1. Reserve AC car to come and go.\r\n2. Hotel accommodation.\r\n3. 5 meals in 2 days.\r\n4. Local transportation costs.\r\n\r\n \r\n\r\n   Please we  will visit\r\n1. Chandranath Hills,\r\n2. Sahasradhara Jharna\r\n3. Guliyakhali Sea Beach.', '2 Days', 'Chittagong , Bangladesh', 'Night Out Tour', 'Inbound', 19, 'Sitakundhu - 6', 'Relax Tour', 'images/Sitakunda Tour/Suptadhara-Waterfall-Sitakunda.jpg', ' ', ' ', ' ', ' ', 5500, '1. The cost of any food other than the 5 meals given to us.\r\n2. The cost of medicine\r\n3. Any kind of personal expense.\r\n4. Any entry ticket (if any)', '2022-02-27', 'Accommodation\r\nStandard room facilities\r\n\r\nMeals\r\nMeals\r\n2 breakfast, 2 lunch, 1 dinner\r\n\r\nOrientation Walk\r\nOrientation Walk\r\nOrientation walks in Shoroshodhara waterfall, chondronath hill, sea beaches , Kalkan and Fethiye\r\n\r\nTour Guiding\r\nTour Guiding\r\nTour Guiding Services of experienced Fly Far Ladies local tour leaders.\r\n\r\nTransportation\r\nTransportation\r\nreserve vehicle', 'Note: -\r\n*** There is no good quality hotel in Sitakunda, so our accommodation and food will be arranged in a very ordinary hotel.\r\nThis tour requires trekking to climb the hill, so those who are ill or do not have the experience of trekking are requested not to climb the hill, but can go to Guliyakhali and Sahasradhara.\r\n* Everyone should keep their belongings at their own risk.\r\n\r\nThings to keep in mind when traveling-\r\n1. Since it is a group tour, you must get along with everyone in the group. Any problem should be reported to the admin.\r\n2. We eat and drink, and the hotel will be local, but the standard and clean must be neat and tidy.\r\n3. Must have a travel thirsty mind.\r\n4. No one can be mistreated by a local.\r\n5. The tour plan may change slightly due to any situation or natural disaster, but it must take into account the views of all members and the decision of the admin will be final.', 'Booking Money -  4000 BDT\r\nLast date to cancel the tour - 3 October 2021.\r\nLast date to pay the rest - October 5, 2021.\r\n\r\nPayment Process-\r\nDevelopment- 01755582111 (Merchant Account- Payment Option)\r\nBank-\r\n(BRAC Bank)\r\nFLY FAR LADIES\r\n1521204396911001\r\nBRAC BANK LTD\r\n(BASUNDHARA BRANCH)\r\n(Eastern Bank Ltd.)\r\nFLY FAR LADIES\r\n1151070198176\r\nEASTERN BANK LTD (EBL)\r\n(BASHUNDHARA BRANCH)\r\n\r\nOur office address-\r\nA, 11/2-A, Jagannath Pur, Bashundhara Residential Area, Dhaka.\r\nCall for any need contact-\r\n01755533260,\r\n01755582111,\r\n01755582112\r\nJoin our group to get all the pictures and updates of our tour (girls only)\r\nGroup link-\r\nhttps://www.facebook.com/groups/955931901214069/', ' '),
(3, 'PKG-1001', 'DuSai Resort', '2 Days 1 Night Dusai Resort Package - Ladies Tour', '<p>Every Year Thousands of tourists Tour on&nbsp;<a href=\"https://fb.me/e/1u3jNZyqc\">DuSai Resort &amp; Spa</a>&nbsp;and enjoy their vacation, holiday, and honeymoon. This February we arrange DuSai Resort&nbsp;&nbsp;Resort Package. We will Say 2 days and 1 night there.</p>\r\n\r\n<p>DuSai Resort &amp; Spa is Bangladesh&#39;s first five-star quality boutique villa resort and spa. Located about 200 km northeast of Dhaka, the resort is surrounded by a lake of about 1000 feet and is situated in a green forest on a hill. One of the places where this resort can be called an ideal place for leisure.</p>\r\n', '<p>1. Dhaka-Moulvibazar-Dhaka AC reserve vehicle<br />\r\n2. One room for every 3 people at Dusai Resort.<br />\r\n3. 4 meals in 2 days</p>\r\n', '2 Days', 'Sreemangal, BANGLADESH', 'Night Out Trip', 'Inbound', 29, 'DuSai Resort - 09', 'Relax Tour', 'images/Dusai Resort/cover.jpg', ' ', ' ', ' ', ' ', 11500, '<p>Personal costs.<br />\r\nDinner on the highway on the go.<br />\r\nExtra mineral water (we will provide only with food)<br />\r\nThe cost of what is not in the package<br />\r\nEvening snacks (because many people want to explore different foods while traveling)</p>\r\n', '2022-01-19', '<p>Accommodation</p>\r\n\r\n<p>Free WiFi</p>\r\n\r\n<p>Meals</p>\r\n\r\n<p>2 breakfasts, 1 lunch,1 dinner ,</p>\r\n\r\n<p>Orientation Walk</p>\r\n\r\n<p>Transportation</p>\r\n', '<p>1. Since it is a group tour, you must get along with everyone in the group. Admin who has any problem<br />\r\nMust be informed.<br />\r\n2. We will have lunch and dinner on the 1st day, which will be arranged at Dusai Resort, and a breakfast buffet the next day.<br />\r\n3. No locals can be mistreated.<br />\r\n4. There may be some changes in the tour plan due to any situation or natural disaster, but Of course, the opinion of all the members will be taken and the decision of the admin will be considered final.<br />\r\n5. If the booking is canceled before the cancellation date, the payment will be credited to the adjustable account as adjustable which can be adjusted on any subsequent tour. However, no cash refund in any way. If someone has an emergency, then in case of a cash refund, valid documents have to be submitted.</p>\r\n', '<p>N/A</p>\r\n', ' '),
(4, 'PKG-1002', 'Saint Martin', '3 Nights 2 Days Saint Martin Tour Package', '<p>Saint&nbsp; Island is the most&nbsp;<a href=\"https://nomadparadise.com/places-to-visit-in-bangladesh/\">beautiful&nbsp;place in Bangladesh</a>. When We arrange the Saint Martin tour package every time we have to extend group members because women are very interested to go&nbsp;<a href=\"https://wikitravel.org/en/Saint_Martins_Island\">Saint Martin</a>.&nbsp;</p>\r\n\r\n<h2><strong>The beauty of Saint Martin</strong></h2>\r\n\r\n<p>Saint Martin&#39;s Island is a small island in the northeastern part of the Bay of Bengal, about 9 km south of the tip of the cox&#39;s Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. There is a small adjoining island that is separated at high tide, called&nbsp;<a href=\"https://beautifulbangladesh.gov.bd/cat/island/19\">Chera Dwip</a>.</p>\r\n', '<p>1. Dhaka - Saint Martin - Dhaka Bus Tickets (Non-AC)<br />\r\n2. Teknaf - Saint Martin - Teknaf Ship Tickets.<br />\r\n3. 4 people sharing a room in a 2-night resort (2 people in bed and 2 people in mattress).<br />\r\n4. 5 meals in 2 days (including BBQ)<br />\r\n5. Chera Dwip Travel.<br />\r\n6. Internal transport (vans and trawlers)</p>\r\n\r\n<h2><strong>Places&nbsp;we will visit Saint Martin Tour Package</strong></h2>\r\n\r\n<p>1. Saint Martin&nbsp;</p>\r\n\r\n<p>2. Chera Dwip</p>\r\n', '2 Days Tour', 'Cox’s Bazar, BANGLADESH', 'Night Out Trip', 'Inbound', 23, 'Saint Martin -01', 'Relax Tour', 'images/Saint Martin/cover.jpg', ' ', ' ', ' ', ' ', 7800, '<p>1. Any kind of personal expense.<br />\r\n2. Dinner on the highway when coming and going.<br />\r\n3. food on the ship.<br />\r\n4. Mineral water<br />\r\n5. Costs not mentioned in the package.<br />\r\n7. Breakfast in the afternoon</p>\r\n', '2022-01-27', '<p>Accommodation- standard hotel facilities</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>BBQ Party</p>\r\n\r\n<p>Crew</p>\r\n\r\n<p>Meals- 2 breakfast, 2 lunches, 1 dinner</p>\r\n\r\n<p>Orientation Walk</p>\r\n\r\n<p>Tour Guiding- Services of experienced Fly Far Ladies tour leaders</p>\r\n', '<p>1. Since it is a group tour, you must get along with everyone in the group. Any problem should be reported to the admin.</p>\r\n\r\n<p>2. We will fix the food menu. Taking anything out of it will include personal expenses.</p>\r\n\r\n<p>3. No locals can be mistreated.</p>\r\n\r\n<p>4. The tour plan may change due to any circumstances or natural disasters, but it must take into account the views of all members and the decision of the admin will be final.</p>\r\n\r\n<p>5. Seats will be provided according to the serial of booking in Trip Bus and our other transports. Those who will sit in the front while leaving, will have to sit behind them when the serial is reversed on the way back. In addition, if someone wants to take the front seat due to any physical problem, we have to give a medical report.</p>\r\n\r\n<p>6. You have to take care of your own belongings and carry yourself everywhere. Fly for Ladies authorities will not be liable for theft, loss or damage of any kind.</p>\r\n\r\n<p>7. No requests can be made to change the tour plan.</p>\r\n\r\n<p>8. Do not carry, buy, sell or consume any type of drugs while on tour. No anti-state, immoral or illegal acts can be committed.</p>\r\n\r\n<p>9. If the booking is canceled before the cancellation date, the payment will be added to the adjusted account as adjustable which can be adjusted on any subsequent tour (not cash refundable).</p>\r\n\r\n<p>Booking Money - &nbsp;5,000 BDT (Non-refundable for any reason)<br />\r\n5100 if given for development.</p>\r\n', '', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `JobId` varchar(250) NOT NULL,
  `resume` varchar(500) NOT NULL,
  `created` varchar(250) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `name`, `phone`, `email`, `JobId`, `resume`, `created`) VALUES
(6, 'KIDDY KAYES', '01685370455', 'mrfawbd@gmail.com', 'Job-1000', 'Resume/dummy.pdf', '2022-02-11 20:41:54');

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

--
-- Dumping data for table `stockphoto`
--

INSERT INTO `stockphoto` (`id`, `category`, `title`, `link`, `uploadAt`) VALUES
(1, 'Adventure', 'Sea Adenture', 'images/Adventure/6Rb2NK.jpeg', '2022-02-11 13:53:41'),
(2, 'Mountain', 'Turkey Mountain', 'images/Mountain/74707.jpg', '2022-02-11 14:03:15');

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
-- Indexes for table `participant`
--
ALTER TABLE `participant`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stockphoto`
--
ALTER TABLE `stockphoto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
