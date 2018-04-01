<?php
class Biodata extends CI_Model {

	public function get_last_ten_queries()
	{
		$query = $this->db->get('biodata', 10);
		return $query->result();
	}

	// public function insert_entry()
	// {
	// 	$this->title = $_POST['title'];
	// 	$this->content = $_POST['content'];
	// 	$this->date = time();

	// 	$this->db->insert('entries', $this);
	// }

	// public function update_entry()
	// {
	// 	$this->title = $_POST['title'];
	// 	$this->content = $_POST['content'];
	// 	$this->date = time();

	// 	$this->db->update('entries', $this, array('id' => $_POST['id']));
	// }
}
?>