-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mrt 2023 om 14:38
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `name`, `img`) VALUES
(4, 'Vis Pizza\'s', 'fish.jpg'),
(5, 'Veggie Pizza\'s', 'veggie.jpg'),
(6, 'Meat Pizza\'s', 'meatlovers-pizza-8w.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230222103414', '2023-02-22 11:34:36', 100),
('DoctrineMigrations\\Version20230224074642', '2023-02-24 08:47:41', 43),
('DoctrineMigrations\\Version20230224075334', '2023-02-24 08:53:44', 83),
('DoctrineMigrations\\Version20230314103309', '2023-03-14 11:33:39', 69),
('DoctrineMigrations\\Version20230322110318', '2023-03-22 12:03:27', 181),
('DoctrineMigrations\\Version20230322113701', '2023-03-22 12:37:06', 43);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `pizza_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `order`
--

INSERT INTO `order` (`id`, `pizza_id`, `name`, `email`, `adress`, `number`, `size`) VALUES
(1, 14, 'Hunter', 'pandt@pandt.nl', 'erghwq242', 32, 'medium'),
(2, 10, 'Hunter', 'pandt@pandt.nl', 'erghwq242', 2147483647, 'medium'),
(3, 11, 'yhk', 'yktkhkty6@tjr.nl', 'dbgbe 243', 395790342, 'small'),
(4, 11, 'yhk', 'yktkhkty6@tjr.nl', 'dbgbe 243', 395790342, 'small'),
(5, 11, 'Hunter', 'pandt@pandt.nl', 'erghwq242', 2147483647, 'calzone'),
(6, 12, 'Hunter', 'yktkhkty6@tjr.nl', 'dbgbe 243', 32, 'medium'),
(7, 12, 'hy', 'edz@ht.ml', '2d bsj', 72222, 'small'),
(8, 12, 'rex', 'hunhun@hoho.nl', '1e van hea', 32911, 'small'),
(9, 10, 'Hunter', 'pandt@pandt.nl', 'erghwq242', 32, 'small'),
(10, 10, 'Hunter', 'pandt@pandt.nl', 'erghwq242', 32, 'small'),
(11, 10, 'Hunter', 'pandt@pandt.nl', 'erghwq242', 32, 'small'),
(12, 11, 'Hunter', 'hunhun@hoho.nl', '2d bsj', 2147483647, 'small'),
(13, 13, 'kevin', 'kevin@sucks.nl', '1e van dirklanden', 629384627, 'small'),
(14, 11, 'rex', 'pandt@pandt.nl', '1e van hea', 2147483647, 'small');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `pizzas`
--

INSERT INTO `pizzas` (`id`, `name`, `img`, `category_id`) VALUES
(10, 'Tuna pizza', 'tuna-pizza.jpg', 4),
(11, 'Napolian pizza', 'napolian.jpg', 4),
(12, 'Creole shrimp pizza', 'Creole-Shrimp-Pizza.jpg', 4),
(13, 'Hawaiian pizza', 'hawaiian.jpg', 6),
(14, 'Shoarma pizza', 'shoarma-pizza.jpg', 6),
(15, 'BBQ chicken pizza', 'bbq-chicken-pizza.jpg', 6),
(16, 'Zuccchini ribbon pizza', 'Zucchini_Ribbon_Pizza.jpg', 5),
(17, 'Mushroom and cashew pizza', 'Mushroom_and_Cashew_Ricotta_Pizza.jpg', 5),
(18, 'Margherita pizza', 'margherita.jpg', 5);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexen voor tabel `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indexen voor tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F5299398D41D1D42` (`pizza_id`);

--
-- Indexen voor tabel `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C6CC6E4012469DE2` (`category_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT voor een tabel `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F5299398D41D1D42` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas` (`id`);

--
-- Beperkingen voor tabel `pizzas`
--
ALTER TABLE `pizzas`
  ADD CONSTRAINT `FK_C6CC6E4012469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
