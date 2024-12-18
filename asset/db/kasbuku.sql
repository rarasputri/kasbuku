-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 08:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasbuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `nominal` float NOT NULL,
  `username` varchar(50) NOT NULL,
  `jenis_transaksi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `keterangan`, `nominal`, `username`, `jenis_transaksi`, `tanggal`) VALUES
(48, 'wahyudi', 100, 'atest1', 'pemasukan', '2024-08-24'),
(49, 'wahyudiwiyono', 70000, 'atest2', 'pemasukan', '2024-08-24'),
(50, 'beli supra', 300000, 'atest2', 'pemasukan', '2024-09-02'),
(51, 'beli pell', 340000, 'atest2', 'pengeluaran', '2024-09-02'),
(52, 'beli pell', 300000, 'atest2', 'pengeluaran', '2024-09-02'),
(53, 'beli mobil ', 300000, 'atest1', 'pemasukan', '2024-09-03'),
(54, 'beli supra', 300000, 'atest1', 'pengeluaran', '2024-09-03'),
(55, 'beli lamborgini', 10000000, 'atest1', 'pengeluaran', '2024-09-02'),
(56, 'beli pell', 200000, 'atest1', 'pemasukan', '2024-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(46, 'admin', 'bapak kris bapak yudha', '$2y$10$FidnXE7B1jGXV5t3hf6tGejD6luTF/uJZ7eJ5aASQIbc1Z89YX3Na', 'user'),
(47, 'joqo', 'bapak dwi bapak sapa', '$2y$10$Mp0.uiBGy0ToWUn/KdFmguEkFDTctowKuPOxZtN8gbARjHqIk9llO', 'user'),
(49, 'user', 'bapak suparno bapak raras', '$2y$10$U8weUC7AblFXwWouXg2cCOL4ek.Dm5a07dhORz4GyM9RpDlF0IpPC', 'user'),
(52, 'test', 'bapak bagus bapak aura', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(53, 'nashwa', 'bapak toto bapak ciku', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(54, 'cikuuu', 'bapak ali bapak sipa', 'dde6af78e0097d6957161a4743e046ef', 'admin'),
(59, 'syalala', 'bapak udin bapak davin', 'c4ded2b85cc5be82fa1d2464eba9a7d3', 'user'),
(60, 'hwaa', 'bapak joko bapak desi', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(61, 'bayu', 'bapak agung bapak bayu', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(62, 'raju', 'bapak wawan bapak radit', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(63, 'kaiii', 'bapak emil bapak kaylila', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(64, 'nata', 'bapak miyarso bapak nata', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(65, 'dina', 'bapak eko bapak dina', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(66, 'baskom', 'bapak eko bapal leanno', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(67, 'apan', 'bapak rangga bapak apan', 'c8dfece5cc68249206e4690fc4737a8d', 'user'),
(68, 'fika', 'bapak sugiono bapak fika', '81b073de9370ea873f548e31b8adc081', 'user'),
(71, 'atest1', 'atest1', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(72, 'atest2', 'atest2', '81dc9bdb52d04dc20036dbd8313ed055', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
