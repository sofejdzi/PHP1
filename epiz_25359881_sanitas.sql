-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.epizy.com
-- Generation Time: Jun 25, 2020 at 05:24 PM
-- Server version: 5.6.47-87.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25359881_sanitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `anketa`
--

CREATE TABLE `anketa` (
  `idAnketa` int(10) NOT NULL,
  `kategorija` varchar(30) NOT NULL,
  `sajt` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anketa`
--

INSERT INTO `anketa` (`idAnketa`, `kategorija`, `sajt`) VALUES
(1, 'Žitarice', 'Da'),
(2, 'Slatko', 'Da'),
(4, 'Žitarice', 'Da'),
(5, 'Žitarice', 'Da'),
(6, 'Žitarice', 'Da'),
(7, 'Žitarice', 'Da'),
(8, 'Žitarice', 'Da'),
(9, 'Slatko', 'Ne'),
(10, 'Keks', 'Da');

-- --------------------------------------------------------

--
-- Table structure for table `futer`
--

CREATE TABLE `futer` (
  `idFuter` int(10) NOT NULL,
  `href` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `futer`
--

INSERT INTO `futer` (`idFuter`, `href`, `naslov`) VALUES
(1, 'index.php', 'Početna'),
(2, 'o_nama.php', 'O nama'),
(3, 'objave.php', 'Blog'),
(4, 'proizvodi.php', 'Proizvodi'),
(5, 'kontakt.php', 'Kontakt'),
(6, 'pdf/dokumentacija.pdf', 'Dokumentacija');

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE `kategorije` (
  `idKategorija` int(10) NOT NULL,
  `naziv` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`idKategorija`, `naziv`) VALUES
(1, 'Žitarice'),
(2, 'Keks'),
(3, 'Kolači'),
(4, 'Slano'),
(5, 'Voćno'),
(6, 'Ostalo');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `idKorisnik` int(10) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lozinka` varchar(50) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUloga` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`idKorisnik`, `ime`, `prezime`, `email`, `lozinka`, `datum`, `idUloga`) VALUES
(1, 'Sofija', 'Stolic', 'sofija@gmail.com', '8526822c54c1524c2f134690d65ce416', '2020-06-21 17:55:59', 1),
(2, 'Isidora', 'Ciric', 'isi@yahoo.com', '2bc20e9017176037e1182f7a6be5fb09', '2020-06-21 17:55:59', 2),
(3, 'Stojanka', 'Stoli?', 'stoja@gmail.com', '5962d397b38f3d556825aa35de3febd0', '2020-06-25 16:00:03', 2),
(4, 'Stojanka', 'Stoli?', 'stoja@gmail.com', '5962d397b38f3d556825aa35de3febd0', '2020-06-25 16:00:03', 2);

-- --------------------------------------------------------

--
-- Table structure for table `korisnikanketa`
--

CREATE TABLE `korisnikanketa` (
  `idKorisnikAnketa` int(10) NOT NULL,
  `idKorisnik` int(10) NOT NULL,
  `idAnketa` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `korpa1`
--

CREATE TABLE `korpa1` (
  `idKorpa` int(10) NOT NULL,
  `idProizvod` int(11) NOT NULL,
  `idKorisnik` int(11) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marker` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `odgovor`
--

CREATE TABLE `odgovor` (
  `idOdgovor` int(10) NOT NULL,
  `odgovor` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odgovor`
--

INSERT INTO `odgovor` (`idOdgovor`, `odgovor`) VALUES
(1, 'Da'),
(2, 'Ne');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `idProizvod` int(10) NOT NULL,
  `naziv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sastav` text COLLATE utf8_unicode_ci NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `idSlika` int(10) NOT NULL,
  `brojProdatih` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`idProizvod`, `naziv`, `sastav`, `cena`, `idSlika`, `brojProdatih`) VALUES
(1, 'Medenjaci', 'integralno brašno, cimet, med, soda bikarbona, jaja', '399.99', 1, 0),
(2, 'Trouglići sa višnjom', 'integralno brašno, višnja, med, soda bikarbona, jaja', '450.00', 2, 1),
(3, 'Ovseni keks', 'integralno brašno, ovseno brašno, med, soda bikarbona, jaja', '400.00', 3, 1),
(4, 'Trouglići sa višnjom', 'integralno brašno, malina, stevija, med, soda bikarbona, jaja', '359.99', 4, 1),
(5, 'Čoko-Malina', 'integralno brašno, kakao, med, stevija, jaja u prahu, malina u prahu', '689.99', 5, 4),
(6, 'Čoko-ovseni keks', 'integralno brašno, ovsene pahuljice, kakao, med, soda bikarbona, jaja', '549.99', 6, 1),
(7, 'Lanene pločice', 'integralno brašno, semenke, so, soda bikarbona, jaja u prahu, soja u prahu', '459.99', 7, 5),
(8, 'Susam štapići', 'integralno brašno, so, susam, soda bikarbona, jaja', '399.99', 8, 0),
(9, 'Voćni ovseni keks', 'integralno brašno, ovsene pahuljice, visnja, jagoda, borovnica, med, soda bikarbona', '449.99', 9, 3),
(10, 'Trouglići sa brusnicom', 'integralno brašno, stevija, soja, brusnica u prahu, jaja', '350.00', 10, 1),
(11, 'Pločice sa lanom', 'integralno brašno, semenke, so, soda bikarbona, jaja u prahu, soja u prahu', '459.99', 11, 0),
(12, 'Lan-ovas pločice', 'integralno brašno, semenke, lan, ovsene pahuljice, so, soda bikarbona, jaja, soja', '469.99', 12, 0),
(13, 'Keks sa lanom', 'integralno brašno, semenke, lan, ovsene pahuljice, so, jaja', '600.00', 13, 0),
(14, 'Čoko-Pločice', 'integralno brašno, cimet, med, soda bikarbona, stevija, kakao, lesnik, jaja', '598.99', 14, 0),
(15, 'Šarene čoko-pločice', 'integralno brašno, cimet, med, soda bikarbona, stevija, kakao, lesnik, jaja', '499.99', 15, 0),
(16, 'Keks sa brusnicom', 'integralno brašno, ovsene pahuljice, brusnica, aronija, med, soda, jaja', '550.00', 16, 0),
(17, 'Šarene pločice', 'integralno brašno, cimet, med, soda bikarbona, stevija, kakao, lešnik, jaja', '499.99', 17, 0),
(18, 'Badem-Pločice', 'integralno brašno, cimet, med, soda bikarbona, stevija, kakao, badem, jaja', '399.99', 18, 0),
(19, 'Voćne pločice', 'integralno brašno, cimet, med, soda bikarbona, stevija, kakao, badem, višnja, jaja', '499.99', 19, 0),
(20, 'Slane lanene pločice', 'integralno brašno, semenke, lan, ovsene pahuljice, so, soda bikarbona, jaja, soja', '469.99', 20, 0),
(21, 'Keks od pirinča', 'integralno brašno, semenke, lan, ovsene pahuljice, so, soda bikarbona, jaja, soja', '399.99', 21, 0),
(22, 'Šareni voćni keks', 'integralno brašno, stevija, soja, brusnica u prahu, aronija, visnja, jaja u prahu', '360.00', 22, 0),
(23, 'Šareni lešnik-keks', 'integralno brašno, stevija, soja, lešnik, badem, so, jaja u prahu', '389.99', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodkategorija`
--

CREATE TABLE `proizvodkategorija` (
  `idProizvodKategorija` int(10) NOT NULL,
  `idProizvod` int(10) NOT NULL,
  `idKategorija` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proizvodkategorija`
--

INSERT INTO `proizvodkategorija` (`idProizvodKategorija`, `idProizvod`, `idKategorija`) VALUES
(1, 1, 3),
(2, 2, 1),
(3, 2, 5),
(4, 3, 2),
(5, 4, 1),
(6, 4, 5),
(7, 5, 3),
(8, 5, 5),
(9, 6, 1),
(10, 6, 3),
(11, 7, 1),
(12, 7, 4),
(13, 8, 1),
(14, 8, 4),
(15, 8, 6),
(16, 9, 1),
(17, 9, 2),
(18, 9, 5),
(19, 10, 1),
(20, 10, 5),
(21, 11, 4),
(22, 11, 6),
(23, 12, 4),
(24, 12, 6),
(25, 13, 2),
(26, 13, 4),
(27, 13, 6),
(28, 14, 3),
(29, 14, 6),
(30, 15, 1),
(31, 15, 3),
(32, 15, 5),
(33, 16, 2),
(34, 16, 5),
(35, 17, 1),
(36, 17, 6),
(37, 18, 1),
(38, 18, 6),
(39, 19, 1),
(40, 19, 5),
(41, 20, 1),
(42, 20, 4),
(43, 21, 1),
(44, 21, 2),
(45, 21, 4),
(46, 22, 1),
(47, 22, 2),
(48, 22, 5);

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE `slike` (
  `idSlika` int(10) NOT NULL,
  `src` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`idSlika`, `src`, `alt`) VALUES
(1, 'proizvod-1.jpg', 'Medenjaci'),
(2, 'proizvod-2.jpg', 'Trouglići'),
(3, 'proizvod-3.jpg', 'Ovseni keks'),
(4, 'proizvod-4.jpg', 'Trouglići'),
(5, 'proizvod-5.jpg', 'Čoko-Malina'),
(6, 'proizvod-6.jpg', 'Čokoladni ovseni keks'),
(7, 'proizvod-7.jpg', 'Pločice'),
(8, 'proizvod-8.jpg', 'Susam štapići'),
(9, 'proizvod-9.jpg', 'Ovseni keks'),
(10, 'proizvod-10.jpg', 'Trouglići sa brusnicom'),
(11, 'proizvod-11.jpg', 'Pločice'),
(12, 'proizvod-12.jpg', 'Ovsene pločice sa semenkama'),
(13, 'proizvod-13.jpg', 'Keks sa semenkama'),
(14, 'proizvod-14.jpg', 'Čoko-Pločice'),
(15, 'proizvod-15.jpg', 'Šarene čoko-pločice'),
(16, 'proizvod-16.jpg', 'Keks sa brusnicom'),
(17, 'proizvod-17.jpg', 'Pločice'),
(18, 'proizvod-18.jpg', 'Badem-Pločice'),
(19, 'proizvod-19.jpg', 'Voćne pločice'),
(20, 'proizvod-20.jpg', 'Slane pločice sa semenkama'),
(21, 'proizvod-21.jpg', 'Keks od pirinča'),
(22, 'proizvod-22.jpg', 'Šareni voćni keks'),
(23, 'proizvod-23.jpg', 'Šareni lešnik-keks'),
(26, '', ''),
(27, 'proizvod-15.jpg', 'images/proizvodiproizvod-15.jp'),
(28, 'proizvod-15.jpg', 'images/proizvodiproizvod-15.jp'),
(29, 'proizvod-15.jpg', 'images/proizvodiproizvod-15.jp'),
(30, '1585172878_', 'Čoko-štanglice'),
(31, '1585173167_', 'Čoko-štanglice'),
(32, '1585173403_', 'Čoko-štanglice'),
(33, 'images/proizvodi/1585173845_pr', 'Čoko-štanglice'),
(34, '1585174025_proizvod-16.jpg', 'Čoko-štanglice'),
(35, '1585179082_proizvod-15.jpg', 'Čoko-štanglice');

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `idUloga` int(10) NOT NULL,
  `naziv` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`idUloga`, `naziv`) VALUES
(1, 'admin'),
(2, 'korisnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anketa`
--
ALTER TABLE `anketa`
  ADD PRIMARY KEY (`idAnketa`);

--
-- Indexes for table `futer`
--
ALTER TABLE `futer`
  ADD PRIMARY KEY (`idFuter`);

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`idKategorija`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`idKorisnik`),
  ADD KEY `idUloga` (`idUloga`);

--
-- Indexes for table `korisnikanketa`
--
ALTER TABLE `korisnikanketa`
  ADD PRIMARY KEY (`idKorisnikAnketa`),
  ADD KEY `idKorisnik` (`idKorisnik`),
  ADD KEY `idAnketa` (`idAnketa`);

--
-- Indexes for table `korpa1`
--
ALTER TABLE `korpa1`
  ADD PRIMARY KEY (`idKorpa`),
  ADD KEY `idProizvod` (`idProizvod`),
  ADD KEY `idKorisnik` (`idKorisnik`);

--
-- Indexes for table `odgovor`
--
ALTER TABLE `odgovor`
  ADD PRIMARY KEY (`idOdgovor`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`idProizvod`),
  ADD KEY `idSlika` (`idSlika`);

--
-- Indexes for table `proizvodkategorija`
--
ALTER TABLE `proizvodkategorija`
  ADD PRIMARY KEY (`idProizvodKategorija`),
  ADD KEY `idProizvod` (`idProizvod`),
  ADD KEY `idKategorija` (`idKategorija`);

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`idSlika`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`idUloga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anketa`
--
ALTER TABLE `anketa`
  MODIFY `idAnketa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `futer`
--
ALTER TABLE `futer`
  MODIFY `idFuter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `idKategorija` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `idKorisnik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `korisnikanketa`
--
ALTER TABLE `korisnikanketa`
  MODIFY `idKorisnikAnketa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `korpa1`
--
ALTER TABLE `korpa1`
  MODIFY `idKorpa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `odgovor`
--
ALTER TABLE `odgovor`
  MODIFY `idOdgovor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `idProizvod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `proizvodkategorija`
--
ALTER TABLE `proizvodkategorija`
  MODIFY `idProizvodKategorija` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `idSlika` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `idUloga` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
