<?php

class Barang extends CI_Controller{
	function index(){
		//echo "Hallo";
		$this->load->model('model_barang');
		// $barang = $this->model_barang->list_barang()->result();
		// print_r($barang);
		// die;
		$judul = "Daftar Barang";
		$data['judul'] = $judul;
		// $data['barang'] = $this->model_barang->list_barang();
		$data['barang'] = $this->model_barang->list_barang()->result();
		$this->load->view('list_barang', $data); //passing
	}
	function edit(){
		echo $this->uri->segment(2);
		// echo "edit";
	}
}