<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function index()
	{
		$this->load->view('cat_create');
	}

	public function create()
	{

		$this->load->model('category_model');

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('cat_name', 'Kategori', 'required|is_unique[categories.cat_name]',
		array(
				'required' 		=> 'Harap " %s " di isi agar bisa di simpan',
				'is_unique' 	=> 'Judul ' .$this->input->post('cat_name'). ' sudah ada!'
			));
		$this->form_validation->set_rules('cat_description', 'Deskripsi', 'required');

		// $data = array(
		// 	'id' => '',
		// 	'cat_name' => $this->input->post('cat_name'),
		// 	'cat_description' => $this->input->post('cat_description'),
		// 	'date_created' => ''
		// );
		$this->load->view('cat_create');
		$this->category_model->create_category();

		 // if(empty($data['upload_error']))
		 // {
		 // 	$this->category_model->create_category($data);
		 // 	$this->load->view('cat_create', $data);
		 // }		
	}
}