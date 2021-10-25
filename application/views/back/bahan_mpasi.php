<style>
    .add-btn {
        padding-bottom: 1rem;
    }

    .modal-confirm {
        color: #636363;
        width: 400px;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }

    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }

    .modal-confirm .modal-body {
        color: #999;
    }

    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }

    .modal-confirm .modal-footer a {
        color: #999;
    }

    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }

    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }

    .modal-confirm .btn,
    .modal-confirm .btn:active {
        color: #fff;
        border-radius: 4px;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        min-width: 120px;
        border: none;
        min-height: 40px;
        border-radius: 3px;
        margin: 0 5px;
    }

    .modal-confirm .btn-secondary {
        background: #c1c1c1;
    }

    .modal-confirm .btn-secondary:hover,
    .modal-confirm .btn-secondary:focus {
        background: #a8a8a8;
    }

    .modal-confirm .btn-danger {
        background: #f15e5e;
    }

    .modal-confirm .btn-danger:hover,
    .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }

    .judul {
        font-size: 35px;
        font-weight: bold;
    }
</style>

<div class="page-content fade-in-up">
    <div class="judul col-lg-6">
        Bahan MPASI
    </div>
    <div class="col-lg-12">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title col-lg-12">
                <a href="{tambah}" style="float: right;"><i class="fa fa-plus"> </i> Tambah Bahan MPASI</a>
            </div>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="1%">No.</th>
                        <th width="30%">Nama Bahan</th>
                        <th>Kandungan Bahan</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_bahan as $b) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $b['nama_bahan'] ?></td>
                            <td><?= nl2br($b['kandungan_bahan']) ?></td>
                            <td>
                                <a href="<?= base_url('bahan/edit') ?>?id=<?= $b['id_bahan'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                <!-- <a href="<?= base_url('bahan/delete') ?>?id=<?= $b['id_bahan'] ?>" onclick="return confirm('Yakin Hapus <?= $b['nama_bahan']; ?> Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
                            </td>
                        </tr>

                        <!-- Modal HTML -->
                        <div id="myModal" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                                <div class="modal-content">
                                    <div class="modal-header flex-column">
                                        <div class="icon-box">
                                            <i class="material-icons">&#xE5CD;</i>
                                        </div>
                                        <h4 class="modal-title w-100">Hapus Bahan <b> <?= $b['nama_bahan'] ?></b> ?</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" onclick="window.location.href='<?= base_url('bahan/delete') ?>?id=<?= $b['id_bahan'] ?>'" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>