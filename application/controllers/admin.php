<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		// mengambil dari folder models
		$this->load->model('m_pendaftran');

		// Jadi getSiswa ditampung didalam data siswa 
		$data['pendaftaran'] = $this->m_pendaftaran->getPendaftaran();

		// mengambil view admin // mengambil getpendaftaran didalam $data
		
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('v_admin', $data);
		$this->load->view('template/footer');
	}
	public function hapus($id){
		$this->db->delete('pendaftaran',['id' => $id]);
		redirect('admin');
	}
	public function edit($id){
		$this->load->model('m_pendaftaran');
		// mengambil data pendaftaran berdasarkan id
		$data['edit'] = $this->m_pendaftaran->getpendaftaranById($id);
		$data['alamat'] = $this->db->get('alamat')->result_array();

		$this->load->view('template/header');
		$this->load->view('v_edit' , $data);
		$this->load->view('template/footer');
	}
	public function update(){
		$data = 
		[
			"nama" => $this->input->post('nama',true),
			"id_alamat" => $this->input->post('alamat',true),
			"no_telp" => $this->input->post('notelp',true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pendaftaran', $data);
		redirect('admin');
	}
}