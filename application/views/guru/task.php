<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Nilai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Guru</a></li>
                        <li class="breadcrumb-item"><a href="#">Task</a></li>
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
                            Nilai Siswa
                        </div>
                        <div class="card-body">
                            <table class="table wy-table-bordered table_datatable">
                                <thead>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama Siswa
                                    </th>
                                    <th>
                                        Mata Pelajaran
                                    </th>
                                    <th>
                                        Nilai
                                    </th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($matpel as $row) { ?>
                                        <tr>
                                            <td><?= $i  ?></td>
                                            <td><?= $row->nama_siswa  ?></td>
                                            <td><?= $row->matpel  ?></td>
                                            <td><?= $row->nilai  ?></td>
                                            <td><a href="#" class="btn btn-small btn-info" data-toggle="modal" data-target="#editNilai<?= $row->id_siswa_guru ?>"><i class="fas fa-edit"></i></a></td>
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
<?php $i = 1;
foreach ($matpel as $row) { ?>
    <div id="editNilai<?= $row->id_siswa_guru ?>" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Nilai</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="post" action="<?php echo site_url('guru/updateNilai/' . $row->id_siswa_guru) ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label>Nilai Mata Pelajaran</label>
                                    <input type="number" maxlength="100" name="nilai" class="form-control" value="<?= $row->nilai ?>">
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
<!-- /.content-wrapper --