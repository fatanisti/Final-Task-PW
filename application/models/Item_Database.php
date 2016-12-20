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
		//$this->db->join('pjs_users');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_item_id($id)
	{
		$condition = "id =" . "'" . $id."'";
		$this->db->select('*');
		$this->db->from('pjs_items');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_cart($username)
	{
		$this->db->where('user_name',$username);
		$this->db->delete('pjs_cart');
	}

	public function item_id($id)
	{
		$this->db->select('*');
		$this->db->from('pjs_items');
		//$this->db->join('pjs_users');
		$this->db->where('pjs_items.id',$id);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->row();	
		}else{
			return false;
		}
	}

	public function add_cart($data)
	{
		$this->db->insert('pjs_cart',$data);
	}

	public function get_cart($username)
	{
		$this->db->select('*');
		$this->db->where('user_name',$username);
		$this->db->from('pjs_cart');
		$query = $this->db->get();
		return $query->result();
	}
}

?>