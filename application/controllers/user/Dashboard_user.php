<?php
class Dashboard_user extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('user') == NULL ){
            redirect("login");
        }
   
        if($this->session->userdata('role') != 2 ){
            redirect("admin/Dashboard_admin");
        }
		
    }
	public function index()
	{
		

	}


}
?>