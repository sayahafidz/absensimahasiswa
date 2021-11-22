<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "root", "absensi_mahasiswa");

if (!$koneksi) {
    die("Gagal terhubung karena : " . mysqli_connect_error());
}
