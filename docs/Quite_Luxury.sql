-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 07:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quite_luxury`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE ` updateRoom` (IN `id` INT(11), IN `Roomid` INT(25), IN `Roomnumber` INT(10), IN `RoomType` VARCHAR(25), IN `description` TEXT, IN `Roomstatus` VARCHAR(25))  BEGIN
	DECLARE roomtypeID INT(11);
    DECLARE roomstatusID INT(11);
	CASE RoomType 
    	WHEN 'SingleRoom' THEN
        	SET roomtypeID = 1;
        WHEN 'DoubleRoom' THEN
        	SET roomtypeID = 2;
        ELSE
        	SET roomtypeID = 0;
     END CASE;
     CASE Roomstatus 
    	WHEN 'Full' THEN
        	SET roomstatusID = 1;
        WHEN 'Null' THEN
        	SET roomstatusID = 0;
     END CASE;
    UPDATE `room` SET `RoomID` =  Roomid, RoomTypeID= roomtypeID,	RoomNumber= Roomnumber,Description= description, RoomstatusID=roomstatusID WHERE `room`.`RoomID` = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actionreservation` ()  SELECT ra.raReservationAgentID, concat(ra.raFirstName, ra.raLastName) as raFullname, ra.raAddress, ra.raCountry, ra.raPhone, ra.raGender, b.bBookingID, g.gGuestID, g.gName
FROM reservationsagents as ra, bookings as b, guest as g
WHERE ra.raReservationAgentID = b.bReservationAgentID  AND b.bGuestID = g.gGuestID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `autocreateRoom` (IN `roomtype` VARCHAR(25), IN `SL` INT(11))  BEGIN 

	DECLARE roomnumber INT(11);
   	DECLARE counter INT DEFAULT 1;
    
    SELECT MAX(r.RoomNumber) INTO roomnumber FROM room as r;
    
	WHILE counter <= SL DO
    	SET roomnumber = roomnumber + 1;
        CALL insertRoom(roomnumber,roomtype,'' );
        SET counter = counter + 1;
       
    END WHILE;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `booking_form` (IN `name` VARCHAR(50), IN `email` VARCHAR(25), IN `phone` VARCHAR(15), IN `country` VARCHAR(25), IN `numberAdult` INT(11), IN `numberChildren` INT(11), IN `datecheckIn` DATE, IN `datecheckOut` DATE)  BEGIN
	DECLARE maxid  INT(11); 
	INSERT INTO `guest` (`gGuestID`, `gName`, `gEmail`, `gPhone`, `gCountry`, `gRolesID`) VALUES (NULL, name , email , phone, country,numberAdult,numberChildren, NULL);
	SELECT MAX(gGuestID) INTO maxid FROM guest;
	INSERT INTO `bookings` (`bBookingID`, `bGuestID`, `bReservationAgentID`, `bDateCheckIn`, `bDateCheckOut`, `bNumberAdult`, `bNumberChildren`, `bRoomCount`) VALUES (NULL, maxid, '', datecheckIn, datecheckOut, '');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CheckInBookingById` (IN `id` INT(11))  BEGIN

	UPDATE `bookings` SET `bBookingStatus` = '2' WHERE `bookings`.`bBookingID` = id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CheckOutBookingById` (IN `id` INT(11))  NO SQL
