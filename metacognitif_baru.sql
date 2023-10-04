-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 01:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metacognitif`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_user` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `declarative_knowledge` int(11) NOT NULL,
  `procedural_knowledge` int(11) NOT NULL,
  `conditional_knowledge` int(11) NOT NULL,
  `km_total` int(11) NOT NULL,
  `km_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planning` int(11) NOT NULL,
  `information_management` int(11) NOT NULL,
  `monitoring` int(11) NOT NULL,
  `debugging` int(11) NOT NULL,
  `evaluation` int(11) NOT NULL,
  `rm_total` int(11) NOT NULL,
  `rm_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_soal` enum('1','2','3','4','5','6','7','8') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `soal`, `kategori_soal`, `created_at`, `updated_at`) VALUES
(1, 'Saya bertanya kepada diri sendiri, ”Apakah saya sudah mencapai tujuan saya?”, ketika sedang berupaya mencapai tujuan secara intensif.', '6', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(2, 'Saya mempertimbangkan berbagai pilihan sebelum saya menyelesaikan sebuah permasalahan.', '6', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(3, 'Saya coba menggunakan cara-cara yang pernah saya pakai sebelumnya', '2', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(4, 'Saya terus menerus mengatur diri selama belajar agar memiliki waktu yang cukup.', '4', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(5, 'Saya memahami kekuatan dan kelemahan kecerdasan saya.', '1', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(6, 'Saya berpikir tentang apa yang sebenarnya perlu saya pelajari sebelum mengerjakan tugas.', '4', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(7, 'Saya menyadari bagaimana baiknya saya menyelesaikan suatu tes.', '8', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(8, 'Saya menyusun tujuan-tujuan khusus sebelum saya mengerjakan tugas.', '4', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(9, 'Saya bertindak perlahan-lahan dan hati-hati bila mana menjumpai informasi penting.', '5', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(10, 'Saya mengetahui macam informasi apa yang paling penting untuk dipelajari.', '1', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(11, 'Saya bertanya kepada diri sendiri ketika mempertimbangkan seluruh pilihan untuk memecahkan suatu masalah.', '6', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(12, 'Saya terampil/mahir menyusun dan merangkai suatu informasi.', '1', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(13, 'Saya secara sadar memusatkan perhatian kepada informasi yang penting.', '5', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(14, 'Untuk tiap cara yang saya gunakan, saya mempunyai maksud tertentu.', '2', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(15, 'Saya belajar paling baik ketika saya mengetahui topik pembelajaran itu.', '3', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(16, 'Saya mengetahui apa yang diharapkan guru untuk saya pelajari.', '1', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(17, 'Saya mudah mengingat informasi.', '1', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(18, 'Saya menggunakan cara belajar yang berbeda-beda tergantung pada situasi dan kondisi.', '3', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(19, 'Setelah saya menyelesaikan suatu tugas, saya bertanya kepada diri sendiri apakah ada cara yang lebih mudah.', '8', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(20, 'Saya mengendalikan sendiri kualitas belajar saya.', '1', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(21, 'Secara teratur saya melakukan peninjauan kemampuan untuk menolong saya memahami hubungan-hubungan penting.', '6', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(22, 'Sebelum memulai sesuatu, saya bertanya kepada diri sendiri tentang hal-hal terkait.', '4', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(23, 'Saya mempertimbangkan berbagai cara untuk memecahkan sesuatu masalah sebelum akhirnya memutuskan salah satu diantaranya.', '4', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(24, 'Setiap kali selesai belajar, saya membuat rangkuman.', '8', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(25, 'Saya menanyakan orang lain bilamana saya tidak memahami sesuatu.', '7', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(26, 'Saya dapat memotivasi diri untuk belajar bilamana diperlukan.', '3', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(27, 'Saya menyadari cara apa yang digunakan ketika saya belajar.', '2', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(28, 'Saya biasa memikirkan manfaat cara-cara belajar yang saya pakai.', '6', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(29, 'Saya memanfaatkan kekuatan kecerdasan saya untuk menutupi kekurangan saya.', '3', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(30, 'Saya memusatkan perhatian terhadap arti dan manfaat dari informasi yang baru.', '5', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(31, 'Saya menemukan contoh-contoh sendiri sehingga informasi menjadi lebih bermakna atau jelas.', '5', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(32, 'Saya tergolong adil menilai diri sendiri tentang seberapa baiknya saya memahami sesuatu.', '1', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(33, 'Secara otomatis saya sadar menggunakan cara belajar yang berguna.', '2', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(34, 'Secara teratur saya istirahat sebentar untuk mengatur pemahaman saya.', '6', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(35, 'Saya menyadari/mengetahui bahwa setiap cara yang saya gunakan adalah yang paling efektif atau tepat.', '3', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(36, 'Saya bertanya kepada diri sendiri tentang seberapa baik saya mencapai tujuan setelah menyelesaikan tugas.', '8', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(37, 'Saya membuat gambar atau bagan untuk menolong saya selama saya belajar.', '5', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(38, 'Saya bertanya kepada diri sendiri apakah saya telah mempertimbangkan semua pilihan, setiap kali saya memecahkan suatu masalah.', '8', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(39, 'Saya berupaya memahami informasi baru dengan kata-kata saya sendiri.', '5', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(40, 'Saya mengubah cara jika saya gagal memahami.', '7', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(41, 'Saya menggunakan urutan topik/materi dari buku/teks untuk membantu saya belajar.', '5', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(42, 'Saya membaca petunjuk secara teliti sebelum memulai melakukan suatu tugas.', '4', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(43, 'Saya bertanya kepada diri sendiri apakah hal yang sedang dibaca berhubungan dengan apa yang telah saya ketahui.', '5', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(44, 'Saya memikirkan kembali anggapan saya ketika saya bingung.', '7', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(45, 'Saya mengatur waktu saya untuk mencapai tujuan sebaik-baiknya.', '4', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(46, 'Saya lebih banyak belajar jika saya tertarik/senang dengan topik.', '1', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(47, 'Saya berupaya membagi kegiatan belajar saya menjadi langkah-langkah yang lebih kecil.', '5', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(48, 'Saya lebih memperhatikan makna umum dari pada makna khusus.', '5', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(49, 'Saya bertanya kepada diri sendiri tentang seberapa baik saya bekerja, pada waktu mempelajari sesuatu hal yang baru.', '6', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(50, 'Saya bertanya kepada diri sendiri apakah saya belajar sebanyak yang saya mampu, setiap kali saya menyelesaikan tugas.', '8', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(51, 'Saya melupakan informasi baru yang tidak jelas.', '7', '2023-10-04 11:49:51', '2023-10-04 11:49:51'),
(52, 'Saya berhenti dan selanjutnya membaca kembali jika saya bingung.', '7', '2023-10-04 11:49:51', '2023-10-04 11:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_07_20_193208_create_hasil', 1),
(13, '2023_07_20_193230_create_kuesioner', 1),
(14, '2023_07_20_193244_create_agent', 1),
(15, '2023_08_18_132019_create_admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('radityaariefp@polije.ac.id', '$2y$10$4V7lbUU9a3hDAV3DXV5H.uY6CfqIYrHUB/VLsI8/Wg8HXTj4EIBEu', '2023-07-20 13:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` int(11) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `tahun` char(9) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `pilih_periode`
--

CREATE TABLE `pilih_periode` (
  `id` int(11) NOT NULL,
  `id_periode` int(11) DEFAULT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pilih_periode`
--

INSERT INTO `pilih_periode` (`id`, `id_periode`, `aktif`) VALUES
(1, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_user` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `nim`, `semester`, `angkatan`, `email`, `email_verified_at`, `password`, `foto`, `kelas_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Raditya Arief Pratama', 'E4212423', 5, 2021, 'radityaariefp@polije.ac.id', NULL, '$2y$10$BiKA1.FSwf5dasvCOFJT1.xk7xcBeo8/e3xnVJvMN5vB/sMtciTPG', NULL, '3', 'PB96bDJ1I1CSIJLiTqLTdIHmyTj2aOZQORYlx7j2pPLhhbYmcll7bVcZRwkb', '2023-07-20 13:13:22', '2023-07-20 13:13:22'),
(2, 'Admin', 'E4213214', 5, 2021, 'tifnganjuk@polije.ac.id', NULL, '$2y$10$bQ5ApEyhZ.bVSVy3oH1cv.DB/aijWrkinTGN4AEj7LBoWdb8e2/L.', NULL, '1', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_nama_lengkap_unique` (`nama_lengkap`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pilih_periode`
--
ALTER TABLE `pilih_periode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nama_lengkap_unique` (`nama_lengkap`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilih_periode`
--
ALTER TABLE `pilih_periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pilih_periode`
--
ALTER TABLE `pilih_periode`
  ADD CONSTRAINT `pilih_periode_ibfk_1` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
