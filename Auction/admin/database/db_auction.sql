-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 10:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `biddingid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `amt` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`biddingid`, `subid`, `amt`, `userid`, `status`) VALUES
(49, 16, '777777', 1, 1),
(51, 12, '567', 1, 1),
(54, 12, '999999', 1, 0),
(55, 34, '6700', 9, 1),
(56, 14, '00000000', 9, 1),
(60, 32, '8888', 0, 0),
(72, 6, '6000', 1, 0),
(73, 5, '46000', 1, 1),
(74, 11, '8000', 1, 0),
(75, 17, '6000', 1, 0),
(76, 4, '600000', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(50) NOT NULL,
  `catname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catname`) VALUES
(1, 'Vechicles'),
(2, 'Electronics'),
(3, 'Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cricket`
--

CREATE TABLE `tbl_cricket` (
  `subid` int(50) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `descption` varchar(500) NOT NULL,
  `price` varchar(200) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cricket`
--

INSERT INTO `tbl_cricket` (`subid`, `subname`, `descption`, `price`, `sdate`, `edate`, `image`, `catid`) VALUES
(12, '	Maruti Suzuki Zen', 'The Zen mileage is 17.3 to 20.8 kmpl. The Manual Diesel variant has a mileage of 20.8 kmpl. The Manual Petrol variant has a mileage of 17.3 kmpl. The Automatic Petrol variant has a mileage of 17.3 kmpl.', '230000', '2023-11-01', '2023-11-30', 'maru.jpeg', 1),
(14, 'Tata Indigo', 'Buying your most desired car is a job half done! You are required to discover the ideal insurance policy to warrant the protection of your beloved family along with your vehicle. Royal Sundaram offers you some of the convenient, value for money and cheapest car insurance policies around India.', '570000	', '2023-11-03', '2023-12-30', 'indico.jpeg', 1),
(16, 'Honda Activa', 'Honda Activa 6G Specifications Engine109 - 124 CC Mileage50 Kmpl Max Power7.84 PS @ 8000 rpm Fuel Capacity5.3 Liters No Of GearsCVT Tyre TypeTubeless Kerb Weight105 Kg Max Torque8.90 Nm @ 5500 rpm Honda Activa 6G Features Starting (Kick and Self Start) Clock Wheels Type (Alloy) Low Fuel Warning Lamp Speedometer (Analogue) Tyre Type (Tubeless) Trip Meter (Analogue) Pass Switch', '45000', '2023-10-03', '2023-11-30', 'activa.jpeg', 1),
(17, 'Toyota Innova ', 'Be it for private or fleet usage, the Innova Crysta is the go-to choice for Indians when it comes to big MPVs.', '600000', '2023-11-08', '2023-12-21', 'inova.jpeg', 1),
(18, 'Honda Bike', 'If the Rebel 1100 is the reinvention of the metric cruiser, then the Rebel 1100T DCT is the reinterpretation of the bagger. While most baggers weigh in excess of 800 pounds and cost north of $20,000—often way north—the 1100T weighs a claimed 524 pounds and costs $11,299.', '300000', '2023-12-14', '2024-01-30', 'bike.jpeg', 1),
(19, 'Santro', 'The last recorded price of Hyundai Santro in India ranges between ₹ 4.90 Lakh and ₹ 6.42 Lakh. The car was available in 32 variants - the base model of Santro Era MT Manual was priced at ₹ 2.72 Lakh and the top model of Santro Petrol Smart Auto Asta AMT Petrol Automatic was priced at 6.45 Lakh.', '340000', '2023-09-19', '2023-11-28', 'santro.jpeg', 1),
(23, 'Dell', '13th Generation Intel® Core™ i5-1335U Windows 11 Home Single Language Intel® Iris® Xe Graphics 16 GB: LPDDR5, 4800 MT/s 1 TB, M.2, PCIe NVMe, SSD 35.5-cm. touch display Full HD+ (1920X1200) Starting at 1.58 kg', '8000', '2023-11-13', '2023-12-08', 'dell.jpeg', 2),
(24, 'Google Phone', 'Display 6.1 inches (15.49 cm) 431 PPI, OLED 90 Hz Refresh Rate Camera 64 MP + 13 MP Dual Primary Cameras Dual LED Flash 13 MP Front Camera Battery 4385 mAh Fast Charging USB Type-C Port', '13000', '2023-11-07', '2023-12-19', 'gogle.jpeg', 2),
(25, 'Realme', 'xperience crisp visuals in Full HD with the Nuvobook and its huge 39.62 cm (15.6) screen. This FHD screen on the Nuvobook comes with the sRGB up to 100% and brightness up to 300 nits. Also, the 65 W Type-C charger has you covered - 2 hours of charge in 15 minutes and 60% in an hour', '777', '2023-11-09', '2023-11-28', 'real.jpeg', 2),
(30, 'Dinning Table', 'The dining table is where the family comes together to share a simple meal at the end of the day, it is also the place to share important news, to celebrate, to host, or to just have a heart-to-heart conversation. So, it is no surprise that they are also pretty high on the list of crucial items when furniture shopping. Being the centerpiece of the dining area, they play a huge role in accentuating your home decor theme and making a style statement.', '15000', '2023-10-12', '2023-12-14', 'dinning.avif', 3),
(31, 'Sofa ', 'Brand Woodsworth from Pepperfry Assembly Carpenter Assembly Collections Indus Colour Provincial Teak Dimensions (In Centimeters) H 76.2 x W 175.26 x D 78.74 Dimensions (in Inches) H 30 x W 69 x D 31 Primary Material Sheesham Wood', '5600', '2023-11-14', '2023-12-21', 'sofa1.avif', 3),
(32, 'Sofa', 'Bring warmth to your bedroom with the Mozart Queen Bed Quality engineered-wood structure with spacious storage Six under-bed compartments tuck bed linens and clothes', '3000', '8/10/2023', '9/12/2023', 'tab2.avif', 3),
(33, 'Table', 'Net Quantity : 1 NCountry of Origin : INDIAPackage Contains : 1 Dining Table::4 ChairsCapra Dining Chairs - Set of Two (Teak Finish) Dimensions : 91.4 cm H x 47.5 cm W x 44.2 cm LCatria 4 Seater Dining Table (Teak Finish) Dimensions : 74.9 cm H x 79.8 cm W x 119.9 cm L', '5700', '28/10/2023', '30/11/2023', 'table2.avif', 3),
(34, 'Acer', '13th Generation Intel® Core™ i5-1335U Windows 11 Home Single Language Intel® Iris® Xe Graphics 16 GB: LPDDR5, 4800 MT/s 1 TB, M.2, PCIe NVMe, SSD 35.5-cm. touch display Full HD+ (1920X1200) Starting at 1.58 kg', '13000', '2023-11-07', '2023-12-28', 'acer.jpeg', 2),
(35, 'Apple iPhone', 'Net Quantity : 1 NCountry of Origin : INDIAPackage Contains : 1 Dining Table::4 ChairsCapra Dining Chairs - Set of Two (Teak Finish) Dimensions : 91.4 cm H x 47.5 cm W x 44.2 cm LCatria 4 Seater Dining Table (Teak Finish) Dimensions : 74.9 cm H x 79.8 cm W x 119.9 cm L', '27000', '2023-11-06', '2024-03-20', 'iphone.jpeg', 2),
(37, 'Python', 'good', '200', '2023-12-30', '2023-12-26', 'open.jpeg', 2),
(38, 'Web developer', 'yummy', '300', '2023-12-23', '2023-12-16', 'dog5.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `subid` int(50) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `descption` varchar(500) NOT NULL,
  `price` varchar(200) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`subid`, `subname`, `descption`, `price`, `sdate`, `edate`, `image`, `catid`) VALUES
(3, 'Maruti Suzuki Zen', 'The Zen mileage is 17.3 to 20.8 kmpl. The Manual Diesel variant has a mileage of 20.8 kmpl. The Manual Petrol variant has a mileage of 17.3 kmpl. The Automatic Petrol variant has a mileage of 17.3 kmpl.', '230000', '2023-11-21', '2023-12-28', 'maru.jpeg', 1),
(4, 'Tata Indigo', 'Buying your most desired car is a job half done! You are required to discover the ideal insurance policy to warrant the protection of your beloved family along with your vehicle. Royal Sundaram offers you some of the convenient, value for money and cheapest car insurance policies around India.', '570000', '2023-11-23', '2024-01-21', 'indico.jpeg', 1),
(5, '	Honda Activa', 'Honda Activa 6G Specifications Engine109 - 124 CC Mileage50 Kmpl Max Power7.84 PS @ 8000 rpm Fuel Capacity5.3 Liters No Of GearsCVT Tyre TypeTubeless Kerb Weight105 Kg Max Torque8.90 Nm @ 5500 rpm Honda Activa 6G Features Starting (Kick and Self Start) Clock Wheels Type (Alloy) Low Fuel Warning Lamp Speedometer (Analogue) Tyre Type (Tubeless) Trip Meter (Analogue) Pass Switch', '45000', '2023-08-24', '2023-12-22', 'activa.jpeg', 1),
(6, 'Toyota Innova', 'Be it for private or fleet usage, the Innova Crysta is the go-to choice for Indians when it comes to big MPVs.', '600000', '2023-12-22', '2023-12-30', 'inova.jpeg', 1),
(7, 'Honda Bike', 'If the Rebel 1100 is the reinvention of the metric cruiser, then the Rebel 1100T DCT is the reinterpretation of the bagger. While most baggers weigh in excess of 800 pounds and cost north of $20,000—often way north—the 1100T weighs a claimed 524 pounds and costs $11,299.', '300000', '2023-12-02', '2023-12-30', 'bike.jpeg', 1),
(8, 'Santro', 'The last recorded price of Hyundai Santro in India ranges between ₹ 4.90 Lakh and ₹ 6.42 Lakh. The car was available in 32 variants - the base model of Santro Era MT Manual was priced at ₹ 2.72 Lakh and the top model of Santro Petrol Smart Auto Asta AMT Petrol Automatic was priced at 6.45 Lakh.', '340000', '2023-12-07', '2024-01-06', 'inova.jpeg', 1),
(9, 'Dell', '	13th Generation Intel® Core™ i5-1335U Windows 11 Home Single Language Intel® Iris® Xe Graphics 16 GB: LPDDR5, 4800 MT/s 1 TB, M.2, PCIe NVMe, SSD 35.5-cm. touch display Full HD+ (1920X1200) Starting at 1.58 kg', '8000', '2023-11-29', '2023-12-31', 'dell.jpeg', 2),
(10, 'Google Phone', 'Display 6.1 inches (15.49 cm) 431 PPI, OLED 90 Hz Refresh Rate Camera 64 MP + 13 MP Dual Primary Cameras Dual LED Flash 13 MP Front Camera Battery 4385 mAh Fast Charging USB Type-C Port', '13000', '2023-11-30', '2023-12-31', 'gogle.jpeg', 2),
(11, 'Realme', '	xperience crisp visuals in Full HD with the Nuvobook and its huge 39.62 cm (15.6) screen. This FHD screen on the Nuvobook comes with the sRGB up to 100% and brightness up to 300 nits. Also, the 65 W Type-C charger has you covered - 2 hours of charge in 15 minutes and 60% in an hour', '7000', '2023-11-30', '2023-12-30', 'real.jpeg', 2),
(13, 'Sofa', 'Brand Woodsworth from Pepperfry Assembly Carpenter Assembly Collections Indus Colour Provincial Teak Dimensions (In Centimeters) H 76.2 x W 175.26 x D 78.74 Dimensions (in Inches) H 30 x W 69 x D 31 Primary Material Sheesham Wood', '5600', '2023-10-12', '2024-02-25', 'sofa1.avif', 3),
(17, 'Tables', 'Brand Woodsworth from Pepperfry Assembly Carpenter Assembly Collections Indus Colour Provincial Teak Dimensions (In Centimeters) H 76.2 x W 175.26 x D 78.74 Dimensions (in Inches) H 30 x W 69 x D 31 Primary Material Sheesham Wood', '30000', '2023-12-30', '2024-02-16', 'tab2.avif', 3),
(18, 'Table', 'Brand Woodsworth from Pepperfry Assembly Carpenter Assembly Collections Indus Colour Provincial Teak Dimensions (In Centimeters) H 76.2 x W 175.26 x D 78.74 Dimensions (in Inches) H 30 x W 69 x D 31 Primary Material Sheesham Wood', '13000', '8/05/2023', '9/12/2023', 'table2.avif', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userregister`
--

CREATE TABLE `tbl_userregister` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userregister`
--

INSERT INTO `tbl_userregister` (`id`, `name`, `email`, `address`, `mobno`, `pass`) VALUES
(1, 'jincy', 'jincy@gmail.com', 'xcfgvbhjnkml,;', '98765432', 'jincy'),
(8, 'vinu', 'vinu@gmail.com', 'vhbjnkml', '98765432', 'vinu'),
(9, 'elson', 'elson@gmail.com', 'dfghujiop[', '98076549768', 'elson'),
(10, 'jibi', 'jibi@gmail.com', 'hgfcfghj ohghjk ophg', '8765456789', 'jibi'),
(18, 'nelson eldhose', 'nelson@gmail.com', 'kixdfghj tfgyhjiko dfghjko fghjkl', '996234567', 'nelson'),
(20, 'Riya Jacob', 'riya@gmail.com', 'cfgvhbjnkml, drftghujikl drfgyhujikol', '98765432876', 'riya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`biddingid`),
  ADD KEY `FK_bidding_users` (`userid`),
  ADD KEY `FK_bidding` (`subid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cricket`
--
ALTER TABLE `tbl_cricket`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `tbl_userregister`
--
ALTER TABLE `tbl_userregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `biddingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cricket`
--
ALTER TABLE `tbl_cricket`
  MODIFY `subid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `subid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_userregister`
--
ALTER TABLE `tbl_userregister`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
