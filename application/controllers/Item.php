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
            /*array(
                'field' => 'desc',
                'label' => 'Deskripsi Singkat'
            ),*/
        );

	    $this->form_validation->set_rules($val_sell);

	    if ($this->form_validation->run() == FALSE) {
	        $this->load->view('header');
	        $this->load->view('sell_item');
	        $this->load->view('footer');
	    }else{
	    	//$username = $this->session->userdata('user_name');s
	        $data = array(
	        	'user_name' => $this->session->userdata('user_name'),
                'namaBarang' => $this->input->post('nama_barang') ,
                'kategori' => $this->input->post('kategori'),
                'deskripsiBrg' =>$this->input->post('desc'),           
                'hargaBarang' =>$this->input->post('harga')
                ); 

	        $this->Item_Database->insert_item($data);

	        $this->load->view('header');
	        $this->load->view('layout');
	        $this->load->view('footer');
	    }
	}

	 

	 public function show_category()
	 {
	 	$cat=$this->get('cat');
		if ($cat === NULL) {
			$this->load->view('header');
			$this->load->view('layout');
			$this->load->view('footer');
		}
		else
		{
			$data = array($this->Item_Database->get_kategori($cat));
			$this->load->view('header');
			$this->load->view('category',$data);
			$this->load->view('footer');			
		}
	}
}

?>