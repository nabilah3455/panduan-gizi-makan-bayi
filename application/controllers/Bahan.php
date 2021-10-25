<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }


        $this->load->helper(array('form', 'url'));
    }
    
    public function index()
    {
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['username'],
            'tambah' => base_url('bahan/tambah'),
            'data_bahan' => $this->modbahan->get_bahan()
        );
        $this->template->back('back/bahan_mpasi', $data);

        // var_dump($data['nama']);
        // die();
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['username'],
            'back' => base_url('bahan')
        );
        $this->template->back('back/tambah_bahan', $data);
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['username'],
            'tambah' => base_url('bahan/tambah'),
            'data_bahan' => $this->modbahan->data_bahan($id),
            'back' => base_url('bahan')
        );

        $this->template->back('back/edit_bahan', $data);
    }

    public function insert_bahan()
    {
        $data = array(
            'id_bahan' => $this->input->post('id_bahan'),
            'nama_bahan' => $this->input->post('nama_bahan'),
            'kandungan_bahan' => $this->input->post('kandungan_bahan')
        );
        $this->modbahan->insert_bahan($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Bahan Berhasil Ditambah! </center></div>');
        redirect('bahan', 'refresh');
    }

    public function update_bahan()
    {
        $id = $this->input->post('id_bahan');

        $data = array(
            'id_bahan' => $id,
            'nama_bahan' => $this->input->post('nama_bahan'),
            'kandungan_bahan' => $this->input->post('kandungan_bahan')
        );

        $this->modbahan->update_bahan($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Bahan Berhasil Diubah! </center></div>');
        redirect('bahan', 'refresh');
    }

    public function delete()
    {
        $id = $this->input->get('id');

        $this->modbahan->hapus_bahan($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Bahan Telah Dihapus! </center></div>');
        redirect('bahan', 'refresh');
    }
}
