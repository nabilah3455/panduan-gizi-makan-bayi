<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            //validasi lolos
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );

        $user = $this->db->get_where('admin', ['username' => $username])->row_array();
        // $pass = $this->db->get_where('admin', ['password' => $password])->row_array();

        // $cek = $this->modlogin->cek_login("admin", $where)->num_rows();
        if ($user > 0) {
            if (password_verify($password, $user['password'])) {
                $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                );

                $this->session->set_userdata($data_session);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert"><center><h4>Selamat Datang di Aplikasi Panduan Gizi Makanan Balita<h4></center></div>');

                redirect("dashboard");
            } else {
                // var_dump($user);
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-bordered" role="alert">Username atau Password Salah!</div>');
                redirect('login');
            }
        }
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-bordered" role="alert">Username atau Password Salah!</div>');
        redirect('login');
    }

    public function register()
    {
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[admin.username]', [
            'is_unique' => 'Username sudah ada, mohon isi dengan nama username lain'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('register_admin');

            // var_dump($tanggal);
            // die();
        } else {
            $tlp = htmlspecialchars($this->input->post('tlp', true));
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];

            // var_dump($tlp);
            // die();

            $this->moduser->register($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Register Berhasil, Silahkan Login</center></div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');

        // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Berhasil Logout</center></div>');
        redirect('login');
    }
}
