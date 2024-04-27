-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 avr. 2023 à 17:25
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `iamr`
--
CREATE DATABASE IF NOT EXISTS `iamr` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `iamr`;

-- --------------------------------------------------------

--
-- Structure de la table `apropos`
--

CREATE TABLE `apropos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A proos du IAMR',
  `apropos` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L’histoire d’ALIMA commence en 2009 au Niger. Alors que l’ensemble du corps médical observe un pic alarmant de malnutrition aiguë et que le taux de mortalité infantile augmente, les structures de prise en charge de la malnutrition se font de plus en plus rares.',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apropos`
--

INSERT INTO `apropos` (`id`, `title`, `apropos`, `image`, `created_at`, `updated_at`) VALUES
(1, 'A proros de IAMR', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’histoire d’ALIMA commence en 2009 au Niger. Alors que l’ensemble du corps médical observe un pic alarmant de malnutrition aiguë et que le taux de mortalité infantile augmente, les structures de prise en charge de la malnutrition se font de plus en plus rares.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">De nombreuses ONG internationales ont été expulsées du territoire l’année précédente. Les ONG locales sont alors les seules à pouvoir agir, mais elles manquent cruellement de moyens… C’est de ce constat que naît l’idée de créer un nouveau modèle d’organisation d’aide humanitaire d’urgence : une alliance qui ferait le lien entre les personnels de santé locaux, les ONGs nationales et les instituts de recherche internationaux. L’objectif étant de faire collaborer les praticiens humanitaires sur le terrain.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">IAMR est née.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Depuis le début de cette aventure, grâce à cette alliance unique, ALIMA a soigné plus de 10 millions de personnes à travers 14 pays du monde entier, principalement en Afrique.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Son expertise : réponses aux urgences, santé maternelle et infantile, malnutrition, épidémies et maladies émergentes, formation des soignants.</p>', '1681306606.jpg', NULL, '2023-04-17 13:08:09');

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Lancement des actualités', 'lancement-des-actualites', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’histoire d’ALIMA commence en 2009 au Niger. Alors que l’ensemble du corps médical observe un pic alarmant de malnutrition aiguë et que le taux de mortalité infantile augmente, les structures de prise en charge de la malnutrition se font de plus en plus rares.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">De nombreuses ONG internationales ont été expulsées du territoire l’année précédente. Les ONG locales sont alors les seules à pouvoir agir, mais elles manquent cruellement de moyens… C’est de ce constat que naît l’idée de créer un nouveau modèle d’organisation d’aide humanitaire d’urgence : une alliance qui ferait le lien entre les personnels de santé locaux, les ONGs nationales et les instituts de recherche internationaux. L’objectif étant de faire collaborer les praticiens humanitaires sur le terrain.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">ALIMA est née.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Depuis le début de cette aventure, grâce à cette alliance unique, ALIMA a soigné plus de 10 millions de personnes à travers 14 pays du monde entier, principalement en Afrique.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Son expertise : réponses aux urgences, santé maternelle et infantile, malnutrition, épidémies et maladies émergentes, formation des soignants.</p>', '1681307540.jpg', 1, '2023-04-12 12:52:20', '2023-04-12 12:52:20'),
(2, 'Nos Publication', 'nos-publication', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’histoire d’ALIMA commence en 2009 au Niger. Alors que l’ensemble du corps médical observe un pic alarmant de malnutrition aiguë et que le taux de mortalité infantile augmente, les structures de prise en charge de la malnutrition se font de plus en plus rares.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">De nombreuses ONG internationales ont été expulsées du territoire l’année précédente. Les ONG locales sont alors les seules à pouvoir agir, mais elles manquent cruellement de moyens… C’est de ce constat que naît l’idée de créer un nouveau modèle d’organisation d’aide humanitaire d’urgence : une alliance qui ferait le lien entre les personnels de santé locaux, les ONGs nationales et les instituts de recherche internationaux. L’objectif étant de faire collaborer les praticiens humanitaires sur le terrain.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">ALIMA est née.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Depuis le début de cette aventure, grâce à cette alliance unique, ALIMA a soigné plus de 10 millions de personnes à travers 14 pays du monde entier, principalement en Afrique.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Son expertise : réponses aux urgences, santé maternelle et infantile, malnutrition, épidémies et maladies émergentes, formation des soignants.</p>', '1681307562.jpg', 2, '2023-04-12 12:52:42', '2023-04-12 12:52:42'),
(3, 'Sensibilisation', 'sensibilisation', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’histoire d’ALIMA commence en 2009 au Niger. Alors que l’ensemble du corps médical observe un pic alarmant de malnutrition aiguë et que le taux de mortalité infantile augmente, les structures de prise en charge de la malnutrition se font de plus en plus rares.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">De nombreuses ONG internationales ont été expulsées du territoire l’année précédente. Les ONG locales sont alors les seules à pouvoir agir, mais elles manquent cruellement de moyens… C’est de ce constat que naît l’idée de créer un nouveau modèle d’organisation d’aide humanitaire d’urgence : une alliance qui ferait le lien entre les personnels de santé locaux, les ONGs nationales et les instituts de recherche internationaux. L’objectif étant de faire collaborer les praticiens humanitaires sur le terrain.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">ALIMA est née.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Depuis le début de cette aventure, grâce à cette alliance unique, ALIMA a soigné plus de 10 millions de personnes à travers 14 pays du monde entier, principalement en Afrique.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Son expertise : réponses aux urgences, santé maternelle et infantile, malnutrition, épidémies et maladies émergentes, formation des soignants.</p>', '1681307586.jpg', 3, '2023-04-12 12:53:06', '2023-04-12 12:53:06'),
(4, 'Conférence Débat', 'conference-debat', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’histoire d’ALIMA commence en 2009 au Niger. Alors que l’ensemble du corps médical observe un pic alarmant de malnutrition aiguë et que le taux de mortalité infantile augmente, les structures de prise en charge de la malnutrition se font de plus en plus rares.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">De nombreuses ONG internationales ont été expulsées du territoire l’année précédente. Les ONG locales sont alors les seules à pouvoir agir, mais elles manquent cruellement de moyens… C’est de ce constat que naît l’idée de créer un nouveau modèle d’organisation d’aide humanitaire d’urgence : une alliance qui ferait le lien entre les personnels de santé locaux, les ONGs nationales et les instituts de recherche internationaux. L’objectif étant de faire collaborer les praticiens humanitaires sur le terrain.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">ALIMA est née.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Depuis le début de cette aventure, grâce à cette alliance unique, ALIMA a soigné plus de 10 millions de personnes à travers 14 pays du monde entier, principalement en Afrique.</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Son expertise : réponses aux urgences, santé maternelle et infantile, malnutrition, épidémies et maladies émergentes, formation des soignants.</p>', '1681307628.jpg', 4, '2023-04-12 12:53:48', '2023-04-12 12:53:48');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Actualités', 'actualites', '2023-04-12 12:50:07', '2023-04-12 12:50:07'),
(2, 'News', 'news', '2023-04-12 12:50:14', '2023-04-12 12:50:14'),
(3, 'Sensibilisation', 'sensibilisation', '2023-04-12 12:50:36', '2023-04-12 12:50:36'),
(4, 'Conférence', 'conference', '2023-04-12 12:50:47', '2023-04-12 12:50:47');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id`, `title`, `number`, `created_at`, `updated_at`) VALUES
(1, 'Airtel Money', '+243993048576', '2023-04-18 11:47:06', '2023-04-18 11:47:06'),
(2, 'Orange Money', '+243859034567', '2023-04-18 11:51:35', '2023-04-18 11:51:35'),
(3, 'M-PESA', '+2438190347894', '2023-04-18 11:51:57', '2023-04-18 11:51:57'),
(4, 'Compte Bancaire USD', '0093746578374655', '2023-04-18 11:52:36', '2023-04-18 12:23:49'),
(5, 'Compte Bancaire CDF', '007H453762348980', '2023-04-18 11:53:00', '2023-04-18 12:15:00');

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `details`
--

INSERT INTO `details` (`id`, `email`, `telephone`, `adresse`, `img1`, `title1`, `img2`, `title2`, `img3`, `title3`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'info@iamr.com', '+234 898 345 109', 'Avenue Hypodrome, Q. Ndendere, C. Ibanda, Ville de Bukavu en RDC', '1681820542.png', 'La santé c\'est notre priorité', '1681744155.webp', 'Sensibilisation de la population', '1681744179.webp', 'Valorisation des agents soignants', 'https://www.facebook.com/iamr.asbl.3', 'https://twitter.com/aimr', 'https://linkedin.com/aimr', 'https://youtube.com/@aimr', NULL, '2023-04-18 12:27:11');

-- --------------------------------------------------------

--
-- Structure de la table `expertises`
--

CREATE TABLE `expertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nos domaines d’Expertise',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L’histoire d’ALIMA commence en 2009 au Niger. Alors que l’ensemble du corps médical observe un pic alarmant de malnutrition aiguë et que le taux de mortalité infantile augmente, les structures de prise en charge de la malnutrition se font de plus en plus rares.',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `expertises`
--

INSERT INTO `expertises` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nos domaines d’Expertise', 'L’histoire d’ALIMA commence en 2009 au Niger. Alors que l’ensemble du corps médical observe un pic alarmant de malnutrition aiguë et que le taux de mortalité infantile augmente, les structures de prise en charge de la malnutrition se font de plus en plus rares.', '1681631035.webp', NULL, '2023-04-16 06:43:55'),
(2, 'Fièvre Hémoragique Virale', 'Fièvre Hémoragique virale', '1681631053.webp', '2023-04-15 18:21:27', '2023-04-16 06:44:13'),
(3, 'Malnutrition Aigue', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Près d’un enfant de moins de cinq ans sur deux meurt des conséquences de la malnutrition dans le monde, selon l’Organisation mondiale de la Santé. Chez ceux qui survivent, elle laisse des séquelles durables : infirmités, vulnérabilité chronique aux maladies, handicap intellectuel…&nbsp;</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Pourtant, elle est traitable et évitable. Bien qu’il existe un traitement efficace, 80 % des enfants malnutris n’y ont pas accès (source : The Lancet Global Health)<span style=\"font-weight: bolder;\">.&nbsp;</span>C’est pourquoi ALIMA a décidé d’agir afin de soigner davantage d’enfants.</p>', '1681631077.webp', '2023-04-15 18:26:15', '2023-04-16 06:44:37'),
(4, 'Recherches et Innovation', '<span style=\"color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Certaines maladies et problématiques souffrent d’un déficit de recherche, notamment dans les pays à ressources limitées. Seuls 3,6 % des essais cliniques dans le monde sont menés sur le continent africain (clinicaltrials.gov). Il est essentiel pour les pays à faibles revenus, comme pour les acteurs de l’aide humanitaire, de pouvoir s’appuyer sur une recherche ancrée localement afin de mieux soigner les populations. C’est pour cela qu’ALIMA s’est engagée à développer des projets faisant le lien entre la recherche médicale et l’action humanitaire en Afrique.</span>', '1681631006.webp', '2023-04-15 18:34:04', '2023-04-16 06:43:26'),
(5, 'Information des soignants', 'Information des soignants', '1681631102.webp', '2023-04-15 18:34:51', '2023-04-16 06:45:02'),
(7, 'Santé Maternelle', 'La santé maternelle est importante', '1681719606.webp', '2023-04-17 07:20:08', '2023-04-17 07:20:08');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2023_04_11_150250_create_categories_table', 1),
(20, '2023_04_11_150309_create_blogs_table', 1),
(21, '2023_04_12_115713_create_apropos_table', 1),
(22, '2023_04_12_171057_create_expertises_table', 2),
(23, '2023_04_17_084105_create_zones_table', 3),
(24, '2023_04_17_140157_create_details_table', 4),
(25, '2023_04_18_114055_create_comptes_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$wp0sVynU9oVwzQ5TBeho4u.eBwE8q/lPDOwt7N6XPSQ.BoqRR6x9q', 'user', NULL, '2023-04-12 11:51:56', '2023-04-12 11:51:56');

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `zones`
--

INSERT INTO `zones` (`id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Kamituga', 'kamituga', 'Kamituga<span style=\"color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">&nbsp;en 2020, 6,2 millions de personnes avaient besoin d’une assistance humanitaire. À l’Extrême-Nord du pays, les exactions des groupes armés ont engendré la nécessité d’apporter une aide d’urgence à 1,2 million de personnes. Dans les régions du Nord-Ouest et du Sud-Ouest, l’insurrection des groupes séparatistes a causé le déplacement de près de 410 000 personnes.²</span><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’ arrivée de la COVID-19 en mars 2020 a également exacerbé les besoins des populations, déjà touchées par la crise sécuritaire.</p>', '1681723851.webp', '2023-04-17 08:16:12', '2023-04-17 08:30:51'),
(2, 'Kitutu', 'kitutu', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Au Cameroun en 2020, 6,2 millions de personnes avaient besoin d’une assistance humanitaire. À l’Extrême-Nord du pays, les exactions des groupes armés ont engendré la nécessité d’apporter une aide d’urgence à 1,2 million de personnes. Dans les régions du Nord-Ouest et du Sud-Ouest, l’insurrection des groupes séparatistes a causé le déplacement de près de 410 000 personnes.²</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’ arrivée de la COVID-19 en mars 2020 a également exacerbé les besoins des populations, déjà touchées par la crise sécuritaire.</p>', '1681723101.webp', '2023-04-17 08:18:21', '2023-04-17 08:18:21'),
(3, 'Uvira', 'uvira', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Au Cameroun en 2020, 6,2 millions de personnes avaient besoin d’une assistance humanitaire. À l’Extrême-Nord du pays, les exactions des groupes armés ont engendré la nécessité d’apporter une aide d’urgence à 1,2 million de personnes. Dans les régions du Nord-Ouest et du Sud-Ouest, l’insurrection des groupes séparatistes a causé le déplacement de près de 410 000 personnes.²</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’ arrivée de la COVID-19 en mars 2020 a également exacerbé les besoins des populations, déjà touchées par la crise sécuritaire.</p>', '1681723120.webp', '2023-04-17 08:18:40', '2023-04-17 08:18:40'),
(4, 'Mwenga', 'mwenga', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Au Cameroun en 2020, 6,2 millions de personnes avaient besoin d’une assistance humanitaire. À l’Extrême-Nord du pays, les exactions des groupes armés ont engendré la nécessité d’apporter une aide d’urgence à 1,2 million de personnes. Dans les régions du Nord-Ouest et du Sud-Ouest, l’insurrection des groupes séparatistes a causé le déplacement de près de 410 000 personnes.²</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’ arrivée de la COVID-19 en mars 2020 a également exacerbé les besoins des populations, déjà touchées par la crise sécuritaire.</p>', '1681723150.webp', '2023-04-17 08:19:10', '2023-04-17 08:19:10'),
(5, 'Bunyakiri', 'bunyakiri', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Au Cameroun en 2020, 6,2 millions de personnes avaient besoin d’une assistance humanitaire. À l’Extrême-Nord du pays, les exactions des groupes armés ont engendré la nécessité d’apporter une aide d’urgence à 1,2 million de personnes. Dans les régions du Nord-Ouest et du Sud-Ouest, l’insurrection des groupes séparatistes a causé le déplacement de près de 410 000 personnes.²</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’ arrivée de la COVID-19 en mars 2020 a également exacerbé les besoins des populations, déjà touchées par la crise sécuritaire.</p>', '1681723171.webp', '2023-04-17 08:19:31', '2023-04-17 08:19:31'),
(6, 'Fizi', 'fizi', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Au Cameroun en 2020, 6,2 millions de personnes avaient besoin d’une assistance humanitaire. À l’Extrême-Nord du pays, les exactions des groupes armés ont engendré la nécessité d’apporter une aide d’urgence à 1,2 million de personnes. Dans les régions du Nord-Ouest et du Sud-Ouest, l’insurrection des groupes séparatistes a causé le déplacement de près de 410 000 personnes.²</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’ arrivée de la COVID-19 en mars 2020 a également exacerbé les besoins des populations, déjà touchées par la crise sécuritaire.</p>', '1681723201.webp', '2023-04-17 08:20:01', '2023-04-17 08:20:01'),
(7, 'Shabunda', 'shabunda', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Au Cameroun en 2020, 6,2 millions de personnes avaient besoin d’une assistance humanitaire. À l’Extrême-Nord du pays, les exactions des groupes armés ont engendré la nécessité d’apporter une aide d’urgence à 1,2 million de personnes. Dans les régions du Nord-Ouest et du Sud-Ouest, l’insurrection des groupes séparatistes a causé le déplacement de près de 410 000 personnes.²</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’ arrivée de la COVID-19 en mars 2020 a également exacerbé les besoins des populations, déjà touchées par la crise sécuritaire.</p>', '1681723218.webp', '2023-04-17 08:20:18', '2023-04-17 08:20:18'),
(8, 'Baraka', 'baraka', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Au Cameroun en 2020, 6,2 millions de personnes avaient besoin d’une assistance humanitaire. À l’Extrême-Nord du pays, les exactions des groupes armés ont engendré la nécessité d’apporter une aide d’urgence à 1,2 million de personnes. Dans les régions du Nord-Ouest et du Sud-Ouest, l’insurrection des groupes séparatistes a causé le déplacement de près de 410 000 personnes.²</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’ arrivée de la COVID-19 en mars 2020 a également exacerbé les besoins des populations, déjà touchées par la crise sécuritaire.</p>', '1681723249.webp', '2023-04-17 08:20:49', '2023-04-17 08:20:49'),
(9, 'Kimbi Lulenge', 'kimbi-lulenge', '<p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Au Cameroun en 2020, 6,2 millions de personnes avaient besoin d’une assistance humanitaire. À l’Extrême-Nord du pays, les exactions des groupes armés ont engendré la nécessité d’apporter une aide d’urgence à 1,2 million de personnes. Dans les régions du Nord-Ouest et du Sud-Ouest, l’insurrection des groupes séparatistes a causé le déplacement de près de 410 000 personnes.²</p><p style=\"margin-bottom: 0.9rem; color: rgb(31, 31, 31); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">L’ arrivée de la COVID-19 en mars 2020 a également exacerbé les besoins des populations, déjà touchées par la crise sécuritaire.</p>', '1681723287.webp', '2023-04-17 08:21:27', '2023-04-17 08:21:27');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apropos`
--
ALTER TABLE `apropos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `expertises`
--
ALTER TABLE `expertises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `zones_slug_unique` (`slug`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apropos`
--
ALTER TABLE `apropos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `expertises`
--
ALTER TABLE `expertises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
