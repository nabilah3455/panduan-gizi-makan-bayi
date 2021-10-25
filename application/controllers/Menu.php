<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
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
            'tambah' => base_url('menu/tambah'),
            'menu_6' => $this->modmenu->get_menu_6(),
            'menu_8' => $this->modmenu->get_menu_8(),
            'menu_9' => $this->modmenu->get_menu_9(),
            'menu_10' => $this->modmenu->get_menu_10(),
            'menu_11' => $this->modmenu->get_menu_11(),
            'menu_12' => $this->modmenu->get_menu_12()
        );
        $this->template->back('back/menu_mpasi', $data);
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['username'],
            'back' => base_url('menu')
        );
        $this->template->back('back/tambah_menu_mpasi', $data);
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['username'],
            'data_menu' => $this->modmenu->data_menu($id),
            'back' => base_url('menu')
        );

        $this->template->back('back/edit_menu_mpasi', $data);
    }

    public function insert_menu()
    {
        $upload_image = $_FILES['image']['name'];

        if ('$upload_image') {
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/menu/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto', $new_image);
            } else {
                // echo $this->upload->display_errors();
            }
        }

        $data = array(
            'judul_menu' => $this->input->post('judul_menu'),
            'bahan_menu' => $this->input->post('bahan'),
            'resep_menu' => $this->input->post('resep'),
            'usia' => $this->input->post('usia')
        );
        $this->modmenu->insert_menu($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Menu Berhasil Ditambah! </center></div>');
        redirect('menu', 'refresh');
    }

    public function update_menu()
    {
        $id = $this->input->post('id_menu');

        $data = array(
            'id_menu' => $id,
            'judul_menu' => $this->input->post('judul_menu'),
            'bahan_menu' => $this->input->post('bahan'),
            'resep_menu' => $this->input->post('resep'),
            'usia' => $this->input->post('usia')
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
