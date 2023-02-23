<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('nilai_model');
        $this->load->model('nilai_m');
        $this->load->model('auth_m');
        if (!$this->auth_m->current_user()) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->nilai_m->getuser();
        $data['getunsur'] = $this->db->get('m_unsur')->result_array();
        $data['getall'] = $this->nilai_m->getall();
        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/master/nilai');
        $this->load->view('pages/admin/footer');
    }
    public function simpan()
    {
        $data = [
            'PENILAIAN' => $this->input->post('nilai'),
            'BOBOT' => $this->input->post('bobot'),
            'ID_UNSUR' => $this->input->post('id_unsur'),
        ];
        $this->db->insert('m_nilai', $data);
        redirect('admin/master/nilai');
    }
}
