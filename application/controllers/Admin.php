<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function index()
	{
		$this->load->model('Admin_model');
		$this->load->view('user');
	}

public function tampil_user()
	{
		$this->load->model('Admin_model');
		$data['tampil_user'] = $this->Admin_model->tampil_user();
		$this->load->view('user', $data);
	}

public function ubah_user($id){

		$this->load->model('Admin_model');

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	    if($this->input->post('simpan'))
		    {
		    	// $upload=$this->User_model_ctrl->upload();
		    	$this->Admin_model->update_user($id);
		        redirect('Admin/tampil_user');
		    } 
		    $data['tampil'] = $this->Admin_model->view_by_user($id);

	    $this->load->helper('form');
	    $this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[users.nama]',
		array(
				'required' 		=> 'Harap " %s " di isi agar bisa di simpan',
				'is_unique' 	=> 'Username ' .$this->input->post('nama'). ' sudah ada!'
			));
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('kodepos', 'Kode Pos', 'required|numeric|min_length[5]',
			array(
				'required' 		=> 'Isi %s, tidak boleh kosong',
				'min_length' 	=> 'angka %s belum mencapai limit',
			));
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('no_telp', 'No HP', 'required|numeric|min_length[12]',
			array(
				'required' 		=> 'Isi %s, tidak boleh kosong',
				'min_length' 	=> 'angka %s belum mencapai limit',
			));
		$this->form_validation->set_rules('username', 'Nama', 'required|is_unique[users.username]',
		array(
				'required' 		=> 'Harap " %s " di isi agar bisa di simpan',
				'is_unique' 	=> 'Username ' .$this->input->post('username'). ' sudah ada!'
			));
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE)
		{
			echo "SUKSES";
		}
		else
		{
			$this->load->view('ubah_user', $data);
		}
	 }

public function hapus_user($id) //ADMIN
	{
		$this->load->model('Admin_model');

	    $this->Admin_model->delete_user($id);
	    redirect('Admin/tampil_user');
	}
}
?>