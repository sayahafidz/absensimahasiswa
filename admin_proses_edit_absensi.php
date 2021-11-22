<?php
require_once 'koneksi.php';
if (isset($_POST['ubah'])) {
    $id           = $_POST['id'];
    $nim           = $_POST['nim'];
    $nama          = $_POST['nama'];
    $kelas         = $_POST['kelas'];
    $program_studi = $_POST['program_studi'];
    // $waktu = $_POST['waktu'];
    $keterangan        = $_POST['keterangan'];
    $alasan = $_POST['alasan'];
}
$sql    = "UPDATE absensi SET nama_mahasiswa='$nama', kelas='$kelas', program_studi='$program_studi', keterangan='$keterangan', alasan='$alasan' WHERE id='$id' ";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header('location:admin_index.php?page=admin_home&pesan=berhasil_update');
} else {
    header("location:admin_index.php?page=admin_home&pesan=gagal_update");
}
