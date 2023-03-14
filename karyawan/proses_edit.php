<?php

session_start();

require_once "../config/koneksi.php";

$id = $_GET['id'];

$nama_karyawan = $_POST['nama_karyawan'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jabatan_id = $_POST['jabatan_id'];

$sql = "UPDATE karyawan SET nama_karyawan = '$nama_karyawan', 
                            alamat = '$alamat',
                            umur = '$umur',
                            jabatan_id = '$jabatan_id'
                            WHERE id = '$id'";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    $_SESSION['success'] = "Data berhasil diubah";
} else {
    $_SESSION['failed'] = "Data gagal diubah";
}

header('Location: ./');
