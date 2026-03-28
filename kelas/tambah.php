<?php
include "config/koneksi.php";

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"INSERT INTO kelas VALUES(
        '$_POST[id_kelas]',
        '$_POST[nama_kelas]'
    )");

    header("location:index.php?page=siswa");
    exit;
}
?>

<h2 style="font-family: Arial, sans-serif; color: #007bff;">Tambah Data Kelas</h2>

<form method="POST" style="width: 500px; margin-top: 20px; font-family: Arial, sans-serif;">
    <label>ID Kelas:</label><br>
    <input type="number" name="id_kelas" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan ID Kelas"><br>

    <label>Nama Kelas:</label><br>
    <input type="text" name="nama_kelas" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan Nama Kelas"><br>

    <button type="submit" name="simpan" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
    <a href="index.php?page=kelas" style="padding: 10px 20px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 4px; margin-left: 10px;">Batal</a>
</form>