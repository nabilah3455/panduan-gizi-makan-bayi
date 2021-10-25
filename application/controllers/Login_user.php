<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'pass_user', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login_user');
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
            'pass_user' => $password
        );

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        // $pass = $this->db->get_where('admin', ['password' => $password])->row_array();

        if ($user > 0) {
            if (password_verify($password, $user['pass_user'])) {
                $data_session = array(
                    'nama' => $username,
                    'status' => "login_user"
                );

                $this->session->set_userdata($data_session);
                $this->session->set_flashdata('message', '<label><center>Selamat Datang di Aplikasi Panduan Gizi Makanan Balita</center></label>');
                // var_dump($data_session);
                redirect("user");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-bordered">Username atau Password Salah!</div>');
                redirect('login_user');
            }
        }
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-bordered">Username atau Password Salah!</div>');
        redirect('login_user');
    }

    public function register()
    {
        $this->form_validation->set_rules('nama_anak', 'nama_anak', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('tinggi_badan_kelahiran', 'tinggi_badan_kelahiran', 'required|trim');
        $this->form_validation->set_rules('berat_badan_kelahiran', 'berat_badan_kelahiran', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'Username sudah ada, mohon isi dengan nama username lain'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('register_user');

            // var_dump($data);
            // die();
        } else {
            $data = [
                'nama_user' => htmlspecialchars($this->input->post('nama_anak', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'pass_user' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
                'berat_badan_kelahiran' => htmlspecialchars($this->input->post('berat_badan_kelahiran', true)),
                'tinggi_badan_kelahiran' => htmlspecialchars($this->input->post('tinggi_badan_kelahiran', true)),
            ];

            // var_export($data);
            // die();


            $this->moduser->register_user($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Register Berhasil, Silahkan Login</center></div>');
            redirect('login_user');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Berhasil Logout</center></div>');
        redirect('login_user');
    }
}
