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

		$data = array(
			'id' => '',
			'cat_name' => $this->input->post('cat_name'),
			'cat_description' => $this->input->post('cat_description'),
			'date_created' => ''
		);

		if(empty($data['upload_error']))
		{
			$this->category_model->create_category($data);
			$this->load->view('cat_create', $data);
		}		
	}
}