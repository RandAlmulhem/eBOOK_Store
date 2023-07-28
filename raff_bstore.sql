-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 07, 2023 at 05:58 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raff_bstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `title` text NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `author` text NOT NULL,
  `quantity` int(255) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`title`, `isbn`, `author`, `quantity`, `description`, `img`, `price`) VALUES
('Who Moved My Cheese?', '9780091816971', 'Spencer Johnson', 16, 'The book is a simple parable that reveals profound truths. It is an amusing and enlightening story\r\n of four characters who live in a \"Maze\" and look for \"Cheese\" to nourish them and make them happy.\r\n Two are mice named Sniff and Scurry. And two are \"Littlepeople\" -- beings the size of mice who look\r\n and act a lot like people. Their names are Hem and Haw.\r\n\"Cheese\" is a metaphor for what you want to have in life -- whether it is a good job, a loving\r\nrelationship, money, a possession, health, or spiritual peace of mind. And the \"Maze\" is where you\r\nlook for what you want -- the organization you work in, or the family or community you live in. In the\r\nstory, the characters are faced with unexpected change. Eventually, one of them deals with it\r\nsuccessfully, and writes what he has learned from his experience on the Maze walls.', 'https://i.pinimg.com/originals/54/eb/e6/54ebe6095417eba6c528bbd0662fb65e.jpg', 55),
('Outliers', '9780316056281', 'Malcolm Gladwell', 18, 'Malcolm Gladwell takes us on an intellectual journey through the world of \"outliers\"--the best and the brightest, the most famous and the most successful. He asks the question: what makes high-achievers different?\r\n\r\nHis answer is that we pay too much attention to what successful people are like, and too little\r\nattention to where they are from: that is, their culture, their family, their generation, and the\r\nidiosyncratic experiences of their upbringing. Along the way he explains the secrets of software\r\nbillionaires, what it takes to be a great soccer player, why Asians are good at math, and what made\r\nthe Beatles the greatest rock band.', 'https://i.pinimg.com/originals/72/3a/11/723a11c5143dd2bc3251653fc9545cd6.jpg', 45),
('The Tipping Point', '9780349113463', 'Malcolm Gladwell', 10, 'The tipping point is that magic moment when an idea, trend, or social behavior\r\ncrosses a threshold, tips, and spreads like wildfire. Just as a single sick person can start an\r\nepidemic of the flu, so too can a small but precisely targeted push cause a fashion trend, the\r\npopularity of a new product, or a drop in the crime rate. This widely acclaimed bestseller, in\r\nwhich Malcolm Gladwell explores and brilliantly illuminates the tipping point phenomenon, is\r\nalready changing the way people throughout the world think about selling products and\r\ndisseminating ideas.', 'https://i.pinimg.com/originals/99/ca/41/99ca41bca18334d17195cb2a9decc563.jpg', 40),
('Granada Trilogy', '9780815607656', 'Radwa Ashour', 4, 'Radwa Ashour skillfully weaves a history of Granadan rule and an Arabic world into\r\na novel that evokes cultural loss and the disappearance of a vanquished population. The novel\r\nfollows the family of Abu Jaafar, the bookbinder, his wife, widowed daughter-in-law, her two\r\nchildren, and his two apprentices as they witness Christopher Columbus and his entourage in a\r\ntriumphant parade featuring exotic plants and animals and human captives from the New World.\r\nEmbedded in the narrative is the preparation for the marriage of Saad, one of the apprentices,\r\nand Saleema, Abu Jaafar\'s granddaughter -- a scenario that is elegantly revealed in a number\r\nof parallel scenes.', 'https://i.pinimg.com/originals/c9/2d/5c/c92d5cf9d5315ed3cba4da98f9cc7cf5.jpg', 70),
('The Paradox of Choice', '9781491514238', 'Barry Schwartz', 20, 'Is a book written by American psychologist Barry Schwartz and first published in 2004\r\nby Harper Perennial. In the book, Schwartz argues that eliminating consumer choices can greatly\r\nreduce anxiety for shoppers. The book analyses the behavior of different types of people (in\r\nparticular, maximizers and satisficers). This book argues that the dramatic explosion in choice—from\r\nthe mundane to the profound challenges of balancing career, family, and individual needs—has\r\nparadoxically become a problem instead of a solution and how our obsession with choice\r\nencourages us to seek that which makes us feel worse.', 'https://i.pinimg.com/originals/ec/4e/b2/ec4eb2fd255b704ba3d3cc4eec4ef4d8.png', 70),
('The Royal Game', '9781782278269', 'Stefan Zweig', 12, 'The Royal Game is a novella by the Austrian author Stefan Zweig written in 1941, the year before the author\'s death by suicide. In some editions, the title is used for a collection that also includes \"Amok\", \"Burning Secret\", \"Fear\", and \"Letter From an Unknown Woman\".', '\r\nhttps://i.pinimg.com/originals/50/aa/78/50aa7801179b8d68393ec8afa8221727.jpg', 75),
('Atomic Habits', '9781847941831', 'James Clear', 5, 'No matter your goals, Atomic Habits offers a proven framework for improving everyday. James Clear, one of the world\'s leading experts on habit formation, reveals practical strategies\r\nthat will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.If you\'re having trouble changing your habits, the problem isn\'t you. The problem is your system. Bad habits repeat themselves again and again not because you don\'t want to change, but because you have the wrong system for change. You do not rise to the level of your goals. You fall to the level of your systems. Here, you\'ll get a proven system that can take you to new heights.\r\n\r\n', 'https://i.pinimg.com/originals/e2/f2/c7/e2f2c775fd48731a7439b7fbc329b6b1.jpg', 75),
('East of The Mediterranean', '9786144190951', 'Abdulrahman Munif', 12, 'The novel deals with powerful themes of freedom. Its protagonist is Rajab Ismail, who is\r\nsubject to eleven years of extreme torture and is eventually made blind during the horrific ordeal.\r\nThe novel marked the beginning of Munif\'s exploration of the Arabic wilderness in his novels with\r\nMunif\'s venture into the desert.', 'https://i.pinimg.com/originals/25/57/22/2557223373f6af43cffa10c83f39266e.jpg', 40),
('My Life', '978774279447', 'Ahmad Amin', 7, 'Ahmad Amin (1886-1954) was one of that remarkable cohort of Egyptian intellectuals all\r\nborn a few years either side of 1890, a group whose prolific literary output largely defined and expressed\r\nthe dominant liberal trend in Egyptian intellectual and cultural life in the period of the parliamentary\r\nmonarchy from the 1920s through the 1940s. The autobiographical statements of two members of this\r\ngroup, Salamah Musa and Taha Husayn, have previously been made available in English translations.\r\nNow the reader unfamiliar with Arabic has an English version of Amin\'s autobiography to complement\r\nthose of Musa and Husayn and to illuminate the cultural trends of a most important period of modern\r\nEgyptian and Arab history.', 'https://i.pinimg.com/originals/ea/dd/1c/eadd1c4979a57a348ff87f9b305a5b62.jpg', 115),
('Al Tantouriah', '9789770928295', 'Radwa Ashour', 30, ' For most of us, the word brings to mind a series of confused images and\r\ndisjointed associations―massacres, refugee camps, UN resolutions, settlements, terrorist attacks,\r\nwar, occupation, checkered kuffiyehs and suicide bombers, a seemingly endless cycle of death and\r\ndestruction. This novel does not shy away from such painful images, but it is first and foremost a\r\npowerful human story, following the life of a young girl from her days in the village of al-Tantoura in\r\nPalestine up to the dawn of the new century. We participate in events as they unfold, seeing them\r\nthrough the uneducated but sharply intelligent mind of Ruqayya, as she tries to make sense of all\r\nthat has happened to her and her family. With her, we live her love of her land and of her people; we\r\nfeel the repeated pain of loss, of diaspora, and of cross-generational misunderstanding; and above\r\nall, we come to know her indomitable human spirit. As we read we discover that we have become\r\npart of Ruqayya’s family, and her voice will remain with us long after we have closed the book.', 'https://i.pinimg.com/originals/c6/ff/9b/c6ff9b1157adeeca40ea9d2fc0b8fe14.jpg', 89),
('The Broken wings', '9789777950138', 'Gibran Khalil Gibran', 3, 'It is a tale of tragic love, set at the turn of the 20th century in Beirut. A young woman,\r\nSelma Karamy, is betrothed to a prominent religious man\'s nephew. The protagonist (a young man\r\nthat Gibran perhaps modeled after himself) falls in love with this woman. They begin to meet in\r\nsecret, however they are discovered, and Selma is forbidden to leave her house, breaking their\r\nhopes and hearts', 'https://i.pinimg.com/originals/aa/12/e7/aa12e7af151b65533df0ffb8b7898451.jpg', 83),
('Time Of White Horses', '9789953874630', 'Ibrahim Nasrallah', 20, 'This gripping, comi-tragic fictional-factual saga takes place in the environs of\r\nJerusalem, from late Ottoman times to the establishment of the State of Israel in 1948. With the\r\ncolorful strokes of his pen, Ibrahim Nasrallah paints a vivid picture of Palestinian villagers\'\r\npreoccupations and aspirations-their ties to their land, to their animals, and to one another.\r\nThrough the experiences of Hajj Mahmud, chief elder of al-Hadiya, his son Khalid and his\r\nbeloved steed al-Hamama, and other memorable characters ranging from the heroic to the\r\nvillainous, we relive the realities of the Palestinian village in the early twentieth century, Zionist\r\ncolonization and its impact on Arab rural life, the trauma that accompanied the British mandate\r\nand its aftermath, the Palestinians\' struggle to maintain the autonomy and dignity they had\r\nknown for centuries on end, and the beginnings of life under the Zionist state.', 'https://i.pinimg.com/originals/31/4d/8c/314d8cb1f2bb1bd8950166b3f99f7aed.jpg', 65);

