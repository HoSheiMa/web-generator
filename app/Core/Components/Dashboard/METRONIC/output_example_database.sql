-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2024 at 07:04 AM
-- Server version: 8.3.0
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `output_example_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `count`) VALUES
(10, 2, 3, 1),
(11, 2, 2, 1),
(12, 1, 3, 1),
(13, 1, 2, 1),
(14, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'eqwewq', 'ewqeewqe@gmail.com', 'wqew', 'ewqe'),
(2, 'eqwewq', 'ewqeewqe@gmail.com', 'wqew', 'ewqe'),
(3, 'eqwewq', 'ewqeewqe@gmail.com', 'wqew', 'ewqe'),
(4, 'eqwewq', 'ewqeewqe@gmail.com', 'wqew', 'ewqe'),
(5, 'eqwewq', 'ewqeewqe@gmail.com', 'wqew', 'ewqe'),
(6, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(7, 'eqwewq', '222722@gmail.com', 'wqew', 'ewqe'),
(8, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(9, 'eqwewq', '222262421@gmail.com', 'wqew', 'ewqe'),
(10, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(11, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(12, 'eqwewq', '2223222@gmail.com', 'wqew', 'ewqe'),
(13, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(14, 'eqwewq', '22222@3gmail.com', 'wqew', 'ewqe'),
(15, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(16, 'eqwewq', '22222@5gmail.com', 'wqew', 'ewqe'),
(17, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(18, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(19, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(20, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(21, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(22, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(23, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(24, 'eqwewq', '222222@gmail.com', 'wqew', 'ewqe'),
(25, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(26, 'eqwewq', '22222@gmail.com', 'wqew', 'ewqe'),
(27, 'Qandil abdel fadil awayn', 'qandilafa@gmail.com', '01207425745', 'ewqewq');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `status` enum('new','delivering','delivered','cancelled') NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `address`, `created_at`) VALUES
(5, 2, 'delivering', 'Cairo, 2134097240921u jv2190ej0921je 9012e ', '2024-06-20 20:33:06'),
(6, 1, 'new', 'Cairowewqe qwewqe wq', '2024-06-21 11:49:58'),
(8, 1, 'new', 'Cairo', '2024-06-21 21:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_price` int NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `count` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_name`, `product_image`, `product_price`, `product_brand`, `product_description`, `count`, `created_at`) VALUES
(13, 5, 'white t-shirt', 'https://5.imimg.com/data5/ANDROID/Default/2021/7/KU/YI/VT/44196072/product-jpeg.jpg', 1200, 'ZARA', 't shirt pure cotton made with love.', 1, '2024-06-20 20:33:06'),
(14, 5, 'black t-shirt', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqVsjp3zQIjuUumE93UE7jZUCWJou5c79avg&s', 1200, 'ZARA', 't shirt pure cotton made with love.', 2, '2024-06-20 20:33:06'),
(15, 6, 'white t-shirt', 'https://5.imimg.com/data5/ANDROID/Default/2021/7/KU/YI/VT/44196072/product-jpeg.jpg', 1200, 'ZARA', 't shirt pure cotton made with love.', 1, '2024-06-21 11:49:58'),
(16, 6, 'black t-shirt', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqVsjp3zQIjuUumE93UE7jZUCWJou5c79avg&s', 1200, 'ZARA', 't shirt pure cotton made with love.', 1, '2024-06-21 11:49:58'),
(17, 6, 'blue t-shirt', 'https://m.media-amazon.com/images/I/51ulmT3YUZL._AC_UY1000_.jpg', 1100, 'ZARA', 't shirt pure cotton made with love.', 1, '2024-06-21 11:49:58'),
(19, 8, 'blue t-shirt', 'https://m.media-amazon.com/images/I/911n4nIhnpL._AC_UY1000_.jpg', 1100, 'ZARA', 't shirt pure cotton made with love.', 1, '2024-06-21 21:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ordered_count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `brand`, `image`, `created_at`, `ordered_count`) VALUES
(1, 'white t-shirt', 't shirt pure cotton made with love.', 1200, 'ZARA', 'https://dictionary.cambridge.org/images/thumb/shirt_noun_002_33400.jpg?version=6.0.21', '2024-06-18 05:47:19', 12),
(2, 'black t-shirt', 't shirt pure cotton made with love.', 1200, 'ZARA', 'https://static.massimodutti.net/3/photos/2024/V/0/2/p/0153/346/405/0153346405_1_1_16.jpg?t=1699011436395&impolicy=massimodutti-itxmediumhigh&imformat=chrome&imwidth=500', '2024-06-18 05:48:30', 8),
(3, 'blue t-shirt', 't shirt pure cotton made with love.', 1100, 'ZARA', 'https://m.media-amazon.com/images/I/911n4nIhnpL._AC_UY1000_.jpg', '2024-06-18 05:48:30', 4);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int NOT NULL,
  `card_expiry_month` int NOT NULL,
  `card_expiry_year` int NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `card_cvv` int NOT NULL,
  `order_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `card_expiry_month`, `card_expiry_year`, `card_name`, `card_number`, `card_cvv`, `order_id`, `user_id`) VALUES
(1, 1, 2024, 'Max Doe', '4111 1111 1111 1111', 123, 4, 2),
(2, 1, 2024, 'Max Doe', '4111 1111 1111 1111', 123, 5, 2),
(3, 1, 2024, 'Max Doe', '4111 1111 1111 1111', 123, 6, 1),
(4, 1, 2026, 'Max Doe', '4111 1111 1111 1111', 123, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin123', 'admin@admin.com', '$2y$10$aKKlvSsCOHJTahwGF4zUrOLil/0gEMfmjZCLLy6JZZT38CzM0kbs6', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
