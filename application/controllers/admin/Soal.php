<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('soal_model');
        $this->load->model('soal_m');
        $this->load->model('auth_m');
        if (!$this->auth_m->current_user()) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->soal_m->getuser();
        // $data['soal'] = $this->db->get('m_unsur')->result_array();
        $data['soal'] = $this->soal_m->getsoal();
        $data['kuis'] = $this->soal_m->getall();
        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/soal_index');
        $this->load->view('pages/admin/footer');
    }
    public function kuisioner()
    {
        $data['user'] = $this->soal_m->getuser();
        // $data['soal'] = $this->db->get('m_unsur')->result_array();
        $data['soal'] = $this->soal_m->getsoal();
        $data['getall'] = $this->soal_m->getall();
        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/soal');
        $this->load->view('pages/admin/footer');
    }
    public function add()
    {
        $user = $this->soal_m->getuser();

        $data = [
            'KODE_UNIT_KERJA' => $user['KODE_UNIT_KERJA'],
            'status' => $this->input->post('status'),
            'nama' => $this->input->post('nama'),
            'TAHUN' => $this->input->post('tahun'),
            'SEMESTER' => $this->input->post('semester'),
            'tanggal_dibuat' => date('Y-m-d')
        ];
        $this->db->insert('t_kuisioner', $data);
        redirect('admin/soal');
    }
}
