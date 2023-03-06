<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Responden extends CI_Controller
{
    public function index()
    {
        $this->load->view('pages/head');
        // $this->load->view('pages/nav');
        $this->load->view('home/responden');
        $this->load->view('pages/footer');
    }
}
