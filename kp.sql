-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2020 pada 05.07
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dumas`
--

CREATE TABLE `tbl_dumas` (
  `id_dumas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(10) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `agama` enum('Islam','Hindu','Budha','Kristen','','') NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dumas`
--

INSERT INTO `tbl_dumas` (`id_dumas`, `nama`, `tmp_lahir`, `tgl_lahir`, `umur`, `jenis_kelamin`, `pekerjaan`, `agama`, `alamat`) VALUES
(1, 'Bahlul', 'Siak Lanjung', '1990-08-15', 29, 'laki-laki', 'Buruh', 'Islam', 'Siak Raya'),
(4, 'Supomo', 'Siak', '1990-02-02', 20, 'Laki-laki', 'Petani', 'Islam', 'Siak Lanjung'),
(5, 'Andra Saputra', 'Bandar Sungai', '1993-06-23', 27, 'Laki-laki', 'Petani', 'Islam', 'Sabak permai parit 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kehilangan`
--

CREATE TABLE `tbl_kehilangan` (
  `id_kehilangan` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `agama` enum('Islam','Hindu','Budha','Kristen') NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kehilangan`
--

INSERT INTO `tbl_kehilangan` (`id_kehilangan`, `nama`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `pekerjaan`, `agama`, `keterangan`, `alamat`) VALUES
(1, 'Rohaya', 'Laki-laki', 'Laksamana', '1990-08-15', 'Petani', 'Islam', 'Kehilangan KTP', 'Laksamana'),
(2, 'Joni', 'Laki-laki', 'Samarinda', '1981-03-12', 'Wiraswasta', 'Islam', 'Motor', 'Belading');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keluar`
--

CREATE TABLE `tbl_keluar` (
  `id_keluar` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tujuan_surat` varchar(100) NOT NULL,
  `lampiran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_keluar`
--

INSERT INTO `tbl_keluar` (`id_keluar`, `no_surat`, `tanggal`, `perihal`, `tujuan_surat`, `lampiran`) VALUES
(1, 12, '2019-08-02', 'Sosialisasi bahaya narkoba', 'SMA N 1 Sabak Auh', 11),
(2, 14, '2019-08-20', 'Sosialisasi pentingnya kelengkapan berkendara', 'Desa Selat Guntungg', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masuk`
--

CREATE TABLE `tbl_masuk` (
  `id_masuk` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `perihal` varchar(1000) NOT NULL,
  `lampiran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_masuk`
--

INSERT INTO `tbl_masuk` (`id_masuk`, `no_surat`, `tanggal`, `pengirim`, `perihal`, `lampiran`) VALUES
(1, 12, '2019-08-17', 'Kantor Camat', 'Pengamanan upacara', 12),
(2, 23, '2019-09-11', 'Kantor UPTD', 'Sosialisasi bahaya Narkoba', 122);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perizinan`
--

CREATE TABLE `tbl_perizinan` (
  `id_perizinan` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time(4) NOT NULL,
  `kegiatan` varchar(1100) NOT NULL,
  `tempat` varchar(1000) NOT NULL,
  `pemohon` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_perizinan`
--

INSERT INTO `tbl_perizinan` (`id_perizinan`, `no_surat`, `tanggal`, `waktu`, `kegiatan`, `tempat`, `pemohon`) VALUES
(1, 12, '2019-08-18', '14:00:00.0000', 'HUT RI', 'Lapangan Bandar Sungai', 'Panitia HUR RI'),
(4, 13, '2019-08-20', '08:00:00.0000', 'Gotong royong', 'Lapangan', 'Panitia'),
(5, 12, '2019-09-21', '18:30:00.0000', 'Haul', 'Masjid Raya Bandar Sungai', 'Karang Taruna Bandar Sungai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_skck`
--

CREATE TABLE `tbl_skck` (
  `id_skck` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('Islam','Hindu','Budha','Kristen') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `riwayat_sekolah` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_skck`
--

INSERT INTO `tbl_skck` (`id_skck`, `nama`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `agama`, `alamat`, `pekerjaan`, `keperluan`, `riwayat_sekolah`, `keterangan`) VALUES
(2, 'Udin', 'Laki-laki', 'Bandar Sungai', '1990-12-12', 'Islam', 'Sabak Permai', 'Petani', 'Melamar Kerja', 'SMA N 1 Sabak Auh', 'perpanjang'),
(3, 'Teguh Wibowo', 'Laki-laki', 'Lampung', '1997-09-12', 'Islam', 'Bandar Pedada', 'Wiraswasta', 'Perpanjang kontrak', 'SMK N 1 Siak Kecil', '-'),
(4, 'Bambang Pamungkas', 'Laki-laki', 'Dayun', '1990-12-21', 'Islam', 'Bandar Lampung', 'Pesepakbola', 'Melamar Kerja', 'SMA N 1 Bagan', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tilang`
--

CREATE TABLE `tbl_tilang` (
  `id_tilang` int(12) NOT NULL,
  `no_registrasi` int(20) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_tilang`
--

INSERT INTO `tbl_tilang` (`id_tilang`, `no_registrasi`, `nama`, `alamat`) VALUES
(7, 122, 'Bandi', 'Sabak Permai Parit 4'),
(5, 12, 'Muda', 'Pekanbaru'),
(8, 144, 'Baharuddin', 'Laksamana'),
(9, 145, 'Bayu Saputra', 'Rempak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `password`) VALUES
(3, 'Aditya Syaifuddin', 'Bosmuda', '0d6783bc0f366b25334c74a9b935a30ac4cb3ad5'),
(4, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(5, 'Adt', 'adt', '510911ca0904df843254643ba27120ccabfde1b1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_dumas`
--
ALTER TABLE `tbl_dumas`
  ADD PRIMARY KEY (`id_dumas`);

--
-- Indeks untuk tabel `tbl_kehilangan`
--
ALTER TABLE `tbl_kehilangan`
  ADD PRIMARY KEY (`id_kehilangan`);

--
-- Indeks untuk tabel `tbl_keluar`
--
ALTER TABLE `tbl_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indeks untuk tabel `tbl_masuk`
--
ALTER TABLE `tbl_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `tbl_perizinan`
--
ALTER TABLE `tbl_perizinan`
  ADD PRIMARY KEY (`id_perizinan`);

--
-- Indeks untuk tabel `tbl_skck`
--
ALTER TABLE `tbl_skck`
  ADD PRIMARY KEY (`id_skck`);

--
-- Indeks untuk tabel `tbl_tilang`
--
ALTER TABLE `tbl_tilang`
  ADD PRIMARY KEY (`id_tilang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_dumas`
--
ALTER TABLE `tbl_dumas`
  MODIFY `id_dumas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kehilangan`
--
ALTER TABLE `tbl_kehilangan`
  MODIFY `id_kehilangan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_keluar`
--
ALTER TABLE `tbl_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_masuk`
--
ALTER TABLE `tbl_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_perizinan`
--
ALTER TABLE `tbl_perizinan`
  MODIFY `id_perizinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_skck`
--
ALTER TABLE `tbl_skck`
  MODIFY `id_skck` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_tilang`
--
ALTER TABLE `tbl_tilang`
  MODIFY `id_tilang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