BEGIN

	UPDATE `bookings` SET `bBookingStatus` = '3' WHERE `bookings`.`bBookingID` = id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConfirmBookingById` (IN `id` INT(11))  BEGIN

	UPDATE `bookings` SET `bBookingStatus` = '1' WHERE `bookings`.`bBookingID` = id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard` ()  BEGIN
	DECLARE countbooking int(11);
    DECLARE countroom int(11);
    DECLARE countphongday int(11);
 
    
	SELECT count(b.bBookingID) INTO countbooking  FROM bookings as b;
    SELECT COUNT(r.RoomID) INTO  countroom FROM room as r;
    SELECT COUNT(r.RoomID) INTO  countphongday FROM room as r
    WHERE r.RoomstatusID = 1;
	SELECT countbooking, countphongday ,countroom;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteAccountById` (IN `id` INT(11))  NO SQL
DELETE from `admin` WHERE `aAdminID`=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteBookingById` (IN `id` INT(11))  BEGIN 
	 DECLARE idroom  INT(11) ; 
     DECLARE idrb INT(11);
      DECLARE countroom  INT(11) ; 
     DECLARE idguest  INT(11); 
     DECLARE index1  INT(11) DEFAULT 1;
    -- Lay id room
    SELECT COUNT(rb1.rbRoomID) INTO countroom FROM roomsbooked as rb1
    WHERE rb1.rbBookingID = id;
    
	-- Lay id guest
    SELECT b.bGuestID INTO idguest FROM bookings as b
    WHERE b.bBookingID = id;
    
   WHILE index1 <= countroom  DO
      SELECT Max(rb2.rbRoomID) INTO idroom FROM roomsbooked AS rb2 WHERE rb2.rbBookingID = id;
      SELECT MAX(rb2.rbRoomBookedID) INTO idrb  FROM roomsbooked AS rb2 WHERE rb2.rbBookingID = id;
      DELETE FROM `roomsbooked` WHERE `roomsbooked`.`rbRoomBookedID` = idrb;
      
      UPDATE `room` SET `RoomstatusID` = '0' WHERE `room`.`RoomID` = idroom;
      
      SET index1 = index1 + 1;
    END WHILE;
    
     -- delete booking
     DELETE FROM `bookings` WHERE `bookings`.`bBookingID` = id;
     
       -- delete guest
    DELETE FROM `guest` WHERE `guest`.`gGuestID` = idguest;  

    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteRoomById` (`id` INTEGER)  BEGIN
	DELETE from room WHERE RoomID=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DemPhongTrong` ()  BEGIN
SELECT r.RoomTypeID, rt.rRoomType,rt.rRoomPrice , rt.rImg,rt.rtMaxGuest,COUNT(r.RoomstatusID) as SL_PhongTrong
FROM room as r JOIN roomtypes as rt ON r.RoomTypeID = rt.rRoomTypeID
WHERE r.RoomstatusID = 0
GROUP BY r.RoomTypeID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getAllRoom` ()  BEGIN
	SELECT * FROM room;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getDataAccountById` (IN `id` INT(11))  NO SQL
SELECT * from `admin` where `aAdminID`=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getDataRoomById` (IN `id` INT(11))  BEGIN 
	SELECT * 
    from room as  r
    LEFT JOIN roomtypes as rt
    ON r.RoomTypeID = rt.rRoomTypeID
    where RoomID= id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertAccount` (IN `username` VARCHAR(25), IN `password` VARCHAR(25), IN `img` VARCHAR(25), IN `email` VARCHAR(25), IN `firstname` VARCHAR(25), IN `lastname` VARCHAR(25), IN `address` VARCHAR(25), IN `country` VARCHAR(25), IN `phone` VARCHAR(25), IN `gender` VARCHAR(25), IN `birthday` DATE, IN `roles` INT(11))  NO SQL
