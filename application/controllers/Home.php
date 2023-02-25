<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('hasil_m');
	}
	public function index()
	{
		$data['hasil'] = $this->db->get_where('t_hasil', ['SEMESTER' => 1, 'LENGTH(KODE_UNIT_KERJA)' => 6])->result_array();

		$this->load->view('pages/head');
		$this->load->view('pages/nav');
		$this->load->view('home/index', $data);
		$this->load->view('pages/footer');
	}
}