-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Nis 2021, 07:41:49
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `int_prog_1_vize`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE `kisiler` (
  `id` int(10) NOT NULL,
  `tc` varchar(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(30) NOT NULL,
  `meslek` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `cinsiyet` varchar(50) NOT NULL,
  `dtarihi` date NOT NULL,
  `ktarihi` date NOT NULL DEFAULT current_timestamp(),
  `adres` varchar(50) NOT NULL,
  `kbilgisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`id`, `tc`, `ad`, `soyad`, `meslek`, `mail`, `telefon`, `cinsiyet`, `dtarihi`, `ktarihi`, `adres`, `kbilgisi`) VALUES
(1, '24928460 ', 'Aytuncan      ', 'ÇETİN    ', 'Aytuncan      ', 'aytuncancetin@hotmail.com', ' 5547993196', 'Erkek      ', '2000-10-14', '2021-03-31', 'BURSA/Kestel  ', 'Güzel Bir Üniversitede Bilgisayar Mühendisliği Eğitimi Almak İstiyor...\r\n\r\n   ');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
