-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2023 a las 23:58:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `talento_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `selection_status` varchar(255) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `candidates`
--

INSERT INTO `candidates` (`id`, `user_id`, `selection_status`, `points`, `created_at`, `updated_at`) VALUES
(2, 6, 'SELECTED', 100, '2023-12-10 23:55:03', '2023-12-10 23:55:03'),
(3, 7, 'SELECTED', 100, '2023-12-13 22:56:21', '2023-12-13 22:56:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIT` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `municipality_code` bigint(20) UNSIGNED NOT NULL,
  `economic_activity_code` bigint(20) UNSIGNED NOT NULL,
  `legalRepresentative` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `NIT`, `name`, `municipality_code`, `economic_activity_code`, `legalRepresentative`, `email`, `created_at`, `updated_at`) VALUES
(1, '1234567890', 'gogoat', 1, 1, 'Pepito perez', 'correoe@gmail.com', '2023-12-10 22:33:15', '2023-12-10 22:33:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contracts`
--

INSERT INTO `contracts` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Fijo', 'Contrato que dura tiempo predeterminado', '2023-12-10 22:34:22', '2023-12-10 22:34:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `economic_activities`
--

CREATE TABLE `economic_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `economic_activities`
--

INSERT INTO `economic_activities` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, '0143', 'Cría de ovejas y cabras', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilities`
--

CREATE TABLE `habilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ocupation_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructors`
--

CREATE TABLE `instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profession` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instructors`
--

INSERT INTO `instructors` (`id`, `user_id`, `profession`, `speciality`, `created_at`, `updated_at`) VALUES
(1, 13, 'Ingeniero', 'Software', '2023-12-14 03:45:21', '2023-12-14 03:45:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_positions`
--

CREATE TABLE `job_positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ocupation_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `job_positions`
--

INSERT INTO `job_positions` (`id`, `ocupation_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Agricultor administrador agropecuario', 'Manejan y administran las operaciones y faenas de una finca, parcela o granja, son responsables de cultivos, cosechas, cría y levante de ganado, aves y otros animales', '2023-12-10 22:42:15', '2023-12-10 22:42:15'),
(2, 1, 'Agricultor administrador agropecuario', 'Manejan y administran las operaciones y faenas de una finca, parcela o granja, son responsables de cultivos, cosechas, cría y levante de ganado, aves y otros animales', '2023-12-10 22:45:15', '2023-12-10 22:45:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_11_09_202639_create_roles_table', 1),
(16, '2023_11_09_202640_create_users_table', 1),
(17, '2023_11_09_202952_create_instructors_table', 1),
(18, '2023_11_09_203222_create_recruiters_table', 1),
(19, '2023_11_09_203336_create_candidates_table', 1),
(20, '2023_11_17_203907_create_economic_activities_table', 1),
(21, '2023_11_17_204137_create_municipalities_table', 1),
(22, '2023_11_17_204616_create_companies_table', 1),
(23, '2023_12_04_175140_create_salaries_table', 2),
(24, '2023_12_04_175331_create_contracts_table', 2),
(25, '2023_12_04_180011_create_ocupations_table', 2),
(26, '2023_12_04_180101_create_tasks_table', 2),
(27, '2023_12_04_180308_create_habilities_table', 2),
(28, '2023_12_04_181742_create_job_positions_table', 2),
(31, '2023_12_10_150218_create_vacancies_tables', 3),
(32, '2023_12_10_152337_create_vacancies_table', 4),
(33, '2023_12_10_152419_create_postulates_table', 5),
(34, '2023_12_13_183725_add_unique_constraint_to_postulates_table', 6),
(35, '2023_12_13_191625_modify_candidates_table_nullable_fields', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipalities`
--

CREATE TABLE `municipalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `municipalities`
--

INSERT INTO `municipalities` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, '05001', 'Medellin', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupations`
--

CREATE TABLE `ocupations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ocupations`
--

INSERT INTO `ocupations` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, '7231', ' Agricultores y administradores agropecuarios', NULL, NULL),
(2, '2112', 'Quimicos', '2023-12-10 22:47:45', '2023-12-10 22:47:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('juanapaez2006@gmail.com', '$2y$10$pkvq5jOyFWHP8RAUPr0k9u.rPr.2SDB48xUbgT672AAqtljsWHkwe', '2023-12-04 02:58:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulates`
--

CREATE TABLE `postulates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `vacancy_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postulates`
--

INSERT INTO `postulates` (`id`, `candidate_id`, `vacancy_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2023-12-11 00:28:28', '2023-12-11 00:28:28'),
(2, 3, 1, '2023-12-13 23:17:47', '2023-12-13 23:17:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recruiters`
--

CREATE TABLE `recruiters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `addmision_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recruiters`
--

INSERT INTO `recruiters` (`id`, `user_id`, `addmision_date`, `created_at`, `updated_at`) VALUES
(1, 9, '2023-12-13', '2023-12-14 01:00:31', '2023-12-14 01:00:31'),
(2, 10, '2023-12-13', '2023-12-14 01:10:30', '2023-12-14 01:10:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRADOR', 'admin', '2023-11-26 03:55:52', '2023-11-26 03:55:52'),
(2, 'INSTRUCTOR', 'instructor', NULL, NULL),
(3, 'RECLUTADOR', 'reclutar', NULL, NULL),
(4, 'CANDIDATO', 'aplicar a vacantes', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `salaries`
--

INSERT INTO `salaries` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Basico', '1600000', '2023-12-10 22:34:01', '2023-12-10 22:34:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ocupation_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tasks`
--

INSERT INTO `tasks` (`id`, `ocupation_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Agricultor', '2023-12-10 22:36:16', '2023-12-10 22:36:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doc_type` enum('CC','TI') NOT NULL,
  `doc_num` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `doc_type`, `doc_num`, `name`, `last_name`, `phone`, `user_name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'TI', '1074810634', 'Johanna', 'Sandoval', '3186341733', 'johanna', 'johanna.sandoval634@gmail.com', NULL, '$2y$10$Om/g1ZXuFVvc/uhG13nF7.HY2P3F9MoEEL6RW6LrpmlMyHicAjy3W', 1, NULL, '2023-11-26 04:48:38', '2023-11-26 04:48:38'),
(3, 'CC', '1074810470', 'Joan', 'Diaz', '3234417610', 'joanesgod', 'joandiaz440@gmail.com', NULL, '$2y$10$ybnyZGg40HgvLrtA1kZCd.oWt8l4BEFzeOW4SrSg1oxcnrh31Su9u', 2, NULL, '2023-11-26 06:00:40', '2023-11-26 06:00:40'),
(4, 'TI', '1000000000', 'Poochi', 'Diaz', '3000000000', 'poochiGod', 'juanapaez2006@gmail.com', NULL, '$2y$10$QuSTDcp1WRNQJuZcfyTa/OFspclPa1056e9w3F3WSlw0S6Zo1XYjC', 1, NULL, '2023-11-26 06:06:14', '2023-12-04 02:37:49'),
(5, 'TI', '2000000000', 'Sammy', 'Diaz', '3100000000', 'Sammyto', 'notfair0101@gmail.com', NULL, '$2y$10$8IwYdZ3WitAifH.gJ2lDsuKESEeYaPDRYK1mO85CVPl0tczjXJFXK', 4, NULL, '2023-11-26 06:08:34', '2023-11-26 06:08:34'),
(6, 'TI', '3000000000', 'pepi', 'pepi', '3100000000', 'pepipe', 'pepi@gmail.com', NULL, '$2y$10$rgrdx3fFXQ6vtjgnS/DX8ea.aPHv7bfQ16anHfdJXEJrprGMaKbXi', 4, NULL, '2023-12-10 23:54:48', '2023-12-10 23:54:48'),
(7, 'CC', '52477904', 'Yenny', 'Paez', '1234567890', 'yennyp', 'yenny@gmail.com', NULL, '$2y$10$Hzrnun82U6AQPrisR2mBiOIrJPYdwhdojYDP71rIQ2RUPqWDxa5xa', 4, NULL, '2023-12-13 22:55:58', '2023-12-13 22:55:58'),
(8, 'CC', '1236549870', 'Mary', 'Sanchez', '3000000000', 'marys', 'mary@gmail.com', NULL, '$2y$10$lg6TWIe0Jhq255o.B1.Mo.9rJuENhtVTzdwjpYupdoUZvzHFYDpUq', 4, NULL, '2023-12-14 00:31:58', '2023-12-14 00:31:58'),
(9, 'TI', '7000000000', 'Javier', 'Diaz', '3000000000', 'javi', 'javier@gmail.com', NULL, '$2y$10$IK3KTUhA/9S4qSGNEHsG1O5knl93eGq1tA8o23lHiNmp/APeUKCbK', 3, NULL, '2023-12-14 00:59:56', '2023-12-14 00:59:56'),
(10, 'CC', '9876543210', 'Rosa', 'Lopez', '3000000000', 'rosita', 'rosa@gmail.com', NULL, '$2y$10$fq3CxPNgLbmI4rt9P6r7A.MkZF0GeFurnfqSebQy65fN7cI83K8By', 3, NULL, '2023-12-14 01:10:21', '2023-12-14 01:10:21'),
(11, 'CC', '7894561230', 'Tomy', 'Reyes', '1234567890', 'tomy', 'tomy@gmail.com', NULL, '$2y$10$ylX.OHP8XeasUb0bJNVJguCQyfqpupCG0qbi8iF2KszIa.mf8hDsu', 2, NULL, '2023-12-14 03:41:38', '2023-12-14 03:41:38'),
(13, 'CC', '7894561230', 'Tomy', 'Reyes', '1234567890', 'tomy', 'tomy1@gmail.com', NULL, '$2y$10$oEIzXlRI3H8.p3c8/doI9OJPMjJluTos219z3slHuLVQC4iBtFb1m', 2, NULL, '2023-12-14 03:43:04', '2023-12-14 03:43:04'),
(14, 'CC', '9876543210', 'Timmy', 'Timmy', '1234567890', 'timmy', 'timmy@gmail.com', NULL, '$2y$10$pMbQX3GZ79gKgnwRqH2dJOUNhybb76JmwAn76zoheSV.F1Yxg6ih6', 1, NULL, '2023-12-14 03:47:44', '2023-12-14 03:47:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacancies`
--

CREATE TABLE `vacancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary_id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `job_position_id` bigint(20) UNSIGNED NOT NULL,
  `ocupation_id` bigint(20) UNSIGNED NOT NULL,
  `end_date` date NOT NULL,
  `avaliable_jobs` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vacancies`
--

INSERT INTO `vacancies` (`id`, `company_id`, `description`, `salary_id`, `contract_id`, `task_id`, `job_position_id`, `ocupation_id`, `end_date`, `avaliable_jobs`, `created_at`, `updated_at`) VALUES
(1, 1, 'cria de cabras y cuidado de su entorno', 1, 1, 1, 1, 1, '2022-01-26', '3', '2023-12-10 23:05:15', '2023-12-10 23:05:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidates_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_municipality_code_foreign` (`municipality_code`),
  ADD KEY `companies_economic_activity_code_foreign` (`economic_activity_code`);

--
-- Indices de la tabla `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `economic_activities`
--
ALTER TABLE `economic_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `habilities`
--
ALTER TABLE `habilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `habilities_ocupation_id_foreign` (`ocupation_id`);

--
-- Indices de la tabla `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructors_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `job_positions`
--
ALTER TABLE `job_positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_positions_ocupation_id_foreign` (`ocupation_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipalities`
--
ALTER TABLE `municipalities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ocupations`
--
ALTER TABLE `ocupations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `postulates`
--
ALTER TABLE `postulates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `postulates_candidate_id_unique` (`candidate_id`),
  ADD KEY `postulates_vacancy_id_foreign` (`vacancy_id`);

--
-- Indices de la tabla `recruiters`
--
ALTER TABLE `recruiters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recruiters_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_ocupation_id_foreign` (`ocupation_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacancies_company_id_foreign` (`company_id`),
  ADD KEY `vacancies_salary_id_foreign` (`salary_id`),
  ADD KEY `vacancies_contract_id_foreign` (`contract_id`),
  ADD KEY `vacancies_task_id_foreign` (`task_id`),
  ADD KEY `vacancies_job_position_id_foreign` (`job_position_id`),
  ADD KEY `vacancies_ocupation_id_foreign` (`ocupation_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `economic_activities`
--
ALTER TABLE `economic_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habilities`
--
ALTER TABLE `habilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `job_positions`
--
ALTER TABLE `job_positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `municipalities`
--
ALTER TABLE `municipalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ocupations`
--
ALTER TABLE `ocupations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postulates`
--
ALTER TABLE `postulates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `recruiters`
--
ALTER TABLE `recruiters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `candidates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_economic_activity_code_foreign` FOREIGN KEY (`economic_activity_code`) REFERENCES `economic_activities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `companies_municipality_code_foreign` FOREIGN KEY (`municipality_code`) REFERENCES `municipalities` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `habilities`
--
ALTER TABLE `habilities`
  ADD CONSTRAINT `habilities_ocupation_id_foreign` FOREIGN KEY (`ocupation_id`) REFERENCES `ocupations` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `job_positions`
--
ALTER TABLE `job_positions`
  ADD CONSTRAINT `job_positions_ocupation_id_foreign` FOREIGN KEY (`ocupation_id`) REFERENCES `ocupations` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `postulates`
--
ALTER TABLE `postulates`
  ADD CONSTRAINT `postulates_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `postulates_vacancy_id_foreign` FOREIGN KEY (`vacancy_id`) REFERENCES `vacancies` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `recruiters`
--
ALTER TABLE `recruiters`
  ADD CONSTRAINT `recruiters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ocupation_id_foreign` FOREIGN KEY (`ocupation_id`) REFERENCES `ocupations` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `vacancies`
--
ALTER TABLE `vacancies`
  ADD CONSTRAINT `vacancies_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancies_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancies_job_position_id_foreign` FOREIGN KEY (`job_position_id`) REFERENCES `job_positions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancies_ocupation_id_foreign` FOREIGN KEY (`ocupation_id`) REFERENCES `ocupations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancies_salary_id_foreign` FOREIGN KEY (`salary_id`) REFERENCES `salaries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancies_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
