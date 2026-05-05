
<?php
include "config/koneksi.php";
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">ekstrakurikuler</h1>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == "hapus") {
        $kd = $_GET['kd'];
        $query = mysqli_query($koneksi, "DELETE FROM ekstra_251150067 WHERE id_ekstra067='$kd'");
        if ($query) {
            echo '
            <div class="alert alert-warning alert-dismissible">
                Berhasil Di Hapus</div>';
            echo '<meta http-equiv="refresh" content="1;url=index.php?page=guru">';
        }
    }
}
?>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="index.php?page=tambah_ekstra2511500067" class="btn btn-primary btn-sm">Tambah_ekstra2511500067</a>
                <table class="table table-striped">
                    <tread>
                        <tr>
                            <th style="text-align: center;">id_ekstra067</th>
                            <th style="text-align: center;">nama_ekstra</th>
                            <th style="text-align: center;">ket067</th>
                            <th style="text-align: center;">semester</th>
                            <th style="text-align: center;">thn_ajaran067</th>
                        </tr>
                    </tread>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM ekstra_2511500067");
                    while ($result = mysqli_fetch_array($query)) {
                        $no++;
                    ?>
                        <tbody>
                            <tr style="text-align: center;">
                                <td><?= $result['id_ekstra067']; ?></td>
                                <td><?= $result['nama_ekstra067']; ?></td>
                                <td><?= $result['ket067']; ?></td>
                                <td><?= $result['semester067']; ?></td>
                                <td><?= $result['thn_ajaran067']; ?></td>
                                <td>
                                    <a href="index.php?page=ekstra2511500067&action=hapus&kd=<?= $result['id_ekstra067']; ?>" title ="">
                                            <span class=" badge badge-danger">Hapus</span></a>
                                    <a href="index.php?page=edit_ekstra2511500067&kd=<?= $result['id_ekstra067']; ?>" title="">
                                        <span class="badge badge-warning">Edit</span></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>