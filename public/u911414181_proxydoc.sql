-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 août 2022 à 22:13
-- Version du serveur : 10.5.12-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u911414181_proxydoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnements`
--

CREATE TABLE `abonnements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monaie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `abonnements`
--

INSERT INTO `abonnements` (`id`, `nom`, `description`, `duree`, `temps`, `prix`, `monaie`, `created_at`, `updated_at`) VALUES
(1, 'Ordinaire', 'Rerum est reprehenderit atque illo quidem ea. Aut cumque id impedit qui. Sed veritatis perferendis in rerum at in. Nihil sit veniam veritatis rerum ipsum et.', '3', 'Mois', '1', 'USD', '2022-05-13 09:33:49', '2022-05-13 09:33:49'),
(2, 'standars', 'Consequuntur temporibus velit et. Cum et accusantium in omnis harum cumque sit. Voluptas praesentium ea non laudantium dolorem blanditiis amet.', '2', 'Ans', '2', 'USD', '2022-05-13 09:33:49', '2022-05-13 09:33:49'),
(3, 'Premium', 'Consequuntur temporibus velit et. Cum et accusantium in omnis harum cumque sit. Voluptas praesentium ea non laudantium dolorem blanditiis amet.', '2', 'Ans', '3', 'USD', '2022-05-13 09:33:49', '2022-05-13 09:33:49'),
(4, 'Business', 'Consequuntur temporibus velit et. Cum et accusantium in omnis harum cumque sit. Voluptas praesentium ea non laudantium dolorem blanditiis amet.', '2', 'Ans', '5', 'USD', '2022-05-13 09:33:49', '2022-05-13 09:33:49');

-- --------------------------------------------------------

--
-- Structure de la table `abonnement_users`
--

CREATE TABLE `abonnement_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `abonnement_id` bigint(20) UNSIGNED NOT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `etat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `abonnement_users`
--

