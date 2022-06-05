-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 22-06-05 14:58
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
('분식', 'snackbar.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `store`
--

CREATE TABLE `store` (
  `name` text NOT NULL,
  `tel` text NOT NULL,
  `time` text NOT NULL,
  `address` text NOT NULL,
  `posX` float NOT NULL,
  `posY` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
