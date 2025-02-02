<?php
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Company Info</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Selamat Datang di Perusahaan Kami</h2>
        <a href="login.php" class="btn btn-primary">Login</a>
        <a href="register.php" class="btn btn-success">Register</a>

        <h3 class="mt-4">Informasi Perusahaan</h3>
        <ul>
            <?php
            $stmt = $conn->prepare("SELECT * FROM information");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                echo "<li><a href='detail.php?id=" . $row['id'] . "'>" . htmlspecialchars($row['title']) . "</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
