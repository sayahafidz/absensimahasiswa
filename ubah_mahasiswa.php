<?php
require_once 'koneksi.php';
if (isset($_POST['ubah'])) {
    $email         = $_POST['email'];
    $password      = $_POST['password'];
    $nim           = $_POST['nim'];
    $nama          = $_POST['nama'];
    $kelas         = $_POST['kelas'];
    $program_studi = $_POST['program_studi'];
    $alamat        = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
}
$sql    = "UPDATE mahasiswa SET nim='$nim', email='$email', password='$password', nama='$nama', kelas='$kelas', program_studi='$program_studi', alamat='$alamat', tanggal_lahir='$tanggal_lahir' WHERE nim='$nim' ";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header('location:user_index.php?page=profil_mahasiswa&pesan=berhasil_update');
}else{
    header('location:user_index.php?page=profil_mahasiswa&pesan=gagal_update');
}

