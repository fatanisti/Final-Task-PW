<?php

//session_start();
class User extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();

        // Load librari helper
        $this->load->helper(array('form', 'url'));

        // Load librari form validation
        $this->load->library('form_validation');

        // Load librari session
        // $this->load->library('session');

        // Load database
        // $this->load->model('login_database');
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
                $this->load->view('signup');
        }

        // Validasi dan simpan data registrasi ke dalam database
        public function new_user_registration() 
        {
                // Check validation for user input in SignUp form
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('user_name', 'Nama Pengguna', 'trim|required|is_unique[pjs_users.user_name');
                $this->form_validation->set_rules('user_pass', 'Password', 'trim|required|min_length[8]',
                array('required' => 'Anda harus membuat sebuah %s.')
                );
                $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[user_pass]');
                $this->form_validation->set_rules('first_name', 'Nama Depan', 'trim|required');
                $this->form_validation->set_rules('last_name', 'Nama Belakang', 'trim|required');
                $this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email|is_unique[pjs_users.user_email]');
                
                if ($this->form_validation->run() == FALSE) {
                        $this->load->view('header');
                        $this->load->view('signup'); 
                        $this->load->view('footer');
                } else {
                        //load users_mode defined in modes/new_user_model.php 
                        $this->load->model('new_user_model'); 
                        //create user 
                        $this->new_user_model->create_user();
                        if ($insert == TRUE) {
                                $insert['message_display'] = 'Anda berhasil terdaftar!';
                                $this->load->view('login', $insert);
                        } else {
                                $insert['message_display'] = 'Registrasi gagal!';
                                $this->load->view('signup', $insert);
                        }
                }
        }

        // Check for user login process
        public function user_login_process() {

                $this->form_validation->set_rules('name', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                if ($this->form_validation->run() == FALSE) {
                        //if(isset($this->session->userdata['logged_in'])){
                          //      $this->load->view('index');
                        //} else {
                               $this->load->view('header');
                                $this->load->view('login');
                                $this->load->view('footer');
                        //}
                } else {
                        $data = array(
                                'user_name' => $this->input->post('name'),
                                'user_pass' => $this->input->post('password') );
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
}