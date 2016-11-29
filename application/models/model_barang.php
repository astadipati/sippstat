<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model{

	function tampilkan_data(){
		return $this->db->get('barang');//sama dengan select * from barang
	}
}

 ?>