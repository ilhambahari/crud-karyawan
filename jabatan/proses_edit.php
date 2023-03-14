<?php

session_start();

require_once "../config/koneksi.php";

$id = $_GET['id'];

$nama_jabatan = $_POST['nama_jabatan'];

$sql = "UPDATE jabatan SET nama_jabatan = '$nama_jabatan' WHERE id = '$id'";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    $_SESSION['success'] = "Data berhasil diubah";
} else {
    $_SESSION['failed'] = "Data gagal diubah";
}

header('Location: ./');
