-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Mar 2024 pada 07.55
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
-- Database: `ukom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `password` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`password`, `username`) VALUES
('123', 'admin'),
('123', 'amalia'),
('123', 'pass');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `kd_agama` int(10) NOT NULL,
  `agama` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagi_kelas`
--

CREATE TABLE `bagi_kelas` (
  `kelas` varchar(10) NOT NULL,
  `tahun` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `no_presensi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` int(15) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` varchar(15) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `mapel` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nama_pt` varchar(50) DEFAULT NULL,
  `ijazah` varchar(20) DEFAULT NULL,
  `lulus` varchar(15) DEFAULT NULL,
  `golongan` varchar(10) DEFAULT NULL,
  `ket` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `agama`, `mapel`, `alamat`, `nama_pt`, `ijazah`, `lulus`, `golongan`, `ket`, `jenis_kelamin`) VALUES
(11, '11', '11', '0000-00-00', '11', '11', '11', '11', '111', '0000-00-00', '11', '11', '11'),
(11111, '111', '111', '11', '1111', '111111', '11', '11', '11', '11', '11', '11', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `kelas` varchar(10) NOT NULL,
  `tahun` int(10) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` int(10) NOT NULL,
  `nama_mapel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `tahun` int(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `nis` int(10) NOT NULL,
  `semester` int(5) NOT NULL,
  `n_bindo` int(5) NOT NULL,
  `n_mtk` int(5) NOT NULL,
  `n_agama` int(5) NOT NULL,
  `n_ipa` int(5) NOT NULL,
  `n_ips` int(5) NOT NULL,
  `n_sbk` int(5) NOT NULL,
  `n_penjas` int(5) NOT NULL,
  `n_bing` int(5) NOT NULL,
  `n_mulok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(15) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `ayah` varchar(45) NOT NULL,
  `ibu` varchar(45) NOT NULL,
  `kerja_ayah` varchar(45) NOT NULL,
  `kerja_ibu` varchar(45) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `ayah`, `ibu`, `kerja_ayah`, `kerja_ibu`, `alamat`) VALUES
(11, '11', '11', '11', '11', NULL, '11', '11', '11', '11', '111'),
(11, '11', '11', '1111', '11', '11', '11', '11', '11', '11', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `kd_tahun` int(10) NOT NULL,
  `tahun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

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
  ADD UNIQUE KEY `agama` (`agama`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`kd_tahun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
