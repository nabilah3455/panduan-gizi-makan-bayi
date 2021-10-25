<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login_user") {
            redirect(base_url("login_user"));
        }

        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['nama_user'],
            'title' => 'Home',
            'total_menu' => $this->modmenu->total_menu(),
            'total_bahan' => $this->modbahan->total_bahan(),
            'menu1' => $this->modmenu->menu1(),
            'menu2' => $this->modmenu->menu2(),
            'menu3' => $this->modmenu->menu3(),
        );

        // var_dump($data['nama']);
        // die();

        $this->template->front('front/index', $data);
    }

    public function profil()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('nama')])->row_array();
        $nama = $data['user']['nama_user'];
        $id = $data['user']['id_user'];
        $data = array(
            'nama' => $nama,
            'title' => 'Home',
            'data_anak' => $this->moduser->data_anak($nama),
            'gizi_anak' => $this->modgizi->gizi_anak($id)
        );

        $this->template->front('front/profil', $data);
    }

    public function update_profil()
    {
        $id = $this->input->post('id_user');;
        $data = array(
            'id_user' => $id,
            'nama_user' => $this->input->post('nama_user'),
            'jenis_kelamin' => $this->input->post('jk'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'berat_badan_kelahiran' => $this->input->post('berat'),
            'tinggi_badan_kelahiran' => $this->input->post('tinggi'),
        );

        $this->moduser->update_profil($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Anak Berhasil Di Ubah!</center></div>');
        redirect('user/profil', 'refresh');
    }

    public function berita()
    {
        if ($this->input->post('submit')) {
            $judul_berita = $this->input->post('cari');
        } else {
            $judul_berita = null;
        }
        $this->load->database();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . '/user/berita';
        $jumlah_data = $this->modberita->jml_berita($judul_berita);
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;
        $from = $this->uri->segment(3);

        $config['next_link'] = '<i class="ti-angle-right"></i>';
        $config['prev_link'] = '<i class="ti-angle-left"></i>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data = array(
            'data_berita' => $this->modberita->berita($config['per_page'], $from, $judul_berita),
            'banner' => base_url('assets/img/banner/jamie-coupaud-3fbI4ouy0Lw-unsplash.jpg'),
            'null' => base_url('assets/img/folder.png'),
            'total' => $config['total_rows']
        );

        // var_dump($jumlah_data);
        // die();

        $this->template->front('front/berita', $data);
    }

    public function menu()
    {
        $bulan = $this->input->get('bulan');
        if ($this->input->post('submit')) {
            $judul_menu = $this->input->post('cari');
            $jumlah_data = $this->modmenu->jml_menu1($judul_menu);
        } else {
            $judul_menu = null;
            $jumlah_data = $this->modmenu->jml_menu($bulan);
        }

        $this->load->database();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'user/menu';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 20;
        $from = $this->uri->segment(3);

        $config['next_link'] = '<i class="ti-angle-right"></i>';
        $config['prev_link'] = '<i class="ti-angle-left"></i>';
        $config['first_link'] = '<li class="page-link">First</li>';
        $config['last_link'] = '<li class="page-link">Last</li>';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item active">';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        if ($judul_menu == null) {
            $data_menu = $this->modmenu->menu($config['per_page'], $from, $bulan);
        } else {
            $data_menu = $this->modmenu->judul_menu($config['per_page'], $from, $judul_menu);
        }

        $data = array(
            'data_menu' => $data_menu,
            'banner' => base_url('assets/img/banner/food.jpg'),
            'null' => base_url('assets/img/folder.png'),
            'total' => $config['total_rows']
        );

        // var_dump($data['total']);
        // die();

        $this->template->front('front/menu', $data);
    }

    public function detail_menu()
    {
        $id = $this->input->get('id');

        $data = array(
            'data_menu' => $this->modmenu->detail_menu($id)
        );

        $this->template->front('front/detail_menu', $data);
    }

    public function detail_berita()
    {
        $id = $this->input->get('id');

        $data = array(
            'data_berita' => $this->modberita->detail_berita($id)
        );

        $this->template->front('front/detail_berita', $data);
    }

    public function bahan()
    {
        if ($this->input->post('submit')) {
            $judul_bahan = $this->input->post('cari');
        } else {
            $judul_bahan = null;
        }

        $this->load->database();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'user/bahan';
        $jumlah_data = $this->modbahan->jml_bahan($judul_bahan);
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 20;
        $from = $this->uri->segment(3);

        $config['next_link'] = '<i class="ti-angle-right"></i>';
        $config['prev_link'] = '<i class="ti-angle-left"></i>';
        $config['first_link'] = '<li class="page-link">First</li>';
        $config['last_link'] = '<li class="page-link">Last</li>';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item active">';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data = array(
            'data_bahan' => $this->modbahan->bahan($config['per_page'], $from, $judul_bahan),
            'banner' => base_url('assets/img/banner/banner1.jpg'),
            'null' => base_url('assets/img/folder.png'),
            'total' => $config['total_rows']
        );

        // var_dump($judul_bahan);
        // die();

        $this->template->front('front/bahan', $data);
    }

    public function kalkulator()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('nama')])->row_array();
        $id = $data['user']['id_user'];
        $tgl = date('Y-m');
        $user = $this->modgizi->jml_anak($id, $tgl);

        $data = array(
            'nama' => $data['user']['nama_user'],
            'id' => $id,
            'jk' => $data['user']['jenis_kelamin'],
            'tgl_lahir' => $data['user']['tgl_lahir'],
            'variabel' => $this->modgizi->get_variabel()
        );

        if ($user > 0) {
            redirect('user/nilai_gizi?id_user=' . $id);
        } else {
            $this->template->front('front/kalkulator', $data);
        }
    }

    public function input_hasil()
    {
        // include("koneksi_db.php");
        $id = $_POST['id'];
        $idvar = $_POST['idvar'];
        $q = count($idvar);
        $i = 0;
        $t = 0;
        while ($i < $q) {
            $nilai = $_POST['nilai'];
            if (empty($nilai[$i])) {
                $t = 1;
            } elseif (!is_numeric($nilai[$i])) {
                $t = 1;
            } else {
                $t == 0;
            }
            $i++;
        }


        $idvar = $_POST['idvar'];
        $q = count($idvar);
        $i = 0;
        $z = 0;
        while ($i < $q) {
            $idvar = $_POST['idvar'];
            $nilai = $_POST['nilai'];
            //   $yoyon=$this->db->query("select * from variabel where idvariabel='$idvar'");
            $yoyon = $this->modgizi->get_variabel2($idvar[$i]);

            foreach ($yoyon as $y) {

                if ($nilai[$i] > $y['nilai33']) {
                    $z = $z + 1;
                } else {
                    $z = $z + 0;
                }
                $i++;
            }
        }

        if ($z >= 1) {
            echo "<center><font color=red size=5><strong><br /><br />Nilai Gejala Penyakit Belum Diisi Dengan Benar<br /><br />
            <input type=button  value=Kembali onclick='self.history.back()'/>";
        } else {
            // mysqli_query("insert into pasien values ('','$_POST[a]','$_POST[jk]','$_POST[b]','$_POST[c]')");
            // $user=$this->db->query("select * from pasien order by idpasien desc");
            $user = $this->modgizi->get_user();


            $idvar = $_POST['idvar'];
            $q = count($idvar);
            $i = 0;
            while ($i < $q) {
                $idvar = $_POST['idvar'];
                // $idvisitor=$_POST[idvisitor];
                $nilai = $_POST['nilai'];
                $tgl_sekarang = date('Y-m-d');
                $this->db->query("INSERT into kalkulator_gizi values('','$id','$idvar[$i]','$nilai[$i]','','','','','$tgl_sekarang')");

                $i++;
            }
        }
        //}
        redirect('user/simpan_nilai?id_user=' . $id);
    }

    public function simpan_nilai()
    {
        $this->load->view('front/simpan_nilai');
    }

    public function nilai_gizi()
    {
        $id = $this->input->get('id_user');
        $variabel1 = $this->modgizi->get_variabel1();
        $tgl = date('Y-m');

        $data = array(
            'data_anak' => $this->modgizi->get_anak($id),
            'variabel' => $this->modgizi->get_nilai_variabel(),
            'id' => $id,
            'tgl' => $tgl,
            'variabel1' => $variabel1,
            'rule' => $this->modgizi->get_rule()
            // 'nilai' => $this->modgizi->get_nilai($id, $variabel1, $tgl)
        );

        // var_dump($data['data_anak']);
        // die();

        $this->template->front('front/hasil_gizi', $data);
    }

    public function cetak()
    {
        $this->load->library('pdfgenerator');
        // $this->load->model('modgizi');

        $id = $this->input->get('id_user');
        $variabel1 = $this->modgizi->get_variabel1();
        $tgl = date('Y-m');

        $data = array(
            'data_anak' => $this->modgizi->get_anak($id),
            'variabel' => $this->modgizi->get_nilai_variabel(),
            'id' => $id,
            'tgl' => $tgl,
            'variabel1' => $variabel1,
            'rule' => $this->modgizi->get_rule(),
            'nama_anak' => $this->modgizi->nama_anak($id)
            // 'nilai' => $this->modgizi->get_nilai($id, $variabel1, $tgl)
        );

        //  var_dump($data['variabel']);
        //  die();

        $html = $this->parser->parse("front/cetak_hasil_gizi", $data);
        $this->pdfgenerator->generate($html, "Hasil Nilai Gizi ", true, 'a4', 'landscape');
    }

    public function cetak_defuzzy()
    {
        $this->load->library('pdfgenerator');
        // $this->load->model('modgizi');

        $id = $this->input->get('id_user');
        $variabel1 = $this->modgizi->get_variabel1();
        $tgl = $this->input->get('tgl_cek');;

        $data = array(
            'data_anak' => $this->modgizi->data_anak($id, $tgl),
            'variabel' => $this->modgizi->get_nilai_variabel(),
            'id' => $id,
            'tgl' => $tgl,
            'variabel1' => $variabel1,
            'rule' => $this->modgizi->get_rule(),
            'nama_anak' => $this->modgizi->nama_anak($id)
            // 'nilai' => $this->modgizi->get_nilai($id, $variabel1, $tgl)
        );

        //  var_dump($data['data_anak']);
        //  die();

        $html = $this->parser->parse("front/cetak_hasil_gizi", $data);
        $this->pdfgenerator->generate($html, "Hasil Nilai Gizi ", true, 'a4', 'landscape');
    }
}
