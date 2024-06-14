<?php
session_start();
if (isset($_SESSION["email"])) {
    // Komentari baris pengalihan agar tidak mengarahkan ke halaman lain
    // header("Location: /weblaporan");
    echo "<!-- User sudah login, pengalihan halaman di-nonaktifkan -->";
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <title>jurnal | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark" style="--bs-bg-opacity: .9;">
    <main class="container d-flex justify-content-center align-items-center" style="min-height: 95vh">
        <!-- Pastikan jalur gambar benar -->s
        <img src="../image/haduaa.png" alt="Gambar tidak ditemukan">
        <div class="text-bg-dark ps-5 pe-5 pt-4 pb-4 rounded-3" style="width: 30%;">
            <h1 class="mb-5">Login</h1>
            <form method="post" action="proseslogin.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-outline-light mt-2">Login</button>
                <div class="mt-3">
                    <p>No have account?&nbsp;<a href="../register/register.php">Register</a></p>
                </div>
            </form>
        </div>
    </main>
</body>

</html>