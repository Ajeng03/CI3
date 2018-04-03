-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 12:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten_artikel` varchar(750) NOT NULL,
  `tanggal_posting` date NOT NULL,
  `image` varchar(25) NOT NULL,
  `pengarang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `konten_artikel`, `tanggal_posting`, `image`, `pengarang`) VALUES
(1, 'Pentingnya Menanamkan Karakter Positif Sejak Dini', 'Kedudukan karakter dalam perjalanan setiap manusia sangat penting sekali. Bahkan pembentukan karakter sejak dini akan sangat menentukan bagaimana seseorang dalam menjalani hidupnya. Siapapun dia, apapun profesinya, ketika memiliki karakter positif, tentu akan lebih baik dari pada yang tidak memiliki karakter. Maka dari itu, penanaman karakter positif ini sangat diperlukan sejak dini agar bisa menjadi modal mereka dalam mengarungi perjalanan hidup yang sangat berat.', '2018-03-15', 'a1.jpg', 'Abdul Hasyim'),
(2, 'Jangan Mudah Menyerah', 'Siapapun Anda, apapun profesi Anda, Anda harus memperhatikan sifat jangan mudah menyerah. Karena harus Anda sadari bahwa dalam setiap perjalanan hidup, pasti kita akan dihadapakan dengan berbagai masalah, yang kadang-kadang memang sangat berat. Namun, yakinlah bahwa di dalam sebuah masalah yang berat tersebut pasti ada hikmah yang kadang kita tidak akan mengerti sebelum kita menghadapi masalah tersebut. Maka dari itu, hadapi masalah tersebut dengan lapang dan penuh semangat, jangan menjadi orang yang mudah menyerah.', '2018-03-08', 'a2.jpg', 'Nay Nabila'),
(3, 'Indonesia Terdiri Dari Berbagai Suku', 'Negara kita Indonesia adalah sebuah negara besar yang terdiri dari ribuan pulau yang tersebar di seantero negeri. Dengan kondisi gegrafis ang begitu luas, maka tak heran jika Indonesia memliki beragam suku dan budaya. Kekayaan Indonesia tidak hanya dari sumber daya alam yang melimpah ruah, namun kekayaan budaya yang begitu majemuk menjadi salah satu pemersatu bangsa di bawah naungan Negara Kesatuan Republik Indonesia. Ada suku Jawa, Madura, Betawi, Batak dan masih banyak lagi suku lainnya yang tersebar di berbagai daerah.', '2018-03-30', 'a3.png', 'Boby Aovelia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
