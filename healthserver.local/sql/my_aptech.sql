-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2018 at 12:40 PM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_aptech`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('06c2arcqovodcvpinf3l9a07no85o074', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('0crbo09gqr1tl9efte664c7iqelao409', '127.0.0.1', 1535929610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393631303b),
('0fp3nuvdvonten3b9scrvrurf0iu4d48', '192.168.0.100', 1538495708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730383b),
('0mvmk8e689vp59qf25v5hpccnjnntfg1', '192.168.0.100', 1538495708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730383b),
('0va6akte2tshkuhu62633ch494ip83vr', '::1', 1538166918, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383136363833333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353335343831303730223b54424f53544b7c733a33323a224e59656e4d6768466f41477942776b586c635444385375364837614f56345132223b),
('128d6022lqnaunfdhk32tdr6tgdohma7', '127.0.0.1', 1539002712, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393030323731323b),
('21mnshibm320k4f15ksh5e1ejiqsfr9d', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('3146us5evkns7r7tk1m1npps52lhj342', '127.0.0.1', 1535500325, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353530303331333b6964656e746974797c733a31353a226d6172696f4061646d696e2e636f6d223b757365726e616d657c733a353a226d6172696f223b656d61696c7c733a31353a226d6172696f4061646d696e2e636f6d223b757365725f69647c733a313a2232223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353335343939373032223b54424f53544b7c733a33323a2236434b673137665a6a76346333793869554f49326d414e58746c654a4252446f223b),
('3rkaghvn4gjgbbcehp7217eusp0qp8j4', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('3vpsnrl7qoo7l2o7ct5jsijgd63rajiu', '127.0.0.1', 1535929690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393638393b),
('48bolknuj6oqaehbdi4784ap8gl9382j', '192.168.0.100', 1538495708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730383b),
('4cl1a7s26ss6ite1h6eslaevio93saku', '::1', 1533820550, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533333832303534393b),
('4pinjrp74lcb10bf69cvf97bhikpiag8', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('588tna2fc39ud7n1g8p6rbujj6uap42l', '127.0.0.1', 1538481928, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383438313931323b),
('5nrrb0087eokbf3runr82qqa4qj5f1ke', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('64jjc6mvqjv7ill39gjsimjq2te8t0um', '127.0.0.1', 1535929584, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393538323b),
('6nkj8r6h749dtmatujm31lk3pq44t9a9', '127.0.0.1', 1535581424, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353538313330333b6964656e746974797c733a31353a226d6172696f4061646d696e2e636f6d223b757365726e616d657c733a353a226d6172696f223b656d61696c7c733a31353a226d6172696f4061646d696e2e636f6d223b757365725f69647c733a313a2232223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353335343939393736223b54424f53544b7c733a33323a224a6171487653656a6c5233625a317254576635756836797759676451344c4b70223b),
('801taui1sialqu4b7fvmn48aj400irro', '127.0.0.1', 1535929624, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393631303b),
('87d2646chjo961jialr6v27duir7dokv', '127.0.0.1', 1535929566, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393536363b),
('8dj3oq2mm7342iunquvncgmvjnii9luo', '127.0.0.1', 1535582890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353538323837343b6964656e746974797c733a31353a226d6172696f4061646d696e2e636f6d223b757365726e616d657c733a353a226d6172696f223b656d61696c7c733a31353a226d6172696f4061646d696e2e636f6d223b757365725f69647c733a313a2232223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353335353830383937223b54424f53544b7c733a33323a22724d656a4e43445654666d7942486871645157617039413377746f4635476259223b),
('8ftcr21i70ujulnaqp96f6ffg2p944me', '127.0.0.1', 1538511904, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383531313930343b),
('9m5mn5fontkrppodd288ab9f0n9m5ulh', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('9r1q94tathrsdplpe3lmuitef3jchm6k', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('9thf6ggtveluajfbg468q734d3bvktlj', '127.0.0.1', 1535492560, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353439323239333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353333373537383639223b54424f53544b7c733a33323a225570374a7644315066383945475a7177644b54735649467a4133514f756b526a223b),
('as8mj3k3sbu9v0nmi3l753klkpa78deg', '127.0.0.1', 1535929688, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393635343b),
('b7krlqltokltdcknhootggi4c266ufl1', '127.0.0.1', 1538332215, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383333323230393b),
('b9d85kmd5a7ssq93pv9hhha8ngd8e5k0', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('bb4emlmear3g6s9dq6i17gslop0nsnrf', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('eg67ucgkbug18psnep9mgbn0i1njbmsh', '::1', 1535499719, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353439393638353b6964656e746974797c733a31353a226d6172696f4061646d696e2e636f6d223b757365726e616d657c733a353a226d6172696f223b656d61696c7c733a31353a226d6172696f4061646d696e2e636f6d223b757365725f69647c733a313a2232223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353333373536393035223b54424f53544b7c733a33323a22567877355373754f55427657345051416c6746317a326f666e64477945596252223b),
('en9d1r616u4q7sigj5l07bt4hpm38383', '127.0.0.1', 1538480359, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383438303232383b),
('eunt4ls83lmeoim0ep7ulpn8pd51ob53', '192.168.0.100', 1538495708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730383b),
('f51tqi9k6lr7et4l2td2ph80m49ev5ao', '127.0.0.1', 1538572969, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383537323936393b6d6573736167657c733a33303a223c703e4c6f67676564204f7574205375636365737366756c6c793c2f703e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('fkgmqs1kklm615v0404r4ib511hpj94j', '192.168.0.100', 1538495706, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730363b),
('fq2f3e34e7upl6g64ooefu2am6fnvk3l', '127.0.0.1', 1538511615, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383531313539393b),
('g2oh9nqnbk2pomstvbt3rbdpc2k7jr9d', '127.0.0.1', 1539007499, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393030373332323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353338353730393635223b54424f53544b7c733a33323a22797333677769357a45396a4f64724937303657313242755534616c474a655370223b),
('gfvg494m2i9kd26ek9rk4i7m17ulcgh8', '127.0.0.1', 1538504171, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383530343137313b),
('grf86ggkh9n3m8g2r7jitsl1qof8u8s9', '127.0.0.1', 1535929689, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393638393b),
('h4bts08q3a0dab9dbc0thejn50qbqle8', '127.0.0.1', 1535929491, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393439313b),
('ho4ol8f228fm6008q98umhcebh9556ro', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('i0p6ba8tiqc5qep9qf8g38o2a6c14u05', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('i1dafv9pntooof3i18f6hjstj3oooeqt', '127.0.0.1', 1535929588, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393538353b),
('iskjcrfrb0f3ouoropkvnd77t5bob9gv', '127.0.0.1', 1535929582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393537323b),
('itflvejmmu7dfdllhtaaai30uqkl37pf', '127.0.0.1', 1539002697, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393030323639373b),
('j6sq1st4u7te9a59d4s5juhd4gg3g187', '127.0.0.1', 1540294828, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303239343635323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353339303030343937223b54424f53544b7c733a33323a226e7a746d4154693363324d713936553464677049466f627279654568356a6c76223b),
('lmqlm195p2tnplm6bb4avb17pi7mfr0b', '127.0.0.1', 1538512500, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383531323530303b),
('lnk8a30shcqmo8mpe4aa93lrmn0fhbjr', '127.0.0.1', 1538504787, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383530343735383b6d6573736167657c733a33393a223c703e4e6f207265636f7264206f66207468617420656d61696c20616464726573732e3c2f703e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('lpeemvinojrsqjbafdeu1gqafea965l2', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('m7agsu0c7dit413t8k7t1rkfkaq79q64', '192.168.0.100', 1538495708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730383b),
('m7p82om1lqtk6u8st1vdbe3a3u4i2aam', '127.0.0.1', 1535929644, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393632353b),
('mgfo0m25331tenqki9ntpmrsas7e91g1', '127.0.0.1', 1538511876, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383531313837363b),
('ndo8og16m9f4s9de0ekpunbktfsl2jeb', '127.0.0.1', 1535409034, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353430383833303b),
('o3t5jph52ulv0gresrtrbfp66chftvgj', '127.0.0.1', 1538482131, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383438323133313b),
('ol3mfma024qebc303miqc3f9u6t97cmp', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('pevcaa7i90jrss087tovjddjthb344u8', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('q1gk2a243rta16150rivjbfkfkt7kuuo', '127.0.0.1', 1535929610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393630313b),
('qosp6i1mqi7t5e9v1av5f6hs0a3a2o9s', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('qpufndiaqv92aafd3tcq4pbi101bdcrh', '192.168.0.100', 1538495709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730393b),
('rlrb5bbd090h5414dda89r45r565cnd6', '::1', 1533760048, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533333735393938363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353333373536383834223b54424f53544b7c733a33323a224a4f4d57397458475036375370646877457a6179496a714e346c546d73465a42223b),
('s5em9pdhd47dbmre6ucvlnp9pea8620u', '192.168.0.100', 1538495710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353731303b),
('scje4cbb4vb56ua8jjccscfs8l1b6f87', '127.0.0.1', 1535929646, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393634343b),
('t1qe26q3d3t8colps3ne593v3ogo71ji', '127.0.0.1', 1538563584, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383536333538343b),
('tkaocorspr3hs6qsgu6uqavdtp11jirj', '::1', 1533757055, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533333735363839363b6964656e746974797c733a31353a226d6172696f4061646d696e2e636f6d223b757365726e616d657c733a353a226d6172696f223b656d61696c7c733a31353a226d6172696f4061646d696e2e636f6d223b757365725f69647c733a313a2232223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353333373536383730223b54424f53544b7c733a33323a22633534594b4249337a50556c6a484e51737053316d787636464f5645696e4762223b),
('vm9u3i0lfthc6oudvt4tbrqa3op3sll6', '127.0.0.1', 1538501492, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383530313439313b),
('vn6qqv812gdbifhgv0eard0vd6g84d5l', '127.0.0.1', 1535929599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533353932393538373b),
('vnimbg9t0knorh3g47rhh40so3h7nqnf', '192.168.0.100', 1538495708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533383439353730383b);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `enquiry_no` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` text,
  `phone` text,
  `gender` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `p_phone` varchar(255) DEFAULT NULL,
  `education_qualification` varchar(255) DEFAULT NULL,
  `career_field` varchar(255) DEFAULT NULL,
  `future_plan` varchar(255) DEFAULT NULL,
  `enquiry_status` enum('0','1','2','3') DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `enquiry_no`, `date`, `title`, `name`, `address`, `phone`, `gender`, `dob`, `email`, `p_name`, `p_phone`, `education_qualification`, `career_field`, `future_plan`, `enquiry_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3534, '2018-07-09 00:00:00', 'Mr', 'Akinjole Emmanuel', 'Addres At Bus-stop', '0804857847', 'male', '2017-06-04', 'akinjole@test.com', 'Akinjole', '080959995959', 'graduate', 'computer', 'hacker', '2', '2018-07-10 08:48:08', '2018-10-08 15:04:59', NULL),
(2, 3534, '2018-07-09 00:00:00', NULL, 'Akinjole Emmanuel', 'Addres At Bus-stop', '0804857847', 'male', '2018-07-01', 'akinjole@test.com', 'Akinjole', '080959995959', 'graduate', 'computer', 'hacker', '2', '0000-00-00 00:00:00', '2018-07-11 14:56:00', '2018-07-11'),
(3, 3534, '2018-07-09 04:23:06', NULL, 'Mario Gotze', 'Addres At Bus-stop', '0804857847', 'male', '2018-07-01', 'akinjole@test.com', 'Akinjole', '080959995959', 'graduate', 'computer', 'hacker', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-07-11'),
(4, NULL, '2018-07-10 23:51:03', NULL, 'Wizguy Thomos', 'Sangotedo , Nigeria', '08033445786', 'male', '2018-06-16', 'wizzy@wizzy.com', 'dadwizzy', '08099475655', 'graduate', 'networking', 'CAI Agent', '1', '2018-07-11 00:51:03', '2018-07-11 15:05:03', '2018-07-11'),
(5, NULL, '2018-07-12 10:34:08', 'Miss', 'Fadekemi Johson ', '7 that side side', '080345645645', 'Female', '1995-11-12', 'fadekemi@gmail.com', 'Mr Johnson', '08045454', 'GRADUATED', 'Computer Science', 'Banker', '1', '2018-07-12 11:34:08', '2018-10-03 13:51:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `enquiry_id` int(11) NOT NULL,
  `course_recommended` varchar(255) DEFAULT NULL,
  `time_preferred` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `counsellor_id` int(11) DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `enquiry_id`, `course_recommended`, `time_preferred`, `remark`, `counsellor_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'ADSE', NULL, 'The Course Will Be Nice', 0, '1', '2018-07-08 18:21:45', NULL, '2018-07-11 16:08:05'),
