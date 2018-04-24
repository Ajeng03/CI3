<?php
class Category_model extends CI_Model {

	public function create_category($data)
	{

		// $data = array (
		// 	'id' => '',
		// 	'cat_name' => $this->input->post('cat_name'),
		// 	'cat_description' => $this->input->post('cat_description'),
		// 	'data_created' => ''
		// );

		return $this->db->insert('categories', $data); 
	}
}