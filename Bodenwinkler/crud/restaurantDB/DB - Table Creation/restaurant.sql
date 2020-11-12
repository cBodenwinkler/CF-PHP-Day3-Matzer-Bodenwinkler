-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 02:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `meal_image` varchar(255) NOT NULL,
  `meal_name` varchar(255) NOT NULL,
  `meal_price` int(11) NOT NULL,
  `meal_ingredients` varchar(255) NOT NULL,
  `meal_allergens` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `meal_image`, `meal_name`, `meal_price`, `meal_ingredients`, `meal_allergens`, `active`) VALUES
(1, 'https://i2.wp.com/blog.hellofresh.de/wp-content/uploads/2019/05/HF180425_Extrashot_651_DE_2_WAYS_OF_HUMMUS_-124_low.jpg?fit=3180%2C2120&ssl=1', 'Falafel', 3, 'Zeug, MehrZeug, Gewürze, Noch mehr Zeug,...', 'vieles', 0),
(3, 'https://images.ichkoche.at/data/image/variations/496x384/1/wiener-schnitzel-breaded-viennese-escalope-img-2896.jpg', 'Schnitzel', 12, 'Kalbfleisch, Ei, Brösl, Mehl, Salz, Pfeffer, Zitrone', 'Sats ned so haglich', 0),
(4, 'https://www.kochenundkueche.com/sites/default/files/styles/medium/public/redaktionsrezept_images/filet-steak.jpg?itok=klTrQkBH', 'Steak', 15, 'Rindfleisch, Rosmarin, Butter, Knoblauch, Salz, Pfeffer', 'NENENE', 0),
(6, 'https://www.at.fem.com/var/fem/storage/images/rezepte/kuchen-rezepte-backen-mit-fem.com-es-lebe-der-kuchen/354216-1-ger-DE/kuchen-rezepte-backen-mit-fem.com-es-lebe-der-kuchen_opengraph.jpg', 'Kuchen', 3, 'Mehl, Milch, Eier, Backpulver, Beeren,...', 'Alles', 0),
(7, 'https://www.daskochrezept.de/sites/default/files/styles/media_entity_teaser_facebook/public/2017-06/apfel-mascarpone-kuchen-butaris.jpg?h=69189783&itok=FyFLxn-C', 'Apfelkuchen', 3, 'Mehl, Eier, Apfel, Topfen,', 'Mehl, Laktose, ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