INSERT INTO `admin` (`aAdminID`, `aUsername`, `aPassword`,`aimg`, `aEmail`, `aFirstName`, `aLastName`, `aAddress`, `aCountry`, `aPhone`, `aGender`, `aBirthday`, `aRoleID`) VALUES (NULL, username, password,img, email, firstname, lastname, address, country, phone, gender, birthday, roles)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertbookingfull1` (IN `name` VARCHAR(25), IN `mail` VARCHAR(50), IN `phone` VARCHAR(25), IN `country` VARCHAR(25), IN `dateCheckIn` DATE, IN `dateCheckOut` DATE, IN `numberAdult` INT(11), IN `numberChildren` INT(11), IN `roomtype` VARCHAR(25), IN `Decription` TEXT, IN `roomcount` INT(11))  BEGIN
	DECLARE maxidguest  INT(11); 
    DECLARE maxidbooking  INT(11);
    DECLARE minidroom  INT(11);
    DECLARE stt int(11)  DEFAULT 1;
	DECLARE roomnumber int(11);
    
	INSERT INTO `guest` (`gGuestID`, `gName`, `gEmail`, `gPhone`, `gCountry`, `gRolesID`) VALUES (NULL, name , mail , phone, country, NULL);
	SELECT MAX(gGuestID) INTO maxidguest  FROM guest;
	INSERT INTO `bookings` (`bBookingID`, `bGuestID`, `bReservationAgentID`, `bDateCheckIn`, `bDateCheckOut`, `bNumberAdult`, `bNumberChildren`, `bRoomCount`) VALUES (NULL, maxidguest, '1', dateCheckIn, dateCheckOut, numberAdult, numberChildren,'');
    SELECT MAX(bBookingID) INTO maxidbooking FROM bookings;
    
    
    
    WHILE stt <= roomcount DO
       	SELECT MIN(r.RoomID) INTO minidroom
  		FROM room as r 
 		 WHERE r.RoomstatusID = 0 AND r.RoomTypeID = roomtypeID ;
         
        CALL `minroomid`(roomtype);
        
        INSERT INTO `roomsbooked` (`rbRoomBookedID`, `rbBookingID`, `rbRoomID`, `rbRate`) VALUES (NULL, maxidbooking ,minidroom, '5');
        SET stt = stt + 1;
        SET roomnumber = roomnumber+ 1;
    END WHILE;
    
   
    
    
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertbookingfull2` (IN `name` VARCHAR(25), IN `mail` VARCHAR(50), IN `phone` VARCHAR(25), IN `country` VARCHAR(25), IN `dateCheckIn` DATE, IN `dateCheckOut` DATE, IN `numberAdult` INT(11), IN `numberChildren` INT(11), IN `roomtype` VARCHAR(25), IN `Decription` TEXT, IN `roomcount` INT(11), IN `roomtype2` VARCHAR(25), IN `roomcount2` INT(11))  BEGIN
	DECLARE maxidguest  INT(11); 
    DECLARE maxidbooking  INT(11);
    DECLARE minidroom  INT(11);
    DECLARE stt int(11)  DEFAULT 1;
    DECLARE stt2 int(11)  DEFAULT 1;
	DECLARE roomnumber int(11);
    
	INSERT INTO `guest` (`gGuestID`, `gName`, `gEmail`, `gPhone`, `gCountry`, `gRolesID`) VALUES (NULL, name , mail , phone, country, NULL);
	SELECT MAX(gGuestID) INTO maxidguest  FROM guest;
	INSERT INTO `bookings` (`bBookingID`, `bGuestID`, `bReservationAgentID`, `bDateCheckIn`, `bDateCheckOut`, `bNumberAdult`, `bNumberChildren`, `bRoomCount`) VALUES (NULL, maxidguest, '1', dateCheckIn, dateCheckOut, numberAdult, numberChildren,'');
    SELECT MAX(bBookingID) INTO maxidbooking FROM bookings;
    
    SELECT (MAX(r.RoomNumber)+1) into roomnumber FROM room as r;
    
    WHILE stt <= roomcount DO
    	SELECT MIN(r.RoomID) INTO minidroom
  		FROM room as r 
 		 WHERE r.RoomstatusID = 0 AND r.RoomTypeID = roomtypeID ;
         
        CALL `minroomid`(roomtype);
        
        INSERT INTO `roomsbooked` (`rbRoomBookedID`, `rbBookingID`, `rbRoomID`, `rbRate`) VALUES (NULL, maxidbooking , maxidroom, '5');
        SET stt = stt + 1;
        SET roomnumber = roomnumber+ 1;
    END WHILE;
    
    SELECT (MAX(r.RoomNumber)+1) into roomnumber FROM room as r;
    
    WHILE stt2 <= roomcount2 DO
    	SELECT MIN(r.RoomID) INTO minidroom
  		FROM room as r 
 		 WHERE r.RoomstatusID = 0 AND r.RoomTypeID = roomtypeID ;
         
        CALL `minroomid`(roomtype2);
        
        INSERT INTO `roomsbooked` (`rbRoomBookedID`, `rbBookingID`, `rbRoomID`, `rbRate`) VALUES (NULL, maxidbooking , maxidroom, '5');
        SET stt2 = stt2 + 1;
        SET roomnumber = roomnumber+ 1;
    END WHILE;
    
    
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertRoom` (IN `Roomnumber` INT(11), IN `RoomType` VARCHAR(100), IN `Description` VARCHAR(50))  BEGIN
	DECLARE roomtypeID INT(11);
	CASE RoomType 
    	WHEN 'Single Room' THEN
        	SET roomtypeID = 1;
        WHEN 'Double Room' THEN
        	SET roomtypeID = 2;
        ELSE
        	SET roomtypeID = 0;
     END CASE;
        	
    INSERT INTO `room` (`RoomID`, `RoomTypeID`, `RoomNumber`, `Description`, `RoomstatusID`) VALUES (NULL, roomtypeID , Roomnumber, Description, 0);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login` (IN `username` VARCHAR(16), IN `password` VARCHAR(16))  SELECT * FROM `admin` WHERE aUsername=username AND aPassword=password$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `loginReserve` (IN `username` VARCHAR(16), IN `password` VARCHAR(16))  SELECT * FROM `reservationsagents` WHERE 	raUsername=username AND 	raPassword=password$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `maxid` (OUT `maxid` INT(11))  Select (MAX(gGuestID) + 1) INTO maxid  from `guest`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `minroomid` (IN `roomtype` VARCHAR(25))  BEGIN
