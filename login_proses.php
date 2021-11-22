<?php

require_once 'koneksi.php';

if (isset($_SESSION['email'])) {
    #kalau admin arahin ke admin
    #kalau user arahin ke user
}

if (isset($_POST['submit'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $sql      = "SELECT * FROM mahasiswa WHERE email = '$email' AND password = '$password'";
    $result   = mysqli_query($koneksi, $sql);

    if ($result->num_rows > 0) {
        #cek apakah value result sama dengan jumlah baris dari table mahasiswa
        $row              = mysqli_fetch_assoc($result); #menjadikan result menjadi array asosiasi yang key value
        $_SESSION['nama'] = $row['nama']; #ambil nama buat ditampilkan
        $_SESSION['nim']  = $row['nim']; #ambil nama buat ditampilkan
        if ($_SESSION['nama'] == 'admin' && $_SESSION['nim'] == 1) {
            header('location:admin_index.php');
        } else {
            header('location:user_index.php');
        }
    } else {
        header('location:login.php?pesan=salah');
    }

}
