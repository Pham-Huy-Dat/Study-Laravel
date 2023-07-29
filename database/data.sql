-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: eshop_laravel
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (8,'2019_12_14_000001_create_personal_access_tokens_table',1),(16,'2023_06_30_141557_create_tbl_product',2),(17,'2023_07_01_014649_create_tbl_order',2),(18,'2023_07_01_021553_create_tbl_order_details',2),(19,'2023_07_01_021602_create_tbl_status',2),(20,'2023_07_01_021626_create_tbl_category',2),(21,'2023_07_01_021636_create_tbl_account',2),(22,'2023_07_01_021645_create_tbl_admin_account',2),(24,'2014_10_12_100000_create_password_resets_table',3),(25,'2023_07_02_041111_after_product',3),(26,'2014_10_12_000000_create_users_table',4),(27,'2014_10_12_200000_add_two_factor_columns_to_users_table',4),(28,'2023_07_04_023457_create_sessions_table',4),(29,'2014_10_12_100000_create_password_reset_tokens_table',5),(30,'2019_08_19_000000_create_failed_jobs_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('FhhTYJgTJhwDbzZuXY3Evo3vWQQ65VedVAUQNsBT',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGlLVnRpZHBsMnM1TlFPRzhEZXU0QnZwWEdVZ2FSOU1lZDdBMmRJUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1688531038),('gzmNVR7qWt8RkdZvYr2hIemPYB29GN2iADPjFxb0',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQXZxbklETVlCYUJ1d05rWjVrQ1VkblhQNjhaR0Ywb01SeHA1TjZuUCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1688722259),('vY9sIpaKjTa0WqLt3osaDJyEvEaxLinfLB2s6OQz',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOE9WOHlEbkYwUjAxekFqekl2UzB4WWpRempjdTNNdlNZeUVWYVNFdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1688522283);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_account`
--

DROP TABLE IF EXISTS `tbl_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_account` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tbl_account_user_name_unique` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_account`
--

LOCK TABLES `tbl_account` WRITE;
/*!40000 ALTER TABLE `tbl_account` DISABLE KEYS */;
INSERT INTO `tbl_account` VALUES (1,'thanh tam','0336552700','$2y$10$VhVr/MuFSRUeH9viUVEkUu5ye/hSOuxmR/UIvSE2rtcYYGicQ33WS','test','2023-07-12 02:55:29','2023-07-12 02:55:29'),(2,'abc','1234512345','$2y$10$aC5lwZg0oeAQnNvNftYxkeC6wzK2Rd4hY2EUKSm.Xj8oilokfjnrO','test1','2023-07-12 23:49:19','2023-07-12 23:49:19'),(3,'www','1231231123','123123','test2','2023-07-13 00:47:39','2023-07-13 00:47:39'),(4,'vvvv','0336552700','4297f44b13955235245b2497399d7a93','bug12','2023-07-13 00:55:33','2023-07-13 00:55:33'),(5,'thanh tam','0336552700','4297f44b13955235245b2497399d7a93','bug22','2023-07-13 03:16:48','2023-07-13 03:16:48'),(6,'thanh tam','0336552700','$2y$10$eWYn1kd.CExb.Rub74rIl.rzL3pUySx7TdEMUa5Ce6vZ2SzfAFnn.','User','2023-07-27 23:18:07','2023-07-27 23:18:07'),(7,'abc','4124122','$2y$10$9UTUhoTzmUsZIi.gVFV57.XbvD.6Qd9oGxx39.WRvZuneqeu1H4uu','User1','2023-07-27 23:25:03','2023-07-27 23:25:03');
/*!40000 ALTER TABLE `tbl_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_admin_account`
--

DROP TABLE IF EXISTS `tbl_admin_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_admin_account` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tbl_admin_account_user_name_unique` (`admin_name`),
  UNIQUE KEY `tbl_admin_account_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_admin_account`
--

LOCK TABLES `tbl_admin_account` WRITE;
/*!40000 ALTER TABLE `tbl_admin_account` DISABLE KEYS */;
INSERT INTO `tbl_admin_account` VALUES (1,'Admin','codetoanbug@gmail.com','4297f44b13955235245b2497399d7a93',NULL,NULL),(2,'Admin1','codetoanbug1@gmial.com','4297f44b13955235245b2497399d7a93',NULL,NULL);
/*!40000 ALTER TABLE `tbl_admin_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_category` (
  `id` int NOT NULL,
  `name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_category`
--

LOCK TABLES `tbl_category` WRITE;
/*!40000 ALTER TABLE `tbl_category` DISABLE KEYS */;
INSERT INTO `tbl_category` VALUES (1,'Iphone',NULL,NULL),(2,'Ipad',NULL,NULL),(3,'Mac',NULL,NULL),(4,'Watch',NULL,NULL),(5,'Sound',NULL,NULL);
/*!40000 ALTER TABLE `tbl_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_time` date NOT NULL,
  `name_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_money` double NOT NULL,
  `id_status` int NOT NULL,
  `id_customer` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id_customer_idx` (`id_customer`),
  CONSTRAINT `order_id_customer` FOREIGN KEY (`id_customer`) REFERENCES `tbl_account` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_order`
--

LOCK TABLES `tbl_order` WRITE;
/*!40000 ALTER TABLE `tbl_order` DISABLE KEYS */;
INSERT INTO `tbl_order` VALUES (1,'2023-07-27','Nguyễn Văn A','số 2 quận 1 Hà Nội','4124122','toni@gmail.com',47345500,1,5,NULL,NULL),(2,'2023-07-27','Nguyễn Văn A','số 2 quận 1 Hà Nội','4124122','toni@gmail.com',47345500,1,5,NULL,NULL),(4,'2023-07-27','cosadf','số 2 qưeqwe Hà Nội','234','acb',52532000,2,5,NULL,NULL);
/*!40000 ALTER TABLE `tbl_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_order_details`
--

DROP TABLE IF EXISTS `tbl_order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_order_details` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_order` int NOT NULL,
  `id_product` int NOT NULL,
  `price_sale` double NOT NULL,
  `quantity_number` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_order_detail_prodcut_idx` (`id_product`),
  CONSTRAINT `fk_order_detail_prodcut` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_order_details`
--

LOCK TABLES `tbl_order_details` WRITE;
/*!40000 ALTER TABLE `tbl_order_details` DISABLE KEYS */;
INSERT INTO `tbl_order_details` VALUES (1,2,2,19190000,1,NULL,NULL),(2,2,7,10990000,2,NULL,NULL),(4,4,3,21690000,1,NULL,NULL),(5,4,5,23990000,1,NULL,NULL);
/*!40000 ALTER TABLE `tbl_order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` float NOT NULL,
  `id_category` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category_idx` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (1,'iPhone 14 Pro 128GB',21690000,'img/Product/product-items/iPhone/iphone-14-pro-128gb_240.png','img/Product/product-items/iPhone/iphone-14-pro-128gb_240(1);.jpg','img/Product/product-items/iPhone/iphone-14-pro-128gb_240(2).jpg','iPhone 14 Pro mang đến những trải nghiệm khác biệt. Dynamic Island giúp bạn dễ dàng truy cập thông tin và theo dõi các hoạt động. Camera 48MP cho độ chi tiết đáng kinh ngạc khi bạn chụp ảnh trong ProRAW. Pin ấn tượng kèm iOS 16, iPhone 14 Pro là ví dụ tốt nhất cho việc tích hợp phần cứng và phần mềm đẳng cấp thế giới của Apple.','Thiết kế camera trước dạng “tai thỏ” đã quá quen thuộc với người dùng khi liên tục xuất hiện trên 4 thế hệ smartphone gần nhất (kể từ iPhone X series tới iPhone 13 series);. Tuy nhiên Apple đã loại bỏ thiết kế này trên phiên bản iPhone 14 Pro và thay thế với diện mạo hình viên thuốc độc đáo hay còn được biết tới là “Dynamic Island”. Phần cắt này cũng chiếm ít không gian hơn so với notch truyền thống trên các mẫu iPhone 13 Pro.\n\nTính năng mới có thể biến đổi thành các hình dạng và kích thước khác nhau phù hợp với cuộc gọi đến, cảnh báo, thông báo, xác thực Face ID, hẹn giờ, điều hướng từng chặng, v.v. Bạn có thể truy cập các điều khiển phương tiện mà không cần kéo Trung tâm thông báo xuống. Dynamic Island rất được lòng những người dùng iPhone lâu năm vì không chỉ trông đẹp hơn notch mà còn cung cấp tiện ích thực tế giúp tối thiểu hóa thao tác sử dụng.',27990000,1,NULL,NULL),(2,'iPhone 14 128GB',19190000,'img/Product/product-items/iPhone/0009181_iphone-14-128gb_240.png','img/Product/product-items/iPhone/0009181_iphone-14-128gb_240(1).jpg','img/Product/product-items/iPhone/0009181_iphone-14-128gb_240(2).jpg','iPhone 14 128GB là phiên bản được rất nhiều người dùng yêu thích bởi sở hữu mức giá “dễ thở\" nhất. Dòng máy cũng có nhiều cải tiến về chất lượng camera và hiệu năng xử lý. Chi tiết về đặc điểm nổi bật của iPhone 14 128GB bạn hãy theo dõi trong nội dung dưới đây. ','Với hiệu năng có thể nói là cực kì lớn mà iPhone 14 128GB sở hữu, người dùng sẽ có trải nghiệm vô cùng tuyệt vời với chế độ ổn định nâng cao. Nhờ chế độ Action Mode, người dùng sẽ có những thước video ổn định, không bị rung lắc. Điều này giúp bạn thỏa sức sáng tạo những nội dung video, quay TikTok mượt mà, sắc nét và có được đoạn hình ảnh chân thực nhất ngay cả khi bạn đang chạy trên con đường gồ ghề.',24990000,1,NULL,NULL),(3,'iPhone 14 Plus 128GB',21690000,'img/Product/product-items/iPhone/0009495_iphone-14-plus-128gb_240.png','img/Product/product-items/iPhone/0009495_iphone-14-plus-128gb_240(1);.jpg','img/Product/product-items/iPhone/0009495_iphone-14-plus-128gb_240(2).jpg','“Nhỏ mà có võ”, 128GB được coi là mức dung lượng “khủng” đủ chỗ trống để chứa khoảng 35.000 bức ảnh được chụp từ camera 12MP cũng như tối đa 45 giờ xem video 1080p dưới định dạng HEVC của Apple. Với mức dung lượng tối thiểu 128GB, bạn có thể cài đặt khoảng 3.368 ứng dụng ở kích thước trung bình 33MB, đồng thời có nhiều không gian trống cho sách điện tử, nhạc, ảnh và video.','iPhone 14 Plus 128GB quay trở lại đường đua công nghệ nhằm giải quyết nhu cầu của những người muốn sử dụng màn hình lớn tương đương iPhone 14 Pro Max nhưng vẫn tối ưu chi phí bỏ ra.\n\niPhone 14 Plus được trang bị công nghệ màn OLED Super Retina XDR với độ lớn lên đến 6,7 inch, độ phân giải đạt 2778 x 1284 pixel đem đến trải nghiệm hiển thị sắc nét, sống động và chân thực tối đa. Ngoài ra, dòng máy iPhone 14 Plus được tích hợp đèn flash True Tone hỗ trợ điều chỉnh tự động theo ánh sáng môi trường. Màn hình được phủ lớp Oleophobic chống bám vân tay mang lại cảm giác cao cấp cho người dùng.',27990000,1,NULL,NULL),(4,'iPad gen 9 10.2 inch WiFi 64GB',6990000,'img/Product/product-items/iPad/0006205_ipad-gen-9-102-inch-wifi-64gb_240.png','img/Product/product-items/iPad/0006205_ipad-gen-9-102-inch-wifi-64gb_240(1);.jpg','img/Product/product-items/iPad/0006205_ipad-gen-9-102-inch-wifi-64gb_240(2).jpg','iPad Gen 9 (2021); Mạnh mẽ. Dễ sử dụng. Đa năng. Học sinh thích học với iPad mới. Với chip A13 Bionic mạnh mẽ, thời lượng pin bền bỉ cả ngày, màn hình Retina 10.2 inch tuyệt đẹp, Wi-Fi siêu nhanh, camera trước Ultra Wide với tính năng Trung Tâm Màn Hình, và tương thích với Apple Pencil và the Smart Keyboard. iPad giúp học sinh làm việc và học tập nhiều hơn và dễ dàng hơn. Tất cả tính năng với mức giá ấn tượng.','Ứng dụng có sẵn trên App Store. Nội dung được cung cấp có thể thay đổi. Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình. Truy cập  để biết thêm thông tin. Phụ kiện được bán riêng. Khả năng tương thích tùy thuộc thế hệ sản phẩm. Cần có gói cước dữ liệu. Mạng LTE chuẩn Gigabit, 4G LTE Advanced, 4G LTE và gọi Wi-Fi chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ phụ thuộc vào thông lượng lý thuyết và có thể thay đổi tùy địa điểm và nhà mạng. Để biết thông tin về hỗ trợ mạng LTE, vui lòng liên hệ nhà mạng và truy cập .',9990000,2,NULL,NULL),(5,'iPad Pro M2 11 inch WiFi 128GB',23990000,'img/Product/product-items/iPad/0007071_ipad-pro-m2-11-inch-wifi-128gb_240.png','img/Product/product-items/iPad/0007071_ipad-pro-m2-11-inch-wifi-128gb_240(1);.jpeg','img/Product/product-items/iPad/0007071_ipad-pro-m2-11-inch-wifi-128gb_240(2).jpeg','Đây là lần đầu các mẫu iPad được thiết kế đặc biệt để giảm thiểu tác động của chúng đối với môi trường. Với chất liệu 100% vàng tái chế, áp dụng cho lớp mạ của nhiều bảng mạch in, cũng như các nguyên tố nhôm, thiếc và đất hiếm tái chế, kèm với bao bì mới chất liệu sợi, loại bỏ lớp bọc nhựa bên ngoài đến 99%, Apple đang thực sự nghiêm túc với mục tiêu loại bỏ hoàn toàn nhựa khỏi tất cả bao bì vào năm 2025.','M2, sự khởi đầu của thế hệ chip M-series tiếp theo của Apple, mang đến hiệu năng và khả năng đột phá hơn nữa cho iPad Pro thế hệ 2022. M2 có CPU 8 nhân — nhanh hơn tới 15% so với M1 — với những cải tiến về cả lõi hiệu suất và hiệu quả, cùng GPU 10 lõi, mang lại hiệu suất đồ họa nhanh hơn tới 35% cho những người dùng khó tính nhất.',20790000,2,NULL,NULL),(6,'iPad Pro M2 12.9 inch WiFi 128GB',28390000,'img/Product/product-items/iPad/0007301_ipad-pro-m2-129-inch-wifi-128gb_240.png','img/Product/product-items/iPad/0007301_ipad-pro-m2-129-inch-wifi-128gb_240(1);.jpeg','img/Product/product-items/iPad/0007301_ipad-pro-m2-129-inch-wifi-128gb_240(2).jpeg','iPad Pro M1 12.9\" (2021); Wifi+4G vẫn giữ thiết kế quen thuộc như những phiên bản tiền nhiệm. Tuy nhiên, Apple đã mang đến một vài điểm khác biệt như 4 cạnh bo cong vuông vức, màn hình viền mỏng hơn. Kích thước 12.9 inch của máy cũng tương tự phiên bản năm 2020.','Sản phẩm này được trang bị tấm nền Mini LED giúp hiển thị màu tốt hơn, tạo ra những điểm nhấn nổi bật, chi tiết tinh tế. Đồng thời hạn chế khả năng cháy màn hình so với các công nghệ trước đó.\n\niPad Pro M1 12.9\" (2021); Wifi+4G sở hữu công nghệ màn hình Liquid Retina XDA mang đến cho người dùng những những trải nghiệm hình ảnh vô cùng chân thực với độ chi tiết ấn tượng. Thiết bị có độ sáng màn hình lên đến 1.600 nits với tỷ lệ tương phản là 1.000.000:1.\n\n',31990000,2,NULL,NULL),(7,'iPad Gen 10th 10.9 inch WiFi 64GB',10990000,'img/Product/product-items/iPad/0009725_ipad-gen-10th-109-inch-wifi-64gb_240.png','img/Product/product-items/iPad/0009725_ipad-gen-10th-109-inch-wifi-64gb_240(1);.jpg','img/Product/product-items/iPad/0009725_ipad-gen-10th-109-inch-wifi-64gb_240(2).jpg','Thoạt nhìn, người dùng có thể nhận nhầm iPad Gen 10 với hai dòng iPad nâng cao Air và Pro bởi ngoại hình vuông vức, không viền, không có nút Home, khác biệt hoàn toàn với sản phẩm tiền nhiệm - chiếc iPad Gen 9. Nút nguồn được chuyển lên cạnh trên và tích hợp Touch ID nên rất thuận tiện khi sử dụng. ','A14 Bionic có 16 nhân xử lý trí tuệ nhân tạo (Neutral Engine);, gấp đôi số lượng so với chip A13 của thế hệ trước đó, mang lại cho nó nhiều sức mạnh hơn để xử lý các tác vụ máy học nâng cao. Điều này giúp tăng khả năng học máy của nó lên tới 80%.',12990000,2,NULL,NULL),(8,'MacBook Air M1 2020 (8GB RAM | 256GB SSD);',18590000,'img/Product/product-items/Mac/0000723_macbook-air-m1-2020-8gb-ram-256gb-ssd_240.png','img/Product/product-items/Mac/0000723_macbook-air-m1-2020-8gb-ram-256gb-ssd_240(1).jpg','img/Product/product-items/Mac/0000723_macbook-air-m1-2020-8gb-ram-256gb-ssd_240(2).jpg','Là một chiếc ultrabook cao cấp, MacBook Air mang trên mình tất cả thẩm mỹ tinh tế của Apple trong thiết kế sản phẩm. MacBook Air M1 được hoàn thiện từ chất liệu nhôm nguyên khối, không chỉ nhẹ mà còn rất sang trọng. Trọng lượng chỉ 1,29kg cũng giúp người dùng tiện lợi mang đi sử dụng ở mọi nơi. Khách hàng có thể lựa chọn ba phiên bản màu khác nhau phù hợp với cả tính mỗi người, bao gồm xám, bạc và vàng.\n\n','Cảm giác mở máy bằng một tay vẫn giữ được sự mượt mà, cho thấy khả năng hoàn thiện bản lề cực tốt của Apple. Khi mở máy ra, người dùng sẽ thấy bàn phím Magic Keyboard có hành trình phím 1mm, hỗ trợ đèn nền và TouchPad có kích thước lớn, giúp các thao tác trên máy trở nên trơn tru và có phản hồi tốt. Hai dải loa stereo được bố trị bên cạnh bàn phím, có âm lượng và chất âm tốt, hỗ trợ người dùng mọi tác vụ giải trí. Đặc biệt, nhờ không có quạt gió nên người dùng sẽ không tìm thấy khe tản nhiệt trên thiết bị này, tạo ra cảm giác thiết kế liền mạch cho sản phẩm.',28990000,3,NULL,NULL),(9,'MacBook Air M2 2022 (8GB RAM | 256GB SSD);',26790000,'img/Product/product-items/Mac/0008502_macbook-air-m2-2022-8gb-ram-256gb-ssd_240.png','img/Product/product-items/Mac/0008502_macbook-air-m2-2022-8gb-ram-256gb-ssd_240(1).jpeg','img/Product/product-items/Mac/0008502_macbook-air-m2-2022-8gb-ram-256gb-ssd_240(2).jpeg','Điều đầu tiên gây ấn tượng với giới công nghệ ngay từ khi ra mắt của MacBook Air M2 chính là ngoại hình của máy, thậm chí nhiều ý kiến cho rằng phần thiết kế này còn đẹp hơn cả dòng Pro. Nếu  đã từng tạo nên cơn sốt trên thế giới về độ mỏng thì sang tới dòng M2, độ dày của máy còn được tối giản hơn. MacBook Air M2 chỉ mỏng 11.3mm, nặng chỉ khoảng 1.3kg, trong khi Surface Laptop 4 “Ultra-Thin” dày 14.5mm, Dell XPS 13 2022 dày 14.8mm.','Bên cạnh đó, phần vỏ ngoài vuông vức thay vì kiểu vát mỏng ở phần thân máy như các dòng  trước, làm từ vỏ nhôm tái chế không chỉ tạo nên độ chắc chắn mà còn tăng thêm tính thời thượng cho sản phẩm. Nhiều người dùng cho rằng các phiên bản của MacBook Air M2 tương tự như một chiếc iPad có gắn bàn phím.\n\nMacBook Air M2 có tất cả 4 màu: Midnight, Starlight, Space Gray, Silver. Trong số đó, màu Midnight được kỳ vọng tạo nên cơn sốt trong cộng đồng Apple-fan. Xét về tính thời trang thì đây sẽ là lựa chọn đáng để cân nhắc.',32990000,3,NULL,NULL),(10,'MacBook Pro 13 inch M2 (10 core| 8GB RAM| 256GB SSD);',29490000,'img/Product/product-items/Mac/0008682_macbook-pro-13-inch-m2-10-core-8gb-ram-256gb-ssd_240.png','img/Product/product-items/Mac/0008682_macbook-pro-13-inch-m2-10-core-8gb-ram-256gb-ssd_240(1).jpg','img/Product/product-items/Mac/0008682_macbook-pro-13-inch-m2-10-core-8gb-ram-256gb-ssd_240(2).jpg','MacBook Pro M2 8GB 256GB được hãng Táo Khuyết trang bị chip Apple M2 với sức mạnh khủng, giúp xử lý mọi tác vụ nặng mượt mà vượt trội. Đây là thế hệ chip Silicon mới, được Apple ra mắt chính thức tại sự kiện WWDC 2022 vào đầu tháng 6.','MacBook Pro M2 8GB/256GB vẫn sử dụng màn hình LED retina 13.3 inch. Đây là loại màn hình có độ phân giải 2560 x 1600 pixels với góc nhìn rộng, cho phép hiển thị hình ảnh sắc nét, sống động từng chi tiết.\n\nMàn hình trên thiết bị công nghệ này còn sử dụng dải màu rộng P3 cùng 1 tỷ màu và độ sáng lên đến 500 nits. Thiết kế này mang lại khả năng tái tạo màu sắc vô cùng chuẩn xác, phù hợp với những người chuyên thiết kế hình ảnh, đồ họa,…\n\nCông nghệ True Tone trên màn hình Retina cũng giúp căn chỉnh nhiệt độ màu theo điều kiện ánh sáng môi trường. Nhờ đó mà mọi khuôn hình được hiển thị một cách tự nhiên, giúp bảo vệ tối đa thị giác của người dùng.',35990000,3,NULL,NULL),(11,'MacBook Pro 14 inch M2 Pro (16 Core| 16GB| 512GB);',47750000,'img/Product/product-items/Mac/0011267_macbook-pro-14-inch-m2-pro-16-core-16gb-512gb_240.jpeg','img/Product/product-items/Mac/0011267_macbook-pro-14-inch-m2-pro-16-core-16gb-512gb_240(1).jpeg','img/Product/product-items/Mac/0011267_macbook-pro-14-inch-m2-pro-16-core-16gb-512gb_240(2).jpeg','MacBook Pro 14 inch với chip M2 Pro và M2 Max đưa sức mạnh và tốc độ lên một tầm cao mới, dù đang được cắm sạc hay chạy bằng pin. Với màn hình Liquid Retina XDR tuyệt đẹp, tất cả các cổng kết nối bạn cần và thời lượng pin dùng cả ngày,1 chiếc máy tính xách tay chuyên nghiệp này sẽ đồng hành cùng bạn ở bất cứ nơi đâu.\n\n ','Về ngoại hình, MacBook Pro 14\" M2 Pro không có quá nhiều sự khác biệt trong thiết kế so với phiên bản tiền nhiệm. Tuy nhiên, đây vẫn là một sản phẩm vô cùng ấn tượng với kiểu dáng vuông vắn và được hoàn thiện từ các vật liệu nhôm tái chế thân thiện với môi trường. Chiếc máy vẫn giữ nguyên thiết kế của chiếc Macbook Pro 14\" - M1 Pro 2021, với lớp vỏ kim loại nguyên khối bằng nhôm, kiểu dáng phẳng, viền màn hình mỏng và chiếc notch tai thỏ quen thuộc.',55000000,3,NULL,NULL),(12,'Apple Watch Series 7 Nhôm GPS',7990000,'img/Product/product-items/Watch/0000896_apple-watch-se-2022-nhom-gps_240.png','img/Product/product-items/Watch/0000896_apple-watch-se-2022-nhom-gps_240(1).jpg','img/Product/product-items/Watch/0000896_apple-watch-se-2022-nhom-gps_240(2).jpg','Apple Watch Series 7 (GPS); Màn hình Retina Luôn Bật lớn nhất, tiên tiến nhất giúp mọi tác vụ bạn thực hiện với Apple Watch Series 7 trông lớn hơn và đẹp hơn. Series 7 là Apple Watch bền bỉ nhất từng được chế tạo, với mặt trước bằng thủy tinh chống nứt tốt hơn. Các tính năng tiên tiến giúp bạn đo mức ôxi trong máu, đo điện tâm đồ (ECG); bất kỳ lúc nào, truy cập ứng dụng theo dõi giấc ngủ và ứng dụng chú tâm. Bạn cũng có thể theo dõi hàng chục bài tập thể chất, bao gồm Thái Cực Quyền và pilates mới.','Apple Watch Series 7 tương thích với iPhone 6s hoặc các phiên bản cao hơn sử dụng iOS 15 hoặc các bản cập nhật cao hơn. Số đo từ ứng dụng Ôxi Trong Máu không được dùng cho mục đích y tế, kể cả tự chẩn đoán hoặc xin ý kiến bác sĩ và chỉ được thiết kế cho hoạt động luyện tập thông thường và mục đích chăm sóc sức khỏe. Ứng dụng ECG chỉ khả dụng trên Apple Watch Series 4 và các phiên bản cao hơn (không bao gồm Apple Watch SE); sử dụng iOS và watchOS phiên bản mới nhất. Truy cập  để biết thông tin về khả năng tương thích. Không được sử dụng ECG cho người dưới 22 tuổi. Với ứng dụng ECG, Apple Watch có khả năng tạo ra kết quả ECG tương tự như điện tâm đồ một đạo trình.',11990000,4,NULL,NULL),(13,'Apple Watch SE Nhôm 2022 GPS',6190000,'img/Product/product-items/Watch/0001025_apple-watch-series-7-nhom-gps_240.png','img/Product/product-items/Watch/0001025_apple-watch-series-7-nhom-gps_240(1).jpg','img/Product/product-items/Watch/0001025_apple-watch-series-7-nhom-gps_240(2).jpg','                        So với thế hệ đầu tiên, Apple Watch SE 2022 không có nhiều thay đổi trong thiết kế, nhưng nếu nhìn kĩ ta có thể thấy phiên bản 2022 đã có viền dày hơn, làm từ nhôm tái chế, đi kèm với dây cao su mềm mại và ôm sát cổ tay người dùng, cho cảm giác dễ chịu khi đeo.\n                    ','                        Với phiên bản này, nó có kích thước kích thước dài - rộng - ngang lần lượt là 44 x 38 x 10.7 mm, màn hình OLED có độ phân giải: 448 x 368 pixels, độ sáng cao lên đến 1000 nits mang lại chất lượng hình ảnh rõ ràng, sắc nét đến từng chi tiết và trải nghiệm vuốt chạm mượt mà. Mặt kính cường lực Ion-X strengthened glass càng giúp cho đồng hồ thêm bền, hạn chế vỡ nứt hay trầy xước.\n                    ',8990000,4,NULL,NULL),(14,'Apple Watch Series 8 41mm nhôm GPS',8990000,'img/Product/product-items/Watch/0001031_apple-watch-series-8-41mm-nhom-gps_240.png','img/Product/product-items/Watch/0001031_apple-watch-series-8-41mm-nhom-gps_240(1).jpeg','img/Product/product-items/Watch/0001031_apple-watch-series-8-41mm-nhom-gps_240(2).jpeg','Apple Watch Series 8 sở hữu các cảm biến và ứng dụng sức khỏe tối tân, vì vậy bạn có thể đo điện tâm đồ (ECG);, 1 đo nhịp tim và nồng độ oxy trong máu, 2 theo dõi sự thay đổi nhiệt độ3 để nắm bắt thông tin chuyên sâu về chu kỳ kinh nguyệt. 4 Các tính năng Phát Hiện Va Chạm, theo dõi giai đoạn ngủ và các chỉ số tập luyện chuyên sâu giúp bạn luôn năng động, khỏe mạnh, an toàn, và kết nối.','Với màn hình Retina, độ sáng lên đến 1000 nits - lớn hơn 20% so với Apple Watch SE - Apple Watch Series 8 mang đến khả năng hiển thị vô cùng sắc nét. Cùng với tính năng Always on Display - luôn bật sáng giúp người dùng sẽ dễ dàng, thuận tiện khi xem các thông báo, thông tin hiển thị trên đồng hồ.',11990000,4,NULL,NULL),(15,'Apple Watch Ultra LTE 49mm Alpine Loop size S',19990000,'img/Product/product-items/Watch/0008913_apple-watch-ultra-lte-49mm-alpine-loop-size-s_240.png','img/Product/product-items/Watch/0008913_apple-watch-ultra-lte-49mm-alpine-loop-size-s_240(1).jpeg','img/Product/product-items/Watch/0008913_apple-watch-ultra-lte-49mm-alpine-loop-size-s_240(2).jpeg','Apple Watch Ultra LTE 49mm Alpine size S ra mắt cùng với rất nhiều siêu phẩm của nhà Apple như: iPhone 14 Series, Apple Watch series 8, Apple Watch SE 2 hay AirPods Pro 2 vào tháng 9/2022. \n\nApple Watch Ultra LTE 49mm Alpine size S được đánh giá là sản phẩm có chiều dài dây ngắn gọn, vô cùng phù hợp với người có cổ tay nhỏ, đặc biệt là chị em phụ nữ.  Cùng với nhiều tính năng ưu việt về sức khỏe, hỗ trợ tập luyện, cảnh báo và an toàn Apple Watch Ultra LTE 49mm Alpine size S đang được nhiều khách hàng quan tâm và tìm hiểu. ','Apple Watch Ultra LTE 49mm Alpine Loop Size S có chiều dài dây ngắn nhất từ 130 - 160mm. Chiều dài dây của phiên bản này phù hợp với những người có cổ tay nhỏ, đặc biệt là phái nữ. Người dùng Apple Watch Ultra LTE 49mm Alpine Loop Size S sẽ dễ dàng điều chỉnh và đeo gọn gàng hơn vì không bị thừa quá nhiều dây.\n\nBên cạnh đó, sản phẩm này còn được thiết kế dây đeo Alpine Loop, được làm từ 2 lớp vải dệt liền mạch, nhẹ, độ bền cao. Cùng với móc khóa chữ G làm bằng titan chống ăn mòn cao giúp bạn đeo chắc chắn và bền bỉ hơn. ',23990000,4,NULL,NULL),(16,'AirPods Max',12590000,'img/Product/product-items/Sounds/0012005_airpods-max_240.jpg','img/Product/product-items/Sounds/0012005_airpods-max_240(1).jpg','img/Product/product-items/Sounds/0012005_airpods-max_240(2).jpg','AirPods Max định nghĩa lại tai nghe chụp tai. Driver loa do Apple thiết kế cho âm thanh có độ trung thực cao. Mọi chi tiết, từ gọng đeo đến đệm tai, đều được thiết kế vừa vặn lạ thường. Tính năng Chủ Động Khử Tiếng Ồn dẫn đầu thị trường giúp ngăn chặn các âm thanh bên ngoài lọt vào tai trong khi Chế Độ Xuyên Âm cho phép bạn nghe âm thanh xung quanh.','Apple đã bọc một lớp chất liệu mềm bên ngoài khung thép không gỉ để tạo cảm giác linh hoạt, mềm mại mà vẫn đảm bảo tính bền bỉ cứng cáp trong thiết kế tổng thể chung. Ngoài ra, chủ nhân của AirPods Max có thể điều chỉnh độ dài hai bên headband cho tới khi ưng ý và phù hợp với kích cỡ riêng của bản thân.',13990000,5,NULL,NULL),(17,'AirPods 2',2650000,'img/Product/product-items/Sounds/0006052_airpods-2_240.jpeg','img/Product/product-items/Sounds/0006052_airpods-2_240(1).jpeg','img/Product/product-items/Sounds/0006052_airpods-2_240(2).jpeg','AirPods gen 2 with Charging Case (hộp sạc thường);. AirPods 2 là kết hợp của thiết kế mang tính biểu tượng và âm thanh chất lượng cao. Đem đến trải nghiệm tai nghe không dây độc đáo và cảm giác vừa vặn, thoải mái cả ngày dài cho mọi người. Kết nối tức thì khi đeo vào tai. Đều tuyệt vời.','AirPods 2 - Wireless Charging Case vẫn sở hữu thiết kế quen thuộc, đặc trưng cho sản phẩm của Apple. Nhìn thoáng qua sẽ thấy chiếc tai nghe này không khác mấy so với AirPods đời đầu. Thế nhưng thực tế, Apple đã tùy biến, tinh chỉnh để mang lại âm thanh có độ tập trung hơn và tạo cảm giác thoải mái khi đeo. ',4390000,5,NULL,NULL),(18,'Tai nghe Apple AirPods 3 sạc có dây Lightning',4350000,'img/Product/product-items/Sounds/0006057_tai-nghe-apple-airpods-3-sac-co-day-lightning_240.jpeg','img/Product/product-items/Sounds/0006057_tai-nghe-apple-airpods-3-sac-co-day-lightning_240(1).jpeg','img/Product/product-items/Sounds/0006057_tai-nghe-apple-airpods-3-sac-co-day-lightning_240(2).jpeg','AirPod 3 Lightning được đánh giá là phiên bản cải tiến cao cấp của người anh em AirPods 2 trước đó và là phiên bản kế thừa của AirPods Pro. Điều đó được thể hiện rõ nét trong thiết kế hộp sạc và tai nghe.','AirPods 3 có khả năng chống nước hiệu quả ở cả tai nghe và hộp sạc (đạt chuẩn chống nước IPX4);. Sản phẩm có thể chịu được những tia nước bắn ở cường độ nhẹ. Vì vậy, tai nghe vẫn có thể được sử dụng cả khi bạn phải hoạt động dưới trời mưa nhỏ.',5490000,5,NULL,NULL),(19,'AirPods Pro 2',5990000,'img/Product/product-items/Sounds/0000211_airpods-pro-2_240.png','img/Product/product-items/Sounds/0000211_airpods-pro-2_240(1).jpg','img/Product/product-items/Sounds/0000211_airpods-pro-2_240(2).jpg','AirPods Pro 2 sở hữu công nghệ Chủ Động Khử Tiếng Ồn cao hơn đến 2 lần, cùng với chế độ Xuyên Âm Thích Ứng và Âm Thanh Không Gian Cá Nhân Hóa và tính năng theo dõi đầu chủ động để tạo ra âm thanh chân thực. AirPods Pro hiện có nhiều kích cỡ đầu tai nghe (XS, S, M, L); để lựa chọn và thời gian nghe lên đến 6 giờ.','Apple AirPods Pro 2 sở hữu thiết kế quen thuộc như những phiên bản tiền nhiệm với thiết kế hộp sạc đặc trưng. Hộp sạc nãy sẽ bao gồm cổng sạc Lightning, loa cảnh báo, đèn báo pin, nơi móc dây đeo, giúp bạn dễ dàng mang theo, mà không sợ bị rơi.',6790000,5,NULL,NULL),(20,'iPhone 13',16790000,'img/Product/product-items/iPhone/0000596_iphone-13_240.png','img/Product/product-items/iPhone/0000596_iphone-13_240(1).jpg','img/Product/product-items/iPhone/0000596_iphone-13_240(2).jpg','iPhone 13 với hệ thống camera kép tiên tiến nhất từng có trên iPhone. Chip A15 Bionic thần tốc. Bước nhảy vọt về thời lượng pin. Thiết kế bền bỉ. Mạng 5G siêu nhanh. Cùng với màn hình Super Retina XDR sáng hơn. \n\nTính năng nổi bật\n• Màn hình Super Retina XDR 6.1 inch\n• Chế độ Điện Ảnh làm tăng thêm độ sâu trường ảnh nông và tự động thay đổi tiêu cự trong video\n• Hệ thống camera kép tiên tiến với camera Wide và Ultra Wide 12MP; Phong Cách Nhiếp Ảnh, HDR thông minh thế hệ 4, chế độ Ban Đêm, khả năng quay video HDR Dolby Vision 4K\n• Camera trước TrueDepth 12MP với chế độ Ban Đêm và khả năng quay video HDR Dolby Vision 4K\n• Chip A15 Bionic cho hiệu năng thần tốc\n• Thời gian xem video lên đến 19 giờ\n• Thiết kế bền bỉ với Ceramic Shield\n• Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường\n• Mạng 5G cho tốc độ tải xuống siêu nhanh, xem video và nghe nhạc trực tuyến chất lượng cao\n• iOS 15 tích hợp nhiều tính năng mới cho phép bạn làm được nhiều việc hơn bao giờ hết với iPhone','Thiết kế nhiều màu sắc với camera chéo nổi bật \n\nTheo thông báo từ phía Apple, iPhone 13 năm nay sẽ có kích thước màn hình 6.1 inch. Nhìn chung, ngôn ngữ thiết kế vẫn sẽ không có quá nhiều thay đổi so với thế hệ tiền nhiệm iPhone 12, vẫn là các cạnh vát phẳng vuông góc. \n\nTuy nhiên, hãng đã rút gọn phần notch nhỏ hơn 20%, để tăng thêm diện tích hiển thị cho người dùng. Mặt trước làm từ kính cường lực Ceramic Shield có độ bền hơn tới 4 lần so với kính cường lực thông thường. \n\niPhone 13 năm nay được trang bị tấm nền Super Retina XDR OLED sáng hơn 28% so với năm ngoái, đạt tối đa 1200 nits khi hiển thị các video và ảnh HDR. Với sự trang bị này bạn có thể trải nghiệm đa tác vụ từ học tập, làm việc cho tới giải trí tối ưu.',24990000,1,NULL,NULL),(21,'iPhone 13 Mini',16990000,'img/Product/product-items/iPhone/0000597_iphone-13-mini_240.png','img/Product/product-items/iPhone/0000597_iphone-13-mini_240(1).jpg','img/Product/product-items/iPhone/0000597_iphone-13-mini_240(2).jpg','iPhone 13 mini với hệ thống camera kép tiên tiến nhất từng có trên . Chip A15 Bionic thần tốc. Thời lượng pin tăng vọt. Thiết kế bền bỉ. Mạng 5G siêu nhanh. Cùng với màn hình Super Retina XDR sáng hơn.\n\nTính năng nổi bật\n\nMàn hình Super Retina XDR 5.4 inch\nChế độ Điện Ảnh làm tăng thêm độ sâu trường ảnh nông và tự động thay đổi tiêu cự trong video\nHệ thống camera kép tiên tiến với camera Wide và Ultra Wide 12MP; Phong Cách Nhiếp Ảnh, HDR thông minh thế hệ 4, chế độ Ban Đêm, khả năng quay video HDR Dolby Vision 4K\nCamera trước TrueDepth 12MP với chế độ Ban Đêm và khả năng quay video HDR Dolby Vision 4K\nChip A15 Bionic cho hiệu năng thần tốc\nThời gian xem video lên đến 17 giờ\nThiết kế bền bỉ với Ceramic Shield\nKhả năng chống nước đạt chuẩn IP68 đứng đầu thị trường\nMạng 5G cho tốc độ tải xuống siêu nhanh, xem video và nghe nhạc trực tuyến chất lượng cao\niOS 15 tích hợp nhiều tính năng mới cho phép bạn làm được nhiều việc hơn bao giờ hết với iPhone','Chip Apple A15 Bionic mới nhất tiếp tục dẫn đầu về hiệu năng. Apple cho biết con chip này có CPU nhanh hơn 50% và GPU nhanh hơn 30% so với đối thủ. A15 Bionic được Apple đánh giá là con chip có khả năng tối ưu hóa năng lượng, bảo vệ quyền riêng tư và hỗ trợ chơi game mượt mà. Con chip này có thể thực hiện được 15.8 nghìn tỷ phép toán mỗi giây, cho trải nghiệm đỉnh hơn nhiều khi sử dụng các ứng dụng bên thứ 3.\n\niPhone 13 Mini có ba tùy chọn bộ nhớ trong bao gồm 128GB, 256GB và 512GB. Chiếc iPhone này tiếp tục hỗ trợ băng tần mạng 5G tiên tiến, tương thích với hơn 200 nhà mạng phổ biến trên toàn thế giới, bao gồm cả 3 nhà mạng lớn tại Việt Nam là Viettel, VinaPhone và MobiFone.',21990000,1,NULL,NULL),(22,'iPhone 12',14990000,'img/Product/product-items/iPhone/0006794_iphone-12-64gb_240.png','img/Product/product-items/iPhone/0006794_iphone-12-64gb_240(1).jpg','img/Product/product-items/iPhone/0006794_iphone-12-64gb_240(2).jpg','iPhone 12 đẩy nhanh mọi tác vụ với A14 Bionic, chip nhanh nhất trên điện thoại thông minh. Hệ thống camera kép mới. Với màn hình Super Retina XDR tuyệt đẹp, nay bạn có thể chiêm ngưỡng từng chi tiết hình ảnh vô cùng sống động.\n\nTính năng nổi bật\nMàn hình Super Retina XDR 6.1 inch\n Ceramic Shield, chất liệu kính bền chắc nhất từng có trên điện thoại thông minh\n A14 Bionic, chip nhanh nhất từng có trên điện thoại thông minh\n Hệ thống camera kép tiên tiến 12MP với các camera Ultra Wide và Wide, chế độ Ban Đêm, Deep Fusion, HDR thông minh thế hệ 3, khả năng quay video HDR Dolby Vision 4K\n Camera trước TrueDepth 12MP với chế độ Ban Đêm và khả năng quay video HDR Dolby Vision 4K\n Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường\n iOS 14 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác','Sở hữu một vẻ bên ngoài sang trọng, bóng bẩy và lịch lãm là vậy, thế nhưng iPhone 12 128GB lại mang trong mình một sức mạnh cực kì khủng khiếp, vượt trội hơn tất cả những mẫu smartphone đang có mặt trên thị trường. Tất cả là nhờ có bộ vi xử lý Apple A14 Bionic được sản xuất trên tiến trình 5nm mới nhất, không chỉ manh mà còn tiết kiệm điện năng tới tối đa. Con chip này được đánh giá là bộ vi xử lý mạnh mẽ nhất, nhanh nhất hiện nay với cấu tạo từ 6 lõi CPU, 11,8 tỷ bóng bán dẫn, 4 lõi GPU mới, và nhanh hơn A13 Bionic tới 40%. Công nghệ kết nối mạng 5G mới cùng với Wi-Fi 6 cũng đã được đưa vào iPhone 12, hứa hẹn sẽ mang tới một khả năng kết nối Internet vượt trội hoàn toàn.',22990000,1,NULL,NULL),(23,'iPhone 11',10390000,'img/Product/product-items/iPhone/0012164_iphone-11-64gb_240.jpg','img/Product/product-items/iPhone/0012164_iphone-11-64gb_240(1).jpg','img/Product/product-items/iPhone/0012164_iphone-11-64gb_240(2).jpg','iPhone 11 với hệ thống camera kép với Ultra Wide. Chế độ Ban Đêm và chất lượng video tuyệt vời.  Chống nước và chống bụi. Thời lượng pin lâu. Với 6 màu tuyệt đẹp. Trải nghiệm iPhone 11.\n\nTính năng nổi bật\nMàn hình Liquid Retina HD LCD 6.1 inch\nChống nước và chống bụi (chống nước ở độ sâu 2 mét trong vòng tối đa 30 phút, đạt mức IP68);\n Hệ thống camera kép 12MP với camera Ultra Wide và Wide; chế độ Ban Đêm, chế độ Chân Dung, và khả năng quay video 4K tốc độ tối đa 60 fps\n Camera trước TrueDepth 12MP với chế độ Chân Dung, có khả năng quay video 4K, và quay video chậm\n Xác thực bảo mật với Face ID\n Chip A13 Bionic với Neural Engine thế hệ thứ ba\n Khả năng sạc nhanh\n Sạc không dây\n iOS 14 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác','iPhone 11 vẫn sở hữu thiết kế tràn viền với “tai thỏ” giống iPhone X. Viền bezel phía trên và dưới cũng được làm gọn lại nhằm tối đa màn hình sử dụng. Cùng với đó, 4 góc của máy cũng được bo tròn nhẹ tạo cảm giác chắc chắn khi cầm trên tay. Mặt lưng iPhone 11 làm từ chất liệu kính nên rất sang trọng, tinh tế. Khác với các dòng iPhone trước, sản phẩm này sẽ có 6 màu bản bạc, vàng, xanh lá, trắng, đen đỏ.\n\nCông nghệ màn hình LCD Retina mang đến chất lượng tốt nhất. Độ phân giải màn hình 1125 x 2436 pixels hiển thị màu sắc chính xác và cho hình ảnh sắc nét. Màn hình rộng 6.1 inch giúp người sử dụng thoải mái trải nghiệm xem phim, lướt web… Đặc biệt Apple đã trang bị tần số quét từ 90 đến 120 Hz với 463 điểm màu.',14990000,1,NULL,NULL),(24,'iPhone 12 128GB',17590000,'img/Product/product-items/iPhone/0006849_iphone-12-128gb_240.png','img/Product/product-items/iPhone/0006794_iphone-12-64gb_240(1).jpg','img/Product/product-items/iPhone/0006794_iphone-12-64gb_240(2).jpg','                        iPhone 12 đẩy nhanh mọi tác vụ với A14 Bionic, chip nhanh nhất trên điện thoại thông minh. Hệ thống camera kép mới. Với màn hình Super Retina XDR tuyệt đẹp, nay bạn có thể chiêm ngưỡng từng chi tiết hình ảnh vô cùng sống động.\n\nTính năng nổi bật\nMàn hình Super Retina XDR 6.1 inch\n Ceramic Shield, chất liệu kính bền chắc nhất từng có trên điện thoại thông minh\n A14 Bionic, chip nhanh nhất từng có trên điện thoại thông minh\n Hệ thống camera kép tiên tiến 12MP với các camera Ultra Wide và Wide, chế độ Ban Đêm, Deep Fusion, HDR thông minh thế hệ 3, khả năng quay video HDR Dolby Vision 4K\n Camera trước TrueDepth 12MP với chế độ Ban Đêm và khả năng quay video HDR Dolby Vision 4K\n Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường\n iOS 14 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác\n                    ','                        Màn hình của iPhone 12 128GB được trang bị công nghệ tấm nền OLED Super Retina XDR, mang lại cho iPhone 12 một chất lượng hiển thị xuất sắc nhất từ trước đến nay. Đi cùng với đó là độ phân giải Full HD 2,532 x 1,170; cho mật độ điểm ảnh cực tốt lên tới 460ppi. Với màn hình được nâng cấp và cải tiến như vậy, những vị chủ nhân sở hữu iPhone 12 có thể thoải mái thưởng thức những bộ phim hoặc chơi game mà không cần phải lo nghĩ về bất cứ điều gì.\n                    ',24990000,1,NULL,NULL),(25,'iPhone 11 128GB',12090000,'img/Product/product-items/iPhone/0012165_iphone-11-128gb_240.jpeg','img/Product/product-items/iPhone/0012165_iphone-11-128gb_240(1).jpeg','img/Product/product-items/iPhone/0012165_iphone-11-128gb_240(2).jpeg','                                                                        iPhone 11 với hệ thống camera kép với Ultra Wide. Chế độ Ban Đêm và chất lượng video tuyệt vời.  Chống nước và chống bụi. Thời lượng pin lâu. Với 6 màu tuyệt đẹp. Trải nghiệm iPhone 11.\n\nTính năng nổi bật\nMàn hình Liquid Retina HD LCD 6.1 inch\nChống nước và chống bụi (chống nước ở độ sâu 2 mét trong vòng tối đa 30 phút, đạt mức IP68);\n Hệ thống camera kép 12MP với camera Ultra Wide và Wide; chế độ Ban Đêm, chế độ Chân Dung, và khả năng quay video 4K tốc độ tối đa 60 fps\n Camera trước TrueDepth 12MP với chế độ Chân Dung, có khả năng quay video 4K, và quay video chậm\n Xác thực bảo mật với Face ID\n Chip A13 Bionic với Neural Engine thế hệ thứ ba\n Khả năng sạc nhanh\n Sạc không dây\n iOS 14 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác\n                    \n                    \n                    ','                                                                        iPhone 11 với hệ thống camera kép với Ultra Wide. Chế độ Ban Đêm và chất lượng video tuyệt vời.  Chống nước và chống bụi. Thời lượng pin lâu. Với 6 màu tuyệt đẹp. Trải nghiệm iPhone 11.\n\nTính năng nổi bật\nMàn hình Liquid Retina HD LCD 6.1 inch\nChống nước và chống bụi (chống nước ở độ sâu 2 mét trong vòng tối đa 30 phút, đạt mức IP68);\n Hệ thống camera kép 12MP với camera Ultra Wide và Wide; chế độ Ban Đêm, chế độ Chân Dung, và khả năng quay video 4K tốc độ tối đa 60 fps\n Camera trước TrueDepth 12MP với chế độ Chân Dung, có khả năng quay video 4K, và quay video chậm\n Xác thực bảo mật với Face ID\n Chip A13 Bionic với Neural Engine thế hệ thứ ba\n Khả năng sạc nhanh\n Sạc không dây\n iOS 14 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác\n                    \n                    \n                    ',16990000,1,NULL,NULL),(26,'iPad mini 6',11590000,'img/Product/product-items/iPad/0000593_ipad-mini-6_240.png','img/Product/product-items/iPad/0000593_ipad-mini-6_240(1).jpg','img/Product/product-items/iPad/0000593_ipad-mini-6_240(2).jpg','iPad mini 6 (2021); iPad mini mới. Thiết kế màn hình toàn phần với màn hình Liquid Retina 8.3 inch. Chip A15 Bionic mạnh mẽ với Neural Engine. Camera trước Ultra Wide 12MP với tính năng Trung Tâm Màn Hình. Cổng kết nối USB-C. Mạng 5G siêu nhanh. Ghi chú, đánh dấu tài liệu hoặc phác thảo ngay khi những ý tưởng lớn xuất hiện trong đầu với Apple Pencil (thế hệ thứ 2); có khả năng gắn kết bằng nam châm và sạc không dây.\n\nTính năng nổi bật\n\nMàn hình Liquid Retina 8.3 inch tuyệt đẹp với True Tone và dải màu rộng\nChip A15 Bionic với Neural Engine\nXác thực bảo mật với Touch ID\nCamera sau Wide 12MP, camera trước Ultra Wide 12MP với tính năng Trung Tâm Màn Hình\nHiện có các màu tím, ánh sao, hồng và xám bạc\nLoa stereo ở cạnh trên và cạnh dưới \nMạng 5G cho tốc độ tải xuống, xem video và nghe nhạc trực tuyến nhanh như chớp\nLuôn kết nối với Wi-Fi 6 siêu nhanh\nThời lượng pin lên tới 10 giờ\nCổng kết nối USB-C để sạc và kết nối phụ kiện\nTương thích với Apple Pencil (thế hệ thứ 2);\niPadOS 15 sở hữu sức mạnh độc đáo, dễ sử dụng và được thiết kế cho tính đa năng của iPad','Nối tiếp sự thành công của những thế hệ trước, Apple đã cho ra mắt iPad mini 6 trong sự kiện tháng 9/2021 của mình. Sản phẩm gây ấn tượng khi có sự lột xác về mặt thiết kế, kèm theo nhiều sự nâng cấp đáng chú ý. Chiếc tablet thế hệ thứ 6 này sẽ phục vụ tối ưu nhu cầu của người dùng ngay cả khi sở hữu kích thước vừa phải, nhỏ gọn.',14990000,2,NULL,NULL),(27,'iPad Air 5',13990000,'img/Product/product-items/iPad/0000595_ipad-air-5_240.png','img/Product/product-items/iPad/0000595_ipad-air-5_240(1).jpg','img/Product/product-items/iPad/0000595_ipad-air-5_240(2).jpg','iPad Air 5 (2022); iPad Air. Với màn hình Liquid Retina 10.9 inch sống động. Chip Apple M1 đột phá cho hiệu năng nhanh hơn, giúp iPad Air trở nên siêu mạnh mẽ để sáng tạo và chơi game di động. Sở hữu Touch ID, camera tiên tiến, 5G và Wi-Fi 6 nhanh như chớp, cổng USB-C, cùng khả năng hỗ trợ Magic Keyboard và Apple Pencil (thế hệ thứ 2);.\n\nTính năng nổi bật\n\nMàn hình Liquid Retina 10.9 inch với True Tone, dải màu rộng P3 và lớp phủ chống phản chiếu\nChip Apple M1 với Neural Engine\nCamera Wide 12MP\nCamera trước Ultra Wide 12MP với tính năng Trung Tâm Màn Hình\nỔ lưu trữ lên đến 256GB\nHiện có màu Xanh Dương, Tím, Hồng, Ánh Sao và Xám Bạc\nLoa stereo ở cạnh trên và cạnh dưới\nXác thực bảo mật với Touch ID\nPin dùng cả ngày\nWi-Fi 6 và mạng 5G\nCổng kết nối USB-C để sạc và kết nối phụ kiện\nTương thích với Magic Keyboard, Smart Keyboard Folio và Apple Pencil (thế hệ thứ 2);\niPadOS 15 sở hữu sức mạnh độc đáo, dễ sử dụng và được thiết kế cho tính đa năng của iPad','Mỗi khi một chiếc iPad mới vừa ra lò như một cơn chấn động thật sự bùng nổ. Đến năm 2022, chúng ta lại tiếp tục bùng nổ với chiếc iPad mới mang tên iPad Air 5 với nhiều cải tiến đáng giá. Thế hệ thứ 5 này mang đến cho bạn những điểm gì vượt trội hay có gì sáng giá để sở hữu, hãy để lại phần bình luận ở bên dưới nhé.',16990000,2,NULL,NULL),(28,'iPad Air 4',15990000,'img/Product/product-items/iPad/0000594_ipad-air-4_240.png','img/Product/product-items/iPad/0000594_ipad-air-4_240(1).jpg','img/Product/product-items/iPad/0000594_ipad-air-4_240(2).jpg','iPad Air 2020. Màn hình Liquid Retina 10.9 inch tuyệt đẹp và công nghệ True Tone cho bạn những trải nghiệm thị giác thật dễ chịu. Chip A14 Bionic mới cùng công nghệ Neural Engine là nền tảng sức mạnh giúp bạn biên tập video 4K, soạn nhạc và giải trí cùng các trò chơi đẳng cấp, mọi tác vụ đều trở nên vô cùng đơn giản. Touch ID nhanh nhạy và dễ sử dụng với tính năng bảo mật cao, hệ thống camera hiện đại, USB-C, hỗ trợ đa dạng phụ kiện kể cả Magic Keyboard và Apple Pencil (thế hệ thứ 2);.\n\nTính năng nổi bật\n\nMàn hình Liquid Retina 10.9 inch sắc nét với True Tone và dải màu rộng P3\nChip A14 Bionic với Neural Engine\nXác thực bảo mật với Touch ID\nCamera sau 12MP, camera trước FaceTime HD 7MP\nHiện có các màu Bạc, Xám Bạc, Hồng Kim, Xanh Lá và Xanh Da Trời\nÂm thanh stereo rộng\nWi-Fi 6 (802.11ax); và dữ liệu di động LTE Gigabit\nThời lượng pin lên đến 10 giờ\nCổng kết nối USB-C để sạc và kết nối phụ kiện\nHỗ trợ Magic Keyboard, Smart Keyboard Folio và Apple Pencil (thế hệ thứ 2);\niPadOS 14 mang đến cho bạn các chức năng mới được thiết kế dành riêng cho iPad','Những năm qua, Apple vẫn đang là thương hiệu thống lĩnh trên thị trường với danh mục sản phẩm vô cùng đa dạng. Bên cạnh những mẫu iPhone thiết kế thời thượng, các dòng máy tính bảng nhà “Táo khuyết” cũng được nhiều người dùng ưa chuộng. Năm 2013, Apple lần đầu tiên giới thiệu mẫu iPad Air thế hệ đầu tiên. Mới đây, công ty đã cho ra mắt mẫu iPad Air 10.9 inch (2020); – 4G – 64GB hoàn toàn mới. Với hiệu suất xử lý đa tác vụ và thiết kế mỏng, nhẹ vô cùng, các tín đồ nhà Táo không thể bỏ qua sản phẩm tuyệt vời này.',19990000,2,NULL,NULL),(29,'iMac M1 2021 24 inch',27990000,'img/Product/product-items/Mac/0000807_imac-m1-2021-24-inch-7-core-gpu8gb256gb_240.jpg','img/Product/product-items/Mac/0000807_imac-m1-2021-24-inch-7-core-gpu8gb256gb_240(1).jpg','img/Product/product-items/Mac/0000807_imac-m1-2021-24-inch-7-core-gpu8gb256gb_240(2).jpg','Apple iMac M1 2021 24 inch 7-Core GPU 8GB RAM 256GB SSD\n\niMac 24 inch (2021); Thay đổi ngoạn mục với chip Apple M1, iMac nay mỏng ấn tượng và mạnh không thể tưởng. Được tạo tác để nổi bật trong mọi môi trường và phù hợp hoàn toàn với cuộc sống của bạn.\n\nTính năng nổi bật\nMàn hình Retina 4.5K 24 inch với gam màu rộng P3 và độ sáng 500 nit\nChip Apple M1 đem đến hiệu năng mạnh mẽ với CPU 8 lõi và GPU 7 hoặc 8 lõi\nThiết kế mỏng ấn tượng 11.5mm với sắc màu sống động\nCamera FaceTime HD 1080p với M1 ISP để quay video chất lượng ấn tượng\nDãy ba micro chuẩn phòng thu để thực hiện cuộc gọi và ghi âm tiếng trong như pha lê\nHệ thống âm thanh sáu loa cho trải nghiệm âm thanh chất lượng cao và mạnh mẽ ấn tượng\nBộ lưu trữ SSD siêu nhanh lên đến 512GB\nHai cổng Thunderbolt / USB và lên đến hai cổng USB\nWi-Fi 6 siêu nhanh và công nghệ không dây Bluetooth 5.0\nPhối màu hoàn hảo giữa Magic Mouse và Magic Keyboard hoặc Magic Keyboard và Touch ID\nmacOS sở hữu thiết kế ấn tượng, dễ sử dụng và phối hợp mượt mà với iPhone\nCó các màu xanh dương, xanh lá, hồng, bạc, vàng, cam và tím','Máy tính để bàn Apple M1 sở hữu card đồ hoạ tích hợp 8 nhân, cung cấp tốc độ xử lý về hình ảnh đồ hoạ nhanh gấp 2 lần so với phiên bản tiền nhiệm, đáp ứng tốt nhu cầu sử dụng các phần mềm như Photoshop, Lightroom, Final Cut, Xcode,...\n\nMáy tính để bàn đồ hoạ - kỹ thuật này có RAM 8 GB mang đến khả năng đa nhiệm ổn định, chuyển qua lại giữa các phần mềm đang sử dụng mượt mà, nhanh chóng không lo bị giật, lag.',34990000,3,NULL,NULL),(30,'iMac 2020 27\" MXWT2',34750000,'img/Product/product-items/Mac/0000833_imac-2020-27-mxwt2-31-6c8gb-256gbrp5300x-soa_240.png','img/Product/product-items/Mac/0000833_imac-2020-27-mxwt2-31-6c8gb-256gbrp5300x-soa_240(1).jpg','img/Product/product-items/Mac/0000833_imac-2020-27-mxwt2-31-6c8gb-256gbrp5300x-soa_240(2).jpg','iMac 27 inch màn hình Retina 5K giờ đây tích hợp bộ xử lý tối tân, bộ nhớ nhanh hơn, đồ họa mạnh mẽ và lưu trữ SSD siêu nhanh.  Màn hình Retina 5K sống động tốt hơn bao giờ hết với công nghệ True Tone và mặt kính có cấu trúc nano (tùy chọn);.  Với hệ điều hành macOS và các ứng dụng được tích hợp sẵn, iMac 27 inch là chiếc máy tính đa năng sáng tạo, mạnh mẽ hơn bao giờ hết.\n\nTính năng nổi bật\nMàn hình Retina 5K 27 inch (theo đường chéo); với độ phân giải 5120×2880\nMặt kính có cấu trúc Nano (tùy chọn);\nBộ xử lý Intel Core i5 sáu lõi hoặc Intel Core i7 tám lõi thế hệ thứ 10\nĐồ họa AMD Radeon Pro 5300 hoặc 5500 XT\nLưu trữ SSD siêu nhanh\nHai cổng Thunderbolt 3 (USB-C);\nBốn cổng USB-A\nCổng Gigabit Ethernet\nCamera FaceTime HD 1080p\nWi-Fi 802.11ac và Bluetooth 5.0\nMagic Mouse 2\nMagic Keyboard\nmacOS Big Sur với thiết kế mới đầy táo bạo cùng nhiều cập nhật quan trọng cho các ứng dụng Safari, Messages và Maps','Hiển thị mọi thứ cực sống động với màn hình Retina độ phân giải lên đến (5120 x 2880);, màn hình 27 inch. Màn hình iMac có độ sáng 500 nits, và khả năng hiển thị đến một tỷ màu cho hình ảnh rực rỡ để bạn tận hưởng những thước phim chất lượng, màu sắc có độ chính xác cao để làm đồ họa, thiết kế...\n\nVới công nghệ True Tone, Apple đưa trải nghiệm xem của bạn lên tầm cao mới nhờ khả năng tự điều chỉnh màu sắc để phù hợp với môi trường quan sát. Màn hình iMac đáp ứng tốt nhu cầu đồ họa chuyên nghiệp, dựng hình 3D, cắt chỉnh film....',42990000,3,NULL,NULL),(31,'Mac Studio M1 Max',49990000,'img/Product/product-items/Mac/0010612_mac-studio-m1-max_240.jpg','img/Product/product-items/Mac/0010612_mac-studio-m1-max_240(1).jpg','img/Product/product-items/Mac/0010612_mac-studio-m1-max_240(2).jpg','Mac Studio. Một cỗ máy siêu gọn nhẹ, phù hợp hoàn hảo với bàn làm việc với khả năng kết nối được cải tiến cho studio của bạn. Bạn có thể chọn giữa M1 Max siêu nhanh hoặc M1 Ultra hoàn toàn mới — chip mạnh nhất từ trước đến nay được thiết kế cho máy tính cá nhân.\n\nTính năng nổi bật\nChip Apple M1 Max hoặc M1 Ultra tạo ra một cú nhảy vọt về hiệu năng máy học, CPU và GPU\nCPU lên đến 20 lõi sở hữu hiệu năng nhanh hơn đến 3.8x để giúp bạn vượt qua mọi giới hạn\nGPU lên đến 64 lõi cho hiệu năng nhanh hơn đến 4.5x để xử lý các luồng công việc có đồ họa khủng như kết xuất mô hình 3D\nNeural Engine lên đến 32 lõi cho công nghệ máy học hiện đại\nBộ nhớ thống nhất lên đến 128GB giúp bạn làm việc gì cũng nhanh chóng và trôi chảy\nỔ lưu trữ SSD siêu nhanh lên đến 8TB giúp mở các ứng dụng và tập tin chỉ trong tích tắc\nKết nối không dây nhanh với Wi-Fi 6\nLên đến sáu cổng Thunderbolt 4, hai cổng USB-A, cổng HDMI, cổng Ethernet 10Gb, khe thẻ nhớ SDXC và jack cắm âm thanh 3.5 mm\nmacOS Monterey cho phép bạn kết nối, chia sẻ và sáng tạo hơn bao giờ hết, với các bản cập nhật FaceTime đầy thú vị và Safari đã được thiết kế lại\nThiết kế cực kỳ nhỏ gọn với kích thước 7.7 inch vuông, cao 3.7 inch, màu bạc','Mac Studio M1 Max 10 core CPU là sản phẩm máy tính mới nhất vừa được nhà Apple cho ra mắt. Sở hữu ngoại hình cực kỳ nhỏ gọn nhưng được trang bị cấu hình siêu vượt trội sẵn sàng cùng người dùng chinh phục mọi tác vụ khó nhằn nhất.',59990000,3,NULL,NULL),(32,'Mac Mini M2',15390000,'img/Product/product-items/Mac/0011564_mac-mini-m2-10-core-gpu-8gb-ram-256gb-ssd_240.jpeg','img/Product/product-items/Mac/0011564_mac-mini-m2-10-core-gpu-8gb-ram-256gb-ssd_240(1).jpeg','img/Product/product-items/Mac/0011564_mac-mini-m2-10-core-gpu-8gb-ram-256gb-ssd_240(2).jpeg','                        Nay với chip M2, Mac mini mang đến tốc độ bạn cần. Từ những bản thuyết trình phong phú đến chơi game nhập vai, M2 xử lý tất tật từ công việc đến giải trí. Với một dãy cổng đa dạng giúp kết nối tất cả các thiết bị yêu thích của bạn, Mac mini sẵn sàng cho mọi tác vụ.\n\nTính năng nổi bật – Mac mini M2\n\nChip M2 cho tốc độ và hiệu năng vượt trội\nCPU 8 lõi cho hiệu năng nhanh hơn đến 18% để xử lý nhanh chóng các tác vụ hàng ngày1\nGPU 10 lõi cho hiệu năng nhanh hơn đến 35% để xử lý các ứng dụng và game đòi hỏi cao về đồ họa1\nNeural Engine 16 lõi cho công nghệ máy học hiện đại\nBộ nhớ thống nhất từ 8GB đến 24GB giúp bạn làm việc gì cũng nhanh chóng và trôi chảy\nỔ lưu trữ SSD siêu nhanh giúp mở các ứng dụng và tập tin chỉ trong tích tắc\nHỗ trợ kết nối tối đa hai màn hình\nHệ thống tản nhiệt tiên tiến mang lại hiệu năng đột phá\nKết nối không dây nhanh với Wi-Fi 6E2\nHai cổng Thunderbolt 4, một cổng HDMI, hai cổng USB-A, jack cắm tai nghe, Ethernet Gigabit hoặc 10Gb\nThiết kế vuông 7,7 inch màu bạc cực kỳ nhỏ gọn\nmacOS Ventura mang đến cho bạn những phương thức mới và hiệu quả để hoàn thành nhiều việc hơn, chia sẻ và cộng tác trên tất cả các thiết bị Apple\n                    ','                        Sở hữu vẻ ngoài sang trọng đặc trưng nhà Táo khuyết kết hợp cùng hiệu năng đỉnh cao với con chip Apple M2, Mac mini M2 2023 10-core GPU dễ dàng chinh phục mọi tác vụ từ cơ bản tới nâng cao, phục vụ tốt nhu cầu học tập, làm việc và giải trí của người dùng.\n                    ',19990000,3,NULL,NULL),(33,'Apple Watch Series 3 Nhôm',4990000,'img/Product/product-items/Watch/0000897_apple-watch-series-3-nhom_240.png','img/Product/product-items/Watch/0000897_apple-watch-series-3-nhom_240(1).jpeg','img/Product/product-items/Watch/0000897_apple-watch-series-3-nhom_240(2).png','Apple Watch Series 3 (GPS); Theo dõi tình trạng sức khỏe. Theo dõi các bài tập luyện và mọi hoạt động trong ngày của bạn. Luôn kết nối với mọi người và cập nhật những thông tin bạn quan tâm. Apple Watch Series 3 giúp bạn làm mọi việc ngay từ cổ tay.\n\nTính năng nổi bật\nXem nhanh thông tin quan trọng trên màn hình Retina\nTheo dõi nhịp tim bất cứ lúc nào với ứng dụng Nhịp Tim\nNhận thông báo về nhịp tim nhanh và chậm\nNhận cuộc gọi và trả lời tin nhắn ngay từ cổ tay\nĐồng bộ nhạc và podcast yêu thích\nTheo dõi hoạt động hàng ngày của bạn trên Apple Watch và xem xu hướng của bạn trong ứng dụng Thể Dục trên iPhone\nĐo lường các hoạt động thể dục của bạn như chạy, đi bộ, đạp xe, tập yoga, bơi lội và khiêu vũ\nThiết kế chống thấm nước khi bơi lội\nSOS Khẩn Cấp giúp bạn gọi xin trợ giúp ngay từ cổ tay\nS3 có bộ xử lý lõi kép\nwatchOS 7 sở hữu tính năng theo dõi giấc ngủ, chỉ đường khi đi xe đạp và mặt đồng hồ có thể tùy chỉnh mới\nVỏ nhôm hiện có hai màu ','Apple Watch S3 LTE 42 mm viền nhôm dây cao su là phiên bản đồng hồ thông minh hỗ trợ eSim vừa được giới thiệu. Đồng hồ có thiết kế trẻ trung, hiện đại cùng nhiều tiện ích về sức khỏe, thể thao dành cho người dùng. ',5990000,4,NULL,NULL),(34,'Apple Watch Series 6 Nhôm GPS',6990000,'img/Product/product-items/Watch/0011777_apple-watch-series-6-nhom-gps_240.png','img/Product/product-items/Watch/0011777_apple-watch-series-6-nhom-gps_240(1).jpg','img/Product/product-items/Watch/0011777_apple-watch-series-6-nhom-gps_240(2).jpg','Apple Watch Series 6 Nhôm (GPS); Với cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp tim cùng các tính năng tiên tiến khác về sức khỏe, Apple Watch Series 6 là chiếc đồng hồ bảo vệ bạn.\n\nPhiên bản GPS cho phép bạn nhận cuộc gọi và trả lời tin nhắn ngay từ cổ tay\n Đo nồng độ ôxi trong máu của bạn bằng một cảm biến và ứng dụng hoàn toàn mới\n Theo dõi nhịp tim bất cứ lúc nào với ứng dụng Nhịp Tim\n Nhận thông báo về nhịp tim nhanh và chậm\n Màn hình Retina Luôn Bật sáng hơn 2,5 lần lúc ở ngoài trời khi bạn hạ cổ tay xuống\n S6 SiP nhanh hơn tới 20 phần trăm so với Series 5\n 5GHz Wi-Fi và chip U1 Ultra-Wideband\n Theo dõi hoạt động hàng ngày của bạn trên Apple Watch và xem xu hướng của bạn trong ứng dụng Thể\nDục trên iPhone\nĐo lường các hoạt động thể dục của bạn như chạy, đi bộ, đạp xe, tập yoga, bơi lội và khiêu vũ\n Thiết kế chống thấm nước khi bơi lội\n Đồng bộ nhạc và podcast yêu thích\n La bàn được tích hợp sẵn cùng các số đo độ cao theo thời gian thực\n Có thể phát hiện nếu bạn bị té ngã mạnh, rồi tự động gọi dịch vụ cứu hộ khẩn cấp giúp bạn\nSOS Khẩn Cấp giúp bạn nhận được sự trợ giúp ngay từ cổ tay\nwatchOS 7 sở hữu tính năng theo dõi giấc ngủ, chỉ đường khi đi xe đạp và mặt đồng hồ có thể tùy chỉnh mới\nVỏ nhôm có thêm nhiều màu mới\nVỏ nhôm hoặc thép không gỉ với nhiều màu mới','Một sản phẩm có thể hoạt động trơn tru, mượt mà thì không chỉ nhờ con chip mạnh mà còn phải nhờ vào hệ điều hành tối ưu và tương thích hoàn toàn với con chip, Apple đã làm được điều đó trên các sản phẩm của họ.\n\nKhông chỉ vậy, hệ điều hành WatchOS 7 còn mang đến nhiều tính năng mới hiện đại hơn, giúp cho người dùng trải nghiệm cuộc sống hoàn hảo hơn. (Phiên bản hệ điều hành WatchOS 7 phù hợp với thời điểm sản phẩm mới ra mắt);.',11990000,4,NULL,NULL),(35,'Apple Watch SE Nhôm GPS + Cellular',7490000,'img/Product/product-items/Watch/0001204_apple-watch-se-gps-cellular-44mm_240.png','img/Product/product-items/Watch/0001204_apple-watch-se-gps-cellular-44mm_240(1).jpg','img/Product/product-items/Watch/0001204_apple-watch-se-gps-cellular-44mm_240(2).jpg','Apple Watch SE 2022 Nhôm GPS + Cellular: Các tính năng mới hoàn toàn. Giá vẫn nhẹ nhàng. Các tính năng thiết yếu giúp bạn luôn kết nối, năng động, khỏe mạnh, và an toàn.\n\nTính năng nổi bật\n\nNhận cuộc gọi và trả lời tin nhắn ngay từ cổ tay\nNhanh hơn đến 20% so với Apple Watch SE phiên bản trước1\nCác tính năng an toàn tiên tiến, bao gồm Phát Hiện Ngã, SOS Khẩn Cấp2 và Phát Hiện Va Chạm\nTheo dõi hoạt động hàng ngày của bạn trên Apple Watch và xem xu hướng của bạn trong ứng dụng Thể Dục trên iPhone\nỨng dụng Bài Tập cải tiến bổ sung các hình thức tập luyện nâng cao\nNhận thông báo nhịp tim cao và thấp và thông báo nhịp không đều3\nNghe nhạc và podcast bạn yêu thích (dùng với các phiên bản hỗ trợ GPS);\nThiết kế chống nước khi bơi\nTính năng theo dõi các giai đoạn ngủ giúp bạn biết thời gian Giấc Ngủ REM, Giấc Ngủ Chính, và Giấc Ngủ Sâu\nWatchOS 9 sở hữu ứng dụng Bài Tập cải tiến, ứng dụng Thuốc và Các Giai Đoạn Ngủ mới, cùng thông tin chuyên sâu hơn về sức khỏe tim mạch','Apple Watch SE có sẵn rất nhiều mặt đồng hồ để bạn có thể thay đổi theo sở thích bất cứ lúc nào. Chiếc đồng hồ sẽ luôn là đồng hồ mới tùy theo cá tính của bạn. Ngoài ra bạn còn có thể hiển thị nhiều thông tin trên mặt đồng hồ như thời tiết, độ ẩm, la bàn. Nếu vẫn cảm thấy chưa đủ, kho ứng dụng App Store sẽ mang đến cho bạn một kho mặt đồng hồ khổng lồ.',11990000,4,NULL,NULL),(36,'Apple Watch Ultra LTE 49mm Trail Loop size M/L',20390000,'img/Product/product-items/Watch/0009011_apple-watch-ultra-lte-49mm-trail-loop-size-ml_240.png','img/Product/product-items/Watch/0009011_apple-watch-ultra-lte-49mm-trail-loop-size-ml_240(1).jpeg','img/Product/product-items/Watch/0009011_apple-watch-ultra-lte-49mm-trail-loop-size-ml_240(2).jpeg','Tính năng nổi bật\nCác tính năng và cảm biến chuyên dụng, cùng với ba dây đeo mới được thiết kế cho các hoạt động khám phá, phiêu lưu, và rèn luyện sức bền\nVỏ titan hàng không chuyên dụng 49mm cân bằng hoàn hảo giữa các yêu cầu về trọng lượng, độ bền và khả năng chống ăn mòn\nMàn hình Apple Watch lớn nhất và sáng nhất giúp bạn nhìn thấy rõ ràng hơn trong mọi điều kiện\nThời lượng pin lên đến 36 giờ ở chế độ sử dụng thông thường, cùng với thiết lập nguồn điện thấp cho thời lượng pin còn lâu hơn nữa\nHệ thống GPS tần số kép chuẩn xác cung cấp vị trí chính xác để tính toán khoảng cách, tốc độ, và lộ trình.\nChống nước ở độ sâu 100m2\nDung sai nhiệt độ hoạt động lớn hơn khi đeo trên cổ tay, thích ứng tuyệt vời với các điều kiện môi trường vô cùng đa dạng\nNút Tác Vụ tùy chỉnh có thể đánh dấu Tọa Độ Điểm La Bàn, bắt đầu Quay Về, đánh dấu các phần trong bài tập luyện, bật đèn pin, và hơn thế nữa\nCác tính năng an toàn tiên tiến, bao gồm Còi Báo, Quay Về, Phát Hiện Ngã, SOS Khẩn Cấp và Phát Hiện Va Chạm\nỨng dụng Bài Tập cải tiến với các chỉ số mới, chế độ xem mới, và nhiều hình thức tập luyện nâng cao\nỨng dụng La Bàn được thiết kế lại hoàn toàn với tọa độ điểm và Quay Về\nThiết bị đo độ sâu và cảm biến nhiệt độ nước tự động kích hoạt khi bạn lặn.\nĐược thiết kế cho hoạt động lặn giải trí với bình dưỡng khí và lặn tự do từ 40 mét trở xuống\nMạng di động tích hợp giúp bạn luôn kết nối với mọi người và cập nhật thông tin bạn quan tâm nhất\nCác cảm biến sức khỏe tối tân cho phép bạn đo điện tâm đồ (ECG); và đo nhịp tim, theo dõi sự thay đổi nhiệt độ7 để nắm bắt thông tin chuyên sâu về chu kỳ kinh nguyệt, và đo nồng độ oxy trong máu\nTheo dõi hoạt động hàng ngày của bạn trên Apple Watch và xem xu hướng của bạn trong ứng dụng Thể Dục trên iPhone\nNghe trực tuyến hoặc đồng bộ nhạc và podcast yêu thích\nwatchOS 9 sở hữu ứng dụng Bài Tập cải tiến, ứng dụng Thuốc và Các Giai Đoạn Ngủ mới, cùng thông tin chuyên sâu hơn về sức khỏe tim mạch','Đồng hồ thông minh Apple Watch Ultra sở hữu màn hình lớn, độ phân giải 410 x 502 pixels, hoạt động trên tấm nền OLED cao cấp, mang đến một không gian hiển thị rộng rãi với độ sắc nét cực kỳ cao. Chưa hết, thiết bị còn hỗ trợ độ sáng màn hình cao, giúp bạn tha hồ hoạt động ở ngoài trời mà vẫn có thể xem mọi chi tiết trên đồng hồ một cách rõ ràng.',23990000,4,NULL,NULL),(37,'EarPods with Lightning',550000,'img/Product/product-items/Sounds/0001060_earpods-with-lightning_240.png','img/Product/product-items/Sounds/0001060_earpods-with-lightning_240(1).jpg','img/Product/product-items/Sounds/0001060_earpods-with-lightning_240(2).jpg','Earpods Lightning MMTN2 chính hãng – Thiết kế thông minh cùng trang bị microphone và các phím điều chỉnh tiện dụng\nTai nghe Apple Earpods Lightning MMTN2 là một sản phẩm không thể thiếu nếu như các bạn là tín đồ của Apple. Apple Earpods Lightning một sản phẩm tuyệt hảo phù hợp với các dòng điện thoại iPhone, iPad, iPod hỗ trợ iOS 10 trở lên. Đến với ShopDunk để sở hữu một tai nghe Earpods Lightning MMTN2 tiện lợi cao và các thiết bị âm thanh giá rẻ tốt nhất.','Apple Earpods Lightning – Thiết kế hai đầu tai hình hạt đậu ôm trọn trong tai hiện đại và tối ưu cho âm thanh\nTai nghe Earpods với Lightning Connection được thiết kế với màu trắng trang nhã cho bạn thể hiện phong cách trẻ trung, năng động, sành điệu tạo cảm giác thời thượng cho chính người sử dụng. Hai đầu tai được thiết kế giống như hai hạt đậu, ôm gọn trong tai giúp tai nghe cách âm tốt nhất cho bạn tận hưởng trọn vẹn từng khoảnh khắc âm nhạc.',790000,5,NULL,NULL),(38,'AirPods Pro (2021);',4850000,'img/Product/product-items/Sounds/0012020_airpods-pro-2021_240.jpg','img/Product/product-items/Sounds/0012020_airpods-pro-2021_240(1).jpg','img/Product/product-items/Sounds/0012020_airpods-pro-2021_240(2).jpg','AirPods Pro (2021); có tính năng Chủ Động Khử Tiếng Ồn giúp người nghe đắm chìm trong thế giới âm thanh. Chế Độ Xuyên Âm giúp bạn nghe được âm thanh của thế giới xung quanh. AirPods Pro chống mồ hôi và chống nước và kích cỡ tai nghe tùy chỉnh được tạo sự thoải mái cả ngày dài.\n\nTính năng nổi bật\nTính năng Chủ Động Khử Tiếng Ồn giúp ngăn chặn các âm thanh bên ngoài lọt vào tai để bạn có thể đắm chìm vào âm nhạc\nChế Độ Xuyên Âm giúp bạn nghe và tương tác với thế giới xung quanh\nChế độ âm thanh không gian với tính năng theo dõi chuyển động của đầu đưa âm thanh đến quanh bạn\nEQ thích ứng sẽ tự động điều chỉnh nhạc hướng vào tai bạn\nĐầu silicon mềm mại với ba kích cỡ khác nhau tạo sự thoải mái và ôm khít\nCảm biến lực giúp bạn dễ dàng điều khiển chương trình giải trí, trả lời hoặc kết thúc cuộc gọi, và thực hiện nhiều tác vụ khác\nChống mồ hôi và chống nước\nTổng thời gian nghe hơn 24 giờ với Hộp Sạc MagSafe\nThiết lập dễ dàng, có khả năng nhận biết khi đeo, và tự động chuyển đổi để mang lại trải nghiệm tuyệt vời\nDễ dàng chia sẻ âm thanh giữa hai bộ AirPods trên iPhone, iPad, iPod touch hoặc Apple TV','Thiết kế Airpods Pro 2021 cải tiến tăng độ êm nhẹ khi đeo\nAirPods Pro 2021 được Apple tái thiết kế nhằm mang đến trải nghiệm nghe nhạc êm ái, không gây đau tai cho bạn. Mỗi bên củ tai Apple AirPod có thiết kế nhét trong, với ba kích thước đệm tai silicone khác nhau cho bạn tự chọn kích thước vừa nhất. Phần đệm tai cũng được Apple thiết kế để ngăn tạp âm lọt vào trong, cho bạn một trải nghiệm nghe nhạc trọn vẹn.',6790000,5,NULL,NULL),(39,'Tai nghe Apple AirPods 3 sạc không dây MagSafe',4650000,'img/Product/product-items/Sounds/0000230_tai-nghe-apple-airpods-3-sac-khong-day-magsafe_240.png','img/Product/product-items/Sounds/0000230_tai-nghe-apple-airpods-3-sac-khong-day-magsafe_240(2).jpg','img/Product/product-items/Sounds/0000230_tai-nghe-apple-airpods-3-sac-khong-day-magsafe_240(1).jpg','AirPods 3 (gen 3); Giới thiệu AirPods hoàn toàn mới. Sở hữu tính năng âm thanh không gian đưa âm nhạc đến quanh bạn, EQ thích ứng điều chỉnh nhạc hướng vào tai bạn và thời lượng pin lâu hơn. Tai nghe có khả năng chống mồ hôi và chống nước, mang đến cho bạn trải nghiệm tuyệt vời.\n\nTính năng nổi bật\nChế độ âm thanh không gian với tính năng theo dõi chuyển động của đầu đưa âm thanh đến quanh bạn\nEQ thích ứng sẽ tự động điều chỉnh nhạc hướng vào tai bạn\nThiết kế có đường viền hoàn toàn mới\nCảm biến lực giúp bạn dễ dàng điều khiển chương trình giải trí, trả lời hoặc kết thúc cuộc gọi, và thực hiện nhiều tác vụ khác\nChống mồ hôi và chống nước\nThời gian nghe lên đến 6 giờ với một lần sạc\nTổng thời gian nghe lên đến 30 giờ với Hộp Sạc MagSafe\nThiết lập dễ dàng, có khả năng nhận biết khi đeo, và tự động chuyển đổi để mang lại trải nghiệm tuyệt vời\nDễ dàng chia sẻ âm thanh giữa hai bộ AirPods trên iPhone, iPad, iPod touch hoặc Apple TV','Một trong những thế hệ tai nghe không dây được ưa chuộng nhất trên thị trường hiện nay là Apple AirPods 3 Magsafe. Tuy mới chỉ có được ra mắt giữa tháng 10 vừa qua nhưng AirPods 3 của Apple đã nhận được nhiều sự ưa chuộng từ phía người dùng và nhanh chóng trở nên phổ biến trên thị trường thời gian vừa rồi. Với thiết kế gọn nhẹ, bền bỉ cùng chất lượng âm thanh đỉnh cao, AirPods 3 chắc chắn là mẫu tai nghe Apple hoàn hảo mà bạn rất nên sở hữu.',4650000,5,NULL,NULL);
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_status`
--

DROP TABLE IF EXISTS `tbl_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_status` (
  `id` int NOT NULL,
  `is_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_status`
--

LOCK TABLES `tbl_status` WRITE;
/*!40000 ALTER TABLE `tbl_status` DISABLE KEYS */;
INSERT INTO `tbl_status` VALUES (1,'chờ xác nhận',NULL,NULL),(2,'xác nhận',NULL,NULL),(3,'vận chuyển',NULL,NULL),(4,'đã giao',NULL,NULL),(5,'đã hủy',NULL,NULL);
/*!40000 ALTER TABLE `tbl_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user','codetoanbug@gmail.com',NULL,'123123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-29 22:03:12
