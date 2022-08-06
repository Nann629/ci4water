<?=$this->extend('index')?>
<?=$this->section('content')?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-start mb-4">
    <h1 class="h3 mb-0 text-gray-800 mr-4"><?=$title;?></h1>
    <a href="" class="btn btn-sm btn-primary shadow-sm mr-4" data-toggle="modal" data-target="#addmodal">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add
    </a>
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
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Keberangkatan</th>
                                <th>Asal</th>
                                <th>Tujuan</th>
                                <th>Harga</th>
                                <th>Code Pesawat</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($rute as $p): ?>
                            <tr>
                                <td><?=$p['depart'];?></td>
                                <td><?=$p['rute_from'];?></td>
                                <td><?=$p['rute_to'];?></td>
                                <td><?=$p['price'];?></td>
                                <td></td>
                                <td class="text-center">
                                    <a href="" type="button" class="btn btn-info btn-sm text-center">
                                        <i class="fas fa-info"></i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="" type="button" class="btn btn-danger btn-sm text-center">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Modal-->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="col">
                        <div class="row mb-2">
                            <input class="form-control" type="date" placeholder="Tanggal Berangkat">
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mb-2">
                            <input class="form-control" type="text" placeholder="Asal">
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mb-2">
                            <input class="form-control" type="text" placeholder="Tujuan">
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mb-2">
                            <input class="form-control" type="text" placeholder="Harga">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Add</a>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>