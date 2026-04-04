<?php
include "config/koneksi.php";

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"INSERT INTO mapel VALUES(
        '$_POST[Kd_mapel]',
        '$_POST[Nm_kelas]',
        '$_POST[Kkm]'
    )");

    header("location:index.php?page=mapel");
    exit;
}
?>

<h2 style="font-family: Arial, sans-serif; color: #007bff;">Tambah Data Mapel</h2>

<form method="POST" style="width: 500px; margin-top: 20px; font-family: Arial, sans-serif;">
    <label>Kode Mapel:</label><br>
    <input type="number" name="Kd_mapel" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan Kode Mapel"><br>

    <label>Nama Kelas:</label><br>
    <input type="text" name="Nm_kelas" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>KKM:</label><br>
    <input type="number" name="Kkm" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan KKM"><br>

    <button type="submit" name="simpan" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
    <a href="index.php?page=mapel" style="padding: 10px 20px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 4px; margin-left: 10px;">Batal</a>
</form>