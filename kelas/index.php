<?php
ob_start();
include "config/koneksi.php";
$data = mysqli_query($koneksi,"SELECT * FROM siswa");
?>

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
    <thead style="background-color: #007bff; color: white;">
        <tr>
            <th style="text-align: center;">Nis</th>
            <th style="text-align: center;">Id user</th>
            <th style="text-align: center;">Jenis Kelamin</th>
            <th style="text-align: center;">Hp</th>
            <th style="text-align: center;">Id kelas</th>
        </tr>
    </thead>
    <tbody>
    <?php while($d = mysqli_fetch_array($data)) { ?>
        <tr style="text-align: center;">
            <td><?= htmlspecialchars($d['Nis']); ?></td>
            <td><?= htmlspecialchars($d['Id_user']); ?></td>
            <td><?= htmlspecialchars($d['Jenkel']); ?></td>
            <td><?= htmlspecialchars($d['Hp']); ?></td>
            <td><?= htmlspecialchars($d['Id_kelas']); ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<a href="index.php?page=tambah_siswa" style="display: inline-block; margin-bottom: 10px; padding: 6px 12px; background-color: #28a745; color: white; text-decoration: none; border-radius: 4px;">Tambah</a>
