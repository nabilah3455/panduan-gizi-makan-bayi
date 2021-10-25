<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modbahan extends CI_Model
{
    function get_bahan()
    {
        $q = $this->db->query("SELECT * FROM kandungan_gizi_bahan_mpasi ORDER BY id_bahan DESC");

        return $q->result_array();
    }

    function data_bahan($id)
    {
        $q = $this->db->query("SELECT * FROM kandungan_gizi_bahan_mpasi WHERE id_bahan='$id'");

        return $q->result_array();
    }

    function insert_bahan($data)
    {
        if ($this->db->insert('kandungan_gizi_bahan_mpasi', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }

    function update_bahan($id, $data)
    {
        $this->db->where('id_bahan', $id);
        $q = $this->db->update('kandungan_gizi_bahan_mpasi', $data);

        return $q;
    }

    function hapus_bahan($id)
    {
        $q = $this->db->where('id_bahan', $id)->delete('kandungan_gizi_bahan_mpasi');
        return $q;
    }

    function bahan($number, $offset, $nama_bahan)
    { 
        if($nama_bahan == null){
        return $query = $this->db->get('kandungan_gizi_bahan_mpasi', $number, $offset)->result();
        }else{
           $q = $this->db->query("SELECT * FROM kandungan_gizi_bahan_mpasi WHERE nama_bahan LIKE '%$nama_bahan%' OR kandungan_bahan LIKE '%$nama_bahan%'");

            return $q->result();
        }
    }

    function jml_bahan($jml)
    {
        if($jml == null){
            return $this->db->get('kandungan_gizi_bahan_mpasi')->num_rows();
        }else{
            //  $this->db->like('nama_bahan', $jml);
            //  $this->db->like('kandungan_bahan', $jml, 'both');
            //  $q = $this->db->get('kandungan_gizi_bahan_mpasi')->num_rows();

  $q = $this->db->query("SELECT * FROM kandungan_gizi_bahan_mpasi WHERE nama_bahan LIKE '%$jml%' OR kandungan_bahan LIKE '%$jml%'");

        return $q->num_rows();
        // return $q;
        }
    }

    function total_bahan()
    {
        return $this->db->get('kandungan_gizi_bahan_mpasi')->num_rows();
    }
}
