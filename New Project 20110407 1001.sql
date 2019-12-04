-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.41-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema bankdb
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ bankdb;
USE bankdb;

--
-- Table structure for table `bankdb`.`bankregistration`
--

DROP TABLE IF EXISTS `bankregistration`;
CREATE TABLE `bankregistration` (
  `bankid` varchar(11) NOT NULL,
  `bankname` varchar(10) default NULL,
  `headoffice` varchar(10) default NULL,
  `address` varchar(30) default NULL,
  `town` varchar(15) default NULL,
  `location` varchar(15) default NULL,
  `email` varchar(25) default NULL,
  `manager` varchar(15) default NULL,
  `fax` int(11) default NULL,
  `telephone` int(11) default NULL,
  PRIMARY KEY  (`bankid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdb`.`bankregistration`
--

/*!40000 ALTER TABLE `bankregistration` DISABLE KEYS */;
INSERT INTO `bankregistration` (`bankid`,`bankname`,`headoffice`,`address`,`town`,`location`,`email`,`manager`,`fax`,`telephone`) VALUES 
 ('e001','equity','nairobi','7678 nai','nai','githurai','mun@gmail.com','james mwangi',23324,3445345),
 ('k001','kcb','nairobi','98 nai','nai','westlands','kcb@co.ke','hussien abdalla',4355454,435345),
 ('n001','national','nairobi','5268 kericho','kericho','sosiot','nation@nation.co.ke','cheruyot',54354,45345354);
/*!40000 ALTER TABLE `bankregistration` ENABLE KEYS */;


--
-- Table structure for table `bankdb`.`clientdetails`
--

DROP TABLE IF EXISTS `clientdetails`;
CREATE TABLE `clientdetails` (
  `surname` varchar(20) default NULL,
  `othername` varchar(30) default NULL,
  `client_id` int(11) NOT NULL,
  `address` varchar(30) default NULL,
  `gender` varchar(6) default NULL,
  `bank` varchar(15) default NULL,
  `birth_date` date default NULL,
  `nationality` varchar(20) default NULL,
  `division` varchar(20) default NULL,
  `location` varchar(20) default NULL,
  `sublocation` varchar(20) default NULL,
  `email` varchar(30) default NULL,
  `mobile_no` int(11) default NULL,
  `added_by` varchar(20) default NULL,
  `date_added` date default NULL,
  PRIMARY KEY  (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdb`.`clientdetails`
--

/*!40000 ALTER TABLE `clientdetails` DISABLE KEYS */;
INSERT INTO `clientdetails` (`surname`,`othername`,`client_id`,`address`,`gender`,`bank`,`birth_date`,`nationality`,`division`,`location`,`sublocation`,`email`,`mobile_no`,`added_by`,`date_added`) VALUES 
 ('isaac','mungai muturi',1333,'786897','male','equity','0000-00-00','kenyan','bahati','lanet','mugwathi','mungaiisack',727650122,'65676','2011-04-07'),
 ('isaac','mungai muturi',13334,'786897','male','equity','0000-00-00','kenyan','bahati','lanet','mugwathi','mungaiisack',727650122,'mungai','2011-04-07'),
 ('isaac','mungai muturi',133346,'786897','male','equity','0000-00-00','kenyan','bahati','lanet','mugwathi','mungaiisack',727650122,'mungai','2011-04-07'),
 ('isaac','mungai muturi',1333464,'786897','male','equity','0000-00-00','kenyan','bahati','lanet','mugwathi','mungaiisack',727650122,'mungai','2011-04-07');
/*!40000 ALTER TABLE `clientdetails` ENABLE KEYS */;


--
-- Table structure for table `bankdb`.`deposit`
--

DROP TABLE IF EXISTS `deposit`;
CREATE TABLE `deposit` (
  `deposit_id` int(11) NOT NULL auto_increment,
  `bankid` varchar(11) default NULL,
  `client_id` int(11) default NULL,
  `cash_deposit` float default NULL,
  `dep_date` date default NULL,
  `total_cash` float default NULL,
  PRIMARY KEY  (`deposit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdb`.`deposit`
--

/*!40000 ALTER TABLE `deposit` DISABLE KEYS */;
INSERT INTO `deposit` (`deposit_id`,`bankid`,`client_id`,`cash_deposit`,`dep_date`,`total_cash`) VALUES 
 (2,'k001',9098,2488,'2011-10-10',-21900),
 (6,'e001',1333,2000,'2011-04-10',15200);
/*!40000 ALTER TABLE `deposit` ENABLE KEYS */;


--
-- Table structure for table `bankdb`.`kinsdetails`
--

DROP TABLE IF EXISTS `kinsdetails`;
CREATE TABLE `kinsdetails` (
  `clientid` int(11) default NULL,
  `kins_name` varchar(40) default NULL,
  `occupation` varchar(15) default NULL,
  `kinid` int(11) NOT NULL,
  `address` varchar(20) default NULL,
  `phone_no` int(11) default NULL,
  `town` varchar(15) default NULL,
  `relationship` varchar(10) default NULL,
  PRIMARY KEY  (`kinid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdb`.`kinsdetails`
--

/*!40000 ALTER TABLE `kinsdetails` DISABLE KEYS */;
INSERT INTO `kinsdetails` (`clientid`,`kins_name`,`occupation`,`kinid`,`address`,`phone_no`,`town`,`relationship`) VALUES 
 (1333,'isaac','manager',67577,'7899 nairobi',727650122,'nakuru','father'),
 (133346,'isaac','manager',67577346,'7899 nairobi',727650122,'nakuru','father'),
 (1333464,'isaac','manager',675773464,'7899 nairobi',727650122,'nakuru','father');
/*!40000 ALTER TABLE `kinsdetails` ENABLE KEYS */;


--
-- Table structure for table `bankdb`.`pindetails`
--

DROP TABLE IF EXISTS `pindetails`;
CREATE TABLE `pindetails` (
  `client_id` int(11) default NULL,
  `atm_pin` int(11) default NULL,
  `atm_no` int(11) NOT NULL,
  `secrete_word` varchar(15) default NULL,
  PRIMARY KEY  (`atm_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdb`.`pindetails`
--

/*!40000 ALTER TABLE `pindetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `pindetails` ENABLE KEYS */;


--
-- Table structure for table `bankdb`.`transfer`
--

DROP TABLE IF EXISTS `transfer`;
CREATE TABLE `transfer` (
  `transfer_id` int(11) NOT NULL auto_increment,
  `bank_id` int(11) default NULL,
  `client_id` int(11) default NULL,
  `transfer_to` varchar(15) default NULL,
  `transfer_from` varchar(15) default NULL,
  `tranfer_date` date default NULL,
  `transfer_amount` float default NULL,
  PRIMARY KEY  (`transfer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdb`.`transfer`
--

/*!40000 ALTER TABLE `transfer` DISABLE KEYS */;
/*!40000 ALTER TABLE `transfer` ENABLE KEYS */;


--
-- Table structure for table `bankdb`.`withdraw`
--

DROP TABLE IF EXISTS `withdraw`;
CREATE TABLE `withdraw` (
  `bankid` varchar(11) default NULL,
  `client_id` int(11) default NULL,
  `cash_withdraw` float default NULL,
  `withdraw_date` date default NULL,
  `withdral_id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`withdral_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdb`.`withdraw`
--

/*!40000 ALTER TABLE `withdraw` DISABLE KEYS */;
INSERT INTO `withdraw` (`bankid`,`client_id`,`cash_withdraw`,`withdraw_date`,`withdral_id`) VALUES 
 ('k001',4566,74500,'2011-03-03',2);
/*!40000 ALTER TABLE `withdraw` ENABLE KEYS */;


--
-- Table structure for table `bankdb`.`you`
--

DROP TABLE IF EXISTS `you`;
CREATE TABLE `you` (
  `clientid` int(11) default NULL,
  `amount` float default NULL,
  `date` varchar(20) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdb`.`you`
--

/*!40000 ALTER TABLE `you` DISABLE KEYS */;
INSERT INTO `you` (`clientid`,`amount`,`date`) VALUES 
 (123,12343,'12233244');
/*!40000 ALTER TABLE `you` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
