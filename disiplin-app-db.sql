-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2024 pada 05.10
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disiplin-app-db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nik` varchar(24) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `email` varchar(64) NOT NULL,
  `telp` varchar(24) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nik`, `nip`, `nama`, `jk`, `email`, `telp`, `foto`) VALUES
(1, '1273687', '912969176', 'Rizky', 'L', 'agsdk@gmail.com', '937498234', 'pas photo keki zz.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
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
-- Struktur dari tabel `job_batches`
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
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, '10 PPLG', NULL, NULL),
(2, '11 RPL', NULL, NULL),
(3, '10 MPLB', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id`, `kelas_id`, `siswa_id`, `created_at`, `updated_at`) VALUES
(11, 2, 304, NULL, NULL),
(12, 2, 305, NULL, NULL),
(13, 2, 307, NULL, NULL),
(14, 2, 309, NULL, NULL),
(15, 2, 310, NULL, NULL),
(18, 2, 306, NULL, NULL),
(19, 2, 308, NULL, NULL),
(20, 2, 311, NULL, NULL),
(23, 1, 319, NULL, NULL),
(24, 2, 312, NULL, NULL),
(25, 2, 313, NULL, NULL),
(26, 2, 314, NULL, NULL),
(32, 1, 348, NULL, NULL),
(37, 1, 320, NULL, NULL),
(38, 1, 322, NULL, NULL),
(39, 1, 323, NULL, NULL),
(40, 3, 302, NULL, NULL),
(41, 1, 315, NULL, NULL),
(42, 1, 317, NULL, NULL),
(43, 1, 321, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '0001_01_01_000000_create_users_table', 1),
(10, '0001_01_01_000001_create_cache_table', 1),
(11, '0001_01_01_000002_create_jobs_table', 1),
(12, '2024_09_24_023210_create_kelas_table', 1),
(13, '2024_09_29_104637_create_kelas_siswa_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('xOUW5jsfrU5RGeqDQklqZrjDmjH2CNgkN8rCS7Od', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjhDOGQwYmR1aDhxN2prRTZFb00zRDgzSmp3S3ZlTkMyVjFGMDF0ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9rZWxhcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727853615);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `tahunMasuk` int(4) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempatLahir` varchar(128) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `jk` enum('L','P') NOT NULL DEFAULT 'L',
  `telp` varchar(64) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `tahunMasuk`, `nama`, `tempatLahir`, `tanggalLahir`, `jk`, `telp`, `foto`) VALUES
