<?php
include "config/koneksi.php";

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"INSERT INTO siswa VALUES(
        '$_POST[nis]',
        '$_POST[id_user]',
        '$_POST[jenkel]',
        '$_POST[hp]',
        '$_POST[id_kelas]'
    )");

    header("location:index.php?page=siswa");
    exit;
}
?>

<h2 style="font-family: Arial, sans-serif; color: #007bff;">Tambah Data Siswa</h2>

<form method="POST" style="width: 500px; margin-top: 20px; font-family: Arial, sans-serif;">
    <label>Nis:</label><br>
    <input type="number" name="nis" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan Nis"><br>

    <label>ID User:</label><br>
    <input type="number" name="id_user" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan ID User"><br>

   <label>Jenis Kelamin:</label><br>
    <select name="jenkel" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;">
        <option value="">--Pilih--</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>

    <label>HP:</label><br>
    <input type="number" name="hp" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan Nomor HP"><br>

    <label>Id Kelas:</label><br>
    <input type="number" name="id_kelas" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan Id Kelas"><br>

    <button type="submit" name="simpan" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
    <a href="index.php?page=siswa" style="padding: 10px 20px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 4px; margin-left: 10px;">Batal</a>
</form>