<?php
class Blog_Model extends CI_Model {

	public function tampil()
	{
		$this->db->select('*');
		$query = $this->db->get('blog');
		return $query->result();
	}
	public function tampil_id($id,$primarykey)
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
			'tanggal_posting' => $this->input->post('input_post'),
			'image' => $upload['file']['file_name'],
			'pengarang' => $this->input->post('input_pengarang')
		);

		$this->db->insert('blog', $data);
	}
}
?>