(302, 1551, 2024, 'Fathonah Winarsih', 'Padangpanjang', '2001-10-24', 'L', '024 2979 758', 'paspghoto zz.PNG'),
(303, 1364, 1998, 'Wulan Jessica Prastuti', 'Banda Aceh', '2001-09-02', 'L', '(+62) 28 0909 4499', NULL),
(304, 1726, 1987, 'Raina Tari Zulaika', 'Padang', '1977-09-03', 'L', '(+62) 472 0681 6476', NULL),
(305, 1262, 2004, 'Banawa Aswani Salahudin', 'Mojokerto', '2001-12-08', 'L', '0450 9738 9034', NULL),
(306, 1044, 1979, 'Langgeng Lutfan Hutagalung S.E.I', 'Banda Aceh', '2012-01-01', 'P', '(+62) 348 7201 3613', NULL),
(307, 1669, 2021, 'Hadi Wibowo M.Farm', 'Parepare', '2013-05-14', 'L', '0389 5816 3173', NULL),
(308, 1812, 1996, 'Wakiman Budiyanto', 'Pariaman', '1974-07-23', 'P', '(+62) 20 7014 3850', NULL),
(309, 1331, 1990, 'Kani Nabila Farida S.Sos', 'Tarakan', '2008-07-22', 'L', '(+62) 469 7093 1370', NULL),
(310, 1148, 1980, 'Tania Yuniar S.T.', 'Tangerang', '1976-01-31', 'P', '(+62) 612 1846 3152', NULL),
(311, 1344, 2000, 'Zizi Hastuti', 'Tangerang Selatan', '1994-12-01', 'P', '(+62) 473 4233 4126', NULL),
(312, 1019, 1996, 'Ibrahim Narpati', 'Bontang', '2022-08-24', 'P', '(+62) 415 5366 707', NULL),
(313, 1260, 2003, 'Uchita Rahimah', 'Bukittinggi', '1998-12-05', 'P', '(+62) 338 4212 4558', NULL),
(314, 1540, 1973, 'Titi Aryani S.Farm', 'Tidore Kepulauan', '2024-06-08', 'L', '0937 0189 492', NULL),
(315, 1584, 1983, 'Darman Suryono', 'Payakumbuh', '1971-07-14', 'L', '0212 0434 2256', NULL),
(316, 1385, 2002, 'Elisa Hastuti S.Gz', 'Administrasi Jakarta Utara', '2005-03-30', 'L', '0368 5584 5740', NULL),
(317, 1661, 2009, 'Galur Mangunsong S.T.', 'Bontang', '2020-10-06', 'P', '(+62) 749 6738 1500', NULL),
(318, 1763, 2001, 'Diana Shakila Aryani S.E.', 'Balikpapan', '2008-02-26', 'P', '0665 8379 8562', NULL),
(319, 1568, 1970, 'Rachel Winarsih S.Pd', 'Banjarmasin', '2022-08-23', 'P', '0640 8853 906', NULL),
(320, 1430, 2007, 'Zulfa Paulin Nasyidah', 'Tasikmalaya', '2018-04-28', 'P', '(+62) 674 3426 115', NULL),
(321, 1309, 2020, 'Eva Latika Prastuti M.Kom.', 'Padangsidempuan', '1974-09-24', 'P', '(+62) 272 0607 2253', NULL),
(322, 1454, 2010, 'Bakda Ikhsan Maulana', 'Tasikmalaya', '2007-09-25', 'L', '0938 9722 9812', NULL),
(323, 1603, 1993, 'Safina Nasyidah', 'Sungai Penuh', '2020-03-04', 'P', '(+62) 472 2223 4607', NULL),
(324, 1871, 1971, 'Chelsea Riyanti', 'Lubuklinggau', '1978-12-02', 'L', '0289 9407 051', NULL),
(325, 1333, 2009, 'Humaira Lidya Palastri', 'Administrasi Jakarta Utara', '1990-02-07', 'L', '(+62) 825 092 656', NULL),
(326, 1554, 2006, 'Julia Wulandari', 'Padang', '2017-09-19', 'P', '0756 6275 1139', NULL),
(327, 1182, 1982, 'Devi Widiastuti', 'Pekanbaru', '1991-06-25', 'P', '(+62) 210 0377 357', NULL),
(328, 1897, 1983, 'Empluk Salahudin', 'Bogor', '1977-09-15', 'L', '0454 1805 661', NULL),
(329, 1008, 1999, 'Paris Puspita M.Pd', 'Tanjungbalai', '1977-05-29', 'P', '(+62) 282 3524 4193', NULL),
(330, 1012, 1972, 'Silvia Laksmiwati', 'Gorontalo', '1999-12-04', 'P', '(+62) 29 0709 2469', NULL),
(331, 1614, 1982, 'Cahya Mustofa M.Ak', 'Ternate', '2012-08-04', 'P', '0493 1858 7498', NULL),
(332, 1220, 2015, 'Kayla Farida', 'Tangerang Selatan', '2012-10-28', 'L', '028 8492 3075', NULL),
(333, 1358, 1977, 'Bakda Jamal Prasetya', 'Blitar', '2020-03-26', 'L', '0811 1236 4255', NULL),
(334, 1874, 2008, 'Wakiman Edison Waskita', 'Jayapura', '2024-08-31', 'L', '(+62) 862 283 685', NULL),
(335, 1405, 2018, 'Imam Ajimat Manullang M.Farm', 'Denpasar', '2024-09-14', 'L', '0365 3583 6731', NULL),
(336, 1032, 2022, 'Safina Puspasari', 'Batam', '2024-05-20', 'L', '(+62) 699 7461 0265', NULL),
(337, 1011, 1970, 'Putri Tiara Hariyah', 'Solok', '1974-03-06', 'L', '(+62) 758 5841 880', NULL),
(338, 1133, 2013, 'Yani Puji Hastuti S.T.', 'Makassar', '2007-04-09', 'P', '0944 3312 457', NULL),
(339, 1396, 2017, 'Hardana Widodo', 'Prabumulih', '2001-06-20', 'P', '0704 1945 818', NULL),
(340, 1732, 1987, 'Wirda Mandasari', 'Banda Aceh', '1989-07-28', 'P', '(+62) 860 9768 0282', NULL),
(341, 1187, 2000, 'Wira Mitra Sihombing', 'Sorong', '2004-03-03', 'L', '0674 1870 7693', NULL),
(342, 1901, 1992, 'Sabrina Nurdiyanti S.Pd', 'Tanjungbalai', '1988-03-09', 'L', '0644 4003 5780', NULL),
(343, 1500, 1979, 'Rika Pia Oktaviani', 'Subulussalam', '1981-11-18', 'P', '(+62) 328 6924 792', NULL),
(344, 1655, 1973, 'Ajiono Budiman', 'Yogyakarta', '2014-07-17', 'L', '(+62) 715 5547 7177', NULL),
(345, 1974, 1994, 'Queen Lili Sudiati', 'Banjarmasin', '1975-08-13', 'P', '0736 6182 6567', NULL),
(346, 1590, 2013, 'Irma Utami', 'Palopo', '1981-09-08', 'L', '0862 7332 008', NULL),
(347, 1627, 2006, 'Kamaria Oktaviani S.E.', 'Payakumbuh', '2009-08-30', 'P', '(+62) 430 3540 878', NULL),
(348, 1662, 1993, 'Wira Gunarto S.Psi', 'Tomohon', '2015-02-17', 'P', '(+62) 658 2061 216', NULL),
(349, 1896, 1994, 'Natalia Handayani', 'Binjai', '1980-05-13', 'P', '024 5419 004', NULL),
(350, 1026, 1998, 'Jaiman Jail Saptono', 'Bengkulu', '1971-04-26', 'L', '(+62) 326 8156 715', NULL),
(351, 1728, 2018, 'Usyi Yuliarti', 'Bogor', '1973-10-29', 'L', '(+62) 815 3435 8616', NULL),
(352, 1257, 1978, 'Mariadi Jaya Wasita M.M.', 'Tegal', '2013-05-13', 'L', '0549 4580 602', NULL),
(353, 1283, 2007, 'Gandi Prayogo Budiman S.E.I', 'Banjar', '1994-12-19', 'P', '(+62) 752 8625 979', NULL),
(354, 1518, 1982, 'Gada Dongoran M.M.', 'Bima', '2022-04-24', 'P', '0557 4103 9898', NULL),
(355, 1025, 1971, 'Hardi Soleh Ardianto', 'Denpasar', '2002-01-30', 'L', '0502 9381 7474', NULL),
(356, 1438, 2014, 'Lanang Maheswara S.Psi', 'Pariaman', '1986-01-10', 'P', '(+62) 769 3944 600', NULL),
(357, 1291, 2012, 'Nilam Elvina Permata', 'Sawahlunto', '2011-02-17', 'P', '(+62) 346 0331 2177', NULL),
(358, 1422, 2016, 'Qori Hasanah', 'Medan', '1993-05-05', 'L', '0871 0749 3945', NULL),
(359, 1290, 2004, 'Vivi Prastuti S.E.', 'Medan', '1990-09-29', 'L', '(+62) 555 7909 0259', NULL),
(360, 1936, 2011, 'Anastasia Yulianti S.Psi', 'Gorontalo', '1993-12-15', 'P', '(+62) 25 1894 8187', NULL),
(361, 1067, 1998, 'Viktor Gara Putra S.Kom', 'Langsa', '1998-05-30', 'L', '(+62) 556 3075 2223', NULL),
(362, 1503, 1991, 'Carub Siregar', 'Tarakan', '1991-10-08', 'P', '0663 2129 240', NULL),
(363, 1837, 2014, 'Prabowo Simbolon', 'Cirebon', '1992-12-10', 'P', '0546 8840 7031', NULL),
(364, 1495, 1972, 'Cemani Kajen Simanjuntak', 'Pagar Alam', '1981-01-27', 'P', '(+62) 992 1616 479', NULL),
(365, 1870, 2010, 'Bagas Utama', 'Semarang', '1977-05-14', 'L', '0542 2585 293', NULL),
(366, 1197, 1974, 'Oni Fujiati', 'Bau-Bau', '2015-04-04', 'P', '(+62) 459 8587 4458', NULL),
(367, 1655, 1982, 'Jane Rahmawati', 'Kendari', '1997-07-13', 'P', '(+62) 806 9029 702', NULL),
(368, 1861, 1993, 'Balangga Emas Wibowo S.Pd', 'Lhokseumawe', '2004-09-06', 'L', '(+62) 724 1434 968', NULL),
(369, 1378, 1993, 'Danuja Luis Nugroho M.Ak', 'Tanjungbalai', '2021-03-20', 'L', '0547 2116 439', NULL),
(370, 1763, 2002, 'Rahayu Puspa Aryani S.Pt', 'Pematangsiantar', '2007-01-07', 'P', '0952 1403 225', NULL),
(371, 1653, 1976, 'Jasmin Silvia Rahimah', 'Bima', '2001-04-11', 'P', '0900 5435 9247', NULL),
(372, 1312, 2002, 'Garang Siregar', 'Sorong', '2023-02-26', 'L', '0865 665 182', NULL),
(373, 1910, 2004, 'Nilam Winarsih', 'Padang', '1971-11-24', 'P', '0377 7598 3484', NULL),
(374, 1888, 1981, 'Titin Hariyah', 'Tanjung Pinang', '2011-06-21', 'P', '0327 4263 3468', NULL),
(375, 1946, 2020, 'Heryanto Cengkal Mustofa', 'Solok', '1974-09-12', 'L', '025 4068 2145', NULL),
(376, 1768, 1995, 'Dinda Usamah', 'Prabumulih', '1977-11-29', 'P', '(+62) 440 6492 512', NULL),
(377, 1474, 1990, 'Garan Niyaga Prakasa S.Farm', 'Sungai Penuh', '1997-03-12', 'P', '0468 6782 5875', NULL),
(378, 1695, 2002, 'Sakti Hutasoit', 'Langsa', '2023-11-05', 'P', '(+62) 298 2122 639', NULL),
(379, 1483, 1984, 'Nasrullah Widodo', 'Sungai Penuh', '2022-02-22', 'P', '0243 7059 6913', NULL),
(380, 1913, 1971, 'Edison Wasita', 'Cimahi', '1976-05-25', 'L', '0379 7414 063', NULL),
(381, 1439, 2020, 'Wani Handayani S.E.I', 'Administrasi Jakarta Timur', '1983-04-17', 'P', '(+62) 478 7230 882', NULL),
(382, 1702, 2023, 'Tina Lalita Yulianti', 'Dumai', '1981-12-20', 'P', '0348 1366 4118', NULL),
(383, 1717, 2020, 'Putu Anggriawan S.Gz', 'Probolinggo', '1985-11-02', 'P', '0748 2835 9396', NULL),
(384, 1411, 2004, 'Ikin Tarihoran', 'Tangerang', '2012-04-16', 'P', '0734 8813 842', NULL),
(385, 1981, 1982, 'Rina Susanti', 'Medan', '1983-01-15', 'L', '0812 6154 454', NULL),
(386, 1746, 2016, 'Cornelia Rahimah M.TI.', 'Salatiga', '1990-02-08', 'L', '0501 1618 3632', NULL),
(387, 1000, 1993, 'Prabu Najmudin', 'Palembang', '1981-08-23', 'L', '(+62) 292 1653 0263', NULL),
(388, 1409, 1982, 'Kanda Haryanto', 'Lubuklinggau', '1980-05-27', 'L', '027 6499 187', NULL),
(389, 1401, 2004, 'Umi Salsabila Hassanah', 'Sibolga', '1998-11-06', 'P', '(+62) 882 470 948', NULL),
(390, 1470, 1981, 'Maria Safitri', 'Palopo', '2012-07-09', 'L', '(+62) 645 8623 4946', NULL),
(391, 1535, 1991, 'Vinsen Mustofa', 'Padang', '1975-02-15', 'P', '(+62) 23 2744 990', NULL),
(392, 1370, 1970, 'Nasim Sihombing S.Ked', 'Sabang', '2004-08-15', 'L', '0732 8802 114', NULL),
(393, 1205, 1982, 'Rahayu Agustina', 'Kupang', '2012-10-23', 'P', '(+62) 258 0429 555', NULL),
(394, 1363, 2020, 'Tari Uyainah', 'Pagar Alam', '2017-02-08', 'P', '(+62) 363 3150 1376', NULL),
(395, 1325, 2018, 'Farah Uchita Maryati S.IP', 'Makassar', '2000-02-19', 'P', '0986 5408 2838', NULL),
(396, 1264, 1976, 'Lili Zaenab Nuraini', 'Gunungsitoli', '1998-02-18', 'P', '0822 3212 313', NULL),
(397, 1403, 2003, 'Jarwa Prasasta', 'Jambi', '2023-05-21', 'P', '(+62) 540 7274 980', NULL),
(398, 1626, 1970, 'Maryanto Gantar Pradana', 'Administrasi Jakarta Barat', '1980-07-24', 'P', '(+62) 827 992 837', NULL),
(399, 1433, 1988, 'Radit Sinaga', 'Sibolga', '2005-01-20', 'L', '0678 6874 9813', NULL),
(400, 1891, 2000, 'Zamira Wastuti', 'Pematangsiantar', '2022-12-26', 'P', '0308 2577 100', NULL),
(401, 1631, 1999, 'Maimunah Novi Suryatmi S.Gz', 'Tasikmalaya', '2024-02-27', 'L', '(+62) 23 9899 426', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_siswa_kelas_id_foreign` (`kelas_id`),
  ADD KEY `kelas_siswa_siswa_id_foreign` (`siswa_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD CONSTRAINT `kelas_siswa_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `kelas_siswa_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
