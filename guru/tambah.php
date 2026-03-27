<?php
include "../config/koneksi.php";

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"INSERT INTO guru VALUES(
        '$_POST[kd_guru]',
        '$_POST[id_user]',
        '$_POST[nama]',
        '$_POST[jenkel]',
        '$_POST[pendidikan]',
        '$_POST[hp]',
        '$_POST[alamat]'
    )");

    header("location:index.php");
}
?>

<h2 style="font-family: Arial, sans-serif; color: #007bff;">Tambah Data Guru</h2>

<form method="POST" style="width: 500px; margin-top: 20px; font-family: Arial, sans-serif;">
    <label>Kode Guru:</label><br>
    <input type="text" name="kd_guru" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>ID User:</label><br>
    <input type="text" name="id_user" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>Nama Guru:</label><br>
    <input type="text" name="nama" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>Jenis Kelamin:</label><br>
    <select name="jenkel" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;">
        <option value="">--Pilih--</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>

    <label>Pendidikan Terakhir:</label><br>
    <input type="text" name="pendidikan" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>HP:</label><br>
    <input type="text" name="hp" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"></textarea><br>

    <button type="submit" name="simpan" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
    <a href="index.php" style="padding: 10px 20px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 4px; margin-left: 10px;">Batal</a>
</form>