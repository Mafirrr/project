-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Sep 2023 pada 10.20
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `priject_imi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `idberita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `linkberita` longtext NOT NULL,
  `foto` longtext NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idberita`, `judul`, `deskripsi`, `linkberita`, `foto`, `kategori`, `status`) VALUES
(3, 'MEMEK', 'KONTOL', 'https://news.detik.com/berita/d-6923236/jokowi-salaman-dengan-biden-di-ktt-g20-menlu-menkeu-jadi-jur', '203322443_Screenshot 2023-09-08 151632.png', '', 1),
(4, 'MEMEK', 'KONTOL', 'https://news.detik.com/berita/d-6923236/jokowi-salaman-dengan-biden-di-ktt-g20-menlu-menkeu-jadi-jur', '1577723701_Screenshot 2023-09-08 151632.png', '', 1),
(5, 'mekipanjul', 'kontolpanjul', 'https://www.antaranews.com/berita/3720072/khofifah-helikopter-bnpb-dikerahkan-untuk-water-bombing-ka', '338075662_Screenshot 2023-09-08 151551.png', '', 1),
(6, 'KONTIL', 'KEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEMKEMEM', 'https://jatim.antaranews.com/berita/730233/porprov-jatim-fpti-surabaya-optimistis-rebut-juara-umum', '494995142_Screenshot 2023-08-28 132344.png', '1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `kategori`) VALUES
(1, 'Informasi Hukum'),
(2, 'Prestasi'),
(3, 'Agenda Kantor'),
(4, 'Jadwal Harian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `idLayanan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `tgllahir` varchar(50) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `tgldatang` varchar(50) NOT NULL,
  `alamat` longtext NOT NULL,
  `kronologi` longtext NOT NULL,
  `laporan` varchar(100) NOT NULL,
  `idUser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`idLayanan`, `nama`, `nik`, `tgllahir`, `namaibu`, `tgldatang`, `alamat`, `kronologi`, `laporan`, `idUser`) VALUES
(1, 'bianda', '12834921923', '2023-05-19', 'Mama', '2023-07-10', 'jawa re sm', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, eveniet, magni, autem mollitia quam ducimus praesentium repellat porro deserunt odio quas voluptas? Laudantium in eos tempore beatae incidunt optio ipsam?', 'Layanan Pergantian Data Paspor', 0),
(2, 'aa', 'aa', '2023-07-01', 'aa', '2023-07-13T16:29', 'aa', 'aa', 'Paspor Rusak', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(2, 'petugas', 'petugas', 'petugas@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`idLayanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `idLayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
