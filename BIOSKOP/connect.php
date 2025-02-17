<?php

$servername = "localhost";         
$username   = "root";
$password   = ""; 
$dbname     = "tiket_bioskop";       

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengatur character set (opsional)
$conn->set_charset("utf8");
?>
