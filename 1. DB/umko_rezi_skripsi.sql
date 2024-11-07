-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2024 pada 09.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umko_rezi_skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `kode_instansi` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_web` varchar(20) NOT NULL,
  `tagline_web_slide1` varchar(50) NOT NULL,
  `tagline_web_slide2` varchar(50) NOT NULL,
  `caption_web_slide1` varchar(50) NOT NULL,
  `caption_web_slide2` varchar(50) NOT NULL,
  `tentang_web` longtext NOT NULL,
  `footer_web` varchar(50) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `telp_pusat` varchar(15) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `telp_2` varchar(15) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `kode_instansi`, `id_user`, `judul_web`, `tagline_web_slide1`, `tagline_web_slide2`, `caption_web_slide1`, `caption_web_slide2`, `tentang_web`, `footer_web`, `alamat_instansi`, `telp_pusat`, `telp`, `telp_2`, `whatsapp`, `logo`) VALUES
(1, 'PGD-CB-BDRJY', 1, 'SI-PEGADAIAN', 'Gadai dengan Mudah, Dapatkan Dana Cepat!', 'Jangkau Mimpi Anda dengan Solusi Pinjaman Terperca', 'Temukan cara tercepat dan termudah untuk mendapatk', 'Jangan biarkan kekurangan dana menghalangi impian ', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt temporibus voluptate ab sunt nemo id esse, repudiandae iusto optio adipisci asperiores mollitia sint architecto soluta, tempore delectus exercitationem provident officiis expedita. Quos, officiis modi odit tempore eos quis labore dolorum delectus amet, ipsa ut molestias quo deleniti quam, nemo sint velit itaque voluptatum soluta quidem. Temporibus voluptas ab animi consequuntur laborum quam at eum voluptatum neque commodi dolorem natus dicta odit corporis, eius ratione odio rem. Dolores ipsam provident, veniam eum voluptatum rem obcaecati nobis nulla totam asperiores, eaque eveniet, consectetur tempore a illo praesentium et esse modi dicta dolor?\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt temporibus voluptate ab sunt nemo id esse, repudiandae iusto optio adipisci asperiores mollitia sint architecto soluta, tempore delectus exercitationem provident officiis expedita. Quos, officiis modi odit tempore eos quis labore dolorum delectus amet, ipsa ut molestias quo deleniti quam, nemo sint velit itaque voluptatum soluta quidem. Temporibus voluptas ab animi consequuntur laborum quam at eum voluptatum neque commodi dolorem natus dicta odit corporis, eius ratione odio rem. Dolores ipsam provident, veniam eum voluptatum rem obcaecati nobis nulla totam asperiores, eaque eveniet, consectetur tempore a illo praesentium et esse modi dicta dolor?', 'Copyright 2024 SI-Pegadaian | All Rights Reserved', 'Jl. Kramat Raya 162 Jakarta Pusat 10430 Indonesia', '1500569', '021 3155 550', '021 8063 5162', '08111 1500 569', 'logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `kode_user` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `kode_user`, `name`, `email`, `telp`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'ID12024010', 'Khoirul Husen', 'hoirulhusen08@gmail.com', 0, 'default.jpg', '$2y$10$nr.foXCJokGCEejP5xh1xuD4mP0hSIN9C1ttIsGKFWLCvcaSTyup2', 1, 1, 1712589712),
(2, 'ID12024011', 'Muhammad Alfarizi', 'mahasiswa@gmail.com', 0, 'default.jpg', '$2y$10$EYHL90J3KjMLmTa1Jt6uLuoZfjaBc3TCVpnjumYpfw1B51dpDddvG', 2, 1, 1712589882),
(3, 'ID12024017', 'Administrators', 'admin@gmail.com', 0, '500-x-500-Blue.png', '$2y$10$bxLYmUvJe/kamJ9X0se8e.uVvBzjEpcJo.ipWpuSwrF1tCZeHlsK2', 1, 1, 1712666172),
(6, 'ID-19-05-2024-3', 'Asep Juannn', 'juanasep59@gmail.com', 0, '500-x-500.png', '$2y$10$A.oCluMm3PVy1GgQC.BKieRV4BOxcZPvAaRSZ.mH6Lb/QnLetr.Ku', 2, 1, 1716137685),
(10, 'ID-20-05-2024-6', 'Muhammad Alfarizi', 'muhammadalfarizi041@gmail.com', 0, 'default.jpg', '$2y$10$DON26RvdJNRgJMRYiohVAOzM5eD1HIsAWTE8vg9W.sqqxyfFkl5em', 2, 0, 1716218010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_role`
--

CREATE TABLE `users_role` (
  `id` int(11) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users_role`
--

INSERT INTO `users_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Nasabah'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menus`
--

CREATE TABLE `user_access_menus` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_access_menus`
--

INSERT INTO `user_access_menus` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(14, 1, 2),
(3, 2, 2),
(4, 1, 3),
(16, 5, 7),
(8, 3, 5),
(9, 3, 2),
(10, 4, 2),
(11, 5, 2),
(12, 6, 2),
(13, 7, 2),
(15, 4, 6),
(17, 6, 8),
(18, 7, 9),
(19, 3, 10),
(20, 2, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menus`
--

CREATE TABLE `user_menus` (
  `id` int(11) NOT NULL,
  `menu` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_menus`
--

INSERT INTO `user_menus` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menus`
--

CREATE TABLE `user_sub_menus` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_sub_menus`
--

INSERT INTO `user_sub_menus` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'nav-icon fas fa-tachometer-alt', 1),
(2, 2, 'Profil Saya', 'user', 'nav-icon fas fa-user', 1),
(3, 3, 'Manajemen Menu', 'menu', 'nav-icon fas fa-solid fa-folder', 1),
(4, 3, 'Manajemen Submenu', 'menu/submenu', 'nav-icon fas fa-solid fa-folder-open', 1),
(5, 1, 'Peran', 'admin/role', 'nav-icon fas fa-solid fa-address-card', 1),
(6, 1, 'Manajemen Pengguna', 'admin/manageAllUser', 'nav-icon fas fa-users', 1),
(7, 1, 'Pengaturan Web', 'admin/settings', 'nav-icon fas fa-cog', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(4, 'muhammadalfarizi041@gmail.com', 'iq22QdVCP2K7J65MvNf9r0bEYBLAyOtB4HlM1JtjP6I=', 1716218010);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_role`
--
ALTER TABLE `users_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menus`
--
ALTER TABLE `user_access_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menus`
--
ALTER TABLE `user_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menus`
--
ALTER TABLE `user_sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_access_menus`
--
ALTER TABLE `user_access_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user_menus`
--
ALTER TABLE `user_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menus`
--
ALTER TABLE `user_sub_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
