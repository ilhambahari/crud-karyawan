<?php

session_start();

require_once "../config/koneksi.php";

$nama_jabatan = $_POST['nama_jabatan'];

$sql = "INSERT INTO jabatan(nama_jabatan) VALUES('$nama_jabatan')";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    $_SESSION['success'] = "Data berhasil disimpan";
} else {
    $_SESSION['failed'] = "Data gagal disimpan";
}

header('Location: ./');
