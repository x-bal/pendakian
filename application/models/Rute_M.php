<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rute_M extends CI_Model
{
    public function getData()
    {
        return $this->db->get('tb_rute')->result_array();
    }
    public function delete($id)
    {
        $this->db->where('id_rute', $id);
        $this->db->delete('tb_rute');
    }

    public function insert($data)
    {
        $this->db->insert('tb_rute', $data);
    }
    
    public function update($data)
    {
        $this->db->where('id_rute', $data['id_rute']);
        $this->db->update('tb_rute', $data);
    }
}

/* End of file Rute_M.php */
