<style>
    .add-btn {
        padding-bottom: 1rem;
        float: left;
    }

    .judul {
        font-size: 35px;
        font-weight: bold;
    }
</style>

<div class="page-content fade-in-up">
    <div class="judul col-lg-6">
        Menu MPASI
    </div>
    <div class="col-lg-12">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title col-lg-12">
                <a href="{tambah}" style="float: right;"><i class="fa fa-plus"> </i> Tambah Menu MPASI</a>
            </div>
        </div>
        <div class="ibox-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#tab-7-1" data-toggle="tab">6-7 Bulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab-7-2" data-toggle="tab"></i> 8 Bulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab-7-3" data-toggle="tab"></i> 9 Bulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab-7-4" data-toggle="tab"></i> 10 Bulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab-7-5" data-toggle="tab"></i> 11 Bulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab-7-6" data-toggle="tab"></i> 12-18 Bulan</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-7-1">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="20%">Judul Menu</th>
                                <th width="15%">Bahan</th>
                                <th>Resep</th>
                                <th width="10%">usia</th>
                                <th width="10%">Foto</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_6 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="">
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="">
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="tab-7-2">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_8 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="">
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="">
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-7-3">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_9 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="" width=80>
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="" width=80>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-7-4">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_10 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="" width=80>
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="" width=80>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-7-5">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_11 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="" width=80>
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="" width=80>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-7-6">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_12 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="" width=80>
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="" width=80>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-7-7">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_13 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="" width=80>
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="" width=80>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-7-8">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_14 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="" width=80>
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="" width=80>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-7-9">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_15 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="" width=80>
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="" width=80>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-7-10">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_16 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="" width=80>
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="" width=80>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-7-11">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_17 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="" width=80>
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="" width=80>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-7-12">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="120%">Judul Menu</th>
                                <th width="25%">Bahan</th>
                                <th width="25%">Resep</th>
                                <th width="15%">usia</th>
                                <th width="5%">Foto</th>
                                <th width="50%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu_18 as $b) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $b['judul_menu'] ?></td>
                                    <td><?= nl2br($b['bahan_menu']) ?></td>
                                    <td><?= nl2br($b['resep_menu']) ?></td>
                                    <td> <?= $b['usia'] ?> Bulan</td>
                                    <td> <?php if ($b['foto'] != null) { ?>
                                            <img src="<?= base_url('assets/img/menu/') ?><?= $b['foto'] ?>" alt="" width=80>
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/menu/image.jpg') ?>" alt="" width=80>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!-- <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                                                <h4 class="modal-title w-100">Hapus Menu <b> <?= $b['judul_menu'] ?></b> ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" onclick="window.location.href='<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>'" class="btn btn-danger">Delete</button>
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
    </div>
</div>