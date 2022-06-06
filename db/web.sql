-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 22-06-06 19:21
-- 서버 버전: 10.4.21-MariaDB
-- PHP 버전: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `web`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `bigCategory`
--

CREATE TABLE `bigCategory` (
  `bigCategory` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `bigCategory`
--

INSERT INTO `bigCategory` (`bigCategory`) VALUES
('음식점'),
('술집');

-- --------------------------------------------------------

--
-- 테이블 구조 `food`
--

CREATE TABLE `food` (
  `menu` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `food`
--

INSERT INTO `food` (`menu`, `price`) VALUES
('햄버거', 5200),
('육회비빔밥', 8500),
('국밥', 7500);

-- --------------------------------------------------------

--
-- 테이블 구조 `smallCategory`
--

CREATE TABLE `smallCategory` (
  `smallCategory` text NOT NULL,
  `pic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `smallCategory`
--

INSERT INTO `smallCategory` (`smallCategory`, `pic`) VALUES
('피자', 'pizza.jpg'),
('햄버거', 'hamburger.jpg'),
('국밥', 'gukbap.jpg'),
('비빔밥', 'bibimbap.jpg'),
('샌드위치', 'sandwich.jpg'),
('분식', 'snackbar.jpg'),
('중국집', 'jajang.jpg'),
('라멘', 'ramen.jpg'),
('부리또', 'burito.jpg'),
('파스타', 'pasta.jpg'),
('돈까스', 'dongas.jpg'),
('마타랑', 'maratang.jpg'),
('찜닭', 'jjimdak.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `store`
--

CREATE TABLE `store` (
  `name` text NOT NULL,
  `tel` text NOT NULL,
  `time` text NOT NULL,
  `address` text NOT NULL,
  `pic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `store`
--

INSERT INTO `store` (`name`, `tel`, `time`, `address`, `pic`) VALUES
('도스마스', '070-4216-9347', '10:00 ~ 22:30', '대전 대덕구 한남로12번길 55 2층', 'dosmas.jpg'),
('맘스터치', '042-626-9998', '10:00 ~ 21:30', '대전 대덕구 한남로12번길 43', 'momstouch.jpg'),
('한솥도시락', '042-627-2612', '00:00 ~ 00:00', '대전 대덕구 한남로12번길 35', 'hansot.jpg'),
('씨멘트', '042-341-7945', '11:30 ~ 21:00', '대전 대덕구 한남로12번길 21', 'siment.jpg'),
('로충칭마라탕', '0507-1354-8088', '10:30 ~ 22:00', '대전 대덕구 한남로12번길 29 2층', 'lochungching.jpg'),
('육회본가', '042-637-7824', '00:00 ~ 00:00', '대전 대덕구 한남로12번길 19', 'sixtimesbonga.jpg'),
('내가찜한닭', '0507-1411-1355', '10:00 ~ 22:00', '대전 대덕구 한남로12번길 11', 'mydak.jpg'),
('써브웨이', '042-621-6213', '08:00 ~ 23:00', '대전 한남로25번길 5', 'subway.jpg'),
('롯데리아', '042-639-2445', '00:00 ~ 00:00', '대전 대덕구 한남로 28', 'lotteria.jpg'),
('스바라시라멘', '042-623-6555', '11:00 ~ 21:30', '대전 대덕구 한남로 26', 'ramen1.jpg'),
('정다함돈가스', '042-672-0988', '00:00 ~ 00:00', '대전 대덕구 한남로12번기 33 한남빌딩 1층', 'jungdaham.jpg'),
('신가네 매운떡볶이', '0507-1346-6339', '10:00 ~ 21:00', '대전 대덕구 한남로12번길 29 1층', 'singanae.jpg'),
('동대문엽기떡볶이', '042-321-8592', '00:00 ~ 00:00', '대전 대덕구 한남로12번길 21 2층', 'yupky.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
