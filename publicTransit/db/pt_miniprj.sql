-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2013 at 05:50 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pt_miniprj`
--
CREATE DATABASE IF NOT EXISTS `pt_miniprj` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pt_miniprj`;

-- --------------------------------------------------------

--
-- Table structure for table `alertbuffer`
--

CREATE TABLE IF NOT EXISTS `alertbuffer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `needid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `copy` varchar(1200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `alertbuffer`
--

INSERT INTO `alertbuffer` (`id`, `needid`, `status`, `copy`) VALUES
(4, 991, -529, 'as'),
(5, 991, -606, 'as'),
(6, 991, 485, 'as'),
(7, 991, -443, 'as'),
(8, 991, -444, 'as');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(800) NOT NULL,
  `parentcomment` int(11) NOT NULL,
  `timestamp` varchar(50) NOT NULL,
  `order` int(11) NOT NULL,
  `personid` int(11) NOT NULL,
  `abbrevation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `comment`, `parentcomment`, `timestamp`, `order`, `personid`, `abbrevation`) VALUES
(2, 'Amar Bras Company-Kandivali Station (E)', 0, '2013-11-12 12:15:08', 0, 1, ''),
(3, 'Santacruz Station (E)-Amar Bras Company', 0, '2013-11-12 13:35:13', 0, 1, ''),
(4, 'This journey is usually delayed by 5 min', 3, '1384245853', 0, 1, ''),
(5, 'Santacruz Station (E)-Kandivali Station (E)', 0, '2013-11-12 16:15:56', 0, 1, ''),
(6, 'Santacruz Station (E)-Amar Bras Company', 0, '2013-11-12 16:17:59', 0, 1, ''),
(7, 'asdsadsdsadsad', 2, '1384333923', 0, 1, ''),
(8, 'Bus was delayed by 5min', 5, '1384343254', 0, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `needid` int(11) NOT NULL,
  `copy` varchar(1200) NOT NULL,
  `timestamp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mode`
--

CREATE TABLE IF NOT EXISTS `mode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `desc` varchar(250) NOT NULL,
  `abbrevation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `abbrevation` (`abbrevation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mode`
--

INSERT INTO `mode` (`id`, `title`, `desc`, `abbrevation`) VALUES
(1, 'BEST', 'Mumbai-Thane local bus transport', 'BEST'),
(2, 'Local Railways', 'Mumbai-Thane local railway transport', 'Locals'),
(3, 'Goregaon IT Parks bus', 'Mumbai-Thane goregaon private local bus transport', 'GoregaonBus');

-- --------------------------------------------------------

--
-- Table structure for table `need`
--

CREATE TABLE IF NOT EXISTS `need` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `srcstop` int(11) NOT NULL,
  `deststop` int(11) NOT NULL,
  `depttime` varchar(50) NOT NULL,
  `arrtime` varchar(50) NOT NULL,
  `modechoice1` int(11) NOT NULL,
  `modechoice2` int(11) NOT NULL,
  `modechoice3` int(11) NOT NULL,
  `alerttimebef` int(50) NOT NULL,
  `workdayflag` int(11) NOT NULL,
  `caseflag` int(11) NOT NULL,
  `personid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `need`
--

INSERT INTO `need` (`id`, `srcstop`, `deststop`, `depttime`, `arrtime`, `modechoice1`, `modechoice2`, `modechoice3`, `alerttimebef`, `workdayflag`, `caseflag`, `personid`) VALUES
(1, 1, 2, '1005', '1150', 1, 0, 0, 15, 1111100, 2, 3),
(5, 1, 1, '1050', '1150', 1, 0, 0, 15, 1111111, 2, 2),
(6, 2, 1, '1005', '1150', 1, 0, 0, 15, 111111, 2, 3),
(7, 1, 3, '1005', '1150', 1, 1, 1, 15, 1111111, 2, 3),
(8, 0, 0, '2105', '2205', 0, 0, 0, 15, 1111111, 2, 3),
(9, 1, 2, '1005', '1120', 1, 0, 0, 15, 1111111, 2, 3),
(10, 1, 2, '1005', '1150', 1, 1, 1, 15, 1111111, 2, 3);

--
-- Triggers `need`
--
DROP TRIGGER IF EXISTS `createAlert`;
DELIMITER //
CREATE TRIGGER `createAlert` AFTER INSERT ON `need`
 FOR EACH ROW begin

set @curtme=(SELECT Concat(Hour(now()),Minute(now())) FROM `type` limit 1);
if (@curtme>0) then
insert into alertbuffer values (null,991,(NEW.depttime-@curtme),'as');
end if;


end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `addr1` varchar(100) NOT NULL,
  `addr2` varchar(100) NOT NULL,
  `addr3` varchar(100) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `lcontactno` varchar(20) NOT NULL,
  `mcontactno` varchar(20) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `timestamp` varchar(50) NOT NULL,
  `homestopid1` int(11) NOT NULL,
  `homestopid2` int(11) NOT NULL,
  `homestopid3` int(11) NOT NULL,
  `officestopid1` int(11) NOT NULL,
  `officestopid2` int(11) NOT NULL,
  `officestopid3` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `fname`, `mname`, `lname`, `userid`, `pwd`, `addr1`, `addr2`, `addr3`, `pincode`, `lcontactno`, `mcontactno`, `emailid`, `type`, `timestamp`, `homestopid1`, `homestopid2`, `homestopid3`, `officestopid1`, `officestopid2`, `officestopid3`) VALUES
