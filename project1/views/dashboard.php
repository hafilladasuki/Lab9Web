<?php
if (!isset($_SESSION['login'])) {
    header("Location: index.php?page=auth/login");
    exit;
}
?>

<div class="content">
   <h2>Dashboard</h2>
   <p>Selamat datang di aplikasi modular.</p>
</div>
