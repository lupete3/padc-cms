-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 26 avr. 2024 à 17:23
-- Version du serveur : 8.0.30
-- Version de PHP : 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `padc`
--
CREATE DATABASE IF NOT EXISTS `padc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `padc`;

-- --------------------------------------------------------

--
-- Structure de la table `apropos`
--

CREATE TABLE `apropos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apropos` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apropos`
--

INSERT INTO `apropos` (`id`, `title`, `apropos`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Le Programme d’Appui au Développement communautaire est une Organisation Non Gouvernementale Humanitaire et de Développement, apolitique et non confessionnelle, sans but lucratif, créé en 2009.', '<h4 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-weight: 900; color: green; font-size: 20px;\">Presentation de l\'organisation</h4><br style=\"margin: 0px; padding: 0px; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 10px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 20px; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><mark style=\"margin: 0px; padding: 0.1875em; background: rgb(222, 255, 222); border-radius: 5px;\">a) Création et dénomination:</mark>&nbsp;L’organisation PADC RDCongo (Programme d’Appui au Développement Communautaire) est une Organisation Non Gouvernementale congolaise. Elle a été créée à Goma dans la Province du Nord-Kivu, en République Démocratique du Congo, le 7 février 2009, conformément à la loi no 004/2001 du 20 juillet 2001 portant dispositions générales relatives aux associations sans but lucratif et aux établissements d\'utilité publique. C’est une Organisation Non Gouvernementale de Humanitaire et de Développement, apolitique et non confessionnelle.</p><br style=\"margin: 0px; padding: 0px; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 10px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 20px; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><mark style=\"margin: 0px; padding: 0.1875em; background: rgb(222, 255, 222); border-radius: 5px;\">b) Vision:</mark>&nbsp;Les communautés locales vivant dans un environnement propice et par l\'auto-prise en charge, dans un milieu d\'Etat de droit, sont dans des bonnes conditions de vie suite à l\'amélioration des revenus dans les ménages.</p><br style=\"margin: 0px; padding: 0px; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 10px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 20px; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><mark style=\"margin: 0px; padding: 0.1875em; background: rgb(222, 255, 222); border-radius: 5px;\">c) Missions:</mark>&nbsp;Pour atteindre sa vision, l’organisation se fixe les missions ci-après : 1. Mettre en œuvre des mécanismes de réduction de la pauvreté par l\'accompagnement des initiatives locales de promotion socio-économique, 2. La défense des droits humains en général et en particulier les droits de la femme, la lutte contre toute sorte de violence faite à la femme et la promotion de l’égalité des sexes, 3. Contribuer aux efforts de protection de l\'environnement par la mise sur pied des activités relatives à la protection et à la réhabilitation des écosystèmes et des conditions environnementales, 4. Monitoring de protection et contribution aux efforts de respect des droits humains, par un programme de plaidoyer, l\'accompagnement juridique et judiciaire des communautés locales victimes des violations de leurs droits (femmes et enfants) et le renforcement de la citoyenneté responsable à la base, 5. La sécurité alimentaire, la lutte contre la malnutrition, l\'amélioration de l\'habitat, eau-hygiène et assainissement, la réhabilitation et la construction des infrastructures locales et communautaires.</p>', '1714135712.jpg', NULL, '2024-04-26 12:08:30');

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'PROJET D’APPUI A LA PRODUCTION AGRICOLE DE 300 MENAGES VULNERABLES DE CHAMINUNU DANS LE GROUPEMENT DE KALONGE EN TERRITOIRE DE KALEHE', 'projet-dappui-a-la-production-agricole-de-300-menages-vulnerables-de-chaminunu-dans-le-groupement-de-kalonge-en-territoire-de-kalehe', '<span style=\"font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px;\">Ce projet est un appui aux agriculteurs de la localité de CHAMINUNU dont 70% des femmes en semences de chou pommé, chou-fleur, oignon, aubergine, poireau, amarantes en vue de l’amélioration de leur sécurité alimentaire.</span>', '1714137230.jpg', 1, '2024-04-26 11:13:50', '2024-04-26 11:13:50'),
(2, 'PROJET DE PROMOTION DE LA SANTE BOVINE PAR L’IMPLANTATION DES COULOIRS D’ASPERSION DANS LA LOCALITE DE CHAMINUNU EN TERRITOIRE DE KALEHE', 'projet-de-promotion-de-la-sante-bovine-par-limplantation-des-couloirs-daspersion-dans-la-localite-de-chaminunu-en-territoire-de-kalehe', '<span style=\"font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px;\">Ce projet vise l’implantation de 10 couloirs pilotes d’appui à l’amélioration des conditions sanitaires des bovins entretenus par les éleveurs locaux, particulièrement les femmes éleveuses de la localité de CHAMINUNU dans le Groupement de Kalonge, impuissants face aux maladies et vecteurs qui déciment leurs cheptels, en l’occurrence les bovins. L’objectif est de faire de l’élevage une ressource potentielle pour l’autonomisation des femmes et des éleveurs en général.</span>', '1714137350.jpg', 1, '2024-04-26 11:15:50', '2024-04-26 11:15:50'),
(3, 'Activités de sensibilisation des élèves sur les maladies des mains sales dans la chefferie de BWITO, en territoire de RUTSHURU au Nord-Kivu', 'activites-de-sensibilisation-des-eleves-sur-les-maladies-des-mains-sales-dans-la-chefferie-de-bwito-en-territoire-de-rutshuru-au-nord-kivu', '<span style=\"font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px;\">Dans le but de prévenir les maladies des mains sales et rompre la chaîne de transmission de celles-ci, PADC RDCongo organise régulièrement des sensibilisations dans les milieux scolaires pour informer les enfants sur les mécanismes de prévention des maladies des mains sales.</span>', '1714137384.jpg', 1, '2024-04-26 11:16:24', '2024-04-26 11:16:24');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Projet', 'projet', '2024-04-26 11:10:25', '2024-04-26 11:10:25');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE `details` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title12` text COLLATE utf8mb4_unicode_ci,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title22` text COLLATE utf8mb4_unicode_ci,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title32` text COLLATE utf8mb4_unicode_ci,
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

