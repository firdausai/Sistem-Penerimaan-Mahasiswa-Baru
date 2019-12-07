<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Mahasiswa extends CI_Controller {

	public function index() {
		$data = $this->getData($this->session->id);
		$this->load->view('V_Mahasiswa', $data);
	}

	public function getData($id) {
		$this->load->model('M_Mahasiswa');

		return $this->M_Mahasiswa->data($id);
	}

	public function logout() {
		session_destroy();
		redirect('C_Login/index');
	}

	public function addData(){
		$this->load->model('M_Mahasiswa');

		$this->form_validation->set_rules('bukti_pembayaran', 'Bukti Pembayaran', 'callback_validate_bp_existance|callback_validate_bp_extension|callback_validate_bp_size');

		if ($this->form_validation->run() == False) {
			$data = $this->getData($this->session->id);
			$this->load->view('V_Mahasiswa', $data);
        } else {
			$status = $this->M_Mahasiswa->checkPicture($this->input->post('BP'));

			if ($status == False) {

				$id = $this->input->post('BP');
				$file_name = 'BP-'.$id;

				$data_bukti = array(
					'bukti_pembayaran'  => $file_name,
					'status_pembayaran'	=> '1'
				);
			
				$id = $this->session->id;
			
				$configpembayaran['upload_path']    	= './assets/uploads/';
				$configpembayaran['allowed_types']    	= 'gif|jpg|png|pdf';
				$configpembayaran['file_name']     		= $file_name;
				$configpembayaran['overwrite']    	    = True;

				$this->load->library('upload', $configpembayaran);
			
				$this->upload->do_upload('bukti-pembayaran');
				$result1 = $this->upload->data();
			
				$this->M_Mahasiswa->addPicture($id, $data_bukti);

			}
			redirect('C_Mahasiswa/index');
		}
	}

	public function validate_bp_existance() {
		$skhunSizeStatus = True;

		if ($_FILES["bukti-pembayaran"]["size"] == 0) {
			$skhunSizeStatus = False;
		} 

		if ($skhunSizeStatus == True) {
			return True;
		} else {
			$this->form_validation->set_message('validate_bp_existance', 'Kolom bukti pembayaran tidak boleh kosong');
			return False;
		}
	}

	public function validate_bp_extension() {
		$allowed = array('png');
		$skhunExtensionStatus = True;

		$skhun = $_FILES['bukti-pembayaran']['name'];
		$skhun = strtolower($skhun);
		$skhunExtension = pathinfo($skhun, PATHINFO_EXTENSION);
		if(!in_array($skhunExtension,$allowed) ) {
			$skhunExtensionStatus = False;
		}

		if ($skhunExtensionStatus == True) {
			return True;
		} else {
			$this->form_validation->set_message('validate_bp_extension', 'Tipe file bukti pembayaran tidak valid');
			return False;
		}
	}

	public function validate_bp_size() {
		$skhunSizeStatus = True;

		if ($_FILES["bukti-pembayaran"]["size"] > 2000000) {
			$skhunSizeStatus = False;
		} 

		if ($skhunSizeStatus == True) {
			return True;
		} else {
			$this->form_validation->set_message('validate_bp_size', 'Ukuran file skhun melebihi 2MB');
			return False;
		}
	}
}
