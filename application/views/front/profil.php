<style>
    .breadcrumb {
        background-image: url('../assets/front/img/starting-solids.jpg')
    }

    .judul h1 {
        text-align: center;
        padding-top: 2rem;
        font-size: 59px;
        font-weight: bold;
    }

    .input_anak {
        padding-top: 1rem;
        font-size: 20px;
    }

    .input_anak th {
        padding-top: 1rem;
        width: 25%;
    }

    .submit {
        text-align: center;
        padding-top: 2rem;
    }

    @media screen and (max-width: 760px) {
        .input_anak th {
            width: 50%;
        }
    }
</style>

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <!-- <div class="breadcrumb_iner_item">
                        <h1>Menu MPASI</h1>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--::breadcrumb part start::-->
<div class="judul">
    <h1>Profil</h1>
</div>
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <h3>Informasi Data Anak</h3>
                <table class="input_anak" width="100%">
                    <tbody valign="center">
                        <?php foreach ($data_anak as $d) { ?>
                            <tr>
                                <th width="">Nama Anak</th>
                                <td width="1%">:</td>
                                <td>
                                    <?= $d['nama_user'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>
                                    <?php if ($d['jenis_kelamin'] == 'P') {
                                        echo "Perempuan";
                                    } else {
                                        echo "Laki-Laki";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>:</td>
                                <td>
                                    <?= $d['tgl'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Berat Badan Kelahiran</th>
                                <td>:</td>
                                <td>
                                    <?= $d['berat_badan_kelahiran'] ?> Kg
                                </td>
                            </tr>
                            <tr>
                                <th>Tinggi Badan Kelahiran</th>
                                <td>:</td>
                                <td>
                                    <?= $d['tinggi_badan_kelahiran'] ?> Cm
                                </td>
                            </tr>
                    </tbody>
                </table>
                <?php } ?>
                <div class="submit col-lg-12">
                    <a href="#edit_profil<?= $d['id_user'] ?>" data-toggle="modal" class="btn btn-primary mb-2">Ubah Data Anak</a>
                </div>
                <h3>Riwayat Hasil Gizi Anak</h3>
                <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="1%">No.</th>
                            <th>Tanggal</th>
                            <th>Defuzzy</th>
                            <th>Keterangan Gizi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                            foreach ($gizi_anak as $g) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $g['tgl']; ?></td>
                                <td><?= $g['defuzzy']; ?></td>
                                <td><?= $g['hasil_gizi']; ?></td>
                                <td>
                                    <a href="<?= base_url('user/cetak_defuzzy')?>?id_user=<?= $g['id_user']?>&&tgl_cek=<?= $g['tgl_cek']?>">Lihat Rincian Hasil Gizi</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div id="edit_profil<?= $d['id_user'] ?>" class="modal fade umur">
    <div class="modal-dialog modal-confirm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 class="modal-title w-100">Data Anak</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            </div>
            <div class="modal-body" style="color: black;">
                <form action="<?= base_url('user/update_profil') ?>" method="POST">
                    <table width="100%">
                        <tr>
                            <th width="40%;">Nama Anak</th>
                            <td width="3%">:</td>
                            <td>
                                <input type="hidden" name="id_user" value="<?= $d['id_user'] ?>">
                                <input type="text" name="nama_user" value="<?= $d['nama_user'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>
                                <select name="jk" id="" class="form-control">
                                    <option value="<?= $d['jenis_kelamin'] ?>">
                                        <?php if ($d['jenis_kelamin'] == 'P') {
                                            echo "Perempuan";
                                        } else {
                                            echo "Laki-Laki";
                                        } ?></option>
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki-Laki</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>:</td>
                            <td>
                                <input type="date" name="tgl_lahir" value="<?= $d['tgl_lahir'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th>Berat Badan Kelahiran</th>
                            <td>:</td>
                            <td>
                                <input type="number" name="berat" value="<?= $d['berat_badan_kelahiran'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th>Tinggi Badan Kelahiran</th>
                            <td>:</td>
                            <td>
                                <input type="number" name="tinggi" value="<?= $d['tinggi_badan_kelahiran'] ?>" class="form-control">
                            </td>
                        </tr>
                    </table>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <input type="submit" name="submit" value="Update Data" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
