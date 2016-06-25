-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2016 at 10:14 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gamingplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Xbox One Games'),
(2, 'PS4 games'),
(3, 'Nintendo wii Games'),
(4, 'Xbox 360 Game'),
(5, 'PS3 Games');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `zipcode` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `transaction_id`, `qty`, `price`, `address`, `address2`, `city`, `state`, `zipcode`) VALUES
(1, 1, 1, '0', 1, 59, 'sadaf ', '', 'Isf', 'Isf', '01234');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `image`, `price`) VALUES
(1, 1, 'Destiny', 'The Taken King Legendary Edition is the complete collection in one epic package. It includes Destiny, all the expansions, and the latest chapter, The Taken King at one great price. It also includes a character boost to get you immediately battle ready.', 'game1.png', 55),
(2, 1, 'call of duty: Ghosts', 'Call of Duty®: Black Ops III deploys its players into a future where biotechnology has enabled a new breed of Black Ops soldier. Call of Duty: Black Ops III for PlayStation® 3 and Xbox 360 features two modes only: Multiplayer and Zombies, providing fans with an expansive Multiplayer and an all-new film-noir Zombies adventure', 'game2.png', 59),
(3, 5, 'Watch Dogs', 'The world is at your finger-tips as you become brilliant Hacker Aiden Pierce, former thug now using his techno genius to avenge his family.\r\nArmed with phone in one hand and Baton in the other you’re ready to dish out justice, but if things get too much you can always break out the firepower.\r\nHack traffic lights, bank vaults, CCTV, phones and anything else with a digital finger print in the open world of Chicago.\r\nNavigate the city streets of Chicago on foot or in a vast collection of cars, and if you’re on the run or on the hunt, cut through the alleys, buildings or take to the rooftops.\r\nWatch_Dogs is powered by Disrupt, a dedicated engine that delivers a stunning and realistic experience.', 'game3.png', 60),
(4, 1, 'sniper Elite', 'Zombie Army Trilogy is a terrifyingly intense third person shooter set in a gruesome alternate vision of World War II. Fight alone or team up to save humanity from the zombie menace in this apocalyptic shooter for 1-4 players! ', 'game4.png', 50),
(5, 2, 'Batman Arkham Night', ' Be a part of the explosive Finale in the Batman Arkham Series in Batman Arkham Knight.\r\n    Take to the rooftops and now - the roads of Gotham as for the first time the iconic Batmobile becomes driveable.\r\n    Face some of Batman''s most notorious foes as the Scarecrow returns to unite Gotham''s most feared villians.\r\n\r\n', 'game5.png', 70),
(6, 2, 'shadow of Mordor', '\r\nFeaturing the innovative Nemesis System, Middle-earth: Shadow of Mordor Game of the Year Edition expands on the critically-acclaimed original title, which includes the main game and all currently available downloadable content (DLC) packs, allowing fans to experience hours of added gameplay and content including:\r\n\r\n    Story Packs: The Lord of The Hunt and The Bright Lord\r\n    Skins: The Dark Ranger, Captain of the Watch, Lord of the Hunt, The Bright Lord, Power of Shadow and Lithariel Skins\r\n    Runes: Hidden Blade, Deadly Archer, Flame of Anor, Rising Storm, Orc Slayer, Defiant to the End, Elven Grace, Ascendant, One with Nature\r\n    Missions: Guardians of the Flaming Eye, The Berserks and The Skull Crushers Warband Missions\r\n    Challenge Modes: Test of Power, Test of Speed, Test of Wisdom, Endless Challenge, Test of the Wild, Test of the Ring, Test of Defiance Challenge Modes\r\n    Additional Features: Photo Mode\r\n\r\n', 'game6.png', 60);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `join_date`) VALUES
(1, 'شیرین', 'نیکی', 'niki@y.com', 'shirin', '12345', '2016-02-14 10:23:37'),
(2, 'shirin', 'niki', 'shirin.niki@yahoo.com', 'admin1', '827ccb0eea8a706c4c34a16891f84e7b', '2016-02-19 15:04:09'),
(4, 'شیرین', 'نیکی', 'a@gmail.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '2016-02-19 15:06:55'),
(6, 'shirin', 'niki', 'a@gmail.com', 'kskoglund', '827ccb0eea8a706c4c34a16891f84e7b', '2016-02-19 16:03:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
