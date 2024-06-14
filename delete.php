<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jurnal";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan ID dari URL
$id = $_GET['id'];

// Query untuk menghapus data berdasarkan ID
$sql = "DELETE FROM journaltable WHERE id=$id";

if ($conn->query($sql) === true) {
    echo "Record deleted successfully";
    header('Location: index.php'); // Redirect ke halaman utama setelah delete
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();