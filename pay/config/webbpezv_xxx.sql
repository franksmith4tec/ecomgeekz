-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2025 at 12:14 PM
-- Server version: 11.4.9-MariaDB-cll-lve-log
-- PHP Version: 8.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbpezv_xxx`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `psr_amount` varchar(255) DEFAULT NULL,
  `psr_fname` varchar(255) DEFAULT NULL,
  `psr_lname` varchar(255) DEFAULT NULL,
  `psr_item_description` text DEFAULT NULL,
  `psr_address` varchar(255) DEFAULT NULL,
  `psr_city` varchar(255) DEFAULT NULL,
  `psr_ipcountry` varchar(255) DEFAULT NULL,
  `psr_country` varchar(255) DEFAULT NULL,
  `psr_state` varchar(255) DEFAULT NULL,
  `psr_zip` varchar(255) DEFAULT NULL,
  `psr_email` varchar(255) DEFAULT NULL,
  `psr_phonenumber` varchar(255) DEFAULT NULL,
  `psr_cctype` varchar(255) DEFAULT NULL,
  `psr_ccname` varchar(255) DEFAULT NULL,
  `psr_ccn` varchar(255) DEFAULT NULL,
  `psr_cvv` varchar(255) DEFAULT NULL,
  `expiry` varchar(255) DEFAULT NULL,
  `psr_exp1` varchar(255) DEFAULT NULL,
  `psr_exp2` varchar(255) DEFAULT NULL,
  `psr_semail` varchar(255) DEFAULT NULL,
  `psr_tw` varchar(255) DEFAULT NULL,
  `psr_stripeToken` varchar(255) DEFAULT NULL,
  `square_customer_id` varchar(255) DEFAULT NULL,
  `square_card_id` varchar(255) DEFAULT NULL,
  `stripe_customer_id` varchar(255) DEFAULT NULL,
  `stripe_charge_id` varchar(255) DEFAULT NULL,
  `authorize_transaction_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`id`, `payment_id`, `psr_amount`, `psr_fname`, `psr_lname`, `psr_item_description`, `psr_address`, `psr_city`, `psr_ipcountry`, `psr_country`, `psr_state`, `psr_zip`, `psr_email`, `psr_phonenumber`, `psr_cctype`, `psr_ccname`, `psr_ccn`, `psr_cvv`, `expiry`, `psr_exp1`, `psr_exp2`, `psr_semail`, `psr_tw`, `psr_stripeToken`, `square_customer_id`, `square_card_id`, `stripe_customer_id`, `stripe_charge_id`, `authorize_transaction_id`, `created_at`, `updated_at`) VALUES
