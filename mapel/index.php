<?php
ob_start();
include "config/koneksi.php";
$data = mysqli_query($koneksi,"SELECT * FROM mapel");
?>

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
    <thead style="background-color: #f877d1; color: white;">
        <tr>
            <th style="text-align: center;">Kode mapel</th>
            <th style="text-align: center;">Nama kelas</th>
            <th style="text-align: center;">Kkm</th>
        </tr>
    </thead>
    <tbody>
    <?php while($d = mysqli_fetch_array($data)) { ?>
        <tr style="text-align: center;">
            <td><?= htmlspecialchars($d['Kd_mapel']); ?></td>
            <td><?= htmlspecialchars($d['Nm_kelas']); ?></td>
            <td><?= htmlspecialchars($d['Kkm']); ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<a href="index.php?page=tambah_mapel" style="display: inline-block; margin-bottom: 10px; padding: 6px 12px; background-color: #28a745; color: white; text-decoration: none; border-radius: 4px;">Tambah</a>
