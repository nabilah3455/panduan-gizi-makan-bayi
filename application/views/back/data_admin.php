<style>
    .add-btn {
        padding-bottom: 1rem;
    }
</style>

<div class="page-content fade-in-up">
    <div class="col-lg-12">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Data Admin</div>
        </div>
        <div class="ibox-body">
            <div class="add-btn">
                <button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success col-lg-12">Tambah Data Admin</button>
            </div>
            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="1%">No.</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_admin as $b) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $b['username'] ?></td>
                            <td><?= $b['password'] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_<?= $b['id_admin']?>"><i class="fa fa-edit"></i></button>
                                <a href="<?= base_url('admin/delete') ?>?id=<?= $b['id_admin'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php foreach ($data_admin as $b) { ?>
<div class="modal fade" id="exampleModal_<?= $b['id_admin']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <label for="">Username</label>
                    <input type="hidden" name="id" id="" value="<?= $b['id_admin']?>">
                    <input type="text" name="username" value="<?= $b['username']?>" class="form-control">
                </div>
                <br>
                <div class="col-lg-12">
                    <label for="">Password</label>
                    <input type="password" name="password" value="<?= $b['password']?>" class="form-control" maxlength="9">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='<?= base_url('admin/update_admin')?>'">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>