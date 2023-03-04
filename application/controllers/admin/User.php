<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_model');
        $this->load->model('user_m');
        $this->load->model('auth_m');
        if (!$this->auth_m->current_user()) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->user_m->getuser();
        $data['getall'] = $this->user_m->getsubadmin();
        $data['unker'] = $this->user_m->get();

        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/user');
        $this->load->view('pages/admin/footer');
    }
    public function simpan()
    {
        $password = $this->input->post('password');
        $data = [
            'NAMA' => $this->input->post('nama'),
            'USERNAME' => $this->input->post('kode_unker'),
            'LEVEL' => $this->input->post('level'),
            'KODE_UNIT_KERJA' => $this->input->post('kode_unker'),
            'PASSWORD' => password_hash($password, PASSWORD_DEFAULT),
            'last_login' => strtotime("now")
        ];
        $this->db->insert('admin', $data);
        redirect('admin/subadmin');
    }
}
