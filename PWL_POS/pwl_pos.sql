-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2024 at 07:36 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_11_043919_create_m_level_table', 1),
(6, '2024_09_11_044827_create_m_kategori_table', 2),
(7, '2024_09_11_044913_create_m_supplier', 2),
(8, '2024_09_11_044913_create_m_supplier_table', 3),
(9, '2024_09_11_063223_create_m_user_table', 3),
(10, '2024_09_11_065321_create_m_barang_table', 4),
(11, '2024_09_11_065344_create_t_penjualan_table', 4),
(12, '2024_09_11_065358_create_t_stok_table', 4),
(13, '2024_09_11_065423_create_t_penjualan_detail_table', 4),
(14, '2024_10_20_113656_add_avatar_to_m_user_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `m_barang`
--

CREATE TABLE `m_barang` (
  `barang_id` bigint UNSIGNED NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `barang_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` int NOT NULL,
  `harga_jual` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_barang`
--

INSERT INTO `m_barang` (`barang_id`, `kategori_id`, `barang_kode`, `barang_nama`, `harga_beli`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 1, 'BR001', 'TV LED 32 Inch', 2000000, 2500000, NULL, NULL),
(2, 1, 'BR002', 'Smartphone 6GB RAM', 3000000, 3500000, NULL, NULL),
(3, 1, 'BR003', 'Laptop Core i5', 6000000, 7000000, NULL, NULL),
(4, 1, 'BR004', 'Kamera DSLR', 4000000, 4500000, NULL, NULL),
(5, 1, 'BR005', 'Headphone Bluetooth', 500000, 600000, NULL, NULL),
(6, 2, 'BR006', 'Meja Kayu Jati', 1000000, 1500000, NULL, NULL),
(7, 2, 'BR007', 'Sofa Minimalis', 3000000, 3500000, NULL, NULL),
(8, 2, 'BR008', 'Lemari Pakaian', 2000000, 2500000, NULL, NULL),
(9, 2, 'BR009', 'Kursi Kantor', 800000, 1000000, NULL, NULL),
(10, 2, 'BR010', 'Rak Buku Besi', 600000, 800000, NULL, NULL),
(11, 3, 'BR011', 'Jaket Denim', 150000, 200000, NULL, NULL),
(12, 3, 'BR012', 'Kaos Polos', 50000, 75000, NULL, NULL),
(13, 3, 'BR013', 'Celana Jeans', 100000, 150000, NULL, NULL),
(14, 3, 'BR014', 'Sweater Hoodie', 120000, 180000, NULL, NULL),
(15, 3, 'BR015', 'Kemeja Formal', 170000, 220000, NULL, NULL),
(40, 1, 'SBK-003', 'Telur Omega(10 butir)', 22000, 25000, '2024-10-19 04:31:49', NULL),
(41, 2, 'SNK-003', 'Sari Roti', 11500, 12500, '2024-10-19 04:31:49', NULL),
(42, 3, 'MND-003', 'Shampo Pantene', 17500, 18500, '2024-10-19 04:31:49', NULL),
(43, 4, 'BAY-003', 'Baju Bayi 2th', 89000, 92500, '2024-10-19 04:31:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori`
--

CREATE TABLE `m_kategori` (
  `kategori_id` bigint UNSIGNED NOT NULL,
  `kategori_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_kategori`
--

INSERT INTO `m_kategori` (`kategori_id`, `kategori_kode`, `kategori_nama`, `created_at`, `updated_at`) VALUES
(1, 'KB001', 'Elektronik', NULL, NULL),
(2, 'KB002', 'Perabotan', NULL, NULL),
(3, 'KB003', 'Pakaian', NULL, NULL),
(4, 'KB004', 'Makanan & Minuman', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_level`
--

CREATE TABLE `m_level` (
  `level_id` bigint UNSIGNED NOT NULL,
  `level_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_level`
--

INSERT INTO `m_level` (`level_id`, `level_kode`, `level_nama`, `created_at`, `updated_at`) VALUES
(1, 'ADM', 'Administrator', NULL, NULL),
(2, 'MNG', 'Manager', NULL, NULL),
(3, 'STF', 'Staff/Kasir', NULL, NULL),
(5, 'cus', 'Pelanggan', '2024-09-15 07:03:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_supplier`
--

CREATE TABLE `m_supplier` (
  `supplier_id` bigint UNSIGNED NOT NULL,
  `supplier_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_supplier`
--

INSERT INTO `m_supplier` (`supplier_id`, `supplier_kode`, `supplier_nama`, `created_at`, `updated_at`) VALUES
(1, 'SP001', 'PT. Elektronik Nusantara', NULL, NULL),
(2, 'SP002', 'CV. Perabotan Sejahtera', NULL, NULL),
(3, 'SP003', 'UD. Maju Jaya Pakaian', NULL, NULL),
(4, 'SP004', 'AdelShop', NULL, NULL),
(5, 'SP005', 'Asisi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `level_id` bigint UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`user_id`, `level_id`, `username`, `avatar`, `nama`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', NULL, 'Administrator', '$2y$12$KT2Hj9ub9woNsrk/eifB4O3mBd4htX17W7QBCjl3pfSRzTog7tb6q', NULL, '2024-10-20 05:49:37'),
(2, 2, 'manager', NULL, 'Manager', '$2y$12$m5O9W8NsvQbeq.YPleRXperDNxyYOMTW3fEvewQ8eiWYFlA1yNieW', NULL, NULL),
(3, 3, 'staff', NULL, 'Staff/Kasir', '$2y$12$KyzLX4Gt2Fd9QDcZ.Dd3UOjrtZhnAkYyrDVe7GQjtUH3bWkxjKL7W', NULL, NULL),
(5, 5, 'customer-1', NULL, 'Pelanggan Pertama', '$2y$12$WnzlDh4p33svcKMxQru4P.8S8KJkH0zy.jxBWoTHDRw0x.VTJLU6.', NULL, '2024-09-15 07:11:13'),
(6, 2, 'manager_dua', NULL, 'Manager2', '$2y$12$/D63n/CzgGgyZsNesLnolutEtcwsoA00uTx0LqAvLsyCOb3C.t0se', NULL, NULL),
(7, 2, 'manager_tiga', NULL, 'Manager3', '$2y$12$Say1LgwJLRuRmvU3DYofCuSbTqOjh9ejjAC/t.buth1ULzAc3ZdsK', NULL, NULL),
(8, 2, 'manager22', NULL, 'Manager Dua Dua', '$2y$12$vksUH8GG13SXMXezGTtVHONc4oOS5Vi8DMXiK3zlTTd4dj3vlKlaW', '2024-09-18 05:32:59', '2024-09-18 05:32:59'),
(13, 2, 'deldul', NULL, 'adeliash', '$2y$12$YR/mYiByeMKSahB0Rv6Vn.gXr6bfxkprzO7/cVJ3HTSi5G.vhMiqS', '2024-09-27 12:35:56', '2024-10-02 19:00:34'),
(14, 3, 'sisilia', NULL, 'sisil', '$2y$12$.buxyecnCEcvKCD4I8qCV.r6flTu3N33kD6ZYHNSyDkhURR4RwaIa', '2024-09-27 13:10:36', '2024-09-27 13:10:36'),
(16, 5, 'fafafufufifa', NULL, 'fafa lucu katanya', '$2y$12$GEPSDOjAQg5LMQRzS62QNOSGCMYLhMRY4CKXEaz004JY58udVjxNm', '2024-10-02 01:22:33', '2024-10-02 18:49:44'),
(18, 5, 'aisha', NULL, 'aishaa cantik banget', '123456', '2024-10-02 18:59:26', '2024-10-02 18:59:26'),
(20, 2, 'anis', NULL, 'anis', '$2y$12$eWlcpMRaqoJi4vwrMVQ8P.TnU65fMQ39qi.WcngJGK4ZCZ7ZFRjS2', '2024-10-13 04:18:21', '2024-10-13 04:19:30'),
(22, 2, 'koko', NULL, 'koko', '$2y$12$EkB/3XFFyG7Xe7vEC9x0/OKsjgHk7ziQGhk1qNEu2EE4lit67Rqfm', '2024-10-13 06:08:27', '2024-10-13 06:08:27'),
(23, 1, 'lala', 'uploads/avatars/rK59YS6MKmPHSZgFiSccMVQ55idtIyY5oGG5R1QS.jpg', 'lala di luar nurul', '$2y$12$hMh7DCNJqeEsqWMOEby/POHsb.RfuGTVU3MRGf6.zwqRd/4aSU4KK', '2024-10-13 06:37:14', '2024-10-20 05:45:21'),
(24, 1, 'yaya', NULL, 'Adelia', '$2y$12$088CFBgqHy0452EvHjcIX.pj7X4cx8QWI7PL7x.jr1jARfqq2PNji', '2024-10-15 22:14:20', '2024-10-15 22:14:20'),
(25, 1, 'adi', NULL, 'diadi', '$2y$12$OLJuU5dyVBSe2rjc3cPT8..mWt5rMVmfjs8JuFzI3b6WxAA.jQuW2', '2024-10-22 01:01:21', '2024-10-22 01:01:21'),
(26, 1, 'adiadi', NULL, 'diadiididit', '$2y$12$KEwcdhdFf9Vjb4h9SIsQOOeF95SjH7eVm67BIi5c8JxtHRLiauxPi', '2024-10-22 01:01:53', '2024-10-22 01:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `t_penjualan`
--

CREATE TABLE `t_penjualan` (
  `penjualan_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `pembeli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan_kode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan_tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_penjualan`
--

INSERT INTO `t_penjualan` (`penjualan_id`, `user_id`, `pembeli`, `penjualan_kode`, `penjualan_tanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 'John Doe', 'PJ001', '2024-09-11 14:47:14', NULL, NULL),
(2, 2, 'Jane Doe', 'PJ002', '2024-09-11 14:47:14', NULL, NULL),
(3, 3, 'Michael Smith', 'PJ003', '2024-09-11 14:47:14', NULL, NULL),
(4, 1, 'Anna Johnson', 'PJ004', '2024-09-11 14:47:14', NULL, NULL),
(5, 2, 'William Brown', 'PJ005', '2024-09-11 14:47:14', NULL, NULL),
(6, 3, 'Emily Davis', 'PJ006', '2024-09-11 14:47:14', NULL, NULL),
(7, 1, 'Oliver Miller', 'PJ007', '2024-09-11 14:47:14', NULL, NULL),
(8, 2, 'Sophia Wilson', 'PJ008', '2024-09-11 14:47:14', NULL, NULL),
(9, 3, 'James Anderson', 'PJ009', '2024-09-11 14:47:14', NULL, NULL),
(10, 1, 'Isabella Thomas', 'PJ010', '2024-09-11 14:47:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_penjualan_detail`
--

CREATE TABLE `t_penjualan_detail` (
  `detail_id` bigint UNSIGNED NOT NULL,
  `penjualan_id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_penjualan_detail`
--

INSERT INTO `t_penjualan_detail` (`detail_id`, `penjualan_id`, `barang_id`, `harga`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10000, 2, NULL, NULL),
(2, 1, 2, 20000, 1, NULL, NULL),
(3, 1, 3, 15000, 3, NULL, NULL),
(4, 2, 4, 30000, 1, NULL, NULL),
(5, 2, 5, 50000, 2, NULL, NULL),
(6, 2, 6, 40000, 1, NULL, NULL),
(7, 3, 7, 20000, 1, NULL, NULL),
(8, 3, 8, 35000, 2, NULL, NULL),
(9, 3, 9, 25000, 3, NULL, NULL),
(10, 4, 10, 15000, 2, NULL, NULL),
(11, 4, 11, 60000, 1, NULL, NULL),
(12, 4, 12, 70000, 2, NULL, NULL),
(13, 5, 13, 50000, 1, NULL, NULL),
(14, 5, 14, 30000, 1, NULL, NULL),
(15, 5, 15, 25000, 3, NULL, NULL),
(16, 6, 1, 10000, 2, NULL, NULL),
(17, 6, 2, 20000, 1, NULL, NULL),
(18, 6, 3, 15000, 3, NULL, NULL),
(19, 7, 4, 30000, 1, NULL, NULL),
(20, 7, 5, 50000, 2, NULL, NULL),
(21, 7, 6, 40000, 1, NULL, NULL),
(22, 8, 7, 20000, 1, NULL, NULL),
(23, 8, 8, 35000, 2, NULL, NULL),
(24, 8, 9, 25000, 3, NULL, NULL),
(25, 9, 10, 15000, 2, NULL, NULL),
(26, 9, 11, 60000, 1, NULL, NULL),
(27, 9, 12, 70000, 2, NULL, NULL),
(28, 10, 13, 50000, 1, NULL, NULL),
(29, 10, 14, 30000, 1, NULL, NULL),
(30, 10, 15, 25000, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_stok`
--

CREATE TABLE `t_stok` (
  `stok_id` bigint UNSIGNED NOT NULL,
  `supplier_id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `stok_tanggal` datetime NOT NULL,
  `stok_jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_stok`
--

INSERT INTO `t_stok` (`stok_id`, `supplier_id`, `barang_id`, `user_id`, `stok_tanggal`, `stok_jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2024-09-11 14:45:49', 100, NULL, NULL),
(2, 1, 2, 1, '2024-09-11 14:45:49', 200, NULL, NULL),
(3, 1, 3, 1, '2024-09-11 14:45:49', 150, NULL, NULL),
(4, 1, 4, 1, '2024-09-11 14:45:49', 300, NULL, NULL),
(5, 1, 5, 1, '2024-09-11 14:45:49', 50, NULL, NULL),
(6, 2, 6, 2, '2024-09-11 14:45:49', 120, NULL, NULL),
(7, 2, 7, 2, '2024-09-11 14:45:49', 250, NULL, NULL),
(8, 2, 8, 2, '2024-09-11 14:45:49', 300, NULL, NULL),
(9, 2, 9, 2, '2024-09-11 14:45:49', 400, NULL, NULL),
(10, 2, 10, 2, '2024-09-11 14:45:49', 500, NULL, NULL),
(11, 3, 11, 3, '2024-09-11 14:45:49', 600, NULL, NULL),
(12, 3, 12, 3, '2024-09-11 14:45:49', 700, NULL, NULL),
(13, 3, 13, 3, '2024-09-11 14:45:49', 800, NULL, NULL),
(14, 3, 14, 3, '2024-09-11 14:45:49', 900, NULL, NULL),
(15, 3, 15, 3, '2024-09-11 14:45:49', 1000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD UNIQUE KEY `m_barang_barang_kode_unique` (`barang_kode`),
  ADD KEY `m_barang_kategori_id_index` (`kategori_id`);

--
-- Indexes for table `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`kategori_id`),
  ADD UNIQUE KEY `m_kategori_kategori_kode_unique` (`kategori_kode`);

--
-- Indexes for table `m_level`
--
ALTER TABLE `m_level`
  ADD PRIMARY KEY (`level_id`),
  ADD UNIQUE KEY `m_level_level_kode_unique` (`level_kode`);

--
-- Indexes for table `m_supplier`
--
ALTER TABLE `m_supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `m_supplier_supplier_kode_unique` (`supplier_kode`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `m_user_username_unique` (`username`),
  ADD KEY `m_user_level_id_index` (`level_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  ADD PRIMARY KEY (`penjualan_id`),
  ADD UNIQUE KEY `t_penjualan_penjualan_kode_unique` (`penjualan_kode`),
  ADD KEY `t_penjualan_user_id_index` (`user_id`);

--
-- Indexes for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `t_penjualan_detail_penjualan_id_index` (`penjualan_id`),
  ADD KEY `t_penjualan_detail_barang_id_index` (`barang_id`);

--
-- Indexes for table `t_stok`
--
ALTER TABLE `t_stok`
  ADD PRIMARY KEY (`stok_id`),
  ADD KEY `t_stok_supplier_id_index` (`supplier_id`),
  ADD KEY `t_stok_barang_id_index` (`barang_id`),
  ADD KEY `t_stok_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `m_barang`
--
ALTER TABLE `m_barang`
  MODIFY `barang_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `kategori_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m_level`
--
ALTER TABLE `m_level`
  MODIFY `level_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_supplier`
--
ALTER TABLE `m_supplier`
  MODIFY `supplier_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `user_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  MODIFY `penjualan_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  MODIFY `detail_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `t_stok`
--
ALTER TABLE `t_stok`
  MODIFY `stok_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD CONSTRAINT `m_barang_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `m_kategori` (`kategori_id`);

--
-- Constraints for table `m_user`
--
ALTER TABLE `m_user`
  ADD CONSTRAINT `m_user_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `m_level` (`level_id`);

--
-- Constraints for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  ADD CONSTRAINT `t_penjualan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  ADD CONSTRAINT `t_penjualan_detail_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`barang_id`),
  ADD CONSTRAINT `t_penjualan_detail_penjualan_id_foreign` FOREIGN KEY (`penjualan_id`) REFERENCES `t_penjualan` (`penjualan_id`);

--
-- Constraints for table `t_stok`
--
ALTER TABLE `t_stok`
  ADD CONSTRAINT `t_stok_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`barang_id`),
  ADD CONSTRAINT `t_stok_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `m_supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stok_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
