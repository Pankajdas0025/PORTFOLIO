<?php
// Database credentials
$host = "localhost";
$dbname = "myportfolio";
$user = "root";
$pass = "Pankaj#12345";

// Connect using PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Database connection failed: " . $e->getMessage());
}


?>