<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manusia extends CI_Controller {

	public function index()
	{
		$this->load->view('manusia');
	}

	public function makan()
	{
		$data['makanan']="Daftar Makanan"; //parsing data
		$this->load->view('daftarmakanan', $data);
	}

	public function minum()
	{
		$data['minuman'] = array('air putis','teh','kopi','susu' ); //parsing data array
		$this->load->view('daftarminuman', $data);
	}

	public function belajar(){
		$judul['title'] = ('Sedang Belajar');
		$data['belajar']= array('Matematika', 'fisika','biologi','ips', 'ipa', 'pai');
		$this->load->view('belajar/belajar', $data, $judul);
	}
}
