<style>
    .breadcrumb {
        background-image: url('../assets/img/banner/maria-ionova-SMKun_4YtJw-unsplash.jpg')
    }

    .judul h1 {
        text-align: center;
        padding-top: 2rem;
        font-size: 59px;
        font-weight: bold;
    }

    .input_anak th {
        width: 25%;
        padding-top: 1rem;
    }
    
    .input_anak td{
        padding-top: 1rem;
    }

    label {
        color: red;
    }

    .data_anak {
        width: 150px;
    }

    .umur {
        background-color: aqua;
    }

    h4 {
        font-weight: bold;
        text-align: center;
        padding-top: 1rem;
    }

    .submit {
        text-align: center;
        padding-top: 2rem;
    }

    .submit .btn {
        width: 15%;
    }

    @media screen and (max-width: 760px) {
        .input_anak th {
            width: 40%;
        }

        .submit .btn {
            width: 30%;
        }

        .judul h1{
            font-size: 50px;
        }
    }
</style>

<!--::breadcrumb part start::-->
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
    <h1>Kalkulator Gizi</h1>
</div>
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <h3>Input Data Anak</h3>
                <form action="<?= base_url('user/input_hasil'); ?>" method="POST">
                    <table class="input_anak">
                        <tbody valign="center">
                            <tr>
                                <td>Nama Anak
                                    <label>*</label>
                                </td>
                                <td width="1%">:</td>
                                <td>
                                    <input type="hidden" name="id" value="<?= $id ?>" class="form-control data" readonly>
                                    <input type="name" name="nama_anak" value="<?= $nama ?>" class="form-control data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin <label>*</label></td>
                                <td>:</td>
                                <td>
                                    <?php if ($jk == 'P') { ?>
                                        <input type="name" name="jk" value="Perempuan" class="form-control data" readonly>
                                    <?php } else { ?>
                                        <input type="name" name="jk" value="Laki-Laki" class="form-control data" readonly>
                                    <?php } ?>
                                    <!-- <select name="jk" id="" class="form-control data" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="P">Perempuan</option>
                                        <option value="L">Laki-Laki</option>
                                    </select> -->
                                </td>
                            </tr>
                            <?php foreach ($variabel as $v) { ?>
                                <tr>
                                    <td><?= $v['variabel'] ?></td>
                                    <td>:</td>
                                    <td>
                                        <input name="idvar[]" type="hidden" id="idvar[]" value="<?php echo "$v[idvariabel]"; ?>" />
                                        <input name="nilai[]" type="text" id="nilai[]" class="form-control data_anak" autocomplete='off' />
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <?php

                                        if ($v['variabel'] == "Umur") {

                                            echo "$v[atr1] = $v[nilai1]-$v[nilai11]<br />";
                                            echo "$v[atr2] = $v[nilai2]-$v[nilai22]<br />";
                                            echo "$v[atr3] = $v[nilai3]-$v[nilai33]<br />";
                                            echo "$v[atr4] = $v[nilai4]-$v[nilai44]<br />";
                                            echo "$v[atr5] = $v[nilai5]-$v[nilai55]<br />";
                                        } else {

                                            echo "$v[atr1] = $v[nilai1]-$v[nilai11]<br />";
                                            echo "$v[atr2] = $v[nilai2]-$v[nilai22]<br />";
                                            echo "$v[atr3] = $v[nilai3]-$v[nilai33]<br />";
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="submit col-lg-12">
                        <input type="submit" name="submit" value="Diagnosa" id="" class="btn btn-success" width="300px">
                        <input type="reset" name="reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>