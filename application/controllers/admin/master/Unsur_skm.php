<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unsur_skm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('unsur_skm_model');
        $this->load->model('unsur_skm_m');
        $this->load->model('auth_m');
        if (!$this->auth_m->current_user()) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->unsur_skm_m->getuser();
        $data['getall'] = $this->db->get('m_unsur')->result_array();
        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/master/unsur_skm');
        $this->load->view('pages/admin/footer');
    }
    public function simpan()
    {
        $data = [
            'UNSUR_SKM' => $this->input->post('unsur'),
            'NILAI_UNSUR' => $this->input->post('nilai'),
        ];
        $this->db->insert('m_unsur', $data);
        redirect('admin/master/unsur_skm');
    }
}
