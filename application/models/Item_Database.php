<?php

class Item_Database extends CI_Model {

	function __construct()
	{
		$this->load->database();
        $this->load->library('session');
	}

	public function insert_item($data) {
		$this->db->insert('pjs_items',$data);
	}

	public function show_item($data)
	{
		$condition = "nama_barang =" . "'" . $data['namaBarang'] . "' AND " . "user_name =" . "'" . $data['user_name'] . "'";
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
}

?>