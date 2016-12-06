<?php

Class Item extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper(array('url', 'form'));
		$this->load->model('Item_Database');
	}



	public function add_items_page()
	{
		$this->load->view('header');
        $this->load->view('sell_item');
        $this->load->view('footer');
	}

	public function jual_barang()
	{
		$val_sell = array(
            array(
                'field' => 'nama_barang',
                'label' => 'Nama Barang',
                'rules' => 'required',
                 'errors' => array('required' =>'Anda harus mengisi %s.'),
            ),
            array(
                'field' => 'harga',
                'label' => 'Harga',
                'rules' => 'required',
                'errors' => array('required' =>'Anda harus mengisi %s.'),
            ),
        );
		$config['upload_path']          = './assets/img';
        $config['allowed_types']        = 'jpg|png|bmp';
        $config['max_size']             = 2048;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

	    $this->form_validation->set_rules($val_sell);
	    $this->load->library('upload',$config);

	    if ($this->form_validation->run() == FALSE) {
	        $this->load->view('header');
	        $this->load->view('sell_item');
	        $this->load->view('footer');
	    }else{
	    	$this->upload->do_upload('images');
	    	$data_upload = $this->upload->data();
	    	$image_path = $data_upload['full_path'];
	        $data = array(
	        	'user_name' => $this->session->userdata('user_name'),
                'namaBarang' => $this->input->post('nama_barang') ,
                'kategori' => $this->input->post('kategori'),
                'deskripsiBrg' =>$this->input->post('desc'),           
                'hargaBarang' =>$this->input->post('harga'),
                'image' => $image_path,
                ); 

	        //$img = array('upload_data' => $this->upload->data(), );
	        $this->Item_Database->insert_item($data);

	        $this->load->view('header');
	        $this->load->view('layout');
	        $this->load->view('footer');
	    }
	}

	 

	 public function show_category($cat)
	 {
		if ($cat === NULL) {
			$this->load->view('header');
			$this->load->view('layout');
			$this->load->view('footer');
		}
		else
		{
			$data['item'] = $this->Item_Database->get_kategori($cat);
			$this->load->view('header');
			$this->load->view('category',$data);
			$this->load->view('footer');			
		}
	}
}

?>