-- --------------------------------------------------------

--
-- Table structure for table `customersorders`
--

CREATE TABLE `customersorders` (
  `Order_date` date NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `Order_number` varchar(20) NOT NULL,
  `Total_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customersorders`
--

INSERT INTO `customersorders` (`Order_date`, `customer_email`, `Order_number`, `Total_price`) VALUES
('2022-12-31', 'Ragadsa@gmail.com', '11100', '2000'),
('2023-02-01', 'Mohammed34@gmail.com', '11200', '50'),
('2023-01-10', 'Dalal678@gmail.com', '11300', '100'),
('2023-01-22', 'Turki1@gmail.com', '11600', '1500'),
('2023-02-07', 'suaad2001@gmail.com', '58547', '70');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `email`, `password`) VALUES
('Albandery', 'albandery0@hotmail.com', 'a12345678'),
('Dalal', 'Dalal678@gmail.com', 'd12345678'),
('Mohammed', 'Mohammed34@gmail.com', 'm12345678'),
('Raghad', 'Ragadsa@gmail.com', 'r12345678'),
('reem', 'reem2001@gmail.com', 'r12345678'),
('Suaad', 'suaad2001@gmail.com', 's12345678'),
('Turki', 'Turki1@gmail.com', 't12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `customersorders`
--
ALTER TABLE `customersorders`
  ADD PRIMARY KEY (`Order_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
