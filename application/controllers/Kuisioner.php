<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuisioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kuisioner_m');
    }
    public function index($unker)
    {
        $data['kuis'] = $this->kuisioner_m->getkuis($unker);
        $this->load->view('pages/head');
        $this->load->view('home/kuis', $data);
        $this->load->view('pages/footer');
    }
    public function add($unker)
    {

        $data['kuis'] = $this->kuisioner_m->getkuis($unker);
        $this->load->view('pages/head');
        $this->load->view('home/kuis', $data);
        $this->load->view('pages/footer');
    }
    public function kirim()
    {
        $data = [
            'USIA' => $this->input->post('usia'),
            'JENIS_KELAMIN' => $this->input->post('jk'),
            'ID_SKM' => $this->input->post('id_soal'),
            'PEKERJAAN' => $this->input->post('pekerjaan'),
            'PENDIDIKAN' => $this->input->post('pendidikan'),
        ];
        $this->db->insert('t_responden', $data);

        $data2 = [

            'PELAYANAN' => $this->input->post('pelayanan'),
            'KODE_UNIT_KERJA' => $this->input->post('kode'),
            'U1' => $this->input->post('u1'),
            'U2' => $this->input->post('u2'),
            'U3' => $this->input->post('u3'),
            'U4' => $this->input->post('u4'),
            'U5' => $this->input->post('u5'),
            'U6' => $this->input->post('u6'),
            'U7' => $this->input->post('u7'),
            'U8' => $this->input->post('u8'),
            'U9' => $this->input->post('u9'),
            'TANGGAL' => date('Y-m-d')
        ];
        $this->db->insert('t_skm', $data2);
        redirect('home');
    }
}
