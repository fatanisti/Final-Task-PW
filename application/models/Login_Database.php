<?php

Class Login_Database extends CI_Model {

    // Baca tabel database
    function __construct()
    {
        $this->load->database();
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
<<<<<<< HEAD

    public function check_pass($old) {
        $this->db->select('*');
        $this->db->from('pjs_users');
        $this->db->where('user_pass',$old);
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
||||||| merged common ancestors

    public function check_pass($old) {
        //$this->db->select('*');
        //$this->db->from('pjs_users');
        $this->db->where('pjs_users.user_pass',$old);
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
=======
>>>>>>> 2ab956aca73a6fd87d92187c9d176e2a6fb34525
}

?>