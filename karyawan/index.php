<?php
require_once "../config/koneksi.php";
require_once "../templates/header.php";

$sql = "SELECT karyawan.*, jabatan.nama_jabatan FROM karyawan JOIN jabatan ON karyawan.jabatan_id = jabatan.id";
$query = mysqli_query($koneksi, $sql);
?>

<div class="container mt-5">
    <h3 class="mb-3">Karyawan</h3>
    <div class="card shadow">
        <div class="card-header">
            <a href="tambah.php" class="btn btn-primary btn-sm mb-3">Tambah</a>
        </div>
        <div class="card-body">

            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success']; ?>
                </div>
            <?php
                unset($_SESSION['success']);
            endif; ?>

            <?php if (isset($_SESSION['failed'])) : ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['failed']; ?>
                </div>
            <?php
                unset($_SESSION['failed']);
            endif; ?>

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
                <?php $no = 1;
                while ($row = mysqli_fetch_assoc($query)) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['nama_karyawan']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['umur']; ?></td>
                        <td><?= $row['nama_jabatan']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-secondary btn-sm">Edit</a>
                            <a onclick="return confirm('Apa anda yakin?')" href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php
                    $no++;
                endwhile; ?>

                <?php if (mysqli_num_rows($query) == 0) : ?>
                    <td class="text-center" colspan="6">Tidak ada data</td>
                <?php endif ?>
            </table>
        </div>
    </div>
</div>

<?php require_once "../templates/footer.php";
