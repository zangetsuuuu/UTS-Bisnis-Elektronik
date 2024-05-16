-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 03:27 AM
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
-- Database: `db_online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `email`, `password`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Admin One', 'adminone', 'admin1@example.com', 'adminpassword1', '08123456789', '2024-04-25 12:07:55', '2024-04-25 12:07:55'),
(2, 'Admin Two', 'admintwo', 'admin2@example.com', 'adminpassword2', '08234567890', '2024-04-25 12:07:55', '2024-04-25 12:07:55'),
(3, 'Admin Three', 'adminthree', 'admin3@example.com', 'adminpassword3', '08345678901', '2024-04-25 12:07:55', '2024-04-25 12:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `username`, `email`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'johndoe', 'john@example.com', 'password123', '08123456789', 'Jl. Ahmad Yani No. 123', '2024-04-25 12:07:55', '2024-04-25 12:07:55'),
(2, 'Jane Smith', 'janesmith', 'jane@example.com', 'password456', '08234567890', 'Jl. Sudirman No. 456', '2024-04-25 12:07:55', '2024-04-25 12:07:55'),
(3, 'Adam Green', 'adamgreen', 'adam@example.com', 'password789', '08345678901', 'Jl. Gatot Subroto No. 789', '2024-04-25 12:07:55', '2024-04-25 12:07:55'),
(4, 'Sarah White', 'sarahwhite', 'sarah@example.com', 'passwordabc', '08456789012', 'Jl. MH Thamrin No. 890', '2024-04-25 12:07:55', '2024-04-25 12:07:55'),
(5, 'Michael Brown', 'michaelbrown', 'michael@example.com', 'passworddef', '08567890123', 'Jl. Jendral Sudirman No. 901', '2024-04-25 12:07:55', '2024-04-25 12:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, 0.00, '2024-04-25 12:27:39', '2024-04-25 12:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category`, `description`, `price`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Indomie Goreng', 'indomie-goreng', 'Makanan', 'Mi instan rasa ayam goreng yang lezat', 2500.00, 89, 'https://example.com/images/indomie.jpg', '2024-04-25 12:10:09', '2024-05-01 14:41:54'),
(2, 'Susu SGM', 'susu-sgm', 'Minuman', 'Susu formula untuk pertumbuhan anak', 15000.00, 50, 'https://example.com/images/susu.jpg', '2024-04-25 12:10:09', '2024-05-01 04:15:34'),
(3, 'Oreo', 'oreo', 'Snack', 'Biskuit cokelat dengan krim vanilla di tengahnya', 10000.00, 87, 'https://example.com/images/oreo.jpg', '2024-04-25 12:10:09', '2024-04-27 04:26:46'),
(4, 'Chitato', 'chitato', 'Snack', 'Keripik kentang dengan berbagai rasa', 5000.00, 70, 'https://example.com/images/chitato.jpg', '2024-04-25 12:10:09', '2024-04-27 10:17:49'),
(5, 'Teh Botol', 'teh-botol', 'Minuman', 'Minuman teh botol dalam kemasan praktis', 5000.00, 55, 'https://example.com/images/tehbotol.jpg', '2024-04-25 12:10:09', '2024-05-01 15:15:46'),
(7, 'Kue Bolu', 'kue-bolu', 'Kue', 'Kue tradisional yang lezat dan lembut', 5000.00, 100, 'https://example.com/images/kuebolu.jpg', '2024-04-25 12:10:09', '2024-05-01 08:19:21'),
(8, 'Kacang Garuda', 'kacang-garuda', 'Snack', 'Kacang renyah dengan berbagai pilihan rasa', 2000.00, 125, 'https://example.com/images/kacanggaruda.jpg', '2024-04-25 12:10:09', '2024-05-01 05:26:35'),
(9, 'Es Teh Manis', 'es-teh-manis', 'Minuman', 'Es teh manis dengan tambahan es batu', 3000.00, 20, 'https://example.com/images/esteh.jpg', '2024-04-25 12:10:09', '2024-04-27 04:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `midtrans_transaction_id` varchar(50) NOT NULL,
  `midtrans_order_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `transaction_time` datetime NOT NULL,
  `fraud_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `midtrans_transaction_id`, `midtrans_order_id`, `status`, `amount`, `payment_type`, `transaction_time`, `fraud_status`, `created_at`) VALUES
