-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 21, 2023 lúc 03:51 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `store_loctv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_cart`
--

CREATE TABLE `tb_cart` (
  `cart_id` int NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_comment`
--

CREATE TABLE `tb_comment` (
  `cmt_id` int NOT NULL,
  `prod_id` int NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_comment`
--

INSERT INTO `tb_comment` (`cmt_id`, `prod_id`, `content`, `user_id`, `create_at`) VALUES
(1, 1, 'Sản phảm quá tốt', 1, '2023-10-11 03:40:55'),
(7, 1, 'Quá đã', 1, '2023-10-11 04:26:44'),
(8, 1, 'kkkk', 1, '2023-10-11 07:45:00'),
(9, 1, 'asds', 1, '2023-10-11 10:12:34'),
(10, 1, 'asdasdadaddaad', 1, '2023-10-11 10:12:46'),
(11, 4, 'San pham chat luon\r\n', 1, '2023-10-13 00:52:50'),
(12, 2, 'San phat tot', 1, '2023-10-13 00:53:43'),
(13, 2, 'San phat tot', 1, '2023-10-13 00:53:48'),
(14, 2, 'San phat tot', 1, '2023-10-13 00:54:32'),
(15, 2, 'San phat tot', 1, '2023-10-13 00:55:24'),
(16, 2, 'San phat tot', 1, '2023-10-13 00:57:33'),
(17, 2, 'San phat tot', 1, '2023-10-13 00:57:48'),
(18, 2, 'San phat tot', 1, '2023-10-13 00:58:17'),
(19, 5, 'aaaa', 1, '2023-10-13 00:58:27'),
(20, 5, 'aaaa', 1, '2023-10-13 00:59:37'),
(21, 6, 'bui ti phunn', 8, '2023-10-13 07:30:37'),
(22, 6, 'bui ti phunn', 8, '2023-10-13 07:32:00'),
(23, 7, 'sin so', 8, '2023-10-13 07:32:14'),
(24, 8, 'hay', 8, '2023-10-13 07:33:54'),
(25, 2, 'asd', 8, '2023-10-13 07:36:43'),
(26, 2, 'asd', 8, '2023-10-13 07:37:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int NOT NULL,
  `orderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `commodityCodes` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'waiting for confirmation',
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_product`
--

CREATE TABLE `tb_product` (
  `productID` int NOT NULL,
  `prd_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `prd_status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Available',
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(18,0) NOT NULL,
  `inventory` int NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `cateID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_product`
--

INSERT INTO `tb_product` (`productID`, `prd_name`, `prd_status`, `image`, `price`, `inventory`, `description`, `cateID`) VALUES
(1, 'T-Shirt Bold Rebel', 'Available', 't-shirt_01.jpg', 6, 90, 'This t-shirt features an eye-catching design with vibrant colors and a rebellious slogan. It is perfect for those who like to stand out and make a statement. Made from soft cotton, it offers comfort and style in one.', 1),
(2, 'T-Shirt Nature Explorer', 'Available', 't-shirt_02.jpg', 6, 92, 'Embrace your love for the outdoors with this t-shirt. It showcases a beautiful landscape print with intricate details, capturing the essence of nature. Crafted from breathable fabric, it is ideal for adventures or simply showcasing your adventurous spirit.', 1),
(3, 'T-Shirt Minimalist Elegance', 'Available', 't-shirt_03.jpg', 6, 98, 'This t-shirt exudes simplicity and sophistication. With its clean lines and minimalist design, it is a versatile wardrobe staple that can be dressed up or down. Made from a soft and luxurious blend of materials, it offers both comfort and elegance.', 1),
(4, 'T-Shirt Geek Chic', 'Available', 't-shirt_04.jpg', 6, 96, 'If you\'re a tech enthusiast, this t-shirt is made for you. It features a playful yet stylish graphic that showcases your love for all things geeky. Made of high-quality cotton, it is both comfortable and durable for all-day wear.', 1),
(5, 'T-Shirt Vintage Charm', 'Available', 't-shirt_05.jpg', 6, 94, 'Step back in time with this vintage-inspired t-shirt. Its retro design and distressed finish give it a unique charm. Crafted from soft and lightweight fabric, it provides a comfortable, worn-in feel that adds character to any outfit.', 1),
(6, 'Shirt Classic Casual', 'Available', 'shirt_01.jpg', 7, 80, 'This shirt is the epitome of timeless style. With its clean lines and neutral color, it is a versatile choice for any occasion. Made from high-quality cotton, it offers both comfort and durability for everyday wear.', 2),
(7, 'Shirt Bold Stripes', 'Available', 'shirt_02.jpg', 7, 88, 'Make a bold statement with this striped shirt. The contrasting colors create a dynamic look that is sure to turn heads. With its relaxed fit and lightweight fabric, it is perfect for adding a touch of personality to your casual outfits.', 2),
(8, 'Shirt Sophisticated Simplicity', 'Available', 'shirt_03.jpg', 7, 82, 'This shirt exudes understated elegance. With its minimalistic design and subtle details, it is a versatile piece that can be dressed up or down. Crafted from a premium blend of materials, it offers both style and comfort', 2),
(9, 'Shirt Tropical Paradise', 'Available', 'shirt_04.jpg', 7, 86, 'Embrace vacation vibes with this vibrant tropical shirt. The colorful print featuring palm trees and exotic flowers instantly transports you to a sunny beach. Made from a lightweight and breathable fabric, it is perfect for warm weather adventures.', 2),
(10, 'Shirt Athletic Performance', 'Available', 'shirt_05.jpg', 7, 84, 'Designed for active individuals, this shirt combines style and functionality. Made with moisture-wicking materials, it keeps you cool and dry during workouts. The streamlined design and ergonomic fit allow for unrestricted movement, making it perfect for sports and fitness activities.', 2),
(11, 'Hoodie Urban Cozy', 'Available', 'hoodie_01.jpg', 10, 71, ' This hoodie is perfect for the urban dweller looking for comfort and style. Its relaxed fit and soft fleece lining provide a cozy feel, while the modern design and subtle details add a touch of urban sophistication to any outfit.', 5),
(12, 'Hoodie Sporty Athlete', 'Available', 'hoodie_02.jpg', 10, 73, 'Gear up for your workouts with this sporty hoodie. Made from breathable and moisture-wicking fabric, it keeps you cool and dry during intense training sessions. The sleek design and athletic fit make it a stylish choice for both the gym and everyday activities.', 5),
(13, 'Hoodie Vintage Vibes', 'Available', 'hoodie_03.jpg', 10, 75, 'Embrace retro style with this vintage-inspired hoodie. The distressed finish and faded print give it a worn-in look, while the comfortable fabric and oversized fit provide ultimate comfort. Perfect for adding a touch of nostalgia to your casual outfits.', 5),
(14, 'Hoodie Adventure Seeker', 'Available', 'hoodie_04.jpg', 10, 77, 'If you love the great outdoors, this hoodie is a must-have. Its durable material and weather-resistant features make it ideal for outdoor adventures. The practical design, with multiple pockets and adjustable hood, ensures you\'re prepared for any adventure that comes your way.', 5),
(15, 'Hoodie Cozy Lounge', 'Available', 'hoodie_05.jpg', 10, 79, 'Stay cozy and comfortable at home with this lounge-worthy hoodie. The plush fabric and relaxed fit make it perfect for lounging on the couch or running errands on lazy weekends. The hood and front pockets add extra warmth and functionality while maintaining a stylish look.', 5),
(16, 'Polo-Shirt Classic Polo', 'Available', 'polo-shirt_01.jpg', 9, 50, 'This timeless polo shirt is a wardrobe staple for its simple yet sophisticated style. Made from premium cotton, it offers a comfortable fit and breathability. Its clean lines and minimalistic design make it a versatile choice for both casual and semi-formal occasions.', 3),
(17, 'Polo-Shirt Bold Colorblock', 'Available', 'polo-shirt_02.jpg', 9, 52, 'Make a statement with this colorblock polo shirt. Featuring contrasting hues and dynamic patterns, it adds a pop of personality to your outfit. Crafted from a soft and durable fabric blend, it combines style and comfort effortlessly.', 3),
(18, 'Polo-Shirt Elegant Stripes', 'Available', 'polo-shirt_03.jpg', 9, 54, 'Elevate your style with this elegantly striped polo shirt. The classic pattern adds a touch of sophistication, making it suitable for more polished occasions. Its lightweight fabric and tailored fit offer comfort and a refined silhouette.', 3),
(19, 'Polo-Shirt Sporty Performance', 'Available', 'polo-shirt_04.jpg', 9, 56, 'Designed for active individuals, this performance polo shirt combines style and functionality. The moisture-wicking fabric keeps you cool and dry during workouts, while the stretchy material allows for unrestricted movement. Perfect for sports or outdoor activities.', 3),
(20, 'Polo-Shirt Modern Floral', 'Available', 'polo-shirt_05.jpg', 9, 58, 'Embrace a fresh and contemporary look with this modern floral print polo shirt. The vibrant pattern adds a touch of uniqueness, perfect for those looking to stand out. Crafted from a soft and breathable fabric, it offers both style and comfort for any occasion.', 3),
(22, 'Swearer Chunky Cable', 'Available', 'sweater_02.jpg', 8, 41, 'Stay stylish and snug in this chunky cable-knit sweater. The intricate cable pattern adds a classic touch, while the oversized fit adds a contemporary twist. Made from a blend of warm materials, it\'s perfect for bundling up in colder weather.', 4),
(23, 'Swearer Effortless Chic', 'Available', 'sweater_03.jpg', 8, 45, 'Elevate your style effortlessly with this chic sweater. The sleek design, clean lines, and subtle details make it a versatile and sophisticated choice. Made from a lightweight fabric, it can be easily layered for a polished look.', 4),
(24, 'Swearer Colorful Contras', 'Available', 'sweater_04.jpg', 8, 45, 'Add a pop of color to your wardrobe with this sweater featuring bold and contrasting hues. The vibrant combination instantly brightens up your outfit. Made from a soft and cozy fabric, it\'s perfect for adding a cheerful touch to your winter ensemble.', 4),
(25, 'Swearer Sporty Knit', 'Available', 'sweater_05.jpg', 8, 49, 'Stay active and fashionable in this sporty knit sweater. The breathable and stretchy material allows for easy movement, while the modern design and ribbed details add a touch of athletic style. Whether you\'re hitting the gym or running errands, this sweater combines functionality and fashion.', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_prod_cate`
--

CREATE TABLE `tb_prod_cate` (
  `cateID` int NOT NULL,
  `cate_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_prod_cate`
--

INSERT INTO `tb_prod_cate` (`cateID`, `cate_name`, `create_date`, `update_date`) VALUES
(1, 'T-shirt', '2023-09-18 23:22:26', '2023-09-18 23:22:26'),
(2, 'Shirt', '2023-09-18 23:22:26', '2023-09-18 23:22:26'),
(3, 'Polo-Shirt', '2023-09-18 23:22:26', '2023-09-18 23:22:26'),
(4, 'Sweater', '2023-09-18 23:22:26', '2023-09-18 23:22:26'),
(5, 'Hoodie', '2023-09-18 23:22:26', '2023-09-18 23:22:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `payment` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'COD',
  `permissions` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `address`, `phone`, `email`, `password`, `payment`, `permissions`) VALUES
(1, 'Lộc Shadow', 'Ba Láng, Cái Răng, Cần Thơ', '0345499999', 'loc13@gmail.com', '12341234', 'COD', 'User'),
(7, NULL, NULL, NULL, 'yatoharem07@gmail.com', '12341234', 'COD', 'Admin'),
(8, NULL, NULL, NULL, 'locne123@gmail.com', '12341234', 'COD', 'User');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Chỉ mục cho bảng `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`cmt_id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `cateID` (`cateID`);

--
-- Chỉ mục cho bảng `tb_prod_cate`
--
ALTER TABLE `tb_prod_cate`
  ADD PRIMARY KEY (`cateID`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `cmt_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tb_prod_cate`
--
ALTER TABLE `tb_prod_cate`
  MODIFY `cateID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD CONSTRAINT `tb_comment_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `tb_product` (`productID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `tb_comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`cateID`) REFERENCES `tb_prod_cate` (`cateID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
