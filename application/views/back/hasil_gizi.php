<style>
    .back {
        padding-top: 2rem;
    }

    table td {
        padding-top: 1rem;
    }
</style>

<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-head">
                    <h3>Informasi Anak</h3>
                </div>
                <div class="ibox-body">
                    <table width="100%">
                        <?php $no = 1;
                        foreach ($data_anak as $a) { ?>
                            <tr>
                                <td width="40%">Nama Anak</td>
                                <td>:</td>
                                <td><?= $a['nama_user']; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><?= $a['tgl_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>
                                    <?php if ($a['jenis_kelamin'] == 'P') {
                                        echo "Perempuan";
                                    } else {
                                        echo "Laki-Laki";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Berat Kelahiran</td>
                                <td>:</td>
                                <td><?= $a['berat_badan_kelahiran']; ?> Kg</td>
                            </tr>
                            <tr>
                                <td>Tinggi Kelahiran</td>
                                <td>:</td>
                                <td><?= $a['tinggi_badan_kelahiran']; ?> Cm</td>
                            </tr>
                        <?php } ?>
                    </table>
                    <div class="back">
                        <a href="{back}" class="btn btn-warning mb-2">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-body">
                    <h3><b>Hasil Gizi Anak</b></h3> <br><br>
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th>Tanggal</th>
                                <th>Defuzzy</th>
                                <th>Keterangan Gizi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($gizi_anak as $g) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $g['tgl_cek']; ?></td>
                                    <td><?= $g['defuzzy']; ?></td>
                                    <td><?= $g['hasil_gizi']; ?></td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>