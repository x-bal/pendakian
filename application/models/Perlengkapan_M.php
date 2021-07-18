<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Perlengkapan_M extends CI_Model
{

    public function getData()
    {
        return $this->db->get('tb_perlengkapan')->result_array();
    }

    public function insert($data)
    {
        $this->db->insert('tb_perlengkapan', $data);
    }

    public function update($data)
    {
        $this->db->where('id_perlengkapan',$data['id_perlengkapan']);
        $this->db->update('tb_perlengkapan',$data);
    }
    public function delete($id)
    {
        $this->db->where('id_perlengkapan', $id);
        $this->db->delete('tb_perlengkapan');
    }
}

/* End of file Perlengkapan_M.php */
