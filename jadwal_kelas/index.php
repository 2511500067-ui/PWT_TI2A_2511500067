<?php
ob_start();
include "config/koneksi.php";
$data = mysqli_query($koneksi,"SELECT * FROM jadwal_kelas");
?>

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
    <thead style="background-color: #f877d1; color: white;">
        <tr>
            <th style="text-align: center;">Id Jadwal</th>
            <th style="text-align: center;">Id Kelas</th>
            <th style="text-align: center;">Tahun Ajaran</th>
            <th style="text-align: center;">Semester</th>
        </tr>
    </thead>
    <tbody>
    <?php while($d = mysqli_fetch_array($data)) { ?>
        <tr style="text-align: center;">
            <td><?= htmlspecialchars($d['Id_jadwal']); ?></td>
            <td><?= htmlspecialchars($d['Id_kelas']); ?></td>
            <td><?= htmlspecialchars($d['Tahun_ajaran']); ?></td>
            <td><?= htmlspecialchars($d['Semester']); ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<a href="index.php?page=tambah_jadwal_kelas" style="display: inline-block; margin-bottom: 10px; padding: 6px 12px; background-color: #28a745; color: white; text-decoration: none; border-radius: 4px;">Tambah</a>
