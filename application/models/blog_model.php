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
}
?>