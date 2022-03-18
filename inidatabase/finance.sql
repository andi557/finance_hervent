-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2022 pada 08.06
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `hervent`
--

CREATE TABLE `hervent` (
  `id` int(11) NOT NULL,
  `namacustomer` varchar(50) NOT NULL,
  `namaproject` varchar(50) NOT NULL,
  `item1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hervent`
--

INSERT INTO `hervent` (`id`, `namacustomer`, `namaproject`, `item1`) VALUES
(1, 'andi', 'masih nyobain aja inimah', 'flashdisk'),
(2, 'saha nya', 'disuruh bikin dua', 'powerbank');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hervents`
--

CREATE TABLE `hervents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namacustomer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaproject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalbuat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jatuhtempo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metodebayar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomorfa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelunasan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `downpayment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hervents`
--

INSERT INTO `hervents` (`id`, `namacustomer`, `namaproject`, `tanggalbuat`, `jatuhtempo`, `metodebayar`, `nomorfa`, `editcode`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `item9`, `item10`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `qty9`, `qty10`, `harga1`, `harga2`, `harga3`, `harga4`, `harga5`, `harga6`, `harga7`, `harga8`, `harga9`, `harga10`, `amount1`, `amount2`, `amount3`, `amount4`, `amount5`, `amount6`, `amount7`, `amount8`, `amount9`, `amount10`, `total`, `pelunasan`, `downpayment`, `created_at`, `updated_at`) VALUES
(1, 'Muh Shabrun Jamil', 'KPP PRATAMA', '2022-03-18', '2022-03-20', 'Bank Transfer', '161-G-TR', 'R', 'flashdisk 4gb', 'tumbler', 'poerbak', 'flashdisk', 'flashdisk', 'flshdisk', 'flsahdisk', 'flashdisk', 'flashdisk', 'flashdisk', '50', '20', '20', '20', '10', '10', '10', '10', '10', '20', 'Rp 35.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 20.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 25.000,00', 'Rp 3.500.000,00', 'Rp 2.500.000,00', 'Rp 1.000.000,00', '2022-03-17 18:59:43', '2022-03-17 19:15:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_03_14_072942_create_hervents_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hervent`
--
ALTER TABLE `hervent`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hervents`
--
ALTER TABLE `hervents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `hervent`
--
ALTER TABLE `hervent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hervents`
--
ALTER TABLE `hervents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
