-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2022 at 07:08 PM
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
  `name_food` varchar(15) NOT NULL,
  `price_food` int(11) NOT NULL,
  `pic_food` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_store`
--

INSERT INTO `food_store` (`store`, `name_food`, `price_food`, `pic_food`) VALUES
('내가찜한닭', '고추장찜닭(뼈)(대)', 33000, NULL),
('내가찜한닭', '고추장찜닭(뼈)(소)', 17000, NULL),
('내가찜한닭', '고추장찜닭(뼈)(중)', 25000, NULL),
('내가찜한닭', '순살고추장찜닭(대)', 34000, NULL),
('내가찜한닭', '순살고추장찜닭(소)', 18000, NULL),
('내가찜한닭', '순살고추장찜닭(중)', 26000, NULL),
('내가찜한닭', '순살안동찜닭(대)', 34000, NULL),
('내가찜한닭', '순살안동찜닭(소)', 18000, NULL),
('내가찜한닭', '순살안동찜닭(중)', 26000, NULL),
('내가찜한닭', '안동찜닭(뼈)(대)', 33000, NULL),
('내가찜한닭', '안동찜닭(뼈)(소)', 17000, NULL),
('내가찜한닭', '안동찜닭(뼈)(중)', 25000, NULL),
('내가찜한닭', '치즈순살찜닭(대)', 37000, NULL),
('내가찜한닭', '치즈순살찜닭(소)', 21000, NULL),
('내가찜한닭', '치즈순살찜닭(중)', 29000, NULL),
('도스마스', '부리또', 4500, NULL),
('도스마스', '부리또+음료', 5500, NULL),
('도스마스', '부리또+음료+튀김', 7500, NULL),
('동대문엽기떡볶이', '로제메뉴', 16000, NULL),
('동대문엽기떡볶이', '엽기닭볶음탕', 24000, NULL),
('동대문엽기떡볶이', '엽기메뉴', 14000, NULL),
('동대문엽기떡볶이', '크림메뉴', 15000, NULL),
('로충칭마라탕', '꽃빵(6개)', 3000, NULL),
('로충칭마라탕', '마라샹궈(기본)', 20000, NULL),
('로충칭마라탕', '마라탕(기본)', 10000, NULL),
('롯데리아', 'AZ버거오리지널', 7200, NULL),
('롯데리아', 'NEW모짜렐라인더버거세트', 6900, NULL),
('롯데리아', 'NEW모짜렐라인더버거해쉬세트', 6100, NULL),
('롯데리아', 'NEW한우불고기 세트', 8200, NULL),
('롯데리아', '트위스트감자', 2000, NULL),
('맘스터치', '디럭스불고기버거', 4300, NULL),
('맘스터치', '딥치즈버거', 4300, NULL),
('맘스터치', '불고기버거', 3300, NULL),
('맘스터치', '불싸이버거', 4200, NULL),
('맘스터치', '살사리코버거', 4800, NULL),
('맘스터치', '싸이버거', 4100, NULL),
('맘스터치', '언빌리버블버거', 5400, NULL),
('맘스터치', '인크레더블버거', 5200, NULL),
('맘스터치', '치즈베이컨버거', 4800, NULL),
('맘스터치', '할라피뇨통살버거', 4200, NULL),
('맘스터치', '휠렛버거', 3900, NULL),
('스바라시라멘', '돈코츠라멘', 9000, NULL),
('스바라시라멘', '미소라멘', 8500, NULL),
('스바라시라멘', '쇼유라멘', 8500, NULL),
('스바라시라멘', '스바라시라멘', 9500, NULL),
('스바라시라멘', '오코노미야끼', 10000, NULL),
('스바라시라멘', '해물미소라멘', 9500, NULL),
('신가네 매운떡볶이', '55모둠튀김', 6500, NULL),
('신가네 매운떡볶이', '구운계란 2개', 1500, NULL),
('신가네 매운떡볶이', '떡볶이', 3500, NULL),
('신가네 매운떡볶이', '빨간김밥', 2500, NULL),
('신가네 매운떡볶이', '스팸마요', 4000, NULL),
('신가네 매운떡볶이', '참치김밥', 3000, NULL),
('신가네 매운떡볶이', '참치마요', 4000, NULL),
('신가네 매운떡볶이', '치즈김밥', 3000, NULL),
('신가네 매운떡볶이', '치즈떡볶이', 4500, NULL),
('신가네 매운떡볶이', '치즈토핑(1인분)', 1000, NULL),
('신가네 매운떡볶이', '치킨마요', 4000, NULL),
('신가네 매운떡볶이', '쿨피스', 2000, NULL),
('써브웨이', '로스트 치킨 아보카도', 9900, NULL),
('써브웨이', '로티세리 바비큐 치킨', 8600, NULL),
('써브웨이', '배지 아보카도', 7600, NULL),
('써브웨이', '쉬림프', 8400, NULL),
('써브웨이', '스테이크&치즈', 9100, NULL),
('써브웨이', '써브웨이 클럽', 8400, NULL),
('써브웨이', '에그마요', 6800, NULL),
('써브웨이', '이탈리안 비엠티', 7900, NULL),
('써브웨이', '터키베이컨 아보카도', 9100, NULL),
('써브웨이', '풀드포크 바비큐', 8500, NULL),
('씨멘트', '매운 불고기 토마토리조또', 8500, NULL),
('씨멘트', '매운 불고기 토마토파스타', 8500, NULL),
('씨멘트', '매운 해물 토마토리조또', 8500, NULL),
('씨멘트', '매운 해물 토마토파스타', 8500, NULL),
('씨멘트', '매콤 크림 불고기리조또', 8500, NULL),
('씨멘트', '맥앤치즈 피자', 11000, NULL),
('씨멘트', '베이컨 크림 치즈리조또', 8500, NULL),
('씨멘트', '베이컨 크림 파스타', 8500, NULL),
('씨멘트', '청양불고기 피자', 11000, NULL),
('씨멘트', '페퍼로니 피자', 10000, NULL),
('씨멘트', '페퍼로니/포테이토 반반피자', 11500, NULL),
('씨멘트', '포테이토 피자', 10500, NULL),
('씨멘트', '해물 크림 파스타', 8500, NULL),
('육회본가', '묵은지 갈비찜(소)', 22000, NULL),
('육회본가', '묵은지 갈비찜(중)', 31000, NULL),
('육회본가', '양푼이 갈비찜(소)', 22000, NULL),
('육회본가', '양푼이 갈비찜(중)', 31000, NULL),
('육회본가', '육회비빔밥(단품)', 8000, NULL),
('육회본가', '육회비빔밥(세트)', 9000, NULL),
('육회본가', '한우육사시미', 23000, NULL),
('육회본가', '한우육회', 20000, NULL),
('한솥도시락', '김치볶음밥', 3900, NULL),
('한솥도시락', '빅치킨마요', 4100, NULL),
('한솥도시락', '스팸김치볶음밥', 4700, NULL),
('한솥도시락', '스팸철판볶음밥', 4500, NULL),
('한솥도시락', '오리지널 치즈 닭갈비 덮밥', 5900, NULL),
('한솥도시락', '왕치킨마요', 4800, NULL),
('한솥도시락', '착한솥수저세트+진달래', 15500, NULL),
('한솥도시락', '참치마요', 3200, NULL),
('한솥도시락', '치킨마요', 3500, NULL),
('한솥도시락', '핫 치즈 닭갈비 덮밥', 5900, NULL);

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
  ADD PRIMARY KEY (`store`,`name_food`);

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
