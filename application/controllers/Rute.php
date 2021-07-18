<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rute extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        block();
        $this->load->model('Rute_M');
    }

    public function index()
    {
        $data = [
            'judul' => 'Daftar Rute Pendakian',
            'rute' => $this->Rute_M->getData()
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('rute/index', $data);
        $this->load->view('layout/footer');
    }
    public function add()
    {
        $data = [
            'judul' => 'Tambah Rute',

        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('rute/add');
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
            'nama_rute' => $this->input->post('nama_rute'),
            'gambar' => $imageName,
            'ket_singkat' => $this->input->post('ket_singkat'),

        ];
        //    $this->session->set_flashdata('success','Data Berhasil Ditambahkan');
        $this->Rute_M->insert($data);
        // message
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
        redirect('Rute/index');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data';
        $data['rute'] = $this->db->get_where('tb_rute', ['id_rute' => $id])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('rute/update', $data);
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
            'id_rute' => $this->input->post('id_rute'),
            'nama_rute' => $this->input->post('nama_rute'),
            'gambar' => $imageName,
            'ket_singkat' => $this->input->post('ket_singkat'),
        ];
        $this->Rute_M->update($data);
        // message
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('rute/index');
    }

    public function delete($id)
    {
        $this->Rute_M->delete($id);
        // message
        $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        redirect('Rute/index');
    }
}

/* End of file Rute.php */
