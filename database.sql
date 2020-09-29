-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 01:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpha_vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(2, 'Admin', 'Admin', 'admin', 'admin'),
(6, 'Chris', 'Monaco', 'admin001', 'admin001');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `club` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `country`, `club`, `img`) VALUES
(46, 'Center Forward (CF)', 'Cristiano', 'Ronaldo', 'Portugal', 'Juventus FC', 'images/unnamed.jpg'),
(47, 'Center Forward (CF)', 'Sergio', 'Aguero', 'Argentina', 'Manchester City FC', 'images/unnamed (7).jpg'),
(48, 'Center Forward (CF)', 'Robert', 'Lewandoski', 'Poland', 'Bayern Muchen FC', 'images/unnamed (1).png'),
(49, 'Center Forward (CF)', 'Kyrian', 'Mbappe', 'France', 'Paris Saint Germain', 'images/unnamed (2).jpg'),
(50, 'Center Forward (CF)', 'Antoinne', 'Griezmann', 'France', 'FC Barcelona ', 'images/unnamed (6).jpg'),
(51, 'Center Forward (CF)', 'Harry', 'Kane', 'England', 'Tottenham Hotspur FC', 'images/p78830.png'),
(52, 'Center Forward (CF)', 'Luiz', 'Suarez', 'Uruguay', 'FC Barcelona ', 'images/unnamed (4).jpg'),
(53, 'Left Winger Forward (LWF)', 'Dos Santos', 'Neymar Jr', 'Brazil', 'Paris Saint Germain', 'images/images (1).jpeg'),
(54, 'Left Winger Forward (LWF)', 'Eden', 'Hazard', 'Belgium', 'Real Madrid FC', 'images/unnamed (5).jpg'),
(55, 'Left Winger Forward (LWF)', 'Sadio', 'Mane', 'Senegal', 'Liverpool FC', 'images/p110979.png'),
(56, 'Left Winger Forward (LWF)', 'Raheem', 'Sterling', 'England', 'Manchester City FC', 'images/p103955.png'),
(57, 'Left Winger Forward (LWF)', 'Phillipe', 'Coutinho', 'Brazil', 'Bayern Muchen FC', 'images/images (7).jpeg'),
(58, 'Right Winger Forward (RWF)', 'Lionel', 'Messi', 'Argentina', 'FC Barcelona ', 'images/unnamed (1).jpg'),
(59, 'Right Winger Forward (RWF)', 'Mohammed', 'Salah', 'Egypt', 'Liverpool FC', 'images/unnamed.png'),
(60, 'Right Winger Forward (RWF)', 'Bernardo', 'Silva', 'Portugal', 'Manchester City FC', 'images/p165809.png'),
(61, 'Right Winger Forward (RWF)', 'Paulo', 'Dybala', 'Argentina', 'Juventus FC', 'images/images (2).jpeg'),
(62, 'Attacking Midfielder (AMF)', 'Kevin', 'De Bruyne', 'Belgium', 'Manchester City FC', 'images/2019-kevin-de-bruyne_1279.png'),
(63, 'Attacking Midfielder (AMF)', 'David', 'Silva', 'Spain', 'Manchester City FC', 'images/images (8).jpeg'),
(64, 'Attacking Midfielder (AMF)', 'Christian', 'Eriksen', 'Denmark', 'Tottenham Hotspur FC', 'images/images (9).jpeg'),
(65, 'Attacking Midfielder (AMF)', 'Marco', 'Reus', 'Germany', 'Borrusia Dortmund', 'images/images (10).jpeg'),
(66, 'Center Midfielder (CMF)', 'Ngolo', 'Kante', 'France', 'Chelsea FC', 'images/p116594.png'),
(67, 'Center Midfielder (CMF)', 'Paul', 'Pogba', 'France', 'Manchester United', 'images/images (5).jpeg'),
(68, 'Center Midfielder (CMF)', 'Toni', 'Kroos', 'Germany', 'Real Madrid FC', 'images/images (11).jpeg'),
(69, 'Center Midfielder (CMF)', 'Luka', 'Modric', 'Croatia', 'Real Madrid FC', 'images/images (13).jpeg'),
(70, 'Center Midfielder (CMF)', 'Thiago', 'Alacantra', 'Spain', 'Bayern Muchen FC', 'images/images (14).jpeg'),
(71, 'Defensive Midfielder (DMF)', 'Sergio', 'Busquet', 'Spain', 'FC Barcelona', 'images/images (15).jpeg'),
(72, 'Defensive Midfielder (DMF)', 'Miralem', 'Pjanic', 'Bosnia and Herzegovina', 'Juventus FC', 'images/images (18).jpeg'),
(73, 'Defensive Midfielder (DMF)', 'Carlo', 'Casmerio', 'Brazil', 'Real Madrid FC', 'images/images (17).jpeg'),
(74, 'Defensive Midfielder (DMF)', 'Henrique', 'Fabio (Fabinho)', 'Brazil', 'Liverpool FC', 'images/images (19).jpeg'),
(75, 'Center Back 1 (CB 1)', 'Virigil', 'Van Dijk', 'Netherland', 'Liverpool FC', 'images/images (27).jpeg'),
(76, 'Center Back 1 (CB 1)', 'Gerard', 'Pique', 'Spain', 'FC Barcelona', 'images/images (28).jpeg'),
(77, 'Center Back 1 (CB 1)', 'Raphael', 'Varane', 'France', 'Real Madrid FC', 'images/VARANE_1VC1790.png'),
(78, 'Center Back 2 (CB 2)', 'Kalidou', 'Koulibaly', 'Senegal', 'Napoli FC', 'images/images (30).jpeg'),
(79, 'Center Back 2 (CB 2)', 'Sergio', 'Ramos', 'Spain', 'Real Madrid FC', 'images/unnamed (3).jpg'),
(80, 'Center Back 2 (CB 2)', 'Matt ', 'Hummels', 'Germany', 'Borrusia Dortmund', 'images/images (31).jpeg'),
(81, 'Center Back 2 (CB 2)', 'Giorgio', 'Chellini', 'Italy', 'Juventus FC', 'images/images (32).jpeg'),
(82, 'Center Back 1 (CB 1)', 'Milan', 'Skriniar', 'Slovenia', 'Inter Milan', 'images/images (33).jpeg'),
(83, 'Left Back (LB)', 'Jordi', 'Alba', 'Spain', 'FC Barcelona ', 'images/images (21).jpeg'),
(84, 'Left Back (LB)', 'Marcelo', 'Vieria', 'Brazil', 'Real Madrid FC', 'images/images (4).jpeg'),
(85, 'Left Back (LB)', 'David', 'Alaba', 'Austria', 'Bayern Muchen FC', 'images/images (22).jpeg'),
(86, 'Left Back (LB)', 'Andy', 'Robertson', 'Scotland', 'Liverpool FC', 'images/images (24).jpeg'),
(87, 'Right Back (RB)', 'Joshua', 'Kimmich', 'Germany', 'Bayern Muchen FC', 'images/images (26).jpeg'),
(88, 'Right Back (RB)', 'Cesar', 'Azpiliculeta', 'Spain', 'Chelsea FC', 'images/p41328.png'),
(89, 'Right Back (RB)', 'Kyle', 'Walker', 'England', 'Manchester City FC', 'images/2019-kyle-walker_1111.png'),
(90, 'Right Back (RB)', 'Daniel ', 'Carvajal', 'Spain', 'Real Madrid FC', 'images/CARVAJAL_1VC1910,0.png'),
(91, 'Right Back (RB)', 'Trent', 'Arnold-Alexander', 'England', 'Liverpool FC', 'images/p169187.png'),
(92, 'Goal Keeper (GK)', 'Allison', 'Becker', 'Brazil', 'Liverpool FC', 'images/images (34).jpeg'),
(93, 'Goal Keeper (GK)', 'David', 'De Gea', 'Spain', 'Manchester United', 'images/images (35).jpeg'),
(94, 'Goal Keeper (GK)', 'Jan', 'Oblak', 'Slovenia', 'Athletico Madrid', 'images/images (36).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `firstname`, `lastname`, `email_address`, `password`) VALUES
(8, 'Martins', 'Luther', 'demo@example.com', 'fe01ce2a7fbac8fafaed7c982a04e229');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `users_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `candidate_id`, `users_id`) VALUES
(12, '', '5'),
(13, '', '5'),
(14, '', '5'),
(15, '', '5'),
(16, '', '5'),
(17, '', '5'),
(18, '', '5'),
(19, '', '5'),
(20, '', '5'),
(21, '', '5'),
(22, '', '5'),
(23, '', '5'),
(24, '', '5'),
(25, '', '5'),
(26, '', '5'),
(27, '', '5'),
(28, '', '5'),
(29, '', '5'),
(30, '', '5'),
(31, '', '5'),
(32, '', '5'),
(33, '', '5'),
(34, '18', '5'),
(35, '10', '5'),
(36, '23', '5'),
(37, '20', '5'),
(38, '24', '5'),
(39, '27', '5'),
(40, '28', '5'),
(41, '30', '5'),
(42, '32', '5'),
(43, '34', '5'),
(44, '37', '5'),
(45, '18', '8'),
(46, '10', '8'),
(47, '22', '8'),
(48, '20', '8'),
(49, '24', '8'),
(50, '26', '8'),
(51, '28', '8'),
(52, '30', '8'),
(53, '32', '8'),
(54, '34', '8'),
(55, '36', '8'),
(56, '18', '8'),
(57, '17', '8'),
(58, '23', '8'),
(59, '21', '8'),
(60, '25', '8'),
(61, '27', '8'),
(62, '29', '8'),
(63, '30', '8'),
(64, '33', '8'),
(65, '34', '8'),
(66, '36', '8'),
(67, '46', '8'),
(68, '53', '8'),
(69, '58', '8'),
(70, '62', '8'),
(71, '68', '8'),
(72, '74', '8'),
(73, '75', '8'),
(74, '79', '8'),
(75, '85', '8'),
(76, '87', '8'),
(77, '94', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
