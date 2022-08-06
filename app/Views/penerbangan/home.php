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
                            <?php foreach ($rute as $p): ?>
                                <tr>
                                    <td><?=$p['depart'];?></td>
                                    <td><?=$p['rute_from'];?></td>
                                    <td><?=$p['rute_to'];?></td>
                                    <td><?=$p['price'];?></td>
                                    <td><?=$p['code'];?></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Add data penerbangan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="penerbangan/save" method="post">
                <div class="modal-body">
                    <?=csrf_field();?>
                    <div class="col form-group">
                        <div class="row mb-2">
                            <label for="depart">Tanggal Berangkat</label>
                            <input class="form-control" type="date" placeholder="Tanggal Berangkat" id="depart" name="depart" autofocus>
                        </div>
                    </div>
                    <div class="col form-group">
                        <div class="row mb-2">
                            <label for="rute_from">Asal</label>
                            <input class="form-control" type="text" placeholder="Asal" for="rute_from" id="rute_from" name="rute_from">
                        </div>
                    </div>
                    <div class="col form-group">
                        <div class="row mb-2">
                            <label for="rute_to">Tujuan</label>
                            <input class="form-control" type="text" placeholder="Tujuan" for="rute_to" id="rute_to" name="rute_to">
                        </div>
                    </div>
                    <div class="col form-group">
                        <div class="row mb-2">
                            <label for="price">Harga</label>
                            <input class="form-control" type="text" placeholder="Harga" for="price" id="price" name="price">
                        </div>
                    </div>
                    <div class="col form-group">
                        <div class="row mb-2">
                            <label for="id_trans">Kode Pesawat</label>
                            <input class="form-control" type="text" placeholder="Code Pesawat" for="id_trans" id="id_trans" name="id_trans">
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
            </form>
        </div>
    </div>
</div>


    <?=$this->endSection()?>