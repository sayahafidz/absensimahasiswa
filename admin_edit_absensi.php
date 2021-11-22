<?php
$id       = $_GET['id'];
$query     = mysqli_query($koneksi, "SELECT * FROM absensi WHERE id='$id'");
$absensi = mysqli_fetch_assoc($query);
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4 text-justify">
    <h1 class="h3 mb-0 text-gray-800 ">Edit Absensi</h1>
</div>
<form method="POST" action="admin_proses_edit_absensi.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="id">ID</label>
            <input type="number" class="form-control" id="id" name="id" value="<?php echo $absensi['id']; ?>" readonly >
        </div>
        <div class="form-group col-md-6">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $absensi['nim']; ?>" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $absensi['nama_mahasiswa']; ?>" >
        </div>
        <div class="form-group col-md-6">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $absensi['kelas']; ?>" >
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Program Studi">Program Studi</label>
            <input type="text" class="form-control" id="Program Studi" name="program_studi" value="<?php echo $absensi['program_studi']; ?>" >
        </div>
        <div class="form-group col-md-6">
            <label for="waktu">Waktu</label>
            <input type="test" class="form-control" id="waktu" name="waktu" value="<?php echo $absensi['waktu']; ?>" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $absensi['keterangan']; ?>" >
        </div>
        <div class="form-group col-md-6">
            <label for="alasan">Alasan</label>
            <input type="text" class="form-control" id="alasan" name="alasan" value="<?php echo $absensi['alasan']; ?>" >
        </div>
       
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <a href="admin_index.php?page=admin_home" class="btn btn-secondary col-md-12">Kembali</a>
        </div>
        <div class="form-group col-md-6">
    
            <input type="submit" value="Ubah" class="btn btn-primary col-md-12" name="ubah">
        </div>
    </div>
</form>


<!-- <td><a href="edit.php?nama=?php echo $value['nama']; ?>">Edit</a>
                    <a href="delete.php?nama=?php echo $value['nama']; ?>">Delete</a>
                </td> -->