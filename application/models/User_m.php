<?php

class User_m extends CI_Model
{
    public function getuser()
    {

        return $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
    }
    public function getsubadmin()
    {

        $data = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        return $this->db->select('*')
            ->from('admin')
            ->like('KODE_UNIT_KERJA', $data['KODE_UNIT_KERJA'])
            ->get()->result_array();
    }
    public function get()
    {
        $data = $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
        return $this->db->select('*')
            ->from('m_unit_kerja')
            ->like('KODE', $data['KODE_UNIT_KERJA'])
            ->get()->result_array();
    }
    public function delete($id)
    {
        $this->db->where('ID_ADMIN', $id);
        $this->db->delete('admin');
    }
    public function update($id)
    {
        return $this->db->select('*')
            ->from('admin')
            ->where('ID_ADMIN', $id)
            ->get()->row_array();
    }
}
