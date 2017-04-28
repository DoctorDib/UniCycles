/*
SQLyog Community v12.3.3 (64 bit)
MySQL - 5.5.46 : Database - unicycle
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`unicycle` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `unicycle`;

/*Table structure for table `bike` */

DROP TABLE IF EXISTS `bike`;

CREATE TABLE `bike` (
  `Bike_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Bike_Type` varchar(20) NOT NULL,
  `Working_Condition` tinyint(1) DEFAULT '1',
  `Depot_ID` int(11) NOT NULL,
  `Insured` tinyint(1) DEFAULT '1',
  `In_Use` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`Bike_ID`),
  KEY `Depot_ID` (`Depot_ID`),
  CONSTRAINT `bike_ibfk_1` FOREIGN KEY (`Depot_ID`) REFERENCES `depot` (`Depot_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;

/*Table structure for table `bike_store` */

DROP TABLE IF EXISTS `bike_store`;

CREATE TABLE `bike_store` (
  `Store_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Store_Name` varchar(30) NOT NULL,
  `Owner_Forename` varchar(20) NOT NULL,
  `Owner_Surname` varchar(20) NOT NULL,
  `Store_Email` varchar(45) NOT NULL,
  `Store_Phone` varchar(15) NOT NULL,
  `Store_Address` varchar(200) NOT NULL,
  PRIMARY KEY (`Store_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Table structure for table `deactivationrequest` */

DROP TABLE IF EXISTS `deactivationrequest`;

CREATE TABLE `deactivationrequest` (
  `deactivationRequestNumber` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) DEFAULT NULL,
  KEY `deactivationRequestNumber` (`deactivationRequestNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Table structure for table `depot` */

DROP TABLE IF EXISTS `depot`;

CREATE TABLE `depot` (
  `Depot_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Maximum_Storage` int(11) NOT NULL,
  `Depot_Location` varchar(200) NOT NULL,
  PRIMARY KEY (`Depot_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Table structure for table `report` */

DROP TABLE IF EXISTS `report`;

CREATE TABLE `report` (
  `Report_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TOPIC` varchar(15) NOT NULL,
  `DESCRIPTION` varchar(1000) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  PRIMARY KEY (`Report_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1006 DEFAULT CHARSET=utf8;

/*Table structure for table `request` */

DROP TABLE IF EXISTS `request`;

CREATE TABLE `request` (
  `Request_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Bike_From` varchar(200) NOT NULL,
  `Bike_To` varchar(200) NOT NULL,
  `Bike_ID` int(11) NOT NULL,
  `Time_Of_Departure` time NOT NULL,
  `Date_Of_Departure` date NOT NULL,
  `Return_time` time NOT NULL,
  `Bike_Returned` tinyint(1) NOT NULL,
  PRIMARY KEY (`Request_ID`),
  KEY `Bike_ID` (`Bike_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `request_ibfk_1` FOREIGN KEY (`Bike_ID`) REFERENCES `bike` (`Bike_ID`),
  CONSTRAINT `request_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1046 DEFAULT CHARSET=utf8;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Forename` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `DoB` date NOT NULL,
  `Email_Address` varchar(45) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Is_Student` tinyint(1) DEFAULT '0',
  `Is_Lecturer` tinyint(1) DEFAULT '0',
  `Is_Other_Staff` tinyint(1) DEFAULT '0',
  `UP_Number` varchar(6) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `isActive` binary(1) DEFAULT '1',
  PRIMARY KEY (`User_ID`),
  UNIQUE KEY `Email_Address` (`Email_Address`),
  UNIQUE KEY `Phone` (`Phone`),
  UNIQUE KEY `UP_Number` (`UP_Number`)
) ENGINE=InnoDB AUTO_INCREMENT=12076 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
