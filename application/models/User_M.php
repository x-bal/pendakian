<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_M extends CI_Model
{

    public function first($username)
    {
        return $this->db->get_where('tb_admin', ['username' => $username])->row_array();
    }
}
