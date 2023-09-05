-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 01:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfood`
--

CREATE TABLE `addfood` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `price` bigint(100) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addfood`
--

INSERT INTO `addfood` (`id`, `name`, `item`, `price`, `picture`) VALUES
(36, 'Pizza', 'FOOD MENU ITEM 11', 300, 'pizza.png'),
(37, 'FrenchFries', 'FOOD MENU ITEM 1', 150, 'frenchfries.jpg'),
(38, 'Meal', 'FOOD MENU ITEM 2', 500, 'meal.jpg'),
(39, 'Burger', 'FOOD MENU ITEM 3', 250, 'res.jpg'),
(40, 'Cake', 'FOOD MENU ITEM 3', 300, 'cake.png'),
(41, 'Cake', 'FOOD MENU ITEM 3', 300, 'cake1.png'),
(42, 'Pasta', 'FOOD MENU ITEM 5', 250, 'pasta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addorder`
--

CREATE TABLE `addorder` (
  `id` int(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `selection` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addorder`
--

INSERT INTO `addorder` (`id`, `fname`, `lname`, `selection`) VALUES
(1, 'govind', 'awati', ''),
(8, 'sagar', 'patil', 'Porcelain Salad with Ice cream'),
(10, 'bhairavi', 'bosco', 'Mix Vegiee Salad'),
(12, 'santosh', 'dixit', 'Mix Vegiee Salad'),
(13, 'santosh', 'dixit', 'Mix Vegiee Salad');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(5, 'Admin', 'Login'),
(6, 'Admin', 'Login'),
(7, 'Admin', 'Login'),
(8, 'Admin', 'Login'),
(9, 'Admin', 'Login'),
(10, 'Admin', 'Login'),
(11, 'Admin', 'Login'),
(12, 'Admin', 'Login'),
(13, 'Admin', 'Login'),
(14, 'Admin', 'Login'),
(15, 'sagar', 'Login'),
(16, 'sagar', 'Login'),
(17, 'pallavi ', 'Login'),
(18, 'sagar', 'Login'),
(19, 'sagar', 'Login'),
(20, 'sagar', 'Login'),
(21, 'Admin', 'Login'),
(22, 'Admin', 'Login'),
(23, 'Admin', 'Login'),
(24, 'Admin', 'Login'),
(25, 'Admin', 'Login'),
(26, 'Admin', 'Login'),
(27, 'Admin', 'Login'),
(28, 'Admin', 'Login'),
(29, 'Admin', 'Login'),
(30, 'Admin', 'Login'),
(31, 'Admin', 'Login'),
(32, 'Admin', 'Login'),
(33, 'Admin', 'Login'),
(34, 'Admin', 'Login'),
(35, 'Admin', 'Login'),
(36, 'Admin', 'Login'),
(37, 'pallavi ', 'Login'),
(38, 'pallavi ', 'Login'),
(39, 'pallavi ', 'Login'),
(40, 'pallavi ', 'Login'),
(41, 'sagar', 'Login'),
(42, 'Admin', 'Login'),
(43, 'Admin', 'Login'),
(44, 'Admin', 'Login'),
(45, 'Admin', 'Login'),
(46, 'Admin', 'Login'),
(47, 'sagar', 'Login'),
(48, 'sagar', 'Login'),
(49, 'Admin', 'Login'),
(50, 'Admin', 'Login'),
(51, 'Admin', 'Login'),
(52, 'Admin', 'Login'),
(53, 'Admin', 'Login'),
(54, 'Admin', 'Login'),
(55, 'Admin', 'Login'),
(56, 'Admin', 'Login'),
(57, 'Admin', 'Login'),
(58, 'sagar', 'Login'),
(59, 'sagar', 'Login'),
(60, 'sagar', 'Login'),
(61, 'Admin', 'Login'),
(62, 'sagar', 'Login'),
(63, 'qq', 'Login'),
(64, 'qq', 'Login'),
(65, 'aaa', 'Login'),
(66, 'pallavi ', 'Login'),
(67, 'Admin', 'Login'),
(68, 'sagar', 'Login'),
(69, 'pallavi ', 'Login'),
(70, 'f', 'Login'),
(71, 'n', 'Login'),
(72, 'pallavi ', 'Login'),
(73, 'sagar', 'Login'),
(74, 'mahesh', 'Login'),
(75, 'mahesh', 'Login'),
(76, 'Admin', 'Login'),
(77, 'Admin', 'Login'),
(78, 'Admin', 'Login'),
(79, 'Admin', 'Login'),
(80, 'pallavi ', 'Login'),
(81, 'pallavi ', 'Login'),
(82, 'pallavi ', 'Login'),
(83, 'Admin', 'Login'),
(84, 'Admin', 'Login'),
(85, 'Admin', 'Login'),
(86, 'Admin', 'Login'),
(87, 'sagar', 'Login'),
(88, 'sagar', 'Login'),
(89, 'Admin', 'Login'),
(90, 'Admin', 'Login'),
(91, 'Admin', 'Login'),
(92, 'Admin', 'Login'),
(93, 'Admin', 'Login'),
(94, 'Admin', 'Login'),
(95, 'Admin', 'Login'),
(96, 'Admin', 'Login'),
(97, 'Admin', 'Login'),
(98, 'Admin', 'Login'),
(99, 'Admin', 'Login'),
(100, 'Admin', 'Login'),
(101, 'Admin', 'Login'),
(102, 'Admin', 'Login'),
(103, 'Admin', 'Login'),
(104, 'Admin', 'Login'),
(105, 'a', 'Login'),
(106, 'Admin', 'Login'),
(107, 'Admin', 'Login'),
(108, 'Admin', 'Login'),
(109, 'Admin', 'Login'),
(110, 'Admin', 'Login'),
(111, 'Admin', 'Login'),
(112, 'Admin', 'Login');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(11) NOT NULL,
  `confirmpassword` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `firstname`, `lastname`, `email`, `password`, `confirmpassword`) VALUES
(38, 'rakshita', 'pattar', 'john@gmail.com', '123', '123'),
(48, 'www', 'wsw', 'www@gmail.com', '4444', '4444'),
(51, 'kavita', 'Biradar', 'senedu@hms.com', 'qwwq', 'qwwq');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `gross_amount` varchar(255) NOT NULL,
  `service_charge_rate` varchar(255) NOT NULL,
  `service_charge_amount` varchar(255) NOT NULL,
  `vat_charge_rate` varchar(255) NOT NULL,
  `vat_charge_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `net_amount` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `paid_status` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `bill_no`, `date_time`, `gross_amount`, `service_charge_rate`, `service_charge_amount`, `vat_charge_rate`, `vat_charge_amount`, `discount`, `net_amount`, `user_id`, `table_id`, `paid_status`, `store_id`) VALUES
(9, 'CDSTRO-77B3', '1692871675', '3.00', '3', '0.09', '13', '0.39', '', '3.48', 1, 10, 2, 0),
(10, 'CDSTRO-FF5A', '1692874969', '2.00', '3', '0.06', '13', '0.26', '', '2.32', 1, 1, 1, 0),
(11, 'CDSTRO-90AA', '1692945656', '7.95', '3', '0.24', '13', '1.03', '', '9.22', 1, 1, 1, 0),
(12, 'CDSTRO-0380', '1692945827', '5.00', '3', '0.15', '13', '0.65', '0.23', '5.57', 1, 11, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `rate`, `amount`) VALUES
(42, 9, 7, '1', '3', '3.00'),
(44, 10, 4, '1', '2', '2.00'),
(46, 12, 3, '1', '3', '3.00'),
(47, 12, 4, '1', '2', '2.00'),
(48, 11, 19, '1', '7.95', '7.95');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` text NOT NULL,
  `store_id` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `store_id`, `name`, `price`, `description`, `image`, `active`) VALUES
(1, '[\"6\"]', '[\"1\"]', 'Virgin Mojito', '4', '<p>This is a demo test</p>', '<p>The upload path does not appear to be valid.</p>', 1),
(2, '[\"3\"]', '[\"1\"]', 'Carbonara', '5', '<p>\r\n\r\n<b></b>Carbonara&nbsp;<b></b>is an Italian pasta dish from Rome made with egg, hard cheese, cured pork, and black pepper. The cheese is usually Pecorino Romano, Parmigiano-Reggiano, or a combination of the two. Spaghetti is the most common pasta, but fettuccine, rigatoni, linguine, or bucatini are also used.<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(3, '[\"8\"]', '[\"1\"]', 'Grilled Cheese Sandwich', '3', '<p>A toasted sandwich, grilled cheese sandwich,&nbsp; or grilled cheese is a hot sandwich made with one or more varieties of cheese (a cheese sandwich) on bread. It is typically prepared by heating one or more slices of cheese between slices of bread, with a cooking fat such as butter, on a frying pan, griddle, or sandwich toaster, until the bread browns and the cheese melts. A grilled cheese may contain separate ingredients, though the main ingredients remain the bread and cheese.<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(4, '[\"11\"]', '[\"1\",\"2\"]', 'French Fries', '2', '<p>\r\n\r\nFrench fries are served hot, either soft or crispy, and are generally eaten as part of lunch or dinner or by themselves as a snack\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(5, '[\"11\"]', '[\"2\"]', 'Chicken Rings', '6', '<p>Chicken <b></b>Rings are&nbsp;basically <b></b>chicken&nbsp;<b></b>nuggets that <b></b>are flattened and shaped into discs for, as the company put it, 360 degrees of yes please! More specifically, they\'re made with white meat <b></b>chicken&nbsp;<b></b>and breaded for a crispy exterior.</p>', '<p>The upload path does not appear to be valid.</p>', 1),
(6, '[\"12\"]', '[\"1\"]', 'Signature BBQ Burger', '5', '<p>\r\n\r\nThe <b></b>BBQ Signature Burger<b></b>&nbsp;- 100% British and Irish beef, a smoky <b></b>BBQ sauce, bacon, coleslaw, cheddar cheese, red onion, lettuce, all in a soft brioche-style bun.</p>', '<p>The upload path does not appear to be valid.</p>', 1),
(7, '[\"12\"]', '[\"1\",\"3\",\"4\",\"5\",\"7\",\"9\",\"11\",\"13\"]', 'Veggie Burger', '3', '<p>\r\n\r\nA veggie burger is a burger patty that does not contain meat. These burgers may be made from ingredients like beans, especially soybeans and tofu, nuts, grains, seeds or fungi such as mushrooms or mycoprotein.\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(8, '[\"12\"]', '[\"2\",\"4\",\"7\",\"13\"]', 'Bacon Cheese Burger', '1.70', '<p>\r\n\r\nBacon, American, lettuce, tomato, red onion, pickles\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(9, '[\"13\"]', '[\"2\",\"4\",\"5\",\"8\",\"10\",\"13\"]', 'Pepperoni Pizza', '12', '<p>An American variety of salami, made from cured pork and beef seasoned with paprika or other chili pepper.\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(10, '[\"13\"]', '[\"2\",\"3\",\"5\",\"12\",\"13\"]', 'Chicken-Bacon Parmesan Pizza', '19', '<p>\r\n\r\nHand-Tossed Pizza, Original Pan Pizza, Thin N Crispy Pizza\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(11, '[\"13\"]', '[\"4\",\"5\",\"12\",\"13\"]', 'Backyard BBQ Chicken Pizza', '22', '<p>\r\n\r\n<b></b>BBQ&nbsp;<b></b>Chicken is topped with white meat chicken, hardwood smoked bacon, and sweet red onions. All <b></b>pizzas&nbsp;<b></b>are topped with a Honey <b></b>BBQ&nbsp;<b></b>sauce and a hand tossed crust with a toasty cheddar edge.\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(12, '[\"14\"]', '[\"9\",\"12\"]', 'Tuscani Chicken Alfredo Pasta', '9', '<p>\r\n\r\nCreamy Chicken Alfredo and Meaty Marinara.\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(13, '[\"6\"]', '[\"1\",\"2\",\"3\",\"5\",\"7\",\"10\",\"13\"]', 'Diet Pepsi', '2', '<p>\r\n\r\nBottle 20 oz\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(14, '[\"6\"]', '[\"1\",\"2\",\"5\",\"9\",\"10\",\"13\"]', 'Crush Orange', '3.09', '<p>2 Liter</p>', '<p>The upload path does not appear to be valid.</p>', 1),
(15, '[\"10\"]', '[\"2\",\"5\",\"12\",\"13\"]', 'Chicken Sandwich XL Combo', '9.99', '<p>Hand-battered chicken, topped with a signature honey-butter brushed brioche bun with mayo and pickles. Order it Spicy with spicy mayo and a jalapeño on the side for an extra kick. Served with regular side and large drink.\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(16, '[\"6\"]', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"10\",\"13\"]', 'Dr. Pepper', '1.89', '<p>\r\n\r\nCalories: R 280 | L 380\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(17, '[\"6\"]', '[\"3\",\"7\",\"11\",\"13\"]', 'Organic Lemonade', '2.80', '<p>\r\n\r\n32 Fl Oz\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(18, '[\"3\"]', '[\"2\",\"6\",\"8\",\"11\"]', 'Nachos Grande', '8.95', '<p>\r\n\r\nLightly spread chips with half of the beans, leaving some uncovered. Sprinkle half of the cheese evenly over all the chips\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(19, '[\"3\"]', '[\"2\",\"6\",\"10\",\"11\"]', 'Popcorn Chicken', '7.95', '<p>Consisting of small, bite-sized pieces of chicken that have been breaded and fried.\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(20, '[\"15\"]', '[\"1\",\"8\"]', 'Blackened Alligator Sausage on a Plate', '10.75', '<p>\r\n\r\nBlend of alligator and pork sausage served with BBQ sauce\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(21, '[\"15\"]', '[\"5\",\"10\",\"12\"]', 'BBQ Shrimp and Hot Beef Sausage', '12.50', '<p>\r\n\r\nServed in house made sweet and spicy BBQ sauce drape the sweet shrimp and savoie\'s sausage with baguette\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(22, '[\"3\"]', '[\"2\",\"3\",\"9\",\"13\"]', 'Shrimp Scampi', '10.95', '<p>\r\n\r\nShrimp <b></b>scampi is a seafood dish with a <b></b>sauce of garlic, lemon, and butter.</p>', '<p>The upload path does not appear to be valid.</p>', 1),
(23, '[\"7\"]', '[\"4\",\"8\",\"9\",\"11\"]', 'Chicken Caesar Wrap', '10.30', '<p>\r\n\r\nThe new <b></b>wraps&nbsp;<b></b>feature your choice of either crispy or grilled seasoned <b></b>chicken<b></b>, bacon, a blend of Monterey Jack and Mozzarella cheeses, and <b></b>Caesar&nbsp;<b></b>sauce, all wrapped in a soft tortilla and grilled.\r\n\r\n<br></p>', '<p>The upload path does not appear to be valid.</p>', 1),
(24, '[\"16\"]', '[\"5\",\"6\",\"9\",\"14\",\"15\",\"16\"]', 'Sliced Smoked Turkey Breast', '9.85', '<p>Slow smoked, hand sliced turkey breast served with your choice of two sides</p>', '<p>The upload path does not appear to be valid.</p>', 1),
(25, '[\"17\"]', '[\"2\",\"4\",\"5\",\"10\",\"14\",\"15\"]', 'Crispy Chicken Tacos', '5.10', '<p>Three crispy fried chicken in a soft flour tortilla tossed with spicy mayo and served street style with onion, salsa, cilantro and pickled red onions.</p>', '<p>The upload path does not appear to be valid.</p>', 1),
(26, '[\"4\"]', '[\"10\"]', 'xxxx', '222', '<p>vfbgjnhjm</p>', '<p>The upload path does not appear to be valid.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`id`, `name`, `email`, `msg`) VALUES
(1, 'sagar', 'admin@gmail.com', 'ssss'),
(2, 'sagar', 'admin@gmail.com', 'ooooo'),
(3, 'anu', 'anu@gmail.com', 'sadcsfvvgbghbgn'),
(4, 'anu', 'anu@gmail.com', 'sadcsfvvgbghbgn');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `reviewinp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `firstname`, `lastname`, `reviewinp`) VALUES
(1, 'kavita', 'pattar', 'good'),
(5, 'Ross ', 'Lee', 'Very Good Test'),
(6, 'Sara', 'Gupta', 'Maintance is very nice'),
(7, 'John ', ' See', ' Good Test Good Quality'),
(8, 'raghav', 'rawat', 'Very nice');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `active`) VALUES
(2, 'Parallax Restaurant', 1),
(3, 'Crafty Plates', 1),
(10, 'Indian Restaurant', 1),
(11, 'Heaven Hub', 1),
(12, 'The Park Hotel', 1),
(13, 'Corner House', 1),
(14, 'Hunger\'s Hub', 1),
(15, 'Hell\'s Kitchen', 1),
(16, 'The Second Wife', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `phone`, `gender`, `store_id`) VALUES
(1, 'admin', '$2y$10$7HpMJOYDc7QyaRfJX5exJuQSi2U/fB7qgRLACu.1TMg7snJNf7Mim', 'admin@gmail.com', 'Will', 'Williams', '80789998', 1, 0),
(2, 'kenny', '$2y$10$QQESnj3B3Q3nb9IBuZwZE..rmAJPUzz0DWlNM8zCydju432BlyjuO', 'kennyw@gmail.com', 'Kenny', 'Waldrom', '7545554540', 1, 1),
(3, 'liamoore', '$2y$10$ug9KuKmpgY1ck0tuzjxjU.rROEkaFCloTTZGjMhRzugMZA14bZSdC', 'liam@gmail.com', 'Liam', 'Moore', '7400002140', 1, 1),
(4, 'veronica', '$2y$10$J4/hvDs/.rW8nrd8N9kfuuh0Msh4djj6LyhQvG3l8/9clc7ge7At.', 'veronica@gmail.com', 'Veronica', 'Lyle', '7850002680', 2, 2),
(5, 'donna', '$2y$10$uhWPHza2qiKtFKS3IKbIyeblUBXPoJWbwyWCuju7ukCTAcm2oncZO', 'donna@gmail.com', 'Donna', 'Edwards', '7025556960', 2, 16),
(6, 'kavya', '$2y$10$25cUXrTvGVasEeGP/m0DMORc8mVYlLWjKAj9nyLjg7jBk1vnGgLJm', 'kavya@gmail.com', 'Kavya', 'Patil', '9876545678', 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 4),
(3, 3, 4),
(4, 4, 6),
(5, 5, 7),
(6, 6, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfood`
--
ALTER TABLE `addfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addorder`
--
ALTER TABLE `addorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addfood`
--
ALTER TABLE `addfood`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `addorder`
--
ALTER TABLE `addorder`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `res`
--
ALTER TABLE `res`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
