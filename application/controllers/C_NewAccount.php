<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_NewAccount extends CI_Controller {

	public function index()
	{
		// $this->load->library('form_validation');
		$this->load->view('V_NewAccount');
	}

	function authentification() {

		$this->load->model('M_NewAccount');

		$this->form_validation->set_rules('fullname', 'Nama', 'required',
            	array('required' => '<b>Kolom nama</b> tidak boleh kosong')
			);
		$this->form_validation->set_rules('password', 'Password', 'required',
				array('required' => 'Kolom password tidak boleh kosong')
			);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_unique_email',
			array('required' => 'Kolom email tidak boleh kosong',
				'valid_email' => 'Email tidak valid')
		);

		$this->form_validation->set_rules('address', 'Alamat', 'required',
			array('required' => 'Kolom alamat tidak boleh kosong')
		);
		$this->form_validation->set_rules('province', 'Provinsi', 'required',
            	array('required' => 'Kolom provinsi tidak boleh kosong')
			);
		$this->form_validation->set_rules('city', 'Kota', 'required',
				array('required' => 'Kolom kota tidak boleh kosong')
			);
		$this->form_validation->set_rules('birthday', 'Tanggal Lahir', 'required',
			array('required' => 'Kolom tanggal Lahir tidak boleh kosong')
		);

		$this->form_validation->set_rules('radioFruit', 'Agama', 'required',
			array('required' => 'Pilihan agama tidak boleh kosong')
		);

		$this->form_validation->set_rules('ijazah', 'Ijazah', 'callback_validate_ijazah_size|callback_validate_ijazah_existance|callback_validate_ijazah_extension');


		$this->form_validation->set_rules('skhun', 'SKHUN', 'callback_validate_skhun_size|callback_validate_skhun_existance|callback_validate_skhun_extension');


		$this->form_validation->set_rules('fakultas1', 'Fakultas Pilihan 1', 'required',
			array('required' => 'Pilihan fakultas pertama tidak boleh kosong')
		);
		$this->form_validation->set_rules('jurusan1', 'Jurusan Pilihan 1', 'required',
			array('required' => 'Pilihan Jurusan pertama tidak boleh kosong')
		);
		$this->form_validation->set_rules('fakultas2', 'Fakultas Pilihan 2', 'required',
			array('required' => 'Pilihan fakultas kedua tidak boleh kosong')
		);
		$this->form_validation->set_rules('jurusan2', 'Jurusan Pilihan 2', 'required',
			array('required' => 'Pilihan Jurusan kedua tidak boleh kosong')
		);

		if ($this->form_validation->run() == False) {
			$this->load->view('V_NewAccount');
        } else {
			$id = $this -> addAccount();
			$this->session->set_userdata('id', $id);
			redirect('C_Mahasiswa/index');
		}
	}

	public function addAccount() {
		$this->load->view('V_NewAccount');


		$rownum = $this->M_NewAccount->countRows();
		$currentRow = $rownum + 1;
		$id = 'M'.$currentRow;
		$id_pembayaran = 'P'.$currentRow;
		$id_pilihan = 'C'.$currentRow;

		$data_member = array(
			'id' 			=> $id,
			'id_pembayaran' => $id_pembayaran,
			'id_pilihan' 	=> $id_pilihan,
			'name' 			=> $this->input->post('fullname'),
			'email' 		=> $this->input->post('email'),
			'password' 		=> $this->input->post('password'),
			'address' 		=> $this->input->post('address'),
			'province' 		=> $this->input->post('province'),
			'city' 			=> $this->input->post('city'),
			'birthday' 		=> $this->input->post('birthday'),
			'ijazah' 		=> 'ijazah-'.$id,
			'SKHUN' 		=> 'skhun-'.$id,
			'religion' 		=> $this->input->post('radioFruit')
		);

		$data_pembayaran = array(
			'id' 				=> $data_member['id'],
			'id_pembayaran' 	=> $id_pembayaran,
			'bukti_pembayaran' 	=> null,
			'status_pembayaran' => '0'
		);

		$data_pilihan = array(
			'id' 				=> $data_member['id'],
			'id_pilihan' 		=> $id_pilihan,
			'fakultas1' 		=> $this->input->post('fakultas1'),
			'jurusan1' 			=> $this->input->post('jurusan1'),
			'fakultas2' 		=> $this->input->post('fakultas2'),
			'jurusan2' 			=> $this->input->post('jurusan2'),
			'status_pilihan' 	=> '0'
		);

        $configIjazah['upload_path'] 			= './assets/uploads/';
		$configIjazah['allowed_types'] 			= 'png';
		$configIjazah['file_name'] 				= $data_member['ijazah'];

		$configSkhun['upload_path'] 			= './assets/uploads/';
		$configSkhun['allowed_types'] 			= 'png';
		$configSkhun['file_name'] 				= $data_member['SKHUN'];

		$this->load->library('upload', $configIjazah);

		$this->upload->do_upload('ijazah');
		$result1 = $this->upload->data();

		$this->upload->initialize($configSkhun);

		$this->upload->do_upload('skhun');
		$result2 = $this->upload->data();
        
		$this->M_NewAccount->register($data_member, $data_pembayaran, $data_pilihan);

		return $id;
	}

	public function unique_email($email) {
		$this->load->model('M_NewAccount');
		$status = $this->M_NewAccount->checkEmail($email);

		if ($status == 1) {
			$this->form_validation->set_message('unique_email', 'Email sudah terdaftar');
			return False;
		}
		return True;
	}

	public function validate_ijazah_existance() {
		$ijazahSizeStatus = True;

		if ($_FILES["ijazah"]["size"] == 0) {
			$ijazahSizeStatus = False;
		} 

		if ($ijazahSizeStatus == True) {
			return True;
		} else {
			$this->form_validation->set_message('validate_ijazah_existance', 'Kolom ijazah tidak boleh kosong');
			return False;
		}
	}

	public function validate_skhun_existance() {
		$skhunSizeStatus = True;

		if ($_FILES["skhun"]["size"] == 0) {
			$skhunSizeStatus = False;
		} 

		if ($skhunSizeStatus == True) {
			return True;
		} else {
			$this->form_validation->set_message('validate_skhun_existance', 'Kolom skhun tidak boleh kosong');
			return False;
		}
	}

	public function validate_skhun_extension() {
		$allowed = array('png');
		$skhunExtensionStatus = True;

		$skhun = $_FILES['skhun']['name'];
		$skhun = strtolower($skhun);
		$skhunExtension = pathinfo($skhun, PATHINFO_EXTENSION);
		if(!in_array($skhunExtension,$allowed) ) {
			$skhunExtensionStatus = False;
		}


		if ($skhunExtensionStatus == True) {
			return True;
		} else {
			$this->form_validation->set_message('validate_skhun_extension', 'Tipe file skhun tidak valid');
			return False;
		}
	}

	public function validate_skhun_size() {
		$skhunSizeStatus = True;

		if ($_FILES["skhun"]["size"] > 2000000) {
			$skhunSizeStatus = False;
		}

		if ($skhunSizeStatus == True) {
			return True;
		} else {
			$this->form_validation->set_message('validate_skhun_size', 'Ukuran file skhun melebihi 2MB');
			return False;
		}
	}

	public function validate_ijazah_extension() {
		$allowed = array('png');
		$ijazahExtensionStatus = True;
		
		$ijazah = $_FILES['ijazah']['name'];
		$ijazah = strtolower($ijazah);
		$ijazahExtension = pathinfo($ijazah, PATHINFO_EXTENSION);
		if(!in_array($ijazahExtension,$allowed) ) {
			$ijazahExtensionStatus = False;
		}

		if ($ijazahExtensionStatus == True) {
			return True;
		} else {
			$this->form_validation->set_message('validate_ijazah_extension', 'Tipe file ijazah tidak valid');
			return False;
		}
	}

	public function validate_ijazah_size() {
		$ijazahSizeStatus = True;

		if ($_FILES["ijazah"]["size"] > 2000000) {
			$ijazahSizeStatus = False;
		}

		if ($ijazahSizeStatus == True) {
			return True;
		} else {
			$this->form_validation->set_message('validate_ijazah_size', 'Ukuran file ijazah melebihi 2MB');
			return False;
		}
	}
}
