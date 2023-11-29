-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2023 pada 05.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siketas`
--

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_04_180756_tb_user', 1),
(3, '2023_11_04_181319_tb_kelompok', 1),
(4, '2023_11_05_071619_tb_anggota', 1),
(5, '2023_11_05_081602_tb_pemetaan', 1),
(6, '2023_11_05_085030_tb_panen_petani', 1),
(7, '2023_11_06_144438_tb_tanggal_panen', 2),
(8, '2023_11_06_151913_tb_panen_petani', 3),
(9, '2023_11_06_152742_tb_tanggal_panen', 4),
(10, '2023_11_15_034251_tb_panen_kelompok', 5),
(11, '2023_11_16_031723_tb_kelompok_panen', 6),
(12, '2023_11_21_192646_tb_sopir', 7),
(13, '2023_11_21_192702_tb_kendaraan', 7),
(14, '2023_11_21_200231_tb_panen_kelompok', 8),
(15, '2023_11_21_200248_tb_ketelusuran', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_petani` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `no_hp` varchar(45) NOT NULL,
  `umur` int(11) NOT NULL,
  `luas_lahan` int(11) NOT NULL,
  `no_sertifikat` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `id_kelompok`, `nama_petani`, `alamat`, `no_hp`, `umur`, `luas_lahan`, `no_sertifikat`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rizky Firmansyah', 'JL. Pangkalan Durian', '082288190446', 21, 1000, 'No11111111', '2023-11-05 02:00:32', '2023-11-05 02:00:32'),
