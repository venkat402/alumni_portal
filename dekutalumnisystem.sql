-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 01:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dekutalumnisystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isSuper` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `job_title`, `email`, `staffID`, `isSuper`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `department`, `gender`) VALUES
(3, 'admin super', 'COD', 'admin@dkut.ac.ke', '31586372', 0, '$2y$10$s9N6OTzl4HxAZifNoAtlk.0jM/JT9Ygs/N7KAjWMCkryN3CH.iyfe', NULL, '2018-09-17 04:49:57', '2018-09-17 04:49:57', 'WIN_20180731_15_10_03_Pro_1537170597.jpg', 'IT department', 'mail');

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` int(10) UNSIGNED NOT NULL,
  `First_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Middle_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_Number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Work_station` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Year_joined` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year_graduated` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `First_Name`, `Middle_Name`, `Surname`, `Phone_Number`, `Work_station`, `Course`, `Profession`, `Location`, `email`, `Avatar`, `password`, `remember_token`, `created_at`, `updated_at`, `Year_joined`, `Year_graduated`, `gender`) VALUES
(2, 'shadrack', 'Kipkorir', 'cheruyot', '724606690', 'N/A', 'Telecommunication And Information Engineering', 'Telecomms', 'Nairobi', 'kipkorirshadi@gmail.com', 'WIN_20180731_15_10_03_Pro_1537198502.jpg', '$2y$10$K6z0v694C5zf4c/1uxJkQeI1BMt8If.YLJx0MOHQEeFziNY7Qgfo.', NULL, '2018-09-17 12:35:02', '2018-09-17 12:35:02', '2013', '2018', 'male'),
(3, 'Cyber', 'kipkorir', 'Askari', '737045467', 'Hurlinghum', 'Telecommunication And Information Engineering', 'Telecomms', 'Nairobi', 'cyberaskari@gmail.com', 'WIN_20180727_17_02_50_Pro_1539097760.jpg', '$2y$10$WzA13HoHxg3YIhtsbDxpWuLoDbSRxJS0YarN2OWzXbLFZpEI0vaVi', NULL, '2018-10-09 12:09:21', '2018-10-09 12:09:21', '2013', '2018', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `friend_id` int(10) UNSIGNED NOT NULL,
  `chat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `names` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `time_posted` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id`, `friend_id`, `chat`, `created_at`, `updated_at`, `avatar`, `names`, `status`, `time_posted`) VALUES
(2, 2, 1, 'Hi', '2018-09-17 04:41:41', '2018-09-17 04:41:41', 'WIN_20180731_15_10_03_Pro_1536480422.jpg', 'Shadrack Cheruyot', 0, '17/8/,10:41'),
(3, 2, 5, 'hi', '2018-09-17 12:39:30', '2018-09-17 12:39:30', 'WIN_20180731_15_10_03_Pro_1537198502.jpg', 'shadrack cheruyot', 0, '17/8/,18:39'),
(4, 5, 2, 'hi too', '2018-09-17 12:39:53', '2018-09-17 12:39:53', 'WIN_20180731_15_09_59_Pro_1537198702.jpg', 'Shadrack Doe', 0, '17/8/,18:39'),
(5, 5, 2, 'hello', '2018-10-09 12:27:47', '2018-10-09 12:27:47', 'WIN_20180731_15_09_59_Pro_1537198702.jpg', 'Shadrack Doe', 0, '9/9/,18:27'),
(6, 5, 3, 'hi', '2018-10-12 00:25:27', '2018-10-12 00:25:27', 'WIN_20180731_15_09_59_Pro_1537198702.jpg', 'Shadrack Doe', 0, '12/9/,6:25'),
(7, 3, 5, 'hello', '2018-10-12 00:26:14', '2018-10-12 00:26:14', 'WIN_20180727_17_02_50_Pro_1539097760.jpg', 'Cyber Askari', 0, '12/9/,6:26'),
(8, 5, 3, 'hyye', '2018-10-26 07:43:55', '2018-10-26 07:43:55', 'WIN_20180731_15_09_59_Pro_1537198702.jpg', 'Shadrack Doe', 0, '26/9/,13:43'),
(9, 3, 5, 'hello', '2018-10-26 07:44:13', '2018-10-26 07:44:13', 'WIN_20180727_17_02_50_Pro_1539097760.jpg', 'Cyber Askari', 0, '26/9/,13:44'),
(10, 3, 5, 'v', '2018-10-27 01:59:23', '2018-10-27 01:59:23', 'WIN_20180727_17_02_50_Pro_1539097760.jpg', 'Cyber Askari', 0, '27/9/,7:59'),
(11, 5, 3, 'gghh', '2018-10-27 02:03:13', '2018-10-27 02:03:13', 'WIN_20180731_15_09_59_Pro_1537198702.jpg', 'Shadrack Doe', 0, '27/9/,8:3');

-- --------------------------------------------------------

--
-- Table structure for table `communications`
--

