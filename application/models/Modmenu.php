<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modmenu extends CI_Model
{
    function get_menu()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu ORDER BY id_menu");

        return $q->result_array();
    }

    function get_menu_6()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='6-7'");

        return $q->result_array();
    }

    function get_menu_8()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='8'");

        return $q->result_array();
    }

    function get_menu_9()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='9'");

        return $q->result_array();
    }

    function get_menu_10()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='10'");

        return $q->result_array();
    }

    function get_menu_11()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='11'");

        return $q->result_array();
    }

    function get_menu_12()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='12'");

        return $q->result_array();
    }

    function data_menu($id)
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE id_menu='$id'");

        return $q->result_array();
    }

    function insert_menu($data)
    {
        if ($this->db->insert('mpasi_menu', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }

    function update_menu($id, $data)
    {
        $this->db->where('id_menu', $id);
        $q = $this->db->update('mpasi_menu', $data);

        return $q;
    }

    function hapus_menu($id)
    {
        $q = $this->db->where('id_menu', $id)->delete('mpasi_menu');
        return $q;
    }

    function menu($number, $offset, $bulan)
    {
        // return $query = $this->db->get('mpasi_menu', $number, $offset)->result();
        if ($bulan == '6-7') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '8') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '9') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '10') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '11') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '12') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '13') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '14') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '15') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '16') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '17') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } elseif ($bulan == '18') {
            $q = $this->db->where('usia', $bulan)->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        } else {
            $q = $this->db->get('mpasi_menu', $number, $offset);
            return $q->result_array();
        }
    }

    function jml_menu1($judul_menu)
    {
        $this->db->like('judul_menu', $judul_menu, 'both');
        $q = $this->db->get('mpasi_menu')->num_rows();

        return $q;
    }

    function judul_menu($number, $offset, $judul_menu)
    {
        $this->db->like('judul_menu', $judul_menu, 'both');
        $q = $this->db->get('mpasi_menu', $number, $offset)->result_array();

        return $q;
    }

    function jml_menu($bulan)
    {
        if ($bulan == '6-7') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '8') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '9') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '10') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '11') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '12') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '13') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '14') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '15') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '16') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '17') {
            return $this->db->where('usia', $bulan)->get('mpasi_menu')->num_rows();
        } elseif ($bulan == '') {
            return $this->db->get('mpasi_menu')->num_rows();
            // } elseif($bulan == '') {
            //     $this->db->like('judul_menu', $bulan);
            //      $q = $this->db->get('mpasi_menu')->num_rows();

            //      return $q;
        }
        // return $this->db->get('mpasi_menu')->num_rows();
    }

    function detail_menu($id)
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE id_menu='$id'");

        return $q->result_array();
    }

    function menu1()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='6-7' LIMIT 1");

        return $q->result_array();
    }

    function menu2()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='8' LIMIT 1");

        return $q->result_array();
    }

    function menu3()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='9' LIMIT 1");

        return $q->result_array();
    }

    function total_menu()
    {
        $q = $this->db->get('mpasi_menu')->num_rows();

        return $q;
    }
}
