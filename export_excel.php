<?php
require_once 'koneksi.php';

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Absensi Mahasiswa.xls");
?>
<div class="table-responsive">

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>WAKTU</th>
                <th>KETERANGAN</th>
                <th>ALASAN</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>WAKTU</th>
                <th>KETERANGAN</th>
                <th>ALASAN</th>
            </tr>
        </tfoot>

        <tbody>
            <tr>
                <?php
                foreach ($koneksi->query('SELECT * FROM absensi') as $row) {
                ?>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['nama_mahasiswa']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['program_studi']; ?></td>
                    <td><?php echo $row['waktu']; ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td><?php echo $row['alasan']; ?></td>
            </tr>
        <?php
                }
        ?>
        </tbody>
    </table>
</div>