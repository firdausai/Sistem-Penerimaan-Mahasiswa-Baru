<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Keuangan extends CI_Controller {

	public function index()
	{
		$data['query'] = $this -> getData();
		$this->load->view('V_Keuangan', $data);
	}

	public function getData() {
		$this->load->model('M_Keuangan');
		$query = $this->M_Keuangan->queryData();

		return $query;
	}

	public function logout() {
		session_destroy();
		redirect('C_Login/index');
	}

	public function warning() {
		$this->load->model('M_Keuangan');

		$updated_data = array(
			'status_pembayaran' => '2',
		);

		$this->M_Keuangan->updateStatus($this->input->post('warning-btn'), $updated_data);

		redirect('C_Keuangan/index');

	}

	public function accept() {
		$this->load->model('M_Keuangan');

		$updated_data = array(
			'status_pembayaran' => '3',
		);

		$this->M_Keuangan->updateStatus($this->input->post('accept-btn'), $updated_data);

		redirect('C_Keuangan/index');

	}
}