<?php
// Your SQL code as a string
$sql_code = <<<'SQL'
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- Database: `esportsdatabase`
CREATE TABLE `cart` (
  `ID` int(255) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `quantity` int(180) NOT NULL,
  `size` varchar(255) NOT NULL,
  `initial_amount` int(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- More SQL code...
SQL;

// Encryption parameters
$key = 'j3mZ!'; // Use a secure key
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc')); // Initialization vector

// Encrypt the SQL code
$encrypted_sql = openssl_encrypt($sql_code, 'aes-256-cbc', $key, 0, $iv);

// Combine IV and encrypted data
$encrypted_data = base64_encode($iv . '::' . $encrypted_sql);

// Output the encrypted SQL code
echo $encrypted_data;
?>