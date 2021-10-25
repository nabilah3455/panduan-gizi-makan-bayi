<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modgizi extends CI_Model
{
    function get_gizi()
    {
        $q = $this->db->query("SELECT * FROM kalkulator_gizi ORDER BY id_hitung DESC");

        return $q->result_array();
    }

    function insert_nilai($data)
    {
        if ($this->db->insert('kalkulator_gizi', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = 'belum masuk';
        }
        return $e;
    }

    function data_anak($id, $tgl)
    {
        $q = $this->db->query("SELECT u.*, k.*, DATE_FORMAT(u.tgl_lahir, '%d %M %Y') as tgl_lahir FROM user u, kalkulator_gizi k WHERE u.id_user=k.id_user AND u.id_user='$id' and k.tgl_cek='$tgl' LIMIT 1");

        return $q->result_array();
    }

    function get_anak($id)
    {
        $q = $this->db->query("SELECT u.*, k.*, DATE_FORMAT(u.tgl_lahir, '%d %M %Y') as tgl_lahir FROM user u, kalkulator_gizi k WHERE u.id_user=k.id_user AND u.id_user='$id' LIMIT 1");

        return $q->result_array();
    }

    function get_variabel()
    {
        $q = $this->db->query("SELECT * FROM variabel ORDER BY idvariabel ASC");

        return $q->result_array();
    }

    function get_nilai_variabel()
    {
        $q = $this->db->query("SELECT * FROM variabel ORDER BY idvariabel ASC LIMIT 1");

        return $q->result_array();
    }

    function get_idvariabel()
    {
        $q = $this->db->query("SELECT idvariabel FROM variabel");

        return $q->result_array();
    }

    function get_variabel2($variabel)
    {
        $q = $this->db->query("SELECT * FROM variabel WHERE idvariabel='$variabel'");

        return $q->result_array();
    }

    function get_user()
    {
        $q = $this->db->query("SELECT * FROM user ORDER BY id_user ASC LIMIT 1");

        return $q->result_array();
    }

    function get_variabel1()
    {
        $q = $this->db->query("SELECT idvariabel FROM variabel ORDER BY idvariabel asc");

        return $q->result_array();
    }

    function get_nilai($id, $b)
    {
        $q = $this->db->query("SELECT k.*, v.variabel FROM kalkulator_gizi k, variabel v WHERE v.idvariabel = k.idvariabel AND k.id_user='$id' AND k.idvariabel='$b'");

        return $q->result_array();
    }

    function get_nilai2($id, $b, $tgl)
    {
        $q = $this->db->query("SELECT k.*, v.variabel FROM kalkulator_gizi k, variabel v WHERE v.idvariabel = k.idvariabel AND k.id_user='$id' AND k.idvariabel='$b' AND k.tgl_cek LIKE '$tgl%' LIMIT 1");

        return $q->result_array();
    }

    function get_nilai1($id, $b)
    {
        $q = $this->db->query("SELECT * FROM kalkulator_gizi WHERE id_user='$id'");

        return $q->result_array();
    }

    function get_rule()
    {
        $q = $this->db->query("SELECT * FROM rule");

        return $q->result_array();
    }

    function get_rule1($b)
    {
        $q = $this->db->query("SELECT * FROM rule1 WHERE idrule='$b'");

        return $q->num_rows();
    }

    function data_rule1($b)
    {
        $q = $this->db->query("SELECT * FROM rule1 WHERE idrule='$b' ORDER BY idvariabel ASC");

        return $q->result_array();
    }

    function get_data_rule1($b)
    {
        $q = $this->db->query("SELECT * FROM rule1 WHERE idrule='$b' LIMIT 3");

        return $q->result_array();
    }

    function get_var_output()
    {
        $q = $this->db->query("SELECT * FROM var_output");

        return $q->result_array();
    }

    function get_rule2($b)
    {
        $q = $this->db->query("SELECT * FROM rule1 WHERE idrule='$b' ORDER BY idvariabel ASC");

        return $q->result_array();
    }

    function get_var_rule($d)
    {
        $q = $this->db->query("SELECT * from variabel where idvariabel='$d'");

        return $q->result_array();
    }

    function data_kalkulator($id, $d)
    {
        $q = $this->db->query("SELECT * from kalkulator_gizi where id_user='$id' and idvariabel='$d' ");

        return $q->result_array();
    }

    function get_min($id, $b)
    {
        $q = $this->db->query("SELECT * from min where id_user='$id' and idrule='$b' order by min asc LIMIT 1");

        return $q->result_array();
    }

    function get_tmin($id, $b)
    {
        $q = $this->db->query("SELECT * from min1 where id_user='$id' and idrule='$b' order by min asc LIMIT 1");

        return $q->num_rows();
    }

    function get_defuzzy($id)
    {
        $q = $this->db->query("SELECT * from defuzzy where id_user='$id'");

        return $q->num_rows();
    }

    function get_def1($id)
    {
        $q = $this->db->query("SELECT * from defuzzy where id_user='$id'");

        return $q->result_array();
    }

    function get_solusi()
    {
        $q = $this->db->query("SELECT * from var_output");

        return $q->result_array();
    }

    function nama_anak($id)
    {
        $q = $this->db->query("SELECT nama_user from user WHERE id_user='$id'");

        return $q->result();
    }

    function jml_anak($id, $tgl)
    {
        $q = $this->db->query("SELECT * from kalkulator_gizi WHERE id_user='$id' AND tgl_cek LIKE '$tgl%'");

        return $q->num_rows();
    }

    function get_umur()
    {
        $q = $this->db->query("SELECT * from variabel WHERE idvariabel='1'");

        return $q->result_array();
    }

    function get_tinggi()
    {
        $q = $this->db->query("SELECT * from variabel WHERE idvariabel='3'");

        return $q->result_array();
    }

    function get_berat()
    {
        $q = $this->db->query("SELECT * from variabel WHERE idvariabel='2'");

        return $q->result_array();
    }

    function get_nilai_gizi()
    {
        $q = $this->db->query("SELECT * from var_output");

        return $q->result_array();
    }

    function hapus_rule($id)
    {
        $q = $this->db->where('idrule', $id)->delete('rule');
        $q = $this->db->where('idrule', $id)->delete('rule1');
        return $q;
    }

    function update_umur($id, $data)
    {
        $this->db->where('idvariabel', $id);
        $q = $this->db->update('variabel', $data);

        return $q;
    }

    function update_berat($id, $data)
    {
        $this->db->where('idvariabel', $id);
        $q = $this->db->update('variabel', $data);

        return $q;
    }

    function update_rule_berat($idrule, $id, $berat)
    {
        $this->db->where('idrule', $idrule);
        $this->db->where('idvariabel', $id);
        $q = $this->db->update('rule1', $berat);

        return $q;
    }

    function update_rule_tinggi($idrule, $id, $tinggi)
    {
        $this->db->where('idrule', $idrule);
        $this->db->where('idvariabel', $id);
        $q = $this->db->update('rule1', $tinggi);

        return $q;
    }

    function update_rule_umur($idrule, $id, $umur)
    {
        $this->db->where('idrule', $idrule);
        $this->db->where('idvariabel', $id);
        $q = $this->db->update('rule1', $umur);

        return $q;
    }

    function update_rule($id, $rule1)
    {
        $this->db->where('idrule', $id);
        $q = $this->db->update('rule', $rule1);

        return $q;
    }

    function update_gizi($data)
    {
        // $this->db->where('idvariabel', $id);
        $q = $this->db->update('var_output', $data);

        return $q;
    }

    function tambah_rule($rule1)
    {
        if ($this->db->insert('rule', $rule1)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = 'belum masuk';
        }
        return $e;
    }

    function tambah_rule_umur($umur)
    {
        if ($this->db->insert('rule1', $umur)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = 'belum masuk';
        }
        return $e;
    }

    function tambah_rule_berat($berat)
    {
        if ($this->db->insert('rule1', $berat)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = 'belum masuk';
        }
        return $e;
    }

    function tambah_rule_tinggi($tinggi)
    {
        if ($this->db->insert('rule1', $tinggi)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = 'belum masuk';
        }
        return $e;
    }

    function data_grafik($tahun)
    {
        $q = $this->db->query("
        SELECT * FROM(
            SELECT CASE
                WHEN MONTH(tgl_cek) = 1 THEN 'Januari'
                WHEN MONTH(tgl_cek) = 2 THEN 'Februari'
                WHEN MONTH(tgl_cek) = 3 THEN 'Maret'
                WHEN MONTH(tgl_cek) = 4 THEN 'April'
                WHEN MONTH(tgl_cek) = 5 THEN 'Mei'
                WHEN MONTH(tgl_cek) = 6 THEN 'Juni'
                WHEN MONTH(tgl_cek) = 7 THEN 'Juli'
                WHEN MONTH(tgl_cek) = 8 THEN 'Agustus'
                WHEN MONTH(tgl_cek) = 9 THEN 'September'
                WHEN MONTH(tgl_cek) = 10 THEN 'Oktober'
                WHEN MONTH(tgl_cek) = 11 THEN 'November'
                ELSE 'Desember'
                END AS category,
                (select Count(*) from defuzzy where hasil_gizi='Gizi Buruk') as value1,
                (select Count(*) from defuzzy where hasil_gizi='Gizi Kurang') as value2,
                (select Count(*) from defuzzy where hasil_gizi='Gizi Normal') as value3,
                (select Count(*) from defuzzy where hasil_gizi='Gizi Lebih') as value4,
                (select Count(*) from defuzzy where hasil_gizi='Obesitas') as value5
            FROM defuzzy
            WHERE tgl_cek LIKE '$tahun%'
            GROUP BY MONTH(tgl_cek)
            )A
        ");

        return $q->result_array();
    }

    function gizi_buruk()
    {
        $q = $this->db->query("SELECT * from defuzzy where hasil_gizi='Gizi Buruk'");

        return $q->num_rows();
    }

    function gizi_kurang()
    {
        $q = $this->db->query("SELECT * from defuzzy where hasil_gizi='Gizi Kurang'");

        return $q->num_rows();
    }

    function gizi_normal()
    {
        $q = $this->db->query("SELECT * from defuzzy where hasil_gizi='Gizi Normal'");

        return $q->num_rows();
    }

    function gizi_lebih()
    {
        $q = $this->db->query("SELECT * from defuzzy where hasil_gizi='Gizi Lebih'");

        return $q->num_rows();
    }

    function obesitas()
    {
        $q = $this->db->query("SELECT * from defuzzy where hasil_gizi='Obesitas'");

        return $q->num_rows();
    }

    function dataanak()
    {
        $q = $this->db->query("SELECT *, DATE_FORMAT(tgl_lahir, '%d %M %Y') as tgl_lahir from user order by id_user desc");

        return $q->result_array();
    }

    function dataanak1($id)
    {
        $q = $this->db->query("SELECT *, DATE_FORMAT(tgl_lahir, '%d %M %Y') as tgl_lahir from user where id_user='$id'");

        return $q->result_array();
    }

    function gizi_anak($id)
    {
        $q = $this->db->query("SELECT *, DATE_FORMAT(tgl_cek, '%d %M %Y') as tgl from defuzzy where id_user='$id' ORDER BY id_defuzzy DESC");

        return $q->result_array();
    }
}
