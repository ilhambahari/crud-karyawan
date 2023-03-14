<?php

session_start();

require_once "../config/koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM karyawan WHERE id = '$id'";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    $_SESSION['success'] = "Data berhasil dihapus";
} else {
    $_SESSION['failed'] = "Data gagal dihapus";
}

header('Location: ./');
