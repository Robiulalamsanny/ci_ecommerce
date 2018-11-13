-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 07:32 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password_hints` varchar(50) NOT NULL,
  `access_label` tinyint(1) NOT NULL,
  `activation_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `email_address`, `password`, `password_hints`, `access_label`, `activation_status`) VALUES
(1, 'Robi ul alam', 'robiulalamsanny@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 1, 1),
(2, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'MEN', 'MEN', 1),
(6, 'WOMEN', 'WOMEN', 1),
(12, 'KIDS', 'KIDS', 1),
(15, 'ELECTRONICS', '<font face=\"Arial, Verdana\"><span xss=removed>ELECTRONICS</span></font>', 1),
(16, 'HOME & LVING', '<font face=\"Arial, Verdana\"><span xss=removed>HOME & LVING</span></font>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_first_name` varchar(50) NOT NULL,
  `customer_last_name` varchar(50) NOT NULL,
  `customer_email_address` varchar(50) NOT NULL,
  `customer_password` varchar(30) NOT NULL,
  `customer_phone_number` varchar(50) NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_first_name`, `customer_last_name`, `customer_email_address`, `customer_password`, `customer_phone_number`, `customer_address`) VALUES
(5, 'Robiul ', 'Alam', 'robiulalamsanny@gmail.com', '123456', '1829268780', 'Dhaka'),
(6, 'Robiul ', 'Alam', 'Sojib@gmail.com', '123456', '1829268781', 'khagrachari'),
(7, 'saiful', 'islam', 'saiful@gmail.com', '123456', '1829268788', 'cumilla'),
(8, 'pohel', 'sha', 'pohel@gmail.com', '123456', '1829268799', 'feni'),
(9, 'saiful', 'islam', 'saiful@gmail.com', '123456', '1829268999', 'noyakhali'),
(10, 'pohel', 'sha', 'pohel@gmail.com', '123', '1829268666', 'noyakhali');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

CREATE TABLE `tbl_manufacture` (
  `manufacture_id` int(5) NOT NULL,
  `manufacture_name` varchar(50) NOT NULL,
  `manufacture_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`manufacture_id`, `manufacture_name`, `manufacture_description`, `publication_status`) VALUES
(8, 'T-SHIRTS', '<font face=\"Arial, Verdana\"><span xss=removed>T-SHIRTS</span></font>', 1),
(9, 'POLO', '<font face=\"Arial, Verdana\"><span xss=removed>POLO</span></font>', 1),
(10, 'ROUND COLOR', '<font face=\"Arial, Verdana\"><span xss=removed>ROUND COLOR</span></font>', 1),
(11, 'FULL SLEEVE', '<font face=\"Arial, Verdana\"><span xss=removed>FULL SLEEVE</span></font>', 1),
(12, 'HALF SLAVE', '<font face=\"Arial, Verdana\"><span xss=removed>HALF SLAVE</span></font>', 1),
(13, 'BAGS', '<font face=\"Arial, Verdana\"><span xss=removed>BAGS</span></font>', 1),
(14, 'Handbags', '<font face=\"Arial, Verdana\"><span xss=removed>Handbags</span></font>', 1),
(15, 'Wallets & Clutches', '<font face=\"Arial, Verdana\"><span xss=removed>Wallets & Clutches</span></font>', 1),
(16, 'Backpacks', '<font face=\"Arial, Verdana\"><span xss=removed>Backpacks</span></font>', 1),
(17, 'Eyewear', '<span xss=removed>Eyewear</span>', 1),
(18, 'Baby Care', '<span xss=removed>Baby Care</span>', 1),
(19, 'BABY Shirts & T-shirts', '<font face=\"Arial, Verdana\"><span xss=removed>BABY Shirts & T-shirts</span></font>', 1),
(20, 'BABY Diaper', '<font face=\"Arial, Verdana\"><span xss=removed>BABY Diaper</span></font>', 1),
(21, 'TELEVISION', '<span xss=removed>TELEVISION</span>', 1),
(22, 'AC & COOLERS', '<span xss=removed>AC & COOLERS</span>', 1),
(23, 'MICROWAVE OVEN', '<span xss=removed>MICROWAVE OVEN</span>', 1),
(24, 'SHOWPIECE', '<span xss=removed>SHOWPIECE</span>', 1),
(25, 'LAMPS &  LIGHTING', '<span xss=removed>LAMPS &  LIGHTING</span>', 1),
(26, 'CLOCKS', '<span xss=removed>CLOCKS</span>', 1),
(27, 'test', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(7) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `shipping_id` int(5) NOT NULL,
  `payment_id` int(5) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'pending',
  `order_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date_time`) VALUES
(8, 5, 5, 18, 232.65, 'pending', '2018-11-11 15:00:47'),
(9, 6, 6, 19, 176.25, 'pending', '2018-11-13 04:37:13'),
(10, 9, 9, 20, 232.65, 'pending', '2018-11-13 06:44:03'),
(11, 10, 10, 21, 319.60, 'pending', '2018-11-13 18:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_sales_quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`) VALUES
(8, 8, 11, 'Romantic LED Mushroom Night Light', 99.00, 2),
(9, 9, 10, 'Led Mushroom Dream Light with Sensor - Multi-color', 150.00, 1),
(10, 10, 11, 'Romantic LED Mushroom Night Light', 99.00, 2),
(11, 11, 13, 'Blackberry Color Cotton Round neck T Shirt for Men', 136.00, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL DEFAULT 'pending',
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `payment_date_time`) VALUES
(17, 'cash_on_delivary', 'pending', '2018-11-11 15:00:42'),
(18, 'cash_on_delivary', 'pending', '2018-11-11 15:00:47'),
(19, 'cash_on_delivary', 'pending', '2018-11-13 04:37:13'),
(20, 'cash_on_delivary', 'pending', '2018-11-13 06:44:03'),
(21, 'cash_on_delivary', 'pending', '2018-11-13 18:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(3) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(3) NOT NULL,
  `manufacture_id` int(3) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_new_price` float(10,2) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacture_id`, `product_short_description`, `product_long_description`, `product_price`, `product_quantity`, `product_new_price`, `is_featured`, `product_image`, `publication_status`) VALUES
(6, ' Black Cotton Long Sleeve T-Shirt For Men', 1, 8, '<div><br></div><div><span xss=removed>Black Cotton Long Sleeve T-Shirt For Men</span></div>', '<div><br></div><div><span xss=removed>Black Cotton Long Sleeve T-Shirt For Men</span></div>', 269.00, 10, 269.00, 1, 'product_images/shirt.jpg', 1),
(7, 'Black Amarante coated Calf Leather Hand Bag For Woman', 6, 13, '<a age=\"0\" href=\"https://www.daraz.com.bd/products/black-amarante-coated-calf-leather-hand-bag-for-woman-i1218994-s20534481.html?spm=a2a0e.searchlistcategory.list.8.14384f57LFeE4Q&search=1\" title=\"Black Amarante coated Calf Leather Hand Bag For Woman\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.8\" xss=removed>Black Amarante coated Calf Leather Hand Bag For Woman</a>', '<a age=\"0\" href=\"https://www.daraz.com.bd/products/black-amarante-coated-calf-leather-hand-bag-for-woman-i1218994-s20534481.html?spm=a2a0e.searchlistcategory.list.8.14384f57LFeE4Q&search=1\" title=\"Black Amarante coated Calf Leather Hand Bag For Woman\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.8\" xss=removed>Black Amarante coated Calf Leather Hand Bag For Woman</a>', 2889.00, 10, 2889.00, 1, 'product_images/women_bags.jpg', 1),
(8, 'INFANT BABY CARRIER COMFORT WRAP BAG', 12, 18, '<a age=\"0\" href=\"https://www.daraz.com.bd/products/infant-baby-carrier-comfort-wrap-bag-i68943-s472401.html?spm=a2a0e.searchlistcategory.list.4.71936f082AcCL4&search=1\" title=\"INFANT BABY CARRIER COMFORT WRAP BAG\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.4\" xss=removed>INFANT BABY CARRIER COMFORT WRAP BAG</a>', '<a age=\"0\" href=\"https://www.daraz.com.bd/products/infant-baby-carrier-comfort-wrap-bag-i68943-s472401.html?spm=a2a0e.searchlistcategory.list.4.71936f082AcCL4&search=1\" title=\"INFANT BABY CARRIER COMFORT WRAP BAG\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.4\" xss=removed>INFANT BABY CARRIER COMFORT WRAP BAG</a>', 589.00, 10, 589.00, 0, 'product_images/INFANT_BABY_CARRIER_COMFORT_WRAP_BAG.jpg', 1),
(9, 'LED TV 32\"', 15, 21, '<a age=\"0\" href=\"https://www.daraz.com.bd/products/led-tv-32-black-i2462927-s86643989.html?spm=a2a0e.searchlistcategory.list.2.5bcd705c5JSuyB&search=1\" title=\"LED TV - 32\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.2\" xss=removed>LED TV - 32\" - Black</a>', '<a age=\"0\" href=\"https://www.daraz.com.bd/products/led-tv-32-black-i2462927-s86643989.html?spm=a2a0e.searchlistcategory.list.2.5bcd705c5JSuyB&search=1\" title=\"LED TV - 32\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.2\" xss=removed>LED TV - 32\" - Black</a>', 15100.00, 10, 15100.00, 1, 'product_images/LED_TV.jpg', 1),
(10, 'Led Mushroom Dream Light with Sensor - Multi-color', 16, 25, '<a age=\"0\" href=\"https://www.daraz.com.bd/products/led-mushroom-dream-light-with-sensor-multi-color-i273921-s1241072.html?spm=a2a0e.searchlistcategory.list.12.70b0321e3NyRKN&search=1\" title=\"Led Mushroom Dream Light with Sensor - Multi-color\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.12\" xss=removed>Led Mushroom Dream Light with Sensor - Multi-color</a>', '<a age=\"0\" href=\"https://www.daraz.com.bd/products/led-mushroom-dream-light-with-sensor-multi-color-i273921-s1241072.html?spm=a2a0e.searchlistcategory.list.12.70b0321e3NyRKN&search=1\" title=\"Led Mushroom Dream Light with Sensor - Multi-color\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.12\" xss=removed>Led Mushroom Dream Light with Sensor - Multi-color</a>', 150.00, 10, 150.00, 0, 'product_images/Led_Mushroom_Dream_Light_with_Sensor_-_Multi-color.jpg', 1),
(11, 'Romantic LED Mushroom Night Light', 16, 25, '<a age=\"0\" href=\"https://www.daraz.com.bd/products/romantic-led-mushroom-night-light-i440316-s1742318.html?spm=a2a0e.searchlistcategory.list.2.175b2a65Y40Wlm&search=1\" title=\"Romantic LED Mushroom Night Light\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.2\" xss=removed>Romantic LED Mushroom Night Light</a>', '<a age=\"0\" href=\"https://www.daraz.com.bd/products/romantic-led-mushroom-night-light-i440316-s1742318.html?spm=a2a0e.searchlistcategory.list.2.175b2a65Y40Wlm&search=1\" title=\"Romantic LED Mushroom Night Light\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.2\" xss=removed>Romantic LED Mushroom Night Light</a>', 99.00, 10, 99.00, 0, 'product_images/Romantic_LED_Mushroom_Night_Light.jpg', 1),
(12, ' Agro Organica ', 12, 18, '<span xss=removed> Agro Organica </span>', '<span xss=removed> Agro Organica </span>', 500.00, 10, 450.00, 0, 'product_images/Agro_Organica1.jpg', 1),
(13, 'Blackberry Color Cotton Round neck T Shirt for Men', 1, 8, '<a age=\"0\" href=\"https://www.daraz.com.bd/products/blackberry-color-cotton-round-neck-t-shirt-for-men-i1200966-s18854932.html?spm=a2a0e.searchlistcategory.list.16.905b487danI7T1&search=1\" title=\"Blackberry Color Cotton Round neck T Shirt for Men\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.16\" xss=\"removed\">Blackberry Color Cotton Round neck T Shirt for Men</a>', '<a age=\"0\" href=\"https://www.daraz.com.bd/products/blackberry-color-cotton-round-neck-t-shirt-for-men-i1200966-s18854932.html?spm=a2a0e.searchlistcategory.list.16.905b487danI7T1&search=1\" title=\"Blackberry Color Cotton Round neck T Shirt for Men\" data-spm-anchor-id=\"a2a0e.searchlistcategory.list.16\" xss=\"removed\">Blackberry Color Cotton Round neck T Shirt for Men</a>', 138.00, 5, 136.00, 0, 'product_images/Blackberry_Color_Cotton_Round_neck_T_Shirt_for_Men1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `shipping_first_name` varchar(50) NOT NULL,
  `shipping_last_name` varchar(50) NOT NULL,
  `shipping_email_address` varchar(50) NOT NULL,
  `shipping_password` varchar(30) NOT NULL,
  `shipping_phone_number` varchar(50) NOT NULL,
  `shipping_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_first_name`, `shipping_last_name`, `shipping_email_address`, `shipping_password`, `shipping_phone_number`, `shipping_address`) VALUES
(5, 'Robiul ', 'Alam', 'robiulalamsanny@gmail.com', '123456', '1829268780', 'Dhaka'),
(6, 'Robiul ', 'Alam', 'Sojib@gmail.com', '123456', '1829268781', 'khagrachari'),
(7, 'saiful', 'islam', 'saiful@gmail.com', '123456', '1829268788', 'cumilla'),
(8, 'pohel', 'sha', 'pohel@gmail.com', '123456', '1829268799', 'feni'),
(9, 'saiful', 'islam', 'saiful@gmail.com', '123456', '1829268999', 'noyakhali'),
(10, 'pohel', 'sha', 'pohel@gmail.com', '123', '1829268666', 'noyakhali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `manufacture_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
