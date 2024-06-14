<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jurnal";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }

    $id = $_POST['id'];
    $jam = $_POST['jam'];
    $kategori = $_POST['kategori'];
    $instruksor = $_POST['instruksor'];
    $deskripsi = $_POST['deskripsi'];
    $target = $_POST['target'];
    $status = $_POST['status'];

    if (empty($jam) || empty($kategori) || empty($instruksor) || empty($deskripsi) || empty($target) || empty($status)) {
        echo "Semua field harus diisi";
    } else {
        $sql = "UPDATE journaltable SET jam'$jam', kategori'$kategori, instruksor'$instruksor, deskripsi'$deskripsi, target'$target, status'$status";

        if ($conn->query(($sql))===true) {
            echo "Data berhasil diupdate";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
   
    }

    $conn->close();
    header("Location: index.php");

}