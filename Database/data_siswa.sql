-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 12.19
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `no_id` int(11) NOT NULL,
  `nama_siswa` varchar(150) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tgl_lahir` text NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `alamat_tinggal` text NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `foto_siswa` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(64) NOT NULL,
  `agama_wali` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `alamat_wali` text NOT NULL,
  `nomor_telepon` int(15) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `penghasilan_wali` varchar(100) NOT NULL,
  `hub_dengan_siswa` varchar(50) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `kewarganegaraan_siswa` varchar(50) NOT NULL,
  `jumlah_saudara` varchar(100) NOT NULL,
  `anak_ke` int(42) NOT NULL,
  `anak_yatim` varchar(30) NOT NULL,
  `jarak_kesekolah` varchar(40) NOT NULL,
  `tinggal_dengan` varchar(50) NOT NULL,
  `transportasi_kesekolah` varchar(60) NOT NULL,
  `bb` varchar(50) NOT NULL,
  `tb` varchar(60) NOT NULL,
  `gol_darah` varchar(40) NOT NULL,
  `penyakit_diderita` varchar(90) NOT NULL,
  `tanggal_diterima` varchar(64) NOT NULL,
  `asal_smp` varchar(42) NOT NULL,
  `tgl_ijazah_smp` varchar(12) NOT NULL,
  `no_ijazah_smp` int(32) NOT NULL,
  `tahun_skhun` varchar(23) NOT NULL,
  `no_skhun` int(32) NOT NULL,
  `tanggal_diterima_siswa_pindahan` varchar(32) NOT NULL,
  `asal_sma` varchar(42) NOT NULL,
  `alasan_pindah` text NOT NULL,
  `tanggal_lahir_ayah` varchar(31) NOT NULL,
  `tanggal_lahir_ibu` varchar(45) NOT NULL,
  `kewarganegaraan_ayah` varchar(31) NOT NULL,
  `kewarganegaraan_ibu` varchar(23) NOT NULL,
  `nomor_telepon_ayah` int(31) NOT NULL,
  `penghasilan_ayah` int(24) NOT NULL,
  `penghasilan_ibu` int(32) NOT NULL,
  `nomor_telepon_ibu` int(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`no_id`, `nama_siswa`, `nis`, `nisn`, `jenis_kelamin`, `agama`, `tgl_lahir`, `tmp_lahir`, `alamat_tinggal`, `kelas`, `jurusan`, `nama_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `alamat_ayah`, `nama_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `alamat_ibu`, `foto_siswa`, `nama_wali`, `tempat_lahir`, `tanggal_lahir`, `agama_wali`, `kewarganegaraan`, `alamat_wali`, `nomor_telepon`, `pekerjaan_wali`, `penghasilan_wali`, `hub_dengan_siswa`, `nama_panggilan`, `kewarganegaraan_siswa`, `jumlah_saudara`, `anak_ke`, `anak_yatim`, `jarak_kesekolah`, `tinggal_dengan`, `transportasi_kesekolah`, `bb`, `tb`, `gol_darah`, `penyakit_diderita`, `tanggal_diterima`, `asal_smp`, `tgl_ijazah_smp`, `no_ijazah_smp`, `tahun_skhun`, `no_skhun`, `tanggal_diterima_siswa_pindahan`, `asal_sma`, `alasan_pindah`, `tangga_lahir_ayah`, `tangga_lahir_ibu`, `kewarganegaraan_ayah`, `kewarganegaraan_ibu`, `nomor_telepon_ayah`, `penghasilan_ayah`, `penghasilan_ibu`, `nomor_telepon_ibu`) VALUES
(1, 'dfvdfvfd', '4334', '343', 'Laki-Laki', 'Protestan', '01/1/2021', '3434', 'dsfdfd', 'dfdf', 'fdfd', 'csdf', 'sdfsfd', 'fsfsf', 'sfsf', 'sdfsfs', 'fsfdsf', 'fsfs', 'sfsfs', 'FB_IMG_1586773904222.jpg', '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
