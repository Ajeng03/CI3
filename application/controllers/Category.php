<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('category_model');
		
		if ($this->session->userdata('level') == 3) 
		{
			$this->session->set_flashdata('Maaf Anda bukan Admin', 'Tidak bisa akses halaman ini!');
			redirect('home/blog');
		}
	}

	public function index()
	{
		if ($this->session->userdata('level') == 1) 
    	{
			$data['level'] = TRUE;
		} 
		else 
		{
			$data['level'] = FALSE;
		}

		$this->load->model('category_model');
		$data['categories'] = $this->category_model->get_all_categories();
		$this->load->view('cat_create', $data);
		// $data['category_model'] = $this->category_model->get_artikels();
		//$this->load->view('blog_view', $data);
	}

	public function artikel($id)
	{
		$data['page_title'] = $this->category_model->get_category_by_id($id)->cat_name;
		$data['all_artikel'] = $this->blog_model->get_artikel_by_category($id);
	}

	public function create()
	{
		if ($this->session->userdata('level') == 3) 
		{
			$this->session->set_flashdata('Maaf Anda bukan Admin', 'Tidak bisa akses halaman ini!');
			redirect('login');
		}
		else
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
			
			if ($this->form_validation->run() == TRUE)
			{
				if($this->input->post('simpan'))
			    {
			    	$this->category_model->create_category();	
			    	redirect('category');
			    }    	
			}
			else
			{
				  redirect('category');
			}
		}
	}

	public function ubah($id)
	{
		if ($this->session->userdata('level') == 3) 
		{
			$this->session->set_flashdata('Maaf Anda bukan Admin', 'Tidak bisa akses halaman ini!');
			redirect('login');
		}
		else
		{
			$this->load->model('category_model');
			$data['categories'] = $this->category_model->get_all_categories();

		    if($this->input->post('simpan'))
		    {
		    	$this->category_model->edit($id);
		        redirect('Category');
		    }    	
		    $data['tampil'] = $this->category_model->view_by($id);

		    $this->load->helper('form');
		    $this->load->library('form_validation');

			$this->form_validation->set_rules('cat_name', 'Kategori', 'required|is_unique[categories.cat_name]',
			array(
					'required' 		=> 'Harap " %s " di isi agar bisa di simpan',
					'is_unique' 	=> 'Judul ' .$this->input->post('cat_name'). ' sudah ada!'
				));
			$this->form_validation->set_rules('cat_description', 'Deskripsi', 'required|max_length[750]',
				array(
					'required' 		=> 'Isi %s, tidak boleh kosong',
					'min_length' 	=> 'text %s belum mencapai limit',
				));

			if ($this->form_validation->run() == TRUE)
			{
				echo "SUKSES";
			}
			else
			{
				  $this->load->view('ubah_kategori', $data);
			}
		}
	 }

	public function hapus($id) 
	{
		if ($this->session->userdata('level') == 3) 
		{
			$this->session->set_flashdata('Maaf Anda bukan Admin', 'Tidak bisa akses halaman ini!');
			redirect('login');
		}
		else
		{
			$this->load->model('category_model');
		    $this->category_model->delete($id);
		    redirect('category');
		}
	}
}