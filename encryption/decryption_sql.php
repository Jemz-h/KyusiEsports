<?php
// Encrypted data (copy this from the output of the encrypt_sql.php)
$encrypted_data = 'YOUR_ENCRYPTED_DATA_HERE';

// Encryption parameters
$key = 'j3mZ!'; // Use the same secure key
list($iv, $encrypted_sql) = explode('::', base64_decode($encrypted_data), 2);

// Decrypt the SQL code
$decrypted_sql = openssl_decrypt($encrypted_sql, 'aes-256-cbc', $key, 0, $iv);

// Output the decrypted SQL code
echo $decrypted_sql;
?>