-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Kas 2024, 03:53:34
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yildirimdev_admin_v2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL DEFAULT 'tr',
  `uid` text NOT NULL,
  `category` text NOT NULL,
  `title` text DEFAULT NULL,
  `description` text NOT NULL,
  `img_url` text NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `seo_keywords` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `lang`, `uid`, `category`, `title`, `description`, `img_url`, `views`, `likes`, `seo_url`, `seo_keywords`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'tr', '1726932788', '1730073746', 'Blog 1', '<p>Blog 1 yazısı A&ccedil;ıklanama yazısı</p>', '/upload/uploads/1732156861.jpg', 0, 0, 'blog-1', 'test,blog', '2022-11-16 12:34:01', 10, 1, '2024-11-21 02:41:03', 1, 1, 0, NULL, NULL),
(2, 'en', '1726932788', '1730073746', 'Blog 2', '<p>Blog 2 yazısı A&ccedil;ıklanama yazısı</p>', '/upload/uploads/1732156861.jpg', 0, 0, 'blog-2', NULL, '2022-11-16 12:37:15', 10, 1, '2024-11-21 02:41:03', 1, 1, 0, NULL, NULL),
(3, 'de', '1726932788', '1730073746', 'Blog 3', '<p>Blog 3 yazısı A&ccedil;ıklanama yazısı</p>', '/upload/uploads/1732156861.jpg', 0, 0, 'blog-3', NULL, '2022-11-16 12:38:22', 1, 1, '2024-11-21 02:41:03', 1, 1, 0, NULL, NULL),
(42, 'tr', '1730404627', '1730073746', '3 buçuk milyon yıldır yaşıyor!', '<p>İnsanlar ilk &ccedil;ağlardan beri &ouml;l&uuml;ms&uuml;zl&uuml;ğ&uuml;n sırrını arıyor. Rus bilim adamları ise onu bulduğunu iddia ediyor. Moskova Devlet &Uuml;niversitesi&#39;nde yapılan araştırmaya g&ouml;re; Rus bilim adamları &uuml;&ccedil; bu&ccedil;uk milyon yıldır buzulun i&ccedil;inde hayatta kalan bir bakteri buldu.</p>\n\n<p>Buldukları bu bakteriyi farelere enjekte eden bilim adamları, farelerdeki değişimi takip etti. Araştırmacılara g&ouml;re yaşlı farelerin aşıdan sonra adeta dans etmeye başladıkları tespit edildi.</p>\n\n<p>&Uuml;reme kabiliyetini kaybetmiş yaşlı dişi farelerin ise bu işlevi tekrar kazandıkları belirtildi.</p>', '/upload/uploads/1730750659.jpg', 0, 0, '3-bucuk-milyon-yildir-yasiyor', NULL, '2024-10-31 20:04:30', 1, 1, '2024-11-09 18:48:55', 1, 1, 0, NULL, NULL),
(48, 'tr', '1731265761', '1726932788', 'blog yeni', '<p>aciklama</p>', '/assets/img/default/default.jpg', 0, 0, 'blog-yeni', 'test,tr', '2024-11-10 19:09:41', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(49, 'tr', '1732157049', '1726932788', 'blog1', '<p>sadasd</p>', '/upload/uploads/1732157057.jpg', 0, 0, 'blog1', NULL, '2024-11-21 02:44:51', 1, 0, NULL, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs_categories`
--

CREATE TABLE `blogs_categories` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL,
  `uid` text NOT NULL,
  `title` text DEFAULT NULL,
  `imgUrl` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `blogs_categories`
--

INSERT INTO `blogs_categories` (`id`, `lang`, `uid`, `title`, `imgUrl`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'tr', '1726932788', 'Doğa', '', '2022-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(2, 'tr', '1726932789', 'Hava', '', '2022-11-16 12:37:15', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(3, 'tr', '1726932790', 'Hayat', '', '2022-11-16 12:38:22', NULL, 1, '2024-10-15 03:01:19', 1, 1, 0, NULL, NULL),
(4, 'tr', '1726932791', 'Su', '', '2022-11-16 13:44:31', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(79, 'tr', '1730073746', 'Test', '', '2024-10-28 00:02:26', 1, 1, '2024-10-28 04:17:19', 1, 1, 0, NULL, NULL),
(80, 'en', '1730073746', 'test en', '', '2024-10-28 00:02:26', 1, 1, '2024-10-28 04:17:19', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs_comment`
--

CREATE TABLE `blogs_comment` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL DEFAULT 'tr',
  `blog_uid` text NOT NULL DEFAULT '\'\\\'0\\\'\'',
  `userid` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `blogs_comment`
--

INSERT INTO `blogs_comment` (`id`, `lang`, `blog_uid`, `userid`, `comment`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'tr', '1', 1, 'Yorum 1', '2022-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(11, 'tr', '1729104165', 1, 'deneme', '2024-10-16 22:33:19', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(25, 'tr', '1726932788', 1, 'yorum 1', '2024-10-24 17:25:35', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(26, 'tr', '1726932788', 1, 'Çok güzel bir fotograf', '2024-10-24 17:25:58', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(27, 'tr', '1728839597', 1, 'deneme', '2024-10-28 01:25:33', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(28, 'tr', '1728839597', 1, 'Test', '2024-10-28 01:25:42', 1, 1, '2024-10-28 01:35:16', 1, 0, 0, NULL, NULL),
(30, 'tr', '1728839597', 1, 'Kontrol Yapılacak', '2024-10-28 01:33:16', 1, 1, '2024-10-28 01:35:26', 1, 1, 0, NULL, NULL),
(31, 'tr', '1726932788', 1, 'Son', '2024-10-28 02:56:07', 1, 0, NULL, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL DEFAULT 'tr',
  `uid` text NOT NULL,
  `name` text DEFAULT NULL,
  `surname` text DEFAULT NULL,
  `role` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `img_url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `lang`, `uid`, `name`, `surname`, `role`, `comment`, `img_url`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'tr', '1726932788', 'Name 1', 'Surname 1', 'Görev 1', '<p>Yorum 1 yazısı</p>', '/assets/img/default/default.jpg', '2022-11-16 12:34:01', 10, 1, '2024-10-13 15:53:02', 1, 1, 0, NULL, NULL),
(2, 'tr', '1726932789', 'Name 2', 'Surname 2', 'Görev 2', '<p>Yorum 2 yazısı</p>', '/assets/img/default/default.jpg', '2022-11-16 12:37:15', 10, 1, '2024-10-13 15:53:07', 1, 1, 0, NULL, NULL),
(3, 'tr', '1726932790', 'Name 3', 'Surname 3', 'Görev 3', '<p>Yorum 3 yazısı</p>', '/upload/uploads/1730926769.jpg', '2022-11-16 12:38:22', 1, 1, '2024-11-06 20:59:31', 1, 1, 0, NULL, NULL),
(45, 'en', '1726932790', 'Name 3', 'Surname 3', 'görev en', '<p>yorum en</p>', '/upload/uploads/1730926769.jpg', '2024-11-06 20:58:24', 1, 1, '2024-11-06 20:59:31', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `category` text DEFAULT NULL,
  `company_name` text NOT NULL,
  `description` text DEFAULT NULL,
  `authorized_person` text DEFAULT NULL,
  `authorized_person_role` text DEFAULT NULL,
  `authorized_person_tel` text DEFAULT NULL,
  `authorized_person_whatsap` text DEFAULT NULL,
  `authorized_person_mail` text DEFAULT NULL,
  `web_address1` text DEFAULT NULL,
  `web_address2` text DEFAULT NULL,
  `tel1` text DEFAULT NULL,
  `tel2` text DEFAULT NULL,
  `fax1` text DEFAULT NULL,
  `fax2` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `email2` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `district` text DEFAULT NULL,
  `neighborhood` text DEFAULT NULL,
  `post_code` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `billing_address` text DEFAULT NULL,
  `tax_administration` text DEFAULT NULL,
  `tax_number` text DEFAULT NULL,
  `ref_person` text DEFAULT NULL,
  `ref_phone` text DEFAULT NULL,
  `ref_role` text DEFAULT NULL,
  `ref_email` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `company`
--

INSERT INTO `company` (`id`, `category`, `company_name`, `description`, `authorized_person`, `authorized_person_role`, `authorized_person_tel`, `authorized_person_whatsap`, `authorized_person_mail`, `web_address1`, `web_address2`, `tel1`, `tel2`, `fax1`, `fax2`, `email`, `email2`, `country`, `city`, `district`, `neighborhood`, `post_code`, `address`, `billing_address`, `tax_administration`, `tax_number`, `ref_person`, `ref_phone`, `ref_role`, `ref_email`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(48, '3', 'Firma Adı', 'Açıklama', 'Yetkili Kişi', 'Yetkili Kişi Görevi', 'Yetkili Telefon', NULL, 'Yetkili Kişi Maili', 'Web Adres 1', 'Web Adres 2', 'Telefon', 'Telefon 2', NULL, NULL, 'Email', 'Email 2', 'Ülke', 'İl', 'İlçe', 'Mahalle', NULL, 'Adres', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-03 10:53:55', 1, 1, '2024-11-03 11:01:27', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `company_categories`
--

CREATE TABLE `company_categories` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL,
  `uid` text NOT NULL,
  `title` text DEFAULT NULL,
  `imgUrl` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `company_categories`
--

INSERT INTO `company_categories` (`id`, `lang`, `uid`, `title`, `imgUrl`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'tr', '1726932788', 'Firma Kategorisi 1', '', '2022-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(2, 'tr', '1726932789', 'Firma Kategorisi 2', '', '2022-11-16 12:37:15', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(3, 'tr', '1726932790', 'Firma Kategorisi 3', '', '2022-11-16 12:38:22', NULL, 1, '2024-10-15 03:01:19', 1, 1, 0, NULL, NULL),
(4, 'tr', '1726932791', 'Firma Kategorisi 4', '', '2022-11-16 13:44:31', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(82, 'tr', '1729729071', 'Firma Kategorisi 5', '', '2024-10-24 00:17:51', 1, 0, NULL, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact_message`
--

CREATE TABLE `contact_message` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contact_message`
--

INSERT INTO `contact_message` (`id`, `name`, `surname`, `email`, `subject`, `message`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'Name 1', 'Surname 1', 'deneme@test.com', 'Konu 1', 'Mesaj 1', '2022-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(2, 'Name 2', 'Surname 2', 'deneme2@test.com', 'Konu 2', 'Mesaj 2', '2022-11-16 12:37:15', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(14, 'ebuenes', 'yıldırım', 'ebuenesy2@gmail.com', 'konu', 'mesaj', '2024-10-22 23:10:43', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(17, 'ebuenes', 'yıldırım', 'ebuenesy2@gmail.com', 'konu', 'Mesaj', '2024-11-09 20:48:59', 1, 0, NULL, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `current_account`
--

CREATE TABLE `current_account` (
  `id` int(11) NOT NULL,
  `date_time` text NOT NULL,
  `deposited` text DEFAULT NULL,
  `withdrawn` text DEFAULT '\'0\'',
  `result` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `current_account`
--

INSERT INTO `current_account` (`id`, `date_time`, `deposited`, `withdrawn`, `result`, `description`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, '2024-08-28', '30000', '0', '30000', 'Maaş Yattı', '2023-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(2, '2024-08-29', '0', '650', '-650', 'Ödeme Yapıldı', '2023-11-16 12:37:15', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(3, '2024-08-31', '0', '850', '-850', 'Ev Kirası Ödendi', '2023-11-16 12:38:22', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(4, '2024-09-05', '2350', '850', '1500', 'AlışVeriş Yapıldı', '2024-10-25 23:52:36', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(5, '2024-10-26', '60', '5', '55', 'Acıklama 1', '2024-10-26 00:44:20', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(6, '2024-10-20', '0', '75', '-75', 'Aciklama güncelleme', '2024-10-26 00:46:58', 1, 1, '2024-10-26 01:08:51', 1, 1, 0, NULL, NULL),
(11, '2023-01-01', '60', '5', '55', 'Acıklama 1', '2024-10-26 01:32:04', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(12, '2023-08-28', '0', '75', '-75', 'Aciklama güncelleme', '2024-10-26 01:32:04', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(13, '2023-10-26', '150', '65', '85', 'Acıklama', '2024-10-26 01:35:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(14, '2024-10-11', '50', '87', '-37', 'Ac', '2024-10-26 01:35:46', 1, 1, '2024-10-26 04:31:03', 1, 1, 0, NULL, NULL),
(16, '2024-10-25', '100', '0', '100', NULL, '2024-10-26 07:42:58', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(17, '2024-10-24', '24', '0', '24', NULL, '2024-10-26 07:43:10', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(18, '2024-10-26', '69', '10', '59', NULL, '2024-10-26 07:43:24', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(19, '2024-10-23', '150', '0', '150', NULL, '2024-10-26 07:43:42', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(20, '2024-10-22', '85', '0', '85', NULL, '2024-10-26 07:43:53', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(21, '2024-10-01', '50', '0', '50', NULL, '2024-10-26 07:44:04', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(22, '2024-10-18', '10', '5', '5', NULL, '2024-10-26 07:44:21', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(23, '2024-10-19', '19', '3', '16', NULL, '2024-10-26 07:46:09', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(24, '2024-10-20', '20', '10', '10', NULL, '2024-10-26 07:47:03', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(25, '2024-09-16', '850', '25', '825', NULL, '2024-10-26 07:57:27', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(26, '2024-09-20', '50', '3', '47', NULL, '2024-10-26 07:57:40', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(27, '2024-09-23', '15', '2', '13', NULL, '2024-10-26 08:00:09', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(28, '2024-09-04', '43', '0', '43', NULL, '2024-10-26 08:03:39', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(29, '2024-10-02', '10', '0', '10', NULL, '2024-10-26 08:05:31', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(30, '2024-10-12', '14', '0', '14', NULL, '2024-10-26 08:05:52', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(31, '2024-09-12', '36.6', '0', '37', NULL, '2024-10-26 08:06:54', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(32, '2024-09-05', '95', '0', '95', 'para yattı', '2024-10-26 08:10:09', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(33, '2024-10-16', '65', '0', '65', NULL, '2024-10-26 08:14:24', 1, 1, '2024-10-26 08:19:46', 1, 1, 0, NULL, NULL),
(34, '2024-10-15', '45', '0', '45', NULL, '2024-10-26 08:17:03', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(35, '2024-10-12', '0', '65', '-65', NULL, '2024-10-26 08:19:39', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(36, '2024-09-30', '65', '0', '65', NULL, '2024-10-26 08:52:50', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(37, '2024-09-01', '0', '150', '-150', NULL, '2024-10-26 08:53:02', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(38, '2024-10-01', '10', '0', '10', NULL, '2024-10-26 08:53:24', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(39, '2024-01-27', '123', '0', '123', NULL, '2024-10-26 08:56:38', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(40, '2024-01-01', '100', '0', '100', NULL, '2024-10-26 08:57:46', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(41, '2023-12-31', '950', '0', '950', NULL, '2024-10-26 08:58:17', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(44, '2024-10-25', '65', '0', '65.00', NULL, '2024-10-26 13:32:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(45, '2024-10-23', '15', '10', '5.00', 'aciklama', '2024-10-26 20:07:38', 1, 1, '2024-10-26 20:07:49', 1, 1, 0, NULL, NULL),
(46, '2024-10-27', '150', '50', '100.00', 'Para yatırıldı x', '2024-10-27 13:03:04', 1, 1, '2024-10-29 14:06:30', 1, 1, 0, NULL, NULL),
(47, '2024-11-16T23:39', '150', '0', '150.00', NULL, '2024-11-16 19:40:03', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(48, '2024-11-16', '150', '50', '100.00', 'Yeni', '2024-11-16 19:43:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(49, '2024-11-16T22:46', '165', '15', '150.00', 'test', '2024-11-16 19:47:05', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(50, '2024-11-12T06:52', '70', '5', '65.00', '12 11 2024 - 06 52', '2024-11-16 19:47:35', 1, 1, '2024-11-16 19:48:34', 1, 1, 0, NULL, NULL),
(51, '2024-11-12T06:52', '70', '5', '65.00', '12 11 2024 - 06 52', '2024-11-16 19:49:09', 1, 0, NULL, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `departmanlist`
--

CREATE TABLE `departmanlist` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `departmanlist`
--

INSERT INTO `departmanlist` (`id`, `title`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'Departman - Super Admin', '2022-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(2, 'Departman - Admin', '2022-11-16 12:37:15', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(3, 'Departman - User', '2022-11-16 12:38:22', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(4, 'Deneme 4', '2024-10-12 15:02:00', 1, 1, '2024-10-22 22:48:06', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL,
  `uid` text NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `faq`
--

INSERT INTO `faq` (`id`, `lang`, `uid`, `question`, `answer`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(16, 'de', '1726932788', 'Soru 1 de sadsad', '<p>sadsad</p>', '2024-09-21 15:33:44', 1, 1, '2024-10-27 23:26:43', NULL, 1, 0, NULL, NULL),
(17, 'tr', '1726932788', 'Soru 1 sdsa', '<p>sadsad</p>', '2024-09-21 15:33:46', 1, 1, '2024-10-27 23:26:43', NULL, 1, 0, NULL, NULL),
(18, 'en', '1726932788', 'Soru 1 en sadsad', '<p>sadasd</p>', '2024-09-21 15:33:49', 1, 1, '2024-10-27 23:26:43', NULL, 1, 0, NULL, NULL),
(57, 'de', '1729694503', 'de', '<p>sdasd</p>', '2024-10-23 14:42:07', 1, 1, '2024-10-27 23:26:43', NULL, 1, 0, NULL, NULL),
(58, 'tr', '1729694503', 'tr', '<p>sadsa</p>', '2024-10-23 14:42:10', 1, 1, '2024-10-27 23:26:43', NULL, 1, 0, NULL, NULL),
(59, 'tr', '1729694549', 'tr 1 Kontrol', '<p>sadsad</p>', '2024-10-23 14:42:40', 1, 1, '2024-10-28 04:13:57', 1, 1, 0, NULL, NULL),
(60, 'en', '1729694549', 'en 1', '<p>sad</p>', '2024-10-23 14:42:43', 1, 1, '2024-10-28 04:13:57', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `homesettings`
--

CREATE TABLE `homesettings` (
  `id` int(11) NOT NULL,
  `siteUrl` text NOT NULL,
  `title` text NOT NULL,
  `logoUrl` text NOT NULL,
  `footerLogo` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `phone2` text DEFAULT NULL,
  `whatsapp` text DEFAULT NULL,
  `address` text NOT NULL,
  `facebook_Url` text NOT NULL,
  `twitter_Url` text NOT NULL,
  `instagram_Url` text NOT NULL,
  `linkedln_Url` text NOT NULL,
  `youtube_Url` text NOT NULL,
  `seo_description` text DEFAULT NULL,
  `seo_keywords` text DEFAULT NULL,
  `isUpdated` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_byId` int(11) NOT NULL DEFAULT 0,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `homesettings`
--

INSERT INTO `homesettings` (`id`, `siteUrl`, `title`, `logoUrl`, `footerLogo`, `email`, `phone`, `phone2`, `whatsapp`, `address`, `facebook_Url`, `twitter_Url`, `instagram_Url`, `linkedln_Url`, `youtube_Url`, `seo_description`, `seo_keywords`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, '/', 'Site Adı', 'LogoUrl', 'Footer Logo Url', 'info@site.com', '0551 032 ** **', 'phone2', 'whatsapp', 'Adress', 'facebook url', 'twitter url', 'instagram url', 'linkedln url', 'youtube url', 'yildirimdev tarafından yapılmış web sitesidir', 'admin,aciklama', 0, '2024-10-12 19:25:06', 0, 1, 0, NULL, 0),
(2, 'yildirimdev.com', 'yildirimdev', '/assets/web/img/logo.png', '/assets/web/img/logo.png', 'ebuenesy2@gmail.com', '+90 551 032 05 01', '+90 551 032 05 02', '+90 551 032 05 03', 'Keçiören / Ankara', 'facebook url', 'twitter url', 'instagram url', 'linkedln url', 'youtube url', 'web seo', 'web,aciklama,enes,yildirimdev,deneme,admin', 1, '2024-11-16 18:30:25', 0, 1, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `institutional`
--

CREATE TABLE `institutional` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL,
  `about` text DEFAULT NULL,
  `about_img_url` text DEFAULT NULL,
  `cookiePolicy` text NOT NULL,
  `cookiePolicy_img_url` text DEFAULT NULL,
  `termsOfUse` text NOT NULL,
  `termsOfUse_img_url` text DEFAULT NULL,
  `termsOfConditions` text NOT NULL,
  `termsOfConditions_img_url` text DEFAULT NULL,
  `privacyPolicy` text NOT NULL,
  `privacyPolicy_img_url` text DEFAULT NULL,
  `personalDataProtectionLaw` text NOT NULL,
  `personalDataProtectionLaw_img_url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `institutional`
--

INSERT INTO `institutional` (`id`, `lang`, `about`, `about_img_url`, `cookiePolicy`, `cookiePolicy_img_url`, `termsOfUse`, `termsOfUse_img_url`, `termsOfConditions`, `termsOfConditions_img_url`, `privacyPolicy`, `privacyPolicy_img_url`, `personalDataProtectionLaw`, `personalDataProtectionLaw_img_url`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'tr', '<p>Hakkımızda Turkce x</p>', '/upload/uploads/1730923238.jpg', '<p>Çerez Politikası - Türkçe</p>', '/upload/uploads/1730923274.jpg', ' <h1>Kullanım Koşulları</h1>\n <p>Koşulları</p><p>tr</p>', '/assets/img/default/default.jpg', '<h1>Kullanım Şartları</h1>\n<p>Şartlarımız</p> <p>tr</p>', '/assets/img/default/default.jpg', ' <h1>Gizlilik Politikası</h1>\n <p>Gizlilik bizim işimiz</p> <p>tr</p>', '/assets/img/default/default.jpg', ' <h1>Kişisel Verilerin Korunma Kanunu</h1>\n<p>Kanunlar</p><p>tr</p>', '/assets/img/default/default.jpg', '2022-11-16 12:34:01', NULL, 1, '2024-11-06 20:01:19', 1, 1, 0, NULL, NULL),
(2, 'en', '<p>Hakkımızda İngilizce x</p>', '/upload/uploads/1730923238.jpg', '<p>Çerez Politikası - İngilizce</p>', '/upload/uploads/1730923274.jpg', ' <h1>Kullanım Koşulları</h1>\n <p>Koşulları</p><p>en</p>', '/assets/img/default/default.jpg', '<h1>Kullanım Şartları</h1>\n<p>Şartlarımız</p> <p>en</p>', '/assets/img/default/default.jpg', ' <h1>Gizlilik Politikası</h1>\n <p>Gizlilik bizim işimiz</p> <p>en</p>', '/assets/img/default/default.jpg', ' <h1>Kişisel Verilerin Korunma Kanunu</h1>\n<p>Kanunlar</p><p>en</p>', '/assets/img/default/default.jpg', '2024-09-20 18:09:13', NULL, 1, '2024-11-06 20:01:19', 1, 1, 0, NULL, NULL),
(3, 'de', '<p>Hakkımızda Almanca</p>', '/upload/uploads/1730923238.jpg', '<p>Çerez Politikası - Almanca</p>', '/upload/uploads/1730923274.jpg', ' <h1>Kullanım Koşulları</h1>\n <p>Koşulları</p><p>de</p>', '/assets/img/default/default.jpg', '<h1>Kullanım Şartları</h1>\n<p>Şartlarımız</p> <p>de</p>', '/assets/img/default/default.jpg', ' <h1>Gizlilik Politikası</h1>\n <p>Gizlilik bizim işimiz</p> <p>de</p>', '/assets/img/default/default.jpg', ' <h1>Kişisel Verilerin Korunma Kanunu</h1>\n<p>Kanunlar</p><p>de</p>', '/assets/img/default/default.jpg', '2024-09-20 18:09:47', NULL, 1, '2024-11-06 20:01:19', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `date` text DEFAULT NULL,
  `time` text DEFAULT NULL,
  `interviewee` text DEFAULT NULL,
  `businessStatus` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `meetings`
--

INSERT INTO `meetings` (`id`, `date`, `time`, `interviewee`, `businessStatus`, `description`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, '1.10.2024', '15:20', 'Karizma Yazılım', '1', 'Arama Yapıldı', '2022-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(16, '2024-11-01', '04:50', 'Görüşme Yapılan Kişi', '0', 'Firma Ret Etti', '2024-11-01 01:51:00', 1, 1, '2024-11-01 02:37:49', NULL, 1, 0, NULL, NULL),
(17, '2024-11-05', '06:28', 'Görüşme Yapılan Kişi', '2', 'bekleme güncelleme', '2024-11-01 02:27:51', 1, 1, '2024-11-01 02:30:18', 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `multimenu`
--

CREATE TABLE `multimenu` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `slug` text DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `icon` text DEFAULT NULL,
  `route_name` text NOT NULL,
  `tr` text NOT NULL,
  `en` text NOT NULL,
  `de` text DEFAULT NULL,
  `ru` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `multimenu`
--

INSERT INTO `multimenu` (`id`, `orderId`, `slug`, `parent_id`, `icon`, `route_name`, `tr`, `en`, `de`, `ru`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 1, NULL, 0, NULL, 'settings', 'Ayarlar', 'Settings', NULL, NULL, '2024-01-18 01:41:24', 0, 1, '2024-10-22 03:28:41', 1, 1, 0, NULL, NULL),
(2, 2, '/admin/setting/menu', 1, NULL, 'settings.menu', 'Menu Ayarları', 'Menu Settings', NULL, NULL, '2024-01-18 01:42:31', 0, 1, '2024-10-22 03:26:48', 1, 1, 0, NULL, NULL),
(4, 7, NULL, 0, NULL, 'admin.fixed', 'Sabit', 'Fixed', NULL, NULL, '2024-01-18 02:07:35', 0, 1, '2024-10-22 03:28:21', 1, 1, 0, NULL, NULL),
(5, 5, '/admin/fixed', 4, NULL, 'admin.fixed.page', 'Sabit Sayfa', 'Fixed Page', NULL, NULL, '2024-01-18 02:09:09', 0, 1, '2024-01-18 02:09:34', 1, 1, 0, NULL, NULL),
(6, 6, '/admin/fixed/form', 4, NULL, 'admin.fixed.form', 'Sabit Form', 'Fixed Form', NULL, NULL, '2024-01-18 02:12:36', 0, 1, '2024-01-18 02:12:42', 1, 1, 0, NULL, NULL),
(7, 15, NULL, 0, NULL, 'admin.fixed.list', 'Sabit Liste', 'Fixed List', NULL, NULL, '2024-01-18 02:16:57', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(8, 8, '/admin/fixed_list/list', 7, NULL, 'admin.fixed.list.view', 'Sabit Liste', 'Fixed List', NULL, NULL, '2024-01-18 02:18:21', 0, 1, '2024-01-18 14:37:52', 1, 1, 0, NULL, NULL),
(9, 9, '/admin/fixed_list/search/1', 7, NULL, 'admin.fixed.search.view', 'Sabit Liste - Arama', 'Fixed List - Search', NULL, NULL, '2024-01-18 02:21:13', 0, 1, '2024-01-18 14:38:55', 1, 1, 0, NULL, NULL),
(10, 10, '/admin/fixed_list/add', 7, NULL, 'admin.fixed.add', 'Sabit Liste - Ekle', 'Fixed List - Add', NULL, NULL, '2024-01-18 03:24:45', 0, 1, '2024-01-18 14:39:04', 1, 1, 0, NULL, NULL),
(11, 11, '/admin/fixed_list/edit/1', 7, NULL, 'admin.fixed.edit.view', 'Sabit Liste - Düzenle', 'Fixed List - Edit', NULL, NULL, '2024-01-18 03:26:05', 0, 1, '2024-01-18 14:39:13', 1, 1, 0, NULL, NULL),
(15, 18, NULL, 0, NULL, 'admin.test', 'Test', 'Test', NULL, NULL, '2024-01-18 03:32:44', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(16, 16, '/admin/test', 15, NULL, 'admin.test', 'Test', 'Test', NULL, NULL, '2024-01-18 03:33:19', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(17, 17, '/admin/test/view', 15, NULL, 'admin.test.page', 'Test Sayfa', 'Test Page', NULL, NULL, '2024-01-18 03:34:43', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(18, 4, NULL, 0, NULL, 'fixed.file', 'Dosya', 'File', NULL, NULL, '2024-01-18 03:37:58', 0, 1, '2024-10-22 09:07:03', 1, 1, 0, NULL, NULL),
(19, 19, '/file/upload', 18, NULL, 'fixed.file.upload', 'Dosya Yükleme', 'File Upload', NULL, NULL, '2024-01-18 03:38:45', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(20, 20, '/file/upload/multi', 18, NULL, 'fixed.file.upload.multi', 'Dosya Yükleme - Çoklu', 'File Upload - Multiple', NULL, NULL, '2024-01-18 03:41:02', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(21, 21, NULL, 0, NULL, 'error', 'Hata', 'Error', NULL, NULL, '2024-01-18 03:59:36', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(22, 22, '/sfdsf/dsf', 21, NULL, 'error.error404', 'Hata - 404', 'Error - 404', NULL, NULL, '2024-01-18 04:03:14', 0, 1, '2024-01-18 04:04:47', 1, 1, 0, NULL, NULL),
(23, 23, '/error/500', 21, NULL, 'error.error500', 'Hata - 500', 'Error - 500', NULL, NULL, '2024-01-18 04:04:53', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(24, 24, '/error/account/block', 21, NULL, 'error.passive.screen', 'Hata - Pasif Ekranı', 'Error - Passive Screen', NULL, NULL, '2024-01-18 04:06:46', 0, 1, '2024-01-18 16:25:26', 1, 1, 0, NULL, NULL),
(25, 25, NULL, 0, NULL, 'admin', 'Admin', 'Admin', NULL, NULL, '2024-01-18 04:10:37', 0, 1, '2024-09-29 09:07:09', 1, 1, 0, NULL, NULL),
(26, 26, '/admin/list', 25, NULL, 'admin.list', 'Admin Listesi', 'Admin List', NULL, NULL, '2024-01-18 04:11:51', 0, 1, '2024-01-18 19:18:22', 1, 1, 0, NULL, NULL),
(27, 27, '/admin/info/1', 25, NULL, 'admin.info', 'Admin Bilgisi', 'Admin Information', NULL, NULL, '2024-01-18 04:13:58', 0, 1, '2024-01-18 04:48:52', 1, 1, 0, NULL, NULL),
(29, 29, '/admin/login', 25, NULL, 'admin.login', 'Admin Giriş', 'Admin Login', NULL, NULL, '2024-01-18 04:19:18', 0, 1, '2024-01-18 17:01:10', 1, 1, 0, NULL, NULL),
(30, 30, '/admin/register', 25, NULL, 'admin.register', 'Admin Kayıt', 'Admin Register', NULL, NULL, '2024-01-18 04:42:01', 0, 1, '2024-01-18 17:01:49', 1, 1, 0, NULL, NULL),
(31, 31, '/admin/forgot/password', 25, NULL, 'admin.forgot.password', 'Admin Şifremi Unuttum', 'Admin Forgot Password', NULL, NULL, '2024-01-18 04:52:42', 0, 1, '2024-01-18 17:01:37', 1, 1, 0, NULL, NULL),
(32, 32, '/admin/reset/password', 25, NULL, 'admin.reset.password', 'Admin Şifremi Yenile', 'Admin Reset Password', NULL, NULL, '2024-01-18 04:55:32', 0, 1, '2024-01-18 17:01:27', 1, 1, 0, NULL, NULL),
(33, 33, '/admin', 25, NULL, 'admin.index', 'Admin', 'Admin', NULL, NULL, '2024-01-20 12:01:21', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(36, 36, '/admin/setting/role', 1, NULL, 'settings.role', 'Role Ayarları', 'Role Settings', NULL, NULL, '2024-01-22 02:22:24', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(37, 37, '/admin/setting/department', 1, NULL, 'settings.department', 'Departman Ayarları', 'Department Settings', NULL, NULL, '2024-01-22 02:23:28', 0, 0, NULL, NULL, 1, 0, NULL, NULL),
(38, 38, NULL, 0, NULL, 'web', 'Web', 'Web', 'Web', NULL, '2024-10-12 17:19:52', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(39, 39, '/admin/web/settings', 38, NULL, 'admin.web.settings', 'Web Ayarları', 'Web Settings', 'Webeinstellungen', NULL, '2024-10-12 17:21:33', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(40, 40, NULL, 0, NULL, 'admin.web.institutional', 'Web - Kurumsal', 'Web - Institutional', 'Web - Institutionell', NULL, '2024-10-12 21:52:24', 1, 1, '2024-10-12 22:00:04', 1, 1, 0, NULL, NULL),
(41, 41, '/admin/institutional/about', 40, NULL, 'admin.web.institutional.about', 'Hakkımızda', 'About', 'Um', NULL, '2024-10-12 21:54:59', 1, 1, '2024-10-29 03:32:36', 1, 1, 0, NULL, NULL),
(42, 42, '/admin/institutional/cookiePolicy', 40, NULL, 'admin.web.institutional.cookiePolicy', 'Çerez Politikası', 'Cookie Policy', 'Cookie-Richtlinie', NULL, '2024-10-12 22:09:41', 1, 1, '2024-10-29 03:34:49', 1, 1, 0, NULL, NULL),
(43, 43, '/admin/institutional/termsOfUse', 40, NULL, 'admin.web.institutional.termsOfUse', 'Kullanım Koşulları', 'Terms of Use', 'Nutzungsbedingungen', NULL, '2024-10-12 22:11:56', 1, 1, '2024-10-29 03:35:20', 1, 1, 0, NULL, NULL),
(44, 44, '/admin/institutional/termsOfConditions', 40, NULL, 'admin.web.institutional.termsOfConditions', 'Kullanım Şartları', 'Terms of Conditions', 'Allgemeine Geschäftsbedingungen', NULL, '2024-10-12 22:13:10', 1, 1, '2024-10-29 03:36:59', 1, 1, 0, NULL, NULL),
(45, 45, '/admin/institutional/privacyPolicy', 40, NULL, 'admin.web.institutional.privacyPolicy', 'Gizlilik Politikası', 'Privacy Policy', 'Datenschutzrichtlinie', NULL, '2024-10-12 22:16:48', 1, 1, '2024-10-29 03:38:26', 1, 1, 0, NULL, NULL),
(46, 46, '/admin/institutional/personalDataProtectionLaw', 40, NULL, 'admin.web.institutional.personalDataProtectionLaw', 'Kişisel Verilerin Korunma Kanunu', 'Personal Data Protection Law', 'Gesetz zum Schutz personenbezogener Daten', NULL, '2024-10-12 22:18:15', 1, 1, '2024-10-29 03:38:56', 1, 1, 0, NULL, NULL),
(47, 47, '/admin/faq/list', 48, NULL, 'admin.web.faq.list', 'Sıkça Sorulan Sorular', 'Frequently Asked Questions', 'Häufig gestellte Fragen', NULL, '2024-10-12 23:50:18', 1, 1, '2024-10-13 00:05:53', 1, 1, 0, NULL, NULL),
(48, 50, NULL, 0, NULL, 'web.faq.listx', 'Web - Ssk', 'Web - FAQ', 'Web - FAQ', NULL, '2024-10-12 23:51:05', 1, 1, '2024-10-12 23:51:57', 1, 1, 0, NULL, NULL),
(49, 49, '/admin/faq/add', 48, NULL, 'admin.web.faq.add', 'SSS - Ekle', 'FAQ - Add', 'Häufig gestellte Fragen – Hinzufügen', NULL, '2024-10-13 00:05:32', 1, 1, '2024-10-28 20:22:39', 1, 1, 0, NULL, NULL),
(50, 61, NULL, 0, NULL, 'admin.web.blog.listx', 'Web - Blog', 'Web - Blog', 'Web - Blog', NULL, '2024-10-13 14:02:34', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(51, 51, '/admin/blog/category', 50, NULL, 'admin.web.blog.category.list', 'Blog Kategori', 'Blog Category', 'Blog-Kategorie', NULL, '2024-10-13 14:05:06', 1, 1, '2024-11-01 00:13:03', 1, 1, 0, NULL, NULL),
(53, 53, '/admin/blog/list', 50, NULL, 'admin.web.blog.list', 'Blog Listesi', 'Blog List', 'Blog-Liste', NULL, '2024-10-13 14:40:39', 1, 1, '2024-10-13 14:41:03', 1, 1, 0, NULL, NULL),
(54, 54, '/admin/blog/add', 50, NULL, 'admin.web.blog.add', 'Blog Ekle', 'Blog - Add', 'Blog – Hinzufügen', NULL, '2024-10-13 14:43:00', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(55, 83, '/admin/blog/comment', 50, NULL, 'admin.web.blog.comment.list', 'Blog Yorumları', 'Blog Comments', 'Blog-Kommentare', NULL, '2024-10-16 21:18:39', 1, 1, '2024-11-01 00:13:59', 1, 1, 0, NULL, NULL),
(56, 56, '/admin/contact/message', 38, NULL, 'admin.web.contact.message', 'İletişim Mesajı', 'Contact Message', 'Kontaktnachricht', NULL, '2024-10-17 16:08:05', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(57, 48, NULL, 0, NULL, 'admin.web.user', 'Web - Kullanıcı', 'Web - User', 'Web - Benutzer', NULL, '2024-10-18 20:19:13', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(58, 58, '/admin/web/user/list', 57, NULL, 'admin.web.user.list', 'Kullanıcı Listesi', 'User List', 'Benutzerliste', NULL, '2024-10-18 20:20:14', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(59, 59, '/admin/web/user/info/1', 57, NULL, 'admin.web.user.info', 'Kullanıcı Bilgileri', 'User Information', 'Benutzerinformationen', NULL, '2024-10-18 20:21:37', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(60, 60, '/admin/subscribe', 38, NULL, 'admin.web.subscribe', 'Abone Ol', 'Subscribe', 'Abonnieren', NULL, '2024-10-21 23:42:16', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(61, 57, NULL, 0, NULL, 'admin.web.slider', 'Web - Slider', 'Web - Slider', 'Slider', NULL, '2024-10-21 23:53:21', 1, 1, '2024-10-28 03:48:45', 1, 1, 0, NULL, NULL),
(62, 62, '/admin/slider/list', 61, NULL, 'admin.web.slider.list', 'Slider', 'Slider', 'Slider', NULL, '2024-10-21 23:53:57', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(71, 63, '/admin/slider/add', 61, NULL, 'admin.web.slider.add', 'Slider – Ekle', 'Slider – Add', 'Slider – Hinzufügen', NULL, '2024-10-22 22:30:03', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(72, 72, NULL, 0, NULL, 'admin.web.product.listx', 'Web - Ürün', 'Web - Product', NULL, NULL, '2024-10-23 23:47:28', 1, 1, '2024-10-23 23:53:14', 1, 1, 0, NULL, NULL),
(73, 73, '/admin/product/category', 72, NULL, 'admin.web.product.category.list', 'Ürün Kategorisi', 'Product Category', NULL, NULL, '2024-10-24 00:03:36', 1, 1, '2024-10-24 00:54:40', 1, 1, 0, NULL, NULL),
(74, 74, '/admin/product/list', 72, NULL, 'admin.web.product.list', 'Ürün Listesi', 'Product List', NULL, NULL, '2024-10-24 00:49:50', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(75, 75, '/admin/product/add', 72, NULL, 'admin.web.product.add', 'Ürün - Ekleme', 'Product  - Add', NULL, NULL, '2024-10-24 00:57:13', 1, 1, '2024-10-28 20:28:06', 1, 1, 0, NULL, NULL),
(76, 84, '/admin/product/comment', 72, NULL, 'admin.web.product.comment.list', 'Urun Yorumları', 'Product Comments', NULL, NULL, '2024-10-24 18:46:22', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(77, 77, NULL, 0, NULL, 'admin.web.current.account.listx', 'Finans', 'Finance', NULL, NULL, '2024-10-26 13:11:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(78, 78, '/admin/current/account', 77, NULL, 'admin.web.current.account.list', 'Cari Hesap', 'Current Account', NULL, NULL, '2024-10-26 13:12:11', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(79, 79, '/admin/order', 77, NULL, 'admin.web.order.list', 'Satışlar', 'Orders', NULL, NULL, '2024-10-26 20:11:02', 1, 1, '2024-10-29 17:20:09', 1, 1, 0, NULL, NULL),
(80, 80, '/admin/order/53/detail', 77, NULL, 'admin.web.order.detail.list', 'Satışlar Detay', 'Order Detail', NULL, NULL, '2024-10-27 00:35:34', 1, 1, '2024-10-29 17:20:16', 1, 1, 0, NULL, NULL),
(81, 81, '/admin/faq/edit/1', 48, NULL, 'admin.web.faq.edit.view', 'SSK - Güncelle', 'FAQ - Edit', NULL, NULL, '2024-10-28 20:20:49', 1, 1, '2024-10-28 20:25:25', 1, 1, 0, NULL, NULL),
(82, 82, '/admin/slider/edit/1', 61, NULL, 'admin.web.slider.edit.view', 'Slider – Güncelle', 'Slider – Edit', NULL, NULL, '2024-10-28 20:24:37', 1, 1, '2024-10-28 20:25:11', 1, 1, 0, NULL, NULL),
(83, 55, '/admin/blog/edit/1', 50, NULL, 'admin.web.blog.edit.view', 'Blog - Güncelle', 'Blog - Edit', NULL, NULL, '2024-10-28 20:26:22', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(84, 76, '/admin/product/edit/1', 72, NULL, 'admin.web.product.edit.view', 'Ürün - Güncelleme', 'Product - Edit', NULL, NULL, '2024-10-28 20:27:53', 1, 1, '2024-11-03 15:16:31', 1, 1, 0, NULL, NULL),
(85, 85, NULL, 0, NULL, 'admin.company', 'Firma', 'Company', NULL, NULL, '2024-10-29 15:52:54', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(86, 87, '/admin/company', 85, NULL, 'admin.company.list', 'Firma', 'Company', NULL, NULL, '2024-10-29 15:53:35', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(87, 88, '/admin/company/add', 85, NULL, 'admin.company.add', 'Firma - Ekle', 'Company - Add', NULL, NULL, '2024-10-29 15:54:13', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(88, 89, '/admin/company/edit/1', 85, NULL, 'admin.company.edit.view', 'Firma - Güncelleme', 'Company - Edit', NULL, NULL, '2024-10-29 15:54:46', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(89, 86, '/admin/company/category', 85, NULL, 'admin.web.company.category.list', 'Firma Kategori', 'Company Category', NULL, NULL, '2024-11-01 00:12:04', 1, 1, '2024-11-01 00:14:34', 1, 1, 0, NULL, NULL),
(90, 90, '/admin/meetings', 91, NULL, 'admin.meetings', 'Toplantılar', 'Meetings', NULL, NULL, '2024-11-01 00:51:18', 1, 1, '2024-11-01 02:32:59', 1, 1, 0, NULL, NULL),
(91, 90, NULL, 0, NULL, 'admin.meetingsx', 'Toplantılar', 'Meetings', NULL, NULL, '2024-11-01 00:51:52', 1, 1, '2024-11-01 02:33:19', 1, 1, 0, NULL, NULL),
(92, 92, NULL, 0, NULL, 'admin.web.service.listx', 'Web - Servis - Hizmet', 'Web - Service', NULL, NULL, '2024-11-03 13:06:02', 1, 1, '2024-11-03 15:24:43', 1, 1, 0, NULL, NULL),
(93, 93, '/admin/service/category', 92, NULL, 'admin.web.service.category.list', 'Servis - Kategorisi', 'Service Category', NULL, NULL, '2024-11-03 13:06:42', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(94, 94, '/admin/service/list', 92, NULL, 'admin.web.service.list', 'Servis - Hizmetler', 'Services', NULL, NULL, '2024-11-03 13:34:17', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(95, 95, '/admin/service/add', 92, NULL, 'admin.web.service.add', 'Servis - Hizmetler - Ekle', 'Service - Add', NULL, NULL, '2024-11-03 15:14:53', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(96, 96, NULL, 0, NULL, 'admin.web.comment.listx', 'Web - Yorumlar', 'Web - Comment', NULL, NULL, '2024-11-03 16:27:22', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(97, 97, '/admin/comment/list', 96, NULL, 'admin.web.comment.list', 'Yorumlar', 'Comments', NULL, NULL, '2024-11-03 16:27:48', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(98, 98, '/admin/comment/add', 96, NULL, 'admin.web.comment.add', 'Yorum - Ekle', 'Comment - Add', NULL, NULL, '2024-11-03 16:28:32', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(99, 99, '/admin/comment/edit/11', 96, NULL, 'admin.web.comment.edit.view', 'Yorum - Güncelle', 'Comment - Edit', NULL, NULL, '2024-11-03 16:29:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(100, 100, NULL, 0, NULL, 'admin.web.team.listx', 'Web - Ekibimiz', 'Web - Our Team', NULL, NULL, '2024-11-03 18:34:56', 1, 1, '2024-11-03 18:43:14', 1, 1, 0, NULL, NULL),
(101, 101, '/admin/team/list', 100, NULL, 'admin.web.team.list', 'Ekibimiz', 'Our Team', NULL, NULL, '2024-11-03 18:35:18', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(102, 102, '/admin/team/add', 100, NULL, 'admin.web.team.add', 'Ekibimiz - Ekle', 'Team - Add', NULL, NULL, '2024-11-03 18:41:46', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(103, 103, '/admin/team/edit/1', 100, NULL, 'admin.web.team.edit.view', 'Ekibimiz - Güncelle', 'Team - Edit', NULL, NULL, '2024-11-03 18:42:46', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(104, 104, '/admin/service/edit/1', 92, NULL, 'admin.web.service.edit.view', 'Servis - Hizmetler - Güncelle', 'Service - Edit', NULL, NULL, '2024-11-04 18:09:24', 1, 0, NULL, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date_time` text NOT NULL,
  `date_timeFull` text NOT NULL,
  `product_id` text DEFAULT NULL,
  `product` text DEFAULT NULL,
  `purchase_amount` text DEFAULT NULL,
  `purchase_unit_price` text DEFAULT NULL,
  `total` text DEFAULT NULL,
  `purchase_amount_net` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `date_time`, `date_timeFull`, `product_id`, `product`, `purchase_amount`, `purchase_unit_price`, `total`, `purchase_amount_net`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(56, '2024-10-22', '22.10.2024 06:47:15', '2', 'APE_TL', '57.794', '52', '3005.29', '57.677', '2024-10-29 17:21:42', 1, 1, '2024-10-29 17:44:57', 1, 1, 0, NULL, NULL),
(57, '2024-10-22', '22.10.2024 04:15:02', '2', 'APE_TL', '41.6', '55.6', '2312.96', '41.522', '2024-10-29 17:38:19', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(59, '2024-11-16', '16.11.2024 18:22:50', '2', 'APE_TL', '88.607', '39.5', '3499.98', '88.430', '2024-11-16 19:58:07', 1, 1, '2024-11-16 20:07:15', 1, 1, 0, NULL, NULL),
(60, '2024-11-16', '16.11.2024 18:20:38', '2', 'APE_TL', '46.563', '40', '1862.52', '46.470', '2024-11-16 20:14:22', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(61, '2024-11-16', '16.11.2024 22:55:46', '2', 'APE_TL', '89.912', '39.6', '3560.52', '89.732', '2024-11-16 20:31:02', 1, 1, '2024-11-16 20:33:08', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(11) NOT NULL,
  `date_time` text NOT NULL,
  `date_timeFull` text NOT NULL,
  `order_id` text DEFAULT NULL,
  `type` text DEFAULT 'S',
  `amount` text DEFAULT NULL,
  `unit_price` text DEFAULT NULL,
  `total` text DEFAULT NULL,
  `profit_loss` text DEFAULT NULL,
  `percent` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `orders_details`
--

INSERT INTO `orders_details` (`id`, `date_time`, `date_timeFull`, `order_id`, `type`, `amount`, `unit_price`, `total`, `profit_loss`, `percent`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(67, '2024-10-28', '28.10.2024 13:36:28', '56', 'S', '1.366', '36.75', '50.20', NULL, '', '2024-10-29 17:23:04', 1, 1, '2024-10-29 17:30:48', 1, 1, 0, NULL, NULL),
(70, '2024-10-28', '28.10.2024 21:15:28', '56', 'S', '1.351', '37.19', '50.24', NULL, '', '2024-10-29 17:31:19', 1, 1, '2024-10-29 17:31:45', 1, 1, 0, NULL, NULL),
(71, '2024-10-26', '26.10.2024 17:23:00', '56', 'S', '1.408', '35.5', '49.98', NULL, '', '2024-10-29 17:32:28', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(72, '2024-10-24', '24.10.2024 12:43:28', '56', 'S', '5.115', '39.1', '200.00', NULL, '', '2024-10-29 17:33:27', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(73, '2024-10-23', '23.10.2024 19:25:05', '56', 'S', '0.268', '41', '10.99', NULL, '', '2024-10-29 17:34:28', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(74, '2024-10-23', '23.10.2024 12:35:06', '56', 'S', '0.945', '42.4', '40.07', NULL, '', '2024-10-29 17:36:00', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(75, '2024-10-29', '29.10.2024 21:10:11', '57', 'S', '41.522', '37.2', '1544.62', NULL, '', '2024-10-29 17:42:14', 1, 1, '2024-10-29 18:42:21', 1, 1, 0, NULL, NULL),
(76, '2024-10-29', '29.10.2024 21:10:40', '56', 'S', '47.224', '37', '1747.29', NULL, '', '2024-10-29 17:48:04', 1, 1, '2024-10-29 18:25:38', 1, 1, 0, NULL, NULL),
(84, '2024-10-29', '29.10.2024 21:23:39', '56', 'A', '46.026', '36.8', '1693.76', NULL, '', '2024-10-30 02:48:43', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(85, '2024-10-29', '29.10.2024 21:42:39', '57', 'A', '41.663', '37', '1541.53', NULL, '', '2024-10-30 02:49:58', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(86, '2024-10-29', '29.10.2024 22:27:07', '56', 'S', '30', '37.3', '1119.00', NULL, '', '2024-10-30 02:51:17', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(87, '2024-10-29', '29.10.2024 22:28:07', '56', 'S', '16.026', '37', '592.96', NULL, '', '2024-10-30 02:52:04', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(88, '2024-10-29', '29.10.2024 22:29:03', '57', 'S', '30', '37.4', '1122.00', NULL, '', '2024-10-30 02:54:09', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(89, '2024-10-30', '30.10.2024 02:16:54', '56', 'A', '16.213', '36.5', '591.77', NULL, '', '2024-10-30 02:55:55', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(90, '2024-10-30', '30.10.2024 03:05:47', '56', 'A', '30.513', '36.6', '1116.78', NULL, '', '2024-10-30 02:56:43', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(91, '2024-10-30', '30.10.2024 03:08:08', '57', 'A', '30.594', '36.6', '1119.74', NULL, '', '2024-10-30 03:02:12', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(92, '2024-10-30', '30.10.2024 03:11:21', '56', 'S', '46.632', '37.43', '1745.44', NULL, '', '2024-10-30 03:03:08', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(93, '2024-10-30', '30.10.2024 03:14:46', '56', 'A', '16.393', '36.6', '599.98', NULL, '', '2024-10-30 03:05:00', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(109, '2024-10-30', '30.10.2024 03:15:51', '56', 'A', '31.116', '36.7', '1141.96', NULL, '', '2024-10-30 20:40:49', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(110, '2024-10-30', '30.10.2024 03:19:55', '57', 'S', '11.488', '37.5', '430.80', NULL, '', '2024-10-30 20:41:24', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(111, '2024-10-30', '30.10.2024 04:24:42', '57', 'A', '11.684', '36.8', '429.97', NULL, '', '2024-10-30 20:42:06', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(112, '2024-10-30', '30.10.2024 05:16:01', '56', 'S', '47.603', '38.17', '1817.01', NULL, '', '2024-10-30 20:44:29', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(113, '2024-10-30', '30.10.2024 05:16:01', '57', 'S', '42.005', '38.17', '1603.33', NULL, '', '2024-10-30 20:47:40', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(114, '2024-10-30', '30.10.2024 05:16:18', '56', 'A', '40.540', '37', '1499.98', NULL, '', '2024-10-30 20:48:22', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(115, '2024-10-30', '30.10.2024 14:15:24', '56', 'S', '40.459', '37.4', '1513.17', NULL, '', '2024-10-30 20:49:02', 1, 1, '2024-10-30 21:20:12', 1, 1, 0, NULL, NULL),
(116, '2024-10-30', '30.10.2024 14:51:58', '56', 'A', '40.595', '37.2', '1510.13', NULL, '', '2024-10-30 20:49:38', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(117, '2024-10-30', '30.10.2024 16:58:45', '56', 'S', '40.514', '37.9', '1535.48', NULL, '', '2024-10-30 20:50:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(118, '2024-10-30', '30.10.2024 16:59:14', '57', 'A', '41.194', '37.2', '1532.42', NULL, '', '2024-10-30 20:51:41', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(119, '2024-10-30', '30.10.2024 18:37:43', '57', 'S', '41.111', '37.75', '1551.94', NULL, '', '2024-10-30 20:52:37', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(120, '2024-10-30', '30.10.2024 19:18:05', '56', 'A', '41.636', '37.2', '1548.86', NULL, '', '2024-10-30 21:03:28', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(121, '2024-10-30', '30.10.2024 19:32:45', '57', 'A', '51.323', '37.25', '1911.78', NULL, '', '2024-10-30 21:03:57', 1, 1, '2024-10-30 21:12:09', 1, 1, 0, NULL, NULL),
(123, '2024-10-30', '30.10.2024 20:45:57', '57', 'S', '51.221', '37.75', '1933.59', NULL, '', '2024-10-30 21:13:15', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(124, '2024-10-30', '30.10.2024 21:18:19', '56', 'S', '41.552', '37.7', '1566.51', NULL, '', '2024-10-30 21:13:49', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(125, '2024-10-30', '30.10.2024 23:16:08', '56', 'A', '53.763', '37.2', '1999.98', NULL, '', '2024-10-30 21:15:27', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(126, '2024-10-30', '30.10.2024 23:16:24', '57', 'A', '40.084', '37.25', '1493.13', NULL, '', '2024-10-30 21:15:55', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(127, '2024-10-30', '30.10.2024 23:18:07', '57', 'S', '40.084', '37.7', '1511.17', NULL, '', '2024-10-30 21:16:48', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(128, '2024-10-31', '31.10.2024 00:10:54', '57', 'A', '40.541', '37.2', '1508.13', NULL, '', '2024-10-30 21:17:52', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(129, '2024-10-31', '31.10.2024 00:01:33', '56', 'S', '53.576', '38', '2035.89', NULL, '', '2024-10-30 21:19:44', 1, 1, '2024-10-30 21:36:24', 1, 0, 0, NULL, NULL),
(130, '2024-10-31', '31.10.2024 00:21:49', '57', 'S', '40.46', '37.8', '1529.39', NULL, '', '2024-10-30 21:24:28', 1, 1, '2024-10-30 21:24:48', 1, 0, 0, NULL, NULL),
(131, '2024-11-16', '16.11.2024 18:40:53', '59', 'S', '88.430', '40', '3537.20', NULL, '', '2024-11-16 20:08:17', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(132, '2024-11-16', 'tarih', '60', 'S', '46.470', '42', '1951.74', NULL, '', '2024-11-16 20:30:07', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(133, '2024-11-16', 'tarih', '61', 'S', '89.732', '40.1', '3598.25', NULL, '', '2024-11-16 20:32:27', 1, 1, '2024-11-16 20:33:27', 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL DEFAULT 'tr',
  `uid` text NOT NULL,
  `category` text NOT NULL,
  `title` text DEFAULT NULL,
  `description` text NOT NULL,
  `img_url` text NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `seo_keywords` text DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `currency` text DEFAULT NULL,
  `sale_price` text DEFAULT NULL,
  `discounted_price_percent` text DEFAULT NULL,
  `discounted_price` text DEFAULT NULL,
  `new_product` int(11) NOT NULL DEFAULT 0,
  `editor_suggestion` int(11) NOT NULL DEFAULT 0,
  `bestseller` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `lang`, `uid`, `category`, `title`, `description`, `img_url`, `views`, `likes`, `seo_url`, `seo_keywords`, `stock`, `currency`, `sale_price`, `discounted_price_percent`, `discounted_price`, `new_product`, `editor_suggestion`, `bestseller`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(46, 'tr', '1732227696', '1732050376', 'Tuvalet Kagıdı - 16 lı', '<p>Tuvalet Kağıtı 16 lıdır</p>', '/upload/uploads/1732227771.PNG', 0, 0, 'tuvalet-kagidi-16-li', 'tuvalet,kağıt', 100, 'TL', '260', '0', '260', 1, 0, 0, '2024-11-21 22:22:48', 1, 1, '2024-11-21 22:22:53', 1, 1, 0, NULL, NULL),
(47, 'tr', '1732227805', '1732050376', 'Z Katlı Havlu Kağıt 2 katlı', '<h2>Z Katlı Kağıt Havlu 2 katlı</h2>', '/upload/uploads/1732227861.PNG', 0, 0, 'z-katli-havlu-kagit-2-katli', NULL, 150, 'TL', '269', '0', '269', 1, 0, 0, '2024-11-21 22:24:47', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(48, 'tr', '1732228051', '1732050376', 'Deterjan', '<h1>Deterjan</h1>', '/upload/uploads/1732228134.PNG', 0, 0, 'deterjan', NULL, 65, 'TL', '51', '0', '50', 1, 0, 0, '2024-11-21 22:28:59', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(49, 'tr', '1732228143', '1732050376', 'Siyah Eldiven', '<p>Siyah Eldiven</p>', '/upload/uploads/1732228270.jpg', 0, 0, 'siyah-eldiven', NULL, 100, 'TL', '110', '0', '110', 1, 0, 0, '2024-11-21 22:31:29', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(50, 'tr', '1732228310', '1732050064', 'Karton Bardak 7 oz Standart', '<h2>&nbsp;7 oz hacminde karton bardak.</h2>', '/upload/uploads/1732228380.PNG', 0, 0, 'karton-bardak-7-oz-standart', NULL, 65, 'TL', '34', '10', '31', 1, 1, 1, '2024-11-21 22:33:09', 1, 1, '2024-11-21 23:50:21', 1, 1, 0, NULL, NULL),
(51, 'tr', '1732228488', '1732050064', 'Bardak Tutacağı', '<p>7 oz, 9 oz&nbsp; karton bardaklarla uyumludur.&nbsp;</p>', '/upload/uploads/1732228508.PNG', 0, 0, 'bardak-tutacagi', NULL, 10, 'TL', '680', '0', '680', 1, 0, 1, '2024-11-21 22:35:33', 1, 1, '2024-11-21 23:40:24', 1, 1, 0, NULL, NULL),
(52, 'tr', '1732228595', '1732050064', 'Karton Bardak 12 Oz Baskısız', '<h2>Sıcak ve soğuk i&ccedil;eceklerde kullanılabilir</h2>', '/upload/uploads/1732228608.PNG', 0, 0, 'karton-bardak-12-oz-baskisiz', NULL, 150, 'TL', '118', '0', '118', 1, 0, 0, '2024-11-21 22:37:12', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(53, 'tr', '1732228640', '1732050064', 'Bardak Taşıma Viyolü 4 Lü', '<p>Bardak taşıma</p>', '/upload/uploads/1732228699.PNG', 0, 0, 'bardak-tasima-viyolu-4-lu', NULL, 65, 'TL', '770', '0', '770', 1, 0, 0, '2024-11-21 22:38:34', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(54, 'tr', '1732228787', '1732050064', 'Karıştırıcı Tahta', '<h1>Karıştırıcı Tahta</h1>', '/upload/uploads/1732228809.PNG', 0, 0, 'karistirici-tahta', NULL, 85, 'TL', '100', '0', '100', 1, 0, 0, '2024-11-21 22:40:16', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(55, 'tr', '1732228823', '1729729071', 'Hamburger Kabı Kapaklı', '<h1>Hamburger Kabı Kapaklı</h1>', '/upload/uploads/1732228915.PNG', 0, 0, 'hamburger-kabi-kapakli', NULL, 60, 'TL', '365', '0', '365', 1, 0, 0, '2024-11-21 22:42:16', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(56, 'tr', '1732228939', '1729729071', 'Tabak Plastik', '<h1>Tabak Plastik</h1>', '/upload/uploads/1732229062.PNG', 0, 0, 'tabak-plastik', NULL, 10, 'TL', '110', '0', '110', 1, 0, 0, '2024-11-21 22:44:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(57, 'tr', '1732229087', '1729729071', 'Çorba Kase', '<h1>&Ccedil;orba Kase</h1>', '/upload/uploads/1732229166.PNG', 0, 0, 'corba-kase', NULL, 15, 'TL', '61', '0', '61', 1, 0, 0, '2024-11-21 22:46:10', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(58, 'tr', '1732229328', '1726932791', 'Alüminyum Künefe Kapak', '<h2>Restaurantlarda kullanabilir</h2>', '/upload/uploads/1732229349.PNG', 0, 0, 'aluminyum-kunefe-kapak', NULL, 10, 'TL', '45', '0', '45', 1, 0, 0, '2024-11-21 22:49:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(59, 'tr', '1732229368', '1726932791', 'Alüminyum Kap', '<h1>Al&uuml;minyum</h1>', '/upload/uploads/1732229415.PNG', 0, 0, 'aluminyum-kap', NULL, 15, 'TL', '200', '0', '200', 1, 0, 0, '2024-11-21 22:50:20', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(60, 'tr', '1732229427', '1726932791', 'Alüminyum 1500 Gr 100 adet', '<h1>Al&uuml;minyum 1500 Gr&nbsp;</h1>', '/upload/uploads/1732229474.PNG', 0, 0, 'aluminyum-1500-gr-100-adet', NULL, 100, 'TL', '262', '0', '262', 1, 0, 0, '2024-11-21 22:51:22', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(61, 'tr', '1732229552', '1726932791', 'Sızdırmaz Kap 150 CC', '<h1>Sızdırmaz Kap 150 CC</h1>', '/upload/uploads/1732229588.PNG', 0, 0, 'sizdirmaz-kap-150-cc', NULL, 150, 'TL', '53', '0', '53', 1, 0, 0, '2024-11-21 22:53:12', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(62, 'tr', '1732229633', '1726932791', 'Sızdırmaz Kap 2000 CC', '<h1>Sızdırmaz Kap 2000 CC</h1>', '/upload/uploads/1732229657.PNG', 0, 0, 'sizdirmaz-kap-2000-cc', NULL, 15, 'TL', '336', '0', '336', 1, 0, 0, '2024-11-21 22:54:21', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(63, 'tr', '1732229690', '1726932791', 'Siyah Plastik 3 Gözlü Kap+Kapak', '<h1>Siyah Plastik 3 G&ouml;zl&uuml; Kap+Kapak</h1>', '/upload/uploads/1732229717.PNG', 0, 0, 'siyah-plastik-3-gozlu-kap-kapak', NULL, 15, 'TL', '210', '0', '210', 1, 0, 0, '2024-11-21 22:55:21', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(64, 'tr', '1732229754', '1726932791', 'Plastik Üçgen Pasta Kutusu Siyah', '<h1>Plastik &Uuml;&ccedil;gen Pasta Kutusu Siyah</h1>', '/upload/uploads/1732229784.PNG', 0, 0, 'plastik-ucgen-pasta-kutusu-siyah', NULL, 66, 'TL', '146', '0', '145', 1, 0, 0, '2024-11-21 22:56:35', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(65, 'tr', '1732229874', '1726932790', 'Çöp Torbası 100x150 Cm Hantal', '<h1>&Ccedil;&ouml;p Torbası 100x150 Cm Hantal</h1>', '/upload/uploads/1732229894.PNG', 0, 0, 'cop-torbasi-100x150-cm-hantal', NULL, 15, 'TL', '55', '0', '55', 1, 0, 0, '2024-11-21 22:58:17', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(66, 'tr', '1732229902', '1726932790', 'Hışır Atlet Poşet Kg Büyük Siyah', '<h1>Hışır Atlet Poşet Kg B&uuml;y&uuml;k Siyah</h1>', '/upload/uploads/1732229954.PNG', 0, 0, 'hisir-atlet-poset-kg-buyuk-siyah', NULL, 10, 'TL', '47', '0', '47', 0, 0, 0, '2024-11-21 22:59:23', 1, 1, '2024-11-21 23:03:26', 1, 1, 0, NULL, NULL),
(67, 'tr', '1732229985', '1726932790', 'Hışır Atlet Poşet Kg Mini', '<h1>Hışır Atlet Poşet Kg Mini&nbsp;</h1>', '/upload/uploads/1732230024.PNG', 0, 0, 'hisir-atlet-poset-kg-mini', NULL, 10, 'TL', '53', '0', '53', 1, 0, 0, '2024-11-21 23:00:29', 1, 1, '2024-11-21 23:01:27', 1, 1, 0, NULL, NULL),
(68, 'tr', '1732230110', '1726932790', 'Kilitli Torba', '<h1>Kilitli Torba</h1>', '/upload/uploads/1732230150.PNG', 0, 0, 'kilitli-torba', NULL, 15, 'TL', '230', '0', '230', 1, 0, 0, '2024-11-21 23:02:32', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(69, 'tr', '1732230369', '1726932789', 'Kutu Baklava', '<h1>Kutu Baklava</h1>', '/upload/uploads/1732230388.PNG', 0, 0, 'kutu-baklava', NULL, 15, 'TL', '250', '0', '250', 1, 0, 0, '2024-11-21 23:06:30', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(70, 'tr', '1732230419', '1726932789', 'Kutu Turta', '<h1>Kutu Turta&nbsp;21x21x10</h1>', '/upload/uploads/1732230438.PNG', 0, 0, 'kutu-turta', NULL, 10, 'TL', '330', '0', '330', 1, 0, 0, '2024-11-21 23:07:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(71, 'tr', '1732230476', '1726932789', 'Kutu Pide Tst Baskısız', '<h1>Kutu Pide Tst Baskısız&nbsp;13,5x42,5 cm</h1>', '/upload/uploads/1732230497.PNG', 0, 0, 'kutu-pide-tst-baskisiz', NULL, 20, 'TL', '310', '0', '310', 1, 0, 0, '2024-11-21 23:08:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(72, 'tr', '1732230509', '1726932789', 'PİDE KUTUSU', '<h1>PİDE KUTUSU</h1>', '/upload/uploads/1732231025.PNG', 0, 0, 'pide-kutusu', NULL, 21, 'TL', '460', '10', '414', 1, 0, 0, '2024-11-21 23:17:13', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(73, 'tr', '1732231058', '1726932789', 'Kutu Hamburger', '<h1>Kutu Hamburger Orta</h1>', '/upload/uploads/1732231108.PNG', 0, 0, 'kutu-hamburger', NULL, 15, 'TL', '265', '15', '225.25', 1, 0, 1, '2024-11-21 23:18:31', 1, 1, '2024-11-21 23:40:10', 1, 1, 0, NULL, NULL),
(74, 'tr', '1732231125', '1726932789', 'Kutu Cips Büyük Kraft', '<h1>Kutu Cips B&uuml;y&uuml;k Kraft&nbsp;</h1>', '/upload/uploads/1732231191.PNG', 0, 0, 'kutu-cips-buyuk-kraft', NULL, 10, 'TL', '550', '0', '550', 0, 1, 0, '2024-11-21 23:19:54', 1, 1, '2024-11-21 23:40:03', 1, 1, 0, NULL, NULL),
(75, 'tr', '1732231214', '1726932789', 'Kutu Cips Küçük', '<h1>Kutu Cips K&uuml;&ccedil;&uuml;k</h1>', '/upload/uploads/1732231240.PNG', 0, 0, 'kutu-cips-kucuk', NULL, 10, 'TL', '425', '0', '425', 1, 1, 0, '2024-11-21 23:20:53', 1, 1, '2024-11-21 23:39:55', 1, 1, 0, NULL, NULL),
(76, 'tr', '1732231281', '1726932789', 'Kutu Kumpir Yapışmalı Kraft', '<h1>Kutu Kumpir Yapışmalı Kraft&nbsp;</h1>', '/upload/uploads/1732231325.PNG', 0, 0, 'kutu-kumpir-yapismali-kraft', NULL, 10, 'TL', '128', '0', '128', 1, 0, 0, '2024-11-21 23:22:06', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(77, 'tr', '1732231330', '1726932788', 'Çanta Kraft', '<h1>&Ccedil;anta Kraft</h1>', '/upload/uploads/1732231493.PNG', 0, 0, 'canta-kraft', NULL, 10, 'TL', '145', '0', '145', 1, 0, 0, '2024-11-21 23:24:56', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(78, 'tr', '1732231523', '1726932788', 'Kese Kuruyemiş 1000 Gr', '<h1>Kese Kuruyemiş 1000 Gr</h1>', '/upload/uploads/1732231549.PNG', 0, 0, 'kese-kuruyemis-1000-gr', NULL, 10, 'TL', '326', '0', '325', 1, 0, 0, '2024-11-21 23:25:51', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(79, 'tr', '1732231557', '1726932788', 'Kese Kuruyemiş 500 Gr', '<h1>Kese Kuruyemiş 500 Gr</h1>', '/upload/uploads/1732231588.PNG', 0, 0, 'kese-kuruyemis-500-gr', NULL, 10, 'TL', '325', '0', '325', 0, 1, 1, '2024-11-21 23:26:31', 1, 1, '2024-11-21 23:39:20', 1, 1, 0, NULL, NULL),
(80, 'tr', '1732231594', '1726932788', 'Kese Şamua', '<h1>Kese Şamua</h1>', '/upload/uploads/1732231631.PNG', 0, 0, 'kese-samua', NULL, 10, 'TL', '780', '0', '780', 1, 0, 0, '2024-11-21 23:27:14', 1, 1, '2024-11-21 23:27:51', 1, 1, 0, NULL, NULL),
(81, 'tr', '1732231673', '1726932788', 'Dürüm Kese Kağıdı Şamua Kağıt', '<h1>D&uuml;r&uuml;m Kese Kağıdı Şamua Kağıt</h1>', '/upload/uploads/1732231702.PNG', 0, 0, 'durum-kese-kagidi-samua-kagit', NULL, 10, 'TL', '395', '15', '335.75', 1, 0, 0, '2024-11-21 23:28:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(82, 'tr', '1732231736', '1726932788', 'Kese Şamua Pencereli', '<h1>Kese Şamua Pencereli</h1>', '/upload/uploads/1732231755.PNG', 0, 0, 'kese-samua-pencereli', NULL, 10, 'TL', '120', '0', '120', 1, 0, 0, '2024-11-21 23:29:17', 1, 1, '2024-11-22 19:26:27', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL,
  `uid` text NOT NULL,
  `img_url` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `seo_url` text DEFAULT NULL,
  `seo_keywords` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `product_categories`
--

INSERT INTO `product_categories` (`id`, `lang`, `uid`, `img_url`, `title`, `seo_url`, `seo_keywords`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'tr', '1726932788', '/upload/uploads/1732226536.PNG', 'Kağıt Çanta-Kese-Ambalaj', 'kagit-canta-kese-ambalaj', NULL, '2022-11-16 12:34:01', NULL, 1, '2024-11-22 23:10:42', 1, 1, 0, NULL, NULL),
(2, 'tr', '1726932789', '/upload/uploads/1732226808.PNG', 'Kutular', 'kutular', NULL, '2022-11-16 12:37:15', NULL, 1, '2024-11-22 23:10:36', 1, 1, 0, NULL, NULL),
(3, 'tr', '1726932790', '/upload/uploads/1732226896.PNG', 'Poşet', 'poset', NULL, '2022-11-16 12:38:22', NULL, 1, '2024-11-22 23:10:31', 1, 1, 0, NULL, NULL),
(4, 'tr', '1726932791', '/upload/uploads/1732227012.PNG', 'Gıda Kapları', 'gida-kaplari', NULL, '2022-11-16 13:44:31', NULL, 1, '2024-11-22 23:10:24', 1, 1, 0, NULL, NULL),
(82, 'tr', '1729729071', '/upload/uploads/1732227140.PNG', 'Tabak / Kase', 'tabak-kase', NULL, '2024-10-24 00:17:51', 1, 1, '2024-11-22 23:10:17', 1, 1, 0, NULL, NULL),
(92, 'tr', '1732050064', '/upload/uploads/1732227225.PNG', 'Bardak', 'bardak', NULL, '2024-11-19 21:01:04', 1, 1, '2024-11-22 23:10:11', 1, 1, 0, NULL, NULL),
(93, 'tr', '1732050376', '/upload/uploads/1732227322.PNG', 'Temizlik & Hijyen', 'temizlik-hijyen', NULL, '2024-11-19 21:06:16', 1, 1, '2024-11-22 23:09:53', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_comment`
--

CREATE TABLE `product_comment` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL DEFAULT 'tr',
  `product_uid` text NOT NULL DEFAULT '\'0\'',
  `userid` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `product_comment`
--

INSERT INTO `product_comment` (`id`, `lang`, `product_uid`, `userid`, `comment`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(11, 'tr', '1729104165', 1, 'deneme', '2024-10-16 22:33:19', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(24, 'tr', '78', 65, 'Urun Yorum Test', '2024-10-24 17:22:12', 1, 1, '2024-10-24 17:22:22', 1, 1, 0, NULL, NULL),
(25, 'tr', '1729788078', 1, 'test', '2024-10-24 18:50:32', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(26, 'tr', '65', 650, 'Yorum Deneme', '2024-10-26 00:05:10', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(27, 'tr', '1726932788', 1, 'Yorum', '2024-10-26 00:05:42', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(29, 'tr', '1728839597', 1, 'test', '2024-10-28 01:38:31', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(30, 'tr', '1728839597', 1, 'Kontrol', '2024-10-28 01:38:44', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(31, 'tr', '1728839597', 1, 'Yorum 1', '2024-10-28 01:38:52', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(32, 'tr', '1729788102', 1, 'deneme', '2024-10-28 03:09:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(34, 'tr', '1729788102', 1, 'son', '2024-10-28 03:09:36', 1, 1, '2024-10-28 03:32:03', 1, 0, 0, NULL, NULL),
(35, 'tr', '1729788102', 1, 'Yorum', '2024-10-28 03:32:22', 1, 0, NULL, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'Super Admin', '2022-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(2, 'Admin', '2022-11-16 12:37:15', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(3, 'User', '2022-11-16 12:38:22', NULL, 1, '2024-10-29 04:46:03', 1, 1, 0, NULL, NULL),
(18, 'denemex', '2024-10-29 12:24:06', 1, 1, '2024-10-29 12:24:12', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sabit`
--

CREATE TABLE `sabit` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sabit`
--

INSERT INTO `sabit` (`id`, `name`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'Name 1', '2022-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(2, 'Name 2', '2022-11-16 12:37:15', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(3, 'Name 3', '2022-11-16 12:38:22', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(4, 'Name 4', '2022-11-16 13:44:31', NULL, 0, NULL, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL DEFAULT 'tr',
  `uid` text NOT NULL,
  `category` text NOT NULL,
  `title` text DEFAULT NULL,
  `description` text NOT NULL,
  `img_url` text NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `seo_keywords` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `lang`, `uid`, `category`, `title`, `description`, `img_url`, `views`, `likes`, `seo_url`, `seo_keywords`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'tr', '1726932788', '1726932788', 'Service 1', '<p>Service 1 yazısı A&ccedil;ıklanama yazısı</p>', '/upload/uploads/1729732363.jpg', 0, 0, 'serive-1', NULL, '2022-11-16 12:34:01', 10, 1, '2024-11-09 19:29:26', 1, 1, 0, NULL, NULL),
(2, 'tr', '1726932789', '1726932788', 'Service 2', '<p>Service 2 yazısı A&ccedil;ıklanama yazısı</p>', '/upload/uploads/1728834780.jpg', 0, 0, 'serive-2', NULL, '2022-11-16 12:37:15', 10, 1, '2024-11-09 19:29:21', 1, 1, 0, NULL, NULL),
(3, 'tr', '1726932790', '1726932788', 'Service 3', '<p>Service 3 yazısı A&ccedil;ıklama</p>', '/upload/uploads/1728834780.jpg', 0, 0, 'service-3', NULL, '2022-11-16 12:38:22', 1, 1, '2024-11-09 19:29:15', 1, 1, 0, NULL, NULL),
(32, 'tr', '1730641368', '1726932788', 'başlık Güncelle', '<p>Deneme</p>', '/upload/uploads/1730926372.jpg', 0, 0, 'baslik-guncelle', NULL, '2024-11-03 13:43:20', 1, 1, '2024-11-09 19:29:02', 1, 1, 0, NULL, NULL),
(33, 'en', '1730641368', '1726932788', 'başlık en', '<p>cevap en</p>', '/upload/uploads/1730926372.jpg', 0, 0, 'baslik-en', NULL, '2024-11-06 20:49:20', 1, 1, '2024-11-09 19:29:02', 1, 1, 0, NULL, NULL),
(34, 'en', '1730936677', '1726932788', 'başlık', '<p>test</p>', '/assets/img/default/default.jpg', 0, 0, 'baslik', 'deneme,en', '2024-11-06 23:45:19', 1, 1, '2024-11-09 19:28:56', 1, 1, 0, NULL, NULL),
(35, 'tr', '1730936677', '1726932788', 'Servis - Hizmet', '<p>sadsad</p>', '/assets/img/default/default.jpg', 0, 0, 'servis-hizmet', 'tr,edit,test,enes', '2024-11-06 23:45:46', 1, 1, '2024-11-10 19:51:42', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL,
  `uid` text NOT NULL,
  `title` text DEFAULT NULL,
  `imgUrl` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `service_categories`
--

INSERT INTO `service_categories` (`id`, `lang`, `uid`, `title`, `imgUrl`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'tr', '1726932788', 'Hizmet Kategorisi 1', '', '2022-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(2, 'tr', '1726932789', 'Hizmet Kategorisi 2', '', '2022-11-16 12:37:15', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(3, 'tr', '1726932790', 'Hizmet Kategorisi 3', '', '2022-11-16 12:38:22', NULL, 1, '2024-10-15 03:01:19', 1, 1, 0, NULL, NULL),
(4, 'tr', '1726932791', 'Hizmet Kategorisi 4', '', '2022-11-16 13:44:31', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(82, 'tr', '1729729071', 'Hizmet Kategorisi 5', '', '2024-10-24 00:17:51', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(83, 'tr', '1730639294', 'deneme', '', '2024-11-03 13:08:14', 1, 1, '2024-11-03 13:26:09', 1, 1, 0, NULL, NULL),
(84, 'en', '1730639294', 'deneme en', '', '2024-11-03 13:08:14', 1, 1, '2024-11-03 13:26:09', 1, 1, 0, NULL, NULL),
(85, 'de', '1730639294', 'deneme dex', '', '2024-11-03 13:08:14', 1, 1, '2024-11-03 13:26:09', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL DEFAULT 'tr',
  `uid` text NOT NULL,
  `title` text DEFAULT NULL,
  `title2` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img_url` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `lang`, `uid`, `title`, `title2`, `description`, `img_url`, `url`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(49, 'tr', '1732037206', 'Başlık', 'Başlık 2', '<p>A&ccedil;ıklama</p>', '/upload/uploads/1732037225.jpg', 'Url', '2024-11-19 17:27:17', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(50, 'tr', '1732037255', 'Başlık', 'Başlık 2', '<p>A&ccedil;ıklama</p>', '/upload/uploads/1732037274.jpg', 'Url', '2024-11-19 17:28:05', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(51, 'tr', '1732037295', 'Başlık Url Yok', 'Başlık 2', '<p>A&ccedil;ıklama</p>', '/upload/uploads/1732037307.jpg', NULL, '2024-11-19 17:28:37', 1, 1, '2024-11-19 17:39:24', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'email - 1', '2022-11-16 12:34:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(2, 'email - 2', '2022-11-16 12:37:15', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(3, 'email -3', '2022-11-16 12:38:22', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(4, 'email - 4', '2022-11-16 13:44:31', NULL, 0, NULL, NULL, 1, 0, NULL, NULL),
(13, 'deneme@test.com', '2024-10-22 23:20:05', 1, 1, '2024-10-29 04:51:09', NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `surname` text DEFAULT NULL,
  `role` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `phone2` text DEFAULT NULL,
  `facebook_url` text DEFAULT NULL,
  `twitter_url` text DEFAULT NULL,
  `instagram_url` text DEFAULT NULL,
  `linkedin_url` text DEFAULT NULL,
  `web_url` text DEFAULT NULL,
  `img_url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `teams`
--

INSERT INTO `teams` (`id`, `name`, `surname`, `role`, `phone`, `phone2`, `facebook_url`, `twitter_url`, `instagram_url`, `linkedin_url`, `web_url`, `img_url`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'Name 1', 'Surname 1', 'Görev 1', 'phone 1', 'phone2 1', 'facebook1', 'twitter1', 'instagram1', 'linkedin 1', 'web1', '/assets/img/default/0_270_360.jpg', '2022-11-16 12:34:01', 10, 1, '2024-10-13 15:53:02', 1, 1, 0, NULL, NULL),
(2, 'Name 2', 'Surname 2', 'Görev 2', 'phone 2', 'phone2 2', 'facebook2', 'twitter2', 'instagram2', 'linkedin 2', 'web2', '/assets/img/default/0_270_360.jpg', '2022-11-16 12:37:15', 10, 1, '2024-10-13 15:53:07', 1, 1, 0, NULL, NULL),
(3, 'Name 3', 'Surname 3', 'Görev 3 güncelle', 'phone 3', 'phone2 3', 'facebook3', 'twitter3', 'instagram3', 'linkedin 3', 'web3', '/upload/uploads/1730758432.jpg', '2022-11-16 12:38:22', 1, 1, '2024-11-04 22:19:28', 1, 0, 0, NULL, NULL),
(58, 'ad', 'soy', 'görev güncelle', 'telefon', 'Telefon 2', 'Facebook Url', 'Twitter Url', 'Instagram Url', 'Linkedin Url', 'Web Url', '/upload/uploads/1730761264.jpg', '2024-11-04 23:01:34', 1, 1, '2024-11-04 23:13:52', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `surname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `value` text DEFAULT NULL,
  `img_url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `test`
--

INSERT INTO `test` (`id`, `name`, `surname`, `email`, `value`, `img_url`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'name edit', 'Surname', 'test@test.com', '1', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 4, 1, '2023-11-07 01:51:00', 1, 1, 0, '2024-01-17 08:23:40', 10),
(2, 'Name', 'Surname', 'test@test.com', '2', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 4, 1, '2024-08-24 23:01:35', 1, 1, 0, NULL, NULL),
(3, 'Name', 'Surname', 'test@test.com', '3', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 4, 0, NULL, NULL, 1, 1, NULL, NULL),
(4, 'Name', 'Surname', 'test@test.com', '4', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 4, 0, NULL, NULL, 1, 0, NULL, NULL),
(6, 'Name', 'Surname', 'test@test.com', '6', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(7, 'Name', 'Surname', 'test@test.com', '7', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(8, 'Name', 'Surname', 'test@test.com', '8', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(10, 'name güncelleme', 'surname güncelleme', 'test@test.com', '10', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 1, '2023-12-15 08:58:58', 5, 1, 0, NULL, NULL),
(11, 'Name', 'Surname', 'test@test.com', '11', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(12, 'Name', 'Surname', 'test@test.com', '12', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(13, 'Name', 'Surname', 'test@test.com', '13', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(14, 'Name', 'Surname', 'test@test.com', '14', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(15, 'Name', 'Surname', 'test@test.com', '15', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(16, 'Name', 'Surname', 'test@test.com', '16', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(17, 'Name', 'Surname', 'test@test.com', '17', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(18, 'Name', 'Surname', 'test@test.com', '18', '/assets/img/user/default.jpg', '2023-11-03 11:58:25', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(19, 'Name', 'Surname', 'test@test.com', '19', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(20, 'Name', 'Surname', 'test@test.com', '20', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(21, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(22, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(23, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(24, 'Name', 'Surname', 'test@test.com', '24', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(25, 'Name', 'Surname', 'test@test.com', '25', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(26, 'Name', 'Surname', 'test@test.com', '26', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(27, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(28, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(29, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(30, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(31, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(32, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(33, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 1, '2024-08-24 23:01:29', 1, 1, 1, '2023-12-21 10:37:31', 10),
(34, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 1, '2023-12-21 10:37:31', 5, 0, 1, '2023-12-15 14:56:01', 10),
(35, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 1, '2024-08-26 23:45:09', 1, 1, 1, '2023-12-15 03:09:13', 10),
(92, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(93, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(94, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(95, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(96, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(97, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(98, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(99, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(100, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(101, 'Name', 'Surname', 'test@test.com', '26', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(102, 'Name', 'Surname', 'test@test.com', '25', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(103, 'Name', 'Surname', 'test@test.com', '24', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(104, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(105, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(106, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(107, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(108, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(109, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(110, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(111, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(112, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(113, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(114, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(115, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(116, 'Name', 'Surname', 'test@test.com', '26', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(117, 'Name', 'Surname', 'test@test.com', '25', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(118, 'Name', 'Surname', 'test@test.com', '24', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(119, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(120, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(121, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(122, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(123, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(124, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(125, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(126, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(127, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(128, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(129, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(130, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(131, 'Name', 'Surname', 'test@test.com', '26', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(132, 'Name', 'Surname', 'test@test.com', '25', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(133, 'Name', 'Surname', 'test@test.com', '24', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(134, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(135, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(136, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(137, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(138, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(139, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(140, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(141, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(142, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(143, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(144, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(145, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(146, 'Name', 'Surname', 'test@test.com', '26', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(147, 'Name', 'Surname', 'test@test.com', '25', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(148, 'Name', 'Surname', 'test@test.com', '24', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(149, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(150, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(151, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(152, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(153, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(154, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(155, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(156, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(157, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(158, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(159, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(160, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(161, 'Name', 'Surname', 'test@test.com', '26', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(162, 'Name', 'Surname', 'test@test.com', '25', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(163, 'Name', 'Surname', 'test@test.com', '24', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(164, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(165, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(167, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(168, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(169, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(170, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(171, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(172, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(173, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(174, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(175, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(176, 'Name', 'Surname', 'test@test.com', '26', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(177, 'Name', 'Surname', 'test@test.com', '25', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(178, 'Name', 'Surname', 'test@test.com', '24', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(179, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(180, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(181, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(182, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(183, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(184, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(185, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(186, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(187, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(188, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(189, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(190, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(191, 'Name', 'Surname', 'test@test.com', '26', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 1, '2024-09-10 22:55:30', NULL, 0, 0, NULL, NULL),
(192, 'Name', 'Surname', 'test@test.com', '25', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 1, '2024-09-10 22:55:30', NULL, 0, 0, NULL, NULL),
(193, 'Name', 'Surname', 'test@test.com', '24', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 1, '2024-09-10 22:55:30', NULL, 0, 0, NULL, NULL),
(200, 'Name', 'Surname', 'test@test.com', '24', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(201, 'Name', 'Surname', 'test@test.com', '25', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(202, 'Name', 'Surname', 'test@test.com', '26', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(203, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(204, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(205, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(206, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(207, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(208, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(209, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(210, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(211, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(212, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(213, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(214, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(215, 'Name', 'Surname', 'test@test.com', '24', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(216, 'Name', 'Surname', 'test@test.com', '25', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(217, 'Name', 'Surname', 'test@test.com', '26', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(218, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(219, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(220, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(221, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(222, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(223, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(224, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(225, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(226, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(227, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(228, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2024-09-09 01:53:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(229, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2024-09-10 01:53:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(230, 'Deneme', 'Son', 'end@dfds.com', '11', '/assets/img/user/default.jpg', '2024-09-11 01:53:23', 1, 1, '2024-09-15 17:24:00', 1, 0, 0, NULL, NULL),
(231, 'ebuenesx', 'yıldırım', 'end@dfds.com', '34', '/assets/img/user/default.jpg', '2024-09-29 12:27:07', 0, 1, '2024-10-05 15:46:45', 1, 1, 0, NULL, NULL),
(248, 'ebuenes', 'yıldırım', 'end@dfds.com', '223', '/assets/img/user/default.jpg', '2024-10-05 15:46:58', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(249, 'ebuenes', 'yıldırım', 'end@dfds.com', '223', '/assets/img/user/default.jpg', '2024-10-05 15:46:58', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(250, 'ebuenesx', 'yıldırım', 'end@dfds.com', '34', '/assets/img/user/default.jpg', '2024-09-29 12:27:07', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(251, 'Deneme', 'Son', 'end@dfds.com', '11', '/assets/img/user/default.jpg', '2024-09-11 01:53:23', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(252, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2024-09-10 01:53:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(253, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2024-09-09 01:53:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(254, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(255, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(256, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(257, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(258, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(259, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(260, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(261, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(262, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(263, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(264, 'ebuenes', 'yıldırım', 'end@dfds.com', '223', '/assets/img/user/default.jpg', '2024-10-05 15:46:58', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(265, 'ebuenesx', 'yıldırım', 'end@dfds.com', '34', '/assets/img/user/default.jpg', '2024-09-29 12:27:07', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(266, 'Deneme', 'Son', 'end@dfds.com', '11', '/assets/img/user/default.jpg', '2024-09-11 01:53:23', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(267, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2024-09-10 01:53:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(268, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2024-09-09 01:53:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(269, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(270, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(271, 'name güncelleme', 'surname güncelleme', 'test@test.com', '34', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(272, 'Name', 'Surname', 'test@test.com', '33', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(273, 'Name', 'Surname', 'test@test.com', '32', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(274, 'Name', 'Surname', 'test@test.com', '31', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(275, 'Name', 'Surname', 'test@test.com', '30', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(276, 'Name', 'Surname', 'test@test.com', '29', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(277, 'Name', 'Surname', 'test@test.com', '28', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(278, 'Name', 'Surname', 'test@test.com', '27', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(279, 'ebuenes', 'yıldırım', 'end@dfds.com', '223', '/assets/img/user/default.jpg', '2024-10-05 15:46:58', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(280, 'ebuenesx', 'yıldırım', 'end@dfds.com', '34', '/assets/img/user/default.jpg', '2024-09-29 12:27:07', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(281, 'Deneme', 'Son', 'end@dfds.com', '11', '/assets/img/user/default.jpg', '2024-09-11 01:53:23', 1, 0, NULL, NULL, 0, 0, NULL, NULL),
(282, 'Name', 'Surname', 'test@test.com', '23', '/assets/img/user/default.jpg', '2024-09-10 01:53:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(283, 'Name', 'Surname', 'test@test.com', '22', '/assets/img/user/default.jpg', '2024-09-09 01:53:23', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(284, 'Name', 'Surname', 'test@test.com', '21', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(285, 'adp', 'surname güncellemep', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2023-11-03 11:58:26', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(295, 'adp', 'surname 295', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2024-10-22 17:37:19', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(297, 'adp güncelle', 'surname 297', 'test@test.comp', '351', '/assets/img/user/default.jpg', '2024-10-22 17:42:24', 1, 1, '2024-10-22 19:02:01', 1, 1, 0, NULL, NULL),
(309, 'ad', 'soyad', 'email@densad.xom', '44', '/assets/img/user/default.jpg', '2024-10-22 19:25:00', 1, 1, '2024-10-22 21:34:56', 1, 1, 0, NULL, NULL),
(314, 'deneme', 'soy', 'ema@dee.com', '23', '/assets/img/user/default.jpg', '2024-10-22 22:33:19', 1, 0, NULL, NULL, 1, 0, NULL, NULL),
(315, 'denemex x', 'soyx', 'email.com@denme', '2', '/assets/img/user/default.jpg', '2024-10-22 22:33:41', 1, 1, '2024-10-22 22:51:15', 1, 1, 0, NULL, NULL),
(316, 'deneme', 'soy', 'email@de.com', '14', '/assets/img/user/default.jpg', '2024-10-29 16:01:29', 1, 0, NULL, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `surname` text DEFAULT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `img_url` text DEFAULT NULL,
  `role_id` int(11) DEFAULT 3,
  `departman_id` text DEFAULT '3',
  `phone` text NOT NULL,
  `dateofBirth` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `img_url`, `role_id`, `departman_id`, `phone`, `dateofBirth`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'UserTest', 'Surname x', 'user@gmail.com', '123', '/upload/uploads/1726029692.jpg', 3, '2', '(551) 032-0501', '', '2023-11-03 11:56:46', 1, 1, '2024-10-12 00:08:46', 1, 1, 0, NULL, NULL),
(2, 'Test_Name xxc', 'Test_Surname', 'test@test.com', '123', '/assets/img/user/default.jpg', 2, '1', '', '', '2023-11-03 11:56:46', NULL, 1, '2024-08-24 23:10:05', 1, 0, 0, NULL, NULL),
(3, 'SuperAdmin', 'Surname_super', 'super@gmail.com', '123', '/assets/img/user/default.jpg', 1, '3', '', '', '2023-11-03 11:56:46', NULL, 1, '2024-08-24 23:09:23', 1, 1, 0, NULL, NULL),
(5, 'test güncellemex', 'surname güncelleme', 'enes@gmail.com', '123', '/assets/img/user/default.jpg', 3, '2', '(551) 032-0501', '1995-03-17', '2024-08-25 20:42:40', NULL, 1, '2024-10-23 21:26:29', NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `web_users`
--

CREATE TABLE `web_users` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `surname` text DEFAULT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `img_url` text DEFAULT NULL,
  `role_id` int(11) DEFAULT 1 COMMENT 'müşteri =>1 yetkili => 2',
  `phone` text NOT NULL,
  `dateofBirth` text NOT NULL,
  `city` text NOT NULL,
  `district` text NOT NULL,
  `neighborhood` text NOT NULL,
  `address` text NOT NULL,
  `service_type` text NOT NULL,
  `type` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_byId` int(11) DEFAULT NULL,
  `isUpdated` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_byId` int(11) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_byId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `web_users`
--

INSERT INTO `web_users` (`id`, `name`, `surname`, `email`, `password`, `img_url`, `role_id`, `phone`, `dateofBirth`, `city`, `district`, `neighborhood`, `address`, `service_type`, `type`, `description`, `created_at`, `created_byId`, `isUpdated`, `updated_at`, `updated_byId`, `isActive`, `isDeleted`, `deleted_at`, `deleted_byId`) VALUES
(1, 'UserTest', 'Surname x', 'user@gmail.com', '123', '/assets/img/user/default.jpg', 1, '0555 551 55 58', '', 'il', '0555 551 55 58', 'mahalle', 'SADSAD', '', '', '', '2023-11-03 11:56:46', 1, 1, '2024-10-21 23:22:37', 1, 1, 0, NULL, NULL),
(20, 'yildirimdev', 'soyad', 'info@yildirimdev.com', '123', '/assets/img/user/default.jpg', 2, '05510320501', '', 'Keçiören', '05510320501', 'Mahalle', 'Keçiören / Ankara', 'hizmet türü', 'Şahıs', 'Tanıtım', '2024-10-14 01:23:20', 1, 1, '2024-10-14 01:39:37', 1, 1, 0, NULL, NULL),
(22, 'ebuenes', 'yıldırım', 'ebuenesy2@gmail.com', '123', '/assets/img/user/default.jpg', 2, '05510320501', '', 'Keçiören', 'Keçiören', 'Mahalle', 'Keçiören / Ankara', 'hizmet', 'tür', 'Acıklama', '2024-10-17 21:51:34', NULL, 1, '2024-10-18 19:40:02', 1, 0, 0, NULL, NULL),
(30, 'deneme x', 'soy x', 'email@deneme.com', '123', '/assets/img/user/default.jpg', 1, '(551) 032-0501', '1995-03-17', '', '', '', '', '', '', '', '2024-10-23 20:21:49', 1, 1, '2024-10-23 20:32:24', 1, 1, 0, NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blogs_categories`
--
ALTER TABLE `blogs_categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blogs_comment`
--
ALTER TABLE `blogs_comment`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `company_categories`
--
ALTER TABLE `company_categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `current_account`
--
ALTER TABLE `current_account`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `departmanlist`
--
ALTER TABLE `departmanlist`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `homesettings`
--
ALTER TABLE `homesettings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `institutional`
--
ALTER TABLE `institutional`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `multimenu`
--
ALTER TABLE `multimenu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_comment`
--
ALTER TABLE `product_comment`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sabit`
--
ALTER TABLE `sabit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `web_users`
--
ALTER TABLE `web_users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Tablo için AUTO_INCREMENT değeri `blogs_categories`
--
ALTER TABLE `blogs_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Tablo için AUTO_INCREMENT değeri `blogs_comment`
--
ALTER TABLE `blogs_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Tablo için AUTO_INCREMENT değeri `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `company_categories`
--
ALTER TABLE `company_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Tablo için AUTO_INCREMENT değeri `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `current_account`
--
ALTER TABLE `current_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Tablo için AUTO_INCREMENT değeri `departmanlist`
--
ALTER TABLE `departmanlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Tablo için AUTO_INCREMENT değeri `homesettings`
--
ALTER TABLE `homesettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `institutional`
--
ALTER TABLE `institutional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `multimenu`
--
ALTER TABLE `multimenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Tablo için AUTO_INCREMENT değeri `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Tablo için AUTO_INCREMENT değeri `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Tablo için AUTO_INCREMENT değeri `product_comment`
--
ALTER TABLE `product_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `sabit`
--
ALTER TABLE `sabit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Tablo için AUTO_INCREMENT değeri `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Tablo için AUTO_INCREMENT değeri `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `web_users`
--
ALTER TABLE `web_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;