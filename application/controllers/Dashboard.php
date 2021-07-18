<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        block();
    }
    public function index()
    {

        $data = [
            'judul' => 'Dashboard',
            'krisar' => count($this->db->get('tb_ks')->result_array()),
            'wisata' => count($this->db->get('tb_wisata')->result_array()),
            'perlengkapan' => count($this->db->get('tb_perlengkapan')->result_array()),
            'rute' => count($this->db->get('tb_rute')->result_array())

        ];

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('layout/footer');
    }
}


/* End of file Dashboard.php */
