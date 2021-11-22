<?php
$nim       = $_SESSION['nim'];
$query     = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");
$mahasiswa = mysqli_fetch_assoc($query);

if ($_GET['pesan'] == 'berhasil_absen') {
    echo "<div class='alert alert-success' role='alert'>Berhasil Absen</div>";
} else if ($_GET['pesan'] == "sudah_absen") {
    echo "<div class='alert alert-danger' role='alert'>Kamu sudah absen hari ini</div>";
}

?>


<!-- Page Heading -->

<div class="d-sm-flex align-items-center justify-content-between mb-4 text-justify">
    <h1 class="h3 mb-0 text-gray-800 ">Absensi</h1>
</div>
<form method="POST" action="absen_mahasiswa.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $mahasiswa['nim']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa['nama']; ?>" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $mahasiswa['kelas']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="Program Studi">Program Studi</label>
            <input type="text" class="form-control" id="Program Studi" name="program_studi" value="<?php echo $mahasiswa['program_studi']; ?>" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Waktu">Waktu</label>
            <input type="text" class="form-control" id="Waktu" name="waktu" value="<?php date_default_timezone_set("Asia/Jakarta");
echo date("Y-m-d H:i:s ");?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="keterangan">Keterangan</label>
            <select id="keterangan" class="form-control" name="keterangan">
                <option value="hadir">Hadir</option>
                <option value="izin">Izin</option>
                <option value="sakit">Sakit</option>
            </select>
        </div>
    </div>
    <div class="form-group" id="alasankamu">
        <label for="alasan">Alasan</label>
        <input type="text" class="form-control" id="alasan" placeholder="sakit hati" name="alasan">
    </div>
    <input type="submit" value="Kirim" class="btn btn-primary col-md-12" name="kirim">
</form>

<script>
 document.getElementById('keterangan').addEventListener('change', function () {
    var style = this.value == 'hadir' ? 'none' : 'block';
    document.getElementById('alasankamu').style.display = style;
});
</script>
