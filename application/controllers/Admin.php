<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        'tambah' => base_url('user/tambah_admin'),
        'data_admin' => $this->moduser->get_admin()
        );
    
        $this->template->back('back/data_admin', $data);
    }

    public function insert_admin()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $this->moduser->insert_admin($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Admin Berhasil Ditambah! </center></div>');
        redirect('user', 'refresh');
    }

    public function update_admin()
    {
        $id = $this->input->post('id_admin');

        $data = array(
            'id_admin' => $id,
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        $this->modmenu->update_menu($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Menu Berhasil Diubah! </center></div>');
        redirect('menu', 'refresh');
    }

    public function delete()
    {
        $id = $this->input->get('id');

        $this->modmenu->hapus_menu($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Menu Telah Dihapus! </center></div>');
        redirect('menu', 'refresh');
    }
}