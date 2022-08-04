<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-start mb-4">
    <h1 class="h3 mb-0 text-gray-800 mr-4">Penerbangan</h1>
    <a href="" class="btn btn-sm btn-primary shadow-sm mr-4"><i class="fas fa-plus fa-sm text-white-50"></i> Add</a>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->

<div class="row">
    <div class="col-xl">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Penerbangan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Keberangkatan</th>
                                <th>Asal</th>
                                <th>Tujuan</th>
                                <th>Harga</th>
                                <th>Code Pesawat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Keberangkatan</th>
                                <th>Asal</th>
                                <th>Tujuan</th>
                                <th>Harga</th>
                                <th>Code Pesawat</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a href="" type="button" class="btn btn-danger btn-sm text-center">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>