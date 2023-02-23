<?php

class Unsur_skm_m extends CI_Model
{
    public function getuser()
    {

        return $this->db->get_where('admin', ['ID_ADMIN' => $this->session->userdata('ID_ADMIN')])->row_array();
    }
}
