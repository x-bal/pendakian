<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisata_M extends CI_Model
{

    public function getData()
    {
        return $this->db->get('tb_wisata')->result_array();
    }

    public function delete($id)
    {
        $this->db->where('id_wisata', $id);
        $this->db->delete('tb_wisata');
    }

    public function insert($data)
    {
        $this->db->insert('tb_wisata', $data);
    }

    public function update($data)
    {
        $this->db->where('id_wisata', $data['id_wisata']);
        $this->db->update('tb_wisata', $data);
    }
}

/* End of file ModelName.php */
