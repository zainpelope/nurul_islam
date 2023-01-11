-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2022 pada 02.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nuris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Abdullah', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(40) NOT NULL,
  `nis_anggota` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nama_anggota`, `nis_anggota`, `jenis_kelamin`, `alamat`, `jabatan`) VALUES
(1, 'Abdullah', 12345, 'Laki-Laki', 'Sampang', 'Ketua Santri'),
(2, 'Zainullah', 75967, 'Laki-Laki', 'Pamekasan', 'Santri'),
(3, 'Ridwan', 48694, 'Laki-Laki', 'Sampang', 'Santri'),
(4, 'Anwariyah', 75967, 'Perempuan', 'Pamekasan', 'Santri'),
(5, 'Alvian', 84658, 'Laki-Laki', 'Sumenep', 'Santri'),
(6, 'Arya Kusuma', 17486, 'Laki-Laki', 'angkalanPamekasan', 'Santri'),
(7, 'Fathor', 87569, 'Laki-Laki', 'Pamekasan', 'Santri'),
(8, 'Jodi', 94856, 'Laki-Laki', 'Sampang', 'Santri'),
(9, 'Luna Maya', 75967, 'Perempuan', 'Bandung', 'Artis'),
(10, 'Dewi Persik', 75968, 'Perempuan', 'Jakarta', 'Aartis');



-- --------------------------------------------------------


--
-- Struktur dari tabel `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(20) NOT NULL,
  `deskripsi_kegiatan` text NOT NULL,
  `tgl_kegiatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Dumping data untuk tabel `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `deskripsi_kegiatan`, `tgl_kegiatan`) VALUES
(1, 'Pekan Ngaji', 'Acara Tahunan', '2020-08-07'),
(2, 'Pekan Sunyi', 'Ketika mau ujian', '2022-08-01'),
(3, 'Lomba makan-makan', 'Memperingati hari kemerdekaan RI', '2023-08-17'),
(4, 'Albanjari', 'Latihan untuk mengikuti turnamen di Jakarta', '2020-08-01'),
(5, 'Tidur', 'Setiap santri diwajibkan tidur', '2020-08-01');


--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);


--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;


--
-- AUTO_INCREMENT untuk tabel `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;




