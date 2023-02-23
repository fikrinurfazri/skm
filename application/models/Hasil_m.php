<?php

class Hasil_m extends CI_Model
{
    public function getuser()
    {

        return $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
    }
    public function hitungresponden()
    {
        $data = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $this->db->select_sum('U1')
            ->from('t_skm');
    }

    public function getall()
    {
        return $this->db->select('*')
            ->from('m_nilai')
            ->join('m_unsur ', 'm_unsur.ID_UNSUR = m_nilai.ID_UNSUR')
            ->get()->result_array();
    }
    public function nilai()
    {
        $table = 't_skm';
        $field = 'U9';
        $this->db->select_sum($field);
        $query = $this->db->get($table);
        $sum = $query->row()->$field;
        return $sum;
    }
    public function getskm()
    {
        $tawal = '2023-01-01';
        $takhir = '2023-06-31';
        return $this->db->select('*')
            ->from('admin AS `a`')
            ->join('t_skm AS `b`', 'b.KODE_UNIT_KERJA = a.KODE_UNIT_KERJA', 'left')
            ->where('TANGGAL BETWEEN "' . $tawal . '" and "' . $takhir . '"')
            ->get()->result();
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
    public function getnilai()
    {
        $data = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        return $this->db->select('*')
            ->from('t_skm')
            ->where('KODE_UNIT_KERJA', $data['KODE_UNIT_KERJA'])
            ->get()->result_array();
    }
    public function count($id)
    {
        $this->db->where('KODE_UNIT_KERJA', $id);
        return $this->db->count_all_results('t_skm');
    }
    public function U1()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U1';
        $this->db->select_sum($field);
        $this->db->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U2()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U2';
        $this->db->select_sum($field);
        $this->db->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U3()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U3';
        $this->db->select_sum($field);
        $this->db->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U4()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U4';
        $this->db->select_sum($field);
        $this->db->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U5()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U5';
        $this->db->select_sum($field);
        $this->db->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U6()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U6';
        $this->db->select_sum($field);
        $this->db->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U7()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U7';
        $this->db->select_sum($field);
        $this->db->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U8()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U8';
        $this->db->select_sum($field);
        $this->db->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }
    public function U9()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $field = 'U9';
        $this->db->select_sum($field);
        $this->db->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA']);
        $query = $this->db->get('t_skm');
        return $query->row()->$field;
    }

    public function hitung_data()
    {
        $id = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        return  $this->db->select('KODE_UNIT_KERJA')
            ->from('t_skm')
            ->where('KODE_UNIT_KERJA', $id['KODE_UNIT_KERJA'])
            ->get()->num_rows();
    }
}
