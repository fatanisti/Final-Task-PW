<?php

class Item_Database extends CI_Model {

	function __construct()
	{
		$this->load->database();
	}

	public function insert_item($data) {
		$this->db->insert('pjs_items',$data);
	}

	public function show_item($data)
	{
		$condition = "namaBarang =" . "'" . $data['namaBarang'] . "' AND " . "user_name =" . "'" . $data['user_name'] . "'";
        $this->db->select('*');
        $this->db->from('pjs_items');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
	}

	public function get_kategori($kategori)
	{
		$condition = "kategori =" . "'" . $kategori."'";
		$this->db->select('*');
		$this->db->from('pjs_items');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_item_user($username)
	{
		$condition = "user_name =" . "'" . $username."'";
		$this->db->select('*');
		$this->db->from('pjs_items');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
}

?>