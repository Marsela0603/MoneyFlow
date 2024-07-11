-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2024 pada 15.32
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
-- Database: `velocar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `armada`
--

CREATE TABLE `armada` (
  `id` int(11) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `thn_beli` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `kapasitas_kursi` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `biaya` double NOT NULL,
  `jenis_kendaraan_id` int(11) NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `armada`
--

INSERT INTO `armada` (`id`, `merk`, `nopol`, `thn_beli`, `deskripsi`, `kapasitas_kursi`, `rating`, `biaya`, `jenis_kendaraan_id`, `gambar`) VALUES
(1, 'Toyota Fortuner', 'B1245CDR', 2020, 'Toyota Fortuner adalah SUV tangguh dengan desain eksterior yang gagah dan interior mewah yang mampu menampung tujuh penumpang. Ditenagai oleh mesin bensin dan diesel yang kuat, Fortuner hadir dengan pilihan penggerak 4WD untuk kemampuan off-road yang handal.', 6, 5, 1500000, 3, 'public/armada/D4NTkd7GNc6nsiw6S4wDQQl4HmVTZ1b8dysZSnmU.webp'),
(2, 'Toyota Alphard', 'B1915RGH', 2021, 'Toyota Alphard sering digunakan sebagai kendaraan eksekutif atau keluarga, dengan kapasitas tempat duduk hingga tujuh penumpang. Desain eksteriornya elegan dan modern, mencerminkan kelas premium yang dimilikinya. Mesin yang bertenaga serta sistem suspensi yang halus memastikan pengalaman berkendara yang nyaman dan menyenangkan.', 7, 5, 2000000, 3, 'public/armada/kkWrcWQEFfk7zhYqJGLUD2IwBCGMRtnGjStMnxhd.webp'),
(3, 'Daihatsu Terios', 'B3704GHK', 2020, 'Daihatsu Terios adalah SUV kompak yang dikenal dengan desain yang modern dan kemampuan off-road yang baik. Mobil ini dilengkapi dengan mesin 1.5 liter yang efisien, memberikan keseimbangan antara performa dan konsumsi bahan bakar. Interior Terios menawarkan ruang yang luas dan fitur-fitur kenyamanan seperti sistem hiburan layar sentuh, kontrol iklim, dan kursi yang dapat dilipat untuk meningkatkan kapasitas kargo.', 7, 5, 700000, 3, 'public/armada/wsLRGl6oVUYRcC2OTbUjdfCJflGqRo3D3BBcFnYV.webp'),
(4, 'Suzuki Ertiga', 'B7831YFA', 2019, 'Suzuki Ertiga adalah MPV kompak yang dikenal dengan kenyamanan dan kepraktisannya. Mobil ini dilengkapi dengan mesin 1.5 liter yang efisien, menawarkan performa yang memadai untuk penggunaan sehari-hari serta perjalanan jarak jauh. Interior Ertiga dirancang untuk kenyamanan penumpang dengan ruang kabin yang luas, fitur-fitur modern seperti sistem infotainment layar sentuh, konektivitas smartphone, dan kontrol iklim.', 7, 4, 600000, 3, 'public/armada/T5YzAs0ipLOtXYPFyftQ4U6EbmdjpTSH0o1yGDjK.webp'),
(5, 'Mercedes-Benz', 'B1462AK', 2019, 'Bus Mercedes-Benz OC 500 RF 2542 dengan 40 kursi menawarkan kenyamanan dan keamanan terbaik untuk perjalanan Anda, dilengkapi dengan mesin bertenaga dan efisien, sistem pendingin udara canggih, kursi ergonomis yang dapat disesuaikan, serta fitur hiburan modern seperti layar LCD dan speaker berkualitas tinggi.', 40, 5, 4200000, 1, 'public/armada/QeT078tKHdfVeV0CkLmt2G85dyoPng7gVUWSjDi1.png'),
(6, 'Toyota Hiace', 'B7490AN', 2021, 'ELF Toyota Hiace dengan 16 kursi menawarkan kenyamanan dan kepraktisan untuk perjalanan kelompok kecil, dilengkapi dengan mesin tangguh dan efisien, sistem pendingin udara yang optimal, serta kursi ergonomis yang nyaman. ELF Toyota Hiace adalah pilihan ideal untuk perjalanan wisata, tur keluarga, atau kebutuhan transportasi korporat yang mengutamakan kenyamanan dan keamanan.', 16, 5, 2000000, 2, NULL),
(7, 'Isuzu Elf Short', 'B47MAN', 2021, 'ELF Isuzu Short dengan 15 kursi adalah pilihan sempurna untuk perjalanan kelompok kecil yang mengutamakan kenyamanan dan efisiensi. Ditenagai oleh mesin yang tangguh dan irit bahan bakar, kendaraan ini dilengkapi dengan sistem pendingin udara yang optimal dan kursi-kursi ergonomis yang nyaman. ELF Isuzu Short menjamin perjalanan yang aman dan nyaman untuk wisata, tur keluarga, atau transportasi korporat.', 15, 5, 1650000, 2, NULL),
(8, 'Toyota Yaris', 'B5729TYS', 2020, 'Toyota Yaris adalah hatchback kompak yang terkenal dengan desain stylish, efisiensi bahan bakar yang tinggi, dan fitur-fitur modern. Interior Yaris dirancang ergonomis dengan material berkualitas, dilengkapi dengan sistem infotainment layar sentuh, konektivitas smartphone, dan fitur kenyamanan seperti kontrol iklim otomatis.\', 5, 5, 1000000, 3),\r\n(6, \'Toyota Prius\', \'B9763CVH\', 2024, \'Toyota Prius adalah mobil hybrid yang terkenal dengan efisiensi bahan bakarnya yang luar biasa dan kontribusinya terhadap lingkungan. Ditenagai oleh kombinasi mesin bensin 1.8 liter dan motor listrik, Prius menawarkan performa yang halus dan hemat energi. Desainnya futuristik dan aerodinamis, dengan interior yang modern dan dilengkapi dengan teknologi canggih seperti layar sentuh untuk sistem infotainment, konektivitas smartphone, dan berbagai fitur keselamatan aktif.', 5, 5, 1700000, 3, 'public/armada/soTjwLf2mk0TjE3W06uPAxRHGPzaw4jcXqc6blSu.webp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@gmail.com|127.0.0.1', 'i:1;', 1720496052),
('admin@gmail.com|127.0.0.1:timer', 'i:1720496052;', 1720496052);

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
-- Struktur dari tabel `jenis_kendaraan`
--

CREATE TABLE `jenis_kendaraan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_kendaraan`
--

INSERT INTO `jenis_kendaraan` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Bus', 'Kendaraan besar yang ideal untuk perjalanan grup besar atau acara khusus dengan kapasitas tempat duduk yang luas.'),
(2, 'Minibus', 'Solusi sempurna untuk perjalanan keluarga atau kelompok kecil, menawarkan kenyamanan dan ruang yang memadai.'),
(3, 'Mobil', 'Kendaraan serba guna yang cocok untuk kebutuhan sehari-hari dengan berbagai pilihan merk dan model.');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_08_022919_add_role_to_users_table', 2);

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
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_bayar` double NOT NULL,
  `peminjaman_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `tanggal`, `jumlah_bayar`, `peminjaman_id`) VALUES
(1, '2024-07-09', 4500000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `nama_peminjam` varchar(45) NOT NULL,
  `ktp_peminjam` varchar(20) NOT NULL,
  `keperluan_pinjam` varchar(100) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `komentar_peminjam` varchar(100) DEFAULT NULL,
  `status_pinjam` enum('Berhasil diajukan','Sedang diajukan') DEFAULT 'Sedang diajukan',
  `armada_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `nama_peminjam`, `ktp_peminjam`, `keperluan_pinjam`, `mulai`, `selesai`, `komentar_peminjam`, `status_pinjam`, `armada_id`) VALUES
