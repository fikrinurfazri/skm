<?php

class Pertanyaan_m extends CI_Model
{
    public function getuser()
    {

        return $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
    }
    public function getall()
    {
        return $this->db->select('*')
            ->from('m_pertanyaan')
            ->join('m_unsur ', 'm_unsur.ID_UNSUR = m_pertanyaan.ID_UNSUR')
            ->get()->result_array();
    }
}