INSERT INTO `abonnement_users` (`id`, `user_id`, `abonnement_id`, `date_debut`, `date_fin`, `etat`, `transaction_id`, `created_at`, `updated_at`) VALUES
(4, 8, 3, NULL, NULL, 'En attente', '8.bDxjX3vQfj', '2022-05-21 12:01:16', '2022-07-27 00:38:02'),
(5, 8, 2, NULL, NULL, 'Payer', '8.N0aKQ3lRME', '2022-05-21 15:18:20', '2022-05-21 15:23:05'),
(6, 8, 1, NULL, NULL, 'En attente', '8.MY6EttfzMt', '2022-05-22 00:45:12', '2022-05-22 00:45:12'),
(7, 10, 3, NULL, NULL, 'En attente', '10.eEpvaQsnIj', '2022-06-25 21:42:06', '2022-06-25 21:43:39'),
(8, 11, 1, NULL, NULL, 'REFUSED', '11.7R0PpmERc7', '2022-07-29 10:50:07', '2022-07-29 10:50:37'),
(9, 11, 2, NULL, NULL, 'REFUSED', '11.QfDtmjCsTo', '2022-07-29 11:16:44', '2022-07-29 11:22:00');

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE `achats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` enum('Payer','En attente') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'En attente',
  `moyenPaiement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `actes`
--

CREATE TABLE `actes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actes`
--

INSERT INTO `actes` (`id`, `nom`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Radio', 'Aut rem inventore quia ducimus ut quas. Aut non dolor incidunt qui deleniti. Quam in omnis eaque et occaecati. Ducimus et saepe necessitatibus non est. Quos sit numquam earum rerum quia quia.', '2022-05-13 09:35:26', '2022-05-13 09:35:26'),
(2, 'Radio', 'Quae esse non molestiae quo eligendi qui et. Voluptatem et magni ipsam iure nobis quo. Est optio itaque ut quia voluptatem quo minus. Voluptatem quas in voluptas ipsum maxime dolor minus.', '2022-05-13 09:35:26', '2022-05-13 09:35:26'),
(3, 'acouchement', 'Quidem quia voluptatem id exercitationem animi repudiandae. Maiores omnis ipsam facilis nisi provident perferendis repudiandae. Qui dolores voluptatem et repudiandae excepturi aliquid non.', '2022-05-13 09:35:26', '2022-05-13 09:35:26'),
(4, 'Ophtamologie', 'Vel est alias eligendi sequi. Quo et dolor sed. Officiis quis possimus accusantium ipsum.', '2022-05-13 09:35:26', '2022-05-13 09:35:26'),
(5, 'premiers soins', 'Enim autem sed iusto placeat rem. Ut praesentium asperiores aspernatur sunt quod dolorum. Et non et odit sint enim eius.', '2022-05-13 09:36:17', '2022-05-13 09:36:17'),
(6, 'Radio', 'Possimus qui sunt recusandae. Itaque iure repudiandae perspiciatis sunt. Animi iusto illum impedit nobis vel aspernatur. Cum qui illo aut maiores maxime explicabo.', '2022-05-13 09:36:17', '2022-05-13 09:36:17'),
(7, 'premiers soins', 'Pariatur soluta error facilis cupiditate minus iste assumenda esse. Illo labore quos assumenda totam. Est quibusdam ut reiciendis.', '2022-05-13 09:36:17', '2022-05-13 09:36:17'),
(8, 'consultation générale', 'Qui aut unde velit debitis illo et nesciunt nam. Et repellat dicta ea occaecati voluptas incidunt sit. Ut sint magni deserunt provident distinctio tempora. Sequi dolore beatae dicta nam aliquam a.', '2022-05-13 09:36:17', '2022-05-13 09:36:17'),
(9, 'Ophtamologie', 'Quis aut consequuntur sint suscipit quo. Vel perferendis odit saepe quia quis accusamus cupiditate.', '2022-05-13 09:36:17', '2022-05-13 09:36:17'),
(10, 'dentisterie', 'Nihil aliquam doloribus quisquam dolore. Neque repellendus dolores ullam nesciunt est voluptatum. Iste deleniti aut accusamus quos. Non voluptas harum modi expedita quaerat.', '2022-05-13 09:36:18', '2022-05-13 09:36:18'),
(11, 'consultation générale', 'Qui et aperiam ut quia. Architecto at eum enim sunt eos. Tempore nihil ut dolorem ducimus quos expedita.', '2022-05-13 09:36:18', '2022-05-13 09:36:18'),
(12, 'Ophtamologie', 'Quaerat harum cumque dolorem nam eum. Nam adipisci esse odit. Aliquid saepe provident illo similique est. At quo iure ipsam doloribus iste.', '2022-05-13 09:36:18', '2022-05-13 09:36:18'),
(13, 'dentisterie', 'In dolore beatae quibusdam accusantium unde. Quis eos ea animi quo. Dolorem quis debitis quo necessitatibus. Natus recusandae debitis minus qui iste nulla.', '2022-05-13 09:36:18', '2022-05-13 09:36:18'),
(14, 'acouchement', 'Quaerat quos vitae rem reprehenderit sequi. Dolor ut illo ut quo architecto ipsa laborum. Autem optio soluta reprehenderit voluptas et.', '2022-05-13 09:36:18', '2022-05-13 09:36:18'),
(15, 'consultation', 'Omnis harum iusto impedit aperiam quos. Et non possimus similique numquam. Ea aut laboriosam porro rerum sapiente. Rem beatae et enim maxime.', '2022-05-13 09:36:18', '2022-05-13 09:36:18'),
(16, 'acouchement', 'Et repudiandae cumque aut enim. Aut sit nam veniam quam modi illo unde eum. Est iste modi corrupti dicta. Aperiam consequatur quasi sapiente.', '2022-05-13 09:36:18', '2022-05-13 09:36:18'),
(17, 'acouchement', 'Nesciunt voluptatibus totam eos voluptatem. Est vel est non ut doloremque nam. Quas voluptatem illo quas esse nesciunt. Et laudantium eum illo ut ea voluptatem sit. Illum exercitationem quas dolor pariatur neque ea.', '2022-05-13 09:36:18', '2022-05-13 09:36:18'),
(18, 'consultation générale', 'Repudiandae ut distinctio adipisci ipsam vel ipsum. Nisi non corporis consequatur asperiores. Dicta quibusdam temporibus quod officiis perspiciatis.', '2022-05-13 09:36:18', '2022-05-13 09:36:18'),
(19, 'consultation générale', 'Exercitationem amet tempore aliquam. Similique est harum dolores omnis perferendis. Ipsum placeat libero nihil. Quasi qui voluptates id sint.', '2022-05-13 09:36:18', '2022-05-13 09:36:18'),
(20, 'premiers soins', 'Eos corrupti id laborum reprehenderit. Illo eos repellendus ex. Accusantium provident voluptatem quisquam velit. Hic qui quo hic repellat omnis numquam ipsa nemo.', '2022-05-13 09:36:19', '2022-05-13 09:36:19'),
(21, 'consultation', 'Molestias dolorem laboriosam deserunt. In provident quidem consequatur dolorum quae. Aut velit sit quia autem animi facilis voluptates. Nostrum omnis animi vero nesciunt voluptate.', '2022-05-13 09:36:19', '2022-05-13 09:36:19'),
(22, 'acouchement', 'Aut aspernatur perferendis voluptatum officia voluptas aut. Nam distinctio rerum quia rerum dolores minus eius. Deserunt quibusdam id repellat nisi facilis ab. Quas sequi sint numquam molestias esse neque.', '2022-05-13 09:36:19', '2022-05-13 09:36:19'),
(23, 'consultation', 'Necessitatibus perspiciatis et eveniet at consequatur sunt deleniti cum. Sed molestias ea consequatur accusamus dolorem. Perspiciatis qui rerum ullam consequatur nihil.', '2022-05-13 09:36:19', '2022-05-13 09:36:19'),
(24, 'Radio', 'Delectus ex a sit deserunt error ab fuga. Et ut inventore numquam dolorem corrupti dolorem. Eaque enim nemo ut non amet vel.', '2022-05-13 09:36:19', '2022-05-13 09:36:19'),
(25, 'dermatologue', 'Ex animi at molestias aperiam ea aspernatur. Sed quia amet molestiae velit. Illo vero minima ab dolorem tempore qui. Quod sint et qui ut sed aliquid tempore eligendi.', '2022-05-13 09:36:19', '2022-05-13 09:36:19'),
(26, 'dermatologue', 'Voluptatem accusamus est fugit dolor et mollitia. Aut debitis id expedita quisquam minus. Et occaecati eos est similique tempore omnis neque. Asperiores dignissimos aliquid sint ut. Dolorem nobis vel voluptas doloribus.', '2022-05-13 09:36:19', '2022-05-13 09:36:19'),
(27, 'consultation générale', 'Cumque autem nihil tenetur. Adipisci minus natus quae sit. Qui quam officiis cum commodi tempore quae odio.', '2022-05-13 09:36:19', '2022-05-13 09:36:19'),
(28, 'Ophtamologie', 'Saepe corporis quaerat rem itaque sint expedita totam. Fugit qui ut labore voluptate vero ea quo. Qui doloribus placeat et veritatis ad excepturi. Minus dicta ex qui ducimus saepe corporis sint facere.', '2022-05-13 09:36:19', '2022-05-13 09:36:19'),
(29, 'Ophtamologie', 'Sed cum voluptas repudiandae nisi vel repellendus expedita. Odio eveniet modi aliquid laboriosam. Recusandae eum ut id tempore.', '2022-05-13 09:36:19', '2022-05-13 09:36:19'),
(30, 'premiers soins', 'Natus sunt minima sit et repudiandae magnam. Possimus voluptatibus quo et nemo nobis excepturi. Magni earum corporis aut exercitationem quibusdam.', '2022-05-13 09:36:20', '2022-05-13 09:36:20'),
(31, 'dermatologue', 'Possimus non nulla fugit et consequatur. Eaque magnam qui molestiae rerum illo.', '2022-05-13 09:36:20', '2022-05-13 09:36:20'),
(32, 'Radio', 'Temporibus corrupti incidunt odit doloremque beatae beatae. Et magni voluptate corporis et. Dolorum voluptatem quae facere quia voluptatibus ipsum. Molestiae perspiciatis recusandae amet consequuntur est.', '2022-05-13 09:36:20', '2022-05-13 09:36:20'),
(33, 'consultation', 'Nam qui doloribus fugiat nemo sint et. Odio consectetur nisi incidunt totam sit cupiditate. Soluta dolor ea delectus. Provident amet eos eaque aut rerum.', '2022-05-13 09:36:20', '2022-05-13 09:36:20'),
(34, 'dermatologue', 'Voluptatem et nostrum placeat dolorum. Illo aperiam doloribus ea aperiam soluta et qui. Sequi commodi voluptatem consequatur qui quis eum. Quas molestias praesentium consectetur error nobis.', '2022-05-13 09:36:20', '2022-05-13 09:36:20');

-- --------------------------------------------------------

--
-- Structure de la table `acte_services`
--

CREATE TABLE `acte_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `acte_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `acte_services`
--

INSERT INTO `acte_services` (`id`, `acte_id`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 24, 1, '2022-05-13 10:14:30', '2022-05-13 10:14:30'),
(2, 11, 1, '2022-05-13 10:14:30', '2022-05-13 10:14:30'),
(3, 14, 1, '2022-05-13 10:14:30', '2022-05-13 10:14:30'),
(4, 11, 1, '2022-05-13 10:14:30', '2022-05-13 10:14:30'),
(5, 12, 1, '2022-05-13 10:14:30', '2022-05-13 10:14:30'),
(6, 26, 1, '2022-05-13 10:15:11', '2022-05-13 10:15:11'),
(7, 10, 1, '2022-05-13 10:15:12', '2022-05-13 10:15:12'),
(8, 10, 2, '2022-05-13 10:15:42', '2022-05-13 10:15:42'),
(9, 6, 2, '2022-05-13 10:15:42', '2022-05-13 10:15:42'),
(10, 29, 2, '2022-05-13 10:15:42', '2022-05-13 10:15:42'),
(11, 16, 2, '2022-05-13 10:15:43', '2022-05-13 10:15:43'),
(12, 25, 2, '2022-05-13 10:15:43', '2022-05-13 10:15:43'),
(13, 29, 3, '2022-05-13 10:16:09', '2022-05-13 10:16:09'),
(14, 24, 3, '2022-05-13 10:16:10', '2022-05-13 10:16:10'),
(15, 26, 3, '2022-05-13 10:16:10', '2022-05-13 10:16:10'),
(16, 26, 3, '2022-05-13 10:16:10', '2022-05-13 10:16:10'),
(17, 16, 3, '2022-05-13 10:16:10', '2022-05-13 10:16:10'),
(18, 18, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(19, 5, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(20, 28, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(21, 24, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(22, 15, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(23, 25, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(24, 5, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(25, 29, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(26, 26, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(27, 27, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(28, 6, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(29, 2, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(30, 1, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(31, 6, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(32, 12, 4, '2022-05-13 10:17:26', '2022-05-13 10:17:26'),
(33, 17, 4, '2022-05-13 10:17:27', '2022-05-13 10:17:27'),
(34, 17, 4, '2022-05-13 10:17:27', '2022-05-13 10:17:27'),
(35, 14, 4, '2022-05-13 10:17:27', '2022-05-13 10:17:27'),
(36, 23, 4, '2022-05-13 10:17:27', '2022-05-13 10:17:27'),
(37, 13, 4, '2022-05-13 10:17:27', '2022-05-13 10:17:27');

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('agent','admin','docteur') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'agent',
  `niveau` enum('1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `datenaissance` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `prenom`, `email`, `telephone`, `sexe`, `adresse`, `pays`, `ville`, `fonction`, `role`, `niveau`, `datenaissance`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'silas', NULL, 'silasjmas@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'agent', '1', NULL, NULL, '$2y$10$PintGoWftYRNplwsnyGWauVLexy8ruquJTwj8YhzL5utzsmLyRv/.', NULL, '2022-06-28 00:30:04', '2022-06-28 00:30:04');

-- --------------------------------------------------------

--
-- Structure de la table `categoriechems`
--

CREATE TABLE `categoriechems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `cover`, `description`, `created_at`, `updated_at`) VALUES
(11, 'Cardilogie', NULL, 'Nobis dignissimos consectetur quia deleniti enim non. Quia saepe eligendi ut aut vitae non. Voluptatem ratione quasi blanditiis. Et ea labore et labore.', '2022-07-04 23:36:06', '2022-07-04 23:36:06'),
(12, 'Ophtamologue', NULL, 'Nisi laboriosam molestiae unde iste. Tempore ea aperiam nulla omnis distinctio voluptas. Aspernatur fugit minus ipsam sunt hic. Et quia officia rerum tenetur eos voluptatum.', '2022-07-04 23:36:06', '2022-07-04 23:36:06'),
(13, 'Laboratoire', NULL, 'Reprehenderit amet at vero ut. Corrupti mollitia sed non illo dolor. Quia voluptatem odio consequatur impedit.', '2022-07-04 23:36:06', '2022-07-04 23:36:06'),
(14, 'Ginecologie', NULL, 'Rerum distinctio sit ad maiores quia debitis. Praesentium officia qui dicta culpa autem sit quo beatae.', '2022-07-04 23:36:07', '2022-07-04 23:36:07'),
(15, 'Dentisterie', NULL, 'Architecto doloremque est suscipit perferendis consequuntur aut. Nulla molestiae dicta non et. Tenetur id animi facilis deleniti in facilis ut.', '2022-07-04 23:36:07', '2022-07-04 23:36:07'),
(16, 'Sexologue', NULL, 'Enim aut nulla error non facilis voluptates nihil. Unde inventore fugit officiis molestias accusantium omnis. Velit eos est adipisci et. Officiis debitis est temporibus nihil excepturi sint velit.', '2022-07-04 23:36:07', '2022-07-04 23:36:07'),
(17, 'Radiologie', NULL, 'Quas est nesciunt fuga accusantium molestiae ducimus cum. Possimus totam expedita blanditiis repellat ducimus. Fugit est aut repellendus porro vero.', '2022-07-04 23:36:07', '2022-07-04 23:36:07'),
(18, 'Pediatrie', NULL, 'Reiciendis et modi tenetur ut. Cum suscipit cumque unde fugiat ut distinctio doloremque. Rerum repellendus fuga animi.', '2022-07-04 23:36:07', '2022-07-04 23:36:07'),
(19, 'Dermatologie', NULL, 'Expedita eos magni odit beatae. Ullam quis doloribus consequatur sit ab aut. Ut esse est fugit nesciunt dicta. Accusantium magnam nemo qui magni dolore.', '2022-07-04 23:36:07', '2022-07-04 23:36:07'),
(20, 'Nerologie', NULL, 'Corrupti nulla cumque repudiandae esse. Labore dolorum veritatis at tempore vero nobis cumque veniam. Architecto architecto cum est autem nemo. Omnis voluptatem tempore fugit animi.', '2022-07-04 23:36:07', '2022-07-04 23:36:07');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_produits`
--

CREATE TABLE `categorie_produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produit_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie_produits`
--

INSERT INTO `categorie_produits` (`id`, `produit_id`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 20, 20, '2022-07-04 23:45:15', '2022-07-04 23:45:15'),
(3, 21, 20, '2022-07-04 23:46:17', '2022-07-04 23:46:17'),
(4, 28, 11, '2022-07-04 23:46:17', '2022-07-04 23:46:17'),
(5, 31, 13, '2022-07-04 23:46:17', '2022-07-04 23:46:17'),
(6, 44, 14, '2022-07-04 23:46:17', '2022-07-04 23:46:17'),
(7, 19, 13, '2022-07-04 23:46:17', '2022-07-04 23:46:17'),
(8, 10, 19, '2022-07-04 23:46:17', '2022-07-04 23:46:17'),
(9, 26, 13, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(10, 48, 19, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(11, 16, 12, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(12, 13, 15, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(13, 40, 15, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(14, 26, 19, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(15, 12, 15, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(16, 29, 16, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(17, 43, 12, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(18, 33, 11, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(19, 40, 14, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(20, 34, 20, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(21, 43, 18, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(22, 16, 18, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(23, 41, 11, '2022-07-04 23:46:18', '2022-07-04 23:46:18'),
(24, 19, 18, '2022-07-04 23:46:19', '2022-07-04 23:46:19'),
(25, 6, 12, '2022-07-04 23:46:19', '2022-07-04 23:46:19'),
(26, 14, 17, '2022-07-04 23:46:19', '2022-07-04 23:46:19'),
(27, 16, 18, '2022-07-04 23:46:19', '2022-07-04 23:46:19'),
(28, 15, 20, '2022-07-04 23:46:19', '2022-07-04 23:46:19'),
(29, 32, 12, '2022-07-04 23:46:19', '2022-07-04 23:46:19'),
(30, 44, 17, '2022-07-04 23:46:19', '2022-07-04 23:46:19'),
(31, 2, 14, '2022-07-04 23:46:19', '2022-07-04 23:46:19'),
(32, 44, 13, '2022-07-04 23:46:19', '2022-07-04 23:46:19');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE `commune` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`id`, `nom`, `zone_id`, `created_at`, `updated_at`) VALUES
(1, 'LIMETE', 1, NULL, NULL),
(2, 'LEMBA', 1, NULL, NULL),
(3, 'KINTAMBO', 2, NULL, NULL),
(4, 'KIMBANSEKE', 2, NULL, NULL);

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
-- Structure de la table `livraisons`
--

CREATE TABLE `livraisons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `commune_id` bigint(20) UNSIGNED NOT NULL,
  `produit_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livraisons`
