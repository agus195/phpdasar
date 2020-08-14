-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2020 pada 08.38
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `samsung`
--

CREATE TABLE `samsung` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `rilis` varchar(100) NOT NULL,
  `chipset` varchar(100) NOT NULL,
  `gpu` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `internal` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `frontcam` varchar(100) NOT NULL,
  `batre` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `samsung`
--

INSERT INTO `samsung` (`id`, `nama`, `rilis`, `chipset`, `gpu`, `ram`, `internal`, `camera`, `frontcam`, `batre`, `gambar`) VALUES
(1, 'Samsung Galaxy A01 Core', 'Juli, 2020', 'Mediatek MT6739', 'PowerVR GE8100', '1 GB', '16GB/32GB', '8MP', '5MP', 'Non-removable Li-Ion 3000 mAh', 'a01c.jpg'),
(2, 'Samsung Galaxy A21s', 'Juni, 2020', 'Exynos 850', 'Mali-G52', '3GB/4GB/6GB', '32GB/64GB', '48+8MP+2MP+2MP', '13MP', 'Non-removable Li-Ion 3000 mAh', 'a20s.jpg'),
(3, 'Samsung Galaxy A11', 'Juni, 2020', 'Snapdragon 450', 'Adreno 506', '2GB/3GB', '32GB', '13+5MP+2MP', '8MP', 'Non-removable Li-Po 4000 mAh', 'a11.jpg'),
(4, 'Samsung Galaxy M11', 'Mei, 2020', 'Qualcomm SDM450 Snapdragon 450', 'Adreno 506', '3GB/4GB', '32GB/64GB', '13+5MP+2MP', '8MP', 'Non-removable Li-Po 5000 mAh', 'm11.jpg'),
(5, 'Samsung Galaxy M21', 'Mei, 2020', 'Exynos 9611', 'Mali-G72 MP3', '4GB', '64GB', '48MP+8MP+5MP', '20MP', 'Non-removable Li-Po 6000 mAh', 'm21.jpg'),
(6, 'Samsung Galaxy A31', 'April, 2020', 'Helio P65', 'Mali-G52 MC2', '4GB/6GB', '64GB/128GB', '48MP+8MP+5MP+5MP', '20MP', 'Non-removable Li-Po 5000 mAh', 'a31.jpg'),
(7, 'Samsung Galaxy M31', 'Maret, 2020', 'Exynos 9611', 'Mali-G72 MP3', '6GB', '128GB', '64MP+8MP+5MP+5MP', '32MP', 'Non-removable Li-Po 6000 mAh', 'm31.jpg'),
(8, 'Samsung Galaxy A01', 'Januari, 2020', 'Qualcomm SDM439 Snapdragon 439', 'Adreno 505', '2GB/3GB', '16GB/32GB', '13MP+2MP', '5MP', 'Non-removable Li-Po 3000 mAh', 'a01.jpg'),
(9, 'Samsung Galaxy S20 Ultra', 'Maret, 2020', 'Exynos 990', 'Mali-G77 MP11', '12GB', '128GB', '108MP+48MP+12MP+0,3MP', '40MP', 'Non-removable Li-Po 5000 mAh', 's20u.jpg'),
(10, 'Samsung Galaxy S20+', 'Maret, 2020', 'Exynos 990', 'Mali-G77 MP11', '8GB', '128GB', '12MP+64MP+12MP+0,3MP', '10MP', 'Non-removable Li-Po 4500 mAh', 's20+.jpg'),
(11, 'Samsung Galaxy S20', 'Maret, 2020', 'Exynos 990', 'Mali-G77 MP11', '8GB', '128GB', '12MP+64MP+12MP', '10MP', 'Non-removable Li-Po 4000 mAh', 's20.jpg'),
(12, 'Samsung Galaxy Z Flip', 'Februari, 2020', 'Snapdragon 855+', 'Adreno 640', '8GB', '256GB', '12MP+12MP', '10MP', 'Non-removable Li-Po 3300 mAh', 'zflip.jpg'),
(13, 'Samsung Galaxy Note 10 Lite', 'Januari, 2020', 'Exynos 9810', 'Mali-G72 MP18', '8GB', '128GB', '12MP+12MP+12MP', '32MP', 'Non-removable Li-Po 4500 mAh', 'note10lite.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `samsung`
--
ALTER TABLE `samsung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `samsung`
--
ALTER TABLE `samsung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
