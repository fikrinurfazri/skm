<?php

class Kuisioner_m extends CI_Model
{

    public function getkuis($unker)
    {
        return $this->db->select('*')
            ->from('t_kuisioner')
            ->where('id_soal', $unker)
            ->get()->row_array();
    }
    public function getsoal()
    {
        return $this->db->select('m_unsur.UNSUR_SKM,m_pertanyaan.PERTANYAAN')
            ->from('m_unsur')
            ->join('m_pertanyaan ', 'm_pertanyaan.ID_UNSUR = m_unsur.ID_UNSUR', 'left')
            ->get()->result_array();
    }
}
