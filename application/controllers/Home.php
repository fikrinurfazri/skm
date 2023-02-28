<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
	}
	public function index()
	{
		$data['hasil'] = $this->db->get_where('t_hasil', ['LENGTH(KODE_UNIT_KERJA)' => 6])->result_array();
		$data['hasilkota'] = $this->db->get_where('t_hasil', ['LENGTH(KODE_UNIT_KERJA)' => 3])->result_array();
		$data['berita'] = $this->db->get('t_berita')->result_array();

		$this->load->view('pages/head');
		$this->load->view('pages/nav');
		$this->load->view('home/index', $data);
		$this->load->view('pages/footer');
	}
	public function detail($id)
	{
		$data['detail'] = $this->home_m->getdetail($id);
		$data['berita'] = $this->db->get('t_berita', 5)->result_array();
		$berita = $this->home_m->getdetail($id);
		$data['title'] = $berita['JUDUL'];

		$this->load->view('home/detailberita', $data);
		$this->load->view('pages/footer');
	}
}
