<?php
session_start();

// Database configuration
$host = 'localhost';
$db   = 'userdb';
$user = 'jurnal'; // Ganti dengan username database Anda
$pass = ''; // Ganti dengan password database Anda

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil input dari form register
$email = $_POST['email'];
$password = $_POST['password'];

// Validasi input (misal: tidak boleh kosong)
if (empty($email) || empty($password)) {
    echo "<script>alert('Email dan password tidak boleh kosong'); window.location.href='register.php';</script>";
    exit();
}

// Cek apakah email sudah terdaftar
$stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<script>alert('Email sudah terdaftar'); window.location.href='register.php';</script>";
    exit();
}
$stmt->close();

// Hash the password before storing it
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Simpan user baru ke database
$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $hashed_password);

if ($stmt->execute()) {
    // Redirect ke halaman login
    echo "<script>alert('Registrasi berhasil, silakan login'); window.location.href='../login/login.php';</script>";
} else {
    echo "<script>alert('Registrasi gagal, coba lagi'); window.location.href='register.php';</script>";
}

$stmt->close();
$conn->close();
exit();