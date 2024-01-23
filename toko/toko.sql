-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2024 pada 15.06
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `IdBarang` int(11) NOT NULL,
  `NamaBarang` varchar(100) DEFAULT NULL,
  `Keterangan` text DEFAULT NULL,
  `Satuan` varchar(20) DEFAULT NULL,
  `IdPengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`IdBarang`, `NamaBarang`, `Keterangan`, `Satuan`, `IdPengguna`) VALUES
(1, 'The Hobbit', 'Buku hardcover', '30', 1),
(2, 'The Lord of the Rings', 'Buku hardcover', '30', 1),
(3, 'Ensiklopedia', 'Buku hardcover', '30', 1),
(4, 'Lofarsa', 'Buku paperback', '30', 1),
(5, 'Pagi di Amerika', 'E-book', '30', 1),
(6, 'Happily Ever After', 'E-book', '30', 1),
(7, 'Sebuah Seni untuk Bersikap Bodo Amat', 'Buku paperback', '30', 1),
(8, 'Laut Bercerita', 'Buku paperback', '30', 1),
(9, 'Keajaiban Toko Kelontong Namiya', 'Buku paperback', '30', 1),
(10, 'Shaka Oh Shaka', 'E-book', '30', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hakakses`
--

CREATE TABLE `hakakses` (
  `IdAkses` int(11) NOT NULL,
  `NamaAkses` varchar(50) DEFAULT NULL,
  `Keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hakakses`
--

INSERT INTO `hakakses` (`IdAkses`, `NamaAkses`, `Keterangan`) VALUES
(1, 'Admin', 'Administrasi toko dengan hak akses penuh'),
(2, 'User', 'Pengguna umum yang dapat melakukan pembelian buku'),
(3, 'Editor', 'Editor yang memiliki hak akses untuk mengelola informasi buku'),
(4, 'Viewer', 'Pengguna yang hanya dapat melihat informasi buku tanpa mengubahnya'),
(5, 'Guest', 'Pengguna yang dapat mengakses toko tanpa membuat akun'),
(6, 'Superuser', 'Pengguna dengan hak akses lebih dari admin'),
(7, 'CustomerService', 'Pengguna yang menangani pertanyaan dan keluhan pelanggan'),
(8, 'Tester', 'Pengguna yang melakukan pengujian aplikasi'),
(9, 'Developer', 'Pengembang yang memiliki hak akses untuk mengelola kode sumber'),
(10, 'Analyst', 'Analisis data penjualan dan preferensi pembeli');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `IdPembelian` int(11) NOT NULL,
  `JumlahPembelian` int(11) DEFAULT NULL,
  `HargaBeli` varchar(100) DEFAULT NULL,
  `IdPengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`IdPembelian`, `JumlahPembelian`, `HargaBeli`, `IdPengguna`) VALUES
(1, 2, '10.00', 1),
(2, 3, '10.00', 1),
(3, 1, '25.00', 1),
(4, 2, '25.00', 1),
(5, 3, '10.00', 1),
(6, 4, '15.00', 1),
(7, 5, '15.00', 1),
(8, 3, '20.00', 1),
(9, 2, '20.00', 1),
(10, 4, '25.00', 1),
(11, 6, '10.00', 1),
(12, 2, '25.00', 1),
(13, 3, '20.00', 1),
(14, 5, '10.00', 1),
(15, 3, '15.00', 1),
(16, 6, '20.00', 1),
(17, 4, '15.00', 1),
(18, 2, '15.00', 1),
(19, 3, '10.00', 1),
(20, 3, '10.00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `IdPengguna` int(11) NOT NULL,
  `NamaPengguna` varchar(50) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `NamaDepan` varchar(50) DEFAULT NULL,
  `NamaBelakang` varchar(50) DEFAULT NULL,
  `NoHp` varchar(15) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `IdAkses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`IdPengguna`, `NamaPengguna`, `Password`, `NamaDepan`, `NamaBelakang`, `NoHp`, `Alamat`, `IdAkses`) VALUES
(1, 'Mark', 'pass_admin', 'Mark', 'Lee', '081223445667', 'Jl Melati', 1),
(2, 'Anton', 'pass_user', 'Anton', 'Yoon', '081222312345', 'Jl Adisucipto', 2),
(3, 'Sarah', 'pass_editor', 'Sarah', 'Sajiwa', '082123986112', 'Jl Payung', 3),
(4, 'Santi', 'pass_viewer', 'Santi', 'Adiya', '081534973882', 'Jl Depok', 4),
(5, 'Mail', 'pass_guest', 'Mail', 'Khan', '082113543667', 'Jl Indojaya', 5),
(6, 'Khail', 'pass_super', 'Khail', 'Adnan', '082993847574', 'Jl Cemara', 6),
(7, 'Rai', 'pass_cs', 'Raisa', 'Ranggo', '081223475389', 'Jl Kusuma', 7),
(8, 'Hadian', 'pass_tester', 'Hadian', 'Putra', '081229384758', 'Jl Bunga Putih', 8),
(9, 'Brisia', 'pass_develop', 'Brisia', 'Adirakusuma', '082332453128', 'Jl Bangoan', 9),
(10, 'Anggita', 'pass_analyst', 'Anggita', 'Ayu', '081293489573', 'Jl Rasi Bintang', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `IdPenjualan` int(11) NOT NULL,
  `JumlahPenjualan` int(11) DEFAULT NULL,
  `HargaJual` varchar(100) DEFAULT NULL,
  `IdPengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`IdPenjualan`, `JumlahPenjualan`, `HargaJual`, `IdPengguna`) VALUES
(1, 1, '98.00', 1),
(2, 1, '100.00', 1),
(3, 1, '250.00', 1),
(4, 1, '98.00', 1),
(5, 1, '80.00', 1),
(6, 1, '75.00', 1),
(7, 1, '80.00', 1),
(8, 1, '99.00', 1),
(9, 1, '99.00', 1),
(10, 1, '78.00', 1),
(11, 1, '98.00', 1),
(12, 1, '100.00', 1),
(13, 1, '250.00', 1),
(14, 1, '98.00', 1),
(15, 1, '80.00', 1),
(16, 1, '75.00', 1),
(17, 1, '80.00', 1),
(18, 1, '99.00', 1),
(19, 1, '99.00', 1),
(20, 1, '78.00', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`IdBarang`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indeks untuk tabel `hakakses`
--
ALTER TABLE `hakakses`
  ADD PRIMARY KEY (`IdAkses`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`IdPembelian`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IdPengguna`),
  ADD UNIQUE KEY `NamaPengguna` (`NamaPengguna`),
  ADD KEY `IdAkses` (`IdAkses`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`IdPenjualan`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`IdAkses`) REFERENCES `hakakses` (`IdAkses`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
