-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2021 pada 01.16
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` text NOT NULL,
  `matpel` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `matpel`, `created`, `updated`) VALUES
(2, 'Jono Suparno', 'Fisika', '2021-11-11 12:43:52', '2021-11-11 12:44:03'),
(3, 'Egi Sumargo Hartanto', 'Pendidikan Kewarganegaraan', '2021-11-11 12:45:53', '2021-11-11 12:45:53'),
(4, 'Endang Soekamti', 'Matematika', '2021-11-11 14:46:40', '2021-11-11 14:46:40'),
(5, 'Edi Sukarmono Demono', 'Kimia', '2021-11-11 14:47:19', '2021-11-11 14:47:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` text NOT NULL,
  `kelas` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `kelas`, `created`, `updated`, `jam`) VALUES
(1, 'Alhimny Dwinata Utama', 'XII MIPA 3', '2021-11-11 12:17:34', '2021-11-11 12:26:09', '00:00:00'),
(3, 'Anisa Putri Setyaningrum', 'XII MIPA 4', '2021-11-11 12:26:31', '2021-11-11 12:26:31', '00:00:00'),
(4, 'Ervhy Indra Puspita', 'XII MIPA 3', '2021-11-11 12:49:16', '2021-11-11 12:49:16', '00:00:00'),
(5, 'Nafia Ruwaida Chossyatillah', 'XI MIPA 1', '2021-11-11 12:49:36', '2021-11-11 12:49:36', '00:00:00'),
(6, 'Gamas Bloory Lautan', 'XI MIPA 2', '2021-11-11 12:49:56', '2021-11-11 12:49:56', '00:00:00'),
(7, 'Muhammad Romdon Dahlan', 'XII MIPA 1', '2021-11-11 12:50:20', '2021-11-11 12:50:20', '00:00:00'),
(8, 'Saiful Farisin Nur Arifin', 'XII MIPA 2', '2021-11-11 12:51:14', '2021-11-11 12:51:14', '00:00:00'),
(10, 'Maharani Indah Permatasari', 'XI MIPA 3', '2021-11-11 12:52:21', '2021-11-11 12:52:21', '00:00:00'),
(13, 'Annisa\' Rachmawaty', 'XI MIPA 2', '2021-11-11 14:46:13', '2021-11-11 14:46:19', '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_guru`
--

CREATE TABLE `siswa_guru` (
  `id_siswa_guru` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa_guru`
--

INSERT INTO `siswa_guru` (`id_siswa_guru`, `id_guru`, `id_siswa`, `nilai`, `created`, `updated`) VALUES
(2, 2, 1, 90, '2021-11-11 13:56:27', '2021-11-11 14:21:58'),
(3, 3, 1, 100, '2021-11-11 13:57:45', '2021-11-11 14:25:55'),
(4, 2, 3, NULL, '2021-11-11 14:38:58', '2021-11-11 14:38:58'),
(5, 3, 3, NULL, '2021-11-11 14:39:03', '2021-11-11 14:39:03'),
(6, 3, 4, NULL, '2021-11-11 14:47:38', '2021-11-11 14:47:38'),
(7, 5, 4, NULL, '2021-11-11 14:47:43', '2021-11-11 14:47:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `siswa_guru`
--
ALTER TABLE `siswa_guru`
  ADD PRIMARY KEY (`id_siswa_guru`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `siswa_guru`
--
ALTER TABLE `siswa_guru`
  MODIFY `id_siswa_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