DECLARE roomtypeID INT(11);
DECLARE idroom INT(11);
	CASE roomtype 
    	WHEN 'Single Room' THEN
        	SET roomtypeID = 1;
        WHEN 'Double Room' THEN
        	SET roomtypeID = 2;
        ELSE
        	SET roomtypeID = 0;
     END CASE;
  SELECT MIN(r.RoomID) INTO idroom
  FROM room as r 
  WHERE r.RoomstatusID = 0 AND r.RoomTypeID = roomtypeID ;
  UPDATE `room` SET `RoomstatusID` = '1' WHERE `room`.`RoomID` = idroom;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `searchAccountbyUsername` (IN `value` VARCHAR(25))  BEGIN
	SELECT a.aAdminID FROM admin as a 
     WHERE a.aUsername like value;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `searchRoombyNumb` (IN `value` VARCHAR(11))  BEGIN
	SELECT r.RoomID FROM room as r 
     WHERE r.RoomNumber like value;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `test1` (IN `id` INT(11))  BEGIN 
	 DECLARE idroom  INT(11) ; 
     DECLARE idrb INT(11);
      DECLARE countroom  INT(11) ; 
     DECLARE idguest  INT(11); 
     DECLARE index1  INT(11) DEFAULT 1;
    -- Lay id room
    SELECT COUNT(rb1.rbRoomID) INTO countroom FROM roomsbooked as rb1
    WHERE rb1.rbBookingID = id;
    
	-- Lay id guest
    SELECT b.bGuestID INTO idguest FROM bookings as b
    WHERE b.bBookingID = id;
    
   WHILE index1 <= countroom  DO
      SELECT Max(rb2.rbRoomID) INTO idroom FROM roomsbooked AS rb2 WHERE rb2.rbBookingID = id;
      SELECT MAX(rb2.rbRoomBookedID) INTO idrb  FROM roomsbooked AS rb2 WHERE rb2.rbBookingID = id;
      DELETE FROM `roomsbooked` WHERE `roomsbooked`.`rbRoomBookedID` = idrb;
      
      UPDATE `room` SET `RoomstatusID` = '0' WHERE `room`.`RoomID` = idroom;
      
      SET index1 = index1 + 1;
    END WHILE;
    
     -- delete booking
     DELETE FROM `bookings` WHERE `bookings`.`bBookingID` = id;
     
       -- delete guest
    DELETE FROM `guest` WHERE `guest`.`gGuestID` = idguest;  

    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `test2` (IN `id` INT(11))  BEGIN
 DECLARE idroom  INT(11) ; 
     DECLARE idrb INT(11);

SELECT  Max(rb2.rbRoomBookedID) INTO idrb 
FROM roomsbooked AS rb2 WHERE rb2.rbBookingID = id;
     SELECT idrb;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `test3` ()  BEGIN
