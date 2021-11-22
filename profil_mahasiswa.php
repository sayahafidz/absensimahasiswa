<?php
$nim       = $_SESSION['nim'];
$query     = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");
$mahasiswa = mysqli_fetch_assoc($query);
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4 text-justify">
    <h1 class="h3 mb-0 text-gray-800 ">Profil Mahasiswa</h1>
</div>
<form method="POST" action="ubah_mahasiswa.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $mahasiswa['email']; ?>" >
        </div>
        <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="<?php echo $mahasiswa['password']; ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $mahasiswa['nim']; ?>" >
        </div>
        <div class="form-group col-md-6">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa['nama']; ?>" >
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $mahasiswa['kelas']; ?>" >
        </div>
        <div class="form-group col-md-6">
            <label for="Program Studi">Program Studi</label>
            <input type="text" class="form-control" id="Program Studi" name="program_studi" value="<?php echo $mahasiswa['program_studi']; ?>" >
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $mahasiswa['alamat']; ?>" >
        </div>
        <div class="form-group col-md-6">
            <label for="tanggal lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal lahir" name="tanggal_lahir" value="<?php echo $mahasiswa['tanggal_lahir']; ?>" >
        </div>
    </div>

    <input type="submit" value="Ubah" class="btn btn-primary col-md-12" name="ubah">
</form>