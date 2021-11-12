<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Guru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">guru</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="#" class="btn btn-small btn-info" data-toggle="modal" data-target="#tambahGuru"><i class="fas fa-plus-circle"></i> Tambah guru</a>

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table_datatable">
                                <thead>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama Guru
                                    </th>
                                    <th>
                                        Mata Pelajaran diampu
                                    </th>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($guru as $row) { ?>
                                        <tr>
                                            <td><?= $i  ?></td>
                                            <td><?= $row->nama_guru  ?></td>
                                            <td><?= $row->matpel  ?></td>
                                            <td><a href="#" class="btn btn-small btn-info" data-toggle="modal" data-target="#editGuru<?php echo $row->id_guru; ?>"><i class="fas fa-edit"></i></a> | <a href="<?= base_url('admin/deleteGuru/') . $row->id_guru  ?>" class="btn btn-small btn-danger"><i class="fas fa-trash"></i></a></td>
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
<div id="tambahGuru" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Guru</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="<?php echo site_url('admin/addGuru/') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-lg-12">
                            <div class="form-group">
                                <label>Nama Guru</label>
                                <input type="text" class="form-control" name="nama_guru" placeholder="Masukan Nama guru" required>
                            </div>
                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <input type="text" class="form-control" name="matpel" placeholder="Masukan Mata Pelajaran" required>
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
foreach ($guru as $row) { ?>
    <div id="editGuru<?php echo $row->id_guru ?>" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Guru</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="post" action="<?php echo site_url('admin/updateGuru/' . $row->id_guru) ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label>Nama Guru</label>
                                    <input type="text" class="form-control" name="nama_guru" placeholder="Masukan Nama guru" value="<?php echo $row->nama_guru ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Mata Pelajaran</label>
                                    <input type="text" class="form-control" name="matpel" placeholder="Masukan Mata Pelajaran" value="<?php echo $row->matpel ?>" required>
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