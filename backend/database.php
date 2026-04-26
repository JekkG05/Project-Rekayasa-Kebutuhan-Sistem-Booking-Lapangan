<?php
$host = 'localhost';  // Host database
$username = 'root';   // Username MySQL (default di XAMPP adalah 'root')
$password = '';       // Password (default di XAMPP kosong)
$dbname = 'booking_lapangan';  // Nama database yang kamu buat

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>