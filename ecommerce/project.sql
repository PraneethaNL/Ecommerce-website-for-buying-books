-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2016 at 08:07 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'nagamaniteja@gmail.com', 'Manitheja@97');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(100) NOT NULL,
  `book_cat` varchar(100) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_price` int(100) NOT NULL,
  `book_desc` text NOT NULL,
  `book_image` text NOT NULL,
  `book_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_cat`, `book_title`, `book_price`, `book_desc`, `book_image`, `book_keywords`) VALUES
(27, '1', 'soil fertility and fertilizers', 533, '<p>Best book for Soil Fertility and Fertilizers</p>', '51S4NbQgxQL._SX378_BO1,204,203,200_.jpg', 'soil fertility and fertilizers john L halvin james D beaton'),
(28, '1', 'geophysics for petroleum engineers', 473, '<p>Best book prefered for petroleum engineers in geophysics</p>', '04819ed23c6f0aa92176c8c08b2ffc6c.jpg', 'john cubit shivaji N dasgupta  geophysics for petroleum engineers'),
(29, '1', 'chemical process calculations', 492, '<p>Learn process calculations very easy</p>', 'download.jpg', 'chemical process calculations K asokan'),
(30, '1', 'chemical reaction engineering', 395, '<p>Beyond the fundementals by <strong>Deniz Uner and L.K Doraiswamy</strong></p>', 'images (1).jpg', 'chemical reaction engineering Deniz Uner and L.K Doraiswamy'),
(31, '1', 'why chemical reactions happen', 673, '<p><strong>are u interested to know why chemical reactions occur? A perfect book for it.</strong></p>', 'images (2).jpg', 'why chemical reactions happen james keeler peter wothers'),
(32, '1', 'chemical process equipment', 567, '<p>best book for chemical process equipment</p>', 'images (3).jpg', 'chemical process equipment james R couper W Roy penney james R fair Stanley M Walas '),
(33, '1', 'Organic Chemistry', 499, '<p>Study guide and solutions manual&nbsp; to accompany organic chemistry</p>', 'images (4).jpg', 'organic chemistry marc loudon joseph g stowell'),
(34, '1', 'Essentials of Physical Chemistry', 555, '<p>Learn Physical chemistry by S Chand very easily</p>', 'images (5).jpg', 'Essentials of Physical Chemistry Arun Bahi B S Bahi G D TULI'),
(35, '2', 'Environmental Engineering', 574, '<p><strong>Handbook Of Environmental Engineering</strong></p>', 'download.png', 'Environmental Engineering Norman C Perera'),
(37, '2', 'Building Materials', 662, '<p>Building Materials by S.K Duggal, Third revised edition</p>', 'images (1).jpg', 'Building Materials S k Duggal'),
(38, '2', 'Concrete Technology', 666, '<p><strong>Best Book For Concrete Technology</strong></p>', 'images (2).jpg', 'A R santhakumar'),
(39, '2', 'Advanced Structural Analysis', 432, '<p>Learn&nbsp; Advanced Structural Analysis Perfectly</p>', 'images (3).jpg', 'Advanced Structural Analysis devdas Menon'),
(40, '2', 'Structural mechanics and Analysis', 487, '<p><strong>Fundementals of Structural mechanics and Analysis</strong></p>', 'images (4).jpg', 'Structural mechanics and Analysis M.L Gambhir'),
(41, '2', 'Water Resources and Engineering', 553, '<p><strong>A Perfect book for Water Resources and Engineering</strong></p>', 'images (5).jpg', 'Water Resources and Engineering H.S.Viswanath'),
(42, '2', 'Traffic and Highway Engineering', 423, '<p><strong>Water Resources and Engineering fourth edition</strong></p>', 'images (7).jpg', 'Water Resources and Engineering Nicholas J Garber Lester A Hoel'),
(43, '2', 'Engineering Geology', 397, '<p><strong>Engineering Geology By A.parthasarthy</strong></p>', 'images (9).jpg', 'Engineering Geology A.parthasarthy Wiley Nagarjun Panchapakesan'),
(44, '2', 'Fluid Mechanics', 444, '<p><strong>Fluid Mechanics by Joseph B.Franzini, tenth edition</strong></p>', 'unnamed.jpg', 'Fluid Mechanics by Joseph B.Franzini E John Finnemore'),
(45, '8', 'Analog Integrated Circuit Design', 387, '<p><strong>&nbsp;best book for Analog Integrated Circuit Design</strong></p>', 'EHEP002039.jpg', 'Analog Integrated Circuit Design tony chan Carusone david A johns Kenneth Martin'),
(46, '8', 'DSP Processor Fundementals', 785, '<p><strong>contans architectures and features of DSP Processor Fundementals</strong></p>', 'images (2).jpg', 'DSP Processor Fundementals Phil lapsley jeff bier amit soham'),
(47, '8', 'Radar and ARPA Manual ', 562, '<p><strong>Radar, AIS and target tracking for marine radar users</strong></p>', 'images (3).jpg', 'Radar and ARPA Manual  alan bole alan wall andy norris'),
(48, '8', 'Satellite Communication Engineering', 421, '<p><strong>Fundementals of Satellite Communication Engineering</strong></p>', 'images (4).jpg', 'Satellite Communication Engineering K K sharma'),
(49, '8', 'Electromangnetic waves', 689, '<p><strong>A perfect book for Electromangnetic waves</strong></p>', 'images (5).jpg', 'Electromangnetic waves carlo g someda'),
(50, '8', 'Analog Communication', 887, '<p><strong>Elements of Analog Communication by Dr. Sanjay Sharma</strong></p>', 'images (7).jpg', 'Analog Communication sanjay sharma'),
(51, '8', 'Digital systems and design', 666, '<p><strong>A perfect book for Digital systems and design using VHDL</strong></p>', 'images (8).jpg', 'Digital systems and design charles m rath ury karlon john'),
(52, '8', 'Applied Speech and audio processing', 634, '<p><strong>A best book for Applied Speech and audio processing with matlab examples</strong></p>', 'unnamed.jpg', 'Applied Speech and audio processing Ian McLoughlin'),
(53, '5', 'Embedded Systems Handbook', 742, '<p><strong>Industrial Information Technology series, second edition</strong></p>', '9781420074109.jpg', 'Embedded Systems Handbook richard zurawski'),
(54, '5', 'circuit theory', 754, '<p><strong>A circuit theory by U.A.Bakshi and A V Bakshi,first edition</strong></p>', 'images (1).jpg', 'circuit theory U.A.Bakshi and A V Bakshi'),
(55, '5', 'signals and systems ', 754, '<p><strong>signals and systems using the web and matlab</strong></p>', 'images (2).jpg', 'signals and systems using the web and matlab edward W Kamen Bonnie s heck'),
(56, '5', 'Electrical machines', 687, '<p><strong>a best book for Electrical machine learning</strong></p>', 'images (3).jpg', 'Electrical machines simmy p burman'),
(57, '5', 'power electronics', 852, '<p><strong>A complete reference of Power electronics</strong></p>', 'images (4).jpg', 'power electronics M D singh K B Khanchandani'),
(58, '5', 'Modem Digital and Analog Communication', 634, '<p><strong>a best reference book for Modem Digital and Analog Communication</strong></p>', 'images (6).jpg', 'Modem Digital and Analog Communication B p lathi zhi ding'),
(59, '5', 'Modelling and simulation of systems ', 564, '<p><strong>Modelling and simulation of systems&nbsp; using matlab and simulink</strong></p>', 'images (7).jpg', 'Modelling and simulation of systems  devendra K chaturvedi'),
(60, '5', 'HVDC Transmission', 542, '<p><strong>Power Conversion Applications in Power Systems using HVDC Transmission</strong></p>', 'images (8).jpg', 'Modelling and simulation of systems  vijay k sood chan ki kim seong joo lim'),
(61, '5', 'Microcontroller Based System design', 399, '<p><strong>A perfect book for Microcontroller Based System design</strong></p>', 'images (9).jpg', 'Microcontroller Based System design p s manoharan p s kannan'),
(62, '5', 'Electromangnetic Theory', 445, '<p><strong>Introduction to&nbsp; Electromangnetic Theory</strong></p>', 'images.jpg', 'Electromangnetic Theory Tai L chow'),
(63, 'MECH', 'Handbook of Mechanics', 880, '<p><strong>A clear and perfect handbook of Mechanical Engineering</strong></p>', '51qJ3L3IFeL._OU31__BG0,0,0,0_FMpng_AC_UL320_SR228,320_.jpg', 'Handbook of Mechanical Engineering sadhu singh'),
(64, '7', 'Optical Metrology', 411, '<p><strong>Handbook of Optical Metrology</strong></p>', 'ImageForSaleItem_161.jpg', 'Optical Metrology Toru Yoshizawa'),
(65, '7', 'Practical Stress Analysis', 653, '<p>Practical Stress Analysis in Engineering design,3rd edition</p>', 'images (1).jpg', 'Practical Stress Analysis Ronald Huston Harold Josephs'),
(66, '7', 'Machine Elements', 597, '<p><strong>Design of Machine Elements ,3rd edition</strong></p>', 'images (2).jpg', 'Practical Stress Analysis V B Bhandari'),
(67, '7', 'Mechanical Behaviour of Materials', 854, '<p><strong>Learn Engineering Methods for Deformation,Fracture and fatigue</strong></p>', 'images (3).jpg', 'Mechanical Behaviour of Materials Norman E Dowling'),
(68, '7', 'Thermodynamics', 879, '<p><strong>Basic and applied Thermodynamics,Second Edition</strong></p>', 'images (4).jpg', 'Basic and applied Thermodynamics PK Nag'),
(69, '7', 'Workshop Practice', 601, '<p><strong>Workshop Practice,2nd edition</strong></p>', 'images (6).jpg', 'Workshop Practice H S Bawa'),
(70, '7', 'Advanced IC Engines', 389, '<p><strong>Learn Advanced IC Engines more effectively</strong></p>', 'images (7).jpg', 'Advanced IC Engines J prakash M shankar'),
(71, '6', 'Unix Concepts and Applications', 901, '<p><strong>Learn unix concepts perfectlyby the book written by sumitabha das</strong></p>', '000.jpg', 'Unix Concepts and Applications Sumitabha das'),
(72, '6', 'Graph Theory', 934, '<p>Graph theory with applications to engineering and computer science</p>', '1.jpg', 'graph theory Narsingh deo'),
(73, 'IT', 'Database Systems', 1010, '<p><strong>are u interested in learning databases? here is a perect book Fundementals of Database Systems by elmasri</strong></p>', '41V19FT27CL._SX374_BO1,204,203,200_.jpg', 'Fundementals of Database Systems by elmasri  navathe'),
(74, 'IT', 'Parallel computing', 956, '<p><strong>Want to study how parallelism works? here is a perfect book</strong></p>', '51acWAlOsSL._SX258_BO1,204,203,200_.jpg', 'Parallel computing peter pacheo'),
(75, '6', 'Java The complete Reference', 987, '<p><strong>A complete reference for java.Learn java easily by this book,7th edition</strong></p>', '51DHKLLHYPL._SX258_BO1,204,203,200_.jpg', 'Java The complete Reference herbert schildt'),
(76, '6', 'Graph Theory', 999, '<p><strong>Graph theory introduction by D B west,2nd edition</strong></p>', '411MB7J0KWL.jpg', 'Graph theory introduction by D B west,2nd edition'),
(77, '6', 'Computer Organization', 965, '<p><strong>A best book for Computer Organization</strong></p>', '9780072320862.jpg', 'Computer Organization carl hamacher safwat zaky'),
(78, '6', 'Data and Communication Networks', 1010, '<p><strong>Do u know how data Communicates through networks?</strong></p>\r\n<p><strong>Here is a perfect approch for it</strong></p>', 'download.jpg', 'Data and Communication Networks behrouz A forouzan'),
(79, '6', 'Introduction to Algorithms', 1024, '<p><strong>A best approach to undersatand Algorithms</strong></p>', 'image6.png', 'Introduction to Algorithms Thomas H coreman clifford stein'),
(80, '6', 'Web Technologies', 1096, '<p><strong>Do u Know how these websites are built.Are u interested in Web techonology and web Designing? here is a perfect book for it.</strong></p>', 'Web-Technology-A-Computer-Science-Perspective.jpeg', 'Web Technologies Jeffrey C jackson');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `b_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`b_id`, `ip_add`, `qty`) VALUES
(29, '::1', 1),
(73, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'CHEM'),
(2, 'CIVIL'),
(3, 'CSE'),
(5, 'EEE'),
(6, 'IT'),
(7, 'MECH'),
(8, 'ECE');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_image` text NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `customer_address`) VALUES
(2, '::1', 'sai teja', 'kakarlasaiteja@gmail.com', '1234', 'India', 'surathkal', '9916611785', '609899378.jpg', 'nitk');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `b_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `order_date` date NOT NULL,
  `c_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `b_id`, `qty`, `order_date`, `c_id`) VALUES
(4, 30, 1, '2016-11-06', 2),
(5, 29, 1, '2016-11-06', 2),
(6, 73, 1, '2016-11-06', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
