<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Moduser extends CI_Model
{
    function get_admin()
    {
        $q = $this->db->query("SELECT * FROM admin");

        return $q->result_array();
    }

    function get_berita()
    {
        $q = $this->db->query("SELECT * FROM mpasi_news ORDER BY id_news DESC limit 6");

        return $q->result_array();
    }

    function insert_admin($data)
    {
        if ($this->db->insert('admin', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }
    
    function register_user($data)
    {
        if ($this->db->insert('user', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }
    
    function register($data)
    {
        if ($this->db->insert('admin', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }

    function update_bahan($id, $data)
    {
        $this->db->where('id_bahan', $id);
        $q = $this->db->update('bahan_mpasi', $data);

        return $q;
    }

    function hapus_bahan($id)
    {
        $q = $this->db->where('id_bahan', $id)->delete('bahan_mpasi');
        return $q;
    }

    function data_anak($nama)
    {
        $q = $this->db->query("SELECT *, DATE_FORMAT(tgl_lahir, '%d %M %Y') as tgl FROM user where nama_user='$nama' LIMIT 1");

        return $q->result_array();
    }

    function update_profil($id, $data)
    {
        $this->db->where('id_user', $id);
        $q = $this->db->update('user', $data);

        return $q;
    }

    function jml_anak()
    {
        $q = $this->db->query("SELECT COUNT(*) as total, (select count(*) from user where jenis_kelamin='P') as perempuan, (select count(*) from user where jenis_kelamin='L') as laki from user");

        return $q->result_array();
    }
}
