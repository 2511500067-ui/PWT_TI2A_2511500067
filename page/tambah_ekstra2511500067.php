
<?php
include "config/koneksi.php";
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Data ekstrakurikuler</h1>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['tambah'])) {
    $id_ekstra067 = $_POST['id_ekstra067'];
    $nama_ekstra067 = $_POST['nama_ekstra067'];
    $ket067 = $_POST['ket067'];
    $semester067 = $_POST['semester067'];
    $thn_ajaran067 = $_POST['thn_ajaran067'];

    $insert = mysqli_query($koneksi, "INSERT INTO ekstra_2511500067 (id_ekstra067, nama_ekstra067, ket067, semester067, thn_ajaran067) VALUES ('$id_ekstra067', '$nama_ekstra067', '$ket067', '$semester067', '$thn_ajaran067')")
    or die (mysqli_error($koneksi));
 
    if ($insert) {
        echo '<div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info</h5>
            <h4>Berhasil Di Simpan</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=ekstra2511500067">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                <h5><i class="icon fas fa-info"></i> Info</h5>
                <h4>Gagal Di Simpan</h4>
            </div>';
    }
}
?>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-body p-2">
                    <form method="POST" action="">
                        <div class="form-group
                        ">
                            <label for="id_ekstra067">ID ekstrakurikuler:</label>
                            <input type="text" name="id_ekstra067"  placeholder="Masukkan ID ekstrakurikuler" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Nama_ekstra067">Nama ekstrakurikuler:</label>
                            <input type="text" name="Nama_ekstra067" id="Nama_ekstra067" placeholder="Masukkan Nama ekstrakurikuler" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ket067">ket:</label>
                            <input type="text" name="ket067" id="ket067" placeholder="Masukkan ket" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="semester067">Semester067:</label>
                          <select name="semester067" id="semester067" class="form-control">
                                <option value="">Pilih Semester</option>
                                <option value="Ganjil">Ganjil</option>
                                <option value="Genap">Genap</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="thn_ajaran067">Tahun Ajaran067:</label>
                           <select name="thn_ajaran067" id="thn_ajaran067" class="form-control">
                                <option value="">Pilih Tahun Ajaran</option>
                                <option value="2020/2021">2020/2021</option>
                                <option value="2021/2022">2021/2022</option>
                                <option value="2022/2023">2022/2023</option>
                                <option value="2023/2024">2023/2024</option>
                            </select>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="tambah" class="btn btn-primary" value="Simpan">
                            <a href="index.php?page=ekstra2511500067" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>