(1, 'Tukaram', 'Nathuram', 'Gobole', 'tukaram123', 'admin', 'Flat 203, F wing, Mayur Vihar', 'Kandivali (W)', 'Mumbai', '400256', '022-222555', '+91709938617', 'rockingkags@gmail.com', 2, '0', 0, 0, 0, 0, 0, 0),
(2, 'Prasad', 'Vikas', 'Athavale', 'prasad123', 'admin', 'Flat 204, F wing, Mayur Vihar', 'Kandivali (W)', 'Mumbai', '400256', '022-222523', '+91709938633', 'meit@gmail.com', 1, '1384194995', 0, 0, 0, 0, 0, 0),
(3, 'Kaustubh ', 'Vijay', 'Joshi', 'kaustubh123', 'admin', 'Parishram', 'Om Nagar', 'Kopargaon', '423601', '02423223567', '+917709938617', 'thatsmekaustubh@gmail.com', 3, '1384229007', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stops`
--

CREATE TABLE IF NOT EXISTS `stops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `desc` varchar(250) NOT NULL,
  `abbrevation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `abbrevation` (`abbrevation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `stops`
--

INSERT INTO `stops` (`id`, `title`, `desc`, `abbrevation`) VALUES
(1, 'Amar Bras Company', 'University of Mumbai Stop, Santacruz (E), Mumbai bus stop', 'AmarBrasCo'),
(2, 'Santacruz Station (E)', 'Santacruz Railway Station East', 'SantacruzStnE'),
(3, 'Kandivali Station (E)', 'Kandivali Railway Station East', 'KandivaliStnE'),
(4, 'Samarth Nagar ', 'Samarth Nagar, Thakur Village, Kandivali (E)', 'SamarthNgr'),
(5, 'Magathane Tel Exchg', 'Magathane Telephone Exchange, Western highway, Kandivali (E)', 'MagthaneTelExchg'),
(6, 'Kandivali Station (W)', 'Kandivali Railway Station West', 'KandivaliStnW');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `srcstop` int(11) NOT NULL,
  `deststop` int(11) NOT NULL,
  `depttime` int(11) NOT NULL,
  `arrtime` int(11) NOT NULL,
  `inchargeid` int(11) NOT NULL,
  `workdaysflag` int(11) NOT NULL,
  `caseflag` int(11) NOT NULL,
  `parentJourney` int(11) NOT NULL,
  `abbrevation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `srcstop`, `deststop`, `depttime`, `arrtime`, `inchargeid`, `workdaysflag`, `caseflag`, `parentJourney`, `abbrevation`) VALUES
(1, 1, 3, 1005, 1150, 1, 1111111, 2, 0, ''),
(4, 2, 1, 2105, 2150, 1, 1111111, 2, 0, ''),
(6, 2, 3, 1700, 1750, 1, 1111111, 2, 0, '0'),
(7, 2, 1, 2105, 2208, 1, 1111111, 2, 0, '0');

--
-- Triggers `timetable`
--
DROP TRIGGER IF EXISTS `createForum`;
DELIMITER //
CREATE TRIGGER `createForum` AFTER INSERT ON `timetable`
 FOR EACH ROW begin
set @abbrevation=(select concat(a.title,'-',b.title) from stops as a,stops as b where a.id=NEW.srcstop AND b.id=NEW.deststop);

insert into forum 
(`comment`, `parentcomment`, `timestamp`, `order`, `personid`) 
VALUES 
(@abbrevation, 0, now(), '0',NEW.inchargeid);


end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `desc` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `title`, `desc`) VALUES
(1, 'Admin', 'Has access to Mode, Stops, Timetable tables'),
(2, 'Conductor', 'Person incharge of transit vehicle is called as conductor, has access to timetable and forum table'),
(3, 'Commuter', 'The one who takes journey using public transit is commuter, has access to person, forum and need tbl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
