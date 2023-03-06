<?php

class Soal_m extends CI_Model
{
    public function getuser()
    {

        return $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
    }
    public function getall()
    {
        $user = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        $id = $user['KODE_UNIT_KERJA'];
        return $this->db->select('*')
            ->from('t_kuisioner')
            ->where('KODE_UNIT_KERJA', $id)
            ->get()->result_array();
    }
    public function getsoal()
    {

        return $this->db->select('m_unsur.UNSUR_SKM,m_pertanyaan.PERTANYAAN')
            ->from('m_unsur')
            ->join('m_pertanyaan ', 'm_pertanyaan.ID_UNSUR = m_unsur.ID_UNSUR', 'left')
            ->get()->result_array();
    }
}
