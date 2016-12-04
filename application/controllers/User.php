<?php

class User extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();

        // Load librari helper
        $this->load->helper(array('form', 'url'));

        // Load librari form validation
        $this->load->library('form_validation');

        // Load librari session
        $this->load->library('session');

        // Load model
        $this->load->model('login_database');
        //$this->load->model('reg_model');
    }

    // Tampilkan Login Page
    public function user_login()
    {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
    }

    // Tampilkan Registration Page
    public function user_registration_show() 
    {
            $this->load->view('header');
            $this->load->view('signup');
            $this->load->view('footer');
    }

    // Validasi dan simpan data registrasi ke dalam database
    public function reg_user()
	{
	    $this->form_validation->set_rules('user_name', 'Username', 'required|is_unique');
	    $this->form_validation->set_rules('user_pass', 'Password', 'required|min_length[6];');
	    $this->form_validation->set_rules('confirm', 'Confirm Password', 'required');
	    $this->form_validation->set_rules('first_name', 'Nama Depan', 'required');
	    $this->form_validation->set_rules('last_name', 'Nama Belakang', 'required');
	    $this->form_validation->set_rules('user_email', 'Email', 'required|is_unique');

	    if ($this->form_validation->run() == FALSE) {
	        $this->load->view('header');
	        $this->load->view('signup');
	        $this->load->view('footer');
	    }else{
	        $data = array(
	                'user_name' => $this->input->post('user_name'),
	                'user_pass' => md5($this->input->post('user_pass')) ,
	                'first_name' =>$this->input->post('first_name'),
	                'last_name' =>$this->input->post('last_name'),
	                'user_email' =>$this->input->post('user_email') 
	                ); 

	        $this->login_database->new_user($data);

	        $this->load->view('header');
	        $this->load->view('login',$data);
	        $this->load->view('footer');
	    }


	}

    // Check for user login process
    public function user_login_process() {

            $this->form_validation->set_rules('name', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                    
               	$this->load->view('header');
                $this->load->view('login');
                $this->load->view('footer');
               
            } else {
                    $data = array(
                            'user_name' => $this->input->post('name'),
                            'user_pass' => md5($this->input->post('password')) );
                    $result = $this->login_database->login($data);
                    if ($result == TRUE) {
                            $username = $this->input->post('name');
                            $result = $this->login_database->read_user_information($username);
                            if ($result != false) {
                                    $session_data = array(
                                    'user_name' => $result[0]->user_name,
                                    'user_email' => $result[0]->user_email,
                                    );
                                    // Add user data in session
                                    $this->session->set_userdata('logged_in', $session_data);
                                    $this->load->view('header');
                                    $this->load->view('layout');
                                    $this->load->view('footer');
                                    }
                            } else {
                                    $data = array('error_message' => 'Nama Pengguna atau Password Salah');
                                    $this->load->view('header');
                                    $this->load->view('login', $data);
                                    $this->load->view('footer');
                            }
                    }
    }

    public function logout() {
            $sess_array = array('user_name' => '');
            $this->session->unset_userdata('logged_in', $sess_array);
            $insert['message_display'] = 'Anda telah berhasil logout.';
            $this->load->view('login', $insert);
    }

    public function user()
    {
        $this->load->view('header');
        $this->load->view('user');
        $this->load->view('footer');
    }

    public function sell()
    {
        $this->load->view('header');
        $this->load->view('sell_item');
        $this->load->view('footer');
    }

    public function cp()
    {
        $this->load->view('header');
        $this->load->view('change_password');
        $this->load->view('footer');
    }
}