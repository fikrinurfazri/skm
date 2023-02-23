<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('pertanyaan_model');
        $this->load->model('pertanyaan_m');
        $this->load->model('auth_m');
        if (!$this->auth_m->current_user()) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->pertanyaan_m->getuser();
        $data['getunsur'] = $this->db->get('m_unsur')->result_array();
        $data['getall'] = $this->pertanyaan_m->getall();
        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/master/pertanyaan');
        $this->load->view('pages/admin/footer');
    }
    public function simpan()
    {
        $data = [
            'PERTANYAAN' => $this->input->post('pertanyaan'),
            'ID_UNSUR' => $this->input->post('id_unsur'),
        ];
        $this->db->insert('m_pertanyaan', $data);
        redirect('admin/master/pertanyaan');
    }
}
