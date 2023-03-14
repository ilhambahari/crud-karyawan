<?php
require_once "../config/koneksi.php";
require_once "../templates/header.php";

$id = $_GET['id'];

$sql_karyawan = "SELECT * FROM karyawan WHERE id = '$id'";
$query_karyawan = mysqli_query($koneksi, $sql_karyawan);
$row_karyawan = mysqli_fetch_assoc($query_karyawan);

$sql_jabatan = "SELECT * FROM jabatan";
$query_jabatan = mysqli_query($koneksi, $sql_jabatan);

?>

<div class="container mt-5">
    <h3 class="mb-3">Edit Karyawan</h3>
    <div class="card shadow">
        <div class="card-body">
            <form action="proses_edit.php?id=<?= $id; ?>" method="post">
                <div class="form-group">
                    <label for="nama_karyawan">Nama</label>
                    <input type="text" name="nama_karyawan" class="form-control" value="<?= $row_karyawan['nama_karyawan']; ?>">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control"><?= $row_karyawan['alamat']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" class="form-control" value="<?= $row_karyawan['umur']; ?>">
                </div>

                <div class="form-group">
                    <label for="jabatan_id">Jabatan</label>
                    <select name="jabatan_id" id="jabatan_id" class="form-control">
                        <option value="" disabled selected>- Pilih jabatan -</option>
                        <?php while ($jabatan = mysqli_fetch_assoc($query_jabatan)) : ?>
                            <?php if ($jabatan['id'] == $row_karyawan['jabatan_id']) : ?>
                            <?php endif ?>
                            <option value="<?= $jabatan['id']; ?>" <?= ($jabatan['id'] == $row_karyawan['jabatan_id']) ? 'selected' : '' ?>><?= $jabatan['nama_jabatan']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "../templates/footer.php";
