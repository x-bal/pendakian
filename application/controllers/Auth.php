<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_M');
    }
    public function index()
    {
        // $this->load->view('core/header');
        $this->load->view('auth/login');
        // $this->load->view('core/footer');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password Tidak Boleh Kosong'
        ]);

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $user = $this->User_M->first($username);
        }
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('id_admin', $user['id_admin']);
                
                // message
                $this->session->set_flashdata('success', 'Selamat Datang Admin');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('warning', 'Password yang dimasukan salah');
                redirect(base_url('auth'));
            }
        } else {
            $this->session->set_flashdata('warning', 'User tidak ditemukan');
            redirect(base_url('auth'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect(base_url(''));
    }
}



/* End of file Auth.php */
