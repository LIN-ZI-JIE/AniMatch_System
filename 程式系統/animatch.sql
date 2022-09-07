-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-01-06 16:02:58
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `animatch`
--

-- --------------------------------------------------------

--
-- 資料表結構 `adopter`
--

CREATE TABLE `adopter` (
  `member_ID` int(11) NOT NULL,
  `account` varchar(20) NOT NULL,
  `adoption_times` varchar(11) DEFAULT NULL,
  `name` varchar(5) DEFAULT NULL,
  `id_card` varchar(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `adopter_sex` varchar(2) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `feeding_place` text DEFAULT NULL,
  `space` int(10) DEFAULT NULL,
  `income` varchar(20) DEFAULT NULL,
  `available_time` text DEFAULT NULL,
  `animal_species` text DEFAULT NULL,
  `animal_number` int(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `cohabitation` text DEFAULT NULL,
  `adopter_photo` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `adopter_remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `adopter`
--

INSERT INTO `adopter` (`member_ID`, `account`, `adoption_times`, `name`, `id_card`, `birthday`, `adopter_sex`, `tel`, `feeding_place`, `space`, `income`, `available_time`, `animal_species`, `animal_number`, `address`, `cohabitation`, `adopter_photo`, `email`, `adopter_remark`) VALUES
(1, '1061241105', '3', '何佳佳', 'S288100901', '1990-08-06', '女', '0956237846', '公寓', 25, '70000-80000', '下午1點到晚上10點', '貓.狗', 3, '高雄市楠梓區瑞仁路76巷26號', '自住', '', '1061241105@nkust.edu.tw', ''),
(2, '1061241111', '1', '吳羿妏', 'E225951513', '1998-10-25', '女', '0913141525', '公寓', 25, '10000-20000', '晚上6點後', '貓', 1, '高雄市楠梓區海專路142號', '與家人同居', 'image/house/02.jpg', '1061241111@nkust.edu.tw', ''),
(3, '1061241123', '2', '洪孟琪', 'L225080509', '1999-05-04', '女', '0925645887', '透天厝', 40, '100-10000', '14:00-16:00', '三線鼠，銀狐', 2, '台中市大甲區日南里中山路791號', '跟家人同住', 'image/house/03.png', '1061241123@nkust.edu.tw', ''),
(4, '1061241128', '5', '陳又瑄', 'S226797421', '1998-11-09', '女', '0927491365', '透天厝', 40, '50000', '下午5:00以後', '貓', 5, '高雄市大寮區', '家人同住', 'image/house/04.jpg', '1061241128@nkust.edu.tw', ''),
(5, '1061241151', '5', '李茂仁', 'A124521390', '1979-12-31', '男', '0988254125', '自家', 5, '30000~35000', '早上7點後', '狗、貓、魚', 6, '台北市大安區仁愛路312號', '一人居住', 'image/house/05.jpg', '1061241151@nkust.edu.tw', '');

-- --------------------------------------------------------

--
-- 資料表結構 `adopter_photo`
--

CREATE TABLE `adopter_photo` (
  `adopter_photoID` int(11) NOT NULL,
  `member_ID` int(11) NOT NULL,
  `adopter_filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `adopter_photo`
--

INSERT INTO `adopter_photo` (`adopter_photoID`, `member_ID`, `adopter_filename`) VALUES
(1, 1, 'image/house/01.jpg'),
(2, 1, 'image/house/02.png'),
(3, 1, 'image/house/03.png'),
(4, 2, 'image/house/04.jpg'),
(5, 2, 'image/house/05.jpg'),
(6, 3, 'image/house/06.jpg'),
(7, 3, 'image/house/07.jpg'),
(8, 4, 'image/house/08.jpg'),
(9, 4, 'image/house/09.jpg'),
(10, 5, 'image/house/10.jpg'),
(11, 5, 'image/house/11.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `adopter_stray`
--

CREATE TABLE `adopter_stray` (
  `pet_ID` int(11) NOT NULL,
  `adopter_ID` int(11) NOT NULL,
  `adopter_will` tinyint(1) DEFAULT NULL,
  `stray_ID` int(11) NOT NULL,
  `stray_agree` tinyint(1) DEFAULT NULL,
  `stray_disagree` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `adopter_stray`
--

INSERT INTO `adopter_stray` (`pet_ID`, `adopter_ID`, `adopter_will`, `stray_ID`, `stray_agree`, `stray_disagree`) VALUES
(1, 2, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `animal_photo`
--

CREATE TABLE `animal_photo` (
  `animal_photoID` int(11) NOT NULL,
  `member_ID` int(11) NOT NULL,
  `pet_ID` int(11) NOT NULL,
  `animal_filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `animal_photo`
--

INSERT INTO `animal_photo` (`animal_photoID`, `member_ID`, `pet_ID`, `animal_filename`) VALUES
(1, 1, 1, 'image/animal/01.jpg'),
(2, 1, 1, 'image/animal/02.jpg'),
(3, 1, 1, 'image/animal/03.jpg'),
(4, 1, 1, 'image/animal/04.jpg'),
(5, 1, 2, 'image/animal/05.jpg'),
(6, 1, 2, 'image/animal/06.jpg'),
(7, 4, 3, 'image/animal/07.jpg'),
(8, 4, 3, 'image/animal/08.jpg'),
(9, 1, 4, 'image/animal/09.jpg'),
(10, 1, 4, 'image/animal/10.jpg'),
(11, 4, 5, 'image/animal/11.jpg'),
(12, 4, 5, 'image/animal/12.jpg'),
(16, 1, 6, 'image/animal/22.jpg'),
(17, 1, 6, 'image/animal/23.jpg'),
(18, 1, 6, 'image/animal/24.jpg'),
(19, 4, 7, 'image/animal/25.jpg'),
(20, 4, 7, 'image/animal/26.jpg'),
(21, 4, 7, 'image/animal/27.jpg'),
(22, 4, 8, 'image/animal/28.jpg'),
(23, 4, 8, 'image/animal/29.jpg'),
(24, 4, 8, 'image/animal/30.jpg'),
(27, 4, 9, 'image/animal/31.jpg'),
(28, 3, 12, 'image/animal/32.jpg'),
(29, 2, 13, 'image/animal/33.jpg'),
(30, 2, 14, 'image/animal/34.jpg'),
(31, 4, 15, 'image/animal/35.jpg'),
(32, 2, 16, 'image/animal/36.jpg'),
(33, 2, 13, 'image/animal/40.jpg'),
(34, 3, 17, 'image/animal/37.jpg'),
(35, 3, 18, 'image/animal/38.jpg'),
(36, 3, 18, 'image/animal/41.jpg'),
(37, 4, 19, 'image/animal/39.jpg'),
(38, 3, 20, 'image/animal/42.jpg'),
(39, 3, 20, 'image/animal/43.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `animal_shelter`
--

CREATE TABLE `animal_shelter` (
  `member_ID` int(11) NOT NULL,
  `company_name` text NOT NULL,
  `introduction` text NOT NULL,
  `name` varchar(5) NOT NULL,
  `id_card` varchar(10) NOT NULL,
  `birthday` date DEFAULT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `stray_remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `animal_shelter`
--

INSERT INTO `animal_shelter` (`member_ID`, `company_name`, `introduction`, `name`, `id_card`, `birthday`, `tel`, `email`, `stray_remark`) VALUES
(1, '流浪狗中途之家', '流浪犬中途之家本於「動物保護法」－尊重動物生命，關懷動物福利，落實動物保護之精神，善盡社會教育功能，宣導民眾發揮愛心以領養代替購買，以積極送養取代消極收容，儘量讓適合民眾領養之收容犬於辦妥寵物登記、狂犬病預防注射及絕育手術後回歸人類家庭懷抱，增進中途之家收容效能，重建人類與動物間之和諧關係，消彌暴戾之氣，維護社會祥和。', '何佳佳', 'S288100901', '1990-08-06', '0956237846', '1061241105@nkust.edu.tw', ''),
(4, '流浪貓中途之家', '本會希望能打破社會大眾對於品種的迷思，因此以米克斯(MIX、混種)的諧音命名，以及透過誘捕、\r\n結紮、原放、中途、送養(TNVR)等改善流浪動物數量，因此設立臺灣咪可思關懷動物協會；期望除了提供流浪動物舒適安全的中途空間外，並向社會大眾宣導認養代替購買以及領養後不棄養的觀念。', '陳又瑄', 'S226797421', '1998-11-09', '0927491365', '1061241128@nkust.edu.tw', '');

-- --------------------------------------------------------

--
-- 資料表結構 `appearance`
--

CREATE TABLE `appearance` (
  `appearance_ID` varchar(20) NOT NULL,
  `appearance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `appearance`
--

INSERT INTO `appearance` (`appearance_ID`, `appearance`) VALUES
('3000', '長毛'),
('3001', '短毛'),
('3002', '黑色'),
('3003', '白色'),
('3004', '棕色'),
('3005', '土色'),
('3006', '米色'),
('3007', '金毛'),
('3008', '灰毛'),
('3009', '橘毛'),
('3010', '混色');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `member_ID` int(11) NOT NULL,
  `nickname` varchar(12) DEFAULT NULL,
  `account` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `adopter` tinyint(1) DEFAULT NULL,
  `animal_shelter` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`member_ID`, `nickname`, `account`, `password`, `adopter`, `animal_shelter`) VALUES
(1, '佳佳', '1061241105', 'a1061241105', 1, 1),
(2, '蚊子', '1061241111', 'a1061241111', 1, 0),
(3, '奇奇', '1061241123', 'a1061241123', 1, 0),
(4, '小萱', '1061241128', 'a1061241128', 1, 1),
(5, '阿傑', '1061241151', 'a1061241151', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `titles_ID` int(11) NOT NULL,
  `message_ID` int(11) NOT NULL,
  `member_ID` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `message_time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`titles_ID`, `message_ID`, `member_ID`, `message_content`, `message_time`) VALUES
(1, 1, 2, '經常、幫我開電視播音樂等等', '2020-09-01 17:07:02'),
(1, 2, 5, '被我家貓咪關過然後就開不開了哈哈哈哈', '2020-09-01 17:07:02'),
(2, 3, 1, '很多人都自己養， 或是送朋友，也可能賣掉', '2020-11-16 11:52:24'),
(2, 4, 3, '聽說是不合法的，所以最好是合法領養。', '2020-11-16 11:52:38'),
(2, 5, 4, '民眾要私繁要看有沒有申請吧，沒申請是違法\r\n\r\n大多會申請的應該是想留個後代\r\n其它的可能就非法買賣', '2020-11-16 11:52:38'),
(3, 6, 1, '會唷～每天都會帶狗狗去溜溜，一天不去還會叫因為習慣了', '2020-11-16 11:52:38'),
(4, 7, 2, '嘗試混著比例用看看 現在市面上的款式眾多，真的不行就再換別種吧，像我家的就熱愛尿廁所磁磚地，所以盆就擺在那當裝飾用了（以前用會的說，不知道哪時自學了，怕主子突然回心轉意所以還是擺著只是沙量減少了些避免潮濕）', '2020-11-16 11:52:38'),
(4, 8, 4, '我家的只用礦砂\r\n\r\n也有換過豆腐沙\r\n\r\n結果狂尿在床上\r\n', '2020-11-16 11:52:38');

-- --------------------------------------------------------

--
-- 資料表結構 `recommend`
--

CREATE TABLE `recommend` (
  `member_ID` int(11) NOT NULL,
  `variety_ID` varchar(20) NOT NULL,
  `variety_click` int(20) NOT NULL,
  `appearance_ID` varchar(20) NOT NULL,
  `appearance_click` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `recommend`
--

INSERT INTO `recommend` (`member_ID`, `variety_ID`, `variety_click`, `appearance_ID`, `appearance_click`) VALUES
(1, '1004', 3, '3003', 1),
(1, '1101', 2, '3007', 2),
(1, '2001', 3, '3002', 3),
(1, '2003', 2, '3003', 4),
(2, '1101', 3, '3007', 4),
(2, '2001', 4, '3009', 3),
(2, '2003', 1, '3003', 5),
(4, '1101', 1, '3007', 3),
(4, '2001', 1, '3002', 2),
(5, '1004', 3, '3003', 5),
(5, '1101', 5, '3007', 4),
(5, '2001', 8, '3009', 7);

-- --------------------------------------------------------

--
-- 資料表結構 `search`
--

CREATE TABLE `search` (
  `search_ID` int(11) NOT NULL,
  `animal_nickname` varchar(20) NOT NULL,
  `appearance` varchar(20) NOT NULL,
  `variety` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `search`
--

INSERT INTO `search` (`search_ID`, `animal_nickname`, `appearance`, `variety`) VALUES
(1, '小花', '白色', '米克斯'),
(2, '小黃', '金毛', '米克斯'),
(3, '小白', '白色', '馬爾濟斯'),
(4, '小胖', '白色', '米克斯'),
(5, '小黑', '橘毛', '米克斯');

-- --------------------------------------------------------

--
-- 資料表結構 `stray_animals`
--

CREATE TABLE `stray_animals` (
  `pet_ID` int(11) NOT NULL COMMENT '1',
  `member_ID` int(11) NOT NULL,
  `animal_nickname` varchar(20) NOT NULL,
  `animal_sex` varchar(3) NOT NULL,
  `animal_category` varchar(10) NOT NULL,
  `animal_variety` varchar(10) NOT NULL,
  `variety_ID` varchar(20) DEFAULT NULL,
  `age` varchar(10) NOT NULL,
  `weight` float NOT NULL,
  `microchip` varchar(20) NOT NULL,
  `found_location` text NOT NULL,
  `shelter_location` text NOT NULL,
  `feature` text NOT NULL,
  `appearance_ID` varchar(20) DEFAULT NULL,
  `health` text NOT NULL,
  `vaccine` text NOT NULL,
  `neuter` varchar(3) NOT NULL,
  `diet` text NOT NULL,
  `animal_photo` varchar(30) NOT NULL,
  `discovered` date NOT NULL,
  `adopt` varchar(30) NOT NULL,
  `adopter_ID` int(11) DEFAULT NULL,
  `updated` date NOT NULL,
  `animal_remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `stray_animals`
--

INSERT INTO `stray_animals` (`pet_ID`, `member_ID`, `animal_nickname`, `animal_sex`, `animal_category`, `animal_variety`, `variety_ID`, `age`, `weight`, `microchip`, `found_location`, `shelter_location`, `feature`, `appearance_ID`, `health`, `vaccine`, `neuter`, `diet`, `animal_photo`, `discovered`, `adopt`, `adopter_ID`, `updated`, `animal_remark`) VALUES
(1, 1, '小花', '母', '貓', '英國短毛貓', '2003', '2個月', 0.8, 'AAAFG1090907001', '淡水區', '新北市淡水區下圭柔山91之3號', '虎斑白', '3003', '健康、未確定是否結紮', '三合一疫苗，狂犬病疫苗，驅蟲', '未確定', '無', 'image/animal/01.jpg', '2020-09-07', '可領養', 0, '2020-09-07', ''),
(2, 1, '小黃', '公', '犬', '米克斯', '1101', '3歲5個月', 2.4, '無', '政府捕捉', '宜蘭縣五結鄉成興村利寶路60號', '黃色', '3007', '健康', '無', '是', '無', 'image/animal/02.jpg', '2020-09-07', '可領養', 0, '2020-09-07', ''),
(3, 4, '小白', '公', '犬', '黃金獵犬', '1004', '1歲2個月', 1.3, '無', '浮洲運動公園', '新北市板橋區板城路28-1號', '白色', '3003', '輕微白內障', '無', '否', '無', 'image/animal/03.jpg', '2020-09-07', '已領養', 1, '2020-09-07', ''),
(4, 1, '小胖', '母', '貓', '米克斯', '2001', '1歲6個月', 2.6, '無', '板橋區(認養後退回)', '新北市板橋區板城路28-1號', '黑白', '3002', '健康', '無', '是', '喜好乾食', 'image/animal/04.jpg', '2020-09-05', '已領養', 2, '2020-09-07', ''),
(5, 4, '小黑', '公', '貓', '米克斯', '2001', '1歲8個月', 2.5, '無', '添福路14-13號', '新北市板橋區板城路28-1號', '橘色', '3009', '健康', '三合一疫苗，狂犬病疫苗，驅蟲', '是', '不愛喝水', 'image/animal/05.jpg', '2020-09-05', '可領養', 0, '2020-09-07', ''),
(6, 1, '捲捲', '母', '貓', '米克斯', '2001', '3歲', 3.2, '無', '都會公園', '高雄市楠梓區會封街99號', '黑色', '3002', '健康', '驅蟲', '是', '喜好乾食', 'image/animal/22.jpg', '2020-04-09', '可領養', 0, '2020-08-05', NULL),
(7, 4, '塔塔', '公', '貓', '米克斯', '2001', '2歲11月', 2.7, '無', '大甲區', '台中市大甲區青年路89號', '橘色', '3009', '健康', '驅蟲，三合一疫苗', '是', '不愛喝水', 'image/animal/23.jpg', '2020-03-17', '已領養', 3, '2020-10-22', NULL),
(8, 4, '餅餅', '公', '貓', '米克斯', '2001', '2歲9個月', 3.2, '無', '三民區', '高雄市三民區自由一路90號', '混色', '3010', '健康', '驅蟲', '是', '無', 'image/animal/27.jpg', '2019-11-08', '已領養', 3, '2020-11-04', NULL),
(9, 4, '小狼', '公', '犬', '德國牧羊犬', '1007', '3歲2個月', 2.1, '無', '小港區', '高雄市鼓山區萬壽路350號', '棕黑色', '3010', '健康', '驅蟲，狂犬病疫苗', '是', '無', 'image/animal/31.jpg', '2020-11-01', '可領養', 0, '2020-11-14', NULL),
(12, 3, '咖啡', '母', '貓', '英國短毛貓', '2003', '1個月', 0.5, 'AAAFG1090716001', '淡水區', '新北市淡水區下圭柔山91之3號', '虎斑棕', '3004', '健康', '三合一疫苗、驅蟲', '否', '無', 'image/animal/32.ipg', '2020-07-16', '可領養', 0, '2020-07-21', NULL),
(13, 2, '腸腸', '公', '犬', '臘腸犬', '1207', '4個月', 0.7, 'LAAAG1090716C2', '小港區', '高雄市燕巢區師大路98號', '棕黑色', '3010', '健康', '狂犬病疫苗', '是', '喜好乾食', 'image/animal/33.jpg', '2020-07-17', '可領養', 0, '2020-07-23', NULL),
(14, 2, '多多', '公', '貓', '英國短毛貓', '2003', '1歲5個月', 0.8, 'AAAEG1090716005', '中和區', '新北市中和區興南路三段100號', '虎斑白', '3003', '健康', '三合一疫苗', '是', '無', 'image/animal/34.jpg', '2020-08-13', '可領養', 0, '2020-08-19', NULL),
(15, 4, '阿金', '公', '犬', '黃金獵犬', '1004', '2歲1個月', 3, 'DAAAG1090717002', '關西鎮', '新竹縣竹北市縣政五街192號', '黃色', '3007', '健康', '狂犬病疫苗、驅蟲', '是', '無', 'image/animal/35.jpg', '2020-09-08', '可領養', 0, '2020-09-17', NULL),
(16, 2, '小虎', '公', '貓', '米克斯', '2001', '2個月', 0.4, 'AAADG2020072004', '樹林區', '新北市板橋區板城路28-1號', '棕黑色', '3010', '健康', '驅蟲', '否', '無', 'image/animal/36.jpg', '2020-10-01', '可領養', 0, '2020-10-06', NULL),
(17, 3, '橘子', '母', '貓', '米克斯', '2001', '2歲', 1.5, 'AAAFG1090716001', '淡水區', '新北市淡水區下圭柔山91之3號', '橘白色', '3009', '健康', '驅蟲、三合一疫苗', '是', '無', 'image/animal/37.jpg', '2020-09-23', '可領養', 0, '2020-09-29', NULL),
(18, 3, '阿巴', '公', '犬', '巴哥', '1217', '1歲8個月', 1.8, 'OAAAG1090710002', '秀林鄉', '花蓮縣吉安鄉南濱路1段599號', '米色', '3006', '健康', '三合一疫苗、狂犬病疫苗', '是', '無', 'image/animal/38.jpg', '2020-09-28', '可領養', 0, '2020-10-05', NULL),
(19, 4, '古錐', '公', '犬', '柯基', '1212', '2歲8個月', 2.6, 'W090716-09', '中西區', '臺南市南區省躬里14鄰萬年路580巷92號', '橘白色', '3009', '健康', '狂犬病疫苗', '是', '喜好乾食', 'image/animal/39.jpg', '2020-10-03', '可領養', 0, '2020-10-12', NULL),
(20, 3, '阿牧', '公', '犬', '邊境牧羊犬', '1103', '2歲4個月', 2.6, 'LAABG109071408', '茄萣區', '高雄市燕巢區師大路98號', '黑白色', '3010', '健康', '狂犬病疫苗、驅蟲', '是', '無', 'image/animal/42.jpg', '2020-09-26', '可領養', 0, '2020-10-08', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `titles`
--

CREATE TABLE `titles` (
  `titles_ID` int(11) NOT NULL,
  `titles` varchar(255) NOT NULL,
  `member_ID` int(11) NOT NULL,
  `titles_content` text NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `final_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `message_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `titles`
--

INSERT INTO `titles` (`titles_ID`, `titles`, `member_ID`, `titles_content`, `start_time`, `final_date`, `message_number`) VALUES
(1, '【問題】大家有被寵物關電腦的經驗嗎?', 1, '大家有被寵物關電腦的經驗嗎?最後都怎麼解決呢?', '2020-08-31 17:03:16', '2020-09-06 17:03:16', 0),
(2, '【問題】大家私自繁殖的狗狗都怎麼處理', 2, '我真的很好奇\r\n大家的狗不是會生寶寶嗎\r\n那生完之後就養在家嗎\r\n因為數量應該很多吧', '2020-09-01 17:03:50', '2020-09-06 17:03:50', 0),
(3, '【問題】大家平常都會遛狗(貓)嗎?', 4, '我們家貓貓一歲以前都沒有出過門，連去轉角打個預防針而已也沿路叫的超悽慘，後來有一次帶去參加活動，意外適應的很好，愜意地跟著我們，像狗狗一樣，於是開始了每天遛貓行程!\r\n大家也分享一下遛狗貓的經驗吧?', '2020-09-03 17:04:20', '2020-09-05 17:04:20', 0),
(4, '【問題】貓貓會挑貓砂嗎?', 5, '想給貓貓從礦砂換成豆腐砂..........兩盆放著 完全都不使用豆腐砂,該怎麼辦? qq', '2020-09-04 17:05:27', '2020-09-06 17:05:27', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `track_photo`
--

CREATE TABLE `track_photo` (
  `track_photoID` int(11) NOT NULL,
  `stray_ID` int(11) NOT NULL,
  `adopter_ID` int(11) NOT NULL,
  `pet_ID` int(11) NOT NULL,
  `track_filename` varchar(100) NOT NULL,
  `track_comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `track_photo`
--

INSERT INTO `track_photo` (`track_photoID`, `stray_ID`, `adopter_ID`, `pet_ID`, `track_filename`, `track_comment`) VALUES
(1, 4, 3, 7, 'image/track/01.jpg', ''),
(2, 4, 3, 7, 'image/track/02.jpg', ''),
(3, 4, 3, 8, 'image/track/03.jpg', ''),
(4, 4, 3, 8, 'image/track/04.jpg', ''),
(5, 1, 2, 4, 'image/track/05.jpg', ''),
(6, 1, 2, 4, 'image/track/06.jpg', '');

-- --------------------------------------------------------

--
-- 資料表結構 `variety`
--

CREATE TABLE `variety` (
  `variety_ID` varchar(20) NOT NULL,
  `variety` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `variety`
--

INSERT INTO `variety` (`variety_ID`, `variety`) VALUES
('1000', '大型犬'),
('1001', '米克斯'),
('1002', '哈士奇'),
('1003', '貴賓犬'),
('1004', '黃金獵犬'),
('1005', '薩摩耶'),
('1006', '拉不拉多'),
('1007', '德國牧羊犬'),
('1008', '藏獒'),
('1009', '秋田犬'),
('1010', '杜賓犬'),
('1011', '古代牧羊犬'),
('1012', '大型雪納瑞'),
('1100', '中型犬'),
('1101', '米克斯'),
('1102', '柴犬'),
('1103', '邊境牧羊犬'),
('1104', '鬆獅犬'),
('1105', '蝴蝶犬'),
('1106', '雪納瑞'),
('1200', '小型犬'),
('1201', '米克斯'),
('1202', '貴賓犬'),
('1203', '比熊犬'),
('1204', '吉娃娃'),
('1205', '米格魯'),
('1206', '博美犬'),
('1207', '臘腸犬'),
('1208', '西施犬'),
('1209', '馬爾濟斯'),
('1210', '比格犬'),
('1211', '迷你雪納瑞'),
('1212', '柯基'),
('1213', '約克夏'),
('1214', '迷你杜賓犬'),
('1215', '蝴蝶犬'),
('1216', '鬥牛犬'),
('1217', '巴哥'),
('1300', '幼犬'),
('2000', '成貓'),
('2001', '米克斯'),
('2002', '美國短毛貓'),
('2003', '英國短毛貓'),
('2004', '蘇格蘭折耳貓'),
('2005', '波斯貓'),
('2006', '布偶貓'),
('2007', '暹羅貓'),
('2008', '三花貓'),
('2009', '玳瑁貓'),
('2010', '緬因貓'),
('2011', '金吉拉貓'),
('2012', '安哥拉貓'),
('2013', '挪威森林貓'),
('2014', '俄羅斯藍貓'),
('2015', '孟買貓'),
('2016', '伯曼貓'),
('2017', '孟加拉貓'),
('2018', '無毛貓'),
('2100', '幼貓');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `adopter`
--
ALTER TABLE `adopter`
  ADD PRIMARY KEY (`member_ID`),
  ADD KEY `認養者帳號` (`account`);

--
-- 資料表索引 `adopter_photo`
--
ALTER TABLE `adopter_photo`
  ADD PRIMARY KEY (`adopter_photoID`),
  ADD KEY `照片會員ID` (`member_ID`);

--
-- 資料表索引 `adopter_stray`
--
ALTER TABLE `adopter_stray`
  ADD PRIMARY KEY (`pet_ID`);

--
-- 資料表索引 `animal_photo`
--
ALTER TABLE `animal_photo`
  ADD PRIMARY KEY (`animal_photoID`),
  ADD KEY `浪浪照片ID` (`pet_ID`),
  ADD KEY `浪浪照片會員ID` (`member_ID`);

--
-- 資料表索引 `animal_shelter`
--
ALTER TABLE `animal_shelter`
  ADD PRIMARY KEY (`member_ID`);

--
-- 資料表索引 `appearance`
--
ALTER TABLE `appearance`
  ADD PRIMARY KEY (`appearance_ID`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_ID`),
  ADD KEY `會員ID` (`member_ID`),
  ADD KEY `account` (`account`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_ID`),
  ADD KEY `留言會員` (`member_ID`),
  ADD KEY `留言主題` (`titles_ID`);

--
-- 資料表索引 `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`member_ID`,`variety_ID`,`appearance_ID`),
  ADD KEY `推薦品種` (`variety_ID`),
  ADD KEY `推薦毛色` (`appearance_ID`);

--
-- 資料表索引 `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`search_ID`),
  ADD KEY `搜尋浪浪暱稱` (`animal_nickname`),
  ADD KEY `搜尋品種ID` (`appearance`),
  ADD KEY `搜尋毛色ID` (`variety`);

--
-- 資料表索引 `stray_animals`
--
ALTER TABLE `stray_animals`
  ADD PRIMARY KEY (`pet_ID`,`member_ID`),
  ADD KEY `浪浪會員` (`member_ID`),
  ADD KEY `nickname` (`animal_nickname`);

--
-- 資料表索引 `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`titles_ID`),
  ADD KEY `討論區會員ID` (`member_ID`) USING BTREE;

--
-- 資料表索引 `track_photo`
--
ALTER TABLE `track_photo`
  ADD PRIMARY KEY (`track_photoID`),
  ADD KEY `追蹤中途會員ID` (`stray_ID`),
  ADD KEY `追蹤浪浪ID` (`pet_ID`),
  ADD KEY `追蹤領養會員ID` (`adopter_ID`);

--
-- 資料表索引 `variety`
--
ALTER TABLE `variety`
  ADD PRIMARY KEY (`variety_ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `adopter_photo`
--
ALTER TABLE `adopter_photo`
  MODIFY `adopter_photoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `animal_photo`
--
ALTER TABLE `animal_photo`
  MODIFY `animal_photoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `member_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `message_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `search`
--
ALTER TABLE `search`
  MODIFY `search_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stray_animals`
--
ALTER TABLE `stray_animals`
  MODIFY `pet_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `titles_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `track_photo`
--
ALTER TABLE `track_photo`
  MODIFY `track_photoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `adopter`
--
ALTER TABLE `adopter`
  ADD CONSTRAINT `認養者` FOREIGN KEY (`member_ID`) REFERENCES `member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `認養者帳號` FOREIGN KEY (`account`) REFERENCES `member` (`account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `adopter_photo`
--
ALTER TABLE `adopter_photo`
  ADD CONSTRAINT `照片會員ID` FOREIGN KEY (`member_ID`) REFERENCES `member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `animal_photo`
--
ALTER TABLE `animal_photo`
  ADD CONSTRAINT `浪浪照片ID` FOREIGN KEY (`pet_ID`) REFERENCES `stray_animals` (`pet_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `浪浪照片會員ID` FOREIGN KEY (`member_ID`) REFERENCES `member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `animal_shelter`
--
ALTER TABLE `animal_shelter`
  ADD CONSTRAINT `中途之家會員` FOREIGN KEY (`member_ID`) REFERENCES `member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `留言主題` FOREIGN KEY (`titles_ID`) REFERENCES `titles` (`titles_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `留言會員` FOREIGN KEY (`member_ID`) REFERENCES `member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `recommend`
--
ALTER TABLE `recommend`
  ADD CONSTRAINT `推薦品種` FOREIGN KEY (`variety_ID`) REFERENCES `variety` (`variety_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `推薦會員` FOREIGN KEY (`member_ID`) REFERENCES `member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `推薦毛色` FOREIGN KEY (`appearance_ID`) REFERENCES `appearance` (`appearance_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `搜尋浪浪暱稱` FOREIGN KEY (`animal_nickname`) REFERENCES `stray_animals` (`animal_nickname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `stray_animals`
--
ALTER TABLE `stray_animals`
  ADD CONSTRAINT `浪浪會員` FOREIGN KEY (`member_ID`) REFERENCES `member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `titles`
--
ALTER TABLE `titles`
  ADD CONSTRAINT `主題會員` FOREIGN KEY (`member_ID`) REFERENCES `member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `track_photo`
--
ALTER TABLE `track_photo`
  ADD CONSTRAINT `追蹤中途會員ID` FOREIGN KEY (`stray_ID`) REFERENCES `member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `追蹤浪浪ID` FOREIGN KEY (`pet_ID`) REFERENCES `stray_animals` (`pet_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `追蹤領養會員ID` FOREIGN KEY (`adopter_ID`) REFERENCES `member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
