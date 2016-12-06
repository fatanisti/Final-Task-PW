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
        $val_reg = array(
                            array(
                                'field' => 'user_name',
                                'label' => 'Username',
                                'rules' => 'required|is_unique[pjs_users.user_name]',
                                 'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'is_unique' => '%s sudah dipakai'),
                            ),
                            array(
                                'field' => 'user_pass',
                                'label' => 'Password',
                                'rules' => 'required|min_length[6]',
                                'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'min_length' => '%s minimal 6 karakter'),
                            ),
                            array(
                                'field' => 'confirm',
                                'label' => 'Konfirmasi Password',
                                'rules' => 'required|matches[user_pass]',
                                 'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'matches' => '%s tidak sesuai dengan password'),
                            ),
                            array(
                                'field' => 'first_name',
                                'label' => 'Nama Awal',
                                'rules' => 'required',
                                 'errors' => array('required' =>'Anda harus mengisi %s.'),
                            ),
                            array(
                                'field' => 'last_name',
                                'label' => 'Nama Akhir',
                                'rules' => 'required',
                                 'errors' => array('required' =>'Anda harus mengisi %s.'
                                                    ),
                            ),
                            array(
                                'field' => 'user_email',
                                'label' => 'Email',
                                'rules' => 'required|is_unique[pjs_users.user_email]',
                                 'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'is_unique' => '%s sudah dipakai'),
                            ),
  
                    );

        $this->form_validation->set_rules($val_reg);


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

	        redirect('login');
	    }


	}

    // Check for user login process
    public function user_login_process() {

        $val_login = array(
                            array(
                                'field' => 'name',
                                'label' => 'Username',
                                'rules' => 'required',
                                 'errors' => array('required' =>'Anda harus mengisi %s.'),
                            ),
                            array(
                                'field' => 'password',
                                'label' => 'Password',
                                'rules' => 'required',
                                'errors' => array('required' =>'Anda harus mengisi %s.'),
                            ),
  
                    );
        $this->form_validation->set_rules($val_login);

        if ($this->form_validation->run() == FALSE) {
                
           	$this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
           
        } else {
            $data = array(
                'user_name' => $this->input->post('name'),
                'user_pass' => md5($this->input->post('password')) 
                );
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
                    $this->session->set_userdata($session_data);
                    redirect('');
                }
            } else {
                $data = array('message_display' => 'Nama Pengguna atau Password Salah');
                
                $this->session->set_userdata( $data );
                redirect('login');
            }
        }
    }

    public function logout() {

        $sess_array = array('user_name' => '', );
        $this->session->userdata($sess_array);
        $this->session->sess_destroy();
        $data = array('message_display' => 'Anda Berhasil Logout');        
        $this->session->set_userdata( $data );
        redirect('login');
    }

    public function user()
    {
        $this->load->view('header');
        $this->load->view('user');
        $this->load->view('footer');
    }
   
    public function cp_index()
    {
        $this->load->view('header');
        $this->load->view('change_password');
        $this->load->view('footer');
    }

    public function change_pass()
    {
        $val_change = array(
                array(
                    'field' =>'email' ,
                    'label' => 'Email',
                    'rules' =>'required',
                    ),
                array('field' => 'old', 
                      'label' => 'Password lama',
                      'rules' => 'required',
                      'errors' => array(
                                    'required' => '%s harus diisi'),
                ),
                array(
                    'field' => 'new' ,
                    'label' => 'Password baru',
                    'rules' => 'required|min_length[6]',
                    'errors' => array('min_length' => 'Password minimal 6 karakter'),
                ),
                array('field' => 'confirm',
                        'label' => 'Konfirmasi Password Baru',
                        'rules' => 'required|matches[new]',
                        'errors' => array('matches' => 'Konfirmasi password harus sesuai password' , ),
                    )

                    );
        $this->form_validation->set_rules($val_change);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('change_password');
            $this->load->view('footer');
        } else {
            $mail = $this->input->post('email'); 
            $old = md5($this->input->post('old'));
            $check = $this->login_database->check_pass($mail,$old);
            if ($check != true) {
                $this->load->view('header');
                $this->load->view('change_password');
                $this->load->view('footer');
            }else{
                //$username = $this->session->userdata($session_data['user_name']);
                $data = array('user_pass' => md5($this->input->post('new')));
                $this->login_database->update_pass($data,$mail);
                $this->load->view('header');
                $this->load->view('layout');
                $this->load->view('footer');
            }
            
        }
    }

        
    public function detail()
    {
        $this->load->view('header');
        $this->load->view('detail');
        $this->load->view('footer');
    }
}