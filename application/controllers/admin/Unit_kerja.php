<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit_kerja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('soal_m');
        $this->load->model('auth_m');
        if (!$this->auth_m->current_user()) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->soal_m->getuser();
        $data['unker'] = $this->db->get('m_unit_kerja')->result_array();
        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/unker');
        $this->load->view('pages/admin/footer');
    }
}
