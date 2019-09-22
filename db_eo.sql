-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 08:50 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eo`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `email`, `alamat`) VALUES
(2, 'Baja', 'info@berkatabadijaya.com / 081805778889', 'Jln. Prabu Rangkasari, Dasan Cermen, Mataram'),
(3, 'Yankees', 'yankeeslombok_adv@yahoo.com / (0370) 625091', 'Jl. Pariwisata No. 40 Mataram'),
(4, 'Potensi', '@EPotensi / 0818037026', 'Mataram'),
(5, 'Mata Angin', '0370 621400', 'Jl Maktal 14, Cakra Barat, Cakra Negara, Mataram 8'),
(6, 'Mataram Tenda', 'mataramtenda100@gmail.com / 087865405022', 'Jl. Bung Karno No.100XX, Pagutan, Mataram'),
(7, 'Biru Langit', 'admin@biru-langit.com /  0819-1735-8606', 'Jln. Tulip No.12b Mataram'),
(8, 'Giga', 'info@giga.co.id', 'Mataram'),
(9, 'Dek', 'dek.production@gmail.com', 'Mataram'),
(10, 'Glow', 'glow@yahoo.com', 'Mataram'),
(11, 'Titik Terang', 'titikterangntb@gmail.com', 'Jln. Kulintang No. 9 Lingk. Kr. Bedil Kel. Mataram');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_nilai`
--