DECLARE stt int(11) DEFAULT 502313;
	WHILE stt <= 544280 DO
        DELETE FROM `room` WHERE `room`.`RoomID` = stt;
        SET stt = stt + 1;
    END WHILE;
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateAccount` (IN `id` INT(11), IN `AdminID` INT(11), IN `Username` VARCHAR(25), IN `Password` VARCHAR(25), IN `img` VARCHAR(25), IN `Email` VARCHAR(50), IN `FirstName` VARCHAR(25), IN `LastName` VARCHAR(25), IN `Address` VARCHAR(100), IN `Country` VARCHAR(25), IN `Phone` VARCHAR(25), IN `Gender` VARCHAR(25), IN `Birthday` DATE)  NO SQL
UPDATE admin set aAdminID=AdminID,aUsername= Username,aPassword=Password,aimg=img, aEmail= Email,	aFirstName=FirstName ,aLastName = LastName ,aAddress=Address, aCountry=Country, aPhone=Phone,aGender=Gender,aBirthday=Birthday 
WHERE aAdminID=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewaccount` ()  NO SQL
SELECT * FROM admin$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewbooking` ()  BEGIN
    SELECT g.gGuestID, g.gName, g.gEmail, g.gPhone, g.gCountry, b.bBookingID, b.bDateCheckIn, b.bDateCheckOut, b.bNumberAdult, b.bNumberChildren, b.bRoomCount,COUNT(rb.rbRoomID) as SL_Room, b.bBookingStatus 
    From bookings as b , guest as g, roomsbooked as rb, room as r, roomtypes as rt
    WHERE b.bGuestID = g.gGuestID AND rb.rbBookingID = b.bBookingID AND r.RoomID=rb.rbRoomID AND rt.rRoomTypeID= r.RoomTypeID
    GROUP by rb.rbBookingID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewreservation` ()  SELECT * FROM reservationsagents$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewroom` ()  BEGIN

SELECT r3.RoomID, r3.RoomTypeID, r3.RoomNumber,r3.RoomstatusID, r3.rImg, r3.rRoomType, r3.rRoomPrice, r2.bDateCheckIn, r2.bDateCheckOut,r2.gGuestID, r2.gName, r2.gEmail, r2.gPhone, r2.gCountry
FROM  (SELECT r1.RoomID, r1.RoomTypeID, rt1.rRoomPrice, r1.RoomNumber,r1.RoomstatusID,rt1.rRoomType, rt1.rImg, rt1.rRoomRatesID
FROM room as r1 JOIN roomtypes as rt1 ON r1.RoomTypeID = rt1.rRoomTypeID) as r3
LEFT JOIN ( SELECT r.RoomID, r.RoomNumber, r.RoomstatusID, rt.rImg, rt.rRoomType, rt.rRoomPrice, b.bDateCheckIn,b.bDateCheckOut, g.gGuestID, g.gName, g.gEmail, g.gPhone, g.gCountry
        FROM room as r, roomtypes as rt, roomsbooked as rb, bookings as b, guest as g
        WHERE r.RoomTypeID= rt.rRoomTypeID AND r.RoomID= rb.rbRoomID AND rb.rbBookingID= b.bBookingID AND b.bGuestID = g.gGuestID
				 ) as r2
 ON r3.RoomID = r2.RoomID;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aAdminID` int(11) NOT NULL,
  `aUsername` varchar(25) COLLATE utf8_unicode_ci NOT NULL COMMENT 'username của admin',
  `aPassword` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `aimg` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `aEmail` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `aFirstName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `aLastName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `aAddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aCountry` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `aPhone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `aGender` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `aBirthday` date NOT NULL,
  `aRoleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aAdminID`, `aUsername`, `aPassword`, `aimg`, `aEmail`, `aFirstName`, `aLastName`, `aAddress`, `aCountry`, `aPhone`, `aGender`, `aBirthday`, `aRoleID`) VALUES
(12, 'chau124', 'zbc111', '(1)', 'dangducchau2000@gmail.com', 'Không', '', 'KDC số 1, thôn Đông', 'HCM', '+10916144389', 'Nữ', '2020-12-15', 21),
(14, ' chau123', 'abc123', '(1)razor.jpg', '', '', '', '', '', '', '', '0000-00-00', 0),
(34, 'chuong', 'abc123', '(1)', 'chuongchuong123@gmail.com', 'chuong', '', 'KDC số 1, thôn Đông', 'HCM', '', '', '0000-00-00', 0),
(36, 'chau', 'abc123', '(1)klee.jpg', 'chuongchuong123@gmail.com', 'chuong', 'chuong', 'KDC số 1, thôn Đông', 'Australia', '+10916144389', '', '0000-00-00', 0),
(44, 'abc11111', '', '(1)', '', '', '', '', '', '', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bBookingID` int(11) NOT NULL,
  `bGuestID` int(11) NOT NULL,
  `bReservationAgentID` int(11) NOT NULL,
  `bDateCheckIn` date NOT NULL,
  `bDateCheckOut` date NOT NULL,
  `bNumberAdult` int(5) NOT NULL,
  `bNumberChildren` int(5) DEFAULT NULL,
  `bRoomCount` int(15) NOT NULL,
  `bBookingStatus` int(5) NOT NULL COMMENT '0: Chưa confirm, 1: Đã confirm, 2: Đã Checkin, 3: Đã Checkout'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bBookingID`, `bGuestID`, `bReservationAgentID`, `bDateCheckIn`, `bDateCheckOut`, `bNumberAdult`, `bNumberChildren`, `bRoomCount`, `bBookingStatus`) VALUES
(55, 1167, 1, '2021-01-12', '2021-01-17', 1, 0, 0, 1),
(56, 1168, 1, '2021-01-12', '2021-01-17', 4, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `gGuestID` int(11) NOT NULL,
  `gName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gEmail` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gPhone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `gCountry` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gRolesID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`gGuestID`, `gName`, `gEmail`, `gPhone`, `gCountry`, `gRolesID`) VALUES
(1, 'Dang', 'abc@gmail.com', '09133333333', 'tp.HCM', 11),
(1112, '2', 'dangducchau2000@gmail.com', '+10916144389', 'VN', NULL),
(1148, 'Đặng Đức Châu', 'dangducchau2000@gmail.com', '+55916144389', 'Brazil', NULL),
(1167, 'chuong chuong', 'chuongchuong123@gmail.com', '+10916144389', 'Brazil', NULL),
(1168, 'chuong chuong', 'chuongchuong123@gmail.com', '+10916144389', 'Hong Kong', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservationsagents`
--

