<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
            'self' => base_url('dashboard')
        );
        $this->template->back('back/dashboard', $data);
    }
}
