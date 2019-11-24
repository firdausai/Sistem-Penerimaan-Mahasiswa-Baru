<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function index()
	{
		$this->load->view('V_Login');
	}

	function authentification() {
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$address = $this->input->post('address');
		$province = $this->input->post('province');
		$city = $this->input->post('city');
		$dateofbirth = $this->input->post('birthday');
		$religion = $this->input->post('radioFruit');
		$ijazah = $this->input->post('ijazah');
		$SKHUN = $this->input->post('skhun');
		$fakultas1 = $this->input->post('fakultas1');
		$jurusan1 = $this->input->post('jurusan1');
		$fakultas2 = $this->input->post('fakultas1');
		$jurusan2 = $this->input->post('jurusan1');
		
	}
}
