<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
		
    }
	public function index()
	{
		
		$data['barang'] = $this->model_barang->show_data()->result();
		$this->load->view('welcome_message',$data);
	}
}
