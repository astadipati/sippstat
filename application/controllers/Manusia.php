<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manusia extends CI_Controller {

	public function index()
	{
		$this->load->view('manusia');
	}

	public function makan()
	{
		$data['makanan']="Daftar Makanan";
		$this->load->view('daftarmakanan', $data);
	}
}
