<?php
require_once 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM absensi WHERE id='$id'");
if ($result) {
    header('location:admin_index.php?page=admin_home&pesan=berhasil_delete');
}else{
    header('location:admin_index.php?page=admin_home&pesan=gagal_delete');
}
