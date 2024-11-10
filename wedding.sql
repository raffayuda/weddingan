-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2024 pada 02.56
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
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `abouts`
--

INSERT INTO `abouts` (`id`, `img1`, `img2`, `img3`, `img4`, `content`, `created_at`, `updated_at`) VALUES
(1, '1707473173_img1.jpg', '1707473173_img2.jpg', '1707473173_img3.jpg', '1707473173_img4.jpg', '<p>Wedding Organizer kami didedikasikan untuk mengubah impian pernikahan Anda menjadi kenyataan yang indah. Dengan pengalaman kami yang kaya dan komitmen terhadap detail, kami siap membantu Anda merencanakan dan melaksanakan pernikahan impian Anda dengan sempurna.</p><p>Kami percaya bahwa setiap pasangan layak mendapatkan perayaan pernikahan yang istimewa, dan kami berkomitmen untuk menyediakan layanan terbaik untuk menciptakan momen tak terlupakan dalam hidup anda.</p>', '2024-02-09 09:24:55', '2024-02-09 03:19:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `caterings`
--

CREATE TABLE `caterings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `suka` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `caterings`
--

INSERT INTO `caterings` (`id`, `title`, `label`, `description`, `img`, `rate`, `suka`, `dislike`, `created_at`, `updated_at`) VALUES
(3, 'Nasi Goreng Spesial', 'Nasi Goreng Spesial dengan Sajian Terbaik', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707539177_1707536673_mkn1.jpg', '5', 1, 1, '2024-02-09 20:44:33', '2024-02-12 07:21:44'),
(4, 'Sate Ayam Madura', 'Kenikmatan Khas Nusantara dalam Setiap Gigitannya', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707536966_mkn2.jpg', '4.5', 0, 0, '2024-02-09 20:49:26', '2024-02-09 20:49:26'),
(5, 'Capcay Goreng', 'Perpaduan Aroma yang Menggoda dan Rasa yang Menggugah', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707537019_mkn3.jpg', '4', 0, 0, '2024-02-09 20:50:19', '2024-02-09 20:50:19'),
(6, 'Pudding Buah', 'Kesegaran Buah-buahan dalam Setiap Gigitannya', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707537060_mkn4.jpg', '4.5', 0, 0, '2024-02-09 20:51:00', '2024-02-09 20:51:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subjek` varchar(255) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `decors`
--

CREATE TABLE `decors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `suka` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `decors`
--

INSERT INTO `decors` (`id`, `title`, `label`, `description`, `img`, `rate`, `suka`, `dislike`, `created_at`, `updated_at`) VALUES
(3, 'Malam Bintang', 'Elegansi Romantis di Bawah Langit Berbintang', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707483685_dekorasi1.jpg', '4.5', 8, 1, '2024-02-09 06:01:25', '2024-02-25 19:30:42'),
(4, 'Pesona Tropis', 'Keindahan Alam Tengah Hari di Pantai', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707484152_dekorasi2.jpg', '4.5', 3, 0, '2024-02-09 06:09:12', '2024-02-27 19:20:45'),
(5, 'Aroma Lavender', 'Sentuhan Kelembutan dalam Nuansa Ungu', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707484234_dekorasi3.jpg', '4.5', 1, 1, '2024-02-09 06:10:34', '2024-02-12 07:14:26'),
(6, 'Mimpi Musim Semi', 'Kebahagiaan Bunga-bunga yang Mekar', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707484300_dekorasi4.jpg', '4', 1, 0, '2024-02-09 06:11:40', '2024-02-12 06:41:10'),
(7, 'Pesta Taman', 'Kemeriahan Warni di Bawah Naungan Pohon', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707484372_dekorasi5.jpg', '5', 1, 0, '2024-02-09 06:12:52', '2024-02-12 06:13:47'),
(8, 'Euforia Emas', 'Gemerlap Kemewahan dalam Kehangatan Cahaya', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707484424_dekorasi6.jpg', '4.5', 1, 0, '2024-02-09 06:13:44', '2024-02-12 06:41:40'),
(9, 'Es Membeku Yang Elegan', 'Keanggunan dalam Kemurnian Musim Dingin', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707484538_dekorasi7.jpg', '5', 1, 0, '2024-02-09 06:15:38', '2024-02-12 06:20:28'),
(10, 'Nuansa Vintage', 'Sentuhan Romantis dari Masa Lampau yang Eterna', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur veniam possimus blanditiis suscipit voluptates voluptatum sit dicta, soluta deleniti alias quas tenetur molestiae facilis iusto dolore aliquam corrupti, nobis nemo!</p>', '1707484594_dekorasi8.jpg', '4.5', 2, 0, '2024-02-09 06:16:34', '2024-03-05 20:33:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `nohp` bigint(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`id`, `nama`, `jk`, `nohp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'asep', 'Laki-Laki', 8898978, 'Cibeureum', '2024-03-17 02:58:08', '2024-03-17 02:58:08');

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
-- Struktur dari tabel `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `headers`
--

INSERT INTO `headers` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<h1><span style=\"color:hsl(0,0%,100%);\">Selamat Datang di Web Wedding Organizer Kami</span></h1><p>Dengan sentuhan profesionalisme dan keahlian kami, kami siap membantu Anda merencanakan setiap detail acara dengan cermat dan penuh kasih, agar momen istimewa ini menjadi sebuah pengalaman yang luar biasa bagi Anda dan pasangan.</p>', '2024-02-08 12:00:18', '2024-02-27 19:17:34');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_08_093948_create_weddings_table', 1),
(6, '2024_02_08_094740_create_headers_table', 2),
(7, '2024_02_08_094759_create_services_table', 2),
(8, '2024_02_08_094816_create_abouts_table', 2),
(9, '2024_02_08_094829_create_menus_table', 2),
(10, '2024_02_08_094858_create_sliders_table', 2),
(11, '2024_02_08_094916_create_reservations_table', 2),
(12, '2024_02_08_094925_create_teams_table', 2),
(13, '2024_02_08_095009_create_testimonials_table', 2),
(14, '2024_02_08_095022_create_contacts_table', 2),
(15, '2024_02_09_120643_create_caterings_table', 3),
(16, '2024_02_09_120700_create_decors_table', 3),
(17, '2024_02_09_120729_create_packages_table', 3),
(18, '2024_02_10_043538_create_reservations_table', 4),
(19, '2024_03_17_092826_create_employees_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `suka` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `packages`
--

INSERT INTO `packages` (`id`, `title`, `label`, `description`, `img`, `rate`, `harga`, `suka`, `dislike`, `created_at`, `updated_at`) VALUES
(3, 'Paket A', 'Mewujudkan Impian Pernikahan Anda dalam Kehangatan Romantis', '<ol><li>Dekorasi venue pernikahan yang mewah dan elegan.</li><li>Pilihan bunga segar yang dipilih secara khusus untuk dekorasi.</li><li>Paket fotografi dan videografi dengan fotografer profesional.</li><li>Makanan dan minuman premium untuk acara resepsi.</li><li>Layanan koordinator pernikahan pribadi untuk memastikan semuanya berjalan lancar.</li><li>Hiburan live musik atau DJ untuk acara resepsi.</li><li>Souvenir pernikahan eksklusif untuk tamu undangan.</li><li>Sesi makeup dan hairdo untuk pengantin wanita.</li><li>Penyediaan transportasi bagi pengantin dan keluarga.</li><li>Paket penginapan mewah untuk pengantin di hotel atau vila.</li></ol>', '1707790177_Download Free Vectors, Images, Photos & Videos _ Vecteezy.jpg', NULL, 700000000, 1, 1, '2024-02-09 21:08:52', '2024-02-14 18:41:46'),
(4, 'Paket B', 'Elegansi yang Memikat dengan Sentuhan Modern', '<ol><li>Dekorasi venue pernikahan yang elegan dengan sentuhan minimalis.</li><li>Pilihan bunga segar yang sederhana namun menawan untuk dekorasi.</li><li>Layanan fotografi untuk acara resepsi.</li><li>Makanan dan minuman standar untuk acara resepsi.</li><li>Koordinator acara yang akan membantu menjalankan acara.</li><li>Penyediaan DJ atau playlist musik untuk acara resepsi.</li><li>Souvenir pernikahan yang sederhana untuk tamu undangan.</li><li>Layanan makeup dan hairdo standar untuk pengantin wanita.</li><li>Tidak termasuk transportasi bagi pengantin dan keluarga.</li><li>Tidak termasuk penginapan bagi pengantin di hotel atau vila.</li></ol>', '1707539308_B.jpg', '4.5', 500000000, 1, 0, '2024-02-09 21:28:12', '2024-02-12 19:01:15');

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
-- Struktur dari tabel `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `paket` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reservations`
--

INSERT INTO `reservations` (`id`, `nama`, `email`, `paket`, `tanggal`, `deskripsi`, `created_at`, `updated_at`) VALUES
(14, 'Raffa Yuda Pratama', 'billie@gmail.com', 'Paket A', '2024-03-26', 'saya inging menggunakan model dekorasi nuansa vintage', '2024-03-05 20:35:17', '2024-03-05 20:35:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `icon`, `content`, `created_at`, `updated_at`) VALUES
(1, '<i class=\"fas fa-3x fa-map-marker-alt mb-4 text-info\"></i>', '<h5>Pemilihan Lokasi</h5><p>Membantu dalam pemilihan tempat pernikahan yang sesuai dengan tema, ukuran tamu, dan anggaran pasangan.</p>', '2024-02-09 02:45:22', '2024-02-08 20:46:16'),
(3, '<i class=\"fas fa-3x fa-archive mb-4 text-info\"></i>', '<h5>Penyediaan Vendor</h5><p>Merekomendasikan dan mengkoordinasikan vendor-vendor seperti fotografer, katering, dekorator, MC, dan lain-lain.</p>', '2024-02-08 20:52:25', '2024-02-08 20:52:25'),
(4, '<i class=\"fas fa-3x fa-envelope mb-4 text-info\"></i>', '<h5>Pengelolaan Undangan</h5><p>Membantu dalam desain, pencetakan, dan distribusi undangan, serta mengelola daftar tamu dan konfirmasi kehadiran.</p>', '2024-02-08 20:53:28', '2024-02-08 20:53:28'),
(6, '<i class=\"fas fa-3x fa-cogs mb-4 text-info\"></i>', '<h5>Pengaturan Dekorasi</h5><p>Menyediakan konsep dekorasi yang sesuai dengan tema pernikahan, termasuk bunga, meja, kursi, dan hiasan lainnya.</p>', '2024-02-08 20:58:47', '2024-02-08 21:15:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `img`, `name`, `job`, `created_at`, `updated_at`) VALUES
(2, '1709515351_salah.jpg', 'Mohamed Salah', 'Desainer', '2024-02-10 21:55:55', '2024-03-03 18:22:31'),
(3, '1709515422_dimas.jpg', 'Evan Dimas', 'Direktur', '2024-02-10 22:11:45', '2024-03-03 18:23:42'),
(4, '1709515447_haaland.jpg', 'Erling Haaland', 'Administrator', '2024-02-10 22:12:25', '2024-03-03 18:24:07'),
(5, '1709515557_osimhen.jpg', 'Osimhen', 'vendor regulator', '2024-02-10 22:13:30', '2024-03-03 18:25:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `id_user`, `comment`, `created_at`, `updated_at`) VALUES
(3, 6, 'Tidak ada yang bisa kami katakan selain puas dan terkesan! Dari dekorasi hingga layanan, semuanya melebihi harapan kami. Terima kasih telah membuat momen spesial kami begitu indah dan berkesan.', '2024-02-15 00:30:59', '2024-02-15 00:30:59'),
(4, 7, 'Wedding organizer ini adalah pilihan yang sempurna bagi kami. Mereka tidak hanya memberikan layanan yang luar biasa, tetapi juga membantu mengurangi stres dan kekhawatiran selama persiapan pernikahan. Kami sangat berterima kasih atas semua yang mereka lakukan untuk kami.', '2024-02-15 00:45:20', '2024-02-15 00:45:20'),
(5, 8, 'Kami sangat terkesan dengan profesionalisme dan perhatian detail yang diberikan oleh tim wedding organizer ini. Pernikahan kami menjadi sangat berkesan berkat bantuan mereka!', '2024-02-15 00:47:15', '2024-02-15 00:47:15');

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
  `level` varchar(255) DEFAULT NULL,
  `img` text DEFAULT NULL,
  `profesi` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `img`, `profesi`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Billie Eilish', 'billie@gmail.com', NULL, '$2y$12$6MKw2gEt4pficN9Cr0E8auhW/3gyNpY3ubccdPujeD.qDt2fMi7Ui', 'user', '1707982147.jpg', 'Musician', 'MpQHjc6R9fGCnQ4HvEUC80OmEZw8i9I1s1gT5zwTpXOpRoJxzgoRqxCYguMi', '2024-02-15 00:29:07', '2024-02-15 00:29:07'),
(7, 'Mesut Ozil', 'ozil@gmail.com', NULL, '$2y$12$cCmjL3zhoRlrzvgLpHrDmOvuv7JztAFlWCCr0oyX4pnlzwMn3mH1a', 'user', '1707982981.jpg', 'Player Football', '9sMrTmDGhozJlfu8Pn9T1sqwYvsghAPqME0tcqreFMZa2Q4p51RDB9p0ZGUa', '2024-02-15 00:43:01', '2024-02-15 00:43:01'),
(8, 'Haji Bolot', 'bolot@gmail.com', NULL, '$2y$12$BZKnGrb7IzEspN3q5keJI.aalzSSPeckd4Qmci8pEuhAauJ033VG.', 'user', '1707983186.jpg', 'Comedian', 'kFVqtMROTCfsBZts8NkqnqsiFQFbgTaGeVIzrKwvdNvXImCY8MkACQPwTUyk', '2024-02-15 00:46:26', '2024-02-15 00:46:26'),
(16, 'Raffa Yuda Pratama', 'raffa@gmail.com', NULL, '$2y$12$7vIkxMsRO62u4Nd93aVXmu4/qMDCbEPUJvIMbMyoONvXTVDnJ5b6.', 'admin', 'default.jpg', 'Administrator', 'AuIq0qmw3G15MsKgfH98w8W6Yw8eatsT2GEiWVZiqo77Q2rHNpaAX1UZAr1k', '2024-03-05 22:25:06', '2024-03-05 22:25:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `caterings`
--
ALTER TABLE `caterings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `decors`
--
ALTER TABLE `decors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT untuk tabel `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `caterings`
--
ALTER TABLE `caterings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `decors`
--
ALTER TABLE `decors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
