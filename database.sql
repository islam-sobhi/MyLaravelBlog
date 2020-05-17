<br />
<b>Warning</b>:  strftime(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. in <b>C:\AppServ\www\phpMyAdmin\libraries\common.lib.php</b> on line <b>1778</b><br />
<br />
<b>Warning</b>:  strftime(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. in <b>C:\AppServ\www\phpMyAdmin\libraries\common.lib.php</b> on line <b>1779</b><br />
<br />
<b>Warning</b>:  strftime(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. in <b>C:\AppServ\www\phpMyAdmin\libraries\common.lib.php</b> on line <b>1781</b><br />
-- phpMyAdmin SQL Dump
-- version 2.6.0-beta2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 21, 2020 at 03:11 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30
-- 
-- Database: `blog`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `categories`
-- 

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `categories`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
INSERT INTO `categories` VALUES (1, 'JAVA', 2020-01-11 13:51:00, 2020-01-11 13:51:00);
INSERT INTO `categories` VALUES (2, 'c#', 2020-01-11 13:51:04, 2020-01-11 13:51:04);
INSERT INTO `categories` VALUES (3, 'Laravel', 2020-01-11 13:51:09, 2020-01-11 13:51:09);
INSERT INTO `categories` VALUES (4, 'Python', 2020-01-11 13:51:13, 2020-01-11 13:51:13);
INSERT INTO `categories` VALUES (6, 'c', 2020-01-11 13:51:22, 2020-01-11 13:51:22);
INSERT INTO `categories` VALUES (8, 'PHP', 2020-01-28 14:26:57, 2020-01-28 14:26:57);
INSERT INTO `categories` VALUES (9, 'Flutter', 2020-01-28 14:36:27, 2020-01-28 14:36:27);

-- --------------------------------------------------------

-- 
-- Table structure for table `migrations`
-- 

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `migrations`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_12_09_100914_create_posts_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_09_101606_create_categories_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_13_204318_create_tags_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_12_13_205159_post_tag_table_creation', 1);
INSERT INTO `migrations` VALUES (7, '2019_12_14_225640_create_profiles_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_12_17_221030_create_settings_table', 1);
INSERT INTO `migrations` VALUES (9, '2020_01_06_053550_user_id_post', 1);
INSERT INTO `migrations` VALUES (11, '2020_01_11_124957_laratrust_setup_tables', 2);
INSERT INTO `migrations` VALUES (12, '2020_01_30_025744_add_google_id_column', 3);

-- --------------------------------------------------------

-- 
-- Table structure for table `password_resets`
-- 

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 
-- Dumping data for table `password_resets`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />

-- --------------------------------------------------------

-- 
-- Table structure for table `permission_role`
-- 

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 
-- Dumping data for table `permission_role`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />

-- --------------------------------------------------------

-- 
-- Table structure for table `permission_user`
-- 

CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 
-- Dumping data for table `permission_user`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />

-- --------------------------------------------------------

-- 
-- Table structure for table `permissions`
-- 

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `permissions`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />

-- --------------------------------------------------------

-- 
-- Table structure for table `post_tag`
-- 

CREATE TABLE `post_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=35 ;

-- 
-- Dumping data for table `post_tag`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
INSERT INTO `post_tag` VALUES (1, 1, 5, NULL, NULL);
INSERT INTO `post_tag` VALUES (2, 2, 3, NULL, NULL);
INSERT INTO `post_tag` VALUES (3, 3, 6, NULL, NULL);
INSERT INTO `post_tag` VALUES (4, 4, 2, NULL, NULL);
INSERT INTO `post_tag` VALUES (5, 4, 4, NULL, NULL);
INSERT INTO `post_tag` VALUES (6, 5, 3, NULL, NULL);
INSERT INTO `post_tag` VALUES (7, 6, 5, NULL, NULL);
INSERT INTO `post_tag` VALUES (8, 7, 3, NULL, NULL);
INSERT INTO `post_tag` VALUES (9, 8, 6, NULL, NULL);
INSERT INTO `post_tag` VALUES (10, 9, 2, NULL, NULL);
INSERT INTO `post_tag` VALUES (11, 9, 4, NULL, NULL);
INSERT INTO `post_tag` VALUES (12, 10, 2, NULL, NULL);
INSERT INTO `post_tag` VALUES (13, 10, 4, NULL, NULL);
INSERT INTO `post_tag` VALUES (14, 11, 3, NULL, NULL);
INSERT INTO `post_tag` VALUES (15, 12, 5, NULL, NULL);
INSERT INTO `post_tag` VALUES (16, 13, 3, NULL, NULL);
INSERT INTO `post_tag` VALUES (17, 14, 5, NULL, NULL);
INSERT INTO `post_tag` VALUES (18, 15, 6, NULL, NULL);
INSERT INTO `post_tag` VALUES (19, 16, 2, NULL, NULL);
INSERT INTO `post_tag` VALUES (20, 16, 4, NULL, NULL);
INSERT INTO `post_tag` VALUES (21, 17, 3, NULL, NULL);
INSERT INTO `post_tag` VALUES (22, 18, 6, NULL, NULL);
INSERT INTO `post_tag` VALUES (23, 19, 5, NULL, NULL);
INSERT INTO `post_tag` VALUES (24, 20, 2, NULL, NULL);
INSERT INTO `post_tag` VALUES (25, 21, 6, NULL, NULL);
INSERT INTO `post_tag` VALUES (27, 23, 1, NULL, NULL);
INSERT INTO `post_tag` VALUES (28, 24, 7, NULL, NULL);
INSERT INTO `post_tag` VALUES (29, 25, 1, NULL, NULL);
INSERT INTO `post_tag` VALUES (30, 26, 1, NULL, NULL);
INSERT INTO `post_tag` VALUES (31, 27, 2, NULL, NULL);
INSERT INTO `post_tag` VALUES (32, 27, 4, NULL, NULL);
INSERT INTO `post_tag` VALUES (33, 22, 7, NULL, NULL);
INSERT INTO `post_tag` VALUES (34, 28, 7, NULL, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `posts`
-- 

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=29 ;

-- 
-- Dumping data for table `posts`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
INSERT INTO `posts` VALUES (9, 'C Programming 2', 'Text for free from more than 100 countries around the world, with Pinger. With its photo-based interface, users are able to select a friend’s photo and view their texts, photos, calls, and voicemails in the same area. As far as texting goes, Pinger provides you with a phone number, where texts are unlimited. An added bonus is a feature that allows you to see when your sent text has been read.', 6, 'upload/posts/1579013176maxresdefault.jpg', 'c-programming-2', NULL, 2020-01-14 14:46:16, 2020-01-25 00:50:02, 12);
INSERT INTO `posts` VALUES (10, 'C++ Programming opp', 'Text for free from more than 100 countries around the world, with Pinger. With its photo-based interface, users are able to select a friend’s photo and view their texts, photos, calls, and voicemails in the same area. As far as texting goes, Pinger provides you with a phone number, where texts are unlimited. An added bonus is a feature that allows you to see when your sent text has been read.', 2, 'upload/posts/1579013229c-programming-1.jpg', 'c-programming-opp', NULL, 2020-01-14 14:47:09, 2020-01-28 15:03:13, 12);
INSERT INTO `posts` VALUES (11, 'laravel framework free', 'Text for free from more than 100 countries around the world, with Pinger. With its photo-based interface, users are able to select a friend’s photo and view their texts, photos, calls, and voicemails in the same area. As far as texting goes, Pinger provides you with a phone number, where texts are unlimited. An added bonus is a feature that allows you to see when your sent text has been read', 3, 'upload/posts/1579044940Laravel-best-PHP-Framework.jpg', 'laravel-framework-free', NULL, 2020-01-14 23:35:41, 2020-01-14 23:35:41, 12);
INSERT INTO `posts` VALUES (12, 'JAVA SE', 'Text for free from more than 100 countries around the world, with Pinger. With its photo-based interface, users are able to select a friend’s photo and view their texts, photos, calls, and voicemails in the same area. As far as texting goes, Pinger provides you with a phone number, where texts are unlimited. An added bonus is a feature that allows you to see when your sent text has been read', 1, 'upload/posts/1579044965ABT13F017E000E7481D9A11B5E6692AE21C52CDA6037733E9C26D6452C2790200C8.jpg', 'java-se', NULL, 2020-01-14 23:36:05, 2020-01-20 00:43:54, 12);
INSERT INTO `posts` VALUES (13, 'laravel', 'Text for free from more than 100 countries around the world, with Pinger. With its photo-based interface, users are able to select a friend’s photo and view their texts, photos, calls, and voicemails in the same area. As far as texting goes, Pinger provides you with a phone number, where texts are unlimited. An added bonus is a feature that allows you to see when your sent text has been read', 3, 'upload/posts/1579044988maxresd2efault.jpg', 'laravel', NULL, 2020-01-14 23:36:28, 2020-01-14 23:36:28, 12);
INSERT INTO `posts` VALUES (14, 'JAVA SE 1', 'Text for free from more than 100 countries around the world, with Pinger. With its photo-based interface, users are able to select a friend’s photo and view their texts, photos, calls, and voicemails in the same area. As far as texting goes, Pinger provides you with a phone number, where texts are unlimited. An added bonus is a feature that allows you to see when your sent text has been read', 1, 'upload/posts/1579045012shutterstock_252720676-e1470403262619.jpg', 'java-se-1', NULL, 2020-01-14 23:36:52, 2020-01-25 00:49:13, 12);
INSERT INTO `posts` VALUES (15, 'python course', 'Text for free from more than 100 countries around the world, with Pinger. With its photo-based interface, users are able to select a friend’s photo and view their texts, photos, calls, and voicemails in the same area. As far as texting goes, Pinger provides you with a phone number, where texts are unlimited. An added bonus is a feature that allows you to see when your sent text has been read', 4, 'upload/posts/1579045027a6e8b3f837dbc69a344d6292458fba0c.jpg', 'python-course', NULL, 2020-01-14 23:37:07, 2020-01-14 23:37:07, 12);
INSERT INTO `posts` VALUES (16, 'C++ Programming', 'Text for free from more than 100 countries around the world, with Pinger. With its photo-based interface, users are able to select a friend’s photo and view their texts, photos, calls, and voicemails in the same area. As far as texting goes, Pinger provides you with a phone number, where texts are unlimited. An added bonus is a feature that allows you to see when your sent text has been read', 6, 'upload/posts/1579045313674594-637042444131664559-16x9.jpg', 'c-programming', NULL, 2020-01-14 23:41:53, 2020-01-14 23:41:53, 12);
INSERT INTO `posts` VALUES (17, 'laravel framework free', 'Though, Bootstrap 4 has built-in contextual classes for coloring the table headers (thead-dark or thead-light) and table rows by using contextual classes etc.\r\nYou may also use the background and text color classes in the table as well. In the following example, the background color is set at the table level that applies to the whole table. The color of the text is also set by using text contextual class.\r\nBesides, the table header is given a separate background and text color. Have a look:', 3, 'upload/posts/1579276342FB_IMG_1492114517049.jpg', 'laravel-framework-free', NULL, 2020-01-16 15:01:57, 2020-01-25 00:49:37, 16);
INSERT INTO `posts` VALUES (18, 'python course 3', 'Though, Bootstrap 4 has built-in contextual classes for coloring the table headers (thead-dark or thead-light) and table rows by using contextual classes etc.\r\nYou may also use the background and text color classes in the table as well. In the following example, the background color is set at the table level that applies to the whole table. The color of the text is also set by using text contextual class.\r\nBesides, the table header is given a separate background and text color. Have a look:', 4, 'upload/posts/1579186975FB_IMG_1471671597168.jpg', 'python-course-3', NULL, 2020-01-16 15:02:55, 2020-01-28 15:04:50, 16);
INSERT INTO `posts` VALUES (19, 'JAVA', 'If you want to make use of multiple DataTables initialisation options, simply apply them all together to the table. In the case of the example error above, where we try to disable paging and searching we would use:', 1, 'upload/posts/1579187968FB_IMG_1492255505372.jpg', 'java', NULL, 2020-01-16 15:19:28, 2020-01-16 15:19:28, 16);
INSERT INTO `posts` VALUES (20, 'C Programming', 'Text for free from more than 100 countries around the world, with Pinger. With its photo-based interface, users are able to select a friend’s photo and view their texts, photos, calls, and voicemails in the same area. As far as texting goes, Pinger provides you with a phone number, where texts are unlimited. An added bonus is a feature that allows you to see when your sent text has been read.', 6, 'upload/posts/1579597561FB_IMG_1492387328249.jpg', 'c-programming', NULL, 2020-01-21 09:06:01, 2020-01-21 09:07:53, 12);
INSERT INTO `posts` VALUES (21, 'python course 2', 'Text for free from more than 100 countries around the world, with Pinger. With its photo-based interface, users are able to select a friend’s photo and view their texts, photos, calls, and voicemails in the same area. As far as texting goes, Pinger provides you with a phone number, where texts are unlimited. An added bonus is a feature that allows you to see when your sent text has been read.', 4, 'upload/posts/1579629380FB_IMG_1491860866086.jpg', 'python-course-2', NULL, 2020-01-21 09:07:02, 2020-01-23 15:35:35, 12);
INSERT INTO `posts` VALUES (22, 'flutter new course', 'Like tables, grid layout enables an author to align elements into columns and rows. However, many more layouts are either possible or easier with CSS grid than they were with tables. For example, a grid container''s child elements could position themselves so they actually overlap and layer, similar to CSS positioned elements.', 9, 'upload/posts/1580220927giphy.gif', 'flutter-new-course', NULL, 2020-01-28 14:15:27, 2020-01-31 23:59:42, 16);
INSERT INTO `posts` VALUES (23, 'PHP Programming', 'A breakpoint is a Bootstrap 4 variable that stands for a screen resolution. When you are specifying a breakpoint for a class, you are telling the class to be active only for resolutions that are at least as big as the number that the breakpoint holds.', 8, 'upload/posts/1580221699Daybreak Africa.png', 'php-programming', NULL, 2020-01-28 14:28:19, 2020-01-28 16:33:23, 12);
INSERT INTO `posts` VALUES (24, 'Flutter Development', 'Those days are gone when any app can feel contented by targeting their audience specific to one mobile OS platform, either the iOS or Android. As an audience, if every mobile app niche is invariably divided between these two major platforms, sooner or later, you need to have a presence across both iOS and Android. This is why, as a competitive measure, for the app developers building a cross-', 9, 'upload/posts/1580229491flutter-app-development-post.jpg', 'flutter-development', NULL, 2020-01-28 16:38:11, 2020-01-28 16:50:36, 12);
INSERT INTO `posts` VALUES (25, 'Build web applications', 'Customize your Application''s UI without writing a single line of HTML, CSS or Javascript. You can change everything from the way one button looks to the entire theme of the app, with a few points and clicks.?\r\nMULTIPLE LANGUAGE PROJECTS\r\nCreate projects with support to over 50 languages. Our Data dictionary feature makes it easy to translate table names, fields and messages.', 8, 'upload/posts/1580514630phpimage.png', 'build-web-applications', NULL, 2020-01-31 23:50:30, 2020-01-31 23:50:30, 16);
INSERT INTO `posts` VALUES (26, 'PHP in 2020', 'CONTINUAL UPDATING AND EVOLUTION\r\nMake sure your projects are continually improved. Scriptcase evolves continuously by adopting major innovations in the technological market.\r\n\r\nVERSION CONTROL\r\nManage your versions and keep a history of changes. This helps you create new versions with the same design that uses a native versioning resourse offered by Scriptcase.', 8, 'upload/posts/1580514760php-dev-banner.jpg', 'php-in-2020', NULL, 2020-01-31 23:52:40, 2020-01-31 23:52:40, 16);
INSERT INTO `posts` VALUES (27, 'Difference between string', 'Here short and long is equivalent to int16 and int32 in .NET. Similarly, “string” in C# is alias to String class of .NET Framework. So, technically there is no differences between string and String.\r\nBut, you may have question that if both strings do the same thing, then why do we need both of them? This creates the confusion among programmers. Actually, “string” is just a keyword in C# which has limited functionalities. “string” is mainly used to create a variable. On the other hand, String is a class which provides a large set of functions and properties to manipulate the string and do some string operations.', 2, 'upload/posts/1580515128skill.Image1_xggxgq.jpg', 'difference-between-string', NULL, 2020-01-31 23:57:13, 2020-01-31 23:58:48, 16);
INSERT INTO `posts` VALUES (28, 'Flutter in 2019', 'Android and Flutter, both are the babies of Google. One company managing both the native and cross-platform mobile application development for Android apps. Android application development was started at Android Inc which was bought by Google in 2005. The Flutter project began at Google and the first ever Flutter SDK was released in 2017. It would be incredibly interesting to compare native Android development with Flutter app development and to see what would be the future of Android with the rise of Fuchsia. Let''s explore and try to answer all these questions.', 9, 'upload/posts/1580759092flutterimage.png', 'flutter-in-2019', NULL, 2020-02-03 19:44:52, 2020-02-03 19:44:52, 20);

-- --------------------------------------------------------

-- 
-- Table structure for table `profiles`
-- 

CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=18 ;

-- 
-- Dumping data for table `profiles`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
INSERT INTO `profiles` VALUES (7, 10, 'upload/avatar/1.png', NULL, NULL, NULL, NULL, 2020-01-11 19:59:50, 2020-01-11 19:59:50);
INSERT INTO `profiles` VALUES (8, 11, 'upload/avatar/1.png', NULL, NULL, NULL, NULL, 2020-01-12 01:31:52, 2020-01-12 01:31:52);
INSERT INTO `profiles` VALUES (9, 12, 'upload/avatar/1579004419ABT13F017E000E7481D9A11B5E6692AE21C52CDA6037733E9C26D6452C2790200C8.jpg', 'https://facebook.com/islam.sobhi61', 'https://twitter.com/islam.sobhi6', 'https://github.com/islam.sobhi61', 'web developer', 2020-01-12 04:11:38, 2020-01-20 00:36:33);
INSERT INTO `profiles` VALUES (10, 13, 'upload/avatar/1.png', NULL, NULL, NULL, NULL, 2020-01-12 04:20:36, 2020-01-12 04:20:36);
INSERT INTO `profiles` VALUES (11, 14, 'upload/avatar/1.png', NULL, NULL, NULL, NULL, 2020-01-12 04:27:05, 2020-01-12 04:27:05);
INSERT INTO `profiles` VALUES (12, 15, 'upload/avatar/1.png', NULL, NULL, NULL, NULL, 2020-01-14 10:52:40, 2020-01-14 10:52:40);
INSERT INTO `profiles` VALUES (13, 16, 'upload/avatar/1580858214avatar-1.jpg', 'facebook.com/islam.sobhi61', 'twitter.com/islam.sobhi6', 'gitgub.com/islam.sobhi61', 'web developer full stack', 2020-01-14 11:01:31, 2020-02-04 23:16:54);
INSERT INTO `profiles` VALUES (14, 17, 'upload/avatar/1.png', NULL, NULL, NULL, NULL, 2020-01-15 00:09:15, 2020-01-15 00:09:15);
INSERT INTO `profiles` VALUES (15, 19, 'upload/avatar/1.png', NULL, NULL, NULL, NULL, 2020-01-30 03:35:59, 2020-01-30 03:35:59);
INSERT INTO `profiles` VALUES (16, 20, 'upload/avatar/1580858183avatar-2.jpg', 'facebook.com/islam.sobhi64', 'twitter.com/islam.sobhi64', 'https://gitgub.com/islam.sobhi64', 'PHP developer using Laravel framework', 2020-02-03 19:45:00, 2020-02-04 23:16:23);
INSERT INTO `profiles` VALUES (17, 21, 'upload/avatar/1.png', NULL, NULL, NULL, NULL, 2020-03-20 21:11:53, 2020-03-20 21:11:53);

-- --------------------------------------------------------

-- 
-- Table structure for table `role_user`
-- 

CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 
-- Dumping data for table `role_user`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
INSERT INTO `role_user` VALUES (1, 12, 'App\\User');
INSERT INTO `role_user` VALUES (1, 13, 'App\\User');
INSERT INTO `role_user` VALUES (1, 16, 'App\\User');
INSERT INTO `role_user` VALUES (1, 20, 'App\\User');
INSERT INTO `role_user` VALUES (1, 21, 'App\\User');
INSERT INTO `role_user` VALUES (2, 10, 'App\\User');
INSERT INTO `role_user` VALUES (2, 11, 'App\\User');
INSERT INTO `role_user` VALUES (2, 13, 'App\\User');
INSERT INTO `role_user` VALUES (2, 14, 'App\\User');
INSERT INTO `role_user` VALUES (2, 15, 'App\\User');
INSERT INTO `role_user` VALUES (2, 17, 'App\\User');
INSERT INTO `role_user` VALUES (2, 19, 'App\\User');

-- --------------------------------------------------------

-- 
-- Table structure for table `roles`
-- 

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `roles`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
INSERT INTO `roles` VALUES (1, 'super_admin', 'super_admin', 'can do anything', 2020-01-11 16:49:58, 2020-01-11 16:49:58);
INSERT INTO `roles` VALUES (2, 'user', 'user', 'can do specific tasks', 2020-01-11 16:49:58, 2020-01-11 16:49:58);

-- --------------------------------------------------------

-- 
-- Table structure for table `settings`
-- 

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `settings`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
INSERT INTO `settings` VALUES (1, 'IslamSobhi', '+2 0114165621', 'islam.sobhi61@gmail.com', 'Egypt - Assyut', 2020-01-11 13:46:02, 2020-01-21 11:35:29);

-- --------------------------------------------------------

-- 
-- Table structure for table `tags`
-- 

CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `tags`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
INSERT INTO `tags` VALUES (1, 'php', 2020-01-11 13:51:36, 2020-01-11 13:51:36);
INSERT INTO `tags` VALUES (2, 'c', 2020-01-11 13:51:40, 2020-01-11 13:51:40);
INSERT INTO `tags` VALUES (3, 'laravel', 2020-01-11 13:51:44, 2020-01-11 13:51:44);
INSERT INTO `tags` VALUES (4, 'c++', 2020-01-11 13:51:49, 2020-01-11 13:51:49);
INSERT INTO `tags` VALUES (5, 'JAVA', 2020-01-11 13:51:54, 2020-01-11 13:51:54);
INSERT INTO `tags` VALUES (6, 'Python', 2020-01-11 13:51:58, 2020-01-11 13:51:58);
INSERT INTO `tags` VALUES (7, 'flutter', 2020-01-27 16:18:45, 2020-01-27 16:18:45);
INSERT INTO `tags` VALUES (8, 'magento', 2020-03-20 21:17:29, 2020-03-20 21:17:29);

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `users`
-- 

<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
<br />
<b>Deprecated</b>:  Function ereg_replace() is deprecated in <b>C:\AppServ\www\phpMyAdmin\libraries\export\sql.php</b> on line <b>32</b><br />
INSERT INTO `users` VALUES (16, 'Mohamed Sobhi', 'mohammed5665@gmail.com', NULL, '$2y$10$omp.j/4/zMM7eoNyFmhDPOly6uw6RQlR0eWpXOXnbQ2sY4cfyudZ.', NULL, 2020-01-14 11:01:31, 2020-01-16 15:11:23, NULL);
INSERT INTO `users` VALUES (17, 'Mohammed ragab', 'islam@gmail.com', NULL, '$2y$10$F4bpJYHyHasPNtORGQodkO4t9FlMs/EZGD1WHyRgSo4E7oG07PAHm', NULL, 2020-01-15 00:09:15, 2020-01-15 00:09:15, NULL);
INSERT INTO `users` VALUES (20, 'islam sobhi', 'islam.sobhi61@gmail.com', 2020-01-30 11:51:20, '$2y$10$gCtlFwubcLV2uTvxgW3fl.78ytr6aadZPIpxA8wdn65RWqOu1QDHy', 'MNFjDlIoVj5nWEaewgYJGIi9huaSCOO3lhcmxnqR5LQsJ35TBrIz5ExVLX0l', 2020-01-30 03:40:09, 2020-02-04 17:00:16, '107516079603960499788');
INSERT INTO `users` VALUES (21, 'Islam Sobhi Facebook', 'islam.sobhi61@yahoo.com', NULL, 'eyJpdiI6IkdPRStMYTJ3WWdMMkp3WU9PTFdFSlE9PSIsInZhbHVlIjoiOVo0bVUwWXZJU20wajNqZG5iVHV1dFdMckxEMzdVc1UxcFdmbVwvd2s1alE9IiwibWFjIjoiNTBlMmJhNTM2NGIzYzdmMjA3MWQ0MjI4ZjIxMTgyZGQ3ZThlZjRjNDU2NTQzOTU5Yzc2ODIxMTYzZGEyZDljZSJ9', NULL, 2020-03-20 21:11:34, 2020-03-20 21:23:58, '2568950066712763');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `permission_role`
-- 
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `permission_user`
-- 
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `role_user`
-- 
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
        