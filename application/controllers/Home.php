<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// PRAKTUKUM1
	public function index()
	{
		$this->load->view('praktikum1');
	}
	// PRAKTUKUM2
	public function blog()
	{
		$this->load->model('blog_model');
		$data['tampil'] = $this->blog_model->tampil();
		$this->load->view('blog_view',$data);
	}
	public function tampil_blog($id)
	{
		$this->load->model('blog_model');
		$data['tampil'] = $this->blog_model->tampil_id($id,'id');
		$this->load->view('blog_detail',$data);
	}
	// PRAKTIKUM3
	public function tambah_artikel()
	{
		$this->load->model('blog_model');
		$data = array();

		if ($this->input->post('simpan'))
		{
			$upload = $this->blog_model->upload();

			if ($upload['result'] == 'success')
			{
				$this->blog_model->insert($upload);
				redirect('home/blog');
			}
			else
			{
				$data['messege'] = $upload['error'];
			}
		}

		$this->load->view('tambah_konten', $data);
	}

	public function ubah($id){
		$this->load->model('blog_model');
	    if($this->input->post('simpan'))
	    {
	    	$upload=$this->blog_model->upload();
	    	$this->blog_model->edit($upload, $id);
	        redirect('home/blog');
	    }    	
	    $data['tampil'] = $this->blog_model->view_by($id);
	    $this->load->view('ubah_konten', $data);
	 }

	public function hapus($id) 
	{
		$this->load->model('blog_model');

	    $this->blog_model->delete($id);
	    redirect('home/blog');
	}
}