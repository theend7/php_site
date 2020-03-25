-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2020 at 07:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zimovanje`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivnosti`
--

CREATE TABLE `aktivnosti` (
  `idAktivnost` int(255) NOT NULL,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nazivAktivnosti` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datum` date NOT NULL,
  `vreme` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aktivnosti`
--

INSERT INTO `aktivnosti` (`idAktivnost`, `ime`, `prezime`, `nazivAktivnosti`, `datum`, `vreme`) VALUES
(178, 'Darko', 'Vulicevic', 'Login', '2020-03-18', '18:26:39'),
(179, 'Darko', 'Vulicevic', 'Logout', '2020-03-18', '18:27:55'),
(180, 'Darko', 'Vulicevic', 'Login', '2020-03-18', '18:28:02'),
(181, 'Darko', 'Vulicevic', 'Logout', '2020-03-18', '18:28:06'),
(182, 'Mihailo', 'Ulemek', 'Register', '2020-03-18', '18:29:06'),
(183, 'Darko', 'Vulicevic', 'Login', '2020-03-18', '18:29:15'),
(184, 'Darko', 'Vulicevic', 'Logout', '2020-03-18', '18:33:54'),
(185, 'Darko', 'Vulicevic', 'Login', '2020-03-18', '18:34:31'),
(186, 'Darko', 'Vulicevic', 'Logout', '2020-03-18', '18:35:36'),
(187, 'Darko', 'Vulicevic', 'Login', '2020-03-18', '18:37:05'),
(188, 'Darko', 'Vulicevic', 'Login', '2020-03-24', '14:52:38'),
(189, 'Darko', 'Vulicevic', 'Logout', '2020-03-24', '15:33:28'),
(190, 'Darko', 'Milenkovic', 'Register', '2020-03-24', '15:34:50'),
(191, 'Darko', 'Vulicevic', 'Login', '2020-03-24', '15:35:00'),
(192, 'Darko', 'Vulicevic', 'Logout', '2020-03-24', '16:18:50'),
(193, 'Darko', 'Vulicevic', 'Login', '2020-03-24', '16:25:23'),
(194, 'Darko', 'Vulicevic', 'Login', '2020-03-24', '21:30:29'),
(195, 'Darko', 'Vulicevic', 'Logout', '2020-03-24', '21:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `idFeatures` int(255) NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` text COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `alt` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`idFeatures`, `slika`, `naslov`, `opis`, `alt`) VALUES
(1, 'images/e6.jpg', 'Unforgettable journey', '\r\nHave a fun and unforgettable time', 'e6'),
(2, 'images/e7.jpg', 'Best exhibitions', '\r\nExperience the best adrenaline', 'e7'),
(3, 'images/e8.jpg', 'Beautiful trails', '\r\nBest trails only with us', 'e8'),
(5, 'images/e9.jpg', 'Best equipment', '\r\nThe best equipment just for you', 'e9');

-- --------------------------------------------------------

--
-- Table structure for table `iskustva`
--

CREATE TABLE `iskustva` (
  `idIskustva` int(255) NOT NULL,
  `ime` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tekstIskustva` text COLLATE utf8_unicode_ci NOT NULL,
  `idProizvoda` int(255) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `iskustva`
--

INSERT INTO `iskustva` (`idIskustva`, `ime`, `email`, `tekstIskustva`, `idProizvoda`, `datum`) VALUES
(6, 'Milan', 'milanv98@gmail.com', 'This is a best destination forever!', 6, '2020-03-16 20:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `idKategorija` int(255) NOT NULL,
  `nazivKategorije` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`idKategorija`, `nazivKategorije`) VALUES
(1, 'FreeRide'),
(2, 'Powder'),
(3, 'Touring'),
(4, 'Race');

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `idKontakt` int(255) NOT NULL,
  `imeKorisnika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prezimeKorisnika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pitanje` text COLLATE utf8_unicode_ci NOT NULL,
  `emailKorisnika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`idKontakt`, `imeKorisnika`, `prezimeKorisnika`, `pitanje`, `emailKorisnika`, `datum`) VALUES
