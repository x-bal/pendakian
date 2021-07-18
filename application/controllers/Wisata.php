<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        block();
        $this->load->model('Wisata_M');
    }

    public function index()
    {
        $data = [
            'judul' => 'Daftar Wisata',
            'wisata' => $this->Wisata_M->getData()
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('wisata/index', $data);
        $this->load->view('layout/footer');
    }
    public function add()
    {
        $data = [
            'judul' => 'Tambah Wisata',
            'wisata' => $this->Wisata_M->getData()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('wisata/add', $data);
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
            'nama_wisata' => $this->input->post('nama_wisata'),
            'kategori' => $this->input->post('kategori'),
            'gambar' => $imageName,
            'alamat' => $this->input->post('alamat'),
            'ket_singkat' => $this->input->post('ket_singkat'),
            'ket_lengkap' => $this->input->post('ket_lengkap'),

        ];
        //    $this->session->set_flashdata('success','Data Berhasil Ditambahkan');
        $this->Wisata_M->insert($data);
        // message
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
        redirect('Wisata/index');
    }

    public function delete($id)
    {
        $this->Wisata_M->delete($id);
                // message
                $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        redirect('wisata/index');
    }
    public function edit($id)
    {
        $data['judul'] = 'Edit Data';
        $data['wisata'] = $this->db->get_where('tb_wisata', ['id_wisata' => $id])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('wisata/update', $data);
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
            'id_wisata' => $this->input->post('id_wisata'),
            'nama_wisata' => $this->input->post('nama_wisata'),
            'kategori' => $this->input->post('kategori'),
            'gambar' => $imageName,
            'alamat' => $this->input->post('alamat'),
            'ket_singkat' => $this->input->post('ket_singkat'),
            'ket_lengkap' => $this->input->post('ket_lengkap')
        ];
        $this->Wisata_M->update($data);
        // message
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('wisata/index');
    }
}

/* End of file Wisata.php */
