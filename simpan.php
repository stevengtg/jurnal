<?php

// include koneksi database
include('koneksi.php');

// get the data from the POST request
$id = isset($_POST['id']) ? $_POST['id'] : null;
$jam = $_POST['jam'];
$kategori = $_POST['kategori'];
$instruksor = $_POST['instruksor'];
$deskripsi = $_POST['deskripsi'];
$target = $_POST['target'];
$status = $_POST['status'];

if ($id === null) {
    // Prepare an insert statement
    $stmt = $conn->prepare("INSERT INTO journaltable (jam, kategori, instruksor, deskripsi, target, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $jam, $kategori, $instruksor, $deskripsi, $target, $status);
} else {
    // Prepare an update statement
    $stmt = $conn->prepare("UPDATE journaltable SET jam=?, kategori=?, instruksor=?, deskripsi=?, target=?, status=? WHERE id=?");
    $stmt->bind_param("ssssssi", $jam, $kategori, $instruksor, $deskripsi, $target, $status, $id);
}

// Execute the statement and check for success
if ($stmt->execute()) {
    // Redirect to the index page
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan! " . $stmt->error;
}

$stmt->close();
$conn->close();