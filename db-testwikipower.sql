-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour testwikipower
CREATE DATABASE IF NOT EXISTS `testwikipower` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `testwikipower`;

-- Listage de la structure de la table testwikipower. blog_posts
CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table testwikipower.blog_posts : ~3 rows (environ)
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
REPLACE INTO `blog_posts` (`id`, `title`, `text`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'Pourquoi Proximus et Orange fusionnent leurs réseaux GSM et Telenet (BASE) demande à les rejoindre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'article1.jpg', NULL, NULL),
	(2, 'Proximus lance la 4G illimitée : comparatif des abonnements', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'article2.jpg', NULL, NULL),
	(3, 'Quel opérateur TV choisir pour regarder le football ?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'article3.jpg', NULL, NULL);
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;

-- Listage de la structure de la table testwikipower. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table testwikipower.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table testwikipower. main_menus
CREATE TABLE IF NOT EXISTS `main_menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table testwikipower.main_menus : ~6 rows (environ)
/*!40000 ALTER TABLE `main_menus` DISABLE KEYS */;
REPLACE INTO `main_menus` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
	(1, 'Comparer les offres ', '/comparator', NULL, NULL),
	(2, 'Opérateurs', '/operators', NULL, NULL),
	(3, 'Jobs', '/jobs', NULL, NULL),
	(4, 'FAQ', '/faq', NULL, NULL),
	(5, 'Blog', '/blog', NULL, NULL),
	(6, 'Contact', '/contact', NULL, NULL);
/*!40000 ALTER TABLE `main_menus` ENABLE KEYS */;

-- Listage de la structure de la table testwikipower. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table testwikipower.migrations : ~9 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(35, '2014_10_12_000000_create_users_table', 1),
	(36, '2014_10_12_100000_create_password_resets_table', 1),
	(37, '2019_08_19_000000_create_failed_jobs_table', 1),
	(38, '2020_11_10_155152_create_main_menus_table', 1),
	(39, '2020_11_10_192020_create_operators_table', 1),
	(40, '2020_11_10_211738_create_packs_table', 1),
	(41, '2020_11_10_211809_create_blog_posts_table', 1),
	(42, '2020_11_10_211856_create_testimonies_table', 1),
	(43, '2020_11_10_211919_create_pages_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table testwikipower. operators
CREATE TABLE IF NOT EXISTS `operators` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table testwikipower.operators : ~7 rows (environ)
/*!40000 ALTER TABLE `operators` DISABLE KEYS */;
REPLACE INTO `operators` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
	(1, 'Proximus', 'proximus', NULL, NULL),
	(2, 'VOO', 'voo', NULL, NULL),
	(3, 'Scarlet', 'scarlet', NULL, NULL),
	(4, 'Orange', 'orange', NULL, NULL),
	(5, 'Telenet', 'telenet', NULL, NULL),
	(6, 'Base', 'base', NULL, NULL),
	(7, 'EDPnet', 'edpnet', NULL, NULL);
/*!40000 ALTER TABLE `operators` ENABLE KEYS */;

-- Listage de la structure de la table testwikipower. packs
CREATE TABLE IF NOT EXISTS `packs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table testwikipower.packs : ~8 rows (environ)
/*!40000 ALTER TABLE `packs` DISABLE KEYS */;
REPLACE INTO `packs` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
	(1, 'Pack internet + TV + téléphone + GSM', 'internet-tv-telephone-gsm', NULL, NULL),
	(2, 'Pack internet + TV + téléphone', 'internet-tv-telephone', NULL, NULL),
	(3, 'Pack internet + TV + GSM', 'internet-tv-gsm', NULL, NULL),
	(4, 'Pack internet + TV', 'internet-tv', NULL, NULL),
	(5, 'Pack internet + téléphone', 'internet-telephone', NULL, NULL),
	(6, 'Pack internet + GSM', 'internet-gsm', NULL, NULL),
	(7, 'Abonnement internet seul', 'internet', NULL, NULL),
	(8, 'Abonnement GSM seul', 'gsm', NULL, NULL);
/*!40000 ALTER TABLE `packs` ENABLE KEYS */;

-- Listage de la structure de la table testwikipower. pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table testwikipower.pages : ~15 rows (environ)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
REPLACE INTO `pages` (`id`, `title`, `url`, `category`, `created_at`, `updated_at`) VALUES
	(1, 'Qui est Comparateur-Telecom.be', 'about-us', 1, NULL, NULL),
	(2, 'Jobs', 'jobs', 1, NULL, NULL),
	(3, 'Corporate', 'corporate', 1, NULL, NULL),
	(4, 'Presse et médias', 'press-and-media', 1, NULL, NULL),
	(5, 'Conditions générales', 'conditions', 1, NULL, NULL),
	(6, 'Vie privée', 'private', 1, NULL, NULL),
	(7, 'Gestion des cookies', 'cookies', 1, NULL, NULL),
	(8, 'Cookie manager', 'cookie-manager', 1, NULL, NULL),
	(9, 'Contact', 'contact', 2, NULL, NULL),
	(10, 'FAQ', 'faq', 2, NULL, NULL),
	(11, 'Déménager', 'move-out', 2, NULL, NULL),
	(12, 'Changer d\'opérateur', 'operator-change', 2, NULL, NULL),
	(13, 'Blog', 'blog', 2, NULL, NULL),
	(14, 'Dossiers', 'dossiers', 2, NULL, NULL),
	(15, 'Guides pratiques', 'practicals', 2, NULL, NULL);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Listage de la structure de la table testwikipower. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table testwikipower.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table testwikipower. testimonies
CREATE TABLE IF NOT EXISTS `testimonies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vote` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table testwikipower.testimonies : ~0 rows (environ)
/*!40000 ALTER TABLE `testimonies` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonies` ENABLE KEYS */;

-- Listage de la structure de la table testwikipower. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table testwikipower.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
