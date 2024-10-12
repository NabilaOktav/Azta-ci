<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    public function index() {
		$this->load->view('template/header');
		$this->load->view('v_daftar');
		$this->load->view('template/footer');
	}

    public function save() {
        $this->load->model('m_user');
		$data['user'] = $this->m_user->saveUser();
        $this->session->set_flashdata('message','<h1>User Berhasil ditambahkan</h1>');
		redirect('login');
    }
}

?>