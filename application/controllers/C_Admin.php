<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

	public function index()
	{
		$data['query'] = $this -> getData();
		$this->load->view('V_Admin', $data);
	}

	public function logout() {
		session_destroy();
		redirect('C_Login/index');
	}

	public function accept1() {
		$this->load->model('M_Admin');

		$updated_data = array(
			'status_pilihan' => '1',
		);

		$this->M_Admin->updateStatus($this->input->post('P1'), $updated_data);

		redirect('C_Admin/index');

	}

	public function accept2() {
		$this->load->model('M_Admin');

		$updated_data = array(
			'status_pilihan' => '2',
		);

		$this->M_Admin->updateStatus($this->input->post('P2'), $updated_data);

		redirect('C_Admin/index');

	}

	public function denied() {
		$this->load->model('M_Admin');

		$updated_data = array(
			'status_pilihan' => '3',
		);

		$this->M_Admin->updateStatus($this->input->post('P3'), $updated_data);

		redirect('C_Admin/index');
	}

	public function getData() {
		$this->load->model('M_Admin');
		$query = $this->M_Admin->queryData();

		return $query;
	}
}
