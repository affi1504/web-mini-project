-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 06:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phno` int(20) NOT NULL,
  `add1` varchar(30) NOT NULL,
  `add2` varchar(30) NOT NULL,
  `pin` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `cardno` int(20) NOT NULL,
  `expiry` varchar(10) NOT NULL,
  `cvv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`fname`, `lname`, `phno`, `add1`, `add2`, `pin`, `city`, `state`, `cardno`, `expiry`, `cvv`) VALUES
('acma', 'aokcoa', 2234235, 'coacko', 'cockaoc', 224524, 'acoamsdo', 'zo zo o o', 235246, '3314/', 343),
('acma', 'aokcoa', 2234235, 'coacko', 'cockaoc', 224524, 'acoamsdo', 'zo zo o o', 6766, '78878', 877);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES
('affi', 'afrid.1997@yahoo.com', 2147483647, 'hello i have a query');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `price` varchar(50) NOT NULL,
  `img_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `details`, `price`, `img_url`) VALUES
(1, 'Technia Phone XR (64GB) - Yellow', '6.1-inch Liquid Retina display (LCD)\r\nIP67 water and dust resistant (maximum depth of 1 meter up to 30 minutes)\r\n12MP camera with OIS and 7MP TrueDepth front camera\r\nPortrait mode, Portrait Lighting, Depth Control, and Smart HDR\r\nFace ID for secure authentication\r\nA12 Bionic with next-generation Neural Engine\r\nWireless charging works with Qi chargers\r\niOS 12 with Memoji, Screen Time, Siri Shortcuts, and Group FaceTime', '42900', 'images/iphone2.png'),
(2, 'Technia Phone Xs (256GB) - Space Grey', '5.8-inch Super Retina display (OLED) with HDR1\r\nIP68 dust and water resistant (maximum depth of 2 metres up to 30 minutes)2\r\n12MP dual cameras with dual OIS and 7MP TrueDepth front camera\r\n Portrait mode, Portrait Lighting, Depth Control and Smart HDR\r\nFace ID for secure authentication3\r\nA12 Bionic with next-generation Neural Engine\r\nWireless charging works with Qi chargers\r\niOS 12 with Memoji, Screen Time, Siri Shortcuts, and Group FaceTime', '94900', 'images/iphone1.png'),
(3, 'Technia Phone Xs (64GB) - Gold', '5.8-inch Super Retina display (OLED) with HDR1\r\nIP68 dust and water resistant (maximum depth of 2 metres up to 30 minutes)2\r\n12MP dual cameras with dual OIS and 7MP TrueDepth front camera\r\nPortrait mode, Portrait Lighting, Depth Control and Smart HDR\r\nFace ID for secure authentication3\r\nA12 Bionic with next-generation Neural Engine\r\nWireless charging works with Qi chargers\r\niOS 12 with Memoji, Screen Time, Siri Shortcuts, and Group FaceTime', '79900', 'images/iphone3.png'),
(4, 'Technia wireless headphones - Matt black', 'IPX-4 sweat,dust Resistant design,Lithium-Ion upto 8 hours rechargable battery,equipped with CVC 6.0 technology,the bluetooth headphones reduce background noise latest bluetooth 4.1 CSR8365 technology supe IPX4 waterproof design comfortable secure fit design', '2999', 'images/headphone1.png'),
(5, 'Technia wireless gaming headphones - jet black', 'Designed for gaming with dolby surround effects\r\nIPX-4 sweat,dust Resistant design\r\nLithium-Ion upto 8 hours rechargable battery,equipped with CVC 6.0 technology\r\nthe bluetooth headphones reduce background noise latest bluetooth 4.1 CSR8365 technology supe IPX4 waterproof design comfortable secure fit design', '4999', 'images/headphone2.png'),
(6, 'Technia airpods with charging case', 'the new Airpods combine intellignet design with breakthrough technology and crystal clear sound.powered by the new H1 headphones chip\r\nautomatically on,automatically connected\r\ndual beaming microphones\r\ndual optical sensors\r\nmotion detecting acelerometer', '15999', 'images/headphone3.png'),
(7, 'Technia bluetooth multiroom speaker', 'compact to look,but its sound is nothing short of large.\r\nconnect wirelessly either to spotify connect,airplay and also to a 3.5mm jack\r\nperfect to small places,fit almost at any place\r\nbluetooth 4.1 technology\r\nLithium-Ion battery with a battery blackup of 8 hours, 12 hours in standby.\r\nnoise surround technology\r\n', '6999', 'images/speaker1.png'),
(8, 'Technia bluetooth speaker', 'Compact to look,but its sound is nothing short of large. connect wirelessly either to spotify connect,airplay and also to a 3.5mm jack perfect to small places,fit almost at any place bluetooth 4.1 technology Lithium-Ion battery with a battery blackup of 8 hours, 12 hours in standby. noise surround technology', '4999', 'images/speaker3.png'),
(9, 'Technia bluetooth mini speaker', 'Compact to look,but its sound is nothing short of large. 3.5mm jack available for wired connection. perfect to small places,fit almost at any place bluetooth 4.1 technology Lithium-Ion battery with a battery blackup of 4 hours, 8 hours in standby. noise surround technology', '1999', 'images/speaker2.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