--

INSERT INTO `livraisons` (`id`, `etat`, `transaction_id`, `user_id`, `commune_id`, `produit_id`, `created_at`, `updated_at`) VALUES
(1, '0', '8.zt1RxhtOCG', 8, 2, 0, '2022-07-29 01:40:19', '2022-07-29 01:40:19'),
(2, '0', '8.75WWAzcokN', 8, 2, 0, '2022-07-29 01:47:48', '2022-07-29 01:47:48'),
(3, '0', '8.75WWAzcokN', 8, 2, 0, '2022-07-29 01:47:48', '2022-07-29 01:47:48'),
(4, '0', '11.RMkfVht1SV', 11, 3, 0, '2022-07-29 10:33:03', '2022-07-29 10:33:03'),
(5, '0', '11.dxRJ5F86NM', 11, 2, 0, '2022-07-29 13:34:41', '2022-07-29 13:34:41'),
(6, '1', '11.jdxmmiSpQH', 11, 3, 1, '2022-07-29 16:26:27', '2022-07-29 19:03:23'),
(7, '1', '11.jdxmmiSpQH', 11, 3, 3, '2022-07-29 16:26:27', '2022-07-29 18:49:26'),
(8, '1', '11.D8ZrJ8nJSB', 11, 3, 3, '2022-07-29 16:50:11', '2022-07-29 18:48:58'),
(9, '1', '11.gIzzK5gMx3', 11, 2, 14, '2022-07-29 18:52:36', '2022-07-29 19:03:08'),
(10, '1', '8.X8rCpvsn9y', 8, 3, 3, '2022-07-29 19:10:49', '2022-07-29 19:13:07'),
(11, '1', '12.ubBS4Z0Chp', 12, 2, 3, '2022-07-30 08:22:22', '2022-07-30 08:25:06');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_24_224528_create_services_table', 1),
(6, '2022_04_24_224728_create_abonnements_table', 1),
(7, '2022_04_24_224806_create_service_abonnements_table', 1),
(9, '2022_04_24_224956_create_admins_table', 1),
(10, '2022_04_25_230435_create_abonnement_users_table', 1),
(11, '2022_05_13_103911_create_actes_table', 1),
(12, '2022_05_13_104054_create_acte_services_table', 1),
(13, '2022_05_13_124002_create_paiements_table', 2),
(14, '2022_04_24_224933_create_achats_table', 3),
(15, '2022_06_28_025658_create_categoriechems_table', 4),
(16, '2022_07_04_234804_create_categories_table', 4),
(17, '2022_07_04_234929_create_produits_table', 4),
(18, '2022_07_04_235014_create_produit_users_table', 4),
(19, '2022_07_04_235810_create_categorie_produits_table', 4),
(20, '2022_07_05_000914_create_orders_table', 4),
(21, '2022_07_07_024927_create_shoppingcart_table', 5),
(22, '2022_07_26_150332_zone', 6),
(23, '2022_07_26_150404_commune', 6);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `montant` int(11) NOT NULL,
  `produits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moyenPaiement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operateur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reponse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `montant`, `produits`, `user_id`, `type`, `transaction_id`, `moyenPaiement`, `reference`, `token`, `operateur`, `message`, `description`, `customer_address`, `customer_city`, `customer_country`, `customer_state`, `customer_zip_code`, `reponse`, `created_at`, `updated_at`) VALUES
(1, 13, '2', 8, NULL, '8.zt1RxhtOCG', NULL, NULL, '20e82eecb4cef3c1be2653e5b1f0eeac62b7d8b5f431a3ba7cb64f5c3a2a526420d12827259cf4c798a6f6b7ab170e1f97cd8cdb82641f', 'MOBILE_MONEY', NULL, 'Achat produit ', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 01:40:19', '2022-07-29 01:40:19'),
(2, 24, '2', 8, NULL, '8.75WWAzcokN', NULL, NULL, '780d4e6f6e3641f591af53b114e108c3ba92b85a483a0e3cddae5db9e06398debc20d15e49e1f3e632d18c09704a2cc2505b86495fa466', 'MOBILE_MONEY', NULL, 'Achat produit ', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 01:47:48', '2022-07-29 01:47:48'),
(3, 24, '1', 8, NULL, '8.75WWAzcokN', NULL, NULL, '780d4e6f6e3641f591af53b114e108c3ba92b85a483a0e3cddae5db9e06398debc20d15e49e1f3e632d18c09704a2cc2505b86495fa466', 'MOBILE_MONEY', NULL, 'Achat produit ', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 01:47:48', '2022-07-29 01:47:48'),
(4, 14, '2', 11, NULL, '11.RMkfVht1SV', NULL, NULL, 'fbaf3f96221a00bafed1fa623a07b74bd910f1297f6e376d5bdb96fd138fa0b37a5e123bd55d1e5e0f8f9a3974debe0af755fbeb6d769a', 'MOBILE_MONEY', NULL, 'Achat produit ', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 10:33:03', '2022-07-29 10:33:03'),
(5, 46, '2', 11, NULL, '11.dxRJ5F86NM', NULL, NULL, '47ce42a1eb8e865f9c3b72b6fbd9dac43fc8ad3469ec00f3407833347bc277ee7e7ce72ca8605f886dc385d3506026ecc5ebe813aadfa3', 'MOBILE_MONEY', NULL, 'Achat produit ', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 13:34:41', '2022-07-29 13:34:41'),
(6, 223, '1', 11, '00', '11.jdxmmiSpQH', 'MPESACD', 'ACCEPTED', '5917d4a491d81913cb02f0205d7401591da8ab4a23bc91a658f4090eccc09ac062047184902ea5b99368cbae48029f2bc1a49ed4e117dd', 'MOBILE_MONEY', 'SUCCES', 'Achat produit ', NULL, NULL, NULL, NULL, NULL, '223/CDF/62e01f137c8312005db25d80138d8625bd04242882bfd20cd665ae3ba53191b266370/0827839232/243/fr/V4/SINGLE/PAYMENT', '2022-07-29 16:26:27', '2022-07-29 16:27:29'),
(7, 223, '3', 11, '00', '11.jdxmmiSpQH', 'MPESACD', 'ACCEPTED', '5917d4a491d81913cb02f0205d7401591da8ab4a23bc91a658f4090eccc09ac062047184902ea5b99368cbae48029f2bc1a49ed4e117dd', 'MOBILE_MONEY', 'SUCCES', 'Achat produit ', NULL, NULL, NULL, NULL, NULL, '223/CDF/62e01f137c8312005db25d80138d8625bd04242882bfd20cd665ae3ba53191b266370/0827839232/243/fr/V4/SINGLE/PAYMENT', '2022-07-29 16:26:27', '2022-07-29 16:26:27'),
(8, 333, '3', 11, '00', '11.D8ZrJ8nJSB', 'MPESACD', 'ACCEPTED', 'dda9c49e6e55ecc31c1c4ea749324886987167693653a77d3452307fc5545a6ed1ae4d12e58e2f230c30e8401ef426d17763722f269b37', 'MOBILE_MONEY', 'SUCCES', 'Achat produit ', NULL, NULL, NULL, NULL, NULL, '333/CDF/12a834c3b1dd9e138c67abd9f3ea554b5e27df670ec9dd754484d8afb6b5834066370/0827839232/243/fr/V4/SINGLE/PAYMENT', '2022-07-29 16:50:11', '2022-07-29 16:50:45'),
(9, 112, '14', 11, '00', '11.gIzzK5gMx3', 'MPESACD', 'ACCEPTED', '564feea0fdcbabf8e646a36bc6656143fa8ada799b178e6e81434df61430e4db244c1f980f97598420f7b1b50a99c47cbfa5a93af0878d', 'MOBILE_MONEY', 'SUCCES', 'Achat produit ', NULL, NULL, NULL, NULL, NULL, '112/CDF/b7b4afc6e24aad93ab63dd4c38930f4b6356b11ae3980c7b9098f9578ed896ff66370/0827839232/243/fr/V4/SINGLE/PAYMENT', '2022-07-29 18:52:36', '2022-07-29 18:53:09'),
(10, 121, '9', 11, '00', '11.BjuGo4i0rc', 'MPESACD', 'ACCEPTED', '8e4d3ba2316d30e647898b235148921125520c5b979d80ae721a073effa02eec6ee2931472158c0b6963ab85df069a2c31f4d778d325da', 'MOBILE_MONEY', 'SUCCES', 'Achat produit ', NULL, NULL, NULL, NULL, NULL, '121/CDF/7280def815c5445a8ac36a32f97da9e9b1fea5ae7cec805bf7be538d2315e9e766370/0827839232/243/fr/V4/SINGLE/PAYMENT', '2022-07-29 18:55:33', '2022-07-29 18:56:05'),
(11, 110, '10', 11, '00', '11.8UjNXOaBu8', 'MPESACD', 'ACCEPTED', 'b4b023d974ef2d5471e175eee2e0b26e6e99785b68cfa917eed45bfd8aa2f64e56df0ad94b180cef3b44b11aee09f38eb5d809642a4e49', 'MOBILE_MONEY', 'SUCCES', 'Achat produit ', NULL, NULL, NULL, NULL, NULL, '110/CDF/4bf1d72ca2f7fcbc4bc435cde4509a74ea67ce2ba827d0ea365cd63fe73882aa66370/0827839232/243/fr/V4/SINGLE/PAYMENT', '2022-07-29 18:59:50', '2022-07-29 19:00:24'),
(12, 113, '3', 8, '00', '8.X8rCpvsn9y', 'MPESACD', 'ACCEPTED', '7f8b028ed001f5f42fe8f5462bba79598d3e273b0edddf2da24134b4a4301570b0c0ff076b7e2a7dfe9fa3671a385c126086236b60c65d', 'MOBILE_MONEY', 'SUCCES', 'Achat produit ', NULL, NULL, NULL, NULL, NULL, '113/CDF/df81dc4cf25dc9fd921840921f286bcacd3162cefa958634b1148d237bfd9d0e66370/0827839232/243/fr/V4/SINGLE/PAYMENT', '2022-07-29 19:10:50', '2022-07-29 19:10:49'),
(13, 442, '3', 12, '00', '12.ubBS4Z0Chp', 'MPESACD', 'ACCEPTED', 'a79619a70d67d80b1dc9db35eafca81a48dd274113a79bae50d7cb97834603ea9b91b44f97eccd00e783ba79c53962be0d28b48f5442bb', 'MOBILE_MONEY', 'SUCCES', 'Achat produit ', NULL, NULL, NULL, NULL, NULL, '442/CDF/f303efeb963e18693fcce283503eb961cb6aca890a203b3aa4be941b8d96e12f66370/0827839232/243/fr/V4/SINGLE/PAYMENT', '2022-07-30 08:22:22', '2022-07-30 08:22:21');

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moyenPaiement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operateur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reponse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `paiements`
--

INSERT INTO `paiements` (`id`, `user_id`, `type`, `transaction_id`, `moyenPaiement`, `reference`, `token`, `operateur`, `message`, `description`, `customer_address`, `customer_city`, `customer_country`, `customer_state`, `customer_zip_code`, `reponse`, `created_at`, `updated_at`) VALUES
(1, 8, NULL, '8.1Hd0BT4tre', NULL, NULL, 'f70e060197d76ccf849d28f7553a91f09de0b03e4fd6088106af51b3e934c8623cd8508e0c0f78a6e13c797051e17f6029412901808549', 'MOBILE_MONEY', NULL, 'Paiement Abonnement', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-21 12:01:16', '2022-05-21 12:01:16'),
(2, 8, NULL, '8.jr59UZaOps', NULL, NULL, '044fc27bbe9257e32f8aed14379a7b526acf1a67cc0cba28c16f60259b0dcb533c000633127dd876502e1c4fb6629baecae4b465c87c6f', 'MOBILE_MONEY', NULL, 'Paiement Abonnement', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-21 14:40:33', '2022-05-21 14:40:33'),
(3, 8, NULL, '8.UkBIJGy4Tx', NULL, NULL, 'c136b1830119697af3432c8514f101046ddf03fc5706119213f22ed2e902620ab225e1ba62b5f779aa2455af9512e2786cf0dd37e56fe0', 'MOBILE_MONEY', NULL, 'Paiement Abonnement', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-21 15:18:21', '2022-05-21 15:18:21'),
(4, 8, NULL, '8.N0aKQ3lRME', NULL, NULL, 'fc83a8a5fc701370fbc02caecfe14a7adc2bc3d521663433c6165ec69c3d419d1cb4c038286f7d7a50ddcacda70e63f45187fe48d5a45d', 'CREDIT_CARD', NULL, 'Paiement Abonnement', 'fsfssdsd', 'kinshasa', 'CD', 'kin', '00421', NULL, '2022-05-21 15:23:05', '2022-05-21 15:23:05'),
(5, 8, NULL, '8.MY6EttfzMt', NULL, NULL, '378bd95cfa7802078c79e6ef928242bd8f6f7dbfdbbd569333400473e6fbb37f144548720c68004efd9642c41d6f9a701c69952a9a1ea3', 'MOBILE_MONEY', NULL, 'Paiement Abonnement', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-22 00:45:12', '2022-05-22 00:45:12'),
(6, 8, NULL, '8.cbIFZpdBFt', NULL, NULL, 'df57f7600f894887cee9f12f70073ca48451ec69cab491dc8180a3391c9dc0a384b6d006b92a3b922de99294e44c1214aa6cf653a4bc37', 'MOBILE_MONEY', NULL, 'Paiement Abonnement', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 17:15:41', '2022-05-25 17:15:41'),
(7, 8, NULL, '8.69BkW0pQPA', NULL, NULL, '8c5f95348c2f4d944d30fb80973e2314f852a12c5a09d1047fc1d2346cfd7c236e79a4a4c1c674e51b72782f7e2b253e7a031f81d1eda8', 'MOBILE_MONEY', NULL, 'Paiement Abonnement', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 17:18:01', '2022-05-25 17:18:01'),
(8, 8, NULL, '8.WSGv2a1fnZ', NULL, NULL, 'eaa861c94d1fd31b6a79a8c79a66c8ea19cb9f9c317209012b79fb016ab00a10303b53a727cbe0380614a41679e3ab0afebf34949af01f', 'MOBILE_MONEY', NULL, 'Achat abonnement Premium', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 17:21:33', '2022-05-25 17:21:33'),
(9, 10, NULL, '10.HDhv40degJ', NULL, NULL, 'c9418d20a1ad60b9585e0f0cd0aaf4918fc725918264e9197ae26a6b4875a3ec504339dea714053c54394eec5a7fdbaf2c0ff6f70537b9', 'CREDIT_CARD', NULL, 'Achat abonnement Premium', 'limeté', 'qdfd', 'CM', NULL, '0224', NULL, '2022-06-25 21:42:07', '2022-06-25 21:42:07'),
(10, 10, NULL, '10.eEpvaQsnIj', NULL, NULL, 'ce933c82acb2eac2847364f1c94cbb602d4ffa407f942ae19d627b968e2de338a96cebc09a2df4cf9ec55e38f7081b8d24b923fca16ce8', 'CREDIT_CARD', NULL, 'Achat abonnement Premium', 'limeté', 'qdfd', 'CA', 'QC', '0224', NULL, '2022-06-25 21:43:40', '2022-06-25 21:43:40'),
(11, 8, NULL, '8.bDxjX3vQfj', NULL, NULL, '66ce9109ae4929a5177ce0e2d7b872c327a8d977ecfdffca1f7924f220d475a1f67da4bcf0570f1593222442af9016174f0e155f6220a0', 'MOBILE_MONEY', NULL, 'Achat abonnement Premium', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 00:38:02', '2022-07-27 00:38:02'),
(12, 11, '600', '11.7R0PpmERc7', 'AIRTELCDUSD', 'REFUSED', '2ad47ab3fe476b21405d01859903b4e9e8139cf5bca67dd6087967c5bbe20c5fd6d4bc7cf0dc14df99befd306a2dfe50fff91e6047e9c8', 'MOBILE_MONEY', 'PAYMENT_FAILED', 'Achat abonnement Ordinaire', NULL, NULL, NULL, NULL, NULL, '1/USD/2d648c83975fed25837b6f8496807acaa60cd22670907be4be0e8685b41a6da666370/0993107499/243/fr/V4/SINGLE/PAYMENT', '2022-07-29 10:50:07', '2022-07-29 10:50:37'),
(13, 11, NULL, '11.bSZF8YoUHN', NULL, NULL, '76cd1ae14e7cfb7e5fc4cf39b0cb576cceedd5bf719dbdf36bfcfe67a5af65f7edc760b6ccde861ec3fae83a95dfee951ffb5867d9f3b5', 'MOBILE_MONEY', NULL, 'Achat abonnement standars', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 11:16:44', '2022-07-29 11:16:44'),
(14, 11, '600', '11.QfDtmjCsTo', 'AIRTELCDUSD', 'REFUSED', '00ab0eb847a289577665f81d20dd41953af0df1df2d80df425e20f1b1fdc298b318d6372a371afd9ae33e8ff1e125462ce8eab85e8b9da', 'MOBILE_MONEY', 'PAYMENT_FAILED', 'Achat abonnement standars', NULL, NULL, NULL, NULL, NULL, '2/USD/0f31c58b379352e15e1836d9c7f7fb3fa77fa506624ab0acd37ec5c57f5ae13366370/0993107499/243/fr/V4/SINGLE/PAYMENT', '2022-07-29 11:21:24', '2022-07-29 11:22:00');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `monaie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `image`, `description`, `prix`, `monaie`, `quantite`, `slug`, `img1`, `img2`, `img3`, `created_at`, `updated_at`) VALUES
(1, 'carmel-bauch', NULL, 'Quasi qui id quos. Ut est aliquam consequatur neque nihil aut. Aut et reprehenderit sint libero rerum corrupti. Libero ut alias magni ipsam nihil odio.', 100, 'FC', 40, 'prof-holden-hudson', NULL, NULL, NULL, '2022-07-04 23:38:54', '2022-07-04 23:38:54'),
(2, 'jefferey-roberts-iii', NULL, 'Est reprehenderit ullam et quasi repudiandae aut. Quia ea omnis consequatur. Rerum maiores ullam voluptates maxime vero.', 10, '$', 40, 'eleanora-keeling', NULL, NULL, NULL, '2022-07-04 23:38:55', '2022-07-04 23:38:55'),
(3, 'jarrell-reilly', NULL, 'Quasi voluptatem neque aliquam et nulla. Repellendus nemo atque quidem quidem. Omnis dolores accusantium autem consequatur autem et. Tenetur voluptatem et aut voluptatem dolor tempora sequi.', 100, 'FC', 10, 'sylvia-ohara', NULL, NULL, NULL, '2022-07-04 23:38:55', '2022-07-04 23:38:55'),
(4, 'general-reichert-ii', NULL, 'Rerum dignissimos odit quae. Suscipit sed nemo nisi quisquam. Nihil qui repellendus alias in qui dolorem et. Excepturi quas sit eius eaque aut dolores.', 5, '$', 50, 'paxton-beier-iii', NULL, NULL, NULL, '2022-07-04 23:38:55', '2022-07-04 23:38:55'),
(5, 'dr-anne-bergstrom', NULL, 'Repudiandae ut et animi eaque ut. Culpa quidem vel sit et est numquam voluptas. Earum quia corporis placeat quasi et qui neque. Et numquam cupiditate voluptatem qui occaecati excepturi officiis.', 1, '$', 10, 'estrella-jenkins', NULL, NULL, NULL, '2022-07-04 23:38:55', '2022-07-04 23:38:55'),
(6, 'estella-roberts', NULL, 'Vel sit sunt sequi ut sed a ut. Dolorum consequatur quia qui porro. Provident nihil placeat soluta quia. Sed eos porro voluptatum sapiente nesciunt.', 5, '$', 20, 'dr-milo-botsford-i', NULL, NULL, NULL, '2022-07-04 23:38:55', '2022-07-04 23:38:55'),
(7, 'alford-oconnell', NULL, 'Sed est dolores sunt iure. Nisi quo occaecati nihil voluptatem aut quaerat dolore. Sit accusantium maiores eos velit vero. Voluptatem sint repudiandae fugit temporibus magni id. Aut enim perferendis provident temporibus iure maxime architecto.', 2, '$', 40, 'mr-magnus-metz', NULL, NULL, NULL, '2022-07-04 23:38:55', '2022-07-04 23:38:55'),
(8, 'mrs-nikita-wuckert', NULL, 'Officiis animi doloremque unde nihil sint. Modi nobis ut recusandae aut consequatur. Doloribus est aut dolor voluptate sunt quis sit illum. In libero et repellat est est temporibus.', 10, 'FC', 20, 'mr-marcelo-auer-ii', NULL, NULL, NULL, '2022-07-04 23:38:55', '2022-07-04 23:38:55'),
(9, 'dr-marlene-barton', NULL, 'Sed quia provident aliquam id. Consequatur accusantium aliquam aut in sed pariatur voluptatem. Vero aspernatur sit dolores reprehenderit est voluptas asperiores. Illum sint quod commodi quod quibusdam saepe aspernatur nisi.', 10, '$', 50, 'mrs-lacey-labadie-iv', NULL, NULL, NULL, '2022-07-04 23:38:55', '2022-07-04 23:38:55'),
(10, 'mrs-prudence-batz-md', NULL, 'Veritatis praesentium voluptate quidem vitae et. Dicta suscipit vel unde enim. Minus ut eos et cum aliquam. Tempore et accusamus exercitationem incidunt dolor et maxime.', 2, 'FC', 50, 'rex-will', NULL, NULL, NULL, '2022-07-04 23:38:55', '2022-07-04 23:38:55'),
(11, 'otha-dibbert', NULL, 'Dolores asperiores expedita saepe in nostrum culpa. Maxime eum provident aspernatur quia quod modi. Quis numquam voluptatem minus impedit quibusdam. Sunt quidem dolor minima voluptatum nemo. Reiciendis vel aut voluptatem.', 1, '$', 100, 'easton-funk-sr', NULL, NULL, NULL, '2022-07-04 23:38:55', '2022-07-04 23:38:55'),
(12, 'dr-marge-simonis', NULL, 'Ut aut veniam fugit enim cum. Nobis perspiciatis et et similique. Asperiores magnam et omnis aut alias. Laboriosam nobis non quia molestias enim voluptatem nihil modi.', 10, 'FC', 20, 'alene-zemlak', NULL, NULL, NULL, '2022-07-04 23:38:56', '2022-07-04 23:38:56'),
(13, 'petra-langworth', NULL, 'Quos molestias est ut qui illum dolorem magni et. Tempore suscipit rerum quibusdam sit omnis consequuntur. Molestias quisquam est libero molestiae.', 5, '$', 500, 'reid-langworth', NULL, NULL, NULL, '2022-07-04 23:38:56', '2022-07-04 23:38:56'),
(14, 'mr-enid-little', NULL, 'Qui ipsum molestias eveniet consequuntur minima ullam. Quibusdam aut tempora dolor non. Quia et dolorem omnis ipsa aut placeat rerum qui. Quo voluptatem officia odit et blanditiis dolorem eaque corporis.', 10, 'FC', 500, 'alverta-boyer', NULL, NULL, NULL, '2022-07-04 23:38:56', '2022-07-04 23:38:56'),
(15, 'delores-ankunding', NULL, 'Et error dignissimos tenetur nobis eum. Nihil deserunt quia et illum placeat est architecto. Quisquam sed facilis sequi explicabo error.', 10, '$', 10, 'geo-kub', NULL, NULL, NULL, '2022-07-04 23:38:56', '2022-07-04 23:38:56'),
(16, 'prof-ryan-kub', NULL, 'Et consequatur voluptatem possimus. Saepe autem maxime molestias aut. Quisquam qui modi asperiores eos explicabo tempore soluta. Beatae consequuntur vero molestiae in cum.', 5, 'FC', 50, 'lacy-koelpin', NULL, NULL, NULL, '2022-07-04 23:38:56', '2022-07-04 23:38:56'),
(17, 'lois-runte', NULL, 'Corporis molestiae fugit iusto autem quos expedita modi. Maxime qui blanditiis harum amet voluptatem quaerat doloremque. Assumenda perferendis magni vel facere ut et dolorem quas. Vitae ullam corporis aliquam rerum.', 5, '$', 100, 'prof-jack-wunsch-jr', NULL, NULL, NULL, '2022-07-04 23:38:56', '2022-07-04 23:38:56'),
(18, 'jany-gusikowski-phd', NULL, 'Impedit mollitia similique ea vel perspiciatis architecto. Voluptatum ad sint aut porro quaerat numquam repudiandae. Aut dolorem aut nihil doloremque.', 10, 'FC', 40, 'pink-heaney', NULL, NULL, NULL, '2022-07-04 23:38:56', '2022-07-04 23:38:56'),
(19, 'kolby-predovic', NULL, 'Commodi corporis explicabo quas neque reprehenderit. Totam incidunt et totam laborum dolore autem autem.', 2, 'FC', 40, 'chaya-rosenbaum-jr', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(20, 'prof-aleen-hand-dvm', NULL, 'Dolorem voluptatem repellat libero consequatur eos porro consequatur. Ut numquam illum iusto dolorem et voluptatem aperiam error. Aliquam in aut alias exercitationem qui repellat.', 1, 'FC', 70, 'kamren-weber-iii', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(21, 'jacky-runolfsson', NULL, 'A nihil non dicta reiciendis. Laudantium adipisci dolor illo non. Ut corrupti temporibus at quasi. Consequatur cum perferendis quibusdam voluptatem cumque est voluptas repellendus. Unde quis labore unde mollitia maxime et quis vel.', 2, 'FC', 100, 'mr-soledad-bernhard', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(22, 'dedric-weimann', NULL, 'Doloribus enim sunt temporibus eligendi aut. Eaque id dolorum natus reprehenderit. Commodi impedit explicabo exercitationem illum dolorem rerum consectetur. Perspiciatis voluptates quod et velit nemo non aut.', 10, '$', 500, 'coby-quitzon-v', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(23, 'major-williamson', NULL, 'Asperiores non labore vitae et. Non sint sit aut sit. Et molestiae ea ad similique.', 2, 'FC', 40, 'alexzander-boyle-iii', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(24, 'leta-oconner', NULL, 'Repellat nihil omnis expedita quod veniam ipsum. Illum optio temporibus aut laboriosam quae eaque officia enim. Veniam quia iusto quidem culpa.', 2, '$', 500, 'robb-schiller', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(25, 'prof-bo-gibson', NULL, 'Sit qui provident veniam culpa. Dolore fugit aut aut error consequatur impedit impedit. Ex ea quia quis cum.', 10, '$', 50, 'dayana-sawayn-iii', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(26, 'mr-levi-hegmann-jr', NULL, 'Voluptas ut pariatur quae nisi reiciendis aliquam. Magni eligendi quis repellendus ullam eum omnis. Voluptatem quaerat ut corporis soluta rerum occaecati.', 10, 'FC', 40, 'prof-kylee-lindgren', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(27, 'kenny-robel', NULL, 'Deserunt dignissimos ea sit veniam repellendus unde. Mollitia rerum et odio. Ipsam placeat consequatur error aut debitis non. Commodi cum culpa numquam.', 1, 'FC', 40, 'ferne-parisian', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(28, 'dr-donavon-lockman-ii', NULL, 'Sunt voluptatum exercitationem totam nisi. Sequi sunt enim blanditiis quia a soluta. Et ea et asperiores animi rerum et. Id asperiores natus aut.', 10, 'FC', 70, 'ben-wisoky-jr', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(29, 'icie-mohr', NULL, 'Necessitatibus voluptatum consectetur sapiente laboriosam rem. Magni occaecati et deleniti hic quia nisi autem veniam. Nemo consequatur quia non adipisci. Voluptatem quidem at itaque nemo omnis.', 2, 'FC', 500, 'mrs-ila-konopelski', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(30, 'dr-terrill-rowe-dvm', NULL, 'Officiis sed perferendis voluptatem reiciendis placeat. Aut ut dolorem et est est. Minus blanditiis ex consectetur nostrum. Itaque ullam quos doloribus sed ipsum non veritatis.', 5, 'FC', 100, 'sabrina-raynor-dvm', NULL, NULL, NULL, '2022-07-04 23:38:57', '2022-07-04 23:38:57'),
(31, 'dr-yoshiko-kulas', NULL, 'Earum sint et neque. Tempora in ullam at excepturi qui. Architecto officiis molestiae numquam quaerat.', 1, 'FC', 100, 'tevin-mills', NULL, NULL, NULL, '2022-07-04 23:38:58', '2022-07-04 23:38:58'),
(32, 'shea-ortiz', NULL, 'Inventore laborum libero amet delectus veritatis vitae ea. Repellendus ratione autem cumque dolores atque magnam. Repellat sapiente illo est nihil et quia.', 1, '$', 40, 'rylee-pollich', NULL, NULL, NULL, '2022-07-04 23:38:58', '2022-07-04 23:38:58'),
(33, 'prof-alexandro-oberbrunner', NULL, 'Iste praesentium ipsum perspiciatis voluptatem culpa illum. Rerum eius corporis eum aut. Voluptatum et error sit.', 10, '$', 10, 'dr-milo-beer-phd', NULL, NULL, NULL, '2022-07-04 23:38:58', '2022-07-04 23:38:58'),
(34, 'javonte-bashirian', NULL, 'Optio maxime quasi autem doloremque dignissimos odit sed. Ea dolores quia possimus quis dolorem sit nemo nemo. Blanditiis debitis veniam ab facere odit eos ducimus. Omnis ipsum velit rerum dolorum.', 5, 'FC', 10, 'maeve-rogahn', NULL, NULL, NULL, '2022-07-04 23:38:58', '2022-07-04 23:38:58'),
(35, 'dina-graham', NULL, 'Quia voluptatibus iure est modi sed dolore culpa. Consectetur voluptas excepturi sequi eum excepturi dolorum incidunt. Et aut aut neque non minus ea. Aut magni maiores ipsum nulla.', 1, 'FC', 10, 'daniella-feest', NULL, NULL, NULL, '2022-07-04 23:38:58', '2022-07-04 23:38:58'),
(36, 'mrs-joy-kris-iv', NULL, 'Et omnis voluptatem odit ex numquam. Ad totam sunt ut atque possimus dolores modi. Dicta delectus deserunt est dolores dicta provident aut.', 1, 'FC', 500, 'israel-dooley', NULL, NULL, NULL, '2022-07-04 23:38:58', '2022-07-04 23:38:58'),
(37, 'dannie-marks', NULL, 'Et est ullam laboriosam iure corrupti dolores. Libero et alias excepturi.', 1, 'FC', 40, 'melissa-huel', NULL, NULL, NULL, '2022-07-04 23:38:59', '2022-07-04 23:38:59'),
(38, 'zack-smitham', NULL, 'Omnis sit iure voluptatem sint voluptatem repellat fugit. Mollitia praesentium quod odit dignissimos dolore at soluta. Consequatur explicabo minus laboriosam dignissimos sit facere autem. Nobis ducimus necessitatibus debitis qui.', 2, 'FC', 40, 'micheal-kozey', NULL, NULL, NULL, '2022-07-04 23:38:59', '2022-07-04 23:38:59'),
(39, 'vivian-hudson-ii', NULL, 'Expedita adipisci qui est amet perspiciatis officiis. Et eaque omnis nemo rerum. Optio sapiente est omnis voluptatibus consequatur dolores qui. A minus nobis sed dolor quidem mollitia.', 2, 'FC', 50, 'rudolph-wyman', NULL, NULL, NULL, '2022-07-04 23:38:59', '2022-07-04 23:38:59'),
(40, 'wilford-cremin', NULL, 'Praesentium rerum commodi dicta autem et. Esse et dolor ex dolorem error. Provident earum minus voluptas beatae. Fugit illo omnis quod accusantium optio earum dolores.', 2, '$', 50, 'lazaro-johnson', NULL, NULL, NULL, '2022-07-04 23:38:59', '2022-07-04 23:38:59'),
(41, 'nicolette-metz', NULL, 'Explicabo error dolore quas quas molestiae. Sequi repellat modi enim.', 10, '$', 70, 'joaquin-farrell', NULL, NULL, NULL, '2022-07-04 23:38:59', '2022-07-04 23:38:59'),
(42, 'dorothy-schmeler', NULL, 'Quis omnis debitis sed nemo molestiae. Iusto nulla nulla sit velit.', 10, 'FC', 70, 'dr-trudie-carroll', NULL, NULL, NULL, '2022-07-04 23:38:59', '2022-07-04 23:38:59'),
(43, 'kaelyn-lebsack', NULL, 'Nesciunt deserunt sint pariatur minus. Eius eos dicta rem. Atque quo dignissimos voluptate nesciunt.', 2, '$', 50, 'eileen-powlowski', NULL, NULL, NULL, '2022-07-04 23:38:59', '2022-07-04 23:38:59'),
(44, 'kelsie-herman', NULL, 'Voluptates dicta consequatur architecto. Illo quis voluptatem aperiam cupiditate ea alias. Dolor qui quod velit aut accusantium nihil. Quia ipsum non quas minima quasi inventore dicta.', 5, 'FC', 50, 'elijah-kling-phd', NULL, NULL, NULL, '2022-07-04 23:39:00', '2022-07-04 23:39:00'),
(45, 'florida-balistreri', NULL, 'Est nostrum quidem inventore perferendis. Dolorem sunt aut velit soluta perspiciatis magnam minima. Totam dolores exercitationem laudantium quia et id ut maiores.', 10, 'FC', 20, 'milo-weber-md', NULL, NULL, NULL, '2022-07-04 23:39:00', '2022-07-04 23:39:00'),
(46, 'immanuel-ohara', NULL, 'Voluptatem et et consequatur rerum aut ex commodi. Sint exercitationem reprehenderit minus earum. Corporis voluptatibus explicabo qui ullam facilis dolor vero. Tempora sit in aut sed.', 10, 'FC', 10, 'aric-will-i', NULL, NULL, NULL, '2022-07-04 23:39:00', '2022-07-04 23:39:00'),
(47, 'dr-asia-hegmann', NULL, 'Ut culpa exercitationem iusto eos qui cumque eius. Doloribus esse voluptatem rem facilis consequatur cum. In consectetur alias dolore assumenda quia.', 5, '$', 50, 'miss-queen-mcdermott-ii', NULL, NULL, NULL, '2022-07-04 23:39:00', '2022-07-04 23:39:00'),
(48, 'prof-cleveland-keeling-sr', NULL, 'Vel sapiente aperiam corrupti rerum. Odio quam et nostrum cupiditate omnis officiis sunt. Iste aliquam fugit accusantium nihil atque. Et accusamus minima illo dolore sint provident non ullam.', 2, 'FC', 40, 'mr-vance-emmerich', NULL, NULL, NULL, '2022-07-04 23:39:00', '2022-07-04 23:39:00'),
(49, 'juwan-legros', NULL, 'Dolor et totam sunt dolorem labore quis. Excepturi repellendus non aut corrupti ut. Natus tempora culpa rerum debitis.', 1, 'FC', 50, 'judah-borer', NULL, NULL, NULL, '2022-07-04 23:39:00', '2022-07-04 23:39:00'),
(50, 'bridget-champlin', NULL, 'Autem incidunt cupiditate consequuntur accusantium eligendi. In ab quam porro. Corporis commodi esse reprehenderit. Aut ut et voluptates consequatur.', 1, '$', 500, 'orlando-upton', NULL, NULL, NULL, '2022-07-04 23:39:00', '2022-07-04 23:39:00');

-- --------------------------------------------------------

--
-- Structure de la table `produit_users`
--

CREATE TABLE `produit_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produit_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `livraison` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `quantite` int(11) NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit_users`
--

INSERT INTO `produit_users` (`id`, `produit_id`, `user_id`, `etat`, `livraison`, `quantite`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, 2, 8, 'En attente', '0', 1, '8.zt1RxhtOCG', '2022-07-29 01:40:19', '2022-07-29 01:40:19'),
(2, 2, 8, 'En attente', '0', 1, '8.75WWAzcokN', '2022-07-29 01:47:48', '2022-07-29 01:47:48'),
(3, 1, 8, 'En attente', '0', 1, '8.75WWAzcokN', '2022-07-29 01:47:48', '2022-07-29 01:47:48'),
(4, 2, 11, 'En attente', '0', 1, '11.RMkfVht1SV', '2022-07-29 10:33:03', '2022-07-29 10:33:03'),
(5, 2, 11, 'En attente', '0', 4, '11.dxRJ5F86NM', '2022-07-29 13:34:41', '2022-07-29 13:34:41'),
(6, 1, 11, 'Payer', '2', 1, '11.jdxmmiSpQH', '2022-07-29 16:26:27', '2022-07-29 19:03:23'),
(7, 3, 11, 'Payer', '2', 1, '11.jdxmmiSpQH', '2022-07-29 16:26:27', '2022-07-29 18:49:26'),
(8, 3, 11, 'Payer', '2', 3, '11.D8ZrJ8nJSB', '2022-07-29 16:50:11', '2022-07-29 18:48:58'),
(9, 14, 11, 'Payer', '2', 10, '11.gIzzK5gMx3', '2022-07-29 18:52:36', '2022-07-29 19:03:08'),
(10, 9, 11, 'Payer', '0', 11, '11.BjuGo4i0rc', '2022-07-29 18:55:33', '2022-07-29 18:56:05'),
(11, 10, 11, 'Payer', '0', 50, '11.8UjNXOaBu8', '2022-07-29 18:59:50', '2022-07-29 19:00:24'),
(12, 3, 8, 'Payer', '2', 1, '8.X8rCpvsn9y', '2022-07-29 19:10:49', '2022-07-29 19:13:07'),
(13, 3, 12, 'Payer', '2', 4, '12.ubBS4Z0Chp', '2022-07-30 08:22:22', '2022-07-30 08:25:06');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monaie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `description`, `cover`, `prix`, `monaie`, `created_at`, `updated_at`) VALUES
(1, 'ProxyChat', 'Ce service vous permet d\'être consulté en ligne par un medecin', NULL, '1', 'USD', '2022-05-13 09:38:18', '2022-05-13 09:38:18'),
(2, 'ProxyChem', 'Ce service vous permet de trouver des médicaments et être servi à domicile... \r\n', NULL, '1', 'USD', '2022-05-13 09:38:18', '2022-05-13 09:38:18'),
(3, 'ProxyFamily', 'La famille est precieuse, ProxyDoc vous dispose par ce service des medecins de famille à domicile... \r\n', NULL, '3', 'USD', '2022-05-13 09:38:18', '2022-05-13 09:38:18'),
(4, 'ProxyGency', 'Ce service vous permet d\'avoir notre service d\'urgence 24h/7', NULL, '5', 'USD', '2022-05-13 09:38:18', '2022-05-13 09:38:18');

-- --------------------------------------------------------

--
-- Structure de la table `service_abonnements`
--

CREATE TABLE `service_abonnements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `abonnement_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `service_abonnements`
--

INSERT INTO `service_abonnements` (`id`, `service_id`, `abonnement_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2022-05-13 09:49:58', '2022-05-13 09:49:58'),
(2, 4, 4, '2022-05-13 09:49:58', '2022-05-13 09:49:58'),
(3, 2, 2, '2022-05-13 09:49:58', '2022-05-13 09:49:58'),
(6, 1, 3, '2022-05-13 09:49:58', '2022-05-13 09:49:58'),
(7, 3, 3, '2022-05-13 09:49:58', '2022-05-13 09:49:58'),
(9, 2, 4, '2022-05-13 09:49:58', '2022-05-13 09:49:58'),
(10, 2, 1, '2022-05-13 09:49:58', '2022-05-13 09:49:58'),
(11, 1, 4, '2022-05-13 09:49:58', '2022-05-13 09:49:58'),
(12, 2, 1, '2022-05-13 09:49:58', '2022-05-13 09:49:58'),
(14, 3, 4, '2022-05-13 09:49:59', '2022-05-13 09:49:59'),
(16, 4, 1, '2022-05-13 09:49:59', '2022-05-13 09:49:59'),
(18, 2, 3, '2022-05-13 09:49:59', '2022-05-13 09:49:59');

-- --------------------------------------------------------

--
-- Structure de la table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datenaissance` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `prenom`, `email`, `telephone`, `sexe`, `adresse`, `pays`, `ville`, `datenaissance`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Masimango', 'silasmas', 'silasjmas@gmail.com', '+242 06 466 6110', 'HOMME', '1;lubefu,Q/Industriel C/limeté', 'Albanie', 'kinshasa', '1992-03-26', '2022-05-01 02:46:45', '$2y$10$vFQbJcIds06zhyYrEdkUNOaRaemfIDcNZcbnFzmJ3kqv0t0Y16Ani', NULL, '2022-05-21 12:01:15', '2022-05-27 08:10:54'),
(10, 'silas', 'mas', 'ir-masimango@silasmas.com', '+243827839232', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$J9Tz4tPUXkxaU.12gaofpe80VQB8P4YwgforB0kOuC.wRnqi8.ss2', NULL, '2022-06-25 21:29:55', '2022-06-25 21:29:55'),
(11, 'zita', 'papito', 'silasmsunphenix@gmail.com', '0993107499', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$ZFcI80U0MF.VXhbZmO5o/OlvpH2Ipno3WLpCr7oXV3/Xd5pfvAXr.', NULL, '2022-07-29 10:33:03', '2022-07-29 10:33:03'),
(12, 'shamba', 'grace', 'shambag1@gmail.com', '0822304300', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$/TQ5g0fW7W7i0kH5Ob2VJebt9S66CL7ki/BPGhjG2Sa8Hk1Mv0mZG', NULL, '2022-07-30 08:20:36', '2022-07-30 08:20:36');

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` int(11) NOT NULL,
  `monaie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `zones`
--

INSERT INTO `zones` (`id`, `titre`, `montant`, `monaie`, `created_at`, `updated_at`) VALUES
(1, 'ZONE A', 2, 'usd', NULL, NULL),
(2, 'ZONE B', 3, 'USD', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnements`
--
ALTER TABLE `abonnements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `abonnement_users`
--
ALTER TABLE `abonnement_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abonnement_users_transaction_id_unique` (`transaction_id`),
  ADD KEY `abonnement_users_user_id_foreign` (`user_id`),
  ADD KEY `abonnement_users_abonnement_id_foreign` (`abonnement_id`);

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `achats_transaction_id_unique` (`transaction_id`),
  ADD KEY `achats_user_id_foreign` (`user_id`),
  ADD KEY `achats_service_id_foreign` (`service_id`);

--
-- Index pour la table `actes`
--
ALTER TABLE `actes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `acte_services`
--
ALTER TABLE `acte_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acte_services_acte_id_foreign` (`acte_id`),
  ADD KEY `acte_services_service_id_foreign` (`service_id`);

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `categoriechems`
--
ALTER TABLE `categoriechems`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie_produits`
--
ALTER TABLE `categorie_produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_produits_produit_id_foreign` (`produit_id`),
  ADD KEY `categorie_produits_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commune_zone_id_foreign` (`zone_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `livraisons`
--
ALTER TABLE `livraisons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livraisons_user_id_foreign` (`user_id`),
  ADD KEY `commune_id` (`commune_id`),
  ADD KEY `produit` (`produit_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paiements_user_id_foreign` (`user_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit_users`
--
ALTER TABLE `produit_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produit_users_produit_id_foreign` (`produit_id`),
  ADD KEY `produit_users_user_id_foreign` (`user_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service_abonnements`
--
ALTER TABLE `service_abonnements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_abonnements_service_id_foreign` (`service_id`),
  ADD KEY `service_abonnements_abonnement_id_foreign` (`abonnement_id`);

--
-- Index pour la table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_telephone_unique` (`telephone`);

--
-- Index pour la table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnements`
--
ALTER TABLE `abonnements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `abonnement_users`
--
ALTER TABLE `abonnement_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `actes`
--
ALTER TABLE `actes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `acte_services`
--
ALTER TABLE `acte_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categoriechems`
--
ALTER TABLE `categoriechems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `categorie_produits`
--
ALTER TABLE `categorie_produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `commune`
--
ALTER TABLE `commune`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livraisons`
--
ALTER TABLE `livraisons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `produit_users`
--
ALTER TABLE `produit_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `service_abonnements`
--
ALTER TABLE `service_abonnements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement_users`
--
ALTER TABLE `abonnement_users`
  ADD CONSTRAINT `abonnement_users_abonnement_id_foreign` FOREIGN KEY (`abonnement_id`) REFERENCES `abonnements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `abonnement_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `achats`
--
ALTER TABLE `achats`
  ADD CONSTRAINT `achats_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `achats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `acte_services`
--
ALTER TABLE `acte_services`
  ADD CONSTRAINT `acte_services_acte_id_foreign` FOREIGN KEY (`acte_id`) REFERENCES `actes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acte_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `categorie_produits`
--
ALTER TABLE `categorie_produits`
  ADD CONSTRAINT `categorie_produits_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categorie_produits_produit_id_foreign` FOREIGN KEY (`produit_id`) REFERENCES `produits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `commune_zone_id_foreign` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livraisons`
--
ALTER TABLE `livraisons`
  ADD CONSTRAINT `livraisons_ibfk_1` FOREIGN KEY (`commune_id`) REFERENCES `commune` (`id`),
  ADD CONSTRAINT `livraisons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD CONSTRAINT `paiements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit_users`
--
ALTER TABLE `produit_users`
  ADD CONSTRAINT `produit_users_produit_id_foreign` FOREIGN KEY (`produit_id`) REFERENCES `produits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `service_abonnements`
--
ALTER TABLE `service_abonnements`
  ADD CONSTRAINT `service_abonnements_abonnement_id_foreign` FOREIGN KEY (`abonnement_id`) REFERENCES `abonnements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_abonnements_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