INSERT INTO `details` (`id`, `title`, `description`, `email`, `telephone`, `adresse`, `img1`, `title1`, `title12`, `img2`, `title2`, `title22`, `img3`, `title3`, `title32`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'Les communautés locales vivant dans un environnement propice et par l\'auto-prise en charge', 'dans un milieu d\'Etat de droit, sont dans des bonnes conditions de vie suite à l\'amélioration des revenus dans les ménages.', 'info@padc-rdcongo.org', '+243 (0) 999757050  +243 (0) 999757050', '№ 259, Boulevard P.E Lumumba, Commune d’Ibanda, Quartier Nyalukemba, Bukavu/RD Congo.', '1714128688.jpg', 'PADC RDCONGO', 'Aider les communautés autour du monde!', '1714128700.jpg', 'PADC RDCONGO', 'Aider les communautés autour du monde!', '1714128603.jpg', 'PADC RDCONGO', 'Aider les communautés autour du monde!', 'https://web.facebook.com/padcrdc', 'file:///E:/PADC/Home%20page.html#', 'https://www.linkedin.com/in/padc-rcongo-b1b3032b7/', 'file:///E:/PADC/Home%20page.html#', NULL, '2024-04-26 15:22:02');

-- --------------------------------------------------------

--
-- Structure de la table `expertises`
--

CREATE TABLE `expertises` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `expertises`
--