(86, 'Darko', 'Vulicevic', 'Do you working usually destinations or?', 'darko.vulicevic98@gmail.com', '2020-03-17 13:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `idKorisnik` int(255) NOT NULL,
  `ime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idUloga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`idKorisnik`, `ime`, `prezime`, `email`, `username`, `lozinka`, `idUloga`) VALUES
(1, 'Darko', 'Vulicevic', 'darko.vulicevic98@gmail.com', 'darkov98', '73ab9ee293e0335c1990f5bd8191d0a5', 1),
(49, 'Milos', 'Kostic', 'milos@gmail.com', 'milos98', '33346a252165ba253726adea3659bce2', 2),
(57, 'Milann', 'Vulicevicc', 'milanv98@gmail.comm', 'milanv988', 'e71bd2ae90f50671bb7fc98257f3cba3', 2),
(58, 'Anjaa', 'Misic', 'anjamisic98@gmail.com', 'anjamm96', '0a4706593094200e27591f58a6aa4536', 2),
(61, 'Sladja', 'Stojanovic', 'sladjas92@gmail.com', 'sladjas92', 'bb3fa5d2810a9f504658d9b73be871ef', 2),
(69, 'Milika', 'Milikic', 'milika@gmail.com', 'milika98', '3cead89612532cc1ce0a57e8379238e9', 2),
(70, 'Darko', 'Miletic', 'darkomile98@gmail.com', 'darkomile98', '93c2a5119c515e9d8c53790c46f9bee7', 2),
(71, 'Milika', 'Milikic', 'milikam98@gmail.com', 'milikam98', '12795120c0d4b0aab9d877044ebd47bd', 2),
(72, 'Sumla', 'Sumlic', 'sumlic98@gmail.com', 'sumlica98', '02af36fa9e707e987a998a69c053a257', 2),
(75, 'Vuk', 'Kostic', 'vukk86@gmail.com', 'vukk86', '9db80419cc2d7d134b9600481b3c0084', 2),
(77, 'Sneki', 'Snekic', 'sneki@gmail.com', 'sneki98', '4f8f19202bc9db05bdd588ad2b9e9dfc', 2);

-- --------------------------------------------------------

--
-- Table structure for table `linkovi`
--

CREATE TABLE `linkovi` (
  `idLink` int(50) NOT NULL,
  `naziv` text COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linkovi`
--

INSERT INTO `linkovi` (`idLink`, `naziv`, `href`) VALUES
(1, 'home', '/home'),
(2, 'destinations', '/destinations'),
(3, 'Contact', '/contact'),
(4, 'author', '/author'),
(5, 'admin', '/admin'),
(9, 'login', '/login'),
(10, 'logout', '/logout');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `idProizvoda` int(255) NOT NULL,
  `slika` text COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cena` decimal(60,2) NOT NULL,
  `idKategorija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`idProizvoda`, `slika`, `alt`, `naziv`, `cena`, `idKategorija`) VALUES
(6, 'images/pic4.jpg', 'colombia', 'Fernie Alpine Columbiaaaaa', '150.00', 2),
(7, 'images/pic6.jpg', 'pic6', 'Steven Resort Washington', '400.00', 3),
(11, 'images/pic7.jpg', 'pic7', 'Steamboat Colorado', '109.99', 2),
(13, 'images/pic8.jpg', 'pic8', 'Whitefish Mountain', '199.99', 4),
(18, 'images/pic2.jpg', 'pic2', 'Solitude Mountain', '130.00', 1),
(19, 'images/pic3.jpg', 'pic3', 'Squaw Valley', '120.00', 3),
(30, 'images/pic1.jpg', 'pic1', 'Snowbird Soda ', '255.99', 4),
(31, 'images/pic5.jpg', 'pic5', 'Snow Ridge', '255.99', 1),
(55, 'images/pic9.jpg', 'pic99', 'Ski Surfing Resort', '15899.99', 1),
(56, 'images/pic10.jpg', 'pic100', 'Steven Resort For Ski', '400.00', 1),
(57, 'images/pic11.jpg', 'pic111', 'George Resort For Ski', '12400.00', 2),
(59, 'images/pic7.jpg', 'pic7', 'Alobute Fernie Resort', '13000.00', 3),
(60, 'images/pic6.jpg', 'pic66', 'Best Ski Experience', '120.00', 2),
(61, 'images/pic2.jpg', 'pic77', 'Amazing Rounie Ski', '400.00', 1),
(76, 'images/pic3.jpg', 'pic123', 'Surfing Ski Place', '13000.00', 3),
(77, 'images/pic5.jpg', 'pic12345', 'Extremly Hard Snowboard', '440.00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `idUloga` int(255) NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`idUloga`, `naziv`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'neautorizavaniKorisnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivnosti`
--
ALTER TABLE `aktivnosti`
  ADD PRIMARY KEY (`idAktivnost`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`idFeatures`);

--
-- Indexes for table `iskustva`
--
ALTER TABLE `iskustva`
  ADD PRIMARY KEY (`idIskustva`),
  ADD KEY `idProizvoda` (`idProizvoda`);

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`idKategorija`);

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`idKontakt`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`idKorisnik`),
  ADD UNIQUE KEY `email` (`email`,`username`,`lozinka`),
  ADD KEY `idKorisnik` (`idKorisnik`),
  ADD KEY `idUloga` (`idUloga`);

--
-- Indexes for table `linkovi`
--
ALTER TABLE `linkovi`
  ADD PRIMARY KEY (`idLink`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`idProizvoda`),
  ADD KEY `idMarka` (`idKategorija`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`idUloga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivnosti`
--
ALTER TABLE `aktivnosti`
  MODIFY `idAktivnost` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `idFeatures` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `iskustva`
--
ALTER TABLE `iskustva`
  MODIFY `idIskustva` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `idKategorija` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `idKontakt` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `idKorisnik` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `linkovi`
--
ALTER TABLE `linkovi`
  MODIFY `idLink` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `idProizvoda` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `idUloga` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `iskustva`
--
ALTER TABLE `iskustva`
  ADD CONSTRAINT `iskustva_ibfk_1` FOREIGN KEY (`idProizvoda`) REFERENCES `proizvodi` (`idProizvoda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD CONSTRAINT `korisnici_ibfk_1` FOREIGN KEY (`idUloga`) REFERENCES `uloga` (`idUloga`);

--
-- Constraints for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD CONSTRAINT `proizvodi_ibfk_1` FOREIGN KEY (`idKategorija`) REFERENCES `kategorija` (`idKategorija`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
