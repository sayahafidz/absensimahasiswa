<?php
require_once 'koneksi.php';
$nim = $_GET['nim'];
$result = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'");
if ($result) {
    header('location:admin_index.php?page=admin_mahasiswa&pesan=berhasil_delete');
}else{
    header('location:admin_index.php?page=admin_mahasiswa&pesan=gagal_delete');
}
