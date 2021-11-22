<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Mahasiswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>KELAS</th>
                        <th>JURUSAN</th>
                        <th>ALAMAT</th>
                        <th>TANGGAL LAHIR</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>KELAS</th>
                        <th>JURUSAN</th>
                        <th>ALAMAT</th>
                        <th>TANGGAL LAHIR</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <?php foreach ($koneksi->query('SELECT * FROM mahasiswa') as $row) {
    ?>
                            <td><?php echo $row['nim']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['kelas']; ?></td>
                            <td><?php echo $row['jurusan']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['tanggal_lahir']; ?></td>
                    </tr>
                <?php
}
?>
                </tbody>
            </table>
        </div>
    </div>
</div>