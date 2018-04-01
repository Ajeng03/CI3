<?php
/**
* 
*/
class Biodata extends CI_Controller
{
	
	public function Index()
	{
		$this->load->model('biodata');

		$data['b']=$this->biodata->get_last_ten_queries();

		print_r($data);

		// $this->load->view('biodata', $data);
	}
}
?>