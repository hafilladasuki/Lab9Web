<?php
require __DIR__ . "/../../config/database.php";

$result = mysqli_query($conn, "SELECT * FROM user");
?>

<div class="content">
   <h2>Daftar User</h2>

   <a href="index.php?page=user/add">Tambah User</a>
   <br><br>

   <table border="1" cellpadding="8">
      <tr>
         <th>ID</th>
         <th>Nama</th>
         <th>Email</th>
      </tr>

      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
         <td><?= $row['id']; ?></td>
         <td><?= $row['nama']; ?></td>
         <td><?= $row['email']; ?></td>
      </tr>
      <?php endwhile; ?>
   </table>
</div>
