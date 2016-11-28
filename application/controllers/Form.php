<?php

class Form extends CI_Controller {
        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('user_name', 'Nama Pengguna', 'trim|required|is_unique[pjs_users.user_name');
                $this->form_validation->set_rules('user_pass', 'Password', 'trim|required|min_length[8]',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[user_pass]');
                $this->form_validation->set_rules('first_name', 'Nama Depan', 'trim|required');
                $this->form_validation->set_rules('last_name', 'Nama Belakang', 'trim|required');
                $this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email|is_unique[pjs_users.user_email');

                if($this->form_validation->run() == FALSE) { 
                        //not validated - reload the view and display errors 
                        $this->load->view('signup'); } else { $this->load->database();
                        //load users_mode defined in modes/uses_model.php 
                        $this->load->model('new_user_model'); 
                        //create user 
                        $this->new_user_model->create_user();
                }
        }
}