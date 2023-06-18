-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2023 pada 16.55
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'c93ccd78b2076528346216b3b2f701e6'),
(2, 'supandi', '09557679183a26019db11f5856683c99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `nik`, `alamat`) VALUES
(8, 'Supandi', 2147483647, 'Dusun Calangcang, RT/RW 29/09, Desa Legok Kidul, Kecamatan Paseh, Kabupaten Sumedang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `abstrak` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `stok` varchar(254) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `abstrak`, `tahun`, `penulis`, `stok`, `status`) VALUES
(1, 'Manajemen Perubahan Kurikulum', 'Perubahan kurikulum bukan hal yang aneh dan tabu bagi suatu negara untuk mendongkrak kualitas pendidikan dan menyelaraskannya dengan perkembangan zaman. Kurikulum sebagai salah satu elemen penting yang mendukung arah pembelajaran punya pengaruh signifikan. Karena itulah, pro-kontra perubahan kurikulum senantiasa muncul demi memastikan perubahan yang ada benar-benar bermanfaat untuk meningkatkan kualitas pendidikan demi kepentingan generasi masa depan.', 2015, 'Dr.H. Abdul Manab, M.Ag', '0', 1),
(2, 'Penelitian Pendidikan: Pendekatan Kualitatif', 'ini adalah abstrak 2', 2015, 'Dr.H. Abdul Manab, M.Ag', '5', 1),
(3, 'Pengantar Statistika: Panduan Praktis untuk Pengajar ', 'ini adalah abstrak 3', 2015, 'Dr. Rohmad dan Supriyanto', '5', 1),
(4, 'Ulumul Hadis', 'ini adalah abstrak 4', 2015, 'Dr. Alfatih Suryadilaga', '5', 1),
(5, 'Psikologi Pendidikan', 'ini adalah abstrak 5', 2015, 'Noer Rahmah', '5', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjaman_id` int(11) NOT NULL,
  `peminjaman_buku` int(11) NOT NULL,
  `peminjaman_anggota` int(11) NOT NULL,
  `peminjaman_tanggal_mulai` date NOT NULL,
  `peminjaman_tanggal_sampai` date NOT NULL,
  `jumlah_buku` varchar(254) NOT NULL,
  `peminjaman_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`peminjaman_id`, `peminjaman_buku`, `peminjaman_anggota`, `peminjaman_tanggal_mulai`, `peminjaman_tanggal_sampai`, `jumlah_buku`, `peminjaman_status`) VALUES
(8, 1, 8, '2023-06-16', '2023-06-16', '', 1),
(10, 1, 8, '2023-06-16', '2023-06-16', '2', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `username`, `password`) VALUES
(3, 'Petugas 1', 'petugas1', 'b53fe7751b37e40ff34d012c7774d65f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `ip` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`ip`, `date`, `hits`, `online`, `time`) VALUES
('::1', '2023-06-10', 51, '1686366921', '2023-06-10 04:14:13'),
('::1', '2023-06-16', 27, '1686915222', '2023-06-16 04:13:26'),
('::1', '2023-06-17', 158, '1686997641', '2023-06-17 09:47:46'),
('::1', '2023-06-18', 7, '1687100039', '2023-06-18 16:51:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjaman_id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `peminjaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
