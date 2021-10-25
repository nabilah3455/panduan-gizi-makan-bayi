<style>
    .judul h1 {
        text-align: center;
        padding-top: 2rem;
        font-size: 59px;
        font-weight: bold;
    }

    .input_anak td {
        padding-top: 1rem;
        font-size: 16px;
        font-weight: bold;
        /* width: 5%; */
        /* padding-right: 1rem; */
    }

    .label {
        color: brown;
    }

    .hasil table{
        font-size: 15px;
        width: 100px;
    }

    .total {
        text-align: center;
        padding-top: 2rem;
        font-size: 15px;
    }

    .total b {
        color: black;
    }

    h4 {
        font-weight: bold;
        text-align: center;
        padding-top: 1rem;
    }

    .nilai{
        font-size: 10px;
    }
</style>

<h3>Hasil Kalkulator Nilai Gizi</h3>
<div class="input_anak">
    <?php foreach ($data_anak as $d) { ?>
        <table>
            <tr>
                <td width="40%">Nama Anak</td>
                <td>:</td>
                <td><?= $d['nama_user'] ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?php if ($d['jenis_kelamin'] == 'P') { ?>
                        Perempuan
                    <?php } else { ?>
                        Laki-Laki
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Kelahiran</td>
                <td>:</td>
                <td><?= $d['tgl_lahir'] ?></td>
            </tr>
            <?php foreach ($variabel as $v) {
                // var_dump($v['variabel']);
                // die();
                $n1 = $variabel1;
                foreach ($n1 as $var) {
                    $nilai = $this->modgizi->get_nilai2($id, $var['idvariabel'], $tgl);
                    foreach ($nilai as $n) {
            ?>
                        <tr style="page-break-after: always;">
                            <td><?= $n['variabel'] ?></td>
                            <td>:</td>
                            <td><?= $n['nilai'] ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="label"><?= $n['predikat'] ?> &nbsp;
                                <?php if (empty($v['atr3'])) {
                                    echo " ($n[nilai1] ; $n[nilai2]) ";
                                } else {
                                    echo " ($n[nilai1] ; $n[nilai2] ; $n[nilai3]) ";
                                } ?>
                            </td>

                        </tr>
            <?php }
                }
            } ?>
        </table>
    <?php  } ?>
</div>
<div class="hasil">
<h4>Tabel Nilai Gizi</h4>
<table border="1" cellpadding="0" cellspacing="1" class="" width="">
    <thead align="center">
    <tr>
        <th width="">Nama Rule</th>
        <th width="">Aturan (Rule)</th>
    </tr>
    </thead>
    <?php foreach ($rule as $b) { ?>
        <tr>
            <td width="">
                <div align="center"><?php echo "$b[idrule]"; ?></div>
            </td>
            <td width="240"><?php
                // $z = mysqli_num_rows(mysqli_query($koneksi, "select * from rule1 where idrule='$b[0]'"));
                $z = $this->modgizi->get_rule1($b['idrule']);
                // $c = mysqli_query($koneksi, "select * from rule1 where idrule='$b[0]' order by idvariabel asc");
                $c = $this->modgizi->get_rule2($b['idrule']);
                // var_dump($c);
                // die();
                $i = 1;
                foreach ($c as $d) {
                    // $e = mysqli_fetch_array(mysqli_query($koneksi, "select * from variabel where idvariabel='$d[idvariabel]'"));
                    $e = $this->modgizi->get_var_rule($d['idvariabel']);
                    foreach ($e as $y) {
                        if ($i == $z) {
                            echo "$y[variabel] <font color=black>$d[rule1]</font>";
                            echo "Then <font color=brown><strong>" . $b['maka'] . "</strong></font>";
                        } else {
                            echo "$y[variabel] <font color=black>$d[rule1]</font> <font color=red>And</font> ";
                        }
                    }
                    $i++;
                }

                ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <table border="1" cellpadding="0" cellspacing="0" width="200" class="">
                    <tr>
                        <?php
                        // $c = mysqli_query($koneksi, "select * from rule1 where idrule='$b[0]' order by idvariabel asc");
                        $c = $this->modgizi->get_rule2($b['idrule']);
                        foreach ($c as $d) {
                            // $var = mysqli_fetch_array(mysqli_query($koneksi, "select * from variabel where idvariabel='$d[idvariabel]'"));
                            $v = $this->modgizi->get_var_rule($d['idvariabel']);
                            foreach ($v as $var) {
                        ?>
                                <td width="90">
                                    <div align="center"><?php echo "$var[variabel]<br>($d[rule1])"; ?></div>
                                </td>
                        <?php
                            }
                        }
                        ?>
                        <td width="91">
                            <div align="center"> Min (&alpha;) </div>
                        </td>
                        <td width="62">
                            <div align="center">(z) </div>
                        </td>
                        <td width="62">
                            <div align="center">(&alpha;*z) </div>
                        </td>
                    </tr>
                    <tr>
                        <?php
                        $c = $this->modgizi->get_rule2($b['idrule']);
                        foreach ($c as $d) {

                            // $var = mysqli_fetch_array(mysqli_query($koneksi, "select * from variabel where idvariabel='$d[idvariabel]'"));
                            $v = $this->modgizi->get_variabel2($d['idvariabel']);
                            foreach ($v as $var) {
                                // $t12 = mysqli_fetch_array(mysqli_query($koneksi, "select * from nilai where idpasien='$_GET[id]' and  idvariabel='$d[idvariabel]' "));
                                $t = $this->modgizi->data_kalkulator($id, $d['idvariabel']);
                                foreach ($t as $t12) {
                                    if ($d['rule1'] == $var['atr1']) {
                                        $t13 = $t12['nilai1'];
                                    } else if ($d['rule1'] == $var['atr2']) {
                                        $t13 = $t12['nilai2'];
                                    } else {
                                        $t13 = $t12['nilai3'];
                                    }
                                }
                            }
                            // var_dump($b['idrule']);
                            // die();
                            $this->db->query("INSERT into min values ('$id','$b[idrule]','$t13')");

                        ?>
                            <td width="180">
                                <div align="center"><?php echo "$t13"; ?></div>
                            </td>
                        <?php
                        }


                        // $min = mysqli_fetch_array(mysqli_query($koneksi, "select * from min where idpasien='$_GET[id]' and idrule='$b[idrule]' order by min asc"));
                        $m = $this->modgizi->get_min($id, $b['idrule']);
                        // var_dump($m);
                        // die();
                        foreach ($m as $min) {

                            // $tmin = mysqli_num_rows(mysqli_query($koneksi, "select * from min1 where idpasien='$_GET[id]' and idrule='$b[0]'"));
                            $tmin = $this->modgizi->get_tmin($id, $b['idrule']);

                            // var_dump($tmin);
                            // die();

                            if ($tmin == 0) {
                                $this->db->query("INSERT into min1 values ('$id','$b[idrule]','$min[min]')");
                            } else {
                                $this->db->query("UPDATE min1 set min='$min[min]' where id_user='$id' and idrule='$b[idrule]' ");
                            }

                            $this->db->query("DELETE from min where id_user='$id' and idrule='$b[idrule]'");
                        ?>
                            <td>
                                <div align="center">
                                    <?php echo $min['min']; ?>
                                </div>
                            </td>

                            <?php

                            // $oke = mysqli_fetch_array(mysqli_query($koneksi, "select * from var_output"));
                            $o = $this->modgizi->get_var_output();
                            foreach ($o as $oke) {
                                if ($b['daerah'] == 1) {
                                    $z = $oke['nilai11'] - ($min['min'] * ($oke['nilai11'] - $oke['nilai2']));
                                } elseif ($b['daerah'] == 2) {
                                    $turun = $oke['nilai22'] - ($min['min'] * ($oke['nilai22'] - $oke['nilai3']));
                                    $naik = $oke['nilai2'] + ($min['min'] * ($oke['nilai11'] - $oke['nilai2']));
                                    if ($naik >= $turun) {
                                        $z = $turun;
                                    } else {
                                        $z = $naik;
                                    }
                                } elseif ($b['daerah'] == 3) {
                                    $turun = $oke['nilai33'] - ($min['min'] * ($oke['nilai33'] - $oke['nilai4']));
                                    $naik = $oke['nilai3'] + ($min['min'] * ($oke['nilai22'] - $oke['nilai3']));
                                    if ($naik >= $turun) {
                                        $z = $turun;
                                    } else {
                                        $z = $naik;
                                    }
                                } elseif ($b['daerah'] == 4) {
                                    $turun = $oke['nilai44'] - ($min['min'] * ($oke['nilai44'] - $oke['nilai5']));
                                    $naik = $oke['nilai4'] + ($min['min'] * ($oke['nilai33'] - $oke['nilai4']));
                                    if ($naik >= $turun) {
                                        $z = $turun;
                                    } else {
                                        $z = $naik;
                                    }
                                } elseif ($b['daerah'] == 5) {
                                    $turun = $oke['nilai55'] - ($min['min'] * ($oke['nilai55'] - $oke['nilai5']));
                                    $naik = $oke['nilai5'] + ($min['min'] * ($oke['nilai44'] - $oke['nilai5']));
                                    if ($naik >= $turun) {
                                        $z = $turun;
                                    } else {
                                        $z = $naik;
                                    }
                                } else {
                                    $z = $oke['nilai5'] + ($min['min'] * ($oke['nilai44'] - $oke['nilai5']));
                                }

                            ?>
                                <td>
                                    <div align="center">
                                        <?php echo $z; ?>
                                    </div>
                                </td>
                                <?php
                                $pred = $z * $min['min'];

                                // var_dump($pred);
                                // die();
                                ?>
                                <td>
                                    <div align="center">
                                        <?php echo $pred; ?>
                                    </div>
                                </td>
                    </tr>
                </table>
                <br />
            </td>
        </tr>
<?php

                            }
                        }
                        error_reporting(0);
                        // $alpa = 1;
                        // $pr = 1;
                        $alpa += $min['min'];
                        $pr += $pred;
                    }

?>
<tr>
    <td colspan="3" align="center"><?php

                                    $defuzzy = $pr / $alpa;

                                    // $def = mysqli_num_rows(mysqli_query($koneksi, "select * from defuzzy where idpasien='$_GET[id]'"));
                                    $def = $this->modgizi->get_defuzzy($id);
                                    $tgl_sekarang = date('Y-m-d');
                                    $tgl = date('Y-m');
                                    // foreach($d as $def){
                                    if ($def == 0) {
                                        $this->db->query("INSERT into defuzzy values ('$id','$defuzzy', '$tgl_sekarang')");
                                    } else {
                                        $this->db->query("UPDATE defuzzy set defuzzy='$defuzzy' where id_user='$id' AND tgl_cek LIKE '$tgl%'");
                                    }
                                    // }

                                    // $def1 = mysqli_fetch_array(mysqli_query($koneksi, "select * from defuzzy where idpasien='$_GET[id]'"));
                                    $def_1 = $this->modgizi->get_def1($id);
                                    foreach ($def_1 as $def1) {
                                        $defuzzy = $def1['defuzzy'];

                                        // $solusi = mysqli_fetch_array(mysqli_query($koneksi, "select * from var_output "));
                                        $s = $this->modgizi->get_solusi();
                                        foreach ($s as $solusi) {

                                            // 0-20
                                            if ($defuzzy <= $solusi['nilai2']) {
                                                $naik = 0;
                                                $turun = 1;
                                                $solusi1 = $solusi['atr1'];
                                                $kendali1 = $solusi['kendali1'];
                                            }
                                            // 20-30
                                            elseif ($defuzzy > $solusi['nilai2'] and $defuzzy <= $solusi['nilai11']) {
                                                $naik = ($defuzzy - $solusi['nilai2']) / ($solusi['nilai11'] - $solusi['nilai2']);
                                                $turun = ($solusi['nilai11'] - $defuzzy) / ($solusi['nilai11'] - $solusi['nilai2']);
                                                if ($naik <= $turun) {
                                                    $solusi1 = $solusi['atr2'];
                                                    $kendali1 = $solusi['kendali2'];
                                                } else {
                                                    $solusi1 = $solusi['atr1'];
                                                    $kendali1 = $solusi['kendali1'];
                                                }
                                            }
                                            // 30-50
                                            elseif ($defuzzy > $solusi['nilai11'] and $defuzzy <= $solusi['nilai22']) {
                                                $naik = ($defuzzy - $solusi['nilai11']) / ($solusi['nilai22'] - $solusi['nilai11']);
                                                $turun = ($solusi['nilai22'] - $defuzzy) / ($solusi['nilai22'] - $solusi['nilai11']);
                                                if ($naik <= $turun) {
                                                    $solusi1 = $solusi['atr3'];
                                                    $kendali1 = $solusi['kendali3'];
                                                } else {
                                                    $solusi1 = $solusi['atr2'];
                                                    $kendali1 = $solusi['kendali2'];
                                                }
                                            }
                                            // 50-60
                                            elseif ($defuzzy > $solusi['nilai22'] and $defuzzy <= $solusi['nilai33']) {
                                                $naik = ($defuzzy - $solusi['nilai22']) / ($solusi['nilai33'] - $solusi['nilai22']);
                                                $turun = ($solusi['nilai33'] - $defuzzy) / ($solusi['nilai33'] - $solusi['nilai22']);
                                                if ($naik <= $turun) {
                                                    $solusi1 = $solusi['atr4'];
                                                    $kendali1 = $solusi['kendali4'];
                                                } else {
                                                    $solusi1 = $solusi['atr3'];
                                                    $kendali1 = $solusi['kendali3'];
                                                }
                                            }
                                            // 60-80
                                            elseif ($defuzzy > $solusi['nilai44'] and $defuzzy <= $solusi['nilai5']) {
                                                $naik = ($defuzzy - $solusi['nilai44']) / ($solusi['nilai5'] - $solusi['nilai44']);
                                                $turun = ($solusi['nilai5'] - $defuzzy) / ($solusi['nilai5'] - $solusi['nilai44']);
                                                if ($naik <= $turun) {
                                                    $solusi1 = $solusi['atr5'];
                                                    $kendali1 = $solusi['kendali5'];
                                                } else {
                                                    $solusi1 = $solusi['atr4'];
                                                    $kendali1 = $solusi['kendali4'];
                                                }
                                            } else {
                                                $naik = 1;
                                                $solusi1 = $solusi['atr5'];
                                                $kendali1 = $solusi['kendali5'];
                                            }
                                            /////////////////////////////////

                                        }
                                    }

                                    // $data1 = mysqli_fetch_array($hasil1);
                                    // echo "Defuzzy : $pr/$alpa=$defuzzy<br /><br />";
                                    // echo "Hasil Konsultasi Gizi Anak Anda Adalah : <strong>$solusi1</strong><br />";
                                    // echo "Solusinya dengan Cara  : <strong>$kendali1</strong><br />";



                                    ?></td>
</tr>
</table>

<div class="total">
    <?php
    echo "Defuzzy :<strong> $pr/$alpa=$defuzzy</strong><br /><br />";
    echo "Hasil Konsultasi Gizi Anak Anda Adalah : <strong>$solusi1</strong><br />";
    echo "Solusinya dengan Cara  : <strong>$kendali1</strong><br />";

    ?>
    <!-- <a href="#" class="btn btn-info">Lihat Rekomendasi Menu MPASI</a> -->
</div>