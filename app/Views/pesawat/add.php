<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-start mb-4">
    <h1 class="h3 mb-0 text-gray-800 mr-4"><?= $title; ?></h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Pesawat</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Reservasi Code</th>
                                <th>Reservasi At</th>
                                <th>Price</th>
                                <th>Depart</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Reservasi Code</th>
                                <th>Reservasi At</th>
                                <th>Price</th>
                                <th>Depart</th>
                                <th>Status</th>

                                <th colspan="2">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($rute as $p) : ?>
                                <tr>
                                    <td><?= $p['reservasi_code']; ?></td>
                                    <td><?= $p['reservasi_at']; ?></td>
                                    <td><?= $p['price']; ?></td>
                                    <td><?= $p['depart']; ?></td>
                                    <td><?= $p['status']; ?></td>
                                    <td class="text-center">
                                        <a href="#" type="button" class="btn btn-primary btn-sm text-center" data-toggle="modal" data-target="#editmodal<?= $p['idrute']; ?>">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="/penerbangan/delete<?= $p['idrute'] ?>" onclick="return confirm('Apakah anda yakin?');" type="button" class="btn btn-danger btn-sm text-center">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Modal-->
<form action="penerbangan/save" method="POST">
    <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add data penerbangan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <div class="col form-group">
                        <div class="row mb-2">
                            <label for="depart">Reservasi Code</label>
                            <input class="form-control" type="" placeholder="Reservasi Code" id="reservasi_code" name="reservasi_code" autofocus>
                        </div>
                    </div>
                    <div class="col form-group">
                        <div class="row mb-2">
                            <label for="rute_from">Reservasi At</label>
                            <input class="form-control" type="date" placeholder="Reservasi At" for="reservasi_at" id="reservasi_at" name="reservasi_at">
                        </div>
                    </div>
                    <div class="col form-group">
                        <div class="row mb-2">
                            <label for="rute_to">Price</label>
                            <input class="form-control" type="text" placeholder="Price" for="price" id="price" name="price">
                        </div>
                    </div>
                    <div class="col form-group">
                        <div class="row mb-2">
                            <label for="price">Depart</label>
                            <input class="form-control" type="date" placeholder="Depart" for="depart" id="depart" name="depart">
                        </div>
                    </div>
                    <div class="col form-group">
                        <div class="row mb-2">
                            <label for="id_trans">Status</label>
                            <input class="form-control" type="" placeholder="Status" for="status" id="status" name="status">
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="row mb-2">
                            <select class="form-control" name="" id="">
                                <option class="form-control" type="text">Garuda</option>
                                <option class="form-control" type="text">Lion Air</option>
                                <option class="form-control" type="text">City Link</option>
                            </select>
                        </div>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>


<?= $this->endSection() ?>