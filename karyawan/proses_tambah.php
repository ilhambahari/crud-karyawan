<?php

session_start();

require_once "../config/koneksi.php";

$nama_karyawan = $_POST['nama_karyawan'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jabatan_id = $_POST['jabatan_id'];

$sql = "INSERT INTO karyawan(nama_karyawan, alamat, umur, jabatan_id) VALUES('$nama_karyawan', '$alamat', '$umur', '$jabatan_id')";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    $_SESSION['success'] = "Data berhasil disimpan";
} else {
    $_SESSION['failed'] = "Data gagal disimpan";
}

header('Location: ./');
