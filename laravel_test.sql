-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Jan 2021 um 19:35
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `laravel_test`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `attachmentable`
--

CREATE TABLE `attachmentable` (
  `id` int(10) UNSIGNED NOT NULL,
  `attachmentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachmentable_id` int(10) UNSIGNED NOT NULL,
  `attachment_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hash` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `attachments`
--

INSERT INTO `attachments` (`id`, `name`, `original_name`, `mime`, `extension`, `size`, `sort`, `path`, `description`, `alt`, `hash`, `disk`, `user_id`, `group`, `created_at`, `updated_at`) VALUES
(1, '025c9b0899e62a67b152c15aee410b0dd638330b', 'blob', 'image/png', 'png', 289808, 0, '2020/12/18/', NULL, NULL, 'f6db5838927d6eac755d3b1dd8dbb6babea7251b', 'public', 7, NULL, '2020-12-18 17:39:41', '2020-12-18 17:39:41'),
(2, '865a879a1c9c6d626465933dd8278eb8ad70ee13', 'blob', 'image/png', 'png', 463743, 0, '2021/01/09/', NULL, NULL, '351c82f6c1581dd00a1d4b5143bcec9d05ae0932', 'public', 7, NULL, '2021-01-09 18:07:19', '2021-01-09 18:07:19'),
(3, '865a879a1c9c6d626465933dd8278eb8ad70ee13', 'blob', 'image/png', 'png', 463743, 0, '2021/01/09/', NULL, NULL, '351c82f6c1581dd00a1d4b5143bcec9d05ae0932', 'public', 7, NULL, '2021-01-09 18:07:19', '2021-01-09 18:07:19'),
(4, '865a879a1c9c6d626465933dd8278eb8ad70ee13', 'blob', 'image/png', 'png', 463743, 0, '2021/01/09/', NULL, NULL, '351c82f6c1581dd00a1d4b5143bcec9d05ae0932', 'public', 12, NULL, '2021-01-09 18:07:53', '2021-01-09 18:07:53'),
(5, '865a879a1c9c6d626465933dd8278eb8ad70ee13', 'blob', 'image/png', 'png', 463743, 0, '2021/01/09/', NULL, NULL, '351c82f6c1581dd00a1d4b5143bcec9d05ae0932', 'public', 7, NULL, '2021-01-10 14:39:24', '2021-01-10 14:39:24'),
(6, '4346e928a1119737c73d7624e3b31842437d46be', 'blob', 'image/png', 'png', 390813, 0, '2021/01/10/', NULL, NULL, '3c4a72aaa0c0624023096a9132c94482080b59fe', 'public', 4, NULL, '2021-01-10 16:47:01', '2021-01-10 16:47:01'),
(7, '2c4f8719b657c07d201e4450e029352c837142e7', 'blob', 'image/png', 'png', 433289, 0, '2021/01/10/', NULL, NULL, 'a3691ead75739c112ed0d6e01a91ec2879a57ad2', 'public', 4, NULL, '2021-01-10 16:56:47', '2021-01-10 16:56:47'),
(8, '52dcb5a36859bd7cd8678be70596b10f85dbf842', 'blob', 'image/png', 'png', 439256, 0, '2021/01/10/', NULL, NULL, 'a4e3f96e0c27b079f0e6251dcdf8122749ad81b6', 'public', 4, NULL, '2021-01-10 17:00:24', '2021-01-10 17:00:24'),
(9, 'f94011f9ab616d0046a8eeec7d1064fa11d00ada', 'blob', 'image/png', 'png', 480989, 0, '2021/01/10/', NULL, NULL, '81907c18628b80e308efd87cfaa0b09b15f10bac', 'public', 3, NULL, '2021-01-10 17:09:54', '2021-01-10 17:09:54'),
(10, 'c19e2baab8af60a230093d47249b18e17c83d5f2', 'blob', 'image/png', 'png', 322689, 0, '2021/01/10/', NULL, NULL, '4b36eaae0bbdb6194755e2ed9a9dad7e7b192a37', 'public', 3, NULL, '2021-01-10 17:14:11', '2021-01-10 17:14:11'),
(11, '07d420daef501ab9e95eecade78457b59bef48bf', 'blob', 'image/png', 'png', 304695, 0, '2021/01/10/', NULL, NULL, '03a1422232bc1358b308f4acaad3783f9b2c0554', 'public', 2, NULL, '2021-01-10 17:20:58', '2021-01-10 17:20:58');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `calendar_general`
--

CREATE TABLE `calendar_general` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `privateLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buecherKey` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `calendar_general`
--

INSERT INTO `calendar_general` (`id`, `user_id`, `name`, `country`, `street`, `location`, `status`, `description`, `public`, `featured`, `privateLink`, `buecherKey`, `template`, `unit`, `image`, `created_at`, `updated_at`) VALUES
(1, 4, 'Räumlichkeit an der FHGR', 'Schweiz', 'Pulvermühlestrasse 57', '7000 Chur', 1, '<p><strong>Wir bieten Büroräumlichkeiten zum Reservieren an!</strong></p><p>Die Fachhochschule Graubünden, ist eine Fachhochschule in der Schweiz und ist in der Lehre, Weiterbildung, Forschung und Dienstleistung tätig.</p>', 1, 0, '127.0.0.1/buecher/mjRdYXersHKgAVoC', 'mjRdYXersHKgAVoC', 'room', NULL, '/storage/2021/01/10/52dcb5a36859bd7cd8678be70596b10f85dbf842.png', '2021-01-10 17:04:12', '2021-01-10 17:04:12'),
(2, 4, 'Restaurant Hotel Rosenhügel', 'Schweiz', 'Malixerstrasse 32', 'Chur', 1, '<p><strong>Herzlich Willkommen im Restaurant Rosenhügel!</strong></p><p><br></p><p>Das Restaurant mit Schweizer-, Österreichischer- und Italienischer Küche.</p><p>Wir freuen uns sehr, Sie in unserem ganzjährig geöffneten Restaurant begrüssen zu dürfen</p><p>Sie können gerne wählen ob Sie</p><ul><li>auf unserer verglasten Panoramaterrasse,</li><li>in der rustikalen Pizzeria,&nbsp;</li><li>in unserem heimeligen Kaminsäli&nbsp;</li><li>oder auf der überdachten Aussenterrasse</li></ul><p>Platz nehmen möchten.</p>', 1, 0, '127.0.0.1/buecher/epJaQpPrYiElddYm', 'epJaQpPrYiElddYm', 'gastronomy', NULL, '/storage/2021/01/10/4346e928a1119737c73d7624e3b31842437d46be.png', '2021-01-10 16:53:04', '2021-01-10 16:53:04'),
(3, 3, 'Tennisplätze in Zizers', 'Schweiz', 'Bannholzstrasse', 'Zizers', 1, '<p><strong>Tennisplätze in Zizers reservieren</strong></p><p><br></p><p>Der Tennisclub Zizers besitzt vier Aussenplätze (Sandbelag) welche reserviert werden können.</p>', 1, 0, '127.0.0.1/buecher/oP9IzoQ6fmhM2Ny9', 'oP9IzoQ6fmhM2Ny9', 'sports', NULL, '/storage/2021/01/10/f94011f9ab616d0046a8eeec7d1064fa11d00ada.png', '2021-01-10 17:10:46', '2021-01-10 17:10:46'),
(4, 3, 'GoPro', 'Schweiz', 'Kantonsstrasse 14', 'Landquart', 1, '<p><strong>&nbsp;Hero 7 zum Ausleihen</strong></p><p><br></p><p>Ich besitze eine GoPro Hero 7. Da sie bei mir zuhause nur rumliegt, kann sie gerne ausgeliehen werden.</p>', 1, 0, '127.0.0.1/buecher/1mDbjBjKbr12J6ts', '1mDbjBjKbr12J6ts', 'none', 'GoPro Hero 7', '/storage/2021/01/10/c19e2baab8af60a230093d47249b18e17c83d5f2.png', '2021-01-10 17:14:58', '2021-01-10 17:14:58'),
(5, 2, 'Origin Massage', 'Schweiz', 'Dufourstrasse 131', 'Zürich', 1, '<p><strong>Eine Massagepraxis ist nur so gut wie ihre Therapeuten.</strong></p><p>Die Qualität unserer Mitarbeiter ist uns sehr wichtig. Deshalb absolvieren neue Therapeuten bei uns an unserem Hauptsitz in 8008 Zürich zunächst zwischen 10 - 25 Std. individuelles Training.</p><p><br></p><p>Buchen Sie jetzt einen Termin und kommen Sie noch heute vorbei.</p>', 1, 0, '127.0.0.1/buecher/JWzYDqkpaTIPRR2Y', 'JWzYDqkpaTIPRR2Y', 'services', NULL, '/storage/2021/01/10/07d420daef501ab9e95eecade78457b59bef48bf.png', '2021-01-10 17:23:03', '2021-01-10 17:23:03');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `calendar_openinghours`
--

CREATE TABLE `calendar_openinghours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calendar_id` bigint(20) UNSIGNED NOT NULL,
  `day_monday` tinyint(1) NOT NULL,
  `day_tuesday` tinyint(1) NOT NULL,
  `day_wednesday` tinyint(1) NOT NULL,
  `day_thursday` tinyint(1) NOT NULL,
  `day_friday` tinyint(1) NOT NULL,
  `day_saturday` tinyint(1) NOT NULL,
  `day_sunday` tinyint(1) NOT NULL,
  `repeat` tinyint(1) NOT NULL,
  `halfday_closed_general` tinyint(1) NOT NULL,
  `lunch_general` tinyint(1) NOT NULL,
  `start_general` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_general` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halfday_closed_monday` tinyint(1) NOT NULL,
  `lunch_monday` tinyint(1) NOT NULL,
  `start_monday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_monday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_start_monday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_end_monday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halfday_closed_tuesday` tinyint(1) NOT NULL,
  `lunch_tuesday` tinyint(1) NOT NULL,
  `start_tuesday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_tuesday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_start_tuesday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_end_tuesday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halfday_closed_wednesday` tinyint(1) NOT NULL,
  `lunch_wednesday` tinyint(1) NOT NULL,
  `start_wednesday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_wednesday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_start_wednesday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_end_wednesday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halfday_closed_thursday` tinyint(1) NOT NULL,
  `lunch_thursday` tinyint(1) NOT NULL,
  `start_thursday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_thursday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_start_thursday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_end_thursday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halfday_closed_friday` tinyint(1) NOT NULL,
  `lunch_friday` tinyint(1) NOT NULL,
  `start_friday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_friday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_start_friday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_end_friday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halfday_closed_saturday` tinyint(1) NOT NULL,
  `lunch_saturday` tinyint(1) NOT NULL,
  `start_saturday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_saturday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_start_saturday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_end_saturday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halfday_closed_sunday` tinyint(1) NOT NULL,
  `lunch_sunday` tinyint(1) NOT NULL,
  `start_sunday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_sunday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_start_sunday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_end_sunday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `calendar_openinghours`
--

INSERT INTO `calendar_openinghours` (`id`, `calendar_id`, `day_monday`, `day_tuesday`, `day_wednesday`, `day_thursday`, `day_friday`, `day_saturday`, `day_sunday`, `repeat`, `halfday_closed_general`, `lunch_general`, `start_general`, `end_general`, `lunch_start`, `lunch_end`, `halfday_closed_monday`, `lunch_monday`, `start_monday`, `end_monday`, `lunch_start_monday`, `lunch_end_monday`, `halfday_closed_tuesday`, `lunch_tuesday`, `start_tuesday`, `end_tuesday`, `lunch_start_tuesday`, `lunch_end_tuesday`, `halfday_closed_wednesday`, `lunch_wednesday`, `start_wednesday`, `end_wednesday`, `lunch_start_wednesday`, `lunch_end_wednesday`, `halfday_closed_thursday`, `lunch_thursday`, `start_thursday`, `end_thursday`, `lunch_start_thursday`, `lunch_end_thursday`, `halfday_closed_friday`, `lunch_friday`, `start_friday`, `end_friday`, `lunch_start_friday`, `lunch_end_friday`, `halfday_closed_saturday`, `lunch_saturday`, `start_saturday`, `end_saturday`, `lunch_start_saturday`, `lunch_end_saturday`, `halfday_closed_sunday`, `lunch_sunday`, `start_sunday`, `end_sunday`, `lunch_start_sunday`, `lunch_end_sunday`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 1, 0, 1, 0, 0, 1, 0, 0, '08:00', '20:00', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '2021-01-10 17:04:12', '2021-01-10 17:04:12'),
(2, 2, 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, NULL, NULL, NULL, NULL, 0, 1, '11:00', '00:00', '14:00', '17:00', 0, 0, NULL, NULL, NULL, NULL, 0, 1, '11:00', '00:00', NULL, NULL, 0, 1, NULL, NULL, '14:00', '17:00', 0, 1, '11:00', '00:00', NULL, NULL, 0, 0, '10:00', '00:00', NULL, NULL, 0, 0, '10:00', '23:00', NULL, NULL, '2021-01-10 16:53:04', '2021-01-10 16:53:04'),
(3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, '09:00', '23:00', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '2021-01-10 17:10:46', '2021-01-10 17:10:46'),
(4, 4, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, '10:00', '17:00', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '2021-01-10 17:14:58', '2021-01-10 17:14:58'),
(5, 5, 1, 1, 0, 1, 1, 0, 0, 1, 0, 1, '09:00', '17:00', '12:00', '13:30', 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '2021-01-10 17:23:03', '2021-01-10 17:23:03');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `calendar_specifications`
--

CREATE TABLE `calendar_specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calendar_id` bigint(20) UNSIGNED NOT NULL,
  `format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_fixed` tinyint(1) NOT NULL,
  `duration_all` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_min_min` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_min_h` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_min_d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_max_min` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_max_h` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_max_d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `calendar_specifications`
--

INSERT INTO `calendar_specifications` (`id`, `calendar_id`, `format`, `duration_fixed`, `duration_all`, `duration_min_min`, `duration_min_h`, `duration_min_d`, `duration_max_min`, `duration_max_h`, `duration_max_d`, `created_at`, `updated_at`) VALUES
(1, 2, 'weekly', 0, '0', '0', '1', '0', '0', '3', '0', '2021-01-10 16:53:04', '2021-01-10 16:53:04'),
(2, 1, 'weekly', 1, '0', '0', '0', '0', '0', '0', '0', '2021-01-10 17:04:12', '2021-01-10 17:04:12'),
(3, 3, 'weekly', 1, '0.75', '0', '0', '0', '0', '0', '0', '2021-01-10 17:10:46', '2021-01-10 17:10:46'),
(4, 4, 'weekly', 0, '0', '0', '0', '24', '0', '0', '168', '2021-01-10 17:14:58', '2021-01-10 17:14:58'),
(5, 5, 'weekly', 1, '2', '0', '0', '0', '0', '0', '0', '2021-01-10 17:23:03', '2021-01-10 17:23:03');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `failed_jobs`
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
-- Tabellenstruktur für Tabelle `gastrotable`
--

CREATE TABLE `gastrotable` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calendar_id` bigint(20) UNSIGNED NOT NULL,
  `gastrotable` int(11) NOT NULL,
  `gastrotable_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `gastrotable`
--

INSERT INTO `gastrotable` (`id`, `calendar_id`, `gastrotable`, `gastrotable_number`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 10, '2021-01-10 16:53:04', '2021-01-10 16:53:04'),
(2, 2, 6, 15, '2021-01-10 16:53:04', '2021-01-10 16:53:04'),
(3, 2, 8, 5, '2021-01-10 16:53:04', '2021-01-10 16:53:04');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(9, '2020_10_27_103200_create_calendar_table', 2),
(10, '2020_10_27_110500_create_calendar_user_table', 2),
(11, '2020_10_27_123636_create_calendars_table', 3),
(12, '2020_10_27_123952_create_calendar_users_table', 4),
(13, '2020_10_27_140515_create_calendar_users_table', 5),
(14, '2020_10_27_150410_create_calendars_table', 6),
(15, '2020_10_27_155626_create_calendars_table', 7),
(16, '2020_10_27_161332_create_calendars_table', 8),
(27, '2020_12_15_154028_create_calendar_general', 9),
(44, '2020_12_15_154058_create_calendar_openinghours', 10),
(45, '2020_12_15_154118_create_calendar_specifications', 10),
(46, '2020_12_15_174453_create_calendar_gererals', 10),
(47, '2014_10_12_100000_create_password_resets_table', 11),
(48, '2015_04_12_000000_create_orchid_users_table', 11),
(49, '2015_10_19_214424_create_orchid_roles_table', 11),
(50, '2015_10_19_214425_create_orchid_role_users_table', 11),
(51, '2016_08_07_125128_create_orchid_attachmentstable_table', 11),
(52, '2017_09_17_125801_create_notifications_table', 11),
(53, '2019_08_19_000000_create_failed_jobs_table', 11),
(54, '2020_12_15_153958_create_calendar_general', 11),
(55, '2020_12_15_154054_create_calendar_openinghours', 11),
(56, '2020_12_15_154211_create_calendar_specifications', 11),
(57, '2020_12_17_163527_create_calendar_gastrotable', 12),
(58, '2020_12_18_185858_create_service_employees', 13),
(59, '2020_12_18_191755_create_rooms', 14),
(60, '2020_12_18_193148_create_sports', 15),
(61, '2014_10_12_200000_add_two_factor_columns_to_users_table', 16),
(62, '2019_12_14_000001_create_personal_access_tokens_table', 16),
(63, '2021_01_05_122158_create_sessions_table', 16);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personal_access_tokens`
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
-- Tabellenstruktur für Tabelle `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `role_users`
--

CREATE TABLE `role_users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calendar_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assets` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `rooms`
--

INSERT INTO `rooms` (`id`, `calendar_id`, `name`, `capacity`, `assets`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sitzungszimmer', '20', 'Beamer, Flipchart', '2021-01-10 17:04:12', '2021-01-10 17:04:12'),
(2, 1, 'Konferenzraum', '10', 'Livestreammöglichkeit', '2021-01-10 17:04:12', '2021-01-10 17:04:12');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `service_employees`
--

CREATE TABLE `service_employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calendar_id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_function` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `service_employees`
--

INSERT INTO `service_employees` (`id`, `calendar_id`, `service_name`, `employee_name`, `employee_function`, `created_at`, `updated_at`) VALUES
(1, 5, 'Massagetermin', 'Hans Muster', 'Medizinischer Masseur', '2021-01-10 17:23:03', '2021-01-10 17:23:03'),
(2, 5, 'Massagetermin', 'John Doe', 'Masseur in Ausbildung', '2021-01-10 17:23:03', '2021-01-10 17:23:03'),
(3, 5, 'Massagetermin', 'Jane Doe', 'Fussmasseurin', '2021-01-10 17:23:03', '2021-01-10 17:23:03');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bX3iTIS0z1CHMi2qC1eO6dGImsP9ql9vBo7MQvuF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTHNDaHdlZWt2UXljWlZXUkVUQUJpcm1rTFU1Z3A0aWd6WEVjQnFWZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fX0=', 1610296344),
('kh0ZNjFRczrLz3fNgFpSFMAJcxGJat8R5E5VLbCp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNFMyWTN0TjZpQ1Q3R2laUU9uZHRzV3ByYXJGdWZubUpBZ1ZYYjVUUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9idWVjaGVyL2NyZWF0ZSI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUnkvU1lZVGsvUC5vb25mcG9XWmI0LnlULi9HYk1NVWRmSU1RemliV25ibW1vdGsyNjhjUHUiO30=', 1610303717),
('ZAN1VVvznyPZ6bzUXMcRgYXFnBx0y08ejmjTEvye', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTTFxblBrRVJab1RRMllOeGNGODl2MHN4YUdXVWE0a2dhY21KOTNXUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fX0=', 1610296505);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sports`
--

CREATE TABLE `sports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calendar_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `sports`
--

INSERT INTO `sports` (`id`, `calendar_id`, `name`, `number`, `created_at`, `updated_at`) VALUES
(1, 3, 'Tennisplatz', 4, '2021-01-10 17:10:46', '2021-01-10 17:10:46');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `permissions`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$Ry/SYYTk/P.oonfpoWZb4.yT./GbMMUdfIMQzibWnbmmotk268cPu', NULL, NULL, 'fkBUZAWZ7PzcJb9xNYLBuW3RtVqqVeAPyDmouEYKvLFFb1wsStqZQDjxbJQq', '2020-12-17 07:55:28', '2021-01-05 09:00:25', '{\"platform.systems.roles\":true,\"platform.systems.users\":true,\"platform.systems.attachment\":true,\"platform.index\":true,\"platform.systems.index\":true}'),
(2, 'Bernhard Aebersold', 'beni.aebersold@gmail.com', NULL, '$2y$10$P52Gum0jJLoOMRsrrCaODekq6sq/1g4XHLLxEYGQTCN7mdYJbxq9y', NULL, NULL, NULL, '2021-01-10 16:34:49', '2021-01-10 16:34:49', '{\"platform.systems.roles\":false,\"platform.systems.users\":false,\"platform.systems.attachment\":true,\"platform.index\":true,\"platform.systems.index\":false}'),
(3, 'Frank Zinsli', 'frank.zinsli@gmail.com', NULL, '$2y$10$GGCAR4zDLMWPZNmikVlSjudGfhaaSbaiQkQBQwoTlk6IV9NkOs1su', NULL, NULL, NULL, '2021-01-10 16:35:32', '2021-01-10 16:35:32', '{\"platform.systems.roles\":false,\"platform.systems.users\":false,\"platform.systems.attachment\":true,\"platform.index\":true,\"platform.systems.index\":false}'),
(4, 'Sandro Anderes', 'sandroanderes@outlook.com', NULL, '$2y$10$HGZry8lTEgEy1Wu2i8S5seDyrSWvvzbo3WCTUAR2Uomm.2KRDMLEi', NULL, NULL, NULL, '2021-01-10 16:36:07', '2021-01-10 16:36:07', '{\"platform.systems.roles\":false,\"platform.systems.users\":false,\"platform.systems.attachment\":true,\"platform.index\":true,\"platform.systems.index\":false}');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachmentable_attachmentable_type_attachmentable_id_index` (`attachmentable_type`,`attachmentable_id`),
  ADD KEY `attachmentable_attachment_id_foreign` (`attachment_id`);

--
-- Indizes für die Tabelle `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `calendar_general`
--
ALTER TABLE `calendar_general`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `privateLink` (`privateLink`),
  ADD KEY `calendar_general_user_id_foreign` (`user_id`);

--
-- Indizes für die Tabelle `calendar_openinghours`
--
ALTER TABLE `calendar_openinghours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `calendar_openinghours_calendar_id_foreign` (`calendar_id`);

--
-- Indizes für die Tabelle `calendar_specifications`
--
ALTER TABLE `calendar_specifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `calendar_specifications_calendar_id_foreign` (`calendar_id`);

--
-- Indizes für die Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indizes für die Tabelle `gastrotable`
--
ALTER TABLE `gastrotable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gastrotable_calendar_id_foreign` (`calendar_id`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indizes für die Tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indizes für die Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indizes für die Tabelle `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indizes für die Tabelle `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Indizes für die Tabelle `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_calendar_id_foreign` (`calendar_id`);

--
-- Indizes für die Tabelle `service_employees`
--
ALTER TABLE `service_employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_employees_calendar_id_foreign` (`calendar_id`);

--
-- Indizes für die Tabelle `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indizes für die Tabelle `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sports_calendar_id_foreign` (`calendar_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `attachmentable`
--
ALTER TABLE `attachmentable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `calendar_general`
--
ALTER TABLE `calendar_general`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT für Tabelle `calendar_openinghours`
--
ALTER TABLE `calendar_openinghours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT für Tabelle `calendar_specifications`
--
ALTER TABLE `calendar_specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT für Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `gastrotable`
--
ALTER TABLE `gastrotable`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT für Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `service_employees`
--
ALTER TABLE `service_employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT für Tabelle `sports`
--
ALTER TABLE `sports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD CONSTRAINT `attachmentable_attachment_id_foreign` FOREIGN KEY (`attachment_id`) REFERENCES `attachments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `calendar_general`
--
ALTER TABLE `calendar_general`
  ADD CONSTRAINT `calendar_general_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `calendar_openinghours`
--
ALTER TABLE `calendar_openinghours`
  ADD CONSTRAINT `calendar_openinghours_calendar_id_foreign` FOREIGN KEY (`calendar_id`) REFERENCES `calendar_general` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `calendar_specifications`
--
ALTER TABLE `calendar_specifications`
  ADD CONSTRAINT `calendar_specifications_calendar_id_foreign` FOREIGN KEY (`calendar_id`) REFERENCES `calendar_general` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `gastrotable`
--
ALTER TABLE `gastrotable`
  ADD CONSTRAINT `gastrotable_calendar_id_foreign` FOREIGN KEY (`calendar_id`) REFERENCES `calendar_general` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_calendar_id_foreign` FOREIGN KEY (`calendar_id`) REFERENCES `calendar_general` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `service_employees`
--
ALTER TABLE `service_employees`
  ADD CONSTRAINT `service_employees_calendar_id_foreign` FOREIGN KEY (`calendar_id`) REFERENCES `calendar_general` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `sports`
--
ALTER TABLE `sports`
  ADD CONSTRAINT `sports_calendar_id_foreign` FOREIGN KEY (`calendar_id`) REFERENCES `calendar_general` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
