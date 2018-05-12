<?php
class Category_model extends CI_Model {

	// public function get_artikels()
 //   {
	//    $query = $this->db->get('blog');
 //   }

 //   public function get_total()
 //    {
 //       // Dapatkan jumlah total artikel
 //       return $this->db->count_all('blog');
 //    }

 //    public function get_all_artikel( $limit = FALSE, $offset = FALSE )
 //    {
	//    // Jika variable $limit ada pada parameter maka kita limit query-nya
	//    if ( $limit )
	//    {
	//        $this->db->limit($limit, $offset);
	//    }
	//    // Urutkan berdasar tanggal
	//    $this->db->order_by('blog.tanggal_posting', 'DESC');

	//    // Inner Join dengan table Categories
	//    $this->db->join('categories', 'categories.id_cat = blog.id_cat');
	  
	//    $query = $this->db->get('blog');

	//    // Return dalam bentuk object
	//    return $query->result();
	// }

	public function create_category()
	{
		$data = array (
			'id_cat' => '',
			'cat_name' => $this->input->post('cat_name'),
			'cat_description' => $this->input->post('cat_description'),
			'date_created' => date('Y-m-d')
		);

		$this->db->insert('categories', $data); 
	}

	public function get_all_categories()
	{
		$this->db->order_by('cat_name');
		$query = $this->db->get('categories');
		return $query->result();
	}

	public function get_category_by_id($id)
	{
		$query = $this->db->get_where('categories', array('id_cat' => $id));
		return $query->row();
	}

	public function edit($id)
	{
			$data = array(
				'cat_name' => $this->input->post('cat_name'),
				'cat_description' => $this->input->post('cat_description'),
	    );    
	    
	    $this->db->where('id_cat', $id);
	    $this->db->update('categories', $data);
	}

	public function delete($id)
	{
	    $this->db->where('id_cat', $id);
	    $this->db->delete('categories');
	}
	public function view_by($id)
	{
	    $this->db->where('id_cat', $id);
	    return $this->db->get('categories')->row();
	}
}