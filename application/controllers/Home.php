<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
    {
    	$this->load->view('praktikum1');

    	if ($this->session->userdata('level') == 1) 
    	{
			$data['level'] = TRUE;
		} 
		else 
		{
			$data['level'] = FALSE;
		}
    	
    	$this->load->model('blog_model');
    	$data['blog_model'] = $this->blog_model->get_artikels();
    	//$this->load->view('blog_view', $data);

    	$data['blog_model'] = 'blog_model';

        // Dapatkan data dari model Blog dengan pagination
        // Jumlah artikel per halaman
        $limit_per_page = 6;

        // URI segment untuk mendeteksi "halaman ke berapa" dari URL
        $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

        // Dapatkan jumlah data
        $total_records = $this->blog_model->get_total();

        if ($total_records > 0) {
		    // Dapatkan data pada halaman yg dituju
		    $data['blog_model'] = $this->blog_model->get_all_artikel($limit_per_page, $start_index);
		    
		    // Konfigurasi pagination
		    $config['base_url'] = base_url() . 'blog/index';
		    $config['total_rows'] = $total_records;
		    $config['per_page'] = $limit_per_page;
		    $config["uri_segment"] = 3;
		    
		    $this->pagination->initialize($config);
		        
		    // Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}		
	}

	public function blog()
	{
		if ($this->session->userdata('level') == 1) 
    	{
			$data['level'] = TRUE;
		} 
		else 
		{
			$data['level'] = FALSE;
		}
		// var_dump($this->session->userdata);
		$this->load->model('blog_model');
		$data['tampil'] = $this->blog_model->tampil();
		$this->load->view('blog_view',$data);
	}
	public function tampil_blog($id)
	{
		if ($this->session->userdata('level') == 3) 
		{
			$this->session->set_flashdata('Maaf Anda bukan VIP', 'Tidak bisa akses halaman ini!');
			redirect('home/blog');
		}

		$this->load->model('blog_model');
		$data['tampil'] = $this->blog_model->tampil_id($id,'id');
		$this->load->view('blog_detail',$data);
	}
	// PRAKTIKUM3
	public function tambah_artikel()
	{
		if ($this->session->userdata('level') == 3) 
		{
			$this->session->set_flashdata('Maaf Anda bukan Admin', 'Tidak bisa akses halaman ini!');
			redirect('login');
		}
		else
		{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

			$this->load->model('category_model');
			$this->load->model('blog_model');
			$data = array();
			
			$data['categories'] = $this->category_model->get_all_categories();

			$this->form_validation->set_rules('input_judul', 'Judul', 'required|is_unique[blog.judul]',
			array(
					'required' 		=> 'Harap " %s " di isi agar bisa di simpan',
					'is_unique' 	=> 'Judul ' .$this->input->post('input_judul'). ' sudah ada!'
				));
			$this->form_validation->set_rules('input_konten', 'Articel', 'required|max_length[750]',
				array(
					'required' 		=> 'Isi %s, tidak boleh kosong',
					'min_length' 	=> 'text %s belum mencapai limit',
				));
			$this->form_validation->set_rules('input_pengarang', 'Author', 'required');
			$this->form_validation->set_rules('input_gender', 'Gender', 'required');
			$this->form_validation->set_rules('input_kontak', 'Contact', 'required|numeric|min_length[12]',
				array(
					'required' 		=> 'Isi %s, tidak boleh kosong',
					'min_length' 	=> 'angka %s belum mencapai limit',
				));

			if ($this->form_validation->run() == TRUE)
			{
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
			}
			else
			{
				$this->load->view('tambah_konten', $data);
			}
		}
	
		//$this->load->view('tambah_konten', $data);
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
			$this->load->model('blog_model');
			$this->load->model('category_model');
			$data['categories'] = $this->category_model->get_all_categories();

		    if($this->input->post('simpan'))
		    {
		    	$upload=$this->blog_model->upload();
		    	$this->blog_model->edit($upload, $id);
		        redirect('home/blog');
		    }    	
		    $data['tampil'] = $this->blog_model->view_by($id);

		    //$this->load->view('ubah_konten', $data);

		    $this->load->helper('form');
		    $this->load->library('form_validation');

			// $this->load->helper(array('form', 'url'));
			// $this->load->library('form_validation');

			$this->form_validation->set_rules('input_judul', 'Judul', 'required|is_unique[blog.judul]',
			array(
					'required' 		=> 'Harap " %s " di isi agar bisa di simpan',
					'is_unique' 	=> 'Judul ' .$this->input->post('input_judul'). ' sudah ada!'
				));
			$this->form_validation->set_rules('input_konten', 'Articel', 'required|max_length[750]',
				array(
					'required' 		=> 'Isi %s, tidak boleh kosong',
					'min_length' 	=> 'text %s belum mencapai limit',
				));
			$this->form_validation->set_rules('input_pengarang', 'Author', 'required');
			$this->form_validation->set_rules('input_gender', 'Gender', 'required');
			$this->form_validation->set_rules('input_kontak', 'Contact', 'required|numeric|min_length[12]',
				array(
					'required' 		=> 'Isi %s, tidak boleh kosong',
					'min_length' 	=> 'angka %s belum mencapai limit',
				));

			if ($this->form_validation->run() == TRUE)
			{
				echo "SUKSES";
			}
			else
			{
				  $this->load->view('ubah_konten', $data);
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
			$this->load->model('blog_model');
		    $this->blog_model->delete($id);
		    redirect('home/blog');
		}
	}
}