<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('opd_m');
        $this->load->model('auth_m');
        if (!$this->auth_m->current_user()) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->opd_m->getuser();
        $user = $this->opd_m->getuser();
        // $data['hasil'] = $this->db->get_where('t_hasil', ['KODE_UNIT_KERJA' => $user['KODE_UNIT_KERJA']])->result_array();

        $data['hasil'] = $this->opd_m->hasil();
        $data['responden'] = $this->opd_m->hitung_data();
        $cek = $this->opd_m->hitung_data();
        $responden2 = $this->opd_m->hitung_data_2();
        $responden3 = $this->opd_m->hitung_data_3();
        $responden4 = $this->opd_m->hitung_data_4();
        $responden = $cek;


        $U1 = $this->opd_m->U1();
        $U2 = $this->opd_m->U2();
        $U3 = $this->opd_m->U3();
        $U4 = $this->opd_m->U4();
        $U5 = $this->opd_m->U5();
        $U6 = $this->opd_m->U6();
        $U7 = $this->opd_m->U7();
        $U8 = $this->opd_m->U8();
        $U9 = $this->opd_m->U9();

        $U1_2 = $this->opd_m->U1_2();
        $U2_2 = $this->opd_m->U2_2();
        $U3_2 = $this->opd_m->U3_2();
        $U4_2 = $this->opd_m->U4_2();
        $U5_2 = $this->opd_m->U5_2();
        $U6_2 = $this->opd_m->U6_2();
        $U7_2 = $this->opd_m->U7_2();
        $U8_2 = $this->opd_m->U8_2();
        $U9_2 = $this->opd_m->U9_2();

        $U1_3 = $this->opd_m->U1_3();
        $U2_3 = $this->opd_m->U2_3();
        $U3_3 = $this->opd_m->U3_3();
        $U4_3 = $this->opd_m->U4_3();
        $U5_3 = $this->opd_m->U5_3();
        $U6_3 = $this->opd_m->U6_3();
        $U7_3 = $this->opd_m->U7_3();
        $U8_3 = $this->opd_m->U8_3();
        $U9_3 = $this->opd_m->U9_3();

        $U1_4 = $this->opd_m->U1_4();
        $U2_4 = $this->opd_m->U2_4();
        $U3_4 = $this->opd_m->U3_4();
        $U4_4 = $this->opd_m->U4_4();
        $U5_4 = $this->opd_m->U5_4();
        $U6_4 = $this->opd_m->U6_4();
        $U7_4 = $this->opd_m->U7_4();
        $U8_4 = $this->opd_m->U8_4();
        $U9_4 = $this->opd_m->U9_4();



        //Unsur 1 - 9
        $unsur = [
            $U1, $U2, $U3, $U4, $U5, $U6, $U7, $U8, $U9
        ];
        $data['unsur'] = $unsur;

        //Rata rata
        $rr = [
            $U1 / $responden,
            $U2 / $responden,
            $U3 / $responden,
            $U4 / $responden,
            $U5 / $responden,
            $U6 / $responden,
            $U7 / $responden,
            $U8 / $responden,
            $U9 / $responden,
        ];
        $data['rata'] = $rr;
        $rata = ($U1 / $responden +
            $U2 / $responden +
            $U3 / $responden +
            $U4 / $responden +
            $U5 / $responden +
            $U6 / $responden +
            $U7 / $responden +
            $U8 / $responden +
            $U9 / $responden);

        //Rata rata tertimbang
        $nrrt = [
            ($U1 / $responden) * 0.11,
            ($U2 / $responden) * 0.11,
            ($U3 / $responden) * 0.11,
            ($U4 / $responden) * 0.11,
            ($U5 / $responden) * 0.11,
            ($U6 / $responden) * 0.11,
            ($U7 / $responden) * 0.11,
            ($U8 / $responden) * 0.11,
            ($U9 / $responden) * 0.11,
        ];
        $data['nrrt'] = $nrrt;
        $nt = (
            (($U1 / $responden) * 0.11) +
            (($U2 / $responden) * 0.11) +
            (($U3 / $responden) * 0.11) +
            (($U4 / $responden) * 0.11) +
            (($U5 / $responden) * 0.11) +
            (($U6 / $responden) * 0.11) +
            (($U7 / $responden) * 0.11) +
            (($U8 / $responden) * 0.11) +
            (($U9 / $responden) * 0.11)

        );

        //ikm
        $ikm = (
            ($U1 / $responden) * 0.11 +
            ($U2 / $responden) * 0.11 +
            ($U3 / $responden) * 0.11 +
            ($U4 / $responden) * 0.11 +
            ($U5 / $responden) * 0.11 +
            ($U6 / $responden) * 0.11 +
            ($U7 / $responden) * 0.11 +
            ($U8 / $responden) * 0.11 +
            ($U9 / $responden) * 0.11) * 25;
        $data['ikm'] = $ikm;


        if ($ikm >= 25.00 && $ikm <= 64.99) {
            $mutu = 'D';
        } elseif ($ikm >= 65.00 && $ikm <= 76.60) {
            $mutu = 'C';
        } elseif ($ikm >= 76.61 && $ikm <= 88.30) {
            $mutu = 'B';
        } elseif ($ikm >= 88.31 && $ikm <= 100.00) {
            $mutu = 'A';
        } else {
            $mutu = 'Tidak terdefinisi';
        }


        $ikm2 = (
            ($U1_2 / $responden2) * 0.11 +
            ($U2_2 / $responden2) * 0.11 +
            ($U3_2 / $responden2) * 0.11 +
            ($U4_2 / $responden2) * 0.11 +
            ($U5_2 / $responden2) * 0.11 +
            ($U6_2 / $responden2) * 0.11 +
            ($U7_2 / $responden2) * 0.11 +
            ($U8_2 / $responden2) * 0.11 +
            ($U9_2 / $responden2) * 0.11) * 25;

        $data['ikm2'] = $ikm2;


        if ($ikm2 >= 25.00 && $ikm2 <= 64.99) {
            $mutu2 = 'D';
        } elseif ($ikm2 >= 65.00 && $ikm2 <= 76.60) {
            $mutu2 = 'C';
        } elseif ($ikm2 >= 76.61 && $ikm2 <= 88.30) {
            $mutu2 = 'B';
        } elseif ($ikm2 >= 88.31 && $ikm2 <= 100.00) {
            $mutu2 = 'A';
        } else {
            $mutu2 = 'Tidak terdefinisi';
        }

        $ikm3 = (
            ($U1_3 / $responden3) * 0.11 +
            ($U2_3 / $responden3) * 0.11 +
            ($U3_3 / $responden3) * 0.11 +
            ($U4_3 / $responden3) * 0.11 +
            ($U5_3 / $responden3) * 0.11 +
            ($U6_3 / $responden3) * 0.11 +
            ($U7_3 / $responden3) * 0.11 +
            ($U8_3 / $responden3) * 0.11 +
            ($U9_3 / $responden3) * 0.11) * 25;

        $data['ikm3'] = $ikm3;


        if ($ikm3 >= 25.00 && $ikm3 <= 64.99) {
            $mutu3 = 'D';
        } elseif ($ikm3 >= 65.00 && $ikm3 <= 76.60) {
            $mutu3 = 'C';
        } elseif ($ikm3 >= 76.61 && $ikm3 <= 88.30) {
            $mutu3 = 'B';
        } elseif ($ikm3 >= 88.31 && $ikm3 <= 100.00) {
            $mutu3 = 'A';
        } else {
            $mutu3 = 'Tidak terdefinisi';
        }

        $ikm4 = (
            ($U1_4 / $responden4) * 0.11 +
            ($U2_4 / $responden4) * 0.11 +
            ($U3_4 / $responden4) * 0.11 +
            ($U4_4 / $responden4) * 0.11 +
            ($U5_4 / $responden4) * 0.11 +
            ($U6_4 / $responden4) * 0.11 +
            ($U7_4 / $responden4) * 0.11 +
            ($U8_4 / $responden4) * 0.11 +
            ($U9_4 / $responden4) * 0.11) * 25;

        $data['ikm4'] = $ikm4;


        if ($ikm4 >= 25.00 && $ikm4 <= 64.99) {
            $mutu4 = 'D';
        } elseif ($ikm4 >= 65.00 && $ikm4 <= 76.60) {
            $mutu4 = 'C';
        } elseif ($ikm4 >= 76.61 && $ikm4 <= 88.30) {
            $mutu4 = 'B';
        } elseif ($ikm4 >= 88.31 && $ikm4 <= 100.00) {
            $mutu4 = 'A';
        } else {
            $mutu4 = 'Tidak terdefinisi';
        }

        //nilai index
        $index = (
            ($U1 / $responden) * 0.11 +
            ($U2 / $responden) * 0.11 +
            ($U3 / $responden) * 0.11 +
            ($U4 / $responden) * 0.11 +
            ($U5 / $responden) * 0.11 +
            ($U6 / $responden) * 0.11 +
            ($U7 / $responden) * 0.11 +
            ($U8 / $responden) * 0.11 +
            ($U9 / $responden) * 0.11);
        $data['index'] = $index;
        $index2 = (
            ($U1_2 / $responden2) * 0.11 +
            ($U2_2 / $responden2) * 0.11 +
            ($U3_2 / $responden2) * 0.11 +
            ($U4_2 / $responden2) * 0.11 +
            ($U5_2 / $responden2) * 0.11 +
            ($U6_2 / $responden2) * 0.11 +
            ($U7_2 / $responden2) * 0.11 +
            ($U8_2 / $responden2) * 0.11 +
            ($U9_2 / $responden2) * 0.11);
        $data['index2'] = $index2;

        $id = $this->opd_m->getuser();
        $kode = $id['KODE_UNIT_KERJA'];

        $data1 = [

            'KODE_UNIT_KERJA' => $kode,
            'NAMA' => $id['NAMA'],
            'RATA_RATA' => number_format($rata, 2, '.', ','),
            'IKM' => number_format($ikm, 2, '.', ','),
            'IKM2' => number_format($ikm2, 2, '.', ','),
            'IKM3' => number_format($ikm3, 2, '.', ','),
            'IKM4' => number_format($ikm4, 2, '.', ','),
            'N_INDEX' => number_format($index, 2, '.', ','),
            'N_INDEX2' => number_format($index2, 2, '.', ','),
            'RESPONDEN' => $responden,
            'RESPONDEN2' => $responden2,
            'RESPONDEN3' => $responden3,
            'RESPONDEN4' => $responden4,
            'NRRT' => number_format($nt, 2, '.', ','),
            'MUTU' => $mutu,
            'MUTU2' => $mutu2,
            'MUTU3' => $mutu3,
            'MUTU4' => $mutu4,
            'TAHUN' => date('Y')
        ];
        $this->opd_m->simpan_data($data1);

        $this->load->view('pages/admin/head');
        $this->load->view('pages/admin/nav', $data);
        $this->load->view('admin/hasil');
        $this->load->view('pages/admin/footer');
    }
    public function getprint1()
    {
        $data['ikm'] = $this->opd_m->getikm();
        $data['jk'] = $this->opd_m->getjk();
        $data['pendidikan'] = $this->opd_m->getpnd();
        $this->load->view('pages/admin/print/1', $data);
    }
    public function getprint2()
    {
        $data['ikm'] = $this->opd_m->getikm();
        $data['jk'] = $this->opd_m->getjk2();
        $data['pendidikan'] = $this->opd_m->getpnd2();
        $this->load->view('pages/admin/print/2', $data);
    }
    public function getprint3()
    {
        $data['ikm'] = $this->opd_m->getikm();
        $data['jk'] = $this->opd_m->getjk3();
        $data['pendidikan'] = $this->opd_m->getpnd3();
        $this->load->view('pages/admin/print/3', $data);
    }
    public function getprint4()
    {
        $data['ikm'] = $this->opd_m->getikm();
        $data['jk'] = $this->opd_m->getjk4();
        $data['pendidikan'] = $this->opd_m->getpnd4();
        $this->load->view('pages/admin/print/4', $data);
    }
}
