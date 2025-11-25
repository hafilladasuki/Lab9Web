<?php

if (isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    // User hardcode biar login bisa
    if ($user === "admin" && $pass === "123") {
        $_SESSION['login'] = true;
        header("Location: index.php?page=dashboard");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<div class="content">
    <h2>Login</h2>

    <?php if(isset($error)) : ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>

    <form method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br>

        <label>Password</label><br>
        <input type="password" name="password"><br><br>

        <button name="login">Login</button>
    </form>
</div>