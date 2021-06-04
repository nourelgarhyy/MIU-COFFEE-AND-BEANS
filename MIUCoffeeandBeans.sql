-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2021 at 10:14 PM
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
-- Database: `MIUCoffeeandBeans`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `Price`, `Description`) VALUES
(1, 'Cappuccino', 'assets/images/cappuccino.jpg', 25, 'a coffee drink that is composed of double espresso and hot milk, with the surface topped with foamed milk'),
(2, 'Cafe Latte', 'assets/images/latte.jpg', 30, 'the big brother of the cappuccino, which is made with a single or double shot of espresso and steamed milk.'),
(3, 'Cafe Mocha', 'assets/images/mocha.jpg', 20, 'is based on espresso and steamed milk but with added chocolate flavouring.'),
(4, 'Flat White', 'assets/images/flat white.jpg', 15, 'A delicious combination of Espresso and velvety milk, signed off with a perfect florette.'),
(5, 'Americano', 'assets/images/Americano.jpg', 32, 'Espresso softened with hot water. Drink it straight up or add a splash of milk'),
(6, 'Espresso', 'assets/images/espresso.jpg', 22, 'Perfectly extracted, this short, aromatic, intense drink contains all the best flavour from our coffee beans');

-- --------------------------------------------------------

--
-- Table structure for table `selectedItems`
--

CREATE TABLE `selectedItems` (
  `ID` int(11) NOT NULL,
  `Product` int(11) NOT NULL,
  `Milk` varchar(255) NOT NULL,
  `CoffeeType` varchar(255) NOT NULL,
  `User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`ID`, `Name`, `Email`, `Password`) VALUES
(3, 'user1', 'user1@gmail.com', '123'),
(4, 'user2', 'user2@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `selectedItems`
--
ALTER TABLE `selectedItems`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product` (`Product`,`User`),
  ADD KEY `User` (`User`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `selectedItems`
--
ALTER TABLE `selectedItems`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `selectedItems`
--
ALTER TABLE `selectedItems`
  ADD CONSTRAINT `selecteditems_ibfk_1` FOREIGN KEY (`User`) REFERENCES `User` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `selecteditems_ibfk_2` FOREIGN KEY (`Product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
