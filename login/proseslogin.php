<?php
session_start();
include 'index.php';
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

// Ambil input dari form login
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

// Validasi input (misal: tidak boleh kosong)
if (empty($email) || empty($password)) {
    echo "<script>alert('Email dan password tidak boleh kosong'); window.location.href='login.php';</script>";
    exit();
}

// Cek kredensial
$stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    // Verifikasi password
    if (password_verify($password, $hashed_password)) {
        // Set session dan redirect ke halaman utama
        $_SESSION['email'] = $email;
        header("Location: /jurnal");
        exit();
    } else {
        echo "<script>alert('Email atau password salah'); window.location.href='login.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Email atau password salah'); window.location.href='login.php';</script>";
    exit();
}

$stmt->close();
$conn->close();