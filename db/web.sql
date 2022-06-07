-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2022 at 04:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category` varchar(5) NOT NULL,
  `pic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`, `pic`) VALUES
('국밥', 'gukbap.jpg'),
('돈까스', 'dongas.jpg'),
('라멘', 'ramen.jpg'),
('마라탕', 'maratang.jpg'),
('부리또', 'burito.jpg'),
('분식', 'snackbar.jpg'),
('비빔밥', 'bibimbap.jpg'),
('샌드위치', 'sandwich.jpg'),
('중국집', 'jajang.jpg'),
('찜닭', 'jjimdak.jpg'),
('파스타', 'pasta.jpg'),
('피자', 'pizza.jpg'),
('햄버거', 'hamburger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food_store`
--

CREATE TABLE `food_store` (
  `store` varchar(10) NOT NULL,
  `name_food` varchar(10) NOT NULL,
  `price_food` int(11) NOT NULL,
  `pic_food` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_store`
--

INSERT INTO `food_store` (`store`, `name_food`, `price_food`, `pic_food`) VALUES
('롯데리아', '불고기버거', 4500, '');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store` varchar(10) NOT NULL,
  `tel` text NOT NULL,
  `time` text NOT NULL,
  `address` text NOT NULL,
  `pic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store`, `tel`, `time`, `address`, `pic`) VALUES
('내가찜한닭', '0507-1411-1355', '10:00 ~ 22:00', '대전 대덕구 한남로12번길 11', 'mydak.jpg'),
('도스마스', '070-4216-9347', '10:00 ~ 22:30', '대전 대덕구 한남로12번길 55 2층', 'dosmas.jpg'),
('동대문엽기떡볶이', '042-321-8592', '00:00 ~ 00:00', '대전 대덕구 한남로12번길 21 2층', 'yupky.jpg'),
('로충칭마라탕', '0507-1354-8088', '10:30 ~ 22:00', '대전 대덕구 한남로12번길 29 2층', 'lochungching.jpg'),
('롯데리아', '042-639-2445', '00:00 ~ 00:00', '대전 대덕구 한남로 28', 'lotteria.jpg'),
('맘스터치', '042-626-9998', '10:00 ~ 21:30', '대전 대덕구 한남로12번길 43', 'momstouch.jpg'),
('스바라시라멘', '042-623-6555', '11:00 ~ 21:30', '대전 대덕구 한남로 26', 'ramen1.jpg'),
('신가네 매운떡볶이', '0507-1346-6339', '10:00 ~ 21:00', '대전 대덕구 한남로12번길 29 1층', 'singanae.jpg'),
('써브웨이', '042-621-6213', '08:00 ~ 23:00', '대전 한남로25번길 5', 'subway.jpg'),
('씨멘트', '042-341-7945', '11:30 ~ 21:00', '대전 대덕구 한남로12번길 21', 'siment.jpg'),
('육회본가', '042-637-7824', '00:00 ~ 00:00', '대전 대덕구 한남로12번길 19', 'sixtimesbonga.jpg'),
('정다함돈가스', '042-672-0988', '00:00 ~ 00:00', '대전 대덕구 한남로12번기 33 한남빌딩 1층', 'jungdaham.jpg'),
('한솥도시락', '042-627-2612', '00:00 ~ 00:00', '대전 대덕구 한남로12번길 35', 'hansot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `store_category`
--

CREATE TABLE `store_category` (
  `category` varchar(5) NOT NULL,
  `store` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_category`
--

INSERT INTO `store_category` (`category`, `store`) VALUES
('돈까스', '정다함돈가스'),
('라멘', '스바라시라멘'),
('마라탕', '로충칭마라탕'),
('부리또', '도스마스'),
('분식', '동대문엽기떡볶이'),
('분식', '신가네 매운떡볶이'),
('분식', '한솥도시락'),
('비빔밥', '육회본가'),
('샌드위치', '써브웨이'),
('찜닭', '내가찜한닭'),
('파스타', '씨멘트'),
('햄버거', '롯데리아'),
('햄버거', '맘스터치');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `food_store`
--
ALTER TABLE `food_store`
  ADD PRIMARY KEY (`name_food`),
  ADD KEY `food_store_FK` (`store`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store`);

--
-- Indexes for table `store_category`
--
ALTER TABLE `store_category`
  ADD PRIMARY KEY (`store`),
  ADD KEY `store_category_FK` (`category`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_store`
--
ALTER TABLE `food_store`
  ADD CONSTRAINT `food_store_FK` FOREIGN KEY (`store`) REFERENCES `store` (`store`);

--
-- Constraints for table `store_category`
--
ALTER TABLE `store_category`
  ADD CONSTRAINT `store_category_FK` FOREIGN KEY (`category`) REFERENCES `category` (`category`),
  ADD CONSTRAINT `store_category_FK_1` FOREIGN KEY (`store`) REFERENCES `store` (`store`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