CREATE TABLE `alternatif_nilai` (
  `id_alternatif_nilai` int(11) NOT NULL,
  `id_kriteria` int(10) NOT NULL,
  `alternatif_id_dari` int(10) NOT NULL,
  `alternatif_id_tujuan` int(10) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif_nilai`
--

INSERT INTO `alternatif_nilai` (`id_alternatif_nilai`, `id_kriteria`, `alternatif_id_dari`, `alternatif_id_tujuan`, `nilai`) VALUES
(181, 3, 2, 3, 2),
(182, 3, 2, 4, 3),
(183, 3, 2, 5, 3),
(184, 3, 2, 6, 3),
(185, 3, 2, 7, 3),
(186, 3, 2, 8, 2),
(187, 3, 2, 9, 3),
(188, 3, 2, 10, 1),
(189, 3, 2, 11, 2),
(190, 3, 3, 4, 2),
(191, 3, 3, 5, 2),
(192, 3, 3, 6, 2),
(193, 3, 3, 7, 3),
(194, 3, 3, 8, 1),
(195, 3, 3, 9, 2),
(196, 3, 3, 10, 2),
(197, 3, 3, 11, 3),
(198, 3, 4, 5, 1),
(199, 3, 4, 6, 1),
(200, 3, 4, 7, 1),
(201, 3, 4, 8, 2),
(202, 3, 4, 9, 5),
(203, 3, 4, 10, 3),
(204, 3, 4, 11, 2),
(205, 3, 5, 6, 3),
(206, 3, 5, 7, 2),
(207, 3, 5, 8, 3),
(208, 3, 5, 9, 3),
(209, 3, 5, 10, 2),
(210, 3, 5, 11, 3),
(211, 3, 6, 7, 4),
(212, 3, 6, 8, 1),
(213, 3, 6, 9, 2),
(214, 3, 6, 10, 3),
(215, 3, 6, 11, 2),
(216, 3, 7, 8, 2),
(217, 3, 7, 9, 1),
(218, 3, 7, 10, 2),
(219, 3, 7, 11, 5),
(220, 3, 8, 9, 2),
(221, 3, 8, 10, 1),
(222, 3, 8, 11, 2),
(223, 3, 9, 10, 2),
(224, 3, 9, 11, 1),
(225, 3, 10, 11, 3),
(226, 4, 2, 3, 2),
(227, 4, 2, 4, 3),
(228, 4, 2, 5, 3),
(229, 4, 2, 6, 2),
(230, 4, 2, 7, 2),
(231, 4, 2, 8, 2),
(232, 4, 2, 9, 1),
(233, 4, 2, 10, 1),
(234, 4, 2, 11, 2),
(235, 4, 3, 4, 1),
(236, 4, 3, 5, 2),
(237, 4, 3, 6, 1),
(238, 4, 3, 7, 3),
(239, 4, 3, 8, 1),
(240, 4, 3, 9, 2),
(241, 4, 3, 10, 1),
(242, 4, 3, 11, 1),
(243, 4, 4, 5, 1),
(244, 4, 4, 6, 3),
(245, 4, 4, 7, 2),
(246, 4, 4, 8, 1),
(247, 4, 4, 9, 1),
(248, 4, 4, 10, 2),
(249, 4, 4, 11, 3),
(250, 4, 5, 6, 2),
(251, 4, 5, 7, 1),
(252, 4, 5, 8, 2),
(253, 4, 5, 9, 3),
(254, 4, 5, 10, 1),
(255, 4, 5, 11, 1),
(256, 4, 6, 7, 2),
(257, 4, 6, 8, 1),
(258, 4, 6, 9, 1),
(259, 4, 6, 10, 2),
(260, 4, 6, 11, 2),
(261, 4, 7, 8, 2),
(262, 4, 7, 9, 2),
(263, 4, 7, 10, 1),
(264, 4, 7, 11, 1),
(265, 4, 8, 9, 2),
(266, 4, 8, 10, 1),
(267, 4, 8, 11, 2),
(268, 4, 9, 10, 2),
(269, 4, 9, 11, 1),
(270, 4, 10, 11, 2),
(271, 5, 2, 3, 2),
(272, 5, 2, 4, 3),
(273, 5, 2, 5, 3),
(274, 5, 2, 6, 2),
(275, 5, 2, 7, 2),
(276, 5, 2, 8, 2),
(277, 5, 2, 9, 1),
(278, 5, 2, 10, 1),
(279, 5, 2, 11, 2),
(280, 5, 3, 4, 1),
(281, 5, 3, 5, 2),
(282, 5, 3, 6, 1),
(283, 5, 3, 7, 3),
(284, 5, 3, 8, 3),
(285, 5, 3, 9, 2),
(286, 5, 3, 10, 1),
(287, 5, 3, 11, 1),
(288, 5, 4, 5, 1),
(289, 5, 4, 6, 3),
(290, 5, 4, 7, 2),
(291, 5, 4, 8, 1),
(292, 5, 4, 9, 4),
(293, 5, 4, 10, 2),
(294, 5, 4, 11, 3),
(295, 5, 5, 6, 2),
(296, 5, 5, 7, 1),
(297, 5, 5, 8, 2),
(298, 5, 5, 9, 3),
(299, 5, 5, 10, 1),
(300, 5, 5, 11, 1),
(301, 5, 6, 7, 2),
(302, 5, 6, 8, 1),
(303, 5, 6, 9, 1),
(304, 5, 6, 10, 2),
(305, 5, 6, 11, 2),
(306, 5, 7, 8, 2),
(307, 5, 7, 9, 2),
(308, 5, 7, 10, 1),
(309, 5, 7, 11, 1),
(310, 5, 8, 9, 2),
(311, 5, 8, 10, 1),
(312, 5, 8, 11, 2),
(313, 5, 9, 10, 4),
(314, 5, 9, 11, 1),
(315, 5, 10, 11, 2),
(316, 6, 2, 3, 2),
(317, 6, 2, 4, 2),
(318, 6, 2, 5, 1),
(319, 6, 2, 6, 2),
(320, 6, 2, 7, 2),
(321, 6, 2, 8, 2),
(322, 6, 2, 9, 1),
(323, 6, 2, 10, 1),
(324, 6, 2, 11, 1),
(325, 6, 3, 4, 1),
(326, 6, 3, 5, 2),
(327, 6, 3, 6, 1),
(328, 6, 3, 7, 3),
(329, 6, 3, 8, 1),
(330, 6, 3, 9, 2),
(331, 6, 3, 10, 1),
(332, 6, 3, 11, 1),
(333, 6, 4, 5, 1),
(334, 6, 4, 6, 1),
(335, 6, 4, 7, 2),
(336, 6, 4, 8, 1),
(337, 6, 4, 9, 1),
(338, 6, 4, 10, 2),
(339, 6, 4, 11, 3),
(340, 6, 5, 6, 2),
(341, 6, 5, 7, 1),
(342, 6, 5, 8, 2),
(343, 6, 5, 9, 3),
(344, 6, 5, 10, 1),
(345, 6, 5, 11, 1),
(346, 6, 6, 7, 2),
(347, 6, 6, 8, 1),
(348, 6, 6, 9, 1),
(349, 6, 6, 10, 2),
(350, 6, 6, 11, 2),
(351, 6, 7, 8, 2),
(352, 6, 7, 9, 1),
(353, 6, 7, 10, 1),
(354, 6, 7, 11, 1),
(355, 6, 8, 9, 2),
(356, 6, 8, 10, 1),
(357, 6, 8, 11, 2),
(358, 6, 9, 10, 2),
(359, 6, 9, 11, 1),
(360, 6, 10, 11, 2),
(406, 1, 2, 3, 1),
(407, 1, 2, 4, 1),
(408, 1, 2, 5, 3),
(409, 1, 2, 6, 3),
(410, 1, 2, 7, 1),
(411, 1, 2, 8, 2),
(412, 1, 2, 9, 3),
(413, 1, 2, 10, 1),
(414, 1, 2, 11, 2),
(415, 1, 3, 4, 2),
(416, 1, 3, 5, 1),
(417, 1, 3, 6, 2),
(418, 1, 3, 7, 2),
(419, 1, 3, 8, 1),
(420, 1, 3, 9, 2),
(421, 1, 3, 10, 2),
(422, 1, 3, 11, 1),
(423, 1, 4, 5, 1),
(424, 1, 4, 6, 2),
(425, 1, 4, 7, 1),
(426, 1, 4, 8, 2),
(427, 1, 4, 9, 1),
(428, 1, 4, 10, 3),
(429, 1, 4, 11, 2),
(430, 1, 5, 6, 1),
(431, 1, 5, 7, 1),
(432, 1, 5, 8, 3),
(433, 1, 5, 9, 1),
(434, 1, 5, 10, 2),
(435, 1, 5, 11, 3),
(436, 1, 6, 7, 3),
(437, 1, 6, 8, 1),
(438, 1, 6, 9, 2),
(439, 1, 6, 10, 1),
(440, 1, 6, 11, 2),
(441, 1, 7, 8, 2),
(442, 1, 7, 9, 1),
(443, 1, 7, 10, 2),
(444, 1, 7, 11, 5),
(445, 1, 8, 9, 2),
(446, 1, 8, 10, 1),
(447, 1, 8, 11, 2),
(448, 1, 9, 10, 2),
(449, 1, 9, 11, 1),
(450, 1, 10, 11, 1),
(451, 2, 2, 3, 1),
(452, 2, 2, 4, 1),
(453, 2, 2, 5, 1),
(454, 2, 2, 6, 1),
(455, 2, 2, 7, 1),
(456, 2, 2, 8, 1),
(457, 2, 2, 9, 1),
(458, 2, 2, 10, 1),
(459, 2, 2, 11, 1),
(460, 2, 3, 4, 2),
(461, 2, 3, 5, 5),
(462, 2, 3, 6, 3),
(463, 2, 3, 7, 1),
(464, 2, 3, 8, 1),
(465, 2, 3, 9, 2),
(466, 2, 3, 10, 2),
(467, 2, 3, 11, 1),
(468, 2, 4, 5, 1),
(469, 2, 4, 6, 1),
(470, 2, 4, 7, 2),
(471, 2, 4, 8, 2),
(472, 2, 4, 9, 1),
(473, 2, 4, 10, 3),
(474, 2, 4, 11, 2),
(475, 2, 5, 6, 2),
(476, 2, 5, 7, 5),
(477, 2, 5, 8, 3),
(478, 2, 5, 9, 3),
(479, 2, 5, 10, 2),
(480, 2, 5, 11, 3),
(481, 2, 6, 7, 3),
(482, 2, 6, 8, 1),
(483, 2, 6, 9, 2),
(484, 2, 6, 10, 3),
(485, 2, 6, 11, 2),
(486, 2, 7, 8, 2),
(487, 2, 7, 9, 1),
(488, 2, 7, 10, 2),
(489, 2, 7, 11, 1),
(490, 2, 8, 9, 2),
(491, 2, 8, 10, 1),
(492, 2, 8, 11, 2),
(493, 2, 9, 10, 2),
(494, 2, 9, 11, 1),
(495, 2, 10, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(1, 'Harga'),
(2, 'Mitra'),
(3, 'Pengalaman'),
(4, 'Jenis Event'),
(5, 'Link/Koneksi'),
(6, 'Kreatif');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_nilai`
--

CREATE TABLE `kriteria_nilai` (
  `id_kriteria_nilai` int(11) NOT NULL,
  `kriteria_id_dari` int(10) NOT NULL,
  `kriteria_id_tujuan` int(10) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_nilai`
--

INSERT INTO `kriteria_nilai` (`id_kriteria_nilai`, `kriteria_id_dari`, `kriteria_id_tujuan`, `nilai`) VALUES
(451, 1, 2, 8),
(452, 1, 3, 1),
(453, 1, 4, 1),
(454, 1, 5, 1),
(455, 1, 6, 1),
(456, 2, 3, 1),
(457, 2, 4, 1),
(458, 2, 5, 1),
(459, 2, 6, 1),
(460, 3, 4, 1),
(461, 3, 5, 1),
(462, 3, 6, 1),
(463, 4, 5, 1),
(464, 4, 6, 1),
(465, 5, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE `rangking` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`id`, `id_alternatif`, `nilai`) VALUES
(1, 2, 0.164),
(2, 3, 0.137),
(3, 4, 0.114),
(4, 5, 0.122),
(5, 6, 0.098),
(6, 7, 0.09),
(7, 8, 0.08),
(8, 9, 0.07),
(9, 10, 0.068),
(10, 11, 0.058);

-- --------------------------------------------------------

--
-- Table structure for table `rata_alternatif`
--

CREATE TABLE `rata_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rata_alternatif`
--

INSERT INTO `rata_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(1, 2, 1, 0.15292626426836403),
(2, 3, 1, 0.13260594229127248),
(3, 4, 1, 0.11718625489777246),
(4, 5, 1, 0.11211386107537862),
(5, 6, 1, 0.09900479734578788),
(6, 7, 1, 0.11242274138425894),
(7, 8, 1, 0.07917361077279803),
(8, 9, 1, 0.07353599749751503),
(9, 10, 1, 0.0640575254722465),
(10, 11, 1, 0.056973004994606044),
(11, 2, 2, 0.09753501400560226),
(12, 3, 2, 0.16033020868297748),
(13, 4, 2, 0.09950146607916624),
(14, 5, 2, 0.14261312330999285),
(15, 6, 2, 0.0971408165917395),
(16, 7, 2, 0.07222796005441304),
(17, 8, 2, 0.07837315258118452),
(18, 9, 2, 0.06152631988033584),
(19, 10, 2, 0.05918114312726436),
(20, 11, 2, 0.06132152730587502),
(21, 2, 3, 0.19326768810585776),
(22, 3, 3, 0.13939679542356723),
(23, 4, 3, 0.11207315689253543),
(24, 5, 3, 0.12992423161312505),
(25, 6, 3, 0.10167181478387625),
(26, 7, 3, 0.08564874184819951),
(27, 8, 3, 0.07398413016843122),
(28, 9, 3, 0.05319947483490832),
(29, 10, 3, 0.0684398213928269),
(30, 11, 3, 0.0423941449366723),
(31, 2, 4, 0.16949879131522133),
(32, 3, 4, 0.11261928844231077),
(33, 4, 4, 0.12355364746084826),
(34, 5, 4, 0.10468008424245748),
(35, 6, 4, 0.09269803373353071),
(36, 7, 4, 0.0815281071422045),
(37, 8, 4, 0.08777685146752084),
(38, 9, 4, 0.07974401009238738),
(39, 10, 4, 0.08435091147362953),
(40, 11, 4, 0.06355027462988924),
(41, 2, 5, 0.16917366908635936),
(42, 3, 5, 0.1241064792209586),
(43, 4, 5, 0.1381424303006084),
(44, 5, 5, 0.09917954635796437),
(45, 6, 5, 0.089315428435584),
(46, 7, 5, 0.07655459405280077),
(47, 8, 5, 0.07728602026814671),
(48, 9, 5, 0.08250652726247645),
(49, 10, 5, 0.08131722517412754),
(50, 11, 5, 0.062418079840973736),
(51, 2, 6, 0.13848622514139758),
(52, 3, 6, 0.11755208903484766),
(53, 4, 6, 0.11386717752234994),
(54, 5, 6, 0.11961877394636015),
(55, 6, 6, 0.10184336799854043),
(56, 7, 6, 0.07670872103630724),
(57, 8, 6, 0.09090594781974091),
(58, 9, 6, 0.08363729246487867),
(59, 10, 6, 0.08514787447546067),
(60, 11, 6, 0.07223253056011678);

-- --------------------------------------------------------

--
-- Table structure for table `rata_kriteria`
--

CREATE TABLE `rata_kriteria` (
  `id` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rata_kriteria`
--

INSERT INTO `rata_kriteria` (`id`, `id_kriteria`, `nilai`) VALUES
(9, 1, 0.1611111111111111),
(10, 2, 0.12799666458203043),
(11, 3, 0.15645194913487595),
(12, 4, 0.15645194913487595),
(13, 5, 0.15645194913487595),
(14, 6, 0.15645194913487595);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'administrator', 'admin', 'pass', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `alternatif_nilai`
--
ALTER TABLE `alternatif_nilai`
  ADD PRIMARY KEY (`id_alternatif_nilai`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  ADD PRIMARY KEY (`id_kriteria_nilai`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `rata_alternatif`
--
ALTER TABLE `rata_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rata_kriteria`
--
ALTER TABLE `rata_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `alternatif_nilai`
--
ALTER TABLE `alternatif_nilai`
  MODIFY `id_alternatif_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=496;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  MODIFY `id_kriteria_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rata_alternatif`
--
ALTER TABLE `rata_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `rata_kriteria`
--
ALTER TABLE `rata_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rangking`
--
ALTER TABLE `rangking`
  ADD CONSTRAINT `rangking_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`);

--
-- Constraints for table `rata_kriteria`
--
ALTER TABLE `rata_kriteria`
  ADD CONSTRAINT `rata_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
