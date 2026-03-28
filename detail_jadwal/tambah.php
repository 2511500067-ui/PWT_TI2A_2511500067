<?php
include "config/koneksi.php";

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"INSERT INTO detail_jadwal VALUES(
        '$_POST[id_jadwal]',
        '$_POST[kd_mapel]',
        '$_POST[kd_guru]',
        '$_POST[Hari]',
        '$_POST[Jam_mulai]',
        '$_POST[Jam_selesai]'
    )");

    header("location:index.php?page=detail_jadwal");
    exit;
}
?>

<h2 style="font-family: Arial, sans-serif; color: #007bff;">Tambah Data Detail Jadwal</h2>

<form method="POST" style="width: 500px; margin-top: 20px; font-family: Arial, sans-serif;">
    <label>ID Jadwal:</label><br>
    <input type="text" name="id_jadwal" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>Kode Mata Pelajaran:</label><br>
    <input type="text" name="kd_mapel" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>Kode Guru:</label><br>
    <input type="text" name="kd_guru" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>Hari:</label><br>
    <input type="text" name="Hari" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>Jam Mulai:</label><br>
    <input type="text" name="Jam_mulai" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>Jam Selesai:</label><br>
    <input type="text" name="Jam_selesai" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <button type="submit" name="simpan" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
    <a href="index.php?page=detail_jadwal" style="padding: 10px 20px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 4px; margin-left: 10px;">Batal</a>
</form>