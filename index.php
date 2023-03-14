<?php
require_once "config/koneksi.php";
require_once "templates/header.php";

$query_jabatan = mysqli_query($koneksi, "SELECT id FROM jabatan");
$jumlah_jabatan = mysqli_num_rows($query_jabatan);

$query_karyawan = mysqli_query($koneksi, "SELECT id FROM karyawan");
$jumlah_karyawan = mysqli_num_rows($query_karyawan);
?>

<div class="container mt-5">
    <h3 class="mb-3">Dashboard</h3>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-secondary text-white">Jumlah Jabatan</div>
                <div class="card-body">
                    <?= $jumlah_jabatan; ?>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header bg-secondary text-white"">Jumlah Karyawan</div>
                <div class=" card-body">
                    <?= $jumlah_karyawan; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "templates/footer.php";
