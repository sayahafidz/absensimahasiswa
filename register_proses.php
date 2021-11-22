<?php
error_reporting(0);
require_once 'koneksi.php';
if (isset($_POST['register'])) {
    $nim           = $_POST['nim'];
    $email         = $_POST['email'];
    $password      = $_POST['password'];
    $nama          = $_POST['nama'];
    $kelas         = $_POST['kelas'];
    $program_studi = $_POST['program_studi'];
    $alamat        = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    if (!empty($password)) {
        $sql    = "SELECT * FROM mahasiswa WHERE email='$email'";
        $result = mysqli_query($koneksi, $sql);

        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO mahasiswa (nim, email, password, nama, kelas, program_studi, alamat, tanggal_lahir)
                    VALUES ('$nim', '$email', '$password','$nama','$kelas','$program_studi','$alamat','$tanggal_lahir')";
            $result = mysqli_query($koneksi, $sql);

            if ($result) {
                header('location:login.php?pesan=regis_berhasil');
            } else {
                header('location:register.php?pesan=database_error');
            }
        } else {
            header('location:register.php?pesan=email_terdaftar');
        }
    } else {
        header('location:register.php?pesan=ada_yang_salah');
    }
}
