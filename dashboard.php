<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "<h2>Anda belum login</h2>";
    echo "<a href='login.php'>Login di sini</a>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card p-4 shadow col-md-6 mx-auto">
        <h3>Selamat datang, <strong><?= $_SESSION['nama'] ?></strong> 👋</h3>
        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
</div>
</body>
</html>
