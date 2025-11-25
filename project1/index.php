<?php
session_start();
require __DIR__ . "/views/header.php";

$page = isset($_GET['page']) ? $_GET['page'] : "dashboard";

// DASHBOARD
if ($page === "dashboard") {
    include __DIR__ . "/views/dashboard.php";
    require __DIR__ . "/views/footer.php";
    exit;
}

// USER MODULE
if (str_starts_with($page, "user/")) {
    $file = __DIR__ . "/modules/" . $page . ".php";
    if (file_exists($file)) {
        include $file;
    } else {
        echo "<h2>404 - User page not found</h2>";
    }
    require __DIR__ . "/views/footer.php";
    exit;
}

// AUTH MODULE
if (str_starts_with($page, "auth/")) {
    $file = __DIR__ . "/modules/" . $page . ".php";
    if (file_exists($file)) {
        include $file;
    } else {
        echo "<h2>404 - Auth page not found</h2>";
    }
    require __DIR__ . "/views/footer.php";
    exit;
}

// DEFAULT 404
echo "<h2>404 - Halaman tidak ditemukan</h2>";
require __DIR__ . "/views/footer.php";
