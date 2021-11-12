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
                        <li class="breadcrumb-item"><a href="#">Siswa</a></li>
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
                                        Guru
                                    </th>
                                    <th>
                                        Mata Pelajaran
                                    </th>
                                    <th>
                                        Nilai
                                    </th>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($matpel as $row) { ?>
                                        <tr>
                                            <td><?= $i  ?></td>
                                            <td><?= $row->nama_guru  ?></td>
                                            <td><?= $row->matpel  ?></td>
                                            <td><?php if ($row->nilai == NULL) { ?>
                                                    <span class="badge badge-danger">belum dinilai</span><?php } else {
                                                                                                            echo $row->nilai;
                                                                                                        }   ?>
                                            </td>
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