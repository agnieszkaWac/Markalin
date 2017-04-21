-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Sty 2017, 05:38
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategoria`
--

CREATE TABLE `kategoria` (
  `id_kategoria` int(10) NOT NULL,
  `gatunek` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kategoria`
--

INSERT INTO `kategoria` (`id_kategoria`, `gatunek`, `opis`) VALUES
(1, 'paphiopedilum', NULL),
(2, 'phalaenopsis', NULL),
(3, 'cymbidium', NULL),
(4, 'dendrobium', NULL),
(5, 'cattleya', NULL),
(6, 'akcesoria', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pozycja`
--

CREATE TABLE `pozycja` (
  `id_pozycja` int(11) NOT NULL,
  `id_produkt` int(10) NOT NULL,
  `ilosc` int(6) NOT NULL,
  `login` varchar(12) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pozycja`
--

INSERT INTO `pozycja` (`id_pozycja`, `id_produkt`, `ilosc`, `login`) VALUES
(93, 1, 4, 'Pierwszy'),
(94, 2, 2, 'Pierwszy'),
(95, 33, 1, 'Mama'),
(96, 37, 1, 'Mama'),
(97, 17, 1, 'Mama'),
(98, 35, 1, 'Mama'),
(99, 47, 2, 'Mama'),
(100, 48, 1, 'Mama'),
(101, 21, 1, 'Mama'),
(102, 53, 2, 'Mama'),
(103, 5, 1, 'Mama'),
(104, 52, 1, 'Mama'),
(105, 54, 1, 'Mama'),
(106, 2, 1, 'Mama'),
(107, 14, 1, 'Mama');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `id_produkt` int(10) NOT NULL,
  `id_kategoria` int(10) NOT NULL,
  `nazwa` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL,
  `opis` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`id_produkt`, `id_kategoria`, `nazwa`, `cena`, `opis`) VALUES
