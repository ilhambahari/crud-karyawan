<?php
require_once "../config/koneksi.php";
require_once "../templates/header.php";

$id = $_GET['id'];

$sql = "SELECT * FROM jabatan WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);

$row = mysqli_fetch_assoc($query);

?>

<div class="container mt-5">
    <h3 class="mb-3">Edit Jabatan</h3>
    <div class="card shadow">
        <div class="card-body">
            <form action="proses_edit.php?id=<?= $id; ?>" method="post">
                <div class="form-group">
                    <label for="nama_jabatan">Nama</label>
                    <input type="text" name="nama_jabatan" class="form-control" value="<?= $row['nama_jabatan']; ?>">
                </div>

                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "../templates/footer.php";
