<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function index()
	{
		$msg['warning'] = '-1';
		$this->load->view('V_Login',$msg);
		$this->load->model('M_Login');
	}

	public function login(){
		$this->load->model('M_Login');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$login = $this->M_Login->login_user($email, $password);

		if ($login) {
			$id = $this->M_Login->getId($email, $password);
			$this->session->set_userdata('id', $id['id']);
	      	redirect('C_Mahasiswa/index');
	    }elseif ($email == "keuangan" && $password=="keuangan"){
	    	redirect('C_Keuangan/index');
	    }elseif($email =="admin" &&  $password=="admin"){
	  		redirect('C_Admin/index');
	    }else {
			$status = $this->M_Login->getEmail($this->input->post('email'));

			if ($email == '' && $password == '') {
				$msg['warning'] = '1';
				$this->load->view('V_Login',$msg);
			} else if ($email == '') {
				$msg['warning'] = '2';
				$this->load->view('V_Login',$msg);
			} else if ($password == '') {
				$msg['warning'] = '3';
				$this->load->view('V_Login',$msg);
			} else if ($status == True) {
				$msg['warning'] = '4';
				$this->load->view('V_Login',$msg);
			} else if ($status == False) {
				$msg['warning'] = '5';
				$this->load->view('V_Login',$msg);
			}

			
	      	// redirect('C_Login/index');
	    }
	}
	
	public function register(){

		$this->load->model('M_Login');
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$address = $this->input->post('address');
		$province = $this->input->post('province');
		// $city = $this->input->post('city');
		// $dateofbirth = $this->input->post('birthday');
		// $religion = $this->input->post('radioFruit');
		// $ijazah = $this->input->post('ijazah');
		// $SKHUN = $this->input->post('skhun');
		// $fakultas1 = $this->input->post('fakultas1');
		// $jurusan1 = $this->input->post('jurusan1');
		// $fakultas2 = $this->input->post('fakultas2');
		// $jurusan2 = $this->input->post('jurusan2');
		$table = 'account';

		$data_insert = array (
			'name' => $fullname,
			'email' => $email,
			'password' => $password,
			'address' => $address,
			'province' => $province
		);

		$register = $this->M_Login->register_user($table,$data_insert);

		if ($register) {
      	redirect('C_Login/index');
    	}
	}
}
