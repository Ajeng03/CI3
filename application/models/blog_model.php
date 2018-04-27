<?php
class Blog_Model extends CI_Model {

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('categories', 'blog.id_cat= categories.id_cat');
		return $this->db->get()->result();
	}
	public function tampil_id($id, $primarykey)
	{
		$this->db->where($primarykey,$id);
		$query = $this->db->get('blog');
		return $query->result();
	}

	public function upload()
	{
		$config['upload_path'] = './assets/picture/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('input_gambar')) {
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}
		else
		{
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function insert($upload)
	{
		$data = array(
			'id' => '',
			'judul' => $this->input->post('input_judul'),
			'konten_artikel' => $this->input->post('input_konten'),
			'id_cat' => $this->input->post('id_cat'),
			'tanggal_posting' => date('Y-m-d'),
			'image' => $upload['file']['file_name'],
			'pengarang' => $this->input->post('input_pengarang'),
			'gender' => $this->input->post('input_gender'),
			'kontak' => $this->input->post('input_kontak')
		);

		$this->db->insert('blog', $data);
	}

	public function edit($upload, $id)
	{
		if ($upload['result'] == 'success') 
		{
			$data = array(
				'judul' => $this->input->post('input_judul'),
				'konten_artikel' => $this->input->post('input_konten'),
				'id_cat' => $this->input->post('id_cat'),
				'image' => $upload['file']['file_name'],
				'pengarang' => $this->input->post('input_pengarang'),
				'gender' => $this->input->post('input_gender'),
				'kontak' => $this->input->post('input_kontak')
	    );
	    }
	    else
	    {
	    	$data = array(
				'judul' => $this->input->post('input_judul'),
				'konten_artikel' => $this->input->post('input_konten'),
				'id_cat' => $this->input->post('id_cat'),
				'pengarang' => $this->input->post('input_pengarang'),
				'gender' => $this->input->post('input_gender'),
				'kontak' => $this->input->post('input_kontak')
	    );
	    }	    
	    
	    $this->db->where('id', $id);
	    $this->db->update('blog', $data);
	}

	public function view_by($id)
	{
	    $this->db->where('id', $id);
	    return $this->db->get('blog')->row();
	}

	public function delete($id)
	{
	    $this->db->where('id', $id);
	    $this->db->delete('blog');
	}

	public function create_category()
	{

		$data = array (
			'id_cat' => '',
			'cat_name' => $this->input->post('cat_name'),
			'cat_description' => $this->input->post('cat_description'),
			'date_created' => ''
		);

		return $this->db->insert('categories', $data); 
	}
}
?>