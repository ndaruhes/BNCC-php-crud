<?php
// KONEKSI DATABASE
$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'aplikasi_buku';

try {
    $connect = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

// BASE URL
require_once 'base_url.php';

// FUNCTION
require_once 'function.php';
