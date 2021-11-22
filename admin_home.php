<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Mahasiswa</div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">
                            <?php

                            foreach ($koneksi->query('SELECT COUNT(*) FROM mahasiswa') as $row) {
                                echo $row['COUNT(*)'];
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Absensi</div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800"><?php
                                                                            foreach ($koneksi->query('SELECT COUNT(*) FROM absensi') as $row) {
                                                                                echo $row['COUNT(*)'];
                                                                            }
                                                                            ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Row -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Download Report Absensi</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Report</a>
</div>

<!-- table -->
<div class="card shadow ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Absensi</h6>
    </div>
    <div class="card-body">
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
                        <th>AKSI</th>
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
                        <th>AKSI</th>
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
                            <td>AKSI</td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end table -->