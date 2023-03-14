<?php
require_once "../config/koneksi.php";
require_once "../templates/header.php";
?>

<div class="container mt-5">
    <h3 class="mb-3">Tambah Jabatan</h3>
    <div class="card shadow">
        <div class="card-body">
            <form action="proses_tambah.php" method="post">
                <div class="form-group">
                    <label for="nama_jabatan">Nama</label>
                    <input type="text" name="nama_jabatan" class="form-control">
                </div>

                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "../templates/footer.php";
