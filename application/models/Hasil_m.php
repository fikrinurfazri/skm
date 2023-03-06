<?php

class Hasil_m extends CI_Model
{
    public function getdetail($id)
    {
        return $this->db->select('*')
            ->from('t_berita')
            ->join('admin', 'admin.KODE_UNIT_KERJA=t_berita.KODE_UNIT_KERJA', 'inner')
            ->where('ID', $id)
            ->get()->row_array();
    }
}