INSERT INTO `expertises` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Protection générale (et monitoring)', 'Protection générale (et monitoring)', NULL, '2024-04-26 13:10:54', '2024-04-26 13:10:54'),
(2, 'Droits humains', 'Droits humains', NULL, '2024-04-26 13:11:23', '2024-04-26 13:11:23'),
(3, 'Sécurité alimentaire', 'Sécurité alimentaire', NULL, '2024-04-26 13:11:41', '2024-04-26 13:11:41'),
(4, 'Education', 'Education', NULL, '2024-04-26 13:11:57', '2024-04-26 13:11:57'),
(5, 'Santé', 'Santé', NULL, '2024-04-26 13:12:09', '2024-04-26 13:12:09'),
(6, 'Environnement et Développement durable', 'Environnement et Développement durable', NULL, '2024-04-26 13:12:26', '2024-04-26 13:12:26');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Nos Domaines et zones d\'intervention', 'Le PADC RDCongo intervient dans les domaines suivants : Protection générale (et monitoring) ; Droits humains ; Sécurité alimentaire ; Education ; Santé ; Environnement et Développement durable.\r\n\r\nL’organisation intervient dans trois provinces à savoir : province du Sud-Kivu, province du Nord-Kivu et province de l’Ituri, avec des antennes locales dans les territoires et villes de ces trois provinces.', '2024-04-26 14:14:41', '2024-04-26 14:14:41'),
(2, 'Nos considérations éthiques', 'L\'administration et la comptabilité de PADC RDCongo sont soumises à une série d\'enquêtes internes, de procédures d\'audit interne et de surveillance. Elles sont également soumises à un audit externe par des cabinets d\'audit qui ne sont impliqués dans aucun conflit d\'intérêt avec l\'organisation. Ces audits externes se font tous les ans et particulièrement à chaque exécution de projet. Dans un tel contexte, compte tenu de l\'importance de ses domaines d\'activités et des projets que l’organisation exécute, l’organisation prévient ainsi les risques liés à la corruption et à la fraude, ayant souvent lieu dans les situations de besoin et d\'urgence.', '2024-04-26 14:15:06', '2024-04-26 14:15:06'),
(3, 'Notre politique en matière de PSA', 'En matière de PROTECTION CONTRE L’EXPLOITATION ET LES ABUS SEXUELS (PSEA), PADC RDCongo applique une tolérance ZERO contre l’exploitation et les abus sexuels. L’ONG a renforcé les capacités de ses staffs contre les exploitations et abus sexuels. Dans chaque bureau et sous-bureau de PADC RDCongo, des mécanismes de plainte sont opérationnels et des points focaux ciblés. Des boîtes à plaintes sont installés pour que toute victime puisse y déposer sa plainte en cas d’abus, violence ou exploitation sexuelle. L’organisation intègre la thématique sur l’exploitation et abus sexuels au cours de ses activités dans ses zones d’interventions.', '2024-04-26 14:15:36', '2024-04-26 14:15:36');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_11_150250_create_categories_table', 1),
(6, '2023_04_11_150309_create_blogs_table', 1),
(7, '2023_04_12_115713_create_apropos_table', 1),
(8, '2023_04_12_171057_create_expertises_table', 1),
(9, '2023_04_17_084105_create_zones_table', 1),
(10, '2023_04_17_140157_create_details_table', 1),
(11, '2023_04_18_114055_create_comptes_table', 1),
(12, '2024_04_26_154934_create_faqs_table', 2),
(14, '2024_04_26_164036_create_partenaires_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` bigint UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1714150832.png', '2024-04-26 15:00:32', '2024-04-26 15:00:32'),
(2, '1714150854.png', '2024-04-26 15:00:54', '2024-04-26 15:00:54'),
(3, '1714150864.png', '2024-04-26 15:01:04', '2024-04-26 15:01:04'),
(4, '1714150871.png', '2024-04-26 15:01:11', '2024-04-26 15:01:11');

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$xOsmUtsYybtR1/ZEMoGDmulS8P76I8YCw6FMg2o8DAHbT0.Vrh.Ki', 'user', NULL, '2024-04-26 08:43:28', '2024-04-26 08:43:28');

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

CREATE TABLE `zones` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `zones`
--

INSERT INTO `zones` (`id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mission 1', 'mission-1', '<span style=\"font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 13px;\">1. Mettre en œuvre des mécanismes de réduction de la pauvreté par l\'accompagnement des initiatives locales de promotion socio-économique,</span>', NULL, '2024-04-26 10:53:21', '2024-04-26 10:53:21'),
(2, 'Mission 2', 'mission-2', '<span style=\"font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 13px;\">2. La défense des droits humains en général et en particulier les droits de la femme, la lutte contre toute sorte de violence faite à la femme et la promotion de l’égalité des sexes,</span>', NULL, '2024-04-26 10:53:56', '2024-04-26 10:53:56'),
(3, 'Mission', 'mission', '<span style=\"font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 13px;\">3. Contribuer aux efforts de protection de l\'environnement par la mise sur pied des activités relatives à la protection et à la réhabilitation des écosystèmes et des c onditions environnementales,</span>', NULL, '2024-04-26 10:54:31', '2024-04-26 10:54:31'),
(6, 'Mission 5', 'mission-5', '<span style=\"font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 13px;\">4. Monitoring de protection et contribution aux efforts de respect des droits humains, par un programme de plaidoyer, l\'accompagnement juridique et judiciaire des communautés locales victimes des violations de leurs droits (femmes et enfants) et le renforcement de la citoyenneté responsable à la base,</span>', NULL, '2024-04-26 10:55:25', '2024-04-26 10:55:25'),
(7, 'Mission 6', 'mission-6', '<span style=\"font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 13px;\">5. La sécurité alimentaire, la lutte contre la malnutrition, l\'amélioration de l\'habitat, eau-hygiène et assainissement, la réhabilitation et la construction des infrastructures locales et communautaires.</span>', NULL, '2024-04-26 10:55:55', '2024-04-26 10:55:55');

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
-- Index pour la table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `expertises`
--
ALTER TABLE `expertises`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
