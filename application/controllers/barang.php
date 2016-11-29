<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{

	function index(){

	}

	function elektronik(){
		$data['title'] = "Daftar Barang Elektronik";
		$this->load->model('model_barang');
		$data['list_barang'] = $this->model_barang->tampilkan_data();
		$this->load->view('barang/daftarbarang',$data);
	}
}

?>