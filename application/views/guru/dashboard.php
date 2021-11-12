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
                            Pilih Guru
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('guru/task') ?>" method="POST">
                                <div class="form-group">
                                    <select class="form-control" name="id_guru" required>
                                        <option value="" disabled hidden selected>Pilih Guru Disini</option>
                                        <?php foreach ($guru as $row) { ?>
                                            <option value="<?= $row->id_guru ?>"><?= $row->nama_guru ?></option>
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