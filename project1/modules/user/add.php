<?php
require __DIR__ . "/../../config/database.php";

if (isset($_POST['submit'])) {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO user (nama, email) VALUES ('$nama', '$email')");
    header("Location: index.php?page=user/list");
}
?>

<div class="content">
   <h2>Tambah User</h2>

   <form method="post">
      <label>Nama</label><br>
      <input type="text" name="nama" required><br>

      <label>Email</label><br>
      <input type="email" name="email" required><br><br>

      <button name="submit">Simpan</button>
   </form>
</div>
