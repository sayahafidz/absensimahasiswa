<?php
require_once 'koneksi.php';
if (isset($_POST['kirim'])) {
    $nim           = $_POST['nim'];
    $nama          = $_POST['nama'];
    $kelas         = $_POST['kelas'];
    $program_studi = $_POST['program_studi'];
    $waktu         = $_POST['waktu'];
    $keterangan    = $_POST['keterangan'];
    $alasan        = $_POST['alasan'];
}

$query                 = mysqli_query($koneksi, "SELECT * FROM absensi WHERE nim='$nim'");
$mahasiswa             = mysqli_fetch_assoc($query);
$waktu_absen_database  = date('d/m/y', strtotime($waktu));
$waktu_absen_mahasiswa = date('d/m/y', strtotime($mahasiswa['waktu']));

// echo $waktu_absen_database . PHP_EOL;
// echo $waktu_absen_mahasiswa;
if (mysqli_num_rows($query) != 0 && $waktu_absen_database == $waktu_absen_mahasiswa) {
    echo '<script>Anda Sudah Absen</script>';
    header('location:user_index.php?page=user_home&pesan=sudah_absen');
} else {

    $id  = rand(1000, 9999);
    $sql = "INSERT INTO absensi(id, nim, nama_mahasiswa, kelas, program_studi, waktu, keterangan, alasan)
            VALUES('$id', '$nim', '$nama', '$kelas', '$program_studi', '$waktu', '$keterangan', '$alasan')";
    $result = mysqli_query($koneksi, $sql);
    header('location:user_index.php?page=user_home&pesan=berhasil_absen');
}
