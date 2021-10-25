<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modberita extends CI_Model
{
    function get_berita()
    {
        $q = $this->db->query("SELECT * FROM mpasi_news ORDER BY id_news DESC");

        return $q->result_array();
    }
   
    function jml_berita($jml)
    {
        if ($jml == null) {
            return $this->db->get('mpasi_news')->num_rows();
        }else{
        $this->db->where('judul_news', $jml);
        $q = $this->db->get('mpasi_news')->num_rows();

        return $q;
        }
    }

    function berita($number, $offset, $judul)
    {
        if ($judul == null) {
            return $q = $this->db->get('mpasi_news', $number, $offset)->result();
        }else{
            $this->db->like('judul_news',$judul, 'both');
            $q = $this->db->get('mpasi_news', $number, $offset)->result();

            return $q;
        }
    }
    
    function data_berita($id)
    {
        $q = $this->db->query("SELECT * FROM mpasi_news WHERE id_news='$id'");

        return $q->result_array();
    }

    function insert_berita($data)
    {
        if ($this->db->insert('mpasi_news', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }

    function update_berita($id, $data)
    {
        $this->db->where('id_news', $id);
        $q = $this->db->update('mpasi_news', $data);

        return $q;
    }

    function hapus_berita($id)
    {
        $q = $this->db->where('id_news', $id)->delete('mpasi_news');
        return $q;
    }

    function detail_berita($id)
    {
        $q = $this->db->query("SELECT * FROM mpasi_news WHERE id_news='$id'");

        return $q->result_array();
    }
}