(2, 2, 'CPISM', NULL, 'The Course Will Be Nice', 0, '0', NULL, NULL, '2018-07-11 15:17:18'),
(3, 3, 'DISM', NULL, 'The Course Will Be Nice', 0, '1', NULL, '2018-07-11 15:32:12', '2018-07-11 16:08:15'),
(5, 3, 'ADSE', '5:30', 'very nice', 1, '1', '2018-07-11 14:40:04', '2018-07-11 15:34:27', '2018-07-11 16:09:59'),
(6, 2, 'CPISM', '5:30', 'very good', 1, '1', '2018-07-11 14:41:23', '2018-07-11 14:41:23', '2018-07-11 16:10:10'),
(7, 2, 'MS OFFICE', '5:30', 'Ok nice', 1, '1', '2018-07-11 14:47:12', '2018-07-11 14:47:13', '2018-07-11 16:10:13'),
(8, 2, 'CPISM', '5:30', 'Nothing', 1, '1', '2018-07-11 14:56:00', '2018-07-11 14:56:00', '2018-07-11 16:10:18'),
(9, 1, 'IT TEST', '5:30', 'nice one', 1, '1', '2018-07-11 16:04:29', '2018-07-11 16:04:29', '2018-07-11 16:10:20'),
(10, 1, 'DISM', '5:30', 'nive', 1, '1', '2018-07-11 21:11:03', '2018-07-11 21:11:03', '2018-08-08 21:16:58'),
(11, 1, 'IT TEST', '5:30', 'gh,hgg', 1, '1', '2018-07-11 21:14:45', '2018-07-11 21:14:45', NULL),
(12, 1, 'ADSE', '5:30', 'It A really Nice Course', 1, '1', '2018-07-11 22:19:28', '2018-07-11 22:19:28', NULL),
(13, 1, 'IT TEST', '5:30', 'rkfkerj', 1, '1', '2018-07-11 22:21:33', '2018-07-11 22:21:33', NULL),
(14, 1, 'MS OFFICE', '10:30', 'iT iSa niCE coURSE', 1, '1', '2018-07-12 10:53:43', '2018-07-12 10:53:45', NULL),
(15, 1, 'CPISM', '10:30', 'Nice', 1, '1', '2018-07-12 11:19:30', '2018-07-12 11:19:30', NULL),
(16, 5, 'CPISM', '10:30', 'wergwefgedfgvedefg', 1, '1', '2018-07-12 11:35:12', '2018-07-12 11:35:13', NULL),
(17, 1, 'CPISM', '5:30', 'ad bck.adnv.d', 1, '1', '2018-07-12 13:48:49', '2018-07-12 13:48:50', NULL),
(18, 1, 'MS OFFICE', '5:30', 'mmm', 1, '1', '2018-07-15 15:16:26', '2018-07-15 15:16:26', NULL),
(19, 1, 'CPISM', '10:00 AM', 'NICE SUBJECT ', 1, '0', '2018-08-28 19:35:12', NULL, NULL),
(20, 1, 'ADSE', '10:00 AM', 'nice', 1, '0', '2018-08-28 20:04:13', NULL, NULL),
(21, 1, 'CPISM', '10:30', 'Nice', 2, '0', '2018-08-29 00:41:59', NULL, NULL),
(22, 1, 'MS OFFICE', '10:30', 'nfifv', 2, '0', '2018-08-29 00:46:31', NULL, NULL),
(23, 1, 'MS OFFICE', '10:30', 'ghmh', 2, '0', '2018-08-29 00:52:04', NULL, NULL),
(24, 1, 'CPISM', '10:30', 'efwef', 2, '1', '2018-08-29 23:15:14', '2018-08-29 23:17:31', NULL),
(25, 1, 'MS OFFICE', '10:30', 'Nice', 2, '1', '2018-08-29 23:19:28', '2018-08-29 23:21:43', NULL),
(26, 1, 'MS OFFICE', '10:30', 'Nice', 2, '1', '2018-08-29 23:21:44', '2018-08-29 23:23:44', NULL),
(27, 1, 'MS OFFICE', '10:30', 'nice', 2, '0', '2018-08-29 23:38:52', NULL, NULL),
(28, 1, 'CPISM', '10:30', 'rgrgrg', 2, '0', '2018-08-29 23:48:10', NULL, NULL),
(29, 1, 'MS OFFICE', '10:30', 'sfgedfged', 1, '1', '2018-10-08 13:08:32', '2018-10-08 13:08:32', NULL),
(30, 1, 'MS OFFICE', '10:30', '45454', 1, '1', '2018-10-08 13:10:53', '2018-10-08 13:10:53', NULL),
(31, 1, 'MS OFFICE', '10:30', 'kkk', 1, '1', '2018-10-08 13:14:35', '2018-10-08 13:14:36', NULL),
(32, 1, 'CPISM', '10:30', 'wrwrwr', 1, '1', '2018-10-08 13:20:45', '2018-10-08 13:20:45', NULL),
(33, 1, 'CPISM', '10:30', 'fefwef', 1, '1', '2018-10-08 13:23:50', '2018-10-08 13:23:50', NULL),
(34, 1, 'MS OFFICE', '10:30', 'r4t4', 1, '1', '2018-10-08 13:40:46', '2018-10-08 13:40:46', NULL),
(35, 1, 'MS OFFICE', '10:30', 'wfrwerf', 1, '1', '2018-10-08 15:02:12', '2018-10-08 15:02:12', NULL),
(36, 1, 'MS OFFICE', '10:30', 'GWG', 1, '1', '2018-10-08 15:04:59', '2018-10-08 15:04:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_session`
--

CREATE TABLE `site_session` (
  `user_id` int(11) NOT NULL,
  `user_session` varchar(255) NOT NULL,
  `session_type` varchar(255) NOT NULL,
  `user_os_platform` varchar(255) NOT NULL,
  `user_browser` varchar(255) NOT NULL,
  `user_ip_address` varchar(255) NOT NULL,
  `session_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_session`
--

INSERT INTO `site_session` (`user_id`, `user_session`, `session_type`, `user_os_platform`, `user_browser`, `user_ip_address`, `session_timestamp`) VALUES
(2, 'rMejNCDVTfmyBHhqdQWap9A3wtoF5GbY', 'session', 'Linux', 'Chrome', '127.0.0.1', '2018-08-29 22:38:37'),
(1, 'nztmATi3c2Mq96U4dgpIFobryeEh5jlv', 'session', 'Linux', 'Chrome', '127.0.0.1', '2018-10-23 11:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `source`
--

CREATE TABLE `source` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `source`
--

INSERT INTO `source` (`id`, `name`, `description`) VALUES
(1, 'F/R', NULL),
(2, 'BILLBOARD', NULL),
(3, 'INTERNET', NULL),
(4, 'NEWSPAPER', NULL),
(5, 'SEMINAR', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `parent_number` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `source` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `date_of_enrollement` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `installation_amount` double NOT NULL,
  `student_status` enum('0','1','2') NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `title`, `fullname`, `email`, `phone`, `gender`, `dob`, `parent_name`, `parent_number`, `address`, `source`, `course`, `date_of_enrollement`, `image`, `status`, `installation_amount`, `student_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mr.', 'Mario Wizzy', 'admin@admin.com', '08029649888', 'Female', '2015-07-11', 'fgxfgxrftxrt', 'tfdrxtrthrh', 'Labora Road', 'INTERNET', 'CPISM', '2018-07-07', 'Image__252437_15084883561.jpeg', 'ENROLLED', 550000, '0', '2018-07-07 23:18:10', '2018-07-10 16:22:33', '0000-00-00'),
(3, 'Mr.', 'Mario Wizzy', 'admin@admin.com', '08029649888', 'Female', '2018-07-07', 'fgxfgxrftxrt', 'tfdrxtrthrh', 'Labora Road', 'INTERNET', 'CPISM', '2018-07-07', 'Image__252437_15084883561.jpeg', 'ENROLLED', 550000, '0', '2018-07-07 23:18:10', '2018-07-10 16:22:33', '0000-00-00'),
(4, 'Mr.', 'Ajetumobi Isikan', 'isikan544@gmail.com', '08029649888', 'Male', '2018-07-07', 'Mr Abisiamo Kogo', '08066641923', 'Isikan Close beside Petrol Station, Abah B/Stp', 'NEWSPAPER', 'CPISM', '2018-07-07', 'default.png', 'ENROLLED', 766767676, '0', '2018-07-07 23:36:37', '2018-07-12 12:26:28', '0000-00-00'),
(5, 'Mr.', 'Johhny Bravo Drake', 'admin@admin.com', '08029649888', 'Male', '2018-07-07', 'rffrrgr', 'rgrgrergergr', 'ergregrerergr', 'SEMINAR', 'C# , JAVA', '2018-07-07', 'file1dde.jpg', 'ENROLLED', 30000, '0', '2018-07-07 23:39:51', '2018-07-10 13:33:32', '0000-00-00'),
(6, 'Mr.', 'Troost-Ekong', 'akinjolee@yahoo.com', '08029649888', 'Male', '2018-07-28', 'Troost-Edidiong', '0906676550', 'Edidiong beside Alfa b/stop', 'BILLBOARD', 'ADSE', '2018-07-07', 'default.png', 'ENROLLED', 45453454534, '0', '2018-07-07 23:44:35', '2018-07-12 12:30:43', '0000-00-00'),
(7, 'Miss', 'George Forest', 'forest@mail.com', '08029649888', 'Male', '2018-07-07', 'George Amazon', '4564565', 'Amazon close beside Primary school, B/Stop', 'INTERNET', 'ADSE', '2018-07-07', 'default.png', 'ENROLLED', 34545345666, '0', '2018-07-08 00:33:01', '2018-07-12 12:28:56', '0000-00-00'),
(8, 'Miss', 'Goooogoo', 'Googoo@mail.com', '08029649888', 'Male', '2018-07-07', 'Gooogog fish', '090044403433', 'fish close beside Nepa Office,b/stop', 'BILLBOARD', 'ADSE', '2018-07-07', 'Image__486524_1513115928.jpeg', 'ENROLLED', 1600000, '0', '2018-07-08 00:34:47', '2018-07-12 12:32:02', '0000-00-00'),
(9, 'Mr.', 'delefou', 'akinjole@yahoo.com', '08029649888', 'Female', '2018-07-07', 'festive egg', '234550099990', 'egg beside Post No Bill, b/stop', 'INTERNET', 'DISM', '2018-07-07', 'default.png', 'ENROLLED', 53453453453454, '0', '2018-07-08 00:42:06', '2018-07-12 12:33:38', '0000-00-00'),
(10, '', '', '', '', '', '0000-00-00', '', '', '', '', 'C#', '0000-00-00', 'default.png', '', 0, '0', '2018-07-08 00:44:43', NULL, '0000-00-00'),
(11, '', '', '', '', '', '0000-00-00', '', '', '', '', 'CCNA', '0000-00-00', 'default.png', '', 0, '0', '2018-07-08 00:46:33', NULL, '0000-00-00'),
(12, 'Mr.', 'GRGGFDGFDGDF', 'FERGERGER@ERFGERFGER.COM', 'ff', 'Male', '2018-07-07', 'FWEFWEFWEF', 'EFWEFGWERFWEFWE', 'RWEFGWEGWERGERER', 'INTERNET', 'CPISM', '2018-07-07', 'default.png', 'ENROLLED', 234324343242, '0', '2018-07-08 00:48:52', NULL, '0000-00-00'),
(13, 'Mr.', 'DFVDFEFE', 'akinjole@yahoo.com', 'EFEFWEF', 'Male', '2018-07-07', 'VYUGYUYUYG', 'TYDYDTYDYDTYDTY', 'YIGUIUIUIGUI', 'BILLBOARD', 'ADSE', '2018-07-07', 'default.png', 'ENROLLED', 3434343, '0', '2018-07-08 00:52:05', NULL, '0000-00-00'),
(14, 'Mr.', 'Mario Wizzy Gotze', 'akinjolemario@yahoo.com', '08033997658', 'Male', '2018-07-08', 'Mario Gomez', '09078569895', 'Jone Locker by the right', 'BILLBOARD', 'ADSE', '2018-07-08', 'default.png', 'ENROLLED', 1400000, '0', '2018-07-08 01:13:26', NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`id`, `name`, `price`, `description`) VALUES
(1, 'ADSE', 1600000, NULL),
(2, 'CPISM', 550000, NULL),
(3, 'DISM', 710000, NULL),
(4, 'MS OFFICE', 300000, NULL),
(5, 'IT ESS', 450000, NULL),
(6, 'CCNA', 650000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

CREATE TABLE `student_fee` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL,
  `date_of_payment` date NOT NULL,
  `next_installement` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fee`
--

INSERT INTO `student_fee` (`id`, `student_id`, `invoice_number`, `payment_type`, `bank`, `amount`, `date_of_payment`, `next_installement`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 34543, 'Cheque', 'UBA', 600000000, '2018-07-07', '2018-08-08', '2018-07-07 23:18:10', '2018-07-10 16:22:33', '2018-07-10 01:01:28'),
(2, 4, 567488, 'Cheque', 'UBA', 100000, '2018-07-07', '2018-08-09', '2018-07-07 23:36:37', '2018-07-12 12:26:28', '2018-07-10 16:24:05'),
(3, 5, 898989, 'Online Transfer', 'First Bank', 50000, '2018-07-07', '2018-07-07', '2018-07-07 23:39:51', '2018-07-12 13:47:21', '2018-10-23 12:40:26'),
(4, 6, 45454, 'Cheque', 'First Bank', 45454345, '2018-07-07', '2018-08-07', '2018-07-07 23:44:36', '2018-07-12 12:30:43', NULL),
(5, 7, 454, 'Cheque', 'UBA', 454455, '2018-07-07', '2018-08-07', '2018-07-08 00:33:01', '2018-07-12 12:28:56', NULL),
(6, 8, 4534, 'Cheque', 'Zenith', 4545454, '2018-07-07', '2018-07-07', '2018-07-08 00:34:47', '2018-07-12 12:32:02', NULL),
(7, 9, 3333, 'Cash', 'First Bank', 4000000, '2018-07-07', '2018-08-08', '2018-07-08 00:42:06', '2018-07-12 12:33:38', NULL),
(8, 10, 0, '', '', 0, '2018-07-04', '2018-07-11', '2018-07-08 00:44:43', NULL, NULL),
(9, 11, 74676, 'Cash', 'UBA', 50000, '2018-07-02', '2018-07-11', '2018-07-08 00:46:34', '2018-07-09 00:19:00', NULL),
(10, 12, 43434, 'Cash', 'UBA', 323434, '2018-07-07', '2018-07-07', '2018-07-08 00:48:52', NULL, NULL),
(11, 13, 0, 'Cash', 'UBA', 2433334, '2018-07-07', '2018-07-26', '2018-07-08 00:52:05', NULL, NULL),
(12, 14, 5576, 'Cash', 'First Bank', 400000, '2018-07-08', '2018-08-08', '2018-07-08 01:13:26', NULL, NULL),
(13, 3, 34543, 'Cheque', 'UBA', 600000000, '2018-07-07', '2018-08-08', '2018-07-07 23:18:10', '2018-07-10 16:22:33', NULL),
(14, 3, 34543, 'Cheque', 'UBA', 600000000, '2018-07-07', '2018-08-08', '2018-07-08 21:41:02', '2018-07-10 16:22:33', NULL),
(15, 4, 567488, 'Cheque', 'UBA', 100000, '2018-07-07', '2018-08-09', '2018-07-10 00:30:49', '2018-07-12 12:26:28', NULL),
(16, 9, 3333, 'Cash', 'First Bank', 4000000, '2018-07-07', '2018-08-08', '2018-07-10 16:18:29', '2018-07-12 12:33:38', NULL),
(17, 3, 767, 'Cheque', 'UBA', 40000, '2018-07-10', '2018-08-10', '2018-07-10 17:03:13', NULL, NULL),
(18, 12, 7998, 'Online Transfer', 'First Bank', 600000, '2018-07-10', '2018-08-10', '2018-07-10 17:13:26', '2018-07-10 17:13:49', NULL),
(19, 1, 337, 'Cash', 'First Bank', 4000000, '2018-07-20', '2018-08-08', '2018-07-10 16:18:29', '2018-07-10 16:18:48', NULL),
(20, 4, 758769, 'Cheque', 'First Bank', 60000, '2018-08-28', '2018-09-28', '2018-08-28 20:40:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_status`
--

CREATE TABLE `student_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_status`
--

INSERT INTO `student_status` (`id`, `name`, `description`) VALUES
(1, 'SPACEBOOKED', NULL),
(2, 'ENROLLED', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `otp_login_code` varchar(40) DEFAULT NULL,
  `otp_backup_codes` varchar(384) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text,
  `img` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `otp`, `otp_login_code`, `otp_backup_codes`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `gender`, `phone`, `address`, `img`, `role`) VALUES
(1, '127.0.0.1', 'admin', '$2y$08$kZTrW8c4rGUFa/DWskpkyeBjvBg/SiEzjPfWPoydfwBQg8Sbb8rtC', NULL, NULL, NULL, '', 'admin@admin.com', '', NULL, NULL, 'jhti5HKnMsjO4wEsH0vVb.', 1268889823, 1540294748, 1, 'Minnie', 'Millie', 'Female', '080235467', '456, Pragri flat, varacha road, Surat\r\nGujarat, India.', 'Image__276994_1511990042.jpeg', 'Consellor'),
(2, '127.0.0.1', 'mario', '$2y$08$kZTrW8c4rGUFa/DWskpkyeBjvBg/SiEzjPfWPoydfwBQg8Sbb8rtC', NULL, NULL, NULL, '', 'mario@admin.com', '', NULL, NULL, 'ouz6Sl2RfcoxLR0OZ3LlWe', 1268889823, 1535582316, 1, 'Minnie', 'Millie', 'Female', '080235467', '456, Pragri flat, varacha road, Surat\r\nGujarat, India.', 'Image__276994_1511990042.jpeg', 'Consellor');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `template_theme` text,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_meta`
--

INSERT INTO `user_meta` (`id`, `user_id`, `template_theme`, `updated_at`) VALUES
(1, 1, '{\"header\":\"header-red\",\"logo\":\"logo-red\",\"side\":\"red-sidebar-color\"}', '2018-10-02 16:21:24'),
(2, 2, '{\"header\":\"header-blue\",\"logo\":\"logo-blue\",\"side\":\"blue-sidebar-color\"}', '2018-08-08 21:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_todo`
--

CREATE TABLE `user_todo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `todo` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_todo`
--

INSERT INTO `user_todo` (`id`, `user_id`, `todo`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Need To Buy New pc', '0', '2018-07-12 00:57:15', NULL, '2018-07-12 01:20:10'),
(2, 1, 'Need To Wash My Car', '0', '2018-07-12 00:58:34', NULL, '2018-07-12 01:37:09'),
(3, 1, 'Need To Wash My Car', '0', '2018-07-12 00:59:06', NULL, '2018-07-12 01:28:53'),
(4, 1, 'Buy Me A car', '0', '2018-07-12 01:23:11', NULL, '2018-07-12 01:28:53'),
(5, 1, 'Buy Me A car', '0', '2018-07-12 01:23:11', NULL, '2018-07-12 01:28:53'),
(6, 1, 'Buy Me A car', '0', '2018-07-12 01:23:13', NULL, '2018-07-12 01:28:54'),
(7, 1, 'goal all', '0', '2018-07-12 01:27:37', NULL, '2018-07-12 01:28:54'),
(8, 1, 'next all', '0', '2018-07-12 01:28:10', NULL, '2018-07-12 01:37:09'),
(9, 1, 'next all', '0', '2018-07-12 01:28:14', NULL, '2018-07-12 01:36:26'),
(10, 1, 'nnf', '0', '2018-07-12 01:34:44', NULL, '2018-07-12 01:36:26'),
(11, 1, 'nice', '0', '2018-07-12 01:35:41', NULL, '2018-07-12 01:36:25'),
(12, 1, 'gogog', '0', '2018-07-12 01:36:19', NULL, '2018-07-12 01:37:10'),
(13, 1, 'my', '0', '2018-07-12 01:36:53', NULL, '2018-07-12 01:37:11'),
(14, 1, 'Need To Meet Someone', '0', '2018-07-12 09:51:49', NULL, '2018-07-12 09:51:54'),
(15, 1, 'Need to get my charger from the security ', '0', '2018-07-12 09:53:21', NULL, '2018-08-08 22:06:35'),
(16, 1, 'Need To BUY MEAT', '0', '2018-07-12 10:49:27', NULL, '2018-08-08 21:02:41'),
(17, 1, 'let try sometin', '0', '2018-07-12 13:09:54', '2018-08-08 22:27:28', '2018-08-28 20:39:07'),
(18, 1, 'new task', '0', '2018-07-12 13:46:10', NULL, '2018-07-15 15:15:12'),
(19, 1, 'Something More Todo', '0', '2018-08-08 21:51:44', '2018-08-28 20:38:24', '2018-08-28 20:38:25'),
(20, 1, 'done', '0', '2018-08-08 22:06:00', '2018-08-08 22:26:45', '2018-08-28 20:39:06'),
(21, 1, 'dfdfedfe', '0', '2018-08-08 22:07:15', '2018-08-08 22:26:46', '2018-08-28 20:39:05'),
(22, 1, ' efefefefe', '0', '2018-08-08 22:07:20', '2018-08-08 22:26:47', '2018-08-28 20:39:05'),
(23, 1, 'I will kill tayo today', '0', '2018-08-28 20:38:47', NULL, '2018-08-28 20:38:57'),
(24, 1, 'Let me try something', '0', '2018-10-02 14:47:04', NULL, '2018-10-02 14:47:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fee`
--
ALTER TABLE `student_fee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_status`
--
ALTER TABLE `student_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user_todo`
--
ALTER TABLE `user_todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `source`
--
ALTER TABLE `source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_course`
--
ALTER TABLE `student_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_fee`
--
ALTER TABLE `student_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student_status`
--
ALTER TABLE `student_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_todo`
--
ALTER TABLE `user_todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
