<?php
class new_user_model extends CI_Model 
{
    public function create_user(){
        $username = $this->input->post('user_name');
        $clear_pass = $this->input->post('user_pass');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('user_email');
        $member_data = array( 'user_name' => $username, 'user_pass' => md5($clear_pass), 'first_name' => $first_name, 'last_name' => $last_name, 'user_email' => $email );
        $insert = $this->db->insert('pjs_users', $member_data);
        return $insert; 
    }
}
?>