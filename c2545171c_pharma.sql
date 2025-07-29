-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 28 juil. 2025 à 13:13
-- Version du serveur : 10.11.13-MariaDB-cll-lve
-- Version de PHP : 8.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `c2545171c_pharma`
--

-- --------------------------------------------------------

--
-- Structure de la table `annees`
--

CREATE TABLE `annees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `annee` varchar(255) NOT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annees`
--

INSERT INTO `annees` (`id`, `annee`, `statut`, `created_at`, `updated_at`) VALUES
(1, '2025', 'Activé', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `autre_diplomes`
--

CREATE TABLE `autre_diplomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nature` varchar(255) DEFAULT NULL,
  `date_diplome` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `communes`
--

CREATE TABLE `communes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `province_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `communes`
--

INSERT INTO `communes` (`id`, `code`, `libelle`, `province_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'BAGASSI', 1, NULL, NULL),
(2, NULL, 'BANA', 1, NULL, NULL),
(3, NULL, 'BOROMO', 1, NULL, NULL),
(4, NULL, 'FARA', 1, NULL, NULL),
(5, NULL, 'OURY', 1, NULL, NULL),
(6, NULL, 'PA', 1, NULL, NULL),
(7, NULL, 'POMPOI', 1, NULL, NULL),
(8, NULL, 'POURA', 1, NULL, NULL),
(9, NULL, 'SIBY', 1, NULL, NULL),
(10, NULL, 'YAHO', 1, NULL, NULL),
(11, NULL, 'BALAVE', 2, NULL, NULL),
(12, NULL, 'KOUKA', 2, NULL, NULL),
(13, NULL, 'SAMI', 2, NULL, NULL),
(14, NULL, 'SANABA', 2, NULL, NULL),
(15, NULL, 'SOLENZO', 2, NULL, NULL),
(16, NULL, 'TANSILA', 2, NULL, NULL),
(17, NULL, 'BARANI', 3, NULL, NULL),
(18, NULL, 'BOMBOROKUY', 3, NULL, NULL),
(19, NULL, 'BOURASSO', 3, NULL, NULL),
(20, NULL, 'DJIBASSO', 3, NULL, NULL),
(21, NULL, 'DOKUY', 3, NULL, NULL),
(22, NULL, 'DOUMBALA', 3, NULL, NULL),
(23, NULL, 'KOMBORI', 3, NULL, NULL),
(24, NULL, 'MADOUBA', 3, NULL, NULL),
(25, NULL, 'NOUNA', 3, NULL, NULL),
(26, NULL, 'SONO', 3, NULL, NULL),
(27, NULL, 'BONDOUKUY', 4, NULL, NULL),
(28, NULL, 'DEDOUGOU', 4, NULL, NULL),
(29, NULL, 'DOUROULA', 4, NULL, NULL),
(30, NULL, 'KONA', 4, NULL, NULL),
(31, NULL, 'OUARKOYE', 4, NULL, NULL),
(32, NULL, 'SAFANE', 4, NULL, NULL),
(33, NULL, 'TCHERIBA', 4, NULL, NULL),
(34, NULL, 'GASSAN', 5, NULL, NULL),
(35, NULL, 'GOSSINA', 5, NULL, NULL),
(36, NULL, 'KOUGNY', 5, NULL, NULL),
(37, NULL, 'TOMA', 5, NULL, NULL),
(38, NULL, 'YABA', 5, NULL, NULL),
(39, NULL, 'YE', 5, NULL, NULL),
(40, NULL, 'DI', 6, NULL, NULL),
(41, NULL, 'GOMBORO', 6, NULL, NULL),
(42, NULL, 'KASSOUM', 6, NULL, NULL),
(43, NULL, 'KIEMBARA', 6, NULL, NULL),
(44, NULL, 'LANFIERA', 6, NULL, NULL),
(45, NULL, 'LANKOUE', 6, NULL, NULL),
(46, NULL, 'TOENI', 6, NULL, NULL),
(47, NULL, 'TOUGAN', 6, NULL, NULL),
(48, NULL, 'BANFORA', 7, NULL, NULL),
(49, NULL, 'BEREGADOUGOU', 7, NULL, NULL),
(50, NULL, 'MANGODARA', 7, NULL, NULL),
(51, NULL, 'MOUSSODOUGOU', 7, NULL, NULL),
(52, NULL, 'NIANGOLOKO', 7, NULL, NULL),
(53, NULL, 'OUO', 7, NULL, NULL),
(54, NULL, 'SIDERADOUGOU', 7, NULL, NULL),
(55, NULL, 'SOUBAKANIEDOUGOU', 7, NULL, NULL),
(56, NULL, 'TIEFORA', 7, NULL, NULL),
(57, NULL, 'DAKORO', 8, NULL, NULL),
(58, NULL, 'DOUNA', 8, NULL, NULL),
(59, NULL, 'KANKALABA', 8, NULL, NULL),
(60, NULL, 'LOUMANA', 8, NULL, NULL),
(61, NULL, 'NIANKORODOUGOU', 8, NULL, NULL),
(62, NULL, 'OUELENI', 8, NULL, NULL),
(63, NULL, 'SINDOU', 8, NULL, NULL),
(64, NULL, 'WOLOKONTO', 8, NULL, NULL),
(65, NULL, 'KOMKI-IPALA', 9, NULL, NULL),
(66, NULL, 'KOMSILGA', 9, NULL, NULL),
(67, NULL, 'KOUBRI', 9, NULL, NULL),
(68, NULL, 'OUAGADOUGOU', 9, NULL, NULL),
(69, NULL, 'PABRE', 9, NULL, NULL),
(70, NULL, 'SAABA', 9, NULL, NULL),
(71, NULL, 'TANGHIN-DASSOURI', 9, NULL, NULL),
(72, NULL, 'BAGRE', 10, NULL, NULL),
(73, NULL, 'BANE', 10, NULL, NULL),
(74, NULL, 'BEGUEDO', 10, NULL, NULL),
(75, NULL, 'BISSIGA', 10, NULL, NULL),
(76, NULL, 'BITTOU', 10, NULL, NULL),
(77, NULL, 'BOUSSOUMA', 10, NULL, NULL),
(78, NULL, 'GARANGO', 10, NULL, NULL),
(79, NULL, 'KOMTOEGA', 10, NULL, NULL),
(80, NULL, 'NIAOGHO', 10, NULL, NULL),
(81, NULL, 'TENKODOGO', 10, NULL, NULL),
(82, NULL, 'ZABRE', 10, NULL, NULL),
(83, NULL, 'ZOAGA', 10, NULL, NULL),
(84, NULL, 'ZONSE', 10, NULL, NULL),
(85, NULL, 'COMIN-YANGA', 11, NULL, NULL),
(86, NULL, 'DOURTENGA', 11, NULL, NULL),
(87, NULL, 'LALGAYE', 11, NULL, NULL),
(88, NULL, 'OUARGAYE', 11, NULL, NULL),
(89, NULL, 'SANGHA', 11, NULL, NULL),
(90, NULL, 'SOUDOUGUI', 11, NULL, NULL),
(91, NULL, 'YARGATENGA', 11, NULL, NULL),
(92, NULL, 'YONDE', 11, NULL, NULL),
(93, NULL, 'ANDEMTENGA', 12, NULL, NULL),
(94, NULL, 'BASKOURE', 12, NULL, NULL),
(95, NULL, 'DIALGAYE', 12, NULL, NULL),
(96, NULL, 'GOUNGHIN', 12, NULL, NULL),
(97, NULL, 'KANDO', 12, NULL, NULL),
(98, NULL, 'KOUPELA', 12, NULL, NULL),
(99, NULL, 'POUYTENGA', 12, NULL, NULL),
(100, NULL, 'TENSOBENTENGA', 12, NULL, NULL),
(101, NULL, 'YARGO', 12, NULL, NULL),
(102, NULL, 'BOURZANGA', 13, NULL, NULL),
(103, NULL, 'GUIBARE', 13, NULL, NULL),
(104, NULL, 'KONGOUSSI', 13, NULL, NULL),
(105, NULL, 'NASSERE', 13, NULL, NULL),
(106, NULL, 'ROLLO', 13, NULL, NULL),
(107, NULL, 'ROUKO', 13, NULL, NULL),
(108, NULL, 'SABCE', 13, NULL, NULL),
(109, NULL, 'TIKARE', 13, NULL, NULL),
(110, NULL, 'ZIMTENGA', 13, NULL, NULL),
(111, NULL, 'BOALA', 14, NULL, NULL),
(112, NULL, 'BOULSA', 14, NULL, NULL),
(113, NULL, 'BOUROUM', 14, NULL, NULL),
(114, NULL, 'DARGO', 14, NULL, NULL),
(115, NULL, 'NAGBINGOU', 14, NULL, NULL),
(116, NULL, 'TOUGOURI', 14, NULL, NULL),
(117, NULL, 'YALGO', 14, NULL, NULL),
(118, NULL, 'ZEGUEDEGUIN', 14, NULL, NULL),
(119, NULL, 'BARSALOGHO', 15, NULL, NULL),
(120, NULL, 'BOUSSOUMA', 15, NULL, NULL),
(121, NULL, 'DABLO', 15, NULL, NULL),
(122, NULL, 'KAYA', 15, NULL, NULL),
(123, NULL, 'KORSIMORO', 15, NULL, NULL),
(124, NULL, 'MANE', 15, NULL, NULL),
(125, NULL, 'NAMISSIGUIMA', 15, NULL, NULL),
(126, NULL, 'PENSA', 15, NULL, NULL),
(127, NULL, 'PIBAORE', 15, NULL, NULL),
(128, NULL, 'PISSILA', 15, NULL, NULL),
(129, NULL, 'ZIGA', 15, NULL, NULL),
(130, NULL, 'BINGO', 16, NULL, NULL),
(131, NULL, 'IMASGO', 16, NULL, NULL),
(132, NULL, 'KINDI', 16, NULL, NULL),
(133, NULL, 'KOKOLOGHO', 16, NULL, NULL),
(134, NULL, 'KOUDOUGOU', 16, NULL, NULL),
(135, NULL, 'NANDIALA', 16, NULL, NULL),
(136, NULL, 'NANORO', 16, NULL, NULL),
(137, NULL, 'PELLA', 16, NULL, NULL),
(138, NULL, 'POA', 16, NULL, NULL),
(139, NULL, 'RAMONGO', 16, NULL, NULL),
(140, NULL, 'SABOU', 16, NULL, NULL),
(141, NULL, 'SIGLE', 16, NULL, NULL),
(142, NULL, 'SOAW', 16, NULL, NULL),
(143, NULL, 'SOURGOU', 16, NULL, NULL),
(144, NULL, 'THYOU', 16, NULL, NULL),
(145, NULL, 'DASSA', 17, NULL, NULL),
(146, NULL, 'DIDYR', 17, NULL, NULL),
(147, NULL, 'GODYR', 17, NULL, NULL),
(148, NULL, 'KORDIE', 17, NULL, NULL),
(149, NULL, 'KYON', 17, NULL, NULL),
(150, NULL, 'POUNI', 17, NULL, NULL),
(151, NULL, 'REO', 17, NULL, NULL),
(152, NULL, 'TENADO', 17, NULL, NULL),
(153, NULL, 'ZAMO', 17, NULL, NULL),
(154, NULL, 'ZAWARA', 17, NULL, NULL),
(155, NULL, 'BIEHA', 18, NULL, NULL),
(156, NULL, 'BOURA', 18, NULL, NULL),
(157, NULL, 'LEO', 18, NULL, NULL),
(158, NULL, 'NEBIELIANAYOU', 18, NULL, NULL),
(159, NULL, 'NIABOURI', 18, NULL, NULL),
(160, NULL, 'SILLY', 18, NULL, NULL),
(161, NULL, 'TÖ', 18, NULL, NULL),
(162, NULL, 'BAKATA', 19, NULL, NULL),
(163, NULL, 'BOUGNOUNOU', 19, NULL, NULL),
(164, NULL, 'CASSOU', 19, NULL, NULL),
(165, NULL, 'DALO', 19, NULL, NULL),
(166, NULL, 'GAO', 19, NULL, NULL),
(167, NULL, 'SAPOUY', 19, NULL, NULL),
(168, NULL, 'DOULOUGOU', 20, NULL, NULL),
(169, NULL, 'GAONGO', 20, NULL, NULL),
(170, NULL, 'IPELCE', 20, NULL, NULL),
(171, NULL, 'KAYAO', 20, NULL, NULL),
(172, NULL, 'KOMBISSIRI', 20, NULL, NULL),
(173, NULL, 'SAPONE', 20, NULL, NULL),
(174, NULL, 'TOECE', 20, NULL, NULL),
(175, NULL, 'GUIARO', 21, NULL, NULL),
(176, NULL, 'PO', 21, NULL, NULL),
(177, NULL, 'TIEBELE', 21, NULL, NULL),
(178, NULL, 'ZECCO', 21, NULL, NULL),
(179, NULL, 'ZIOU', 21, NULL, NULL),
(180, NULL, 'BERE', 22, NULL, NULL),
(181, NULL, 'BINDE', 22, NULL, NULL),
(182, NULL, 'GOGO', 22, NULL, NULL),
(183, NULL, 'GONBOUSSOUGOU', 22, NULL, NULL),
(184, NULL, 'GUIBA', 22, NULL, NULL),
(185, NULL, 'MANGA', 22, NULL, NULL),
(186, NULL, 'NOBERE', 22, NULL, NULL),
(187, NULL, 'BILANGA', 23, NULL, NULL),
(188, NULL, 'BOGANDE', 23, NULL, NULL),
(189, NULL, 'COALLA', 23, NULL, NULL),
(190, NULL, 'LIPTOUGOU', 23, NULL, NULL),
(191, NULL, 'MANI', 23, NULL, NULL),
(192, NULL, 'PIELA', 23, NULL, NULL),
(193, NULL, 'THION', 23, NULL, NULL),
(194, NULL, 'DIABO', 24, NULL, NULL),
(195, NULL, 'DIAPANGOU', 24, NULL, NULL),
(196, NULL, 'FADA N\'GOURMA', 24, NULL, NULL),
(197, NULL, 'MATIACOALI', 24, NULL, NULL),
(198, NULL, 'TIBGA', 24, NULL, NULL),
(199, NULL, 'YAMBA', 24, NULL, NULL),
(200, NULL, 'BARTIEBOUGOU', 25, NULL, NULL),
(201, NULL, 'FOUTOURI', 25, NULL, NULL),
(202, NULL, 'GAYERI', 25, NULL, NULL),
(203, NULL, 'KOMPIENGA', 26, NULL, NULL),
(204, NULL, 'MADJOARI', 26, NULL, NULL),
(205, NULL, 'PAMA', 26, NULL, NULL),
(206, NULL, 'BOTOU', 27, NULL, NULL),
(207, NULL, 'DIAPAGA', 27, NULL, NULL),
(208, NULL, 'KANTCHARI', 27, NULL, NULL),
(209, NULL, 'LOGOBOU', 27, NULL, NULL),
(210, NULL, 'NAMOUNOU', 27, NULL, NULL),
(211, NULL, 'PARTIAGA', 27, NULL, NULL),
(212, NULL, 'TAMBAGA', 27, NULL, NULL),
(213, NULL, 'TANSARGA', 27, NULL, NULL),
(214, NULL, 'BAMA', 28, NULL, NULL),
(215, NULL, 'BOBO-DIOULASSO', 28, NULL, NULL),
(216, NULL, 'DANDE', 28, NULL, NULL),
(217, NULL, 'FARAMANA', 28, NULL, NULL),
(218, NULL, 'FO', 28, NULL, NULL),
(219, NULL, 'KARANGASSO SAMBLA', 28, NULL, NULL),
(220, NULL, 'KARANKASSO  VIGUE', 28, NULL, NULL),
(221, NULL, 'KOUNDOUGOU', 28, NULL, NULL),
(222, NULL, 'LENA', 28, NULL, NULL),
(223, NULL, 'PADEMA', 28, NULL, NULL),
(224, NULL, 'PENI', 28, NULL, NULL),
(225, NULL, 'SATIRI', 28, NULL, NULL),
(226, NULL, 'TOUSSIANA', 28, NULL, NULL),
(227, NULL, 'BANZON', 29, NULL, NULL),
(228, NULL, 'DJIGOUERA', 29, NULL, NULL),
(229, NULL, 'KANGALA', 29, NULL, NULL),
(230, NULL, 'KAYAN', 29, NULL, NULL),
(231, NULL, 'KOLOKO', 29, NULL, NULL),
(232, NULL, 'KOURINION', 29, NULL, NULL),
(233, NULL, 'KOUROUMA', 29, NULL, NULL),
(234, NULL, 'MOROLABA', 29, NULL, NULL),
(235, NULL, 'N\'DOROLA', 29, NULL, NULL),
(236, NULL, 'ORODARA', 29, NULL, NULL),
(237, NULL, 'SAMOGOHIRI', 29, NULL, NULL),
(238, NULL, 'SAMOROGOUAN', 29, NULL, NULL),
(239, NULL, 'SINDO', 29, NULL, NULL),
(240, NULL, 'BEKUY', 30, NULL, NULL),
(241, NULL, 'BEREBA', 30, NULL, NULL),
(242, NULL, 'BONI', 30, NULL, NULL),
(243, NULL, 'FOUNZAN', 30, NULL, NULL),
(244, NULL, 'HOUNDE', 30, NULL, NULL),
(245, NULL, 'KOTI', 30, NULL, NULL),
(246, NULL, 'KOUMBIA', 30, NULL, NULL),
(247, NULL, 'BANH', 31, NULL, NULL),
(248, NULL, 'OUINDIGUI', 31, NULL, NULL),
(249, NULL, 'SOLLE', 31, NULL, NULL),
(250, NULL, 'TITAO', 31, NULL, NULL),
(251, NULL, 'ARBOLLE', 32, NULL, NULL),
(252, NULL, 'BAGARE', 32, NULL, NULL),
(253, NULL, 'BOKIN', 32, NULL, NULL),
(254, NULL, 'GOMPONSOM', 32, NULL, NULL),
(255, NULL, 'KIRSI', 32, NULL, NULL),
(256, NULL, 'LA-TODEN', 32, NULL, NULL),
(257, NULL, 'PILIMPIKOU', 32, NULL, NULL),
(258, NULL, 'SAMBA', 32, NULL, NULL),
(259, NULL, 'YAKO', 32, NULL, NULL),
(260, NULL, 'BARGA', 33, NULL, NULL),
(261, NULL, 'KAÏN', 33, NULL, NULL),
(262, NULL, 'KALSAKA', 33, NULL, NULL),
(263, NULL, 'KOSSOUKA', 33, NULL, NULL),
(264, NULL, 'KOUMBRI', 33, NULL, NULL),
(265, NULL, 'NAMISSIGUIMA', 33, NULL, NULL),
(266, NULL, 'OUAHIGOUYA', 33, NULL, NULL),
(267, NULL, 'OULA', 33, NULL, NULL),
(268, NULL, 'RAMBO', 33, NULL, NULL),
(269, NULL, 'SEGUENEGA', 33, NULL, NULL),
(270, NULL, 'TANGAYE', 33, NULL, NULL),
(271, NULL, 'THIOU', 33, NULL, NULL),
(272, NULL, 'ZOGORE', 33, NULL, NULL),
(273, NULL, 'BASSI', 34, NULL, NULL),
(274, NULL, 'BOUSSOU', 34, NULL, NULL),
(275, NULL, 'GOURCY', 34, NULL, NULL),
(276, NULL, 'LEBA', 34, NULL, NULL),
(277, NULL, 'TOUGO', 34, NULL, NULL),
(278, NULL, 'BOUDRY', 35, NULL, NULL),
(279, NULL, 'KOGHO', 35, NULL, NULL),
(280, NULL, 'MEGUET', 35, NULL, NULL),
(281, NULL, 'MOGTEDO', 35, NULL, NULL),
(282, NULL, 'SALOGO', 35, NULL, NULL),
(283, NULL, 'ZAM', 35, NULL, NULL),
(284, NULL, 'ZORGHO', 35, NULL, NULL),
(285, NULL, 'ZOUNGOU', 35, NULL, NULL),
(286, NULL, 'BOUSSE', 36, NULL, NULL),
(287, NULL, 'LAYE', 36, NULL, NULL),
(288, NULL, 'NIOU', 36, NULL, NULL),
(289, NULL, 'SOURGOUBILA', 36, NULL, NULL),
(290, NULL, 'TOEGHIN', 36, NULL, NULL),
(291, NULL, 'ABSOUYA', 37, NULL, NULL),
(292, NULL, 'DAPELOGO', 37, NULL, NULL),
(293, NULL, 'LOUMBILA', 37, NULL, NULL),
(294, NULL, 'NAGREONGO', 37, NULL, NULL),
(295, NULL, 'OURGOU-MANEGA', 37, NULL, NULL),
(296, NULL, 'ZINIARE', 37, NULL, NULL),
(297, NULL, 'ZITENGA', 37, NULL, NULL),
(298, NULL, 'DEOU', 38, NULL, NULL),
(299, NULL, 'GOROM-GOROM', 38, NULL, NULL),
(300, NULL, 'MARKOYE', 38, NULL, NULL),
(301, NULL, 'OURSI', 38, NULL, NULL),
(302, NULL, 'TIN-AKOFF', 38, NULL, NULL),
(303, NULL, 'BANI', 39, NULL, NULL),
(304, NULL, 'DORI', 39, NULL, NULL),
(305, NULL, 'FALAGOUNTOU', 39, NULL, NULL),
(306, NULL, 'GORGADJI', 39, NULL, NULL),
(307, NULL, 'SAMPELGA', 39, NULL, NULL),
(308, NULL, 'SEYTENGA', 39, NULL, NULL),
(309, NULL, 'ARBINDA', 40, NULL, NULL),
(310, NULL, 'BARABOULE', 40, NULL, NULL),
(311, NULL, 'DJIBO', 40, NULL, NULL),
(312, NULL, 'DJIGUEL', 40, NULL, NULL),
(313, NULL, 'KELBO', 40, NULL, NULL),
(314, NULL, 'KOUTOUGOU', 40, NULL, NULL),
(315, NULL, 'NASSOUMBOU', 40, NULL, NULL),
(316, NULL, 'POBE-MENGAO', 40, NULL, NULL),
(317, NULL, 'TONGOMAYEL', 40, NULL, NULL),
(318, NULL, 'BOUNDORE', 41, NULL, NULL),
(319, NULL, 'MANSILA', 41, NULL, NULL),
(320, NULL, 'SEBBA', 41, NULL, NULL),
(321, NULL, 'SOLHAN', 41, NULL, NULL),
(322, NULL, 'TANKOU-GOUNADIE', 41, NULL, NULL),
(323, NULL, 'TITABE', 41, NULL, NULL),
(324, NULL, 'BONDIGUI', 42, NULL, NULL),
(325, NULL, 'DIEBOUGOU', 42, NULL, NULL),
(326, NULL, 'DOLO', 42, NULL, NULL),
(327, NULL, 'IOLONIORO', 42, NULL, NULL),
(328, NULL, 'TIANKOURA', 42, NULL, NULL),
(329, NULL, 'DANO', 43, NULL, NULL),
(330, NULL, 'DISSIN', 43, NULL, NULL),
(331, NULL, 'GUEGUERE', 43, NULL, NULL),
(332, NULL, 'KOPPER', 43, NULL, NULL),
(333, NULL, 'NIEGO', 43, NULL, NULL),
(334, NULL, 'ORONKUA', 43, NULL, NULL),
(335, NULL, 'OUESSA', 43, NULL, NULL),
(336, NULL, 'ZAMBO', 43, NULL, NULL),
(337, NULL, 'BATIE', 44, NULL, NULL),
(338, NULL, 'BOUSSOUKOULA', 44, NULL, NULL),
(339, NULL, 'KPUERE', 44, NULL, NULL),
(340, NULL, 'LEGMOIN', 44, NULL, NULL),
(341, NULL, 'MIDEBDO', 44, NULL, NULL),
(342, NULL, 'BOUROUM-BOUROUM', 45, NULL, NULL),
(343, NULL, 'BOUSSERA', 45, NULL, NULL),
(344, NULL, 'DJIGOUE', 45, NULL, NULL),
(345, NULL, 'GAOUA', 45, NULL, NULL),
(346, NULL, 'GBOMBLORA', 45, NULL, NULL),
(347, NULL, 'KAMPTI', 45, NULL, NULL),
(348, NULL, 'LOROPENI', 45, NULL, NULL),
(349, NULL, 'MALBA', 45, NULL, NULL),
(350, NULL, 'NAKO', 45, NULL, NULL),
(351, NULL, 'PERIGBAN', 45, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cotisations`
--

CREATE TABLE `cotisations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  `mode` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `annee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `fonctions`
--

CREATE TABLE `fonctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2025_07_08_100203_create_roles_table', 1),
(4, '2025_07_08_100245_create_sections_table', 1),
(5, '2025_07_08_100323_create_region_ordinals_table', 1),
(6, '2025_07_08_100347_create_regions_table', 1),
(7, '2025_07_08_100538_create_provinces_table', 1),
(8, '2025_07_08_100601_create_communes_table', 1),
(9, '2025_07_17_095830_create_responsabilites_table', 1),
(10, '2025_07_19_100519_create_annees_table', 1),
(11, '2025_08_01_000000_create_users_table', 1),
(12, '2025_08_08_100839_create_autre_diplomes_table', 1),
(13, '2025_08_08_100858_create_fonctions_table', 1),
(14, '2025_09_08_100926_create_cotisations_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `region_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `provinces`
--

INSERT INTO `provinces` (`id`, `code`, `libelle`, `region_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'BALE', 1, NULL, NULL),
(2, NULL, 'BANWA', 1, NULL, NULL),
(3, NULL, 'KOSSI', 1, NULL, NULL),
(4, NULL, 'MOUHOUN', 1, NULL, NULL),
(5, NULL, 'NAYALA', 1, NULL, NULL),
(6, NULL, 'SOUROU', 1, NULL, NULL),
(7, NULL, 'COMOE', 2, NULL, NULL),
(8, NULL, 'LERABA', 2, NULL, NULL),
(9, NULL, 'KADIOGO', 3, NULL, NULL),
(10, NULL, 'BOULGOU', 4, NULL, NULL),
(11, NULL, 'KOULPELOGO', 4, NULL, NULL),
(12, NULL, 'KOURITENGA', 4, NULL, NULL),
(13, NULL, 'BAM', 5, NULL, NULL),
(14, NULL, 'NAMENTENGA', 5, NULL, NULL),
(15, NULL, 'SANMATENGA', 5, NULL, NULL),
(16, NULL, 'BOULKIEMDE', 6, NULL, NULL),
(17, NULL, 'SANGUIE', 6, NULL, NULL),
(18, NULL, 'SISSILI', 6, NULL, NULL),
(19, NULL, 'ZIRO', 6, NULL, NULL),
(20, NULL, 'BAZEGA', 7, NULL, NULL),
(21, NULL, 'NAHOURI', 7, NULL, NULL),
(22, NULL, 'ZOUNDWEOGO', 7, NULL, NULL),
(23, NULL, 'GNAGNA', 8, NULL, NULL),
(24, NULL, 'GOURMA', 8, NULL, NULL),
(25, NULL, 'KOMONDJARI', 8, NULL, NULL),
(26, NULL, 'KOMPIENGA', 8, NULL, NULL),
(27, NULL, 'TAPOA', 8, NULL, NULL),
(28, NULL, 'HOUET', 9, NULL, NULL),
(29, NULL, 'KENEDOUGOU', 9, NULL, NULL),
(30, NULL, 'TUY', 9, NULL, NULL),
(31, NULL, 'LOROUM', 10, NULL, NULL),
(32, NULL, 'PASSORE', 10, NULL, NULL),
(33, NULL, 'YATENGA', 10, NULL, NULL),
(34, NULL, 'ZONDOMA', 10, NULL, NULL),
(35, NULL, 'GANZOURGOU', 11, NULL, NULL),
(36, NULL, 'KOURWEOGO', 11, NULL, NULL),
(37, NULL, 'OUBRITENGA', 11, NULL, NULL),
(38, NULL, 'OUDALAN', 12, NULL, NULL),
(39, NULL, 'SENO', 12, NULL, NULL),
(40, NULL, 'SOUM', 12, NULL, NULL),
(41, NULL, 'YAGHA', 12, NULL, NULL),
(42, NULL, 'BOUGOURIBA', 13, NULL, NULL),
(43, NULL, 'IOBA', 13, NULL, NULL),
(44, NULL, 'NOUMBIEL', 13, NULL, NULL),
(45, NULL, 'PONI', 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `region_ordinal_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `code`, `libelle`, `region_ordinal_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'BOUCLE DU MOUHOUN', 2, NULL, NULL),
(2, NULL, 'CASCADES', 2, NULL, NULL),
(3, NULL, 'CENTRE', 1, NULL, NULL),
(4, NULL, 'CENTRE-EST', 3, NULL, NULL),
(5, NULL, 'CENTRE-NORD', 3, NULL, NULL),
(6, NULL, 'CENTRE-OUEST', 1, NULL, NULL),
(7, NULL, 'CENTRE-SUD', 1, NULL, NULL),
(8, NULL, 'EST', 3, NULL, NULL),
(9, NULL, 'HAUTS-BASSINS', 2, NULL, NULL),
(10, NULL, 'NORD', 1, NULL, NULL),
(11, NULL, 'PLATEAU CENTRAL', 1, NULL, NULL),
(12, NULL, 'SAHEL', 3, NULL, NULL),
(13, NULL, 'SUD-OUEST', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `region_ordinals`
--

CREATE TABLE `region_ordinals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `region_ordinals`
--

INSERT INTO `region_ordinals` (`id`, `code`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'R1', 'REGION ORDINALE DU CENTRE', NULL, NULL),
(2, 'R2', 'REGION ORDINALE DE L’OUEST', NULL, NULL),
(3, 'R3', 'REGION ORDINALE DE L’EST', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `responsabilites`
--

CREATE TABLE `responsabilites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `responsabilites`
--

INSERT INTO `responsabilites` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Pharmacien titulaire d’officine', NULL, NULL),
(2, 'Pharmacien remplaçant d’officine', NULL, NULL),
(3, 'Pharmacien titulaire de laboratoire de biologies médicales', NULL, NULL),
(4, 'Pharmacien responsable des établissements de vente et ou de distribution en gros', NULL, NULL),
(5, 'Pharmacien responsable d’agence de promotion pharmaceutique', NULL, NULL),
(6, 'Pharmacien des établissements grossistes-répartiteurs', NULL, NULL),
(7, 'Pharmacien responsable de laboratoire de biologie médicale privé', NULL, NULL),
(8, 'Pharmacien de l’administration publique', NULL, NULL),
(9, 'Pharmacien des ONG et institutions internationales', NULL, NULL),
(10, 'Pharmacien assistant dans les officines', NULL, NULL),
(11, 'Pharmacien enseignant hospitalo-universitaire et/ou de la recherche', NULL, NULL),
(12, 'Pharmacien de pharmacie à usage intérieur', NULL, NULL),
(13, 'Pharmacien de laboratoire d’analyse biomédicale publique', NULL, NULL),
(14, 'Pharmacien nouvellement inscrit', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Membre', NULL, NULL),
(2, 'Admin', NULL, NULL),
(3, 'Super Admin', NULL, NULL),
(4, 'Trésorier', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sections`
--

INSERT INTO `sections` (`id`, `code`, `libelle`, `description`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Section A', 'Description de la Section A', NULL, NULL),
(2, 'B', 'Section B', 'Description de la Section B', NULL, NULL),
(3, 'C', 'Section C', 'Description de la Section C', NULL, NULL),
(4, 'D', 'Section D', 'Description de la Section D', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Ve6OWnMsf17aZDmXk0DHfEGycNxcThLftAlr2Lgh', NULL, '18.224.192.118', 'Mozilla/5.0 zgrab/0.x', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1phYVhkMmliS21WSGQ5U1JtN0pJMTRaSlpucG5rWGN2ZGR6WFFXdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vb3JkcmUtcGhhcm1hY2llbi56ZmFtYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753700604);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom_jeune_fille` varchar(255) DEFAULT NULL,
  `matricule` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `lieu_naiss` varchar(255) DEFAULT NULL,
  `nationalite` varchar(255) DEFAULT NULL,
  `situation_matrimoniale` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `domicile` varchar(255) DEFAULT NULL,
  `montant_cotisation` int(11) DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `diplome` varchar(255) DEFAULT NULL,
  `date_diplome` date DEFAULT NULL,
  `inst_delivre` varchar(255) DEFAULT NULL,
  `lieu_delivrance` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `region_ordinal_id` bigint(20) UNSIGNED DEFAULT NULL,
  `region_id` bigint(20) UNSIGNED DEFAULT NULL,
  `province_id` bigint(20) UNSIGNED DEFAULT NULL,
  `commune_id` bigint(20) UNSIGNED DEFAULT NULL,
  `responsabilite_id` bigint(20) UNSIGNED DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `code`, `nom`, `prenom`, `nom_jeune_fille`, `matricule`, `photo`, `email`, `email_verified_at`, `telephone`, `date_naiss`, `lieu_naiss`, `nationalite`, `situation_matrimoniale`, `adresse`, `domicile`, `montant_cotisation`, `statut`, `file`, `diplome`, `date_diplome`, `inst_delivre`, `lieu_delivrance`, `role_id`, `section_id`, `region_ordinal_id`, `region_id`, `province_id`, `commune_id`, `responsabilite_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'KABORE', 'Jean', NULL, '789012', NULL, 's-admin@gmail.com', NULL, '456789123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Actif', NULL, NULL, NULL, NULL, NULL, 3, 3, 3, NULL, NULL, NULL, NULL, '$2y$12$33YcvtKqRT41tLo6uybajuxdBY0aw1Vl.j.awK.ydzfGlyUOfwEWS', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annees`
--
ALTER TABLE `annees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `annees_annee_unique` (`annee`);

--
-- Index pour la table `autre_diplomes`
--
ALTER TABLE `autre_diplomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autre_diplomes_user_id_foreign` (`user_id`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communes_province_id_foreign` (`province_id`);

--
-- Index pour la table `cotisations`
--
ALTER TABLE `cotisations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cotisations_annee_id_foreign` (`annee_id`),
  ADD KEY `cotisations_user_id_foreign` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fonctions`
--
ALTER TABLE `fonctions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fonctions_user_id_foreign` (`user_id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provinces_region_id_foreign` (`region_id`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_region_ordinal_id_foreign` (`region_ordinal_id`);

--
-- Index pour la table `region_ordinals`
--
ALTER TABLE `region_ordinals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `responsabilites`
--
ALTER TABLE `responsabilites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sections_code_unique` (`code`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_section_id_foreign` (`section_id`),
  ADD KEY `users_region_ordinal_id_foreign` (`region_ordinal_id`),
  ADD KEY `users_region_id_foreign` (`region_id`),
  ADD KEY `users_province_id_foreign` (`province_id`),
  ADD KEY `users_commune_id_foreign` (`commune_id`),
  ADD KEY `users_responsabilite_id_foreign` (`responsabilite_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annees`
--
ALTER TABLE `annees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `autre_diplomes`
--
ALTER TABLE `autre_diplomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `communes`
--
ALTER TABLE `communes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;

--
-- AUTO_INCREMENT pour la table `cotisations`
--
ALTER TABLE `cotisations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fonctions`
--
ALTER TABLE `fonctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `region_ordinals`
--
ALTER TABLE `region_ordinals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `responsabilites`
--
ALTER TABLE `responsabilites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `autre_diplomes`
--
ALTER TABLE `autre_diplomes`
  ADD CONSTRAINT `autre_diplomes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `communes_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cotisations`
--
ALTER TABLE `cotisations`
  ADD CONSTRAINT `cotisations_annee_id_foreign` FOREIGN KEY (`annee_id`) REFERENCES `annees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cotisations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `fonctions`
--
ALTER TABLE `fonctions`
  ADD CONSTRAINT `fonctions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `provinces_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `regions_region_ordinal_id_foreign` FOREIGN KEY (`region_ordinal_id`) REFERENCES `region_ordinals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_region_ordinal_id_foreign` FOREIGN KEY (`region_ordinal_id`) REFERENCES `region_ordinals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_responsabilite_id_foreign` FOREIGN KEY (`responsabilite_id`) REFERENCES `responsabilites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
