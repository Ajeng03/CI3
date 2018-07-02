<?php
class Admin_model extends CI_Model {

public function tampil_user()
	{
		$this->db->select('*');
		$query = $this->db->get('users');
		return $query->result();
	}

public function update_user($id)
	{
		if ($upload['result'] == 'success') 
		{
			$data = array(
				'user_id' => '',
				'nama' => $this->input->post('nama'),
				'gender' => $this->input->post('gender'),
				'kodepos' => $this->input->post('kodepos'),
				'email' => $this->input->post('email'),
				'no_telp' => $this->input->post('input_no_telp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('input_password')
			);
		}
		else
		{
			$data = array(
				'nama' => $this->input->post('nama'),
				'gender' => $this->input->post('gender'),
				'kodepos' => $this->input->post('kodepos'),
				'email' => $this->input->post('email'),
				'no_telp' => $this->input->post('input_no_telp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('input_password')
			);
		}	    

		$this->db->where('user_id', $id);
		$this->db->update('users', $data);
	}

	public function view_by_user($id)
	{
		$this->db->where('user_id', $id);
		return $this->db->get('users')->row();
	}

public function delete_user($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('users');
	}

}
?>