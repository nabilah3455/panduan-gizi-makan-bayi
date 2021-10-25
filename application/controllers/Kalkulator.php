<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kalkulator extends CI_Controller
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
        $tahun = date('Y');
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['username'],
            'tambah' => base_url('kalkulator/tambah'),
            'data_gizi' => $this->modgizi->get_gizi(),
            'umur' => $this->modgizi->get_umur(),
            'tinggi' => $this->modgizi->get_tinggi(),
            'berat' => $this->modgizi->get_berat(),
            'gizi' => $this->modgizi->get_nilai_gizi(),
            'rule' => $this->modgizi->get_rule(),
            'grafik' =>json_encode($this->modgizi->data_grafik($tahun)),
            'gizi_buruk' => $this->modgizi->gizi_buruk(),
            'gizi_kurang' => $this->modgizi->gizi_kurang(),
            'gizi_normal' => $this->modgizi->gizi_normal(),
            'gizi_lebih' => $this->modgizi->gizi_lebih(),
            'obesitas' => $this->modgizi->obesitas(),
            'data_anak' => $this->modgizi->dataanak(),
            'jml_anak' => $this->moduser->jml_anak()
        );

        // var_dump($data['jml_anak']);
        // die();
        $this->template->back('back/kalkulator_gizi', $data);
    }
    
    public function hasil_gizi()
    {
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('nama')])->row_array();
        $id = $this->input->get('id_user');
        $data = array(
            'nama' => $data['user']['username'],
            'data_anak' => $this->modgizi->dataanak1($id),
            'gizi_anak' => $this->modgizi->gizi_anak($id),
            'back' => base_url('kalkulator')
        );

        // var_dump($data['data_anak']);
        // die();
        $this->template->back('back/hasil_gizi', $data);
    }

    public function insert_menu()
    {
        $data = array(
            'id_menu' => $this->input->post('id_menu'),
            'judul_menu' => $this->input->post('judul_menu'),
            'bahan_menu' => $this->input->post('bahan'),
            'resep_menu' => $this->input->post('resep')
        );
        $this->modmenu->insert_menu($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Menu Berhasil Ditambah! </center></div>');
        redirect('menu', 'refresh');
    }
    
    public function update_umur()
    {
        $id = 1;
        $data = array(
            'idvariabel' => $id,
            'nilai1' => $this->input->post('nilai1'),
            'nilai2' => $this->input->post('nilai2'),
            'nilai3' => $this->input->post('nilai3'),
            'nilai4' => $this->input->post('nilai4'),
            'nilai5' => $this->input->post('nilai5'),
            'nilai11' => $this->input->post('nilai11'),
            'nilai22' => $this->input->post('nilai22'),
            'nilai33' => $this->input->post('nilai33'),
            'nilai44' => $this->input->post('nilai44'),
            'nilai55' => $this->input->post('nilai55')
        );

        $this->modgizi->update_umur($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Variabel Umur Berhasil Diubah! </center></div>');
        redirect('kalkulator', 'refresh');
    }
    
    public function update_tinggi()
    {
        $id = 3;
        $data = array(
            'idvariabel' => $id,
            'nilai1' => $this->input->post('nilai1'),
            'nilai2' => $this->input->post('nilai2'),
            'nilai3' => $this->input->post('nilai3'),
            'nilai11' => $this->input->post('nilai11'),
            'nilai22' => $this->input->post('nilai22'),
            'nilai33' => $this->input->post('nilai33')
        );

        $this->modgizi->update_tinggi($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Variabel TInggi Berhasil Diubah! </center></div>');
        redirect('kalkulator', 'refresh');
    }
    
    public function update_berat()
    {
        $id = 2;
        $data = array(
            'idvariabel' => $id,
            'nilai1' => $this->input->post('nilai1'),
            'nilai2' => $this->input->post('nilai2'),
            'nilai3' => $this->input->post('nilai3'),
            'nilai11' => $this->input->post('nilai11'),
            'nilai22' => $this->input->post('nilai22'),
            'nilai33' => $this->input->post('nilai33')
        );

        $this->modgizi->update_berat($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Variabel Berat Berhasil Diubah! </center></div>');
        redirect('kalkulator', 'refresh');
    }
    
    public function update_gizi()
    {
        // $id = 0;
        $data = array(
            // 'idvariabel' => $id,
            'nilai1' => $this->input->post('nilai1'),
            'nilai2' => $this->input->post('nilai2'),
            'nilai3' => $this->input->post('nilai3'),
            'nilai4' => $this->input->post('nilai4'),
            'nilai5' => $this->input->post('nilai5'),
            'nilai11' => $this->input->post('nilai11'),
            'nilai22' => $this->input->post('nilai22'),
            'nilai33' => $this->input->post('nilai33'),
            'nilai44' => $this->input->post('nilai44'),
            'nilai55' => $this->input->post('nilai55')
        );

        $this->modgizi->update_gizi($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Variabel Berat Berhasil Diubah! </center></div>');
        redirect('kalkulator', 'refresh');
    }
    
    public function update_rule()
    {
        $idrule = $this->input->post('idrule');
        $rule1 = array(
            'maka' => $this->input->post('maka'),
            'daerah' => $this->input->post('daerah')   
        );
       
        $berat = array(
            'rule1' => $this->input->post('berat')
        );
        $umur = array(
            'rule1' => $this->input->post('umur')
        );
        $tinggi = array(
            'rule1' => $this->input->post('tinggi')
        );

        // var_dump($tinggi);
        // die();

        $this->modgizi->update_rule($idrule, $rule1);
        $this->modgizi->update_rule_umur($idrule, 1, $umur);
        $this->modgizi->update_rule_berat($idrule, 2, $berat);
        $this->modgizi->update_rule_tinggi($idrule, 3, $tinggi);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Variabel Berat Berhasil Diubah! </center></div>');
        redirect('kalkulator', 'refresh');
    }
   
    public function tambah_rule()
    {
        $idrule = $this->input->post('idrule');
        $rule1 = array(
            'idrule' => $idrule,
            'maka' => $this->input->post('maka'),
            'daerah' => $this->input->post('daerah')   
        );
       
        $berat = array(
             'idrule' => $idrule,
             'idvariabel' => 2,
            'rule1' => $this->input->post('berat')
        );
        $umur = array(
             'idrule' => $idrule,
             'idvariabel' => 1,
            'rule1' => $this->input->post('umur')
        );
        $tinggi = array(
             'idrule' => $idrule,
             'idvariabel' => 3,
            'rule1' => $this->input->post('tinggi')
        );

        // var_dump($tinggi);
        // die();

        $this->modgizi->tambah_rule($rule1);
        $this->modgizi->tambah_rule_umur($umur);
        $this->modgizi->tambah_rule_berat($berat);
        $this->modgizi->tambah_rule_tinggi($tinggi);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Nilai Rule Berhasil Ditambah! </center></div>');
        redirect('kalkulator', 'refresh');
    }

    public function delete()
    {
        $id = $this->input->get('id');

        $this->modmenu->hapus_menu($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Menu Telah Dihapus! </center></div>');
        redirect('menu', 'refresh');
    }
    
    public function delete_rule()
    {
        $id = $this->input->get('idrule');

        // var_dump($id);
        // die();

        $this->modgizi->hapus_rule($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Rule Berhasil Dihapus! </center></div>');
        redirect('kalkulator', 'refresh');
    }
}