(2, 2, 'Rizky Firmansyah 2', 'JL. Pangkalan Durian', '082288190446', 21, 1000, 'No11111111', '2023-11-05 02:00:57', '2023-11-05 02:00:57'),
(3, 3, 'Romi', 'JL. Pangkalan Durian', '082288190446', 21, 1000, 'No11111111', '2023-11-05 02:01:17', '2023-11-05 02:01:17'),
(4, 3, 'Romi 2', 'JL. Pangkalan Durian', '082288190446', 21, 1000, 'No11111111', '2023-11-05 02:01:36', '2023-11-05 02:01:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelompok`
--

CREATE TABLE `tb_kelompok` (
  `id_kelompok` bigint(20) UNSIGNED NOT NULL,
  `kelompok` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_kelompok`
--

INSERT INTO `tb_kelompok` (`id_kelompok`, `kelompok`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2023-11-05 01:59:11', '2023-11-05 01:59:11'),
(2, 'Kelompok Rizky', '2023-11-05 01:59:16', '2023-11-05 01:59:16'),
(3, 'Kelompok Romi', '2023-11-05 01:59:20', '2023-11-05 01:59:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id_kendaraan` bigint(20) UNSIGNED NOT NULL,
  `jenis_kendaraan` varchar(255) NOT NULL,
  `no_kendaraan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`id_kendaraan`, `jenis_kendaraan`, `no_kendaraan`, `created_at`, `updated_at`) VALUES
(1, 'Truck', 'BM 1234 XY', '2023-11-21 12:39:20', '2023-11-21 12:39:20'),
(2, 'Truck', 'BM 4321 TY', '2023-11-21 12:40:33', '2023-11-21 12:40:33'),
(3, 'Truck', 'BM 9080 KY', '2023-11-21 12:40:52', '2023-11-21 12:40:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ketelusuran`
--

CREATE TABLE `tb_ketelusuran` (
  `id_ketelusuran` bigint(20) UNSIGNED NOT NULL,
  `id_panen_kelompok` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `id_sopir` int(11) NOT NULL,
  `tujuan_pks` varchar(255) NOT NULL,
  `no_spb` varchar(255) NOT NULL,
  `total_tonase_truck` int(11) NOT NULL,
  `total_janjang_truck` int(11) NOT NULL,
  `brutto` int(11) NOT NULL,
  `netto` int(11) NOT NULL,
  `sortasi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_panen_kelompok`
--

CREATE TABLE `tb_panen_kelompok` (
  `id_panen_kelompok` bigint(20) UNSIGNED NOT NULL,
  `id_tanggal_panen` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `total_tonase` int(11) NOT NULL,
  `total_janjang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_panen_petani`
--

CREATE TABLE `tb_panen_petani` (
  `id_panen_petani` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `id_tanggal_panen` int(11) NOT NULL,
  `total_tonase_petani` int(11) NOT NULL,
  `total_janjang_petani` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_panen_petani`
--

INSERT INTO `tb_panen_petani` (`id_panen_petani`, `id_anggota`, `id_kelompok`, `id_tanggal_panen`, `total_tonase_petani`, `total_janjang_petani`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 1000, 100, '2023-11-14 17:26:15', '2023-11-14 17:26:15'),
(2, 2, 2, 1, 2000, 200, '2023-11-14 17:28:31', '2023-11-14 17:28:31'),
(3, 3, 3, 2, 1000, 100, '2023-11-14 17:29:56', '2023-11-14 17:29:56'),
(4, 4, 3, 2, 2000, 200, '2023-11-14 17:30:09', '2023-11-14 17:30:09'),
(5, 1, 2, 3, 1000, 100, '2023-11-14 18:29:45', '2023-11-14 18:29:45'),
(6, 2, 2, 3, 2000, 200, '2023-11-14 18:30:01', '2023-11-14 18:30:01'),
(7, 3, 3, 4, 1000, 100, '2023-11-14 18:30:37', '2023-11-14 18:30:37'),
(8, 4, 3, 4, 2000, 200, '2023-11-14 18:30:53', '2023-11-14 18:30:53'),
(9, 1, 2, 3, 12345, 123, '2023-11-16 05:12:34', '2023-11-16 05:12:34'),
(10, 1, 2, 3, 12345, 12345, '2023-11-21 07:06:21', '2023-11-21 07:06:21'),
(11, 3, 3, 4, 1, 200, '2023-11-21 07:32:27', '2023-11-21 07:32:27'),
(12, 4, 3, 4, 2, 200, '2023-11-21 07:33:50', '2023-11-21 07:33:50'),
(13, 1, 2, 5, 1000, 99, '2023-11-21 13:46:02', '2023-11-21 13:46:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemetaan`
--

CREATE TABLE `tb_pemetaan` (
  `id_pemetaan` bigint(20) UNSIGNED NOT NULL,
  `id_panen_petani` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `lat` int(11) NOT NULL,
  `long` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_pemetaan`
--

INSERT INTO `tb_pemetaan` (`id_pemetaan`, `id_panen_petani`, `id_anggota`, `id_kelompok`, `lat`, `long`, `created_at`, `updated_at`) VALUES
(1, 1231231, 2, 2, 13123, 131231, '2023-11-05 02:52:37', '2023-11-05 02:52:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sopir`
--

CREATE TABLE `tb_sopir` (
  `id_sopir` bigint(20) UNSIGNED NOT NULL,
  `nama_sopir` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_sopir`
--

INSERT INTO `tb_sopir` (`id_sopir`, `nama_sopir`, `created_at`, `updated_at`) VALUES
(1, 'Rizky Firmansyah', '2023-11-21 12:47:23', '2023-11-21 12:47:23'),
(2, 'Romi Irawan', '2023-11-21 12:47:34', '2023-11-21 12:47:34'),
(3, 'Sanjaya', '2023-11-21 12:47:42', '2023-11-21 12:47:42'),
(4, 'Doddy', '2023-11-21 12:47:53', '2023-11-21 12:47:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tanggal_panen`
--

CREATE TABLE `tb_tanggal_panen` (
  `id_tanggal_panen` bigint(20) UNSIGNED NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_tanggal_panen`
--

INSERT INTO `tb_tanggal_panen` (`id_tanggal_panen`, `id_kelompok`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 2, '2023-11-01', '2023-11-14 17:00:10', '2023-11-14 17:00:10'),
(2, 3, '2023-11-01', '2023-11-14 17:24:31', '2023-11-14 17:24:31'),
(3, 2, '2023-11-10', '2023-11-14 17:57:21', '2023-11-14 17:57:21'),
(4, 3, '2023-11-10', '2023-11-14 18:30:21', '2023-11-14 18:30:21'),
(5, 2, '2023-11-22', '2023-11-21 13:45:47', '2023-11-21 13:45:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `id_kelompok`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'Super Admin', 'superadmin@gmail.com', '$2y$10$GN.xG5Aklw74yZogwEZXKO8nhu0gN2tnrgViWwA4Qqdm2OvQOuODi', '2023-11-05 01:59:39', '2023-11-05 01:59:39'),
(2, 2, 'Kelompok Rizky', 'kelompokrizky@gmail.com', '$2y$10$E1WsOCJhJhJj5lNKeER2CuDg3/3S05soiZoObOUTnWjBJdMdBLvqe', '2023-11-05 01:59:50', '2023-11-05 01:59:50'),
(3, 3, 'Kelompok Romi', 'kelompokromi@gmail.com', '$2y$10$lQ41iEOsZSBVAfXPpDv98uRVPKVwR1FYJvNcJceu9md9t92Wgg2CW', '2023-11-05 02:00:02', '2023-11-05 02:00:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `tb_kelompok`
--
ALTER TABLE `tb_kelompok`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indeks untuk tabel `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `tb_ketelusuran`
--
ALTER TABLE `tb_ketelusuran`
  ADD PRIMARY KEY (`id_ketelusuran`);

--
-- Indeks untuk tabel `tb_panen_kelompok`
--
ALTER TABLE `tb_panen_kelompok`
  ADD PRIMARY KEY (`id_panen_kelompok`);

--
-- Indeks untuk tabel `tb_panen_petani`
--
ALTER TABLE `tb_panen_petani`
  ADD PRIMARY KEY (`id_panen_petani`);

--
-- Indeks untuk tabel `tb_pemetaan`
--
ALTER TABLE `tb_pemetaan`
  ADD PRIMARY KEY (`id_pemetaan`);

--
-- Indeks untuk tabel `tb_sopir`
--
ALTER TABLE `tb_sopir`
  ADD PRIMARY KEY (`id_sopir`);

--
-- Indeks untuk tabel `tb_tanggal_panen`
--
ALTER TABLE `tb_tanggal_panen`
  ADD PRIMARY KEY (`id_tanggal_panen`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_user_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kelompok`
--
ALTER TABLE `tb_kelompok`
  MODIFY `id_kelompok` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id_kendaraan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_ketelusuran`
--
ALTER TABLE `tb_ketelusuran`
  MODIFY `id_ketelusuran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_panen_kelompok`
--
ALTER TABLE `tb_panen_kelompok`
  MODIFY `id_panen_kelompok` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_panen_petani`
--
ALTER TABLE `tb_panen_petani`
  MODIFY `id_panen_petani` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_pemetaan`
--
ALTER TABLE `tb_pemetaan`
  MODIFY `id_pemetaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_sopir`
--
ALTER TABLE `tb_sopir`
  MODIFY `id_sopir` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_tanggal_panen`
--
ALTER TABLE `tb_tanggal_panen`
  MODIFY `id_tanggal_panen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
