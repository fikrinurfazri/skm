<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->model('auth_m');
        if (!$this->auth_m->current_user()) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->user_m->getuser();
        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/profile');
        $this->load->view('pages/admin/footer');
    }
    public function simpan()
    {
        $password = $this->input->post('password');
        $data = [
            'NAMA' => $this->input->post('nama'),
            'USERNAME' => $this->input->post('username'),
            'LEVEL' => $this->input->post('level'),
            'KODE_UNIT_KERJA' => $this->input->post('kode_unker'),
            'PASSWORD' => password_hash($password, PASSWORD_DEFAULT),
            'last_login' => strtotime("now")
        ];
        $this->db->update('admin', $data);
        redirect('admin/soal');
    }
}
