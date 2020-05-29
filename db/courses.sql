-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2020 at 08:29 PM
-- Server version: 5.7.30-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `courseName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `coursePrice` int(10) NOT NULL,
  `lessions` int(10) NOT NULL,
  `courseInfo` text COLLATE utf8_unicode_ci NOT NULL,
  `courseImg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgAlt` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `workImg` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `imgAlt2` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `courseName`, `coursePrice`, `lessions`, `courseInfo`, `courseImg`, `imgAlt`, `workImg`, `imgAlt2`) VALUES
(1, 'Grävmaskin', 4900, 3, 'En kurs för dig som vill bli, eller redan jobbar som, grävmaskinist!\r\nI vår grävmaskinskurs får du nödvändiga och viktiga kunskaper för att kunna hantera grävlastare, grävmaskiner och traktorgrävare på ett säkert sätt. Teoridelen lär dig allt du behöver kunna inom maskinmanövrering, säkerhet och riskbedömning, maskintillsyn, anläggning och konstruktion.\r\nUtöver teori ingår även praktiska övningar i en riktig grävmaskin i kursen. Denna kurs kan kombineras med våra andra kurser. Mer info inom kort!', '/images/excavator-thumbnail.png', 'Yellow Excavator with white background', '/images/excavator3.jpg', 'Excavator in action'),
(2, 'Truck', 1900, 2, 'En kurs för dig som vill köra truck! Under denna utbildning får du kompetens att framföra flera olika typer av truckar och kan vara en snabb väg till ett spännande jobb. Till de deltagare som får godkänt resultat i kursen utfärdas ett truckkort/truckkörkort. Detta är ett bevis över grundläggande kunskap mot de trucktyper som framförts under kursen. Ett truckkort som utfärdas är giltigt i 5 år. Mer info inom kort!', '/images/forklift-thumbnail.png', 'Forklift with white background', '/images/forklift.png', 'Forklift in warehouse'),
(3, 'Hjullastare', 2400, 3, 'En kurs för dig som vill arbeta med hjullastare! Teoridelen lär dig allt du behöver kunna inom maskinmanövrering, säkerhet och riskbedömning, maskintillsyn, anläggning och konstruktion. Utöver teori ingår även praktiska övningar i en riktig hjullastare i kursen. Efter avslutad kurs har du fått kompetens att framföra en hjullastare/lastmaskin med alla typer av redskap, exempelvis skopa, gafflar och plogblad. Utbildningen anpassas efter deltagarnas kunskapsnivå. Mer info inom kort! ', '/images/wheelloader-thumbnail.png', 'Wheel loader with white background', '/images/wheelloader.jpg', 'Wheel loader in action'),
(4, 'Teleskoplastare', 2400, 3, 'För dig som vill arbeta med teleskoplastare! Denna kurs ger dig grundläggande och nödvändiga kunskper för att på ett säkert sätt kunna framföra en teleskoplastare. I kursen får du lära dig om maskinmanövrering, arbetsmiljö, godshantering, teleskoplastarens olika redskap och säkerhet.\r\nUtöver teori ingår även praktiska moment. Denna kurs kan kombineras med våra övriga kurser. Mer info inom kort!\r\n\r\n', '/images/telescopicloader-thumbnail.png', 'Telescopic loader with white background', '/images/telescopicloader.png', 'Telescopic loader in action'),
(5, 'Fordonsmonterad kran under 18 t/m', 3400, 2, 'En kurs för den lättare typen utav fordonsmonterade kranar! Kursen går igenom moment som säkra lyft, daglig tillsyn, arbetsmiljö, riskbedömning och säkerhet. Beroende på tidigare erfarenhet kan vi erbjuda utbildningsbevis eller kompetensprov. För att genomföra kursen krävs det att du är minst 18 år och har C-körkort. Mer info inom kort!', '/images/cranetruck-thumbnail.png', 'Crane truck with white background', '/images/cranetruck.png', 'Cranetruck in action');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
