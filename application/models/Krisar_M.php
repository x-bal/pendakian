<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Krisar_M extends CI_Model
{

    public function getData()
    {
        return $this->db->get('tb_ks')->result_array();
    }

    public function save($data)
    {
        $this->db->insert('tb_ks',$data);
    }
}

/* End of file Krisar_M.php */