CREATE TABLE `communications` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communications`
--

INSERT INTO `communications` (`id`, `name`, `contact`, `message`, `created_at`, `updated_at`) VALUES
(12, 'Cyber', NULL, 'Hi', '2018-10-29 05:23:45', '2018-10-29 05:23:45'),
(13, 'Shadrack', NULL, 'ddd', '2018-10-29 05:23:52', '2018-10-29 05:23:52'),
(14, 'Cyber', NULL, 'hi', '2018-10-29 08:38:30', '2018-10-29 08:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `purpose` varchar(191) DEFAULT NULL,
  `names` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `profession` varchar(191) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `amount`, `user_id`, `purpose`, `names`, `email`, `profession`, `updated_at`, `created_at`) VALUES
(2, 67, 3, 'fees', 'Cyber  kipkorir', 'cyberaskari@gmail.com', 'Telecomms', '2018-11-20 08:41:58', '2018-11-20 08:41:58'),
(3, 800, 3, 'fees', 'Cyber  kipkorir', 'cyberaskari@gmail.com', 'Telecomms', '2018-11-20 08:47:15', '2018-11-20 08:47:15'),
(4, 800, 3, 'fees', 'Cyber  kipkorir', 'cyberaskari@gmail.com', 'Telecomms', '2018-11-20 08:50:29', '2018-11-20 08:50:29'),
(5, 10, 3, 'fees', 'Cyber  kipkorir', 'cyberaskari@gmail.com', 'Telecomms', '2018-11-20 09:37:44', '2018-11-20 09:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `details`, `image`, `eventdate`, `author`, `created_at`, `updated_at`, `location`) VALUES
(2, 'AngularConnect', '<h3>2 days &bull;&nbsp;5 tracks &bull;&nbsp;40+ speakers &bull;&nbsp;1000+ Angular developers</h3>\r\n\r\n<p>Join us for an Angular extravaganza packed with inspiring, practical and entertaining talks. On top of a world-class selection of speakers, there will be quality training workshops, games, great food and drink and loads of opportunities to connect with the Google core Angular team and 1000+ Angular developers.</p>\r\n\r\n<p>It&#39;s all about the community</p>\r\n\r\n<p>In case you didn&#39;t know, AngularConnect is organised by the team behind the Angular London meetup. We love getting together with members of community groups from around the world and this year we&#39;re hosting another community lunch, sponsored by Google Developers, to connect with everyone.</p>', '0_fd_lDD5bjldeqY7N_1537170799.png', '2018/09/20', 'admin', '2018-09-17 04:53:19', '2018-09-17 04:53:19', 'London, UK');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorid` int(11) DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `title`, `location`, `period`, `cover_image`, `description`, `created_at`, `updated_at`, `tag`, `authorid`, `avatar`) VALUES
(1, 'Career Opportunities at KCB Bank Kenya', 'Nairobi', 'sept-dec', '1_U6RBYbEsDkOp2PQBkA1IEA_1536481670.png', '<ul>\r\n	<li>\r\n	<p>Kenya Commercial Bank Limited is registered as a non-operating holding company which started operations as a licensed banking institution with effect from January 1, 2016. The holding company oversees KCB Kenya - incorporated with effect from January 1, 2016 - and all KCB&#39;s regional units in Uganda, Tanzania, Rwanda, Burundi, Ethiopia and South Sudan. It also owns KCB Insurance Agency, KCB Capital, KCB Foundation and all associate companies.</p>\r\n\r\n	<p>Contents</p>\r\n\r\n	<ul>\r\n		<li>Open Jobs\r\n		<ol>\r\n			<li><a href=\"javascript:;\" onclick=\"document.location.hash=\'job78055\';\">Basel II &amp; III Developer</a></li>\r\n			<li><a href=\"javascript:;\" onclick=\"document.location.hash=\'job78056\';\">Manager, Risk Assessments</a></li>\r\n			<li><a href=\"javascript:;\" onclick=\"document.location.hash=\'job78057\';\">Information Architect</a></li>\r\n			<li><a href=\"javascript:;\" onclick=\"document.location.hash=\'job78058\';\">Mobile Channel Support, Digital Financial Services</a></li>\r\n			<li><a href=\"javascript:;\" onclick=\"document.location.hash=\'job78059\';\">Brand Manager, Loyalty Program</a></li>\r\n			<li><a href=\"javascript:;\" onclick=\"document.location.hash=\'job78060\';\">Brand Manager Consumer</a></li>\r\n		</ol>\r\n		</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<h2><a href=\"https://www.myjobmag.co.ke/job/78055/basel-ii-amp-iii-developer-kcb-bank-kenya\" id=\"#job78055\" name=\"job78055\">Basel II &amp; III Developer</a></h2>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<ul>\r\n		<li>Job Type<a href=\"https://www.myjobmag.co.ke/jobs-by-type/full-time\">Full Time</a>&nbsp;&nbsp;</li>\r\n		<li>Qualification<a href=\"https://www.myjobmag.co.ke/jobs-by-education/5\">BA/BSc/HND</a>&nbsp;&nbsp;</li>\r\n		<li>Experience2 years</li>\r\n		<li>Location<a href=\"https://www.myjobmag.co.ke/jobs-location/nairobi\">Nairobi</a></li>\r\n		<li>Job Field<a href=\"https://www.myjobmag.co.ke/jobs-by-field/banking\">Banking</a>&nbsp;&nbsp;&nbsp;<a href=\"https://www.myjobmag.co.ke/jobs-by-field/information-technology\">ICT / Computer</a>&nbsp;&nbsp;</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Job Description</strong></p>\r\n\r\n	<p>Reporting to the Head - Lending Risk, the Basel II &amp; III Developer shall design, develop, implement and maintain Lending Risk MIS. In addition, the holder of this position will be responsible for extraction, processing and maintenance of data for use in reporting, credit models development and validation</p>\r\n\r\n	<p>Key Responsibilities:</p>\r\n\r\n	<ul>\r\n		<li>Design Develop, implement and support Lending Risk MIS and data infrastructure to support Credit Risk Management within the bank.</li>\r\n		<li>Analysis, Design and Development of robust web applications to serve varying needs.</li>\r\n		<li>Analysis of Lending Risk data requirements and available sources of data.</li>\r\n		<li>Development of high quality and efficient ETL processes to avail data to MIS.</li>\r\n		<li>Design, develop and maintain lending risk Data Mart.</li>\r\n		<li>Periodically review lending risk data infrastructure for accuracy, validity, relevance and performance.</li>\r\n		<li>Work closely with a team of Quantitative Analysts to support their analytical reporting and modeling; assisting in data retrieval, manipulation and presentation.</li>\r\n		<li>Train and support internal customers in their day to day use of Risk Systems as well as data infrastructure.</li>\r\n		<li>Provide technical expertise and recommendations in assessing new and existing software projects and initiatives of the department.</li>\r\n		<li>Support the Lending Risk team in portfolio analysis and reporting</li>\r\n	</ul>\r\n\r\n	<p>The Person:</p>\r\n\r\n	<ul>\r\n		<li>Bachelor&rsquo;s degree in Computer Science, IT, Applied Statistics, Mathematics or a related field from a recognized university is a requirement.</li>\r\n		<li>Masters&rsquo; degree in a relevant discipline shall be an advantage</li>\r\n		<li>Minimum of 2years&rsquo; experience in Software Applications development using popular development environments; MS .NET, Java etc.</li>\r\n		<li>Proven experience in the development of robust Web Applications.</li>\r\n		<li>2 years &lsquo;experience with Relational Database Management Systems (preferably MSSQL and Oracle) is a requirement. Proficiency in the SQL Language required.</li>\r\n		<li>Experience in the design, development and management of large datasets.</li>\r\n		<li>Good knowledge of Data Integration Tools (Microsoft SSIS preferred).</li>\r\n		<li>Experience in the use of statistical tools, including SPSS and SAS, will be an added advantage.</li>\r\n		<li>Strong analytical and problem solving skills.</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<h2><a href=\"https://www.myjobmag.co.ke/job/78056/manager-risk-assessments-kcb-bank-kenya\" id=\"#job78056\" name=\"job78056\">Manager, Risk Assessments</a></h2>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<ul>\r\n		<li>Job Type<a href=\"https://www.myjobmag.co.ke/jobs-by-type/full-time\">Full Time</a>&nbsp;&nbsp;</li>\r\n		<li>Qualification<a href=\"https://www.myjobmag.co.ke/jobs-by-education/5\">BA/BSc/HND</a>&nbsp;&nbsp;</li>\r\n		<li>Experience3 years</li>\r\n		<li>Location<a href=\"https://www.myjobmag.co.ke/jobs-location/nairobi\">Nairobi</a></li>\r\n		<li>Job Field<a href=\"https://www.myjobmag.co.ke/jobs-by-field/banking\">Banking</a>&nbsp;&nbsp;&nbsp;<a href=\"https://www.myjobmag.co.ke/jobs-by-field/information-technology\">ICT / Computer</a>&nbsp;&nbsp;</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Job Description</strong></p>\r\n\r\n	<p><strong>The Position:</strong></p>\r\n\r\n	<p>Reporting to the Head, Information Risk, the position is responsible for assuring oversight on IT related risks including risk assessments, ensure that subsidiaries meet KCB Group standards and anticipate potential threats and vulnerabilities to enable the bank take advantage of emerging technologies</p>\r\n\r\n	<p><strong>Key Responsibilities:</strong></p>\r\n\r\n	<ul>\r\n		<li>Conduct periodic IT risk assessment to ensure all risks have been identified have been, brought to the attention of management and appropriate control measures implemented to mitigate risk;</li>\r\n		<li>Provide information risk consultation and guidance during system, application development and e-product development to assure that security concerns are fully addressed in the process;</li>\r\n		<li>Performs information control reviews to include system development standards, operating procedures, system security, programming controls, communication controls, backup and disaster recovery, and system maintenance.</li>\r\n		<li>Prepare and submit information Risk reports for both consumption by Board of Directors and Senior Management</li>\r\n		<li>Conduct risk awareness through training</li>\r\n		<li>Review and accredit newly developed systems before deployment in live environment;</li>\r\n		<li>Liaise with Risk Heads in subsidiaries with a view of ensuring that Group standards are met</li>\r\n		<li>Proactively anticipate potential threats and vulnerabilities and provide guidance in coordination with IT department on effective responses or control measures within subsidiaries</li>\r\n	</ul>\r\n\r\n	<p><strong>The Person:</strong></p>\r\n\r\n	<ul>\r\n		<li>Bachelors&rsquo; Degree in Business or related field. A Master&rsquo;s degree in a relevant discipline will be an added advantage.</li>\r\n		<li>Professional Qualifications in Risk Management is required.</li>\r\n		<li>Minimum 3 years&rsquo; Operational Risk experience.</li>\r\n		<li>Minimum 3 years IT experience in infrastructure management/channels management/systems development, network admin/Office systems.</li>\r\n		<li>Experience in IT Security.</li>\r\n		<li>Demonstrate sound judgment, experience in decision making for complex problems</li>\r\n		<li>Ability to operate in a crisis situation, flexible and creative in critical, high-pressure situations</li>\r\n		<li>Proactive and positive attitude, highly motivated and self-directed; ability to work in a team environment or independently</li>\r\n		<li>Understanding of information security and risk management principles</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<h2><a href=\"https://www.myjobmag.co.ke/job/78057/information-architect-kcb-bank-kenya\" id=\"#job78057\" name=\"job78057\">Information Architect</a></h2>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<ul>\r\n		<li>Job Type<a href=\"https://www.myjobmag.co.ke/jobs-by-type/full-time\">Full Time</a>&nbsp;&nbsp;</li>\r\n		<li>Qualification<a href=\"https://www.myjobmag.co.ke/jobs-by-education/5\">BA/BSc/HND</a>&nbsp;&nbsp;</li>\r\n		<li>Experience5 years</li>\r\n		<li>Location<a href=\"https://www.myjobmag.co.ke/jobs-location/nairobi\">Nairobi</a></li>\r\n		<li>Job Field<a href=\"https://www.myjobmag.co.ke/jobs-by-field/banking\">Banking</a>&nbsp;&nbsp;&nbsp;<a href=\"https://www.myjobmag.co.ke/jobs-by-field/information-technology\">ICT / Computer</a>&nbsp;&nbsp;</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Job Description</strong></p>\r\n\r\n	<p><strong>The Position:</strong></p>\r\n\r\n	<p>Reporting to the Senior Manager, Enterprise Architecture, the incumbent is responsible for developing IT information models (message protocols, defined data structures, schemas, information types and workflows) and relating documentation for IT Systems in use by or to be procured by&nbsp;the Bank in line with Bank policy, Business Processes, Architecture and Best Practice, standards and methods</p>\r\n\r\n	<p><strong>Key Responsibilities:</strong></p>\r\n\r\n	<ul>\r\n		<li>Coordinate information flow through the enterprise, eliciting business requirements and generation / development of relevant business requirements documentation.</li>\r\n		<li>Translate user needs into functional requirements. Identify user requirements by researching and analysing user needs, preferences, objectives, and working methods; studying how users consume content, including data categorization and labelling, meeting with focus groups.</li>\r\n		<li>Investigate the requirements of the customers for the content and structure of information deliverables.</li>\r\n		<li>Perform a content inventory showing all content elements, relationships and dependencies.</li>\r\n		<li>Validate information delivery by developing and completing usability test plans; evaluating traffic patterns and studying user feedback.</li>\r\n		<li>Communicate with clients to understand their business requirements. Ensure documented content meets audience and organization needs as well as analysing users experience and their problems</li>\r\n		<li>Develop practical plans in order to support organizational development. Identify content that helps support user goals and business goals.</li>\r\n		<li>Keep up-to-date and knowledgeable about industry trends and emerging technologies associated with Enterprise Information Architecture.</li>\r\n		<li>Develop and build consensus for a strategic vision and roadmap for the organization to identify and prioritize information architecture projects and investments, consistent with the business strategies, which includes information governance policies and processes for the management and use of information.</li>\r\n		<li>Lead the identification and analysis of the Bank&rsquo;s business drivers to derive Enterprise business, information, technical and solution architecture requirements.</li>\r\n		<li>Assess the current IT environment to detect critical deficiencies and recommend solutions for improvement in line with the Bank&rsquo;s strategy and delivery priority of the IT programs.</li>\r\n		<li>Lead the development of an implementation plan for the Enterprise Architecture models based on business requirements and Information Technology strategies.</li>\r\n		<li>Market the Enterprise Architecture function, process and results, in particular to the business side of the Bank.</li>\r\n		<li>Establish standards, guidelines, checklists and processes for architectural development and compliance.</li>\r\n		<li>Build and maintain productive relations with Sector Heads/Relationship teams/Product houses/Finance/ stakeholders to drive delivery of business solutions and revenue growth for the specific sectors or portfolio.</li>\r\n		<li>Ensure timely preparation of relevant reports, financial and performance metrics&rsquo; and cascade to the team in a timely manner or as per SLA.</li>\r\n		<li>Ensure compliance to the Bank&rsquo;s policies, procedures and regulatory requirements.</li>\r\n	</ul>\r\n\r\n	<p><strong>The Person:</strong></p>\r\n\r\n	<p>For the above position, the successful applicant should have the following minimum requirements:</p>\r\n\r\n	<ul>\r\n		<li>A Bachelor&rsquo;s Degree in Computer Science, Information Technology or related field from a reputable and CHE recognized institution.</li>\r\n		<li>Professional IT certifications in the following: ITIL Foundation; Prince2 Practitioner; Business Analysis e.g. CBAP</li>\r\n		<li>Other relevant Technical Certifications e.g. SQL, data modelling, Software Development</li>\r\n		<li>Minimum 5 years&rsquo; experience in&nbsp;a similar&nbsp;business analysis related role</li>\r\n		<li>Ability to perform impact analysis of new and proposed architectures in relation to the current landscape and available technologies utilized in the IT environment.</li>\r\n		<li>Ability to conceptualize, formulate, and present complex business demands / requirements via comprehensible models and templates.</li>\r\n		<li>Hands on experience with project methodologies i.e. SDLC processes &amp; agile based development methodology.</li>\r\n		<li>Knowledge of SOA approach and its implementation, web-based systems architecture, enterprise application integration as well as experience managing expectations and priorities.</li>\r\n		<li>Knowledge of data representation in JSON, XML, XSLT mapping and usage of SOAP/HTTP, REST and JMS/MQ protocols.</li>\r\n		<li>Working experience in UML.</li>\r\n		<li>Good working experience with all the tiers of architecture - infrastructure, database, integration, application, UI, network and security.</li>\r\n		<li>Must have a strong and proven software development background.</li>\r\n		<li>Sound knowledge of various messaging architectures.</li>\r\n		<li>Participation in key/large projects as an architect.</li>\r\n		<li>Excellent verbal and written communication; self-motivated, dynamic, team player, result driven, relationship builder, independent worker with excellent interpersonal relation building skills.</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<h2><a href=\"https://www.myjobmag.co.ke/job/78058/mobile-channel-support-digital-financial-services-kcb-bank-kenya\" id=\"#job78058\" name=\"job78058\">Mobile Channel Support, Digital Financial Services</a></h2>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<ul>\r\n		<li>Job Type<a href=\"https://www.myjobmag.co.ke/jobs-by-type/full-time\">Full Time</a>&nbsp;&nbsp;</li>\r\n		<li>Qualification<a href=\"https://www.myjobmag.co.ke/jobs-by-education/5\">BA/BSc/HND</a>&nbsp;&nbsp;</li>\r\n		<li>Experience1 - 2 years</li>\r\n		<li>Location<a href=\"https://www.myjobmag.co.ke/jobs-location/nairobi\">Nairobi</a></li>\r\n		<li>Job Field<a href=\"https://www.myjobmag.co.ke/jobs-by-field/banking\">Banking</a>&nbsp;&nbsp;&nbsp;<a href=\"https://www.myjobmag.co.ke/jobs-by-field/information-technology\">ICT / Computer</a>&nbsp;&nbsp;</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Job Description</strong></p>\r\n\r\n	<p><strong>The Position:</strong></p>\r\n\r\n	<p>Reporting to the Senior Manager Digital Systems Support, the systems channel support person shall ensure smooth running of all Digital Platform services and interacting channels and third-party systems. The holder will provide both onsite and off the site technical support for the live system components as well constantly monitoring the system&rsquo;s health status. The holder must demonstrate a strong understanding of and high regard for mobile money systems and other delivery channels for both bank corporate and retail customers including online digital channels, agency banking services as well as mobile apps. The holder must demonstrate proficiency in issue tracking and resolution skills as well strong understanding of escalation matrices. The holder will also be required to easily learn all the business configuration procedures and processes for the bank&rsquo;s digital platform product. The position requires someone with experience and expertise in mobile and internet based financial systems technologies as well as APP, SMS and USSD connectivity. The person should have a good grasp of emerging channel technologies and applications and convergence of mobile and internet channels.</p>\r\n\r\n	<p><strong>Key Responsibilities:</strong></p>\r\n\r\n	<ul>\r\n		<li>Business configurations of the Digital Platform and S&amp;L system and formulation of support manuals;</li>\r\n		<li>Develop subject matter expert knowledge of Mobile, eCommerce and other payment banking technologies;</li>\r\n		<li>Develop real time online reports and monitoring tools to be able to track internet / mobile banking and internet acquiring system uptime and performance;</li>\r\n		<li>Maintain up to date system and user documentation including configuration documents;</li>\r\n		<li>Following established change management practices by ensuring that they are well tested and are rolled out in a manner that adheres to established business processes;</li>\r\n		<li>Keep track of user issues and oversee their prompt resolution;</li>\r\n		<li>Ensure compliance of SLAs by system vendors;</li>\r\n		<li>Provide&nbsp;product development support by participating in testing and piloting of new functionality where required;</li>\r\n		<li>Identify &amp;&nbsp;implement local changes for process improvement, in liaison with internal stakeholders from other departments;</li>\r\n		<li>Participate and provide input to the&nbsp;product development&nbsp;roadmap to ensure timely delivery of relevant products to KCB Customers;</li>\r\n		<li>Provide 1st level Support to Customer experience, Operations, Finance and other internal functional units;</li>\r\n		<li>Continual Service Improvement by recommending and implementing upgrades or changes to the mobile &amp; internet solutions for increased performance, security or business benefits;</li>\r\n		<li>Work with the external and internal technical teams to ensure efficient resolution of all system issues;</li>\r\n		<li>Liaise with all stakeholders to ensure new functionality, processes and systems are fully understood;</li>\r\n		<li>Manage system capacity and anticipate user demands on resources;</li>\r\n		<li>Manage all the security elements related to the system locally (certificates, interfaces, Access to systems);</li>\r\n		<li>Provide Risk Management for all Operational requests as per the IS Audit/Risk Recommendations;</li>\r\n		<li>Provide 1st level Support to assigned Business&nbsp;Applications</li>\r\n		<li>Work with the third-party development teams to ensure that the requirements as documented are clearly understood and incorporate all the operational requirements;</li>\r\n		<li>Proactively research &amp; investigate functionalities suitable for the local market and discuss with key stakeholders to obtain buy-in;</li>\r\n		<li>Transfer system knowledge to internal Customers on new features and support processes;</li>\r\n		<li>Provide weekly system performance reports to&nbsp;management.</li>\r\n		<li>Drive attainment of efficiencies through automation of processes/activities.</li>\r\n		<li>Following established change management practices by ensuring that they are well tested and are rolled out in a manner that adheres to established business processes.</li>\r\n		<li>Deploy and support of BCM strategies for&nbsp;Site Recovery Management</li>\r\n	</ul>\r\n\r\n	<p><strong>The Person:</strong></p>\r\n\r\n	<ul>\r\n		<li>A University Degree in an Information Technology related discipline, from a reputable and CHE recognized institution.</li>\r\n		<li>At least 2-years&rsquo; working experience is channels support or business support operations role</li>\r\n		<li>At least 1-year&rsquo; working experience supporting a mobile money system or banking systems</li>\r\n		<li>Professional IT qualifications in one or more of the following: Networks, Databases, Systems Support, Security would be an added advantage</li>\r\n		<li>Knowledge of Database management systems, solutions and administration would be an added advantage</li>\r\n		<li>CCNA, ITIL certification would be an added advantage</li>\r\n		<li>Knowledge of Mobile Money Systems would be an added advantage</li>\r\n		<li>A good grasp of emerging channel technologies and applications and convergence of mobile and internet channels</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<h2><a href=\"https://www.myjobmag.co.ke/job/78059/brand-manager-loyalty-program-kcb-bank-kenya\" id=\"#job78059\" name=\"job78059\">Brand Manager, Loyalty Program</a></h2>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<ul>\r\n		<li>Job Type<a href=\"https://www.myjobmag.co.ke/jobs-by-type/full-time\">Full Time</a>&nbsp;&nbsp;</li>\r\n		<li>Qualification<a href=\"https://www.myjobmag.co.ke/jobs-by-education/5\">BA/BSc/HND</a>&nbsp;&nbsp;&nbsp;<a href=\"https://www.myjobmag.co.ke/jobs-by-education/6\">MBA/MSc/MA</a>&nbsp;&nbsp;</li>\r\n		<li>Experience3 - 5 years</li>\r\n		<li>Location<a href=\"https://www.myjobmag.co.ke/jobs-location/nairobi\">Nairobi</a></li>\r\n		<li>Job Field<a href=\"https://www.myjobmag.co.ke/jobs-by-field/banking\">Banking</a>&nbsp;&nbsp;&nbsp;<a href=\"https://www.myjobmag.co.ke/jobs-by-field/sales-marketing\">Sales / Marketing</a>&nbsp;&nbsp;</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Job Description</strong></p>\r\n\r\n	<p><strong>The Position:</strong></p>\r\n\r\n	<p>The purpose&nbsp;of this role is&nbsp;to manage the Enterprise wide loyalty program for customers across the Bank&rsquo;s products and services with a focus to&nbsp;attract new customers, increase products penetration, customer engagement and retention.</p>\r\n\r\n	<p><strong>Key Responsibilities:</strong></p>\r\n\r\n	<ul>\r\n		<li>Develop and execute the marketing plan for the Simba Loyalty Program</li>\r\n		<li>Continuously develop the program design, customer journey, technology components, services and processes required to deliver strong consumer propositions.</li>\r\n		<li>Define, implement and manage multi-channel loyalty scheme rewards and communications that drive customer engagement and sales revenue/margin.</li>\r\n		<li>In liaison with internal stakeholders and partners, continuously review the business case, ROI forecasts and the key metrics to measure scheme success.</li>\r\n		<li>Work with business development to identify partner opportunities, as required, to fill solution gaps and redemption programs opportunities.</li>\r\n		<li>Manage 3rd&nbsp;party partnerships for blue &amp; white label programs in order to deliver revenue and customer number targets.</li>\r\n		<li>Ensure customer facing staff and all staff across all areas of business have access to appropriate training and information to be able to efficiently resolve all loyalty scheme customer queries.</li>\r\n		<li>Deliver analysis and reports to demonstrate the effectiveness of loyalty communications including recommendations for future improvements and testing.</li>\r\n		<li>Test and learn &ndash; put in place robust testing plans to continually optimize the program and demonstrate ROI.</li>\r\n		<li>Manage the direct and cross functional teams working with the program to coach and inspire exceptional delivery</li>\r\n	</ul>\r\n\r\n	<p><strong>The Person:</strong></p>\r\n\r\n	<p>For the above position, the successful applicant should have the following:</p>\r\n\r\n	<ul>\r\n		<li>A Bachelor of Commerce degree, with specialization in Marketing or any other related field is required</li>\r\n		<li>Professional qualifications in CIM will be an added advantage</li>\r\n		<li>A Master&rsquo;s degree in Marketing will be an added advantage</li>\r\n		<li>At least&nbsp;five (5)&nbsp;years&rsquo; experience in a relevant marketing role</li>\r\n		<li>At least&nbsp;five (3)&nbsp;years&rsquo; experience&nbsp;in Brand Management</li>\r\n		<li>Experience in management of a loyalty program</li>\r\n		<li>Experience in product development</li>\r\n		<li>Excellent interpersonal, and negotiation skills with the ability to network, generate new business and develop strong business relations.</li>\r\n		<li>Team player with demonstrated work ethics; consistently demonstrates a high level of professionalism.</li>\r\n		<li>Effective prioritization skills to meet a complex set of business demands and demonstrate delivery against multiple objectives.</li>\r\n		<li>Assertive, self-motivated with desire to succeed in a fast-paced environment.</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<h2><a href=\"https://www.myjobmag.co.ke/job/78060/brand-manager-consumer-kcb-bank-kenya\" id=\"#job78060\" name=\"job78060\">Brand Manager Consumer</a></h2>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<ul>\r\n		<li>Job Type<a href=\"https://www.myjobmag.co.ke/jobs-by-type/full-time\">Full Time</a>&nbsp;&nbsp;</li>\r\n		<li>Qualification<a href=\"https://www.myjobmag.co.ke/jobs-by-education/5\">BA/BSc/HND</a>&nbsp;&nbsp;&nbsp;<a href=\"https://www.myjobmag.co.ke/jobs-by-education/6\">MBA/MSc/MA</a>&nbsp;&nbsp;</li>\r\n		<li>Experience3 - 5 years</li>\r\n		<li>Location<a href=\"https://www.myjobmag.co.ke/jobs-location/nairobi\">Nairobi</a></li>\r\n		<li>Job Field<a href=\"https://www.myjobmag.co.ke/jobs-by-field/sales-marketing\">Sales / Marketing</a>&nbsp;&nbsp;</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>The Position:</strong></p>\r\n\r\n	<p>Develop and execute strategic marketing and activity plans that drive the business objectives of customer numbers, revenue and product penetration of the Consumer Banking portfolio comprising Personal Banking (Cub account), Mobile Banking, KCB Insurance Agency &amp; KCB Capital.</p>\r\n\r\n	<p><strong>Key Responsibilities:</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Planning</strong>&nbsp;- Development and execution of marketing plan for the assigned products and/or business units.</li>\r\n		<li><strong>BU Engagement</strong>&nbsp;- Work closely with the unit heads, product development team and sales teams to achieve the business objectives. Participate in projects driven by the respective business units supported.</li>\r\n		<li><strong>Campaigns/Promotions</strong>&nbsp;- The key components of this item are:\r\n		<ul>\r\n			<li>Develop briefs for campaigns and promotional projects in line with the business and brand objectives.</li>\r\n			<li>Work with partner agencies and suppliers to ensure timely execution of promotional projects and campaigns with the aim of achieving the business and brand objectives.</li>\r\n			<li>Implement an internal marketing plan</li>\r\n			<li>Regular performance tracking and compilation of a report on each activity which is circulated to the respective stakeholders.</li>\r\n			<li>Close out all campaigns/promotions with a duly signed off report.</li>\r\n		</ul>\r\n		</li>\r\n		<li><strong>Project management</strong>&nbsp;- Coordinate partner agencies and suppliers to execute product activations for the products effectively within set timelines.</li>\r\n		<li><strong>Budget management</strong>&nbsp;&ndash; Monitor assigned account and reconcile the same on a monthly basis with Finance. Track all Local Purchase Orders (LPO&rsquo;s) and payments to ensure timely supplier payment and spend within plan.</li>\r\n		<li><strong>Market Intelligence</strong>&nbsp;&ndash; The key components of this item are:\r\n		<ul>\r\n			<li>Utilize research reports such as Brand Tracker, Usage and Attitude surveys and product specific surveys to inform and develop marketing plans.</li>\r\n			<li>Track and analyze assigned product performance through sales numbers and value, monthly Share of Voice (SOV) and monthly competitor advertising and industry trends, and utilize to prepare monthly reports with recommendations to the line manager.</li>\r\n		</ul>\r\n		</li>\r\n		<li><strong>Coach and motivate the team</strong>&nbsp;- Ensure they are set up with all the necessary tools and have adequate knowledge to drive and deliver on business objectives</li>\r\n		<li><strong>Sales team linkage</strong>&nbsp;- Work closely with regional sales teams and branches to ensure sales support at marketing activations and events as well as provide sales teams with any required support during sales driven activities.</li>\r\n		<li><strong>Procurement and Merchandise Management</strong>&nbsp;- Liaise with Procurement to ensure merchandise ordered is as per correct specification and meets brand guidelines. Liaise with Procurement to ensure supplier sourcing is done in accordance to budget and business needs while maximizing savings through effective negotiations with service providers.</li>\r\n	</ul>\r\n\r\n	<p><strong>The Person:</strong></p>\r\n\r\n	<p>For the above position, the successful applicant should have the following:</p>\r\n\r\n	<ul>\r\n		<li>A Bachelor of Commerce degree, with specialization in Marketing or any other related field is required</li>\r\n		<li>Professional qualifications in CIM will be an added advantage</li>\r\n		<li>A Master&rsquo;s degree in Marketing will be an added advantage</li>\r\n		<li>At least five (5) years&rsquo; experience in a relevant marketing role</li>\r\n		<li>At least five (3) years&rsquo; experience in brand management</li>\r\n		<li>Excellent interpersonal, and negotiation skills with the ability to network, generate new business and develop strong business relations.</li>\r\n		<li>Team player with demonstrated work ethics; consistently demonstrates a high level of professionalism.</li>\r\n		<li>Effective prioritization skills to meet a complex set of business demands and demonstrate delivery against multiple objectives.</li>\r\n		<li>Assertive, self-motivated with desire to succeed in a fast-paced environment.</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2018-09-09 05:27:50', '2018-09-09 05:27:50', 'Internship', 1, 'WIN_20180727_17_02_49_Pro_1536480277.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `location`, `coverImage`, `description`, `created_at`, `updated_at`, `avatar`, `author_id`) VALUES
(1, 'Angular 6 front end developer', 'Nairobi', 'default.jpg', '<p>ehjhrjehfjerhfbkjehf</p>', '2018-09-09 05:11:10', '2018-09-09 05:11:10', 'WIN_20180727_17_02_49_Pro_1536480277.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_23_142719_create_students_table', 1),
(4, '2018_08_23_142912_create_alumni_table', 1),
(5, '2018_08_23_145031_add_gender_to_students_table', 1),
(6, '2018_08_24_074030_create_admins_table', 1),
(7, '2018_08_26_180527_create_events_table', 1),
(8, '2018_08_27_103859_create_chats_table', 1),
(9, '2018_08_31_114929_create_messages_table', 1),
(10, '2018_09_01_080527_add_avatar_name_to_chats_table', 1),
(11, '2018_09_02_100152_create_jobs_table', 1),
(12, '2018_09_02_101749_create_internships_table', 1),
(13, '2018_09_02_103559_add_author_id_to_jobs_table', 1),
(14, '2018_09_02_170053_add_avatar_and_department_to_admins_table', 1),
(15, '2018_09_03_060538_add_phonenumber_column_to_admins_table', 1),
(16, '2018_09_03_074631_add_is_blocked_to_students_table', 1),
(17, '2018_09_03_083629_create_notices_table', 1),
(18, '2018_09_03_093331_add_user_id_to_notices_table', 1),
(19, '2018_09_03_111924_add_location_to_events_table', 1),
(20, '2018_09_05_081947_create_qustions_table', 1),
(21, '2018_09_06_063603_add_status_to_chats_table', 1),
(22, '2018_09_06_070022_add_tag_to_internships_table', 1),
(23, '2018_09_07_055901_create_testimonials_table', 1),
(24, '2018_09_08_093340_add_gender_to_admins_table', 1),
(25, '2018_09_09_061714_add_year_joined_to_alumnis_table', 1),
(26, '2018_10_12_024120_create_table_communcations', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `cover_image`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'The Annual Endowment Fund Golf Tournament', '<p>nmmn</p>', 'default.jpg', '2018-09-09 05:38:24', '2018-09-09 05:38:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qustions`
--

CREATE TABLE `qustions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `First_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RegNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year_joined` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `County` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isBlocked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `First_name`, `Middle_name`, `Surname`, `Course`, `RegNo`, `Phone`, `DOB`, `Year_joined`, `County`, `Avatar`, `password`, `email`, `remember_token`, `created_at`, `updated_at`, `gender`, `isBlocked`) VALUES
(5, 'Shadrack', 'nigger', 'Doe', 'Telecommunication And Information Engineering', 'E020-01-0642/2013', '724606690', '1998/06/17', '2013', 'Kenya', 'WIN_20180731_15_09_59_Pro_1537198702.jpg', '$2y$10$3m6t.fGyLhfxxXvv8rHddeqGQj3/OPddURtirtRg.AnYfKwCufj1W', 'shadykipkorir@gmail.com', NULL, '2018-09-17 12:38:22', '2018-09-17 12:38:22', 'male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `names` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `names`, `course`, `testimonial`, `created_at`, `updated_at`) VALUES
(2, 'Cyber  kipkorir', 'Telecommunication And Information Engineering', '<p>Am so proud to be dedan kimathi old boy,</p>\r\n\r\n<p>&nbsp; To engage alumni, friends and students in ways that benefit its members and Dedan Kimathi University of Technology through opportunities that stimulate a lifetime of interest, loyalty and support.</p>', '2018-10-29 09:17:23', '2018-10-29 09:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_staffid_unique` (`staffID`);

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communications`
--
ALTER TABLE `communications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `qustions`
--
ALTER TABLE `qustions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_regno_unique` (`RegNo`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `communications`
--
ALTER TABLE `communications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qustions`
--
ALTER TABLE `qustions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
