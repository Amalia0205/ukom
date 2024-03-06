-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2024 pada 09.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `email` varchar(35) NOT NULL,
  `password` varchar(35) DEFAULT NULL,
  `username` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `kd_agama` int(5) NOT NULL,
  `nama_agama` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagi_kelas`
--

CREATE TABLE `bagi_kelas` (
  `nama_kelas` varchar(15) NOT NULL,
  `tahun` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `no_presensi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` int(10) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `tmpt_lhr` varchar(25) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `mapel` varchar(15) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `nama_pt` varchar(50) DEFAULT NULL,
  `ijazah` varchar(25) DEFAULT NULL,
  `lulus` date DEFAULT NULL,
  `golongan` varchar(20) DEFAULT NULL,
  `ket` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `nama_kelas` varchar(15) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL,
  `nama_mapel` varchar(15) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `jam` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` int(10) NOT NULL,
  `nama_mapel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `tahun` int(5) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL,
  `nis` int(10) NOT NULL,
  `semester` int(5) NOT NULL,
  `nil_indo` int(5) NOT NULL,
  `nil_mtk` int(5) NOT NULL,
  `nil_agama` int(5) NOT NULL,
  `nil_ipa` int(5) NOT NULL,
  `nil_pkn` int(5) NOT NULL,
  `nil_ips` int(5) NOT NULL,
  `nil_sbk` int(5) NOT NULL,
  `nil_penjas` int(5) NOT NULL,
  `nil_ing` int(5) NOT NULL,
  `nil_mulok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(10) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `tmpt_lhr` varchar(25) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `ayah` varchar(45) DEFAULT NULL,
  `ibu` varchar(45) DEFAULT NULL,
  `kerja_ayah` varchar(20) DEFAULT NULL,
  `kerja_ibu` varchar(20) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahunajaran` int(10) NOT NULL,
  `tahun` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`kd_agama`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahunajaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