(1, 1, 'Berenice (lowii x philippinese)', 85, 'FS'),
(2, 1, 'curtisii x gowerianum', 100, 'FS'),
(3, 1, 'David Ott', 67, 'NFS'),
(4, 1, 'delenatii Vinicolor', 90, 'FS'),
(5, 1, 'Paphiopedilum exul', 85, 'FS'),
(6, 1, 'helenae x spicerianum', 65, 'FS'),
(7, 1, 'Lady Isabel', 85, 'NFS'),
(8, 1, 'Paphiopedilum leucochilum', 65, 'FS'),
(13, 1, 'Magic Lantern', 65, 'FS'),
(14, 1, 'micranthum', 85, 'FS'),
(15, 2, 'maculata', 85, 'FS'),
(16, 2, 'speciosa ', 120, 'FS'),
(17, 2, 'deliciosa ', 97, 'NFS'),
(18, 2, 'gigantea ', 80, 'FS'),
(19, 2, 'Sogo Beach "Niep"', 45, 'FS'),
(20, 2, 'lobbii', 65, 'FS'),
(21, 2, 'equestris var. Albescens', 85, 'NFS'),
(22, 2, 'bellina coerulea', 65, 'FS'),
(23, 2, 'Tying Shin Fly Eagle', 60, 'FS'),
(24, 2, 'wilsonii', 45, 'FS'),
(25, 3, 'Cricket', 115, 'FS'),
(26, 3, 'erythraeum x devonianum ', 100, 'FS'),
(27, 3, 'erythrostylum x sib ', 97, 'NFS'),
(28, 3, 'insigne x self ', 89, 'FS'),
(29, 3, 'Nip"', 65, 'FS'),
(30, 3, 'Little Black Sambo', 95, 'FS'),
(31, 4, 'abberans x polysema', 115, 'NFS'),
(32, 4, 'crocatum', 80, 'FS'),
(33, 4, 'glomeratum', 69, 'FS'),
(34, 4, 'griffithianum x farmeri', 155, 'FS'),
(35, 4, 'griffithianum x thyrsiflorum', 45, 'FS'),
(36, 4, 'kingianum', 160, 'FS'),
(37, 4, 'lawesii x sib', 45, 'NFS'),
(38, 4, 'nobile Pinkmini', 109, 'FS'),
(39, 4, 'nugentii', 56, 'FS'),
(40, 4, 'pieradii', 56, 'FS'),
(41, 4, 'Rainbow Dance', 56, 'NFS'),
(42, 4, 'rigidum', 65, 'FS'),
(43, 4, 'sulawesii', 78, 'FS'),
(44, 4, 'wasselii', 105, 'FS'),
(45, 5, 'aclandiae', 82, 'FS'),
(46, 5, 'dolosa', 69, 'FS'),
(47, 5, 'forbesii', 45, 'NFS'),
(48, 5, 'labiata', 109, 'FS'),
(49, 5, 'labiata var Rubra', 56, 'FS'),
(50, 5, 'labiata var. Amesiana', 56, 'FS'),
(51, 6, 'Doniczka terracota', 2, 'Srednica 5cm'),
(52, 6, 'Doniczka transparentna', 1.5, 'Srednica 6cm'),
(53, 6, 'Doniczka transparentna', 2, 'Srednica 7cm'),
(54, 6, 'Doniczka transparentna', 2.5, 'Srednica 8cm');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `login` varchar(12) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `ulica` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nr_domu` varchar(4) COLLATE utf8_polish_ci NOT NULL,
  `nr_mieszkania` varchar(4) COLLATE utf8_polish_ci NOT NULL,
  `kod_pocztowy` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `miasto` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `data_rejestracji` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`login`, `haslo`, `email`, `imie`, `nazwisko`, `ulica`, `nr_domu`, `nr_mieszkania`, `kod_pocztowy`, `miasto`, `data_rejestracji`) VALUES
('Aasdasd', 'asdasdasdasda', 'gunia022@gmail.com', 'Msdofp', 'Asdasda', 'Nashfiaf', '12', '32', '20-880', 'Masdo', '2017-01-22'),
('Bbbb', 'Fsdfsdfsdf', 'gunia022@gmail.com', 'Msdofp', 'Asdasda', 'Nashfiaf', '3', '32', '20-880', 'Masdo', '2017-01-22'),
('Cajsiod', 'VAsdasdas', 'gunia022@gmail.com', 'Bajsdk', 'Asdasda', 'Nashfiaf', '12', '32', '20-880', 'Mldf', '2017-01-22'),
('Casda', 'Vkajshdkjasd', 'gunia022@gmail.com', 'Kaisfbahs', 'Asdasda', 'Nashfiaf', '12', '32', '20-880', 'Masdo', '2017-01-22'),
('Csdasd', 'asdasdas', 'gunia022@gmail.com', 'Bajsdk', 'Asdasda', 'Nasod', '23', '14', '20-880', 'Mldf', '2017-01-22'),
('Cxzzz', 'ASdasdasdas', 'gunia022@gmail.com', 'Kaisfbahs', 'Asdasda', 'Nashfiaf', '12', '32', '20-880', 'Masdo', '2017-01-22'),
('Diaussj', 'Vsdfsdasdasd', 'gunia022@gmail.com', 'Msdofp', 'Asdasda', 'Nashfiaf', '12', '14', '20-880', 'Mldf', '2017-01-22'),
('Ja', 'zzzzzz', 'gunia022@gmail.com', 'Aasadsd', 'Asdasda', 'Jodp', '12', '32', '20-880', 'Masdo', '2017-01-22'),
('Jaksjd', 'KAsjdlaskdjalskj', 'gunia022@gmail.com', 'Bajsdk', 'Maksjd', 'Jkasjdkao', '15', '21', '20-880', 'Najskhd', '2017-01-22'),
('Lkals', 'JHSGAdhgasd', 'gunia022@gmail.com', 'Msdofp', 'Asdasda', 'Nashfiaf', '3', '32', '20-880', 'Masdo', '2017-01-22'),
('Lksiah', 'Naksjdiasdhas', 'gunia022@gmail.com', 'Hdis', 'Asdasda', 'Nashfiaf', '12', '32', '20-880', 'Masdo', '2017-01-22'),
('lsdkflsdf', 'Sdfsdfsdf', 'gunia022@gmail.com', 'Msdofp', 'Asdasda', 'Nashfiaf', '3', '32', '20-880', 'Masdo', '2017-01-22'),
('Mama', 'mamamama', 'mama@mam.pl', 'Laskdja', 'Naks', 'Kalsjd', '12', '12', '20-880', 'Maksda', '2017-01-22'),
('Moj', 'haselkoaa', 'moj@moj.mok', 'Maria', 'Jakan', 'Njasiua', '21', '77', '20-444', 'Njsa', '2017-01-22'),
('nowy', 'mmmmmmmm', 'jask@maks.pl', 'LKAJsdn', 'Nakjhsd', 'Asdfsfsd', '77', '77', '77-777', 'Mkajsdas', '2017-01-22'),
('Pierwszy', 'aaaaaaaaaa', 'gunia022@gmail.com', 'ADASd', 'Asdasda', 'Nashfiaf', '12', '32', '20-880', 'Masdo', '2017-01-22'),
('Vasd', 'Najsisuda', 'gunia022@gmail.com', 'Msdofp', 'Asdasda', 'Nashfiaf', '12', '32', '20-880', 'Masdo', '2017-01-22');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`id_kategoria`);

--
-- Indexes for table `pozycja`
--
ALTER TABLE `pozycja`
  ADD PRIMARY KEY (`id_pozycja`),
  ADD KEY `id_produkt` (`id_produkt`),
  ADD KEY `login` (`login`);

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id_produkt`),
  ADD KEY `id_kategoria` (`id_kategoria`);

--
-- Indexes for table `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `id_kategoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `pozycja`
--
ALTER TABLE `pozycja`
  MODIFY `id_pozycja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT dla tabeli `produkt`
--
ALTER TABLE `produkt`
  MODIFY `id_produkt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `pozycja`
--
ALTER TABLE `pozycja`
  ADD CONSTRAINT `pozycja_ibfk_2` FOREIGN KEY (`id_produkt`) REFERENCES `produkt` (`id_produkt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pozycja_ibfk_3` FOREIGN KEY (`login`) REFERENCES `uzytkownik` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `produkt`
--
ALTER TABLE `produkt`
  ADD CONSTRAINT `produkt_ibfk_2` FOREIGN KEY (`id_kategoria`) REFERENCES `kategoria` (`id_kategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
