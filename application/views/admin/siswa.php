<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Siswa</h3>
                            <hr>
                            <a href="#" class="btn btn-small btn-info" data-toggle="modal" data-target="#tambahSiswa"><i class="fas fa-plus-circle"></i> Tambah Siswa</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table_datatable">
                                <thead>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama Siswa
                                    </th>
                                    <th>
                                        Kelas
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($siswa as $row) { ?>
                                        <tr>
                                            <td><?= $i  ?></td>
                                            <td><?= $row->nama_siswa  ?></td>
                                            <td><?= $row->kelas  ?></td>
                                            <td><a href="<?= base_url('admin/matpel/') . $row->id_siswa  ?>" class="btn btn-small btn-warning"><i class="fas fa-clipboard"></i></a> | <a href="#" class="btn btn-small btn-info" data-toggle="modal" data-target="#editSiswa<?php echo $row->id_siswa; ?>"><i class="fas fa-edit"></i></a> | <a href="<?= base_url('admin/deleteSiswa/') . $row->id_siswa  ?>" class="btn btn-small btn-danger"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                    <?php $i++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div id="tambahSiswa" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Siswa</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="<?php echo site_url('admin/addSiswa/') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-lg-12">
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Masukan Nama Siswa" required>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control" name="kelas" placeholder="Masukan Kelas" required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $i = 1;
foreach ($siswa as $row) { ?>
    <div id="editSiswa<?php echo $row->id_siswa ?>" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Siswa</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="post" action="<?php echo site_url('admin/updateSiswa/' . $row->id_siswa) ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input type="text" class="form-control" name="nama_siswa" placeholder="Masukan Nama Siswa" value="<?php echo $row->nama_siswa ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" name="kelas" placeholder="Masukan Kelas" value="<?php echo $row->kelas ?>" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $i++;
} ?>