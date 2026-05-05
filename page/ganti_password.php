<?php
include "config/koneksi.php";
?>
<div class="content-header">
    <div class="container-fluid">
    </div>
</div>
<?php   
if(isset($_POST['ubah'])) {

     $pl = $_POST['pl'];
     $pb = $_POST['pb'];
     $username = $_SESSION['username'];
     $cek =mysqli_fetch_array( mysqli_query($koneksi, "SELECT * FROM users WHERE Username='$username'"));

     if($cek){
        $update = mysqli_query($koneksi, "UPDATE users SET password='$pb' WHERE password = '$pl' AND username = '$username'");
        if($update){
            echo "berhasil";
        } else {
            echo "gagal update";
        }
     }
}
?>
<section class="content">
    <div class="container-fluid">
        <form method="POST">
            <div class="form-group">
                <label for="pl">Password Lama</label>
                <input type="password" name="pl" class="form-control" placeholder="Masukkan password Lama">
            </div>

            <div class="form-group">
                <label>Password Baru</label>
                <input type="password" name="username" class="form-control" placeholder="Masukkan password Baru">
            </div>

            <button type="submit"  name="ubah" class="btn btn-primary">ubah</button>
        </form>
    </div>
</section>