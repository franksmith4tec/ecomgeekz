-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2025 at 08:03 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment_terminal`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `id` int NOT NULL,
  `payment_id` int NOT NULL,
  `psr_amount` varchar(255) DEFAULT NULL,
  `psr_fname` varchar(255) DEFAULT NULL,
  `psr_lname` varchar(255) DEFAULT NULL,
  `psr_item_description` text,
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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`id`, `payment_id`, `psr_amount`, `psr_fname`, `psr_lname`, `psr_item_description`, `psr_address`, `psr_city`, `psr_ipcountry`, `psr_country`, `psr_state`, `psr_zip`, `psr_email`, `psr_phonenumber`, `psr_cctype`, `psr_ccname`, `psr_ccn`, `psr_cvv`, `expiry`, `psr_exp1`, `psr_exp2`, `psr_semail`, `psr_tw`, `psr_stripeToken`, `square_customer_id`, `square_card_id`, `stripe_customer_id`, `stripe_charge_id`, `authorize_transaction_id`, `created_at`, `updated_at`) VALUES
(1, 27, '2499', 'Fuller Chan', 'Walker Koch', 'Nobis eveniet ea su', 'Qui commodi modi arc', 'Laborum velit magni', '111.88.99.156', 'Cameroon', 'Nord', '87706', 'jamapu@mailinator.com', NULL, 'V', 'Felix Short', '4242424242424242', '132', NULL, '11', '2024', NULL, NULL, 'tok_1OxbThK5ocNojfiuHQejI7vs', NULL, NULL, NULL, NULL, NULL, '2024-03-23 20:47:47', '2024-03-23 20:47:47'),
(2, 29, '22', 'Burke Stanley', 'Riley Barnes', 'Dolores officia nemo', 'Aut voluptatibus eu', 'Possimus ut optio', '110.39.46.218', 'Jordan', 'At Tafilah', '97479', 'lidoj@mailinator.com', NULL, 'V', 'Camilla Medina', '4242424242424242', '123', NULL, '12', '2024', NULL, NULL, 'tok_1OyVG8K5ocNojfiuiBs1KxHd', NULL, NULL, NULL, NULL, NULL, '2024-03-26 08:21:31', '2024-03-26 08:21:31'),
(3, 30, '10', 'Buckminster Carroll', 'Phelan Cruz', 'Eos obcaecati vel ev', 'Deserunt sit digniss', 'A consequatur ut qu', '110.39.46.218', 'Kuwait', 'Al Jahra\'', '63770', 'qenuli@mailinator.com', NULL, 'V', 'Shelly Lee', '4242424242424242', '132', NULL, '02', '2028', NULL, NULL, 'tok_1OyVKvK5ocNojfiuS4jLQkB3', NULL, NULL, NULL, NULL, NULL, '2024-03-26 08:26:27', '2024-03-26 08:26:27'),
(4, 31, '15', 'Alan Jacobson', 'Natalie Stewart', 'Qui lorem perferendi', 'Ut quam iste repelle', 'Delectus libero ess', '110.39.46.218', 'Ashmore and Cartier Island', 'Ashmore and Cartier Island', '87964', 'honi@mailinator.com', NULL, 'V', 'Rhonda Leonard', '4242424242424242', '123', NULL, '06', '2026', NULL, NULL, 'tok_1OyVNgK5ocNojfiuG7mjWqzN', NULL, NULL, NULL, NULL, NULL, '2024-03-26 08:29:19', '2024-03-26 08:29:19'),
(5, 32, '249', 'Caleb Shannon', 'Kaitlin Langley', 'Nulla deleniti quaer', 'Maxime eligendi recu', 'Sed dolor laborum N', '110.39.46.218', 'Grenada', 'Saint Mark', '87046', 'vihodoh@mailinator.com', NULL, 'V', 'Eliana Miller', '4242424242424242', '123', NULL, '01', '2030', NULL, NULL, 'tok_1OyVP4K5ocNojfiuglPZWsgI', NULL, NULL, NULL, NULL, NULL, '2024-03-26 08:30:44', '2024-03-26 08:30:44'),
(6, 33, '12', 'Ima Walton', 'Ayanna Salas', 'Et ea architecto qui', 'Et quo quibusdam in', 'Saepe error iusto ip', '110.39.46.218', 'India', 'Madhya Pradesh', '38184', 'genuxoj@mailinator.com', NULL, 'V', 'Adria Williamson', '4242424242424242', '123', NULL, '01', '2028', NULL, NULL, 'tok_1OyVQiK5ocNojfiunxx4mO6y', NULL, NULL, NULL, NULL, NULL, '2024-03-26 08:32:27', '2024-03-26 08:32:27'),
(7, 36, '199', 'Keefe Blair', 'Cullen Pacheco', 'Sit id nulla rerum', 'Id voluptatem Eveni', 'Corrupti rerum amet', '110.39.46.218', 'Burma', 'Ayeyarwady', '58999', 'xaverihizi@mailinator.com', NULL, 'V', 'Remedios Blair', '4242424242424242', '123', NULL, '11', '2030', NULL, NULL, 'tok_1OyWJ4K5ocNojfiuOnFoht5l', NULL, NULL, NULL, NULL, NULL, '2024-03-26 09:28:37', '2024-03-26 09:28:37'),
(8, 37, '849', 'Nathan Hale', 'Aspen May', 'Sit veritatis natus', 'Obcaecati eaque est', 'Et veritatis ducimus', '110.39.46.218', 'Ecuador', 'Esmeraldas', '70538', 'fosoho@mailinator.com', NULL, 'V', 'Brianna Baird', '4242424242424242', '123', NULL, '01', '2030', NULL, NULL, 'tok_1OyWM3K5ocNojfiuWn5S9PLF', NULL, NULL, NULL, NULL, NULL, '2024-03-26 09:31:41', '2024-03-26 09:31:41'),
(9, 38, '399', 'Karen Cook', 'Yen Robles', 'Qui sit voluptatum', 'Est autem tempor es', 'Eligendi et nulla la', '110.39.46.218', 'Ireland', 'Monaghan', '38248', 'jytugu@mailinator.com', NULL, 'V', 'Jolene Yates', '4242424242424242', '123', NULL, '09', '2028', NULL, NULL, 'tok_1OyWODK5ocNojfiuvITFYCJi', NULL, NULL, NULL, NULL, NULL, '2024-03-26 09:33:55', '2024-03-26 09:33:55'),
(10, 40, '394', 'Judah Alvarez', 'Keegan Kemp', 'Eaque nulla ea ut re', 'Amet necessitatibus', 'Odit fugit sapiente', '110.39.46.218', 'Georgia', 'K\'ut\'aisi', '33470', 'tofizulaf@mailinator.com', NULL, 'V', 'Hannah Lynn', '4242424242424242', '123', NULL, '08', '2024', NULL, NULL, 'tok_1OyrgIK5ocNojfiuT3Xjmi2f', NULL, NULL, NULL, NULL, NULL, '2024-03-27 08:18:00', '2024-03-27 08:18:00'),
(11, 40, '394', 'Kiara Guerrero', 'Ulla Floyd', 'Eaque nulla ea ut re', 'Voluptatem eos conse', 'Aut et minima iure p', '110.39.46.218', 'Guam', 'Guam', '96067', 'hegonekiki@mailinator.com', NULL, 'V', 'Athena Boyer', '4242424242424242', '123', NULL, '07', '2027', NULL, NULL, 'tok_1OyrySK5ocNojfiu47MGeVf5', NULL, NULL, NULL, NULL, NULL, '2024-03-27 08:36:47', '2024-03-27 08:36:47'),
(12, 40, '394', 'Chandler Bradshaw', 'Forrest Boyle', 'Eaque nulla ea ut re', 'Consequuntur commodi', 'Cumque incididunt po', '110.39.46.218', 'Chile', 'Tarapaca', '50732', 'hyracytefi@mailinator.com', NULL, 'V', 'Indira Horne', '4242424242424242', '123', NULL, '05', '2024', NULL, NULL, 'tok_1OyrywK5ocNojfiu2esY9WVN', NULL, NULL, NULL, NULL, NULL, '2024-03-27 08:37:17', '2024-03-27 08:37:17'),
(13, 40, '394', 'Chandler Bradshaw', 'Forrest Boyle', 'Eaque nulla ea ut re', 'Consequuntur commodi', 'Cumque incididunt po', '110.39.46.218', 'Bolivia', 'Chuquisaca', '50732', 'hyracytefi@mailinator.com', NULL, 'V', 'Indira Horne', '4242424242424242', '123', NULL, '05', '2024', NULL, NULL, 'tok_1Oys00K5ocNojfiuzOQudWO8', NULL, NULL, NULL, NULL, NULL, '2024-03-27 08:38:22', '2024-03-27 08:38:22'),
(14, 40, '394', 'Chandler Bradshaw', 'Forrest Boyle', 'Eaque nulla ea ut re', 'Consequuntur commodi', 'Cumque incididunt po', '110.39.46.218', 'Ashmore and Cartier Island', 'Ashmore and Cartier Island', '50732', 'hyracytefi@mailinator.com', NULL, 'V', 'Indira Horne', '4242424242424242', '123', NULL, '05', '2024', NULL, NULL, 'tok_1Oys0PK5ocNojfiuG9cVeWXD', NULL, NULL, NULL, NULL, NULL, '2024-03-27 08:38:48', '2024-03-27 08:38:48'),
(15, 40, '394', 'Chandler Bradshaw', 'Forrest Boyle', 'Eaque nulla ea ut re', 'Consequuntur commodi', 'Cumque incididunt po', '110.39.46.218', 'American Samoa', 'Eastern', '50732', 'hyracytefi@mailinator.com', NULL, 'V', 'Indira Horne', '4242424242424242', '123', NULL, '05', '2024', NULL, NULL, 'tok_1Oys1NK5ocNojfiuFoyeST42', NULL, NULL, NULL, NULL, NULL, '2024-03-27 08:39:47', '2024-03-27 08:39:47'),
(16, 40, '394', 'Abbot Fisher', 'Bethany Talley', 'Eaque nulla ea ut re', 'Nihil consectetur q', 'Ipsum in et enim sun', '110.39.46.218', 'Somalia', 'Bakool', '33627', 'hupiqupawy@mailinator.com', NULL, 'V', 'Deirdre Newman', '4242424242424242', '123', NULL, '10', '2024', NULL, NULL, 'tok_1Oys44K5ocNojfiuexnpVNYs', NULL, NULL, NULL, NULL, NULL, '2024-03-27 08:42:34', '2024-03-27 08:42:34'),
(17, 40, '394', 'Abbot Fisher', 'Bethany Talley', 'Eaque nulla ea ut re', 'Nihil consectetur q', 'Ipsum in et enim sun', '110.39.46.218', 'Saint Kitts and Nevis', 'Saint Anne Sandy Point', '33627', 'hupiqupawy@mailinator.com', NULL, 'V', 'Deirdre Newman', '4242424242424242', '123', NULL, '10', '2024', NULL, NULL, 'tok_1OysCrK5ocNojfiuYTytvEGG', NULL, NULL, NULL, NULL, NULL, '2024-03-27 08:51:40', '2024-03-27 08:51:40'),
(18, 40, '394', 'Hedy Horton', 'Ingrid Bond', 'Eaque nulla ea ut re', 'Deserunt laborum vol', 'Dolor est dolorum n', '110.39.46.218', 'Saint Helena', 'Tristan da Cunha', '83448', 'vybamadab@mailinator.com', NULL, 'V', 'Louis Snow', '4242424242424242', '123', NULL, '09', '2024', NULL, NULL, 'tok_1OysEWK5ocNojfiu4rKzDtqP', NULL, NULL, NULL, NULL, NULL, '2024-03-27 08:53:22', '2024-03-27 08:53:22'),
(19, 40, '394', 'Stephen Golden', 'Fitzgerald Navarro', 'Eaque nulla ea ut re', 'Cum quasi quas commo', 'Mollitia iusto alias', '110.39.46.218', 'Lebanon', 'Beyrouth', '10945', 'wasosyg@mailinator.com', NULL, 'V', 'Claudia Pennington', '4242424242424242', '123', NULL, '07', '2024', NULL, NULL, 'tok_1OysI3K5ocNojfiusXPT276E', NULL, NULL, NULL, NULL, NULL, '2024-03-27 08:57:02', '2024-03-27 08:57:02'),
(20, 40, '394', 'Aquila Mccoy', 'Hanna Justice', 'Eaque nulla ea ut re', 'Dolore praesentium q', 'Omnis corporis nemo', '110.39.46.218', 'American Samoa', 'Rose Island', '71766', 'moryh@mailinator.com', NULL, 'V', 'Octavia Conley', '4242424242424242', '123', NULL, '09', '2026', NULL, NULL, 'tok_1OysMIK5ocNojfiulcq6rWbD', NULL, NULL, NULL, NULL, NULL, '2024-03-27 09:01:24', '2024-03-27 09:01:24'),
(21, 41, '249', 'Ainsley Rose', 'Zephania Brock', 'Dolor quia omnis tem', 'Aut ratione dolore a', 'Quia aliqua Qui et', '110.39.46.218', 'Jersey', 'Jersey', '16347', 'sekevob@mailinator.com', NULL, 'V', 'Heidi Randolph', '4242424242424242', '123', NULL, '09', '2026', NULL, NULL, 'tok_1Oyt9YK5ocNojfiuucCa2YIs', NULL, NULL, NULL, NULL, NULL, '2024-03-27 09:52:19', '2024-03-27 09:52:19'),
(22, 42, '1699', 'Libby Estrada', 'Garth Harmon', 'Veritatis dolore quo', 'Illo inventore ullam', 'Sed laboris sit vel', '178.211.159.9', 'Aruba', 'Aruba', '85584', 'burez@mailinator.com', NULL, 'V', 'Shelley Walker', '4242424242424242', '123', NULL, '09', '2028', NULL, NULL, 'tok_1OytByK5ocNojfiubvtbkNVO', NULL, NULL, NULL, NULL, NULL, '2024-03-27 09:54:49', '2024-03-27 09:54:49'),
(23, 42, '1699', 'Zenaida Farley', 'Leo Griffin', 'Veritatis dolore quo', 'Laborum Non volupta', 'Vero qui esse amet', '178.211.159.9', 'Cambodia', 'Kampot', '60809', 'xatypyb@mailinator.com', NULL, 'V', 'Clio Guerra', '4242424242424242', '123', NULL, '10', '2027', NULL, NULL, 'tok_1OytFJK5ocNojfiu6u84TTNp', NULL, NULL, NULL, NULL, NULL, '2024-03-27 09:58:15', '2024-03-27 09:58:15'),
(24, 43, '644', 'Simone Norris', 'Savannah Craig', 'Proident voluptates', 'Consequatur Quia as', 'Autem ex sit illum', '178.211.159.9', 'Mexico', 'Jalisco', '67942', 'boga@mailinator.com', NULL, 'V', 'Paloma Avila', '4242424242424242', '123', NULL, '01', '2027', NULL, NULL, 'tok_1OytHdK5ocNojfiutMRlvvmL', NULL, NULL, NULL, NULL, NULL, '2024-03-27 10:00:39', '2024-03-27 10:00:39'),
(25, 44, '699', 'Dieter Leach', 'Xander Potts', 'Maxime unde tempore', 'Expedita voluptatum', 'Perferendis omnis na', '178.211.159.9', 'French Guiana', 'French Guiana', '62469', 'myzesehi@mailinator.com', NULL, 'V', 'Dorian Johnston', '4242424242424242', '123', NULL, '06', '2030', NULL, NULL, 'tok_1OytKxK5ocNojfiu19V7r6sm', NULL, NULL, NULL, NULL, NULL, '2024-03-27 10:04:05', '2024-03-27 10:04:05'),
(26, 40, '394', 'April Wright', 'Emma Blankenship', 'Eaque nulla ea ut re', 'Mollit porro sed rep', 'Cillum et repellendu', '110.39.46.218', 'United Kingdom', 'Westminster', '11942', 'feso@mailinator.com', NULL, 'V', 'Orla Hampton', '4242424242424242', '123', NULL, '09', '2028', NULL, NULL, 'tok_1OyvV0K5ocNojfiuD00rR7F2', NULL, NULL, NULL, NULL, NULL, '2024-03-27 12:22:37', '2024-03-27 12:22:37'),
(27, 40, '394', 'Ryder William', 'Celeste Larsen', 'Eaque nulla ea ut re', 'Debitis cupiditate s', 'Debitis nobis qui ut', '110.39.46.218', 'Burundi', 'Bujumbura', '18845', 'muka@mailinator.com', NULL, 'V', 'Rinah Boyd', '4242424242424242', '123', NULL, '01', '2029', NULL, NULL, 'tok_1OyxPqK5ocNojfiu8U12Bb9w', NULL, NULL, NULL, NULL, NULL, '2024-03-27 14:25:24', '2024-03-27 14:25:24'),
(28, 46, '11', 'Colleen Morse', 'Kennan Bishop', 'Exercitation id rat', 'Libero quidem tempor', 'Aut ut modi harum qu', '110.39.46.218', 'Guinea', 'Boke', '28406', 'qyvifiw@mailinator.com', NULL, 'V', 'Martin Bailey', '4242424242424242', '123', NULL, '02', '2025', NULL, NULL, 'tok_1OyxRuK5ocNojfiuzspLzcYU', NULL, NULL, NULL, NULL, NULL, '2024-03-27 14:27:33', '2024-03-27 14:27:33'),
(29, 47, '15', 'Wylie Hobbs', 'Nora Rosales', 'Aliquid deserunt ea', 'Perspiciatis numqua', 'Ut voluptatum aliqui', '110.39.46.218', 'Saint Pierre and Miquelon', 'Miquelon', '75902', 'xigoqura@mailinator.com', NULL, 'V', 'Bell Landry', '4242424242424242', '123', NULL, '09', '2024', NULL, NULL, 'tok_1OyxTFK5ocNojfiumXTC2LFT', NULL, NULL, NULL, NULL, NULL, '2024-03-27 14:28:55', '2024-03-27 14:28:55'),
(30, 48, '849', 'Adam Patel', 'Edward Oneill', 'Eos saepe in exercit', 'Explicabo Eum sit r', 'Consequatur Eos be', '110.39.46.218', 'Grenada', 'Saint Mark', '19035', 'bolasa@mailinator.com', NULL, 'V', 'Chester Campbell', '4242424242424242', '123', NULL, '10', '2029', NULL, NULL, 'tok_1OyxVaK5ocNojfiu9zfyPvPS', NULL, NULL, NULL, NULL, NULL, '2024-03-27 14:31:20', '2024-03-27 14:31:20'),
(31, 49, '2499', 'Lynn Melton', 'Uriah Dyer', 'Facilis elit commod', 'Eu sed excepteur est', 'Voluptatem consequun', '110.39.46.218', 'Tobago', 'Tobago', '14740', 'nypito@mailinator.com', NULL, 'V', 'Mira Duke', '4242424242424242', '123', NULL, '09', '2024', NULL, NULL, 'tok_1OyxWCK5ocNojfiukugrq9hE', NULL, NULL, NULL, NULL, NULL, '2024-03-27 14:31:58', '2024-03-27 14:31:58'),
(32, 50, '399', 'Hayley Bryant', 'Jonas Wilder', 'Maxime commodo ut et', 'Est incidunt id po', 'Maxime voluptas dolo', '110.39.46.218', 'Namibia', 'Oshikoto', '38375', 'mytuc@mailinator.com', NULL, 'V', 'Francesca Cannon', '4242424242424242', '123', NULL, '11', '2029', NULL, NULL, 'tok_1OyxWwK5ocNojfiuitQRANS3', NULL, NULL, NULL, NULL, NULL, '2024-03-27 14:32:44', '2024-03-27 14:32:44'),
(33, 51, '849', 'Ila Wallace', 'Candace Lyons', 'Qui consectetur qui', 'Ad deserunt eius rem', 'Voluptate perspiciat', '110.39.46.218', 'Tobago', 'Tobago', '59054', 'jokevip@mailinator.com', NULL, 'V', 'Kimberley Kirby', '4242424242424242', '123', NULL, '06', '2024', NULL, NULL, 'tok_1OyxZxK5ocNojfiuEvFSi6mQ', NULL, NULL, NULL, NULL, NULL, '2024-03-27 14:35:51', '2024-03-27 14:35:51'),
(34, 53, '39', 'ttt', 'ttt', '434343434', 'ttt', 'new york', '202.47.43.51', 'USA', 'New York', '10001', 'ttt@gmail.com', NULL, 'V', 'mark', '4242424242424242', '123', NULL, '05', '2025', NULL, NULL, 'tok_1OyxhTK5ocNojfiu8VUhjzW4', NULL, NULL, NULL, NULL, NULL, '2024-03-27 14:43:39', '2024-03-27 14:43:39'),
(35, 54, '429', 'Brennan Walls', 'Adria Noel', 'Non sunt ipsam digni', 'Explicabo Esse ad e', 'Vel non voluptas pos', '110.39.46.218', 'Cocos (Keeling) Islands', 'North Keeling Island', '95797', 'bozyxu@mailinator.com', NULL, 'V', 'Clare Garza', '4242424242424242', '132', NULL, '11', '2027', NULL, NULL, 'tok_1OyxzqK5ocNojfiu9vtPYiZK', NULL, NULL, NULL, NULL, NULL, '2024-03-27 15:02:37', '2024-03-27 15:02:37'),
(36, 56, '3699', 'Colby Wise', 'Vivien Roberson', 'Ut lorem iure except', 'Sed molestiae qui qu', 'Recusandae Iure cul', '110.39.46.218', 'Jan Mayen', 'Jan Mayen', '36332', 'rixut@mailinator.com', NULL, 'V', 'Dexter Greene', '4242424242424242', '123', NULL, '01', '2030', NULL, NULL, 'tok_1Oyy7nK5ocNojfius5TY9fsx', NULL, NULL, NULL, NULL, NULL, '2024-03-27 15:10:50', '2024-03-27 15:10:50'),
(37, 56, '3699', 'Cooper Hamilton', 'Leonard Wilder', 'Ut lorem iure except', 'Et nihil vero volupt', 'Consectetur voluptat', '110.39.46.218', 'Nauru', 'Uaboe', '90156', 'qiloguruso@mailinator.com', NULL, 'V', 'Jescie Reid', '4242424242424242', '123', NULL, '10', '2030', NULL, NULL, 'tok_1OyyDYK5ocNojfiuvcqV5AO1', NULL, NULL, NULL, NULL, NULL, '2024-03-27 15:16:46', '2024-03-27 15:16:46'),
(38, 62, '249', 'Tad Stewart', 'Bethany Wong', 'Dicta provident assumend', 'Reprehenderit dolore min', 'Ullam quaerat nobis ea lo', '::1', 'US', 'Montana', '28954', 'recog@mailinator.com', NULL, 'D', 'Gretchen Pierce', NULL, NULL, NULL, NULL, NULL, '', '', 'cnon:CA4SEJHt6QpdrXDA0BDTCW-5Ap0YASgC', '450Y5V60H9HXXN0M3A2HMYKSS8', 'ccof:CA4SENT1qN67ISAkNTap-Uy0p_IoAg', NULL, NULL, NULL, '2025-02-21 17:04:20', '2025-02-21 17:04:20'),
(39, 63, '294', 'test1', 'ssss', 'Ut voluptatum exercitatio', 'testing', 'test', '::1', 'US', 'Alabama', '3124223', 'max@gmail.com', NULL, 'V', 'test user', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'BTZMA0W1PM4G1FE08W3A4VAS7R', 'ccof:CA4SEHLkkuyBVV0SC84mK5rPz0MoAg', NULL, NULL, NULL, '2025-02-21 17:06:52', '2025-02-21 17:06:52'),
(40, 72, '1199', 'Velma Monroe', 'Ezekiel Kirkland', 'Dolor quas iusto est', 'Reiciendis porro cil', 'Itaque consequat Od', '::1', 'US', 'Arkansas', '69343', 'sofev@mailinator.com', NULL, '', 'Cassady Blair', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_RphPNfl4gGwxtN', 'ch_3Qw20YJJIyLN8zhq0gCGn9tH', NULL, '2025-02-24 13:47:49', '2025-02-24 13:47:49'),
(41, 72, '1199', 'Velma Monroe', 'Ezekiel Kirkland', 'Dolor quas iusto est', 'Reiciendis porro cil', 'Itaque consequat Od', '::1', 'US', 'Arkansas', '69343', 'sofev@mailinator.com', NULL, '', 'Cassady Blair', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_RphQpKT9Taru3k', 'ch_3Qw227JJIyLN8zhq02mLWIOC', NULL, '2025-02-24 13:49:26', '2025-02-24 13:49:26'),
(42, 72, '1199', 'Brady Lewis', 'Charlotte Osborn', 'Dolor quas iusto est', 'Aperiam voluptas dig', 'Voluptas harum ipsam', '::1', 'US', 'Michigan', '78027', 'buvymy@mailinator.com', NULL, '', 'Phyllis Ross', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_RphRC1GqMQ4mL1', 'ch_3Qw22MJJIyLN8zhq1zAXCULd', NULL, '2025-02-24 13:49:41', '2025-02-24 13:49:41'),
(43, 72, '1199', 'Cyrus Luna', '', 'Dolor quas iusto est', '', '', '::1', 'US', 'Alabama', '', 'ximosu@mailinator.com', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_RphU7WfwvWmejc', 'ch_3Qw25hJJIyLN8zhq0tGPJr8u', NULL, '2025-02-24 13:53:09', '2025-02-24 13:53:09'),
(44, 72, '1199', 'Andrew Espinoza', 'Gemma Witt', 'Dolor quas iusto est', 'Delectus exercitati', 'Quo et anim omnis ne', '::1', 'US', 'Kentucky', '79046', 'sukevakem@mailinator.com', NULL, '', 'Lois Holmes', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_Rphg5ywcojgvOt', 'ch_3Qw2HMJJIyLN8zhq007odlas', NULL, '2025-02-24 14:05:11', '2025-02-24 14:05:11'),
(45, 72, '1199', 'Bo Fuentes', 'Steel Mccoy', 'Dolor quas iusto est', 'Sapiente expedita pl', 'Laboriosam iste arc', '::1', 'US', 'Utah', '10103', 'reniref@mailinator.com', NULL, '', 'Tyler Fitzpatrick', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_Rphidqx8fzE2Du', 'ch_3Qw2IcJJIyLN8zhq0nXzesvN', NULL, '2025-02-24 14:06:30', '2025-02-24 14:06:30'),
(46, 74, '2499', 'Zachery Elliott', 'Tasha Pruitt', 'Reiciendis molestiae', 'Sit animi rerum se', 'Impedit aut est dol', '::1', 'US', 'Alabama', '89934', 'xefoluh@mailinator.com', NULL, '', 'Quail Farmer', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_RphlxoYb36rBKr', 'ch_3Qw2MCJJIyLN8zhq0Tg2zReT', NULL, '2025-02-24 14:10:11', '2025-02-24 14:10:11'),
(47, 73, '1499', 'Oprah Dominguez', 'Shana Bradley', 'Earum autem placeat', 'Minim qui repellendu', 'Qui officiis enim su', '::1', 'US', 'Louisiana', '53098', 'ryhi@mailinator.com', NULL, '', 'Luke Phillips', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'VB1XAGRS10M3NFTJ1M2BJB5KQW', 'ccof:CA4SEPpkFOS7XxMELsIwVKm9W8YoAg', NULL, NULL, NULL, '2025-02-24 14:18:00', '2025-02-24 14:18:00'),
(48, 73, '1499', 'Kendall Patrick', 'Owen Kim', 'Earum autem placeat', 'Ea unde molestias co', 'Consequatur hic quib', '::1', 'US', 'Montana', '73475', 'zebozajub@mailinator.com', NULL, '', 'Lillian English', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '3K58BG1PXZ2MH6HTQE9QVD2ZBM', 'ccof:CA4SEIctnsbpwQewg4m_mTFgbhYoAg', NULL, NULL, NULL, '2025-02-24 14:22:19', '2025-02-24 14:22:19'),
(49, 75, '2499', 'Forrest Schneider', 'Lillith Bird', 'Iusto sunt velit ut ', 'Quos consequatur non', 'Rerum mollitia obcae', '::1', 'US', 'Illinois', '17199', 'myqama@mailinator.com', NULL, '', 'Unity Yang', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_RpiGiFbYVZp7mT', 'ch_3Qw2qDJJIyLN8zhq0h8RayKm', NULL, '2025-02-24 14:41:12', '2025-02-24 14:41:12'),
(50, 76, '249', 'Lester Dillon', 'Luna', 'Ut ad esse error mi', 'test street new york', 'New York', '::1', 'US', 'Alabama', '99394', 'kyzyqamu@mailinator.com', NULL, '', 'test user', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_RpiISeUeRBdknY', 'ch_3Qw2rzJJIyLN8zhq0axX0lua', NULL, '2025-02-24 14:43:02', '2025-02-24 14:43:02'),
(51, 77, '2499', 'Carter Daugherty', 'Ezekiel Kirkland', 'Laborum tempor ex pe', 'Reiciendis porro cil', 'New York', '::1', 'US', 'Alabama', '99394', 'bede@mailinator.com', NULL, '', 'test2 user', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'Y22TZS0586GPJVKNGK7T6YZNFW', 'ccof:CA4SEFiDrNcca4L9rN4mioy0ePcoAg', NULL, NULL, NULL, '2025-02-24 14:44:11', '2025-02-24 14:44:11'),
(52, 72, '1199', 'Rama Key', 'Adena Wall', 'Dolor quas iusto est', 'Est dolor et voluptatum c', 'Consequuntur in distincti', '::1', 'US', 'Florida', '88519', 'jybyho@mailinator.com', NULL, '', 'Hiroko Gates', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_Rpis6gSKHy6xkm', 'ch_3Qw3QxJJIyLN8zhq0GkJ0kxi', NULL, '2025-02-24 15:19:10', '2025-02-24 15:19:10'),
(53, 78, '99', 'Uriah Dalton', 'Solomon Johnson', 'Veniam ex rerum sus', 'In enim autem quia s', 'Cillum adipisicing a', '::1', 'US', 'New Mexico', '44391', 'cefiqy@mailinator.com', NULL, '', 'Phyllis Bonner', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_Rpz6C2udYDt8Wy', 'ch_3QwJ8DJJIyLN8zhq0KK3m2T6', NULL, '2025-02-25 08:04:53', '2025-02-25 08:04:53'),
(54, 80, '2499', 'Chester Noel', 'Hollee Cohen', 'Vero in sed iure del', 'Molestiae quia sed s', 'Quos ad et voluptatu', '::1', 'US', 'South Carolina', '69313', 'jemikec@mailinator.com', NULL, '', 'Noelle Armstrong', '4111111111111111', '111', NULL, '02', '2026', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-26 07:43:59', '2025-02-26 07:43:59'),
(55, 81, '39', 'Macon Goff', 'Luna', 'Nam rerum natus dolo', 'test street new york', 'New York', '::1', 'US', 'Alabama', '12345', 'paxogopa@mailinator.com', NULL, '', 'test user', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'M88N8RT0AZ3H5S1ATKW1TYCCH4', 'ccof:CA4SENymx9uVPBmBxMU0sVGS04goAg', NULL, NULL, NULL, '2025-03-04 04:56:05', '2025-03-04 04:56:05'),
(56, 81, '39', 'Macon Goff', 'Luna', 'Nam rerum natus dolo', '', '', '::1', '', '', '', 'paxogopa@mailinator.com', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'PT19CA86MNXHGEWN29X226ZCM0', 'ccof:CA4SECgtZhLqsFNnSu821ZlJmrcoAg', NULL, NULL, NULL, '2025-03-04 06:22:54', '2025-03-04 06:22:54'),
(57, 81, '39', 'Macon Goff', 'Luna', 'Nam rerum natus dolo', '', '', '::1', '', '', '', 'paxogopa@mailinator.com', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'BWEZQZQ69GA9PKJYV8QQZJRTF0', 'ccof:CA4SEBO2oxcUel8EGb8OTmlPXX0oAg', NULL, NULL, NULL, '2025-03-04 06:26:50', '2025-03-04 06:26:50'),
(58, 82, '294', 'Slade Nunez', 'Noelle James', 'Corrupti consequunt', '', '', '::1', '', '', '', 'xubupuca@mailinator.com', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_Rsa7NO5RPtmdvP', 'ch_3QyoxDJJIyLN8zhq0Rc7NNw2', NULL, '2025-03-04 06:28:02', '2025-03-04 06:28:02'),
(59, 83, '594', 'Macey Riddle', 'Cailin Jennings', 'Mollit et voluptate ', '', '', '::1', '', '', '', 'limepuh@mailinator.com', NULL, '', '', '4111111111111111', '123', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-04 06:29:46', '2025-03-04 06:29:46'),
(60, 81, '39', 'Ahmed Combs', 'Katelyn Pittman', 'Nam rerum natus dolo', '', '', '::1', '', '', '', 'mevy@mailinator.com', '+1 16334534534', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'GKFHCG1ZY4F1NBQR1DA42Z8R9G', 'ccof:CA4SEGtoULA4vlZOE5Hw0BOCdeooAg', NULL, NULL, NULL, '2025-03-04 06:43:13', '2025-03-04 06:43:13'),
(61, 82, '294', 'Noelani Marsh', 'Zahir Taylor', 'Corrupti consequunt', '', '', '::1', '', '', '', 'kokogudi@mailinator.com', '+1 480435345', '', 'Noelani Marsh Zahir Taylor', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_RsaSF3JYmTemMk', 'ch_3QypHBJJIyLN8zhq1fvLCqTi', NULL, '2025-03-04 06:48:41', '2025-03-04 06:48:41'),
(62, 86, '34', 'Carla Stanley', 'Luna', 'In enim ut debitis q', '', '', '::1', '', '', '', 'xutetiqyt@mailinator.com', ' 1231231231', '', 'Carla Stanley Luna', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'DHNG0KYZ6CJFGPPQNK9AB2SR2M', 'ccof:CA4SEAob8ABa9qdSOlZq9bZkQZMoAg', NULL, NULL, NULL, '2025-03-07 05:24:16', '2025-03-07 05:24:16'),
(63, 86, '34', 'Carla Stanley', 'Luna', 'In enim ut debitis q', '', '', '::1', '', '', '', 'xutetiqyt@mailinator.com', '1231231231', '', 'Carla Stanley Luna', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '11535KEJZ62RWDWP8TWGG5N018', 'ccof:CA4SEEACs7Rz6yQT_05HOpn6FisoAg', NULL, NULL, NULL, '2025-03-07 05:27:35', '2025-03-07 05:27:35'),
(64, 87, '27', 'Sigourney Riggs', 'Charlotte Osborn', 'Nisi minus possimus', '', '', '::1', '', '', '', 'jycahizo@mailinator.com', ' 1231231231', '', 'Sigourney Riggs Charlotte Osborn', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_RtgpwIfK0LjMOg', 'ch_3QztS4JJIyLN8zhq0vrJTNxF', NULL, '2025-03-07 05:28:22', '2025-03-07 05:28:22'),
(65, 87, '27', 'Sigourney Riggs', 'Charlotte Osborn', 'Nisi minus possimus', '', '', '::1', '', '', '', 'jycahizo@mailinator.com', '1231231231', '', 'Sigourney Riggs Charlotte Osborn', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'cus_RtgqRqU4kP9cau', 'ch_3QztT8JJIyLN8zhq1iAgsDiB', NULL, '2025-03-07 05:29:28', '2025-03-07 05:29:28'),
(66, 88, '49', 'Kiona Tanner', 'Charlotte Osborn', 'Sit qui accusantium', '', '', '::1', '', '', '', 'qiwiwub@mailinator.com', ' 1231231231', '', 'Kiona Tanner Charlotte Osborn', '4111111111111111', '342', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-07 05:30:19', '2025-03-07 05:30:19'),
(67, 89, '263', 'Edan Wade', 'Luna', 'Exercitationem ut et', '', '', '::1', '', '', '', 'dinavi@mailinator.com', '1231231231', '', 'Edan Wade Luna', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'CBKHH492JDSC81GKTGYKBN0H1R', 'ccof:CA4SELMSPy8oxpds8fxrrC7TMswoAg', NULL, NULL, NULL, '2025-03-07 05:39:07', '2025-03-07 05:39:07'),
(68, 91, '2000', 'nounx', 'nounx', 'rrrrrrrrrrrrr', '', '', '119.73.104.88', '', '', '', 'link@gmail.com', '0222222222222', '', 'nounx nounx', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'NKHHRSP0K5ADRAE97R1RC1ZHE8', 'ccof:CA4SEFFbiqD05MWvbt0hsY3q2uQoAg', NULL, NULL, NULL, '2025-03-07 17:11:35', '2025-03-07 17:11:35'),
(69, 92, '400', 'apix first', 'apix last', 'this is not my work bro', '', '', '119.73.104.88', '', '', '', 'mark@gmail.com', '7777777777', '', 'apix first apix last', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '94ZYBS36PGCPTHBK6VK4SVH6WR', 'ccof:CA4SEDze-dQldP0lXrLz-pnQ21UoAg', NULL, NULL, NULL, '2025-03-07 17:12:59', '2025-03-07 17:12:59'),
(70, 94, '120', 'Frank', 'nounx', 'this is description of frank', '', '', '119.73.104.88', '', '', '', 'link@gmail.com', '0222222222222', '', 'Frank nounx', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'H7S07R1D6QR1PCGJEMM7Z5F8X8', 'ccof:CA4SECECpokjz0cpmLrYc0FZB7goAg', NULL, NULL, NULL, '2025-03-07 21:10:26', '2025-03-07 21:10:26'),
(71, 96, '300', 'Ali Leghari first', 'Ali Leghari Last', 'Ali Leghari - Description', '', '', '119.73.104.88', '', '', '', 'link@gmail.com', '25142423333', '', 'Ali Leghari first Ali Leghari Last', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5VWXVQZA29XTWCXJRP79A68F3W', 'ccof:CA4SEAc_8rKSXDT_Axe2LECz7W8oAg', NULL, NULL, NULL, '2025-03-07 21:40:32', '2025-03-07 21:40:32'),
(72, 97, '12', 'first farhan', 'last farhan', 'this is title Farhan 2', '', '', '119.73.104.88', '', '', '', 'farhan11@gmail.com', '7777777777', '', 'first farhan last farhan', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'XMF6SFHBBCZP74YJA60CAK398C', 'ccof:CA4SEKuKTExEqRpHBSqKbYV7_qYoAg', NULL, NULL, NULL, '2025-03-07 21:51:49', '2025-03-07 21:51:49'),
(73, 106, '5', 'Muhammad Shahyan', 'Qureshi', '', '', '', '119.73.104.88', '', '', '', 'msqurshi@ucreativ.com', '7187501269', '', 'Muhammad Shahyan Qureshi', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5C8AW0H54JHXZKJAWQDDHDPBBR', 'ccof:CA4SEP4B-4VO2FHuC3eMRSwFTlwoAg', NULL, NULL, NULL, '2025-03-07 22:10:00', '2025-03-07 22:10:00'),
(74, 112, '12121', 'namexx', 'nounx', '12121', '', '', '119.73.104.88', '', '', '', 'link@gmail.com', '0222222222222', '', 'namexx nounx', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'C82X5JT8B7TA1JEYMD76NMQJ0M', 'ccof:CA4SEEHpHYIsut7pJ3KMli_gzgwoAg', NULL, NULL, NULL, '2025-03-07 23:55:12', '2025-03-07 23:55:12'),
(75, 113, '43', 'bad', 'bab', 'cccccccccccccc', '', '', '119.73.104.88', '', '', '', 'link@gmail.com', '0222222222222', '', 'bad bab', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'AY6T9QRMKRRY70V7VEHV6BTRCC', 'ccof:CA4SEI9eMzbBJVOD8I8DkLPQ4c4oAg', NULL, NULL, NULL, '2025-03-07 23:58:27', '2025-03-07 23:58:27'),
(76, 114, '22', 'far', 'han', '232322', '', '', '119.73.104.88', '', '', '', 'not@gmail.com', '334343434', '', 'far han', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'WEPN62NRMM7VDA5E6XDD60TCS8', 'ccof:CA4SENUNRuOoiwycBqtuon2tug4oAg', NULL, NULL, NULL, '2025-03-08 00:00:09', '2025-03-08 00:00:09'),
(77, 117, '550', 'Ajay kumar', 'Teepireddy', 'LLC Insurance', '', '', '76.20.120.35', '', '', '', 'drajay12@yahoo.com', '5596798114', '', 'Ajay kumar Teepireddy', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '0M8XKJDJ1EJ06AZZ06RYE9KCT8', 'ccof:CA4SELop_yZSnku5I3KGL3BDK9MoAg', NULL, NULL, NULL, '2025-03-10 17:11:04', '2025-03-10 17:11:04'),
(78, 120, '2500', 'Glenn', 'Hunter ', 'On-Boarding Payment A-Z Automation', '', '', '104.28.124.6', '', '', '', 'glenn@huntersclassiccorp.com.mx', '7809334452', '', 'Glenn Hunter ', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'G0DTSABTS3G1JH3XSJPG058T6M', 'ccof:CA4SENZ-V3BXZX2TMTjVn05EFh0oAQ', NULL, NULL, NULL, '2025-03-17 23:44:51', '2025-03-17 23:44:51'),
(79, 123, '1000', 'Vivek', 'Venkatesan', 'Amazon A-Z Account Management', '', '', '134.65.36.36', '', '', '', 'viv_venkat@yahoo.com', '4092258818', '', 'Vivek Venkatesan', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'WPH2MM8H7H56N5EHH5HW91M4FG', 'ccof:CA4SEARTyIYYjBAQ_SW0dUwKNwooAg', NULL, NULL, NULL, '2025-03-18 18:58:22', '2025-03-18 18:58:22'),
(80, 125, '1000', 'Aloysius ', 'Galabe Sama ', 'A-Z Full Automation services (Bi-annual) ', '', '', '216.103.158.114', '', '', '', 'aloysgalabe@hotmail.com', '4155243451', '', 'Aloysius  Galabe Sama ', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'WW6SF8Z6QFHZG2JM43GPJ0Q6KM', 'ccof:CA4SEGHIrzONBFwaJqchqbUW-uYoAg', NULL, NULL, NULL, '2025-03-21 20:24:56', '2025-03-21 20:24:56'),
(81, 126, '2500', 'Ashley', 'Burroughs ', ' A-Z Full Automation services - (Bi-Annual)', '', '', '47.7.179.20', '', '', '', 'Moevintn@gmail.com', '8655670594', '', 'Ashley Burroughs ', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '1FHSSK7K0PFCPA75J3FTHBHN80', 'ccof:CA4SEHs6aa9y2xrnnmB9AUA9EGcoAg', NULL, NULL, NULL, '2025-03-26 19:28:05', '2025-03-26 19:28:05'),
(82, 128, '1500', 'Daon', 'Daniels', ' Amazon Automation (A-Z automation)', '', '', '96.19.190.134', '', '', '', 'daondaniels@yahoo.com', '5756367571', '', 'Daon Daniels', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2T7A7WDHV73WEW0JM6WVKRNTMM', 'ccof:CA4SECqooXR18UmHaSAZndYChf0oAg', NULL, NULL, NULL, '2025-04-03 20:06:35', '2025-04-03 20:06:35'),
(83, 129, '1500', 'Vivek', 'Venkatesan', 'Remaining Payment', '', '', '134.65.36.36', '', '', '', 'viv_venkat@yahoo.com', '4092258818', '', 'Vivek Venkatesan', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'A50H8E3BVHSR82RRRTN9G7BSNM', 'ccof:CA4SEPoXgYxV1_SSunWUjfmcsOUoAQ', NULL, NULL, NULL, '2025-04-04 22:05:04', '2025-04-04 22:05:04'),
(84, 130, '119', 'Daon', 'Daniels ', '', '', '', '96.19.190.134', '', '', '', 'daontechnews@gmail.com', '5756367571', '', 'Daon Daniels ', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'AFHKZC57NSKYV81Y03XR6A4SW0', 'ccof:CA4SEBHCPAYO7Cv1fGD6V00yV4EoAg', NULL, NULL, NULL, '2025-04-07 19:26:54', '2025-04-07 19:26:54'),
(85, 131, '1000', 'Daon', 'Daniels', 'A-Z automation (Remaining Installment) ', '', '', '96.19.190.134', '', '', '', 'daontechnews@gmail.com', '5756367571', '', 'Daon Daniels', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '09CTJFBMNABQTYVFTMDQY6XHH8', 'ccof:CA4SEN2hM9hCiuoOdTt57l4KIysoAQ', NULL, NULL, NULL, '2025-04-15 20:33:09', '2025-04-15 20:33:09'),
(86, 133, '150', 'Vivek', 'Venkatesan', 'One-time payment for reseller certificate', '', '', '199.247.44.124', '', '', '', 'viv_venkat@yahoo.com', '4092258818', '', 'Vivek Venkatesan', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'B3GA3ADRE3NQHSXEH4CRZ82360', 'ccof:CA4SEAtmHgvNMQ1di_F6fox1b30oAg', NULL, NULL, NULL, '2025-04-17 19:21:32', '2025-04-17 19:21:32'),
(87, 134, '500', 'Daon', 'Daniels', 'Domain purchase one-time payment', '', '', '96.19.190.134', '', '', '', 'daontechnews@gmail.com', '5756367571', '', 'Daon Daniels', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'GJH6XY7KKHG1EVQDPWZG3EMHC0', 'ccof:CA4SEIUiDVO107ShJAXzV0pLaNkoAQ', NULL, NULL, NULL, '2025-04-18 17:01:47', '2025-04-18 17:01:47'),
(88, 135, '70', 'Aloysius', 'Galabe ', 'First inventory prep payment ', '', '', '216.103.158.34', '', '', '', 'aloysgalabe@hotmail.com', '4155243451', '', 'Aloysius Galabe ', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '512RMFR8793JBA10DRNP2AHNBM', 'ccof:CA4SEHe2EuQnbISMwTgJflsh9l0oAQ', NULL, NULL, NULL, '2025-04-22 18:55:56', '2025-04-22 18:55:56'),
(89, 139, '220', 'Karl', 'Aime', 'Reseller certificate for REVAMP PROPERTIES LLC.', '', '', '108.7.59.109', '', '', '', 'karl_aime@yahoo.com', '7816007614', '', 'Karl Aime', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'Y37N1QFENAPW1NYH1W7VK31H3R', 'ccof:CA4SEOQXa7movQVG6hk_TPgp11AoAg', NULL, NULL, NULL, '2025-04-28 19:11:24', '2025-04-28 19:11:24'),
(90, 140, '250', 'Amel', 'Radoncic', 'Reseller Certificate one-time payment', '', '', '172.59.210.123', '', '', '', 'radonixllc@gmail.com', '5512001344', '', 'Amel Radoncic', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '3P6SQNDFXH0FPS1J3Y4NGZT1DR', 'ccof:CA4SENPLvCZDrzOrQMg4KekvnRcoAg', NULL, NULL, NULL, '2025-05-05 20:44:19', '2025-05-05 20:44:19'),
(91, 141, '350', 'Daon', 'Daniels', 'Paid meta followers one-time payment', '', '', '96.19.190.134', '', '', '', 'daontechnews@gmail.com', '5756367571', '', 'Daon Daniels', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'JAGJ7TSPBTGMGCKTAGMS8K3W6R', 'ccof:CA4SEBfMmgHK1WYdNnClB1fbuLooAg', NULL, NULL, NULL, '2025-05-06 16:22:06', '2025-05-06 16:22:06'),
(92, 142, '450', 'Glenn', 'Hunter', 'Merchant and Followers one-time payment', '', '', '206.75.41.114', '', '', '', 'cvolongrider1@gmail.com', '7809334452', '', 'Glenn Hunter', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'HN27R6QRHDEPSTP1QR6J009BXG', 'ccof:CA4SEEXtFnGnSkg7pOqfs5LaI6coAQ', NULL, NULL, NULL, '2025-05-06 17:46:19', '2025-05-06 17:46:19'),
(93, 143, '300', 'Preston', 'Webb', 'Reseller Certificate one-time payment', '', '', '47.7.179.20', '', '', '', 'moevintn@gmail.com', '8655670594', '', 'Preston Webb', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'GY6YA8WCB6M71GN847XTEVDHZ8', 'ccof:CA4SEEJ_YtRfH0kET8L8W14AhXYoAQ', NULL, NULL, NULL, '2025-05-06 20:16:42', '2025-05-06 20:16:42'),
(94, 3, '28', 'William', 'Hurst', 'Optio sit voluptat', '', '', '::1', '', '', '', 'toqegysyhu@mailinator.com', '1231231231', '', 'William Hurst', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-09 18:03:56', '2025-12-09 18:03:56'),
(95, 3, '28', 'William', 'Hurst', 'Optio sit voluptat', '', '', '::1', '', '', '', 'toqegysyhu@mailinator.com', '1231231231', '', 'William Hurst', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-09 18:04:35', '2025-12-09 18:04:35'),
(96, 4, '97', 'Maya', 'Ila', 'Quaerat enim natus i', '', '', '::1', '', '', '', 'hubul@mailinator.com', '914', '', 'Maya Ila', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-09 18:13:40', '2025-12-09 18:13:40'),
(97, 4, '97', 'Maya', 'Ila', 'Quaerat enim natus i', '', '', '::1', '', '', '', 'hubul@mailinator.com', '914', '', 'Maya Ila', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-09 18:13:51', '2025-12-09 18:13:51'),
(98, 4, '97', 'Maya', 'Ila', 'Quaerat enim natus i', '', '', '::1', '', '', '', 'hubul@mailinator.com', '914', 'visa', 'Maya Ila', '4242424242424242', '123', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0', '2025-12-09 18:35:40', '2025-12-09 18:35:40'),
(99, 4, '97', 'Valentine Lester', 'Justina Cunningham', 'Quaerat enim natus i', '', '', '::1', '', '', '', 'zojyjyby@mailinator.com', '686', 'visa', 'Valentine Lester Justina Cunningham', '4242424242424242', '123', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0', '2025-12-09 18:36:18', '2025-12-09 18:36:18'),
(100, 8, '44', 'Xyla Dorsey', 'Samantha Maxwell', 'Odit et qui saepe pa', '', '', '::1', '', '', '', 'fyduhyr@mailinator.com', '599', 'visa', 'Xyla Dorsey Samantha Maxwell', '4242 4242 4242 4242', '123', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0', '2025-12-09 19:32:23', '2025-12-09 19:32:23'),
(101, 8, '44', 'Moses Patel', 'Buffy Moss', 'Odit et qui saepe pa', '', '', '::1', '', '', '', 'hesity@mailinator.com', '942', 'visa', 'Moses Patel Buffy Moss', '4242 4242 4242 4242', '123', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0', '2025-12-09 19:53:19', '2025-12-09 19:53:19'),
(102, 9, '16', 'Kellie Jenkins', 'Dale Waters', 'Dolor est excepturi', '', '', '::1', '', '', '', 'lega@mailinator.com', '642', 'visa', 'Kellie Jenkins Dale Waters', '4242 4242 4242 4242', '123', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0', '2025-12-09 19:59:17', '2025-12-09 19:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `payment_links`
--

CREATE TABLE `payment_links` (
  `payment_id` int UNSIGNED NOT NULL,
  `payment_code` varchar(200) DEFAULT NULL,
  `customer_name` varchar(200) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_phone` varchar(50) NOT NULL DEFAULT '',
  `brand_name` varchar(200) DEFAULT NULL,
  `brand_service` text,
  `title` varchar(255) DEFAULT NULL,
  `package_name` varchar(200) DEFAULT NULL,
  `package_amount` int UNSIGNED DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `notes` text,
  `payment_gateway` tinyint DEFAULT NULL,
  `payment_type` tinyint DEFAULT NULL,
  `send_invoice` tinyint DEFAULT NULL,
  `sales_person` varchar(50) DEFAULT NULL,
  `payment_link` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_links`
--

INSERT INTO `payment_links` (`payment_id`, `payment_code`, `customer_name`, `customer_email`, `customer_phone`, `brand_name`, `brand_service`, `title`, `package_name`, `package_amount`, `currency`, `notes`, `payment_gateway`, `payment_type`, `send_invoice`, `sales_person`, `payment_link`, `created_at`, `updated_at`) VALUES
(1, '2025120916471248027716', 'Jillian Booth', 'jafuzabeqy@mailinator.com', '+1 (367) 171-7513', 'ecomunified', NULL, 'Nesciunt est Nam et', NULL, 36, 'USD', 'Exercitation veniam', 0, 1, 0, 'support@ecomunified.com', 'http://ecomunified.com/pay/payment-form.php?payment_code=2025120916471248027716', '2025-12-09 16:47:12', '2025-12-09 16:47:12'),
(2, '202512091709439a4b862b', 'Jolene Ferrell', 'ciqekuge@mailinator.com', '+1 (897) 529-9513', 'ecomunified', NULL, 'Accusamus ipsa volu', NULL, 55, 'USD', 'Magna sunt corporis ', 0, 1, 0, 'support@ecomunified.com', 'http://ecomunified.com/pay/payment-form.php?payment_code=202512091709439a4b862b', '2025-12-09 17:09:43', '2025-12-09 17:09:43'),
(3, '202512091710203de76366', 'Sydney Webster', 'wacefo@mailinator.com', '+1 (184) 794-5982', 'ecomunified', NULL, 'Cupiditate vero offi', NULL, 28, 'USD', 'Optio sit voluptat', 1, 1, 0, 'support@ecomunified.com', 'http://ecomunified.com/pay/payment-form.php?payment_code=202512091710203de76366', '2025-12-09 17:10:20', '2025-12-09 17:10:20'),
(4, '2025120918125588fb7838', 'Tate Green', 'ruwib@mailinator.com', '+1 (853) 661-3629', 'ecomunified', NULL, 'In laboris possimus', NULL, 97, 'USD', 'Quaerat enim natus i', 1, 1, 0, 'support@ecomunified.com', 'http://ecomunified.com/pay/payment-form.php?payment_code=2025120918125588fb7838', '2025-12-09 18:12:55', '2025-12-09 18:12:55'),
(5, '20251209183922f1ac3a6a', '', '', '', 'ecomunified', NULL, '', NULL, 0, 'USD', 'Quaerat enim natus i', 1, 1, 0, 'support@ecomunified.com', 'http://ecomunified.com/pay/payment-form.php?payment_code=20251209183922f1ac3a6a', '2025-12-09 18:39:22', '2025-12-09 18:39:22'),
(6, '20251209184054de35e150', '', '', '', 'ecomunified', NULL, '', NULL, 0, 'USD', 'Quaerat enim natus i', 1, 1, 0, 'support@ecomunified.com', 'http://ecomunified.com/pay/payment-form.php?payment_code=20251209184054de35e150', '2025-12-09 18:40:54', '2025-12-09 18:40:54'),
(7, '20251209184242af2f05f6', 'Kirk Middleton', 'totihi@mailinator.com', '+1 (509) 678-5167', 'ecomunified', NULL, 'Molestiae voluptas a', NULL, 66, 'USD', 'Inventore doloremque', 1, 1, 0, 'support@ecomunified.com', 'http://ecomunified.com/pay/payment-form.php?payment_code=20251209184242af2f05f6', '2025-12-09 18:42:42', '2025-12-09 18:42:42'),
(8, '20251209193053b5abe40a', 'Salvador Quinn', 'dusuzuz@mailinator.com', '+1 (144) 999-1485', 'ecomunified', NULL, 'Aut non omnis volupt', NULL, 44, 'USD', 'Odit et qui saepe pa', 1, 1, 0, 'support@ecomunified.com', 'http://ecomunified.com/pay/payment-form.php?payment_code=20251209193053b5abe40a', '2025-12-09 19:30:53', '2025-12-09 19:30:53'),
(9, '20251209195813240352ff', 'Lenore Everett', 'bunady@mailinator.com', '+1 (355) 935-3883', 'ecomunified', NULL, 'Laboriosam autem au', NULL, 16, 'USD', 'Dolor est excepturi', 4, 1, 0, 'support@ecomunified.com', 'http://ecomunified.com/pay/payment-form.php?payment_code=20251209195813240352ff', '2025-12-09 19:58:13', '2025-12-09 19:58:13');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `payment_links`
--
ALTER TABLE `payment_links`
  MODIFY `payment_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
