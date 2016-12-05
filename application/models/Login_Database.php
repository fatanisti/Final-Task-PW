
<?php

Class Login_Database extends CI_Model {

    // Baca tabel database
    function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    public function login($data) {

        $condition = "user_name =" . "'" . $data['user_name'] . "' AND " . "user_pass =" . "'" . $data['user_pass'] . "'";
        $this->db->select('*');
        $this->db->from('pjs_users');
        $this->db->where($condition);
        //$this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    // Membaca data dari database
    public function read_user_information($username) {
        $condition = "user_name =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('pjs_users');
        $this->db->where($condition);
        //$this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function new_user($data)
    {
        $this->db->insert('pjs_users',$data);
    }

    public function check_pass() {
        $this->db->select('user_pass');
        $this->db->from('pjs_users');
        $this->db->where('pjs_users.user_name',$session_data['user_name']);
        //$this->db->limit(1);
        $query = $this->db->get('pjs_users');
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function update_pass($username,$data)
    {
        $this->db->select('*');
        $this->db->from('pjs_users');
        $this->db->where('user_name',$username);
        $this->db->update('pjs_users',$data);
    }
}

?>