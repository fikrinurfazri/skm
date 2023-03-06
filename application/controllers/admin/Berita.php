<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_model');
        $this->load->model('dashboard_m');
        $this->load->model('auth_m');
        if (!$this->auth_m->current_user()) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->dashboard_m->getuser();
        $user = $this->dashboard_m->getuser();
        $data['berita'] = $this->db->get_where('t_berita', ['KODE_UNIT_KERJA' => $user['KODE_UNIT_KERJA']])->result_array();
        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/berita');
        $this->load->view('pages/admin/footer');
    }
    public function add()
    {
        $data['user'] = $this->dashboard_m->getuser();
        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/addberita');
        $this->load->view('pages/admin/footer');
    }
    public function simpan()
    {
        $config['upload_path']          = './assets/upload/';
        $config['allowed_types']        = 'png|jpg|pdf';
        $config['max_size']             = 1024 * 10;


        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            $isi   = $this->input->post('isi', TRUE);
            $judul   = $this->input->post('judul', TRUE);
            $kode = $this->dashboard_m->getuser();
            $data = [
                'ISI' => $isi,
                'JUDUL' => $judul,
                'KODE_UNIT_KERJA' => $kode['KODE_UNIT_KERJA'],
                'TANGGAL' => date('Y-m-d')
            ];
            $this->db->insert('t_berita', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil ditambah</div>');
            redirect('admin/berita');
        } else {
            $gambar         = $this->upload->data();
            $berkas         = $gambar['file_name'];
            $judul   = $this->input->post('judul', TRUE);
            $isi   = $this->input->post('isi', TRUE);
            $kode = $this->dashboard_m->getuser();
            $data = [
                'JUDUL' => $judul,
                'ISI' => $isi,
                'GAMBAR'          => $berkas,
                'KODE_UNIT_KERJA' => $kode['KODE_UNIT_KERJA'],
                'TANGGAL' => date('Y-m-d')
            ];
            $this->db->insert('t_berita', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil ditambah</div>');
            redirect('admin/berita');
        }
    }
}
