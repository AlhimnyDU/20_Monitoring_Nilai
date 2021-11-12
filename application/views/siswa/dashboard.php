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
                        <li class="breadcrumb-item"><a href="#">siswa</a></li>
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
                            Pilih siswa
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('siswa/task') ?>" method="POST">
                                <div class="form-group">
                                    <select class="form-control" name="id_siswa" required>
                                        <option value="" disabled hidden selected>Pilih Siswa Disini</option>
                                        <?php foreach ($siswa as $row) { ?>
                                            <option value="<?= $row->id_siswa ?>"><?= $row->nama_siswa ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <hr>
                                <center> <button class="btn btn-primary" type="submit">Submit</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper --