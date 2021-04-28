
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `biz_categories` (
  `BusinessID` varchar(11) NOT NULL,
  `CatogeryID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `businesses` (
  `BusinessID` varchar(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `categories` (
  `CategoryID` varchar(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `categories` (`CategoryID`, `Title`, `Description`) VALUES
('AUTO', 'Automotive Parts and Supplies', 'Accessories for your car'),
('FISH', 'Seafood Stores and Restaurants', 'Place to get your fish'),
('HEALTH', 'Health And Beauty', 'Everything for the body'),
('SCHOOL', 'Schools and Colleges', 'Public and Private Learning'),
('SPORT', 'Community Sports and Recreation', 'Guide to Parks and Leagues');


CREATE TABLE `products` (
  `ProductID` varchar(11) NOT NULL,
  `Product_desc` varchar(255) DEFAULT NULL,
  `Cost` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `Numb` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `products` (`ProductID`, `Product_desc`, `Cost`, `Weight`, `Numb`) VALUES
('1', 'Hammer', 2, 6, 120);


--
ALTER TABLE `biz_categories`
  ADD PRIMARY KEY (`BusinessID`,`CatogeryID`),
  ADD KEY `CatogeryID` (`CatogeryID`);


ALTER TABLE `businesses`
  ADD PRIMARY KEY (`BusinessID`);


ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);


ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);


ALTER TABLE `biz_categories`
  ADD CONSTRAINT `biz_categories_ibfk_1` FOREIGN KEY (`CatogeryID`) REFERENCES `categories` (`CategoryID`),
  ADD CONSTRAINT `biz_categories_ibfk_2` FOREIGN KEY (`BusinessID`) REFERENCES `businesses` (`BusinessID`);
COMMIT;
