<?php 

/**
* 
*/
class reg_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function new_user($data)
	{
		$this->db->insert('pjs_users',$data);
	}
}

 ?>