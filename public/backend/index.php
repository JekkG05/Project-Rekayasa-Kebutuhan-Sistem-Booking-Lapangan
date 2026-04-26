<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking_lapangan";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lapangan = $_POST['lapangan'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    // Insert data ke database
    $sql = "INSERT INTO bookings (lapangan, tanggal, jam) VALUES ('$lapangan', '$tanggal', '$jam')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking berhasil: Lapangan: $lapangan, Tanggal: $tanggal, Jam: $jam";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>