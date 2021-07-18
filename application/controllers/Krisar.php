<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Krisar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        block();
        $this->load->model('Krisar_M');
    }

    public function index()
    {
        $data['judul'] = 'Kritik Dan Saran';
        $data['krisar'] = $this->Krisar_M->getData();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('krisar/index', $data);
        $this->load->view('layout/footer');
    }
}

/* End of file Krisar.php */
