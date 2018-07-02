<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('login');		
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!'
			));
		$this->form_validation->set_rules('password', 'Password', 'required',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!'
			));
		if ($this->form_validation->run() === FALSE) 
		{
			$this->load->view('login');
		} 
		else 
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$id_user = $this->user_model->login($username, $password);
			if ($id_user) 
			{
				$level = $this->user_model->get_user($id_user);
				$user_data = array(
					'id' => $id_user,
					'username' => $username,
					'logged_in' => true,
					'level' => $level[0]->level_id
				);
				var_dump($level);
				die();

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('Selamat Anda berhasil login', 'Welcome');
				redirect('home/blog');
			} 
			else 
			{
				$this->session->set_flashdata('Maaf Anda gagal login', 'Try Again!');
				redirect('login');
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		$this->session->set_flashdata('Anda telah Logout', 'Thank You!');
		redirect('login');
	}
}