<?php
class Read_barang extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
		
    }
	public function index()
	{
		
		$data['barang'] = $this->model_barang->read_barang()->result();
		$this->load->view('Read_barang',$data);
	}
}

	?>