(1, 1, '5', 'asas', 'asas', 'asasadsa', '', '', '154.57.193.232', '', '', '', 'qqq@gmail.com', '2121212', 'visa', 'asas asas', '4111 1111 1111 1111', '123', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0', '2025-12-12 19:50:34', '2025-12-12 19:50:34'),
(2, 2, '1', 'mark1', 'mark2', '1111', '', '', '154.57.193.232', '', '', '', 'mark1@gmail.com', '23233332', 'visa', 'mark1 mark2', '4782 7800 1395 4402', '625', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '81361668874', '2025-12-12 19:53:31', '2025-12-12 19:53:31'),
(3, 4, '2000', 'Enrique ', 'Alvarez', 'Brand exclusivity for natural american', '', '', '76.32.66.3', '', '', '', 'ea368201@gmail.com', '3105053551', 'visa', 'Enrique  Alvarez', '4815 8800 3477 8466', '598', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '81368238632', '2025-12-17 00:14:01', '2025-12-17 00:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `payment_links`
--

CREATE TABLE `payment_links` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_code` varchar(200) DEFAULT NULL,
  `customer_name` varchar(200) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_phone` varchar(50) NOT NULL DEFAULT '',
  `brand_name` varchar(200) DEFAULT NULL,
  `brand_service` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `package_name` varchar(200) DEFAULT NULL,
  `package_amount` int(10) UNSIGNED DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `payment_gateway` tinyint(4) DEFAULT NULL,
  `payment_type` tinyint(4) DEFAULT NULL,
  `send_invoice` tinyint(4) DEFAULT NULL,
  `sales_person` varchar(50) DEFAULT NULL,
  `payment_link` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment_links`
--

INSERT INTO `payment_links` (`payment_id`, `payment_code`, `customer_name`, `customer_email`, `customer_phone`, `brand_name`, `brand_service`, `title`, `package_name`, `package_amount`, `currency`, `notes`, `payment_gateway`, `payment_type`, `send_invoice`, `sales_person`, `payment_link`, `created_at`, `updated_at`) VALUES
(1, '20251212195010ee4ee999', 'test1', 'test1@gmail.com', '223233232', 'ecomunified', NULL, '121212', NULL, 5, 'USD', 'asasadsa', 4, 1, 0, 'support@ecomunified.com', 'https://ecomgeekz.com/pay/payment-form.php?payment_code=', '2025-12-12 19:50:10', '2025-12-12 19:50:10'),
(2, '202512121951593d380ee1', 'mark', 'test@gmail.com', '121212121', 'ecomunified', NULL, '1111', NULL, 1, 'USD', '1111', 4, 1, 0, 'support@ecomunified.com', 'https://ecomgeekz.com/pay/payment-form.php?payment_code=', '2025-12-12 19:51:59', '2025-12-12 19:51:59'),
(3, '202512121954335952a53e', '', '', '', 'ecomunified', NULL, '', NULL, 0, 'USD', '', 4, 1, 0, 'support@ecomunified.com', 'https://ecomgeekz.com/pay/payment-form.php?payment_code=', '2025-12-12 19:54:33', '2025-12-12 19:54:33'),
(4, '20251216190236285cc56a', 'Enrique Alvarez ', 'ea368201@gmail.com', '3466513599', 'ecomunified', NULL, 'Brand Exclusivity', NULL, 2000, 'USD', 'Brand exclusivity for natural american', 4, 2, 0, 'support@ecomgeekz.com', 'https://ecomgeekz.com/pay/payment-form.php?payment_code=', '2025-12-16 19:02:36', '2025-12-16 19:02:36'),
(5, '20251217182453340db690', 'sds', 'test@@gmail.com', '3232', 'ecomunified', NULL, '1111', NULL, 34, 'USD', '1111', 4, 1, 0, 'support@ecomgeekz.com', 'https://ecomgeekz.com/pay/payment-form.php?payment_code=', '2025-12-17 18:24:53', '2025-12-17 18:24:53'),
(6, '2025121718375011df3f94', 'sdd', 'test@gmail.com', '2323232', 'ecomunified', NULL, 'this is title', NULL, 12, 'USD', 'asda', 4, 1, 0, 'support@ecomgeekz.com', 'https://ecomgeekz.com/pay/payment-form.php?payment_code=', '2025-12-17 18:37:50', '2025-12-17 18:37:50'),
(7, '202512171940484ad94371', 'Customer Name', 'test@gmail.com', '03030303030', 'ecomunified', NULL, 'this is title', NULL, 23, 'USD', 'sdsdsds', 4, 1, 0, 'support@ecomgeekz.com', 'https://ecomgeekz.com/pay/payment-form.php?payment_code=', '2025-12-17 19:40:48', '2025-12-17 19:40:48'),
(8, '202512172016384b976c74', '', '', '', 'ecomunified', NULL, '', NULL, 0, 'USD', '', 4, 1, 0, 'support@ecomgeekz.com', 'https://ecomgeekz.com/pay/payment-form.php?payment_code=', '2025-12-17 20:16:38', '2025-12-17 20:16:38'),
(9, '202512291712495b7734bd', 'sd', 'test@gmail.com', '2232323', 'ecomunified', NULL, '12121', NULL, 12, 'USD', '1212', 4, 1, 0, 'support@ecomgeekz.com', 'https://ecomgeekz.com/pay/payment-form.php?payment_code=', '2025-12-29 17:12:49', '2025-12-29 17:12:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_links`
--
ALTER TABLE `payment_links`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_links`
--
ALTER TABLE `payment_links`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
