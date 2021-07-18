<?php
//CRUD user
class Data_user extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');

		//Authorization

		if($this->session->userdata('user') == NULL ){
            redirect("login");
        }
        if($this->session->userdata('role') != 1){ 
            redirect(base_url('user/Dashboard_user'));
          }
		
    }
	public function index()
	{
		
		$data['barang'] = $this->model_barang->read_barang()->result();
		$this->load->view('Read_barang',$data);
	}
}
?>