(8, '3ff7e98e-c12c-4e36-8386-f558a2f715e5', '663242c49db20', 'settlement', 20000.00, 'qris', '2024-05-01 20:25:47', 'accept', '2024-05-01 13:26:04'),
(9, '1967a4c5-f95c-441c-8c10-e2fc27a55795', '66324331342b2', 'settlement', 20000.00, 'qris', '2024-05-01 20:27:21', 'accept', '2024-05-01 13:27:32'),
(10, 'dff24962-314b-43a7-9ba0-e126427ec9a0', '66324351497d4', 'settlement', 20000.00, 'qris', '2024-05-01 20:27:53', 'accept', '2024-05-01 13:28:09'),
(11, '96c2bce5-80e0-4da8-abef-ec11bba9a8b2', '1741990992', 'settlement', 20000.00, 'qris', '2024-05-01 20:45:48', 'accept', '2024-05-01 13:46:02'),
(12, '9b1fec10-16c8-47dc-ac17-a98c2fce549e', '1551719209', 'settlement', 20000.00, 'qris', '2024-05-01 21:03:09', 'accept', '2024-05-01 14:03:24'),
(13, '86219e19-bb05-44f5-8843-326c039550d9', '2075113114', 'cancel', 20000.00, 'qris', '2024-05-01 21:05:54', 'accept', '2024-05-01 14:06:15'),
(14, '92307639-9578-42e5-b835-abc582eb335a', '213522648', 'cancel', 20000.00, 'qris', '2024-05-01 21:13:59', 'accept', '2024-05-01 14:14:18'),
(15, 'ae72ea57-039f-4e80-a27e-c5427b341bd7', '1396569072', 'cancel', 20000.00, 'qris', '2024-05-01 21:15:43', 'accept', '2024-05-01 14:15:56'),
(16, '0e6e4434-cfe2-44d8-9e4e-3d222fade8b1', '1674277632', 'cancel', 20000.00, 'qris', '2024-05-01 21:17:45', 'accept', '2024-05-01 14:18:04'),
(17, '1bd7cad7-13ae-4040-a704-872858e5ff6e', '186041203', 'settlement', 20000.00, 'qris', '2024-05-01 21:23:43', 'accept', '2024-05-01 14:23:55'),
(18, '39fd808b-9dc3-4192-973d-bf5c17280bc5', '28223061', 'cancel', 20000.00, 'qris', '2024-05-01 21:26:44', 'accept', '2024-05-01 14:27:20'),
(19, 'a5c92f1c-5a20-4cf6-9be4-2e1e45c0b7b3', '1922235627', 'settlement', 20000.00, 'qris', '2024-05-01 21:32:45', 'accept', '2024-05-01 14:33:00'),
(20, 'b765f256-41d5-411d-943a-971c01531f5f', '1733743857', 'settlement', 20000.00, 'qris', '2024-05-01 21:40:22', 'accept', '2024-05-01 14:40:34'),
(21, 'ec4ba8a8-4a4e-4d48-9784-538b382d8a8a', '862456495', 'settlement', 2500.00, 'qris', '2024-05-01 21:42:01', 'accept', '2024-05-01 14:42:13'),
(22, '396e530a-1025-4620-890c-622f372dedc4', '2054975663', 'settlement', 2500.00, 'qris', '2024-05-01 21:55:06', 'accept', '2024-05-01 14:55:19'),
(23, '20502276-608c-4a20-9f66-e6885d610ffc', '1914579822', 'cancel', 2500.00, 'qris', '2024-05-01 21:55:57', 'accept', '2024-05-01 14:56:09'),
(24, 'e5d1e0d9-60cf-45c1-b114-4cd95639633f', '550503663', 'settlement', 2500.00, 'qris', '2024-05-01 22:04:53', 'accept', '2024-05-01 15:05:14'),
(25, '25105063-4f33-4bed-b624-9063372b3b9a', '1058922744', 'settlement', 2500.00, 'qris', '2024-05-01 22:11:52', 'accept', '2024-05-01 15:12:02'),
(26, '9bf43399-25f8-40c0-969c-ff59121bde17', '738333852', 'settlement', 2500.00, 'qris', '2024-05-01 22:13:24', 'accept', '2024-05-01 15:13:34'),
(27, '9356a5f5-b267-4929-9167-88e56d042f3b', '95763638', 'settlement', 35000.00, 'qris', '2024-05-01 22:16:02', 'accept', '2024-05-01 15:16:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
