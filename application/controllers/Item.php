<?php

Class Item extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
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
		$val_reg = array(
			array(
	            'field' => 'kategori',
	            'label' => 'Kategori',
	            'rules' => 'required',
	             'errors' => array('required' =>'Anda harus memilih %s.'
	                                ),
	        ),
            array(
                'field' => 'namaBarang',
                'label' => 'Nama Barang',
                'rules' => 'required',
                 'errors' => array('required' =>'Anda harus mengisi %s.'),
            ),
            array(
                'field' => 'hargaBarang',
                'label' => 'Harga',
                'rules' => 'required',
                'errors' => array('required' =>'Anda harus mengisi %s.'),
            ),
            array(
                'field' => 'deskripsiBrg',
                'label' => 'Deskripsi Singkat'
            ),
        );

	    $this->form_validation->set_rules($val_reg);

	    if ($this->form_validation->run() == FALSE) {
	        $this->load->view('header');
	        $this->load->view('sell_item');
	        $this->load->view('footer');
	    }else{
	        $data = array(
                'kategori' => $this->input->post('kategori'),
                'namaBarang' => $this->input->post('namaBarang') ,
                'hargaBarang' =>$this->input->post('hargaBarang'),
                'deskripsiBrg' =>$this->input->post('deskripsiBrg')           
                ); 

	        $this->Item_Database->insert_item($data);

	        redirect('home');
	    }
	}
	
}

?>