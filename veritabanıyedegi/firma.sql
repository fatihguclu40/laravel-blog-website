-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Kas 2018, 11:57:57
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `firma`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ana_basliklar`
--

CREATE TABLE `ana_basliklar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kisa_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ana_basliklar`
--

INSERT INTO `ana_basliklar` (`id`, `baslik`, `kisa_aciklama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Deneme Baslik', 'asasdasdasdasdasdasdasdasdasdasdasdasdasdasd', 'deneme-baslik', '2018-11-17 17:48:40', '2018-11-17 17:48:40'),
(10, 'Deneme Baslik 2', '@MKhalidJunaid he doesn\'t need it but if he loops he will execute a query for each comment, so I\'d say that he does need it for perfomance improvements – GaimZz Jun 1 at 11:38', 'deneme-baslik-2', '2018-11-17 17:55:20', '2018-11-17 17:55:20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `url` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `author` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gsm` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `recapctha` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `maps` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `analystic` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `youtube` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `google` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_user` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_password` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_host` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_port` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `logo`, `url`, `title`, `description`, `keywords`, `author`, `tel`, `gsm`, `fax`, `mail`, `adres`, `recapctha`, `maps`, `analystic`, `facebook`, `twitter`, `instagram`, `youtube`, `google`, `smtp_user`, `smtp_password`, `smtp_host`, `smtp_port`, `created_at`, `updated_at`) VALUES
(1, 'logo.jpg', 'yok', 'Laravel', 'Laravelle ilk site yapımım', 'laravel,deneme,ilksitem', NULL, '0537 575 7752', '0537 575 7752', '0537 575 7752', 'fatihguclu40@gmail.com', 'Merkez / Kırşehir', 'yok', 'yok', 'yok', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', 'www.youtube.com', 'yok', 'yok', 'yok', 'yok', 'yok', NULL, '2018-11-08 09:03:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bloglar`
--

CREATE TABLE `bloglar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `icerik` longtext COLLATE utf8_turkish_ci,
  `yazar` int(11) DEFAULT NULL,
  `etiketler` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bloglar`
--

INSERT INTO `bloglar` (`id`, `baslik`, `icerik`, `yazar`, `etiketler`, `slug`, `kategori`, `created_at`, `updated_at`) VALUES
(18, 'Laravel', '<p>&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;</p>', 1, 'laravel,deneme', 'laravel-2018-11-15-141053', 6, '2018-11-15 14:10:54', '2018-11-15 14:10:54'),
(19, 'Laravel Deneme', '<p>&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;</p>', 1, 'deneme laravel', 'laravel-deneme-2018-11-15-155951', 6, '2018-11-15 15:59:51', '2018-11-15 15:59:51'),
(20, 'Codigniter', '<p>&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;</p>', 1, 'Codigniter,deneme', 'codigniter-2018-11-16-082536', 7, '2018-11-16 08:25:36', '2018-11-16 08:25:36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forum_konular`
--

CREATE TABLE `forum_konular` (
  `id` int(11) NOT NULL,
  `baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `yazar` int(11) NOT NULL,
  `etiketler` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ana_baslik` int(11) DEFAULT NULL,
  `goster` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `forum_konular`
--

INSERT INTO `forum_konular` (`id`, `baslik`, `icerik`, `yazar`, `etiketler`, `slug`, `ana_baslik`, `goster`, `created_at`, `updated_at`) VALUES
(1, 'Deneme', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', 1, 'asdasd', 'deneme-baslik', 1, 0, '2018-11-12 00:00:00', '2018-11-20 13:17:44'),
(2, 'Deneme2', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', 1, 'asdasd', 'deneme-baslik', 1, 0, '2018-11-12 00:00:00', '2018-11-20 13:17:52'),
(5, 'Deneme5', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', 1, 'asdasd', 'deneme-baslik', 1, 1, '2018-11-12 00:00:00', '2018-11-21 00:00:00'),
(8, 'Deneme8', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', 1, 'asdasd', 'deneme-baslik', 1, 1, '2018-11-12 00:00:00', '2018-11-21 00:00:00'),
(9, 'ppp9', 'aaa', 1, NULL, 'ppp-2018-11-18-155454', 0, 1, '2018-11-18 15:54:54', '2018-11-18 15:54:54');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forum_yorumlar`
--

CREATE TABLE `forum_yorumlar` (
  `id` int(11) NOT NULL,
  `ust_yorum` int(11) NOT NULL DEFAULT '0',
  `kullanici_id` int(11) NOT NULL,
  `forum` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `forum_yorumlar`
--

INSERT INTO `forum_yorumlar` (`id`, `ust_yorum`, `kullanici_id`, `forum`, `icerik`, `created_at`, `updated_at`) VALUES
(1, 0, 1, '1', 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', '2018-11-07 00:00:00', '2018-11-14 00:00:00'),
(2, 0, 1, 'deneme-baslik', 'yoruuuuuuuuum', '2018-11-19 20:31:56', '2018-11-19 20:31:56'),
(3, 0, 1, 'deneme-baslik', 'yorum2', '2018-11-20 08:34:29', '2018-11-20 08:34:29'),
(4, 2, 1, 'asdasdasd', 'asdasdasdasd', '2018-11-08 00:00:00', '2018-11-01 00:00:00'),
(5, 0, 1, 'deneme-baslik', 'fafsdfsdfsdfsdf', '2018-11-20 10:28:14', '2018-11-20 10:28:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `vizyon` text COLLATE utf8_turkish_ci,
  `misyon` text COLLATE utf8_turkish_ci,
  `kisa_yazi` text COLLATE utf8_turkish_ci,
  `icerik` text COLLATE utf8_turkish_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `vizyon`, `misyon`, `kisa_yazi`, `icerik`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', 'Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia\'daki Hampden-Sydney College\'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan \'consectetur\' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan \"de Finibus Bonorum et Malorum\" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan \"Lorem ipsum dolor sit amet\" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.\n\n1500\'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.', '2018-11-08 16:30:34', '2018-11-08 17:04:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ust_kategori` int(11) NOT NULL,
  `slug` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `ad`, `ust_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Php', 0, 'php', '2018-11-14 11:08:00', '2018-11-14 11:08:00'),
(3, 'Html', 0, 'html', '2018-11-14 11:08:50', '2018-11-14 11:08:50'),
(4, 'Java-Script', 0, 'java-script', '2018-11-14 11:08:59', '2018-11-14 11:08:59'),
(5, 'Faramework', 2, 'faramework', '2018-11-14 11:13:33', '2018-11-14 11:13:33'),
(6, 'Laravel', 5, 'laravel', '2018-11-14 11:13:44', '2018-11-14 11:13:44'),
(7, 'Codeigniter', 5, 'codeigniter', '2018-11-14 11:13:59', '2018-11-14 11:13:59'),
(10, 'Css', 0, 'css', '2018-11-16 08:26:12', '2018-11-16 08:26:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yetki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `yetki`, `remember_token`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Fatih', 'fatihguclu40@hotmail.com', NULL, '$2y$10$8Hh5qafzsZfGmrfD/DQuVuYfbEYO50WbgG6.TWdti28yM3IbV3YgG', '1', 'hDf7fqXjpPauBa3coERyWBOAHs72jJwhcj0ZSsv6TlPBzQUCL96nscjXypYm', 'fatih', '2018-11-14 07:04:20', '2018-11-14 07:04:20'),
(2, 'Rüştü', 'guclu_fati@hotmail.com', NULL, '$2y$10$Oxe7uTgbXTazamGZmvU5fuOqotC21NvJSgviLlDRUFRrlAXjOgTTi', '0', 'UnJo2MmznjXntNs8d9cOIT97OQuH25Yz1JsXo3thOr4ennn7mM98rNsZNEbm', 'rustu', '2018-11-17 09:03:32', '2018-11-17 09:03:32'),
(5, 'herhangibiri', 'oyunhesabim443@gmail.com', NULL, '$2y$10$sN2INljS7yo/DVNCHbzh3u7dHNCZv1G2Ue1z.zob7WyJpwKoHQcVG', '0', 'aDvavwuSgJpazCNqCWuTr6BxjuhP7A3rjBDGdRNuoOXKOCPtRAT3LBdT23qa', 'herhangibiri', '2018-11-17 11:13:14', '2018-11-17 11:13:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) DEFAULT '0',
  `ust_yorum` int(11) DEFAULT '0',
  `blog` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `kullanici_id`, `ust_yorum`, `blog`, `isim`, `mail`, `icerik`, `created_at`, `updated_at`) VALUES
(16, 0, 0, 'codigniter-2018-11-16-082536', 'Fatih', 'fatihguclu40@hotmail.com', 'Deneme mesajı', '2018-11-16 14:25:49', '2018-11-16 14:25:49'),
(17, 0, 16, 'codigniter-2018-11-16-082536', 'Fatih', 'fatihguclu40@hotmail.com', 'aaaaaaa', '2018-11-16 14:26:30', '2018-11-16 14:26:30'),
(18, 0, 0, 'codigniter-2018-11-16-082536', 'Fatih', 'fatihguclu40@hotmail.com', 'ddddd', '2018-11-16 14:27:23', '2018-11-16 14:27:23'),
(19, 0, 18, 'codigniter-2018-11-16-082536', 'Fatih', 'fatihguclu40@hotmail.com', 'vvvvvvvvv', '2018-11-16 14:27:56', '2018-11-16 14:27:56'),
(20, 0, 16, 'codigniter-2018-11-16-082536', 'Fatih', 'fatihguclu40@hotmail.com', 'yoruma cevap', '2018-11-16 14:43:00', '2018-11-16 14:43:00'),
(21, 1, 0, 'codigniter-2018-11-16-082536', NULL, NULL, 'Yeni mesaj', '2018-11-16 15:00:05', '2018-11-16 15:00:05'),
(22, 1, 0, 'codigniter-2018-11-16-082536', NULL, NULL, 'lalalalalallalala', '2018-11-16 15:08:27', '2018-11-16 15:08:27'),
(23, 1, 0, 'codigniter-2018-11-16-082536', NULL, NULL, 'kayıtlı kullanıcı', '2018-11-16 15:17:14', '2018-11-16 15:17:14');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ana_basliklar`
--
ALTER TABLE `ana_basliklar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bloglar`
--
ALTER TABLE `bloglar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `forum_konular`
--
ALTER TABLE `forum_konular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `forum_yorumlar`
--
ALTER TABLE `forum_yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ana_basliklar`
--
ALTER TABLE `ana_basliklar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bloglar`
--
ALTER TABLE `bloglar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `forum_konular`
--
ALTER TABLE `forum_konular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `forum_yorumlar`
--
ALTER TABLE `forum_yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