CREATE TABLE `reservationsagents` (
  `raReservationAgentID` int(11) NOT NULL,
  `raUsername` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `raPassword` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `raFirstName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `raLastName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `raAddress` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `raEmail` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `raImg` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `raCountry` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `raPhone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `raGender` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `raRolesID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservationsagents`
--

INSERT INTO `reservationsagents` (`raReservationAgentID`, `raUsername`, `raPassword`, `raFirstName`, `raLastName`, `raAddress`, `raEmail`, `raImg`, `raCountry`, `raPhone`, `raGender`, `raRolesID`) VALUES
(1, 'chuongchuong', '123456', 'chuong chuong', '123', 'tp.HCM', '', '(1)razor.jpg', 'VietNam', '12345689', 'nữ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `rRoles` int(11) NOT NULL,
  `rTitle` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `rContent` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `rDescription` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomID` int(25) NOT NULL,
  `RoomTypeID` int(11) NOT NULL,
  `RoomNumber` int(11) NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `RoomstatusID` int(25) NOT NULL COMMENT 'Trạng thái của phòng: (1)Đầy, (0)Trống, (2)Đang chờ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomID`, `RoomTypeID`, `RoomNumber`, `Description`, `RoomstatusID`) VALUES
(1, 2, 0, 'Phòng dôi', 0),
(3, 1, 0, 'Phòng đơn', 1),
(4, 1, 204, 'Phòng đơn', 1),
(20, 1, 203, 'Phòng đơn', 1),
(24, 2, 207, 'Phòng đôi', 0),
(25, 2, 210, 'Phòng đôi', 0),
(28, 1, 211, 'Phòng Đơn', 1),
(30, 1, 212, 'Phòng Đơn', 1),
(31, 2, 213, 'Phòng Đôi', 0),
(544310, 1, 213, '', 1),
(544311, 1, 213, '', 1),
(544312, 1, 213, '', 1),
(544313, 1, 213, '', 1),
(544314, 1, 213, '', 1),
(544315, 1, 214, '', 0),
(544316, 1, 215, '', 0),
(544317, 2, 216, '', 0),
(544318, 2, 217, '', 0),
(544319, 2, 218, '', 0),
(544320, 2, 219, '', 0),
(544321, 2, 220, '', 0),
(544322, 2, 221, '', 0),
(544323, 2, 222, '', 0),
(544324, 1, 11122, '', 1),
(544329, 1, 228, '', 0),
(544330, 1, 229, '', 0),
(544331, 1, 230, '', 0),
(544332, 1, 231, '', 0),
(544333, 1, 232, '', 0),
(544334, 1, 233, '', 0),
(544335, 1, 234, '', 0),
(544336, 1, 235, '', 0),
(544337, 1, 112234, '', 1),
(544338, 1, 237, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roomsbooked`
--

CREATE TABLE `roomsbooked` (
  `rbRoomBookedID` int(11) NOT NULL,
  `rbBookingID` int(11) NOT NULL,
  `rbRoomID` int(11) NOT NULL,
  `rbRate` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roomsbooked`
--

INSERT INTO `roomsbooked` (`rbRoomBookedID`, `rbBookingID`, `rbRoomID`, `rbRate`) VALUES
(106, 55, 1, 5),
(107, 56, 1, 5),
(108, 56, 1, 5),
(109, 56, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE `roomtypes` (
  `rRoomTypeID` int(11) NOT NULL,
  `rImg` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rRoomType` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rRoomPrice` int(20) NOT NULL,
  `rtMaxGuest` int(2) NOT NULL,
  `rRoomRatesID` int(11) NOT NULL,
  `rDescription` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`rRoomTypeID`, `rImg`, `rRoomType`, `rRoomPrice`, `rtMaxGuest`, `rRoomRatesID`, `rDescription`) VALUES
(1, 'single.jpg', 'SingleRoom', 199, 2, 0, NULL),
(2, 'double.jpg', 'DoubleRoom', 299, 4, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aAdminID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bBookingID`),
  ADD KEY `fk_guest` (`bGuestID`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`gGuestID`);

--
-- Indexes for table `reservationsagents`
--
ALTER TABLE `reservationsagents`
  ADD PRIMARY KEY (`raReservationAgentID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rRoles`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomID`),
  ADD KEY `fk_roomtype` (`RoomTypeID`);

--
-- Indexes for table `roomsbooked`
--
ALTER TABLE `roomsbooked`
  ADD PRIMARY KEY (`rbRoomBookedID`),
  ADD KEY `fk_booking` (`rbBookingID`),
  ADD KEY `fk_room` (`rbRoomID`);

--
-- Indexes for table `roomtypes`
--
ALTER TABLE `roomtypes`
  ADD PRIMARY KEY (`rRoomTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aAdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bBookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `gGuestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1169;

--
-- AUTO_INCREMENT for table `reservationsagents`
--
ALTER TABLE `reservationsagents`
  MODIFY `raReservationAgentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `rRoles` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `RoomID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=544339;

--
-- AUTO_INCREMENT for table `roomsbooked`
--
ALTER TABLE `roomsbooked`
  MODIFY `rbRoomBookedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `rRoomTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_guest` FOREIGN KEY (`bGuestID`) REFERENCES `guest` (`gGuestID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `fk_roomtype` FOREIGN KEY (`RoomTypeID`) REFERENCES `roomtypes` (`rRoomTypeID`);

--
-- Constraints for table `roomsbooked`
--
ALTER TABLE `roomsbooked`
  ADD CONSTRAINT `fk_booking` FOREIGN KEY (`rbBookingID`) REFERENCES `bookings` (`bBookingID`),
  ADD CONSTRAINT `fk_room` FOREIGN KEY (`rbRoomID`) REFERENCES `room` (`RoomID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
