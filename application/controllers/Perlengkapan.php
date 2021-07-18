<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Perlengkapan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        block();
        $this->load->model('Perlengkapan_M');
    }
    public function index()
    {
        $data = [
            'judul' => 'Daftar Perlengkapan',
            'perlengkapan' => $this->Perlengkapan_M->getData()
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('perlengkapan/index', $data);
        $this->load->view('layout/footer');
    }

    public function add()
    {
        $data = [
            'judul' => 'Tambah perlengkapan',

        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('perlengkapan/add');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $config = [
            'allowed_types' => 'jpg|png|jpeg|jfif',
            'upload_path' => './asset/images/gunung',
            'detect_mime' => true,
            'encrypt_name' => true
        ];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images')) {
            $images = $this->upload->data('file_name');
        } else {
            echo $this->upload->display_errors();
        }

        $imageName = $images;

        $data = [
            'nama_perlengkapan' => $this->input->post('nama_perlengkapan'),
            'ket_singkat' => $this->input->post('ket_singkat'),
            'gambar' => $imageName,

        ];
        //    $this->session->set_flashdata('success','Data Berhasil Ditambahkan');
        $this->Perlengkapan_M->insert($data);
        // message
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
        redirect('Perlengkapan/index');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data';
        $data['perlengkapan'] = $this->db->get_where('tb_perlengkapan', ['id_perlengkapan' => $id])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('perlengkapan/update', $data);
        $this->load->view('layout/footer');
    }

    public function update()
    {
        $config = [
            'allowed_types' => 'jpg|png|jpeg|jfif',
            'upload_path' => './asset/images/gunung',
            'detect_mime' => true,
            'encrypt_name' => true
        ];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images')) {
            $image = $this->upload->data('file_name');
        } else {
            echo $this->upload->display_errors();
        }

        $imageName = $image;

        $data = [
            'id_perlengkapan' => $this->input->post('id_perlengkapan'),
            'nama_perlengkapan' => $this->input->post('nama_perlengkapan'),
            'gambar' => $imageName,
            'ket_singkat' => $this->input->post('ket_singkat'),
        ];
        $this->Perlengkapan_M->update($data);
        // message
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('perlengkapan/index');
    }

    public function delete($id)
    {
        $this->Perlengkapan_M->delete($id);
        // message
        $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        redirect('Perlengkapan');
    }
}

/* End of file Perlengkapan.php */
