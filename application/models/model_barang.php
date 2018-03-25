<?php

class model_barang extends CI_Model{

	function list_barang(){
		//$barang = array('sepatu', 'jam tangan', 'robot');
		$barang = $this->db->get('barang');
		return $barang;
	}
}