(1, 'Marsel', '33219864762512736', 'Jalan-jalan', '2024-07-10', '2024-07-13', '-', 'Berhasil diajukan', 1),
(2, 'Rifa', '3210846352738471', 'Pulang kampung', '2024-07-10', '2024-07-15', '-', 'Sedang diajukan', 8);

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
('WFgrh78y1E2D74ujaLbhtQ7DKrHexXLsMSUlbHhm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVpEMkVTRjFHNHFMYmVRZ0JWVllVZ29NQ1pqT01qYjAyYXdvNDBkaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1720701133);

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
  `role` varchar(255) NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marsela', 'marsela@gmail.com', NULL, '$2y$12$G09wLm72MyLY18NvYNV9gOGs3sdTnHtOAziMZbob6VA8HxUC9BSq6', 'admin', NULL, '2024-07-07 07:50:14', '2024-07-07 07:50:14'),
(2, 'Dzakiyah', 'kia@gmail.com', NULL, '$2y$12$zyqrw3UWVqML8zp66mzV.uTDlaXcOxPfjExrerGXoM6DhGk0/pF7i', 'admin', NULL, '2024-07-07 19:36:59', '2024-07-07 19:36:59'),
(3, 'Swat', 'swat@gmail.com', NULL, '$2y$12$kAIqBOgtZfNoR4Fs8D8HueKGno3JEFP5FjKv1aDY7s7bCGKUjoyBq', 'member', NULL, '2024-07-07 19:46:32', '2024-07-07 19:46:32'),
(4, 'Fajar', 'fajar@gmail.com', NULL, '$2y$12$.EwUsckdPGC7oGdCDXl6MewjnUK9pndB1qO9TXimM6wjY7vZKyQES', 'member', NULL, '2024-07-07 19:50:56', '2024-07-07 19:50:56'),
(5, 'RIfa Pradita Safara', 'rifa@gmail.com', NULL, '$2y$12$bH9qDDfmjOlsWwDF9BkZHu0PpkNYp2yoZOjXwjLgZgYPTY6ygXiq.', 'member', NULL, '2024-07-09 06:12:27', '2024-07-09 06:12:27'),
(6, 'Sabrina Marliani', 'sabrina@gmail.com', NULL, '$2y$12$Vqhp89h5Q1LLvG9APvgCHubC9XeLqzOUJfpW9oMHN9hI7n7QaI42W', 'member', NULL, '2024-07-09 12:02:00', '2024-07-09 12:02:00'),
(7, 'Tiara', 'tiara@gmail.com', NULL, '$2y$12$hOaPJHrOTdNzrxipqCGQ5eF2E0D1KeO42sEvwa68edp6hJcblJEAO', 'member', NULL, '2024-07-11 05:31:34', '2024-07-11 05:31:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `armada`
--
ALTER TABLE `armada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_kendaraan_id` (`jenis_kendaraan_id`);

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
-- Indeks untuk tabel `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
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
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_id` (`peminjaman_id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `armada_id` (`armada_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `armada`
--
ALTER TABLE `armada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `armada`
--
ALTER TABLE `armada`
  ADD CONSTRAINT `armada_ibfk_1` FOREIGN KEY (`jenis_kendaraan_id`) REFERENCES `jenis_kendaraan` (`id`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`peminjaman_id`) REFERENCES `peminjaman` (`id`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`armada_id`) REFERENCES `armada` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
