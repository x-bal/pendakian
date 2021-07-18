<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Wisata_M');
        $this->load->model('Perlengkapan_M');
        $this->load->model('Rute_M');
        $this->load->model('Krisar_M');
    }

    public function index()
    {
        $data = [
            'wisata' => $this->Wisata_M->getData()
        ];

        $this->load->view('core/header');
        $this->load->view('home/informasi', $data);
        $this->load->view('core/footer');
    }

    public function in_perlengkapan()
    {
        $data = [
            'perlengkapan' => $this->Perlengkapan_M->getData()
        ];

        $this->load->view('core/header');
        $this->load->view('home/in_perlengkapan', $data);
        $this->load->view('core/footer');
    }
    public function in_rute()
    {
        $data = [
            'rute' => $this->Rute_M->getData()
        ];

        $this->load->view('core/header');
        $this->load->view('home/in_rute', $data);
        $this->load->view('core/footer');
    }
    public function tentang()
    {
        $data = [
            'rute' => $this->Rute_M->getData()
        ];

        $this->load->view('core/header');
        $this->load->view('home/tentang', $data);
        $this->load->view('core/footer');
    }

    public function save_krisar()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'ks' => $this->input->post('krisar'),
            'created' => date('Y-m-d'),
            'modified' => date('Y-m-d')
        ];

        $this->Krisar_M->save($data);
        $this->session->set_flashdata('success', 'Kritik & Saran telah terkirim');

        redirect('home/tentang');
    }
    public function d_wisata($id)
    {
        $data['detail'] = $this->db->get_where('tb_wisata', ['id_wisata' => $id])->row_array();

        $this->load->view('core/header');
        $this->load->view('home/detail_wisata', $data);
        $this->load->view('core/footer');
    }
    public function d_perlengkapan($id)
    {
        $data['detail'] = $this->db->get_where('tb_perlengkapan', ['id_perlengkapan' => $id])->row_array();

        $this->load->view('core/header');
        $this->load->view('home/detail_perlengkapan', $data);
        $this->load->view('core/footer');
    }

    public function d_rute($id)
    {
        $data['detail'] = $this->db->get_where('tb_rute', ['id_rute' => $id])->row_array();

        $this->load->view('core/header');
        $this->load->view('home/detail_rute', $data);
        $this->load->view('core/footer');
    }
}

/* End of file Index.php */
