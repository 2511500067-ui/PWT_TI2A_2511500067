<?php
include "config/koneksi.php";

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"INSERT INTO jadwal_kelas VALUES(
        '$_POST[id_jadwal]',
        '$_POST[id_kelas]',
        '$_POST[tahun_ajaran]',
        '$_POST[semester]'
    )");

    header("location:index.php?page=jadwal_kelas");
    exit;
}
?>

<h2 style="font-family: Arial, sans-serif; color: #007bff;">Tambah Data Jadwal Kelas</h2>

<form method="POST" style="width: 500px; margin-top: 20px; font-family: Arial, sans-serif;">
    <label>Id Jadwal:</label><br>
    <input type="number" name="id_jadwal" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan Id Jadwal"><br>

     <label>Id Kelas:</label><br>
    <input type="number" name="id_kelas" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan Id Kelas"><br>

    <label>Tahun Ajaran:</label><br>
    <input type="text" name="tahun_ajaran" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan Tahun Ajaran"><br>

    <label>Semester:</label><br>
    <input type="text" name="semester" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan Semester"><br>

    <button type="submit" name="simpan" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
    <a href="index.php?page=jadwal_kelas" style="padding: 10px 20px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 4px; margin-left: 10px;">Batal</a>
</form>