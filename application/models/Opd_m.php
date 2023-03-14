<?php

class Opd_m extends CI_Model
{
    public function getuser()
    {

        return $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
    }

    public function getall()
    {
        return $this->db->select('*')
            ->from('m_nilai')
            ->join('m_unsur ', 'm_unsur.ID_UNSUR = m_nilai.ID_UNSUR')
            ->get()->result_array();
    }


    public function cek_data($id)
    {
        $query = $this->db->get_where('t_hasil', array('KODE_UNIT_KERJA' => $id));
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function simpan_data($data)
    {
        $id = $data['KODE_UNIT_KERJA'];
        if ($this->cek_data($id)) {
            $this->db->update('t_hasil', $data, ['KODE_UNIT_KERJA' => $id]);
        } else {
            $this->db->insert('t_hasil', $data);
        }
    }

    public function getjk()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select('JK,COUNT(JK) as jumlah')
            ->from('t_skm')
            ->group_by('JK')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get();
        return $query->result();
    }
    public function getjk2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select('JK,COUNT(JK) as jumlah')
            ->from('t_skm')
            ->group_by('JK')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get();
        return $query->result();
    }
    public function getjk3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select('JK,COUNT(JK) as jumlah')
            ->from('t_skm')
            ->group_by('JK')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get();
        return $query->result();
    }
    public function getjk4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select('JK,COUNT(JK) as jumlah')
            ->from('t_skm')
            ->group_by('JK')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get();
        return $query->result();
    }
    public function getpnd()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select('PENDIDIKAN,COUNT(PENDIDIKAN) as jumlah')
            ->from('t_skm')
            ->group_by('PENDIDIKAN')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get();
        return $query->result();
    }
    public function getpnd2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select('PENDIDIKAN,COUNT(PENDIDIKAN) as jumlah')
            ->from('t_skm')
            ->group_by('PENDIDIKAN')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get();
        return $query->result();
    }
    public function getpnd3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select('PENDIDIKAN,COUNT(PENDIDIKAN) as jumlah')
            ->from('t_skm')
            ->group_by('PENDIDIKAN')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get();
        return $query->result();
    }
    public function getpnd4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select('PENDIDIKAN,COUNT(PENDIDIKAN) as jumlah')
            ->from('t_skm')
            ->group_by('PENDIDIKAN')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get();
        return $query->result();
    }

    public function U1()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U1';
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U1_2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U4';
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U1_3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U1';
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U1_4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U1';
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U2';
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U2_2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U2';
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U2_3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U2';
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U2_4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U2';
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U3';
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U3_2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U3';
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U3_3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U3';
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U3_4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U3';
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U4';
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U4_2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U4';
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U4_3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U4';
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U4_4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U4';
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U5()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U5';
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U5_2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U5';
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U5_3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U5';
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U5_4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U5';
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U6()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U6';
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U6_2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U6';
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U6_3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U6';
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U6_4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U6';
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U7()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U7';
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U7_2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U7';
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U7_3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U7';
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U7_4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U7';
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U8()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U8';
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U8_2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U8';
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U8_3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U8';
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U8_4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U8';
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U9()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U9';
        $t_awal = '01';
        $t_akhir = '03';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U9_2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U9';
        $t_awal = '04';
        $t_akhir = '06';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U9_3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U9';
        $t_awal = '07';
        $t_akhir = '09';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U9_4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U9';
        $t_awal = '10';
        $t_akhir = '12';
        $this->db->select_sum($field);
        $this->db->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $this->db->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'");
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }

    public function hitung_data()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '01';
        $t_akhir = '03';
        return  $this->db->select('KODE_UNIT_KERJA')
            ->from('t_skm')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'")
            ->get()->num_rows();
    }
    public function hitung_data_2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '04';
        $t_akhir = '06';
        return  $this->db->select('KODE_UNIT_KERJA')
            ->from('t_skm')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'")
            ->get()->num_rows();
    }
    public function hitung_data_3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '07';
        $t_akhir = '09';
        return  $this->db->select('KODE_UNIT_KERJA')
            ->from('t_skm')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'")
            ->get()->num_rows();
    }
    public function hitung_data_4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $t_awal = '10';
        $t_akhir = '12';
        return  $this->db->select('KODE_UNIT_KERJA')
            ->from('t_skm')
            ->like('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->where("DATE_FORMAT(TANGGAL, '%m') BETWEEN '$t_awal' AND '$t_akhir'")
            ->get()->num_rows();
    }
    public function hasil()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        return $this->db->select('*')
            ->from('t_hasil')
            ->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->get()->result_array();
    }
    public function getikm()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        return $this->db->select('*')
            ->from('t_hasil')
            ->join('admin ', 'admin.KODE_UNIT_KERJA = t_hasil.KODE_UNIT_KERJA')
            ->where('t_hasil.KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->get()->row_array();
    }
}
